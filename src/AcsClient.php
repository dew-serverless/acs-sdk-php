<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Http\Client\Common\PluginClient;
use Http\Client\Promise\HttpFulfilledPromise;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use InvalidArgumentException;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use RuntimeException;

/**
 * @phpstan-type TCredentials array{
 *   key: string,
 *   secret: string,
 *   token?: string
 * }
 * @phpstan-type TConfig array{
 *   region: string,
 *   endpoint?: string,
 *   credentials: TCredentials,
 *   version?: string,
 *   http_client?: \Psr\Http\Client\ClientInterface
 * }
 */
abstract class AcsClient
{
    private ApiDocs $docs;

    private ?string $region = null;

    private string $endpoint;

    private ClientInterface $httpClient;

    private readonly RequestFactoryInterface $messageFactory;

    private readonly StreamFactoryInterface $streamFactory;

    private readonly ResultProvider $resultProvider;

    /**
     * @param  TConfig  $config
     */
    public function __construct(
        private array $config
    ) {
        $this->docs = ApiDocsResolver::make()
            ->resolve(basename(str_replace('\\', '/', static::class)), $config);
        $this->region = $config['region'];
        $this->endpoint = $config['endpoint'] ?? $this->docs->getEndpoint($this->region);
        $this->httpClient = $config['http_client'] ?? Psr18ClientDiscovery::find();
        $this->messageFactory = Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $this->resultProvider = new ResultProvider($this->docs);
    }

    /**
     * @param  mixed[]  $arguments
     */
    private function execute(Api $api, array $arguments): mixed
    {
        return $this->executeAsync($api, $arguments)->wait();
    }

    /**
     * @param  mixed[]  $arguments
     */
    private function executeAsync(Api $api, array $arguments): Promise
    {
        $request = $this->messageFactory->createRequest(
            'GET', $this->appendDefaultSchemeIfNeeded($this->endpoint)
        );

        $client = new PluginClient($this->httpClient, [
            new Plugins\ConfigureAction($this->docs, $api, $this->streamFactory, $arguments),
            new Plugins\SignRequest($this->docs, $api, $this->config, $arguments),
        ]);

        return (new FulfilledPromise($client->sendAsyncRequest($request)))
            ->then(
                function (HttpFulfilledPromise $promise) use ($api): Result {
                    $response = $promise->wait();

                    if (! $response instanceof ResponseInterface) {
                        throw new RuntimeException('Could not process the response.');
                    }

                    return $this->resultProvider->make($response, $api);
                }
            );
    }

    private function appendDefaultSchemeIfNeeded(string $endpoint): string
    {
        $parsed = parse_url($endpoint);

        if (isset($parsed['scheme'])) {
            return $endpoint;
        }

        return 'https://'.$endpoint;
    }

    /**
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $method, array $arguments = []): mixed
    {
        $action = ucfirst($method);
        $async = false;

        if (str_ends_with($action, 'Async')) {
            $action = substr($action, 0, -5);
            $async = true;
        }

        $argument = $arguments[0] ?? [];

        if (! is_array($argument)) {
            throw new InvalidArgumentException(
                "The $method API expects an array argument."
            );
        }

        $api = $this->docs->getApi($action);

        return $async
            ? $this->executeAsync($api, $arguments)
            : $this->execute($api, $argument);
    }
}

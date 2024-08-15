<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Http\Client\Common\Plugin\HeaderSetPlugin;
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
use Psr\Http\Message\UriFactoryInterface;
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
    public const int MAJOR_VERSION = 0;

    protected ApiDocs $docs;

    protected string $region;

    protected string $endpoint;

    protected readonly ClientInterface $httpClient;

    protected readonly RequestFactoryInterface $requestFactory;

    protected readonly StreamFactoryInterface $streamFactory;

    protected readonly UriFactoryInterface $uriFactory;

    /**
     * @var class-string<\Dew\Acs\AcsException>
     */
    private readonly string $exceptionClass;

    private readonly ResultProvider $resultProvider;

    /**
     * @param  TConfig  $config
     */
    public function __construct(
        protected array $config
    ) {
        $this->docs = $this->resolveApiDocs();
        $this->region = $config['region'];
        $this->endpoint = $this->resolveEndpoint();
        $this->httpClient = $config['http_client'] ?? Psr18ClientDiscovery::find();
        $this->requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $this->uriFactory = Psr17FactoryDiscovery::findUriFactory();
        $this->exceptionClass = $this->discoverExceptionClass();
        $this->resultProvider = new ResultProvider($this->docs, $this->exceptionClass);
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    protected function resolveApiDocs(): ApiDocs
    {
        $clientClass = basename(str_replace('\\', '/', static::class));

        return ApiDocsResolver::make()->resolve($clientClass, $this->config);
    }

    protected function resolveEndpoint(): string
    {
        return $this->config['endpoint'] ?? $this->docs->getEndpoint($this->region);
    }

    /**
     * @return class-string<\Dew\Acs\AcsException>
     */
    private function discoverExceptionClass(): string
    {
        $clientClass = static::class;

        if (str_ends_with($clientClass, 'Client')) {
            $exceptionClass = substr($clientClass, 0, -6).'Exception';

            if (class_exists($exceptionClass) &&
                is_subclass_of($exceptionClass, AcsException::class)) {
                return $exceptionClass;
            }
        }

        return AcsException::class;
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
        $request = $this->requestFactory->createRequest(
            'GET', $this->appendDefaultSchemeIfNeeded($this->endpoint)
        );

        $client = new PluginClient($this->httpClient, [
            new Plugins\ConfigureUserAgent(),
            new Plugins\ConfigureAction($this->docs, $api, $this->streamFactory, $arguments),
            new HeaderSetPlugin(is_array($arguments['@headers'] ?? null) ? $arguments['@headers'] : []),
            new Plugins\ExecuteSigningHook($this),
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

    protected function appendDefaultSchemeIfNeeded(string $endpoint): string
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

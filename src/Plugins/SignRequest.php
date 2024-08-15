<?php

declare(strict_types=1);

namespace Dew\Acs\Plugins;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\Signatures\NeedsApiContext;
use Dew\Acs\Signatures\NeedsArguments;
use Dew\Acs\Signatures\SignsRequest;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

final readonly class SignRequest implements Plugin
{
    /**
     * @param  array<string, mixed>  $config
     * @param  array<string, mixed>  $arguments
     */
    public function __construct(
        private ApiDocs $docs,
        private Api $api,
        private array $config,
        private array $arguments
    ) {
        //
    }

    /**
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $next
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $first
     */
    #[\Override]
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $auth = array_key_first($this->api->security[0] ?? []);

        if (is_string($auth)) {
            $signer = $this->configureSigner($this->makeSigner($auth));

            $request = $signer->signRequest($request, $this->config);
        }

        return $next($request);
    }

    private function makeSigner(string $auth): SignsRequest
    {
        $product = $this->docs->getNamespace();

        /** @var class-string<\Dew\Acs\Signatures\SignsRequest>[] */
        $candidates = [
            "\\Dew\\Acs\\{$product}\\{$auth}Signature",
            "\\Dew\\Acs\\Signatures\\{$auth}Signature",
        ];

        foreach ($candidates as $class) {
            if (class_exists($class)) {
                return new $class();
            }
        }

        throw new InvalidArgumentException("Unsupported signature $auth.");
    }

    private function configureSigner(SignsRequest $signer): SignsRequest
    {
        if ($signer instanceof NeedsApiContext) {
            $signer->setApiContext($this->docs, $this->api);
        }

        if ($signer instanceof NeedsArguments) {
            $signer->setArguments($this->arguments);
        }

        return $signer;
    }
}

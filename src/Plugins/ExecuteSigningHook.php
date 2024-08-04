<?php

declare(strict_types=1);

namespace Dew\Acs\Plugins;

use Dew\Acs\AcsClient;
use Dew\Acs\WithSigngingHook;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Override;
use Psr\Http\Message\RequestInterface;

final readonly class ExecuteSigningHook implements Plugin
{
    public function __construct(
        private AcsClient $client
    ) {
        //
    }

    /**
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $next
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $first
     */
    #[Override]
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        if ($this->client instanceof WithSigngingHook) {
            $request = $this->client->handleSignging($request);
        }

        return $next($request);
    }
}

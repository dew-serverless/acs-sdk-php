<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use InvalidArgumentException;

/**
 * @phpstan-import-type TCredentials from \Dew\Acs\AcsClient
 * @phpstan-type TConfig array{
 *   instance?: string,
 *   region?: string,
 *   endpoint?: string,
 *   credentials: TCredentials,
 *   http_client?: \Psr\Http\Client\ClientInterface
 * }
 */
final class TablestoreInstance
{
    private string $endpoint;

    /**
     * @param  TConfig  $config
     */
    public function __construct(
        private array $config
    ) {
        $this->endpoint = $this->resolveEndpoint($this->config);
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @param  TConfig  $config
     */
    private function resolveEndpoint(array $config): string
    {
        if (isset($config['endpoint'])) {
            return $config['endpoint'];
        }

        if (isset($config['instance']) && isset($config['region'])) {
            return $this->makeDualStackEndpoint($config['instance'], $config['region']);
        }

        throw new InvalidArgumentException('Could not resolve the endpoint.');
    }

    private function makeDualStackEndpoint(string $instance, string $region): string
    {
        return sprintf('%s.%s.tablestore.aliyuncs.com', $instance, $region);
    }
}

<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\TablestoreClient;
use Http\Mock\Client;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\AcsClient
 */
#[CoversClass(TablestoreClient::class)]
final class TablestoreClientTest extends TestCase
{
    public function test_endpoint_resolution(): void
    {
        $this->assertSame(
            'tablestore.cn-hangzhou.aliyuncs.com',
            $this->makeClient(['region' => 'cn-hangzhou'])->getEndpoint()
        );
        $this->assertSame(
            'tablestore.cn-shenzhen.aliyuncs.com',
            $this->makeClient(['region' => 'cn-shenzhen'])->getEndpoint()
        );
        $this->assertSame(
            'example.com',
            $this->makeClient(['region' => 'us-west-1', 'endpoint' => 'example.com'])->getEndpoint()
        );
    }

    /**
     * @param  TConfig|array<string, mixed>  $config
     */
    private function makeClient(array $config = []): TablestoreClient
    {
        /** @var TConfig */
        $config = [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            'http_client' => new Client(),
            ...$config,
        ];

        return new TablestoreClient($config);
    }
}

<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\TablestoreInstance;
use Http\Mock\Client;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\Tablestore\TablestoreInstance
 */
#[CoversClass(TablestoreInstance::class)]
final class TablestoreInstanceTest extends TestCase
{
    public function test_endpoint(): void
    {
        $client = $this->makeClient([
            'endpoint' => 'myinstance.cn-somehwere.ots.aliyuncs.com',
        ]);
        $this->assertSame('myinstance.cn-somehwere.ots.aliyuncs.com', $client->getEndpoint());
    }

    public function test_endpoint_region_instance(): void
    {
        $client = $this->makeClient([
            'region' => 'cn-somehwere',
            'instance' => 'myinstance',
        ]);
        $this->assertSame('myinstance.cn-somehwere.tablestore.aliyuncs.com', $client->getEndpoint());
    }

    /**
     * @param  TConfig|array<string, mixed>  $config
     */
    private function makeClient(array $config): TablestoreInstance
    {
        /** @var TConfig */
        $config = [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            'instance' => 'myinstance',
            'http_client' => new Client(),
            ...$config,
        ];

        return new TablestoreInstance($config);
    }
}

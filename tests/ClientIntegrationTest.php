<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\AcsClient;
use Dew\Acs\ApiDocsResolver;
use Generator;
use Http\Mock\Client;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @phpstan-import-type TProductInfo from \Dew\Acs\ApiDocsResolver
 */
#[CoversClass(AcsClient::class)]
final class ClientIntegrationTest extends TestCase
{
    /**
     * @param  class-string<\Dew\Acs\AcsClient>  $fqdn
     */
    #[DataProvider('clientProvider')]
    public function test_client_can_be_resolved(string $fqdn): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not find Foo API.');
        $client = new $fqdn([
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            'endpoint' => 'example.com',
            'http_client' => new Client(),
        ]);
        $client->__call('foo', []);
    }

    /**
     * @return \Generator<string, class-string<\Dew\Acs\AcsClient>[]>
     */
    public static function clientProvider(): Generator
    {
        $products = require __DIR__.'/../data/products.php';

        foreach ($products as $product) {
            /** @var TProductInfo $product */
            $name = ApiDocsResolver::getNormalizedProductName($product['code']);

            /** @var class-string<\Dew\Acs\AcsClient> */
            $fqdn = "\\Dew\\Acs\\{$name}\\{$name}Client";

            if (! class_exists($fqdn)) {
                throw new RuntimeException("Missing $name client.");
            }

            yield $product['code'] => [$fqdn];
        }
    }
}

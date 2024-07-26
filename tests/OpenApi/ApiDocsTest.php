<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\OpenApi;

use Dew\Acs\OpenApi\ApiDocs;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(ApiDocs::class)]
final class ApiDocsTest extends TestCase
{
    #[TestWith(['foo', 'Foo'])]
    #[TestWith(['foo-open', 'FooOpen'])]
    #[TestWith(['Foo', 'Foo'])]
    #[TestWith(['FooBar', 'FooBar'])]
    #[TestWith(['FOO', 'FOO'])]
    #[TestWith(['fooBar', 'FooBar'])]
    public function test_get_namespace(string $code, string $expected): void
    {
        $doc = ApiDocs::make([
            'info' => [
                'style' => 'RPC',
                'product' => $code,
                'version' => '2024-01-01',
            ],
            'directories' => [],
            'components' => [],
            'apis' => [],
            'endpoints' => [],
        ]);
        $this->assertSame($expected, $doc->getNamespace());
    }
}

<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\Arr;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(Arr::class)]
final class ArrTest extends TestCase
{
    /**
     * @param  mixed[]  $array
     */
    #[TestWith(['foo', ['value' => 'foo'], 'value'])]
    #[TestWith(['foo', ['value' => ['nested' => 'foo']], 'value.nested'])]
    #[TestWith(['foo', ['value.nested' => 'foo', 'value' => ['nested' => 'bar']], 'value.nested'])]
    #[TestWith([['nested' => 'foo'], ['value' => ['nested' => 'foo']], 'value'])]
    #[TestWith(['foo', ['value' => ['foo', 'bar']], 'value.0'])]
    #[TestWith(['foo', ['foo'], 0])]
    #[TestWith(['foo', ['foo'], '0'])]
    #[TestWith(['foo', [], 'value', 'foo'])]
    #[TestWith([null, [], 'value'])]
    #[TestWith([null, [], 'value.not.exists'])]
    public function test_get(mixed $expected, array $array, int|string $key, mixed $default = null): void
    {
        $this->assertSame($expected, Arr::get($array, $key, $default));
    }
}

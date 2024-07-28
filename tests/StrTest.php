<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\Str;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(Str::class)]
final class StrTest extends TestCase
{
    #[TestWith(['foo', 'foo'])]
    #[TestWith(['foo bar', 'foo-bar'])]
    #[TestWith(['foo-bar', 'foo-bar'])]
    #[TestWith(['foo_bar', 'foo-bar'])]
    #[TestWith([' foo ', 'foo'])]
    #[TestWith([' foo', 'foo'])]
    #[TestWith(['foo ', 'foo'])]
    #[TestWith([' foo bar ', 'foo-bar'])]
    #[TestWith(['foo!bar', 'foo-bar'])]
    #[TestWith(['foo--bar', 'foo-bar'])]
    #[TestWith(['-foo-bar', 'foo-bar'])]
    #[TestWith(['--foo-bar', 'foo-bar'])]
    #[TestWith(['foo-bar-', 'foo-bar'])]
    #[TestWith(['foo-bar--', 'foo-bar'])]
    #[TestWith(['--foo-bar--', 'foo-bar'])]
    #[TestWith(['foo_bar baz', 'foo-bar-baz'])]
    #[TestWith(['foo_bar-baz', 'foo-bar-baz'])]
    #[TestWith(['fooBar', 'foo-bar'])]
    #[TestWith(['FooBar', 'foo-bar'])]
    #[TestWith(['Foo123Bar', 'foo123-bar'])]
    #[TestWith(['123Foo', '123-foo'])]
    #[TestWith(['123foo', '123foo'])]
    #[TestWith(['1-23foo', '1-23foo'])]
    public function test_kebab(string $str, string $expected): void
    {
        $this->assertSame($expected, Str::kebab($str));
    }

    #[TestWith(['Foo', 'Foo'])]
    #[TestWith(['foo', 'Foo'])]
    #[TestWith(['FooBar', 'FooBar'])]
    #[TestWith(['foo-bar', 'FooBar'])]
    #[TestWith(['foo!bar', 'FooBar'])]
    #[TestWith([' foo', 'Foo'])]
    #[TestWith(['foo ', 'Foo'])]
    #[TestWith([' foo ', 'Foo'])]
    #[TestWith(['-foo', 'Foo'])]
    #[TestWith(['foo-', 'Foo'])]
    #[TestWith(['-foo-', 'Foo'])]
    #[TestWith(['--foo--', 'Foo'])]
    #[TestWith(['foo123bar', 'Foo123Bar'])]
    #[TestWith(['foo123Bar', 'Foo123Bar'])]
    #[TestWith(['123fooBar', '123FooBar'])]
    public function test_studly(string $str, string $expected): void
    {
        $this->assertSame($expected, Str::studly($str));
    }
}

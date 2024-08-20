<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\CompressionException;
use Dew\Acs\Sls\Lz4;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Lz4::class)]
final class Lz4Test extends TestCase
{
    public function test_encode_and_decode(): void
    {
        $lz4 = new Lz4();
        $data = str_repeat('a', $len = 64);
        $encoded = $lz4->encode($data);
        $this->assertTrue(strlen($encoded) < $len);
        $this->assertTrue($encoded !== $data);
        $decoded = $lz4->decode($encoded, $len);
        $this->assertTrue($decoded === $data);
    }

    public function test_decode_requires_original_data_size(): void
    {
        $this->expectException(CompressionException::class);
        $this->expectExceptionMessage('Requires original data size.');
        $lz4 = new Lz4();
        $lz4->decode($lz4->encode(str_repeat('a', 64)));
    }
}

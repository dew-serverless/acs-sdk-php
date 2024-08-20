<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Override;

final class Lz4 implements Compression
{
    public const int LZ4_FAST_COMPRESSION = 0;

    /**
     * {@inheritDoc}
     */
    #[Override]
    public static function supports(): bool
    {
        return extension_loaded('lz4');
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public static function threshold(): int
    {
        return 256;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function encode(string $data, ?int $level = null): string
    {
        $level = is_int($level) ? $level : self::LZ4_FAST_COMPRESSION;
        $encoded = lz4compress($data, $level);

        if ($encoded === false) {
            throw new CompressionException('Could not encode the data.');
        }

        return $encoded;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function decode(string $data, ?int $maxLength = null): string
    {
        if ($maxLength === null) {
            throw new CompressionException('Requires original data size.');
        }

        $decoded = lz4uncompress($data, $maxLength);

        if ($decoded === false) {
            throw new CompressionException('Could not decode the data.');
        }

        return $decoded;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function format(): string
    {
        return 'lz4';
    }
}

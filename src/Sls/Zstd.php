<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Override;

use function Zstd\compress;
use function Zstd\uncompress;

final class Zstd implements Compression
{
    public const int DEFAULT_COMPRESSION_LEVEL = 3;

    /**
     * {@inheritDoc}
     */
    #[Override]
    public static function supports(): bool
    {
        return extension_loaded('zstd');
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
        $level = is_int($level) ? $level : self::DEFAULT_COMPRESSION_LEVEL;
        $encoded = compress($data, $level);

        if ($encoded === false) {
            throw new CompressionException('Could not encode the data.');
        }

        return $encoded;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function decode(string $data): string
    {
        $decoded = uncompress($data);

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
        return 'zstd';
    }
}

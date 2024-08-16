<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Override;

final class Deflate implements Compression
{
    public const int DEFAULT_COMPRESSION_LEVEL = 6;

    /**
     * {@inheritDoc}
     */
    #[Override]
    public static function supports(): bool
    {
        return extension_loaded('zlib');
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
        $encoded = gzcompress($data, $level);

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
        $decoded = gzuncompress($data);

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
        return 'deflate';
    }
}

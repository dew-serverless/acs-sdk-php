<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Override;

use function Zstd\compress;
use function Zstd\uncompress;

final class Zstd implements Compression
{
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
        $level = is_int($level) ? $level : 3;
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

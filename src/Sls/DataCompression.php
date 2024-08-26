<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

enum DataCompression: string
{
    case LZ4 = 'lz4';
    case ZSTD = 'zstd';
    case DEFLATE = 'deflate';
    case GZIP = 'gzip';
    case RAW = '';

    /**
     * The data compression algorithms in order of priority.
     *
     * @return self[]
     */
    public static function priority(): array
    {
        return [
            self::LZ4,
            self::ZSTD,
            self::DEFLATE,
            self::RAW,
        ];
    }

    /**
     * @return class-string<\Dew\Acs\Sls\Compression>
     */
    public function toFqcn(): string
    {
        return match ($this) {
            self::LZ4 => Lz4::class,
            self::ZSTD => Zstd::class,
            self::DEFLATE, self::GZIP => Deflate::class,
            self::RAW => Raw::class,
        };
    }
}

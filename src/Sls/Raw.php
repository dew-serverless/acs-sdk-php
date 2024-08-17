<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Override;

final class Raw implements Compression
{
    /**
     * {@inheritDoc}
     */
    #[Override]
    public static function supports(): bool
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public static function threshold(): int
    {
        return 0;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function encode(string $data, ?int $level = null): string
    {
        return $data;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function decode(string $data): string
    {
        return $data;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function format(): string
    {
        return '';
    }
}

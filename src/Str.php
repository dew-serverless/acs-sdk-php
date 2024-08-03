<?php

declare(strict_types=1);

namespace Dew\Acs;

use UnexpectedValueException;

/**
 * @internal
 */
final class Str
{
    public static function kebab(string $str): string
    {
        $result = preg_replace('/[^A-Za-z0-9]+/', ' ', $str)
            ?? throw new UnexpectedValueException();

        $result = trim($result);

        $result = preg_replace('/\s+/', '-', $result)
            ?? throw new UnexpectedValueException();

        $result = preg_replace('/(?<!^)[A-Z]/', '-$0', $result)
            ?? throw new UnexpectedValueException();

        return strtolower($result);
    }

    public static function studly(string $str): string
    {
        $result = preg_replace('/[^A-Za-z0-9]+/', ' ', $str)
            ?? throw new UnexpectedValueException();

        $result = preg_replace('/(?<!^)[\d]+/', '$0 ', $result)
            ?? throw new UnexpectedValueException();

        $result = ucwords($result);

        return str_replace(' ', '', $result);
    }

    public static function is(string $mask, string $str): bool
    {
        $pattern = str_replace(preg_quote('*'), '.*', preg_quote($mask));

        return preg_match("/^$pattern$/", $str) === 1;
    }
}

<?php

declare(strict_types=1);

namespace Dew\Acs;

/**
 * @internal
 */
final class Arr
{
    /**
     * @template TKey of int|string
     * @template TValue
     * @template TDefault
     * @param  array<TKey, TValue>  $array
     * @param  TKey  $key
     * @param  TDefault  $default
     * @return TValue|TDefault
     */
    public static function get(array $array, int|string $key, mixed $default = null): mixed
    {
        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        $result = $array;
        $segments = explode('.', (string) $key);

        foreach ($segments as $segment) {
            if (is_array($result) && array_key_exists($segment, $result)) {
                $result = $result[$segment];
            } else {
                return $default;
            }
        }

        return $result;
    }
}

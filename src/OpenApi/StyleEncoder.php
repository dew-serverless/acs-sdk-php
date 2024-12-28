<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

final class StyleEncoder
{
    /**
     * Encode data into a JSON string.
     *
     * @param  array<mixed>  $data
     */
    public function encodeJson(array $data): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR);
    }

    /**
     * Encode data with "dot" notation.
     *
     * @param  array<mixed>  $data
     * @return array<mixed>
     */
    public function encodeRepeatList(array $data, string $prefix = ''): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            $slug = $prefix !== '' ? $prefix.'.' : '';
            $slug .= is_int($key) ? $key + 1 : $key;

            if (is_array($value)) {
                $result = [...$result, ...$this->encodeRepeatList($value, $slug)];
            } else {
                $result[$slug] = $value;
            }
        }

        return $result;
    }

    /**
     * Encode a list of items with a comma character.
     *
     * @param  array<int, mixed>  $data
     */
    public function encodeSimple(array $data): string
    {
        return implode(',', $data);
    }
}

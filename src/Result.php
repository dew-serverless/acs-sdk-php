<?php

declare(strict_types=1);

namespace Dew\Acs;

use ArrayAccess;
use Psr\Http\Message\ResponseInterface;
use RuntimeException;

/**
 * @template TData of array
 * @implements \ArrayAccess<key-of<TData>, value-of<TData>>
 */
final class Result implements ArrayAccess
{
    private ?ResponseInterface $response = null;

    /**
     * @param  TData  $data
     */
    public function __construct(
        private array $data = []
    ) {
        //
    }

    /**
     * @template TDefault
     * @param  key-of<TData>|string  $name
     * @param  TDefault  $default
     * @return value-of<TData>|TDefault
     */
    public function get($name, mixed $default = null): mixed
    {
        return Arr::get($this->data, $name, $default);
    }

    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value): void
    {
        throw new RuntimeException('Could not mutate the result.');
    }

    public function offsetUnset($offset): void
    {
        throw new RuntimeException('Could not mutate the result.');
    }

    /**
     * @return mixed[]
     */
    public function getDecodedData(): array
    {
        return $this->data;
    }

    /**
     * @return self<TData>
     */
    public function setResponse(ResponseInterface $response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }

    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    public function __get(string $name): mixed
    {
        $value = $this->get($name);

        if ($value === null) {
            return null;
        }

        if (is_array($value) && ! array_is_list($value)) {
            return (object) $value;
        }

        return $value;
    }
}

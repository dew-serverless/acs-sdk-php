<?php

declare(strict_types=1);

namespace Dew\Acs;

use ArrayAccess;
use Psr\Http\Message\ResponseInterface;
use RuntimeException;

/**
 * @implements ArrayAccess<int|string, mixed>
 */
final class Result implements ArrayAccess
{
    private ?ResponseInterface $response = null;

    /**
     * @param  mixed[]  $data
     */
    public function __construct(
        private array $data = []
    ) {
        //
    }

    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return $this->data[$offset] ?? null;
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

    public function setResponse(ResponseInterface $response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }

    public function __get(string $property): mixed
    {
        $value = $this->data[$property] ?? null;

        if ($value === null) {
            return null;
        }

        if (is_array($value) && ! array_is_list($value)) {
            return (object) $value;
        }

        return $value;
    }
}

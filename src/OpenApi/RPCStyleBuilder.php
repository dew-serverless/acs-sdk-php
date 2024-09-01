<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

use InvalidArgumentException;
use Override;
use RuntimeException;
use Stringable;

final readonly class RPCStyleBuilder implements ApiDataBuilder
{
    private SchemaReader $schemaReader;

    private string $scheme;

    public function __construct(
        private ApiDocs $docs,
        private Api $api
    ) {
        $this->schemaReader = new SchemaReader();
        $this->scheme = in_array('https', $this->api->schemes, strict: true)
            ? 'https'
            : $this->api->schemes[0];
    }

    /**
     * @param  mixed[]  $arguments
     */
    #[Override]
    public function build(array $arguments): ApiData
    {
        $method = strtoupper($this->api->methods[0]);
        $query = [];
        $headers = [];
        $formData = [];
        $body = '';

        foreach ($this->api->parameters as $parameter) {
            $value = $arguments[$parameter->name] ?? null;

            if ($parameter->schema->required === true && $value === null) {
                throw new InvalidArgumentException("The {$parameter->name} is required.");
            }

            if ($value === null) {
                continue;
            }

            switch ($parameter->in) {
                case ParameterLocation::QUERY:
                    $value = $this->getParameterValue($parameter, $value);
                    $query = [
                        ...$query,
                        ...is_array($value)
                            ? $value
                            : [$parameter->name => $this->encodeQueryParameter($value)],
                    ];
                    break;
                case ParameterLocation::FORM:
                    $formData[$parameter->name] = $this->getParameterValue($parameter, $value);
                    break;
                default:
                    throw new RuntimeException("Unsupported parameter location {$parameter->in->value}.");
            }
        }

        if ($formData !== []) {
            $method = 'POST';
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';
            $body = http_build_query($formData);
        }

        return new ApiData(
            host: null,
            scheme: $this->scheme,
            method: $method,
            path: '/',
            headers: $headers,
            query: http_build_query($query, encoding_type: PHP_QUERY_RFC3986),
            body: $body
        );
    }

    private function getParameterValue(Parameter $parameter, mixed $value): mixed
    {
        $value = $this->schemaReader
            ->getProperty($parameter->schema, $value, $parameter->name);

        if (! is_array($value)) {
            return $value;
        }

        return match ($parameter->style) {
            'repeatList', 'flat' => $this->encodeRepeatListStyle(
                array_is_list($value) ? $this->shiftKey($value, 1) : $value,
                $parameter->name
            ),
            'json' => $this->encodeJsonStyle($value),
            default => $value,
        };
    }

    private function encodeQueryParameter(mixed $value): string
    {
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        if (is_scalar($value) || $value instanceof Stringable) {
            return (string) $value;
        }

        throw new InvalidArgumentException('Could not encode the query.');
    }

    /**
     * @param  array<string, mixed>  $values
     * @return array<string, mixed>
     */
    private function encodeRepeatListStyle(array $values, string $prefix): array
    {
        $result = [];

        foreach ($values as $key => $value) {
            $slug = $prefix.'.'.$key;

            if (is_array($value)) {
                $result = [...$result, ...$this->encodeRepeatListStyle($value, $slug)];
            } else {
                $result[$slug] = $value;
            }
        }

        return $result;
    }

    /**
     * @param  array<int, mixed>  $values
     * @return array<int, mixed>
     */
    private function shiftKey(array $values, int $offset): array
    {
        $result = [];

        foreach ($values as $key => $value) {
            $result[$key + $offset] = $value;
        }

        return $result;
    }

    /**
     * @param  mixed[]  $data
     */
    private function encodeJsonStyle(array $data): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR);
    }
}

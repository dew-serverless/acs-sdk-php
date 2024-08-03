<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

use Dew\Acs\JsonEncoder;
use Dew\Acs\Str;
use Dew\Acs\XmlEncoder;
use InvalidArgumentException;
use Override;
use RuntimeException;

/**
 * @phpstan-import-type TSchema from \Dew\Acs\OpenApi\Schema
 */
final readonly class ROAStyleBuilder implements ApiDataBuilder
{
    private RefFinder $refFinder;

    private SchemaReader $schemaReader;

    private string $scheme;

    /**
     * @var array<string, string>
     */
    private array $defaultHeaders;

    public function __construct(
        private ApiDocs $docs,
        private Api $api
    ) {
        $this->refFinder = new RefFinder($this->docs);

        $this->schemaReader = new SchemaReader();
        $this->schemaReader->findSchemaUsing(function (string $path): Schema {
            $schema = $this->refFinder->find($path);

            if ($schema === null) {
                throw new RuntimeException("Could not find the schema for $path.");
            }

            if (! is_array($schema)) {
                throw new RuntimeException("Could not find a valid schema for $path.");
            }

            /** @var TSchema $schema */
            return Schema::make($schema);
        });

        $this->scheme = in_array('https', $this->api->schemes, strict: true)
            ? 'https'
            : $this->api->schemes[0];

        $this->defaultHeaders = $this->prepareDefaultHeaders();
    }

    /**
     * @return array<string, string>
     */
    private function prepareDefaultHeaders(): array
    {
        $headers = [];

        if (isset($this->api->produces[0])) {
            $headers['Accept'] = $this->api->produces[0];
        }

        return $headers;
    }

    /**
     * @param  array<string, mixed>  $arguments
     */
    #[Override]
    public function build(array $arguments): ApiData
    {
        [$path, $query] = $this->extractPathAndQuery($this->api->path ?? '/');
        $host = null;
        $headers = $this->defaultHeaders;
        $body = '';

        foreach ($this->api->parameters as $parameter) {
            $value = $arguments[$parameter->name] ?? null;

            $this->ensureParameterIsRequired($parameter, $value);

            if ($value === null) {
                continue;
            }

            if ($value === '' || $value === []) {
                $this->ensureParameterAllowsEmpty($parameter);
            }

            switch ($parameter->in) {
                case ParameterLocation::HOST:
                    $host = $this->getParameterValue($parameter, $value);
                    break;
                case ParameterLocation::HEADER:
                    if (str_contains($parameter->name, '*') && is_array($value)) {
                        $headers = [...$headers, ...$this->getWildcardHeader($parameter, $value)];
                    } else {
                        $headers[$parameter->name] = $this->getHeaderValue($parameter, $value);
                    }
                    break;
                case ParameterLocation::PATH:
                    $value = $this->getParameterValue($parameter, $value);
                    $path = str_replace("{{$parameter->name}}", $value, $path);
                    break;
                case ParameterLocation::QUERY:
                    $query[$parameter->name] = $this->getParameterValue($parameter, $value);
                    break;
                case ParameterLocation::BODY:
                    $body = $this->getParameterValue($parameter, $value);
                    $headers = $this->addContentTypeIfNeeded($headers, $parameter, $body);
                    break;
                default:
                    throw new InvalidArgumentException(
                        "Unsupported parameter location {$parameter->in->value}."
                    );
            }
        }

        return new ApiData(
            host: $host,
            scheme: $this->scheme,
            method: strtoupper($this->api->methods[0]),
            headers: $headers,
            path: $path,
            query: http_build_query($query, encoding_type: PHP_QUERY_RFC3986),
            body: $body
        );
    }

    /**
     * @return array{0: string, 1: mixed[]}
     */
    private function extractPathAndQuery(string $url): array
    {
        $parsed = parse_url($url);

        $path = $parsed['path'] ?? '';
        $query = [];

        if (isset($parsed['query'])) {
            parse_str($parsed['query'], $query);
        }

        return [$path, $query];
    }

    private function ensureParameterIsRequired(Parameter $parameter, mixed $value): void
    {
        if ($parameter->schema->required === true && $value === null) {
            throw new InvalidArgumentException("The {$parameter->name} is required.");
        }
    }

    private function ensureParameterAllowsEmpty(Parameter $parameter): void
    {
        if ($parameter->allowEmptyValue === false) {
            throw new InvalidArgumentException(
                "The {$parameter->name} must not be empty."
            );
        }
    }

    private function getParameterValue(Parameter $parameter, mixed $value): string
    {
        return $this->toStringValue(
            $parameter, $this->getParameterRawValue($parameter, $value)
        );
    }

    private function getHeaderValue(Parameter $parameter, mixed $value): string
    {
        return $this->toHeaderValue(
            $parameter, $this->getParameterRawValue($parameter, $value)
        );
    }

    private function getParameterRawValue(Parameter $parameter, mixed $value): mixed
    {
        $value = $this->schemaReader->getProperty(
            $parameter->schema, $value, $parameter->name
        );

        return match ($parameter->style) {
            'xml' => is_array($value)
                ? (new XmlEncoder())->encode($value)
                : throw new InvalidArgumentException(
                    'Data should be an array when performing XML encoding.'
                ),
            'json' => is_array($value)
                ? (new JsonEncoder())->encode($value)
                : throw new InvalidArgumentException(
                    'Data should be an array when performing JSON encoding.'
                ),
            default => $value,
        };
    }

    /**
     * @param  array<string, string>  $headers
     * @return array<string, string>
     */
    private function getWildcardHeader(Parameter $parameter, array $headers): array
    {
        $values = $this->getParameterRawValue($parameter, $headers);

        if (! is_array($values)) {
            return [
                $parameter->name => $this->toHeaderValue($parameter, $values),
            ];
        }

        $result = [];

        foreach ($values as $name => $value) {
            $normalized = Str::is($parameter->name, $name)
                ? $name
                : Str::fill($parameter->name, $name);

            try {
                $result[$normalized] = $this->toHeaderValue($parameter, $value);
            } catch (InvalidArgumentException $e) {
                throw new InvalidArgumentException(sprintf(
                    'The header value "%s" must be a string.', $normalized
                ));
            }
        }

        return $result;
    }

    /**
     * @throws \InvalidArgumentException
     */
    private function toHeaderValue(Parameter $parameter, mixed $value): string
    {
        if (is_bool($value)) {
            return $value ? '?1' : '?0';
        }

        return $this->toStringValue($parameter, $value);
    }

    /**
     * @throws \InvalidArgumentException
     */
    private function toStringValue(Parameter $parameter, mixed $value): string
    {
        $value = is_scalar($value) ? (string) $value : $value;

        if (! is_string($value)) {
            throw new InvalidArgumentException(
                "The {$parameter->name} must be a string."
            );
        }

        return $value;
    }

    /**
     * @param  array<string, string>  $headers
     * @return array<string, string>
     */
    private function addContentTypeIfNeeded(array $headers, Parameter $parameter, string $value): array
    {
        if ($value === '') {
            return $headers;
        }

        $contentType = match ($parameter->style) {
            'json' => 'application/json',
            'xml' => 'application/xml',
            default => null,
        };

        if (is_string($contentType)) {
            $headers['Content-Type'] = $contentType;
        }

        return $headers;
    }
}

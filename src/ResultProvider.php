<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\OpenApi\RefFinder;
use Dew\Acs\OpenApi\Schema;
use Psr\Http\Message\ResponseInterface;

final readonly class ResultProvider
{
    private RefFinder $refFinder;

    public function __construct(
        private ApiDocs $docs
    ) {
        $this->refFinder = new RefFinder($this->docs);
    }

    public function make(ResponseInterface $response, Api $api): Result
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $contentType = explode(';', $contentType)[0];

        $result = match ($contentType) {
            'application/json' => $this->makeJsonResult($response),
            'application/xml' => $this->makeXmlResult($response, $api),
            default => new Result(),
        };

        return $result->setResponse($response);
    }

    private function makeJsonResult(ResponseInterface $response): Result
    {
        $encoder = new JsonEncoder();
        $decoded = $encoder->decode((string) $response->getBody());

        return new Result($decoded);
    }

    private function makeXmlResult(ResponseInterface $response, Api $api): Result
    {
        $encoder = new XmlEncoder();
        $decoded = $encoder->decode((string) $response->getBody());

        $statusCode = (string) $response->getStatusCode();

        if (! isset($api->responses[$statusCode])) {
            return new Result($decoded);
        }

        $schema = $api->responses[$statusCode]->schema;

        if (! $schema instanceof Schema) {
            return new Result($decoded);
        }

        $formatter = new XmlFormatter();
        $formatter->findSchemaUsing(function (string $path): ?Schema {
            $schema = $this->refFinder->find($path);

            return is_array($schema) ? Schema::make($schema) : null;
        });
        $formatted = $formatter->format($decoded, $schema);

        return new Result($formatted);
    }
}

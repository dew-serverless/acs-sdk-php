<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\OpenApi\RefFinder;
use Dew\Acs\OpenApi\Schema;
use Psr\Http\Message\ResponseInterface;

/**
 * @phpstan-import-type TError from \Dew\Acs\AcsException
 */
final readonly class ResultProvider
{
    private RefFinder $refFinder;

    public function __construct(
        private ApiDocs $docs
    ) {
        $this->refFinder = new RefFinder($this->docs);
    }

    /**
     * @throw \Dew\Acs\AcsException
     * @return \Dew\Acs\Result<mixed[]>
     */
    public function make(ResponseInterface $response, Api $api): Result
    {
        $result = (new Result($this->decode($response, $api)))
            ->setResponse($response);

        $response = new Response($response);

        if ($response->isError()) {
            /** @var \Dew\Acs\Result<TError> $result */
            throw new AcsException($result);
        }

        return $result;
    }

    /**
     * @return mixed[]
     */
    private function decode(ResponseInterface $response, Api $api): array
    {
        $contentType = strtolower($response->getHeaderLine('Content-Type'));

        switch (true) {
            case str_contains($contentType, 'json'): return $this->makeJsonResult($response);
            case str_contains($contentType, 'xml'): return $this->makeXmlResult($response, $api);
            default: return [];
        };
    }

    /**
     * @return mixed[]
     */
    private function makeJsonResult(ResponseInterface $response): array
    {
        $encoder = new JsonEncoder();

        return $encoder->decode((string) $response->getBody());
    }

    /**
     * @return mixed[]
     */
    private function makeXmlResult(ResponseInterface $response, Api $api): array
    {
        $encoder = new XmlEncoder();
        $decoded = $encoder->decode((string) $response->getBody());

        $statusCode = (string) $response->getStatusCode();

        if (! isset($api->responses[$statusCode])) {
            return $decoded;
        }

        $schema = $api->responses[$statusCode]->schema;

        if (! $schema instanceof Schema) {
            return $decoded;
        }

        $formatter = new XmlFormatter();
        $formatter->findSchemaUsing(function (string $path): ?Schema {
            $schema = $this->refFinder->find($path);

            return is_array($schema) ? Schema::make($schema) : null;
        });

        return $formatter->format($decoded, $schema);
    }
}

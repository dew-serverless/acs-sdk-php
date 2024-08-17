<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\Plugins\SignRequest;
use Http\Promise\Promise;

/**
 * @method \Dew\Acs\Result putLogs(array $arguments)
 */
trait ManagesLogs
{
    /**
     * @param  array{project: string, logstore: string, hash?: string}  $arguments
     * @return \Http\Promise\Promise
     */
    public function putLogsAsync(array $arguments): Promise
    {
        // @phpstan-ignore argument.type
        $group = Protobuf::toLogGroup($arguments);

        $request = $this->newRequest('POST')
            ->withHeader('Content-Type', 'application/x-protobuf')
            ->withBody($this->streamFactory->createStream($group->serializeToString()));

        [$path, $query] = $this->parsePutLogsEndpoint(
            $arguments['logstore'], $arguments['hash'] ?? null
        );

        $request = $request->withUri($request->getUri()
            ->withHost(sprintf('%s.%s', $arguments['project'], $request->getUri()->getHost()))
            ->withPath($path)
            ->withQuery($query)
        );

        $client = $this->newClient(appendMiddlewares: [
            new CompressData($this->streamFactory),
            SignRequest::withSignature(new V4Signature(), $this->config),
        ]);

        return $this->handleResponse($client->sendAsyncRequest($request));
    }

    /**
     * @return array{0: string, 1: string}
     */
    private function parsePutLogsEndpoint(string $logstore, ?string $hash = null): array
    {
        $path = is_string($hash)
            ? sprintf('/logstores/%s/shards/route', $logstore)
            : sprintf('/logstores/%s/shards/lb', $logstore);

        $query = is_string($hash) ? 'key='.$hash : '';

        return [$path, $query];
    }
}

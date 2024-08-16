<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\Plugins\SignRequest;
use Dew\Acs\Result;

trait ManagesLogs
{
    /**
     * @param  array{project: string, logstore: string}  $arguments
     * @return \Dew\Acs\Result<array{}>
     */
    public function putLogs(array $arguments): Result
    {
        // @phpstan-ignore argument.type
        $group = LogHandler::toLogGroup($arguments);

        $request = $this->requestFactory
            ->createRequest('POST', $this->appendDefaultSchemeIfNeeded($this->endpoint))
            ->withHeader('Content-Type', 'application/x-protobuf')
            ->withBody($this->streamFactory->createStream($group->serializeToString()));

        $request = $request->withUri($request->getUri()
            ->withHost(sprintf('%s.%s', $arguments['project'], $request->getUri()->getHost()))
            ->withPath(sprintf('/logstores/%s/shards/lb', $arguments['logstore']))
        );

        $client = $this->newClient(appendMiddlewares: [
            new CompressData($this->streamFactory),
            SignRequest::withSignature(new V4Signature(), $this->config),
        ]);

        /** @var \Psr\Http\Message\ResponseInterface */
        $response = $client->sendAsyncRequest($request)->wait();

        return (new Result())->setResponse($response);
    }
}

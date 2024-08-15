<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\Plugins\ConfigureUserAgent;
use Dew\Acs\Result;
use Http\Client\Common\PluginClient;

/**
 * @phpstan-import-type TLogGroup from \Dew\Acs\Sls\LogHandler
 */
trait ManagesLogs
{
    /**
     * @param  array{project: string, logstore: string}&TLogGroup  $arguments
     */
    public function putLogs(array $arguments): Result
    {
        $client = new PluginClient($this->httpClient, [
            new ConfigureUserAgent(),
        ]);

        $group = LogHandler::toLogGroup($arguments);

        $request = $this->requestFactory
            ->createRequest('POST', $this->appendDefaultSchemeIfNeeded($this->endpoint))
            ->withHeader('Content-Type', 'application/x-protobuf')
            ->withBody($this->streamFactory->createStream($group->serializeToString()));

        $request = $request->withUri($request->getUri()
            ->withHost(sprintf('%s.%s', $arguments['project'], $request->getUri()->getHost()))
            ->withPath(sprintf('/logstores/%s/shards/lb', $arguments['logstore']))
        );

        $request = (new V4Signature())->signRequest($request, $this->config);
        $response = $client->sendAsyncRequest($request)->wait();

        return (new Result())->setResponse($response);
    }
}

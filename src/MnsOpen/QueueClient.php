<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen;

use Dew\Acs\DataEncoder;
use Dew\Acs\Plugins\SignRequest;
use Dew\Acs\Response;
use Dew\Acs\Result;
use Dew\Acs\XmlEncoder;
use GuzzleHttp\Psr7;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use RuntimeException;

/**
 * @phpstan-type TConfig array{
 *   credentials: array{
 *     key: string,
 *     secret: string
 *   },
 *   endpoint: string,
 *   http_client?: \Psr\Http\Client\ClientInterface
 * }
 * @phpstan-type TSendMessage array{
 *   QueueName: string,
 *   Message: array{
 *     MessageBody: string,
 *     DelaySeconds?: int
 *   }
 * }
 * @phpstan-type TBatchSendMessage array{
 *   QueueName: string,
 *   Messages: array{
 *     Message: array{
 *       MessageBody: string,
 *       DelaySeconds?: int
 *     }[]
 *   }
 * }
 * @phpstan-type TReceiveMessage array{QueueName: string, waitseconds?: int}
 * @phpstan-type TBatchReceiveMessage array{
 *   QueueName: string,
 *   numOfMessages: int,
 *   waitseconds?: int
 * }
 * @phpstan-type TDeleteMessage array{QueueName: string, ReceiptHandle: string}
 * @phpstan-type TBatchDeleteMessage array{
 *   QueueName: string,
 *   ReceiptHandles: array{
 *     ReceiptHandle: string[]
 *   }
 * }
 * @phpstan-type TPeekMessage array{QueueName: string}
 * @phpstan-type TBatchPeekMessage array{QueueName: string, numOfMessages: int}
 * @phpstan-type TChangeMessageVisibility array{
 *   QueueName: string,
 *   ReceiptHandle: string,
 *   VisibilityTimeout: int
 * }
 *
 * @method \Dew\Acs\Result sendMessage(TSendMessage $arguments)
 * @method \Dew\Acs\Result batchSendMessage(TBatchSendMessage $arguments)
 * @method \Dew\Acs\Result receiveMessage(TReceiveMessage $arguments)
 * @method \Dew\Acs\Result batchReceiveMessage(TBatchReceiveMessage $arguments)
 * @method \Dew\Acs\Result deleteMessage(TDeleteMessage $arguments)
 * @method \Dew\Acs\Result batchDeleteMessage(TBatchDeleteMessage $arguments)
 * @method \Dew\Acs\Result peekMessage(TPeekMessage $arguments)
 * @method \Dew\Acs\Result batchPeekMessage(TBatchPeekMessage $arguments)
 * @method \Dew\Acs\Result changeMessageVisibility(TChangeMessageVisibility $arguments)
 */
final readonly class QueueClient
{
    /**
     * The HTTP request factory.
     */
    private RequestFactoryInterface $requestFactory;

    /**
     * The stream factory.
     */
    private StreamFactoryInterface $streamFactory;

    /**
     * The HTTP client.
     */
    private ClientInterface $client;

    /**
     * The XML encoder.
     */
    private DataEncoder $encoder;

    /**
     * Create a new queue client instance.
     *
     * @param  TConfig  $config
     */
    public function __construct(
        private array $config
    ) {
        $this->requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $this->client = $config['http_client'] ?? Psr18ClientDiscovery::find();
        $this->encoder = new XmlEncoder();
    }

    /**
     * Send a message to queue.
     *
     * @param  TSendMessage  $arguments
     */
    public function sendMessageAsync(array $arguments): Promise
    {
        return $this->send('POST', sprintf('/queues/%s/messages', $arguments['QueueName']), [
            'Message' => $arguments['Message'],
        ]);
    }

    /**
     * Send multiple messages to queue.
     *
     * @param  TBatchSendMessage  $arguments
     */
    public function batchSendMessageAsync(array $arguments): Promise
    {
        return $this->send(
            'POST', sprintf('/queues/%s/messages', $arguments['QueueName']),
            ['Messages' => $arguments['Messages']]
        );
    }

    /**
     * Get a message from queue.
     *
     * @param  TReceiveMessage  $arguments
     */
    public function receiveMessageAsync(array $arguments): Promise
    {
        $query = Psr7\Query::build(array_filter([
            'waitseconds' => $arguments['waitseconds'] ?? null,
        ]));

        return $this->send('GET', sprintf('/queues/%s/messages%s',
            $arguments['QueueName'],
            $query === '' ? '' : '?'.$query
        ));
    }

    /**
     * Get multiple messages from queue.
     *
     * @param  TBatchReceiveMessage  $arguments
     */
    public function batchReceiveMessageAsync(array $arguments): Promise
    {
        $query = Psr7\Query::build(array_filter([
            'numOfMessages' => $arguments['numOfMessages'],
            'waitseconds' => $arguments['waitseconds'] ?? null,
        ]));

        return $this->send('GET', sprintf('/queues/%s/messages?%s',
            $arguments['QueueName'], $query
        ));
    }

    /**
     * Delete a message from queue.
     *
     * @param  TDeleteMessage  $arguments
     */
    public function deleteMessageAsync(array $arguments): Promise
    {
        return $this->send('DELETE', sprintf('/queues/%s/messages?ReceiptHandle=%s',
            $arguments['QueueName'], $arguments['ReceiptHandle']
        ));
    }

    /**
     * Delete multiple messages from queue.
     *
     * @param  TBatchDeleteMessage  $arguments
     */
    public function batchDeleteMessageAsync(array $arguments): Promise
    {
        return $this->send(
            'DELETE', sprintf('/queues/%s/messages', $arguments['QueueName']), [
                'ReceiptHandles' => $arguments['ReceiptHandles'],
            ]
        );
    }

    /**
     * Peek a message from queue.
     *
     * @param  TPeekMessage  $arguments
     */
    public function peekMessageAsync(array $arguments): Promise
    {
        return $this->send('GET', sprintf('/queues/%s/messages?peekonly=true',
            $arguments['QueueName']
        ));
    }

    /**
     * Peek multiple messages from queue.
     *
     * @param  TBatchPeekMessage  $arguments
     */
    public function batchPeekMessageAsync(array $arguments): Promise
    {
        return $this->send('GET', sprintf(
            '/queues/%s/messages?peekonly=true&numOfMessages=%s',
            $arguments['QueueName'], $arguments['numOfMessages']
        ));
    }

    /**
     * Update message next available time.
     *
     * @param  TChangeMessageVisibility  $arguments
     */
    public function changeMessageVisibilityAsync(array $arguments): Promise
    {
        return $this->send('PUT', sprintf(
            '/queues/%s/messages?receiptHandle=%s&visibilityTimeout=%s',
            $arguments['QueueName'], $arguments['ReceiptHandle'],
            $arguments['VisibilityTimeout'],
        ));
    }

    /**
     * Execute an API action asynchronously.
     *
     * @param  array<int, mixed>  $arguments
     */
    private function executeAsync(string $action, array $arguments = []): Promise
    {
        return $this->{$action.'Async'}(...$arguments);
    }

    /**
     * Send an HTTP request asynchronously.
     *
     * @param  array<string, mixed>  $data
     */
    private function send(string $method, string $resource, array $data = []): Promise
    {
        $uri = new Psr7\Uri($resource);

        $request = $this->requestFactory->createRequest($method, $this->config['endpoint']);
        $request = $request->withUri($request->getUri()
            ->withPath($uri->getPath())
            ->withQuery($uri->getQuery())
        );

        if ($data !== []) {
            $request = $request
                ->withHeader('Content-Type', 'text/xml')
                ->withBody($this->streamFactory->createStream($this->encoder->encode($data)));
        }

        return $this->handleResponse($this->client()->sendAsyncRequest($request));
    }

    /**
     * Create a new client.
     */
    private function client(): PluginClient
    {
        return new PluginClient($this->client, [
            SignRequest::withSignature(new MnsSignature(), $this->config),
        ]);
    }

    /**
     * Decode the XML document.
     */
    private function handleResponse(Promise $promise): Promise
    {
        return (new FulfilledPromise($promise))
            ->then(function (Promise $promise): Result {
                /** @var \Psr\Http\Message\ResponseInterface */
                $response = $promise->wait();
                $response = new Response($response);

                $result = (new Result($this->encoder->decode($response->body())))
                    ->setResponse($response->getPsrResponse());

                if ($response->isError()) {
                    /** @var string */
                    $message = $result->get('Error.Message', 'Could not communicate with Alibaba Cloud.');

                    /** @var string|int */
                    $code = $result->get('Error.Code', 0);

                    throw (new QueueException($message, $code))->setResult($result);
                }

                return $result;
            });
    }

    /**
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $method, array $arguments = []): mixed
    {
        if (method_exists($this, $method.'Async')) {
            return $this->executeAsync($method, $arguments)->wait();
        }

        throw new RuntimeException(sprintf('Call to undefined method %s::%s()', self::class, $method));
    }
}

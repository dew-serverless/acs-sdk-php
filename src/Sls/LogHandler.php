<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\Sls\Messages\Log;
use Dew\Acs\Sls\Messages\LogContent;
use Dew\Acs\Sls\Messages\LogGroup;
use Dew\Acs\Sls\Messages\LogTag;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * @phpstan-type TLog array{
 *   time: positive-int,
 *   contents: array<string, string>,
 *   time_ns?: positive-int
 * }
 * @phpstan-type TLogGroup array{
 *   logs: TLog[],
 *   topic?: string,
 *   source?: string,
 *   machine?: string,
 *   tags?: array<string, string>
 * }
 */
final class LogHandler
{
    public function compress(RequestInterface $request, StreamFactoryInterface $factory): RequestInterface
    {
        $size = $request->getBody()->getSize() ?? 0;

        $compression = match (true) {
            Zstd::supports() && $size > Zstd::threshold() => new Zstd(),
            Deflate::supports() && $size > Deflate::threshold() => new Deflate(),
            default => new Raw(),
        };

        $encoded = $compression->encode((string) $request->getBody());

        if (strlen($encoded) >= $size) {
            return $request;
        }

        return $request
            ->withHeader('x-log-bodyrawsize', (string) $size)
            ->withHeader('x-log-compresstype', $compression->format())
            ->withBody($factory->createStream($encoded));
    }

    /**
     * @param  TLogGroup  $group
     */
    public static function toLogGroup(array $group): LogGroup
    {
        $message = (new LogGroup())
            ->setLogs(array_map(fn (array $log): Log => static::toLog($log), $group['logs']));

        if (isset($group['topic'])) {
            $message->setTopic($group['topic']);
        }

        if (isset($group['source'])) {
            $message->setSource($group['source']);
        }

        if (isset($group['machine'])) {
            $message->setMachineUuid($group['machine']);
        }

        if (isset($group['tags'])) {
            $tags = [];

            foreach ($group['tags'] as $key => $value) {
                $tags[] = (new LogTag())
                    ->setKey($key)
                    ->setValue($value);
            }

            $message->setTags($tags);
        }

        return $message;
    }

    /**
     * @param  TLog  $log
     */
    public static function toLog(array $log): Log
    {
        $message = new Log();
        $message->setTime($log['time']);

        $contents = [];

        foreach ($log['contents'] as $key => $value) {
            $contents[] = (new LogContent())
                ->setKey($key)
                ->setValue($value);
        }

        $message->setContents($contents);

        if (isset($log['time_ns'])) {
            $message->setTimeNs($log['time_ns']);
        }

        return $message;
    }
}

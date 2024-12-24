<?php

declare(strict_types=1);

namespace Dew\Acs;

use Exception;
use Psr\Http\Message\ResponseInterface;

class AcsException extends Exception
{
    /**
     * The message field in the error response.
     */
    public const ERROR_MESSAGE = 'Message';

    /**
     * The code field in the error response.
     */
    public const ERROR_CODE = 'Code';

    /**
     * @var int|string
     */
    protected $code;

    /**
     * @var \Dew\Acs\Result<array<mixed>>|null
     */
    protected ?Result $result = null;

    final public function __construct(string $message, int|string $code)
    {
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * @param  \Dew\Acs\Result<array<mixed>>  $result
     */
    public static function makeFromResult(Result $result): static
    {
        /** @var string */
        $message = $result->get(static::ERROR_MESSAGE, 'Could not communicate with Alibaba Cloud.');

        /** @var string|int */
        $code = $result->get(static::ERROR_CODE, 0);

        return (new static($message, $code))->setResult($result);
    }

    /**
     * @param  \Dew\Acs\Result<array<mixed>>  $result
     */
    public function setResult(Result $result): static
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get the underlying result.
     *
     * @return \Dew\Acs\Result<array<mixed>>|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->result?->getResponse();
    }
}

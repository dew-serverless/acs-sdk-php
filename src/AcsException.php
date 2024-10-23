<?php

declare(strict_types=1);

namespace Dew\Acs;

use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * @phpstan-type TError array{
 *   Code: string,
 *   Message: string,
 *   RequestId: string
 * }
 */
class AcsException extends Exception
{
    /**
     * @var int|string
     */
    protected $code;

    /**
     * @var \Dew\Acs\Result<TError>|null
     */
    protected ?Result $result = null;

    final public function __construct(string $message, int|string $code)
    {
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * @param  \Dew\Acs\Result<TError>  $result
     */
    public static function makeFromResult(Result $result): static
    {
        $e = new static(
            $result->get('Message', 'Could not communicate with Alibaba Cloud.'),
            $result->get('Code', 0)
        );

        return $e->setResult($result);
    }

    /**
     * @param  \Dew\Acs\Result<TError>  $result
     */
    public function setResult(Result $result): static
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return \Dew\Acs\Result<TError>|null
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->result?->getResponse();
    }
}

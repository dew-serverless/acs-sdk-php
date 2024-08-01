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
     * @param  \Dew\Acs\Result<TError>  $result
     */
    public function __construct(
        public readonly Result $result
    ) {
        $this->message = $result->get('Message', 'Could not communicate with Alibaba Cloud.');
        $this->code = $result->get('Code', 0);
    }

    /**
     * @return \Dew\Acs\Result<TError>
     */
    public function getResult(): Result
    {
        return $this->result;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->result->getResponse();
    }
}

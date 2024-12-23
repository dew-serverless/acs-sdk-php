<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen;

use Dew\Acs\AcsException;

final class QueueException extends AcsException
{
    /**
     * The message field in the error response.
     */
    public const ERROR_MESSAGE = 'Error.Message';

    /**
     * The code field in the error response.
     */
    public const ERROR_CODE = 'Error.Code';
}

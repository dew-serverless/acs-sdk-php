<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\AcsException;

final class SlsException extends AcsException
{
    /**
     * The message field in the error response.
     */
    public const ERROR_MESSAGE = 'errorMessage';

    /**
     * The code field in the error response.
     */
    public const ERROR_CODE = 'errorCode';
}

<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\AcsException;
use Dew\Acs\Result;
use Override;

/**
 * @phpstan-type TError array{
 *   errorCode: string,
 *   errorMessage: string,
 * }
 */
final class SlsException extends AcsException
{
    /**
     * @param  \Dew\Acs\Result<TError>  $result
     *
     * @see https://help.aliyun.com/zh/sls/developer-reference/api-sls-2020-12-30-appendix-error-codes
     */
    #[Override]
    public static function makeFromResult(Result $result): static
    {
        $e = new static(
            $result->get('errorMessage', 'Could not communicate with Alibaba Cloud.'),
            $result->get('errorCode', 0)
        );

        // @phpstan-ignore argument.type
        return $e->setResult($result);
    }
}

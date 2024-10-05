<?php

declare(strict_types=1);

namespace Dew\Acs\NonStandardOpen;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result getToken(array $arguments = [])
 * @method \Http\Promise\Promise getTokenAsync($arguments = [])
 * @method \Dew\Acs\Result initCard(array $arguments = [])
 * @method \Http\Promise\Promise initCardAsync($arguments = [])
 * @method \Dew\Acs\Result queryOrderInfo(array $arguments = [])
 * @method \Http\Promise\Promise queryOrderInfoAsync($arguments = [])
 * @method \Dew\Acs\Result refundConfirm(array $arguments = [])
 * @method \Http\Promise\Promise refundConfirmAsync($arguments = [])
 * @method \Dew\Acs\Result refundSubmit(array $arguments = [])
 * @method \Http\Promise\Promise refundSubmitAsync($arguments = [])
 */
final class NonStandardOpenClient extends AcsClient
{
    //
}

<?php

declare(strict_types=1);

namespace Dew\Acs\Rai;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result registerAccount(array $arguments = [])
 * @method \Http\Promise\Promise registerAccountAsync($arguments = [])
 * @method \Dew\Acs\Result checkAccount(array $arguments = [])
 * @method \Http\Promise\Promise checkAccountAsync($arguments = [])
 * @method \Dew\Acs\Result contentSyncDetect(array $arguments = [])
 * @method \Http\Promise\Promise contentSyncDetectAsync($arguments = [])
 * @method \Dew\Acs\Result batchContentSyncDetect(array $arguments = [])
 * @method \Http\Promise\Promise batchContentSyncDetectAsync($arguments = [])
 * @method \Dew\Acs\Result contentAsyncDetect(array $arguments = [])
 * @method \Http\Promise\Promise contentAsyncDetectAsync($arguments = [])
 * @method \Dew\Acs\Result batchContentAsyncDetect(array $arguments = [])
 * @method \Http\Promise\Promise batchContentAsyncDetectAsync($arguments = [])
 * @method \Dew\Acs\Result getContentDetectResult(array $arguments = [])
 * @method \Http\Promise\Promise getContentDetectResultAsync($arguments = [])
 * @method \Dew\Acs\Result listSensitiveWord(array $arguments = [])
 * @method \Http\Promise\Promise listSensitiveWordAsync($arguments = [])
 * @method \Dew\Acs\Result syncSensitiveWord(array $arguments = [])
 * @method \Http\Promise\Promise syncSensitiveWordAsync($arguments = [])
 */
final class RaiClient extends AcsClient
{
    //
}

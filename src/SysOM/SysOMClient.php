<?php

declare(strict_types=1);

namespace Dew\Acs\SysOM;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result authDiagnosis(array $arguments = [])
 * @method \Http\Promise\Promise authDiagnosisAsync($arguments = [])
 * @method \Dew\Acs\Result invokeDiagnosis(array $arguments = [])
 * @method \Http\Promise\Promise invokeDiagnosisAsync($arguments = [])
 * @method \Dew\Acs\Result getDiagnosisResult(array $arguments = [])
 * @method \Http\Promise\Promise getDiagnosisResultAsync($arguments = [])
 * @method \Dew\Acs\Result generateCopilotResponse(array $arguments = [])
 * @method \Http\Promise\Promise generateCopilotResponseAsync($arguments = [])
 * @method \Dew\Acs\Result getAbnormalEventsCount(array $arguments = [])
 * @method \Http\Promise\Promise getAbnormalEventsCountAsync($arguments = [])
 * @method \Dew\Acs\Result getHealthPercentage(array $arguments = [])
 * @method \Http\Promise\Promise getHealthPercentageAsync($arguments = [])
 */
final class SysOMClient extends AcsClient
{
    //
}

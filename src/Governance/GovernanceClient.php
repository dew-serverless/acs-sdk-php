<?php

declare(strict_types=1);

namespace Dew\Acs\Governance;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result enrollAccount(array $arguments = [])
 * @method \Http\Promise\Promise enrollAccountAsync($arguments = [])
 * @method \Dew\Acs\Result listEnrolledAccounts(array $arguments = [])
 * @method \Http\Promise\Promise listEnrolledAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result getEnrolledAccount(array $arguments = [])
 * @method \Http\Promise\Promise getEnrolledAccountAsync($arguments = [])
 * @method \Dew\Acs\Result getAccountFactoryBaseline(array $arguments = [])
 * @method \Http\Promise\Promise getAccountFactoryBaselineAsync($arguments = [])
 * @method \Dew\Acs\Result listAccountFactoryBaselines(array $arguments = [])
 * @method \Http\Promise\Promise listAccountFactoryBaselinesAsync($arguments = [])
 */
final class GovernanceClient extends AcsClient
{
    //
}

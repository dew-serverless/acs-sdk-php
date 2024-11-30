<?php

declare(strict_types=1);

namespace Dew\Acs\Httpdns;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result addDomain(array $arguments = [])
 * @method \Http\Promise\Promise addDomainAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDomain(array $arguments = [])
 * @method \Http\Promise\Promise deleteDomainAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomains(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainsAsync($arguments = [])
 * @method \Dew\Acs\Result getResolveCountSummary(array $arguments = [])
 * @method \Http\Promise\Promise getResolveCountSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result getResolveStatistics(array $arguments = [])
 * @method \Http\Promise\Promise getResolveStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result listDomains(array $arguments = [])
 * @method \Http\Promise\Promise listDomainsAsync($arguments = [])
 */
final class HttpdnsClient extends AcsClient
{
    //
}

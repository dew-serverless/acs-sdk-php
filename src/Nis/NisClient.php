<?php

declare(strict_types=1);

namespace Dew\Acs\Nis;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result getNisNetworkRanking(array $arguments = [])
 * @method \Http\Promise\Promise getNisNetworkRankingAsync($arguments = [])
 * @method \Dew\Acs\Result getInternetTuple(array $arguments = []) {@deprecated 2021-12-16}
 * @method \Http\Promise\Promise getInternetTupleAsync($arguments = []) {@deprecated 2021-12-16}
 * @method \Dew\Acs\Result getNatTopN(array $arguments = []) {@deprecated 2021-12-16}
 * @method \Http\Promise\Promise getNatTopNAsync($arguments = []) {@deprecated 2021-12-16}
 * @method \Dew\Acs\Result getVbrFlowTopN(array $arguments = []) {@deprecated 2021-12-16}
 * @method \Http\Promise\Promise getVbrFlowTopNAsync($arguments = []) {@deprecated 2021-12-16}
 * @method \Dew\Acs\Result getTransitRouterFlowTopN(array $arguments = []) {@deprecated 2021-12-16}
 * @method \Http\Promise\Promise getTransitRouterFlowTopNAsync($arguments = []) {@deprecated 2021-12-16}
 * @method \Dew\Acs\Result createNetworkReachableAnalysis(array $arguments = [])
 * @method \Http\Promise\Promise createNetworkReachableAnalysisAsync($arguments = [])
 * @method \Dew\Acs\Result createNetworkPath(array $arguments = [])
 * @method \Http\Promise\Promise createNetworkPathAsync($arguments = [])
 * @method \Dew\Acs\Result createAndAnalyzeNetworkPath(array $arguments = [])
 * @method \Http\Promise\Promise createAndAnalyzeNetworkPathAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNetworkPath(array $arguments = [])
 * @method \Http\Promise\Promise deleteNetworkPathAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNetworkReachableAnalysis(array $arguments = [])
 * @method \Http\Promise\Promise deleteNetworkReachableAnalysisAsync($arguments = [])
 * @method \Dew\Acs\Result getNetworkReachableAnalysis(array $arguments = [])
 * @method \Http\Promise\Promise getNetworkReachableAnalysisAsync($arguments = [])
 * @method \Dew\Acs\Result getNisNetworkMetrics(array $arguments = [])
 * @method \Http\Promise\Promise getNisNetworkMetricsAsync($arguments = [])
 */
final class NisClient extends AcsClient
{
    //
}

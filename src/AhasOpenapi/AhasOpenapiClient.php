<?php

declare(strict_types=1);

namespace Dew\Acs\AhasOpenapi;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result getLicenseKey(array $arguments = [])
 * @method \Http\Promise\Promise getLicenseKeyAsync($arguments = [])
 * @method \Dew\Acs\Result listActiveApps(array $arguments = [])
 * @method \Http\Promise\Promise listActiveAppsAsync($arguments = [])
 * @method \Dew\Acs\Result openAhasService(array $arguments = [])
 * @method \Http\Promise\Promise openAhasServiceAsync($arguments = [])
 * @method \Dew\Acs\Result getMetricsOfApp(array $arguments = [])
 * @method \Http\Promise\Promise getMetricsOfAppAsync($arguments = [])
 * @method \Dew\Acs\Result getSentinelAppSumMetric(array $arguments = [])
 * @method \Http\Promise\Promise getSentinelAppSumMetricAsync($arguments = [])
 * @method \Dew\Acs\Result getMetricsOfResource(array $arguments = [])
 * @method \Http\Promise\Promise getMetricsOfResourceAsync($arguments = [])
 * @method \Dew\Acs\Result createFlowRule(array $arguments = [])
 * @method \Http\Promise\Promise createFlowRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFlowRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteFlowRuleAsync($arguments = [])
 * @method \Dew\Acs\Result enableFlowRule(array $arguments = [])
 * @method \Http\Promise\Promise enableFlowRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableFlowRule(array $arguments = [])
 * @method \Http\Promise\Promise disableFlowRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFlowRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyFlowRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listFlowRulesOfApp(array $arguments = [])
 * @method \Http\Promise\Promise listFlowRulesOfAppAsync($arguments = [])
 * @method \Dew\Acs\Result listFlowRulesOfResource(array $arguments = [])
 * @method \Http\Promise\Promise listFlowRulesOfResourceAsync($arguments = [])
 * @method \Dew\Acs\Result createDegradeRule(array $arguments = [])
 * @method \Http\Promise\Promise createDegradeRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDegradeRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteDegradeRuleAsync($arguments = [])
 * @method \Dew\Acs\Result enableDegradeRule(array $arguments = [])
 * @method \Http\Promise\Promise enableDegradeRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableDegradeRule(array $arguments = [])
 * @method \Http\Promise\Promise disableDegradeRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listDegradeRulesOfApp(array $arguments = [])
 * @method \Http\Promise\Promise listDegradeRulesOfAppAsync($arguments = [])
 * @method \Dew\Acs\Result listDegradeRulesOfResource(array $arguments = [])
 * @method \Http\Promise\Promise listDegradeRulesOfResourceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDegradeRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyDegradeRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createIsolationRule(array $arguments = [])
 * @method \Http\Promise\Promise createIsolationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIsolationRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteIsolationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result enableIsolationRule(array $arguments = [])
 * @method \Http\Promise\Promise enableIsolationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableIsolationRule(array $arguments = [])
 * @method \Http\Promise\Promise disableIsolationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listIsolationRulesOfApp(array $arguments = [])
 * @method \Http\Promise\Promise listIsolationRulesOfAppAsync($arguments = [])
 * @method \Dew\Acs\Result listIsolationRulesOfResource(array $arguments = [])
 * @method \Http\Promise\Promise listIsolationRulesOfResourceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyIsolationRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyIsolationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createSystemRule(array $arguments = [])
 * @method \Http\Promise\Promise createSystemRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSystemRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteSystemRuleAsync($arguments = [])
 * @method \Dew\Acs\Result enableSystemRule(array $arguments = [])
 * @method \Http\Promise\Promise enableSystemRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableSystemRule(array $arguments = [])
 * @method \Http\Promise\Promise disableSystemRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listSystemRules(array $arguments = [])
 * @method \Http\Promise\Promise listSystemRulesAsync($arguments = [])
 * @method \Dew\Acs\Result modifySystemRule(array $arguments = [])
 * @method \Http\Promise\Promise modifySystemRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createHotParamRule(array $arguments = [])
 * @method \Http\Promise\Promise createHotParamRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createHotParamItems(array $arguments = [])
 * @method \Http\Promise\Promise createHotParamItemsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHotParamRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteHotParamRuleAsync($arguments = [])
 * @method \Dew\Acs\Result enableHotParamRule(array $arguments = [])
 * @method \Http\Promise\Promise enableHotParamRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableHotParamRule(array $arguments = [])
 * @method \Http\Promise\Promise disableHotParamRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listHotParamRulesOfApp(array $arguments = [])
 * @method \Http\Promise\Promise listHotParamRulesOfAppAsync($arguments = [])
 * @method \Dew\Acs\Result listHotParamRulesOfResource(array $arguments = [])
 * @method \Http\Promise\Promise listHotParamRulesOfResourceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHotParamRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyHotParamRuleAsync($arguments = [])
 */
final class AhasOpenapiClient extends AcsClient
{
    //
}

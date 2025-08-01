<?php

declare(strict_types=1);

namespace Dew\Acs\Config;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createAggregator(array $arguments = [])
 * @method \Http\Promise\Promise createAggregatorAsync($arguments = [])
 * @method \Dew\Acs\Result updateAggregator(array $arguments = [])
 * @method \Http\Promise\Promise updateAggregatorAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAggregators(array $arguments = [])
 * @method \Http\Promise\Promise deleteAggregatorsAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregators(array $arguments = [])
 * @method \Http\Promise\Promise listAggregatorsAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregator(array $arguments = [])
 * @method \Http\Promise\Promise getAggregatorAsync($arguments = [])
 * @method \Dew\Acs\Result listDiscoveredResources(array $arguments = [])
 * @method \Http\Promise\Promise listDiscoveredResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result getDiscoveredResource(array $arguments = [])
 * @method \Http\Promise\Promise getDiscoveredResourceAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceRelations(array $arguments = [])
 * @method \Http\Promise\Promise listResourceRelationsAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceConfigurationTimeline(array $arguments = [])
 * @method \Http\Promise\Promise getResourceConfigurationTimelineAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceComplianceTimeline(array $arguments = [])
 * @method \Http\Promise\Promise getResourceComplianceTimelineAsync($arguments = [])
 * @method \Dew\Acs\Result listResourcesByAdvancedSearch(array $arguments = [])
 * @method \Http\Promise\Promise listResourcesByAdvancedSearchAsync($arguments = [])
 * @method \Dew\Acs\Result createAdvancedSearchFile(array $arguments = [])
 * @method \Http\Promise\Promise createAdvancedSearchFileAsync($arguments = [])
 * @method \Dew\Acs\Result getAdvancedSearchFile(array $arguments = [])
 * @method \Http\Promise\Promise getAdvancedSearchFileAsync($arguments = [])
 * @method \Dew\Acs\Result generateResourceInventory(array $arguments = [])
 * @method \Http\Promise\Promise generateResourceInventoryAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceInventory(array $arguments = [])
 * @method \Http\Promise\Promise getResourceInventoryAsync($arguments = [])
 * @method \Dew\Acs\Result getDiscoveredResourceCountsGroupByRegion(array $arguments = [])
 * @method \Http\Promise\Promise getDiscoveredResourceCountsGroupByRegionAsync($arguments = [])
 * @method \Dew\Acs\Result getDiscoveredResourceCountsGroupByResourceType(array $arguments = [])
 * @method \Http\Promise\Promise getDiscoveredResourceCountsGroupByResourceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceComplianceGroupByResourceType(array $arguments = [])
 * @method \Http\Promise\Promise getResourceComplianceGroupByResourceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceComplianceGroupByRegion(array $arguments = [])
 * @method \Http\Promise\Promise getResourceComplianceGroupByRegionAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateDiscoveredResources(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateDiscoveredResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateDiscoveredResource(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateDiscoveredResourceAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateResourceRelations(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateResourceRelationsAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceConfigurationTimeline(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceConfigurationTimelineAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceComplianceTimeline(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceComplianceTimelineAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateResourcesByAdvancedSearch(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateResourcesByAdvancedSearchAsync($arguments = [])
 * @method \Dew\Acs\Result createAggregateAdvancedSearchFile(array $arguments = [])
 * @method \Http\Promise\Promise createAggregateAdvancedSearchFileAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateAdvancedSearchFile(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateAdvancedSearchFileAsync($arguments = [])
 * @method \Dew\Acs\Result generateAggregateResourceInventory(array $arguments = [])
 * @method \Http\Promise\Promise generateAggregateResourceInventoryAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceInventory(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceInventoryAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceCountsGroupByRegion(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceCountsGroupByRegionAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceCountsGroupByResourceType(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceCountsGroupByResourceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceComplianceGroupByRegion(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceComplianceGroupByRegionAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceComplianceGroupByResourceType(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceComplianceGroupByResourceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result getSupportedResourceRelationConfig(array $arguments = [])
 * @method \Http\Promise\Promise getSupportedResourceRelationConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listSupportedProducts(array $arguments = [])
 * @method \Http\Promise\Promise listSupportedProductsAsync($arguments = [])
 * @method \Dew\Acs\Result createConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise createConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise updateConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise listConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result getConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise getConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listConfigRuleEvaluationResults(array $arguments = [])
 * @method \Http\Promise\Promise listConfigRuleEvaluationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceEvaluationResults(array $arguments = [])
 * @method \Http\Promise\Promise listResourceEvaluationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise deleteConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deactiveConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise deactiveConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result activeConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise activeConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result startConfigRuleEvaluation(array $arguments = [])
 * @method \Http\Promise\Promise startConfigRuleEvaluationAsync($arguments = [])
 * @method \Dew\Acs\Result ignoreEvaluationResults(array $arguments = [])
 * @method \Http\Promise\Promise ignoreEvaluationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result revertEvaluationResults(array $arguments = [])
 * @method \Http\Promise\Promise revertEvaluationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result generateConfigRulesReport(array $arguments = [])
 * @method \Http\Promise\Promise generateConfigRulesReportAsync($arguments = [])
 * @method \Dew\Acs\Result getConfigRulesReport(array $arguments = [])
 * @method \Http\Promise\Promise getConfigRulesReportAsync($arguments = [])
 * @method \Dew\Acs\Result getConfigRuleSummaryByRiskLevel(array $arguments = [])
 * @method \Http\Promise\Promise getConfigRuleSummaryByRiskLevelAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceComplianceByConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise getResourceComplianceByConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result getComplianceSummary(array $arguments = [])
 * @method \Http\Promise\Promise getComplianceSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result listConfigRuleEvaluationStatistics(array $arguments = [])
 * @method \Http\Promise\Promise listConfigRuleEvaluationStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result createAggregateConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise createAggregateConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateAggregateConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise updateAggregateConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateConfigRuleEvaluationResults(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateConfigRuleEvaluationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateResourceEvaluationResults(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateResourceEvaluationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAggregateConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise deleteAggregateConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deactiveAggregateConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise deactiveAggregateConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result activeAggregateConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise activeAggregateConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result startAggregateConfigRuleEvaluation(array $arguments = [])
 * @method \Http\Promise\Promise startAggregateConfigRuleEvaluationAsync($arguments = [])
 * @method \Dew\Acs\Result ignoreAggregateEvaluationResults(array $arguments = [])
 * @method \Http\Promise\Promise ignoreAggregateEvaluationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result revertAggregateEvaluationResults(array $arguments = [])
 * @method \Http\Promise\Promise revertAggregateEvaluationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result generateAggregateConfigRulesReport(array $arguments = [])
 * @method \Http\Promise\Promise generateAggregateConfigRulesReportAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateConfigRulesReport(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateConfigRulesReportAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateConfigRuleSummaryByRiskLevel(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateConfigRuleSummaryByRiskLevelAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceComplianceByConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceComplianceByConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateComplianceSummary(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateComplianceSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateConfigRuleEvaluationStatistics(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateConfigRuleEvaluationStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result copyConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise copyConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result listManagedRules(array $arguments = [])
 * @method \Http\Promise\Promise listManagedRulesAsync($arguments = [])
 * @method \Dew\Acs\Result getManagedRule(array $arguments = [])
 * @method \Http\Promise\Promise getManagedRuleAsync($arguments = [])
 * @method \Dew\Acs\Result putEvaluations(array $arguments = [])
 * @method \Http\Promise\Promise putEvaluationsAsync($arguments = [])
 * @method \Dew\Acs\Result listPreManagedRules(array $arguments = [])
 * @method \Http\Promise\Promise listPreManagedRulesAsync($arguments = [])
 * @method \Dew\Acs\Result evaluatePreConfigRules(array $arguments = [])
 * @method \Http\Promise\Promise evaluatePreConfigRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise createCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result updateCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise updateCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result listCompliancePacks(array $arguments = [])
 * @method \Http\Promise\Promise listCompliancePacksAsync($arguments = [])
 * @method \Dew\Acs\Result getCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise getCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCompliancePacks(array $arguments = [])
 * @method \Http\Promise\Promise deleteCompliancePacksAsync($arguments = [])
 * @method \Dew\Acs\Result generateCompliancePackReport(array $arguments = [])
 * @method \Http\Promise\Promise generateCompliancePackReportAsync($arguments = [])
 * @method \Dew\Acs\Result getCompliancePackReport(array $arguments = [])
 * @method \Http\Promise\Promise getCompliancePackReportAsync($arguments = [])
 * @method \Dew\Acs\Result getConfigRuleComplianceByPack(array $arguments = [])
 * @method \Http\Promise\Promise getConfigRuleComplianceByPackAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceComplianceByPack(array $arguments = [])
 * @method \Http\Promise\Promise getResourceComplianceByPackAsync($arguments = [])
 * @method \Dew\Acs\Result attachConfigRuleToCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise attachConfigRuleToCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result detachConfigRuleToCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise detachConfigRuleToCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result createAggregateCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise createAggregateCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result updateAggregateCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise updateAggregateCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateCompliancePacks(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateCompliancePacksAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAggregateCompliancePacks(array $arguments = [])
 * @method \Http\Promise\Promise deleteAggregateCompliancePacksAsync($arguments = [])
 * @method \Dew\Acs\Result generateAggregateCompliancePackReport(array $arguments = [])
 * @method \Http\Promise\Promise generateAggregateCompliancePackReportAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateCompliancePackReport(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateCompliancePackReportAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateResourceComplianceByPack(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateResourceComplianceByPackAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateConfigRuleComplianceByPack(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateConfigRuleComplianceByPackAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateAccountComplianceByPack(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateAccountComplianceByPackAsync($arguments = [])
 * @method \Dew\Acs\Result attachAggregateConfigRuleToCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise attachAggregateConfigRuleToCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result detachAggregateConfigRuleToCompliancePack(array $arguments = [])
 * @method \Http\Promise\Promise detachAggregateConfigRuleToCompliancePackAsync($arguments = [])
 * @method \Dew\Acs\Result copyCompliancePacks(array $arguments = [])
 * @method \Http\Promise\Promise copyCompliancePacksAsync($arguments = [])
 * @method \Dew\Acs\Result listCompliancePackTemplates(array $arguments = [])
 * @method \Http\Promise\Promise listCompliancePackTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result createRemediation(array $arguments = [])
 * @method \Http\Promise\Promise createRemediationAsync($arguments = [])
 * @method \Dew\Acs\Result updateRemediation(array $arguments = [])
 * @method \Http\Promise\Promise updateRemediationAsync($arguments = [])
 * @method \Dew\Acs\Result listRemediations(array $arguments = [])
 * @method \Http\Promise\Promise listRemediationsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRemediations(array $arguments = [])
 * @method \Http\Promise\Promise deleteRemediationsAsync($arguments = [])
 * @method \Dew\Acs\Result startRemediation(array $arguments = [])
 * @method \Http\Promise\Promise startRemediationAsync($arguments = [])
 * @method \Dew\Acs\Result listRemediationExecutions(array $arguments = [])
 * @method \Http\Promise\Promise listRemediationExecutionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRemediation(array $arguments = [])
 * @method \Http\Promise\Promise describeRemediationAsync($arguments = [])
 * @method \Dew\Acs\Result createAggregateRemediation(array $arguments = [])
 * @method \Http\Promise\Promise createAggregateRemediationAsync($arguments = [])
 * @method \Dew\Acs\Result updateAggregateRemediation(array $arguments = [])
 * @method \Http\Promise\Promise updateAggregateRemediationAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateRemediations(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateRemediationsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAggregateRemediations(array $arguments = [])
 * @method \Http\Promise\Promise deleteAggregateRemediationsAsync($arguments = [])
 * @method \Dew\Acs\Result startAggregateRemediation(array $arguments = [])
 * @method \Http\Promise\Promise startAggregateRemediationAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateRemediationExecutions(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateRemediationExecutionsAsync($arguments = [])
 * @method \Dew\Acs\Result listRemediationTemplates(array $arguments = [])
 * @method \Http\Promise\Promise listRemediationTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result getRemediationTemplate(array $arguments = [])
 * @method \Http\Promise\Promise getRemediationTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result createConfigDeliveryChannel(array $arguments = [])
 * @method \Http\Promise\Promise createConfigDeliveryChannelAsync($arguments = [])
 * @method \Dew\Acs\Result updateConfigDeliveryChannel(array $arguments = [])
 * @method \Http\Promise\Promise updateConfigDeliveryChannelAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConfigDeliveryChannel(array $arguments = [])
 * @method \Http\Promise\Promise deleteConfigDeliveryChannelAsync($arguments = [])
 * @method \Dew\Acs\Result listConfigDeliveryChannels(array $arguments = [])
 * @method \Http\Promise\Promise listConfigDeliveryChannelsAsync($arguments = [])
 * @method \Dew\Acs\Result getConfigDeliveryChannel(array $arguments = [])
 * @method \Http\Promise\Promise getConfigDeliveryChannelAsync($arguments = [])
 * @method \Dew\Acs\Result createAggregateConfigDeliveryChannel(array $arguments = [])
 * @method \Http\Promise\Promise createAggregateConfigDeliveryChannelAsync($arguments = [])
 * @method \Dew\Acs\Result updateAggregateConfigDeliveryChannel(array $arguments = [])
 * @method \Http\Promise\Promise updateAggregateConfigDeliveryChannelAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAggregateConfigDeliveryChannel(array $arguments = [])
 * @method \Http\Promise\Promise deleteAggregateConfigDeliveryChannelAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateConfigDeliveryChannels(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateConfigDeliveryChannelsAsync($arguments = [])
 * @method \Dew\Acs\Result getAggregateConfigDeliveryChannel(array $arguments = [])
 * @method \Http\Promise\Promise getAggregateConfigDeliveryChannelAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result getIntegratedServiceStatus(array $arguments = [])
 * @method \Http\Promise\Promise getIntegratedServiceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updateIntegratedServiceStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateIntegratedServiceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listIntegratedService(array $arguments = [])
 * @method \Http\Promise\Promise listIntegratedServiceAsync($arguments = [])
 * @method \Dew\Acs\Result getConfigurationRecorder(array $arguments = [])
 * @method \Http\Promise\Promise getConfigurationRecorderAsync($arguments = [])
 * @method \Dew\Acs\Result startConfigurationRecorder(array $arguments = [])
 * @method \Http\Promise\Promise startConfigurationRecorderAsync($arguments = [])
 * @method \Dew\Acs\Result updateConfigurationRecorder(array $arguments = [])
 * @method \Http\Promise\Promise updateConfigurationRecorderAsync($arguments = [])
 * @method \Dew\Acs\Result stopConfigurationRecorder(array $arguments = [])
 * @method \Http\Promise\Promise stopConfigurationRecorderAsync($arguments = [])
 * @method \Dew\Acs\Result dryRunConfigRule(array $arguments = [])
 * @method \Http\Promise\Promise dryRunConfigRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiscoveredResourceBatch(array $arguments = [])
 * @method \Http\Promise\Promise describeDiscoveredResourceBatchAsync($arguments = [])
 * @method \Dew\Acs\Result describeIntegratedServiceStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeIntegratedServiceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceConfigurationSample(array $arguments = [])
 * @method \Http\Promise\Promise getResourceConfigurationSampleAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceTypeProperties(array $arguments = [])
 * @method \Http\Promise\Promise getResourceTypePropertiesAsync($arguments = [])
 * @method \Dew\Acs\Result listAggregateRecommendManagedRules(array $arguments = [])
 * @method \Http\Promise\Promise listAggregateRecommendManagedRulesAsync($arguments = [])
 * @method \Dew\Acs\Result listConfigRuleOperators(array $arguments = [])
 * @method \Http\Promise\Promise listConfigRuleOperatorsAsync($arguments = [])
 * @method \Dew\Acs\Result listRecommendManagedRules(array $arguments = [])
 * @method \Http\Promise\Promise listRecommendManagedRulesAsync($arguments = [])
 */
final class ConfigClient extends AcsClient
{
    //
}

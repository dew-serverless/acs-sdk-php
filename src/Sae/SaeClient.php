<?php

declare(strict_types=1);

namespace Dew\Acs\Sae;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result openSaeService(array $arguments = [])
 * @method \Http\Promise\Promise openSaeServiceAsync($arguments = [])
 * @method \Dew\Acs\Result createNamespace(array $arguments = [])
 * @method \Http\Promise\Promise createNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result createIngress(array $arguments = [])
 * @method \Http\Promise\Promise createIngressAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNamespace(array $arguments = [])
 * @method \Http\Promise\Promise deleteNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIngress(array $arguments = [])
 * @method \Http\Promise\Promise deleteIngressAsync($arguments = [])
 * @method \Dew\Acs\Result updateNamespace(array $arguments = [])
 * @method \Http\Promise\Promise updateNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result updateNamespaceVpc(array $arguments = [])
 * @method \Http\Promise\Promise updateNamespaceVpcAsync($arguments = [])
 * @method \Dew\Acs\Result updateIngress(array $arguments = [])
 * @method \Http\Promise\Promise updateIngressAsync($arguments = [])
 * @method \Dew\Acs\Result describeNamespace(array $arguments = [])
 * @method \Http\Promise\Promise describeNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result describeNamespaces(array $arguments = [])
 * @method \Http\Promise\Promise describeNamespacesAsync($arguments = [])
 * @method \Dew\Acs\Result describeNamespaceList(array $arguments = [])
 * @method \Http\Promise\Promise describeNamespaceListAsync($arguments = [])
 * @method \Dew\Acs\Result listAppEvents(array $arguments = [])
 * @method \Http\Promise\Promise listAppEventsAsync($arguments = [])
 * @method \Dew\Acs\Result listNamespaceChangeOrders(array $arguments = [])
 * @method \Http\Promise\Promise listNamespaceChangeOrdersAsync($arguments = [])
 * @method \Dew\Acs\Result describeNamespaceResources(array $arguments = [])
 * @method \Http\Promise\Promise describeNamespaceResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeIngress(array $arguments = [])
 * @method \Http\Promise\Promise describeIngressAsync($arguments = [])
 * @method \Dew\Acs\Result listIngresses(array $arguments = [])
 * @method \Http\Promise\Promise listIngressesAsync($arguments = [])
 * @method \Dew\Acs\Result describePipeline(array $arguments = [])
 * @method \Http\Promise\Promise describePipelineAsync($arguments = [])
 * @method \Dew\Acs\Result getArmsTopNMetric(array $arguments = [])
 * @method \Http\Promise\Promise getArmsTopNMetricAsync($arguments = [])
 * @method \Dew\Acs\Result getChangeOrderMetric(array $arguments = [])
 * @method \Http\Promise\Promise getChangeOrderMetricAsync($arguments = [])
 * @method \Dew\Acs\Result getScaleAppMetric(array $arguments = [])
 * @method \Http\Promise\Promise getScaleAppMetricAsync($arguments = [])
 * @method \Dew\Acs\Result getWarningEventMetric(array $arguments = [])
 * @method \Http\Promise\Promise getWarningEventMetricAsync($arguments = [])
 * @method \Dew\Acs\Result createApplication(array $arguments = [])
 * @method \Http\Promise\Promise createApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApplication(array $arguments = [])
 * @method \Http\Promise\Promise deleteApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result stopApplication(array $arguments = [])
 * @method \Http\Promise\Promise stopApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result startApplication(array $arguments = [])
 * @method \Http\Promise\Promise startApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result reduceApplicationCapacityByInstanceIds(array $arguments = [])
 * @method \Http\Promise\Promise reduceApplicationCapacityByInstanceIdsAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplicationDescription(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result updateAppSecurityGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateAppSecurityGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listChangeOrders(array $arguments = [])
 * @method \Http\Promise\Promise listChangeOrdersAsync($arguments = [])
 * @method \Dew\Acs\Result describeChangeOrder(array $arguments = [])
 * @method \Http\Promise\Promise describeChangeOrderAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceSpecifications(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceSpecificationsAsync($arguments = [])
 * @method \Dew\Acs\Result deployApplication(array $arguments = [])
 * @method \Http\Promise\Promise deployApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result rescaleApplicationVertically(array $arguments = [])
 * @method \Http\Promise\Promise rescaleApplicationVerticallyAsync($arguments = [])
 * @method \Dew\Acs\Result confirmPipelineBatch(array $arguments = [])
 * @method \Http\Promise\Promise confirmPipelineBatchAsync($arguments = [])
 * @method \Dew\Acs\Result abortAndRollbackChangeOrder(array $arguments = [])
 * @method \Http\Promise\Promise abortAndRollbackChangeOrderAsync($arguments = [])
 * @method \Dew\Acs\Result rescaleApplication(array $arguments = [])
 * @method \Http\Promise\Promise rescaleApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result restartApplication(array $arguments = [])
 * @method \Http\Promise\Promise restartApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result abortChangeOrder(array $arguments = [])
 * @method \Http\Promise\Promise abortChangeOrderAsync($arguments = [])
 * @method \Dew\Acs\Result rollbackApplication(array $arguments = [])
 * @method \Http\Promise\Promise rollbackApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result batchStopApplications(array $arguments = [])
 * @method \Http\Promise\Promise batchStopApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result batchStartApplications(array $arguments = [])
 * @method \Http\Promise\Promise batchStartApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result listConsumedServices(array $arguments = [])
 * @method \Http\Promise\Promise listConsumedServicesAsync($arguments = [])
 * @method \Dew\Acs\Result listPublishedServices(array $arguments = [])
 * @method \Http\Promise\Promise listPublishedServicesAsync($arguments = [])
 * @method \Dew\Acs\Result createSecret(array $arguments = [])
 * @method \Http\Promise\Promise createSecretAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecret(array $arguments = [])
 * @method \Http\Promise\Promise describeSecretAsync($arguments = [])
 * @method \Dew\Acs\Result listSecrets(array $arguments = [])
 * @method \Http\Promise\Promise listSecretsAsync($arguments = [])
 * @method \Dew\Acs\Result updateSecret(array $arguments = [])
 * @method \Http\Promise\Promise updateSecretAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSecret(array $arguments = [])
 * @method \Http\Promise\Promise deleteSecretAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createConfigMap(array $arguments = [])
 * @method \Http\Promise\Promise createConfigMapAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConfigMap(array $arguments = [])
 * @method \Http\Promise\Promise deleteConfigMapAsync($arguments = [])
 * @method \Dew\Acs\Result updateConfigMap(array $arguments = [])
 * @method \Http\Promise\Promise updateConfigMapAsync($arguments = [])
 * @method \Dew\Acs\Result describeConfigMap(array $arguments = [])
 * @method \Http\Promise\Promise describeConfigMapAsync($arguments = [])
 * @method \Dew\Acs\Result listNamespacedConfigMaps(array $arguments = [])
 * @method \Http\Promise\Promise listNamespacedConfigMapsAsync($arguments = [])
 * @method \Dew\Acs\Result createGreyTagRoute(array $arguments = [])
 * @method \Http\Promise\Promise createGreyTagRouteAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGreyTagRoute(array $arguments = [])
 * @method \Http\Promise\Promise deleteGreyTagRouteAsync($arguments = [])
 * @method \Dew\Acs\Result updateGreyTagRoute(array $arguments = [])
 * @method \Http\Promise\Promise updateGreyTagRouteAsync($arguments = [])
 * @method \Dew\Acs\Result describeGreyTagRoute(array $arguments = [])
 * @method \Http\Promise\Promise describeGreyTagRouteAsync($arguments = [])
 * @method \Dew\Acs\Result listGreyTagRoute(array $arguments = [])
 * @method \Http\Promise\Promise listGreyTagRouteAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceLog(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponents(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentsAsync($arguments = [])
 * @method \Dew\Acs\Result describeEdasContainers(array $arguments = [])
 * @method \Http\Promise\Promise describeEdasContainersAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationImage(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationImageAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result listApplications(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result queryResourceStatics(array $arguments = [])
 * @method \Http\Promise\Promise queryResourceStaticsAsync($arguments = [])
 * @method \Dew\Acs\Result listLogConfigs(array $arguments = [])
 * @method \Http\Promise\Promise listLogConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result listAppVersions(array $arguments = [])
 * @method \Http\Promise\Promise listAppVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result restartInstances(array $arguments = [])
 * @method \Http\Promise\Promise restartInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result getAvailabilityMetric(array $arguments = [])
 * @method \Http\Promise\Promise getAvailabilityMetricAsync($arguments = [])
 * @method \Dew\Acs\Result describeAppServiceDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeAppServiceDetailAsync($arguments = [])
 * @method \Dew\Acs\Result listAppServicesPage(array $arguments = [])
 * @method \Http\Promise\Promise listAppServicesPageAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationSlbs(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationSlbsAsync($arguments = [])
 * @method \Dew\Acs\Result bindSlb(array $arguments = [])
 * @method \Http\Promise\Promise bindSlbAsync($arguments = [])
 * @method \Dew\Acs\Result unbindSlb(array $arguments = [])
 * @method \Http\Promise\Promise unbindSlbAsync($arguments = [])
 * @method \Dew\Acs\Result createApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise createApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise disableApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result enableApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise enableApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationScalingRules(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationScalingRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createWebApplication(array $arguments = [])
 * @method \Http\Promise\Promise createWebApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebApplication(array $arguments = [])
 * @method \Http\Promise\Promise describeWebApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listWebApplications(array $arguments = [])
 * @method \Http\Promise\Promise listWebApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result updateWebApplication(array $arguments = [])
 * @method \Http\Promise\Promise updateWebApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebApplication(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result updateWebApplicationScalingConfig(array $arguments = [])
 * @method \Http\Promise\Promise updateWebApplicationScalingConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebApplicationScalingConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeWebApplicationScalingConfigAsync($arguments = [])
 * @method \Dew\Acs\Result stopWebApplication(array $arguments = [])
 * @method \Http\Promise\Promise stopWebApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result startWebApplication(array $arguments = [])
 * @method \Http\Promise\Promise startWebApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result updateWebApplicationTrafficConfig(array $arguments = [])
 * @method \Http\Promise\Promise updateWebApplicationTrafficConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebApplicationTrafficConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeWebApplicationTrafficConfigAsync($arguments = [])
 * @method \Dew\Acs\Result publishWebApplicationRevision(array $arguments = [])
 * @method \Http\Promise\Promise publishWebApplicationRevisionAsync($arguments = [])
 * @method \Dew\Acs\Result listWebApplicationRevisions(array $arguments = [])
 * @method \Http\Promise\Promise listWebApplicationRevisionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebApplicationRevision(array $arguments = [])
 * @method \Http\Promise\Promise describeWebApplicationRevisionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebApplicationRevision(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebApplicationRevisionAsync($arguments = [])
 * @method \Dew\Acs\Result createWebCustomDomain(array $arguments = [])
 * @method \Http\Promise\Promise createWebCustomDomainAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebCustomDomain(array $arguments = [])
 * @method \Http\Promise\Promise describeWebCustomDomainAsync($arguments = [])
 * @method \Dew\Acs\Result listWebCustomDomains(array $arguments = [])
 * @method \Http\Promise\Promise listWebCustomDomainsAsync($arguments = [])
 * @method \Dew\Acs\Result updateWebCustomDomain(array $arguments = [])
 * @method \Http\Promise\Promise updateWebCustomDomainAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebCustomDomain(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebCustomDomainAsync($arguments = [])
 * @method \Dew\Acs\Result listWebApplicationInstances(array $arguments = [])
 * @method \Http\Promise\Promise listWebApplicationInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebInstanceLogs(array $arguments = [])
 * @method \Http\Promise\Promise describeWebInstanceLogsAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebApplicationResourceStatics(array $arguments = [])
 * @method \Http\Promise\Promise describeWebApplicationResourceStaticsAsync($arguments = [])
 * @method \Dew\Acs\Result createJob(array $arguments = [])
 * @method \Http\Promise\Promise createJobAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHistoryJob(array $arguments = [])
 * @method \Http\Promise\Promise deleteHistoryJobAsync($arguments = [])
 * @method \Dew\Acs\Result deleteJob(array $arguments = [])
 * @method \Http\Promise\Promise deleteJobAsync($arguments = [])
 * @method \Dew\Acs\Result describeJobStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeJobStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeJob(array $arguments = [])
 * @method \Http\Promise\Promise describeJobAsync($arguments = [])
 * @method \Dew\Acs\Result execJob(array $arguments = [])
 * @method \Http\Promise\Promise execJobAsync($arguments = [])
 * @method \Dew\Acs\Result listJobs(array $arguments = [])
 * @method \Http\Promise\Promise listJobsAsync($arguments = [])
 * @method \Dew\Acs\Result suspendJob(array $arguments = [])
 * @method \Http\Promise\Promise suspendJobAsync($arguments = [])
 * @method \Dew\Acs\Result updateJob(array $arguments = [])
 * @method \Http\Promise\Promise updateJobAsync($arguments = [])
 * @method \Dew\Acs\Result describeJobHistory(array $arguments = [])
 * @method \Http\Promise\Promise describeJobHistoryAsync($arguments = [])
 * @method \Dew\Acs\Result describeConfigurationPrice(array $arguments = [])
 * @method \Http\Promise\Promise describeConfigurationPriceAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplicationVswitches(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationVswitchesAsync($arguments = [])
 */
final class SaeClient extends AcsClient
{
    //
}

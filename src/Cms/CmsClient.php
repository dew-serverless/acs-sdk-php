<?php

declare(strict_types=1);

namespace Dew\Acs\Cms;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createMonitorGroup(array $arguments = [])
 * @method \Http\Promise\Promise createMonitorGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyMonitorGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyMonitorGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMonitorGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteMonitorGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitorGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitorGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createMonitorGroupInstances(array $arguments = [])
 * @method \Http\Promise\Promise createMonitorGroupInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyMonitorGroupInstances(array $arguments = [])
 * @method \Http\Promise\Promise modifyMonitorGroupInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitorGroupInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitorGroupInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitorGroupDynamicRules(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitorGroupDynamicRulesAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitorGroupInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitorGroupInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMonitorGroupDynamicRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteMonitorGroupDynamicRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMonitorGroupInstances(array $arguments = [])
 * @method \Http\Promise\Promise deleteMonitorGroupInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitorGroupCategories(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitorGroupCategoriesAsync($arguments = [])
 * @method \Dew\Acs\Result putMonitorGroupDynamicRule(array $arguments = [])
 * @method \Http\Promise\Promise putMonitorGroupDynamicRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createGroupMonitoringAgentProcess(array $arguments = [])
 * @method \Http\Promise\Promise createGroupMonitoringAgentProcessAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGroupMonitoringAgentProcess(array $arguments = [])
 * @method \Http\Promise\Promise modifyGroupMonitoringAgentProcessAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGroupMonitoringAgentProcess(array $arguments = [])
 * @method \Http\Promise\Promise deleteGroupMonitoringAgentProcessAsync($arguments = [])
 * @method \Dew\Acs\Result describeGroupMonitoringAgentProcess(array $arguments = [])
 * @method \Http\Promise\Promise describeGroupMonitoringAgentProcessAsync($arguments = [])
 * @method \Dew\Acs\Result createMonitorGroupNotifyPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createMonitorGroupNotifyPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMonitorGroupNotifyPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteMonitorGroupNotifyPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitorGroupNotifyPolicyList(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitorGroupNotifyPolicyListAsync($arguments = [])
 * @method \Dew\Acs\Result addTags(array $arguments = [])
 * @method \Http\Promise\Promise addTagsAsync($arguments = [])
 * @method \Dew\Acs\Result createDynamicTagGroup(array $arguments = [])
 * @method \Http\Promise\Promise createDynamicTagGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDynamicTagGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteDynamicTagGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeTagValueList(array $arguments = [])
 * @method \Http\Promise\Promise describeTagValueListAsync($arguments = [])
 * @method \Dew\Acs\Result describeTagKeyList(array $arguments = [])
 * @method \Http\Promise\Promise describeTagKeyListAsync($arguments = [])
 * @method \Dew\Acs\Result describeProductResourceTagKeyList(array $arguments = [])
 * @method \Http\Promise\Promise describeProductResourceTagKeyListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDynamicTagRuleList(array $arguments = [])
 * @method \Http\Promise\Promise describeDynamicTagRuleListAsync($arguments = [])
 * @method \Dew\Acs\Result removeTags(array $arguments = [])
 * @method \Http\Promise\Promise removeTagsAsync($arguments = [])
 * @method \Dew\Acs\Result createHostAvailability(array $arguments = [])
 * @method \Http\Promise\Promise createHostAvailabilityAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHostAvailability(array $arguments = [])
 * @method \Http\Promise\Promise deleteHostAvailabilityAsync($arguments = [])
 * @method \Dew\Acs\Result enableHostAvailability(array $arguments = [])
 * @method \Http\Promise\Promise enableHostAvailabilityAsync($arguments = [])
 * @method \Dew\Acs\Result disableHostAvailability(array $arguments = [])
 * @method \Http\Promise\Promise disableHostAvailabilityAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHostAvailability(array $arguments = [])
 * @method \Http\Promise\Promise modifyHostAvailabilityAsync($arguments = [])
 * @method \Dew\Acs\Result describeUnhealthyHostAvailability(array $arguments = [])
 * @method \Http\Promise\Promise describeUnhealthyHostAvailabilityAsync($arguments = [])
 * @method \Dew\Acs\Result describeHostAvailabilityList(array $arguments = [])
 * @method \Http\Promise\Promise describeHostAvailabilityListAsync($arguments = [])
 * @method \Dew\Acs\Result installMonitoringAgent(array $arguments = [])
 * @method \Http\Promise\Promise installMonitoringAgentAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitoringAgentHosts(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitoringAgentHostsAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitoringAgentAccessKey(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitoringAgentAccessKeyAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitoringAgentConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitoringAgentConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitoringAgentStatuses(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitoringAgentStatusesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHostInfo(array $arguments = [])
 * @method \Http\Promise\Promise modifyHostInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitoringConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitoringConfigAsync($arguments = [])
 * @method \Dew\Acs\Result putMonitoringConfig(array $arguments = [])
 * @method \Http\Promise\Promise putMonitoringConfigAsync($arguments = [])
 * @method \Dew\Acs\Result uninstallMonitoringAgent(array $arguments = [])
 * @method \Http\Promise\Promise uninstallMonitoringAgentAsync($arguments = [])
 * @method \Dew\Acs\Result createMonitoringAgentProcess(array $arguments = [])
 * @method \Http\Promise\Promise createMonitoringAgentProcessAsync($arguments = [])
 * @method \Dew\Acs\Result createMonitorAgentProcess(array $arguments = [])
 * @method \Http\Promise\Promise createMonitorAgentProcessAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitoringAgentProcesses(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitoringAgentProcessesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMonitoringAgentProcess(array $arguments = [])
 * @method \Http\Promise\Promise deleteMonitoringAgentProcessAsync($arguments = [])
 * @method \Dew\Acs\Result describeSystemEventHistogram(array $arguments = [])
 * @method \Http\Promise\Promise describeSystemEventHistogramAsync($arguments = [])
 * @method \Dew\Acs\Result describeSystemEventMetaList(array $arguments = [])
 * @method \Http\Promise\Promise describeSystemEventMetaListAsync($arguments = [])
 * @method \Dew\Acs\Result describeSystemEventAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeSystemEventAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeSystemEventCount(array $arguments = [])
 * @method \Http\Promise\Promise describeSystemEventCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitorResourceQuotaAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitorResourceQuotaAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result sendDryRunSystemEvent(array $arguments = [])
 * @method \Http\Promise\Promise sendDryRunSystemEventAsync($arguments = [])
 * @method \Dew\Acs\Result describeCustomEventCount(array $arguments = [])
 * @method \Http\Promise\Promise describeCustomEventCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeCustomEventHistogram(array $arguments = [])
 * @method \Http\Promise\Promise describeCustomEventHistogramAsync($arguments = [])
 * @method \Dew\Acs\Result describeCustomEventAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeCustomEventAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result putCustomEvent(array $arguments = [])
 * @method \Http\Promise\Promise putCustomEventAsync($arguments = [])
 * @method \Dew\Acs\Result putCustomMetric(array $arguments = [])
 * @method \Http\Promise\Promise putCustomMetricAsync($arguments = [])
 * @method \Dew\Acs\Result putCustomMetricRule(array $arguments = [])
 * @method \Http\Promise\Promise putCustomMetricRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeCustomMetricList(array $arguments = [])
 * @method \Http\Promise\Promise describeCustomMetricListAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomMetric(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomMetricAsync($arguments = [])
 * @method \Dew\Acs\Result putLogMonitor(array $arguments = [])
 * @method \Http\Promise\Promise putLogMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLogMonitor(array $arguments = [])
 * @method \Http\Promise\Promise deleteLogMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result describeLogMonitorList(array $arguments = [])
 * @method \Http\Promise\Promise describeLogMonitorListAsync($arguments = [])
 * @method \Dew\Acs\Result describeLogMonitorAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeLogMonitorAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result createMonitorGroupByResourceGroupId(array $arguments = [])
 * @method \Http\Promise\Promise createMonitorGroupByResourceGroupIdAsync($arguments = [])
 * @method \Dew\Acs\Result createSiteMonitor(array $arguments = [])
 * @method \Http\Promise\Promise createSiteMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result createInstantSiteMonitor(array $arguments = [])
 * @method \Http\Promise\Promise createInstantSiteMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result batchCreateOnceSiteMonitor(array $arguments = []) {@deprecated 2019-01-01}
 * @method \Http\Promise\Promise batchCreateOnceSiteMonitorAsync($arguments = []) {@deprecated 2019-01-01}
 * @method \Dew\Acs\Result batchCreateInstantSiteMonitor(array $arguments = [])
 * @method \Http\Promise\Promise batchCreateInstantSiteMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSiteMonitors(array $arguments = [])
 * @method \Http\Promise\Promise deleteSiteMonitorsAsync($arguments = [])
 * @method \Dew\Acs\Result disableSiteMonitors(array $arguments = [])
 * @method \Http\Promise\Promise disableSiteMonitorsAsync($arguments = [])
 * @method \Dew\Acs\Result modifySiteMonitor(array $arguments = [])
 * @method \Http\Promise\Promise modifySiteMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result enableSiteMonitors(array $arguments = [])
 * @method \Http\Promise\Promise enableSiteMonitorsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSiteMonitorQuota(array $arguments = [])
 * @method \Http\Promise\Promise describeSiteMonitorQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result describeSiteMonitorAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeSiteMonitorAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeSiteMonitorISPCityList(array $arguments = [])
 * @method \Http\Promise\Promise describeSiteMonitorISPCityListAsync($arguments = [])
 * @method \Dew\Acs\Result describeSiteMonitorData(array $arguments = [])
 * @method \Http\Promise\Promise describeSiteMonitorDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeSiteMonitorStatistics(array $arguments = [])
 * @method \Http\Promise\Promise describeSiteMonitorStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSiteMonitorList(array $arguments = [])
 * @method \Http\Promise\Promise describeSiteMonitorListAsync($arguments = [])
 * @method \Dew\Acs\Result describeSiteMonitorLog(array $arguments = [])
 * @method \Http\Promise\Promise describeSiteMonitorLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeSiteInstantMonitorLog(array $arguments = [])
 * @method \Http\Promise\Promise describeSiteInstantMonitorLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricLast(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricLastAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricList(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricListAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricData(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricMetaList(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricMetaListAsync($arguments = [])
 * @method \Dew\Acs\Result describeProjectMeta(array $arguments = [])
 * @method \Http\Promise\Promise describeProjectMetaAsync($arguments = [])
 * @method \Dew\Acs\Result deleteExporterOutput(array $arguments = [])
 * @method \Http\Promise\Promise deleteExporterOutputAsync($arguments = [])
 * @method \Dew\Acs\Result deleteExporterRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteExporterRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeExporterOutputList(array $arguments = [])
 * @method \Http\Promise\Promise describeExporterOutputListAsync($arguments = [])
 * @method \Dew\Acs\Result describeExporterRuleList(array $arguments = [])
 * @method \Http\Promise\Promise describeExporterRuleListAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricTop(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricTopAsync($arguments = [])
 * @method \Dew\Acs\Result putExporterOutput(array $arguments = [])
 * @method \Http\Promise\Promise putExporterOutputAsync($arguments = [])
 * @method \Dew\Acs\Result putExporterRule(array $arguments = [])
 * @method \Http\Promise\Promise putExporterRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeAlertHistoryList(array $arguments = []) {@deprecated 2019-01-01}
 * @method \Http\Promise\Promise describeAlertHistoryListAsync($arguments = []) {@deprecated 2019-01-01}
 * @method \Dew\Acs\Result describeAlertLogCount(array $arguments = [])
 * @method \Http\Promise\Promise describeAlertLogCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeAlertLogList(array $arguments = [])
 * @method \Http\Promise\Promise describeAlertLogListAsync($arguments = [])
 * @method \Dew\Acs\Result describeAlertLogHistogram(array $arguments = [])
 * @method \Http\Promise\Promise describeAlertLogHistogramAsync($arguments = [])
 * @method \Dew\Acs\Result describeProductsOfActiveMetricRule(array $arguments = [])
 * @method \Http\Promise\Promise describeProductsOfActiveMetricRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveMetricRuleList(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveMetricRuleListAsync($arguments = [])
 * @method \Dew\Acs\Result enableActiveMetricRule(array $arguments = [])
 * @method \Http\Promise\Promise enableActiveMetricRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableActiveMetricRule(array $arguments = [])
 * @method \Http\Promise\Promise disableActiveMetricRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createMetricRuleTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createMetricRuleTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMetricRuleTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteMetricRuleTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result modifyMetricRuleTemplate(array $arguments = [])
 * @method \Http\Promise\Promise modifyMetricRuleTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricRuleTemplateAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricRuleTemplateAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricRuleTemplateList(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricRuleTemplateListAsync($arguments = [])
 * @method \Dew\Acs\Result applyMetricRuleTemplate(array $arguments = [])
 * @method \Http\Promise\Promise applyMetricRuleTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricRuleList(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricRuleListAsync($arguments = [])
 * @method \Dew\Acs\Result createGroupMetricRules(array $arguments = [])
 * @method \Http\Promise\Promise createGroupMetricRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createMetricRuleResources(array $arguments = [])
 * @method \Http\Promise\Promise createMetricRuleResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMetricRuleTargets(array $arguments = [])
 * @method \Http\Promise\Promise deleteMetricRuleTargetsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMetricRules(array $arguments = [])
 * @method \Http\Promise\Promise deleteMetricRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMetricRuleResources(array $arguments = [])
 * @method \Http\Promise\Promise deleteMetricRuleResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result enableMetricRules(array $arguments = [])
 * @method \Http\Promise\Promise enableMetricRulesAsync($arguments = [])
 * @method \Dew\Acs\Result disableMetricRules(array $arguments = [])
 * @method \Http\Promise\Promise disableMetricRulesAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricRuleTargets(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricRuleTargetsAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricRuleCount(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricRuleCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeAlertingMetricRuleResources(array $arguments = [])
 * @method \Http\Promise\Promise describeAlertingMetricRuleResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result putMetricRuleTargets(array $arguments = [])
 * @method \Http\Promise\Promise putMetricRuleTargetsAsync($arguments = [])
 * @method \Dew\Acs\Result putResourceMetricRule(array $arguments = [])
 * @method \Http\Promise\Promise putResourceMetricRuleAsync($arguments = [])
 * @method \Dew\Acs\Result putResourceMetricRules(array $arguments = [])
 * @method \Http\Promise\Promise putResourceMetricRulesAsync($arguments = [])
 * @method \Dew\Acs\Result putGroupMetricRule(array $arguments = [])
 * @method \Http\Promise\Promise putGroupMetricRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEventRuleTargets(array $arguments = [])
 * @method \Http\Promise\Promise deleteEventRuleTargetsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEventRules(array $arguments = [])
 * @method \Http\Promise\Promise deleteEventRulesAsync($arguments = [])
 * @method \Dew\Acs\Result enableEventRules(array $arguments = [])
 * @method \Http\Promise\Promise enableEventRulesAsync($arguments = [])
 * @method \Dew\Acs\Result disableEventRules(array $arguments = [])
 * @method \Http\Promise\Promise disableEventRulesAsync($arguments = [])
 * @method \Dew\Acs\Result describeEventRuleAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeEventRuleAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeEventRuleList(array $arguments = [])
 * @method \Http\Promise\Promise describeEventRuleListAsync($arguments = [])
 * @method \Dew\Acs\Result describeEventRuleTargetList(array $arguments = [])
 * @method \Http\Promise\Promise describeEventRuleTargetListAsync($arguments = [])
 * @method \Dew\Acs\Result putEventRuleTargets(array $arguments = [])
 * @method \Http\Promise\Promise putEventRuleTargetsAsync($arguments = [])
 * @method \Dew\Acs\Result putEventRule(array $arguments = [])
 * @method \Http\Promise\Promise putEventRuleAsync($arguments = [])
 * @method \Dew\Acs\Result putCustomEventRule(array $arguments = [])
 * @method \Http\Promise\Promise putCustomEventRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createMetricRuleBlackList(array $arguments = [])
 * @method \Http\Promise\Promise createMetricRuleBlackListAsync($arguments = [])
 * @method \Dew\Acs\Result modifyMetricRuleBlackList(array $arguments = [])
 * @method \Http\Promise\Promise modifyMetricRuleBlackListAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMetricRuleBlackList(array $arguments = [])
 * @method \Http\Promise\Promise deleteMetricRuleBlackListAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricRuleBlackList(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricRuleBlackListAsync($arguments = [])
 * @method \Dew\Acs\Result enableMetricRuleBlackList(array $arguments = [])
 * @method \Http\Promise\Promise enableMetricRuleBlackListAsync($arguments = [])
 * @method \Dew\Acs\Result deleteContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteContact(array $arguments = [])
 * @method \Http\Promise\Promise deleteContactAsync($arguments = [])
 * @method \Dew\Acs\Result describeContactListByContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeContactListByContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeContactGroupList(array $arguments = [])
 * @method \Http\Promise\Promise describeContactGroupListAsync($arguments = [])
 * @method \Dew\Acs\Result describeContactList(array $arguments = [])
 * @method \Http\Promise\Promise describeContactListAsync($arguments = [])
 * @method \Dew\Acs\Result putContact(array $arguments = [])
 * @method \Http\Promise\Promise putContactAsync($arguments = [])
 * @method \Dew\Acs\Result putContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise putContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createHybridMonitorNamespace(array $arguments = [])
 * @method \Http\Promise\Promise createHybridMonitorNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHybridMonitorNamespace(array $arguments = [])
 * @method \Http\Promise\Promise modifyHybridMonitorNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHybridMonitorNamespace(array $arguments = [])
 * @method \Http\Promise\Promise deleteHybridMonitorNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result describeHybridMonitorNamespaceList(array $arguments = [])
 * @method \Http\Promise\Promise describeHybridMonitorNamespaceListAsync($arguments = [])
 * @method \Dew\Acs\Result createHybridMonitorTask(array $arguments = [])
 * @method \Http\Promise\Promise createHybridMonitorTaskAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHybridMonitorTask(array $arguments = [])
 * @method \Http\Promise\Promise modifyHybridMonitorTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHybridMonitorTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteHybridMonitorTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeHybridMonitorTaskList(array $arguments = [])
 * @method \Http\Promise\Promise describeHybridMonitorTaskListAsync($arguments = [])
 * @method \Dew\Acs\Result putHybridMonitorMetricData(array $arguments = [])
 * @method \Http\Promise\Promise putHybridMonitorMetricDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeHybridMonitorDataList(array $arguments = [])
 * @method \Http\Promise\Promise describeHybridMonitorDataListAsync($arguments = [])
 * @method \Dew\Acs\Result createHybridMonitorSLSGroup(array $arguments = [])
 * @method \Http\Promise\Promise createHybridMonitorSLSGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHybridMonitorSLSGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyHybridMonitorSLSGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHybridMonitorSLSGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteHybridMonitorSLSGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeHybridMonitorSLSGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeHybridMonitorSLSGroupAsync($arguments = [])
 * @method \Dew\Acs\Result cursor(array $arguments = [])
 * @method \Http\Promise\Promise cursorAsync($arguments = [])
 * @method \Dew\Acs\Result batchExport(array $arguments = [])
 * @method \Http\Promise\Promise batchExportAsync($arguments = [])
 * @method \Dew\Acs\Result openCmsService(array $arguments = []) {@deprecated 2019-01-01}
 * @method \Http\Promise\Promise openCmsServiceAsync($arguments = []) {@deprecated 2019-01-01}
 * @method \Dew\Acs\Result describeSyntheticProbeList(array $arguments = [])
 * @method \Http\Promise\Promise describeSyntheticProbeListAsync($arguments = [])
 */
final class CmsClient extends AcsClient
{
    //
}

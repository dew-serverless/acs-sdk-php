<?php

declare(strict_types=1);

namespace Dew\Acs\Ddoscoo;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result releaseInstance(array $arguments = [])
 * @method \Http\Promise\Promise releaseInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceRemark(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceRemarkAsync($arguments = [])
 * @method \Dew\Acs\Result modifyElasticBandWidth(array $arguments = [])
 * @method \Http\Promise\Promise modifyElasticBandWidthAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceIds(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceIdsAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeElasticBandwidthSpec(array $arguments = [])
 * @method \Http\Promise\Promise describeElasticBandwidthSpecAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceStatistics(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceSpecs(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceSpecsAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceDetails(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyElasticBizQps(array $arguments = [])
 * @method \Http\Promise\Promise modifyElasticBizQpsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyQpsMode(array $arguments = [])
 * @method \Http\Promise\Promise modifyQpsModeAsync($arguments = [])
 * @method \Dew\Acs\Result createWebRule(array $arguments = [])
 * @method \Http\Promise\Promise createWebRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTlsConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyTlsConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHttp2Enable(array $arguments = [])
 * @method \Http\Promise\Promise modifyHttp2EnableAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebAccessMode(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebAccessModeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCnameReuse(array $arguments = [])
 * @method \Http\Promise\Promise modifyCnameReuseAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebRules(array $arguments = [])
 * @method \Http\Promise\Promise describeWebRulesAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebInstanceRelations(array $arguments = [])
 * @method \Http\Promise\Promise describeWebInstanceRelationsAsync($arguments = [])
 * @method \Dew\Acs\Result describeCerts(array $arguments = [])
 * @method \Http\Promise\Promise describeCertsAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebCustomPorts(array $arguments = [])
 * @method \Http\Promise\Promise describeWebCustomPortsAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebAccessMode(array $arguments = [])
 * @method \Http\Promise\Promise describeWebAccessModeAsync($arguments = [])
 * @method \Dew\Acs\Result describeCnameReuses(array $arguments = [])
 * @method \Http\Promise\Promise describeCnameReusesAsync($arguments = [])
 * @method \Dew\Acs\Result describeL7RsPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeL7RsPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result associateWebCert(array $arguments = [])
 * @method \Http\Promise\Promise associateWebCertAsync($arguments = [])
 * @method \Dew\Acs\Result configL7RsPolicy(array $arguments = [])
 * @method \Http\Promise\Promise configL7RsPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyOcspStatus(array $arguments = [])
 * @method \Http\Promise\Promise modifyOcspStatusAsync($arguments = [])
 * @method \Dew\Acs\Result configL7UsKeepalive(array $arguments = [])
 * @method \Http\Promise\Promise configL7UsKeepaliveAsync($arguments = [])
 * @method \Dew\Acs\Result describeL7UsKeepalive(array $arguments = [])
 * @method \Http\Promise\Promise describeL7UsKeepaliveAsync($arguments = [])
 * @method \Dew\Acs\Result createAsyncTask(array $arguments = [])
 * @method \Http\Promise\Promise createAsyncTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAsyncTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteAsyncTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createNetworkRules(array $arguments = [])
 * @method \Http\Promise\Promise createNetworkRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNetworkRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteNetworkRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHealthCheckConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyHealthCheckConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeNetworkRules(array $arguments = [])
 * @method \Http\Promise\Promise describeNetworkRulesAsync($arguments = [])
 * @method \Dew\Acs\Result describeHealthCheckStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeHealthCheckStatusAsync($arguments = [])
 * @method \Dew\Acs\Result configNetworkRules(array $arguments = [])
 * @method \Http\Promise\Promise configNetworkRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createSchedulerRule(array $arguments = [])
 * @method \Http\Promise\Promise createSchedulerRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSchedulerRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteSchedulerRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifySchedulerRule(array $arguments = [])
 * @method \Http\Promise\Promise modifySchedulerRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeSchedulerRules(array $arguments = [])
 * @method \Http\Promise\Promise describeSchedulerRulesAsync($arguments = [])
 * @method \Dew\Acs\Result switchSchedulerRule(array $arguments = [])
 * @method \Http\Promise\Promise switchSchedulerRuleAsync($arguments = [])
 * @method \Dew\Acs\Result addAutoCcBlacklist(array $arguments = [])
 * @method \Http\Promise\Promise addAutoCcBlacklistAsync($arguments = [])
 * @method \Dew\Acs\Result addAutoCcWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise addAutoCcWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAutoCcBlacklist(array $arguments = [])
 * @method \Http\Promise\Promise deleteAutoCcBlacklistAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAutoCcWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise deleteAutoCcWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBlackholeStatus(array $arguments = [])
 * @method \Http\Promise\Promise modifyBlackholeStatusAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBlockStatus(array $arguments = [])
 * @method \Http\Promise\Promise modifyBlockStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeAutoCcListCount(array $arguments = [])
 * @method \Http\Promise\Promise describeAutoCcListCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeAutoCcBlacklist(array $arguments = [])
 * @method \Http\Promise\Promise describeAutoCcBlacklistAsync($arguments = [])
 * @method \Dew\Acs\Result describeAutoCcWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise describeAutoCcWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result describeUnBlackholeCount(array $arguments = [])
 * @method \Http\Promise\Promise describeUnBlackholeCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeBlackholeStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeBlackholeStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeNetworkRegionBlock(array $arguments = [])
 * @method \Http\Promise\Promise describeNetworkRegionBlockAsync($arguments = [])
 * @method \Dew\Acs\Result describeBlockStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeBlockStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeUnBlockCount(array $arguments = [])
 * @method \Http\Promise\Promise describeUnBlockCountAsync($arguments = [])
 * @method \Dew\Acs\Result emptyAutoCcBlacklist(array $arguments = [])
 * @method \Http\Promise\Promise emptyAutoCcBlacklistAsync($arguments = [])
 * @method \Dew\Acs\Result emptyAutoCcWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise emptyAutoCcWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result configNetworkRegionBlock(array $arguments = [])
 * @method \Http\Promise\Promise configNetworkRegionBlockAsync($arguments = [])
 * @method \Dew\Acs\Result describeUdpReflect(array $arguments = [])
 * @method \Http\Promise\Promise describeUdpReflectAsync($arguments = [])
 * @method \Dew\Acs\Result configUdpReflect(array $arguments = [])
 * @method \Http\Promise\Promise configUdpReflectAsync($arguments = [])
 * @method \Dew\Acs\Result createWebCCRule(array $arguments = [])
 * @method \Http\Promise\Promise createWebCCRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebCCRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebCCRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebPreciseAccessRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebPreciseAccessRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebAIProtectSwitch(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebAIProtectSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebAIProtectMode(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebAIProtectModeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebIpSetSwitch(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebIpSetSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result enableWebCC(array $arguments = [])
 * @method \Http\Promise\Promise enableWebCCAsync($arguments = [])
 * @method \Dew\Acs\Result disableWebCC(array $arguments = [])
 * @method \Http\Promise\Promise disableWebCCAsync($arguments = [])
 * @method \Dew\Acs\Result enableWebCCRule(array $arguments = [])
 * @method \Http\Promise\Promise enableWebCCRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableWebCCRule(array $arguments = [])
 * @method \Http\Promise\Promise disableWebCCRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebCCRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebCCRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebPreciseAccessSwitch(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebPreciseAccessSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebPreciseAccessRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebPreciseAccessRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebAreaBlockSwitch(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebAreaBlockSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebAreaBlock(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebAreaBlockAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebCcProtectSwitch(array $arguments = [])
 * @method \Http\Promise\Promise describeWebCcProtectSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebCCRules(array $arguments = [])
 * @method \Http\Promise\Promise describeWebCCRulesAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebPreciseAccessRule(array $arguments = [])
 * @method \Http\Promise\Promise describeWebPreciseAccessRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebAreaBlockConfigs(array $arguments = [])
 * @method \Http\Promise\Promise describeWebAreaBlockConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result configWebIpSet(array $arguments = [])
 * @method \Http\Promise\Promise configWebIpSetAsync($arguments = [])
 * @method \Dew\Acs\Result configWebCCTemplate(array $arguments = [])
 * @method \Http\Promise\Promise configWebCCTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebCCRuleV2(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebCCRuleV2Async($arguments = [])
 * @method \Dew\Acs\Result describeWebCCRulesV2(array $arguments = [])
 * @method \Http\Promise\Promise describeWebCCRulesV2Async($arguments = [])
 * @method \Dew\Acs\Result configWebCCRuleV2(array $arguments = [])
 * @method \Http\Promise\Promise configWebCCRuleV2Async($arguments = [])
 * @method \Dew\Acs\Result modifyWebCCGlobalSwitch(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebCCGlobalSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPortAutoCcStatus(array $arguments = [])
 * @method \Http\Promise\Promise modifyPortAutoCcStatusAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNetworkRuleAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyNetworkRuleAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describePortAutoCcStatus(array $arguments = [])
 * @method \Http\Promise\Promise describePortAutoCcStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomains(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainsAsync($arguments = [])
 * @method \Dew\Acs\Result describeHealthCheckList(array $arguments = [])
 * @method \Http\Promise\Promise describeHealthCheckListAsync($arguments = [])
 * @method \Dew\Acs\Result describeNetworkRuleAttributes(array $arguments = [])
 * @method \Http\Promise\Promise describeNetworkRuleAttributesAsync($arguments = [])
 * @method \Dew\Acs\Result createSceneDefensePolicy(array $arguments = [])
 * @method \Http\Promise\Promise createSceneDefensePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSceneDefensePolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteSceneDefensePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifySceneDefensePolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifySceneDefensePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result attachSceneDefenseObject(array $arguments = [])
 * @method \Http\Promise\Promise attachSceneDefenseObjectAsync($arguments = [])
 * @method \Dew\Acs\Result detachSceneDefenseObject(array $arguments = [])
 * @method \Http\Promise\Promise detachSceneDefenseObjectAsync($arguments = [])
 * @method \Dew\Acs\Result enableSceneDefensePolicy(array $arguments = [])
 * @method \Http\Promise\Promise enableSceneDefensePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result disableSceneDefensePolicy(array $arguments = [])
 * @method \Http\Promise\Promise disableSceneDefensePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeSceneDefensePolicies(array $arguments = [])
 * @method \Http\Promise\Promise describeSceneDefensePoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result describeSceneDefenseObjects(array $arguments = [])
 * @method \Http\Promise\Promise describeSceneDefenseObjectsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebCacheCustomRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebCacheCustomRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebCacheSwitch(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebCacheSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebCacheMode(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebCacheModeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWebCacheCustomRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyWebCacheCustomRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebCacheConfigs(array $arguments = [])
 * @method \Http\Promise\Promise describeWebCacheConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDosEventMax(array $arguments = [])
 * @method \Http\Promise\Promise describeDDosEventMaxAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDosEventArea(array $arguments = [])
 * @method \Http\Promise\Promise describeDDosEventAreaAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDosEventAttackType(array $arguments = [])
 * @method \Http\Promise\Promise describeDDosEventAttackTypeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDosEventIsp(array $arguments = [])
 * @method \Http\Promise\Promise describeDDosEventIspAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDosEventSrcIp(array $arguments = [])
 * @method \Http\Promise\Promise describeDDosEventSrcIpAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackSourceCidr(array $arguments = [])
 * @method \Http\Promise\Promise describeBackSourceCidrAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDosAllEventList(array $arguments = [])
 * @method \Http\Promise\Promise describeDDosAllEventListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDoSEvents(array $arguments = [])
 * @method \Http\Promise\Promise describeDDoSEventsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlaEventList(array $arguments = [])
 * @method \Http\Promise\Promise describeSlaEventListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainAttackEvents(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainAttackEventsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDefenseCountStatistics(array $arguments = [])
 * @method \Http\Promise\Promise describeDefenseCountStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAttackAnalysisMaxQps(array $arguments = [])
 * @method \Http\Promise\Promise describeAttackAnalysisMaxQpsAsync($arguments = [])
 * @method \Dew\Acs\Result describePortFlowList(array $arguments = [])
 * @method \Http\Promise\Promise describePortFlowListAsync($arguments = [])
 * @method \Dew\Acs\Result describePortConnsList(array $arguments = [])
 * @method \Http\Promise\Promise describePortConnsListAsync($arguments = [])
 * @method \Dew\Acs\Result describePortConnsCount(array $arguments = [])
 * @method \Http\Promise\Promise describePortConnsCountAsync($arguments = [])
 * @method \Dew\Acs\Result describePortMaxConns(array $arguments = [])
 * @method \Http\Promise\Promise describePortMaxConnsAsync($arguments = [])
 * @method \Dew\Acs\Result describePortAttackMaxFlow(array $arguments = [])
 * @method \Http\Promise\Promise describePortAttackMaxFlowAsync($arguments = [])
 * @method \Dew\Acs\Result describePortViewSourceCountries(array $arguments = [])
 * @method \Http\Promise\Promise describePortViewSourceCountriesAsync($arguments = [])
 * @method \Dew\Acs\Result describePortViewSourceIsps(array $arguments = [])
 * @method \Http\Promise\Promise describePortViewSourceIspsAsync($arguments = [])
 * @method \Dew\Acs\Result describePortViewSourceProvinces(array $arguments = [])
 * @method \Http\Promise\Promise describePortViewSourceProvincesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainQPSList(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainQPSListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainStatusCodeList(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainStatusCodeListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainOverview(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainOverviewAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainStatusCodeCount(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainStatusCodeCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainTopAttackList(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainTopAttackListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainViewSourceCountries(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainViewSourceCountriesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainViewSourceProvinces(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainViewSourceProvincesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainViewTopCostTime(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainViewTopCostTimeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainViewTopUrl(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainViewTopUrlAsync($arguments = [])
 * @method \Dew\Acs\Result enableWebAccessLogConfig(array $arguments = [])
 * @method \Http\Promise\Promise enableWebAccessLogConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFullLogTtl(array $arguments = [])
 * @method \Http\Promise\Promise modifyFullLogTtlAsync($arguments = [])
 * @method \Dew\Acs\Result disableWebAccessLogConfig(array $arguments = [])
 * @method \Http\Promise\Promise disableWebAccessLogConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebAccessLogDispatchStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeWebAccessLogDispatchStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebAccessLogStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeWebAccessLogStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeLogStoreExistStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeLogStoreExistStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeOpEntities(array $arguments = [])
 * @method \Http\Promise\Promise describeOpEntitiesAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlsAuthStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeSlsAuthStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlsLogstoreInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeSlsLogstoreInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlsOpenStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeSlsOpenStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebAccessLogEmptyCount(array $arguments = [])
 * @method \Http\Promise\Promise describeWebAccessLogEmptyCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeDefenseRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeDefenseRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result emptySlsLogstore(array $arguments = [])
 * @method \Http\Promise\Promise emptySlsLogstoreAsync($arguments = [])
 * @method \Dew\Acs\Result describeStsGrantStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeStsGrantStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeAsyncTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeAsyncTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeSystemLog(array $arguments = [])
 * @method \Http\Promise\Promise describeSystemLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeElasticQps(array $arguments = [])
 * @method \Http\Promise\Promise describeElasticQpsAsync($arguments = [])
 * @method \Dew\Acs\Result describeElasticQpsRecord(array $arguments = [])
 * @method \Http\Promise\Promise describeElasticQpsRecordAsync($arguments = [])
 * @method \Dew\Acs\Result createTagResources(array $arguments = [])
 * @method \Http\Promise\Promise createTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTagResources(array $arguments = [])
 * @method \Http\Promise\Promise deleteTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeTagKeys(array $arguments = [])
 * @method \Http\Promise\Promise describeTagKeysAsync($arguments = [])
 * @method \Dew\Acs\Result describeTagResources(array $arguments = [])
 * @method \Http\Promise\Promise describeTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createPort(array $arguments = [])
 * @method \Http\Promise\Promise createPortAsync($arguments = [])
 * @method \Dew\Acs\Result deletePort(array $arguments = [])
 * @method \Http\Promise\Promise deletePortAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPort(array $arguments = [])
 * @method \Http\Promise\Promise modifyPortAsync($arguments = [])
 * @method \Dew\Acs\Result describePort(array $arguments = [])
 * @method \Http\Promise\Promise describePortAsync($arguments = [])
 * @method \Dew\Acs\Result createDomainResource(array $arguments = [])
 * @method \Http\Promise\Promise createDomainResourceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDomainResource(array $arguments = [])
 * @method \Http\Promise\Promise deleteDomainResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainResource(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainResourceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDomainResource(array $arguments = [])
 * @method \Http\Promise\Promise modifyDomainResourceAsync($arguments = [])
 * @method \Dew\Acs\Result configLayer4Remark(array $arguments = [])
 * @method \Http\Promise\Promise configLayer4RemarkAsync($arguments = [])
 * @method \Dew\Acs\Result configLayer4RuleBakMode(array $arguments = [])
 * @method \Http\Promise\Promise configLayer4RuleBakModeAsync($arguments = [])
 * @method \Dew\Acs\Result configLayer4RulePolicy(array $arguments = [])
 * @method \Http\Promise\Promise configLayer4RulePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeLayer4RulePolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeLayer4RulePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceExt(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceExtAsync($arguments = [])
 */
final class DdoscooClient extends AcsClient
{
    //
}

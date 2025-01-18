<?php

declare(strict_types=1);

namespace Dew\Acs\Esa;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createSite(array $arguments = [])
 * @method \Http\Promise\Promise createSiteAsync($arguments = [])
 * @method \Dew\Acs\Result listSites(array $arguments = [])
 * @method \Http\Promise\Promise listSitesAsync($arguments = [])
 * @method \Dew\Acs\Result getSite(array $arguments = [])
 * @method \Http\Promise\Promise getSiteAsync($arguments = [])
 * @method \Dew\Acs\Result verifySite(array $arguments = [])
 * @method \Http\Promise\Promise verifySiteAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSite(array $arguments = [])
 * @method \Http\Promise\Promise deleteSiteAsync($arguments = [])
 * @method \Dew\Acs\Result updateSiteCoverage(array $arguments = [])
 * @method \Http\Promise\Promise updateSiteCoverageAsync($arguments = [])
 * @method \Dew\Acs\Result updateSiteAccessType(array $arguments = [])
 * @method \Http\Promise\Promise updateSiteAccessTypeAsync($arguments = [])
 * @method \Dew\Acs\Result updateSiteVanityNS(array $arguments = [])
 * @method \Http\Promise\Promise updateSiteVanityNSAsync($arguments = [])
 * @method \Dew\Acs\Result getSiteCurrentNS(array $arguments = [])
 * @method \Http\Promise\Promise getSiteCurrentNSAsync($arguments = [])
 * @method \Dew\Acs\Result checkSiteName(array $arguments = [])
 * @method \Http\Promise\Promise checkSiteNameAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createHttpsBasicConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise createHttpsBasicConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result getHttpsBasicConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise getHttpsBasicConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result listHttpsBasicConfigurations(array $arguments = [])
 * @method \Http\Promise\Promise listHttpsBasicConfigurationsAsync($arguments = [])
 * @method \Dew\Acs\Result updateHttpsBasicConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise updateHttpsBasicConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHttpsBasicConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise deleteHttpsBasicConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result updateRedirectRule(array $arguments = [])
 * @method \Http\Promise\Promise updateRedirectRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listRedirectRules(array $arguments = [])
 * @method \Http\Promise\Promise listRedirectRulesAsync($arguments = [])
 * @method \Dew\Acs\Result getRedirectRule(array $arguments = [])
 * @method \Http\Promise\Promise getRedirectRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRedirectRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteRedirectRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createRedirectRule(array $arguments = [])
 * @method \Http\Promise\Promise createRedirectRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createRewriteUrlRule(array $arguments = [])
 * @method \Http\Promise\Promise createRewriteUrlRuleAsync($arguments = [])
 * @method \Dew\Acs\Result getRewriteUrlRule(array $arguments = [])
 * @method \Http\Promise\Promise getRewriteUrlRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listRewriteUrlRules(array $arguments = [])
 * @method \Http\Promise\Promise listRewriteUrlRulesAsync($arguments = [])
 * @method \Dew\Acs\Result updateRewriteUrlRule(array $arguments = [])
 * @method \Http\Promise\Promise updateRewriteUrlRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRewriteUrlRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteRewriteUrlRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateHttpRequestHeaderModificationRule(array $arguments = [])
 * @method \Http\Promise\Promise updateHttpRequestHeaderModificationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listHttpRequestHeaderModificationRules(array $arguments = [])
 * @method \Http\Promise\Promise listHttpRequestHeaderModificationRulesAsync($arguments = [])
 * @method \Dew\Acs\Result getHttpRequestHeaderModificationRule(array $arguments = [])
 * @method \Http\Promise\Promise getHttpRequestHeaderModificationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHttpRequestHeaderModificationRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteHttpRequestHeaderModificationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createHttpRequestHeaderModificationRule(array $arguments = [])
 * @method \Http\Promise\Promise createHttpRequestHeaderModificationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateHttpResponseHeaderModificationRule(array $arguments = [])
 * @method \Http\Promise\Promise updateHttpResponseHeaderModificationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listHttpResponseHeaderModificationRules(array $arguments = [])
 * @method \Http\Promise\Promise listHttpResponseHeaderModificationRulesAsync($arguments = [])
 * @method \Dew\Acs\Result getHttpResponseHeaderModificationRule(array $arguments = [])
 * @method \Http\Promise\Promise getHttpResponseHeaderModificationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHttpResponseHeaderModificationRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteHttpResponseHeaderModificationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createHttpResponseHeaderModificationRule(array $arguments = [])
 * @method \Http\Promise\Promise createHttpResponseHeaderModificationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateManagedTransform(array $arguments = [])
 * @method \Http\Promise\Promise updateManagedTransformAsync($arguments = [])
 * @method \Dew\Acs\Result getManagedTransform(array $arguments = [])
 * @method \Http\Promise\Promise getManagedTransformAsync($arguments = [])
 * @method \Dew\Acs\Result updateCacheRule(array $arguments = [])
 * @method \Http\Promise\Promise updateCacheRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listCacheRules(array $arguments = [])
 * @method \Http\Promise\Promise listCacheRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCacheRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteCacheRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createCacheRule(array $arguments = [])
 * @method \Http\Promise\Promise createCacheRuleAsync($arguments = [])
 * @method \Dew\Acs\Result getCacheRule(array $arguments = [])
 * @method \Http\Promise\Promise getCacheRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateCompressionRule(array $arguments = [])
 * @method \Http\Promise\Promise updateCompressionRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listCompressionRules(array $arguments = [])
 * @method \Http\Promise\Promise listCompressionRulesAsync($arguments = [])
 * @method \Dew\Acs\Result getCompressionRule(array $arguments = [])
 * @method \Http\Promise\Promise getCompressionRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCompressionRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteCompressionRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createCompressionRule(array $arguments = [])
 * @method \Http\Promise\Promise createCompressionRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createOriginRule(array $arguments = [])
 * @method \Http\Promise\Promise createOriginRuleAsync($arguments = [])
 * @method \Dew\Acs\Result getOriginRule(array $arguments = [])
 * @method \Http\Promise\Promise getOriginRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listOriginRules(array $arguments = [])
 * @method \Http\Promise\Promise listOriginRulesAsync($arguments = [])
 * @method \Dew\Acs\Result updateOriginRule(array $arguments = [])
 * @method \Http\Promise\Promise updateOriginRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteOriginRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteOriginRuleAsync($arguments = [])
 * @method \Dew\Acs\Result getIPv6(array $arguments = [])
 * @method \Http\Promise\Promise getIPv6Async($arguments = [])
 * @method \Dew\Acs\Result updateIPv6(array $arguments = [])
 * @method \Http\Promise\Promise updateIPv6Async($arguments = [])
 * @method \Dew\Acs\Result getTieredCache(array $arguments = [])
 * @method \Http\Promise\Promise getTieredCacheAsync($arguments = [])
 * @method \Dew\Acs\Result updateTieredCache(array $arguments = [])
 * @method \Http\Promise\Promise updateTieredCacheAsync($arguments = [])
 * @method \Dew\Acs\Result batchCreateRecords(array $arguments = [])
 * @method \Http\Promise\Promise batchCreateRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result createRecord(array $arguments = [])
 * @method \Http\Promise\Promise createRecordAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRecord(array $arguments = [])
 * @method \Http\Promise\Promise deleteRecordAsync($arguments = [])
 * @method \Dew\Acs\Result listRecords(array $arguments = [])
 * @method \Http\Promise\Promise listRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result getRecord(array $arguments = [])
 * @method \Http\Promise\Promise getRecordAsync($arguments = [])
 * @method \Dew\Acs\Result updateRecord(array $arguments = [])
 * @method \Http\Promise\Promise updateRecordAsync($arguments = [])
 * @method \Dew\Acs\Result listEdgeRoutineRecords(array $arguments = [])
 * @method \Http\Promise\Promise listEdgeRoutineRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result listEdgeContainerRecords(array $arguments = [])
 * @method \Http\Promise\Promise listEdgeContainerRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result exportRecords(array $arguments = [])
 * @method \Http\Promise\Promise exportRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describePurgeTasks(array $arguments = [])
 * @method \Http\Promise\Promise describePurgeTasksAsync($arguments = [])
 * @method \Dew\Acs\Result purgeCaches(array $arguments = [])
 * @method \Http\Promise\Promise purgeCachesAsync($arguments = [])
 * @method \Dew\Acs\Result getPurgeQuota(array $arguments = [])
 * @method \Http\Promise\Promise getPurgeQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result describePreloadTasks(array $arguments = [])
 * @method \Http\Promise\Promise describePreloadTasksAsync($arguments = [])
 * @method \Dew\Acs\Result preloadCaches(array $arguments = [])
 * @method \Http\Promise\Promise preloadCachesAsync($arguments = [])
 * @method \Dew\Acs\Result getUploadTask(array $arguments = [])
 * @method \Http\Promise\Promise getUploadTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listUploadTasks(array $arguments = [])
 * @method \Http\Promise\Promise listUploadTasksAsync($arguments = [])
 * @method \Dew\Acs\Result uploadFile(array $arguments = [])
 * @method \Http\Promise\Promise uploadFileAsync($arguments = [])
 * @method \Dew\Acs\Result listScheduledPreloadJobs(array $arguments = [])
 * @method \Http\Promise\Promise listScheduledPreloadJobsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteScheduledPreloadExecution(array $arguments = [])
 * @method \Http\Promise\Promise deleteScheduledPreloadExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result getScheduledPreloadJob(array $arguments = [])
 * @method \Http\Promise\Promise getScheduledPreloadJobAsync($arguments = [])
 * @method \Dew\Acs\Result stopScheduledPreloadExecution(array $arguments = [])
 * @method \Http\Promise\Promise stopScheduledPreloadExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result resetScheduledPreloadJob(array $arguments = [])
 * @method \Http\Promise\Promise resetScheduledPreloadJobAsync($arguments = [])
 * @method \Dew\Acs\Result deleteScheduledPreloadJob(array $arguments = [])
 * @method \Http\Promise\Promise deleteScheduledPreloadJobAsync($arguments = [])
 * @method \Dew\Acs\Result listScheduledPreloadExecutions(array $arguments = [])
 * @method \Http\Promise\Promise listScheduledPreloadExecutionsAsync($arguments = [])
 * @method \Dew\Acs\Result createScheduledPreloadExecutions(array $arguments = [])
 * @method \Http\Promise\Promise createScheduledPreloadExecutionsAsync($arguments = [])
 * @method \Dew\Acs\Result updateScheduledPreloadExecution(array $arguments = [])
 * @method \Http\Promise\Promise updateScheduledPreloadExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result createScheduledPreloadJob(array $arguments = [])
 * @method \Http\Promise\Promise createScheduledPreloadJobAsync($arguments = [])
 * @method \Dew\Acs\Result startScheduledPreloadExecution(array $arguments = [])
 * @method \Http\Promise\Promise startScheduledPreloadExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result blockObject(array $arguments = [])
 * @method \Http\Promise\Promise blockObjectAsync($arguments = [])
 * @method \Dew\Acs\Result createWaitingRoom(array $arguments = [])
 * @method \Http\Promise\Promise createWaitingRoomAsync($arguments = [])
 * @method \Dew\Acs\Result createWaitingRoomEvent(array $arguments = [])
 * @method \Http\Promise\Promise createWaitingRoomEventAsync($arguments = [])
 * @method \Dew\Acs\Result createWaitingRoomRule(array $arguments = [])
 * @method \Http\Promise\Promise createWaitingRoomRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateWaitingRoomRule(array $arguments = [])
 * @method \Http\Promise\Promise updateWaitingRoomRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateWaitingRoomEvent(array $arguments = [])
 * @method \Http\Promise\Promise updateWaitingRoomEventAsync($arguments = [])
 * @method \Dew\Acs\Result updateWaitingRoom(array $arguments = [])
 * @method \Http\Promise\Promise updateWaitingRoomAsync($arguments = [])
 * @method \Dew\Acs\Result listWaitingRooms(array $arguments = [])
 * @method \Http\Promise\Promise listWaitingRoomsAsync($arguments = [])
 * @method \Dew\Acs\Result listWaitingRoomRules(array $arguments = [])
 * @method \Http\Promise\Promise listWaitingRoomRulesAsync($arguments = [])
 * @method \Dew\Acs\Result listWaitingRoomEvents(array $arguments = [])
 * @method \Http\Promise\Promise listWaitingRoomEventsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWaitingRoomRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteWaitingRoomRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWaitingRoomEvent(array $arguments = [])
 * @method \Http\Promise\Promise deleteWaitingRoomEventAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWaitingRoom(array $arguments = [])
 * @method \Http\Promise\Promise deleteWaitingRoomAsync($arguments = [])
 * @method \Dew\Acs\Result updateOriginPool(array $arguments = [])
 * @method \Http\Promise\Promise updateOriginPoolAsync($arguments = [])
 * @method \Dew\Acs\Result listOriginPools(array $arguments = [])
 * @method \Http\Promise\Promise listOriginPoolsAsync($arguments = [])
 * @method \Dew\Acs\Result getOriginPool(array $arguments = [])
 * @method \Http\Promise\Promise getOriginPoolAsync($arguments = [])
 * @method \Dew\Acs\Result deleteOriginPool(array $arguments = [])
 * @method \Http\Promise\Promise deleteOriginPoolAsync($arguments = [])
 * @method \Dew\Acs\Result createOriginPool(array $arguments = [])
 * @method \Http\Promise\Promise createOriginPoolAsync($arguments = [])
 * @method \Dew\Acs\Result listLoadBalancerRegions(array $arguments = [])
 * @method \Http\Promise\Promise listLoadBalancerRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result listCertificates(array $arguments = [])
 * @method \Http\Promise\Promise listCertificatesAsync($arguments = [])
 * @method \Dew\Acs\Result getCertificate(array $arguments = [])
 * @method \Http\Promise\Promise getCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result applyCertificate(array $arguments = [])
 * @method \Http\Promise\Promise applyCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCertificate(array $arguments = [])
 * @method \Http\Promise\Promise deleteCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result getCertificateQuota(array $arguments = [])
 * @method \Http\Promise\Promise getCertificateQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result listCiphers(array $arguments = [])
 * @method \Http\Promise\Promise listCiphersAsync($arguments = [])
 * @method \Dew\Acs\Result setCertificate(array $arguments = [])
 * @method \Http\Promise\Promise setCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result activateClientCertificate(array $arguments = [])
 * @method \Http\Promise\Promise activateClientCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result listClientCertificates(array $arguments = [])
 * @method \Http\Promise\Promise listClientCertificatesAsync($arguments = [])
 * @method \Dew\Acs\Result listClientCaCertificates(array $arguments = [])
 * @method \Http\Promise\Promise listClientCaCertificatesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteClientCaCertificate(array $arguments = [])
 * @method \Http\Promise\Promise deleteClientCaCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result createClientCertificate(array $arguments = [])
 * @method \Http\Promise\Promise createClientCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result uploadClientCaCertificate(array $arguments = [])
 * @method \Http\Promise\Promise uploadClientCaCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result revokeClientCertificate(array $arguments = [])
 * @method \Http\Promise\Promise revokeClientCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result getClientCaCertificate(array $arguments = [])
 * @method \Http\Promise\Promise getClientCaCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result getClientCertificate(array $arguments = [])
 * @method \Http\Promise\Promise getClientCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteClientCertificate(array $arguments = [])
 * @method \Http\Promise\Promise deleteClientCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result setClientCertificateHostnames(array $arguments = [])
 * @method \Http\Promise\Promise setClientCertificateHostnamesAsync($arguments = [])
 * @method \Dew\Acs\Result getClientCertificateHostnames(array $arguments = [])
 * @method \Http\Promise\Promise getClientCertificateHostnamesAsync($arguments = [])
 * @method \Dew\Acs\Result listWafPhases(array $arguments = [])
 * @method \Http\Promise\Promise listWafPhasesAsync($arguments = [])
 * @method \Dew\Acs\Result listWafTemplateRules(array $arguments = [])
 * @method \Http\Promise\Promise listWafTemplateRulesAsync($arguments = [])
 * @method \Dew\Acs\Result listWafManagedRules(array $arguments = [])
 * @method \Http\Promise\Promise listWafManagedRulesAsync($arguments = [])
 * @method \Dew\Acs\Result listManagedRulesGroups(array $arguments = [])
 * @method \Http\Promise\Promise listManagedRulesGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result getWafQuota(array $arguments = [])
 * @method \Http\Promise\Promise getWafQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result getWafFilter(array $arguments = [])
 * @method \Http\Promise\Promise getWafFilterAsync($arguments = [])
 * @method \Dew\Acs\Result getWafBotAppKey(array $arguments = [])
 * @method \Http\Promise\Promise getWafBotAppKeyAsync($arguments = [])
 * @method \Dew\Acs\Result listWafUsageOfRules(array $arguments = [])
 * @method \Http\Promise\Promise listWafUsageOfRulesAsync($arguments = [])
 * @method \Dew\Acs\Result getSiteWafSettings(array $arguments = [])
 * @method \Http\Promise\Promise getSiteWafSettingsAsync($arguments = [])
 * @method \Dew\Acs\Result editSiteWafSettings(array $arguments = [])
 * @method \Http\Promise\Promise editSiteWafSettingsAsync($arguments = [])
 * @method \Dew\Acs\Result batchGetExpressionFields(array $arguments = [])
 * @method \Http\Promise\Promise batchGetExpressionFieldsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDoSL7QpsList(array $arguments = [])
 * @method \Http\Promise\Promise describeDDoSL7QpsListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDoSBpsList(array $arguments = [])
 * @method \Http\Promise\Promise describeDDoSBpsListAsync($arguments = [])
 * @method \Dew\Acs\Result setHttpDDoSAttackProtection(array $arguments = [])
 * @method \Http\Promise\Promise setHttpDDoSAttackProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result describeHttpDDoSAttackIntelligentProtection(array $arguments = [])
 * @method \Http\Promise\Promise describeHttpDDoSAttackIntelligentProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result setHttpDDoSAttackIntelligentProtection(array $arguments = [])
 * @method \Http\Promise\Promise setHttpDDoSAttackIntelligentProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result describeHttpDDoSAttackProtection(array $arguments = [])
 * @method \Http\Promise\Promise describeHttpDDoSAttackProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result describeDDoSAllEventList(array $arguments = [])
 * @method \Http\Promise\Promise describeDDoSAllEventListAsync($arguments = [])
 * @method \Dew\Acs\Result createOriginProtection(array $arguments = [])
 * @method \Http\Promise\Promise createOriginProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteOriginProtection(array $arguments = [])
 * @method \Http\Promise\Promise deleteOriginProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result getOriginProtection(array $arguments = [])
 * @method \Http\Promise\Promise getOriginProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result updateOriginProtection(array $arguments = [])
 * @method \Http\Promise\Promise updateOriginProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result updateOriginProtectionIpWhiteList(array $arguments = [])
 * @method \Http\Promise\Promise updateOriginProtectionIpWhiteListAsync($arguments = [])
 * @method \Dew\Acs\Result createPage(array $arguments = [])
 * @method \Http\Promise\Promise createPageAsync($arguments = [])
 * @method \Dew\Acs\Result deletePage(array $arguments = [])
 * @method \Http\Promise\Promise deletePageAsync($arguments = [])
 * @method \Dew\Acs\Result updatePage(array $arguments = [])
 * @method \Http\Promise\Promise updatePageAsync($arguments = [])
 * @method \Dew\Acs\Result listPages(array $arguments = [])
 * @method \Http\Promise\Promise listPagesAsync($arguments = [])
 * @method \Dew\Acs\Result getPage(array $arguments = [])
 * @method \Http\Promise\Promise getPageAsync($arguments = [])
 * @method \Dew\Acs\Result createList(array $arguments = [])
 * @method \Http\Promise\Promise createListAsync($arguments = [])
 * @method \Dew\Acs\Result deleteList(array $arguments = [])
 * @method \Http\Promise\Promise deleteListAsync($arguments = [])
 * @method \Dew\Acs\Result updateList(array $arguments = [])
 * @method \Http\Promise\Promise updateListAsync($arguments = [])
 * @method \Dew\Acs\Result listLists(array $arguments = [])
 * @method \Http\Promise\Promise listListsAsync($arguments = [])
 * @method \Dew\Acs\Result getList(array $arguments = [])
 * @method \Http\Promise\Promise getListAsync($arguments = [])
 * @method \Dew\Acs\Result enableCustomScenePolicy(array $arguments = [])
 * @method \Http\Promise\Promise enableCustomScenePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result disableCustomScenePolicy(array $arguments = [])
 * @method \Http\Promise\Promise disableCustomScenePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeCustomScenePolicies(array $arguments = [])
 * @method \Http\Promise\Promise describeCustomScenePoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomScenePolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomScenePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result updateCustomScenePolicy(array $arguments = [])
 * @method \Http\Promise\Promise updateCustomScenePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomScenePolicy(array $arguments = [])
 * @method \Http\Promise\Promise createCustomScenePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listEdgeContainerApps(array $arguments = [])
 * @method \Http\Promise\Promise listEdgeContainerAppsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEdgeContainerAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise deleteEdgeContainerAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEdgeContainerAppRecord(array $arguments = [])
 * @method \Http\Promise\Promise deleteEdgeContainerAppRecordAsync($arguments = [])
 * @method \Dew\Acs\Result createEdgeContainerAppRecord(array $arguments = [])
 * @method \Http\Promise\Promise createEdgeContainerAppRecordAsync($arguments = [])
 * @method \Dew\Acs\Result rollbackEdgeContainerAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise rollbackEdgeContainerAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result rebuildEdgeContainerAppStagingEnv(array $arguments = [])
 * @method \Http\Promise\Promise rebuildEdgeContainerAppStagingEnvAsync($arguments = [])
 * @method \Dew\Acs\Result publishEdgeContainerAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise publishEdgeContainerAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result listEdgeContainerAppVersions(array $arguments = [])
 * @method \Http\Promise\Promise listEdgeContainerAppVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result getEdgeContainerTerminal(array $arguments = [])
 * @method \Http\Promise\Promise getEdgeContainerTerminalAsync($arguments = [])
 * @method \Dew\Acs\Result getEdgeContainerStagingDeployStatus(array $arguments = [])
 * @method \Http\Promise\Promise getEdgeContainerStagingDeployStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getEdgeContainerLogs(array $arguments = [])
 * @method \Http\Promise\Promise getEdgeContainerLogsAsync($arguments = [])
 * @method \Dew\Acs\Result getEdgeContainerDeployRegions(array $arguments = [])
 * @method \Http\Promise\Promise getEdgeContainerDeployRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result getEdgeContainerAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise getEdgeContainerAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result getEdgeContainerAppStatus(array $arguments = [])
 * @method \Http\Promise\Promise getEdgeContainerAppStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getEdgeContainerApp(array $arguments = [])
 * @method \Http\Promise\Promise getEdgeContainerAppAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEdgeContainerApp(array $arguments = [])
 * @method \Http\Promise\Promise deleteEdgeContainerAppAsync($arguments = [])
 * @method \Dew\Acs\Result createEdgeContainerAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise createEdgeContainerAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result createEdgeContainerApp(array $arguments = [])
 * @method \Http\Promise\Promise createEdgeContainerAppAsync($arguments = [])
 * @method \Dew\Acs\Result listEdgeContainerAppRecords(array $arguments = [])
 * @method \Http\Promise\Promise listEdgeContainerAppRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result getKvAccount(array $arguments = [])
 * @method \Http\Promise\Promise getKvAccountAsync($arguments = [])
 * @method \Dew\Acs\Result describeKvAccountStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeKvAccountStatusAsync($arguments = [])
 * @method \Dew\Acs\Result createKvNamespace(array $arguments = [])
 * @method \Http\Promise\Promise createKvNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteKvNamespace(array $arguments = [])
 * @method \Http\Promise\Promise deleteKvNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result updateKvNamespace(array $arguments = [])
 * @method \Http\Promise\Promise updateKvNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result getKvNamespace(array $arguments = [])
 * @method \Http\Promise\Promise getKvNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result putKv(array $arguments = [])
 * @method \Http\Promise\Promise putKvAsync($arguments = [])
 * @method \Dew\Acs\Result deleteKv(array $arguments = [])
 * @method \Http\Promise\Promise deleteKvAsync($arguments = [])
 * @method \Dew\Acs\Result getKv(array $arguments = [])
 * @method \Http\Promise\Promise getKvAsync($arguments = [])
 * @method \Dew\Acs\Result batchPutKv(array $arguments = [])
 * @method \Http\Promise\Promise batchPutKvAsync($arguments = [])
 * @method \Dew\Acs\Result batchDeleteKv(array $arguments = [])
 * @method \Http\Promise\Promise batchDeleteKvAsync($arguments = [])
 * @method \Dew\Acs\Result putKvWithHighCapacity(array $arguments = [])
 * @method \Http\Promise\Promise putKvWithHighCapacityAsync($arguments = [])
 * @method \Dew\Acs\Result batchPutKvWithHighCapacity(array $arguments = [])
 * @method \Http\Promise\Promise batchPutKvWithHighCapacityAsync($arguments = [])
 * @method \Dew\Acs\Result batchDeleteKvWithHighCapacity(array $arguments = [])
 * @method \Http\Promise\Promise batchDeleteKvWithHighCapacityAsync($arguments = [])
 * @method \Dew\Acs\Result listKvs(array $arguments = [])
 * @method \Http\Promise\Promise listKvsAsync($arguments = [])
 * @method \Dew\Acs\Result listSiteDeliveryTasks(array $arguments = [])
 * @method \Http\Promise\Promise listSiteDeliveryTasksAsync($arguments = [])
 * @method \Dew\Acs\Result checkUserProjectName(array $arguments = [])
 * @method \Http\Promise\Promise checkUserProjectNameAsync($arguments = [])
 * @method \Dew\Acs\Result checkSiteProjectName(array $arguments = [])
 * @method \Http\Promise\Promise checkSiteProjectNameAsync($arguments = [])
 * @method \Dew\Acs\Result createSiteDeliveryTask(array $arguments = [])
 * @method \Http\Promise\Promise createSiteDeliveryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSiteDeliveryTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteSiteDeliveryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result updateSiteDeliveryTask(array $arguments = [])
 * @method \Http\Promise\Promise updateSiteDeliveryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createSiteCustomLog(array $arguments = [])
 * @method \Http\Promise\Promise createSiteCustomLogAsync($arguments = [])
 * @method \Dew\Acs\Result getSiteLogDeliveryQuota(array $arguments = [])
 * @method \Http\Promise\Promise getSiteLogDeliveryQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result listUserDeliveryTasks(array $arguments = [])
 * @method \Http\Promise\Promise listUserDeliveryTasksAsync($arguments = [])
 * @method \Dew\Acs\Result createUserDeliveryTask(array $arguments = [])
 * @method \Http\Promise\Promise createUserDeliveryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result updateUserDeliveryTask(array $arguments = [])
 * @method \Http\Promise\Promise updateUserDeliveryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUserDeliveryTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteUserDeliveryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getUserDeliveryTask(array $arguments = [])
 * @method \Http\Promise\Promise getUserDeliveryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getRealtimeDeliveryField(array $arguments = [])
 * @method \Http\Promise\Promise getRealtimeDeliveryFieldAsync($arguments = [])
 * @method \Dew\Acs\Result getSiteCustomLog(array $arguments = [])
 * @method \Http\Promise\Promise getSiteCustomLogAsync($arguments = [])
 * @method \Dew\Acs\Result getSiteDeliveryTask(array $arguments = [])
 * @method \Http\Promise\Promise getSiteDeliveryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getUserLogDeliveryQuota(array $arguments = [])
 * @method \Http\Promise\Promise getUserLogDeliveryQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result updateSiteCustomLog(array $arguments = [])
 * @method \Http\Promise\Promise updateSiteCustomLogAsync($arguments = [])
 * @method \Dew\Acs\Result updateSiteDeliveryTaskStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateSiteDeliveryTaskStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updateUserDeliveryTaskStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateUserDeliveryTaskStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listUserRatePlanInstances(array $arguments = [])
 * @method \Http\Promise\Promise listUserRatePlanInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result listInstanceQuotasWithUsage(array $arguments = [])
 * @method \Http\Promise\Promise listInstanceQuotasWithUsageAsync($arguments = [])
 * @method \Dew\Acs\Result listInstanceQuotas(array $arguments = [])
 * @method \Http\Promise\Promise listInstanceQuotasAsync($arguments = [])
 * @method \Dew\Acs\Result listEdgeRoutinePlans(array $arguments = [])
 * @method \Http\Promise\Promise listEdgeRoutinePlansAsync($arguments = [])
 * @method \Dew\Acs\Result getCacheReserveSpecification(array $arguments = [])
 * @method \Http\Promise\Promise getCacheReserveSpecificationAsync($arguments = [])
 * @method \Dew\Acs\Result listCacheReserveInstances(array $arguments = [])
 * @method \Http\Promise\Promise listCacheReserveInstancesAsync($arguments = [])
 */
final class EsaClient extends AcsClient
{
    //
}

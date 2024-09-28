<?php

declare(strict_types=1);

namespace Dew\Acs\RKvstore;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createInstance(array $arguments = [])
 * @method \Http\Promise\Promise createInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result addShardingNode(array $arguments = [])
 * @method \Http\Promise\Promise addShardingNodeAsync($arguments = [])
 * @method \Dew\Acs\Result createGlobalDistributeCache(array $arguments = [])
 * @method \Http\Promise\Promise createGlobalDistributeCacheAsync($arguments = [])
 * @method \Dew\Acs\Result deleteShardingNode(array $arguments = [])
 * @method \Http\Promise\Promise deleteShardingNodeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceSpec(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceSpecAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeZones(array $arguments = [])
 * @method \Http\Promise\Promise describeZonesAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailableResource(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailableResourceAsync($arguments = [])
 * @method \Dew\Acs\Result transformToPrePaid(array $arguments = [])
 * @method \Http\Promise\Promise transformToPrePaidAsync($arguments = [])
 * @method \Dew\Acs\Result migrateToOtherZone(array $arguments = [])
 * @method \Http\Promise\Promise migrateToOtherZoneAsync($arguments = [])
 * @method \Dew\Acs\Result createTairInstance(array $arguments = [])
 * @method \Http\Promise\Promise createTairInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createInstances(array $arguments = [])
 * @method \Http\Promise\Promise createInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result enableAdditionalBandwidth(array $arguments = [])
 * @method \Http\Promise\Promise enableAdditionalBandwidthAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceMaintainTime(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceMaintainTimeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceMajorVersion(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceMajorVersionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceMinorVersion(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceMinorVersionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceAutoUpgrade(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceAutoUpgradeAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstancesOverview(array $arguments = [])
 * @method \Http\Promise\Promise describeInstancesOverviewAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDedicatedClusterInstanceList(array $arguments = [])
 * @method \Http\Promise\Promise describeDedicatedClusterInstanceListAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalDistributeCache(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalDistributeCacheAsync($arguments = [])
 * @method \Dew\Acs\Result describeEngineVersion(array $arguments = [])
 * @method \Http\Promise\Promise describeEngineVersionAsync($arguments = [])
 * @method \Dew\Acs\Result describeRoleZoneInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeRoleZoneInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterMemberInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterMemberInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceNetInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceNetInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBNodeDirectVipInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDBNodeDirectVipInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeLogicInstanceTopology(array $arguments = [])
 * @method \Http\Promise\Promise describeLogicInstanceTopologyAsync($arguments = [])
 * @method \Dew\Acs\Result restartInstance(array $arguments = [])
 * @method \Http\Promise\Promise restartInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result flushExpireKeys(array $arguments = [])
 * @method \Http\Promise\Promise flushExpireKeysAsync($arguments = [])
 * @method \Dew\Acs\Result flushInstanceForDB(array $arguments = [])
 * @method \Http\Promise\Promise flushInstanceForDBAsync($arguments = [])
 * @method \Dew\Acs\Result flushInstance(array $arguments = [])
 * @method \Http\Promise\Promise flushInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result switchInstanceHA(array $arguments = [])
 * @method \Http\Promise\Promise switchInstanceHAAsync($arguments = [])
 * @method \Dew\Acs\Result syncDtsStatus(array $arguments = [])
 * @method \Http\Promise\Promise syncDtsStatusAsync($arguments = [])
 * @method \Dew\Acs\Result removeSubInstance(array $arguments = [])
 * @method \Http\Promise\Promise removeSubInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result lockDBInstanceWrite(array $arguments = [])
 * @method \Http\Promise\Promise lockDBInstanceWriteAsync($arguments = [])
 * @method \Dew\Acs\Result unlockDBInstanceWrite(array $arguments = [])
 * @method \Http\Promise\Promise unlockDBInstanceWriteAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceNetExpireTime(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceNetExpireTimeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceConnectionString(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceConnectionStringAsync($arguments = [])
 * @method \Dew\Acs\Result modifyIntranetAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyIntranetAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeIntranetAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeIntranetAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result switchNetwork(array $arguments = [])
 * @method \Http\Promise\Promise switchNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result allocateInstancePublicConnection(array $arguments = [])
 * @method \Http\Promise\Promise allocateInstancePublicConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result releaseInstancePublicConnection(array $arguments = [])
 * @method \Http\Promise\Promise releaseInstancePublicConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result allocateDirectConnection(array $arguments = [])
 * @method \Http\Promise\Promise allocateDirectConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result releaseDirectConnection(array $arguments = [])
 * @method \Http\Promise\Promise releaseDirectConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result switchInstanceProxy(array $arguments = [])
 * @method \Http\Promise\Promise switchInstanceProxyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceAutoRenewalAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceAutoRenewalAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describePrice(array $arguments = [])
 * @method \Http\Promise\Promise describePriceAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceAutoRenewalAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceAutoRenewalAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result renewAdditionalBandwidth(array $arguments = [])
 * @method \Http\Promise\Promise renewAdditionalBandwidthAsync($arguments = [])
 * @method \Dew\Acs\Result transformInstanceChargeType(array $arguments = [])
 * @method \Http\Promise\Promise transformInstanceChargeTypeAsync($arguments = [])
 * @method \Dew\Acs\Result renewInstance(array $arguments = [])
 * @method \Http\Promise\Promise renewInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createAccount(array $arguments = [])
 * @method \Http\Promise\Promise createAccountAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccount(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccountAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccountDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccountDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccountPassword(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccountPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccounts(array $arguments = [])
 * @method \Http\Promise\Promise describeAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result resetAccountPassword(array $arguments = [])
 * @method \Http\Promise\Promise resetAccountPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result grantAccountPrivilege(array $arguments = [])
 * @method \Http\Promise\Promise grantAccountPrivilegeAsync($arguments = [])
 * @method \Dew\Acs\Result createBackup(array $arguments = [])
 * @method \Http\Promise\Promise createBackupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result restoreInstance(array $arguments = [])
 * @method \Http\Promise\Promise restoreInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterBackupList(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterBackupListAsync($arguments = [])
 * @method \Dew\Acs\Result describeMonitorItems(array $arguments = [])
 * @method \Http\Promise\Promise describeMonitorItemsAsync($arguments = [])
 * @method \Dew\Acs\Result describeHistoryMonitorValues(array $arguments = [])
 * @method \Http\Promise\Promise describeHistoryMonitorValuesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAuditLogConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyAuditLogConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeAuditLogConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeAuditLogConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeAuditRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeAuditRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRunningLogRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeRunningLogRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlowLogRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeSlowLogRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result initializeKvstorePermission(array $arguments = [])
 * @method \Http\Promise\Promise initializeKvstorePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result modifySecurityIps(array $arguments = [])
 * @method \Http\Promise\Promise modifySecurityIpsAsync($arguments = [])
 * @method \Dew\Acs\Result modifySecurityGroupConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise modifySecurityGroupConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceSSL(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceSSLAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceVpcAuthMode(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceVpcAuthModeAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecurityIps(array $arguments = [])
 * @method \Http\Promise\Promise describeSecurityIpsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecurityGroupConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise describeSecurityGroupConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceSSL(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceSSLAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterTemplates(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameters(array $arguments = [])
 * @method \Http\Promise\Promise describeParametersAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterModificationHistory(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterModificationHistoryAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createCacheAnalysisTask(array $arguments = [])
 * @method \Http\Promise\Promise createCacheAnalysisTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeCacheAnalysisReport(array $arguments = [])
 * @method \Http\Promise\Promise describeCacheAnalysisReportAsync($arguments = [])
 * @method \Dew\Acs\Result describeCacheAnalysisReportList(array $arguments = [])
 * @method \Http\Promise\Promise describeCacheAnalysisReportListAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceTDE(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceTDEAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceTDEStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceTDEStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeEncryptionKeyList(array $arguments = [])
 * @method \Http\Promise\Promise describeEncryptionKeyListAsync($arguments = [])
 * @method \Dew\Acs\Result describeEncryptionKey(array $arguments = [])
 * @method \Http\Promise\Promise describeEncryptionKeyAsync($arguments = [])
 * @method \Dew\Acs\Result checkCloudResourceAuthorized(array $arguments = [])
 * @method \Http\Promise\Promise checkCloudResourceAuthorizedAsync($arguments = [])
 * @method \Dew\Acs\Result describeHistoryTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeHistoryTasksAsync($arguments = [])
 * @method \Dew\Acs\Result modifyActiveOperationTask(array $arguments = [])
 * @method \Http\Promise\Promise modifyActiveOperationTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationTask(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise createGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroupName(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupNameAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalSecurityIPGroupRelation(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalSecurityIPGroupRelationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroupRelation(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupRelationAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceParameter(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceParameterAsync($arguments = [])
 * @method \Dew\Acs\Result deleteParameterGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteParameterGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterGroupSupportParam(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterGroupSupportParamAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyParameterGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyParameterGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createParameterGroup(array $arguments = [])
 * @method \Http\Promise\Promise createParameterGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterGroupTemplateList(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterGroupTemplateListAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationTasksAsync($arguments = [])
 * @method \Dew\Acs\Result modifyActiveOperationTasks(array $arguments = [])
 * @method \Http\Promise\Promise modifyActiveOperationTasksAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceBandwidth(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceBandwidthAsync($arguments = [])
 */
final class RKvstoreClient extends AcsClient
{
    //
}

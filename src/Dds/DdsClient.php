<?php

declare(strict_types=1);

namespace Dew\Acs\Dds;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise createDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createShardingDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise createShardingDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createNode(array $arguments = [])
 * @method \Http\Promise\Promise createNodeAsync($arguments = [])
 * @method \Dew\Acs\Result createNodeBatch(array $arguments = [])
 * @method \Http\Promise\Promise createNodeBatchAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNode(array $arguments = [])
 * @method \Http\Promise\Promise deleteNodeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceSpec(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceSpecAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNodeSpec(array $arguments = [])
 * @method \Http\Promise\Promise modifyNodeSpecAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNodeSpecBatch(array $arguments = [])
 * @method \Http\Promise\Promise modifyNodeSpecBatchAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceDiskType(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceDiskTypeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceMaintainTime(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceMaintainTimeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceNetExpireTime(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceNetExpireTimeAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeDBInstanceEngineVersion(array $arguments = [])
 * @method \Http\Promise\Promise upgradeDBInstanceEngineVersionAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeDBInstanceKernelVersion(array $arguments = [])
 * @method \Http\Promise\Promise upgradeDBInstanceKernelVersionAsync($arguments = [])
 * @method \Dew\Acs\Result switchDBInstanceHA(array $arguments = [])
 * @method \Http\Promise\Promise switchDBInstanceHAAsync($arguments = [])
 * @method \Dew\Acs\Result restartDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise restartDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result destroyInstance(array $arguments = [])
 * @method \Http\Promise\Promise destroyInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result restartNode(array $arguments = [])
 * @method \Http\Promise\Promise restartNodeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceAutoRenewalAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceAutoRenewalAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result transformInstanceChargeType(array $arguments = [])
 * @method \Http\Promise\Promise transformInstanceChargeTypeAsync($arguments = [])
 * @method \Dew\Acs\Result describePrice(array $arguments = [])
 * @method \Http\Promise\Promise describePriceAsync($arguments = [])
 * @method \Dew\Acs\Result describeRenewalPrice(array $arguments = [])
 * @method \Http\Promise\Promise describeRenewalPriceAsync($arguments = [])
 * @method \Dew\Acs\Result transformToPrePaid(array $arguments = [])
 * @method \Http\Promise\Promise transformToPrePaidAsync($arguments = [])
 * @method \Dew\Acs\Result renewDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise renewDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceSpecInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceSpecInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeReplicaSetRole(array $arguments = [])
 * @method \Http\Promise\Promise describeReplicaSetRoleAsync($arguments = [])
 * @method \Dew\Acs\Result describeKernelReleaseNotes(array $arguments = [])
 * @method \Http\Promise\Promise describeKernelReleaseNotesAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailableEngineVersion(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailableEngineVersionAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceSwitchLog(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceSwitchLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeRoleZoneInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeRoleZoneInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceAutoRenewalAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceAutoRenewalAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationTaskCount(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationTaskCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationTaskType(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationTaskTypeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstancesOverview(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstancesOverviewAsync($arguments = [])
 * @method \Dew\Acs\Result describeHistoryTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeHistoryTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeHistoryTasksStat(array $arguments = [])
 * @method \Http\Promise\Promise describeHistoryTasksStatAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTaskInfo(array $arguments = [])
 * @method \Http\Promise\Promise modifyTaskInfoAsync($arguments = [])
 * @method \Dew\Acs\Result modifyActiveOperationTasks(array $arguments = [])
 * @method \Http\Promise\Promise modifyActiveOperationTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailableResource(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailableResourceAsync($arguments = [])
 * @method \Dew\Acs\Result evaluateResource(array $arguments = [])
 * @method \Http\Promise\Promise evaluateResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailabilityZones(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailabilityZonesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result migrateToOtherZone(array $arguments = [])
 * @method \Http\Promise\Promise migrateToOtherZoneAsync($arguments = [])
 * @method \Dew\Acs\Result migrateAvailableZone(array $arguments = [])
 * @method \Http\Promise\Promise migrateAvailableZoneAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceVpcAuthMode(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceVpcAuthModeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceNetworkType(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceNetworkTypeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceConnectionString(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceConnectionStringAsync($arguments = [])
 * @method \Dew\Acs\Result describeShardingNetworkAddress(array $arguments = [])
 * @method \Http\Promise\Promise describeShardingNetworkAddressAsync($arguments = [])
 * @method \Dew\Acs\Result allocatePublicNetworkAddress(array $arguments = [])
 * @method \Http\Promise\Promise allocatePublicNetworkAddressAsync($arguments = [])
 * @method \Dew\Acs\Result releasePublicNetworkAddress(array $arguments = [])
 * @method \Http\Promise\Promise releasePublicNetworkAddressAsync($arguments = [])
 * @method \Dew\Acs\Result allocateNodePrivateNetworkAddress(array $arguments = [])
 * @method \Http\Promise\Promise allocateNodePrivateNetworkAddressAsync($arguments = [])
 * @method \Dew\Acs\Result releaseNodePrivateNetworkAddress(array $arguments = [])
 * @method \Http\Promise\Promise releaseNodePrivateNetworkAddressAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeTags(array $arguments = [])
 * @method \Http\Promise\Promise describeTagsAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createAccount(array $arguments = [])
 * @method \Http\Promise\Promise createAccountAsync($arguments = [])
 * @method \Dew\Acs\Result resetAccountPassword(array $arguments = [])
 * @method \Http\Promise\Promise resetAccountPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccountDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccountDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccounts(array $arguments = [])
 * @method \Http\Promise\Promise describeAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result modifySecurityIps(array $arguments = [])
 * @method \Http\Promise\Promise modifySecurityIpsAsync($arguments = [])
 * @method \Dew\Acs\Result modifySecurityGroupConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise modifySecurityGroupConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecurityIps(array $arguments = [])
 * @method \Http\Promise\Promise describeSecurityIpsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecurityGroupConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise describeSecurityGroupConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroupName(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupNameAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalSecurityIPGroupRelation(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalSecurityIPGroupRelationAsync($arguments = [])
 * @method \Dew\Acs\Result createGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise createGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroupRelation(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupRelationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceTDE(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceTDEAsync($arguments = [])
 * @method \Dew\Acs\Result checkCloudResourceAuthorized(array $arguments = [])
 * @method \Http\Promise\Promise checkCloudResourceAuthorizedAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserEncryptionKeyList(array $arguments = [])
 * @method \Http\Promise\Promise describeUserEncryptionKeyListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceEncryptionKey(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceEncryptionKeyAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceTDEInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceTDEInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeKmsKeys(array $arguments = [])
 * @method \Http\Promise\Promise describeKmsKeysAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceSSL(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceSSLAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceSSL(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceSSLAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAuditLogFilter(array $arguments = [])
 * @method \Http\Promise\Promise modifyAuditLogFilterAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAuditPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyAuditPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeAuditRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeAuditRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAuditPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeAuditPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeAuditLogFilter(array $arguments = [])
 * @method \Http\Promise\Promise describeAuditLogFilterAsync($arguments = [])
 * @method \Dew\Acs\Result describeMongoDBLogConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeMongoDBLogConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlowLogRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeSlowLogRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeErrorLogRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeErrorLogRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRunningLogRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeRunningLogRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceMonitor(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstancePerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstancePerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceMonitor(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result modifyParameters(array $arguments = [])
 * @method \Http\Promise\Promise modifyParametersAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterModificationHistory(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterModificationHistoryAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterTemplates(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameters(array $arguments = [])
 * @method \Http\Promise\Promise describeParametersAsync($arguments = [])
 * @method \Dew\Acs\Result createBackup(array $arguments = [])
 * @method \Http\Promise\Promise createBackupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupDBs(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupDBsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRestoreDBInstanceList(array $arguments = [])
 * @method \Http\Promise\Promise describeRestoreDBInstanceListAsync($arguments = [])
 * @method \Dew\Acs\Result checkRecoveryCondition(array $arguments = [])
 * @method \Http\Promise\Promise checkRecoveryConditionAsync($arguments = [])
 * @method \Dew\Acs\Result transferClusterBackup(array $arguments = [])
 * @method \Http\Promise\Promise transferClusterBackupAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterRecoverTime(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterRecoverTimeAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupStorage(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupStorageAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceRecoverTime(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceRecoverTimeAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationTask(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationTaskRegion(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationTaskRegionAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationMaintenanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationMaintenanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result checkServiceLinkedRole(array $arguments = [])
 * @method \Http\Promise\Promise checkServiceLinkedRoleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceAttributeAsync($arguments = [])
 */
final class DdsClient extends AcsClient
{
    //
}

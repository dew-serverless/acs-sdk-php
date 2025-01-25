<?php

declare(strict_types=1);

namespace Dew\Acs\Polardb;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createStoragePlan(array $arguments = [])
 * @method \Http\Promise\Promise createStoragePlanAsync($arguments = [])
 * @method \Dew\Acs\Result describeAutoRenewAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeAutoRenewAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeClassList(array $arguments = [])
 * @method \Http\Promise\Promise describeClassListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterAvailableResources(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterAvailableResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result evaluateRegionResource(array $arguments = [])
 * @method \Http\Promise\Promise evaluateRegionResourceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAutoRenewAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyAutoRenewAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result transformDBClusterPayType(array $arguments = [])
 * @method \Http\Promise\Promise transformDBClusterPayTypeAsync($arguments = [])
 * @method \Dew\Acs\Result createDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise createDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusters(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClustersAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterServerlessConf(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterServerlessConfAsync($arguments = [])
 * @method \Dew\Acs\Result describePolarSQLCollectorPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describePolarSQLCollectorPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeVSwitches(array $arguments = [])
 * @method \Http\Promise\Promise describeVSwitchesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterDeletion(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterDeletionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterMaintainTime(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterMaintainTimeAsync($arguments = [])
 * @method \Dew\Acs\Result enableDBClusterServerless(array $arguments = [])
 * @method \Http\Promise\Promise enableDBClusterServerlessAsync($arguments = [])
 * @method \Dew\Acs\Result disableDBClusterServerless(array $arguments = [])
 * @method \Http\Promise\Promise disableDBClusterServerlessAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterServerlessConf(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterServerlessConfAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterStorageSpace(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterStorageSpaceAsync($arguments = [])
 * @method \Dew\Acs\Result manuallyStartDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise manuallyStartDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterStoragePerformance(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterStoragePerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result refreshDBClusterStorageUsage(array $arguments = [])
 * @method \Http\Promise\Promise refreshDBClusterStorageUsageAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeDasConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeDasConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterPrimaryZone(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterPrimaryZoneAsync($arguments = [])
 * @method \Dew\Acs\Result failoverDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise failoverDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterVersion(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterVersionAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeDBClusterVersion(array $arguments = [])
 * @method \Http\Promise\Promise upgradeDBClusterVersionAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterAccessWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterAccessWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterAccessWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterAccessWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result createGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise createGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalSecurityIPGroupRelation(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalSecurityIPGroupRelationAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroupName(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupNameAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalSecurityIPGroupRelation(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalSecurityIPGroupRelationAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterSSL(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterSSLAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterSSL(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterSSLAsync($arguments = [])
 * @method \Dew\Acs\Result checkKMSAuthorized(array $arguments = [])
 * @method \Http\Promise\Promise checkKMSAuthorizedAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterTDE(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterTDEAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserEncryptionKeyList(array $arguments = [])
 * @method \Http\Promise\Promise describeUserEncryptionKeyListAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterTDE(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterTDEAsync($arguments = [])
 * @method \Dew\Acs\Result enableFirewallRules(array $arguments = [])
 * @method \Http\Promise\Promise enableFirewallRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createDBNodes(array $arguments = [])
 * @method \Http\Promise\Promise createDBNodesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBNodes(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBNodesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBNodeClass(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBNodeClassAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBNodesClass(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBNodesClassAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBNodeHotReplicaMode(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBNodeHotReplicaModeAsync($arguments = [])
 * @method \Dew\Acs\Result restartDBNode(array $arguments = [])
 * @method \Http\Promise\Promise restartDBNodeAsync($arguments = [])
 * @method \Dew\Acs\Result tempModifyDBNode(array $arguments = [])
 * @method \Http\Promise\Promise tempModifyDBNodeAsync($arguments = [])
 * @method \Dew\Acs\Result createParameterGroup(array $arguments = [])
 * @method \Http\Promise\Promise createParameterGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterParameters(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterParametersAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBNodesParameters(array $arguments = [])
 * @method \Http\Promise\Promise describeDBNodesParametersAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterTemplates(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameterGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeParameterGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteParameterGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteParameterGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterAndNodesParameters(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterAndNodesParametersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterParameters(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterParametersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBNodesParameters(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBNodesParametersAsync($arguments = [])
 * @method \Dew\Acs\Result createDBClusterEndpoint(array $arguments = [])
 * @method \Http\Promise\Promise createDBClusterEndpointAsync($arguments = [])
 * @method \Dew\Acs\Result createDBEndpointAddress(array $arguments = [])
 * @method \Http\Promise\Promise createDBEndpointAddressAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterEndpoints(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterEndpointsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterEndpoint(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterEndpointAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBEndpointAddress(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBEndpointAddressAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBClusterEndpoint(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBClusterEndpointAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBEndpointAddress(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBEndpointAddressAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlowLogRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeSlowLogRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlowLogs(array $arguments = [])
 * @method \Http\Promise\Promise describeSlowLogsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterAuditLogCollector(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterAuditLogCollectorAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterAuditLogCollector(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterAuditLogCollectorAsync($arguments = [])
 * @method \Dew\Acs\Result createAccount(array $arguments = [])
 * @method \Http\Promise\Promise createAccountAsync($arguments = [])
 * @method \Dew\Acs\Result checkAccountName(array $arguments = [])
 * @method \Http\Promise\Promise checkAccountNameAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccounts(array $arguments = [])
 * @method \Http\Promise\Promise describeAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccountDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccountDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result grantAccountPrivilege(array $arguments = [])
 * @method \Http\Promise\Promise grantAccountPrivilegeAsync($arguments = [])
 * @method \Dew\Acs\Result revokeAccountPrivilege(array $arguments = [])
 * @method \Http\Promise\Promise revokeAccountPrivilegeAsync($arguments = [])
 * @method \Dew\Acs\Result resetAccount(array $arguments = [])
 * @method \Http\Promise\Promise resetAccountAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccount(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccountAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccountPassword(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccountPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result createDatabase(array $arguments = [])
 * @method \Http\Promise\Promise createDatabaseAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDatabase(array $arguments = [])
 * @method \Http\Promise\Promise deleteDatabaseAsync($arguments = [])
 * @method \Dew\Acs\Result describeDatabases(array $arguments = [])
 * @method \Http\Promise\Promise describeDatabasesAsync($arguments = [])
 * @method \Dew\Acs\Result describeCharacterSetName(array $arguments = [])
 * @method \Http\Promise\Promise describeCharacterSetNameAsync($arguments = [])
 * @method \Dew\Acs\Result checkDBName(array $arguments = [])
 * @method \Http\Promise\Promise checkDBNameAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInitializeVariable(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInitializeVariableAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result createGlobalDatabaseNetwork(array $arguments = [])
 * @method \Http\Promise\Promise createGlobalDatabaseNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGlobalDatabaseNetwork(array $arguments = [])
 * @method \Http\Promise\Promise deleteGlobalDatabaseNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalDatabaseNetwork(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalDatabaseNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result describeGlobalDatabaseNetworks(array $arguments = [])
 * @method \Http\Promise\Promise describeGlobalDatabaseNetworksAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGlobalDatabaseNetwork(array $arguments = [])
 * @method \Http\Promise\Promise modifyGlobalDatabaseNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result removeDBClusterFromGDN(array $arguments = [])
 * @method \Http\Promise\Promise removeDBClusterFromGDNAsync($arguments = [])
 * @method \Dew\Acs\Result switchOverGlobalDatabaseNetwork(array $arguments = [])
 * @method \Http\Promise\Promise switchOverGlobalDatabaseNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result resetGlobalDatabaseNetwork(array $arguments = [])
 * @method \Http\Promise\Promise resetGlobalDatabaseNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result createBackup(array $arguments = [])
 * @method \Http\Promise\Promise createBackupAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupLogs(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupLogsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDetachedBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeDetachedBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClustersWithBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClustersWithBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteBackup(array $arguments = [])
 * @method \Http\Promise\Promise deleteBackupAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeLogBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeLogBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyLogBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyLogBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetaList(array $arguments = [])
 * @method \Http\Promise\Promise describeMetaListAsync($arguments = [])
 * @method \Dew\Acs\Result restoreTable(array $arguments = [])
 * @method \Http\Promise\Promise restoreTableAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterMigration(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterMigrationAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterMigration(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterMigrationAsync($arguments = [])
 * @method \Dew\Acs\Result closeDBClusterMigration(array $arguments = [])
 * @method \Http\Promise\Promise closeDBClusterMigrationAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describePendingMaintenanceAction(array $arguments = [])
 * @method \Http\Promise\Promise describePendingMaintenanceActionAsync($arguments = [])
 * @method \Dew\Acs\Result describePendingMaintenanceActions(array $arguments = [])
 * @method \Http\Promise\Promise describePendingMaintenanceActionsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPendingMaintenanceAction(array $arguments = [])
 * @method \Http\Promise\Promise modifyPendingMaintenanceActionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyActiveOperationTasks(array $arguments = [])
 * @method \Http\Promise\Promise modifyActiveOperationTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveOperationTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveOperationTasksAsync($arguments = [])
 * @method \Dew\Acs\Result cancelActiveOperationTasks(array $arguments = [])
 * @method \Http\Promise\Promise cancelActiveOperationTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeScheduleTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeScheduleTasksAsync($arguments = [])
 * @method \Dew\Acs\Result cancelScheduleTasks(array $arguments = [])
 * @method \Http\Promise\Promise cancelScheduleTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeMaskingRules(array $arguments = [])
 * @method \Http\Promise\Promise describeMaskingRulesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyMaskingRules(array $arguments = [])
 * @method \Http\Promise\Promise modifyMaskingRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMaskingRules(array $arguments = [])
 * @method \Http\Promise\Promise deleteMaskingRulesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBNodePerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBNodePerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBProxyPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBProxyPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterMonitor(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterMonitor(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result describeAITaskStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeAITaskStatusAsync($arguments = [])
 * @method \Dew\Acs\Result openAITask(array $arguments = [])
 * @method \Http\Promise\Promise openAITaskAsync($arguments = [])
 * @method \Dew\Acs\Result closeAITask(array $arguments = [])
 * @method \Http\Promise\Promise closeAITaskAsync($arguments = [])
 * @method \Dew\Acs\Result createDBLink(array $arguments = [])
 * @method \Http\Promise\Promise createDBLinkAsync($arguments = [])
 * @method \Dew\Acs\Result restartDBLink(array $arguments = [])
 * @method \Http\Promise\Promise restartDBLinkAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBLink(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBLinkAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBLinks(array $arguments = [])
 * @method \Http\Promise\Promise describeDBLinksAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterConnectivity(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterConnectivityAsync($arguments = [])
 * @method \Dew\Acs\Result createColdStorageInstance(array $arguments = [])
 * @method \Http\Promise\Promise createColdStorageInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceLinkedRole(array $arguments = [])
 * @method \Http\Promise\Promise createServiceLinkedRoleAsync($arguments = [])
 * @method \Dew\Acs\Result checkServiceLinkedRole(array $arguments = [])
 * @method \Http\Promise\Promise checkServiceLinkedRoleAsync($arguments = [])
 * @method \Dew\Acs\Result describeActivationCodes(array $arguments = [])
 * @method \Http\Promise\Promise describeActivationCodesAsync($arguments = [])
 * @method \Dew\Acs\Result describeLicenseOrderDetails(array $arguments = [])
 * @method \Http\Promise\Promise describeLicenseOrderDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result describeLicenseOrders(array $arguments = [])
 * @method \Http\Promise\Promise describeLicenseOrdersAsync($arguments = [])
 * @method \Dew\Acs\Result createOrGetVirtualLicenseOrder(array $arguments = [])
 * @method \Http\Promise\Promise createOrGetVirtualLicenseOrderAsync($arguments = [])
 * @method \Dew\Acs\Result createActivationCode(array $arguments = [])
 * @method \Http\Promise\Promise createActivationCodeAsync($arguments = [])
 * @method \Dew\Acs\Result describeActivationCodeDetails(array $arguments = [])
 * @method \Http\Promise\Promise describeActivationCodeDetailsAsync($arguments = [])
 */
final class PolardbClient extends AcsClient
{
    //
}

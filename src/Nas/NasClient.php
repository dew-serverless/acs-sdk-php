<?php

declare(strict_types=1);

namespace Dew\Acs\Nas;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result openNASService(array $arguments = [])
 * @method \Http\Promise\Promise openNASServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeZones(array $arguments = [])
 * @method \Http\Promise\Promise describeZonesAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result createFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise createFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise deleteFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise modifyFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result describeFileSystems(array $arguments = [])
 * @method \Http\Promise\Promise describeFileSystemsAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise upgradeFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result createMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise createMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise deleteMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result modifyMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise modifyMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result describeMountTargets(array $arguments = [])
 * @method \Http\Promise\Promise describeMountTargetsAsync($arguments = [])
 * @method \Dew\Acs\Result describeMountedClients(array $arguments = [])
 * @method \Http\Promise\Promise describeMountedClientsAsync($arguments = [])
 * @method \Dew\Acs\Result createAccessPoint(array $arguments = [])
 * @method \Http\Promise\Promise createAccessPointAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccessPoint(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccessPointAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccessPoints(array $arguments = [])
 * @method \Http\Promise\Promise describeAccessPointsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccessPoint(array $arguments = [])
 * @method \Http\Promise\Promise describeAccessPointAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccessPoint(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccessPointAsync($arguments = [])
 * @method \Dew\Acs\Result createDir(array $arguments = [])
 * @method \Http\Promise\Promise createDirAsync($arguments = [])
 * @method \Dew\Acs\Result createAccessGroup(array $arguments = [])
 * @method \Http\Promise\Promise createAccessGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccessGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccessGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccessGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccessGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccessGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeAccessGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createAccessRule(array $arguments = [])
 * @method \Http\Promise\Promise createAccessRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccessRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccessRuleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccessRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccessRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccessRules(array $arguments = [])
 * @method \Http\Promise\Promise describeAccessRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise createSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise deleteSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result describeSnapshots(array $arguments = [])
 * @method \Http\Promise\Promise describeSnapshotsAsync($arguments = [])
 * @method \Dew\Acs\Result createAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result applyAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise applyAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result cancelAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise cancelAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeAutoSnapshotPolicies(array $arguments = [])
 * @method \Http\Promise\Promise describeAutoSnapshotPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result describeAutoSnapshotTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeAutoSnapshotTasksAsync($arguments = [])
 * @method \Dew\Acs\Result resetFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise resetFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result setDirQuota(array $arguments = [])
 * @method \Http\Promise\Promise setDirQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result cancelDirQuota(array $arguments = [])
 * @method \Http\Promise\Promise cancelDirQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result describeDirQuotas(array $arguments = [])
 * @method \Http\Promise\Promise describeDirQuotasAsync($arguments = [])
 * @method \Dew\Acs\Result createLifecyclePolicy(array $arguments = [])
 * @method \Http\Promise\Promise createLifecyclePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLifecyclePolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteLifecyclePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyLifecyclePolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyLifecyclePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result getDirectoryOrFileProperties(array $arguments = [])
 * @method \Http\Promise\Promise getDirectoryOrFilePropertiesAsync($arguments = [])
 * @method \Dew\Acs\Result describeLifecyclePolicies(array $arguments = [])
 * @method \Http\Promise\Promise describeLifecyclePoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result createLifecycleRetrieveJob(array $arguments = [])
 * @method \Http\Promise\Promise createLifecycleRetrieveJobAsync($arguments = [])
 * @method \Dew\Acs\Result cancelLifecycleRetrieveJob(array $arguments = [])
 * @method \Http\Promise\Promise cancelLifecycleRetrieveJobAsync($arguments = [])
 * @method \Dew\Acs\Result retryLifecycleRetrieveJob(array $arguments = [])
 * @method \Http\Promise\Promise retryLifecycleRetrieveJobAsync($arguments = [])
 * @method \Dew\Acs\Result listLifecycleRetrieveJobs(array $arguments = [])
 * @method \Http\Promise\Promise listLifecycleRetrieveJobsAsync($arguments = [])
 * @method \Dew\Acs\Result listDirectoriesAndFiles(array $arguments = [])
 * @method \Http\Promise\Promise listDirectoriesAndFilesAsync($arguments = [])
 * @method \Dew\Acs\Result enableRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise enableRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result disableAndCleanRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise disableAndCleanRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result updateRecycleBinAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateRecycleBinAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result getRecycleBinAttribute(array $arguments = [])
 * @method \Http\Promise\Promise getRecycleBinAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result createRecycleBinRestoreJob(array $arguments = [])
 * @method \Http\Promise\Promise createRecycleBinRestoreJobAsync($arguments = [])
 * @method \Dew\Acs\Result createRecycleBinDeleteJob(array $arguments = [])
 * @method \Http\Promise\Promise createRecycleBinDeleteJobAsync($arguments = [])
 * @method \Dew\Acs\Result cancelRecycleBinJob(array $arguments = [])
 * @method \Http\Promise\Promise cancelRecycleBinJobAsync($arguments = [])
 * @method \Dew\Acs\Result listRecycleBinJobs(array $arguments = [])
 * @method \Http\Promise\Promise listRecycleBinJobsAsync($arguments = [])
 * @method \Dew\Acs\Result listRecentlyRecycledDirectories(array $arguments = [])
 * @method \Http\Promise\Promise listRecentlyRecycledDirectoriesAsync($arguments = [])
 * @method \Dew\Acs\Result listRecycledDirectoriesAndFiles(array $arguments = [])
 * @method \Http\Promise\Promise listRecycledDirectoriesAndFilesAsync($arguments = [])
 * @method \Dew\Acs\Result enableSmbAcl(array $arguments = [])
 * @method \Http\Promise\Promise enableSmbAclAsync($arguments = [])
 * @method \Dew\Acs\Result disableSmbAcl(array $arguments = [])
 * @method \Http\Promise\Promise disableSmbAclAsync($arguments = [])
 * @method \Dew\Acs\Result modifySmbAcl(array $arguments = [])
 * @method \Http\Promise\Promise modifySmbAclAsync($arguments = [])
 * @method \Dew\Acs\Result describeSmbAcl(array $arguments = [])
 * @method \Http\Promise\Promise describeSmbAclAsync($arguments = [])
 * @method \Dew\Acs\Result createFile(array $arguments = [])
 * @method \Http\Promise\Promise createFileAsync($arguments = [])
 * @method \Dew\Acs\Result enableNfsAcl(array $arguments = [])
 * @method \Http\Promise\Promise enableNfsAclAsync($arguments = [])
 * @method \Dew\Acs\Result disableNfsAcl(array $arguments = [])
 * @method \Http\Promise\Promise disableNfsAclAsync($arguments = [])
 * @method \Dew\Acs\Result describeNfsAcl(array $arguments = [])
 * @method \Http\Promise\Promise describeNfsAclAsync($arguments = [])
 * @method \Dew\Acs\Result createLogAnalysis(array $arguments = [])
 * @method \Http\Promise\Promise createLogAnalysisAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLogAnalysis(array $arguments = [])
 * @method \Http\Promise\Promise deleteLogAnalysisAsync($arguments = [])
 * @method \Dew\Acs\Result describeLogAnalysis(array $arguments = [])
 * @method \Http\Promise\Promise describeLogAnalysisAsync($arguments = [])
 * @method \Dew\Acs\Result createFileset(array $arguments = [])
 * @method \Http\Promise\Promise createFilesetAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFileset(array $arguments = [])
 * @method \Http\Promise\Promise deleteFilesetAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFileset(array $arguments = [])
 * @method \Http\Promise\Promise modifyFilesetAsync($arguments = [])
 * @method \Dew\Acs\Result describeFilesets(array $arguments = [])
 * @method \Http\Promise\Promise describeFilesetsAsync($arguments = [])
 * @method \Dew\Acs\Result createDataFlow(array $arguments = [])
 * @method \Http\Promise\Promise createDataFlowAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDataFlow(array $arguments = [])
 * @method \Http\Promise\Promise deleteDataFlowAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDataFlow(array $arguments = [])
 * @method \Http\Promise\Promise modifyDataFlowAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataFlows(array $arguments = [])
 * @method \Http\Promise\Promise describeDataFlowsAsync($arguments = [])
 * @method \Dew\Acs\Result stopDataFlow(array $arguments = [])
 * @method \Http\Promise\Promise stopDataFlowAsync($arguments = [])
 * @method \Dew\Acs\Result startDataFlow(array $arguments = [])
 * @method \Http\Promise\Promise startDataFlowAsync($arguments = [])
 * @method \Dew\Acs\Result createDataFlowTask(array $arguments = [])
 * @method \Http\Promise\Promise createDataFlowTaskAsync($arguments = [])
 * @method \Dew\Acs\Result cancelDataFlowTask(array $arguments = [])
 * @method \Http\Promise\Promise cancelDataFlowTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataFlowTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeDataFlowTasksAsync($arguments = [])
 * @method \Dew\Acs\Result applyDataFlowAutoRefresh(array $arguments = [])
 * @method \Http\Promise\Promise applyDataFlowAutoRefreshAsync($arguments = [])
 * @method \Dew\Acs\Result cancelDataFlowAutoRefresh(array $arguments = [])
 * @method \Http\Promise\Promise cancelDataFlowAutoRefreshAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDataFlowAutoRefresh(array $arguments = [])
 * @method \Http\Promise\Promise modifyDataFlowAutoRefreshAsync($arguments = [])
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createProtocolService(array $arguments = [])
 * @method \Http\Promise\Promise createProtocolServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteProtocolService(array $arguments = [])
 * @method \Http\Promise\Promise deleteProtocolServiceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyProtocolService(array $arguments = [])
 * @method \Http\Promise\Promise modifyProtocolServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeProtocolService(array $arguments = [])
 * @method \Http\Promise\Promise describeProtocolServiceAsync($arguments = [])
 * @method \Dew\Acs\Result createProtocolMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise createProtocolMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result deleteProtocolMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise deleteProtocolMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result modifyProtocolMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise modifyProtocolMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result describeProtocolMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise describeProtocolMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result addTags(array $arguments = []) {@deprecated 2017-06-26}
 * @method \Http\Promise\Promise addTagsAsync($arguments = []) {@deprecated 2017-06-26}
 * @method \Dew\Acs\Result removeTags(array $arguments = []) {@deprecated 2017-06-26}
 * @method \Http\Promise\Promise removeTagsAsync($arguments = []) {@deprecated 2017-06-26}
 * @method \Dew\Acs\Result addClientToBlackList(array $arguments = []) {@deprecated 2017-06-26}
 * @method \Http\Promise\Promise addClientToBlackListAsync($arguments = []) {@deprecated 2017-06-26}
 * @method \Dew\Acs\Result describeBlackListClients(array $arguments = []) {@deprecated 2017-06-26}
 * @method \Http\Promise\Promise describeBlackListClientsAsync($arguments = []) {@deprecated 2017-06-26}
 * @method \Dew\Acs\Result removeClientFromBlackList(array $arguments = []) {@deprecated 2017-06-26}
 * @method \Http\Promise\Promise removeClientFromBlackListAsync($arguments = []) {@deprecated 2017-06-26}
 * @method \Dew\Acs\Result createLDAPConfig(array $arguments = [])
 * @method \Http\Promise\Promise createLDAPConfigAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLDAPConfig(array $arguments = [])
 * @method \Http\Promise\Promise deleteLDAPConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyLDAPConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyLDAPConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeFileSystemStatistics(array $arguments = [])
 * @method \Http\Promise\Promise describeFileSystemStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result describeStoragePackages(array $arguments = [])
 * @method \Http\Promise\Promise describeStoragePackagesAsync($arguments = [])
 */
final class NasClient extends AcsClient
{
    //
}

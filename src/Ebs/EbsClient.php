<?php

declare(strict_types=1);

namespace Dew\Acs\Ebs;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result createDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise createDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result addDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise addDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise modifyDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result startDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise startDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result stopDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise stopDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result reprotectDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise reprotectDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result failoverDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise failoverDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiskReplicaPairProgress(array $arguments = [])
 * @method \Http\Promise\Promise describeDiskReplicaPairProgressAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise deleteDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiskReplicaPairs(array $arguments = [])
 * @method \Http\Promise\Promise describeDiskReplicaPairsAsync($arguments = [])
 * @method \Dew\Acs\Result removeDiskReplicaPair(array $arguments = [])
 * @method \Http\Promise\Promise removeDiskReplicaPairAsync($arguments = [])
 * @method \Dew\Acs\Result describePairDrills(array $arguments = [])
 * @method \Http\Promise\Promise describePairDrillsAsync($arguments = [])
 * @method \Dew\Acs\Result startPairDrill(array $arguments = [])
 * @method \Http\Promise\Promise startPairDrillAsync($arguments = [])
 * @method \Dew\Acs\Result clearPairDrill(array $arguments = [])
 * @method \Http\Promise\Promise clearPairDrillAsync($arguments = [])
 * @method \Dew\Acs\Result createDiskReplicaGroup(array $arguments = [])
 * @method \Http\Promise\Promise createDiskReplicaGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiskReplicaGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeDiskReplicaGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDiskReplicaGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyDiskReplicaGroupAsync($arguments = [])
 * @method \Dew\Acs\Result startDiskReplicaGroup(array $arguments = [])
 * @method \Http\Promise\Promise startDiskReplicaGroupAsync($arguments = [])
 * @method \Dew\Acs\Result stopDiskReplicaGroup(array $arguments = [])
 * @method \Http\Promise\Promise stopDiskReplicaGroupAsync($arguments = [])
 * @method \Dew\Acs\Result failoverDiskReplicaGroup(array $arguments = [])
 * @method \Http\Promise\Promise failoverDiskReplicaGroupAsync($arguments = [])
 * @method \Dew\Acs\Result reprotectDiskReplicaGroup(array $arguments = [])
 * @method \Http\Promise\Promise reprotectDiskReplicaGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDiskReplicaGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteDiskReplicaGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeReplicaGroupDrills(array $arguments = [])
 * @method \Http\Promise\Promise describeReplicaGroupDrillsAsync($arguments = [])
 * @method \Dew\Acs\Result startReplicaGroupDrill(array $arguments = [])
 * @method \Http\Promise\Promise startReplicaGroupDrillAsync($arguments = [])
 * @method \Dew\Acs\Result clearReplicaGroupDrill(array $arguments = [])
 * @method \Http\Promise\Promise clearReplicaGroupDrillAsync($arguments = [])
 * @method \Dew\Acs\Result createDedicatedBlockStorageCluster(array $arguments = [])
 * @method \Http\Promise\Promise createDedicatedBlockStorageClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describeDedicatedBlockStorageClusters(array $arguments = [])
 * @method \Http\Promise\Promise describeDedicatedBlockStorageClustersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDedicatedBlockStorageClusterAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyDedicatedBlockStorageClusterAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDedicatedBlockStorageClusterDisks(array $arguments = [])
 * @method \Http\Promise\Promise describeDedicatedBlockStorageClusterDisksAsync($arguments = [])
 * @method \Dew\Acs\Result queryDedicatedBlockStorageClusterInventoryData(array $arguments = [])
 * @method \Http\Promise\Promise queryDedicatedBlockStorageClusterInventoryDataAsync($arguments = [])
 * @method \Dew\Acs\Result createEnterpriseSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createEnterpriseSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnterpriseSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeEnterpriseSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result updateEnterpriseSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise updateEnterpriseSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result bindEnterpriseSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise bindEnterpriseSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result unbindEnterpriseSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise unbindEnterpriseSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEnterpriseSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteEnterpriseSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result applyLensService(array $arguments = [])
 * @method \Http\Promise\Promise applyLensServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeLensServiceStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeLensServiceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result cancelLensService(array $arguments = [])
 * @method \Http\Promise\Promise cancelLensServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeLensMonitorDisks(array $arguments = [])
 * @method \Http\Promise\Promise describeLensMonitorDisksAsync($arguments = [])
 * @method \Dew\Acs\Result describeEvents(array $arguments = [])
 * @method \Http\Promise\Promise describeEventsAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricData(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiskMonitorDataList(array $arguments = [])
 * @method \Http\Promise\Promise describeDiskMonitorDataListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiskMonitorData(array $arguments = [])
 * @method \Http\Promise\Promise describeDiskMonitorDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiskEvents(array $arguments = [])
 * @method \Http\Promise\Promise describeDiskEventsAsync($arguments = [])
 * @method \Dew\Acs\Result updateSolutionInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateSolutionInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeSolutionInstanceConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise describeSolutionInstanceConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result queryDedicatedBlockStorageClusterDiskThroughputStatus(array $arguments = [])
 * @method \Http\Promise\Promise queryDedicatedBlockStorageClusterDiskThroughputStatusAsync($arguments = [])
 * @method \Dew\Acs\Result setDedicatedBlockStorageClusterDiskThroughput(array $arguments = [])
 * @method \Http\Promise\Promise setDedicatedBlockStorageClusterDiskThroughputAsync($arguments = [])
 * @method \Dew\Acs\Result listReports(array $arguments = [])
 * @method \Http\Promise\Promise listReportsAsync($arguments = [])
 * @method \Dew\Acs\Result getReport(array $arguments = [])
 * @method \Http\Promise\Promise getReportAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserTagKeys(array $arguments = [])
 * @method \Http\Promise\Promise describeUserTagKeysAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserTagValues(array $arguments = [])
 * @method \Http\Promise\Promise describeUserTagValuesAsync($arguments = [])
 */
final class EbsClient extends AcsClient
{
    //
}

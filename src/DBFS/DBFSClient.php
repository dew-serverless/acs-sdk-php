<?php

declare(strict_types=1);

namespace Dew\Acs\DBFS;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createDbfs(array $arguments = [])
 * @method \Http\Promise\Promise createDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result updateDbfs(array $arguments = [])
 * @method \Http\Promise\Promise updateDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDbfs(array $arguments = [])
 * @method \Http\Promise\Promise deleteDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result attachDbfs(array $arguments = [])
 * @method \Http\Promise\Promise attachDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result detachDbfs(array $arguments = [])
 * @method \Http\Promise\Promise detachDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result renameDbfs(array $arguments = [])
 * @method \Http\Promise\Promise renameDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result resizeDbfs(array $arguments = [])
 * @method \Http\Promise\Promise resizeDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result listDbfs(array $arguments = [])
 * @method \Http\Promise\Promise listDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result getDbfs(array $arguments = [])
 * @method \Http\Promise\Promise getDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result listDbfsAttachableEcsInstances(array $arguments = [])
 * @method \Http\Promise\Promise listDbfsAttachableEcsInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result listDbfsAttachedEcsInstances(array $arguments = [])
 * @method \Http\Promise\Promise listDbfsAttachedEcsInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result createSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise createSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise deleteSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result modifySnapshotAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifySnapshotAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise listSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result getSnapshotLink(array $arguments = [])
 * @method \Http\Promise\Promise getSnapshotLinkAsync($arguments = [])
 * @method \Dew\Acs\Result listSnapshotLinks(array $arguments = [])
 * @method \Http\Promise\Promise listSnapshotLinksAsync($arguments = [])
 * @method \Dew\Acs\Result createAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result cancelAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise cancelAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result applyAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise applyAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result getAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listAutoSnapshotPolicies(array $arguments = [])
 * @method \Http\Promise\Promise listAutoSnapshotPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result listAutoSnapshotPolicyUnappliedDbfs(array $arguments = [])
 * @method \Http\Promise\Promise listAutoSnapshotPolicyUnappliedDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result listAutoSnapshotPolicyAppliedDbfs(array $arguments = [])
 * @method \Http\Promise\Promise listAutoSnapshotPolicyAppliedDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTagsBatch(array $arguments = [])
 * @method \Http\Promise\Promise deleteTagsBatchAsync($arguments = [])
 * @method \Dew\Acs\Result tagDbfs(array $arguments = [])
 * @method \Http\Promise\Promise tagDbfsAsync($arguments = [])
 * @method \Dew\Acs\Result addTagsBatch(array $arguments = [])
 * @method \Http\Promise\Promise addTagsBatchAsync($arguments = [])
 * @method \Dew\Acs\Result listTagKeys(array $arguments = [])
 * @method \Http\Promise\Promise listTagKeysAsync($arguments = [])
 * @method \Dew\Acs\Result listTagValues(array $arguments = [])
 * @method \Http\Promise\Promise listTagValuesAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceLinkedRole(array $arguments = [])
 * @method \Http\Promise\Promise createServiceLinkedRoleAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceLinkedRole(array $arguments = [])
 * @method \Http\Promise\Promise getServiceLinkedRoleAsync($arguments = [])
 * @method \Dew\Acs\Result describeDbfsSpecifications(array $arguments = [])
 * @method \Http\Promise\Promise describeDbfsSpecificationsAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceTypes(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceTypesAsync($arguments = [])
 * @method \Dew\Acs\Result opreateConstants(array $arguments = [])
 * @method \Http\Promise\Promise opreateConstantsAsync($arguments = [])
 * @method \Dew\Acs\Result generateUpgradeRecord(array $arguments = [])
 * @method \Http\Promise\Promise generateUpgradeRecordAsync($arguments = [])
 * @method \Dew\Acs\Result publishUpgradeTask(array $arguments = [])
 * @method \Http\Promise\Promise publishUpgradeTaskAsync($arguments = [])
 * @method \Dew\Acs\Result dbfsRecord(array $arguments = [])
 * @method \Http\Promise\Promise dbfsRecordAsync($arguments = [])
 * @method \Dew\Acs\Result stopUpgradeTask(array $arguments = [])
 * @method \Http\Promise\Promise stopUpgradeTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createConstants(array $arguments = [])
 * @method \Http\Promise\Promise createConstantsAsync($arguments = [])
 * @method \Dew\Acs\Result insertSynchronizConstants(array $arguments = [])
 * @method \Http\Promise\Promise insertSynchronizConstantsAsync($arguments = [])
 * @method \Dew\Acs\Result getSynchronizConstants(array $arguments = [])
 * @method \Http\Promise\Promise getSynchronizConstantsAsync($arguments = [])
 * @method \Dew\Acs\Result listConstants(array $arguments = [])
 * @method \Http\Promise\Promise listConstantsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConstants(array $arguments = [])
 * @method \Http\Promise\Promise deleteConstantsAsync($arguments = [])
 * @method \Dew\Acs\Result updateConstants(array $arguments = [])
 * @method \Http\Promise\Promise updateConstantsAsync($arguments = [])
 */
final class DBFSClient extends AcsClient
{
    //
}

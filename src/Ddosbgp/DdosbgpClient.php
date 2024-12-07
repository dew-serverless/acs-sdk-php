<?php

declare(strict_types=1);

namespace Dew\Acs\Ddosbgp;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deletePolicy(array $arguments = [])
 * @method \Http\Promise\Promise deletePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPolicyContent(array $arguments = [])
 * @method \Http\Promise\Promise modifyPolicyContentAsync($arguments = [])
 * @method \Dew\Acs\Result listPolicy(array $arguments = [])
 * @method \Http\Promise\Promise listPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result attachToPolicy(array $arguments = [])
 * @method \Http\Promise\Promise attachToPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result detachFromPolicy(array $arguments = [])
 * @method \Http\Promise\Promise detachFromPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listPolicyAttachment(array $arguments = [])
 * @method \Http\Promise\Promise listPolicyAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result describeRdStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeRdStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeRdMemberList(array $arguments = [])
 * @method \Http\Promise\Promise describeRdMemberListAsync($arguments = [])
 * @method \Dew\Acs\Result addRdMemberList(array $arguments = [])
 * @method \Http\Promise\Promise addRdMemberListAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRdMemberList(array $arguments = [])
 * @method \Http\Promise\Promise deleteRdMemberListAsync($arguments = [])
 * @method \Dew\Acs\Result modifyRemark(array $arguments = [])
 * @method \Http\Promise\Promise modifyRemarkAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceList(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceListAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceSpecs(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceSpecsAsync($arguments = [])
 * @method \Dew\Acs\Result describeExcpetionCount(array $arguments = [])
 * @method \Http\Promise\Promise describeExcpetionCountAsync($arguments = [])
 * @method \Dew\Acs\Result describePackIpList(array $arguments = [])
 * @method \Http\Promise\Promise describePackIpListAsync($arguments = [])
 * @method \Dew\Acs\Result getSlsOpenStatus(array $arguments = [])
 * @method \Http\Promise\Promise getSlsOpenStatusAsync($arguments = [])
 * @method \Dew\Acs\Result checkGrant(array $arguments = [])
 * @method \Http\Promise\Promise checkGrantAsync($arguments = [])
 * @method \Dew\Acs\Result dettachAssetGroupToInstance(array $arguments = [])
 * @method \Http\Promise\Promise dettachAssetGroupToInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAssetGroupToInstance(array $arguments = [])
 * @method \Http\Promise\Promise describeAssetGroupToInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result attachAssetGroupToInstance(array $arguments = [])
 * @method \Http\Promise\Promise attachAssetGroupToInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAssetGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeAssetGroupAsync($arguments = [])
 * @method \Dew\Acs\Result addIp(array $arguments = [])
 * @method \Http\Promise\Promise addIpAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIp(array $arguments = [])
 * @method \Http\Promise\Promise deleteIpAsync($arguments = [])
 * @method \Dew\Acs\Result deleteBlackhole(array $arguments = [])
 * @method \Http\Promise\Promise deleteBlackholeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDdosEvent(array $arguments = [])
 * @method \Http\Promise\Promise describeDdosEventAsync($arguments = [])
 * @method \Dew\Acs\Result describeOpEntities(array $arguments = [])
 * @method \Http\Promise\Promise describeOpEntitiesAsync($arguments = [])
 * @method \Dew\Acs\Result describeTraffic(array $arguments = [])
 * @method \Http\Promise\Promise describeTrafficAsync($arguments = [])
 * @method \Dew\Acs\Result listOpenedAccessLogInstances(array $arguments = [])
 * @method \Http\Promise\Promise listOpenedAccessLogInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeOnDemandDdosEvent(array $arguments = [])
 * @method \Http\Promise\Promise describeOnDemandDdosEventAsync($arguments = [])
 * @method \Dew\Acs\Result checkAccessLogAuth(array $arguments = [])
 * @method \Http\Promise\Promise checkAccessLogAuthAsync($arguments = [])
 * @method \Dew\Acs\Result createSchedruleOnDemand(array $arguments = [])
 * @method \Http\Promise\Promise createSchedruleOnDemandAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSchedruleOnDemand(array $arguments = [])
 * @method \Http\Promise\Promise deleteSchedruleOnDemandAsync($arguments = [])
 * @method \Dew\Acs\Result setInstanceModeOnDemand(array $arguments = [])
 * @method \Http\Promise\Promise setInstanceModeOnDemandAsync($arguments = [])
 * @method \Dew\Acs\Result describeOnDemandInstanceStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeOnDemandInstanceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result querySchedruleOnDemand(array $arguments = [])
 * @method \Http\Promise\Promise querySchedruleOnDemandAsync($arguments = [])
 * @method \Dew\Acs\Result configSchedruleOnDemand(array $arguments = [])
 * @method \Http\Promise\Promise configSchedruleOnDemandAsync($arguments = [])
 * @method \Dew\Acs\Result listTagKeys(array $arguments = [])
 * @method \Http\Promise\Promise listTagKeysAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result releaseDdosOriginInstance(array $arguments = [])
 * @method \Http\Promise\Promise releaseDdosOriginInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDdosOriginInstanceBill(array $arguments = [])
 * @method \Http\Promise\Promise describeDdosOriginInstanceBillAsync($arguments = [])
 * @method \Dew\Acs\Result describeCcPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeCcPolicyAsync($arguments = [])
 */
final class DdosbgpClient extends AcsClient
{
    //
}

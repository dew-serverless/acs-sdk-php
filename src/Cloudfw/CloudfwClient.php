<?php

declare(strict_types=1);

namespace Dew\Acs\Cloudfw;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result describeNatFirewallList(array $arguments = [])
 * @method \Http\Promise\Promise describeNatFirewallListAsync($arguments = [])
 * @method \Dew\Acs\Result createSecurityProxy(array $arguments = [])
 * @method \Http\Promise\Promise createSecurityProxyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSecurityProxy(array $arguments = [])
 * @method \Http\Promise\Promise deleteSecurityProxyAsync($arguments = [])
 * @method \Dew\Acs\Result switchSecurityProxy(array $arguments = [])
 * @method \Http\Promise\Promise switchSecurityProxyAsync($arguments = [])
 * @method \Dew\Acs\Result describeAssetList(array $arguments = [])
 * @method \Http\Promise\Promise describeAssetListAsync($arguments = [])
 * @method \Dew\Acs\Result putDisableFwSwitch(array $arguments = [])
 * @method \Http\Promise\Promise putDisableFwSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result putEnableAllFwSwitch(array $arguments = [])
 * @method \Http\Promise\Promise putEnableAllFwSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result putEnableFwSwitch(array $arguments = [])
 * @method \Http\Promise\Promise putEnableFwSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result putDisableAllFwSwitch(array $arguments = [])
 * @method \Http\Promise\Promise putDisableAllFwSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result createNatFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createNatFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeNatFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeNatFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeNatFirewallPolicyPriorUsed(array $arguments = [])
 * @method \Http\Promise\Promise describeNatFirewallPolicyPriorUsedAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNatFirewallControlPolicyPosition(array $arguments = [])
 * @method \Http\Promise\Promise modifyNatFirewallControlPolicyPositionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNatFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyNatFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNatFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteNatFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createVpcFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createVpcFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result batchCopyVpcFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise batchCopyVpcFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result resetVpcFirewallRuleHitCount(array $arguments = [])
 * @method \Http\Promise\Promise resetVpcFirewallRuleHitCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallAclGroupList(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallAclGroupListAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallPolicyPriorUsed(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallPolicyPriorUsedAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVpcFirewallControlPolicyPosition(array $arguments = [])
 * @method \Http\Promise\Promise modifyVpcFirewallControlPolicyPositionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVpcFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyVpcFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVpcFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteVpcFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeACLProtectTrend(array $arguments = [])
 * @method \Http\Promise\Promise describeACLProtectTrendAsync($arguments = [])
 * @method \Dew\Acs\Result describePolicyAdvancedConfig(array $arguments = [])
 * @method \Http\Promise\Promise describePolicyAdvancedConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPolicyAdvancedConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyPolicyAdvancedConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describePolicyPriorUsed(array $arguments = [])
 * @method \Http\Promise\Promise describePolicyPriorUsedAsync($arguments = [])
 * @method \Dew\Acs\Result describeDomainResolve(array $arguments = [])
 * @method \Http\Promise\Promise describeDomainResolveAsync($arguments = [])
 * @method \Dew\Acs\Result describeControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyControlPolicyPosition(array $arguments = [])
 * @method \Http\Promise\Promise modifyControlPolicyPositionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result addControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise addControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVpcFirewallDefaultIPSConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyVpcFirewallDefaultIPSConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallDefaultIPSConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallDefaultIPSConfigAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVpcFirewallConfigure(array $arguments = [])
 * @method \Http\Promise\Promise deleteVpcFirewallConfigureAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVpcFirewallConfigure(array $arguments = [])
 * @method \Http\Promise\Promise modifyVpcFirewallConfigureAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVpcFirewallSwitchStatus(array $arguments = [])
 * @method \Http\Promise\Promise modifyVpcFirewallSwitchStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallDetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallList(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallListAsync($arguments = [])
 * @method \Dew\Acs\Result createVpcFirewallConfigure(array $arguments = [])
 * @method \Http\Promise\Promise createVpcFirewallConfigureAsync($arguments = [])
 * @method \Dew\Acs\Result createVpcFirewallCenConfigure(array $arguments = [])
 * @method \Http\Promise\Promise createVpcFirewallCenConfigureAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVpcFirewallCenSwitchStatus(array $arguments = [])
 * @method \Http\Promise\Promise modifyVpcFirewallCenSwitchStatusAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVpcFirewallCenConfigure(array $arguments = [])
 * @method \Http\Promise\Promise modifyVpcFirewallCenConfigureAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallCenList(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallCenListAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallCenDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallCenDetailAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVpcFirewallCenConfigure(array $arguments = [])
 * @method \Http\Promise\Promise deleteVpcFirewallCenConfigureAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFirewallV2RoutePolicies(array $arguments = [])
 * @method \Http\Promise\Promise deleteFirewallV2RoutePoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result createTrFirewallV2(array $arguments = [])
 * @method \Http\Promise\Promise createTrFirewallV2Async($arguments = [])
 * @method \Dew\Acs\Result createTrFirewallV2RoutePolicy(array $arguments = [])
 * @method \Http\Promise\Promise createTrFirewallV2RoutePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeTrFirewallsV2Detail(array $arguments = [])
 * @method \Http\Promise\Promise describeTrFirewallsV2DetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeTrFirewallsV2List(array $arguments = [])
 * @method \Http\Promise\Promise describeTrFirewallsV2ListAsync($arguments = [])
 * @method \Dew\Acs\Result describeTrFirewallsV2RouteList(array $arguments = [])
 * @method \Http\Promise\Promise describeTrFirewallsV2RouteListAsync($arguments = [])
 * @method \Dew\Acs\Result describeTrFirewallV2RoutePolicyList(array $arguments = [])
 * @method \Http\Promise\Promise describeTrFirewallV2RoutePolicyListAsync($arguments = [])
 * @method \Dew\Acs\Result describeTrFirewallPolicyBackUpAssociationList(array $arguments = [])
 * @method \Http\Promise\Promise describeTrFirewallPolicyBackUpAssociationListAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTrFirewallV2Configuration(array $arguments = [])
 * @method \Http\Promise\Promise modifyTrFirewallV2ConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFirewallV2RoutePolicySwitch(array $arguments = [])
 * @method \Http\Promise\Promise modifyFirewallV2RoutePolicySwitchAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTrFirewallV2RoutePolicyScope(array $arguments = [])
 * @method \Http\Promise\Promise modifyTrFirewallV2RoutePolicyScopeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTrFirewallV2(array $arguments = [])
 * @method \Http\Promise\Promise deleteTrFirewallV2Async($arguments = [])
 * @method \Dew\Acs\Result addInstanceMembers(array $arguments = [])
 * @method \Http\Promise\Promise addInstanceMembersAsync($arguments = [])
 * @method \Dew\Acs\Result deleteInstanceMembers(array $arguments = [])
 * @method \Http\Promise\Promise deleteInstanceMembersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceMemberAttributes(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceMemberAttributesAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceMembers(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceMembersAsync($arguments = [])
 * @method \Dew\Acs\Result describeRiskEventPayload(array $arguments = [])
 * @method \Http\Promise\Promise describeRiskEventPayloadAsync($arguments = [])
 * @method \Dew\Acs\Result describeVulnerabilityProtectedList(array $arguments = [])
 * @method \Http\Promise\Promise describeVulnerabilityProtectedListAsync($arguments = [])
 * @method \Dew\Acs\Result describeRiskEventGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeRiskEventGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserAssetIPTrafficInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeUserAssetIPTrafficInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeInvadeEventList(array $arguments = [])
 * @method \Http\Promise\Promise describeInvadeEventListAsync($arguments = [])
 * @method \Dew\Acs\Result describeOutgoingDestinationIP(array $arguments = [])
 * @method \Http\Promise\Promise describeOutgoingDestinationIPAsync($arguments = [])
 * @method \Dew\Acs\Result describeOutgoingDomain(array $arguments = [])
 * @method \Http\Promise\Promise describeOutgoingDomainAsync($arguments = [])
 * @method \Dew\Acs\Result addAddressBook(array $arguments = [])
 * @method \Http\Promise\Promise addAddressBookAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAddressBook(array $arguments = [])
 * @method \Http\Promise\Promise deleteAddressBookAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAddressBook(array $arguments = [])
 * @method \Http\Promise\Promise modifyAddressBookAsync($arguments = [])
 * @method \Dew\Acs\Result describeAddressBook(array $arguments = [])
 * @method \Http\Promise\Promise describeAddressBookAsync($arguments = [])
 * @method \Dew\Acs\Result describeInternetOpenIp(array $arguments = [])
 * @method \Http\Promise\Promise describeInternetOpenIpAsync($arguments = [])
 * @method \Dew\Acs\Result describeInternetTrafficTrend(array $arguments = [])
 * @method \Http\Promise\Promise describeInternetTrafficTrendAsync($arguments = [])
 * @method \Dew\Acs\Result releasePostInstance(array $arguments = [])
 * @method \Http\Promise\Promise releasePostInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAssetRiskList(array $arguments = [])
 * @method \Http\Promise\Promise describeAssetRiskListAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcListLite(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcListLiteAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVpcFirewallIPSWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise modifyVpcFirewallIPSWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcFirewallIPSWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcFirewallIPSWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result deleteControlPolicyTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteControlPolicyTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result describePrefixLists(array $arguments = [])
 * @method \Http\Promise\Promise describePrefixListsAsync($arguments = [])
 * @method \Dew\Acs\Result createDownloadTask(array $arguments = [])
 * @method \Http\Promise\Promise createDownloadTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeDownloadTaskType(array $arguments = [])
 * @method \Http\Promise\Promise describeDownloadTaskTypeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDownloadTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteDownloadTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeDownloadTask(array $arguments = [])
 * @method \Http\Promise\Promise describeDownloadTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNatFirewallControlPolicyBatch(array $arguments = [])
 * @method \Http\Promise\Promise deleteNatFirewallControlPolicyBatchAsync($arguments = [])
 * @method \Dew\Acs\Result resetNatFirewallRuleHitCount(array $arguments = [])
 * @method \Http\Promise\Promise resetNatFirewallRuleHitCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeNatAclPageStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeNatAclPageStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceRiskLevels(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceRiskLevelsAsync($arguments = [])
 * @method \Dew\Acs\Result describeCfwRiskLevelSummary(array $arguments = [])
 * @method \Http\Promise\Promise describeCfwRiskLevelSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result describeVpcZone(array $arguments = [])
 * @method \Http\Promise\Promise describeVpcZoneAsync($arguments = [])
 * @method \Dew\Acs\Result describeSignatureLibVersion(array $arguments = [])
 * @method \Http\Promise\Promise describeSignatureLibVersionAsync($arguments = [])
 * @method \Dew\Acs\Result describePostpayTrafficTotal(array $arguments = [])
 * @method \Http\Promise\Promise describePostpayTrafficTotalAsync($arguments = [])
 * @method \Dew\Acs\Result describePostpayTrafficDetail(array $arguments = [])
 * @method \Http\Promise\Promise describePostpayTrafficDetailAsync($arguments = [])
 * @method \Dew\Acs\Result batchDeleteVpcFirewallControlPolicy(array $arguments = [])
 * @method \Http\Promise\Promise batchDeleteVpcFirewallControlPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeDefaultIPSConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeDefaultIPSConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDefaultIPSConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyDefaultIPSConfigAsync($arguments = [])
 */
final class CloudfwClient extends AcsClient
{
    //
}

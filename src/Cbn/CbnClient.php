<?php

declare(strict_types=1);

namespace Dew\Acs\Cbn;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createCen(array $arguments = [])
 * @method \Http\Promise\Promise createCenAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCen(array $arguments = [])
 * @method \Http\Promise\Promise deleteCenAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCenAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyCenAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeCens(array $arguments = [])
 * @method \Http\Promise\Promise describeCensAsync($arguments = [])
 * @method \Dew\Acs\Result describeGrantRulesToResource(array $arguments = [])
 * @method \Http\Promise\Promise describeGrantRulesToResourceAsync($arguments = [])
 * @method \Dew\Acs\Result moveResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise moveResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouter(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouter(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouter(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouters(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRoutersAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterAvailableResource(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterAvailableResourceAsync($arguments = [])
 * @method \Dew\Acs\Result openTransitRouterService(array $arguments = [])
 * @method \Http\Promise\Promise openTransitRouterServiceAsync($arguments = [])
 * @method \Dew\Acs\Result checkTransitRouterService(array $arguments = [])
 * @method \Http\Promise\Promise checkTransitRouterServiceAsync($arguments = [])
 * @method \Dew\Acs\Result grantInstanceToTransitRouter(array $arguments = [])
 * @method \Http\Promise\Promise grantInstanceToTransitRouterAsync($arguments = [])
 * @method \Dew\Acs\Result revokeInstanceFromTransitRouter(array $arguments = [])
 * @method \Http\Promise\Promise revokeInstanceFromTransitRouterAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterCidr(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterCidrAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterCidr(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterCidrAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTransitRouterCidr(array $arguments = [])
 * @method \Http\Promise\Promise modifyTransitRouterCidrAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterCidr(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterCidrAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterCidrAllocation(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterCidrAllocationAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterVpcAttachment(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterVpcAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterVpcAttachment(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterVpcAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouterVpcAttachmentAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterVpcAttachmentAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouterVpcAttachmentZones(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterVpcAttachmentZonesAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterVpcAttachments(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterVpcAttachmentsAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterEcrAttachment(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterEcrAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterEcrAttachment(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterEcrAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouterEcrAttachmentAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterEcrAttachmentAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterEcrAttachments(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterEcrAttachmentsAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterVpnAttachment(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterVpnAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterVpnAttachment(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterVpnAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouterVpnAttachmentAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterVpnAttachmentAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterVpnAttachments(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterVpnAttachmentsAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterVbrAttachment(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterVbrAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterVbrAttachment(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterVbrAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouterVbrAttachmentAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterVbrAttachmentAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterVbrAttachments(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterVbrAttachmentsAsync($arguments = [])
 * @method \Dew\Acs\Result attachCenChildInstance(array $arguments = [])
 * @method \Http\Promise\Promise attachCenChildInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result detachCenChildInstance(array $arguments = [])
 * @method \Http\Promise\Promise detachCenChildInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenAttachedChildInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeCenAttachedChildInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenAttachedChildInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeCenAttachedChildInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeChildInstanceRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeChildInstanceRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeGrantRulesToCen(array $arguments = [])
 * @method \Http\Promise\Promise describeGrantRulesToCenAsync($arguments = [])
 * @method \Dew\Acs\Result listGrantVSwitchesToCen(array $arguments = [])
 * @method \Http\Promise\Promise listGrantVSwitchesToCenAsync($arguments = [])
 * @method \Dew\Acs\Result createCenBandwidthPackage(array $arguments = [])
 * @method \Http\Promise\Promise createCenBandwidthPackageAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCenBandwidthPackage(array $arguments = [])
 * @method \Http\Promise\Promise deleteCenBandwidthPackageAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCenBandwidthPackageAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyCenBandwidthPackageAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCenBandwidthPackageSpec(array $arguments = [])
 * @method \Http\Promise\Promise modifyCenBandwidthPackageSpecAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenGeographicSpanRemainingBandwidth(array $arguments = [])
 * @method \Http\Promise\Promise describeCenGeographicSpanRemainingBandwidthAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenBandwidthPackages(array $arguments = [])
 * @method \Http\Promise\Promise describeCenBandwidthPackagesAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenGeographicSpans(array $arguments = [])
 * @method \Http\Promise\Promise describeCenGeographicSpansAsync($arguments = [])
 * @method \Dew\Acs\Result describeGeographicRegionMembership(array $arguments = [])
 * @method \Http\Promise\Promise describeGeographicRegionMembershipAsync($arguments = [])
 * @method \Dew\Acs\Result tempUpgradeCenBandwidthPackageSpec(array $arguments = [])
 * @method \Http\Promise\Promise tempUpgradeCenBandwidthPackageSpecAsync($arguments = [])
 * @method \Dew\Acs\Result unassociateCenBandwidthPackage(array $arguments = [])
 * @method \Http\Promise\Promise unassociateCenBandwidthPackageAsync($arguments = [])
 * @method \Dew\Acs\Result associateCenBandwidthPackage(array $arguments = [])
 * @method \Http\Promise\Promise associateCenBandwidthPackageAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterPeerAttachment(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterPeerAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterPeerAttachment(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterPeerAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result setCenInterRegionBandwidthLimit(array $arguments = [])
 * @method \Http\Promise\Promise setCenInterRegionBandwidthLimitAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouterPeerAttachmentAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterPeerAttachmentAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterPeerAttachments(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterPeerAttachmentsAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenInterRegionBandwidthLimits(array $arguments = [])
 * @method \Http\Promise\Promise describeCenInterRegionBandwidthLimitsAsync($arguments = [])
 * @method \Dew\Acs\Result createCenChildInstanceRouteEntryToAttachment(array $arguments = [])
 * @method \Http\Promise\Promise createCenChildInstanceRouteEntryToAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result createCenChildInstanceRouteEntryToCen(array $arguments = [])
 * @method \Http\Promise\Promise createCenChildInstanceRouteEntryToCenAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCenChildInstanceRouteEntryToAttachment(array $arguments = [])
 * @method \Http\Promise\Promise deleteCenChildInstanceRouteEntryToAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCenChildInstanceRouteEntryToCen(array $arguments = [])
 * @method \Http\Promise\Promise deleteCenChildInstanceRouteEntryToCenAsync($arguments = [])
 * @method \Dew\Acs\Result listCenChildInstanceRouteEntriesToAttachment(array $arguments = [])
 * @method \Http\Promise\Promise listCenChildInstanceRouteEntriesToAttachmentAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenRegionDomainRouteEntries(array $arguments = [])
 * @method \Http\Promise\Promise describeCenRegionDomainRouteEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenChildInstanceRouteEntries(array $arguments = [])
 * @method \Http\Promise\Promise describeCenChildInstanceRouteEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result describePublishedRouteEntries(array $arguments = [])
 * @method \Http\Promise\Promise describePublishedRouteEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result describeRouteConflict(array $arguments = [])
 * @method \Http\Promise\Promise describeRouteConflictAsync($arguments = [])
 * @method \Dew\Acs\Result publishRouteEntries(array $arguments = [])
 * @method \Http\Promise\Promise publishRouteEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result withdrawPublishedRouteEntries(array $arguments = [])
 * @method \Http\Promise\Promise withdrawPublishedRouteEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterRouteTable(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterRouteTableAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterRouteTable(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterRouteTableAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouterRouteTable(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterRouteTableAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterRouteTables(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterRouteTablesAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterRouteEntry(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterRouteEntryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterRouteEntry(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterRouteEntryAsync($arguments = [])
 * @method \Dew\Acs\Result updateTransitRouterRouteEntry(array $arguments = [])
 * @method \Http\Promise\Promise updateTransitRouterRouteEntryAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterRouteEntries(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterRouteEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterRouteTableAssociations(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterRouteTableAssociationsAsync($arguments = [])
 * @method \Dew\Acs\Result associateTransitRouterAttachmentWithRouteTable(array $arguments = [])
 * @method \Http\Promise\Promise associateTransitRouterAttachmentWithRouteTableAsync($arguments = [])
 * @method \Dew\Acs\Result replaceTransitRouterRouteTableAssociation(array $arguments = [])
 * @method \Http\Promise\Promise replaceTransitRouterRouteTableAssociationAsync($arguments = [])
 * @method \Dew\Acs\Result dissociateTransitRouterAttachmentFromRouteTable(array $arguments = [])
 * @method \Http\Promise\Promise dissociateTransitRouterAttachmentFromRouteTableAsync($arguments = [])
 * @method \Dew\Acs\Result enableTransitRouterRouteTablePropagation(array $arguments = [])
 * @method \Http\Promise\Promise enableTransitRouterRouteTablePropagationAsync($arguments = [])
 * @method \Dew\Acs\Result disableTransitRouterRouteTablePropagation(array $arguments = [])
 * @method \Http\Promise\Promise disableTransitRouterRouteTablePropagationAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterRouteTablePropagations(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterRouteTablePropagationsAsync($arguments = [])
 * @method \Dew\Acs\Result createCenRouteMap(array $arguments = [])
 * @method \Http\Promise\Promise createCenRouteMapAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCenRouteMap(array $arguments = [])
 * @method \Http\Promise\Promise deleteCenRouteMapAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCenRouteMap(array $arguments = [])
 * @method \Http\Promise\Promise modifyCenRouteMapAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenRouteMaps(array $arguments = [])
 * @method \Http\Promise\Promise describeCenRouteMapsAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouteTableAggregation(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouteTableAggregationAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTransitRouteTableAggregation(array $arguments = [])
 * @method \Http\Promise\Promise modifyTransitRouteTableAggregationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouteTableAggregation(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouteTableAggregationAsync($arguments = [])
 * @method \Dew\Acs\Result refreshTransitRouteTableAggregation(array $arguments = [])
 * @method \Http\Promise\Promise refreshTransitRouteTableAggregationAsync($arguments = [])
 * @method \Dew\Acs\Result describeTransitRouteTableAggregationDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeTransitRouteTableAggregationDetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeTransitRouteTableAggregation(array $arguments = [])
 * @method \Http\Promise\Promise describeTransitRouteTableAggregationAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterPrefixListAssociation(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterPrefixListAssociationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterPrefixListAssociation(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterPrefixListAssociationAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterPrefixListAssociation(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterPrefixListAssociationAsync($arguments = [])
 * @method \Dew\Acs\Result addTraficMatchRuleToTrafficMarkingPolicy(array $arguments = []) {@deprecated 2017-09-12}
 * @method \Http\Promise\Promise addTraficMatchRuleToTrafficMarkingPolicyAsync($arguments = []) {@deprecated 2017-09-12}
 * @method \Dew\Acs\Result addTrafficMatchRuleToTrafficMarkingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise addTrafficMatchRuleToTrafficMarkingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTrafficMatchRuleToTrafficMarkingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyTrafficMatchRuleToTrafficMarkingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createTrafficMarkingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createTrafficMarkingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTrafficMarkingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteTrafficMarkingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result updateTrafficMarkingPolicyAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateTrafficMarkingPolicyAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listTrafficMarkingPolicies(array $arguments = [])
 * @method \Http\Promise\Promise listTrafficMarkingPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result removeTraficMatchRuleFromTrafficMarkingPolicy(array $arguments = []) {@deprecated 2017-09-12}
 * @method \Http\Promise\Promise removeTraficMatchRuleFromTrafficMarkingPolicyAsync($arguments = []) {@deprecated 2017-09-12}
 * @method \Dew\Acs\Result removeTrafficMatchRuleFromTrafficMarkingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise removeTrafficMatchRuleFromTrafficMarkingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createCenInterRegionTrafficQosQueue(array $arguments = [])
 * @method \Http\Promise\Promise createCenInterRegionTrafficQosQueueAsync($arguments = [])
 * @method \Dew\Acs\Result createCenInterRegionTrafficQosPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createCenInterRegionTrafficQosPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCenInterRegionTrafficQosQueue(array $arguments = [])
 * @method \Http\Promise\Promise deleteCenInterRegionTrafficQosQueueAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCenInterRegionTrafficQosPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteCenInterRegionTrafficQosPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result updateCenInterRegionTrafficQosQueueAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateCenInterRegionTrafficQosQueueAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result updateCenInterRegionTrafficQosPolicyAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateCenInterRegionTrafficQosPolicyAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listCenInterRegionTrafficQosPolicies(array $arguments = [])
 * @method \Http\Promise\Promise listCenInterRegionTrafficQosPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result listCenInterRegionTrafficQosQueues(array $arguments = [])
 * @method \Http\Promise\Promise listCenInterRegionTrafficQosQueuesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRouteServiceInCen(array $arguments = [])
 * @method \Http\Promise\Promise deleteRouteServiceInCenAsync($arguments = [])
 * @method \Dew\Acs\Result describeRouteServicesInCen(array $arguments = [])
 * @method \Http\Promise\Promise describeRouteServicesInCenAsync($arguments = [])
 * @method \Dew\Acs\Result resolveAndRouteServiceInCen(array $arguments = [])
 * @method \Http\Promise\Promise resolveAndRouteServiceInCenAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenPrivateZoneRoutes(array $arguments = [])
 * @method \Http\Promise\Promise describeCenPrivateZoneRoutesAsync($arguments = [])
 * @method \Dew\Acs\Result unroutePrivateZoneInCenToVpc(array $arguments = [])
 * @method \Http\Promise\Promise unroutePrivateZoneInCenToVpcAsync($arguments = [])
 * @method \Dew\Acs\Result routePrivateZoneInCenToVpc(array $arguments = [])
 * @method \Http\Promise\Promise routePrivateZoneInCenToVpcAsync($arguments = [])
 * @method \Dew\Acs\Result createTransitRouterMulticastDomain(array $arguments = [])
 * @method \Http\Promise\Promise createTransitRouterMulticastDomainAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTransitRouterMulticastDomain(array $arguments = [])
 * @method \Http\Promise\Promise deleteTransitRouterMulticastDomainAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTransitRouterMulticastDomain(array $arguments = [])
 * @method \Http\Promise\Promise modifyTransitRouterMulticastDomainAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterMulticastDomains(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterMulticastDomainsAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterMulticastDomainAssociations(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterMulticastDomainAssociationsAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterMulticastDomainVSwitches(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterMulticastDomainVSwitchesAsync($arguments = [])
 * @method \Dew\Acs\Result associateTransitRouterMulticastDomain(array $arguments = [])
 * @method \Http\Promise\Promise associateTransitRouterMulticastDomainAsync($arguments = [])
 * @method \Dew\Acs\Result disassociateTransitRouterMulticastDomain(array $arguments = [])
 * @method \Http\Promise\Promise disassociateTransitRouterMulticastDomainAsync($arguments = [])
 * @method \Dew\Acs\Result listTransitRouterMulticastGroups(array $arguments = [])
 * @method \Http\Promise\Promise listTransitRouterMulticastGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result listGrantVSwitchEnis(array $arguments = [])
 * @method \Http\Promise\Promise listGrantVSwitchEnisAsync($arguments = [])
 * @method \Dew\Acs\Result deregisterTransitRouterMulticastGroupMembers(array $arguments = [])
 * @method \Http\Promise\Promise deregisterTransitRouterMulticastGroupMembersAsync($arguments = [])
 * @method \Dew\Acs\Result registerTransitRouterMulticastGroupSources(array $arguments = [])
 * @method \Http\Promise\Promise registerTransitRouterMulticastGroupSourcesAsync($arguments = [])
 * @method \Dew\Acs\Result deregisterTransitRouterMulticastGroupSources(array $arguments = [])
 * @method \Http\Promise\Promise deregisterTransitRouterMulticastGroupSourcesAsync($arguments = [])
 * @method \Dew\Acs\Result registerTransitRouterMulticastGroupMembers(array $arguments = [])
 * @method \Http\Promise\Promise registerTransitRouterMulticastGroupMembersAsync($arguments = [])
 * @method \Dew\Acs\Result disableCenVbrHealthCheck(array $arguments = [])
 * @method \Http\Promise\Promise disableCenVbrHealthCheckAsync($arguments = [])
 * @method \Dew\Acs\Result enableCenVbrHealthCheck(array $arguments = [])
 * @method \Http\Promise\Promise enableCenVbrHealthCheckAsync($arguments = [])
 * @method \Dew\Acs\Result describeCenVbrHealthCheck(array $arguments = [])
 * @method \Http\Promise\Promise describeCenVbrHealthCheckAsync($arguments = [])
 * @method \Dew\Acs\Result createFlowlog(array $arguments = [])
 * @method \Http\Promise\Promise createFlowlogAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFlowlog(array $arguments = [])
 * @method \Http\Promise\Promise deleteFlowlogAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFlowLogAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyFlowLogAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeFlowlogs(array $arguments = [])
 * @method \Http\Promise\Promise describeFlowlogsAsync($arguments = [])
 * @method \Dew\Acs\Result activeFlowLog(array $arguments = [])
 * @method \Http\Promise\Promise activeFlowLogAsync($arguments = [])
 * @method \Dew\Acs\Result deactiveFlowLog(array $arguments = [])
 * @method \Http\Promise\Promise deactiveFlowLogAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 */
final class CbnClient extends AcsClient
{
    //
}

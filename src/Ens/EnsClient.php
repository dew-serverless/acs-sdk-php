<?php

declare(strict_types=1);

namespace Dew\Acs\Ens;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result runInstances(array $arguments = [])
 * @method \Http\Promise\Promise runInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result createInstance(array $arguments = [])
 * @method \Http\Promise\Promise createInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result releasePostPaidInstance(array $arguments = [])
 * @method \Http\Promise\Promise releasePostPaidInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result releasePrePaidInstance(array $arguments = [])
 * @method \Http\Promise\Promise releasePrePaidInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result renewInstance(array $arguments = [])
 * @method \Http\Promise\Promise renewInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result reinitInstance(array $arguments = [])
 * @method \Http\Promise\Promise reinitInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPrepayInstanceSpec(array $arguments = [])
 * @method \Http\Promise\Promise modifyPrepayInstanceSpecAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceAutoRenewAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceAutoRenewAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result attachEnsInstances(array $arguments = [])
 * @method \Http\Promise\Promise attachEnsInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result rebootInstance(array $arguments = [])
 * @method \Http\Promise\Promise rebootInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result startInstance(array $arguments = [])
 * @method \Http\Promise\Promise startInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result stopInstance(array $arguments = [])
 * @method \Http\Promise\Promise stopInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result addNetworkInterfaceToInstance(array $arguments = [])
 * @method \Http\Promise\Promise addNetworkInterfaceToInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailableResource(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailableResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailableResourceInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailableResourceInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsNetSaleDistrict(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsNetSaleDistrictAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsNetLevel(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsNetLevelAsync($arguments = [])
 * @method \Dew\Acs\Result describeBandWithdChargeType(array $arguments = [])
 * @method \Http\Promise\Promise describeBandWithdChargeTypeAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceSpec(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceSpecAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsRegionIdIpv6Info(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsRegionIdIpv6InfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegionIsps(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionIspsAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceAutoRenewAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceAutoRenewAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceMonitorData(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceMonitorDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceTypes(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceTypesAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceVncUrl(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceVncUrlAsync($arguments = [])
 * @method \Dew\Acs\Result describeCreatePrePaidInstanceResult(array $arguments = [])
 * @method \Http\Promise\Promise describeCreatePrePaidInstanceResultAsync($arguments = [])
 * @method \Dew\Acs\Result createImage(array $arguments = [])
 * @method \Http\Promise\Promise createImageAsync($arguments = [])
 * @method \Dew\Acs\Result exportImage(array $arguments = [])
 * @method \Http\Promise\Promise exportImageAsync($arguments = [])
 * @method \Dew\Acs\Result describeSelfImages(array $arguments = [])
 * @method \Http\Promise\Promise describeSelfImagesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteImage(array $arguments = [])
 * @method \Http\Promise\Promise deleteImageAsync($arguments = [])
 * @method \Dew\Acs\Result modifyImageAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyImageAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyImageSharePermission(array $arguments = [])
 * @method \Http\Promise\Promise modifyImageSharePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result describeImages(array $arguments = [])
 * @method \Http\Promise\Promise describeImagesAsync($arguments = [])
 * @method \Dew\Acs\Result describeImageInfos(array $arguments = [])
 * @method \Http\Promise\Promise describeImageInfosAsync($arguments = [])
 * @method \Dew\Acs\Result describeImageSharePermission(array $arguments = [])
 * @method \Http\Promise\Promise describeImageSharePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result describeExportImageStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeExportImageStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeExportImageInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeExportImageInfoAsync($arguments = [])
 * @method \Dew\Acs\Result createKeyPair(array $arguments = [])
 * @method \Http\Promise\Promise createKeyPairAsync($arguments = [])
 * @method \Dew\Acs\Result deleteKeyPairs(array $arguments = [])
 * @method \Http\Promise\Promise deleteKeyPairsAsync($arguments = [])
 * @method \Dew\Acs\Result importKeyPair(array $arguments = [])
 * @method \Http\Promise\Promise importKeyPairAsync($arguments = [])
 * @method \Dew\Acs\Result describeKeyPairs(array $arguments = [])
 * @method \Http\Promise\Promise describeKeyPairsAsync($arguments = [])
 * @method \Dew\Acs\Result createDisk(array $arguments = [])
 * @method \Http\Promise\Promise createDiskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDisk(array $arguments = [])
 * @method \Http\Promise\Promise deleteDiskAsync($arguments = [])
 * @method \Dew\Acs\Result attachDisk(array $arguments = [])
 * @method \Http\Promise\Promise attachDiskAsync($arguments = [])
 * @method \Dew\Acs\Result detachDisk(array $arguments = [])
 * @method \Http\Promise\Promise detachDiskAsync($arguments = [])
 * @method \Dew\Acs\Result resizeDisk(array $arguments = [])
 * @method \Http\Promise\Promise resizeDiskAsync($arguments = [])
 * @method \Dew\Acs\Result describeDisks(array $arguments = [])
 * @method \Http\Promise\Promise describeDisksAsync($arguments = [])
 * @method \Dew\Acs\Result reInitDisk(array $arguments = [])
 * @method \Http\Promise\Promise reInitDiskAsync($arguments = [])
 * @method \Dew\Acs\Result resetDisk(array $arguments = [])
 * @method \Http\Promise\Promise resetDiskAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiskIopsList(array $arguments = [])
 * @method \Http\Promise\Promise describeDiskIopsListAsync($arguments = [])
 * @method \Dew\Acs\Result createSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise createSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise deleteSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result modifySnapshotAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifySnapshotAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeSnapshots(array $arguments = [])
 * @method \Http\Promise\Promise describeSnapshotsAsync($arguments = [])
 * @method \Dew\Acs\Result copySnapshot(array $arguments = [])
 * @method \Http\Promise\Promise copySnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result createNetwork(array $arguments = [])
 * @method \Http\Promise\Promise createNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result createClassicNetwork(array $arguments = [])
 * @method \Http\Promise\Promise createClassicNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNetwork(array $arguments = [])
 * @method \Http\Promise\Promise deleteNetworkAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNetworkAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyNetworkAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeNetworkInterfaces(array $arguments = [])
 * @method \Http\Promise\Promise describeNetworkInterfacesAsync($arguments = [])
 * @method \Dew\Acs\Result describeNetworkAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeNetworkAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeNetworks(array $arguments = [])
 * @method \Http\Promise\Promise describeNetworksAsync($arguments = [])
 * @method \Dew\Acs\Result createEnsRouteEntry(array $arguments = [])
 * @method \Http\Promise\Promise createEnsRouteEntryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEnsRouteEntry(array $arguments = [])
 * @method \Http\Promise\Promise deleteEnsRouteEntryAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsRouteEntryList(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsRouteEntryListAsync($arguments = [])
 * @method \Dew\Acs\Result createVSwitch(array $arguments = [])
 * @method \Http\Promise\Promise createVSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVSwitch(array $arguments = [])
 * @method \Http\Promise\Promise deleteVSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVSwitchAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyVSwitchAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeVSwitches(array $arguments = [])
 * @method \Http\Promise\Promise describeVSwitchesAsync($arguments = [])
 * @method \Dew\Acs\Result createSecurityGroup(array $arguments = [])
 * @method \Http\Promise\Promise createSecurityGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSecurityGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteSecurityGroupAsync($arguments = [])
 * @method \Dew\Acs\Result joinSecurityGroup(array $arguments = [])
 * @method \Http\Promise\Promise joinSecurityGroupAsync($arguments = [])
 * @method \Dew\Acs\Result leaveSecurityGroup(array $arguments = [])
 * @method \Http\Promise\Promise leaveSecurityGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifySecurityGroupAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifySecurityGroupAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecurityGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeSecurityGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result authorizeSecurityGroup(array $arguments = [])
 * @method \Http\Promise\Promise authorizeSecurityGroupAsync($arguments = [])
 * @method \Dew\Acs\Result revokeSecurityGroup(array $arguments = [])
 * @method \Http\Promise\Promise revokeSecurityGroupAsync($arguments = [])
 * @method \Dew\Acs\Result authorizeSecurityGroupEgress(array $arguments = [])
 * @method \Http\Promise\Promise authorizeSecurityGroupEgressAsync($arguments = [])
 * @method \Dew\Acs\Result revokeSecurityGroupEgress(array $arguments = [])
 * @method \Http\Promise\Promise revokeSecurityGroupEgressAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecurityGroupAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeSecurityGroupAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result createEipInstance(array $arguments = [])
 * @method \Http\Promise\Promise createEipInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result associateEnsEipAddress(array $arguments = [])
 * @method \Http\Promise\Promise associateEnsEipAddressAsync($arguments = [])
 * @method \Dew\Acs\Result unAssociateEnsEipAddress(array $arguments = [])
 * @method \Http\Promise\Promise unAssociateEnsEipAddressAsync($arguments = [])
 * @method \Dew\Acs\Result modifyEnsEipAddressAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyEnsEipAddressAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsEipAddresses(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsEipAddressesAsync($arguments = [])
 * @method \Dew\Acs\Result createNatGateway(array $arguments = [])
 * @method \Http\Promise\Promise createNatGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNatGateway(array $arguments = [])
 * @method \Http\Promise\Promise deleteNatGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result describeNatGateways(array $arguments = [])
 * @method \Http\Promise\Promise describeNatGatewaysAsync($arguments = [])
 * @method \Dew\Acs\Result createForwardEntry(array $arguments = [])
 * @method \Http\Promise\Promise createForwardEntryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteForwardEntry(array $arguments = [])
 * @method \Http\Promise\Promise deleteForwardEntryAsync($arguments = [])
 * @method \Dew\Acs\Result modifyForwardEntry(array $arguments = [])
 * @method \Http\Promise\Promise modifyForwardEntryAsync($arguments = [])
 * @method \Dew\Acs\Result describeForwardTableEntries(array $arguments = [])
 * @method \Http\Promise\Promise describeForwardTableEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result createSnatEntry(array $arguments = [])
 * @method \Http\Promise\Promise createSnatEntryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSnatEntry(array $arguments = [])
 * @method \Http\Promise\Promise deleteSnatEntryAsync($arguments = [])
 * @method \Dew\Acs\Result describeSnatTableEntries(array $arguments = [])
 * @method \Http\Promise\Promise describeSnatTableEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result describeSnatAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeSnatAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result addSnatIpForSnatEntry(array $arguments = [])
 * @method \Http\Promise\Promise addSnatIpForSnatEntryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSnatIpForSnatEntry(array $arguments = [])
 * @method \Http\Promise\Promise deleteSnatIpForSnatEntryAsync($arguments = [])
 * @method \Dew\Acs\Result startSnatIpForSnatEntry(array $arguments = [])
 * @method \Http\Promise\Promise startSnatIpForSnatEntryAsync($arguments = [])
 * @method \Dew\Acs\Result stopSnatIpForSnatEntry(array $arguments = [])
 * @method \Http\Promise\Promise stopSnatIpForSnatEntryAsync($arguments = [])
 * @method \Dew\Acs\Result createLoadBalancer(array $arguments = [])
 * @method \Http\Promise\Promise createLoadBalancerAsync($arguments = [])
 * @method \Dew\Acs\Result modifyLoadBalancerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyLoadBalancerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result setLoadBalancerStatus(array $arguments = [])
 * @method \Http\Promise\Promise setLoadBalancerStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancers(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancersAsync($arguments = [])
 * @method \Dew\Acs\Result createLoadBalancerUDPListener(array $arguments = [])
 * @method \Http\Promise\Promise createLoadBalancerUDPListenerAsync($arguments = [])
 * @method \Dew\Acs\Result setLoadBalancerUDPListenerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise setLoadBalancerUDPListenerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancerUDPListenerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancerUDPListenerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result createLoadBalancerTCPListener(array $arguments = [])
 * @method \Http\Promise\Promise createLoadBalancerTCPListenerAsync($arguments = [])
 * @method \Dew\Acs\Result setLoadBalancerTCPListenerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise setLoadBalancerTCPListenerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancerTCPListenerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancerTCPListenerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result createLoadBalancerHTTPListener(array $arguments = [])
 * @method \Http\Promise\Promise createLoadBalancerHTTPListenerAsync($arguments = [])
 * @method \Dew\Acs\Result setLoadBalancerHTTPListenerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise setLoadBalancerHTTPListenerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancerHTTPListenerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancerHTTPListenerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result createLoadBalancerHTTPSListener(array $arguments = [])
 * @method \Http\Promise\Promise createLoadBalancerHTTPSListenerAsync($arguments = [])
 * @method \Dew\Acs\Result setLoadBalancerHTTPSListenerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise setLoadBalancerHTTPSListenerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancerHTTPSListenerAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancerHTTPSListenerAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result startLoadBalancerListener(array $arguments = [])
 * @method \Http\Promise\Promise startLoadBalancerListenerAsync($arguments = [])
 * @method \Dew\Acs\Result stopLoadBalancerListener(array $arguments = [])
 * @method \Http\Promise\Promise stopLoadBalancerListenerAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLoadBalancerListener(array $arguments = [])
 * @method \Http\Promise\Promise deleteLoadBalancerListenerAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancerListeners(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancerListenersAsync($arguments = [])
 * @method \Dew\Acs\Result addBackendServers(array $arguments = [])
 * @method \Http\Promise\Promise addBackendServersAsync($arguments = [])
 * @method \Dew\Acs\Result removeBackendServers(array $arguments = [])
 * @method \Http\Promise\Promise removeBackendServersAsync($arguments = [])
 * @method \Dew\Acs\Result setBackendServers(array $arguments = [])
 * @method \Http\Promise\Promise setBackendServersAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancerListenMonitor(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancerListenMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result describeServerLoadBalancerMonitor(array $arguments = [])
 * @method \Http\Promise\Promise describeServerLoadBalancerMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result describeServerLoadBalancerListenMonitor(array $arguments = [])
 * @method \Http\Promise\Promise describeServerLoadBalancerListenMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result attachNetworkInterface(array $arguments = [])
 * @method \Http\Promise\Promise attachNetworkInterfaceAsync($arguments = [])
 * @method \Dew\Acs\Result detachNetworkInterface(array $arguments = [])
 * @method \Http\Promise\Promise detachNetworkInterfaceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNetworkInterfaceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyNetworkInterfaceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecondaryPublicIpAddresses(array $arguments = [])
 * @method \Http\Promise\Promise describeSecondaryPublicIpAddressesAsync($arguments = [])
 * @method \Dew\Acs\Result createHaVip(array $arguments = [])
 * @method \Http\Promise\Promise createHaVipAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHaVipAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyHaVipAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeHaVips(array $arguments = [])
 * @method \Http\Promise\Promise describeHaVipsAsync($arguments = [])
 * @method \Dew\Acs\Result associateHaVip(array $arguments = [])
 * @method \Http\Promise\Promise associateHaVipAsync($arguments = [])
 * @method \Dew\Acs\Result unassociateHaVip(array $arguments = [])
 * @method \Http\Promise\Promise unassociateHaVipAsync($arguments = [])
 * @method \Dew\Acs\Result createNetworkAcl(array $arguments = [])
 * @method \Http\Promise\Promise createNetworkAclAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNetworkAcl(array $arguments = [])
 * @method \Http\Promise\Promise deleteNetworkAclAsync($arguments = [])
 * @method \Dew\Acs\Result describeNetworkAcls(array $arguments = [])
 * @method \Http\Promise\Promise describeNetworkAclsAsync($arguments = [])
 * @method \Dew\Acs\Result accosicateNetworkAcl(array $arguments = [])
 * @method \Http\Promise\Promise accosicateNetworkAclAsync($arguments = [])
 * @method \Dew\Acs\Result unassociateNetworkAcl(array $arguments = [])
 * @method \Http\Promise\Promise unassociateNetworkAclAsync($arguments = [])
 * @method \Dew\Acs\Result createNetworkAclEntry(array $arguments = [])
 * @method \Http\Promise\Promise createNetworkAclEntryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNetworkAclEntry(array $arguments = [])
 * @method \Http\Promise\Promise deleteNetworkAclEntryAsync($arguments = [])
 * @method \Dew\Acs\Result createFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise createFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise deleteFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise modifyFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result describeFileSystems(array $arguments = [])
 * @method \Http\Promise\Promise describeFileSystemsAsync($arguments = [])
 * @method \Dew\Acs\Result createMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise createMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise deleteMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result describeMountTargets(array $arguments = [])
 * @method \Http\Promise\Promise describeMountTargetsAsync($arguments = [])
 * @method \Dew\Acs\Result putBucket(array $arguments = [])
 * @method \Http\Promise\Promise putBucketAsync($arguments = [])
 * @method \Dew\Acs\Result deleteBucket(array $arguments = [])
 * @method \Http\Promise\Promise deleteBucketAsync($arguments = [])
 * @method \Dew\Acs\Result getBucketInfo(array $arguments = [])
 * @method \Http\Promise\Promise getBucketInfoAsync($arguments = [])
 * @method \Dew\Acs\Result putBucketAcl(array $arguments = [])
 * @method \Http\Promise\Promise putBucketAclAsync($arguments = [])
 * @method \Dew\Acs\Result getBucketAcl(array $arguments = [])
 * @method \Http\Promise\Promise getBucketAclAsync($arguments = [])
 * @method \Dew\Acs\Result prepareUpload(array $arguments = [])
 * @method \Http\Promise\Promise prepareUploadAsync($arguments = [])
 * @method \Dew\Acs\Result deleteObject(array $arguments = [])
 * @method \Http\Promise\Promise deleteObjectAsync($arguments = [])
 * @method \Dew\Acs\Result listObjects(array $arguments = [])
 * @method \Http\Promise\Promise listObjectsAsync($arguments = [])
 * @method \Dew\Acs\Result putBucketLifecycle(array $arguments = [])
 * @method \Http\Promise\Promise putBucketLifecycleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteBucketLifecycle(array $arguments = [])
 * @method \Http\Promise\Promise deleteBucketLifecycleAsync($arguments = [])
 * @method \Dew\Acs\Result getBucketLifecycle(array $arguments = [])
 * @method \Http\Promise\Promise getBucketLifecycleAsync($arguments = [])
 * @method \Dew\Acs\Result listBuckets(array $arguments = [])
 * @method \Http\Promise\Promise listBucketsAsync($arguments = [])
 * @method \Dew\Acs\Result getOssUsageData(array $arguments = [])
 * @method \Http\Promise\Promise getOssUsageDataAsync($arguments = [])
 * @method \Dew\Acs\Result getOssStorageAndAccByBuckets(array $arguments = [])
 * @method \Http\Promise\Promise getOssStorageAndAccByBucketsAsync($arguments = [])
 * @method \Dew\Acs\Result describeStorageGateway(array $arguments = [])
 * @method \Http\Promise\Promise describeStorageGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result createStorageGateway(array $arguments = [])
 * @method \Http\Promise\Promise createStorageGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStorageGateway(array $arguments = [])
 * @method \Http\Promise\Promise deleteStorageGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result describeStorageVolume(array $arguments = [])
 * @method \Http\Promise\Promise describeStorageVolumeAsync($arguments = [])
 * @method \Dew\Acs\Result createStorageVolume(array $arguments = [])
 * @method \Http\Promise\Promise createStorageVolumeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStorageVolume(array $arguments = [])
 * @method \Http\Promise\Promise deleteStorageVolumeAsync($arguments = [])
 * @method \Dew\Acs\Result assignPrivateIpAddresses(array $arguments = [])
 * @method \Http\Promise\Promise assignPrivateIpAddressesAsync($arguments = [])
 * @method \Dew\Acs\Result unassignPrivateIpAddresses(array $arguments = [])
 * @method \Http\Promise\Promise unassignPrivateIpAddressesAsync($arguments = [])
 * @method \Dew\Acs\Result createCluster(array $arguments = [])
 * @method \Http\Promise\Promise createClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describeCluster(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterKubeConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterKubeConfigAsync($arguments = [])
 * @method \Dew\Acs\Result createSDG(array $arguments = [])
 * @method \Http\Promise\Promise createSDGAsync($arguments = [])
 * @method \Dew\Acs\Result deploySDG(array $arguments = [])
 * @method \Http\Promise\Promise deploySDGAsync($arguments = [])
 * @method \Dew\Acs\Result deployInstanceSDG(array $arguments = [])
 * @method \Http\Promise\Promise deployInstanceSDGAsync($arguments = [])
 * @method \Dew\Acs\Result copySDG(array $arguments = [])
 * @method \Http\Promise\Promise copySDGAsync($arguments = [])
 * @method \Dew\Acs\Result preloadRegionSDG(array $arguments = [])
 * @method \Http\Promise\Promise preloadRegionSDGAsync($arguments = [])
 * @method \Dew\Acs\Result describeSDGs(array $arguments = [])
 * @method \Http\Promise\Promise describeSDGsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSDG(array $arguments = [])
 * @method \Http\Promise\Promise describeSDGAsync($arguments = [])
 * @method \Dew\Acs\Result describeSDGDeploymentStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeSDGDeploymentStatusAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSDG(array $arguments = [])
 * @method \Http\Promise\Promise deleteSDGAsync($arguments = [])
 * @method \Dew\Acs\Result unloadRegionSDG(array $arguments = [])
 * @method \Http\Promise\Promise unloadRegionSDGAsync($arguments = [])
 * @method \Dew\Acs\Result removeSDG(array $arguments = [])
 * @method \Http\Promise\Promise removeSDGAsync($arguments = [])
 * @method \Dew\Acs\Result removeInstanceSDG(array $arguments = [])
 * @method \Http\Promise\Promise removeInstanceSDGAsync($arguments = [])
 * @method \Dew\Acs\Result saveSDG(array $arguments = [])
 * @method \Http\Promise\Promise saveSDGAsync($arguments = [])
 * @method \Dew\Acs\Result resetAICInstance(array $arguments = [])
 * @method \Http\Promise\Promise resetAICInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeAICInstanceImage(array $arguments = [])
 * @method \Http\Promise\Promise upgradeAICInstanceImageAsync($arguments = [])
 * @method \Dew\Acs\Result rebootAICInstance(array $arguments = [])
 * @method \Http\Promise\Promise rebootAICInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeARMServerInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeARMServerInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result rebootARMServerInstance(array $arguments = [])
 * @method \Http\Promise\Promise rebootARMServerInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result releaseARMServerInstance(array $arguments = [])
 * @method \Http\Promise\Promise releaseARMServerInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createARMServerInstances(array $arguments = [])
 * @method \Http\Promise\Promise createARMServerInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result renewARMServerInstance(array $arguments = [])
 * @method \Http\Promise\Promise renewARMServerInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAICImages(array $arguments = [])
 * @method \Http\Promise\Promise describeAICImagesAsync($arguments = [])
 * @method \Dew\Acs\Result recoverAICInstance(array $arguments = [])
 * @method \Http\Promise\Promise recoverAICInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result releaseAICInstance(array $arguments = [])
 * @method \Http\Promise\Promise releaseAICInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result runServiceSchedule(array $arguments = [])
 * @method \Http\Promise\Promise runServiceScheduleAsync($arguments = [])
 * @method \Dew\Acs\Result describeServcieSchedule(array $arguments = [])
 * @method \Http\Promise\Promise describeServcieScheduleAsync($arguments = [])
 * @method \Dew\Acs\Result rescaleDeviceService(array $arguments = [])
 * @method \Http\Promise\Promise rescaleDeviceServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceService(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataPushResult(array $arguments = [])
 * @method \Http\Promise\Promise describeDataPushResultAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataDownloadURL(array $arguments = [])
 * @method \Http\Promise\Promise describeDataDownloadURLAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataDistResult(array $arguments = [])
 * @method \Http\Promise\Promise describeDataDistResultAsync($arguments = [])
 * @method \Dew\Acs\Result getDeviceInternetPort(array $arguments = [])
 * @method \Http\Promise\Promise getDeviceInternetPortAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDeviceInternetPort(array $arguments = [])
 * @method \Http\Promise\Promise deleteDeviceInternetPortAsync($arguments = [])
 * @method \Dew\Acs\Result addDeviceInternetPort(array $arguments = [])
 * @method \Http\Promise\Promise addDeviceInternetPortAsync($arguments = [])
 * @method \Dew\Acs\Result restartDeviceInstance(array $arguments = [])
 * @method \Http\Promise\Promise restartDeviceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result resetDeviceInstance(array $arguments = [])
 * @method \Http\Promise\Promise resetDeviceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result distApplicationData(array $arguments = [])
 * @method \Http\Promise\Promise distApplicationDataAsync($arguments = [])
 * @method \Dew\Acs\Result createApplication(array $arguments = [])
 * @method \Http\Promise\Promise createApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApplication(array $arguments = [])
 * @method \Http\Promise\Promise deleteApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listApplications(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplication(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeApplication(array $arguments = [])
 * @method \Http\Promise\Promise upgradeApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result rollbackApplication(array $arguments = [])
 * @method \Http\Promise\Promise rollbackApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result rescaleApplication(array $arguments = [])
 * @method \Http\Promise\Promise rescaleApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result pushApplicationData(array $arguments = [])
 * @method \Http\Promise\Promise pushApplicationDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsRegionIdResource(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsRegionIdResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeReservedResource(array $arguments = [])
 * @method \Http\Promise\Promise describeReservedResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describePrePaidInstanceStock(array $arguments = [])
 * @method \Http\Promise\Promise describePrePaidInstanceStockAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadBalancerSpec(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadBalancerSpecAsync($arguments = [])
 * @method \Dew\Acs\Result describeElbAvailableResourceInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeElbAvailableResourceInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeCloudDiskTypes(array $arguments = [])
 * @method \Http\Promise\Promise describeCloudDiskTypesAsync($arguments = [])
 * @method \Dew\Acs\Result describeCloudDiskAvailableResourceInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeCloudDiskAvailableResourceInfoAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeBandwitdhByInternetChargeType(array $arguments = [])
 * @method \Http\Promise\Promise describeBandwitdhByInternetChargeTypeAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserBandWidthData(array $arguments = [])
 * @method \Http\Promise\Promise describeUserBandWidthDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeMeasurementData(array $arguments = [])
 * @method \Http\Promise\Promise describeMeasurementDataAsync($arguments = [])
 * @method \Dew\Acs\Result describePrice(array $arguments = [])
 * @method \Http\Promise\Promise describePriceAsync($arguments = [])
 * @method \Dew\Acs\Result exportBillDetailData(array $arguments = [])
 * @method \Http\Promise\Promise exportBillDetailDataAsync($arguments = [])
 * @method \Dew\Acs\Result exportMeasurementData(array $arguments = [])
 * @method \Http\Promise\Promise exportMeasurementDataAsync($arguments = [])
 * @method \Dew\Acs\Result releaseInstance(array $arguments = [])
 * @method \Http\Promise\Promise releaseInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createEnsService(array $arguments = [])
 * @method \Http\Promise\Promise createEnsServiceAsync($arguments = [])
 * @method \Dew\Acs\Result createEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise createEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsNetDistrict(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsNetDistrictAsync($arguments = [])
 * @method \Dew\Acs\Result describeEpnBandWidthData(array $arguments = [])
 * @method \Http\Promise\Promise describeEpnBandWidthDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeEpnBandwitdhByInternetChargeType(array $arguments = [])
 * @method \Http\Promise\Promise describeEpnBandwitdhByInternetChargeTypeAsync($arguments = [])
 * @method \Dew\Acs\Result describeEpnInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeEpnInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeEpnInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeEpnInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeEpnMeasurementData(array $arguments = [])
 * @method \Http\Promise\Promise describeEpnMeasurementDataAsync($arguments = [])
 * @method \Dew\Acs\Result joinPublicIpsToEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise joinPublicIpsToEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result joinVSwitchesToEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise joinVSwitchesToEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise modifyEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result removePublicIpsFromEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise removePublicIpsFromEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result removeVSwitchesFromEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise removeVSwitchesFromEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result startEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise startEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result stopEpnInstance(array $arguments = [])
 * @method \Http\Promise\Promise stopEpnInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsResourceUsage(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsResourceUsageAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceChargeType(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceChargeTypeAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstanceBandwidthDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceBandwidthDetailAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceBootConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceBootConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnsRouteTables(array $arguments = [])
 * @method \Http\Promise\Promise describeEnsRouteTablesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHaVips(array $arguments = [])
 * @method \Http\Promise\Promise deleteHaVipsAsync($arguments = [])
 */
final class EnsClient extends AcsClient
{
    //
}

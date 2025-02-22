<?php

declare(strict_types=1);

namespace Dew\Acs\Ecd;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeZones(array $arguments = [])
 * @method \Http\Promise\Promise describeZonesAsync($arguments = [])
 * @method \Dew\Acs\Result describePrice(array $arguments = [])
 * @method \Http\Promise\Promise describePriceAsync($arguments = [])
 * @method \Dew\Acs\Result describeRenewalPrice(array $arguments = [])
 * @method \Http\Promise\Promise describeRenewalPriceAsync($arguments = [])
 * @method \Dew\Acs\Result describeModificationPrice(array $arguments = [])
 * @method \Http\Promise\Promise describeModificationPriceAsync($arguments = [])
 * @method \Dew\Acs\Result describeRefundPrice(array $arguments = [])
 * @method \Http\Promise\Promise describeRefundPriceAsync($arguments = [])
 * @method \Dew\Acs\Result listOfficeSiteOverview(array $arguments = [])
 * @method \Http\Promise\Promise listOfficeSiteOverviewAsync($arguments = [])
 * @method \Dew\Acs\Result describeOfficeSites(array $arguments = [])
 * @method \Http\Promise\Promise describeOfficeSitesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyOfficeSiteAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyOfficeSiteAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyOfficeSiteCrossDesktopAccess(array $arguments = [])
 * @method \Http\Promise\Promise modifyOfficeSiteCrossDesktopAccessAsync($arguments = [])
 * @method \Dew\Acs\Result deleteOfficeSites(array $arguments = [])
 * @method \Http\Promise\Promise deleteOfficeSitesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyOfficeSiteDnsInfo(array $arguments = [])
 * @method \Http\Promise\Promise modifyOfficeSiteDnsInfoAsync($arguments = [])
 * @method \Dew\Acs\Result createSimpleOfficeSite(array $arguments = [])
 * @method \Http\Promise\Promise createSimpleOfficeSiteAsync($arguments = [])
 * @method \Dew\Acs\Result activateOfficeSite(array $arguments = [])
 * @method \Http\Promise\Promise activateOfficeSiteAsync($arguments = [])
 * @method \Dew\Acs\Result createADConnectorOfficeSite(array $arguments = [])
 * @method \Http\Promise\Promise createADConnectorOfficeSiteAsync($arguments = [])
 * @method \Dew\Acs\Result listUserAdOrganizationUnits(array $arguments = [])
 * @method \Http\Promise\Promise listUserAdOrganizationUnitsAsync($arguments = [])
 * @method \Dew\Acs\Result listOfficeSiteUsers(array $arguments = [])
 * @method \Http\Promise\Promise listOfficeSiteUsersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyADConnectorOfficeSite(array $arguments = [])
 * @method \Http\Promise\Promise modifyADConnectorOfficeSiteAsync($arguments = [])
 * @method \Dew\Acs\Result modifyOfficeSiteMfaEnabled(array $arguments = [])
 * @method \Http\Promise\Promise modifyOfficeSiteMfaEnabledAsync($arguments = [])
 * @method \Dew\Acs\Result configADConnectorTrust(array $arguments = [])
 * @method \Http\Promise\Promise configADConnectorTrustAsync($arguments = [])
 * @method \Dew\Acs\Result configADConnectorUser(array $arguments = [])
 * @method \Http\Promise\Promise configADConnectorUserAsync($arguments = [])
 * @method \Dew\Acs\Result createADConnectorDirectory(array $arguments = [])
 * @method \Http\Promise\Promise createADConnectorDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result createRAMDirectory(array $arguments = [])
 * @method \Http\Promise\Promise createRAMDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result describeDirectories(array $arguments = [])
 * @method \Http\Promise\Promise describeDirectoriesAsync($arguments = [])
 * @method \Dew\Acs\Result listDirectoryUsers(array $arguments = [])
 * @method \Http\Promise\Promise listDirectoryUsersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyADConnectorDirectory(array $arguments = [])
 * @method \Http\Promise\Promise modifyADConnectorDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDirectories(array $arguments = [])
 * @method \Http\Promise\Promise deleteDirectoriesAsync($arguments = [])
 * @method \Dew\Acs\Result createDesktops(array $arguments = [])
 * @method \Http\Promise\Promise createDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result createDiskEncryptionService(array $arguments = [])
 * @method \Http\Promise\Promise createDiskEncryptionServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeKmsKeys(array $arguments = [])
 * @method \Http\Promise\Promise describeKmsKeysAsync($arguments = [])
 * @method \Dew\Acs\Result describeDesktopInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDesktopInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeDesktops(array $arguments = [])
 * @method \Http\Promise\Promise describeDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDesktopTypes(array $arguments = [])
 * @method \Http\Promise\Promise describeDesktopTypesAsync($arguments = [])
 * @method \Dew\Acs\Result describeCustomizedListHeaders(array $arguments = [])
 * @method \Http\Promise\Promise describeCustomizedListHeadersAsync($arguments = [])
 * @method \Dew\Acs\Result exportDesktopListInfo(array $arguments = [])
 * @method \Http\Promise\Promise exportDesktopListInfoAsync($arguments = [])
 * @method \Dew\Acs\Result startDesktops(array $arguments = [])
 * @method \Http\Promise\Promise startDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result hibernateDesktops(array $arguments = [])
 * @method \Http\Promise\Promise hibernateDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result wakeupDesktops(array $arguments = [])
 * @method \Http\Promise\Promise wakeupDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result stopDesktops(array $arguments = [])
 * @method \Http\Promise\Promise stopDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result rebootDesktops(array $arguments = [])
 * @method \Http\Promise\Promise rebootDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result rebuildDesktops(array $arguments = [])
 * @method \Http\Promise\Promise rebuildDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result setDesktopMaintenance(array $arguments = [])
 * @method \Http\Promise\Promise setDesktopMaintenanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDesktopName(array $arguments = [])
 * @method \Http\Promise\Promise modifyDesktopNameAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDiskSpec(array $arguments = [])
 * @method \Http\Promise\Promise modifyDiskSpecAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDesktopChargeType(array $arguments = [])
 * @method \Http\Promise\Promise modifyDesktopChargeTypeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDesktopSpec(array $arguments = [])
 * @method \Http\Promise\Promise modifyDesktopSpecAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDesktopTimer(array $arguments = [])
 * @method \Http\Promise\Promise modifyDesktopTimerAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDesktopHostName(array $arguments = [])
 * @method \Http\Promise\Promise modifyDesktopHostNameAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCustomizedListHeaders(array $arguments = [])
 * @method \Http\Promise\Promise modifyCustomizedListHeadersAsync($arguments = [])
 * @method \Dew\Acs\Result migrateDesktops(array $arguments = [])
 * @method \Http\Promise\Promise migrateDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result renewDesktops(array $arguments = [])
 * @method \Http\Promise\Promise renewDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDesktops(array $arguments = [])
 * @method \Http\Promise\Promise deleteDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result describeUsersPassword(array $arguments = [])
 * @method \Http\Promise\Promise describeUsersPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result getConnectionTicket(array $arguments = [])
 * @method \Http\Promise\Promise getConnectionTicketAsync($arguments = [])
 * @method \Dew\Acs\Result describeGuestApplications(array $arguments = [])
 * @method \Http\Promise\Promise describeGuestApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyUserEntitlement(array $arguments = [])
 * @method \Http\Promise\Promise modifyUserEntitlementAsync($arguments = [])
 * @method \Dew\Acs\Result modifyEntitlement(array $arguments = [])
 * @method \Http\Promise\Promise modifyEntitlementAsync($arguments = [])
 * @method \Dew\Acs\Result createDesktopGroup(array $arguments = [])
 * @method \Http\Promise\Promise createDesktopGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getDesktopGroupDetail(array $arguments = [])
 * @method \Http\Promise\Promise getDesktopGroupDetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeDesktopGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeDesktopGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result exportDesktopGroupInfo(array $arguments = [])
 * @method \Http\Promise\Promise exportDesktopGroupInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeDesktopsInGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeDesktopsInGroupAsync($arguments = [])
 * @method \Dew\Acs\Result disableDesktopsInGroup(array $arguments = [])
 * @method \Http\Promise\Promise disableDesktopsInGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDesktopGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyDesktopGroupAsync($arguments = [])
 * @method \Dew\Acs\Result resetDesktops(array $arguments = [])
 * @method \Http\Promise\Promise resetDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result setDesktopGroupScaleTimer(array $arguments = [])
 * @method \Http\Promise\Promise setDesktopGroupScaleTimerAsync($arguments = [])
 * @method \Dew\Acs\Result setDesktopGroupTimer(array $arguments = [])
 * @method \Http\Promise\Promise setDesktopGroupTimerAsync($arguments = [])
 * @method \Dew\Acs\Result setDesktopGroupTimerStatus(array $arguments = [])
 * @method \Http\Promise\Promise setDesktopGroupTimerStatusAsync($arguments = [])
 * @method \Dew\Acs\Result renewDesktopGroup(array $arguments = [])
 * @method \Http\Promise\Promise renewDesktopGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDesktopGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteDesktopGroupAsync($arguments = [])
 * @method \Dew\Acs\Result addUserToDesktopGroup(array $arguments = [])
 * @method \Http\Promise\Promise addUserToDesktopGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeUsersInGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeUsersInGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserConnectionRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeUserConnectionRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyUserToDesktopGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyUserToDesktopGroupAsync($arguments = [])
 * @method \Dew\Acs\Result removeUserFromDesktopGroup(array $arguments = [])
 * @method \Http\Promise\Promise removeUserFromDesktopGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createNetworkPackage(array $arguments = [])
 * @method \Http\Promise\Promise createNetworkPackageAsync($arguments = [])
 * @method \Dew\Acs\Result describeNetworkPackages(array $arguments = [])
 * @method \Http\Promise\Promise describeNetworkPackagesAsync($arguments = [])
 * @method \Dew\Acs\Result describeFlowMetric(array $arguments = [])
 * @method \Http\Promise\Promise describeFlowMetricAsync($arguments = [])
 * @method \Dew\Acs\Result describeFlowStatistic(array $arguments = [])
 * @method \Http\Promise\Promise describeFlowStatisticAsync($arguments = [])
 * @method \Dew\Acs\Result describeAclEntries(array $arguments = [])
 * @method \Http\Promise\Promise describeAclEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAclEntries(array $arguments = [])
 * @method \Http\Promise\Promise modifyAclEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result associateNetworkPackage(array $arguments = [])
 * @method \Http\Promise\Promise associateNetworkPackageAsync($arguments = [])
 * @method \Dew\Acs\Result dissociateNetworkPackage(array $arguments = [])
 * @method \Http\Promise\Promise dissociateNetworkPackageAsync($arguments = [])
 * @method \Dew\Acs\Result renewNetworkPackages(array $arguments = [])
 * @method \Http\Promise\Promise renewNetworkPackagesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNetworkPackageBandwidth(array $arguments = [])
 * @method \Http\Promise\Promise modifyNetworkPackageBandwidthAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNetworkPackageEnabled(array $arguments = [])
 * @method \Http\Promise\Promise modifyNetworkPackageEnabledAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNetworkPackages(array $arguments = [])
 * @method \Http\Promise\Promise deleteNetworkPackagesAsync($arguments = [])
 * @method \Dew\Acs\Result describeCens(array $arguments = [])
 * @method \Http\Promise\Promise describeCensAsync($arguments = [])
 * @method \Dew\Acs\Result verifyCen(array $arguments = [])
 * @method \Http\Promise\Promise verifyCenAsync($arguments = [])
 * @method \Dew\Acs\Result sendVerifyCode(array $arguments = [])
 * @method \Http\Promise\Promise sendVerifyCodeAsync($arguments = [])
 * @method \Dew\Acs\Result attachCen(array $arguments = [])
 * @method \Http\Promise\Promise attachCenAsync($arguments = [])
 * @method \Dew\Acs\Result detachCen(array $arguments = [])
 * @method \Http\Promise\Promise detachCenAsync($arguments = [])
 * @method \Dew\Acs\Result createCloudDriveService(array $arguments = [])
 * @method \Http\Promise\Promise createCloudDriveServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeCloudDriveGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeCloudDriveGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCloudDriveGroups(array $arguments = [])
 * @method \Http\Promise\Promise modifyCloudDriveGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCloudDriveGroups(array $arguments = [])
 * @method \Http\Promise\Promise deleteCloudDriveGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createCloudDriveUsers(array $arguments = [])
 * @method \Http\Promise\Promise createCloudDriveUsersAsync($arguments = [])
 * @method \Dew\Acs\Result describeCloudDriveUsers(array $arguments = [])
 * @method \Http\Promise\Promise describeCloudDriveUsersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCloudDriveUsers(array $arguments = [])
 * @method \Http\Promise\Promise modifyCloudDriveUsersAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCloudDriveUsers(array $arguments = [])
 * @method \Http\Promise\Promise deleteCloudDriveUsersAsync($arguments = [])
 * @method \Dew\Acs\Result describeCloudDrivePermissions(array $arguments = [])
 * @method \Http\Promise\Promise describeCloudDrivePermissionsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCloudDrivePermission(array $arguments = [])
 * @method \Http\Promise\Promise modifyCloudDrivePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result createCdsFile(array $arguments = [])
 * @method \Http\Promise\Promise createCdsFileAsync($arguments = [])
 * @method \Dew\Acs\Result completeCdsFile(array $arguments = [])
 * @method \Http\Promise\Promise completeCdsFileAsync($arguments = [])
 * @method \Dew\Acs\Result copyCdsFile(array $arguments = [])
 * @method \Http\Promise\Promise copyCdsFileAsync($arguments = [])
 * @method \Dew\Acs\Result listCdsFiles(array $arguments = [])
 * @method \Http\Promise\Promise listCdsFilesAsync($arguments = [])
 * @method \Dew\Acs\Result getAsyncTask(array $arguments = [])
 * @method \Http\Promise\Promise getAsyncTaskAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCdsFile(array $arguments = [])
 * @method \Http\Promise\Promise modifyCdsFileAsync($arguments = [])
 * @method \Dew\Acs\Result moveCdsFile(array $arguments = [])
 * @method \Http\Promise\Promise moveCdsFileAsync($arguments = [])
 * @method \Dew\Acs\Result downloadCdsFile(array $arguments = [])
 * @method \Http\Promise\Promise downloadCdsFileAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCdsFile(array $arguments = [])
 * @method \Http\Promise\Promise deleteCdsFileAsync($arguments = [])
 * @method \Dew\Acs\Result createCdsFileShareLink(array $arguments = [])
 * @method \Http\Promise\Promise createCdsFileShareLinkAsync($arguments = [])
 * @method \Dew\Acs\Result describeCdsFileShareLinks(array $arguments = [])
 * @method \Http\Promise\Promise describeCdsFileShareLinksAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCdsFileShareLink(array $arguments = [])
 * @method \Http\Promise\Promise modifyCdsFileShareLinkAsync($arguments = [])
 * @method \Dew\Acs\Result cancelCdsFileShareLink(array $arguments = [])
 * @method \Http\Promise\Promise cancelCdsFileShareLinkAsync($arguments = [])
 * @method \Dew\Acs\Result addFilePermission(array $arguments = [])
 * @method \Http\Promise\Promise addFilePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result listFilePermission(array $arguments = [])
 * @method \Http\Promise\Promise listFilePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result removeFilePermission(array $arguments = [])
 * @method \Http\Promise\Promise removeFilePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result createAndBindNasFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise createAndBindNasFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result createNASFileSystem(array $arguments = [])
 * @method \Http\Promise\Promise createNASFileSystemAsync($arguments = [])
 * @method \Dew\Acs\Result describeNASFileSystems(array $arguments = [])
 * @method \Http\Promise\Promise describeNASFileSystemsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNASDefaultMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise modifyNASDefaultMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result resetNASDefaultMountTarget(array $arguments = [])
 * @method \Http\Promise\Promise resetNASDefaultMountTargetAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNASFileSystems(array $arguments = [])
 * @method \Http\Promise\Promise deleteNASFileSystemsAsync($arguments = [])
 * @method \Dew\Acs\Result createBundle(array $arguments = [])
 * @method \Http\Promise\Promise createBundleAsync($arguments = [])
 * @method \Dew\Acs\Result describeBundles(array $arguments = [])
 * @method \Http\Promise\Promise describeBundlesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBundle(array $arguments = [])
 * @method \Http\Promise\Promise modifyBundleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteBundles(array $arguments = [])
 * @method \Http\Promise\Promise deleteBundlesAsync($arguments = [])
 * @method \Dew\Acs\Result createImage(array $arguments = [])
 * @method \Http\Promise\Promise createImageAsync($arguments = [])
 * @method \Dew\Acs\Result copyImage(array $arguments = [])
 * @method \Http\Promise\Promise copyImageAsync($arguments = [])
 * @method \Dew\Acs\Result uploadImage(array $arguments = [])
 * @method \Http\Promise\Promise uploadImageAsync($arguments = [])
 * @method \Dew\Acs\Result describeImages(array $arguments = [])
 * @method \Http\Promise\Promise describeImagesAsync($arguments = [])
 * @method \Dew\Acs\Result describeImageModifiedRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeImageModifiedRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeImagePermission(array $arguments = [])
 * @method \Http\Promise\Promise describeImagePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyImageAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyImageAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyImagePermission(array $arguments = [])
 * @method \Http\Promise\Promise modifyImagePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result migrateImageProtocol(array $arguments = [])
 * @method \Http\Promise\Promise migrateImageProtocolAsync($arguments = [])
 * @method \Dew\Acs\Result deleteImages(array $arguments = [])
 * @method \Http\Promise\Promise deleteImagesAsync($arguments = [])
 * @method \Dew\Acs\Result cancelCopyImage(array $arguments = [])
 * @method \Http\Promise\Promise cancelCopyImageAsync($arguments = [])
 * @method \Dew\Acs\Result createSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise createSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result resetSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise resetSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result describeSnapshots(array $arguments = [])
 * @method \Http\Promise\Promise describeSnapshotsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise deleteSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result createAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result applyAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise applyAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result cancelAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise cancelAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAutoSnapshotPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteAutoSnapshotPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createPolicyGroup(array $arguments = [])
 * @method \Http\Promise\Promise createPolicyGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deletePolicyGroups(array $arguments = [])
 * @method \Http\Promise\Promise deletePolicyGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPolicyGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyPolicyGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDesktopsPolicyGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyDesktopsPolicyGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describePolicyGroups(array $arguments = [])
 * @method \Http\Promise\Promise describePolicyGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result clonePolicyGroup(array $arguments = [])
 * @method \Http\Promise\Promise clonePolicyGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createConfigGroup(array $arguments = [])
 * @method \Http\Promise\Promise createConfigGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyConfigGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyConfigGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConfigGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteConfigGroupAsync($arguments = [])
 * @method \Dew\Acs\Result bindConfigGroup(array $arguments = [])
 * @method \Http\Promise\Promise bindConfigGroupAsync($arguments = [])
 * @method \Dew\Acs\Result unbindConfigGroup(array $arguments = [])
 * @method \Http\Promise\Promise unbindConfigGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeConfigGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeConfigGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTimerGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyTimerGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeTimerGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeTimerGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVirtualMFADevice(array $arguments = [])
 * @method \Http\Promise\Promise deleteVirtualMFADeviceAsync($arguments = [])
 * @method \Dew\Acs\Result describeVirtualMFADevices(array $arguments = [])
 * @method \Http\Promise\Promise describeVirtualMFADevicesAsync($arguments = [])
 * @method \Dew\Acs\Result unlockVirtualMFADevice(array $arguments = [])
 * @method \Http\Promise\Promise unlockVirtualMFADeviceAsync($arguments = [])
 * @method \Dew\Acs\Result lockVirtualMFADevice(array $arguments = [])
 * @method \Http\Promise\Promise lockVirtualMFADeviceAsync($arguments = [])
 * @method \Dew\Acs\Result describeFotaTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeFotaTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeFotaPendingDesktops(array $arguments = [])
 * @method \Http\Promise\Promise describeFotaPendingDesktopsAsync($arguments = [])
 * @method \Dew\Acs\Result updateFotaTask(array $arguments = [])
 * @method \Http\Promise\Promise updateFotaTaskAsync($arguments = [])
 * @method \Dew\Acs\Result approveFotaUpdate(array $arguments = [])
 * @method \Http\Promise\Promise approveFotaUpdateAsync($arguments = [])
 * @method \Dew\Acs\Result setOfficeSiteSsoStatus(array $arguments = [])
 * @method \Http\Promise\Promise setOfficeSiteSsoStatusAsync($arguments = [])
 * @method \Dew\Acs\Result setIdpMetadata(array $arguments = [])
 * @method \Http\Promise\Promise setIdpMetadataAsync($arguments = [])
 * @method \Dew\Acs\Result setDirectorySsoStatus(array $arguments = [])
 * @method \Http\Promise\Promise setDirectorySsoStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getOfficeSiteSsoStatus(array $arguments = [])
 * @method \Http\Promise\Promise getOfficeSiteSsoStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getSpMetadata(array $arguments = [])
 * @method \Http\Promise\Promise getSpMetadataAsync($arguments = [])
 * @method \Dew\Acs\Result stopInvocation(array $arguments = [])
 * @method \Http\Promise\Promise stopInvocationAsync($arguments = [])
 * @method \Dew\Acs\Result describeInvocations(array $arguments = [])
 * @method \Http\Promise\Promise describeInvocationsAsync($arguments = [])
 * @method \Dew\Acs\Result runCommand(array $arguments = [])
 * @method \Http\Promise\Promise runCommandAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeClientEvents(array $arguments = [])
 * @method \Http\Promise\Promise describeClientEventsAsync($arguments = [])
 * @method \Dew\Acs\Result exportClientEvents(array $arguments = [])
 * @method \Http\Promise\Promise exportClientEventsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRecordings(array $arguments = [])
 * @method \Http\Promise\Promise describeRecordingsAsync($arguments = [])
 * @method \Dew\Acs\Result addDevices(array $arguments = [])
 * @method \Http\Promise\Promise addDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDevices(array $arguments = [])
 * @method \Http\Promise\Promise deleteDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result attachEndUser(array $arguments = [])
 * @method \Http\Promise\Promise attachEndUserAsync($arguments = [])
 * @method \Dew\Acs\Result detachEndUser(array $arguments = [])
 * @method \Http\Promise\Promise detachEndUserAsync($arguments = [])
 * @method \Dew\Acs\Result describeDevices(array $arguments = [])
 * @method \Http\Promise\Promise describeDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDesktopSessions(array $arguments = [])
 * @method \Http\Promise\Promise describeDesktopSessionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDesktopGroupSessions(array $arguments = [])
 * @method \Http\Promise\Promise describeDesktopGroupSessionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSessionStatistic(array $arguments = [])
 * @method \Http\Promise\Promise describeSessionStatisticAsync($arguments = [])
 * @method \Dew\Acs\Result disconnectDesktopSessions(array $arguments = [])
 * @method \Http\Promise\Promise disconnectDesktopSessionsAsync($arguments = [])
 * @method \Dew\Acs\Result applyCoordinationForMonitoring(array $arguments = [])
 * @method \Http\Promise\Promise applyCoordinationForMonitoringAsync($arguments = [])
 * @method \Dew\Acs\Result getCoordinateTicket(array $arguments = [])
 * @method \Http\Promise\Promise getCoordinateTicketAsync($arguments = [])
 * @method \Dew\Acs\Result cancelCoordinationForMonitoring(array $arguments = [])
 * @method \Http\Promise\Promise cancelCoordinationForMonitoringAsync($arguments = [])
 * @method \Dew\Acs\Result applyCoordinatePrivilege(array $arguments = [])
 * @method \Http\Promise\Promise applyCoordinatePrivilegeAsync($arguments = [])
 * @method \Dew\Acs\Result revokeCoordinatePrivilege(array $arguments = [])
 * @method \Http\Promise\Promise revokeCoordinatePrivilegeAsync($arguments = [])
 * @method \Dew\Acs\Result getLoginToken(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise getLoginTokenAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result refreshLoginToken(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise refreshLoginTokenAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result changePassword(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise changePasswordAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result deleteFingerPrintTemplate(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise deleteFingerPrintTemplateAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result describeFingerPrintTemplates(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise describeFingerPrintTemplatesAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result describeGlobalDesktops(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise describeGlobalDesktopsAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result encryptPassword(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise encryptPasswordAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result getCloudDriveServiceMountToken(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise getCloudDriveServiceMountTokenAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result isKeepAlive(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise isKeepAliveAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result reportSessionStatus(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise reportSessionStatusAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result resetPassword(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise resetPasswordAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result sendTokenCode(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise sendTokenCodeAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result setFingerPrintTemplate(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise setFingerPrintTemplateAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result setFingerPrintTemplateDescription(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise setFingerPrintTemplateDescriptionAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result unbindUserDesktop(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise unbindUserDesktopAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result verifyCredential(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise verifyCredentialAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result describeUserResources(array $arguments = []) {@since 2020-10-02}
 * @method \Http\Promise\Promise describeUserResourcesAsync($arguments = []) {@since 2020-10-02}
 * @method \Dew\Acs\Result describeBenefits(array $arguments = []) {@since 2023-06-27}
 * @method \Http\Promise\Promise describeBenefitsAsync($arguments = []) {@since 2023-06-27}
 * @method \Dew\Acs\Result getRedeemCodes(array $arguments = []) {@since 2023-06-27}
 * @method \Http\Promise\Promise getRedeemCodesAsync($arguments = []) {@since 2023-06-27}
 * @method \Dew\Acs\Result getRequestToken(array $arguments = []) {@since 2023-06-27}
 * @method \Http\Promise\Promise getRequestTokenAsync($arguments = []) {@since 2023-06-27}
 */
final class EcdClient extends AcsClient
{
    //
}

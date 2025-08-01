<?php

declare(strict_types=1);

namespace Dew\Acs\EdsAic;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createCloudPhoneNode(array $arguments = [])
 * @method \Http\Promise\Promise createCloudPhoneNodeAsync($arguments = [])
 * @method \Dew\Acs\Result describeCloudPhoneNodes(array $arguments = [])
 * @method \Http\Promise\Promise describeCloudPhoneNodesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCloudPhoneNode(array $arguments = [])
 * @method \Http\Promise\Promise modifyCloudPhoneNodeAsync($arguments = [])
 * @method \Dew\Acs\Result renewCloudPhoneNodes(array $arguments = [])
 * @method \Http\Promise\Promise renewCloudPhoneNodesAsync($arguments = [])
 * @method \Dew\Acs\Result changeCloudPhoneNode(array $arguments = [])
 * @method \Http\Promise\Promise changeCloudPhoneNodeAsync($arguments = [])
 * @method \Dew\Acs\Result expandDataVolume(array $arguments = [])
 * @method \Http\Promise\Promise expandDataVolumeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCloudPhoneNodes(array $arguments = [])
 * @method \Http\Promise\Promise deleteCloudPhoneNodesAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSpec(array $arguments = [])
 * @method \Http\Promise\Promise describeSpecAsync($arguments = [])
 * @method \Dew\Acs\Result checkResourceStock(array $arguments = [])
 * @method \Http\Promise\Promise checkResourceStockAsync($arguments = [])
 * @method \Dew\Acs\Result createAndroidInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise createAndroidInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeAndroidInstanceGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeAndroidInstanceGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAndroidInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyAndroidInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeAndroidInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise upgradeAndroidInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result downgradeAndroidInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise downgradeAndroidInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result renewAndroidInstanceGroups(array $arguments = [])
 * @method \Http\Promise\Promise renewAndroidInstanceGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result updateInstanceGroupImage(array $arguments = [])
 * @method \Http\Promise\Promise updateInstanceGroupImageAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAndroidInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteAndroidInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeAndroidInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeAndroidInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAndroidInstance(array $arguments = [])
 * @method \Http\Promise\Promise modifyAndroidInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result authorizeAndroidInstance(array $arguments = [])
 * @method \Http\Promise\Promise authorizeAndroidInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result startAndroidInstance(array $arguments = [])
 * @method \Http\Promise\Promise startAndroidInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result stopAndroidInstance(array $arguments = [])
 * @method \Http\Promise\Promise stopAndroidInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result rebootAndroidInstancesInGroup(array $arguments = [])
 * @method \Http\Promise\Promise rebootAndroidInstancesInGroupAsync($arguments = [])
 * @method \Dew\Acs\Result resetAndroidInstancesInGroup(array $arguments = [])
 * @method \Http\Promise\Promise resetAndroidInstancesInGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceChargeType(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceChargeTypeAsync($arguments = [])
 * @method \Dew\Acs\Result updateInstanceImage(array $arguments = [])
 * @method \Http\Promise\Promise updateInstanceImageAsync($arguments = [])
 * @method \Dew\Acs\Result batchGetAcpConnectionTicket(array $arguments = [])
 * @method \Http\Promise\Promise batchGetAcpConnectionTicketAsync($arguments = [])
 * @method \Dew\Acs\Result disconnectAndroidInstance(array $arguments = [])
 * @method \Http\Promise\Promise disconnectAndroidInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result runCommand(array $arguments = [])
 * @method \Http\Promise\Promise runCommandAsync($arguments = [])
 * @method \Dew\Acs\Result describeInvocations(array $arguments = [])
 * @method \Http\Promise\Promise describeInvocationsAsync($arguments = [])
 * @method \Dew\Acs\Result sendFile(array $arguments = [])
 * @method \Http\Promise\Promise sendFileAsync($arguments = [])
 * @method \Dew\Acs\Result fetchFile(array $arguments = [])
 * @method \Http\Promise\Promise fetchFileAsync($arguments = [])
 * @method \Dew\Acs\Result createScreenshot(array $arguments = [])
 * @method \Http\Promise\Promise createScreenshotAsync($arguments = [])
 * @method \Dew\Acs\Result generateCoordinationCode(array $arguments = [])
 * @method \Http\Promise\Promise generateCoordinationCodeAsync($arguments = [])
 * @method \Dew\Acs\Result endCoordination(array $arguments = [])
 * @method \Http\Promise\Promise endCoordinationAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomImage(array $arguments = [])
 * @method \Http\Promise\Promise createCustomImageAsync($arguments = [])
 * @method \Dew\Acs\Result describeImageList(array $arguments = [])
 * @method \Http\Promise\Promise describeImageListAsync($arguments = [])
 * @method \Dew\Acs\Result updateCustomImageName(array $arguments = [])
 * @method \Http\Promise\Promise updateCustomImageNameAsync($arguments = [])
 * @method \Dew\Acs\Result distributeImage(array $arguments = [])
 * @method \Http\Promise\Promise distributeImageAsync($arguments = [])
 * @method \Dew\Acs\Result deleteImages(array $arguments = [])
 * @method \Http\Promise\Promise deleteImagesAsync($arguments = [])
 * @method \Dew\Acs\Result createApp(array $arguments = [])
 * @method \Http\Promise\Promise createAppAsync($arguments = [])
 * @method \Dew\Acs\Result describeApps(array $arguments = [])
 * @method \Http\Promise\Promise describeAppsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyApp(array $arguments = [])
 * @method \Http\Promise\Promise modifyAppAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApps(array $arguments = [])
 * @method \Http\Promise\Promise deleteAppsAsync($arguments = [])
 * @method \Dew\Acs\Result installApp(array $arguments = [])
 * @method \Http\Promise\Promise installAppAsync($arguments = [])
 * @method \Dew\Acs\Result uninstallApp(array $arguments = [])
 * @method \Http\Promise\Promise uninstallAppAsync($arguments = [])
 * @method \Dew\Acs\Result operateApp(array $arguments = [])
 * @method \Http\Promise\Promise operateAppAsync($arguments = [])
 * @method \Dew\Acs\Result createKeyPair(array $arguments = [])
 * @method \Http\Promise\Promise createKeyPairAsync($arguments = [])
 * @method \Dew\Acs\Result importKeyPair(array $arguments = [])
 * @method \Http\Promise\Promise importKeyPairAsync($arguments = [])
 * @method \Dew\Acs\Result describeKeyPairs(array $arguments = [])
 * @method \Http\Promise\Promise describeKeyPairsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyKeyPairName(array $arguments = [])
 * @method \Http\Promise\Promise modifyKeyPairNameAsync($arguments = [])
 * @method \Dew\Acs\Result deleteKeyPairs(array $arguments = [])
 * @method \Http\Promise\Promise deleteKeyPairsAsync($arguments = [])
 * @method \Dew\Acs\Result attachKeyPair(array $arguments = [])
 * @method \Http\Promise\Promise attachKeyPairAsync($arguments = [])
 * @method \Dew\Acs\Result detachKeyPair(array $arguments = [])
 * @method \Http\Promise\Promise detachKeyPairAsync($arguments = [])
 * @method \Dew\Acs\Result backupFile(array $arguments = [])
 * @method \Http\Promise\Promise backupFileAsync($arguments = [])
 * @method \Dew\Acs\Result recoveryFile(array $arguments = [])
 * @method \Http\Promise\Promise recoveryFileAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupFiles(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupFilesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteBackupFile(array $arguments = [])
 * @method \Http\Promise\Promise deleteBackupFileAsync($arguments = [])
 * @method \Dew\Acs\Result createPolicyGroup(array $arguments = [])
 * @method \Http\Promise\Promise createPolicyGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listPolicyGroups(array $arguments = [])
 * @method \Http\Promise\Promise listPolicyGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPolicyGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyPolicyGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deletePolicyGroup(array $arguments = [])
 * @method \Http\Promise\Promise deletePolicyGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeMetricLast(array $arguments = [])
 * @method \Http\Promise\Promise describeMetricLastAsync($arguments = [])
 * @method \Dew\Acs\Result setAdbSecure(array $arguments = [])
 * @method \Http\Promise\Promise setAdbSecureAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDisplayConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyDisplayConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeDisplayConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeDisplayConfigAsync($arguments = [])
 */
final class EdsAicClient extends AcsClient
{
    //
}

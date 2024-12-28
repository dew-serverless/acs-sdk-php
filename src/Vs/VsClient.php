<?php

declare(strict_types=1);

namespace Dew\Acs\Vs;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createRenderingDataPackage(array $arguments = [])
 * @method \Http\Promise\Promise createRenderingDataPackageAsync($arguments = [])
 * @method \Dew\Acs\Result recoverRenderingDataPackage(array $arguments = [])
 * @method \Http\Promise\Promise recoverRenderingDataPackageAsync($arguments = [])
 * @method \Dew\Acs\Result releaseRenderingDataPackage(array $arguments = [])
 * @method \Http\Promise\Promise releaseRenderingDataPackageAsync($arguments = [])
 * @method \Dew\Acs\Result listRenderingDataPackages(array $arguments = [])
 * @method \Http\Promise\Promise listRenderingDataPackagesAsync($arguments = [])
 * @method \Dew\Acs\Result createRenderingInstance(array $arguments = [])
 * @method \Http\Promise\Promise createRenderingInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyRenderingInstance(array $arguments = [])
 * @method \Http\Promise\Promise modifyRenderingInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result renewRenderingInstance(array $arguments = [])
 * @method \Http\Promise\Promise renewRenderingInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listRenderingInstances(array $arguments = [])
 * @method \Http\Promise\Promise listRenderingInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeRenderingInstance(array $arguments = [])
 * @method \Http\Promise\Promise describeRenderingInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getRenderingInstanceStreamingInfo(array $arguments = [])
 * @method \Http\Promise\Promise getRenderingInstanceStreamingInfoAsync($arguments = [])
 * @method \Dew\Acs\Result modifyRenderingInstanceBandwidth(array $arguments = [])
 * @method \Http\Promise\Promise modifyRenderingInstanceBandwidthAsync($arguments = [])
 * @method \Dew\Acs\Result sendRenderingInstanceCommands(array $arguments = [])
 * @method \Http\Promise\Promise sendRenderingInstanceCommandsAsync($arguments = [])
 * @method \Dew\Acs\Result rebootRenderingInstance(array $arguments = [])
 * @method \Http\Promise\Promise rebootRenderingInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updateRenderingInstanceConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise updateRenderingInstanceConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result describeRenderingInstanceConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise describeRenderingInstanceConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRenderingInstanceConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise deleteRenderingInstanceConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result uploadPublicKey(array $arguments = [])
 * @method \Http\Promise\Promise uploadPublicKeyAsync($arguments = [])
 * @method \Dew\Acs\Result listPublicKeys(array $arguments = [])
 * @method \Http\Promise\Promise listPublicKeysAsync($arguments = [])
 * @method \Dew\Acs\Result manageLogin(array $arguments = [])
 * @method \Http\Promise\Promise manageLoginAsync($arguments = [])
 * @method \Dew\Acs\Result deletePublicKey(array $arguments = [])
 * @method \Http\Promise\Promise deletePublicKeyAsync($arguments = [])
 * @method \Dew\Acs\Result updateCloudAppInfo(array $arguments = [])
 * @method \Http\Promise\Promise updateCloudAppInfoAsync($arguments = [])
 * @method \Dew\Acs\Result uploadCloudApp(array $arguments = [])
 * @method \Http\Promise\Promise uploadCloudAppAsync($arguments = [])
 * @method \Dew\Acs\Result listCloudApps(array $arguments = [])
 * @method \Http\Promise\Promise listCloudAppsAsync($arguments = [])
 * @method \Dew\Acs\Result installCloudApp(array $arguments = [])
 * @method \Http\Promise\Promise installCloudAppAsync($arguments = [])
 * @method \Dew\Acs\Result uninstallCloudApp(array $arguments = [])
 * @method \Http\Promise\Promise uninstallCloudAppAsync($arguments = [])
 * @method \Dew\Acs\Result listCloudAppInstallations(array $arguments = [])
 * @method \Http\Promise\Promise listCloudAppInstallationsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCloudApp(array $arguments = [])
 * @method \Http\Promise\Promise deleteCloudAppAsync($arguments = [])
 * @method \Dew\Acs\Result uploadFile(array $arguments = [])
 * @method \Http\Promise\Promise uploadFileAsync($arguments = [])
 * @method \Dew\Acs\Result updateFileInfo(array $arguments = [])
 * @method \Http\Promise\Promise updateFileInfoAsync($arguments = [])
 * @method \Dew\Acs\Result listFiles(array $arguments = [])
 * @method \Http\Promise\Promise listFilesAsync($arguments = [])
 * @method \Dew\Acs\Result pushFile(array $arguments = [])
 * @method \Http\Promise\Promise pushFileAsync($arguments = [])
 * @method \Dew\Acs\Result listFilePushStatuses(array $arguments = [])
 * @method \Http\Promise\Promise listFilePushStatusesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFile(array $arguments = [])
 * @method \Http\Promise\Promise deleteFileAsync($arguments = [])
 * @method \Dew\Acs\Result createRenderingInstanceGateway(array $arguments = [])
 * @method \Http\Promise\Promise createRenderingInstanceGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result listRenderingInstanceGateway(array $arguments = [])
 * @method \Http\Promise\Promise listRenderingInstanceGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRenderingInstanceGateway(array $arguments = [])
 * @method \Http\Promise\Promise deleteRenderingInstanceGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result releaseRenderingInstance(array $arguments = [])
 * @method \Http\Promise\Promise releaseRenderingInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccountStat(array $arguments = [])
 * @method \Http\Promise\Promise describeAccountStatAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsUserResourcePackage(array $arguments = [])
 * @method \Http\Promise\Promise describeVsUserResourcePackageAsync($arguments = [])
 * @method \Dew\Acs\Result openVsService(array $arguments = [])
 * @method \Http\Promise\Promise openVsServiceAsync($arguments = [])
 * @method \Dew\Acs\Result createGroup(array $arguments = [])
 * @method \Http\Promise\Promise createGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createDevice(array $arguments = [])
 * @method \Http\Promise\Promise createDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDevice(array $arguments = [])
 * @method \Http\Promise\Promise deleteDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result batchDeleteDevices(array $arguments = [])
 * @method \Http\Promise\Promise batchDeleteDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDevice(array $arguments = [])
 * @method \Http\Promise\Promise modifyDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDevice(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDevices(array $arguments = [])
 * @method \Http\Promise\Promise describeDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result syncCatalogs(array $arguments = [])
 * @method \Http\Promise\Promise syncCatalogsAsync($arguments = [])
 * @method \Dew\Acs\Result unlockDevice(array $arguments = [])
 * @method \Http\Promise\Promise unlockDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result startDevice(array $arguments = [])
 * @method \Http\Promise\Promise startDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result stopDevice(array $arguments = [])
 * @method \Http\Promise\Promise stopDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result batchStartDevices(array $arguments = [])
 * @method \Http\Promise\Promise batchStartDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result batchStopDevices(array $arguments = [])
 * @method \Http\Promise\Promise batchStopDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result createDeviceAlarm(array $arguments = [])
 * @method \Http\Promise\Promise createDeviceAlarmAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDeviceAlarm(array $arguments = [])
 * @method \Http\Promise\Promise modifyDeviceAlarmAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDeviceCapture(array $arguments = [])
 * @method \Http\Promise\Promise modifyDeviceCaptureAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDeviceChannels(array $arguments = [])
 * @method \Http\Promise\Promise modifyDeviceChannelsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceChannels(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceChannelsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceGateway(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceURL(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceURLAsync($arguments = [])
 * @method \Dew\Acs\Result describePurchasedDevice(array $arguments = [])
 * @method \Http\Promise\Promise describePurchasedDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result describePurchasedDevices(array $arguments = [])
 * @method \Http\Promise\Promise describePurchasedDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result bindPurchasedDevice(array $arguments = [])
 * @method \Http\Promise\Promise bindPurchasedDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result unbindPurchasedDevice(array $arguments = [])
 * @method \Http\Promise\Promise unbindPurchasedDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result batchBindPurchasedDevices(array $arguments = [])
 * @method \Http\Promise\Promise batchBindPurchasedDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result batchUnbindDirectories(array $arguments = [])
 * @method \Http\Promise\Promise batchUnbindDirectoriesAsync($arguments = [])
 * @method \Dew\Acs\Result batchUnbindPurchasedDevices(array $arguments = [])
 * @method \Http\Promise\Promise batchUnbindPurchasedDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result startStream(array $arguments = [])
 * @method \Http\Promise\Promise startStreamAsync($arguments = [])
 * @method \Dew\Acs\Result stopStream(array $arguments = [])
 * @method \Http\Promise\Promise stopStreamAsync($arguments = [])
 * @method \Dew\Acs\Result batchStartStreams(array $arguments = [])
 * @method \Http\Promise\Promise batchStartStreamsAsync($arguments = [])
 * @method \Dew\Acs\Result batchStopStreams(array $arguments = [])
 * @method \Http\Promise\Promise batchStopStreamsAsync($arguments = [])
 * @method \Dew\Acs\Result describeStream(array $arguments = [])
 * @method \Http\Promise\Promise describeStreamAsync($arguments = [])
 * @method \Dew\Acs\Result describeStreams(array $arguments = [])
 * @method \Http\Promise\Promise describeStreamsAsync($arguments = [])
 * @method \Dew\Acs\Result describeStreamURL(array $arguments = [])
 * @method \Http\Promise\Promise describeStreamURLAsync($arguments = [])
 * @method \Dew\Acs\Result describeVodStreamURL(array $arguments = [])
 * @method \Http\Promise\Promise describeVodStreamURLAsync($arguments = [])
 * @method \Dew\Acs\Result describeStreamVodList(array $arguments = [])
 * @method \Http\Promise\Promise describeStreamVodListAsync($arguments = [])
 * @method \Dew\Acs\Result forbidVsStream(array $arguments = [])
 * @method \Http\Promise\Promise forbidVsStreamAsync($arguments = [])
 * @method \Dew\Acs\Result resumeVsStream(array $arguments = [])
 * @method \Http\Promise\Promise resumeVsStreamAsync($arguments = [])
 * @method \Dew\Acs\Result batchForbidVsStream(array $arguments = [])
 * @method \Http\Promise\Promise batchForbidVsStreamAsync($arguments = [])
 * @method \Dew\Acs\Result batchResumeVsStream(array $arguments = [])
 * @method \Http\Promise\Promise batchResumeVsStreamAsync($arguments = [])
 * @method \Dew\Acs\Result createStreamSnapshot(array $arguments = [])
 * @method \Http\Promise\Promise createStreamSnapshotAsync($arguments = [])
 * @method \Dew\Acs\Result setVsStreamsNotifyUrlConfig(array $arguments = [])
 * @method \Http\Promise\Promise setVsStreamsNotifyUrlConfigAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVsStreamsNotifyUrlConfig(array $arguments = [])
 * @method \Http\Promise\Promise deleteVsStreamsNotifyUrlConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsStreamsNotifyUrlConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeVsStreamsNotifyUrlConfigAsync($arguments = [])
 * @method \Dew\Acs\Result addVsPullStreamInfoConfig(array $arguments = [])
 * @method \Http\Promise\Promise addVsPullStreamInfoConfigAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVsPullStreamInfoConfig(array $arguments = [])
 * @method \Http\Promise\Promise deleteVsPullStreamInfoConfigAsync($arguments = [])
 * @method \Dew\Acs\Result updateVsPullStreamInfoConfig(array $arguments = [])
 * @method \Http\Promise\Promise updateVsPullStreamInfoConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsPullStreamInfoConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeVsPullStreamInfoConfigAsync($arguments = [])
 * @method \Dew\Acs\Result startTransferStream(array $arguments = [])
 * @method \Http\Promise\Promise startTransferStreamAsync($arguments = [])
 * @method \Dew\Acs\Result stopTransferStream(array $arguments = [])
 * @method \Http\Promise\Promise stopTransferStreamAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsStreamsOnlineList(array $arguments = [])
 * @method \Http\Promise\Promise describeVsStreamsOnlineListAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsStreamsPublishList(array $arguments = [])
 * @method \Http\Promise\Promise describeVsStreamsPublishListAsync($arguments = [])
 * @method \Dew\Acs\Result createTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTemplate(array $arguments = [])
 * @method \Http\Promise\Promise modifyTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result describeTemplate(array $arguments = [])
 * @method \Http\Promise\Promise describeTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result describeTemplates(array $arguments = [])
 * @method \Http\Promise\Promise describeTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result bindTemplate(array $arguments = [])
 * @method \Http\Promise\Promise bindTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result unbindTemplate(array $arguments = [])
 * @method \Http\Promise\Promise unbindTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result batchBindTemplate(array $arguments = [])
 * @method \Http\Promise\Promise batchBindTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result batchUnbindTemplate(array $arguments = [])
 * @method \Http\Promise\Promise batchUnbindTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result batchBindTemplates(array $arguments = [])
 * @method \Http\Promise\Promise batchBindTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result batchUnbindTemplates(array $arguments = [])
 * @method \Http\Promise\Promise batchUnbindTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result startRecordStream(array $arguments = [])
 * @method \Http\Promise\Promise startRecordStreamAsync($arguments = [])
 * @method \Dew\Acs\Result stopRecordStream(array $arguments = [])
 * @method \Http\Promise\Promise stopRecordStreamAsync($arguments = [])
 * @method \Dew\Acs\Result describeRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result setVsDomainCertificate(array $arguments = [])
 * @method \Http\Promise\Promise setVsDomainCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsCertificateDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeVsCertificateDetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainCertificateInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainCertificateInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsCertificateList(array $arguments = [])
 * @method \Http\Promise\Promise describeVsCertificateListAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainDetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainConfigs(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result batchSetVsDomainConfigs(array $arguments = [])
 * @method \Http\Promise\Promise batchSetVsDomainConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result batchDeleteVsDomainConfigs(array $arguments = [])
 * @method \Http\Promise\Promise batchDeleteVsDomainConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsTopDomainsByFlow(array $arguments = [])
 * @method \Http\Promise\Promise describeVsTopDomainsByFlowAsync($arguments = [])
 * @method \Dew\Acs\Result setPreset(array $arguments = [])
 * @method \Http\Promise\Promise setPresetAsync($arguments = [])
 * @method \Dew\Acs\Result gotoPreset(array $arguments = [])
 * @method \Http\Promise\Promise gotoPresetAsync($arguments = [])
 * @method \Dew\Acs\Result deletePreset(array $arguments = [])
 * @method \Http\Promise\Promise deletePresetAsync($arguments = [])
 * @method \Dew\Acs\Result describePresets(array $arguments = [])
 * @method \Http\Promise\Promise describePresetsAsync($arguments = [])
 * @method \Dew\Acs\Result stopMove(array $arguments = [])
 * @method \Http\Promise\Promise stopMoveAsync($arguments = [])
 * @method \Dew\Acs\Result stopAdjust(array $arguments = [])
 * @method \Http\Promise\Promise stopAdjustAsync($arguments = [])
 * @method \Dew\Acs\Result continuousMove(array $arguments = [])
 * @method \Http\Promise\Promise continuousMoveAsync($arguments = [])
 * @method \Dew\Acs\Result continuousAdjust(array $arguments = [])
 * @method \Http\Promise\Promise continuousAdjustAsync($arguments = [])
 * @method \Dew\Acs\Result createDirectory(array $arguments = [])
 * @method \Http\Promise\Promise createDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDirectory(array $arguments = [])
 * @method \Http\Promise\Promise deleteDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDirectory(array $arguments = [])
 * @method \Http\Promise\Promise modifyDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result describeDirectory(array $arguments = [])
 * @method \Http\Promise\Promise describeDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result describeDirectories(array $arguments = [])
 * @method \Http\Promise\Promise describeDirectoriesAsync($arguments = [])
 * @method \Dew\Acs\Result bindDirectory(array $arguments = [])
 * @method \Http\Promise\Promise bindDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result unbindDirectory(array $arguments = [])
 * @method \Http\Promise\Promise unbindDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result batchBindDirectories(array $arguments = [])
 * @method \Http\Promise\Promise batchBindDirectoriesAsync($arguments = [])
 * @method \Dew\Acs\Result createParentPlatform(array $arguments = [])
 * @method \Http\Promise\Promise createParentPlatformAsync($arguments = [])
 * @method \Dew\Acs\Result deleteParentPlatform(array $arguments = [])
 * @method \Http\Promise\Promise deleteParentPlatformAsync($arguments = [])
 * @method \Dew\Acs\Result modifyParentPlatform(array $arguments = [])
 * @method \Http\Promise\Promise modifyParentPlatformAsync($arguments = [])
 * @method \Dew\Acs\Result describeParentPlatform(array $arguments = [])
 * @method \Http\Promise\Promise describeParentPlatformAsync($arguments = [])
 * @method \Dew\Acs\Result describeParentPlatforms(array $arguments = [])
 * @method \Http\Promise\Promise describeParentPlatformsAsync($arguments = [])
 * @method \Dew\Acs\Result describeParentPlatformDevices(array $arguments = [])
 * @method \Http\Promise\Promise describeParentPlatformDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result startParentPlatform(array $arguments = [])
 * @method \Http\Promise\Promise startParentPlatformAsync($arguments = [])
 * @method \Dew\Acs\Result bindParentPlatformDevice(array $arguments = [])
 * @method \Http\Promise\Promise bindParentPlatformDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result batchBindParentPlatformDevices(array $arguments = [])
 * @method \Http\Promise\Promise batchBindParentPlatformDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result unbindParentPlatformDevice(array $arguments = [])
 * @method \Http\Promise\Promise unbindParentPlatformDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result batchUnbindParentPlatformDevices(array $arguments = [])
 * @method \Http\Promise\Promise batchUnbindParentPlatformDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainPvData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainPvDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainUvData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainUvDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainPvUvData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainPvUvDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainRecordData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainRecordDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainSnapshotData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainSnapshotDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainRegionData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainRegionDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainBpsData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainBpsDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainReqBpsData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainReqBpsDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainTrafficData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainTrafficDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDomainReqTrafficData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDomainReqTrafficDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsDevicesData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsDevicesDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsUpPeakPublishStreamData(array $arguments = [])
 * @method \Http\Promise\Promise describeVsUpPeakPublishStreamDataAsync($arguments = [])
 * @method \Dew\Acs\Result verifyVsDomainOwner(array $arguments = [])
 * @method \Http\Promise\Promise verifyVsDomainOwnerAsync($arguments = [])
 * @method \Dew\Acs\Result describeVsVerifyContent(array $arguments = [])
 * @method \Http\Promise\Promise describeVsVerifyContentAsync($arguments = [])
 * @method \Dew\Acs\Result startPublishStream(array $arguments = [])
 * @method \Http\Promise\Promise startPublishStreamAsync($arguments = [])
 * @method \Dew\Acs\Result describePublishStreamStatus(array $arguments = [])
 * @method \Http\Promise\Promise describePublishStreamStatusAsync($arguments = [])
 * @method \Dew\Acs\Result stopPublishStream(array $arguments = [])
 * @method \Http\Promise\Promise stopPublishStreamAsync($arguments = [])
 */
final class VsClient extends AcsClient
{
    //
}

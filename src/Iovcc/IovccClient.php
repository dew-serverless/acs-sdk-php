<?php

declare(strict_types=1);

namespace Dew\Acs\Iovcc;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createVersionPrepublish(array $arguments = [])
 * @method \Http\Promise\Promise createVersionPrepublishAsync($arguments = [])
 * @method \Dew\Acs\Result createVersionTest(array $arguments = [])
 * @method \Http\Promise\Promise createVersionTestAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionTest(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionTestAsync($arguments = [])
 * @method \Dew\Acs\Result listClientPluginVersions(array $arguments = [])
 * @method \Http\Promise\Promise listClientPluginVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result findPrepublishesByVersionId(array $arguments = [])
 * @method \Http\Promise\Promise findPrepublishesByVersionIdAsync($arguments = [])
 * @method \Dew\Acs\Result findVersionTests(array $arguments = [])
 * @method \Http\Promise\Promise findVersionTestsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAssistReport(array $arguments = [])
 * @method \Http\Promise\Promise describeAssistReportAsync($arguments = [])
 * @method \Dew\Acs\Result listAssistActionDetails(array $arguments = [])
 * @method \Http\Promise\Promise listAssistActionDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result listAssistHistories(array $arguments = [])
 * @method \Http\Promise\Promise listAssistHistoriesAsync($arguments = [])
 * @method \Dew\Acs\Result listAssistHistoryDetails(array $arguments = [])
 * @method \Http\Promise\Promise listAssistHistoryDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAssistRTMPServerAddress(array $arguments = [])
 * @method \Http\Promise\Promise describeAssistRTMPServerAddressAsync($arguments = [])
 * @method \Dew\Acs\Result submitAssistReport(array $arguments = [])
 * @method \Http\Promise\Promise submitAssistReportAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomizedProperty(array $arguments = [])
 * @method \Http\Promise\Promise createCustomizedPropertyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomizedProperty(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomizedPropertyAsync($arguments = [])
 * @method \Dew\Acs\Result findCustomizedProperties(array $arguments = [])
 * @method \Http\Promise\Promise findCustomizedPropertiesAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomizedFilter(array $arguments = [])
 * @method \Http\Promise\Promise createCustomizedFilterAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAllCustomizedFilters(array $arguments = [])
 * @method \Http\Promise\Promise deleteAllCustomizedFiltersAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomizedFilter(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomizedFilterAsync($arguments = [])
 * @method \Dew\Acs\Result updateCustomizedFilter(array $arguments = [])
 * @method \Http\Promise\Promise updateCustomizedFilterAsync($arguments = [])
 * @method \Dew\Acs\Result describeCustomizedFilter(array $arguments = [])
 * @method \Http\Promise\Promise describeCustomizedFilterAsync($arguments = [])
 * @method \Dew\Acs\Result findCustomizedFilters(array $arguments = [])
 * @method \Http\Promise\Promise findCustomizedFiltersAsync($arguments = [])
 * @method \Dew\Acs\Result listClientSdks(array $arguments = [])
 * @method \Http\Promise\Promise listClientSdksAsync($arguments = [])
 * @method \Dew\Acs\Result generateSdkDownloadInfo(array $arguments = [])
 * @method \Http\Promise\Promise generateSdkDownloadInfoAsync($arguments = [])
 * @method \Dew\Acs\Result createSchemaSubscribe(array $arguments = [])
 * @method \Http\Promise\Promise createSchemaSubscribeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSchemaSubscribe(array $arguments = [])
 * @method \Http\Promise\Promise deleteSchemaSubscribeAsync($arguments = [])
 * @method \Dew\Acs\Result updateSchemaSubscribe(array $arguments = [])
 * @method \Http\Promise\Promise updateSchemaSubscribeAsync($arguments = [])
 * @method \Dew\Acs\Result listSchemaSubscribes(array $arguments = [])
 * @method \Http\Promise\Promise listSchemaSubscribesAsync($arguments = [])
 * @method \Dew\Acs\Result createNamespace(array $arguments = [])
 * @method \Http\Promise\Promise createNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNamespace(array $arguments = [])
 * @method \Http\Promise\Promise deleteNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result updateNamespaceData(array $arguments = [])
 * @method \Http\Promise\Promise updateNamespaceDataAsync($arguments = [])
 * @method \Dew\Acs\Result getNamespaceData(array $arguments = [])
 * @method \Http\Promise\Promise getNamespaceDataAsync($arguments = [])
 * @method \Dew\Acs\Result getNamespaceStatisticsData(array $arguments = [])
 * @method \Http\Promise\Promise getNamespaceStatisticsDataAsync($arguments = [])
 * @method \Dew\Acs\Result listNamespaces(array $arguments = [])
 * @method \Http\Promise\Promise listNamespacesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteOpenAccount(array $arguments = [])
 * @method \Http\Promise\Promise deleteOpenAccountAsync($arguments = [])
 * @method \Dew\Acs\Result listOpenAccountLinks(array $arguments = [])
 * @method \Http\Promise\Promise listOpenAccountLinksAsync($arguments = [])
 * @method \Dew\Acs\Result listOpenAccounts(array $arguments = [])
 * @method \Http\Promise\Promise listOpenAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result describeOpenAccount(array $arguments = [])
 * @method \Http\Promise\Promise describeOpenAccountAsync($arguments = [])
 * @method \Dew\Acs\Result createUpstreamAppKeyRelation(array $arguments = [])
 * @method \Http\Promise\Promise createUpstreamAppKeyRelationAsync($arguments = [])
 * @method \Dew\Acs\Result createUpstreamAppServer(array $arguments = [])
 * @method \Http\Promise\Promise createUpstreamAppServerAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUpstreamAppKeyRelation(array $arguments = [])
 * @method \Http\Promise\Promise deleteUpstreamAppKeyRelationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUpstreamAppServer(array $arguments = [])
 * @method \Http\Promise\Promise deleteUpstreamAppServerAsync($arguments = [])
 * @method \Dew\Acs\Result updateUpstreamAppServer(array $arguments = [])
 * @method \Http\Promise\Promise updateUpstreamAppServerAsync($arguments = [])
 * @method \Dew\Acs\Result listMessageAcks(array $arguments = [])
 * @method \Http\Promise\Promise listMessageAcksAsync($arguments = [])
 * @method \Dew\Acs\Result listOfflineMessages(array $arguments = [])
 * @method \Http\Promise\Promise listOfflineMessagesAsync($arguments = [])
 * @method \Dew\Acs\Result describeMessage(array $arguments = [])
 * @method \Http\Promise\Promise describeMessageAsync($arguments = [])
 * @method \Dew\Acs\Result pushVersionMessage(array $arguments = [])
 * @method \Http\Promise\Promise pushVersionMessageAsync($arguments = [])
 * @method \Dew\Acs\Result findVersionMessages(array $arguments = [])
 * @method \Http\Promise\Promise findVersionMessagesAsync($arguments = [])
 * @method \Dew\Acs\Result findVersionMessageSendRecords(array $arguments = [])
 * @method \Http\Promise\Promise findVersionMessageSendRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result createAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise createAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result updateAppBlackWhiteVersions(array $arguments = [])
 * @method \Http\Promise\Promise updateAppBlackWhiteVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result updateAppVersionReleaseNote(array $arguments = [])
 * @method \Http\Promise\Promise updateAppVersionReleaseNoteAsync($arguments = [])
 * @method \Dew\Acs\Result updateAppVersionStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateAppVersionStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updateAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise updateAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result updateAppVersionRemark(array $arguments = [])
 * @method \Http\Promise\Promise updateAppVersionRemarkAsync($arguments = [])
 * @method \Dew\Acs\Result getDeviceAppUpdateFunnelEvents(array $arguments = [])
 * @method \Http\Promise\Promise getDeviceAppUpdateFunnelEventsAsync($arguments = [])
 * @method \Dew\Acs\Result publishAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise publishAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result findAppVersions(array $arguments = [])
 * @method \Http\Promise\Promise findAppVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result addVersionBlackDevices(array $arguments = [])
 * @method \Http\Promise\Promise addVersionBlackDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result createOsVersion(array $arguments = [])
 * @method \Http\Promise\Promise createOsVersionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionBlackDevices(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionBlackDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionBlackDevicesById(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionBlackDevicesByIdAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionWhiteDevices(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionWhiteDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionWhiteDevicesById(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionWhiteDevicesByIdAsync($arguments = [])
 * @method \Dew\Acs\Result updateOsBlackWhiteVersions(array $arguments = [])
 * @method \Http\Promise\Promise updateOsBlackWhiteVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result updateOsVersion(array $arguments = [])
 * @method \Http\Promise\Promise updateOsVersionAsync($arguments = [])
 * @method \Dew\Acs\Result updateOsVersionReleaseNote(array $arguments = [])
 * @method \Http\Promise\Promise updateOsVersionReleaseNoteAsync($arguments = [])
 * @method \Dew\Acs\Result updateOsVersionRemark(array $arguments = [])
 * @method \Http\Promise\Promise updateOsVersionRemarkAsync($arguments = [])
 * @method \Dew\Acs\Result updateOsVersionStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateOsVersionStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeAppVersion(array $arguments = [])
 * @method \Http\Promise\Promise describeAppVersionAsync($arguments = [])
 * @method \Dew\Acs\Result describeOsVersion(array $arguments = [])
 * @method \Http\Promise\Promise describeOsVersionAsync($arguments = [])
 * @method \Dew\Acs\Result getDeviceSystemUpdateFunnelEvents(array $arguments = [])
 * @method \Http\Promise\Promise getDeviceSystemUpdateFunnelEventsAsync($arguments = [])
 * @method \Dew\Acs\Result delayPublishOsVersion(array $arguments = [])
 * @method \Http\Promise\Promise delayPublishOsVersionAsync($arguments = [])
 * @method \Dew\Acs\Result findOsVersions(array $arguments = [])
 * @method \Http\Promise\Promise findOsVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result findVersionWhiteDevices(array $arguments = [])
 * @method \Http\Promise\Promise findVersionWhiteDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result publishOsVersion(array $arguments = [])
 * @method \Http\Promise\Promise publishOsVersionAsync($arguments = [])
 * @method \Dew\Acs\Result createShadowSchema(array $arguments = [])
 * @method \Http\Promise\Promise createShadowSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result deleteShadowSchema(array $arguments = [])
 * @method \Http\Promise\Promise deleteShadowSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result updateShadowSchema(array $arguments = [])
 * @method \Http\Promise\Promise updateShadowSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result listShadowSchemaDeviceModels(array $arguments = [])
 * @method \Http\Promise\Promise listShadowSchemaDeviceModelsAsync($arguments = [])
 * @method \Dew\Acs\Result listShadowSchemas(array $arguments = [])
 * @method \Http\Promise\Promise listShadowSchemasAsync($arguments = [])
 * @method \Dew\Acs\Result describeDefaultSchema(array $arguments = [])
 * @method \Http\Promise\Promise describeDefaultSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceValiditySchema(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceValiditySchemaAsync($arguments = [])
 * @method \Dew\Acs\Result describeShadowSchema(array $arguments = [])
 * @method \Http\Promise\Promise describeShadowSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result addUploadedFunctionFileInfo(array $arguments = [])
 * @method \Http\Promise\Promise addUploadedFunctionFileInfoAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFunctionFile(array $arguments = [])
 * @method \Http\Promise\Promise deleteFunctionFileAsync($arguments = [])
 * @method \Dew\Acs\Result listDeployedFunctions(array $arguments = [])
 * @method \Http\Promise\Promise listDeployedFunctionsAsync($arguments = [])
 * @method \Dew\Acs\Result listFunctionExecuteLog(array $arguments = [])
 * @method \Http\Promise\Promise listFunctionExecuteLogAsync($arguments = [])
 * @method \Dew\Acs\Result listFunctionFiles(array $arguments = [])
 * @method \Http\Promise\Promise listFunctionFilesAsync($arguments = [])
 * @method \Dew\Acs\Result listFunctionFilesByProjectId(array $arguments = [])
 * @method \Http\Promise\Promise listFunctionFilesByProjectIdAsync($arguments = [])
 * @method \Dew\Acs\Result generateFunctionFileUploadMeta(array $arguments = [])
 * @method \Http\Promise\Promise generateFunctionFileUploadMetaAsync($arguments = [])
 * @method \Dew\Acs\Result invokeFunction(array $arguments = [])
 * @method \Http\Promise\Promise invokeFunctionAsync($arguments = [])
 * @method \Dew\Acs\Result deployFunctionFile(array $arguments = [])
 * @method \Http\Promise\Promise deployFunctionFileAsync($arguments = [])
 * @method \Dew\Acs\Result createTrigger(array $arguments = [])
 * @method \Http\Promise\Promise createTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTrigger(array $arguments = [])
 * @method \Http\Promise\Promise deleteTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result updateTrigger(array $arguments = [])
 * @method \Http\Promise\Promise updateTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result listTriggers(array $arguments = [])
 * @method \Http\Promise\Promise listTriggersAsync($arguments = [])
 * @method \Dew\Acs\Result addVersionGroupDevices(array $arguments = [])
 * @method \Http\Promise\Promise addVersionGroupDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result addVersionWhiteDevices(array $arguments = [])
 * @method \Http\Promise\Promise addVersionWhiteDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result addVersionWhiteDevicesByDeviceGroups(array $arguments = [])
 * @method \Http\Promise\Promise addVersionWhiteDevicesByDeviceGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createDeviceBrand(array $arguments = [])
 * @method \Http\Promise\Promise createDeviceBrandAsync($arguments = [])
 * @method \Dew\Acs\Result createDeviceModel(array $arguments = [])
 * @method \Http\Promise\Promise createDeviceModelAsync($arguments = [])
 * @method \Dew\Acs\Result createVersionDeviceGroup(array $arguments = [])
 * @method \Http\Promise\Promise createVersionDeviceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAllVersionGroupDevices(array $arguments = [])
 * @method \Http\Promise\Promise deleteAllVersionGroupDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDevice(array $arguments = [])
 * @method \Http\Promise\Promise deleteDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionAllBlackDevices(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionAllBlackDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionAllWhiteDevices(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionAllWhiteDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionDeviceGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionDeviceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionGroupDevice(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionGroupDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVersionGroupDeviceById(array $arguments = [])
 * @method \Http\Promise\Promise deleteVersionGroupDeviceByIdAsync($arguments = [])
 * @method \Dew\Acs\Result updateDeviceModel(array $arguments = [])
 * @method \Http\Promise\Promise updateDeviceModelAsync($arguments = [])
 * @method \Dew\Acs\Result updateVersionDeviceGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateVersionDeviceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateApiGatewayAppStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateApiGatewayAppStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updateProject(array $arguments = [])
 * @method \Http\Promise\Promise updateProjectAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceModel(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceModelAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceOnlineInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceOnlineInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceShadow(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceShadowAsync($arguments = [])
 * @method \Dew\Acs\Result describeVersionDeviceGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeVersionDeviceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result queryPrepublishPassedDeviceCount(array $arguments = [])
 * @method \Http\Promise\Promise queryPrepublishPassedDeviceCountAsync($arguments = [])
 * @method \Dew\Acs\Result listVersionDeviceGroups(array $arguments = [])
 * @method \Http\Promise\Promise listVersionDeviceGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result listAssistDevices(array $arguments = [])
 * @method \Http\Promise\Promise listAssistDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result listConnectLogs(array $arguments = [])
 * @method \Http\Promise\Promise listConnectLogsAsync($arguments = [])
 * @method \Dew\Acs\Result listDeviceModels(array $arguments = [])
 * @method \Http\Promise\Promise listDeviceModelsAsync($arguments = [])
 * @method \Dew\Acs\Result listDevices(array $arguments = [])
 * @method \Http\Promise\Promise listDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result listDeviceTypes(array $arguments = [])
 * @method \Http\Promise\Promise listDeviceTypesAsync($arguments = [])
 * @method \Dew\Acs\Result listMessageReceivers(array $arguments = [])
 * @method \Http\Promise\Promise listMessageReceiversAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceBrand(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceBrandAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceIdByOuterInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceIdByOuterInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeviceInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDeviceInfoAsync($arguments = [])
 * @method \Dew\Acs\Result connectAssistDevice(array $arguments = [])
 * @method \Http\Promise\Promise connectAssistDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result countActivatedOrNewRegistrationDevice(array $arguments = [])
 * @method \Http\Promise\Promise countActivatedOrNewRegistrationDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result countDeviceBrands(array $arguments = [])
 * @method \Http\Promise\Promise countDeviceBrandsAsync($arguments = [])
 * @method \Dew\Acs\Result countDeviceModels(array $arguments = [])
 * @method \Http\Promise\Promise countDeviceModelsAsync($arguments = [])
 * @method \Dew\Acs\Result countDevices(array $arguments = [])
 * @method \Http\Promise\Promise countDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result countYunIdInfo(array $arguments = [])
 * @method \Http\Promise\Promise countYunIdInfoAsync($arguments = [])
 * @method \Dew\Acs\Result diagnosisVersion(array $arguments = [])
 * @method \Http\Promise\Promise diagnosisVersionAsync($arguments = [])
 * @method \Dew\Acs\Result findPrepublishPassedDevices(array $arguments = [])
 * @method \Http\Promise\Promise findPrepublishPassedDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result findVersionBlackDevices(array $arguments = [])
 * @method \Http\Promise\Promise findVersionBlackDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result pushMessage(array $arguments = [])
 * @method \Http\Promise\Promise pushMessageAsync($arguments = [])
 * @method \Dew\Acs\Result findVersionDeviceGroups(array $arguments = [])
 * @method \Http\Promise\Promise findVersionDeviceGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result findVersionGroupDevices(array $arguments = [])
 * @method \Http\Promise\Promise findVersionGroupDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result createProjectApp(array $arguments = [])
 * @method \Http\Promise\Promise createProjectAppAsync($arguments = [])
 * @method \Dew\Acs\Result listProjectApps(array $arguments = [])
 * @method \Http\Promise\Promise listProjectAppsAsync($arguments = [])
 * @method \Dew\Acs\Result listProjects(array $arguments = [])
 * @method \Http\Promise\Promise listProjectsAsync($arguments = [])
 * @method \Dew\Acs\Result describeProjectAppSecurity(array $arguments = [])
 * @method \Http\Promise\Promise describeProjectAppSecurityAsync($arguments = [])
 * @method \Dew\Acs\Result createRpcService(array $arguments = [])
 * @method \Http\Promise\Promise createRpcServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteProjectApp(array $arguments = [])
 * @method \Http\Promise\Promise deleteProjectAppAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRpcService(array $arguments = [])
 * @method \Http\Promise\Promise deleteRpcServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAssistWSServerAddress(array $arguments = [])
 * @method \Http\Promise\Promise describeAssistWSServerAddressAsync($arguments = [])
 * @method \Dew\Acs\Result findPrepublishesByParentId(array $arguments = [])
 * @method \Http\Promise\Promise findPrepublishesByParentIdAsync($arguments = [])
 * @method \Dew\Acs\Result generateOssUploadMeta(array $arguments = [])
 * @method \Http\Promise\Promise generateOssUploadMetaAsync($arguments = [])
 * @method \Dew\Acs\Result generateSysAppDownloadInfo(array $arguments = [])
 * @method \Http\Promise\Promise generateSysAppDownloadInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getOssUploadMeta(array $arguments = [])
 * @method \Http\Promise\Promise getOssUploadMetaAsync($arguments = [])
 * @method \Dew\Acs\Result listApiGatewayApps(array $arguments = [])
 * @method \Http\Promise\Promise listApiGatewayAppsAsync($arguments = [])
 * @method \Dew\Acs\Result listApps(array $arguments = [])
 * @method \Http\Promise\Promise listAppsAsync($arguments = [])
 * @method \Dew\Acs\Result listClientPlugins(array $arguments = [])
 * @method \Http\Promise\Promise listClientPluginsAsync($arguments = [])
 * @method \Dew\Acs\Result listDeviceBrands(array $arguments = [])
 * @method \Http\Promise\Promise listDeviceBrandsAsync($arguments = [])
 * @method \Dew\Acs\Result listPreChecks(array $arguments = [])
 * @method \Http\Promise\Promise listPreChecksAsync($arguments = [])
 * @method \Dew\Acs\Result listRpcServices(array $arguments = [])
 * @method \Http\Promise\Promise listRpcServicesAsync($arguments = [])
 * @method \Dew\Acs\Result listSupportFeatures(array $arguments = [])
 * @method \Http\Promise\Promise listSupportFeaturesAsync($arguments = [])
 * @method \Dew\Acs\Result listUpstreamAppKeyRelations(array $arguments = [])
 * @method \Http\Promise\Promise listUpstreamAppKeyRelationsAsync($arguments = [])
 * @method \Dew\Acs\Result listUpstreamAppServers(array $arguments = [])
 * @method \Http\Promise\Promise listUpstreamAppServersAsync($arguments = [])
 * @method \Dew\Acs\Result updateVersionPrepublishActiveStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateVersionPrepublishActiveStatusAsync($arguments = [])
 */
final class IovccClient extends AcsClient
{
    //
}

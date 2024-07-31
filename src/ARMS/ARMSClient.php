<?php

declare(strict_types=1);

namespace Dew\Acs\ARMS;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result queryMetricByPage(array $arguments = [])
 * @method \Http\Promise\Promise queryMetricByPageAsync($arguments = [])
 * @method \Dew\Acs\Result getTraceApp(array $arguments = [])
 * @method \Http\Promise\Promise getTraceAppAsync($arguments = [])
 * @method \Dew\Acs\Result getAppJVMConfig(array $arguments = [])
 * @method \Http\Promise\Promise getAppJVMConfigAsync($arguments = [])
 * @method \Dew\Acs\Result queryAppTopology(array $arguments = [])
 * @method \Http\Promise\Promise queryAppTopologyAsync($arguments = [])
 * @method \Dew\Acs\Result getAppApiByPage(array $arguments = [])
 * @method \Http\Promise\Promise getAppApiByPageAsync($arguments = [])
 * @method \Dew\Acs\Result getTrace(array $arguments = [])
 * @method \Http\Promise\Promise getTraceAsync($arguments = [])
 * @method \Dew\Acs\Result getStack(array $arguments = [])
 * @method \Http\Promise\Promise getStackAsync($arguments = [])
 * @method \Dew\Acs\Result getMultipleTrace(array $arguments = [])
 * @method \Http\Promise\Promise getMultipleTraceAsync($arguments = [])
 * @method \Dew\Acs\Result configApp(array $arguments = [])
 * @method \Http\Promise\Promise configAppAsync($arguments = [])
 * @method \Dew\Acs\Result saveTraceAppConfig(array $arguments = [])
 * @method \Http\Promise\Promise saveTraceAppConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getTraceAppConfig(array $arguments = [])
 * @method \Http\Promise\Promise getTraceAppConfigAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTraceApp(array $arguments = [])
 * @method \Http\Promise\Promise deleteTraceAppAsync($arguments = [])
 * @method \Dew\Acs\Result queryReleaseMetric(array $arguments = [])
 * @method \Http\Promise\Promise queryReleaseMetricAsync($arguments = [])
 * @method \Dew\Acs\Result listTraceApps(array $arguments = [])
 * @method \Http\Promise\Promise listTraceAppsAsync($arguments = [])
 * @method \Dew\Acs\Result searchTraceAppByName(array $arguments = [])
 * @method \Http\Promise\Promise searchTraceAppByNameAsync($arguments = [])
 * @method \Dew\Acs\Result searchTraceAppByPage(array $arguments = [])
 * @method \Http\Promise\Promise searchTraceAppByPageAsync($arguments = [])
 * @method \Dew\Acs\Result searchTraces(array $arguments = [])
 * @method \Http\Promise\Promise searchTracesAsync($arguments = [])
 * @method \Dew\Acs\Result searchTracesByPage(array $arguments = [])
 * @method \Http\Promise\Promise searchTracesByPageAsync($arguments = [])
 * @method \Dew\Acs\Result getAgentDownloadUrl(array $arguments = [])
 * @method \Http\Promise\Promise getAgentDownloadUrlAsync($arguments = [])
 * @method \Dew\Acs\Result describeTraceLicenseKey(array $arguments = [])
 * @method \Http\Promise\Promise describeTraceLicenseKeyAsync($arguments = [])
 * @method \Dew\Acs\Result listInsightsEvents(array $arguments = [])
 * @method \Http\Promise\Promise listInsightsEventsAsync($arguments = [])
 * @method \Dew\Acs\Result queryAppMetadata(array $arguments = [])
 * @method \Http\Promise\Promise queryAppMetadataAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAppList(array $arguments = [])
 * @method \Http\Promise\Promise deleteAppListAsync($arguments = [])
 * @method \Dew\Acs\Result upload(array $arguments = [])
 * @method \Http\Promise\Promise uploadAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSourceMap(array $arguments = [])
 * @method \Http\Promise\Promise deleteSourceMapAsync($arguments = [])
 * @method \Dew\Acs\Result getSourceMapInfo(array $arguments = [])
 * @method \Http\Promise\Promise getSourceMapInfoAsync($arguments = [])
 * @method \Dew\Acs\Result createRetcodeApp(array $arguments = [])
 * @method \Http\Promise\Promise createRetcodeAppAsync($arguments = [])
 * @method \Dew\Acs\Result getRetcodeShareUrl(array $arguments = [])
 * @method \Http\Promise\Promise getRetcodeShareUrlAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRetcodeApp(array $arguments = [])
 * @method \Http\Promise\Promise deleteRetcodeAppAsync($arguments = [])
 * @method \Dew\Acs\Result setRetcodeShareStatus(array $arguments = [])
 * @method \Http\Promise\Promise setRetcodeShareStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listRetcodeApps(array $arguments = [])
 * @method \Http\Promise\Promise listRetcodeAppsAsync($arguments = [])
 * @method \Dew\Acs\Result searchRetcodeAppByPage(array $arguments = [])
 * @method \Http\Promise\Promise searchRetcodeAppByPageAsync($arguments = [])
 * @method \Dew\Acs\Result getRetcodeLogstore(array $arguments = [])
 * @method \Http\Promise\Promise getRetcodeLogstoreAsync($arguments = [])
 * @method \Dew\Acs\Result getRetcodeDataByQuery(array $arguments = [])
 * @method \Http\Promise\Promise getRetcodeDataByQueryAsync($arguments = [])
 * @method \Dew\Acs\Result getRetcodeAppByPid(array $arguments = [])
 * @method \Http\Promise\Promise getRetcodeAppByPidAsync($arguments = [])
 * @method \Dew\Acs\Result updateRumFileStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateRumFileStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getRumUploadFiles(array $arguments = [])
 * @method \Http\Promise\Promise getRumUploadFilesAsync($arguments = [])
 * @method \Dew\Acs\Result getRumDataForPage(array $arguments = [])
 * @method \Http\Promise\Promise getRumDataForPageAsync($arguments = [])
 * @method \Dew\Acs\Result createRumUploadFileUrl(array $arguments = [])
 * @method \Http\Promise\Promise createRumUploadFileUrlAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRumUploadFile(array $arguments = [])
 * @method \Http\Promise\Promise deleteRumUploadFileAsync($arguments = [])
 * @method \Dew\Acs\Result getRumAppInfo(array $arguments = [])
 * @method \Http\Promise\Promise getRumAppInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getRumApps(array $arguments = [])
 * @method \Http\Promise\Promise getRumAppsAsync($arguments = [])
 * @method \Dew\Acs\Result createRumApp(array $arguments = [])
 * @method \Http\Promise\Promise createRumAppAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRumApp(array $arguments = [])
 * @method \Http\Promise\Promise deleteRumAppAsync($arguments = [])
 * @method \Dew\Acs\Result updateRumApp(array $arguments = [])
 * @method \Http\Promise\Promise updateRumAppAsync($arguments = [])
 * @method \Dew\Acs\Result getRumExceptionStack(array $arguments = [])
 * @method \Http\Promise\Promise getRumExceptionStackAsync($arguments = [])
 * @method \Dew\Acs\Result addTagToFlinkCluster(array $arguments = [])
 * @method \Http\Promise\Promise addTagToFlinkClusterAsync($arguments = [])
 * @method \Dew\Acs\Result createEnvironment(array $arguments = [])
 * @method \Http\Promise\Promise createEnvironmentAsync($arguments = [])
 * @method \Dew\Acs\Result initEnvironment(array $arguments = [])
 * @method \Http\Promise\Promise initEnvironmentAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnvironment(array $arguments = [])
 * @method \Http\Promise\Promise describeEnvironmentAsync($arguments = [])
 * @method \Dew\Acs\Result updateEnvironment(array $arguments = [])
 * @method \Http\Promise\Promise updateEnvironmentAsync($arguments = [])
 * @method \Dew\Acs\Result listEnvironments(array $arguments = [])
 * @method \Http\Promise\Promise listEnvironmentsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEnvironment(array $arguments = [])
 * @method \Http\Promise\Promise deleteEnvironmentAsync($arguments = [])
 * @method \Dew\Acs\Result installEnvironmentFeature(array $arguments = [])
 * @method \Http\Promise\Promise installEnvironmentFeatureAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnvironmentFeature(array $arguments = [])
 * @method \Http\Promise\Promise describeEnvironmentFeatureAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeEnvironmentFeature(array $arguments = [])
 * @method \Http\Promise\Promise upgradeEnvironmentFeatureAsync($arguments = [])
 * @method \Dew\Acs\Result restartEnvironmentFeature(array $arguments = [])
 * @method \Http\Promise\Promise restartEnvironmentFeatureAsync($arguments = [])
 * @method \Dew\Acs\Result listEnvironmentFeatures(array $arguments = [])
 * @method \Http\Promise\Promise listEnvironmentFeaturesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEnvironmentFeature(array $arguments = [])
 * @method \Http\Promise\Promise deleteEnvironmentFeatureAsync($arguments = [])
 * @method \Dew\Acs\Result createEnvCustomJob(array $arguments = [])
 * @method \Http\Promise\Promise createEnvCustomJobAsync($arguments = [])
 * @method \Dew\Acs\Result updateEnvCustomJob(array $arguments = [])
 * @method \Http\Promise\Promise updateEnvCustomJobAsync($arguments = [])
 * @method \Dew\Acs\Result listEnvCustomJobs(array $arguments = [])
 * @method \Http\Promise\Promise listEnvCustomJobsAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnvCustomJob(array $arguments = [])
 * @method \Http\Promise\Promise describeEnvCustomJobAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEnvCustomJob(array $arguments = [])
 * @method \Http\Promise\Promise deleteEnvCustomJobAsync($arguments = [])
 * @method \Dew\Acs\Result createEnvPodMonitor(array $arguments = [])
 * @method \Http\Promise\Promise createEnvPodMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnvPodMonitor(array $arguments = [])
 * @method \Http\Promise\Promise describeEnvPodMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result listEnvPodMonitors(array $arguments = [])
 * @method \Http\Promise\Promise listEnvPodMonitorsAsync($arguments = [])
 * @method \Dew\Acs\Result updateEnvPodMonitor(array $arguments = [])
 * @method \Http\Promise\Promise updateEnvPodMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEnvPodMonitor(array $arguments = [])
 * @method \Http\Promise\Promise deleteEnvPodMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result createEnvServiceMonitor(array $arguments = [])
 * @method \Http\Promise\Promise createEnvServiceMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnvServiceMonitor(array $arguments = [])
 * @method \Http\Promise\Promise describeEnvServiceMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result listEnvServiceMonitors(array $arguments = [])
 * @method \Http\Promise\Promise listEnvServiceMonitorsAsync($arguments = [])
 * @method \Dew\Acs\Result updateEnvServiceMonitor(array $arguments = [])
 * @method \Http\Promise\Promise updateEnvServiceMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEnvServiceMonitor(array $arguments = [])
 * @method \Http\Promise\Promise deleteEnvServiceMonitorAsync($arguments = [])
 * @method \Dew\Acs\Result installAddon(array $arguments = [])
 * @method \Http\Promise\Promise installAddonAsync($arguments = [])
 * @method \Dew\Acs\Result describeAddonRelease(array $arguments = [])
 * @method \Http\Promise\Promise describeAddonReleaseAsync($arguments = [])
 * @method \Dew\Acs\Result listAddons(array $arguments = [])
 * @method \Http\Promise\Promise listAddonsAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeAddonRelease(array $arguments = [])
 * @method \Http\Promise\Promise upgradeAddonReleaseAsync($arguments = [])
 * @method \Dew\Acs\Result listAddonReleases(array $arguments = [])
 * @method \Http\Promise\Promise listAddonReleasesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAddonRelease(array $arguments = [])
 * @method \Http\Promise\Promise deleteAddonReleaseAsync($arguments = [])
 * @method \Dew\Acs\Result listEnvironmentDashboards(array $arguments = [])
 * @method \Http\Promise\Promise listEnvironmentDashboardsAsync($arguments = [])
 * @method \Dew\Acs\Result enableMetric(array $arguments = [])
 * @method \Http\Promise\Promise enableMetricAsync($arguments = [])
 * @method \Dew\Acs\Result updateMetricDrop(array $arguments = [])
 * @method \Http\Promise\Promise updateMetricDropAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrometheusMonitoringStatus(array $arguments = [])
 * @method \Http\Promise\Promise updatePrometheusMonitoringStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrometheusMonitoring(array $arguments = [])
 * @method \Http\Promise\Promise updatePrometheusMonitoringAsync($arguments = [])
 * @method \Dew\Acs\Result listPrometheusMonitoring(array $arguments = [])
 * @method \Http\Promise\Promise listPrometheusMonitoringAsync($arguments = [])
 * @method \Dew\Acs\Result getPrometheusMonitoring(array $arguments = [])
 * @method \Http\Promise\Promise getPrometheusMonitoringAsync($arguments = [])
 * @method \Dew\Acs\Result deletePrometheusMonitoring(array $arguments = [])
 * @method \Http\Promise\Promise deletePrometheusMonitoringAsync($arguments = [])
 * @method \Dew\Acs\Result createPrometheusMonitoring(array $arguments = [])
 * @method \Http\Promise\Promise createPrometheusMonitoringAsync($arguments = [])
 * @method \Dew\Acs\Result appendInstancesToPrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise appendInstancesToPrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result addPrometheusInstance(array $arguments = [])
 * @method \Http\Promise\Promise addPrometheusInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result addPrometheusGlobalViewByAliClusterIds(array $arguments = [])
 * @method \Http\Promise\Promise addPrometheusGlobalViewByAliClusterIdsAsync($arguments = [])
 * @method \Dew\Acs\Result addPrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise addPrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result addAliClusterIdsToPrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise addAliClusterIdsToPrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result addRecordingRule(array $arguments = [])
 * @method \Http\Promise\Promise addRecordingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result syncRecordingRules(array $arguments = [])
 * @method \Http\Promise\Promise syncRecordingRulesAsync($arguments = [])
 * @method \Dew\Acs\Result addIntegration(array $arguments = []) {@deprecated 2019-08-08}
 * @method \Http\Promise\Promise addIntegrationAsync($arguments = []) {@deprecated 2019-08-08}
 * @method \Dew\Acs\Result getIntegrationState(array $arguments = []) {@deprecated 2019-08-08}
 * @method \Http\Promise\Promise getIntegrationStateAsync($arguments = []) {@deprecated 2019-08-08}
 * @method \Dew\Acs\Result deleteIntegration(array $arguments = []) {@deprecated 2019-08-08}
 * @method \Http\Promise\Promise deleteIntegrationAsync($arguments = []) {@deprecated 2019-08-08}
 * @method \Dew\Acs\Result addGrafana(array $arguments = [])
 * @method \Http\Promise\Promise addGrafanaAsync($arguments = [])
 * @method \Dew\Acs\Result installCmsExporter(array $arguments = []) {@deprecated 2019-08-08}
 * @method \Http\Promise\Promise installCmsExporterAsync($arguments = []) {@deprecated 2019-08-08}
 * @method \Dew\Acs\Result openVCluster(array $arguments = [])
 * @method \Http\Promise\Promise openVClusterAsync($arguments = [])
 * @method \Dew\Acs\Result deletePrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise deletePrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result removeAliClusterIdsFromPrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise removeAliClusterIdsFromPrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result removeSourcesFromPrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise removeSourcesFromPrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCmsExporter(array $arguments = []) {@deprecated 2019-08-08}
 * @method \Http\Promise\Promise deleteCmsExporterAsync($arguments = []) {@deprecated 2019-08-08}
 * @method \Dew\Acs\Result delAuthToken(array $arguments = [])
 * @method \Http\Promise\Promise delAuthTokenAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGrafanaResource(array $arguments = [])
 * @method \Http\Promise\Promise deleteGrafanaResourceAsync($arguments = [])
 * @method \Dew\Acs\Result uninstallPromCluster(array $arguments = [])
 * @method \Http\Promise\Promise uninstallPromClusterAsync($arguments = [])
 * @method \Dew\Acs\Result manageRecordingRule(array $arguments = [])
 * @method \Http\Promise\Promise manageRecordingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result queryPromInstallStatus(array $arguments = [])
 * @method \Http\Promise\Promise queryPromInstallStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listPrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise listPrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result getPrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise getPrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result manageGetRecordingRule(array $arguments = [])
 * @method \Http\Promise\Promise manageGetRecordingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result checkServiceStatus(array $arguments = [])
 * @method \Http\Promise\Promise checkServiceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getPrometheusApiToken(array $arguments = [])
 * @method \Http\Promise\Promise getPrometheusApiTokenAsync($arguments = [])
 * @method \Dew\Acs\Result getExploreUrl(array $arguments = [])
 * @method \Http\Promise\Promise getExploreUrlAsync($arguments = [])
 * @method \Dew\Acs\Result listDashboards(array $arguments = [])
 * @method \Http\Promise\Promise listDashboardsAsync($arguments = [])
 * @method \Dew\Acs\Result listClusterFromGrafana(array $arguments = [])
 * @method \Http\Promise\Promise listClusterFromGrafanaAsync($arguments = [])
 * @method \Dew\Acs\Result getRecordingRule(array $arguments = [])
 * @method \Http\Promise\Promise getRecordingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listCmsInstances(array $arguments = []) {@deprecated 2019-08-08}
 * @method \Http\Promise\Promise listCmsInstancesAsync($arguments = []) {@deprecated 2019-08-08}
 * @method \Dew\Acs\Result listDashboardsByName(array $arguments = [])
 * @method \Http\Promise\Promise listDashboardsByNameAsync($arguments = [])
 * @method \Dew\Acs\Result getAuthToken(array $arguments = [])
 * @method \Http\Promise\Promise getAuthTokenAsync($arguments = [])
 * @method \Dew\Acs\Result getClusterAllUrl(array $arguments = [])
 * @method \Http\Promise\Promise getClusterAllUrlAsync($arguments = [])
 * @method \Dew\Acs\Result getCloudClusterAllUrl(array $arguments = []) {@deprecated 2019-08-08}
 * @method \Http\Promise\Promise getCloudClusterAllUrlAsync($arguments = []) {@deprecated 2019-08-08}
 * @method \Dew\Acs\Result listPrometheusInstances(array $arguments = [])
 * @method \Http\Promise\Promise listPrometheusInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result addPrometheusRemoteWrite(array $arguments = [])
 * @method \Http\Promise\Promise addPrometheusRemoteWriteAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrometheusRemoteWrite(array $arguments = [])
 * @method \Http\Promise\Promise updatePrometheusRemoteWriteAsync($arguments = [])
 * @method \Dew\Acs\Result listPrometheusRemoteWrites(array $arguments = [])
 * @method \Http\Promise\Promise listPrometheusRemoteWritesAsync($arguments = [])
 * @method \Dew\Acs\Result getPrometheusRemoteWrite(array $arguments = [])
 * @method \Http\Promise\Promise getPrometheusRemoteWriteAsync($arguments = [])
 * @method \Dew\Acs\Result deletePrometheusRemoteWrite(array $arguments = [])
 * @method \Http\Promise\Promise deletePrometheusRemoteWriteAsync($arguments = [])
 * @method \Dew\Acs\Result installManagedPrometheus(array $arguments = [])
 * @method \Http\Promise\Promise installManagedPrometheusAsync($arguments = [])
 * @method \Dew\Acs\Result uninstallManagedPrometheus(array $arguments = [])
 * @method \Http\Promise\Promise uninstallManagedPrometheusAsync($arguments = [])
 * @method \Dew\Acs\Result getManagedPrometheusStatus(array $arguments = [])
 * @method \Http\Promise\Promise getManagedPrometheusStatusAsync($arguments = [])
 * @method \Dew\Acs\Result bindPrometheusGrafanaInstance(array $arguments = [])
 * @method \Http\Promise\Promise bindPrometheusGrafanaInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result addPrometheusIntegration(array $arguments = [])
 * @method \Http\Promise\Promise addPrometheusIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrometheusIntegration(array $arguments = [])
 * @method \Http\Promise\Promise updatePrometheusIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result deletePrometheusIntegration(array $arguments = [])
 * @method \Http\Promise\Promise deletePrometheusIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result getPrometheusIntegration(array $arguments = [])
 * @method \Http\Promise\Promise getPrometheusIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result listPrometheusIntegration(array $arguments = [])
 * @method \Http\Promise\Promise listPrometheusIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result getPrometheusInstance(array $arguments = [])
 * @method \Http\Promise\Promise getPrometheusInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listPrometheusInstanceByTagAndResourceGroupId(array $arguments = [])
 * @method \Http\Promise\Promise listPrometheusInstanceByTagAndResourceGroupIdAsync($arguments = [])
 * @method \Dew\Acs\Result createPrometheusInstance(array $arguments = [])
 * @method \Http\Promise\Promise createPrometheusInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrometheusInstance(array $arguments = [])
 * @method \Http\Promise\Promise updatePrometheusInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrometheusGlobalView(array $arguments = [])
 * @method \Http\Promise\Promise updatePrometheusGlobalViewAsync($arguments = [])
 * @method \Dew\Acs\Result listGrafanaWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise listGrafanaWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result getGrafanaWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise getGrafanaWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result createGrafanaWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise createGrafanaWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result updateGrafanaWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise updateGrafanaWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result updateGrafanaWorkspaceVersion(array $arguments = [])
 * @method \Http\Promise\Promise updateGrafanaWorkspaceVersionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGrafanaWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise deleteGrafanaWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result applyScenario(array $arguments = [])
 * @method \Http\Promise\Promise applyScenarioAsync($arguments = [])
 * @method \Dew\Acs\Result deleteScenario(array $arguments = [])
 * @method \Http\Promise\Promise deleteScenarioAsync($arguments = [])
 * @method \Dew\Acs\Result listScenario(array $arguments = [])
 * @method \Http\Promise\Promise listScenarioAsync($arguments = [])
 * @method \Dew\Acs\Result createTimingSyntheticTask(array $arguments = [])
 * @method \Http\Promise\Promise createTimingSyntheticTaskAsync($arguments = [])
 * @method \Dew\Acs\Result updateTimingSyntheticTask(array $arguments = [])
 * @method \Http\Promise\Promise updateTimingSyntheticTaskAsync($arguments = [])
 * @method \Dew\Acs\Result stopTimingSyntheticTask(array $arguments = [])
 * @method \Http\Promise\Promise stopTimingSyntheticTaskAsync($arguments = [])
 * @method \Dew\Acs\Result startTimingSyntheticTask(array $arguments = [])
 * @method \Http\Promise\Promise startTimingSyntheticTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTimingSyntheticTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteTimingSyntheticTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getSyntheticMonitors(array $arguments = [])
 * @method \Http\Promise\Promise getSyntheticMonitorsAsync($arguments = [])
 * @method \Dew\Acs\Result listTimingSyntheticTasks(array $arguments = [])
 * @method \Http\Promise\Promise listTimingSyntheticTasksAsync($arguments = [])
 * @method \Dew\Acs\Result getTimingSyntheticTask(array $arguments = [])
 * @method \Http\Promise\Promise getTimingSyntheticTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listSyntheticDetail(array $arguments = [])
 * @method \Http\Promise\Promise listSyntheticDetailAsync($arguments = [])
 * @method \Dew\Acs\Result createSyntheticTask(array $arguments = [])
 * @method \Http\Promise\Promise createSyntheticTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getSyntheticTaskMonitors(array $arguments = [])
 * @method \Http\Promise\Promise getSyntheticTaskMonitorsAsync($arguments = [])
 * @method \Dew\Acs\Result switchSyntheticTaskStatus(array $arguments = [])
 * @method \Http\Promise\Promise switchSyntheticTaskStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getSyntheticTaskList(array $arguments = [])
 * @method \Http\Promise\Promise getSyntheticTaskListAsync($arguments = [])
 * @method \Dew\Acs\Result getSyntheticTaskDetail(array $arguments = [])
 * @method \Http\Promise\Promise getSyntheticTaskDetailAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSyntheticTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteSyntheticTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createIntegration(array $arguments = [])
 * @method \Http\Promise\Promise createIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result updateIntegration(array $arguments = [])
 * @method \Http\Promise\Promise updateIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIntegrations(array $arguments = [])
 * @method \Http\Promise\Promise deleteIntegrationsAsync($arguments = [])
 * @method \Dew\Acs\Result listIntegration(array $arguments = [])
 * @method \Http\Promise\Promise listIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result createOrUpdateAlertRule(array $arguments = [])
 * @method \Http\Promise\Promise createOrUpdateAlertRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlertRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteAlertRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listAlertEvents(array $arguments = [])
 * @method \Http\Promise\Promise listAlertEventsAsync($arguments = [])
 * @method \Dew\Acs\Result getAlertRules(array $arguments = [])
 * @method \Http\Promise\Promise getAlertRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createOrUpdateContact(array $arguments = [])
 * @method \Http\Promise\Promise createOrUpdateContactAsync($arguments = [])
 * @method \Dew\Acs\Result sendTTSVerifyLink(array $arguments = [])
 * @method \Http\Promise\Promise sendTTSVerifyLinkAsync($arguments = [])
 * @method \Dew\Acs\Result deleteContact(array $arguments = [])
 * @method \Http\Promise\Promise deleteContactAsync($arguments = [])
 * @method \Dew\Acs\Result describeContacts(array $arguments = [])
 * @method \Http\Promise\Promise describeContactsAsync($arguments = [])
 * @method \Dew\Acs\Result createOrUpdateContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise createOrUpdateContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeContactGroups(array $arguments = [])
 * @method \Http\Promise\Promise describeContactGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createOrUpdateIMRobot(array $arguments = [])
 * @method \Http\Promise\Promise createOrUpdateIMRobotAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIMRobot(array $arguments = [])
 * @method \Http\Promise\Promise deleteIMRobotAsync($arguments = [])
 * @method \Dew\Acs\Result describeIMRobots(array $arguments = [])
 * @method \Http\Promise\Promise describeIMRobotsAsync($arguments = [])
 * @method \Dew\Acs\Result createOrUpdateWebhookContact(array $arguments = [])
 * @method \Http\Promise\Promise createOrUpdateWebhookContactAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWebhookContact(array $arguments = [])
 * @method \Http\Promise\Promise deleteWebhookContactAsync($arguments = [])
 * @method \Dew\Acs\Result describeWebhookContacts(array $arguments = [])
 * @method \Http\Promise\Promise describeWebhookContactsAsync($arguments = [])
 * @method \Dew\Acs\Result createOrUpdateEventBridgeIntegration(array $arguments = [])
 * @method \Http\Promise\Promise createOrUpdateEventBridgeIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEventBridgeIntegration(array $arguments = [])
 * @method \Http\Promise\Promise deleteEventBridgeIntegrationAsync($arguments = [])
 * @method \Dew\Acs\Result listEventBridgeIntegrations(array $arguments = [])
 * @method \Http\Promise\Promise listEventBridgeIntegrationsAsync($arguments = [])
 * @method \Dew\Acs\Result createOrUpdateNotificationPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createOrUpdateNotificationPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNotificationPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteNotificationPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listNotificationPolicies(array $arguments = [])
 * @method \Http\Promise\Promise listNotificationPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result createOrUpdateSilencePolicy(array $arguments = [])
 * @method \Http\Promise\Promise createOrUpdateSilencePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSilencePolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteSilencePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listEscalationPolicies(array $arguments = [])
 * @method \Http\Promise\Promise listEscalationPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result listOnCallSchedules(array $arguments = [])
 * @method \Http\Promise\Promise listOnCallSchedulesAsync($arguments = [])
 * @method \Dew\Acs\Result getOnCallSchedulesDetail(array $arguments = [])
 * @method \Http\Promise\Promise getOnCallSchedulesDetailAsync($arguments = [])
 * @method \Dew\Acs\Result listSilencePolicies(array $arguments = [])
 * @method \Http\Promise\Promise listSilencePoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result listAlerts(array $arguments = [])
 * @method \Http\Promise\Promise listAlertsAsync($arguments = [])
 * @method \Dew\Acs\Result blockAlarmNotification(array $arguments = [])
 * @method \Http\Promise\Promise blockAlarmNotificationAsync($arguments = [])
 * @method \Dew\Acs\Result changeAlarmSeverity(array $arguments = [])
 * @method \Http\Promise\Promise changeAlarmSeverityAsync($arguments = [])
 * @method \Dew\Acs\Result closeAlarm(array $arguments = [])
 * @method \Http\Promise\Promise closeAlarmAsync($arguments = [])
 * @method \Dew\Acs\Result claimAlarm(array $arguments = [])
 * @method \Http\Promise\Promise claimAlarmAsync($arguments = [])
 * @method \Dew\Acs\Result createPrometheusAlertRule(array $arguments = [])
 * @method \Http\Promise\Promise createPrometheusAlertRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deletePrometheusAlertRule(array $arguments = [])
 * @method \Http\Promise\Promise deletePrometheusAlertRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrometheusAlertRule(array $arguments = [])
 * @method \Http\Promise\Promise updatePrometheusAlertRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describePrometheusAlertRule(array $arguments = [])
 * @method \Http\Promise\Promise describePrometheusAlertRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listPrometheusAlertRules(array $arguments = [])
 * @method \Http\Promise\Promise listPrometheusAlertRulesAsync($arguments = [])
 * @method \Dew\Acs\Result listPrometheusAlertTemplates(array $arguments = [])
 * @method \Http\Promise\Promise listPrometheusAlertTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result createAlertContact(array $arguments = [])
 * @method \Http\Promise\Promise createAlertContactAsync($arguments = [])
 * @method \Dew\Acs\Result createWebhook(array $arguments = [])
 * @method \Http\Promise\Promise createWebhookAsync($arguments = [])
 * @method \Dew\Acs\Result createAlertContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise createAlertContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createDispatchRule(array $arguments = [])
 * @method \Http\Promise\Promise createDispatchRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listActivatedAlerts(array $arguments = [])
 * @method \Http\Promise\Promise listActivatedAlertsAsync($arguments = [])
 * @method \Dew\Acs\Result importAppAlertRules(array $arguments = [])
 * @method \Http\Promise\Promise importAppAlertRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlertRules(array $arguments = [])
 * @method \Http\Promise\Promise deleteAlertRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlertContact(array $arguments = [])
 * @method \Http\Promise\Promise deleteAlertContactAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlertContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteAlertContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDispatchRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteDispatchRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateWebhook(array $arguments = [])
 * @method \Http\Promise\Promise updateWebhookAsync($arguments = [])
 * @method \Dew\Acs\Result updateAlertContact(array $arguments = [])
 * @method \Http\Promise\Promise updateAlertContactAsync($arguments = [])
 * @method \Dew\Acs\Result updateAlertContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateAlertContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateAlertRule(array $arguments = [])
 * @method \Http\Promise\Promise updateAlertRuleAsync($arguments = [])
 * @method \Dew\Acs\Result startAlert(array $arguments = [])
 * @method \Http\Promise\Promise startAlertAsync($arguments = [])
 * @method \Dew\Acs\Result stopAlert(array $arguments = [])
 * @method \Http\Promise\Promise stopAlertAsync($arguments = [])
 * @method \Dew\Acs\Result updateDispatchRule(array $arguments = [])
 * @method \Http\Promise\Promise updateDispatchRuleAsync($arguments = [])
 * @method \Dew\Acs\Result searchAlertRules(array $arguments = [])
 * @method \Http\Promise\Promise searchAlertRulesAsync($arguments = [])
 * @method \Dew\Acs\Result searchAlertContact(array $arguments = [])
 * @method \Http\Promise\Promise searchAlertContactAsync($arguments = [])
 * @method \Dew\Acs\Result searchAlertContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise searchAlertContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result searchAlertHistories(array $arguments = [])
 * @method \Http\Promise\Promise searchAlertHistoriesAsync($arguments = [])
 * @method \Dew\Acs\Result searchEvents(array $arguments = [])
 * @method \Http\Promise\Promise searchEventsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDispatchRule(array $arguments = [])
 * @method \Http\Promise\Promise describeDispatchRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listDispatchRule(array $arguments = [])
 * @method \Http\Promise\Promise listDispatchRuleAsync($arguments = [])
 * @method \Dew\Acs\Result openArmsServiceSecondVersion(array $arguments = [])
 * @method \Http\Promise\Promise openArmsServiceSecondVersionAsync($arguments = [])
 * @method \Dew\Acs\Result openXtraceDefaultSLR(array $arguments = [])
 * @method \Http\Promise\Promise openXtraceDefaultSLRAsync($arguments = [])
 * @method \Dew\Acs\Result openArmsDefaultSLR(array $arguments = [])
 * @method \Http\Promise\Promise openArmsDefaultSLRAsync($arguments = [])
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result getCommercialStatus(array $arguments = [])
 * @method \Http\Promise\Promise getCommercialStatusAsync($arguments = [])
 * @method \Dew\Acs\Result checkCommercialStatus(array $arguments = [])
 * @method \Http\Promise\Promise checkCommercialStatusAsync($arguments = [])
 * @method \Dew\Acs\Result queryCommercialUsage(array $arguments = [])
 * @method \Http\Promise\Promise queryCommercialUsageAsync($arguments = [])
 */
final class ARMSClient extends AcsClient
{
    //
}

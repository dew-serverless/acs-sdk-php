<?php

declare(strict_types=1);

namespace Dew\Acs\Gpdb;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result initVectorDatabase(array $arguments = [])
 * @method \Http\Promise\Promise initVectorDatabaseAsync($arguments = [])
 * @method \Dew\Acs\Result createNamespace(array $arguments = [])
 * @method \Http\Promise\Promise createNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result describeNamespace(array $arguments = [])
 * @method \Http\Promise\Promise describeNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result listNamespaces(array $arguments = [])
 * @method \Http\Promise\Promise listNamespacesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteNamespace(array $arguments = [])
 * @method \Http\Promise\Promise deleteNamespaceAsync($arguments = [])
 * @method \Dew\Acs\Result createDocumentCollection(array $arguments = [])
 * @method \Http\Promise\Promise createDocumentCollectionAsync($arguments = [])
 * @method \Dew\Acs\Result listDocumentCollections(array $arguments = [])
 * @method \Http\Promise\Promise listDocumentCollectionsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDocumentCollection(array $arguments = [])
 * @method \Http\Promise\Promise deleteDocumentCollectionAsync($arguments = [])
 * @method \Dew\Acs\Result upsertChunks(array $arguments = [])
 * @method \Http\Promise\Promise upsertChunksAsync($arguments = [])
 * @method \Dew\Acs\Result uploadDocumentAsync(array $arguments = [])
 * @method \Http\Promise\Promise uploadDocumentAsyncAsync($arguments = [])
 * @method \Dew\Acs\Result getUploadDocumentJob(array $arguments = [])
 * @method \Http\Promise\Promise getUploadDocumentJobAsync($arguments = [])
 * @method \Dew\Acs\Result cancelUploadDocumentJob(array $arguments = [])
 * @method \Http\Promise\Promise cancelUploadDocumentJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryContent(array $arguments = [])
 * @method \Http\Promise\Promise queryContentAsync($arguments = [])
 * @method \Dew\Acs\Result listDocuments(array $arguments = [])
 * @method \Http\Promise\Promise listDocumentsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDocument(array $arguments = [])
 * @method \Http\Promise\Promise describeDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDocument(array $arguments = [])
 * @method \Http\Promise\Promise deleteDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result createCollection(array $arguments = [])
 * @method \Http\Promise\Promise createCollectionAsync($arguments = [])
 * @method \Dew\Acs\Result describeCollection(array $arguments = [])
 * @method \Http\Promise\Promise describeCollectionAsync($arguments = [])
 * @method \Dew\Acs\Result listCollections(array $arguments = [])
 * @method \Http\Promise\Promise listCollectionsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCollection(array $arguments = [])
 * @method \Http\Promise\Promise deleteCollectionAsync($arguments = [])
 * @method \Dew\Acs\Result grantCollection(array $arguments = [])
 * @method \Http\Promise\Promise grantCollectionAsync($arguments = [])
 * @method \Dew\Acs\Result upsertCollectionData(array $arguments = [])
 * @method \Http\Promise\Promise upsertCollectionDataAsync($arguments = [])
 * @method \Dew\Acs\Result upsertCollectionDataAsync(array $arguments = [])
 * @method \Http\Promise\Promise upsertCollectionDataAsyncAsync($arguments = [])
 * @method \Dew\Acs\Result getUpsertCollectionDataJob(array $arguments = [])
 * @method \Http\Promise\Promise getUpsertCollectionDataJobAsync($arguments = [])
 * @method \Dew\Acs\Result cancelUpsertCollectionDataJob(array $arguments = [])
 * @method \Http\Promise\Promise cancelUpsertCollectionDataJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryCollectionData(array $arguments = [])
 * @method \Http\Promise\Promise queryCollectionDataAsync($arguments = [])
 * @method \Dew\Acs\Result updateCollectionDataMetadata(array $arguments = [])
 * @method \Http\Promise\Promise updateCollectionDataMetadataAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCollectionData(array $arguments = [])
 * @method \Http\Promise\Promise deleteCollectionDataAsync($arguments = [])
 * @method \Dew\Acs\Result createVectorIndex(array $arguments = [])
 * @method \Http\Promise\Promise createVectorIndexAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVectorIndex(array $arguments = [])
 * @method \Http\Promise\Promise deleteVectorIndexAsync($arguments = [])
 * @method \Dew\Acs\Result listStreamingDataSources(array $arguments = [])
 * @method \Http\Promise\Promise listStreamingDataSourcesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStreamingDataSource(array $arguments = [])
 * @method \Http\Promise\Promise deleteStreamingDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyStreamingDataSource(array $arguments = [])
 * @method \Http\Promise\Promise modifyStreamingDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result createStreamingDataSource(array $arguments = [])
 * @method \Http\Promise\Promise createStreamingDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeStreamingDataSource(array $arguments = [])
 * @method \Http\Promise\Promise describeStreamingDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result listStreamingDataServices(array $arguments = [])
 * @method \Http\Promise\Promise listStreamingDataServicesAsync($arguments = [])
 * @method \Dew\Acs\Result createStreamingDataService(array $arguments = [])
 * @method \Http\Promise\Promise createStreamingDataServiceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyStreamingDataService(array $arguments = [])
 * @method \Http\Promise\Promise modifyStreamingDataServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeStreamingDataService(array $arguments = [])
 * @method \Http\Promise\Promise describeStreamingDataServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStreamingDataService(array $arguments = [])
 * @method \Http\Promise\Promise deleteStreamingDataServiceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyStreamingJob(array $arguments = [])
 * @method \Http\Promise\Promise modifyStreamingJobAsync($arguments = [])
 * @method \Dew\Acs\Result describeStreamingJob(array $arguments = [])
 * @method \Http\Promise\Promise describeStreamingJobAsync($arguments = [])
 * @method \Dew\Acs\Result createStreamingJob(array $arguments = [])
 * @method \Http\Promise\Promise createStreamingJobAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStreamingJob(array $arguments = [])
 * @method \Http\Promise\Promise deleteStreamingJobAsync($arguments = [])
 * @method \Dew\Acs\Result listStreamingJobs(array $arguments = [])
 * @method \Http\Promise\Promise listStreamingJobsAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeExtensions(array $arguments = [])
 * @method \Http\Promise\Promise upgradeExtensionsAsync($arguments = [])
 * @method \Dew\Acs\Result listInstanceExtensions(array $arguments = [])
 * @method \Http\Promise\Promise listInstanceExtensionsAsync($arguments = [])
 * @method \Dew\Acs\Result createExtensions(array $arguments = [])
 * @method \Http\Promise\Promise createExtensionsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteExtension(array $arguments = [])
 * @method \Http\Promise\Promise deleteExtensionAsync($arguments = [])
 * @method \Dew\Acs\Result describeExternalDataService(array $arguments = [])
 * @method \Http\Promise\Promise describeExternalDataServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteExternalDataService(array $arguments = [])
 * @method \Http\Promise\Promise deleteExternalDataServiceAsync($arguments = [])
 * @method \Dew\Acs\Result listExternalDataServices(array $arguments = [])
 * @method \Http\Promise\Promise listExternalDataServicesAsync($arguments = [])
 * @method \Dew\Acs\Result createExternalDataService(array $arguments = [])
 * @method \Http\Promise\Promise createExternalDataServiceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyExternalDataService(array $arguments = [])
 * @method \Http\Promise\Promise modifyExternalDataServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeHadoopClustersInSameNet(array $arguments = [])
 * @method \Http\Promise\Promise describeHadoopClustersInSameNetAsync($arguments = [])
 * @method \Dew\Acs\Result listExternalDataSources(array $arguments = [])
 * @method \Http\Promise\Promise listExternalDataSourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeHadoopConfigs(array $arguments = [])
 * @method \Http\Promise\Promise describeHadoopConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result createHadoopDataSource(array $arguments = [])
 * @method \Http\Promise\Promise createHadoopDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeHadoopDataSource(array $arguments = [])
 * @method \Http\Promise\Promise describeHadoopDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyHadoopDataSource(array $arguments = [])
 * @method \Http\Promise\Promise modifyHadoopDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result checkHadoopDataSource(array $arguments = [])
 * @method \Http\Promise\Promise checkHadoopDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHadoopDataSource(array $arguments = [])
 * @method \Http\Promise\Promise deleteHadoopDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result checkHadoopNetConnection(array $arguments = [])
 * @method \Http\Promise\Promise checkHadoopNetConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result createJDBCDataSource(array $arguments = [])
 * @method \Http\Promise\Promise createJDBCDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyJDBCDataSource(array $arguments = [])
 * @method \Http\Promise\Promise modifyJDBCDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result checkJDBCSourceNetConnection(array $arguments = [])
 * @method \Http\Promise\Promise checkJDBCSourceNetConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result describeJDBCDataSource(array $arguments = [])
 * @method \Http\Promise\Promise describeJDBCDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteJDBCDataSource(array $arguments = [])
 * @method \Http\Promise\Promise deleteJDBCDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result createDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise createDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceMaintainTime(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceMaintainTimeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyVectorConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise modifyVectorConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result pauseInstance(array $arguments = [])
 * @method \Http\Promise\Promise pauseInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result rebalanceDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise rebalanceDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result restartDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise restartDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result resumeInstance(array $arguments = [])
 * @method \Http\Promise\Promise resumeInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeDBVersion(array $arguments = [])
 * @method \Http\Promise\Promise upgradeDBVersionAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataReDistributeInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDataReDistributeInfoAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeDBInstance(array $arguments = [])
 * @method \Http\Promise\Promise upgradeDBInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result pauseDataRedistribute(array $arguments = [])
 * @method \Http\Promise\Promise pauseDataRedistributeAsync($arguments = [])
 * @method \Dew\Acs\Result resumeDataRedistribute(array $arguments = [])
 * @method \Http\Promise\Promise resumeDataRedistributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterNode(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterNodeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBVersionInfos(array $arguments = [])
 * @method \Http\Promise\Promise describeDBVersionInfosAsync($arguments = [])
 * @method \Dew\Acs\Result describeSupportFeatures(array $arguments = [])
 * @method \Http\Promise\Promise describeSupportFeaturesAsync($arguments = [])
 * @method \Dew\Acs\Result describeModifyParameterLog(array $arguments = [])
 * @method \Http\Promise\Promise describeModifyParameterLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeParameters(array $arguments = [])
 * @method \Http\Promise\Promise describeParametersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyParameters(array $arguments = [])
 * @method \Http\Promise\Promise modifyParametersAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeDataBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result describeLogBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeLogBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createAccount(array $arguments = [])
 * @method \Http\Promise\Promise createAccountAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccounts(array $arguments = [])
 * @method \Http\Promise\Promise describeAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisDimensions(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisDimensionsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccountDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccountDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result resetAccountPassword(array $arguments = [])
 * @method \Http\Promise\Promise resetAccountPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result describeRoles(array $arguments = [])
 * @method \Http\Promise\Promise describeRolesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataShareInstances(array $arguments = [])
 * @method \Http\Promise\Promise describeDataShareInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataSharePerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDataSharePerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result setDataShareInstance(array $arguments = [])
 * @method \Http\Promise\Promise setDataShareInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceDataBloat(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceDataBloatAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceDataSkew(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceDataSkewAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceDiagnosisSummary(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceDiagnosisSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceIndexUsage(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceIndexUsageAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstancePerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstancePerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisMonitorPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisMonitorPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisSQLInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisSQLInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeDownloadRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeDownloadRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDownloadSQLLogs(array $arguments = [])
 * @method \Http\Promise\Promise describeDownloadSQLLogsAsync($arguments = [])
 * @method \Dew\Acs\Result describeHealthStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeHealthStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeWaitingSQLInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeWaitingSQLInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeWaitingSQLRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeWaitingSQLRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result downloadDiagnosisRecords(array $arguments = [])
 * @method \Http\Promise\Promise downloadDiagnosisRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result downloadSQLLogsRecords(array $arguments = [])
 * @method \Http\Promise\Promise downloadSQLLogsRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result createDBInstancePlan(array $arguments = [])
 * @method \Http\Promise\Promise createDBInstancePlanAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBInstancePlan(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBInstancePlanAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstancePlans(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstancePlansAsync($arguments = [])
 * @method \Dew\Acs\Result setDBInstancePlanStatus(array $arguments = [])
 * @method \Http\Promise\Promise setDBInstancePlanStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updateDBInstancePlan(array $arguments = [])
 * @method \Http\Promise\Promise updateDBInstancePlanAsync($arguments = [])
 * @method \Dew\Acs\Result describeTags(array $arguments = [])
 * @method \Http\Promise\Promise describeTagsAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result checkServiceLinkedRole(array $arguments = [])
 * @method \Http\Promise\Promise checkServiceLinkedRoleAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceLinkedRole(array $arguments = [])
 * @method \Http\Promise\Promise createServiceLinkedRoleAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceIPArrayList(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceIPArrayListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceSSL(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceSSLAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserEncryptionKeyList(array $arguments = [])
 * @method \Http\Promise\Promise describeUserEncryptionKeyListAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceSSL(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceSSLAsync($arguments = [])
 * @method \Dew\Acs\Result modifySecurityIps(array $arguments = [])
 * @method \Http\Promise\Promise modifySecurityIpsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceErrorLog(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceErrorLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeSQLLogCount(array $arguments = [])
 * @method \Http\Promise\Promise describeSQLLogCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeSQLLogsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeSQLLogsV2Async($arguments = [])
 * @method \Dew\Acs\Result modifySQLCollectorPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifySQLCollectorPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result allocateInstancePublicConnection(array $arguments = [])
 * @method \Http\Promise\Promise allocateInstancePublicConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceNetInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceNetInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeRdsVpcs(array $arguments = [])
 * @method \Http\Promise\Promise describeRdsVpcsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRdsVSwitchs(array $arguments = [])
 * @method \Http\Promise\Promise describeRdsVSwitchsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBInstanceConnectionString(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBInstanceConnectionStringAsync($arguments = [])
 * @method \Dew\Acs\Result releaseInstancePublicConnection(array $arguments = [])
 * @method \Http\Promise\Promise releaseInstancePublicConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result switchDBInstanceNetType(array $arguments = [])
 * @method \Http\Promise\Promise switchDBInstanceNetTypeAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailableResources(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailableResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result createSampleData(array $arguments = [])
 * @method \Http\Promise\Promise createSampleDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeSampleData(array $arguments = [])
 * @method \Http\Promise\Promise describeSampleDataAsync($arguments = [])
 * @method \Dew\Acs\Result unloadSampleData(array $arguments = [])
 * @method \Http\Promise\Promise unloadSampleDataAsync($arguments = [])
 * @method \Dew\Acs\Result enableDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise enableDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result disableDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise disableDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise createDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result bindDBResourceGroupWithRole(array $arguments = [])
 * @method \Http\Promise\Promise bindDBResourceGroupWithRoleAsync($arguments = [])
 * @method \Dew\Acs\Result unbindDBResourceGroupWithRole(array $arguments = [])
 * @method \Http\Promise\Promise unbindDBResourceGroupWithRoleAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBResourceManagementMode(array $arguments = [])
 * @method \Http\Promise\Promise describeDBResourceManagementModeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyMasterSpec(array $arguments = [])
 * @method \Http\Promise\Promise modifyMasterSpecAsync($arguments = [])
 * @method \Dew\Acs\Result describeSQLLogs(array $arguments = [])
 * @method \Http\Promise\Promise describeSQLLogsAsync($arguments = [])
 * @method \Dew\Acs\Result handleActiveSQLRecord(array $arguments = [])
 * @method \Http\Promise\Promise handleActiveSQLRecordAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBInstanceSupportMaxPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBInstanceSupportMaxPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result resetIMVMonitorData(array $arguments = [])
 * @method \Http\Promise\Promise resetIMVMonitorDataAsync($arguments = [])
 * @method \Dew\Acs\Result describeIMVInfos(array $arguments = [])
 * @method \Http\Promise\Promise describeIMVInfosAsync($arguments = [])
 * @method \Dew\Acs\Result describeActiveSQLRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeActiveSQLRecordsAsync($arguments = [])
 */
final class GpdbClient extends AcsClient
{
    //
}

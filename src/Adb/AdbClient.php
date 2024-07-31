<?php

declare(strict_types=1);

namespace Dew\Acs\Adb;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise createDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterMaintainTime(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterMaintainTimeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterPayType(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterPayTypeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAutoRenewAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyAutoRenewAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusters(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClustersAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeAutoRenewAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeAutoRenewAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailableResource(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailableResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeComputeResource(array $arguments = [])
 * @method \Http\Promise\Promise describeComputeResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeEIURange(array $arguments = [])
 * @method \Http\Promise\Promise describeEIURangeAsync($arguments = [])
 * @method \Dew\Acs\Result attachUserENI(array $arguments = [])
 * @method \Http\Promise\Promise attachUserENIAsync($arguments = [])
 * @method \Dew\Acs\Result detachUserENI(array $arguments = [])
 * @method \Http\Promise\Promise detachUserENIAsync($arguments = [])
 * @method \Dew\Acs\Result describeKernelVersion(array $arguments = [])
 * @method \Http\Promise\Promise describeKernelVersionAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeKernelVersion(array $arguments = [])
 * @method \Http\Promise\Promise upgradeKernelVersionAsync($arguments = [])
 * @method \Dew\Acs\Result createDBResourcePool(array $arguments = [])
 * @method \Http\Promise\Promise createDBResourcePoolAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBResourcePool(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBResourcePoolAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBResourcePool(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBResourcePoolAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBResourcePool(array $arguments = [])
 * @method \Http\Promise\Promise describeDBResourcePoolAsync($arguments = [])
 * @method \Dew\Acs\Result bindDBResourcePoolWithUser(array $arguments = [])
 * @method \Http\Promise\Promise bindDBResourcePoolWithUserAsync($arguments = [])
 * @method \Dew\Acs\Result unbindDBResourcePoolWithUser(array $arguments = [])
 * @method \Http\Promise\Promise unbindDBResourcePoolWithUserAsync($arguments = [])
 * @method \Dew\Acs\Result createDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise createDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result bindDBResourceGroupWithUser(array $arguments = [])
 * @method \Http\Promise\Promise bindDBResourceGroupWithUserAsync($arguments = [])
 * @method \Dew\Acs\Result unbindDBResourceGroupWithUser(array $arguments = [])
 * @method \Http\Promise\Promise unbindDBResourceGroupWithUserAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDBResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteDBResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createElasticPlan(array $arguments = [])
 * @method \Http\Promise\Promise createElasticPlanAsync($arguments = [])
 * @method \Dew\Acs\Result deleteElasticPlan(array $arguments = [])
 * @method \Http\Promise\Promise deleteElasticPlanAsync($arguments = [])
 * @method \Dew\Acs\Result modifyElasticPlan(array $arguments = [])
 * @method \Http\Promise\Promise modifyElasticPlanAsync($arguments = [])
 * @method \Dew\Acs\Result describeElasticDailyPlan(array $arguments = [])
 * @method \Http\Promise\Promise describeElasticDailyPlanAsync($arguments = [])
 * @method \Dew\Acs\Result describeElasticPlan(array $arguments = [])
 * @method \Http\Promise\Promise describeElasticPlanAsync($arguments = [])
 * @method \Dew\Acs\Result describeTables(array $arguments = [])
 * @method \Http\Promise\Promise describeTablesAsync($arguments = [])
 * @method \Dew\Acs\Result describeAllDataSource(array $arguments = [])
 * @method \Http\Promise\Promise describeAllDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeSchemas(array $arguments = [])
 * @method \Http\Promise\Promise describeSchemasAsync($arguments = [])
 * @method \Dew\Acs\Result describeTableDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeTableDetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeProcessList(array $arguments = [])
 * @method \Http\Promise\Promise describeProcessListAsync($arguments = [])
 * @method \Dew\Acs\Result describeColumns(array $arguments = [])
 * @method \Http\Promise\Promise describeColumnsAsync($arguments = [])
 * @method \Dew\Acs\Result describeTaskInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeTaskInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeSQLPlan(array $arguments = [])
 * @method \Http\Promise\Promise describeSQLPlanAsync($arguments = [])
 * @method \Dew\Acs\Result describeSQLPlanTask(array $arguments = [])
 * @method \Http\Promise\Promise describeSQLPlanTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeTablePartitionDiagnose(array $arguments = [])
 * @method \Http\Promise\Promise describeTablePartitionDiagnoseAsync($arguments = [])
 * @method \Dew\Acs\Result describeLoadTasksRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeLoadTasksRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeConnectionCountRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeConnectionCountRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result killProcess(array $arguments = [])
 * @method \Http\Promise\Promise killProcessAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAuditLogConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyAuditLogConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlowLogRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeSlowLogRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAuditLogConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeAuditLogConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeAuditLogRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeAuditLogRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyClusterConnectionString(array $arguments = [])
 * @method \Http\Promise\Promise modifyClusterConnectionStringAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterNetInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterNetInfoAsync($arguments = [])
 * @method \Dew\Acs\Result allocateClusterPublicConnection(array $arguments = [])
 * @method \Http\Promise\Promise allocateClusterPublicConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result releaseClusterPublicConnection(array $arguments = [])
 * @method \Http\Promise\Promise releaseClusterPublicConnectionAsync($arguments = [])
 * @method \Dew\Acs\Result createAccount(array $arguments = [])
 * @method \Http\Promise\Promise createAccountAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccount(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccountAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAccountDescription(array $arguments = [])
 * @method \Http\Promise\Promise modifyAccountDescriptionAsync($arguments = [])
 * @method \Dew\Acs\Result describeAllAccounts(array $arguments = [])
 * @method \Http\Promise\Promise describeAllAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAccounts(array $arguments = [])
 * @method \Http\Promise\Promise describeAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result describeOperatorPermission(array $arguments = [])
 * @method \Http\Promise\Promise describeOperatorPermissionAsync($arguments = [])
 * @method \Dew\Acs\Result grantOperatorPermission(array $arguments = [])
 * @method \Http\Promise\Promise grantOperatorPermissionAsync($arguments = [])
 * @method \Dew\Acs\Result resetAccountPassword(array $arguments = [])
 * @method \Http\Promise\Promise resetAccountPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result revokeOperatorPermission(array $arguments = [])
 * @method \Http\Promise\Promise revokeOperatorPermissionAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyLogBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyLogBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackups(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterAccessWhiteList(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterAccessWhiteListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterAccessWhiteList(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterAccessWhiteListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterHealthStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterHealthStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterResourcePoolPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterResourcePoolPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeInclinedTables(array $arguments = [])
 * @method \Http\Promise\Promise describeInclinedTablesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyMaintenanceAction(array $arguments = [])
 * @method \Http\Promise\Promise modifyMaintenanceActionAsync($arguments = [])
 * @method \Dew\Acs\Result describeMaintenanceAction(array $arguments = [])
 * @method \Http\Promise\Promise describeMaintenanceActionAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisDimensions(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisDimensionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDownloadRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeDownloadRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result downloadDiagnosisRecords(array $arguments = [])
 * @method \Http\Promise\Promise downloadDiagnosisRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisSQLInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisSQLInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeDiagnosisMonitorPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describeDiagnosisMonitorPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeSQLPatterns(array $arguments = [])
 * @method \Http\Promise\Promise describeSQLPatternsAsync($arguments = [])
 * @method \Dew\Acs\Result describePatternPerformance(array $arguments = [])
 * @method \Http\Promise\Promise describePatternPerformanceAsync($arguments = [])
 * @method \Dew\Acs\Result enableAdviceService(array $arguments = [])
 * @method \Http\Promise\Promise enableAdviceServiceAsync($arguments = [])
 * @method \Dew\Acs\Result applyAdviceById(array $arguments = [])
 * @method \Http\Promise\Promise applyAdviceByIdAsync($arguments = [])
 * @method \Dew\Acs\Result batchApplyAdviceByIdList(array $arguments = [])
 * @method \Http\Promise\Promise batchApplyAdviceByIdListAsync($arguments = [])
 * @method \Dew\Acs\Result describeAdviceServiceEnabled(array $arguments = [])
 * @method \Http\Promise\Promise describeAdviceServiceEnabledAsync($arguments = [])
 * @method \Dew\Acs\Result describeAppliedAdvices(array $arguments = [])
 * @method \Http\Promise\Promise describeAppliedAdvicesAsync($arguments = [])
 * @method \Dew\Acs\Result describeAvailableAdvices(array $arguments = [])
 * @method \Http\Promise\Promise describeAvailableAdvicesAsync($arguments = [])
 * @method \Dew\Acs\Result disableAdviceService(array $arguments = [])
 * @method \Http\Promise\Promise disableAdviceServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterSpaceSummary(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterSpaceSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result describeTableAccessCount(array $arguments = [])
 * @method \Http\Promise\Promise describeTableAccessCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeSqlPattern(array $arguments = [])
 * @method \Http\Promise\Promise describeSqlPatternAsync($arguments = [])
 * @method \Dew\Acs\Result describeVSwitches(array $arguments = [])
 * @method \Http\Promise\Promise describeVSwitchesAsync($arguments = [])
 * @method \Dew\Acs\Result migrateDBCluster(array $arguments = [])
 * @method \Http\Promise\Promise migrateDBClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describeTableStatistics(array $arguments = [])
 * @method \Http\Promise\Promise describeTableStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyResubmitConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyResubmitConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeResubmitConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeResubmitConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeSQAConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeSQAConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifySQAConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifySQAConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeDBClusterSSL(array $arguments = [])
 * @method \Http\Promise\Promise describeDBClusterSSLAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDBClusterSSL(array $arguments = [])
 * @method \Http\Promise\Promise modifyDBClusterSSLAsync($arguments = [])
 * @method \Dew\Acs\Result describeExcessivePrimaryKeys(array $arguments = [])
 * @method \Http\Promise\Promise describeExcessivePrimaryKeysAsync($arguments = [])
 * @method \Dew\Acs\Result deleteProcessInstance(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise deleteProcessInstanceAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeClusterNetInfo(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeClusterNetInfoAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeClusterAccessWhiteList(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeClusterAccessWhiteListAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result modifyClusterAccessWhiteList(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise modifyClusterAccessWhiteListAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeElasticPlans(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeElasticPlansAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result enableElasticPlan(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise enableElasticPlanAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result disableElasticPlan(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise disableElasticPlanAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeElasticPlanJobs(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeElasticPlanJobsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeElasticPlanAttribute(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeElasticPlanAttributeAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeElasticPlanSpecifications(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeElasticPlanSpecificationsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result bindAccount(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise bindAccountAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result unbindAccount(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise unbindAccountAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result checkBindRamUser(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise checkBindRamUserAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result modifyAccountPrivileges(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise modifyAccountPrivilegesAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeAccountPrivileges(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeAccountPrivilegesAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeEnabledPrivileges(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeEnabledPrivilegesAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeAccountAllPrivileges(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeAccountAllPrivilegesAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeAccountPrivilegeObjects(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeAccountPrivilegeObjectsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkDefinitions(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkDefinitionsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result preloadSparkAppMetrics(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise preloadSparkAppMetricsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkAppMetrics(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkAppMetricsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result listSparkLogAnalyzeTasks(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise listSparkLogAnalyzeTasksAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result submitSparkLogAnalyzeTask(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise submitSparkLogAnalyzeTaskAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result killSparkLogAnalyzeTask(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise killSparkLogAnalyzeTaskAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkLogAnalyzeTask(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkLogAnalyzeTaskAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result setSparkAppLogRootPath(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise setSparkAppLogRootPathAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkConfigLogPath(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkConfigLogPathAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result startSparkSQLEngine(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise startSparkSQLEngineAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result killSparkSQLEngine(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise killSparkSQLEngineAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkSQLEngineState(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkSQLEngineStateAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeSparkCodeOutput(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeSparkCodeOutputAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeSparkCodeLog(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeSparkCodeLogAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeSparkCodeWebUi(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeSparkCodeWebUiAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result listSparkTemplateFileIds(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise listSparkTemplateFileIdsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkAppWebUiAddress(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkAppWebUiAddressAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result listSparkAppAttempts(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise listSparkAppAttemptsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result createSparkTemplate(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise createSparkTemplateAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result deleteSparkTemplate(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise deleteSparkTemplateAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkTemplateFolderTree(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkTemplateFolderTreeAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkTemplateFullTree(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkTemplateFullTreeAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkTemplateFileContent(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkTemplateFileContentAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result updateSparkTemplateFile(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise updateSparkTemplateFileAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result deleteSparkTemplateFile(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise deleteSparkTemplateFileAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkAppAttemptLog(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkAppAttemptLogAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result listSparkApps(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise listSparkAppsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkAppInfo(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkAppInfoAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkAppState(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkAppStateAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getSparkAppLog(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getSparkAppLogAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result submitSparkApp(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise submitSparkAppAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result killSparkApp(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise killSparkAppAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result createOssSubDirectory(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise createOssSubDirectoryAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeAdbMySqlColumns(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeAdbMySqlColumnsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeAdbMySqlTables(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeAdbMySqlTablesAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeAdbMySqlSchemas(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeAdbMySqlSchemasAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getViewDDL(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getViewDDLAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getViewObjects(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getViewObjectsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getDatabaseObjects(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getDatabaseObjectsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getTable(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getTableAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getTableColumns(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getTableColumnsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getTableDDL(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getTableDDLAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result getTableObjects(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise getTableObjectsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeApsActionLogs(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeApsActionLogsAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result existRunningSQLEngine(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise existRunningSQLEngineAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result checkSampleDataSet(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise checkSampleDataSetAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeUserQuota(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeUserQuotaAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result renameSparkTemplateFile(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise renameSparkTemplateFileAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result loadSampleDataSet(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise loadSampleDataSetAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeStorageResourceUsage(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeStorageResourceUsageAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeClusterResourceDetail(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeClusterResourceDetailAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeJobResourceUsage(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeJobResourceUsageAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeClusterResourceUsage(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeClusterResourceUsageAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeComputeResourceUsage(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeComputeResourceUsageAsync($arguments = []) {@since 2021-12-01}
 * @method \Dew\Acs\Result describeApsResourceGroups(array $arguments = []) {@since 2021-12-01}
 * @method \Http\Promise\Promise describeApsResourceGroupsAsync($arguments = []) {@since 2021-12-01}
 */
final class AdbClient extends AcsClient
{
    //
}

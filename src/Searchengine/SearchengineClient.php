<?php

declare(strict_types=1);

namespace Dew\Acs\Searchengine;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createPublicUrl(array $arguments = [])
 * @method \Http\Promise\Promise createPublicUrlAsync($arguments = [])
 * @method \Dew\Acs\Result deletePublicUrl(array $arguments = [])
 * @method \Http\Promise\Promise deletePublicUrlAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPublicUrlIpList(array $arguments = [])
 * @method \Http\Promise\Promise modifyPublicUrlIpListAsync($arguments = [])
 * @method \Dew\Acs\Result createInstance(array $arguments = [])
 * @method \Http\Promise\Promise createInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updateInstance(array $arguments = [])
 * @method \Http\Promise\Promise updateInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPassword(array $arguments = [])
 * @method \Http\Promise\Promise modifyPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result listInstances(array $arguments = [])
 * @method \Http\Promise\Promise listInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result getInstance(array $arguments = [])
 * @method \Http\Promise\Promise getInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listInstanceSpecs(array $arguments = [])
 * @method \Http\Promise\Promise listInstanceSpecsAsync($arguments = [])
 * @method \Dew\Acs\Result getIndexOnlineStrategy(array $arguments = [])
 * @method \Http\Promise\Promise getIndexOnlineStrategyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyIndexOnlineStrategy(array $arguments = [])
 * @method \Http\Promise\Promise modifyIndexOnlineStrategyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyOnlineConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyOnlineConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listOnlineConfigs(array $arguments = [])
 * @method \Http\Promise\Promise listOnlineConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyIndex(array $arguments = [])
 * @method \Http\Promise\Promise modifyIndexAsync($arguments = [])
 * @method \Dew\Acs\Result startIndex(array $arguments = [])
 * @method \Http\Promise\Promise startIndexAsync($arguments = [])
 * @method \Dew\Acs\Result stopIndex(array $arguments = [])
 * @method \Http\Promise\Promise stopIndexAsync($arguments = [])
 * @method \Dew\Acs\Result createIndex(array $arguments = [])
 * @method \Http\Promise\Promise createIndexAsync($arguments = [])
 * @method \Dew\Acs\Result buildIndex(array $arguments = [])
 * @method \Http\Promise\Promise buildIndexAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIndexVersion(array $arguments = [])
 * @method \Http\Promise\Promise deleteIndexVersionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIndex(array $arguments = [])
 * @method \Http\Promise\Promise deleteIndexAsync($arguments = [])
 * @method \Dew\Acs\Result modifyIndexVersion(array $arguments = [])
 * @method \Http\Promise\Promise modifyIndexVersionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFile(array $arguments = [])
 * @method \Http\Promise\Promise modifyFileAsync($arguments = [])
 * @method \Dew\Acs\Result publishIndexVersion(array $arguments = [])
 * @method \Http\Promise\Promise publishIndexVersionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyIndexPartition(array $arguments = [])
 * @method \Http\Promise\Promise modifyIndexPartitionAsync($arguments = [])
 * @method \Dew\Acs\Result getIndex(array $arguments = [])
 * @method \Http\Promise\Promise getIndexAsync($arguments = [])
 * @method \Dew\Acs\Result getIndexVersion(array $arguments = [])
 * @method \Http\Promise\Promise getIndexVersionAsync($arguments = [])
 * @method \Dew\Acs\Result getFile(array $arguments = [])
 * @method \Http\Promise\Promise getFileAsync($arguments = [])
 * @method \Dew\Acs\Result listIndexes(array $arguments = [])
 * @method \Http\Promise\Promise listIndexesAsync($arguments = [])
 * @method \Dew\Acs\Result recoverIndex(array $arguments = [])
 * @method \Http\Promise\Promise recoverIndexAsync($arguments = [])
 * @method \Dew\Acs\Result createConfigDir(array $arguments = [])
 * @method \Http\Promise\Promise createConfigDirAsync($arguments = [])
 * @method \Dew\Acs\Result createConfigFile(array $arguments = [])
 * @method \Http\Promise\Promise createConfigFileAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConfigDir(array $arguments = [])
 * @method \Http\Promise\Promise deleteConfigDirAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConfigFile(array $arguments = [])
 * @method \Http\Promise\Promise deleteConfigFileAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAdvanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyAdvanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAdvanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise deleteAdvanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAdvanceConfigFile(array $arguments = [])
 * @method \Http\Promise\Promise modifyAdvanceConfigFileAsync($arguments = [])
 * @method \Dew\Acs\Result publishAdvanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise publishAdvanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getAdvanceConfig(array $arguments = [])
 * @method \Http\Promise\Promise getAdvanceConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getAdvanceConfigFile(array $arguments = [])
 * @method \Http\Promise\Promise getAdvanceConfigFileAsync($arguments = [])
 * @method \Dew\Acs\Result listAdvanceConfigDir(array $arguments = [])
 * @method \Http\Promise\Promise listAdvanceConfigDirAsync($arguments = [])
 * @method \Dew\Acs\Result listAdvanceConfigs(array $arguments = [])
 * @method \Http\Promise\Promise listAdvanceConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result listSchemas(array $arguments = [])
 * @method \Http\Promise\Promise listSchemasAsync($arguments = [])
 * @method \Dew\Acs\Result modifyDataSourceDeploy(array $arguments = [])
 * @method \Http\Promise\Promise modifyDataSourceDeployAsync($arguments = [])
 * @method \Dew\Acs\Result createDataSource(array $arguments = [])
 * @method \Http\Promise\Promise createDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDataSource(array $arguments = [])
 * @method \Http\Promise\Promise deleteDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result getDataSource(array $arguments = [])
 * @method \Http\Promise\Promise getDataSourceAsync($arguments = [])
 * @method \Dew\Acs\Result listDataSources(array $arguments = [])
 * @method \Http\Promise\Promise listDataSourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listDataSourceSchemas(array $arguments = [])
 * @method \Http\Promise\Promise listDataSourceSchemasAsync($arguments = [])
 * @method \Dew\Acs\Result listDateSourceGenerations(array $arguments = [])
 * @method \Http\Promise\Promise listDateSourceGenerationsAsync($arguments = [])
 * @method \Dew\Acs\Result getDataSourceDeploy(array $arguments = [])
 * @method \Http\Promise\Promise getDataSourceDeployAsync($arguments = [])
 * @method \Dew\Acs\Result cloneSqlInstance(array $arguments = [])
 * @method \Http\Promise\Promise cloneSqlInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createFolder(array $arguments = [])
 * @method \Http\Promise\Promise createFolderAsync($arguments = [])
 * @method \Dew\Acs\Result createSqlInstance(array $arguments = [])
 * @method \Http\Promise\Promise createSqlInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSqlInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteSqlInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result executeSqlInstance(array $arguments = [])
 * @method \Http\Promise\Promise executeSqlInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getDatabaseSchema(array $arguments = [])
 * @method \Http\Promise\Promise getDatabaseSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result getSqlInstance(array $arguments = [])
 * @method \Http\Promise\Promise getSqlInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listDatabases(array $arguments = [])
 * @method \Http\Promise\Promise listDatabasesAsync($arguments = [])
 * @method \Dew\Acs\Result updateSqlInstanceContent(array $arguments = [])
 * @method \Http\Promise\Promise updateSqlInstanceContentAsync($arguments = [])
 * @method \Dew\Acs\Result updateSqlInstanceName(array $arguments = [])
 * @method \Http\Promise\Promise updateSqlInstanceNameAsync($arguments = [])
 * @method \Dew\Acs\Result updateSqlInstanceParams(array $arguments = [])
 * @method \Http\Promise\Promise updateSqlInstanceParamsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFolder(array $arguments = [])
 * @method \Http\Promise\Promise deleteFolderAsync($arguments = [])
 * @method \Dew\Acs\Result renameFolder(array $arguments = [])
 * @method \Http\Promise\Promise renameFolderAsync($arguments = [])
 * @method \Dew\Acs\Result listTasks(array $arguments = [])
 * @method \Http\Promise\Promise listTasksAsync($arguments = [])
 * @method \Dew\Acs\Result listClusterTasks(array $arguments = [])
 * @method \Http\Promise\Promise listClusterTasksAsync($arguments = [])
 * @method \Dew\Acs\Result listDataSourceTasks(array $arguments = [])
 * @method \Http\Promise\Promise listDataSourceTasksAsync($arguments = [])
 * @method \Dew\Acs\Result stopTask(array $arguments = [])
 * @method \Http\Promise\Promise stopTaskAsync($arguments = [])
 * @method \Dew\Acs\Result forceSwitch(array $arguments = [])
 * @method \Http\Promise\Promise forceSwitchAsync($arguments = [])
 * @method \Dew\Acs\Result listLogs(array $arguments = [])
 * @method \Http\Promise\Promise listLogsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNodeConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyNodeConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getDeployGraph(array $arguments = [])
 * @method \Http\Promise\Promise getDeployGraphAsync($arguments = [])
 * @method \Dew\Acs\Result getNodeConfig(array $arguments = [])
 * @method \Http\Promise\Promise getNodeConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listIndexRecoverRecords(array $arguments = [])
 * @method \Http\Promise\Promise listIndexRecoverRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result listPausePolicys(array $arguments = [])
 * @method \Http\Promise\Promise listPausePolicysAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPausePolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyPausePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createCluster(array $arguments = [])
 * @method \Http\Promise\Promise createClusterAsync($arguments = [])
 * @method \Dew\Acs\Result removeCluster(array $arguments = [])
 * @method \Http\Promise\Promise removeClusterAsync($arguments = [])
 * @method \Dew\Acs\Result modifyClusterDesc(array $arguments = [])
 * @method \Http\Promise\Promise modifyClusterDescAsync($arguments = [])
 * @method \Dew\Acs\Result modifyClusterOfflineConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyClusterOfflineConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyClusterOnlineConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyClusterOnlineConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getCluster(array $arguments = [])
 * @method \Http\Promise\Promise getClusterAsync($arguments = [])
 * @method \Dew\Acs\Result getClusterRunTimeInfo(array $arguments = [])
 * @method \Http\Promise\Promise getClusterRunTimeInfoAsync($arguments = [])
 * @method \Dew\Acs\Result listClusterNames(array $arguments = [])
 * @method \Http\Promise\Promise listClusterNamesAsync($arguments = [])
 * @method \Dew\Acs\Result listClusters(array $arguments = [])
 * @method \Http\Promise\Promise listClustersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAlias(array $arguments = [])
 * @method \Http\Promise\Promise modifyAliasAsync($arguments = [])
 * @method \Dew\Acs\Result listAliases(array $arguments = [])
 * @method \Http\Promise\Promise listAliasesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlias(array $arguments = [])
 * @method \Http\Promise\Promise deleteAliasAsync($arguments = [])
 * @method \Dew\Acs\Result createAlias(array $arguments = [])
 * @method \Http\Promise\Promise createAliasAsync($arguments = [])
 * @method \Dew\Acs\Result createTable(array $arguments = [])
 * @method \Http\Promise\Promise createTableAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTable(array $arguments = [])
 * @method \Http\Promise\Promise modifyTableAsync($arguments = [])
 * @method \Dew\Acs\Result getTable(array $arguments = [])
 * @method \Http\Promise\Promise getTableAsync($arguments = [])
 * @method \Dew\Acs\Result listTables(array $arguments = [])
 * @method \Http\Promise\Promise listTablesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTable(array $arguments = [])
 * @method \Http\Promise\Promise deleteTableAsync($arguments = [])
 * @method \Dew\Acs\Result reindex(array $arguments = [])
 * @method \Http\Promise\Promise reindexAsync($arguments = [])
 * @method \Dew\Acs\Result listTableGenerations(array $arguments = [])
 * @method \Http\Promise\Promise listTableGenerationsAsync($arguments = [])
 * @method \Dew\Acs\Result getTableGeneration(array $arguments = [])
 * @method \Http\Promise\Promise getTableGenerationAsync($arguments = [])
 * @method \Dew\Acs\Result listPostQueryResult(array $arguments = [])
 * @method \Http\Promise\Promise listPostQueryResultAsync($arguments = [])
 * @method \Dew\Acs\Result listRestQueryResult(array $arguments = [])
 * @method \Http\Promise\Promise listRestQueryResultAsync($arguments = [])
 * @method \Dew\Acs\Result listVectorQueryResult(array $arguments = [])
 * @method \Http\Promise\Promise listVectorQueryResultAsync($arguments = [])
 * @method \Dew\Acs\Result pushDocuments(array $arguments = [])
 * @method \Http\Promise\Promise pushDocumentsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result listQueryResult(array $arguments = [])
 * @method \Http\Promise\Promise listQueryResultAsync($arguments = [])
 * @method \Dew\Acs\Result deleteModel(array $arguments = [])
 * @method \Http\Promise\Promise deleteModelAsync($arguments = [])
 * @method \Dew\Acs\Result modifyModel(array $arguments = [])
 * @method \Http\Promise\Promise modifyModelAsync($arguments = [])
 * @method \Dew\Acs\Result debugModel(array $arguments = [])
 * @method \Http\Promise\Promise debugModelAsync($arguments = [])
 * @method \Dew\Acs\Result getModel(array $arguments = [])
 * @method \Http\Promise\Promise getModelAsync($arguments = [])
 * @method \Dew\Acs\Result listModels(array $arguments = [])
 * @method \Http\Promise\Promise listModelsAsync($arguments = [])
 * @method \Dew\Acs\Result createModel(array $arguments = [])
 * @method \Http\Promise\Promise createModelAsync($arguments = [])
 * @method \Dew\Acs\Result modifySearcherReplica(array $arguments = [])
 * @method \Http\Promise\Promise modifySearcherReplicaAsync($arguments = [])
 */
final class SearchengineClient extends AcsClient
{
    //
}

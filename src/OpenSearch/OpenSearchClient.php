<?php

declare(strict_types=1);

namespace Dew\Acs\OpenSearch;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result renewAppGroup(array $arguments = [])
 * @method \Http\Promise\Promise renewAppGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createAppGroup(array $arguments = [])
 * @method \Http\Promise\Promise createAppGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAppGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyAppGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAppGroupQuota(array $arguments = [])
 * @method \Http\Promise\Promise modifyAppGroupQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result removeAppGroup(array $arguments = [])
 * @method \Http\Promise\Promise removeAppGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listAppGroups(array $arguments = [])
 * @method \Http\Promise\Promise listAppGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createApp(array $arguments = [])
 * @method \Http\Promise\Promise createAppAsync($arguments = [])
 * @method \Dew\Acs\Result removeApp(array $arguments = [])
 * @method \Http\Promise\Promise removeAppAsync($arguments = [])
 * @method \Dew\Acs\Result describeApps(array $arguments = [])
 * @method \Http\Promise\Promise describeAppsAsync($arguments = [])
 * @method \Dew\Acs\Result describeApp(array $arguments = [])
 * @method \Http\Promise\Promise describeAppAsync($arguments = [])
 * @method \Dew\Acs\Result describeAppStatistics(array $arguments = [])
 * @method \Http\Promise\Promise describeAppStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result listUserAnalyzers(array $arguments = [])
 * @method \Http\Promise\Promise listUserAnalyzersAsync($arguments = [])
 * @method \Dew\Acs\Result createUserAnalyzer(array $arguments = [])
 * @method \Http\Promise\Promise createUserAnalyzerAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserAnalyzer(array $arguments = [])
 * @method \Http\Promise\Promise describeUserAnalyzerAsync($arguments = [])
 * @method \Dew\Acs\Result removeUserAnalyzer(array $arguments = [])
 * @method \Http\Promise\Promise removeUserAnalyzerAsync($arguments = [])
 * @method \Dew\Acs\Result listUserAnalyzerEntries(array $arguments = [])
 * @method \Http\Promise\Promise listUserAnalyzerEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result pushUserAnalyzerEntries(array $arguments = [])
 * @method \Http\Promise\Promise pushUserAnalyzerEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result listABTestScenes(array $arguments = [])
 * @method \Http\Promise\Promise listABTestScenesAsync($arguments = [])
 * @method \Dew\Acs\Result createABTestScene(array $arguments = [])
 * @method \Http\Promise\Promise createABTestSceneAsync($arguments = [])
 * @method \Dew\Acs\Result describeABTestScene(array $arguments = [])
 * @method \Http\Promise\Promise describeABTestSceneAsync($arguments = [])
 * @method \Dew\Acs\Result updateABTestScene(array $arguments = [])
 * @method \Http\Promise\Promise updateABTestSceneAsync($arguments = [])
 * @method \Dew\Acs\Result deleteABTestScene(array $arguments = [])
 * @method \Http\Promise\Promise deleteABTestSceneAsync($arguments = [])
 * @method \Dew\Acs\Result listABTestGroups(array $arguments = [])
 * @method \Http\Promise\Promise listABTestGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result createABTestGroup(array $arguments = [])
 * @method \Http\Promise\Promise createABTestGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteABTestGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteABTestGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeABTestGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeABTestGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateABTestGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateABTestGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listABTestExperiments(array $arguments = [])
 * @method \Http\Promise\Promise listABTestExperimentsAsync($arguments = [])
 * @method \Dew\Acs\Result createABTestExperiment(array $arguments = [])
 * @method \Http\Promise\Promise createABTestExperimentAsync($arguments = [])
 * @method \Dew\Acs\Result describeABTestExperiment(array $arguments = [])
 * @method \Http\Promise\Promise describeABTestExperimentAsync($arguments = [])
 * @method \Dew\Acs\Result updateABTestExperiment(array $arguments = [])
 * @method \Http\Promise\Promise updateABTestExperimentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteABTestExperiment(array $arguments = [])
 * @method \Http\Promise\Promise deleteABTestExperimentAsync($arguments = [])
 * @method \Dew\Acs\Result listABTestFixedFlowDividers(array $arguments = [])
 * @method \Http\Promise\Promise listABTestFixedFlowDividersAsync($arguments = [])
 * @method \Dew\Acs\Result updateABTestFixedFlowDividers(array $arguments = [])
 * @method \Http\Promise\Promise updateABTestFixedFlowDividersAsync($arguments = [])
 * @method \Dew\Acs\Result listFirstRanks(array $arguments = [])
 * @method \Http\Promise\Promise listFirstRanksAsync($arguments = [])
 * @method \Dew\Acs\Result createFirstRank(array $arguments = [])
 * @method \Http\Promise\Promise createFirstRankAsync($arguments = [])
 * @method \Dew\Acs\Result describeFirstRank(array $arguments = [])
 * @method \Http\Promise\Promise describeFirstRankAsync($arguments = [])
 * @method \Dew\Acs\Result removeFirstRank(array $arguments = [])
 * @method \Http\Promise\Promise removeFirstRankAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFirstRank(array $arguments = [])
 * @method \Http\Promise\Promise modifyFirstRankAsync($arguments = [])
 * @method \Dew\Acs\Result listSecondRanks(array $arguments = [])
 * @method \Http\Promise\Promise listSecondRanksAsync($arguments = [])
 * @method \Dew\Acs\Result createSecondRank(array $arguments = [])
 * @method \Http\Promise\Promise createSecondRankAsync($arguments = [])
 * @method \Dew\Acs\Result describeSecondRank(array $arguments = [])
 * @method \Http\Promise\Promise describeSecondRankAsync($arguments = [])
 * @method \Dew\Acs\Result modifySecondRank(array $arguments = [])
 * @method \Http\Promise\Promise modifySecondRankAsync($arguments = [])
 * @method \Dew\Acs\Result removeSecondRank(array $arguments = [])
 * @method \Http\Promise\Promise removeSecondRankAsync($arguments = [])
 * @method \Dew\Acs\Result listQueryProcessors(array $arguments = [])
 * @method \Http\Promise\Promise listQueryProcessorsAsync($arguments = [])
 * @method \Dew\Acs\Result createQueryProcessor(array $arguments = [])
 * @method \Http\Promise\Promise createQueryProcessorAsync($arguments = [])
 * @method \Dew\Acs\Result modifyQueryProcessor(array $arguments = [])
 * @method \Http\Promise\Promise modifyQueryProcessorAsync($arguments = [])
 * @method \Dew\Acs\Result removeQueryProcessor(array $arguments = [])
 * @method \Http\Promise\Promise removeQueryProcessorAsync($arguments = [])
 * @method \Dew\Acs\Result describeQueryProcessor(array $arguments = [])
 * @method \Http\Promise\Promise describeQueryProcessorAsync($arguments = [])
 * @method \Dew\Acs\Result listQueryProcessorNers(array $arguments = [])
 * @method \Http\Promise\Promise listQueryProcessorNersAsync($arguments = [])
 * @method \Dew\Acs\Result listQueryProcessorAnalyzerResults(array $arguments = [])
 * @method \Http\Promise\Promise listQueryProcessorAnalyzerResultsAsync($arguments = [])
 * @method \Dew\Acs\Result listInterventionDictionaries(array $arguments = [])
 * @method \Http\Promise\Promise listInterventionDictionariesAsync($arguments = [])
 * @method \Dew\Acs\Result createInterventionDictionary(array $arguments = [])
 * @method \Http\Promise\Promise createInterventionDictionaryAsync($arguments = [])
 * @method \Dew\Acs\Result describeInterventionDictionary(array $arguments = [])
 * @method \Http\Promise\Promise describeInterventionDictionaryAsync($arguments = [])
 * @method \Dew\Acs\Result removeInterventionDictionary(array $arguments = [])
 * @method \Http\Promise\Promise removeInterventionDictionaryAsync($arguments = [])
 * @method \Dew\Acs\Result listInterventionDictionaryEntries(array $arguments = [])
 * @method \Http\Promise\Promise listInterventionDictionaryEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result pushInterventionDictionaryEntries(array $arguments = [])
 * @method \Http\Promise\Promise pushInterventionDictionaryEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result listInterventionDictionaryRelatedEntities(array $arguments = [])
 * @method \Http\Promise\Promise listInterventionDictionaryRelatedEntitiesAsync($arguments = [])
 * @method \Dew\Acs\Result listInterventionDictionaryNerResults(array $arguments = [])
 * @method \Http\Promise\Promise listInterventionDictionaryNerResultsAsync($arguments = [])
 * @method \Dew\Acs\Result enableSlowQuery(array $arguments = [])
 * @method \Http\Promise\Promise enableSlowQueryAsync($arguments = [])
 * @method \Dew\Acs\Result disableSlowQuery(array $arguments = [])
 * @method \Http\Promise\Promise disableSlowQueryAsync($arguments = [])
 * @method \Dew\Acs\Result describeSlowQueryStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeSlowQueryStatusAsync($arguments = [])
 * @method \Dew\Acs\Result startSlowQueryAnalyzer(array $arguments = [])
 * @method \Http\Promise\Promise startSlowQueryAnalyzerAsync($arguments = [])
 * @method \Dew\Acs\Result listSlowQueryQueries(array $arguments = [])
 * @method \Http\Promise\Promise listSlowQueryQueriesAsync($arguments = [])
 * @method \Dew\Acs\Result listSlowQueryCategories(array $arguments = [])
 * @method \Http\Promise\Promise listSlowQueryCategoriesAsync($arguments = [])
 * @method \Dew\Acs\Result listQuotaReviewTasks(array $arguments = [])
 * @method \Http\Promise\Promise listQuotaReviewTasksAsync($arguments = [])
 * @method \Dew\Acs\Result listScheduledTasks(array $arguments = [])
 * @method \Http\Promise\Promise listScheduledTasksAsync($arguments = [])
 * @method \Dew\Acs\Result createScheduledTask(array $arguments = [])
 * @method \Http\Promise\Promise createScheduledTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeScheduledTask(array $arguments = [])
 * @method \Http\Promise\Promise describeScheduledTaskAsync($arguments = [])
 * @method \Dew\Acs\Result modifyScheduledTask(array $arguments = [])
 * @method \Http\Promise\Promise modifyScheduledTaskAsync($arguments = [])
 * @method \Dew\Acs\Result removeScheduledTask(array $arguments = [])
 * @method \Http\Promise\Promise removeScheduledTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listSortExpressions(array $arguments = [])
 * @method \Http\Promise\Promise listSortExpressionsAsync($arguments = [])
 * @method \Dew\Acs\Result unbindEsInstance(array $arguments = [])
 * @method \Http\Promise\Promise unbindEsInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result bindEsInstance(array $arguments = [])
 * @method \Http\Promise\Promise bindEsInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result bindESUserAnalyzer(array $arguments = [])
 * @method \Http\Promise\Promise bindESUserAnalyzerAsync($arguments = [])
 * @method \Dew\Acs\Result unbindESUserAnalyzer(array $arguments = [])
 * @method \Http\Promise\Promise unbindESUserAnalyzerAsync($arguments = [])
 * @method \Dew\Acs\Result listProceedings(array $arguments = [])
 * @method \Http\Promise\Promise listProceedingsAsync($arguments = [])
 * @method \Dew\Acs\Result listStatisticLogs(array $arguments = [])
 * @method \Http\Promise\Promise listStatisticLogsAsync($arguments = [])
 * @method \Dew\Acs\Result listStatisticReport(array $arguments = [])
 * @method \Http\Promise\Promise listStatisticReportAsync($arguments = [])
 * @method \Dew\Acs\Result updateSortScript(array $arguments = [])
 * @method \Http\Promise\Promise updateSortScriptAsync($arguments = [])
 * @method \Dew\Acs\Result saveSortScriptFile(array $arguments = [])
 * @method \Http\Promise\Promise saveSortScriptFileAsync($arguments = [])
 * @method \Dew\Acs\Result releaseSortScript(array $arguments = [])
 * @method \Http\Promise\Promise releaseSortScriptAsync($arguments = [])
 * @method \Dew\Acs\Result getSortScriptFile(array $arguments = [])
 * @method \Http\Promise\Promise getSortScriptFileAsync($arguments = [])
 * @method \Dew\Acs\Result getSortScript(array $arguments = [])
 * @method \Http\Promise\Promise getSortScriptAsync($arguments = [])
 * @method \Dew\Acs\Result getScriptFileNames(array $arguments = [])
 * @method \Http\Promise\Promise getScriptFileNamesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSortScriptFile(array $arguments = [])
 * @method \Http\Promise\Promise deleteSortScriptFileAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSortScript(array $arguments = [])
 * @method \Http\Promise\Promise deleteSortScriptAsync($arguments = [])
 * @method \Dew\Acs\Result createSortScript(array $arguments = [])
 * @method \Http\Promise\Promise createSortScriptAsync($arguments = [])
 * @method \Dew\Acs\Result compileSortScript(array $arguments = [])
 * @method \Http\Promise\Promise compileSortScriptAsync($arguments = [])
 * @method \Dew\Acs\Result updateSearchStrategy(array $arguments = [])
 * @method \Http\Promise\Promise updateSearchStrategyAsync($arguments = [])
 * @method \Dew\Acs\Result removeSearchStrategy(array $arguments = [])
 * @method \Http\Promise\Promise removeSearchStrategyAsync($arguments = [])
 * @method \Dew\Acs\Result listSearchStrategies(array $arguments = [])
 * @method \Http\Promise\Promise listSearchStrategiesAsync($arguments = [])
 * @method \Dew\Acs\Result getSearchStrategy(array $arguments = [])
 * @method \Http\Promise\Promise getSearchStrategyAsync($arguments = [])
 * @method \Dew\Acs\Result createSearchStrategy(array $arguments = [])
 * @method \Http\Promise\Promise createSearchStrategyAsync($arguments = [])
 * @method \Dew\Acs\Result updateFetchFields(array $arguments = [])
 * @method \Http\Promise\Promise updateFetchFieldsAsync($arguments = [])
 * @method \Dew\Acs\Result updateSummaries(array $arguments = [])
 * @method \Http\Promise\Promise updateSummariesAsync($arguments = [])
 * @method \Dew\Acs\Result createFunctionResource(array $arguments = [])
 * @method \Http\Promise\Promise createFunctionResourceAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionCurrentVersion(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionCurrentVersionAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionVersion(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionVersionAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionDefaultInstance(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionDefaultInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updateFunctionDefaultInstance(array $arguments = [])
 * @method \Http\Promise\Promise updateFunctionDefaultInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listFunctionTasks(array $arguments = [])
 * @method \Http\Promise\Promise listFunctionTasksAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionTask(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFunctionTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteFunctionTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createFunctionTask(array $arguments = [])
 * @method \Http\Promise\Promise createFunctionTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listFunctionInstances(array $arguments = [])
 * @method \Http\Promise\Promise listFunctionInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionInstance(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFunctionInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteFunctionInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updateFunctionInstance(array $arguments = [])
 * @method \Http\Promise\Promise updateFunctionInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createFunctionInstance(array $arguments = [])
 * @method \Http\Promise\Promise createFunctionInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAppGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeAppGroupAsync($arguments = [])
 * @method \Dew\Acs\Result validateDataSources(array $arguments = [])
 * @method \Http\Promise\Promise validateDataSourcesAsync($arguments = [])
 * @method \Dew\Acs\Result replaceAppGroupCommodityCode(array $arguments = [])
 * @method \Http\Promise\Promise replaceAppGroupCommodityCodeAsync($arguments = [])
 * @method \Dew\Acs\Result listSortScripts(array $arguments = [])
 * @method \Http\Promise\Promise listSortScriptsAsync($arguments = [])
 * @method \Dew\Acs\Result listDataSourceTables(array $arguments = [])
 * @method \Http\Promise\Promise listDataSourceTablesAsync($arguments = [])
 * @method \Dew\Acs\Result listDataSourceTableFields(array $arguments = [])
 * @method \Http\Promise\Promise listDataSourceTableFieldsAsync($arguments = [])
 * @method \Dew\Acs\Result getDomain(array $arguments = [])
 * @method \Http\Promise\Promise getDomainAsync($arguments = [])
 * @method \Dew\Acs\Result generateMergedTable(array $arguments = [])
 * @method \Http\Promise\Promise generateMergedTableAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDataCollction(array $arguments = [])
 * @method \Http\Promise\Promise describeDataCollctionAsync($arguments = [])
 * @method \Dew\Acs\Result listDataCollections(array $arguments = [])
 * @method \Http\Promise\Promise listDataCollectionsAsync($arguments = [])
 * @method \Dew\Acs\Result removeDataCollection(array $arguments = [])
 * @method \Http\Promise\Promise removeDataCollectionAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result getFunctionResource(array $arguments = [])
 * @method \Http\Promise\Promise getFunctionResourceAsync($arguments = [])
 * @method \Dew\Acs\Result listFunctionResources(array $arguments = [])
 * @method \Http\Promise\Promise listFunctionResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFunctionResource(array $arguments = [])
 * @method \Http\Promise\Promise deleteFunctionResourceAsync($arguments = [])
 * @method \Dew\Acs\Result updateFunctionResource(array $arguments = [])
 * @method \Http\Promise\Promise updateFunctionResourceAsync($arguments = [])
 */
final class OpenSearchClient extends AcsClient
{
    //
}

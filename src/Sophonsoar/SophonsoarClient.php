<?php

declare(strict_types=1);

namespace Dew\Acs\Sophonsoar;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result verifyPythonFile(array $arguments = [])
 * @method \Http\Promise\Promise verifyPythonFileAsync($arguments = [])
 * @method \Dew\Acs\Result verifyPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise verifyPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result triggerSophonPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise triggerSophonPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result triggerPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise triggerPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result runPython3Script(array $arguments = [])
 * @method \Http\Promise\Promise runPython3ScriptAsync($arguments = [])
 * @method \Dew\Acs\Result revertPlaybookRelease(array $arguments = [])
 * @method \Http\Promise\Promise revertPlaybookReleaseAsync($arguments = [])
 * @method \Dew\Acs\Result renamePlaybookNode(array $arguments = [])
 * @method \Http\Promise\Promise renamePlaybookNodeAsync($arguments = [])
 * @method \Dew\Acs\Result queryTreeData(array $arguments = [])
 * @method \Http\Promise\Promise queryTreeDataAsync($arguments = [])
 * @method \Dew\Acs\Result publishPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise publishPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPlaybookInstanceStatus(array $arguments = [])
 * @method \Http\Promise\Promise modifyPlaybookInstanceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPlaybookInputOutput(array $arguments = [])
 * @method \Http\Promise\Promise modifyPlaybookInputOutputAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise modifyPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result modifyComponentAsset(array $arguments = [])
 * @method \Http\Promise\Promise modifyComponentAssetAsync($arguments = [])
 * @method \Dew\Acs\Result describerPython3ScriptLogs(array $arguments = [])
 * @method \Http\Promise\Promise describerPython3ScriptLogsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSophonCommands(array $arguments = [])
 * @method \Http\Promise\Promise describeSophonCommandsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSoarTaskAndActions(array $arguments = [])
 * @method \Http\Promise\Promise describeSoarTaskAndActionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSoarRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeSoarRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSoarRecordInOutput(array $arguments = [])
 * @method \Http\Promise\Promise describeSoarRecordInOutputAsync($arguments = [])
 * @method \Dew\Acs\Result describeSoarRecordActionOutputList(array $arguments = [])
 * @method \Http\Promise\Promise describeSoarRecordActionOutputListAsync($arguments = [])
 * @method \Dew\Acs\Result describePopApiVersionList(array $arguments = [])
 * @method \Http\Promise\Promise describePopApiVersionListAsync($arguments = [])
 * @method \Dew\Acs\Result describePopApiItemList(array $arguments = [])
 * @method \Http\Promise\Promise describePopApiItemListAsync($arguments = [])
 * @method \Dew\Acs\Result describePopApi(array $arguments = [])
 * @method \Http\Promise\Promise describePopApiAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybooks(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybooksAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookReleases(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookReleasesAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookNumberMetrics(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookNumberMetricsAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookNodesOutput(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookNodesOutputAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookMetrics(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookMetricsAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookInputOutput(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookInputOutputAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybook(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result describeNodeUsedInfos(array $arguments = [])
 * @method \Http\Promise\Promise describeNodeUsedInfosAsync($arguments = [])
 * @method \Dew\Acs\Result describeNodeParamTags(array $arguments = [])
 * @method \Http\Promise\Promise describeNodeParamTagsAsync($arguments = [])
 * @method \Dew\Acs\Result describeLatestRecordSchema(array $arguments = [])
 * @method \Http\Promise\Promise describeLatestRecordSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result describeField(array $arguments = [])
 * @method \Http\Promise\Promise describeFieldAsync($arguments = [])
 * @method \Dew\Acs\Result describeExecutePlaybooks(array $arguments = [])
 * @method \Http\Promise\Promise describeExecutePlaybooksAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnumItems(array $arguments = [])
 * @method \Http\Promise\Promise describeEnumItemsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDistinctReleases(array $arguments = [])
 * @method \Http\Promise\Promise describeDistinctReleasesAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentList(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentListAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentAssets(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentAssetsAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentAssetForm(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentAssetFormAsync($arguments = [])
 * @method \Dew\Acs\Result describeApiList(array $arguments = [])
 * @method \Http\Promise\Promise describeApiListAsync($arguments = [])
 * @method \Dew\Acs\Result deletePlaybook(array $arguments = [])
 * @method \Http\Promise\Promise deletePlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result deleteComponentAsset(array $arguments = [])
 * @method \Http\Promise\Promise deleteComponentAssetAsync($arguments = [])
 * @method \Dew\Acs\Result debugPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise debugPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result comparePlaybooks(array $arguments = [])
 * @method \Http\Promise\Promise comparePlaybooksAsync($arguments = [])
 * @method \Dew\Acs\Result batchModifyInstanceStatus(array $arguments = [])
 * @method \Http\Promise\Promise batchModifyInstanceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result createPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise createPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentsJs(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentsJsAsync($arguments = [])
 * @method \Dew\Acs\Result describeProcessTaskCount(array $arguments = [])
 * @method \Http\Promise\Promise describeProcessTaskCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeProcessTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeProcessTasksAsync($arguments = [])
 * @method \Dew\Acs\Result triggerProcessTask(array $arguments = [])
 * @method \Http\Promise\Promise triggerProcessTaskAsync($arguments = [])
 */
final class SophonsoarClient extends AcsClient
{
    //
}

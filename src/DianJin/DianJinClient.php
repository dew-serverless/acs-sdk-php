<?php

declare(strict_types=1);

namespace Dew\Acs\DianJin;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result getAppConfig(array $arguments = [])
 * @method \Http\Promise\Promise getAppConfigAsync($arguments = [])
 * @method \Dew\Acs\Result createLibrary(array $arguments = [])
 * @method \Http\Promise\Promise createLibraryAsync($arguments = [])
 * @method \Dew\Acs\Result getLibraryList(array $arguments = [])
 * @method \Http\Promise\Promise getLibraryListAsync($arguments = [])
 * @method \Dew\Acs\Result getLibrary(array $arguments = [])
 * @method \Http\Promise\Promise getLibraryAsync($arguments = [])
 * @method \Dew\Acs\Result uploadDocument(array $arguments = [])
 * @method \Http\Promise\Promise uploadDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result getDocumentUrl(array $arguments = [])
 * @method \Http\Promise\Promise getDocumentUrlAsync($arguments = [])
 * @method \Dew\Acs\Result previewDocument(array $arguments = [])
 * @method \Http\Promise\Promise previewDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result getFilterDocumentList(array $arguments = [])
 * @method \Http\Promise\Promise getFilterDocumentListAsync($arguments = [])
 * @method \Dew\Acs\Result getDocumentList(array $arguments = [])
 * @method \Http\Promise\Promise getDocumentListAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDocument(array $arguments = [])
 * @method \Http\Promise\Promise deleteDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result updateDocument(array $arguments = [])
 * @method \Http\Promise\Promise updateDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result createPredefinedDocument(array $arguments = [])
 * @method \Http\Promise\Promise createPredefinedDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result getDocumentChunkList(array $arguments = [])
 * @method \Http\Promise\Promise getDocumentChunkListAsync($arguments = [])
 * @method \Dew\Acs\Result recallDocument(array $arguments = [])
 * @method \Http\Promise\Promise recallDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result getParseResult(array $arguments = [])
 * @method \Http\Promise\Promise getParseResultAsync($arguments = [])
 * @method \Dew\Acs\Result reIndex(array $arguments = [])
 * @method \Http\Promise\Promise reIndexAsync($arguments = [])
 * @method \Dew\Acs\Result updateLibrary(array $arguments = [])
 * @method \Http\Promise\Promise updateLibraryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLibrary(array $arguments = [])
 * @method \Http\Promise\Promise deleteLibraryAsync($arguments = [])
 * @method \Dew\Acs\Result runLibraryChatGeneration(array $arguments = [])
 * @method \Http\Promise\Promise runLibraryChatGenerationAsync($arguments = [])
 * @method \Dew\Acs\Result getHistoryListByBizType(array $arguments = [])
 * @method \Http\Promise\Promise getHistoryListByBizTypeAsync($arguments = [])
 * @method \Dew\Acs\Result invokePlugin(array $arguments = [])
 * @method \Http\Promise\Promise invokePluginAsync($arguments = [])
 * @method \Dew\Acs\Result getDialogAnalysisResult(array $arguments = [])
 * @method \Http\Promise\Promise getDialogAnalysisResultAsync($arguments = [])
 * @method \Dew\Acs\Result realTimeDialog(array $arguments = [])
 * @method \Http\Promise\Promise realTimeDialogAsync($arguments = [])
 * @method \Dew\Acs\Result createDialog(array $arguments = [])
 * @method \Http\Promise\Promise createDialogAsync($arguments = [])
 * @method \Dew\Acs\Result rebuildTask(array $arguments = [])
 * @method \Http\Promise\Promise rebuildTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createAnnualDocSummaryTask(array $arguments = [])
 * @method \Http\Promise\Promise createAnnualDocSummaryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getQualityCheckTaskResult(array $arguments = [])
 * @method \Http\Promise\Promise getQualityCheckTaskResultAsync($arguments = [])
 * @method \Dew\Acs\Result createQualityCheckTask(array $arguments = [])
 * @method \Http\Promise\Promise createQualityCheckTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createDocsSummaryTask(array $arguments = [])
 * @method \Http\Promise\Promise createDocsSummaryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getTaskResult(array $arguments = [])
 * @method \Http\Promise\Promise getTaskResultAsync($arguments = [])
 * @method \Dew\Acs\Result createPdfTranslateTask(array $arguments = [])
 * @method \Http\Promise\Promise createPdfTranslateTaskAsync($arguments = [])
 * @method \Dew\Acs\Result recognizeIntention(array $arguments = [])
 * @method \Http\Promise\Promise recognizeIntentionAsync($arguments = [])
 * @method \Dew\Acs\Result createFinReportSummaryTask(array $arguments = [])
 * @method \Http\Promise\Promise createFinReportSummaryTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getTaskStatus(array $arguments = [])
 * @method \Http\Promise\Promise getTaskStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getSummaryTaskResult(array $arguments = [])
 * @method \Http\Promise\Promise getSummaryTaskResultAsync($arguments = [])
 * @method \Dew\Acs\Result evictTask(array $arguments = [])
 * @method \Http\Promise\Promise evictTaskAsync($arguments = [])
 * @method \Dew\Acs\Result runChatResultGeneration(array $arguments = [])
 * @method \Http\Promise\Promise runChatResultGenerationAsync($arguments = [])
 * @method \Dew\Acs\Result getChatQuestionResp(array $arguments = [])
 * @method \Http\Promise\Promise getChatQuestionRespAsync($arguments = [])
 * @method \Dew\Acs\Result genDocQaResult(array $arguments = [])
 * @method \Http\Promise\Promise genDocQaResultAsync($arguments = [])
 * @method \Dew\Acs\Result updateQaLibrary(array $arguments = [])
 * @method \Http\Promise\Promise updateQaLibraryAsync($arguments = [])
 * @method \Dew\Acs\Result submitChatQuestion(array $arguments = [])
 * @method \Http\Promise\Promise submitChatQuestionAsync($arguments = [])
 */
final class DianJinClient extends AcsClient
{
    //
}

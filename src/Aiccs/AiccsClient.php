<?php

declare(strict_types=1);

namespace Dew\Acs\Aiccs;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result queryConversationDetailInfo(array $arguments = [])
 * @method \Http\Promise\Promise queryConversationDetailInfoAsync($arguments = [])
 * @method \Dew\Acs\Result queryAiCallDetailPage(array $arguments = [])
 * @method \Http\Promise\Promise queryAiCallDetailPageAsync($arguments = [])
 * @method \Dew\Acs\Result stopAiCallTask(array $arguments = [])
 * @method \Http\Promise\Promise stopAiCallTaskAsync($arguments = [])
 * @method \Dew\Acs\Result cancelAiCallDetails(array $arguments = [])
 * @method \Http\Promise\Promise cancelAiCallDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result startAiCallTask(array $arguments = [])
 * @method \Http\Promise\Promise startAiCallTaskAsync($arguments = [])
 * @method \Dew\Acs\Result updateAiCallTask(array $arguments = [])
 * @method \Http\Promise\Promise updateAiCallTaskAsync($arguments = [])
 * @method \Dew\Acs\Result queryAiCallTaskPage(array $arguments = [])
 * @method \Http\Promise\Promise queryAiCallTaskPageAsync($arguments = [])
 * @method \Dew\Acs\Result queryAiCallTaskDetail(array $arguments = [])
 * @method \Http\Promise\Promise queryAiCallTaskDetailAsync($arguments = [])
 * @method \Dew\Acs\Result importTaskNumberDatas(array $arguments = [])
 * @method \Http\Promise\Promise importTaskNumberDatasAsync($arguments = [])
 * @method \Dew\Acs\Result createAiCallTask(array $arguments = [])
 * @method \Http\Promise\Promise createAiCallTaskAsync($arguments = [])
 * @method \Dew\Acs\Result llmSmartCall(array $arguments = [])
 * @method \Http\Promise\Promise llmSmartCallAsync($arguments = [])
 * @method \Dew\Acs\Result llmSmartCallEncrypt(array $arguments = [])
 * @method \Http\Promise\Promise llmSmartCallEncryptAsync($arguments = [])
 * @method \Dew\Acs\Result hangupOperate(array $arguments = [])
 * @method \Http\Promise\Promise hangupOperateAsync($arguments = [])
 * @method \Dew\Acs\Result listAvailableTts(array $arguments = [])
 * @method \Http\Promise\Promise listAvailableTtsAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineServiceStatistics(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineServiceStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result getSkillGroupAndAgentStatusSummary(array $arguments = [])
 * @method \Http\Promise\Promise getSkillGroupAndAgentStatusSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result getDepartmentalLatitudeAgentStatus(array $arguments = [])
 * @method \Http\Promise\Promise getDepartmentalLatitudeAgentStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getSkillGroupLatitudeState(array $arguments = [])
 * @method \Http\Promise\Promise getSkillGroupLatitudeStateAsync($arguments = [])
 * @method \Dew\Acs\Result getAgentBasisStatus(array $arguments = [])
 * @method \Http\Promise\Promise getAgentBasisStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getAgentStatistics(array $arguments = [])
 * @method \Http\Promise\Promise getAgentStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result getOnlineServiceVolume(array $arguments = [])
 * @method \Http\Promise\Promise getOnlineServiceVolumeAsync($arguments = [])
 * @method \Dew\Acs\Result getSeatInformation(array $arguments = [])
 * @method \Http\Promise\Promise getSeatInformationAsync($arguments = [])
 * @method \Dew\Acs\Result getSkillGroupServiceCapability(array $arguments = [])
 * @method \Http\Promise\Promise getSkillGroupServiceCapabilityAsync($arguments = [])
 * @method \Dew\Acs\Result getSkillGroupAgentStatusDetails(array $arguments = [])
 * @method \Http\Promise\Promise getSkillGroupAgentStatusDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result getOnlineSeatInformation(array $arguments = [])
 * @method \Http\Promise\Promise getOnlineSeatInformationAsync($arguments = [])
 * @method \Dew\Acs\Result getQueueInformation(array $arguments = [])
 * @method \Http\Promise\Promise getQueueInformationAsync($arguments = [])
 * @method \Dew\Acs\Result getSkillGroupStatusTotal(array $arguments = [])
 * @method \Http\Promise\Promise getSkillGroupStatusTotalAsync($arguments = [])
 * @method \Dew\Acs\Result getAgentDetailReport(array $arguments = [])
 * @method \Http\Promise\Promise getAgentDetailReportAsync($arguments = [])
 * @method \Dew\Acs\Result getSkillGroupServiceStatus(array $arguments = [])
 * @method \Http\Promise\Promise getSkillGroupServiceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getAgentServiceStatus(array $arguments = [])
 * @method \Http\Promise\Promise getAgentServiceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result createAgent(array $arguments = [])
 * @method \Http\Promise\Promise createAgentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAgent(array $arguments = [])
 * @method \Http\Promise\Promise deleteAgentAsync($arguments = [])
 * @method \Dew\Acs\Result updateAgent(array $arguments = [])
 * @method \Http\Promise\Promise updateAgentAsync($arguments = [])
 * @method \Dew\Acs\Result getAgent(array $arguments = [])
 * @method \Http\Promise\Promise getAgentAsync($arguments = [])
 * @method \Dew\Acs\Result listAgentBySkillGroupId(array $arguments = [])
 * @method \Http\Promise\Promise listAgentBySkillGroupIdAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineAgentStatus(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineAgentStatusAsync($arguments = [])
 * @method \Dew\Acs\Result removeAgentFromSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise removeAgentFromSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineAgentDetail(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineAgentDetailAsync($arguments = [])
 * @method \Dew\Acs\Result createSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise createSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result removeSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise removeSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result querySkillGroups(array $arguments = [])
 * @method \Http\Promise\Promise querySkillGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result listSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise listSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getDepGroupTreeData(array $arguments = [])
 * @method \Http\Promise\Promise getDepGroupTreeDataAsync($arguments = [])
 * @method \Dew\Acs\Result createDepartment(array $arguments = [])
 * @method \Http\Promise\Promise createDepartmentAsync($arguments = [])
 * @method \Dew\Acs\Result getAllDepartment(array $arguments = [])
 * @method \Http\Promise\Promise getAllDepartmentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDepartment(array $arguments = [])
 * @method \Http\Promise\Promise deleteDepartmentAsync($arguments = [])
 * @method \Dew\Acs\Result updateDepartment(array $arguments = [])
 * @method \Http\Promise\Promise updateDepartmentAsync($arguments = [])
 * @method \Dew\Acs\Result generateWebSocketSign(array $arguments = [])
 * @method \Http\Promise\Promise generateWebSocketSignAsync($arguments = [])
 * @method \Dew\Acs\Result hotlineSessionQuery(array $arguments = [])
 * @method \Http\Promise\Promise hotlineSessionQueryAsync($arguments = [])
 * @method \Dew\Acs\Result getRecordData(array $arguments = [])
 * @method \Http\Promise\Promise getRecordDataAsync($arguments = [])
 * @method \Dew\Acs\Result getRecordUrl(array $arguments = [])
 * @method \Http\Promise\Promise getRecordUrlAsync($arguments = [])
 * @method \Dew\Acs\Result describeRecordData(array $arguments = [])
 * @method \Http\Promise\Promise describeRecordDataAsync($arguments = [])
 * @method \Dew\Acs\Result getIndexCurrentValue(array $arguments = [])
 * @method \Http\Promise\Promise getIndexCurrentValueAsync($arguments = [])
 * @method \Dew\Acs\Result getAgentIndexRealTime(array $arguments = [])
 * @method \Http\Promise\Promise getAgentIndexRealTimeAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineAgentDetailReport(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineAgentDetailReportAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineGroupDetailReport(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineGroupDetailReportAsync($arguments = [])
 * @method \Dew\Acs\Result queryTouchList(array $arguments = [])
 * @method \Http\Promise\Promise queryTouchListAsync($arguments = [])
 * @method \Dew\Acs\Result getCustomerInfo(array $arguments = [])
 * @method \Http\Promise\Promise getCustomerInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineMessageLog(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineMessageLogAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineCallAction(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineCallActionAsync($arguments = [])
 * @method \Dew\Acs\Result robotCall(array $arguments = [])
 * @method \Http\Promise\Promise robotCallAsync($arguments = [])
 * @method \Dew\Acs\Result listRobotCallDialog(array $arguments = [])
 * @method \Http\Promise\Promise listRobotCallDialogAsync($arguments = [])
 * @method \Dew\Acs\Result listAiccsRobot(array $arguments = [])
 * @method \Http\Promise\Promise listAiccsRobotAsync($arguments = [])
 * @method \Dew\Acs\Result listRobotParams(array $arguments = [])
 * @method \Http\Promise\Promise listRobotParamsAsync($arguments = [])
 * @method \Dew\Acs\Result getCallSoundRecord(array $arguments = [])
 * @method \Http\Promise\Promise getCallSoundRecordAsync($arguments = [])
 * @method \Dew\Acs\Result listRobotNode(array $arguments = [])
 * @method \Http\Promise\Promise listRobotNodeAsync($arguments = [])
 * @method \Dew\Acs\Result createTask(array $arguments = [])
 * @method \Http\Promise\Promise createTaskAsync($arguments = [])
 * @method \Dew\Acs\Result attachTask(array $arguments = [])
 * @method \Http\Promise\Promise attachTaskAsync($arguments = [])
 * @method \Dew\Acs\Result startTask(array $arguments = [])
 * @method \Http\Promise\Promise startTaskAsync($arguments = [])
 * @method \Dew\Acs\Result stopTask(array $arguments = [])
 * @method \Http\Promise\Promise stopTaskAsync($arguments = [])
 * @method \Dew\Acs\Result cancelTask(array $arguments = [])
 * @method \Http\Promise\Promise cancelTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listTask(array $arguments = [])
 * @method \Http\Promise\Promise listTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listTaskDetail(array $arguments = [])
 * @method \Http\Promise\Promise listTaskDetailAsync($arguments = [])
 * @method \Dew\Acs\Result listDialog(array $arguments = [])
 * @method \Http\Promise\Promise listDialogAsync($arguments = [])
 * @method \Dew\Acs\Result sendCcoSmartCall(array $arguments = [])
 * @method \Http\Promise\Promise sendCcoSmartCallAsync($arguments = [])
 * @method \Dew\Acs\Result sendCcoSmartCallOperate(array $arguments = [])
 * @method \Http\Promise\Promise sendCcoSmartCallOperateAsync($arguments = [])
 * @method \Dew\Acs\Result createAiOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise createAiOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createAiOutboundTaskBatch(array $arguments = [])
 * @method \Http\Promise\Promise createAiOutboundTaskBatchAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAiOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteAiOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getAiOutboundTaskBizData(array $arguments = [])
 * @method \Http\Promise\Promise getAiOutboundTaskBizDataAsync($arguments = [])
 * @method \Dew\Acs\Result getAiOutboundTaskExecDetail(array $arguments = [])
 * @method \Http\Promise\Promise getAiOutboundTaskExecDetailAsync($arguments = [])
 * @method \Dew\Acs\Result getAiOutboundTaskDetail(array $arguments = [])
 * @method \Http\Promise\Promise getAiOutboundTaskDetailAsync($arguments = [])
 * @method \Dew\Acs\Result updateAiOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise updateAiOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result insertAiOutboundPhoneNums(array $arguments = [])
 * @method \Http\Promise\Promise insertAiOutboundPhoneNumsAsync($arguments = [])
 * @method \Dew\Acs\Result getAiOutboundTaskProgress(array $arguments = [])
 * @method \Http\Promise\Promise getAiOutboundTaskProgressAsync($arguments = [])
 * @method \Dew\Acs\Result stopAiOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise stopAiOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result terminateAiOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise terminateAiOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getAiOutboundTaskList(array $arguments = [])
 * @method \Http\Promise\Promise getAiOutboundTaskListAsync($arguments = [])
 * @method \Dew\Acs\Result startAiOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise startAiOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result addHotlineNumber(array $arguments = [])
 * @method \Http\Promise\Promise addHotlineNumberAsync($arguments = [])
 * @method \Dew\Acs\Result deleteHotlineNumber(array $arguments = [])
 * @method \Http\Promise\Promise deleteHotlineNumberAsync($arguments = [])
 * @method \Dew\Acs\Result resetHotlineNumber(array $arguments = [])
 * @method \Http\Promise\Promise resetHotlineNumberAsync($arguments = [])
 * @method \Dew\Acs\Result queryHotlineNumber(array $arguments = [])
 * @method \Http\Promise\Promise queryHotlineNumberAsync($arguments = [])
 * @method \Dew\Acs\Result getConfigNumList(array $arguments = [])
 * @method \Http\Promise\Promise getConfigNumListAsync($arguments = [])
 * @method \Dew\Acs\Result answerCall(array $arguments = [])
 * @method \Http\Promise\Promise answerCallAsync($arguments = [])
 * @method \Dew\Acs\Result finishHotlineService(array $arguments = [])
 * @method \Http\Promise\Promise finishHotlineServiceAsync($arguments = [])
 * @method \Dew\Acs\Result getNumLocation(array $arguments = [])
 * @method \Http\Promise\Promise getNumLocationAsync($arguments = [])
 * @method \Dew\Acs\Result getRtcToken(array $arguments = [])
 * @method \Http\Promise\Promise getRtcTokenAsync($arguments = [])
 * @method \Dew\Acs\Result hangupCall(array $arguments = [])
 * @method \Http\Promise\Promise hangupCallAsync($arguments = [])
 * @method \Dew\Acs\Result listHotlineRecord(array $arguments = [])
 * @method \Http\Promise\Promise listHotlineRecordAsync($arguments = [])
 * @method \Dew\Acs\Result listOutboundPhoneNumber(array $arguments = [])
 * @method \Http\Promise\Promise listOutboundPhoneNumberAsync($arguments = [])
 * @method \Dew\Acs\Result makeDoubleCall(array $arguments = [])
 * @method \Http\Promise\Promise makeDoubleCallAsync($arguments = [])
 * @method \Dew\Acs\Result sendHotlineHeartBeat(array $arguments = [])
 * @method \Http\Promise\Promise sendHotlineHeartBeatAsync($arguments = [])
 * @method \Dew\Acs\Result startCall(array $arguments = [])
 * @method \Http\Promise\Promise startCallAsync($arguments = [])
 * @method \Dew\Acs\Result startHotlineService(array $arguments = [])
 * @method \Http\Promise\Promise startHotlineServiceAsync($arguments = [])
 * @method \Dew\Acs\Result suspendHotlineService(array $arguments = [])
 * @method \Http\Promise\Promise suspendHotlineServiceAsync($arguments = [])
 * @method \Dew\Acs\Result addOuterAccount(array $arguments = [])
 * @method \Http\Promise\Promise addOuterAccountAsync($arguments = [])
 * @method \Dew\Acs\Result aiccsSmartCall(array $arguments = [])
 * @method \Http\Promise\Promise aiccsSmartCallAsync($arguments = [])
 * @method \Dew\Acs\Result aiccsSmartCallOperate(array $arguments = [])
 * @method \Http\Promise\Promise aiccsSmartCallOperateAsync($arguments = [])
 * @method \Dew\Acs\Result batchCreateQualityProjects(array $arguments = [])
 * @method \Http\Promise\Promise batchCreateQualityProjectsAsync($arguments = [])
 * @method \Dew\Acs\Result changeChatAgentStatus(array $arguments = [])
 * @method \Http\Promise\Promise changeChatAgentStatusAsync($arguments = [])
 * @method \Dew\Acs\Result changeQualityProjectStatus(array $arguments = [])
 * @method \Http\Promise\Promise changeQualityProjectStatusAsync($arguments = [])
 * @method \Dew\Acs\Result createOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise createOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createQualityProject(array $arguments = [])
 * @method \Http\Promise\Promise createQualityProjectAsync($arguments = [])
 * @method \Dew\Acs\Result createQualityRule(array $arguments = [])
 * @method \Http\Promise\Promise createQualityRuleAsync($arguments = [])
 * @method \Dew\Acs\Result createThirdSsoAgent(array $arguments = [])
 * @method \Http\Promise\Promise createThirdSsoAgentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteOuterAccount(array $arguments = [])
 * @method \Http\Promise\Promise deleteOuterAccountAsync($arguments = [])
 * @method \Dew\Acs\Result deleteQualityProject(array $arguments = [])
 * @method \Http\Promise\Promise deleteQualityProjectAsync($arguments = [])
 * @method \Dew\Acs\Result deleteQualityRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteQualityRuleAsync($arguments = [])
 * @method \Dew\Acs\Result editQualityProject(array $arguments = [])
 * @method \Http\Promise\Promise editQualityProjectAsync($arguments = [])
 * @method \Dew\Acs\Result editQualityRule(array $arguments = [])
 * @method \Http\Promise\Promise editQualityRuleAsync($arguments = [])
 * @method \Dew\Acs\Result editQualityRuleTag(array $arguments = [])
 * @method \Http\Promise\Promise editQualityRuleTagAsync($arguments = [])
 * @method \Dew\Acs\Result encryptPhoneNum(array $arguments = [])
 * @method \Http\Promise\Promise encryptPhoneNumAsync($arguments = [])
 * @method \Dew\Acs\Result fetchCall(array $arguments = [])
 * @method \Http\Promise\Promise fetchCallAsync($arguments = [])
 * @method \Dew\Acs\Result getAgentById(array $arguments = [])
 * @method \Http\Promise\Promise getAgentByIdAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineRuntimeInfo(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineRuntimeInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getHotlineWaitingNumber(array $arguments = [])
 * @method \Http\Promise\Promise getHotlineWaitingNumberAsync($arguments = [])
 * @method \Dew\Acs\Result getInstanceList(array $arguments = [])
 * @method \Http\Promise\Promise getInstanceListAsync($arguments = [])
 * @method \Dew\Acs\Result getMcuLvsIp(array $arguments = [])
 * @method \Http\Promise\Promise getMcuLvsIpAsync($arguments = [])
 * @method \Dew\Acs\Result getOutbounNumList(array $arguments = [])
 * @method \Http\Promise\Promise getOutbounNumListAsync($arguments = [])
 * @method \Dew\Acs\Result getQualityProjectDetail(array $arguments = [])
 * @method \Http\Promise\Promise getQualityProjectDetailAsync($arguments = [])
 * @method \Dew\Acs\Result getQualityProjectList(array $arguments = [])
 * @method \Http\Promise\Promise getQualityProjectListAsync($arguments = [])
 * @method \Dew\Acs\Result getQualityProjectLog(array $arguments = [])
 * @method \Http\Promise\Promise getQualityProjectLogAsync($arguments = [])
 * @method \Dew\Acs\Result getQualityResult(array $arguments = [])
 * @method \Http\Promise\Promise getQualityResultAsync($arguments = [])
 * @method \Dew\Acs\Result getQualityRuleDetail(array $arguments = [])
 * @method \Http\Promise\Promise getQualityRuleDetailAsync($arguments = [])
 * @method \Dew\Acs\Result getQualityRuleList(array $arguments = [])
 * @method \Http\Promise\Promise getQualityRuleListAsync($arguments = [])
 * @method \Dew\Acs\Result getQualityRuleTagList(array $arguments = [])
 * @method \Http\Promise\Promise getQualityRuleTagListAsync($arguments = [])
 * @method \Dew\Acs\Result hangUpDoubleCall(array $arguments = [])
 * @method \Http\Promise\Promise hangUpDoubleCallAsync($arguments = [])
 * @method \Dew\Acs\Result hangupThirdCall(array $arguments = [])
 * @method \Http\Promise\Promise hangupThirdCallAsync($arguments = [])
 * @method \Dew\Acs\Result holdCall(array $arguments = [])
 * @method \Http\Promise\Promise holdCallAsync($arguments = [])
 * @method \Dew\Acs\Result insertTaskDetail(array $arguments = [])
 * @method \Http\Promise\Promise insertTaskDetailAsync($arguments = [])
 * @method \Dew\Acs\Result joinThirdCall(array $arguments = [])
 * @method \Http\Promise\Promise joinThirdCallAsync($arguments = [])
 * @method \Dew\Acs\Result listChatRecordDetail(array $arguments = [])
 * @method \Http\Promise\Promise listChatRecordDetailAsync($arguments = [])
 * @method \Dew\Acs\Result listHotlineRecordDetail(array $arguments = [])
 * @method \Http\Promise\Promise listHotlineRecordDetailAsync($arguments = [])
 * @method \Dew\Acs\Result listRoles(array $arguments = [])
 * @method \Http\Promise\Promise listRolesAsync($arguments = [])
 * @method \Dew\Acs\Result makeCall(array $arguments = [])
 * @method \Http\Promise\Promise makeCallAsync($arguments = [])
 * @method \Dew\Acs\Result queryHotlineInQueue(array $arguments = [])
 * @method \Http\Promise\Promise queryHotlineInQueueAsync($arguments = [])
 * @method \Dew\Acs\Result queryOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise queryOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result queryTaskDetail(array $arguments = [])
 * @method \Http\Promise\Promise queryTaskDetailAsync($arguments = [])
 * @method \Dew\Acs\Result queryTickets(array $arguments = [])
 * @method \Http\Promise\Promise queryTicketsAsync($arguments = [])
 * @method \Dew\Acs\Result restartOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise restartOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result startCallV2(array $arguments = [])
 * @method \Http\Promise\Promise startCallV2Async($arguments = [])
 * @method \Dew\Acs\Result startChatWork(array $arguments = [])
 * @method \Http\Promise\Promise startChatWorkAsync($arguments = [])
 * @method \Dew\Acs\Result startMicroOutbound(array $arguments = [])
 * @method \Http\Promise\Promise startMicroOutboundAsync($arguments = [])
 * @method \Dew\Acs\Result suspendOutboundTask(array $arguments = [])
 * @method \Http\Promise\Promise suspendOutboundTaskAsync($arguments = [])
 * @method \Dew\Acs\Result updateOuterAccount(array $arguments = [])
 * @method \Http\Promise\Promise updateOuterAccountAsync($arguments = [])
 * @method \Dew\Acs\Result transferCallToSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise transferCallToSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result addSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise addSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteSkillGroupAsync($arguments = [])
 */
final class AiccsClient extends AcsClient
{
    //
}

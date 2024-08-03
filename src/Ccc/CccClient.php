<?php

declare(strict_types=1);

namespace Dew\Acs\Ccc;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result listPrivilegesOfUser(array $arguments = [])
 * @method \Http\Promise\Promise listPrivilegesOfUserAsync($arguments = [])
 * @method \Dew\Acs\Result listRoles(array $arguments = [])
 * @method \Http\Promise\Promise listRolesAsync($arguments = [])
 * @method \Dew\Acs\Result createInstance(array $arguments = [])
 * @method \Http\Promise\Promise createInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getInstance(array $arguments = [])
 * @method \Http\Promise\Promise getInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listInstances(array $arguments = [])
 * @method \Http\Promise\Promise listInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result listInstancesOfUser(array $arguments = [])
 * @method \Http\Promise\Promise listInstancesOfUserAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstance(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result addPersonalNumbersToUser(array $arguments = [])
 * @method \Http\Promise\Promise addPersonalNumbersToUserAsync($arguments = [])
 * @method \Dew\Acs\Result addPhoneNumbers(array $arguments = [])
 * @method \Http\Promise\Promise addPhoneNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result addPhoneNumberToSkillGroups(array $arguments = [])
 * @method \Http\Promise\Promise addPhoneNumberToSkillGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result listOutboundNumbersOfUser(array $arguments = [])
 * @method \Http\Promise\Promise listOutboundNumbersOfUserAsync($arguments = [])
 * @method \Dew\Acs\Result listPersonalNumbersOfUser(array $arguments = [])
 * @method \Http\Promise\Promise listPersonalNumbersOfUserAsync($arguments = [])
 * @method \Dew\Acs\Result listPhoneNumbers(array $arguments = [])
 * @method \Http\Promise\Promise listPhoneNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result listPhoneNumbersOfSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise listPhoneNumbersOfSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listUnassignedNumbers(array $arguments = [])
 * @method \Http\Promise\Promise listUnassignedNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPhoneNumber(array $arguments = [])
 * @method \Http\Promise\Promise modifyPhoneNumberAsync($arguments = [])
 * @method \Dew\Acs\Result importCorpNumbers(array $arguments = [])
 * @method \Http\Promise\Promise importCorpNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result removePersonalNumbersFromUser(array $arguments = [])
 * @method \Http\Promise\Promise removePersonalNumbersFromUserAsync($arguments = [])
 * @method \Dew\Acs\Result removePhoneNumberFromSkillGroups(array $arguments = [])
 * @method \Http\Promise\Promise removePhoneNumberFromSkillGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result removePhoneNumbers(array $arguments = [])
 * @method \Http\Promise\Promise removePhoneNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result removePhoneNumbersFromSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise removePhoneNumbersFromSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createContactFlow(array $arguments = [])
 * @method \Http\Promise\Promise createContactFlowAsync($arguments = [])
 * @method \Dew\Acs\Result listContactFlows(array $arguments = [])
 * @method \Http\Promise\Promise listContactFlowsAsync($arguments = [])
 * @method \Dew\Acs\Result getContactFlow(array $arguments = [])
 * @method \Http\Promise\Promise getContactFlowAsync($arguments = [])
 * @method \Dew\Acs\Result startEditContactFlow(array $arguments = [])
 * @method \Http\Promise\Promise startEditContactFlowAsync($arguments = [])
 * @method \Dew\Acs\Result commitContactFlow(array $arguments = [])
 * @method \Http\Promise\Promise commitContactFlowAsync($arguments = [])
 * @method \Dew\Acs\Result publishContactFlow(array $arguments = [])
 * @method \Http\Promise\Promise publishContactFlowAsync($arguments = [])
 * @method \Dew\Acs\Result discardEditingContactFlow(array $arguments = [])
 * @method \Http\Promise\Promise discardEditingContactFlowAsync($arguments = [])
 * @method \Dew\Acs\Result deleteContactFlow(array $arguments = [])
 * @method \Http\Promise\Promise deleteContactFlowAsync($arguments = [])
 * @method \Dew\Acs\Result addNumbersToSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise addNumbersToSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result addUsersToSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise addUsersToSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise createSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise getSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listBriefSkillGroups(array $arguments = [])
 * @method \Http\Promise\Promise listBriefSkillGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result listSkillGroups(array $arguments = [])
 * @method \Http\Promise\Promise listSkillGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result listSkillLevelsOfUser(array $arguments = [])
 * @method \Http\Promise\Promise listSkillLevelsOfUserAsync($arguments = [])
 * @method \Dew\Acs\Result modifySkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifySkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifySkillLevelsOfUser(array $arguments = [])
 * @method \Http\Promise\Promise modifySkillLevelsOfUserAsync($arguments = [])
 * @method \Dew\Acs\Result removeSkillGroupsFromUser(array $arguments = [])
 * @method \Http\Promise\Promise removeSkillGroupsFromUserAsync($arguments = [])
 * @method \Dew\Acs\Result addSkillGroupsToUser(array $arguments = [])
 * @method \Http\Promise\Promise addSkillGroupsToUserAsync($arguments = [])
 * @method \Dew\Acs\Result assignUsers(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise assignUsersAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result changeWorkMode(array $arguments = [])
 * @method \Http\Promise\Promise changeWorkModeAsync($arguments = [])
 * @method \Dew\Acs\Result createUser(array $arguments = [])
 * @method \Http\Promise\Promise createUserAsync($arguments = [])
 * @method \Dew\Acs\Result getUser(array $arguments = [])
 * @method \Http\Promise\Promise getUserAsync($arguments = [])
 * @method \Dew\Acs\Result importAdmins(array $arguments = [])
 * @method \Http\Promise\Promise importAdminsAsync($arguments = [])
 * @method \Dew\Acs\Result listDevices(array $arguments = [])
 * @method \Http\Promise\Promise listDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result listRamUsers(array $arguments = [])
 * @method \Http\Promise\Promise listRamUsersAsync($arguments = [])
 * @method \Dew\Acs\Result listUserLevelsOfSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise listUserLevelsOfSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listUsers(array $arguments = [])
 * @method \Http\Promise\Promise listUsersAsync($arguments = [])
 * @method \Dew\Acs\Result modifyUser(array $arguments = [])
 * @method \Http\Promise\Promise modifyUserAsync($arguments = [])
 * @method \Dew\Acs\Result modifyUserLevelsOfSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyUserLevelsOfSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result registerDevice(array $arguments = [])
 * @method \Http\Promise\Promise registerDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result registerDevices(array $arguments = [])
 * @method \Http\Promise\Promise registerDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result removeUsers(array $arguments = [])
 * @method \Http\Promise\Promise removeUsersAsync($arguments = [])
 * @method \Dew\Acs\Result removeUsersFromSkillGroup(array $arguments = [])
 * @method \Http\Promise\Promise removeUsersFromSkillGroupAsync($arguments = [])
 * @method \Dew\Acs\Result resetAgentState(array $arguments = [])
 * @method \Http\Promise\Promise resetAgentStateAsync($arguments = [])
 * @method \Dew\Acs\Result resetUserPassword(array $arguments = [])
 * @method \Http\Promise\Promise resetUserPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result unregisterDevice(array $arguments = [])
 * @method \Http\Promise\Promise unregisterDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result answerCall(array $arguments = [])
 * @method \Http\Promise\Promise answerCallAsync($arguments = [])
 * @method \Dew\Acs\Result bargeInCall(array $arguments = [])
 * @method \Http\Promise\Promise bargeInCallAsync($arguments = [])
 * @method \Dew\Acs\Result blindTransfer(array $arguments = [])
 * @method \Http\Promise\Promise blindTransferAsync($arguments = [])
 * @method \Dew\Acs\Result cancelAttendedTransfer(array $arguments = [])
 * @method \Http\Promise\Promise cancelAttendedTransferAsync($arguments = [])
 * @method \Dew\Acs\Result coachCall(array $arguments = [])
 * @method \Http\Promise\Promise coachCallAsync($arguments = [])
 * @method \Dew\Acs\Result completeAttendedTransfer(array $arguments = [])
 * @method \Http\Promise\Promise completeAttendedTransferAsync($arguments = [])
 * @method \Dew\Acs\Result endConference(array $arguments = [])
 * @method \Http\Promise\Promise endConferenceAsync($arguments = [])
 * @method \Dew\Acs\Result getNumberLocation(array $arguments = [])
 * @method \Http\Promise\Promise getNumberLocationAsync($arguments = [])
 * @method \Dew\Acs\Result holdCall(array $arguments = [])
 * @method \Http\Promise\Promise holdCallAsync($arguments = [])
 * @method \Dew\Acs\Result initiateAttendedTransfer(array $arguments = [])
 * @method \Http\Promise\Promise initiateAttendedTransferAsync($arguments = [])
 * @method \Dew\Acs\Result interceptCall(array $arguments = [])
 * @method \Http\Promise\Promise interceptCallAsync($arguments = [])
 * @method \Dew\Acs\Result launchAuthentication(array $arguments = [])
 * @method \Http\Promise\Promise launchAuthenticationAsync($arguments = [])
 * @method \Dew\Acs\Result launchSurvey(array $arguments = [])
 * @method \Http\Promise\Promise launchSurveyAsync($arguments = [])
 * @method \Dew\Acs\Result makeCall(array $arguments = [])
 * @method \Http\Promise\Promise makeCallAsync($arguments = [])
 * @method \Dew\Acs\Result monitorCall(array $arguments = [])
 * @method \Http\Promise\Promise monitorCallAsync($arguments = [])
 * @method \Dew\Acs\Result muteCall(array $arguments = [])
 * @method \Http\Promise\Promise muteCallAsync($arguments = [])
 * @method \Dew\Acs\Result pickOutboundNumbers(array $arguments = [])
 * @method \Http\Promise\Promise pickOutboundNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result pollUserStatus(array $arguments = [])
 * @method \Http\Promise\Promise pollUserStatusAsync($arguments = [])
 * @method \Dew\Acs\Result readyForService(array $arguments = [])
 * @method \Http\Promise\Promise readyForServiceAsync($arguments = [])
 * @method \Dew\Acs\Result redialCall(array $arguments = [])
 * @method \Http\Promise\Promise redialCallAsync($arguments = [])
 * @method \Dew\Acs\Result releaseCall(array $arguments = [])
 * @method \Http\Promise\Promise releaseCallAsync($arguments = [])
 * @method \Dew\Acs\Result retrieveCall(array $arguments = [])
 * @method \Http\Promise\Promise retrieveCallAsync($arguments = [])
 * @method \Dew\Acs\Result saveRTCStatsV2(array $arguments = [])
 * @method \Http\Promise\Promise saveRTCStatsV2Async($arguments = [])
 * @method \Dew\Acs\Result saveTerminalLog(array $arguments = [])
 * @method \Http\Promise\Promise saveTerminalLogAsync($arguments = [])
 * @method \Dew\Acs\Result saveWebRtcInfo(array $arguments = [])
 * @method \Http\Promise\Promise saveWebRtcInfoAsync($arguments = [])
 * @method \Dew\Acs\Result saveWebRTCStats(array $arguments = [])
 * @method \Http\Promise\Promise saveWebRTCStatsAsync($arguments = [])
 * @method \Dew\Acs\Result sendDtmfSignaling(array $arguments = [])
 * @method \Http\Promise\Promise sendDtmfSignalingAsync($arguments = [])
 * @method \Dew\Acs\Result signInGroup(array $arguments = [])
 * @method \Http\Promise\Promise signInGroupAsync($arguments = [])
 * @method \Dew\Acs\Result signOutGroup(array $arguments = [])
 * @method \Http\Promise\Promise signOutGroupAsync($arguments = [])
 * @method \Dew\Acs\Result startBack2BackCall(array $arguments = [])
 * @method \Http\Promise\Promise startBack2BackCallAsync($arguments = [])
 * @method \Dew\Acs\Result startConference(array $arguments = [])
 * @method \Http\Promise\Promise startConferenceAsync($arguments = [])
 * @method \Dew\Acs\Result startPredictiveCall(array $arguments = [])
 * @method \Http\Promise\Promise startPredictiveCallAsync($arguments = [])
 * @method \Dew\Acs\Result startPrivacyCall(array $arguments = [])
 * @method \Http\Promise\Promise startPrivacyCallAsync($arguments = [])
 * @method \Dew\Acs\Result switchToConference(array $arguments = [])
 * @method \Http\Promise\Promise switchToConferenceAsync($arguments = [])
 * @method \Dew\Acs\Result takeBreak(array $arguments = [])
 * @method \Http\Promise\Promise takeBreakAsync($arguments = [])
 * @method \Dew\Acs\Result unmuteCall(array $arguments = [])
 * @method \Http\Promise\Promise unmuteCallAsync($arguments = [])
 * @method \Dew\Acs\Result abortCampaign(array $arguments = [])
 * @method \Http\Promise\Promise abortCampaignAsync($arguments = [])
 * @method \Dew\Acs\Result addCases(array $arguments = [])
 * @method \Http\Promise\Promise addCasesAsync($arguments = [])
 * @method \Dew\Acs\Result appendCases(array $arguments = [])
 * @method \Http\Promise\Promise appendCasesAsync($arguments = [])
 * @method \Dew\Acs\Result createCampaign(array $arguments = [])
 * @method \Http\Promise\Promise createCampaignAsync($arguments = [])
 * @method \Dew\Acs\Result getCampaign(array $arguments = [])
 * @method \Http\Promise\Promise getCampaignAsync($arguments = [])
 * @method \Dew\Acs\Result getCaseFileUploadUrl(array $arguments = [])
 * @method \Http\Promise\Promise getCaseFileUploadUrlAsync($arguments = [])
 * @method \Dew\Acs\Result getHistoricalCampaignReport(array $arguments = [])
 * @method \Http\Promise\Promise getHistoricalCampaignReportAsync($arguments = [])
 * @method \Dew\Acs\Result getRealtimeCampaignStats(array $arguments = [])
 * @method \Http\Promise\Promise getRealtimeCampaignStatsAsync($arguments = [])
 * @method \Dew\Acs\Result listAttempts(array $arguments = [])
 * @method \Http\Promise\Promise listAttemptsAsync($arguments = [])
 * @method \Dew\Acs\Result listCampaigns(array $arguments = [])
 * @method \Http\Promise\Promise listCampaignsAsync($arguments = [])
 * @method \Dew\Acs\Result listCampaignTrendingReport(array $arguments = [])
 * @method \Http\Promise\Promise listCampaignTrendingReportAsync($arguments = [])
 * @method \Dew\Acs\Result listCases(array $arguments = [])
 * @method \Http\Promise\Promise listCasesAsync($arguments = [])
 * @method \Dew\Acs\Result pauseCampaign(array $arguments = [])
 * @method \Http\Promise\Promise pauseCampaignAsync($arguments = [])
 * @method \Dew\Acs\Result resumeCampaign(array $arguments = [])
 * @method \Http\Promise\Promise resumeCampaignAsync($arguments = [])
 * @method \Dew\Acs\Result updateCampaign(array $arguments = [])
 * @method \Http\Promise\Promise updateCampaignAsync($arguments = [])
 * @method \Dew\Acs\Result submitCampaign(array $arguments = [])
 * @method \Http\Promise\Promise submitCampaignAsync($arguments = [])
 * @method \Dew\Acs\Result listIntervalAgentSkillGroupReport(array $arguments = [])
 * @method \Http\Promise\Promise listIntervalAgentSkillGroupReportAsync($arguments = [])
 * @method \Dew\Acs\Result listHistoricalAgentSkillGroupReport(array $arguments = [])
 * @method \Http\Promise\Promise listHistoricalAgentSkillGroupReportAsync($arguments = [])
 * @method \Dew\Acs\Result getCallDetailRecord(array $arguments = [])
 * @method \Http\Promise\Promise getCallDetailRecordAsync($arguments = [])
 * @method \Dew\Acs\Result getConversationDetail(array $arguments = [])
 * @method \Http\Promise\Promise getConversationDetailAsync($arguments = [])
 * @method \Dew\Acs\Result getHistoricalCallerReport(array $arguments = [])
 * @method \Http\Promise\Promise getHistoricalCallerReportAsync($arguments = [])
 * @method \Dew\Acs\Result getHistoricalInstanceReport(array $arguments = [])
 * @method \Http\Promise\Promise getHistoricalInstanceReportAsync($arguments = [])
 * @method \Dew\Acs\Result getInstanceTrendingReport(array $arguments = [])
 * @method \Http\Promise\Promise getInstanceTrendingReportAsync($arguments = [])
 * @method \Dew\Acs\Result getRealtimeInstanceStates(array $arguments = [])
 * @method \Http\Promise\Promise getRealtimeInstanceStatesAsync($arguments = [])
 * @method \Dew\Acs\Result listAgentStateLogs(array $arguments = [])
 * @method \Http\Promise\Promise listAgentStateLogsAsync($arguments = [])
 * @method \Dew\Acs\Result listCallDetailRecords(array $arguments = [])
 * @method \Http\Promise\Promise listCallDetailRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result listHistoricalAgentReport(array $arguments = [])
 * @method \Http\Promise\Promise listHistoricalAgentReportAsync($arguments = [])
 * @method \Dew\Acs\Result listHistoricalSkillGroupReport(array $arguments = [])
 * @method \Http\Promise\Promise listHistoricalSkillGroupReportAsync($arguments = [])
 * @method \Dew\Acs\Result listIntervalAgentReport(array $arguments = [])
 * @method \Http\Promise\Promise listIntervalAgentReportAsync($arguments = [])
 * @method \Dew\Acs\Result listIntervalInstanceReport(array $arguments = [])
 * @method \Http\Promise\Promise listIntervalInstanceReportAsync($arguments = [])
 * @method \Dew\Acs\Result listIntervalSkillGroupReport(array $arguments = [])
 * @method \Http\Promise\Promise listIntervalSkillGroupReportAsync($arguments = [])
 * @method \Dew\Acs\Result listIvrTrackingDetails(array $arguments = [])
 * @method \Http\Promise\Promise listIvrTrackingDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result listRealtimeAgentStates(array $arguments = [])
 * @method \Http\Promise\Promise listRealtimeAgentStatesAsync($arguments = [])
 * @method \Dew\Acs\Result listRealtimeSkillGroupStates(array $arguments = [])
 * @method \Http\Promise\Promise listRealtimeSkillGroupStatesAsync($arguments = [])
 * @method \Dew\Acs\Result listRecentCallDetailRecords(array $arguments = [])
 * @method \Http\Promise\Promise listRecentCallDetailRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result listAgentStates(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise listAgentStatesAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result listAgentSummaryReportsSinceMidnight(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise listAgentSummaryReportsSinceMidnightAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result listLegacyAgentEventLogs(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise listLegacyAgentEventLogsAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result listLegacyAgentStatusLogs(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise listLegacyAgentStatusLogsAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result listLegacyQueueEventLogs(array $arguments = [])
 * @method \Http\Promise\Promise listLegacyQueueEventLogsAsync($arguments = [])
 * @method \Dew\Acs\Result listSkillGroupStates(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise listSkillGroupStatesAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result listSkillGroupSummaryReportsSinceMidnight(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise listSkillGroupSummaryReportsSinceMidnightAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result listVoicemails(array $arguments = [])
 * @method \Http\Promise\Promise listVoicemailsAsync($arguments = [])
 * @method \Dew\Acs\Result getMonoRecording(array $arguments = [])
 * @method \Http\Promise\Promise getMonoRecordingAsync($arguments = [])
 * @method \Dew\Acs\Result getMultiChannelRecording(array $arguments = [])
 * @method \Http\Promise\Promise getMultiChannelRecordingAsync($arguments = [])
 * @method \Dew\Acs\Result getVoicemailRecording(array $arguments = [])
 * @method \Http\Promise\Promise getVoicemailRecordingAsync($arguments = [])
 * @method \Dew\Acs\Result getEarlyMediaRecording(array $arguments = [])
 * @method \Http\Promise\Promise getEarlyMediaRecordingAsync($arguments = [])
 * @method \Dew\Acs\Result listMultiChannelRecordings(array $arguments = [])
 * @method \Http\Promise\Promise listMultiChannelRecordingsAsync($arguments = [])
 * @method \Dew\Acs\Result listMonoRecordings(array $arguments = [])
 * @method \Http\Promise\Promise listMonoRecordingsAsync($arguments = [])
 * @method \Dew\Acs\Result createAudioFile(array $arguments = [])
 * @method \Http\Promise\Promise createAudioFileAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAudioFile(array $arguments = [])
 * @method \Http\Promise\Promise deleteAudioFileAsync($arguments = [])
 * @method \Dew\Acs\Result getAudioFile(array $arguments = [])
 * @method \Http\Promise\Promise getAudioFileAsync($arguments = [])
 * @method \Dew\Acs\Result getAudioFileDownloadUrl(array $arguments = [])
 * @method \Http\Promise\Promise getAudioFileDownloadUrlAsync($arguments = [])
 * @method \Dew\Acs\Result getAudioFileUploadParameters(array $arguments = [])
 * @method \Http\Promise\Promise getAudioFileUploadParametersAsync($arguments = [])
 * @method \Dew\Acs\Result listAudioFiles(array $arguments = [])
 * @method \Http\Promise\Promise listAudioFilesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAudioFile(array $arguments = [])
 * @method \Http\Promise\Promise modifyAudioFileAsync($arguments = [])
 * @method \Dew\Acs\Result getLoginDetails(array $arguments = [])
 * @method \Http\Promise\Promise getLoginDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result getTurnCredentials(array $arguments = [])
 * @method \Http\Promise\Promise getTurnCredentialsAsync($arguments = [])
 * @method \Dew\Acs\Result getTurnServerList(array $arguments = [])
 * @method \Http\Promise\Promise getTurnServerListAsync($arguments = [])
 * @method \Dew\Acs\Result listConfigItems(array $arguments = [])
 * @method \Http\Promise\Promise listConfigItemsAsync($arguments = [])
 * @method \Dew\Acs\Result updateConfigItems(array $arguments = [])
 * @method \Http\Promise\Promise updateConfigItemsAsync($arguments = [])
 * @method \Dew\Acs\Result addBlacklistCallTagging(array $arguments = [])
 * @method \Http\Promise\Promise addBlacklistCallTaggingAsync($arguments = [])
 * @method \Dew\Acs\Result createCallTags(array $arguments = [])
 * @method \Http\Promise\Promise createCallTagsAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomCallTagging(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise createCustomCallTaggingAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result deleteCallTag(array $arguments = [])
 * @method \Http\Promise\Promise deleteCallTagAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomCallTagging(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomCallTaggingAsync($arguments = [])
 * @method \Dew\Acs\Result exportCustomCallTagging(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise exportCustomCallTaggingAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result importCustomCallTagging(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise importCustomCallTaggingAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result listBlacklistCallTaggings(array $arguments = [])
 * @method \Http\Promise\Promise listBlacklistCallTaggingsAsync($arguments = [])
 * @method \Dew\Acs\Result listCallTags(array $arguments = [])
 * @method \Http\Promise\Promise listCallTagsAsync($arguments = [])
 * @method \Dew\Acs\Result listCustomCallTagging(array $arguments = []) {@deprecated 2020-07-01}
 * @method \Http\Promise\Promise listCustomCallTaggingAsync($arguments = []) {@deprecated 2020-07-01}
 * @method \Dew\Acs\Result modifyCustomCallTagging(array $arguments = [])
 * @method \Http\Promise\Promise modifyCustomCallTaggingAsync($arguments = [])
 * @method \Dew\Acs\Result removeBlacklistCallTagging(array $arguments = [])
 * @method \Http\Promise\Promise removeBlacklistCallTaggingAsync($arguments = [])
 * @method \Dew\Acs\Result exportDoNotCallNumbers(array $arguments = [])
 * @method \Http\Promise\Promise exportDoNotCallNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result getDoNotCallFileUploadParameters(array $arguments = [])
 * @method \Http\Promise\Promise getDoNotCallFileUploadParametersAsync($arguments = [])
 * @method \Dew\Acs\Result importDoNotCallNumbers(array $arguments = [])
 * @method \Http\Promise\Promise importDoNotCallNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result listDoNotCallNumbers(array $arguments = [])
 * @method \Http\Promise\Promise listDoNotCallNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result removeDoNotCallNumbers(array $arguments = [])
 * @method \Http\Promise\Promise removeDoNotCallNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSchemaProperty(array $arguments = [])
 * @method \Http\Promise\Promise deleteSchemaPropertyAsync($arguments = [])
 * @method \Dew\Acs\Result disableSchemaProperty(array $arguments = [])
 * @method \Http\Promise\Promise disableSchemaPropertyAsync($arguments = [])
 * @method \Dew\Acs\Result enableSchemaProperty(array $arguments = [])
 * @method \Http\Promise\Promise enableSchemaPropertyAsync($arguments = [])
 * @method \Dew\Acs\Result getSchema(array $arguments = [])
 * @method \Http\Promise\Promise getSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSchema(array $arguments = [])
 * @method \Http\Promise\Promise deleteSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result getDocumentUploadParameters(array $arguments = [])
 * @method \Http\Promise\Promise getDocumentUploadParametersAsync($arguments = [])
 * @method \Dew\Acs\Result updateSchemaProperty(array $arguments = [])
 * @method \Http\Promise\Promise updateSchemaPropertyAsync($arguments = [])
 * @method \Dew\Acs\Result saveDocument(array $arguments = [])
 * @method \Http\Promise\Promise saveDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDocuments(array $arguments = [])
 * @method \Http\Promise\Promise deleteDocumentsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDocument(array $arguments = [])
 * @method \Http\Promise\Promise deleteDocumentAsync($arguments = [])
 * @method \Dew\Acs\Result listDocuments(array $arguments = [])
 * @method \Http\Promise\Promise listDocumentsAsync($arguments = [])
 * @method \Dew\Acs\Result importDocuments(array $arguments = [])
 * @method \Http\Promise\Promise importDocumentsAsync($arguments = [])
 * @method \Dew\Acs\Result createSchema(array $arguments = [])
 * @method \Http\Promise\Promise createSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result addSchemaProperty(array $arguments = [])
 * @method \Http\Promise\Promise addSchemaPropertyAsync($arguments = [])
 * @method \Dew\Acs\Result getUploadAudioDataParams(array $arguments = [])
 * @method \Http\Promise\Promise getUploadAudioDataParamsAsync($arguments = [])
 * @method \Dew\Acs\Result restoreArchivedRecordings(array $arguments = [])
 * @method \Http\Promise\Promise restoreArchivedRecordingsAsync($arguments = [])
 * @method \Dew\Acs\Result analyzeConversation(array $arguments = [])
 * @method \Http\Promise\Promise analyzeConversationAsync($arguments = [])
 * @method \Dew\Acs\Result acceptChat(array $arguments = [])
 * @method \Http\Promise\Promise acceptChatAsync($arguments = [])
 * @method \Dew\Acs\Result getVisitorLoginDetails(array $arguments = [])
 * @method \Http\Promise\Promise getVisitorLoginDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result startChat(array $arguments = [])
 * @method \Http\Promise\Promise startChatAsync($arguments = [])
 * @method \Dew\Acs\Result claimChat(array $arguments = [])
 * @method \Http\Promise\Promise claimChatAsync($arguments = [])
 */
final class CccClient extends AcsClient
{
    //
}
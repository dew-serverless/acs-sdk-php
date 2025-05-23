<?php

declare(strict_types=1);

namespace Dew\Acs\Chatbot;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createDoc(array $arguments = [])
 * @method \Http\Promise\Promise createDocAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDoc(array $arguments = [])
 * @method \Http\Promise\Promise deleteDocAsync($arguments = [])
 * @method \Dew\Acs\Result updateDoc(array $arguments = [])
 * @method \Http\Promise\Promise updateDocAsync($arguments = [])
 * @method \Dew\Acs\Result retryDoc(array $arguments = [])
 * @method \Http\Promise\Promise retryDocAsync($arguments = [])
 * @method \Dew\Acs\Result searchDoc(array $arguments = [])
 * @method \Http\Promise\Promise searchDocAsync($arguments = [])
 * @method \Dew\Acs\Result describeDoc(array $arguments = [])
 * @method \Http\Promise\Promise describeDocAsync($arguments = [])
 * @method \Dew\Acs\Result createCategory(array $arguments = [])
 * @method \Http\Promise\Promise createCategoryAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCategory(array $arguments = [])
 * @method \Http\Promise\Promise deleteCategoryAsync($arguments = [])
 * @method \Dew\Acs\Result updateCategory(array $arguments = [])
 * @method \Http\Promise\Promise updateCategoryAsync($arguments = [])
 * @method \Dew\Acs\Result describeCategory(array $arguments = [])
 * @method \Http\Promise\Promise describeCategoryAsync($arguments = [])
 * @method \Dew\Acs\Result listCategory(array $arguments = [])
 * @method \Http\Promise\Promise listCategoryAsync($arguments = [])
 * @method \Dew\Acs\Result tongyiChatDebugInfo(array $arguments = [])
 * @method \Http\Promise\Promise tongyiChatDebugInfoAsync($arguments = [])
 * @method \Dew\Acs\Result applyForStreamAccessToken(array $arguments = [])
 * @method \Http\Promise\Promise applyForStreamAccessTokenAsync($arguments = [])
 * @method \Dew\Acs\Result feedback(array $arguments = [])
 * @method \Http\Promise\Promise feedbackAsync($arguments = [])
 * @method \Dew\Acs\Result chat(array $arguments = [])
 * @method \Http\Promise\Promise chatAsync($arguments = [])
 * @method \Dew\Acs\Result associate(array $arguments = [])
 * @method \Http\Promise\Promise associateAsync($arguments = [])
 * @method \Dew\Acs\Result beginSession(array $arguments = [])
 * @method \Http\Promise\Promise beginSessionAsync($arguments = [])
 * @method \Dew\Acs\Result nlu(array $arguments = [])
 * @method \Http\Promise\Promise nluAsync($arguments = [])
 * @method \Dew\Acs\Result getAsyncResult(array $arguments = [])
 * @method \Http\Promise\Promise getAsyncResultAsync($arguments = [])
 * @method \Dew\Acs\Result createInstance(array $arguments = [])
 * @method \Http\Promise\Promise createInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updateInstance(array $arguments = [])
 * @method \Http\Promise\Promise updateInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result linkInstanceCategory(array $arguments = [])
 * @method \Http\Promise\Promise linkInstanceCategoryAsync($arguments = [])
 * @method \Dew\Acs\Result describeInstance(array $arguments = [])
 * @method \Http\Promise\Promise describeInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listInstance(array $arguments = [])
 * @method \Http\Promise\Promise listInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createInstancePublishTask(array $arguments = [])
 * @method \Http\Promise\Promise createInstancePublishTaskAsync($arguments = [])
 * @method \Dew\Acs\Result cancelInstancePublishTask(array $arguments = [])
 * @method \Http\Promise\Promise cancelInstancePublishTaskAsync($arguments = [])
 * @method \Dew\Acs\Result continueInstancePublishTask(array $arguments = [])
 * @method \Http\Promise\Promise continueInstancePublishTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getInstancePublishTaskState(array $arguments = [])
 * @method \Http\Promise\Promise getInstancePublishTaskStateAsync($arguments = [])
 * @method \Dew\Acs\Result createSolution(array $arguments = [])
 * @method \Http\Promise\Promise createSolutionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSolution(array $arguments = [])
 * @method \Http\Promise\Promise deleteSolutionAsync($arguments = [])
 * @method \Dew\Acs\Result updateSolution(array $arguments = [])
 * @method \Http\Promise\Promise updateSolutionAsync($arguments = [])
 * @method \Dew\Acs\Result listSolution(array $arguments = [])
 * @method \Http\Promise\Promise listSolutionAsync($arguments = [])
 * @method \Dew\Acs\Result createConnQuestion(array $arguments = [])
 * @method \Http\Promise\Promise createConnQuestionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConnQuestion(array $arguments = [])
 * @method \Http\Promise\Promise deleteConnQuestionAsync($arguments = [])
 * @method \Dew\Acs\Result updateConnQuestion(array $arguments = [])
 * @method \Http\Promise\Promise updateConnQuestionAsync($arguments = [])
 * @method \Dew\Acs\Result listConnQuestion(array $arguments = [])
 * @method \Http\Promise\Promise listConnQuestionAsync($arguments = [])
 * @method \Dew\Acs\Result createSimQuestion(array $arguments = [])
 * @method \Http\Promise\Promise createSimQuestionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSimQuestion(array $arguments = [])
 * @method \Http\Promise\Promise deleteSimQuestionAsync($arguments = [])
 * @method \Dew\Acs\Result updateSimQuestion(array $arguments = [])
 * @method \Http\Promise\Promise updateSimQuestionAsync($arguments = [])
 * @method \Dew\Acs\Result listSimQuestion(array $arguments = [])
 * @method \Http\Promise\Promise listSimQuestionAsync($arguments = [])
 * @method \Dew\Acs\Result createFaq(array $arguments = [])
 * @method \Http\Promise\Promise createFaqAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFaq(array $arguments = [])
 * @method \Http\Promise\Promise deleteFaqAsync($arguments = [])
 * @method \Dew\Acs\Result updateFaq(array $arguments = [])
 * @method \Http\Promise\Promise updateFaqAsync($arguments = [])
 * @method \Dew\Acs\Result describeFaq(array $arguments = [])
 * @method \Http\Promise\Promise describeFaqAsync($arguments = [])
 * @method \Dew\Acs\Result searchFaq(array $arguments = [])
 * @method \Http\Promise\Promise searchFaqAsync($arguments = [])
 * @method \Dew\Acs\Result createDSEntity(array $arguments = [])
 * @method \Http\Promise\Promise createDSEntityAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDSEntity(array $arguments = [])
 * @method \Http\Promise\Promise deleteDSEntityAsync($arguments = [])
 * @method \Dew\Acs\Result updateDSEntity(array $arguments = [])
 * @method \Http\Promise\Promise updateDSEntityAsync($arguments = [])
 * @method \Dew\Acs\Result describeDSEntity(array $arguments = [])
 * @method \Http\Promise\Promise describeDSEntityAsync($arguments = [])
 * @method \Dew\Acs\Result listDSEntity(array $arguments = [])
 * @method \Http\Promise\Promise listDSEntityAsync($arguments = [])
 * @method \Dew\Acs\Result createDSEntityValue(array $arguments = [])
 * @method \Http\Promise\Promise createDSEntityValueAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDSEntityValue(array $arguments = [])
 * @method \Http\Promise\Promise deleteDSEntityValueAsync($arguments = [])
 * @method \Dew\Acs\Result updateDSEntityValue(array $arguments = [])
 * @method \Http\Promise\Promise updateDSEntityValueAsync($arguments = [])
 * @method \Dew\Acs\Result listDSEntityValue(array $arguments = [])
 * @method \Http\Promise\Promise listDSEntityValueAsync($arguments = [])
 * @method \Dew\Acs\Result createIntent(array $arguments = [])
 * @method \Http\Promise\Promise createIntentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIntent(array $arguments = [])
 * @method \Http\Promise\Promise deleteIntentAsync($arguments = [])
 * @method \Dew\Acs\Result updateIntent(array $arguments = [])
 * @method \Http\Promise\Promise updateIntentAsync($arguments = [])
 * @method \Dew\Acs\Result describeIntent(array $arguments = [])
 * @method \Http\Promise\Promise describeIntentAsync($arguments = [])
 * @method \Dew\Acs\Result listIntent(array $arguments = [])
 * @method \Http\Promise\Promise listIntentAsync($arguments = [])
 * @method \Dew\Acs\Result createUserSay(array $arguments = [])
 * @method \Http\Promise\Promise createUserSayAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUserSay(array $arguments = [])
 * @method \Http\Promise\Promise deleteUserSayAsync($arguments = [])
 * @method \Dew\Acs\Result updateUserSay(array $arguments = [])
 * @method \Http\Promise\Promise updateUserSayAsync($arguments = [])
 * @method \Dew\Acs\Result listUserSay(array $arguments = [])
 * @method \Http\Promise\Promise listUserSayAsync($arguments = [])
 * @method \Dew\Acs\Result createLgf(array $arguments = [])
 * @method \Http\Promise\Promise createLgfAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLgf(array $arguments = [])
 * @method \Http\Promise\Promise deleteLgfAsync($arguments = [])
 * @method \Dew\Acs\Result updateLgf(array $arguments = [])
 * @method \Http\Promise\Promise updateLgfAsync($arguments = [])
 * @method \Dew\Acs\Result listLgf(array $arguments = [])
 * @method \Http\Promise\Promise listLgfAsync($arguments = [])
 * @method \Dew\Acs\Result createPerspective(array $arguments = [])
 * @method \Http\Promise\Promise createPerspectiveAsync($arguments = [])
 * @method \Dew\Acs\Result deletePerspective(array $arguments = [])
 * @method \Http\Promise\Promise deletePerspectiveAsync($arguments = [])
 * @method \Dew\Acs\Result updatePerspective(array $arguments = [])
 * @method \Http\Promise\Promise updatePerspectiveAsync($arguments = [])
 * @method \Dew\Acs\Result describePerspective(array $arguments = [])
 * @method \Http\Promise\Promise describePerspectiveAsync($arguments = [])
 * @method \Dew\Acs\Result queryPerspectives(array $arguments = [])
 * @method \Http\Promise\Promise queryPerspectivesAsync($arguments = [])
 * @method \Dew\Acs\Result createPublishTask(array $arguments = [])
 * @method \Http\Promise\Promise createPublishTaskAsync($arguments = [])
 * @method \Dew\Acs\Result cancelPublishTask(array $arguments = [])
 * @method \Http\Promise\Promise cancelPublishTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getPublishTaskState(array $arguments = [])
 * @method \Http\Promise\Promise getPublishTaskStateAsync($arguments = [])
 * @method \Dew\Acs\Result getAgentInfo(array $arguments = [])
 * @method \Http\Promise\Promise getAgentInfoAsync($arguments = [])
 * @method \Dew\Acs\Result listAgent(array $arguments = [])
 * @method \Http\Promise\Promise listAgentAsync($arguments = [])
 * @method \Dew\Acs\Result generateUserAccessToken(array $arguments = [])
 * @method \Http\Promise\Promise generateUserAccessTokenAsync($arguments = [])
 * @method \Dew\Acs\Result listTongyiConversationLogs(array $arguments = [])
 * @method \Http\Promise\Promise listTongyiConversationLogsAsync($arguments = [])
 * @method \Dew\Acs\Result listTongyiChatHistorys(array $arguments = [])
 * @method \Http\Promise\Promise listTongyiChatHistorysAsync($arguments = [])
 * @method \Dew\Acs\Result getBotSessionData(array $arguments = [])
 * @method \Http\Promise\Promise getBotSessionDataAsync($arguments = [])
 * @method \Dew\Acs\Result initIMConnect(array $arguments = [])
 * @method \Http\Promise\Promise initIMConnectAsync($arguments = [])
 * @method \Dew\Acs\Result listSaasInfo(array $arguments = [])
 * @method \Http\Promise\Promise listSaasInfoAsync($arguments = [])
 * @method \Dew\Acs\Result listSaasPermissionGroupInfos(array $arguments = [])
 * @method \Http\Promise\Promise listSaasPermissionGroupInfosAsync($arguments = [])
 */
final class ChatbotClient extends AcsClient
{
    //
}

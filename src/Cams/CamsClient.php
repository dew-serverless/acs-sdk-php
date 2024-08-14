<?php

declare(strict_types=1);

namespace Dew\Acs\Cams;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result publishFlow(array $arguments = [])
 * @method \Http\Promise\Promise publishFlowAsync($arguments = [])
 * @method \Dew\Acs\Result updateFlowJSONAsset(array $arguments = [])
 * @method \Http\Promise\Promise updateFlowJSONAssetAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFlow(array $arguments = [])
 * @method \Http\Promise\Promise modifyFlowAsync($arguments = [])
 * @method \Dew\Acs\Result listFlow(array $arguments = [])
 * @method \Http\Promise\Promise listFlowAsync($arguments = [])
 * @method \Dew\Acs\Result getFlowPreviewUrl(array $arguments = [])
 * @method \Http\Promise\Promise getFlowPreviewUrlAsync($arguments = [])
 * @method \Dew\Acs\Result getFlowJSONAssest(array $arguments = [])
 * @method \Http\Promise\Promise getFlowJSONAssestAsync($arguments = [])
 * @method \Dew\Acs\Result getFlow(array $arguments = [])
 * @method \Http\Promise\Promise getFlowAsync($arguments = [])
 * @method \Dew\Acs\Result deprecateFlow(array $arguments = [])
 * @method \Http\Promise\Promise deprecateFlowAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFlow(array $arguments = [])
 * @method \Http\Promise\Promise deleteFlowAsync($arguments = [])
 * @method \Dew\Acs\Result createFlow(array $arguments = [])
 * @method \Http\Promise\Promise createFlowAsync($arguments = [])
 * @method \Dew\Acs\Result isvGetAppId(array $arguments = [])
 * @method \Http\Promise\Promise isvGetAppIdAsync($arguments = [])
 * @method \Dew\Acs\Result getPreValidatePhoneId(array $arguments = [])
 * @method \Http\Promise\Promise getPreValidatePhoneIdAsync($arguments = [])
 * @method \Dew\Acs\Result chatappBindWaba(array $arguments = [])
 * @method \Http\Promise\Promise chatappBindWabaAsync($arguments = [])
 * @method \Dew\Acs\Result getPermissionByCode(array $arguments = [])
 * @method \Http\Promise\Promise getPermissionByCodeAsync($arguments = [])
 * @method \Dew\Acs\Result chatappSyncPhoneNumber(array $arguments = [])
 * @method \Http\Promise\Promise chatappSyncPhoneNumberAsync($arguments = [])
 * @method \Dew\Acs\Result addChatappPhoneNumber(array $arguments = [])
 * @method \Http\Promise\Promise addChatappPhoneNumberAsync($arguments = [])
 * @method \Dew\Acs\Result getPhoneNumberVerificationStatus(array $arguments = [])
 * @method \Http\Promise\Promise getPhoneNumberVerificationStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getChatappVerifyCode(array $arguments = [])
 * @method \Http\Promise\Promise getChatappVerifyCodeAsync($arguments = [])
 * @method \Dew\Acs\Result chatappVerifyAndRegister(array $arguments = [])
 * @method \Http\Promise\Promise chatappVerifyAndRegisterAsync($arguments = [])
 * @method \Dew\Acs\Result chatappPhoneNumberRegister(array $arguments = [])
 * @method \Http\Promise\Promise chatappPhoneNumberRegisterAsync($arguments = [])
 * @method \Dew\Acs\Result chatappPhoneNumberDeregister(array $arguments = [])
 * @method \Http\Promise\Promise chatappPhoneNumberDeregisterAsync($arguments = [])
 * @method \Dew\Acs\Result queryWabaBusinessInfo(array $arguments = [])
 * @method \Http\Promise\Promise queryWabaBusinessInfoAsync($arguments = [])
 * @method \Dew\Acs\Result updatePhoneWebhook(array $arguments = [])
 * @method \Http\Promise\Promise updatePhoneWebhookAsync($arguments = [])
 * @method \Dew\Acs\Result updateAccountWebhook(array $arguments = [])
 * @method \Http\Promise\Promise updateAccountWebhookAsync($arguments = [])
 * @method \Dew\Acs\Result queryPhoneBusinessProfile(array $arguments = [])
 * @method \Http\Promise\Promise queryPhoneBusinessProfileAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPhoneBusinessProfile(array $arguments = [])
 * @method \Http\Promise\Promise modifyPhoneBusinessProfileAsync($arguments = [])
 * @method \Dew\Acs\Result createChatappMigrationInitiate(array $arguments = [])
 * @method \Http\Promise\Promise createChatappMigrationInitiateAsync($arguments = [])
 * @method \Dew\Acs\Result getMigrationVerifyCode(array $arguments = [])
 * @method \Http\Promise\Promise getMigrationVerifyCodeAsync($arguments = [])
 * @method \Dew\Acs\Result chatappMigrationVerified(array $arguments = [])
 * @method \Http\Promise\Promise chatappMigrationVerifiedAsync($arguments = [])
 * @method \Dew\Acs\Result chatappMigrationRegister(array $arguments = [])
 * @method \Http\Promise\Promise chatappMigrationRegisterAsync($arguments = [])
 * @method \Dew\Acs\Result getChatappUploadAuthorization(array $arguments = [])
 * @method \Http\Promise\Promise getChatappUploadAuthorizationAsync($arguments = [])
 * @method \Dew\Acs\Result submitIsvCustomerTerms(array $arguments = [])
 * @method \Http\Promise\Promise submitIsvCustomerTermsAsync($arguments = [])
 * @method \Dew\Acs\Result getCommerceSetting(array $arguments = [])
 * @method \Http\Promise\Promise getCommerceSettingAsync($arguments = [])
 * @method \Dew\Acs\Result updateCommerceSetting(array $arguments = [])
 * @method \Http\Promise\Promise updateCommerceSettingAsync($arguments = [])
 * @method \Dew\Acs\Result chatappEmbedSignUp(array $arguments = [])
 * @method \Http\Promise\Promise chatappEmbedSignUpAsync($arguments = [])
 * @method \Dew\Acs\Result getWhatsappHealthStatus(array $arguments = [])
 * @method \Http\Promise\Promise getWhatsappHealthStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updateConversationalAutomation(array $arguments = [])
 * @method \Http\Promise\Promise updateConversationalAutomationAsync($arguments = [])
 * @method \Dew\Acs\Result getConversationalAutomation(array $arguments = [])
 * @method \Http\Promise\Promise getConversationalAutomationAsync($arguments = [])
 * @method \Dew\Acs\Result getPhoneEncryptionPublicKey(array $arguments = [])
 * @method \Http\Promise\Promise getPhoneEncryptionPublicKeyAsync($arguments = [])
 * @method \Dew\Acs\Result updatePhoneEncryptionPublicKey(array $arguments = [])
 * @method \Http\Promise\Promise updatePhoneEncryptionPublicKeyAsync($arguments = [])
 * @method \Dew\Acs\Result updatePhoneMessageQrdl(array $arguments = [])
 * @method \Http\Promise\Promise updatePhoneMessageQrdlAsync($arguments = [])
 * @method \Dew\Acs\Result listPhoneMessageQrdl(array $arguments = [])
 * @method \Http\Promise\Promise listPhoneMessageQrdlAsync($arguments = [])
 * @method \Dew\Acs\Result deletePhoneMessageQrdl(array $arguments = [])
 * @method \Http\Promise\Promise deletePhoneMessageQrdlAsync($arguments = [])
 * @method \Dew\Acs\Result createPhoneMessageQrdl(array $arguments = [])
 * @method \Http\Promise\Promise createPhoneMessageQrdlAsync($arguments = [])
 * @method \Dew\Acs\Result queryChatappPhoneNumbers(array $arguments = [])
 * @method \Http\Promise\Promise queryChatappPhoneNumbersAsync($arguments = [])
 * @method \Dew\Acs\Result queryChatappBindWaba(array $arguments = [])
 * @method \Http\Promise\Promise queryChatappBindWabaAsync($arguments = [])
 * @method \Dew\Acs\Result sendChatappMassMessage(array $arguments = [])
 * @method \Http\Promise\Promise sendChatappMassMessageAsync($arguments = [])
 * @method \Dew\Acs\Result sendChatappMessage(array $arguments = [])
 * @method \Http\Promise\Promise sendChatappMessageAsync($arguments = [])
 * @method \Dew\Acs\Result createChatappTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createChatappTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result modifyChatappTemplate(array $arguments = [])
 * @method \Http\Promise\Promise modifyChatappTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result listChatappTemplate(array $arguments = [])
 * @method \Http\Promise\Promise listChatappTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result getChatappTemplateDetail(array $arguments = [])
 * @method \Http\Promise\Promise getChatappTemplateDetailAsync($arguments = [])
 * @method \Dew\Acs\Result deleteChatappTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteChatappTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result beeBotChat(array $arguments = [])
 * @method \Http\Promise\Promise beeBotChatAsync($arguments = [])
 * @method \Dew\Acs\Result beeBotAssociate(array $arguments = [])
 * @method \Http\Promise\Promise beeBotAssociateAsync($arguments = [])
 * @method \Dew\Acs\Result listProductCatalog(array $arguments = [])
 * @method \Http\Promise\Promise listProductCatalogAsync($arguments = [])
 * @method \Dew\Acs\Result getWhatsappConnectionCatalog(array $arguments = [])
 * @method \Http\Promise\Promise getWhatsappConnectionCatalogAsync($arguments = [])
 * @method \Dew\Acs\Result listProduct(array $arguments = [])
 * @method \Http\Promise\Promise listProductAsync($arguments = [])
 * @method \Dew\Acs\Result getChatappPhoneNumberMetric(array $arguments = [])
 * @method \Http\Promise\Promise getChatappPhoneNumberMetricAsync($arguments = [])
 * @method \Dew\Acs\Result enableWhatsappROIMetric(array $arguments = [])
 * @method \Http\Promise\Promise enableWhatsappROIMetricAsync($arguments = [])
 * @method \Dew\Acs\Result getChatappTemplateMetric(array $arguments = [])
 * @method \Http\Promise\Promise getChatappTemplateMetricAsync($arguments = [])
 */
final class CamsClient extends AcsClient
{
    //
}

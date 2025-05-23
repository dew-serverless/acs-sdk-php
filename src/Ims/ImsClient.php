<?php

declare(strict_types=1);

namespace Dew\Acs\Ims;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createUser(array $arguments = [])
 * @method \Http\Promise\Promise createUserAsync($arguments = [])
 * @method \Dew\Acs\Result getUser(array $arguments = [])
 * @method \Http\Promise\Promise getUserAsync($arguments = [])
 * @method \Dew\Acs\Result updateUser(array $arguments = [])
 * @method \Http\Promise\Promise updateUserAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUser(array $arguments = [])
 * @method \Http\Promise\Promise deleteUserAsync($arguments = [])
 * @method \Dew\Acs\Result listUsers(array $arguments = [])
 * @method \Http\Promise\Promise listUsersAsync($arguments = [])
 * @method \Dew\Acs\Result listUserBasicInfos(array $arguments = [])
 * @method \Http\Promise\Promise listUserBasicInfosAsync($arguments = [])
 * @method \Dew\Acs\Result getAccountSummary(array $arguments = [])
 * @method \Http\Promise\Promise getAccountSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result createLoginProfile(array $arguments = [])
 * @method \Http\Promise\Promise createLoginProfileAsync($arguments = [])
 * @method \Dew\Acs\Result getLoginProfile(array $arguments = [])
 * @method \Http\Promise\Promise getLoginProfileAsync($arguments = [])
 * @method \Dew\Acs\Result updateLoginProfile(array $arguments = [])
 * @method \Http\Promise\Promise updateLoginProfileAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLoginProfile(array $arguments = [])
 * @method \Http\Promise\Promise deleteLoginProfileAsync($arguments = [])
 * @method \Dew\Acs\Result changePassword(array $arguments = [])
 * @method \Http\Promise\Promise changePasswordAsync($arguments = [])
 * @method \Dew\Acs\Result createAccessKey(array $arguments = [])
 * @method \Http\Promise\Promise createAccessKeyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccessKey(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccessKeyAsync($arguments = [])
 * @method \Dew\Acs\Result updateAccessKey(array $arguments = [])
 * @method \Http\Promise\Promise updateAccessKeyAsync($arguments = [])
 * @method \Dew\Acs\Result getAccessKeyLastUsed(array $arguments = [])
 * @method \Http\Promise\Promise getAccessKeyLastUsedAsync($arguments = [])
 * @method \Dew\Acs\Result listAccessKeys(array $arguments = [])
 * @method \Http\Promise\Promise listAccessKeysAsync($arguments = [])
 * @method \Dew\Acs\Result getVerificationInfo(array $arguments = [])
 * @method \Http\Promise\Promise getVerificationInfoAsync($arguments = [])
 * @method \Dew\Acs\Result createVirtualMFADevice(array $arguments = [])
 * @method \Http\Promise\Promise createVirtualMFADeviceAsync($arguments = [])
 * @method \Dew\Acs\Result listVirtualMFADevices(array $arguments = [])
 * @method \Http\Promise\Promise listVirtualMFADevicesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVirtualMFADevice(array $arguments = [])
 * @method \Http\Promise\Promise deleteVirtualMFADeviceAsync($arguments = [])
 * @method \Dew\Acs\Result disableVirtualMFA(array $arguments = [])
 * @method \Http\Promise\Promise disableVirtualMFAAsync($arguments = [])
 * @method \Dew\Acs\Result bindMFADevice(array $arguments = [])
 * @method \Http\Promise\Promise bindMFADeviceAsync($arguments = [])
 * @method \Dew\Acs\Result unbindMFADevice(array $arguments = [])
 * @method \Http\Promise\Promise unbindMFADeviceAsync($arguments = [])
 * @method \Dew\Acs\Result getAccountMFAInfo(array $arguments = [])
 * @method \Http\Promise\Promise getAccountMFAInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getUserMFAInfo(array $arguments = [])
 * @method \Http\Promise\Promise getUserMFAInfoAsync($arguments = [])
 * @method \Dew\Acs\Result setVerificationInfo(array $arguments = [])
 * @method \Http\Promise\Promise setVerificationInfoAsync($arguments = [])
 * @method \Dew\Acs\Result unbindVerification(array $arguments = [])
 * @method \Http\Promise\Promise unbindVerificationAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result updatePasskey(array $arguments = [])
 * @method \Http\Promise\Promise updatePasskeyAsync($arguments = [])
 * @method \Dew\Acs\Result listPasskeys(array $arguments = [])
 * @method \Http\Promise\Promise listPasskeysAsync($arguments = [])
 * @method \Dew\Acs\Result deletePasskey(array $arguments = [])
 * @method \Http\Promise\Promise deletePasskeyAsync($arguments = [])
 * @method \Dew\Acs\Result listUsersInRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise listUsersInRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result getUserInRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise getUserInRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUserInRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise deleteUserInRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result restoreUserFromRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise restoreUserFromRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result listAccessKeysInRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise listAccessKeysInRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result getAccessKeyInfoInRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise getAccessKeyInfoInRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccessKeyInRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccessKeyInRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result restoreAccessKeyFromRecycleBin(array $arguments = [])
 * @method \Http\Promise\Promise restoreAccessKeyFromRecycleBinAsync($arguments = [])
 * @method \Dew\Acs\Result createGroup(array $arguments = [])
 * @method \Http\Promise\Promise createGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getGroup(array $arguments = [])
 * @method \Http\Promise\Promise getGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listGroups(array $arguments = [])
 * @method \Http\Promise\Promise listGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result addUserToGroup(array $arguments = [])
 * @method \Http\Promise\Promise addUserToGroupAsync($arguments = [])
 * @method \Dew\Acs\Result removeUserFromGroup(array $arguments = [])
 * @method \Http\Promise\Promise removeUserFromGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listUsersForGroup(array $arguments = [])
 * @method \Http\Promise\Promise listUsersForGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listGroupsForUser(array $arguments = [])
 * @method \Http\Promise\Promise listGroupsForUserAsync($arguments = [])
 * @method \Dew\Acs\Result setUserSsoSettings(array $arguments = [])
 * @method \Http\Promise\Promise setUserSsoSettingsAsync($arguments = [])
 * @method \Dew\Acs\Result getUserSsoSettings(array $arguments = [])
 * @method \Http\Promise\Promise getUserSsoSettingsAsync($arguments = [])
 * @method \Dew\Acs\Result createSAMLProvider(array $arguments = [])
 * @method \Http\Promise\Promise createSAMLProviderAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSAMLProvider(array $arguments = [])
 * @method \Http\Promise\Promise deleteSAMLProviderAsync($arguments = [])
 * @method \Dew\Acs\Result updateSAMLProvider(array $arguments = [])
 * @method \Http\Promise\Promise updateSAMLProviderAsync($arguments = [])
 * @method \Dew\Acs\Result getSAMLProvider(array $arguments = [])
 * @method \Http\Promise\Promise getSAMLProviderAsync($arguments = [])
 * @method \Dew\Acs\Result listSAMLProviders(array $arguments = [])
 * @method \Http\Promise\Promise listSAMLProvidersAsync($arguments = [])
 * @method \Dew\Acs\Result createOIDCProvider(array $arguments = [])
 * @method \Http\Promise\Promise createOIDCProviderAsync($arguments = [])
 * @method \Dew\Acs\Result getOIDCProvider(array $arguments = [])
 * @method \Http\Promise\Promise getOIDCProviderAsync($arguments = [])
 * @method \Dew\Acs\Result updateOIDCProvider(array $arguments = [])
 * @method \Http\Promise\Promise updateOIDCProviderAsync($arguments = [])
 * @method \Dew\Acs\Result listOIDCProviders(array $arguments = [])
 * @method \Http\Promise\Promise listOIDCProvidersAsync($arguments = [])
 * @method \Dew\Acs\Result deleteOIDCProvider(array $arguments = [])
 * @method \Http\Promise\Promise deleteOIDCProviderAsync($arguments = [])
 * @method \Dew\Acs\Result addClientIdToOIDCProvider(array $arguments = [])
 * @method \Http\Promise\Promise addClientIdToOIDCProviderAsync($arguments = [])
 * @method \Dew\Acs\Result removeClientIdFromOIDCProvider(array $arguments = [])
 * @method \Http\Promise\Promise removeClientIdFromOIDCProviderAsync($arguments = [])
 * @method \Dew\Acs\Result addFingerprintToOIDCProvider(array $arguments = [])
 * @method \Http\Promise\Promise addFingerprintToOIDCProviderAsync($arguments = [])
 * @method \Dew\Acs\Result removeFingerprintFromOIDCProvider(array $arguments = [])
 * @method \Http\Promise\Promise removeFingerprintFromOIDCProviderAsync($arguments = [])
 * @method \Dew\Acs\Result createApplication(array $arguments = [])
 * @method \Http\Promise\Promise createApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result getApplication(array $arguments = [])
 * @method \Http\Promise\Promise getApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplication(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApplication(array $arguments = [])
 * @method \Http\Promise\Promise deleteApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listApplications(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result listPredefinedScopes(array $arguments = [])
 * @method \Http\Promise\Promise listPredefinedScopesAsync($arguments = [])
 * @method \Dew\Acs\Result createAppSecret(array $arguments = [])
 * @method \Http\Promise\Promise createAppSecretAsync($arguments = [])
 * @method \Dew\Acs\Result getAppSecret(array $arguments = [])
 * @method \Http\Promise\Promise getAppSecretAsync($arguments = [])
 * @method \Dew\Acs\Result listAppSecretIds(array $arguments = [])
 * @method \Http\Promise\Promise listAppSecretIdsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAppSecret(array $arguments = [])
 * @method \Http\Promise\Promise deleteAppSecretAsync($arguments = [])
 * @method \Dew\Acs\Result provisionApplication(array $arguments = [])
 * @method \Http\Promise\Promise provisionApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deprovisionApplication(array $arguments = [])
 * @method \Http\Promise\Promise deprovisionApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listApplicationProvisionInfos(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationProvisionInfosAsync($arguments = [])
 * @method \Dew\Acs\Result getApplicationProvisionInfo(array $arguments = [])
 * @method \Http\Promise\Promise getApplicationProvisionInfoAsync($arguments = [])
 * @method \Dew\Acs\Result provisionExternalApplication(array $arguments = [])
 * @method \Http\Promise\Promise provisionExternalApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deprovisionExternalApplication(array $arguments = [])
 * @method \Http\Promise\Promise deprovisionExternalApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listExternalApplications(array $arguments = [])
 * @method \Http\Promise\Promise listExternalApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result getExternalApplication(array $arguments = [])
 * @method \Http\Promise\Promise getExternalApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result setPasswordPolicy(array $arguments = [])
 * @method \Http\Promise\Promise setPasswordPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result getPasswordPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getPasswordPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result setSecurityPreference(array $arguments = [])
 * @method \Http\Promise\Promise setSecurityPreferenceAsync($arguments = [])
 * @method \Dew\Acs\Result getSecurityPreference(array $arguments = [])
 * @method \Http\Promise\Promise getSecurityPreferenceAsync($arguments = [])
 * @method \Dew\Acs\Result setDefaultDomain(array $arguments = [])
 * @method \Http\Promise\Promise setDefaultDomainAsync($arguments = [])
 * @method \Dew\Acs\Result getDefaultDomain(array $arguments = [])
 * @method \Http\Promise\Promise getDefaultDomainAsync($arguments = [])
 * @method \Dew\Acs\Result getCredentialReport(array $arguments = [])
 * @method \Http\Promise\Promise getCredentialReportAsync($arguments = [])
 * @method \Dew\Acs\Result getAccountSecurityPracticeReport(array $arguments = [])
 * @method \Http\Promise\Promise getAccountSecurityPracticeReportAsync($arguments = [])
 * @method \Dew\Acs\Result generateCredentialReport(array $arguments = [])
 * @method \Http\Promise\Promise generateCredentialReportAsync($arguments = [])
 * @method \Dew\Acs\Result generateGovernanceReport(array $arguments = [])
 * @method \Http\Promise\Promise generateGovernanceReportAsync($arguments = [])
 * @method \Dew\Acs\Result getGovernanceReportStatus(array $arguments = [])
 * @method \Http\Promise\Promise getGovernanceReportStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getGovernanceItemReport(array $arguments = [])
 * @method \Http\Promise\Promise getGovernanceItemReportAsync($arguments = [])
 * @method \Dew\Acs\Result listRecentGovernanceMetrics(array $arguments = [])
 * @method \Http\Promise\Promise listRecentGovernanceMetricsAsync($arguments = [])
 */
final class ImsClient extends AcsClient
{
    //
}

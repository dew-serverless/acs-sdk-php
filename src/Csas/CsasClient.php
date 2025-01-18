<?php

declare(strict_types=1);

namespace Dew\Acs\Csas;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result updateApprovalStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateApprovalStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updateApprovalProcess(array $arguments = [])
 * @method \Http\Promise\Promise updateApprovalProcessAsync($arguments = [])
 * @method \Dew\Acs\Result listApprovals(array $arguments = [])
 * @method \Http\Promise\Promise listApprovalsAsync($arguments = [])
 * @method \Dew\Acs\Result listApprovalSchemasForApprovalProcesses(array $arguments = [])
 * @method \Http\Promise\Promise listApprovalSchemasForApprovalProcessesAsync($arguments = [])
 * @method \Dew\Acs\Result listApprovalSchemas(array $arguments = [])
 * @method \Http\Promise\Promise listApprovalSchemasAsync($arguments = [])
 * @method \Dew\Acs\Result listApprovalProcessesForApprovalSchemas(array $arguments = [])
 * @method \Http\Promise\Promise listApprovalProcessesForApprovalSchemasAsync($arguments = [])
 * @method \Dew\Acs\Result listApprovalProcesses(array $arguments = [])
 * @method \Http\Promise\Promise listApprovalProcessesAsync($arguments = [])
 * @method \Dew\Acs\Result getApprovalSchema(array $arguments = [])
 * @method \Http\Promise\Promise getApprovalSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result getApprovalProcess(array $arguments = [])
 * @method \Http\Promise\Promise getApprovalProcessAsync($arguments = [])
 * @method \Dew\Acs\Result getApproval(array $arguments = [])
 * @method \Http\Promise\Promise getApprovalAsync($arguments = [])
 * @method \Dew\Acs\Result detachPolicy2ApprovalProcess(array $arguments = [])
 * @method \Http\Promise\Promise detachPolicy2ApprovalProcessAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApprovalProcesses(array $arguments = [])
 * @method \Http\Promise\Promise deleteApprovalProcessesAsync($arguments = [])
 * @method \Dew\Acs\Result attachPolicy2ApprovalProcess(array $arguments = [])
 * @method \Http\Promise\Promise attachPolicy2ApprovalProcessAsync($arguments = [])
 * @method \Dew\Acs\Result createApprovalProcess(array $arguments = [])
 * @method \Http\Promise\Promise createApprovalProcessAsync($arguments = [])
 * @method \Dew\Acs\Result listUninstallApplications(array $arguments = [])
 * @method \Http\Promise\Promise listUninstallApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result updateBootAndAntiUninstallPolicy(array $arguments = [])
 * @method \Http\Promise\Promise updateBootAndAntiUninstallPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result updateUninstallApplicationsStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateUninstallApplicationsStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getBootAndAntiUninstallPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getBootAndAntiUninstallPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listNacUserCert(array $arguments = [])
 * @method \Http\Promise\Promise listNacUserCertAsync($arguments = [])
 * @method \Dew\Acs\Result updateNacUserCertStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateNacUserCertStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listIdpConfigs(array $arguments = [])
 * @method \Http\Promise\Promise listIdpConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result getIdpConfig(array $arguments = [])
 * @method \Http\Promise\Promise getIdpConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getActiveIdpConfig(array $arguments = [])
 * @method \Http\Promise\Promise getActiveIdpConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listIdpDepartments(array $arguments = [])
 * @method \Http\Promise\Promise listIdpDepartmentsAsync($arguments = [])
 * @method \Dew\Acs\Result createIdpDepartment(array $arguments = [])
 * @method \Http\Promise\Promise createIdpDepartmentAsync($arguments = [])
 * @method \Dew\Acs\Result listClientUsers(array $arguments = [])
 * @method \Http\Promise\Promise listClientUsersAsync($arguments = [])
 * @method \Dew\Acs\Result updateClientUser(array $arguments = [])
 * @method \Http\Promise\Promise updateClientUserAsync($arguments = [])
 * @method \Dew\Acs\Result getClientUser(array $arguments = [])
 * @method \Http\Promise\Promise getClientUserAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIdpDepartment(array $arguments = [])
 * @method \Http\Promise\Promise deleteIdpDepartmentAsync($arguments = [])
 * @method \Dew\Acs\Result createClientUser(array $arguments = [])
 * @method \Http\Promise\Promise createClientUserAsync($arguments = [])
 * @method \Dew\Acs\Result updateIdpDepartment(array $arguments = [])
 * @method \Http\Promise\Promise updateIdpDepartmentAsync($arguments = [])
 * @method \Dew\Acs\Result updateClientUserStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateClientUserStatusAsync($arguments = [])
 * @method \Dew\Acs\Result deleteClientUser(array $arguments = [])
 * @method \Http\Promise\Promise deleteClientUserAsync($arguments = [])
 * @method \Dew\Acs\Result updateClientUserPassword(array $arguments = [])
 * @method \Http\Promise\Promise updateClientUserPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result updateUserDevicesStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateUserDevicesStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listExcessiveDeviceRegistrationApplications(array $arguments = [])
 * @method \Http\Promise\Promise listExcessiveDeviceRegistrationApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result updateExcessiveDeviceRegistrationApplicationsStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateExcessiveDeviceRegistrationApplicationsStatusAsync($arguments = [])
 * @method \Dew\Acs\Result updateUserDevicesSharingStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateUserDevicesSharingStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listUserDevices(array $arguments = [])
 * @method \Http\Promise\Promise listUserDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result exportUserDevices(array $arguments = [])
 * @method \Http\Promise\Promise exportUserDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result getUserDevice(array $arguments = [])
 * @method \Http\Promise\Promise getUserDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUserDevices(array $arguments = [])
 * @method \Http\Promise\Promise deleteUserDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result listSoftwareForUserDevice(array $arguments = [])
 * @method \Http\Promise\Promise listSoftwareForUserDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result listRegistrationPolicies(array $arguments = [])
 * @method \Http\Promise\Promise listRegistrationPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result listUserGroupsForRegistrationPolicy(array $arguments = [])
 * @method \Http\Promise\Promise listUserGroupsForRegistrationPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listRegistrationPoliciesForUserGroup(array $arguments = [])
 * @method \Http\Promise\Promise listRegistrationPoliciesForUserGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getRegistrationPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getRegistrationPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteRegistrationPolicies(array $arguments = [])
 * @method \Http\Promise\Promise deleteRegistrationPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result updateRegistrationPolicy(array $arguments = [])
 * @method \Http\Promise\Promise updateRegistrationPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createRegistrationPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createRegistrationPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listUserGroups(array $arguments = [])
 * @method \Http\Promise\Promise listUserGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result listPolicesForUserGroup(array $arguments = [])
 * @method \Http\Promise\Promise listPolicesForUserGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getUserGroup(array $arguments = [])
 * @method \Http\Promise\Promise getUserGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createUserGroup(array $arguments = [])
 * @method \Http\Promise\Promise createUserGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUserGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteUserGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateUserGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateUserGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listUserPrivateAccessPolicies(array $arguments = [])
 * @method \Http\Promise\Promise listUserPrivateAccessPoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result listUserApplications(array $arguments = [])
 * @method \Http\Promise\Promise listUserApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result listUsers(array $arguments = [])
 * @method \Http\Promise\Promise listUsersAsync($arguments = [])
 * @method \Dew\Acs\Result updateUsersStatus(array $arguments = [])
 * @method \Http\Promise\Promise updateUsersStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listPrivateAccessApplications(array $arguments = [])
 * @method \Http\Promise\Promise listPrivateAccessApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result listTagsForPrivateAccessApplication(array $arguments = [])
 * @method \Http\Promise\Promise listTagsForPrivateAccessApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listPolicesForPrivateAccessApplication(array $arguments = [])
 * @method \Http\Promise\Promise listPolicesForPrivateAccessApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result getPrivateAccessApplication(array $arguments = [])
 * @method \Http\Promise\Promise getPrivateAccessApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result createPrivateAccessApplication(array $arguments = [])
 * @method \Http\Promise\Promise createPrivateAccessApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deletePrivateAccessApplication(array $arguments = [])
 * @method \Http\Promise\Promise deletePrivateAccessApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrivateAccessApplication(array $arguments = [])
 * @method \Http\Promise\Promise updatePrivateAccessApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listConnectors(array $arguments = [])
 * @method \Http\Promise\Promise listConnectorsAsync($arguments = [])
 * @method \Dew\Acs\Result attachApplication2Connector(array $arguments = [])
 * @method \Http\Promise\Promise attachApplication2ConnectorAsync($arguments = [])
 * @method \Dew\Acs\Result detachApplication2Connector(array $arguments = [])
 * @method \Http\Promise\Promise detachApplication2ConnectorAsync($arguments = [])
 * @method \Dew\Acs\Result listPrivateAccessTags(array $arguments = [])
 * @method \Http\Promise\Promise listPrivateAccessTagsAsync($arguments = [])
 * @method \Dew\Acs\Result listApplicationsForPrivateAccessTag(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationsForPrivateAccessTagAsync($arguments = [])
 * @method \Dew\Acs\Result listPolicesForPrivateAccessTag(array $arguments = [])
 * @method \Http\Promise\Promise listPolicesForPrivateAccessTagAsync($arguments = [])
 * @method \Dew\Acs\Result createPrivateAccessTag(array $arguments = [])
 * @method \Http\Promise\Promise createPrivateAccessTagAsync($arguments = [])
 * @method \Dew\Acs\Result deletePrivateAccessTag(array $arguments = [])
 * @method \Http\Promise\Promise deletePrivateAccessTagAsync($arguments = [])
 * @method \Dew\Acs\Result listPrivateAccessPolices(array $arguments = [])
 * @method \Http\Promise\Promise listPrivateAccessPolicesAsync($arguments = [])
 * @method \Dew\Acs\Result listUserGroupsForPrivateAccessPolicy(array $arguments = [])
 * @method \Http\Promise\Promise listUserGroupsForPrivateAccessPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listApplicationsForPrivateAccessPolicy(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationsForPrivateAccessPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listTagsForPrivateAccessPolicy(array $arguments = [])
 * @method \Http\Promise\Promise listTagsForPrivateAccessPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result getPrivateAccessPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getPrivateAccessPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createPrivateAccessPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createPrivateAccessPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deletePrivateAccessPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deletePrivateAccessPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result updatePrivateAccessPolicy(array $arguments = [])
 * @method \Http\Promise\Promise updatePrivateAccessPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listDynamicRoutes(array $arguments = [])
 * @method \Http\Promise\Promise listDynamicRoutesAsync($arguments = [])
 * @method \Dew\Acs\Result listPrivateAccessApplicationsForDynamicRoute(array $arguments = [])
 * @method \Http\Promise\Promise listPrivateAccessApplicationsForDynamicRouteAsync($arguments = [])
 * @method \Dew\Acs\Result listPrivateAccessTagsForDynamicRoute(array $arguments = [])
 * @method \Http\Promise\Promise listPrivateAccessTagsForDynamicRouteAsync($arguments = [])
 * @method \Dew\Acs\Result getDynamicRoute(array $arguments = [])
 * @method \Http\Promise\Promise getDynamicRouteAsync($arguments = [])
 * @method \Dew\Acs\Result listDynamicRouteRegions(array $arguments = [])
 * @method \Http\Promise\Promise listDynamicRouteRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result createDynamicRoute(array $arguments = [])
 * @method \Http\Promise\Promise createDynamicRouteAsync($arguments = [])
 * @method \Dew\Acs\Result updateDynamicRoute(array $arguments = [])
 * @method \Http\Promise\Promise updateDynamicRouteAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDynamicRoute(array $arguments = [])
 * @method \Http\Promise\Promise deleteDynamicRouteAsync($arguments = [])
 * @method \Dew\Acs\Result lookupWmInfoMapping(array $arguments = [])
 * @method \Http\Promise\Promise lookupWmInfoMappingAsync($arguments = [])
 * @method \Dew\Acs\Result createWmInfoMapping(array $arguments = [])
 * @method \Http\Promise\Promise createWmInfoMappingAsync($arguments = [])
 * @method \Dew\Acs\Result createWmBaseImage(array $arguments = [])
 * @method \Http\Promise\Promise createWmBaseImageAsync($arguments = [])
 * @method \Dew\Acs\Result getWmExtractTask(array $arguments = [])
 * @method \Http\Promise\Promise getWmExtractTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getWmEmbedTask(array $arguments = [])
 * @method \Http\Promise\Promise getWmEmbedTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createWmExtractTask(array $arguments = [])
 * @method \Http\Promise\Promise createWmExtractTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createWmEmbedTask(array $arguments = [])
 * @method \Http\Promise\Promise createWmEmbedTaskAsync($arguments = [])
 * @method \Dew\Acs\Result revokeUserSession(array $arguments = [])
 * @method \Http\Promise\Promise revokeUserSessionAsync($arguments = [])
 * @method \Dew\Acs\Result listPopTrafficStatistics(array $arguments = [])
 * @method \Http\Promise\Promise listPopTrafficStatisticsAsync($arguments = [])
 */
final class CsasClient extends AcsClient
{
    //
}

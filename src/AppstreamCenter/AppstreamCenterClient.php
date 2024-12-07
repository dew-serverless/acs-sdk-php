<?php

declare(strict_types=1);

namespace Dew\Acs\AppstreamCenter;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result getAuthCode(array $arguments = []) {@since 2021-02-18}
 * @method \Http\Promise\Promise getAuthCodeAsync($arguments = []) {@since 2021-02-18}
 * @method \Dew\Acs\Result expireLoginToken(array $arguments = []) {@since 2021-02-18}
 * @method \Http\Promise\Promise expireLoginTokenAsync($arguments = []) {@since 2021-02-18}
 * @method \Dew\Acs\Result getLoginToken(array $arguments = []) {@since 2021-02-20}
 * @method \Http\Promise\Promise getLoginTokenAsync($arguments = []) {@since 2021-02-20}
 * @method \Dew\Acs\Result refreshLoginToken(array $arguments = []) {@since 2021-02-20}
 * @method \Http\Promise\Promise refreshLoginTokenAsync($arguments = []) {@since 2021-02-20}
 * @method \Dew\Acs\Result getStsToken(array $arguments = []) {@since 2021-02-20}
 * @method \Http\Promise\Promise getStsTokenAsync($arguments = []) {@since 2021-02-20}
 * @method \Dew\Acs\Result findIdpListByLoginIdentifier(array $arguments = []) {@since 2021-02-20}
 * @method \Http\Promise\Promise findIdpListByLoginIdentifierAsync($arguments = []) {@since 2021-02-20}
 * @method \Dew\Acs\Result accessPageSetAcl(array $arguments = [])
 * @method \Http\Promise\Promise accessPageSetAclAsync($arguments = [])
 * @method \Dew\Acs\Result createAccessPage(array $arguments = [])
 * @method \Http\Promise\Promise createAccessPageAsync($arguments = [])
 * @method \Dew\Acs\Result getAccessPageSession(array $arguments = [])
 * @method \Http\Promise\Promise getAccessPageSessionAsync($arguments = [])
 * @method \Dew\Acs\Result listAccessPages(array $arguments = [])
 * @method \Http\Promise\Promise listAccessPagesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAccessPage(array $arguments = [])
 * @method \Http\Promise\Promise deleteAccessPageAsync($arguments = [])
 * @method \Dew\Acs\Result askSessionPackagePrice(array $arguments = [])
 * @method \Http\Promise\Promise askSessionPackagePriceAsync($arguments = [])
 * @method \Dew\Acs\Result listSessionPackages(array $arguments = [])
 * @method \Http\Promise\Promise listSessionPackagesAsync($arguments = [])
 * @method \Dew\Acs\Result buySessionPackage(array $arguments = [])
 * @method \Http\Promise\Promise buySessionPackageAsync($arguments = [])
 * @method \Dew\Acs\Result listRegions(array $arguments = [])
 * @method \Http\Promise\Promise listRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result listNodeInstanceType(array $arguments = [])
 * @method \Http\Promise\Promise listNodeInstanceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result getResourcePrice(array $arguments = [])
 * @method \Http\Promise\Promise getResourcePriceAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceRenewPrice(array $arguments = [])
 * @method \Http\Promise\Promise getResourceRenewPriceAsync($arguments = [])
 * @method \Dew\Acs\Result createAppInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise createAppInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getAppInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise getAppInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listAppInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise listAppInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result pageListAppInstanceGroupUser(array $arguments = [])
 * @method \Http\Promise\Promise pageListAppInstanceGroupUserAsync($arguments = [])
 * @method \Dew\Acs\Result renewAppInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise renewAppInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateAppInstanceGroupImage(array $arguments = [])
 * @method \Http\Promise\Promise updateAppInstanceGroupImageAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAppInstanceGroupAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyAppInstanceGroupAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNodePoolAttribute(array $arguments = [])
 * @method \Http\Promise\Promise modifyNodePoolAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result authorizeInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise authorizeInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result logOffAllSessionsInAppInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise logOffAllSessionsInAppInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAppInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteAppInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyAppPolicy(array $arguments = [])
 * @method \Http\Promise\Promise modifyAppPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listAppInstances(array $arguments = [])
 * @method \Http\Promise\Promise listAppInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAppInstances(array $arguments = [])
 * @method \Http\Promise\Promise deleteAppInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result getConnectionTicket(array $arguments = [])
 * @method \Http\Promise\Promise getConnectionTicketAsync($arguments = [])
 * @method \Dew\Acs\Result unbind(array $arguments = [])
 * @method \Http\Promise\Promise unbindAsync($arguments = [])
 * @method \Dew\Acs\Result createImageFromAppInstanceGroup(array $arguments = [])
 * @method \Http\Promise\Promise createImageFromAppInstanceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getDebugAppInstance(array $arguments = [])
 * @method \Http\Promise\Promise getDebugAppInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listOtaTask(array $arguments = [])
 * @method \Http\Promise\Promise listOtaTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getOtaTaskByTaskId(array $arguments = [])
 * @method \Http\Promise\Promise getOtaTaskByTaskIdAsync($arguments = [])
 * @method \Dew\Acs\Result approveOtaTask(array $arguments = [])
 * @method \Http\Promise\Promise approveOtaTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listTenantConfig(array $arguments = [])
 * @method \Http\Promise\Promise listTenantConfigAsync($arguments = [])
 * @method \Dew\Acs\Result modifyTenantConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyTenantConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listPublishedAppInfo(array $arguments = []) {@since 2021-09-03}
 * @method \Http\Promise\Promise listPublishedAppInfoAsync($arguments = []) {@since 2021-09-03}
 * @method \Dew\Acs\Result listRunningApps(array $arguments = []) {@since 2021-09-03}
 * @method \Http\Promise\Promise listRunningAppsAsync($arguments = []) {@since 2021-09-03}
 * @method \Dew\Acs\Result stopApp(array $arguments = []) {@since 2021-09-03}
 * @method \Http\Promise\Promise stopAppAsync($arguments = []) {@since 2021-09-03}
 */
final class AppstreamCenterClient extends AcsClient
{
    //
}

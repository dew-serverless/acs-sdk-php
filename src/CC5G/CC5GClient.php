<?php

declare(strict_types=1);

namespace Dew\Acs\CC5G;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result listRegions(array $arguments = [])
 * @method \Http\Promise\Promise listRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result listZones(array $arguments = [])
 * @method \Http\Promise\Promise listZonesAsync($arguments = [])
 * @method \Dew\Acs\Result openCc5gService(array $arguments = [])
 * @method \Http\Promise\Promise openCc5gServiceAsync($arguments = [])
 * @method \Dew\Acs\Result getCreateCustomerInformation(array $arguments = [])
 * @method \Http\Promise\Promise getCreateCustomerInformationAsync($arguments = [])
 * @method \Dew\Acs\Result listAPNs(array $arguments = [])
 * @method \Http\Promise\Promise listAPNsAsync($arguments = [])
 * @method \Dew\Acs\Result createWirelessCloudConnector(array $arguments = [])
 * @method \Http\Promise\Promise createWirelessCloudConnectorAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWirelessCloudConnector(array $arguments = [])
 * @method \Http\Promise\Promise deleteWirelessCloudConnectorAsync($arguments = [])
 * @method \Dew\Acs\Result updateWirelessCloudConnector(array $arguments = [])
 * @method \Http\Promise\Promise updateWirelessCloudConnectorAsync($arguments = [])
 * @method \Dew\Acs\Result listWirelessCloudConnectors(array $arguments = [])
 * @method \Http\Promise\Promise listWirelessCloudConnectorsAsync($arguments = [])
 * @method \Dew\Acs\Result attachVpcToNetLink(array $arguments = [])
 * @method \Http\Promise\Promise attachVpcToNetLinkAsync($arguments = [])
 * @method \Dew\Acs\Result detachVpcFromNetLink(array $arguments = [])
 * @method \Http\Promise\Promise detachVpcFromNetLinkAsync($arguments = [])
 * @method \Dew\Acs\Result getWirelessCloudConnector(array $arguments = [])
 * @method \Http\Promise\Promise getWirelessCloudConnectorAsync($arguments = [])
 * @method \Dew\Acs\Result listDataPackages(array $arguments = [])
 * @method \Http\Promise\Promise listDataPackagesAsync($arguments = [])
 * @method \Dew\Acs\Result createIoTCloudConnectorBackhaulRoute(array $arguments = [])
 * @method \Http\Promise\Promise createIoTCloudConnectorBackhaulRouteAsync($arguments = [])
 * @method \Dew\Acs\Result deleteIoTCloudConnectorBackhaulRoute(array $arguments = [])
 * @method \Http\Promise\Promise deleteIoTCloudConnectorBackhaulRouteAsync($arguments = [])
 * @method \Dew\Acs\Result modifyWirelessCloudConnectorFeature(array $arguments = [])
 * @method \Http\Promise\Promise modifyWirelessCloudConnectorFeatureAsync($arguments = [])
 * @method \Dew\Acs\Result listIoTCloudConnectorBackhaulRoute(array $arguments = [])
 * @method \Http\Promise\Promise listIoTCloudConnectorBackhaulRouteAsync($arguments = [])
 * @method \Dew\Acs\Result switchWirelessCloudConnectorToBusiness(array $arguments = [])
 * @method \Http\Promise\Promise switchWirelessCloudConnectorToBusinessAsync($arguments = [])
 * @method \Dew\Acs\Result listOrders(array $arguments = [])
 * @method \Http\Promise\Promise listOrdersAsync($arguments = [])
 * @method \Dew\Acs\Result lockCards(array $arguments = [])
 * @method \Http\Promise\Promise lockCardsAsync($arguments = [])
 * @method \Dew\Acs\Result unlockCards(array $arguments = [])
 * @method \Http\Promise\Promise unlockCardsAsync($arguments = [])
 * @method \Dew\Acs\Result stopCards(array $arguments = [])
 * @method \Http\Promise\Promise stopCardsAsync($arguments = [])
 * @method \Dew\Acs\Result resumeCards(array $arguments = [])
 * @method \Http\Promise\Promise resumeCardsAsync($arguments = [])
 * @method \Dew\Acs\Result updateCard(array $arguments = [])
 * @method \Http\Promise\Promise updateCardAsync($arguments = [])
 * @method \Dew\Acs\Result listCards(array $arguments = [])
 * @method \Http\Promise\Promise listCardsAsync($arguments = [])
 * @method \Dew\Acs\Result listCardUsages(array $arguments = [])
 * @method \Http\Promise\Promise listCardUsagesAsync($arguments = [])
 * @method \Dew\Acs\Result getCard(array $arguments = [])
 * @method \Http\Promise\Promise getCardAsync($arguments = [])
 * @method \Dew\Acs\Result getCardLockReason(array $arguments = [])
 * @method \Http\Promise\Promise getCardLockReasonAsync($arguments = [])
 * @method \Dew\Acs\Result failCards(array $arguments = [])
 * @method \Http\Promise\Promise failCardsAsync($arguments = [])
 * @method \Dew\Acs\Result rebindCards(array $arguments = [])
 * @method \Http\Promise\Promise rebindCardsAsync($arguments = [])
 * @method \Dew\Acs\Result listCardDayUsages(array $arguments = [])
 * @method \Http\Promise\Promise listCardDayUsagesAsync($arguments = [])
 * @method \Dew\Acs\Result resetAreaLimitCards(array $arguments = [])
 * @method \Http\Promise\Promise resetAreaLimitCardsAsync($arguments = [])
 * @method \Dew\Acs\Result listCardAreaLimitSupportArea(array $arguments = [])
 * @method \Http\Promise\Promise listCardAreaLimitSupportAreaAsync($arguments = [])
 * @method \Dew\Acs\Result createAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise createAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise updateAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result addDNSAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise addDNSAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateDNSAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise updateDNSAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listAuthorizationRules(array $arguments = [])
 * @method \Http\Promise\Promise listAuthorizationRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createBatchOperateCardsTask(array $arguments = [])
 * @method \Http\Promise\Promise createBatchOperateCardsTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteBatchOperateCardsTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteBatchOperateCardsTaskAsync($arguments = [])
 * @method \Dew\Acs\Result updateBatchOperateCardsTask(array $arguments = [])
 * @method \Http\Promise\Promise updateBatchOperateCardsTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listBatchOperateCardsTasks(array $arguments = [])
 * @method \Http\Promise\Promise listBatchOperateCardsTasksAsync($arguments = [])
 * @method \Dew\Acs\Result submitDiagnoseTaskForSingleCard(array $arguments = [])
 * @method \Http\Promise\Promise submitDiagnoseTaskForSingleCardAsync($arguments = [])
 * @method \Dew\Acs\Result getDiagnoseResultForSingleCard(array $arguments = [])
 * @method \Http\Promise\Promise getDiagnoseResultForSingleCardAsync($arguments = [])
 * @method \Dew\Acs\Result listDiagnoseInfoForSingleCard(array $arguments = [])
 * @method \Http\Promise\Promise listDiagnoseInfoForSingleCardAsync($arguments = [])
 * @method \Dew\Acs\Result grantNetLink(array $arguments = [])
 * @method \Http\Promise\Promise grantNetLinkAsync($arguments = [])
 * @method \Dew\Acs\Result revokeNetLink(array $arguments = [])
 * @method \Http\Promise\Promise revokeNetLinkAsync($arguments = [])
 * @method \Dew\Acs\Result createWirelessCloudConnectorGroup(array $arguments = [])
 * @method \Http\Promise\Promise createWirelessCloudConnectorGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateWirelessCloudConnectorGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateWirelessCloudConnectorGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listWirelessCloudConnectorGroups(array $arguments = [])
 * @method \Http\Promise\Promise listWirelessCloudConnectorGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWirelessCloudConnectorGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteWirelessCloudConnectorGroupAsync($arguments = [])
 * @method \Dew\Acs\Result addWirelessCloudConnectorToGroup(array $arguments = [])
 * @method \Http\Promise\Promise addWirelessCloudConnectorToGroupAsync($arguments = [])
 * @method \Dew\Acs\Result removeWirelessCloudConnectorFromGroup(array $arguments = [])
 * @method \Http\Promise\Promise removeWirelessCloudConnectorFromGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createGroupAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise createGroupAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateGroupAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise updateGroupAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listGroupAuthorizationRules(array $arguments = [])
 * @method \Http\Promise\Promise listGroupAuthorizationRulesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGroupAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteGroupAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result addGroupDnsAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise addGroupDnsAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateGroupDnsAuthorizationRule(array $arguments = [])
 * @method \Http\Promise\Promise updateGroupDnsAuthorizationRuleAsync($arguments = [])
 * @method \Dew\Acs\Result getCreateCustomerInfomation(array $arguments = [])
 * @method \Http\Promise\Promise getCreateCustomerInfomationAsync($arguments = [])
 * @method \Dew\Acs\Result innerLimitRateCards(array $arguments = [])
 * @method \Http\Promise\Promise innerLimitRateCardsAsync($arguments = [])
 * @method \Dew\Acs\Result innerStopCards(array $arguments = [])
 * @method \Http\Promise\Promise innerStopCardsAsync($arguments = [])
 */
final class CC5GClient extends AcsClient
{
    //
}

<?php

declare(strict_types=1);

namespace Dew\Acs\Baas;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result describeTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result createAntChainKmsAccountNew(array $arguments = [])
 * @method \Http\Promise\Promise createAntChainKmsAccountNewAsync($arguments = [])
 * @method \Dew\Acs\Result createAntChainConsortium(array $arguments = [])
 * @method \Http\Promise\Promise createAntChainConsortiumAsync($arguments = [])
 * @method \Dew\Acs\Result createAntChainAccount(array $arguments = [])
 * @method \Http\Promise\Promise createAntChainAccountAsync($arguments = [])
 * @method \Dew\Acs\Result createAntChainAccountWithKeyPairAutoCreation(array $arguments = [])
 * @method \Http\Promise\Promise createAntChainAccountWithKeyPairAutoCreationAsync($arguments = [])
 * @method \Dew\Acs\Result createAntChainContractProject(array $arguments = [])
 * @method \Http\Promise\Promise createAntChainContractProjectAsync($arguments = [])
 * @method \Dew\Acs\Result createAntChainContractContent(array $arguments = [])
 * @method \Http\Promise\Promise createAntChainContractContentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAntChainConsortium(array $arguments = [])
 * @method \Http\Promise\Promise deleteAntChainConsortiumAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAntChainContractContent(array $arguments = [])
 * @method \Http\Promise\Promise deleteAntChainContractContentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAntChainContractProject(array $arguments = [])
 * @method \Http\Promise\Promise deleteAntChainContractProjectAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAntChainMiniAppQRCodeAuthorizedUser(array $arguments = [])
 * @method \Http\Promise\Promise deleteAntChainMiniAppQRCodeAuthorizedUserAsync($arguments = [])
 * @method \Dew\Acs\Result updateAntChainConsortium(array $arguments = [])
 * @method \Http\Promise\Promise updateAntChainConsortiumAsync($arguments = [])
 * @method \Dew\Acs\Result updateAntChain(array $arguments = [])
 * @method \Http\Promise\Promise updateAntChainAsync($arguments = [])
 * @method \Dew\Acs\Result updateAntChainContractContent(array $arguments = [])
 * @method \Http\Promise\Promise updateAntChainContractContentAsync($arguments = [])
 * @method \Dew\Acs\Result updateAntChainContractProject(array $arguments = [])
 * @method \Http\Promise\Promise updateAntChainContractProjectAsync($arguments = [])
 * @method \Dew\Acs\Result updateAntChainMember(array $arguments = [])
 * @method \Http\Promise\Promise updateAntChainMemberAsync($arguments = [])
 * @method \Dew\Acs\Result updateAntChainQRCodeAuthorization(array $arguments = [])
 * @method \Http\Promise\Promise updateAntChainQRCodeAuthorizationAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainMiniAppBrowserTransactionQRCodeNew(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainMiniAppBrowserTransactionQRCodeNewAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainQRCodeAuthorizationV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainQRCodeAuthorizationV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainsV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainNodesV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainNodesV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainMiniAppBrowserQRCodeAccessLogV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainMiniAppBrowserQRCodeAccessLogV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainMembersV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainMembersV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainDownloadPathsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainDownloadPathsV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainContractProjectsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainContractProjectsV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainContractProjectContentTreeV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainContractProjectContentTreeV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainConsortiumsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainConsortiumsV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainCertificateApplicationsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainCertificateApplicationsV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainAccountsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainAccountsV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainBlockV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainBlockV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainTransactionV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainTransactionV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainTransactionReceiptV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainTransactionReceiptV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainLatestTransactionDigestsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainLatestTransactionDigestsV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainTransactionStatisticsV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainTransactionStatisticsV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainLatestBlocksV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainLatestBlocksV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainInformationV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainInformationV2Async($arguments = [])
 * @method \Dew\Acs\Result describeAntChainConsortiums(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainConsortiumsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainDownloadPaths(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainDownloadPathsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChains(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainTransaction(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainTransactionAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainInformation(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainInformationAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainLatestBlocks(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainLatestBlocksAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainLatestTransactionDigests(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainLatestTransactionDigestsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainBlock(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainBlockAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainAccounts(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainCertificateApplications(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainCertificateApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainContractProjects(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainContractProjectsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainContractProjectContentTree(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainContractProjectContentTreeAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainMembers(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainMembersAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainTransactionReceipt(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainTransactionReceiptAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainNodes(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainNodesAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainTransactionStatistics(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainTransactionStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainQRCodeAuthorization(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainQRCodeAuthorizationAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainMiniAppBrowserQRCodeAccessLog(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainMiniAppBrowserQRCodeAccessLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainMiniAppBrowserTransactionQRCode(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainMiniAppBrowserTransactionQRCodeAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainMiniAppBrowserQRCodeAuthorizedUsers(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainMiniAppBrowserQRCodeAuthorizedUsersAsync($arguments = [])
 * @method \Dew\Acs\Result describeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2(array $arguments = [])
 * @method \Http\Promise\Promise describeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Async($arguments = [])
 * @method \Dew\Acs\Result resetAntChainCertificate(array $arguments = [])
 * @method \Http\Promise\Promise resetAntChainCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result applyAntChainCertificate(array $arguments = [])
 * @method \Http\Promise\Promise applyAntChainCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result applyAntChainCertificateWithKeyAutoCreation(array $arguments = [])
 * @method \Http\Promise\Promise applyAntChainCertificateWithKeyAutoCreationAsync($arguments = [])
 * @method \Dew\Acs\Result resetAntChainUserCertificate(array $arguments = [])
 * @method \Http\Promise\Promise resetAntChainUserCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result unfreezeAntChainAccount(array $arguments = [])
 * @method \Http\Promise\Promise unfreezeAntChainAccountAsync($arguments = [])
 * @method \Dew\Acs\Result freezeAntChainAccount(array $arguments = [])
 * @method \Http\Promise\Promise freezeAntChainAccountAsync($arguments = [])
 * @method \Dew\Acs\Result copyAntChainContractProject(array $arguments = [])
 * @method \Http\Promise\Promise copyAntChainContractProjectAsync($arguments = [])
 * @method \Dew\Acs\Result batchAddAntChainMiniAppQRCodeAuthorizedUsers(array $arguments = [])
 * @method \Http\Promise\Promise batchAddAntChainMiniAppQRCodeAuthorizedUsersAsync($arguments = [])
 * @method \Dew\Acs\Result createFabricChaincodePackage(array $arguments = [])
 * @method \Http\Promise\Promise createFabricChaincodePackageAsync($arguments = [])
 * @method \Dew\Acs\Result submitFabricChaincodeDefinition(array $arguments = [])
 * @method \Http\Promise\Promise submitFabricChaincodeDefinitionAsync($arguments = [])
 * @method \Dew\Acs\Result installFabricChaincodePackage(array $arguments = [])
 * @method \Http\Promise\Promise installFabricChaincodePackageAsync($arguments = [])
 * @method \Dew\Acs\Result approveFabricChaincodeDefinition(array $arguments = [])
 * @method \Http\Promise\Promise approveFabricChaincodeDefinitionAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeFabricChaincodeDefinition(array $arguments = [])
 * @method \Http\Promise\Promise upgradeFabricChaincodeDefinitionAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizationChaincodePackage(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationChaincodePackageAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricChaincodeDefinitionTask(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricChaincodeDefinitionTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createFabricChaincode(array $arguments = [])
 * @method \Http\Promise\Promise createFabricChaincodeAsync($arguments = [])
 * @method \Dew\Acs\Result createFabricChannelMember(array $arguments = [])
 * @method \Http\Promise\Promise createFabricChannelMemberAsync($arguments = [])
 * @method \Dew\Acs\Result createFabricConsortiumMember(array $arguments = [])
 * @method \Http\Promise\Promise createFabricConsortiumMemberAsync($arguments = [])
 * @method \Dew\Acs\Result createFabricChannel(array $arguments = [])
 * @method \Http\Promise\Promise createFabricChannelAsync($arguments = [])
 * @method \Dew\Acs\Result createFabricConsortium(array $arguments = [])
 * @method \Http\Promise\Promise createFabricConsortiumAsync($arguments = [])
 * @method \Dew\Acs\Result createFabricOrganization(array $arguments = [])
 * @method \Http\Promise\Promise createFabricOrganizationAsync($arguments = [])
 * @method \Dew\Acs\Result createFabricOrganizationUser(array $arguments = [])
 * @method \Http\Promise\Promise createFabricOrganizationUserAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFabricChaincode(array $arguments = [])
 * @method \Http\Promise\Promise deleteFabricChaincodeAsync($arguments = [])
 * @method \Dew\Acs\Result joinFabricChannel(array $arguments = [])
 * @method \Http\Promise\Promise joinFabricChannelAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrdererLogs(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrdererLogsAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricPeerLogs(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricPeerLogsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRootDomain(array $arguments = [])
 * @method \Http\Promise\Promise describeRootDomainAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricExplorer(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricExplorerAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumSpecs(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumSpecsAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumOrderers(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumOrderersAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricInviter(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricInviterAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricChannelMembers(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricChannelMembersAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizations(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationsAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricCandidateOrganizations(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricCandidateOrganizationsAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricChaincodeUploadPolicy(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricChaincodeUploadPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizationChaincodes(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationChaincodesAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumMembers(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumMembersAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumAdminStatus(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumAdminStatusAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizationPeers(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationPeersAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumMemberApproval(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumMemberApprovalAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizationDeletable(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationDeletableAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiums(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumsAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumDeletable(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumDeletableAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumChaincodes(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumChaincodesAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizationMembers(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationMembersAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganization(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricConsortiumChannels(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricConsortiumChannelsAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizationUsers(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationUsersAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricInvitationCode(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricInvitationCodeAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizationSpecs(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationSpecsAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeFabricOrganizationChannels(array $arguments = [])
 * @method \Http\Promise\Promise describeFabricOrganizationChannelsAsync($arguments = [])
 * @method \Dew\Acs\Result acceptFabricInvitation(array $arguments = [])
 * @method \Http\Promise\Promise acceptFabricInvitationAsync($arguments = [])
 * @method \Dew\Acs\Result confirmFabricConsortiumMember(array $arguments = [])
 * @method \Http\Promise\Promise confirmFabricConsortiumMemberAsync($arguments = [])
 * @method \Dew\Acs\Result installFabricChaincode(array $arguments = [])
 * @method \Http\Promise\Promise installFabricChaincodeAsync($arguments = [])
 * @method \Dew\Acs\Result checkFabricConsortiumDomain(array $arguments = [])
 * @method \Http\Promise\Promise checkFabricConsortiumDomainAsync($arguments = [])
 * @method \Dew\Acs\Result synchronizeFabricChaincode(array $arguments = [])
 * @method \Http\Promise\Promise synchronizeFabricChaincodeAsync($arguments = [])
 * @method \Dew\Acs\Result downloadFabricOrganizationSDK(array $arguments = [])
 * @method \Http\Promise\Promise downloadFabricOrganizationSDKAsync($arguments = [])
 * @method \Dew\Acs\Result resetFabricOrganizationUserPassword(array $arguments = [])
 * @method \Http\Promise\Promise resetFabricOrganizationUserPasswordAsync($arguments = [])
 * @method \Dew\Acs\Result checkFabricOrganizationDomain(array $arguments = [])
 * @method \Http\Promise\Promise checkFabricOrganizationDomainAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeFabricChaincode(array $arguments = [])
 * @method \Http\Promise\Promise upgradeFabricChaincodeAsync($arguments = [])
 * @method \Dew\Acs\Result instantiateFabricChaincode(array $arguments = [])
 * @method \Http\Promise\Promise instantiateFabricChaincodeAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeEthereumDeletable(array $arguments = [])
 * @method \Http\Promise\Promise describeEthereumDeletableAsync($arguments = [])
 */
final class BaasClient extends AcsClient
{
    //
}

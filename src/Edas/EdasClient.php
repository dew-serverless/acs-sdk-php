<?php

declare(strict_types=1);

namespace Dew\Acs\Edas;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result deleteRole(array $arguments = [])
 * @method \Http\Promise\Promise deleteRoleAsync($arguments = [])
 * @method \Dew\Acs\Result updateRole(array $arguments = [])
 * @method \Http\Promise\Promise updateRoleAsync($arguments = [])
 * @method \Dew\Acs\Result updateAccountInfo(array $arguments = [])
 * @method \Http\Promise\Promise updateAccountInfoAsync($arguments = [])
 * @method \Dew\Acs\Result listRole(array $arguments = [])
 * @method \Http\Promise\Promise listRoleAsync($arguments = [])
 * @method \Dew\Acs\Result listSubAccount(array $arguments = [])
 * @method \Http\Promise\Promise listSubAccountAsync($arguments = [])
 * @method \Dew\Acs\Result listAuthority(array $arguments = [])
 * @method \Http\Promise\Promise listAuthorityAsync($arguments = [])
 * @method \Dew\Acs\Result getPackageStorageCredential(array $arguments = [])
 * @method \Http\Promise\Promise getPackageStorageCredentialAsync($arguments = [])
 * @method \Dew\Acs\Result insertRole(array $arguments = [])
 * @method \Http\Promise\Promise insertRoleAsync($arguments = [])
 * @method \Dew\Acs\Result authorizeRole(array $arguments = [])
 * @method \Http\Promise\Promise authorizeRoleAsync($arguments = [])
 * @method \Dew\Acs\Result authorizeApplication(array $arguments = [])
 * @method \Http\Promise\Promise authorizeApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result authorizeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise authorizeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUserDefineRegion(array $arguments = [])
 * @method \Http\Promise\Promise deleteUserDefineRegionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCluster(array $arguments = [])
 * @method \Http\Promise\Promise deleteClusterAsync($arguments = [])
 * @method \Dew\Acs\Result listAliyunRegion(array $arguments = [])
 * @method \Http\Promise\Promise listAliyunRegionAsync($arguments = [])
 * @method \Dew\Acs\Result queryMigrateRegionList(array $arguments = [])
 * @method \Http\Promise\Promise queryMigrateRegionListAsync($arguments = [])
 * @method \Dew\Acs\Result listCluster(array $arguments = [])
 * @method \Http\Promise\Promise listClusterAsync($arguments = [])
 * @method \Dew\Acs\Result getCluster(array $arguments = [])
 * @method \Http\Promise\Promise getClusterAsync($arguments = [])
 * @method \Dew\Acs\Result listVpc(array $arguments = [])
 * @method \Http\Promise\Promise listVpcAsync($arguments = [])
 * @method \Dew\Acs\Result queryRegionConfig(array $arguments = [])
 * @method \Http\Promise\Promise queryRegionConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listApplicationEcu(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationEcuAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise listResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createIDCImportCommand(array $arguments = [])
 * @method \Http\Promise\Promise createIDCImportCommandAsync($arguments = [])
 * @method \Dew\Acs\Result deleteClusterMember(array $arguments = [])
 * @method \Http\Promise\Promise deleteClusterMemberAsync($arguments = [])
 * @method \Dew\Acs\Result deleteEcu(array $arguments = [])
 * @method \Http\Promise\Promise deleteEcuAsync($arguments = [])
 * @method \Dew\Acs\Result listClusterMembers(array $arguments = [])
 * @method \Http\Promise\Promise listClusterMembersAsync($arguments = [])
 * @method \Dew\Acs\Result listEcuByRegion(array $arguments = [])
 * @method \Http\Promise\Promise listEcuByRegionAsync($arguments = [])
 * @method \Dew\Acs\Result listConvertableEcu(array $arguments = [])
 * @method \Http\Promise\Promise listConvertableEcuAsync($arguments = [])
 * @method \Dew\Acs\Result listEcsNotInCluster(array $arguments = [])
 * @method \Http\Promise\Promise listEcsNotInClusterAsync($arguments = [])
 * @method \Dew\Acs\Result queryMigrateEcuList(array $arguments = [])
 * @method \Http\Promise\Promise queryMigrateEcuListAsync($arguments = [])
 * @method \Dew\Acs\Result listScaleOutEcu(array $arguments = [])
 * @method \Http\Promise\Promise listScaleOutEcuAsync($arguments = [])
 * @method \Dew\Acs\Result listSlb(array $arguments = [])
 * @method \Http\Promise\Promise listSlbAsync($arguments = [])
 * @method \Dew\Acs\Result bindSlb(array $arguments = [])
 * @method \Http\Promise\Promise bindSlbAsync($arguments = [])
 * @method \Dew\Acs\Result insertCluster(array $arguments = [])
 * @method \Http\Promise\Promise insertClusterAsync($arguments = [])
 * @method \Dew\Acs\Result insertClusterMember(array $arguments = [])
 * @method \Http\Promise\Promise insertClusterMemberAsync($arguments = [])
 * @method \Dew\Acs\Result installAgent(array $arguments = [])
 * @method \Http\Promise\Promise installAgentAsync($arguments = [])
 * @method \Dew\Acs\Result transformClusterMember(array $arguments = [])
 * @method \Http\Promise\Promise transformClusterMemberAsync($arguments = [])
 * @method \Dew\Acs\Result migrateEcu(array $arguments = [])
 * @method \Http\Promise\Promise migrateEcuAsync($arguments = [])
 * @method \Dew\Acs\Result synchronizeResource(array $arguments = [])
 * @method \Http\Promise\Promise synchronizeResourceAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sResource(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sResourceAsync($arguments = [])
 * @method \Dew\Acs\Result getK8sCluster(array $arguments = [])
 * @method \Http\Promise\Promise getK8sClusterAsync($arguments = [])
 * @method \Dew\Acs\Result listK8sNamespaces(array $arguments = [])
 * @method \Http\Promise\Promise listK8sNamespacesAsync($arguments = [])
 * @method \Dew\Acs\Result importK8sCluster(array $arguments = [])
 * @method \Http\Promise\Promise importK8sClusterAsync($arguments = [])
 * @method \Dew\Acs\Result updateHealthCheckUrl(array $arguments = [])
 * @method \Http\Promise\Promise updateHealthCheckUrlAsync($arguments = [])
 * @method \Dew\Acs\Result getChangeOrderInfo(array $arguments = [])
 * @method \Http\Promise\Promise getChangeOrderInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getSecureToken(array $arguments = [])
 * @method \Http\Promise\Promise getSecureTokenAsync($arguments = [])
 * @method \Dew\Acs\Result queryEccInfo(array $arguments = [])
 * @method \Http\Promise\Promise queryEccInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getScalingRules(array $arguments = [])
 * @method \Http\Promise\Promise getScalingRulesAsync($arguments = [])
 * @method \Dew\Acs\Result listUserDefineRegion(array $arguments = [])
 * @method \Http\Promise\Promise listUserDefineRegionAsync($arguments = [])
 * @method \Dew\Acs\Result getContainerConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise getContainerConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result listApplication(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listDeployGroup(array $arguments = [])
 * @method \Http\Promise\Promise listDeployGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listHistoryDeployVersion(array $arguments = [])
 * @method \Http\Promise\Promise listHistoryDeployVersionAsync($arguments = [])
 * @method \Dew\Acs\Result listRecentChangeOrder(array $arguments = [])
 * @method \Http\Promise\Promise listRecentChangeOrderAsync($arguments = [])
 * @method \Dew\Acs\Result listBuildPack(array $arguments = [])
 * @method \Http\Promise\Promise listBuildPackAsync($arguments = [])
 * @method \Dew\Acs\Result insertOrUpdateRegion(array $arguments = [])
 * @method \Http\Promise\Promise insertOrUpdateRegionAsync($arguments = [])
 * @method \Dew\Acs\Result switchAdvancedMonitoring(array $arguments = [])
 * @method \Http\Promise\Promise switchAdvancedMonitoringAsync($arguments = [])
 * @method \Dew\Acs\Result continuePipeline(array $arguments = [])
 * @method \Http\Promise\Promise continuePipelineAsync($arguments = [])
 * @method \Dew\Acs\Result abortChangeOrder(array $arguments = [])
 * @method \Http\Promise\Promise abortChangeOrderAsync($arguments = [])
 * @method \Dew\Acs\Result rollbackChangeOrder(array $arguments = [])
 * @method \Http\Promise\Promise rollbackChangeOrderAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplicationBaseInfo(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationBaseInfoAsync($arguments = [])
 * @method \Dew\Acs\Result addLogPath(array $arguments = [])
 * @method \Http\Promise\Promise addLogPathAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApplication(array $arguments = [])
 * @method \Http\Promise\Promise deleteApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteLogPath(array $arguments = [])
 * @method \Http\Promise\Promise deleteLogPathAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDeployGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteDeployGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateHookConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise updateHookConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result modifyScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise modifyScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result startApplication(array $arguments = [])
 * @method \Http\Promise\Promise startApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result stopApplication(array $arguments = [])
 * @method \Http\Promise\Promise stopApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result updateContainer(array $arguments = [])
 * @method \Http\Promise\Promise updateContainerAsync($arguments = [])
 * @method \Dew\Acs\Result updateContainerConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise updateContainerConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result changeDeployGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeDeployGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateJvmConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise updateJvmConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result getJvmConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise getJvmConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result getApplication(array $arguments = [])
 * @method \Http\Promise\Promise getApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listComponents(array $arguments = [])
 * @method \Http\Promise\Promise listComponentsAsync($arguments = [])
 * @method \Dew\Acs\Result queryApplicationStatus(array $arguments = [])
 * @method \Http\Promise\Promise queryApplicationStatusAsync($arguments = [])
 * @method \Dew\Acs\Result insertDeployGroup(array $arguments = [])
 * @method \Http\Promise\Promise insertDeployGroupAsync($arguments = [])
 * @method \Dew\Acs\Result bindEcsSlb(array $arguments = [])
 * @method \Http\Promise\Promise bindEcsSlbAsync($arguments = [])
 * @method \Dew\Acs\Result unbindSlb(array $arguments = [])
 * @method \Http\Promise\Promise unbindSlbAsync($arguments = [])
 * @method \Dew\Acs\Result rollbackApplication(array $arguments = [])
 * @method \Http\Promise\Promise rollbackApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result insertApplication(array $arguments = [])
 * @method \Http\Promise\Promise insertApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deployApplication(array $arguments = [])
 * @method \Http\Promise\Promise deployApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result scaleoutApplicationWithNewInstances(array $arguments = [])
 * @method \Http\Promise\Promise scaleoutApplicationWithNewInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result scaleOutApplication(array $arguments = [])
 * @method \Http\Promise\Promise scaleOutApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result scaleInApplication(array $arguments = [])
 * @method \Http\Promise\Promise scaleInApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result resetApplication(array $arguments = [])
 * @method \Http\Promise\Promise resetApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result restartApplication(array $arguments = [])
 * @method \Http\Promise\Promise restartApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result createK8sService(array $arguments = [])
 * @method \Http\Promise\Promise createK8sServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteK8sApplication(array $arguments = [])
 * @method \Http\Promise\Promise deleteK8sApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteK8sService(array $arguments = [])
 * @method \Http\Promise\Promise deleteK8sServiceAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sApplicationBaseInfo(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sApplicationBaseInfoAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sApplicationConfig(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sApplicationConfigAsync($arguments = [])
 * @method \Dew\Acs\Result startK8sApplication(array $arguments = [])
 * @method \Http\Promise\Promise startK8sApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result stopK8sApplication(array $arguments = [])
 * @method \Http\Promise\Promise stopK8sApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sSlb(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sSlbAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sService(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sServiceAsync($arguments = [])
 * @method \Dew\Acs\Result updateSlsLogStore(array $arguments = [])
 * @method \Http\Promise\Promise updateSlsLogStoreAsync($arguments = [])
 * @method \Dew\Acs\Result startK8sAppPrecheck(array $arguments = [])
 * @method \Http\Promise\Promise startK8sAppPrecheckAsync($arguments = [])
 * @method \Dew\Acs\Result getK8sApplication(array $arguments = [])
 * @method \Http\Promise\Promise getK8sApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result getK8sServices(array $arguments = [])
 * @method \Http\Promise\Promise getK8sServicesAsync($arguments = [])
 * @method \Dew\Acs\Result querySlsLogStoreList(array $arguments = [])
 * @method \Http\Promise\Promise querySlsLogStoreListAsync($arguments = [])
 * @method \Dew\Acs\Result getAppDeployment(array $arguments = [])
 * @method \Http\Promise\Promise getAppDeploymentAsync($arguments = [])
 * @method \Dew\Acs\Result describeAppInstanceList(array $arguments = [])
 * @method \Http\Promise\Promise describeAppInstanceListAsync($arguments = [])
 * @method \Dew\Acs\Result getK8sAppPrecheckResult(array $arguments = [])
 * @method \Http\Promise\Promise getK8sAppPrecheckResultAsync($arguments = [])
 * @method \Dew\Acs\Result bindK8sSlb(array $arguments = [])
 * @method \Http\Promise\Promise bindK8sSlbAsync($arguments = [])
 * @method \Dew\Acs\Result unbindK8sSlb(array $arguments = [])
 * @method \Http\Promise\Promise unbindK8sSlbAsync($arguments = [])
 * @method \Dew\Acs\Result insertK8sApplication(array $arguments = [])
 * @method \Http\Promise\Promise insertK8sApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deployK8sApplication(array $arguments = [])
 * @method \Http\Promise\Promise deployK8sApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result scaleK8sApplication(array $arguments = [])
 * @method \Http\Promise\Promise scaleK8sApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result restartK8sApplication(array $arguments = [])
 * @method \Http\Promise\Promise restartK8sApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result convertK8sResource(array $arguments = [])
 * @method \Http\Promise\Promise convertK8sResourceAsync($arguments = [])
 * @method \Dew\Acs\Result abortAndRollbackChangeOrder(array $arguments = [])
 * @method \Http\Promise\Promise abortAndRollbackChangeOrderAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceConsumersPage(array $arguments = [])
 * @method \Http\Promise\Promise getServiceConsumersPageAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceListPage(array $arguments = [])
 * @method \Http\Promise\Promise getServiceListPageAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceMethodPage(array $arguments = [])
 * @method \Http\Promise\Promise getServiceMethodPageAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceProvidersPage(array $arguments = [])
 * @method \Http\Promise\Promise getServiceProvidersPageAsync($arguments = [])
 * @method \Dew\Acs\Result listConsumedServices(array $arguments = [])
 * @method \Http\Promise\Promise listConsumedServicesAsync($arguments = [])
 * @method \Dew\Acs\Result listPublishedServices(array $arguments = [])
 * @method \Http\Promise\Promise listPublishedServicesAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceDetail(array $arguments = [])
 * @method \Http\Promise\Promise getServiceDetailAsync($arguments = [])
 * @method \Dew\Acs\Result listMethods(array $arguments = [])
 * @method \Http\Promise\Promise listMethodsAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceGroups(array $arguments = [])
 * @method \Http\Promise\Promise listServiceGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result insertServiceGroup(array $arguments = [])
 * @method \Http\Promise\Promise insertServiceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createK8sIngressRule(array $arguments = [])
 * @method \Http\Promise\Promise createK8sIngressRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteK8sIngressRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteK8sIngressRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sIngressRule(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sIngressRuleAsync($arguments = [])
 * @method \Dew\Acs\Result listK8sIngressRules(array $arguments = [])
 * @method \Http\Promise\Promise listK8sIngressRulesAsync($arguments = [])
 * @method \Dew\Acs\Result createConfigTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createConfigTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result createK8sConfigMap(array $arguments = [])
 * @method \Http\Promise\Promise createK8sConfigMapAsync($arguments = [])
 * @method \Dew\Acs\Result createK8sSecret(array $arguments = [])
 * @method \Http\Promise\Promise createK8sSecretAsync($arguments = [])
 * @method \Dew\Acs\Result deleteConfigTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteConfigTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteK8sConfigMap(array $arguments = [])
 * @method \Http\Promise\Promise deleteK8sConfigMapAsync($arguments = [])
 * @method \Dew\Acs\Result deleteK8sSecret(array $arguments = [])
 * @method \Http\Promise\Promise deleteK8sSecretAsync($arguments = [])
 * @method \Dew\Acs\Result updateConfigTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateConfigTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sConfigMap(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sConfigMapAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sSecret(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sSecretAsync($arguments = [])
 * @method \Dew\Acs\Result listConfigTemplates(array $arguments = [])
 * @method \Http\Promise\Promise listConfigTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result getJavaStartUpConfig(array $arguments = [])
 * @method \Http\Promise\Promise getJavaStartUpConfigAsync($arguments = [])
 * @method \Dew\Acs\Result getWebContainerConfig(array $arguments = [])
 * @method \Http\Promise\Promise getWebContainerConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listK8sConfigMaps(array $arguments = [])
 * @method \Http\Promise\Promise listK8sConfigMapsAsync($arguments = [])
 * @method \Dew\Acs\Result listK8sSecrets(array $arguments = [])
 * @method \Http\Promise\Promise listK8sSecretsAsync($arguments = [])
 * @method \Dew\Acs\Result retryChangeOrderTask(array $arguments = [])
 * @method \Http\Promise\Promise retryChangeOrderTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise createApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise deleteApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result disableApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise disableApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result enableApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise enableApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplicationScalingRule(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationScalingRuleAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationScalingRules(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationScalingRulesAsync($arguments = [])
 * @method \Dew\Acs\Result insertSwimmingLaneGroup(array $arguments = [])
 * @method \Http\Promise\Promise insertSwimmingLaneGroupAsync($arguments = [])
 * @method \Dew\Acs\Result insertSwimmingLane(array $arguments = [])
 * @method \Http\Promise\Promise insertSwimmingLaneAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSwimmingLane(array $arguments = [])
 * @method \Http\Promise\Promise deleteSwimmingLaneAsync($arguments = [])
 * @method \Dew\Acs\Result updateSwimmingLaneGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateSwimmingLaneGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateSwimmingLane(array $arguments = [])
 * @method \Http\Promise\Promise updateSwimmingLaneAsync($arguments = [])
 * @method \Dew\Acs\Result listSwimmingLaneGroup(array $arguments = [])
 * @method \Http\Promise\Promise listSwimmingLaneGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listSwimmingLane(array $arguments = [])
 * @method \Http\Promise\Promise listSwimmingLaneAsync($arguments = [])
 */
final class EdasClient extends AcsClient
{
    //
}

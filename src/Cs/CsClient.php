<?php

declare(strict_types=1);

namespace Dew\Acs\Cs;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result openAckService(array $arguments = [])
 * @method \Http\Promise\Promise openAckServiceAsync($arguments = [])
 * @method \Dew\Acs\Result createCluster(array $arguments = [])
 * @method \Http\Promise\Promise createClusterAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCluster(array $arguments = [])
 * @method \Http\Promise\Promise deleteClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describeClustersV1(array $arguments = [])
 * @method \Http\Promise\Promise describeClustersV1Async($arguments = [])
 * @method \Dew\Acs\Result describeClusterDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterDetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterResources(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result describeKubernetesVersionMetadata(array $arguments = [])
 * @method \Http\Promise\Promise describeKubernetesVersionMetadataAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserClusterNamespaces(array $arguments = [])
 * @method \Http\Promise\Promise describeUserClusterNamespacesAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterLogs(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterLogsAsync($arguments = [])
 * @method \Dew\Acs\Result runClusterCheck(array $arguments = [])
 * @method \Http\Promise\Promise runClusterCheckAsync($arguments = [])
 * @method \Dew\Acs\Result listClusterChecks(array $arguments = [])
 * @method \Http\Promise\Promise listClusterChecksAsync($arguments = [])
 * @method \Dew\Acs\Result getClusterCheck(array $arguments = [])
 * @method \Http\Promise\Promise getClusterCheckAsync($arguments = [])
 * @method \Dew\Acs\Result modifyCluster(array $arguments = [])
 * @method \Http\Promise\Promise modifyClusterAsync($arguments = [])
 * @method \Dew\Acs\Result migrateCluster(array $arguments = [])
 * @method \Http\Promise\Promise migrateClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterUserKubeconfig(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterUserKubeconfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeSubaccountK8sClusterUserConfig(array $arguments = [])
 * @method \Http\Promise\Promise describeSubaccountK8sClusterUserConfigAsync($arguments = [])
 * @method \Dew\Acs\Result updateK8sClusterUserConfigExpire(array $arguments = [])
 * @method \Http\Promise\Promise updateK8sClusterUserConfigExpireAsync($arguments = [])
 * @method \Dew\Acs\Result scanClusterVuls(array $arguments = [])
 * @method \Http\Promise\Promise scanClusterVulsAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterVuls(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterVulsAsync($arguments = [])
 * @method \Dew\Acs\Result createClusterNodePool(array $arguments = [])
 * @method \Http\Promise\Promise createClusterNodePoolAsync($arguments = [])
 * @method \Dew\Acs\Result deleteClusterNodepool(array $arguments = [])
 * @method \Http\Promise\Promise deleteClusterNodepoolAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterNodePoolDetail(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterNodePoolDetailAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterNodePools(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterNodePoolsAsync($arguments = [])
 * @method \Dew\Acs\Result describeNodePoolVuls(array $arguments = [])
 * @method \Http\Promise\Promise describeNodePoolVulsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyClusterNodePool(array $arguments = [])
 * @method \Http\Promise\Promise modifyClusterNodePoolAsync($arguments = [])
 * @method \Dew\Acs\Result scaleClusterNodePool(array $arguments = [])
 * @method \Http\Promise\Promise scaleClusterNodePoolAsync($arguments = [])
 * @method \Dew\Acs\Result attachInstancesToNodePool(array $arguments = [])
 * @method \Http\Promise\Promise attachInstancesToNodePoolAsync($arguments = [])
 * @method \Dew\Acs\Result removeNodePoolNodes(array $arguments = [])
 * @method \Http\Promise\Promise removeNodePoolNodesAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeClusterNodepool(array $arguments = [])
 * @method \Http\Promise\Promise upgradeClusterNodepoolAsync($arguments = [])
 * @method \Dew\Acs\Result repairClusterNodePool(array $arguments = [])
 * @method \Http\Promise\Promise repairClusterNodePoolAsync($arguments = [])
 * @method \Dew\Acs\Result fixNodePoolVuls(array $arguments = [])
 * @method \Http\Promise\Promise fixNodePoolVulsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyNodePoolNodeConfig(array $arguments = [])
 * @method \Http\Promise\Promise modifyNodePoolNodeConfigAsync($arguments = [])
 * @method \Dew\Acs\Result syncClusterNodePool(array $arguments = [])
 * @method \Http\Promise\Promise syncClusterNodePoolAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterAttachScripts(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterAttachScriptsAsync($arguments = [])
 * @method \Dew\Acs\Result createAutoscalingConfig(array $arguments = [])
 * @method \Http\Promise\Promise createAutoscalingConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterNodes(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterNodesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteClusterNodes(array $arguments = [])
 * @method \Http\Promise\Promise deleteClusterNodesAsync($arguments = [])
 * @method \Dew\Acs\Result attachInstances(array $arguments = [])
 * @method \Http\Promise\Promise attachInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result installClusterAddons(array $arguments = [])
 * @method \Http\Promise\Promise installClusterAddonsAsync($arguments = [])
 * @method \Dew\Acs\Result unInstallClusterAddons(array $arguments = [])
 * @method \Http\Promise\Promise unInstallClusterAddonsAsync($arguments = [])
 * @method \Dew\Acs\Result describeAddons(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise describeAddonsAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result describeClusterAddonsVersion(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise describeClusterAddonsVersionAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result describeClusterAddonInstance(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise describeClusterAddonInstanceAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result listAddons(array $arguments = [])
 * @method \Http\Promise\Promise listAddonsAsync($arguments = [])
 * @method \Dew\Acs\Result listClusterAddonInstances(array $arguments = [])
 * @method \Http\Promise\Promise listClusterAddonInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result getClusterAddonInstance(array $arguments = [])
 * @method \Http\Promise\Promise getClusterAddonInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeAddon(array $arguments = [])
 * @method \Http\Promise\Promise describeAddonAsync($arguments = [])
 * @method \Dew\Acs\Result modifyClusterAddon(array $arguments = [])
 * @method \Http\Promise\Promise modifyClusterAddonAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterAddonMetadata(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise describeClusterAddonMetadataAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result upgradeClusterAddons(array $arguments = [])
 * @method \Http\Promise\Promise upgradeClusterAddonsAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterAddonsUpgradeStatus(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise describeClusterAddonsUpgradeStatusAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result upgradeCluster(array $arguments = [])
 * @method \Http\Promise\Promise upgradeClusterAsync($arguments = [])
 * @method \Dew\Acs\Result getUpgradeStatus(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise getUpgradeStatusAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result pauseClusterUpgrade(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise pauseClusterUpgradeAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result cancelClusterUpgrade(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise cancelClusterUpgradeAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result resumeUpgradeCluster(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise resumeUpgradeClusterAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result describeUserPermission(array $arguments = [])
 * @method \Http\Promise\Promise describeUserPermissionAsync($arguments = [])
 * @method \Dew\Acs\Result grantPermissions(array $arguments = [])
 * @method \Http\Promise\Promise grantPermissionsAsync($arguments = [])
 * @method \Dew\Acs\Result createTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result describeTemplateAttribute(array $arguments = [])
 * @method \Http\Promise\Promise describeTemplateAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result describeTemplates(array $arguments = [])
 * @method \Http\Promise\Promise describeTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result updateTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result createTrigger(array $arguments = [])
 * @method \Http\Promise\Promise createTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTrigger(array $arguments = [])
 * @method \Http\Promise\Promise deleteTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result describeTrigger(array $arguments = [])
 * @method \Http\Promise\Promise describeTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyClusterTags(array $arguments = [])
 * @method \Http\Promise\Promise modifyClusterTagsAsync($arguments = [])
 * @method \Dew\Acs\Result startAlert(array $arguments = [])
 * @method \Http\Promise\Promise startAlertAsync($arguments = [])
 * @method \Dew\Acs\Result updateContactGroupForAlert(array $arguments = [])
 * @method \Http\Promise\Promise updateContactGroupForAlertAsync($arguments = [])
 * @method \Dew\Acs\Result stopAlert(array $arguments = [])
 * @method \Http\Promise\Promise stopAlertAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlertContact(array $arguments = [])
 * @method \Http\Promise\Promise deleteAlertContactAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlertContactGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteAlertContactGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateControlPlaneLog(array $arguments = [])
 * @method \Http\Promise\Promise updateControlPlaneLogAsync($arguments = [])
 * @method \Dew\Acs\Result checkControlPlaneLogEnable(array $arguments = [])
 * @method \Http\Promise\Promise checkControlPlaneLogEnableAsync($arguments = [])
 * @method \Dew\Acs\Result describeEvents(array $arguments = [])
 * @method \Http\Promise\Promise describeEventsAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterEvents(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterEventsAsync($arguments = [])
 * @method \Dew\Acs\Result describeTaskInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeTaskInfoAsync($arguments = [])
 * @method \Dew\Acs\Result pauseTask(array $arguments = [])
 * @method \Http\Promise\Promise pauseTaskAsync($arguments = [])
 * @method \Dew\Acs\Result resumeTask(array $arguments = [])
 * @method \Http\Promise\Promise resumeTaskAsync($arguments = [])
 * @method \Dew\Acs\Result cancelTask(array $arguments = [])
 * @method \Http\Promise\Promise cancelTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusterTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeClusterTasksAsync($arguments = [])
 * @method \Dew\Acs\Result startWorkflow(array $arguments = [])
 * @method \Http\Promise\Promise startWorkflowAsync($arguments = [])
 * @method \Dew\Acs\Result deletePolicyInstance(array $arguments = [])
 * @method \Http\Promise\Promise deletePolicyInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPolicyInstance(array $arguments = [])
 * @method \Http\Promise\Promise modifyPolicyInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describePolicies(array $arguments = [])
 * @method \Http\Promise\Promise describePoliciesAsync($arguments = [])
 * @method \Dew\Acs\Result describePolicyDetails(array $arguments = [])
 * @method \Http\Promise\Promise describePolicyDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result describePolicyGovernanceInCluster(array $arguments = [])
 * @method \Http\Promise\Promise describePolicyGovernanceInClusterAsync($arguments = [])
 * @method \Dew\Acs\Result describePolicyInstances(array $arguments = [])
 * @method \Http\Promise\Promise describePolicyInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result describePolicyInstancesStatus(array $arguments = [])
 * @method \Http\Promise\Promise describePolicyInstancesStatusAsync($arguments = [])
 * @method \Dew\Acs\Result deployPolicyInstance(array $arguments = [])
 * @method \Http\Promise\Promise deployPolicyInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeUserQuota(array $arguments = [])
 * @method \Http\Promise\Promise describeUserQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result updateUserPermissions(array $arguments = [])
 * @method \Http\Promise\Promise updateUserPermissionsAsync($arguments = [])
 * @method \Dew\Acs\Result listOperationPlans(array $arguments = [])
 * @method \Http\Promise\Promise listOperationPlansAsync($arguments = [])
 * @method \Dew\Acs\Result cancelOperationPlan(array $arguments = [])
 * @method \Http\Promise\Promise cancelOperationPlanAsync($arguments = [])
 * @method \Dew\Acs\Result checkServiceRole(array $arguments = [])
 * @method \Http\Promise\Promise checkServiceRoleAsync($arguments = [])
 * @method \Dew\Acs\Result getClusterDiagnosisResult(array $arguments = [])
 * @method \Http\Promise\Promise getClusterDiagnosisResultAsync($arguments = [])
 * @method \Dew\Acs\Result getClusterDiagnosisCheckItems(array $arguments = [])
 * @method \Http\Promise\Promise getClusterDiagnosisCheckItemsAsync($arguments = [])
 * @method \Dew\Acs\Result createClusterDiagnosis(array $arguments = [])
 * @method \Http\Promise\Promise createClusterDiagnosisAsync($arguments = [])
 * @method \Dew\Acs\Result updateResourcesDeleteProtection(array $arguments = [])
 * @method \Http\Promise\Promise updateResourcesDeleteProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result describeResourcesDeleteProtection(array $arguments = [])
 * @method \Http\Promise\Promise describeResourcesDeleteProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result getClusterAuditProject(array $arguments = [])
 * @method \Http\Promise\Promise getClusterAuditProjectAsync($arguments = [])
 * @method \Dew\Acs\Result revokeK8sClusterKubeConfig(array $arguments = [])
 * @method \Http\Promise\Promise revokeK8sClusterKubeConfigAsync($arguments = [])
 * @method \Dew\Acs\Result listClusterKubeconfigStates(array $arguments = [])
 * @method \Http\Promise\Promise listClusterKubeconfigStatesAsync($arguments = [])
 * @method \Dew\Acs\Result listUserKubeConfigStates(array $arguments = [])
 * @method \Http\Promise\Promise listUserKubeConfigStatesAsync($arguments = [])
 * @method \Dew\Acs\Result cleanClusterUserPermissions(array $arguments = [])
 * @method \Http\Promise\Promise cleanClusterUserPermissionsAsync($arguments = [])
 * @method \Dew\Acs\Result cleanUserPermissions(array $arguments = [])
 * @method \Http\Promise\Promise cleanUserPermissionsAsync($arguments = [])
 * @method \Dew\Acs\Result updateClusterAuditLogConfig(array $arguments = [])
 * @method \Http\Promise\Promise updateClusterAuditLogConfigAsync($arguments = [])
 * @method \Dew\Acs\Result describeExternalAgent(array $arguments = [])
 * @method \Http\Promise\Promise describeExternalAgentAsync($arguments = [])
 * @method \Dew\Acs\Result createKubernetesTrigger(array $arguments = [])
 * @method \Http\Promise\Promise createKubernetesTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result resumeComponentUpgrade(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise resumeComponentUpgradeAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result pauseComponentUpgrade(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise pauseComponentUpgradeAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result getKubernetesTrigger(array $arguments = [])
 * @method \Http\Promise\Promise getKubernetesTriggerAsync($arguments = [])
 * @method \Dew\Acs\Result describeClusters(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise describeClustersAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result describeClusterV2UserKubeconfig(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise describeClusterV2UserKubeconfigAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result describeClusterAddonUpgradeStatus(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise describeClusterAddonUpgradeStatusAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result cancelComponentUpgrade(array $arguments = []) {@deprecated 2015-12-15}
 * @method \Http\Promise\Promise cancelComponentUpgradeAsync($arguments = []) {@deprecated 2015-12-15}
 * @method \Dew\Acs\Result deleteKubernetesTrigger(array $arguments = [])
 * @method \Http\Promise\Promise deleteKubernetesTriggerAsync($arguments = [])
 */
final class CsClient extends AcsClient
{
    //
}

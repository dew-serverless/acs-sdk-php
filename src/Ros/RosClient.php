<?php

declare(strict_types=1);

namespace Dew\Acs\Ros;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createAITask(array $arguments = [])
 * @method \Http\Promise\Promise createAITaskAsync($arguments = [])
 * @method \Dew\Acs\Result getAITask(array $arguments = [])
 * @method \Http\Promise\Promise getAITaskAsync($arguments = [])
 * @method \Dew\Acs\Result listAITasks(array $arguments = [])
 * @method \Http\Promise\Promise listAITasksAsync($arguments = [])
 * @method \Dew\Acs\Result listAITaskEvents(array $arguments = [])
 * @method \Http\Promise\Promise listAITaskEventsAsync($arguments = [])
 * @method \Dew\Acs\Result createStack(array $arguments = [])
 * @method \Http\Promise\Promise createStackAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStack(array $arguments = [])
 * @method \Http\Promise\Promise deleteStackAsync($arguments = [])
 * @method \Dew\Acs\Result updateStack(array $arguments = [])
 * @method \Http\Promise\Promise updateStackAsync($arguments = [])
 * @method \Dew\Acs\Result continueCreateStack(array $arguments = [])
 * @method \Http\Promise\Promise continueCreateStackAsync($arguments = [])
 * @method \Dew\Acs\Result getStack(array $arguments = [])
 * @method \Http\Promise\Promise getStackAsync($arguments = [])
 * @method \Dew\Acs\Result listStacks(array $arguments = [])
 * @method \Http\Promise\Promise listStacksAsync($arguments = [])
 * @method \Dew\Acs\Result cancelUpdateStack(array $arguments = [])
 * @method \Http\Promise\Promise cancelUpdateStackAsync($arguments = [])
 * @method \Dew\Acs\Result cancelStackOperation(array $arguments = [])
 * @method \Http\Promise\Promise cancelStackOperationAsync($arguments = [])
 * @method \Dew\Acs\Result setDeletionProtection(array $arguments = [])
 * @method \Http\Promise\Promise setDeletionProtectionAsync($arguments = [])
 * @method \Dew\Acs\Result listStackEvents(array $arguments = [])
 * @method \Http\Promise\Promise listStackEventsAsync($arguments = [])
 * @method \Dew\Acs\Result listStackOperationRisks(array $arguments = [])
 * @method \Http\Promise\Promise listStackOperationRisksAsync($arguments = [])
 * @method \Dew\Acs\Result previewStack(array $arguments = [])
 * @method \Http\Promise\Promise previewStackAsync($arguments = [])
 * @method \Dew\Acs\Result listStackResources(array $arguments = [])
 * @method \Http\Promise\Promise listStackResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result getStackResource(array $arguments = [])
 * @method \Http\Promise\Promise getStackResourceAsync($arguments = [])
 * @method \Dew\Acs\Result moveResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise moveResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createTemplateScratch(array $arguments = [])
 * @method \Http\Promise\Promise createTemplateScratchAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTemplateScratch(array $arguments = [])
 * @method \Http\Promise\Promise deleteTemplateScratchAsync($arguments = [])
 * @method \Dew\Acs\Result updateTemplateScratch(array $arguments = [])
 * @method \Http\Promise\Promise updateTemplateScratchAsync($arguments = [])
 * @method \Dew\Acs\Result listTemplateScratches(array $arguments = [])
 * @method \Http\Promise\Promise listTemplateScratchesAsync($arguments = [])
 * @method \Dew\Acs\Result getTemplateScratch(array $arguments = [])
 * @method \Http\Promise\Promise getTemplateScratchAsync($arguments = [])
 * @method \Dew\Acs\Result generateTemplateByScratch(array $arguments = [])
 * @method \Http\Promise\Promise generateTemplateByScratchAsync($arguments = [])
 * @method \Dew\Acs\Result createTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result updateTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result getTemplate(array $arguments = [])
 * @method \Http\Promise\Promise getTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result listTemplates(array $arguments = [])
 * @method \Http\Promise\Promise listTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result listTemplateVersions(array $arguments = [])
 * @method \Http\Promise\Promise listTemplateVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result getTemplateParameterConstraints(array $arguments = [])
 * @method \Http\Promise\Promise getTemplateParameterConstraintsAsync($arguments = [])
 * @method \Dew\Acs\Result setTemplatePermission(array $arguments = [])
 * @method \Http\Promise\Promise setTemplatePermissionAsync($arguments = [])
 * @method \Dew\Acs\Result getTemplateEstimateCost(array $arguments = [])
 * @method \Http\Promise\Promise getTemplateEstimateCostAsync($arguments = [])
 * @method \Dew\Acs\Result getTemplateSummary(array $arguments = [])
 * @method \Http\Promise\Promise getTemplateSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result validateTemplate(array $arguments = [])
 * @method \Http\Promise\Promise validateTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result generateTemplatePolicy(array $arguments = [])
 * @method \Http\Promise\Promise generateTemplatePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result setStackPolicy(array $arguments = [])
 * @method \Http\Promise\Promise setStackPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result getStackPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getStackPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createChangeSet(array $arguments = [])
 * @method \Http\Promise\Promise createChangeSetAsync($arguments = [])
 * @method \Dew\Acs\Result deleteChangeSet(array $arguments = [])
 * @method \Http\Promise\Promise deleteChangeSetAsync($arguments = [])
 * @method \Dew\Acs\Result getChangeSet(array $arguments = [])
 * @method \Http\Promise\Promise getChangeSetAsync($arguments = [])
 * @method \Dew\Acs\Result listChangeSets(array $arguments = [])
 * @method \Http\Promise\Promise listChangeSetsAsync($arguments = [])
 * @method \Dew\Acs\Result executeChangeSet(array $arguments = [])
 * @method \Http\Promise\Promise executeChangeSetAsync($arguments = [])
 * @method \Dew\Acs\Result createStackGroup(array $arguments = [])
 * @method \Http\Promise\Promise createStackGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStackGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteStackGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateStackGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateStackGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listStackGroups(array $arguments = [])
 * @method \Http\Promise\Promise listStackGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result getStackGroup(array $arguments = [])
 * @method \Http\Promise\Promise getStackGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createStackInstances(array $arguments = [])
 * @method \Http\Promise\Promise createStackInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStackInstances(array $arguments = [])
 * @method \Http\Promise\Promise deleteStackInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result updateStackInstances(array $arguments = [])
 * @method \Http\Promise\Promise updateStackInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result getStackInstance(array $arguments = [])
 * @method \Http\Promise\Promise getStackInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result stopStackGroupOperation(array $arguments = [])
 * @method \Http\Promise\Promise stopStackGroupOperationAsync($arguments = [])
 * @method \Dew\Acs\Result listStackInstances(array $arguments = [])
 * @method \Http\Promise\Promise listStackInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result getStackGroupOperation(array $arguments = [])
 * @method \Http\Promise\Promise getStackGroupOperationAsync($arguments = [])
 * @method \Dew\Acs\Result listStackGroupOperations(array $arguments = [])
 * @method \Http\Promise\Promise listStackGroupOperationsAsync($arguments = [])
 * @method \Dew\Acs\Result listStackGroupOperationResults(array $arguments = [])
 * @method \Http\Promise\Promise listStackGroupOperationResultsAsync($arguments = [])
 * @method \Dew\Acs\Result importStacksToStackGroup(array $arguments = [])
 * @method \Http\Promise\Promise importStacksToStackGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateStackTemplateByResources(array $arguments = [])
 * @method \Http\Promise\Promise updateStackTemplateByResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result getStackDriftDetectionStatus(array $arguments = [])
 * @method \Http\Promise\Promise getStackDriftDetectionStatusAsync($arguments = [])
 * @method \Dew\Acs\Result listStackResourceDrifts(array $arguments = [])
 * @method \Http\Promise\Promise listStackResourceDriftsAsync($arguments = [])
 * @method \Dew\Acs\Result detectStackDrift(array $arguments = [])
 * @method \Http\Promise\Promise detectStackDriftAsync($arguments = [])
 * @method \Dew\Acs\Result detectStackGroupDrift(array $arguments = [])
 * @method \Http\Promise\Promise detectStackGroupDriftAsync($arguments = [])
 * @method \Dew\Acs\Result detectStackResourceDrift(array $arguments = [])
 * @method \Http\Promise\Promise detectStackResourceDriftAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagKeys(array $arguments = [])
 * @method \Http\Promise\Promise listTagKeysAsync($arguments = [])
 * @method \Dew\Acs\Result listTagValues(array $arguments = [])
 * @method \Http\Promise\Promise listTagValuesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createDiagnostic(array $arguments = [])
 * @method \Http\Promise\Promise createDiagnosticAsync($arguments = [])
 * @method \Dew\Acs\Result getDiagnostic(array $arguments = [])
 * @method \Http\Promise\Promise getDiagnosticAsync($arguments = [])
 * @method \Dew\Acs\Result listDiagnostics(array $arguments = [])
 * @method \Http\Promise\Promise listDiagnosticsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDiagnostic(array $arguments = [])
 * @method \Http\Promise\Promise deleteDiagnosticAsync($arguments = [])
 * @method \Dew\Acs\Result registerResourceType(array $arguments = [])
 * @method \Http\Promise\Promise registerResourceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result setResourceType(array $arguments = [])
 * @method \Http\Promise\Promise setResourceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result deregisterResourceType(array $arguments = [])
 * @method \Http\Promise\Promise deregisterResourceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceTypes(array $arguments = [])
 * @method \Http\Promise\Promise listResourceTypesAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceTypeTemplate(array $arguments = [])
 * @method \Http\Promise\Promise getResourceTypeTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceType(array $arguments = [])
 * @method \Http\Promise\Promise getResourceTypeAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceTypeVersions(array $arguments = [])
 * @method \Http\Promise\Promise listResourceTypeVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceTypeRegistrations(array $arguments = [])
 * @method \Http\Promise\Promise listResourceTypeRegistrationsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result signalResource(array $arguments = [])
 * @method \Http\Promise\Promise signalResourceAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceProvisions(array $arguments = [])
 * @method \Http\Promise\Promise getServiceProvisionsAsync($arguments = [])
 * @method \Dew\Acs\Result getFeatureDetails(array $arguments = [])
 * @method \Http\Promise\Promise getFeatureDetailsAsync($arguments = [])
 */
final class RosClient extends AcsClient
{
    //
}

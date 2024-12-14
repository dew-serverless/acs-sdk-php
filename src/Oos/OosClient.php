<?php

declare(strict_types=1);

namespace Dew\Acs\Oos;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result createTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTemplates(array $arguments = [])
 * @method \Http\Promise\Promise deleteTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result updateTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result listTemplateVersions(array $arguments = [])
 * @method \Http\Promise\Promise listTemplateVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result listTemplates(array $arguments = [])
 * @method \Http\Promise\Promise listTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result getTemplate(array $arguments = [])
 * @method \Http\Promise\Promise getTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result listExecutionRiskyTasks(array $arguments = [])
 * @method \Http\Promise\Promise listExecutionRiskyTasksAsync($arguments = [])
 * @method \Dew\Acs\Result validateTemplateContent(array $arguments = [])
 * @method \Http\Promise\Promise validateTemplateContentAsync($arguments = [])
 * @method \Dew\Acs\Result deleteExecutions(array $arguments = [])
 * @method \Http\Promise\Promise deleteExecutionsAsync($arguments = [])
 * @method \Dew\Acs\Result startExecution(array $arguments = [])
 * @method \Http\Promise\Promise startExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result updateExecution(array $arguments = [])
 * @method \Http\Promise\Promise updateExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result getExecutionTemplate(array $arguments = [])
 * @method \Http\Promise\Promise getExecutionTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result listExecutions(array $arguments = [])
 * @method \Http\Promise\Promise listExecutionsAsync($arguments = [])
 * @method \Dew\Acs\Result listExecutionLogs(array $arguments = [])
 * @method \Http\Promise\Promise listExecutionLogsAsync($arguments = [])
 * @method \Dew\Acs\Result listTaskExecutions(array $arguments = [])
 * @method \Http\Promise\Promise listTaskExecutionsAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceExecutionStatus(array $arguments = [])
 * @method \Http\Promise\Promise listResourceExecutionStatusAsync($arguments = [])
 * @method \Dew\Acs\Result cancelExecution(array $arguments = [])
 * @method \Http\Promise\Promise cancelExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result generateExecutionPolicy(array $arguments = [])
 * @method \Http\Promise\Promise generateExecutionPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result notifyExecution(array $arguments = [])
 * @method \Http\Promise\Promise notifyExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result triggerExecution(array $arguments = [])
 * @method \Http\Promise\Promise triggerExecutionAsync($arguments = [])
 * @method \Dew\Acs\Result listActions(array $arguments = [])
 * @method \Http\Promise\Promise listActionsAsync($arguments = [])
 * @method \Dew\Acs\Result createParameter(array $arguments = [])
 * @method \Http\Promise\Promise createParameterAsync($arguments = [])
 * @method \Dew\Acs\Result deleteParameter(array $arguments = [])
 * @method \Http\Promise\Promise deleteParameterAsync($arguments = [])
 * @method \Dew\Acs\Result updateParameter(array $arguments = [])
 * @method \Http\Promise\Promise updateParameterAsync($arguments = [])
 * @method \Dew\Acs\Result getParameter(array $arguments = [])
 * @method \Http\Promise\Promise getParameterAsync($arguments = [])
 * @method \Dew\Acs\Result listParameters(array $arguments = [])
 * @method \Http\Promise\Promise listParametersAsync($arguments = [])
 * @method \Dew\Acs\Result listParameterVersions(array $arguments = [])
 * @method \Http\Promise\Promise listParameterVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result getParametersByPath(array $arguments = [])
 * @method \Http\Promise\Promise getParametersByPathAsync($arguments = [])
 * @method \Dew\Acs\Result getParameters(array $arguments = [])
 * @method \Http\Promise\Promise getParametersAsync($arguments = [])
 * @method \Dew\Acs\Result createSecretParameter(array $arguments = [])
 * @method \Http\Promise\Promise createSecretParameterAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSecretParameter(array $arguments = [])
 * @method \Http\Promise\Promise deleteSecretParameterAsync($arguments = [])
 * @method \Dew\Acs\Result updateSecretParameter(array $arguments = [])
 * @method \Http\Promise\Promise updateSecretParameterAsync($arguments = [])
 * @method \Dew\Acs\Result getSecretParameter(array $arguments = [])
 * @method \Http\Promise\Promise getSecretParameterAsync($arguments = [])
 * @method \Dew\Acs\Result listSecretParameters(array $arguments = [])
 * @method \Http\Promise\Promise listSecretParametersAsync($arguments = [])
 * @method \Dew\Acs\Result listSecretParameterVersions(array $arguments = [])
 * @method \Http\Promise\Promise listSecretParameterVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result getSecretParametersByPath(array $arguments = [])
 * @method \Http\Promise\Promise getSecretParametersByPathAsync($arguments = [])
 * @method \Dew\Acs\Result getSecretParameters(array $arguments = [])
 * @method \Http\Promise\Promise getSecretParametersAsync($arguments = [])
 * @method \Dew\Acs\Result createPatchBaseline(array $arguments = [])
 * @method \Http\Promise\Promise createPatchBaselineAsync($arguments = [])
 * @method \Dew\Acs\Result deletePatchBaseline(array $arguments = [])
 * @method \Http\Promise\Promise deletePatchBaselineAsync($arguments = [])
 * @method \Dew\Acs\Result updatePatchBaseline(array $arguments = [])
 * @method \Http\Promise\Promise updatePatchBaselineAsync($arguments = [])
 * @method \Dew\Acs\Result getPatchBaseline(array $arguments = [])
 * @method \Http\Promise\Promise getPatchBaselineAsync($arguments = [])
 * @method \Dew\Acs\Result listPatchBaselines(array $arguments = [])
 * @method \Http\Promise\Promise listPatchBaselinesAsync($arguments = [])
 * @method \Dew\Acs\Result registerDefaultPatchBaseline(array $arguments = [])
 * @method \Http\Promise\Promise registerDefaultPatchBaselineAsync($arguments = [])
 * @method \Dew\Acs\Result listInstancePatchStates(array $arguments = [])
 * @method \Http\Promise\Promise listInstancePatchStatesAsync($arguments = [])
 * @method \Dew\Acs\Result listInstancePatches(array $arguments = [])
 * @method \Http\Promise\Promise listInstancePatchesAsync($arguments = [])
 * @method \Dew\Acs\Result listInventoryEntries(array $arguments = [])
 * @method \Http\Promise\Promise listInventoryEntriesAsync($arguments = [])
 * @method \Dew\Acs\Result getInventorySchema(array $arguments = [])
 * @method \Http\Promise\Promise getInventorySchemaAsync($arguments = [])
 * @method \Dew\Acs\Result searchInventory(array $arguments = [])
 * @method \Http\Promise\Promise searchInventoryAsync($arguments = [])
 * @method \Dew\Acs\Result createStateConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise createStateConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteStateConfigurations(array $arguments = [])
 * @method \Http\Promise\Promise deleteStateConfigurationsAsync($arguments = [])
 * @method \Dew\Acs\Result updateStateConfiguration(array $arguments = [])
 * @method \Http\Promise\Promise updateStateConfigurationAsync($arguments = [])
 * @method \Dew\Acs\Result listStateConfigurations(array $arguments = [])
 * @method \Http\Promise\Promise listStateConfigurationsAsync($arguments = [])
 * @method \Dew\Acs\Result createOpsItem(array $arguments = [])
 * @method \Http\Promise\Promise createOpsItemAsync($arguments = [])
 * @method \Dew\Acs\Result getOpsItem(array $arguments = [])
 * @method \Http\Promise\Promise getOpsItemAsync($arguments = [])
 * @method \Dew\Acs\Result listOpsItems(array $arguments = [])
 * @method \Http\Promise\Promise listOpsItemsAsync($arguments = [])
 * @method \Dew\Acs\Result updateOpsItem(array $arguments = [])
 * @method \Http\Promise\Promise updateOpsItemAsync($arguments = [])
 * @method \Dew\Acs\Result setServiceSettings(array $arguments = [])
 * @method \Http\Promise\Promise setServiceSettingsAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceSettings(array $arguments = [])
 * @method \Http\Promise\Promise getServiceSettingsAsync($arguments = [])
 * @method \Dew\Acs\Result createApplication(array $arguments = [])
 * @method \Http\Promise\Promise createApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApplication(array $arguments = [])
 * @method \Http\Promise\Promise deleteApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplication(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result getApplication(array $arguments = [])
 * @method \Http\Promise\Promise getApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result listApplications(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result createApplicationGroup(array $arguments = [])
 * @method \Http\Promise\Promise createApplicationGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApplicationGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteApplicationGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplicationGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getApplicationGroup(array $arguments = [])
 * @method \Http\Promise\Promise getApplicationGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listApplicationGroups(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result deployApplicationGroup(array $arguments = [])
 * @method \Http\Promise\Promise deployApplicationGroupAsync($arguments = [])
 * @method \Dew\Acs\Result continueDeployApplicationGroup(array $arguments = [])
 * @method \Http\Promise\Promise continueDeployApplicationGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeApplicationGroupBill(array $arguments = [])
 * @method \Http\Promise\Promise describeApplicationGroupBillAsync($arguments = [])
 * @method \Dew\Acs\Result listTagKeys(array $arguments = [])
 * @method \Http\Promise\Promise listTagKeysAsync($arguments = [])
 * @method \Dew\Acs\Result listTagValues(array $arguments = [])
 * @method \Http\Promise\Promise listTagValuesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result updateInstancePackageState(array $arguments = [])
 * @method \Http\Promise\Promise updateInstancePackageStateAsync($arguments = [])
 * @method \Dew\Acs\Result listInstancePackageStates(array $arguments = [])
 * @method \Http\Promise\Promise listInstancePackageStatesAsync($arguments = [])
 * @method \Dew\Acs\Result getTemplateParameterConstraints(array $arguments = [])
 * @method \Http\Promise\Promise getTemplateParameterConstraintsAsync($arguments = [])
 */
final class OosClient extends AcsClient
{
    //
}

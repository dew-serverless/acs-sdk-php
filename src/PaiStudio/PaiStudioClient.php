<?php

declare(strict_types=1);

namespace Dew\Acs\PaiStudio;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result updateResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise updateResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceGroupTotal(array $arguments = [])
 * @method \Http\Promise\Promise getResourceGroupTotalAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceGroups(array $arguments = [])
 * @method \Http\Promise\Promise listResourceGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceGroupRequest(array $arguments = []) {@deprecated 2022-01-12}
 * @method \Http\Promise\Promise getResourceGroupRequestAsync($arguments = []) {@deprecated 2022-01-12}
 * @method \Dew\Acs\Result deleteResourceGroupMachineGroup(array $arguments = []) {@deprecated 2022-01-12}
 * @method \Http\Promise\Promise deleteResourceGroupMachineGroupAsync($arguments = []) {@deprecated 2022-01-12}
 * @method \Dew\Acs\Result getNodeMetrics(array $arguments = []) {@deprecated 2022-01-12}
 * @method \Http\Promise\Promise getNodeMetricsAsync($arguments = []) {@deprecated 2022-01-12}
 * @method \Dew\Acs\Result listResourceGroupMachineGroups(array $arguments = [])
 * @method \Http\Promise\Promise listResourceGroupMachineGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result getUserViewMetrics(array $arguments = []) {@deprecated 2022-01-12}
 * @method \Http\Promise\Promise getUserViewMetricsAsync($arguments = []) {@deprecated 2022-01-12}
 * @method \Dew\Acs\Result getResourceGroupMachineGroup(array $arguments = [])
 * @method \Http\Promise\Promise getResourceGroupMachineGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise getResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMachineGroup(array $arguments = []) {@deprecated 2022-01-12}
 * @method \Http\Promise\Promise deleteMachineGroupAsync($arguments = []) {@deprecated 2022-01-12}
 * @method \Dew\Acs\Result createResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise createResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result getMachineGroup(array $arguments = []) {@deprecated 2022-01-12}
 * @method \Http\Promise\Promise getMachineGroupAsync($arguments = []) {@deprecated 2022-01-12}
 * @method \Dew\Acs\Result createAlgorithm(array $arguments = [])
 * @method \Http\Promise\Promise createAlgorithmAsync($arguments = [])
 * @method \Dew\Acs\Result createAlgorithmVersion(array $arguments = [])
 * @method \Http\Promise\Promise createAlgorithmVersionAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlgorithm(array $arguments = [])
 * @method \Http\Promise\Promise deleteAlgorithmAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAlgorithmVersion(array $arguments = [])
 * @method \Http\Promise\Promise deleteAlgorithmVersionAsync($arguments = [])
 * @method \Dew\Acs\Result getAlgorithm(array $arguments = [])
 * @method \Http\Promise\Promise getAlgorithmAsync($arguments = [])
 * @method \Dew\Acs\Result getAlgorithmVersion(array $arguments = [])
 * @method \Http\Promise\Promise getAlgorithmVersionAsync($arguments = [])
 * @method \Dew\Acs\Result listAlgorithms(array $arguments = [])
 * @method \Http\Promise\Promise listAlgorithmsAsync($arguments = [])
 * @method \Dew\Acs\Result listAlgorithmVersions(array $arguments = [])
 * @method \Http\Promise\Promise listAlgorithmVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result updateAlgorithm(array $arguments = [])
 * @method \Http\Promise\Promise updateAlgorithmAsync($arguments = [])
 * @method \Dew\Acs\Result updateAlgorithmVersion(array $arguments = [])
 * @method \Http\Promise\Promise updateAlgorithmVersionAsync($arguments = [])
 * @method \Dew\Acs\Result createTrainingJob(array $arguments = [])
 * @method \Http\Promise\Promise createTrainingJobAsync($arguments = [])
 * @method \Dew\Acs\Result createInstanceWebTerminal(array $arguments = [])
 * @method \Http\Promise\Promise createInstanceWebTerminalAsync($arguments = [])
 * @method \Dew\Acs\Result checkInstanceWebTerminal(array $arguments = [])
 * @method \Http\Promise\Promise checkInstanceWebTerminalAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTrainingJob(array $arguments = [])
 * @method \Http\Promise\Promise deleteTrainingJobAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTrainingJobLabels(array $arguments = [])
 * @method \Http\Promise\Promise deleteTrainingJobLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result getToken(array $arguments = [])
 * @method \Http\Promise\Promise getTokenAsync($arguments = [])
 * @method \Dew\Acs\Result getTrainingJob(array $arguments = [])
 * @method \Http\Promise\Promise getTrainingJobAsync($arguments = [])
 * @method \Dew\Acs\Result getTrainingJobErrorInfo(array $arguments = [])
 * @method \Http\Promise\Promise getTrainingJobErrorInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getTrainingJobLatestMetrics(array $arguments = [])
 * @method \Http\Promise\Promise getTrainingJobLatestMetricsAsync($arguments = [])
 * @method \Dew\Acs\Result listTrainingJobs(array $arguments = [])
 * @method \Http\Promise\Promise listTrainingJobsAsync($arguments = [])
 * @method \Dew\Acs\Result listTrainingJobEvents(array $arguments = [])
 * @method \Http\Promise\Promise listTrainingJobEventsAsync($arguments = [])
 * @method \Dew\Acs\Result listTrainingJobInstanceEvents(array $arguments = [])
 * @method \Http\Promise\Promise listTrainingJobInstanceEventsAsync($arguments = [])
 * @method \Dew\Acs\Result listTrainingJobInstanceMetrics(array $arguments = [])
 * @method \Http\Promise\Promise listTrainingJobInstanceMetricsAsync($arguments = [])
 * @method \Dew\Acs\Result listTrainingJobLogs(array $arguments = [])
 * @method \Http\Promise\Promise listTrainingJobLogsAsync($arguments = [])
 * @method \Dew\Acs\Result listTrainingJobMetrics(array $arguments = [])
 * @method \Http\Promise\Promise listTrainingJobMetricsAsync($arguments = [])
 * @method \Dew\Acs\Result listTrainingJobOutputModels(array $arguments = [])
 * @method \Http\Promise\Promise listTrainingJobOutputModelsAsync($arguments = [])
 * @method \Dew\Acs\Result stopTrainingJob(array $arguments = [])
 * @method \Http\Promise\Promise stopTrainingJobAsync($arguments = [])
 * @method \Dew\Acs\Result updateTrainingJobLabels(array $arguments = [])
 * @method \Http\Promise\Promise updateTrainingJobLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result createQuota(array $arguments = [])
 * @method \Http\Promise\Promise createQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result listQuotas(array $arguments = [])
 * @method \Http\Promise\Promise listQuotasAsync($arguments = [])
 * @method \Dew\Acs\Result getQuota(array $arguments = [])
 * @method \Http\Promise\Promise getQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result updateQuota(array $arguments = [])
 * @method \Http\Promise\Promise updateQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result scaleQuota(array $arguments = [])
 * @method \Http\Promise\Promise scaleQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result deleteQuota(array $arguments = [])
 * @method \Http\Promise\Promise deleteQuotaAsync($arguments = [])
 * @method \Dew\Acs\Result listNodes(array $arguments = [])
 * @method \Http\Promise\Promise listNodesAsync($arguments = [])
 */
final class PaiStudioClient extends AcsClient
{
    //
}

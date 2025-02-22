<?php

declare(strict_types=1);

namespace Dew\Acs\ComputeNestSupplier;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createService(array $arguments = [])
 * @method \Http\Promise\Promise createServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteService(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceAsync($arguments = [])
 * @method \Dew\Acs\Result updateService(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceAsync($arguments = [])
 * @method \Dew\Acs\Result getService(array $arguments = [])
 * @method \Http\Promise\Promise getServiceAsync($arguments = [])
 * @method \Dew\Acs\Result listServices(array $arguments = [])
 * @method \Http\Promise\Promise listServicesAsync($arguments = [])
 * @method \Dew\Acs\Result preLaunchService(array $arguments = [])
 * @method \Http\Promise\Promise preLaunchServiceAsync($arguments = [])
 * @method \Dew\Acs\Result registerService(array $arguments = [])
 * @method \Http\Promise\Promise registerServiceAsync($arguments = [])
 * @method \Dew\Acs\Result launchService(array $arguments = [])
 * @method \Http\Promise\Promise launchServiceAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceProvisions(array $arguments = [])
 * @method \Http\Promise\Promise getServiceProvisionsAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceTemplateParameterConstraints(array $arguments = [])
 * @method \Http\Promise\Promise getServiceTemplateParameterConstraintsAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceEstimateCost(array $arguments = [])
 * @method \Http\Promise\Promise getServiceEstimateCostAsync($arguments = [])
 * @method \Dew\Acs\Result withdrawService(array $arguments = [])
 * @method \Http\Promise\Promise withdrawServiceAsync($arguments = [])
 * @method \Dew\Acs\Result generateServicePolicy(array $arguments = [])
 * @method \Http\Promise\Promise generateServicePolicyAsync($arguments = [])
 * @method \Dew\Acs\Result cancelServiceRegistration(array $arguments = [])
 * @method \Http\Promise\Promise cancelServiceRegistrationAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceRegistrations(array $arguments = [])
 * @method \Http\Promise\Promise listServiceRegistrationsAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceInstanceUpgradeHistory(array $arguments = [])
 * @method \Http\Promise\Promise listServiceInstanceUpgradeHistoryAsync($arguments = [])
 * @method \Dew\Acs\Result rollbackServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise rollbackServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise createServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceInstances(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceInstanceSpec(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceInstanceSpecAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result modifyServiceInstanceResources(array $arguments = [])
 * @method \Http\Promise\Promise modifyServiceInstanceResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise upgradeServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise getServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceInstances(array $arguments = [])
 * @method \Http\Promise\Promise listServiceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result deployServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise deployServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result continueDeployServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise continueDeployServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result startServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise startServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result stopServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise stopServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result restartServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise restartServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceInstanceDeployDetails(array $arguments = [])
 * @method \Http\Promise\Promise listServiceInstanceDeployDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceInstanceResources(array $arguments = [])
 * @method \Http\Promise\Promise listServiceInstanceResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listArtifactRisks(array $arguments = [])
 * @method \Http\Promise\Promise listArtifactRisksAsync($arguments = [])
 * @method \Dew\Acs\Result createArtifact(array $arguments = [])
 * @method \Http\Promise\Promise createArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result deleteArtifact(array $arguments = [])
 * @method \Http\Promise\Promise deleteArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result updateArtifact(array $arguments = [])
 * @method \Http\Promise\Promise updateArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result getArtifact(array $arguments = [])
 * @method \Http\Promise\Promise getArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result listArtifacts(array $arguments = [])
 * @method \Http\Promise\Promise listArtifactsAsync($arguments = [])
 * @method \Dew\Acs\Result listArtifactVersions(array $arguments = [])
 * @method \Http\Promise\Promise listArtifactVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result releaseArtifact(array $arguments = [])
 * @method \Http\Promise\Promise releaseArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result getUploadCredentials(array $arguments = [])
 * @method \Http\Promise\Promise getUploadCredentialsAsync($arguments = [])
 * @method \Dew\Acs\Result getArtifactRepositoryCredentials(array $arguments = [])
 * @method \Http\Promise\Promise getArtifactRepositoryCredentialsAsync($arguments = [])
 * @method \Dew\Acs\Result listAcrImageTags(array $arguments = [])
 * @method \Http\Promise\Promise listAcrImageTagsAsync($arguments = [])
 * @method \Dew\Acs\Result listAcrImageRepositories(array $arguments = [])
 * @method \Http\Promise\Promise listAcrImageRepositoriesAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceUsage(array $arguments = [])
 * @method \Http\Promise\Promise createServiceUsageAsync($arguments = [])
 * @method \Dew\Acs\Result rejectServiceUsage(array $arguments = [])
 * @method \Http\Promise\Promise rejectServiceUsageAsync($arguments = [])
 * @method \Dew\Acs\Result approveServiceUsage(array $arguments = [])
 * @method \Http\Promise\Promise approveServiceUsageAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceUsages(array $arguments = [])
 * @method \Http\Promise\Promise listServiceUsagesAsync($arguments = [])
 * @method \Dew\Acs\Result addServiceSharedAccounts(array $arguments = [])
 * @method \Http\Promise\Promise addServiceSharedAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result removeServiceSharedAccounts(array $arguments = [])
 * @method \Http\Promise\Promise removeServiceSharedAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceSharedAccounts(array $arguments = [])
 * @method \Http\Promise\Promise listServiceSharedAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result updateSharedAccountPermission(array $arguments = [])
 * @method \Http\Promise\Promise updateSharedAccountPermissionAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result unTagResources(array $arguments = [])
 * @method \Http\Promise\Promise unTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagValues(array $arguments = [])
 * @method \Http\Promise\Promise listTagValuesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagKeys(array $arguments = [])
 * @method \Http\Promise\Promise listTagKeysAsync($arguments = [])
 * @method \Dew\Acs\Result getSupplierInformation(array $arguments = [])
 * @method \Http\Promise\Promise getSupplierInformationAsync($arguments = [])
 * @method \Dew\Acs\Result createSupplierRegistration(array $arguments = [])
 * @method \Http\Promise\Promise createSupplierRegistrationAsync($arguments = [])
 * @method \Dew\Acs\Result listSupplierRegistrations(array $arguments = [])
 * @method \Http\Promise\Promise listSupplierRegistrationsAsync($arguments = [])
 * @method \Dew\Acs\Result updateSupplierInformation(array $arguments = [])
 * @method \Http\Promise\Promise updateSupplierInformationAsync($arguments = [])
 * @method \Dew\Acs\Result pushMeteringData(array $arguments = [])
 * @method \Http\Promise\Promise pushMeteringDataAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceTestTask(array $arguments = [])
 * @method \Http\Promise\Promise createServiceTestTaskAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceTestTasks(array $arguments = [])
 * @method \Http\Promise\Promise listServiceTestTasksAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceTestTaskLogs(array $arguments = [])
 * @method \Http\Promise\Promise listServiceTestTaskLogsAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceTestTask(array $arguments = [])
 * @method \Http\Promise\Promise getServiceTestTaskAsync($arguments = [])
 * @method \Dew\Acs\Result generateDefaultServiceTestConfig(array $arguments = [])
 * @method \Http\Promise\Promise generateDefaultServiceTestConfigAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceTestCase(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceTestCaseAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceTestCase(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceTestCaseAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceTestCases(array $arguments = [])
 * @method \Http\Promise\Promise listServiceTestCasesAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceTestCase(array $arguments = [])
 * @method \Http\Promise\Promise createServiceTestCaseAsync($arguments = [])
 */
final class ComputeNestSupplierClient extends AcsClient
{
    //
}

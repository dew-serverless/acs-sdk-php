<?php

declare(strict_types=1);

namespace Dew\Acs\ComputeNestSupplier;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result getArtifactRepositoryCredentials(array $arguments = [])
 * @method \Http\Promise\Promise getArtifactRepositoryCredentialsAsync($arguments = [])
 * @method \Dew\Acs\Result createArtifact(array $arguments = [])
 * @method \Http\Promise\Promise createArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result deleteArtifact(array $arguments = [])
 * @method \Http\Promise\Promise deleteArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result releaseArtifact(array $arguments = [])
 * @method \Http\Promise\Promise releaseArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result listArtifacts(array $arguments = [])
 * @method \Http\Promise\Promise listArtifactsAsync($arguments = [])
 * @method \Dew\Acs\Result getArtifact(array $arguments = [])
 * @method \Http\Promise\Promise getArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result listArtifactVersions(array $arguments = [])
 * @method \Http\Promise\Promise listArtifactVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result updateArtifact(array $arguments = [])
 * @method \Http\Promise\Promise updateArtifactAsync($arguments = [])
 * @method \Dew\Acs\Result createService(array $arguments = [])
 * @method \Http\Promise\Promise createServiceAsync($arguments = [])
 * @method \Dew\Acs\Result registerService(array $arguments = [])
 * @method \Http\Promise\Promise registerServiceAsync($arguments = [])
 * @method \Dew\Acs\Result updateService(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise upgradeServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result deleteService(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceAsync($arguments = [])
 * @method \Dew\Acs\Result listServices(array $arguments = [])
 * @method \Http\Promise\Promise listServicesAsync($arguments = [])
 * @method \Dew\Acs\Result getService(array $arguments = [])
 * @method \Http\Promise\Promise getServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deployServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise deployServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise getServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceInstances(array $arguments = [])
 * @method \Http\Promise\Promise listServiceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceUsages(array $arguments = [])
 * @method \Http\Promise\Promise listServiceUsagesAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceEstimateCost(array $arguments = [])
 * @method \Http\Promise\Promise getServiceEstimateCostAsync($arguments = [])
 * @method \Dew\Acs\Result getUploadCredentials(array $arguments = [])
 * @method \Http\Promise\Promise getUploadCredentialsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyServiceInstanceResources(array $arguments = [])
 * @method \Http\Promise\Promise modifyServiceInstanceResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result continueDeployServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise continueDeployServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise createServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceInstances(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceInstanceSpec(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceInstanceSpecAsync($arguments = [])
 * @method \Dew\Acs\Result pushMeteringData(array $arguments = [])
 * @method \Http\Promise\Promise pushMeteringDataAsync($arguments = [])
 * @method \Dew\Acs\Result listAcrImageRepositories(array $arguments = [])
 * @method \Http\Promise\Promise listAcrImageRepositoriesAsync($arguments = [])
 * @method \Dew\Acs\Result listAcrImageTags(array $arguments = [])
 * @method \Http\Promise\Promise listAcrImageTagsAsync($arguments = [])
 * @method \Dew\Acs\Result getServiceTemplateParameterConstraints(array $arguments = [])
 * @method \Http\Promise\Promise getServiceTemplateParameterConstraintsAsync($arguments = [])
 * @method \Dew\Acs\Result addServiceSharedAccounts(array $arguments = [])
 * @method \Http\Promise\Promise addServiceSharedAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result startServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise startServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result restartServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise restartServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result stopServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise stopServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result removeServiceSharedAccounts(array $arguments = [])
 * @method \Http\Promise\Promise removeServiceSharedAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceSharedAccounts(array $arguments = [])
 * @method \Http\Promise\Promise listServiceSharedAccountsAsync($arguments = [])
 * @method \Dew\Acs\Result approveServiceUsage(array $arguments = [])
 * @method \Http\Promise\Promise approveServiceUsageAsync($arguments = [])
 * @method \Dew\Acs\Result rejectServiceUsage(array $arguments = [])
 * @method \Http\Promise\Promise rejectServiceUsageAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceUsage(array $arguments = [])
 * @method \Http\Promise\Promise createServiceUsageAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceCategories(array $arguments = [])
 * @method \Http\Promise\Promise listServiceCategoriesAsync($arguments = [])
 * @method \Dew\Acs\Result launchService(array $arguments = [])
 * @method \Http\Promise\Promise launchServiceAsync($arguments = [])
 * @method \Dew\Acs\Result preLaunchService(array $arguments = [])
 * @method \Http\Promise\Promise preLaunchServiceAsync($arguments = [])
 */
final class ComputeNestSupplierClient extends AcsClient
{
    //
}

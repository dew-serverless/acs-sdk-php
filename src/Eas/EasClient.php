<?php

declare(strict_types=1);

namespace Dew\Acs\Eas;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createService(array $arguments = [])
 * @method \Http\Promise\Promise createServiceAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceAutoScaler(array $arguments = [])
 * @method \Http\Promise\Promise createServiceAutoScalerAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceCronScaler(array $arguments = [])
 * @method \Http\Promise\Promise createServiceCronScalerAsync($arguments = [])
 * @method \Dew\Acs\Result createServiceMirror(array $arguments = [])
 * @method \Http\Promise\Promise createServiceMirrorAsync($arguments = [])
 * @method \Dew\Acs\Result createAppService(array $arguments = [])
 * @method \Http\Promise\Promise createAppServiceAsync($arguments = [])
 * @method \Dew\Acs\Result cloneService(array $arguments = [])
 * @method \Http\Promise\Promise cloneServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteService(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceLabel(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceLabelAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceAutoScaler(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceAutoScalerAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceCronScaler(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceCronScalerAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceInstances(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteServiceMirror(array $arguments = [])
 * @method \Http\Promise\Promise deleteServiceMirrorAsync($arguments = [])
 * @method \Dew\Acs\Result updateService(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceLabel(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceLabelAsync($arguments = [])
 * @method \Dew\Acs\Result startService(array $arguments = [])
 * @method \Http\Promise\Promise startServiceAsync($arguments = [])
 * @method \Dew\Acs\Result stopService(array $arguments = [])
 * @method \Http\Promise\Promise stopServiceAsync($arguments = [])
 * @method \Dew\Acs\Result restartService(array $arguments = [])
 * @method \Http\Promise\Promise restartServiceAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceAutoScaler(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceAutoScalerAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceCronScaler(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceCronScalerAsync($arguments = [])
 * @method \Dew\Acs\Result developService(array $arguments = [])
 * @method \Http\Promise\Promise developServiceAsync($arguments = [])
 * @method \Dew\Acs\Result commitService(array $arguments = [])
 * @method \Http\Promise\Promise commitServiceAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceMirror(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceMirrorAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceVersion(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceVersionAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceSafetyLock(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceSafetyLockAsync($arguments = [])
 * @method \Dew\Acs\Result updateServiceInstance(array $arguments = [])
 * @method \Http\Promise\Promise updateServiceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result updateAppService(array $arguments = [])
 * @method \Http\Promise\Promise updateAppServiceAsync($arguments = [])
 * @method \Dew\Acs\Result releaseService(array $arguments = [])
 * @method \Http\Promise\Promise releaseServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeService(array $arguments = [])
 * @method \Http\Promise\Promise describeServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeServiceAutoScaler(array $arguments = [])
 * @method \Http\Promise\Promise describeServiceAutoScalerAsync($arguments = [])
 * @method \Dew\Acs\Result describeServiceCronScaler(array $arguments = [])
 * @method \Http\Promise\Promise describeServiceCronScalerAsync($arguments = [])
 * @method \Dew\Acs\Result describeServiceDiagnosis(array $arguments = [])
 * @method \Http\Promise\Promise describeServiceDiagnosisAsync($arguments = [])
 * @method \Dew\Acs\Result describeServiceInstanceDiagnosis(array $arguments = [])
 * @method \Http\Promise\Promise describeServiceInstanceDiagnosisAsync($arguments = [])
 * @method \Dew\Acs\Result describeServiceLog(array $arguments = [])
 * @method \Http\Promise\Promise describeServiceLogAsync($arguments = [])
 * @method \Dew\Acs\Result describeServiceEvent(array $arguments = [])
 * @method \Http\Promise\Promise describeServiceEventAsync($arguments = [])
 * @method \Dew\Acs\Result describeServiceMirror(array $arguments = [])
 * @method \Http\Promise\Promise describeServiceMirrorAsync($arguments = [])
 * @method \Dew\Acs\Result describeGroup(array $arguments = [])
 * @method \Http\Promise\Promise describeGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeSpotDiscountHistory(array $arguments = [])
 * @method \Http\Promise\Promise describeSpotDiscountHistoryAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceInstances(array $arguments = [])
 * @method \Http\Promise\Promise listServiceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceVersions(array $arguments = [])
 * @method \Http\Promise\Promise listServiceVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result listServiceContainers(array $arguments = [])
 * @method \Http\Promise\Promise listServiceContainersAsync($arguments = [])
 * @method \Dew\Acs\Result listServices(array $arguments = [])
 * @method \Http\Promise\Promise listServicesAsync($arguments = [])
 * @method \Dew\Acs\Result listGroups(array $arguments = [])
 * @method \Http\Promise\Promise listGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result updateVirtualResource(array $arguments = [])
 * @method \Http\Promise\Promise updateVirtualResourceAsync($arguments = [])
 * @method \Dew\Acs\Result listVirtualResource(array $arguments = [])
 * @method \Http\Promise\Promise listVirtualResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeVirtualResource(array $arguments = [])
 * @method \Http\Promise\Promise describeVirtualResourceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVirtualResource(array $arguments = [])
 * @method \Http\Promise\Promise deleteVirtualResourceAsync($arguments = [])
 * @method \Dew\Acs\Result createVirtualResource(array $arguments = [])
 * @method \Http\Promise\Promise createVirtualResourceAsync($arguments = [])
 * @method \Dew\Acs\Result createResource(array $arguments = [])
 * @method \Http\Promise\Promise createResourceAsync($arguments = [])
 * @method \Dew\Acs\Result createResourceInstances(array $arguments = [])
 * @method \Http\Promise\Promise createResourceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result createResourceLog(array $arguments = [])
 * @method \Http\Promise\Promise createResourceLogAsync($arguments = [])
 * @method \Dew\Acs\Result deleteResource(array $arguments = [])
 * @method \Http\Promise\Promise deleteResourceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteResourceDLink(array $arguments = [])
 * @method \Http\Promise\Promise deleteResourceDLinkAsync($arguments = [])
 * @method \Dew\Acs\Result deleteResourceInstances(array $arguments = [])
 * @method \Http\Promise\Promise deleteResourceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result deleteResourceLog(array $arguments = [])
 * @method \Http\Promise\Promise deleteResourceLogAsync($arguments = [])
 * @method \Dew\Acs\Result updateResource(array $arguments = [])
 * @method \Http\Promise\Promise updateResourceAsync($arguments = [])
 * @method \Dew\Acs\Result updateResourceDLink(array $arguments = [])
 * @method \Http\Promise\Promise updateResourceDLinkAsync($arguments = [])
 * @method \Dew\Acs\Result updateResourceInstance(array $arguments = [])
 * @method \Http\Promise\Promise updateResourceInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result describeResource(array $arguments = [])
 * @method \Http\Promise\Promise describeResourceAsync($arguments = [])
 * @method \Dew\Acs\Result describeResourceDLink(array $arguments = [])
 * @method \Http\Promise\Promise describeResourceDLinkAsync($arguments = [])
 * @method \Dew\Acs\Result describeResourceLog(array $arguments = [])
 * @method \Http\Promise\Promise describeResourceLogAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceInstances(array $arguments = [])
 * @method \Http\Promise\Promise listResourceInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceInstanceWorker(array $arguments = [])
 * @method \Http\Promise\Promise listResourceInstanceWorkerAsync($arguments = [])
 * @method \Dew\Acs\Result listResources(array $arguments = [])
 * @method \Http\Promise\Promise listResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listResourceServices(array $arguments = []) {@deprecated 2021-07-01}
 * @method \Http\Promise\Promise listResourceServicesAsync($arguments = []) {@deprecated 2021-07-01}
 * @method \Dew\Acs\Result createBenchmarkTask(array $arguments = [])
 * @method \Http\Promise\Promise createBenchmarkTaskAsync($arguments = [])
 * @method \Dew\Acs\Result deleteBenchmarkTask(array $arguments = [])
 * @method \Http\Promise\Promise deleteBenchmarkTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeBenchmarkTask(array $arguments = [])
 * @method \Http\Promise\Promise describeBenchmarkTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeBenchmarkTaskReport(array $arguments = [])
 * @method \Http\Promise\Promise describeBenchmarkTaskReportAsync($arguments = [])
 * @method \Dew\Acs\Result listBenchmarkTask(array $arguments = [])
 * @method \Http\Promise\Promise listBenchmarkTaskAsync($arguments = [])
 * @method \Dew\Acs\Result startBenchmarkTask(array $arguments = [])
 * @method \Http\Promise\Promise startBenchmarkTaskAsync($arguments = [])
 * @method \Dew\Acs\Result stopBenchmarkTask(array $arguments = [])
 * @method \Http\Promise\Promise stopBenchmarkTaskAsync($arguments = [])
 * @method \Dew\Acs\Result updateBenchmarkTask(array $arguments = [])
 * @method \Http\Promise\Promise updateBenchmarkTaskAsync($arguments = [])
 * @method \Dew\Acs\Result detachGatewayDomain(array $arguments = [])
 * @method \Http\Promise\Promise detachGatewayDomainAsync($arguments = [])
 * @method \Dew\Acs\Result attachGatewayDomain(array $arguments = [])
 * @method \Http\Promise\Promise attachGatewayDomainAsync($arguments = [])
 * @method \Dew\Acs\Result listGatewayDomains(array $arguments = [])
 * @method \Http\Promise\Promise listGatewayDomainsAsync($arguments = [])
 * @method \Dew\Acs\Result listGateway(array $arguments = [])
 * @method \Http\Promise\Promise listGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result listAclPolicy(array $arguments = [])
 * @method \Http\Promise\Promise listAclPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAclPolicy(array $arguments = [])
 * @method \Http\Promise\Promise deleteAclPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createAclPolicy(array $arguments = [])
 * @method \Http\Promise\Promise createAclPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result createGateway(array $arguments = [])
 * @method \Http\Promise\Promise createGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result describeGateway(array $arguments = [])
 * @method \Http\Promise\Promise describeGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result updateGateway(array $arguments = [])
 * @method \Http\Promise\Promise updateGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result createGatewayIntranetLinkedVpc(array $arguments = [])
 * @method \Http\Promise\Promise createGatewayIntranetLinkedVpcAsync($arguments = [])
 * @method \Dew\Acs\Result listGatewayIntranetLinkedVpc(array $arguments = [])
 * @method \Http\Promise\Promise listGatewayIntranetLinkedVpcAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGatewayIntranetLinkedVpc(array $arguments = [])
 * @method \Http\Promise\Promise deleteGatewayIntranetLinkedVpcAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGateway(array $arguments = [])
 * @method \Http\Promise\Promise deleteGatewayAsync($arguments = [])
 * @method \Dew\Acs\Result listGatewayIntranetLinkedVpcPeer(array $arguments = [])
 * @method \Http\Promise\Promise listGatewayIntranetLinkedVpcPeerAsync($arguments = [])
 * @method \Dew\Acs\Result createGatewayIntranetLinkedVpcPeer(array $arguments = [])
 * @method \Http\Promise\Promise createGatewayIntranetLinkedVpcPeerAsync($arguments = [])
 * @method \Dew\Acs\Result deleteGatewayIntranetLinkedVpcPeer(array $arguments = [])
 * @method \Http\Promise\Promise deleteGatewayIntranetLinkedVpcPeerAsync($arguments = [])
 * @method \Dew\Acs\Result reinstallTenantAddon(array $arguments = [])
 * @method \Http\Promise\Promise reinstallTenantAddonAsync($arguments = [])
 * @method \Dew\Acs\Result listTenantAddons(array $arguments = [])
 * @method \Http\Promise\Promise listTenantAddonsAsync($arguments = [])
 * @method \Dew\Acs\Result listGatewayIntranetSupportedZone(array $arguments = [])
 * @method \Http\Promise\Promise listGatewayIntranetSupportedZoneAsync($arguments = [])
 */
final class EasClient extends AcsClient
{
    //
}

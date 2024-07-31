<?php

declare(strict_types=1);

namespace Dew\Acs\Cas;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result moveResourceGroup(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise moveResourceGroupAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listDeploymentJob(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listDeploymentJobAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result describeDeploymentJob(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise describeDeploymentJobAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listWorkerResource(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listWorkerResourceAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result describeDeploymentJobStatus(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise describeDeploymentJobStatusAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result updateDeploymentJob(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise updateDeploymentJobAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listDeploymentJobResource(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listDeploymentJobResourceAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result updateDeploymentJobStatus(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise updateDeploymentJobStatusAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listContact(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listContactAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result describeCloudResourceStatus(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise describeCloudResourceStatusAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listCloudResources(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listCloudResourcesAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listDeploymentJobCert(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listDeploymentJobCertAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result updateWorkerResourceStatus(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise updateWorkerResourceStatusAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result deleteWorkerResource(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise deleteWorkerResourceAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result deleteDeploymentJob(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise deleteDeploymentJobAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listCloudAccess(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listCloudAccessAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result createDeploymentJob(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise createDeploymentJobAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result describeCertificateState(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise describeCertificateStateAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result createCertificateWithCsrRequest(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise createCertificateWithCsrRequestAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result createCertificateRequest(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise createCertificateRequestAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result deleteCertificateRequest(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise deleteCertificateRequestAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result uploadUserCertificate(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise uploadUserCertificateAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result getUserCertificateDetail(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise getUserCertificateDetailAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result describePackageState(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise describePackageStateAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listUserCertificateOrder(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listUserCertificateOrderAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result createCertificateForPackageRequest(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise createCertificateForPackageRequestAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result cancelCertificateForPackageRequest(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise cancelCertificateForPackageRequestAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result cancelOrderRequest(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise cancelOrderRequestAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result renewCertificateOrderForPackageRequest(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise renewCertificateOrderForPackageRequestAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result getCertWarehouseQuota(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise getCertWarehouseQuotaAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listCertWarehouse(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listCertWarehouseAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listCert(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listCertAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result sign(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise signAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result verify(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise verifyAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result encrypt(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise encryptAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result decrypt(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise decryptAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result uploadPCACert(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise uploadPCACertAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result deletePCACert(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise deletePCACertAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result createWHClientCertificate(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise createWHClientCertificateAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result revokeWHClientCertificate(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise revokeWHClientCertificateAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result listCsr(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise listCsrAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result createCsr(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise createCsrAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result uploadCsr(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise uploadCsrAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result getCsrDetail(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise getCsrDetailAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result updateCsr(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise updateCsrAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result deleteCsr(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise deleteCsrAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result deleteUserCertificate(array $arguments = []) {@since 2020-04-07}
 * @method \Http\Promise\Promise deleteUserCertificateAsync($arguments = []) {@since 2020-04-07}
 * @method \Dew\Acs\Result updateCACertificateStatus(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise updateCACertificateStatusAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result describeCACertificateCount(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise describeCACertificateCountAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result describeCACertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise describeCACertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result describeCACertificateList(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise describeCACertificateListAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result createSubCACertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise createSubCACertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result createRootCACertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise createRootCACertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result getCAInstanceStatus(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise getCAInstanceStatusAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result createCustomCertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise createCustomCertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result createClientCertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise createClientCertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result createClientCertificateWithCsr(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise createClientCertificateWithCsrAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result createRevokeClientCertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise createRevokeClientCertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result createServerCertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise createServerCertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result createServerCertificateWithCsr(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise createServerCertificateWithCsrAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result deleteClientCertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise deleteClientCertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result describeCertificatePrivateKey(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise describeCertificatePrivateKeyAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result describeClientCertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise describeClientCertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result describeClientCertificateStatus(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise describeClientCertificateStatusAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result listClientCertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise listClientCertificateAsync($arguments = []) {@since 2020-06-30}
 * @method \Dew\Acs\Result listRevokeCertificate(array $arguments = []) {@since 2020-06-30}
 * @method \Http\Promise\Promise listRevokeCertificateAsync($arguments = []) {@since 2020-06-30}
 */
final class CasClient extends AcsClient
{
    //
}

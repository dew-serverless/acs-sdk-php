<?php

declare(strict_types=1);

namespace Dew\Acs\Hsm;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result configAuditLog(array $arguments = [])
 * @method \Http\Promise\Promise configAuditLogAsync($arguments = [])
 * @method \Dew\Acs\Result getAuditLogStatus(array $arguments = [])
 * @method \Http\Promise\Promise getAuditLogStatusAsync($arguments = [])
 * @method \Dew\Acs\Result initializeAuditLog(array $arguments = [])
 * @method \Http\Promise\Promise initializeAuditLogAsync($arguments = [])
 * @method \Dew\Acs\Result getImage(array $arguments = [])
 * @method \Http\Promise\Promise getImageAsync($arguments = [])
 * @method \Dew\Acs\Result listImages(array $arguments = [])
 * @method \Http\Promise\Promise listImagesAsync($arguments = [])
 * @method \Dew\Acs\Result configImageRemark(array $arguments = [])
 * @method \Http\Promise\Promise configImageRemarkAsync($arguments = [])
 * @method \Dew\Acs\Result copyImage(array $arguments = [])
 * @method \Http\Promise\Promise copyImageAsync($arguments = [])
 * @method \Dew\Acs\Result exportImage(array $arguments = [])
 * @method \Http\Promise\Promise exportImageAsync($arguments = [])
 * @method \Dew\Acs\Result enableBackup(array $arguments = [])
 * @method \Http\Promise\Promise enableBackupAsync($arguments = [])
 * @method \Dew\Acs\Result getBackup(array $arguments = [])
 * @method \Http\Promise\Promise getBackupAsync($arguments = [])
 * @method \Dew\Acs\Result listBackups(array $arguments = [])
 * @method \Http\Promise\Promise listBackupsAsync($arguments = [])
 * @method \Dew\Acs\Result configBackupTask(array $arguments = [])
 * @method \Http\Promise\Promise configBackupTaskAsync($arguments = [])
 * @method \Dew\Acs\Result resetBackup(array $arguments = [])
 * @method \Http\Promise\Promise resetBackupAsync($arguments = [])
 * @method \Dew\Acs\Result configBackupRemark(array $arguments = [])
 * @method \Http\Promise\Promise configBackupRemarkAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCluster(array $arguments = [])
 * @method \Http\Promise\Promise deleteClusterAsync($arguments = [])
 * @method \Dew\Acs\Result joinCluster(array $arguments = [])
 * @method \Http\Promise\Promise joinClusterAsync($arguments = [])
 * @method \Dew\Acs\Result configClusterSubnet(array $arguments = [])
 * @method \Http\Promise\Promise configClusterSubnetAsync($arguments = [])
 * @method \Dew\Acs\Result syncCluster(array $arguments = [])
 * @method \Http\Promise\Promise syncClusterAsync($arguments = [])
 * @method \Dew\Acs\Result initializeCluster(array $arguments = [])
 * @method \Http\Promise\Promise initializeClusterAsync($arguments = [])
 * @method \Dew\Acs\Result switchClusterMaster(array $arguments = [])
 * @method \Http\Promise\Promise switchClusterMasterAsync($arguments = [])
 * @method \Dew\Acs\Result configClusterName(array $arguments = [])
 * @method \Http\Promise\Promise configClusterNameAsync($arguments = [])
 * @method \Dew\Acs\Result leaveCluster(array $arguments = [])
 * @method \Http\Promise\Promise leaveClusterAsync($arguments = [])
 * @method \Dew\Acs\Result createCluster(array $arguments = [])
 * @method \Http\Promise\Promise createClusterAsync($arguments = [])
 * @method \Dew\Acs\Result listClusters(array $arguments = [])
 * @method \Http\Promise\Promise listClustersAsync($arguments = [])
 * @method \Dew\Acs\Result configClusterCertificate(array $arguments = [])
 * @method \Http\Promise\Promise configClusterCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result getCluster(array $arguments = [])
 * @method \Http\Promise\Promise getClusterAsync($arguments = [])
 * @method \Dew\Acs\Result configClusterWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise configClusterWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result configInstanceIpAddress(array $arguments = [])
 * @method \Http\Promise\Promise configInstanceIpAddressAsync($arguments = [])
 * @method \Dew\Acs\Result restoreInstance(array $arguments = [])
 * @method \Http\Promise\Promise restoreInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result resetInstance(array $arguments = [])
 * @method \Http\Promise\Promise resetInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result quickInitInstance(array $arguments = [])
 * @method \Http\Promise\Promise quickInitInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result configInstanceWhitelist(array $arguments = [])
 * @method \Http\Promise\Promise configInstanceWhitelistAsync($arguments = [])
 * @method \Dew\Acs\Result resumeInstance(array $arguments = [])
 * @method \Http\Promise\Promise resumeInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getInstance(array $arguments = [])
 * @method \Http\Promise\Promise getInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result pauseInstance(array $arguments = [])
 * @method \Http\Promise\Promise pauseInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listInstances(array $arguments = [])
 * @method \Http\Promise\Promise listInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result configInstanceRemark(array $arguments = [])
 * @method \Http\Promise\Promise configInstanceRemarkAsync($arguments = [])
 * @method \Dew\Acs\Result getJob(array $arguments = [])
 * @method \Http\Promise\Promise getJobAsync($arguments = [])
 * @method \Dew\Acs\Result moveResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise moveResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 */
final class HsmClient extends AcsClient
{
    //
}

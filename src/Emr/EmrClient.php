<?php

declare(strict_types=1);

namespace Dew\Acs\Emr;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result listReleaseVersions(array $arguments = [])
 * @method \Http\Promise\Promise listReleaseVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result listInstanceTypes(array $arguments = [])
 * @method \Http\Promise\Promise listInstanceTypesAsync($arguments = [])
 * @method \Dew\Acs\Result runCluster(array $arguments = [])
 * @method \Http\Promise\Promise runClusterAsync($arguments = [])
 * @method \Dew\Acs\Result createCluster(array $arguments = [])
 * @method \Http\Promise\Promise createClusterAsync($arguments = [])
 * @method \Dew\Acs\Result getCluster(array $arguments = [])
 * @method \Http\Promise\Promise getClusterAsync($arguments = [])
 * @method \Dew\Acs\Result updateClusterAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateClusterAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listClusters(array $arguments = [])
 * @method \Http\Promise\Promise listClustersAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCluster(array $arguments = [])
 * @method \Http\Promise\Promise deleteClusterAsync($arguments = [])
 * @method \Dew\Acs\Result getClusterCloneMeta(array $arguments = [])
 * @method \Http\Promise\Promise getClusterCloneMetaAsync($arguments = [])
 * @method \Dew\Acs\Result createApiTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createApiTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result updateApiTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateApiTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result listApiTemplates(array $arguments = [])
 * @method \Http\Promise\Promise listApiTemplatesAsync($arguments = [])
 * @method \Dew\Acs\Result getApiTemplate(array $arguments = [])
 * @method \Http\Promise\Promise getApiTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteApiTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteApiTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result runApiTemplate(array $arguments = [])
 * @method \Http\Promise\Promise runApiTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result createNodeGroup(array $arguments = [])
 * @method \Http\Promise\Promise createNodeGroupAsync($arguments = [])
 * @method \Dew\Acs\Result listNodeGroups(array $arguments = [])
 * @method \Http\Promise\Promise listNodeGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result getNodeGroup(array $arguments = [])
 * @method \Http\Promise\Promise getNodeGroupAsync($arguments = [])
 * @method \Dew\Acs\Result increaseNodes(array $arguments = [])
 * @method \Http\Promise\Promise increaseNodesAsync($arguments = [])
 * @method \Dew\Acs\Result decreaseNodes(array $arguments = [])
 * @method \Http\Promise\Promise decreaseNodesAsync($arguments = [])
 * @method \Dew\Acs\Result listNodes(array $arguments = [])
 * @method \Http\Promise\Promise listNodesAsync($arguments = [])
 * @method \Dew\Acs\Result putAutoScalingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise putAutoScalingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result putManagedScalingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise putManagedScalingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result getAutoScalingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getAutoScalingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result getManagedScalingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise getManagedScalingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result removeAutoScalingPolicy(array $arguments = [])
 * @method \Http\Promise\Promise removeAutoScalingPolicyAsync($arguments = [])
 * @method \Dew\Acs\Result listAutoScalingActivities(array $arguments = [])
 * @method \Http\Promise\Promise listAutoScalingActivitiesAsync($arguments = [])
 * @method \Dew\Acs\Result getAutoScalingActivity(array $arguments = [])
 * @method \Http\Promise\Promise getAutoScalingActivityAsync($arguments = [])
 * @method \Dew\Acs\Result listApplications(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result getApplication(array $arguments = [])
 * @method \Http\Promise\Promise getApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result runApplicationAction(array $arguments = [])
 * @method \Http\Promise\Promise runApplicationActionAsync($arguments = [])
 * @method \Dew\Acs\Result listApplicationConfigs(array $arguments = [])
 * @method \Http\Promise\Promise listApplicationConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result updateApplicationConfigs(array $arguments = [])
 * @method \Http\Promise\Promise updateApplicationConfigsAsync($arguments = [])
 * @method \Dew\Acs\Result listComponents(array $arguments = [])
 * @method \Http\Promise\Promise listComponentsAsync($arguments = [])
 * @method \Dew\Acs\Result listComponentInstances(array $arguments = [])
 * @method \Http\Promise\Promise listComponentInstancesAsync($arguments = [])
 * @method \Dew\Acs\Result getOperation(array $arguments = [])
 * @method \Http\Promise\Promise getOperationAsync($arguments = [])
 * @method \Dew\Acs\Result joinResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise joinResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createScript(array $arguments = [])
 * @method \Http\Promise\Promise createScriptAsync($arguments = [])
 * @method \Dew\Acs\Result listScripts(array $arguments = [])
 * @method \Http\Promise\Promise listScriptsAsync($arguments = [])
 * @method \Dew\Acs\Result updateScript(array $arguments = [])
 * @method \Http\Promise\Promise updateScriptAsync($arguments = [])
 * @method \Dew\Acs\Result deleteScript(array $arguments = [])
 * @method \Http\Promise\Promise deleteScriptAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorHiveDatabases(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorHiveDatabasesAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHiveDatabase(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHiveDatabaseAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHiveCluster(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHiveClusterAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorHiveTables(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorHiveTablesAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHiveTable(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHiveTableAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorHDFSUGI(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorHDFSUGIAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorHBaseTables(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorHBaseTablesAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorHBaseRegionServers(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorHBaseRegionServersAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHBaseTable(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHBaseTableAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHBaseRegionServer(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHBaseRegionServerAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHBaseRegion(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHBaseRegionAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHBaseCluster(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHBaseClusterAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHDFSDirectory(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHDFSDirectoryAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorJobsStats(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorJobsStatsAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorReports(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorReportsAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorReportComponentSummary(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorReportComponentSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorJobs(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorJobsAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorComputeSummary(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorComputeSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorComputeSummary(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorComputeSummaryAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorJob(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorJobAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorApplications(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorApplicationsAsync($arguments = [])
 * @method \Dew\Acs\Result listDoctorHDFSDirectories(array $arguments = [])
 * @method \Http\Promise\Promise listDoctorHDFSDirectoriesAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorHDFSCluster(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorHDFSClusterAsync($arguments = [])
 * @method \Dew\Acs\Result getDoctorApplication(array $arguments = [])
 * @method \Http\Promise\Promise getDoctorApplicationAsync($arguments = [])
 * @method \Dew\Acs\Result createUsers(array $arguments = [])
 * @method \Http\Promise\Promise createUsersAsync($arguments = [])
 * @method \Dew\Acs\Result deleteUsers(array $arguments = [])
 * @method \Http\Promise\Promise deleteUsersAsync($arguments = [])
 * @method \Dew\Acs\Result updateUserAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateUserAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result listUsers(array $arguments = [])
 * @method \Http\Promise\Promise listUsersAsync($arguments = [])
 */
final class EmrClient extends AcsClient
{
    //
}

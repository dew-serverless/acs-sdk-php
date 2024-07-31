<?php

declare(strict_types=1);

namespace Dew\Acs\Mts;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result submitMediaInfoJob(array $arguments = [])
 * @method \Http\Promise\Promise submitMediaInfoJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryMediaInfoJobList(array $arguments = [])
 * @method \Http\Promise\Promise queryMediaInfoJobListAsync($arguments = [])
 * @method \Dew\Acs\Result submitJobs(array $arguments = [])
 * @method \Http\Promise\Promise submitJobsAsync($arguments = [])
 * @method \Dew\Acs\Result cancelJob(array $arguments = [])
 * @method \Http\Promise\Promise cancelJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryJobList(array $arguments = [])
 * @method \Http\Promise\Promise queryJobListAsync($arguments = [])
 * @method \Dew\Acs\Result listJob(array $arguments = [])
 * @method \Http\Promise\Promise listJobAsync($arguments = [])
 * @method \Dew\Acs\Result submitAnalysisJob(array $arguments = [])
 * @method \Http\Promise\Promise submitAnalysisJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryAnalysisJobList(array $arguments = [])
 * @method \Http\Promise\Promise queryAnalysisJobListAsync($arguments = [])
 * @method \Dew\Acs\Result addTemplate(array $arguments = [])
 * @method \Http\Promise\Promise addTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result updateTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result queryTemplateList(array $arguments = [])
 * @method \Http\Promise\Promise queryTemplateListAsync($arguments = [])
 * @method \Dew\Acs\Result searchTemplate(array $arguments = [])
 * @method \Http\Promise\Promise searchTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result addWaterMarkTemplate(array $arguments = [])
 * @method \Http\Promise\Promise addWaterMarkTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWaterMarkTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteWaterMarkTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result updateWaterMarkTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateWaterMarkTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result searchWaterMarkTemplate(array $arguments = [])
 * @method \Http\Promise\Promise searchWaterMarkTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result queryWaterMarkTemplateList(array $arguments = [])
 * @method \Http\Promise\Promise queryWaterMarkTemplateListAsync($arguments = [])
 * @method \Dew\Acs\Result submitSnapshotJob(array $arguments = [])
 * @method \Http\Promise\Promise submitSnapshotJobAsync($arguments = [])
 * @method \Dew\Acs\Result querySnapshotJobList(array $arguments = [])
 * @method \Http\Promise\Promise querySnapshotJobListAsync($arguments = [])
 * @method \Dew\Acs\Result updatePipeline(array $arguments = [])
 * @method \Http\Promise\Promise updatePipelineAsync($arguments = [])
 * @method \Dew\Acs\Result queryPipelineList(array $arguments = [])
 * @method \Http\Promise\Promise queryPipelineListAsync($arguments = [])
 * @method \Dew\Acs\Result searchPipeline(array $arguments = [])
 * @method \Http\Promise\Promise searchPipelineAsync($arguments = [])
 * @method \Dew\Acs\Result addPipeline(array $arguments = [])
 * @method \Http\Promise\Promise addPipelineAsync($arguments = [])
 * @method \Dew\Acs\Result deletePipeline(array $arguments = [])
 * @method \Http\Promise\Promise deletePipelineAsync($arguments = [])
 * @method \Dew\Acs\Result addMediaWorkflow(array $arguments = [])
 * @method \Http\Promise\Promise addMediaWorkflowAsync($arguments = [])
 * @method \Dew\Acs\Result activateMediaWorkflow(array $arguments = [])
 * @method \Http\Promise\Promise activateMediaWorkflowAsync($arguments = [])
 * @method \Dew\Acs\Result deactivateMediaWorkflow(array $arguments = [])
 * @method \Http\Promise\Promise deactivateMediaWorkflowAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMediaWorkflow(array $arguments = [])
 * @method \Http\Promise\Promise deleteMediaWorkflowAsync($arguments = [])
 * @method \Dew\Acs\Result updateMediaWorkflow(array $arguments = [])
 * @method \Http\Promise\Promise updateMediaWorkflowAsync($arguments = [])
 * @method \Dew\Acs\Result queryMediaWorkflowList(array $arguments = [])
 * @method \Http\Promise\Promise queryMediaWorkflowListAsync($arguments = [])
 * @method \Dew\Acs\Result searchMediaWorkflow(array $arguments = [])
 * @method \Http\Promise\Promise searchMediaWorkflowAsync($arguments = [])
 * @method \Dew\Acs\Result updateMediaWorkflowTriggerMode(array $arguments = [])
 * @method \Http\Promise\Promise updateMediaWorkflowTriggerModeAsync($arguments = [])
 * @method \Dew\Acs\Result queryMediaWorkflowExecutionList(array $arguments = [])
 * @method \Http\Promise\Promise queryMediaWorkflowExecutionListAsync($arguments = [])
 * @method \Dew\Acs\Result listMediaWorkflowExecutions(array $arguments = [])
 * @method \Http\Promise\Promise listMediaWorkflowExecutionsAsync($arguments = [])
 * @method \Dew\Acs\Result bindInputBucket(array $arguments = [])
 * @method \Http\Promise\Promise bindInputBucketAsync($arguments = [])
 * @method \Dew\Acs\Result bindOutputBucket(array $arguments = [])
 * @method \Http\Promise\Promise bindOutputBucketAsync($arguments = [])
 * @method \Dew\Acs\Result unbindInputBucket(array $arguments = [])
 * @method \Http\Promise\Promise unbindInputBucketAsync($arguments = [])
 * @method \Dew\Acs\Result unbindOutputBucket(array $arguments = [])
 * @method \Http\Promise\Promise unbindOutputBucketAsync($arguments = [])
 * @method \Dew\Acs\Result listAllMediaBucket(array $arguments = [])
 * @method \Http\Promise\Promise listAllMediaBucketAsync($arguments = [])
 * @method \Dew\Acs\Result addMedia(array $arguments = [])
 * @method \Http\Promise\Promise addMediaAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMedia(array $arguments = [])
 * @method \Http\Promise\Promise deleteMediaAsync($arguments = [])
 * @method \Dew\Acs\Result updateMedia(array $arguments = [])
 * @method \Http\Promise\Promise updateMediaAsync($arguments = [])
 * @method \Dew\Acs\Result updateMediaCategory(array $arguments = [])
 * @method \Http\Promise\Promise updateMediaCategoryAsync($arguments = [])
 * @method \Dew\Acs\Result updateMediaCover(array $arguments = [])
 * @method \Http\Promise\Promise updateMediaCoverAsync($arguments = [])
 * @method \Dew\Acs\Result addMediaTag(array $arguments = [])
 * @method \Http\Promise\Promise addMediaTagAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMediaTag(array $arguments = [])
 * @method \Http\Promise\Promise deleteMediaTagAsync($arguments = [])
 * @method \Dew\Acs\Result updateMediaPublishState(array $arguments = [])
 * @method \Http\Promise\Promise updateMediaPublishStateAsync($arguments = [])
 * @method \Dew\Acs\Result queryMediaList(array $arguments = [])
 * @method \Http\Promise\Promise queryMediaListAsync($arguments = [])
 * @method \Dew\Acs\Result queryMediaListByURL(array $arguments = [])
 * @method \Http\Promise\Promise queryMediaListByURLAsync($arguments = [])
 * @method \Dew\Acs\Result queryIProductionJob(array $arguments = [])
 * @method \Http\Promise\Promise queryIProductionJobAsync($arguments = [])
 * @method \Dew\Acs\Result submitIProductionJob(array $arguments = [])
 * @method \Http\Promise\Promise submitIProductionJobAsync($arguments = [])
 * @method \Dew\Acs\Result submitSmarttagJob(array $arguments = [])
 * @method \Http\Promise\Promise submitSmarttagJobAsync($arguments = [])
 * @method \Dew\Acs\Result querySmarttagJob(array $arguments = [])
 * @method \Http\Promise\Promise querySmarttagJobAsync($arguments = [])
 * @method \Dew\Acs\Result addSmarttagTemplate(array $arguments = [])
 * @method \Http\Promise\Promise addSmarttagTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result querySmarttagTemplateList(array $arguments = [])
 * @method \Http\Promise\Promise querySmarttagTemplateListAsync($arguments = [])
 * @method \Dew\Acs\Result updateSmarttagTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateSmarttagTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSmarttagTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteSmarttagTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result registerCustomFace(array $arguments = [])
 * @method \Http\Promise\Promise registerCustomFaceAsync($arguments = [])
 * @method \Dew\Acs\Result unregisterCustomFace(array $arguments = [])
 * @method \Http\Promise\Promise unregisterCustomFaceAsync($arguments = [])
 * @method \Dew\Acs\Result tagCustomPerson(array $arguments = [])
 * @method \Http\Promise\Promise tagCustomPersonAsync($arguments = [])
 * @method \Dew\Acs\Result listCustomPersons(array $arguments = [])
 * @method \Http\Promise\Promise listCustomPersonsAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomGroup(array $arguments = [])
 * @method \Http\Promise\Promise createCustomGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomEntity(array $arguments = [])
 * @method \Http\Promise\Promise createCustomEntityAsync($arguments = [])
 * @method \Dew\Acs\Result registerCustomView(array $arguments = [])
 * @method \Http\Promise\Promise registerCustomViewAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomEntity(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomEntityAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCustomView(array $arguments = [])
 * @method \Http\Promise\Promise deleteCustomViewAsync($arguments = [])
 * @method \Dew\Acs\Result listCustomViews(array $arguments = [])
 * @method \Http\Promise\Promise listCustomViewsAsync($arguments = [])
 * @method \Dew\Acs\Result listCustomEntities(array $arguments = [])
 * @method \Http\Promise\Promise listCustomEntitiesAsync($arguments = [])
 * @method \Dew\Acs\Result listCustomGroups(array $arguments = [])
 * @method \Http\Promise\Promise listCustomGroupsAsync($arguments = [])
 * @method \Dew\Acs\Result submitMediaCensorJob(array $arguments = [])
 * @method \Http\Promise\Promise submitMediaCensorJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryMediaCensorJobDetail(array $arguments = [])
 * @method \Http\Promise\Promise queryMediaCensorJobDetailAsync($arguments = [])
 * @method \Dew\Acs\Result queryMediaCensorJobList(array $arguments = [])
 * @method \Http\Promise\Promise queryMediaCensorJobListAsync($arguments = [])
 * @method \Dew\Acs\Result imAudit(array $arguments = [])
 * @method \Http\Promise\Promise imAuditAsync($arguments = [])
 * @method \Dew\Acs\Result submitFpShotJob(array $arguments = [])
 * @method \Http\Promise\Promise submitFpShotJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryFpShotJobList(array $arguments = [])
 * @method \Http\Promise\Promise queryFpShotJobListAsync($arguments = [])
 * @method \Dew\Acs\Result createFpShotDB(array $arguments = [])
 * @method \Http\Promise\Promise createFpShotDBAsync($arguments = [])
 * @method \Dew\Acs\Result listFpShotDB(array $arguments = [])
 * @method \Http\Promise\Promise listFpShotDBAsync($arguments = [])
 * @method \Dew\Acs\Result importFpShotJob(array $arguments = [])
 * @method \Http\Promise\Promise importFpShotJobAsync($arguments = [])
 * @method \Dew\Acs\Result listFpShotFiles(array $arguments = [])
 * @method \Http\Promise\Promise listFpShotFilesAsync($arguments = [])
 * @method \Dew\Acs\Result submitFpFileDeleteJob(array $arguments = [])
 * @method \Http\Promise\Promise submitFpFileDeleteJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryFpFileDeleteJobList(array $arguments = [])
 * @method \Http\Promise\Promise queryFpFileDeleteJobListAsync($arguments = [])
 * @method \Dew\Acs\Result submitFpDBDeleteJob(array $arguments = [])
 * @method \Http\Promise\Promise submitFpDBDeleteJobAsync($arguments = [])
 * @method \Dew\Acs\Result queryFpDBDeleteJobList(array $arguments = [])
 * @method \Http\Promise\Promise queryFpDBDeleteJobListAsync($arguments = [])
 * @method \Dew\Acs\Result listFpShotImportJob(array $arguments = [])
 * @method \Http\Promise\Promise listFpShotImportJobAsync($arguments = [])
 */
final class MtsClient extends AcsClient
{
    //
}

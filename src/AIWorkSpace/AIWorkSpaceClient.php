<?php

declare(strict_types=1);

namespace Dew\Acs\AIWorkSpace;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result addImage(array $arguments = [])
 * @method \Http\Promise\Promise addImageAsync($arguments = [])
 * @method \Dew\Acs\Result addImageLabels(array $arguments = [])
 * @method \Http\Promise\Promise addImageLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result getImage(array $arguments = [])
 * @method \Http\Promise\Promise getImageAsync($arguments = [])
 * @method \Dew\Acs\Result listImageLabels(array $arguments = [])
 * @method \Http\Promise\Promise listImageLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result listImages(array $arguments = [])
 * @method \Http\Promise\Promise listImagesAsync($arguments = [])
 * @method \Dew\Acs\Result removeImage(array $arguments = [])
 * @method \Http\Promise\Promise removeImageAsync($arguments = [])
 * @method \Dew\Acs\Result publishImage(array $arguments = [])
 * @method \Http\Promise\Promise publishImageAsync($arguments = [])
 * @method \Dew\Acs\Result removeImageLabels(array $arguments = [])
 * @method \Http\Promise\Promise removeImageLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result createWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise createWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result listWorkspaces(array $arguments = [])
 * @method \Http\Promise\Promise listWorkspacesAsync($arguments = [])
 * @method \Dew\Acs\Result getWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise getWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise deleteWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result updateWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise updateWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result getDefaultWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise getDefaultWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result updateDefaultWorkspace(array $arguments = [])
 * @method \Http\Promise\Promise updateDefaultWorkspaceAsync($arguments = [])
 * @method \Dew\Acs\Result getPermission(array $arguments = [])
 * @method \Http\Promise\Promise getPermissionAsync($arguments = [])
 * @method \Dew\Acs\Result listPermissions(array $arguments = [])
 * @method \Http\Promise\Promise listPermissionsAsync($arguments = [])
 * @method \Dew\Acs\Result listWorkspaceUsers(array $arguments = [])
 * @method \Http\Promise\Promise listWorkspaceUsersAsync($arguments = [])
 * @method \Dew\Acs\Result createMember(array $arguments = [])
 * @method \Http\Promise\Promise createMemberAsync($arguments = [])
 * @method \Dew\Acs\Result listMembers(array $arguments = [])
 * @method \Http\Promise\Promise listMembersAsync($arguments = [])
 * @method \Dew\Acs\Result getMember(array $arguments = [])
 * @method \Http\Promise\Promise getMemberAsync($arguments = [])
 * @method \Dew\Acs\Result deleteMembers(array $arguments = [])
 * @method \Http\Promise\Promise deleteMembersAsync($arguments = [])
 * @method \Dew\Acs\Result addMemberRole(array $arguments = [])
 * @method \Http\Promise\Promise addMemberRoleAsync($arguments = [])
 * @method \Dew\Acs\Result removeMemberRole(array $arguments = [])
 * @method \Http\Promise\Promise removeMemberRoleAsync($arguments = [])
 * @method \Dew\Acs\Result createWorkspaceResource(array $arguments = [])
 * @method \Http\Promise\Promise createWorkspaceResourceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteWorkspaceResource(array $arguments = [])
 * @method \Http\Promise\Promise deleteWorkspaceResourceAsync($arguments = [])
 * @method \Dew\Acs\Result updateWorkspaceResource(array $arguments = [])
 * @method \Http\Promise\Promise updateWorkspaceResourceAsync($arguments = [])
 * @method \Dew\Acs\Result listResources(array $arguments = [])
 * @method \Http\Promise\Promise listResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result listQuotas(array $arguments = [])
 * @method \Http\Promise\Promise listQuotasAsync($arguments = [])
 * @method \Dew\Acs\Result createDataset(array $arguments = [])
 * @method \Http\Promise\Promise createDatasetAsync($arguments = [])
 * @method \Dew\Acs\Result getDataset(array $arguments = [])
 * @method \Http\Promise\Promise getDatasetAsync($arguments = [])
 * @method \Dew\Acs\Result updateDataset(array $arguments = [])
 * @method \Http\Promise\Promise updateDatasetAsync($arguments = [])
 * @method \Dew\Acs\Result publishDataset(array $arguments = [])
 * @method \Http\Promise\Promise publishDatasetAsync($arguments = [])
 * @method \Dew\Acs\Result listDatasets(array $arguments = [])
 * @method \Http\Promise\Promise listDatasetsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDataset(array $arguments = [])
 * @method \Http\Promise\Promise deleteDatasetAsync($arguments = [])
 * @method \Dew\Acs\Result createDatasetLabels(array $arguments = [])
 * @method \Http\Promise\Promise createDatasetLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteDatasetLabels(array $arguments = [])
 * @method \Http\Promise\Promise deleteDatasetLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result createCodeSource(array $arguments = [])
 * @method \Http\Promise\Promise createCodeSourceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCodeSource(array $arguments = [])
 * @method \Http\Promise\Promise deleteCodeSourceAsync($arguments = [])
 * @method \Dew\Acs\Result publishCodeSource(array $arguments = [])
 * @method \Http\Promise\Promise publishCodeSourceAsync($arguments = [])
 * @method \Dew\Acs\Result getCodeSource(array $arguments = [])
 * @method \Http\Promise\Promise getCodeSourceAsync($arguments = [])
 * @method \Dew\Acs\Result listCodeSources(array $arguments = [])
 * @method \Http\Promise\Promise listCodeSourcesAsync($arguments = [])
 * @method \Dew\Acs\Result createModel(array $arguments = [])
 * @method \Http\Promise\Promise createModelAsync($arguments = [])
 * @method \Dew\Acs\Result updateModel(array $arguments = [])
 * @method \Http\Promise\Promise updateModelAsync($arguments = [])
 * @method \Dew\Acs\Result getModel(array $arguments = [])
 * @method \Http\Promise\Promise getModelAsync($arguments = [])
 * @method \Dew\Acs\Result listModels(array $arguments = [])
 * @method \Http\Promise\Promise listModelsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteModel(array $arguments = [])
 * @method \Http\Promise\Promise deleteModelAsync($arguments = [])
 * @method \Dew\Acs\Result createModelVersion(array $arguments = [])
 * @method \Http\Promise\Promise createModelVersionAsync($arguments = [])
 * @method \Dew\Acs\Result updateModelVersion(array $arguments = [])
 * @method \Http\Promise\Promise updateModelVersionAsync($arguments = [])
 * @method \Dew\Acs\Result getModelVersion(array $arguments = [])
 * @method \Http\Promise\Promise getModelVersionAsync($arguments = [])
 * @method \Dew\Acs\Result listModelVersions(array $arguments = [])
 * @method \Http\Promise\Promise listModelVersionsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteModelVersion(array $arguments = [])
 * @method \Http\Promise\Promise deleteModelVersionAsync($arguments = [])
 * @method \Dew\Acs\Result createModelLabels(array $arguments = [])
 * @method \Http\Promise\Promise createModelLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteModelLabels(array $arguments = [])
 * @method \Http\Promise\Promise deleteModelLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result createModelVersionLabels(array $arguments = [])
 * @method \Http\Promise\Promise createModelVersionLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result deleteModelVersionLabels(array $arguments = [])
 * @method \Http\Promise\Promise deleteModelVersionLabelsAsync($arguments = [])
 * @method \Dew\Acs\Result listProducts(array $arguments = [])
 * @method \Http\Promise\Promise listProductsAsync($arguments = [])
 * @method \Dew\Acs\Result createProductOrders(array $arguments = [])
 * @method \Http\Promise\Promise createProductOrdersAsync($arguments = [])
 */
final class AIWorkSpaceClient extends AcsClient
{
    //
}

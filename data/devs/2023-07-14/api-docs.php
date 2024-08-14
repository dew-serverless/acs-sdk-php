<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'Devs',
        'version' => '2023-07-14',
    ],
    'components' => [
        'schemas' => [
            'Checkout' => [
                'type' => 'object',
                'properties' => [
                    'remote' => [
                        'type' => 'string',
                    ],
                    'ref' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeupEventPayload' => [
                'type' => 'object',
                'properties' => [
                    'originalPayload' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                ],
            ],
            'Condition' => [
                'type' => 'object',
                'properties' => [
                    'expression' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Connection' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/ConnectionSpec',
                        'required' => true,
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ConnectionStatus',
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ConnectionSpec' => [
                'type' => 'object',
                'properties' => [
                    'platform' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'account' => [
                        '$ref' => '#/components/schemas/GitAccount',
                    ],
                    'gitlabConfig' => [
                        '$ref' => '#/components/schemas/GitLabConfig',
                    ],
                ],
            ],
            'ConnectionStatus' => [
                'type' => 'object',
                'properties' => [
                    'installation' => [
                        '$ref' => '#/components/schemas/Installation',
                    ],
                ],
            ],
            'Context' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'ContextSchema' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'required' => [
                        'type' => 'boolean',
                    ],
                    'hint' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Environment' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/EnvironmentSpec',
                        'required' => true,
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/EnvironmentStatus',
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'EnvironmentSpec' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'Testing',
                            'Staging',
                            'Production',
                        ],
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                    'repositoryConfig' => [
                        '$ref' => '#/components/schemas/RepositoryConfig',
                    ],
                    'templateConfig' => [
                        '$ref' => '#/components/schemas/TemplateConfig',
                    ],
                    'infraStackConfig' => [
                        '$ref' => '#/components/schemas/InfraStackSpec',
                    ],
                    'serviceOverlay' => [
                        'type' => 'object',
                        'properties' => [
                            'resources' => [
                                'type' => 'object',
                            ],
                            'components' => [
                                'type' => 'object',
                            ],
                        ],
                    ],
                    'isAutoDeploy' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'EnvironmentStatus' => [
                'type' => 'object',
                'properties' => [
                    'infraStackStatus' => [
                        '$ref' => '#/components/schemas/InfraStackStatus',
                    ],
                    'latestReleaseDetail' => [
                        '$ref' => '#/components/schemas/ReleaseDetail',
                    ],
                    'observedGeneration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'observedTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EventFilterConfig' => [
                'type' => 'object',
                'properties' => [
                    'push' => [
                        '$ref' => '#/components/schemas/PushFilter',
                    ],
                    'pullRequest' => [
                        '$ref' => '#/components/schemas/PullRequestFilter',
                    ],
                ],
            ],
            'EventPayload' => [
                'type' => 'object',
                'properties' => [
                    'github' => [
                        '$ref' => '#/components/schemas/GithubEventPayload',
                    ],
                    'gitlab' => [
                        '$ref' => '#/components/schemas/GitlabEventPayload',
                    ],
                    'codeup' => [
                        '$ref' => '#/components/schemas/CodeupEventPayload',
                    ],
                    'gitee' => [
                        '$ref' => '#/components/schemas/GiteeEventPayload',
                    ],
                    'manual' => [
                        '$ref' => '#/components/schemas/ManualEventPayload',
                    ],
                ],
            ],
            'GitAccount' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'avatar' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'uri' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'GitEventSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'branch' => [
                        'type' => 'string',
                    ],
                    'commitID' => [
                        'type' => 'string',
                    ],
                    'tag' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GitLabConfig' => [
                'type' => 'object',
                'properties' => [
                    'uri' => [
                        'type' => 'string',
                    ],
                    'token' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GiteeEventPayload' => [
                'type' => 'object',
                'properties' => [
                    'originalPayload' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                ],
            ],
            'GithubEventPayload' => [
                'type' => 'object',
                'properties' => [
                    'originalPayload' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                ],
            ],
            'GitlabEventPayload' => [
                'type' => 'object',
                'properties' => [
                    'originalPayload' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                ],
            ],
            'InfraStackResourceState' => [
                'type' => 'object',
                'properties' => [
                    'resources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResourceDetail',
                        ],
                    ],
                    'resourceDrifts' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResourceDrift',
                        ],
                    ],
                ],
            ],
            'InfraStackSpec' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'regionID' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                    'templateSpec' => [
                        'type' => 'object',
                        'properties' => [
                            'engine' => [
                                'type' => 'string',
                            ],
                            'content' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'templateVariables' => [
                        'type' => 'object',
                    ],
                    'templateName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InfraStackStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'observedGeneration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'observedTime' => [
                        'type' => 'string',
                    ],
                    'templateOutputs' => [
                        'type' => 'object',
                    ],
                    'templateStatus' => [
                        'type' => 'object',
                        'properties' => [
                            'variables' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/TerraformInputVariable',
                                ],
                            ],
                            'outputs' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/TerraformOutputValue',
                                ],
                            ],
                        ],
                    ],
                    'resourceState' => [
                        '$ref' => '#/components/schemas/InfraStackResourceState',
                    ],
                ],
            ],
            'Installation' => [
                'type' => 'object',
                'properties' => [
                    'stage' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'actionUri' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ManualEventPayload' => [
                'type' => 'object',
                'properties' => [
                    'commitID' => [
                        'type' => 'string',
                    ],
                    'branch' => [
                        'type' => 'string',
                    ],
                    'tag' => [
                        'type' => 'string',
                    ],
                    'templateConfig' => [
                        '$ref' => '#/components/schemas/TemplateConfig',
                    ],
                ],
            ],
            'OAuthCredential' => [
                'type' => 'object',
                'properties' => [
                    'token' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'scope' => [
                        'type' => 'string',
                    ],
                    'expiration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'createdTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'refreshToken' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Pipeline' => [
                'type' => 'object',
                'properties' => [
                    'spec' => [
                        '$ref' => '#/components/schemas/PipelineSpec',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/PipelineStatus',
                    ],
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PipelineSpec' => [
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'type' => 'string',
                    ],
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'templateSpec' => [
                        '$ref' => '#/components/schemas/PipelineTemplateSpec',
                    ],
                ],
            ],
            'PipelineStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'latestExecError' => [
                        '$ref' => '#/components/schemas/TaskExecError',
                    ],
                ],
            ],
            'PipelineTemplate' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'deletionTime' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/PipelineTemplateSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PipelineTemplateSpec' => [
                'type' => 'object',
                'properties' => [
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'tasks' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TaskExec',
                        ],
                    ],
                ],
            ],
            'PipelineTrigger' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 63,
                        'pattern' => '^(?![0-9]+$)(?!-)[a-zA-Z0-9-_]{0,63}(?<!-)$',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/PipelineTriggerSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PipelineTriggerEvent' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 63,
                        'pattern' => '^(?![0-9]+$)(?!-)[a-zA-Z0-9-_]{0,63}(?<!-)$',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/PipelineTriggerEventStatus',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/PipelineTriggerEventSpec',
                    ],
                ],
            ],
            'PipelineTriggerEventSpec' => [
                'type' => 'object',
                'properties' => [
                    'payload' => [
                        '$ref' => '#/components/schemas/EventPayload',
                    ],
                    'triggerName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PipelineTriggerEventStatus' => [
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'type' => 'string',
                    ],
                    'firedPipelineName' => [
                        'type' => 'string',
                    ],
                    'releaseDetail' => [
                        '$ref' => '#/components/schemas/ReleaseDetail',
                    ],
                    'errorMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PipelineTriggerSpec' => [
                'type' => 'object',
                'properties' => [
                    'roleArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'eventFilter' => [
                        '$ref' => '#/components/schemas/EventFilterConfig',
                        'required' => true,
                    ],
                    'runPipeline' => [
                        '$ref' => '#/components/schemas/RunPipelineConfig',
                    ],
                ],
            ],
            'Project' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/ProjectSpec',
                        'required' => false,
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ProjectStatus',
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ProjectSpec' => [
                'type' => 'object',
                'properties' => [
                    'templateConfig' => [
                        '$ref' => '#/components/schemas/TemplateConfig',
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                    'token' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ProjectStatus' => [
                'type' => 'object',
                'properties' => [
                    'latestReleaseDetail' => [
                        '$ref' => '#/components/schemas/ReleaseDetail',
                    ],
                    'observedGeneration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'observedTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PullRequestFilter' => [
                'type' => 'object',
                'properties' => [
                    'sourceBranch' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'targetBranch' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'types' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'PushFilter' => [
                'type' => 'object',
                'properties' => [
                    'branch' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'tag' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ReleaseDetail' => [
                'type' => 'object',
                'properties' => [
                    'pipelineTriggerEventName' => [
                        'type' => 'string',
                    ],
                    'bizStatus' => [
                        'type' => 'string',
                    ],
                    'pipelineName' => [
                        'type' => 'string',
                    ],
                    'templateConfigSnapshot' => [
                        '$ref' => '#/components/schemas/TemplateConfig',
                    ],
                    'releaseOutputs' => [
                        'type' => 'object',
                    ],
                    'finishedTime' => [
                        'type' => 'string',
                    ],
                    'repositorySnapshot' => [
                        '$ref' => '#/components/schemas/RepositorySpec',
                    ],
                    'gitEventSnapshot' => [
                        '$ref' => '#/components/schemas/GitEventSnapshot',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'latestTaskExecError' => [
                        '$ref' => '#/components/schemas/TaskExecError',
                    ],
                    'envName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Repository' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/RepositorySpec',
                        'required' => true,
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'RepositoryConfig' => [
                'type' => 'object',
                'properties' => [
                    'repositoryName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'branchName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'manifest' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RepositorySpec' => [
                'type' => 'object',
                'properties' => [
                    'connectionName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'cloneUrl' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'platform' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'webUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceDetail' => [
                'type' => 'object',
                'properties' => [
                    'address' => [
                        'type' => 'string',
                    ],
                    'mode' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'attributeValues' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'ResourceDrift' => [
                'type' => 'object',
                'properties' => [
                    'address' => [
                        'type' => 'string',
                    ],
                    'mode' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'change' => [
                        'type' => 'object',
                        'properties' => [
                            'actions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'before' => [
                                'type' => 'any',
                            ],
                            'after' => [
                                'type' => 'any',
                            ],
                        ],
                    ],
                ],
            ],
            'RunAfter' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RunPipelineConfig' => [
                'type' => 'object',
                'properties' => [
                    'yamlFilePath' => [
                        'type' => 'string',
                    ],
                    'yamlFileContent' => [
                        'type' => 'string',
                    ],
                    'pipelineSpec' => [
                        '$ref' => '#/components/schemas/PipelineSpec',
                    ],
                    'variables' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Variable',
                        ],
                    ],
                ],
            ],
            'ServiceSpec' => [
                'type' => 'object',
                'properties' => [
                    'environment' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                    'template' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'templateVariables' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'templateVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Task' => [
                'type' => 'object',
                'properties' => [
                    'spec' => [
                        '$ref' => '#/components/schemas/TaskSpec',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/TaskStatus',
                    ],
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'TaskExec' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'taskTemplate' => [
                        'type' => 'string',
                    ],
                    'runAfters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RunAfter',
                        ],
                    ],
                ],
            ],
            'TaskExecError' => [
                'type' => 'object',
                'properties' => [
                    'title' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'extraInfo' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskInvocation' => [
                'type' => 'object',
                'properties' => [
                    'invocationID' => [
                        'type' => 'string',
                    ],
                    'requestID' => [
                        'type' => 'string',
                    ],
                    'invocationTarget' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'output' => [
                        'type' => 'string',
                    ],
                    'instanceID' => [
                        'type' => 'string',
                    ],
                    'slsProject' => [
                        'type' => 'string',
                    ],
                    'slsLogStore' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskSpec' => [
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'type' => 'string',
                    ],
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                ],
            ],
            'TaskStatus' => [
                'type' => 'object',
                'properties' => [
                    'statusGeneration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'phase' => [
                        'type' => 'string',
                    ],
                    'executionDetails' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'invocations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TaskInvocation',
                        ],
                    ],
                    'latestExecError' => [
                        '$ref' => '#/components/schemas/TaskExecError',
                    ],
                ],
            ],
            'TaskTemplate' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'deletionTime' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/TaskTemplateSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'TaskTemplateSpec' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'worker' => [
                        '$ref' => '#/components/schemas/TaskWorker',
                    ],
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'executeCondition' => [
                        '$ref' => '#/components/schemas/Condition',
                    ],
                ],
            ],
            'TaskWorker' => [
                'type' => 'object',
                'properties' => [
                    'presetWorker' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TemplateConfig' => [
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'parameters' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'TerraformInputVariable' => [
                'type' => 'object',
                'properties' => [
                    'defaultJson' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'nullable' => [
                        'type' => 'boolean',
                    ],
                    'sensitive' => [
                        'type' => 'boolean',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TerraformOutputValue' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'sensitive' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Variable' => [
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateProject' => [
            'path' => '/2023-07-14/projects',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Project',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteProject' => [
            'path' => '/2023-07-14/projects/{name}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateProject' => [
            'path' => '/2023-07-14/projects/{name}',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Project',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutProject' => [
            'path' => '/2023-07-14/projects/{name}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Project',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListProjects' => [
            'path' => '/2023-07-14/projects',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetProject' => [
            'path' => '/2023-07-14/projects/{name}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateEnvironment' => [
            'path' => '/2023-07-14/projects/{project}/environments',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/Environment',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteEnvironment' => [
            'path' => '/2023-07-14/projects/{project}/environments/{name}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateEnvironment' => [
            'path' => '/2023-07-14/projects/{project}/environments/{name}',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/Environment',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PutEnvironment' => [
            'path' => '/2023-07-14/projects/{project}/environments/{name}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/Environment',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListEnvironments' => [
            'path' => '/2023-07-14/projects/{project}/environments/',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetEnvironment' => [
            'path' => '/2023-07-14/projects/{project}/environments/{name}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateConnection' => [
            'path' => '/2023-07-14/connections',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Connection',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteConnection' => [
            'path' => '/2023-07-14/connections/{name}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListConnections' => [
            'path' => '/2023-07-14/connections',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetConnection' => [
            'path' => '/2023-07-14/connections/{name}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefreshConnection' => [
            'path' => '/2023-07-14/connections/{name}/refresh',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateRepository' => [
            'path' => '/2023-07-14/repositories',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Repository',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteRepository' => [
            'path' => '/2023-07-14/repositories/{name}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListRepositories' => [
            'path' => '/2023-07-14/repositories',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetRepository' => [
            'path' => '/2023-07-14/repositories/{name}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreatePipelineTrigger' => [
            'path' => '/2023-07-14/pipelinetriggers',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/PipelineTrigger',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeletePipelineTrigger' => [
            'path' => '/2023-07-14/pipelinetriggers/{name}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdatePipelineTrigger' => [
            'path' => '/2023-07-14/pipelinetriggers/{name}',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/PipelineTrigger',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutPipelineTrigger' => [
            'path' => '/2023-07-14/pipelinetriggers/{name}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/PipelineTrigger',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPipelineTriggers' => [
            'path' => '/2023-07-14/pipelinetriggers',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPipelineTrigger' => [
            'path' => '/2023-07-14/pipelinetriggers/{name}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreatePipelineTriggerEvent' => [
            'path' => '/2023-07-14/pipelinetriggerevents',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/PipelineTriggerEvent',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeletePipelineTriggerEvent' => [
            'path' => '/2023-07-14/pipelinetriggerevents/{name}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPipelineTriggerEvents' => [
            'path' => '/2023-07-14/pipelinetriggerevents',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPipelineTriggerEvent' => [
            'path' => '/2023-07-14/pipelinetriggerevents/{name}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreatePipeline' => [
            'path' => '/2023-07-14/pipelines',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Pipeline',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPipelines' => [
            'path' => '/2023-07-14/pipelines',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'GetPipeline' => [
            'path' => '/2023-07-14/pipelines/{name}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartPipeline' => [
            'path' => '/2023-07-14/pipelines/{name}/start',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CancelPipeline' => [
            'path' => '/2023-07-14/pipelines/{name}/cancel',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutPipelineStatus' => [
            'path' => '/2023-07-14/pipelines/{name}/status',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/Pipeline',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateTask' => [
            'path' => '/2023-07-14/tasks',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Task',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTasks' => [
            'path' => '/2023-07-14/tasks',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'GetTask' => [
            'path' => '/2023-07-14/tasks/{name}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartTask' => [
            'path' => '/2023-07-14/tasks/{name}/start',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RetryTask' => [
            'path' => '/2023-07-14/tasks/{name}/retry',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ResumeTask' => [
            'path' => '/2023-07-14/tasks/{name}/resume',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CancelTask' => [
            'path' => '/2023-07-14/tasks/{name}/cancel',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutTaskStatus' => [
            'path' => '/2023-07-14/tasks/{name}/status',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/Task',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'devs.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'emr-serverless-spark',
        'version' => '2023-08-08',
    ],
    'components' => [
        'schemas' => [
            'Artifact' => [
                'type' => 'object',
                'properties' => [
                    'fullPath' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'credential' => [
                        '$ref' => '#/components/schemas/Credential',
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'bizId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'location' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'catagoryBizId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Category' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'TASK',
                            'ARTIFACT',
                        ],
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'bizId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 64,
                    ],
                    'parentBizId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Configuration' => [
                'type' => 'object',
                'properties' => [
                    'configFileName' => [
                        'type' => 'string',
                    ],
                    'configItemKey' => [
                        'type' => 'string',
                    ],
                    'configItemValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConfigurationOverrides' => [
                'type' => 'object',
                'properties' => [
                    'configurations' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'configFileName' => [
                                    'type' => 'string',
                                ],
                                'configItemKey' => [
                                    'type' => 'string',
                                ],
                                'configItemValue' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Credential' => [
                'type' => 'object',
                'properties' => [
                    'securityToken' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'policy' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'expire' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'accessId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'signature' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'host' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'dir' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'JobDriver' => [
                'type' => 'object',
                'properties' => [
                    'sparkSubmit' => [
                        'type' => 'object',
                        'properties' => [
                            'entryPoint' => [
                                'type' => 'string',
                            ],
                            'entryPointArguments' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'sparkSubmitParameters' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'PrincipalAction' => [
                'type' => 'object',
                'properties' => [
                    'principalArn' => [
                        'type' => 'string',
                    ],
                    'actionArn' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ReleaseVersionImage' => [
                'type' => 'object',
                'properties' => [
                    'runtimeEngineType' => [
                        'type' => 'string',
                    ],
                    'cpuArchitecture' => [
                        'type' => 'string',
                    ],
                    'imageId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RunLog' => [
                'type' => 'object',
                'properties' => [
                    'driverStdOut' => [
                        'type' => 'string',
                    ],
                    'driverStdError' => [
                        'type' => 'string',
                    ],
                    'driverSyslog' => [
                        'type' => 'string',
                    ],
                    'driverStartup' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SparkConf' => [
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'SqlOutput' => [
                'type' => 'object',
                'properties' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'fields' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                        ],
                                        'nullable' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'rows' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'values' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Tag' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Task' => [
                'type' => 'object',
                'properties' => [
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'defaultSqlComputeId' => [
                        'type' => 'string',
                    ],
                    'archives' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'lastRunResourceQueueId' => [
                        'type' => 'string',
                    ],
                    'sparkLogLevel' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkDriverMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'jars' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'sparkExecutorCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'extraArtifactIds' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'content' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'sparkVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkEntrypoint' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'sparkArgs' => [
                        'type' => 'string',
                    ],
                    'environmentId' => [
                        'type' => 'string',
                    ],
                    'credential' => [
                        'type' => 'object',
                        'properties' => [
                            'accessId' => [
                                'type' => 'string',
                            ],
                            'securityToken' => [
                                'type' => 'string',
                            ],
                            'path' => [
                                'type' => 'string',
                            ],
                            'signature' => [
                                'type' => 'string',
                            ],
                            'accessUrl' => [
                                'type' => 'string',
                            ],
                            'expire' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'host' => [
                                'type' => 'string',
                            ],
                            'policy' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'hasChanged' => [
                        'type' => 'boolean',
                    ],
                    'extraSparkSubmitParams' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'artifactUrl' => [
                        'type' => 'string',
                    ],
                    'defaultResourceQueueId' => [
                        'type' => 'string',
                    ],
                    'defaultDatabase' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'categoryBizId' => [
                        'type' => 'string',
                    ],
                    'sparkSubmitClause' => [
                        'type' => 'string',
                    ],
                    'sparkConf' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SparkConf',
                        ],
                    ],
                    'pyFiles' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'tags' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'defaultCatalogId' => [
                        'type' => 'string',
                    ],
                    'sparkExecutorMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'fusion' => [
                        'type' => 'boolean',
                    ],
                    'isStreaming' => [
                        'type' => 'boolean',
                    ],
                    'sparkDriverCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'sparkLogPath' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'files' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'hasCommited' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
            ],
            'TaskInstance' => [
                'type' => 'object',
                'properties' => [
                    'taskInfo' => [
                        '$ref' => '#/components/schemas/Task',
                        'required' => false,
                    ],
                    'workspaceBizId' => [
                        'type' => 'string',
                    ],
                    'taskBizId' => [
                        'type' => 'string',
                    ],
                    'taskStatus' => [
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'type' => 'string',
                    ],
                    'fenixRunId' => [
                        'type' => 'string',
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TaskSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'commiter' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'item' => [
                        '$ref' => '#/components/schemas/Task',
                    ],
                    'taskBizId' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Template' => [
                'type' => 'object',
                'properties' => [
                    'sparkDriverCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'sparkDriverMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkExecutorMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkLogLevel' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkExecutorCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkLogPath' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkConf' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SparkConf',
                        ],
                    ],
                    'templateType' => [
                        'type' => 'string',
                    ],
                    'fusion' => [
                        'type' => 'boolean',
                    ],
                    'displaySparkVersion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TimeRange' => [
                'type' => 'object',
                'properties' => [
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'StopSessionCluster' => [
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters/action/stopSessionCluster',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'queueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sessionClusterId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartSessionCluster' => [
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters/action/startSessionCluster',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'queueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sessionClusterId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSessionClusters' => [
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters',
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
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'queueName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kind',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TerminateSqlStatement' => [
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement/{statementId}/terminate',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'statementId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateSqlStatement' => [
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'codeContent' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'defaultDatabase' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'defaultCatalog' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sqlComputeId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSqlStatement' => [
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement/{statementId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'statementId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListWorkspaces' => [
            'path' => '/api/v1/workspaces',
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
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'state',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListWorkspaceQueues' => [
            'path' => '/api/v1/workspaces/{workspaceId}/queues',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'environment',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListReleaseVersions' => [
            'path' => '/api/v1/releaseVersions',
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
            'parameters' => [
                [
                    'name' => 'releaseVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'releaseVersionStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'releaseType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CancelJobRun' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListJobRuns' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns',
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
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'creator',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobRunId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'states',
                    'in' => 'query',
                    'style' => 'json',
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
                    'name' => 'startTime',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'resourceQueueId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobRunDeploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetJobRun' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartJobRun' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'releaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'jobId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceQueueId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'codeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'executionTimeoutSeconds' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'configurationOverrides' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'configurations' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'configFileName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'configItemKey' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'configItemValue' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Tag',
                                    'required' => false,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'jobDriver' => [
                                '$ref' => '#/components/schemas/JobDriver',
                                'required' => false,
                            ],
                            'displayReleaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fusion' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GrantRoleToUsers' => [
            'path' => '/api/v1/auth/roles/grant',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'roleArn' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userArns' => [
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
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddMembers' => [
            'path' => '/api/v1/auth/members',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'workspaceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'memberArns' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListLogContents' => [
            'path' => '/api/v1/workspaces/{workspaceId}/action/listLogContents',
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
            'parameters' => [
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'length',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'emr-serverless-spark.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'emr-serverless-spark.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'emr-serverless-spark.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'emr-serverless-spark.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'emr-serverless-spark.cn-shenzhen.aliyuncs.com',
        ],
    ],
];
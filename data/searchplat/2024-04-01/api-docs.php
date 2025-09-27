<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'Searchplat',
        'version' => '2024-04-01',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetTableFields' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/data-sources/{dataSourceType}/fields',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceType',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'params',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'rawType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
        'DeleteWorkspace' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateWorkspace' => [
            'path' => '/openapi/platform/workspaces',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'chargeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'engineType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'quota' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'computeResource' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'docSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'spec' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetWorkspace' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListWorkspaces' => [
            'path' => '/openapi/platform/workspaces',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sortBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateWorkspace' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateCredentials' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/credentials/{token}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'token',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateCredentials' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/credentials',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteCredentials' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/credentials/{token}',
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
            'parameters' => [
                [
                    'name' => 'token',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetCredentials' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/credentials/{token}',
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
                    'name' => 'token',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCredentials' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/credentials',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '10',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAsyncTasks' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/async-tasks',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'serviceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAsyncTask' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/async-tasks/{id}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAsyncTask' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/async-tasks',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'dataId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetExperienceData' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/experience-data/{id}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteExperienceData' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/experience-data/{id}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateExperienceData' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/experience-data',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'contentType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'dataType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataValue' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListExperienceData' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/experience-data',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ResumeFunctionInstance' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/instances/{instanceName}/actions/resume',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateFunctionInstance' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/instances/{instanceName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'createParameters' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListFunctionInstances' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/instances',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'modelType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'functionType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'source',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'output',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CeaseFunctionInstance' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/instances/{instanceName}/actions/cease',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateFunctionInstance' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/instances',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'createParameters' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'functionType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instanceName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'modelType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateFunctionTask' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/instances/{instanceName}/tasks',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteFunctionInstance' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/instances/{instanceName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetFunctionInstance' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/instances/{instanceName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'output',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListFunctionRestrictions' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/functions/{functionName}/restrictions/{restrictionName}',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'restrictionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'modelType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'source',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteRagEvaluatorTask' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/rag-evaluator/v1/api/task/{task_id}',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'task_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateRagEvaluatorTask' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/rag-evaluator/v1/api/task',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'app_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'data' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'model_answer' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'question' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'recall_docs' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'standard_answer' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'data_source_config' => [
                                'type' => 'any',
                                'required' => false,
                            ],
                            'emails' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'evaluate_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'model' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'prompt' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'run_all_step' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'has_data_source' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'metrics' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'any',
                                    'required' => false,
                                ],
                            ],
                            'task_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRagEvaluatorTask' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/rag-evaluator/v1/api/task/{task_id}',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'task_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListRagEvaluatorTasks' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/rag-evaluator/v1/api/tasks',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateOfflineTask' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/offline-tasks/{type}',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'draft',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'meta' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'apiKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'regionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'taskName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'computeResource' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'labels' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'source' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'parameters' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'schema' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'primaryKey' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'sink' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'parameters' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'schema' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'primaryKey' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'processors' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'input' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                        'parameters' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                        'output' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'status' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'errorMessage' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'createTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'deleteTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/openapi/platform/regions',
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
            'deprecated' => false,
            'parameters' => [],
        ],
        'ListServices' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/services',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'modelType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'ModifyOfflineTask' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/offline-tasks/{type}/{taskName}',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'taskName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'meta' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'apiKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'regionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'taskName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'computeResource' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'labels' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'source' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'parameters' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'schema' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'primaryKey' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'sink' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'parameters' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'schema' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                        'primaryKey' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'processors' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'input' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                        'parameters' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                        'output' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'status' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'errorMessage' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'createTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'deleteTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTables' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/data-sources/{dataSourceType}/tables',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceType',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'params',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTableColumns' => [
            'path' => '/openapi/platform/workspaces/{workspaceName}/data-sources/{dataSourceType}/columns',
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
                    'name' => 'workspaceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceType',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'params',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'searchplat.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'searchplat.eu-central-1.aliyuncs.com',
        ],
    ],
];
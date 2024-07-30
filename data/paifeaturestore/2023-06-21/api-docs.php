<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PaiFeatureStore',
        'version' => '2023-06-21',
    ],
    'directories' => [
        [
            'id' => 185367,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'CreateInstance',
                'ListInstances',
                'GetInstance',
                'CheckInstanceDatasource',
            ],
        ],
        [
            'id' => 185372,
            'title' => '项目管理',
            'type' => 'directory',
            'children' => [
                'CreateProject',
                'GetProject',
                'DeleteProject',
                'WriteProjectFeatureEntityHotIds',
                'UpdateProject',
                'ListProjects',
                'ListProjectFeatureViews',
                'ListProjectFeatureViewTags',
                'ListProjectFeatureViewOwners',
                'GetProjectModelFeature',
                'GetProjectFeatureView',
                'GetProjectFeatureEntityHotIds',
                'GetProjectFeatureEntity',
                'ChangeProjectFeatureEntityHotIdVersion',
            ],
        ],
        [
            'id' => 185387,
            'title' => '数据源管理',
            'type' => 'directory',
            'children' => [
                'CreateDatasource',
                'ListDatasources',
                'GetDatasource',
                'UpdateDatasource',
                'ListDatasourceTables',
                'GetDatasourceTable',
                'DeleteDatasource',
            ],
        ],
        [
            'id' => 185395,
            'title' => '特征实体',
            'type' => 'directory',
            'children' => [
                'CreateFeatureEntity',
                'ListFeatureEntities',
                'GetFeatureEntity',
                'DeleteFeatureEntity',
            ],
        ],
        [
            'id' => 185400,
            'title' => '特征视图',
            'type' => 'directory',
            'children' => [
                'ListFeatureViewOnlineFeatures',
                'WriteFeatureViewTable',
                'PublishFeatureViewTable',
                'ListFeatureViews',
                'ListFeatureViewRelationships',
                'ListFeatureViewFieldRelationships',
                'GetFeatureView',
                'DeleteFeatureView',
                'CreateFeatureView',
            ],
        ],
        [
            'id' => 185409,
            'title' => 'Label表',
            'type' => 'directory',
            'children' => [
                'UpdateLabelTable',
                'ListLabelTables',
                'GetLabelTable',
                'DeleteLabelTable',
                'CreateLabelTable',
            ],
        ],
        [
            'id' => 185415,
            'title' => '模型特征',
            'type' => 'directory',
            'children' => [
                'ListModelFeatures',
                'GetModelFeature',
                'ExportModelFeatureTrainingSetTable',
                'DeleteModelFeature',
                'CreateModelFeature',
                'UpdateModelFeature',
                'CreateModelFeatureTrainingSetFGTable',
                'UpdateModelFeatureFGInfo',
                'UpdateModelFeatureFGFeature',
                'ListModelFeatureAvailableFeatures',
                'GetModelFeatureFGInfo',
                'GetModelFeatureFGFeature',
                'ExportModelFeatureTrainingSetFGTable',
            ],
        ],
        [
            'id' => 185422,
            'title' => '任务管理',
            'type' => 'directory',
            'children' => [
                'GetTask',
                'ListTaskLogs',
                'ListTasks',
            ],
        ],
        [
            'id' => 185364,
            'title' => '服务账户角色',
            'type' => 'directory',
            'children' => [
                'GetServiceIdentityRole',
                'CreateServiceIdentityRole',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateInstance' => [
            'summary' => '创建特征平台实例。',
            'path' => '/api/v1/instances',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '实例类型。',
                                'description' => '实例类型，目前仅支持Basic（基础型）。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Basic',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C33E160C-BFCA-5719-B958-942850E949F6',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'featureStore-cn-7mz2xfu****',
                            ],
                            'Code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'InstanceAlreadyExistsErrorProblem',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C33E160C-BFCA-5719-B958-942850E949F6\\",\\n  \\"InstanceId\\": \\"featureStore-cn-7mz2xfu****\\",\\n  \\"Code\\": \\"InstanceAlreadyExistsErrorProblem\\"\\n}","type":"json"}]',
            'title' => '创建实例',
        ],
        'ListInstances' => [
            'summary' => '获取实例列表。',
            'path' => '/api/v1/instances',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码，起始值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '状态过滤。'."\n"
                            .'● Initializing-初始化中。'."\n"
                            .'● Running-运行中。'."\n"
                            .'● Failure-创建失败。',
                        'description' => '状态过滤。'."\n"
                            .'● Initializing-初始化中。'."\n"
                            .'● Running-运行中。'."\n"
                            .'● Failure-创建失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。'."\n"
                            .'● GmtCreateTime-创建时间。'."\n"
                            .'● GmtModifiedTime-更新时间。',
                        'description' => '排序依据。'."\n"
                            .'● GmtCreateTime-创建时间。'."\n"
                            .'● GmtModifiedTime-更新时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。'."\n"
                            .'● ASC-升序。'."\n"
                            .'● DESC-降序。',
                        'description' => '排序方式。'."\n"
                            .'● ASC-升序。'."\n"
                            .'● DESC-降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2CA11923-2A3D-5E5A-8314-E699D2DD15DE',
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Instances' => [
                                'title' => '实例列表。',
                                'description' => '实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例ID。',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'featureStore-cn-7mz2xfu****',
                                        ],
                                        'Type' => [
                                            'title' => '实例类型。'."\n"
                                                .'● Basic-基础版',
                                            'description' => '实例类型，目前仅支持Basic（基础版）。',
                                            'type' => 'string',
                                            'example' => 'Basic',
                                        ],
                                        'Status' => [
                                            'title' => '状态。'."\n"
                                                .'● Initializing-初始化中。'."\n"
                                                .'● Running-运行中。'."\n"
                                                .'● Stopped-停止服务。',
                                            'description' => '状态。'."\n"
                                                ."\n"
                                                .'● Initializing-初始化中。'."\n"
                                                ."\n"
                                                .'● Running-运行中。'."\n"
                                                ."\n"
                                                .'● Stopped-停止服务。',
                                            'type' => 'string',
                                            'example' => 'Initializing',
                                        ],
                                        'RegionId' => [
                                            'title' => '所属区域。'."\n"
                                                .'● cn-hangzhou'."\n"
                                                .'● cn-beijing'."\n"
                                                .'● cn-shanghai'."\n"
                                                .'● cn-shenzhen',
                                            'description' => '所属区域。'."\n"
                                                ."\n"
                                                .'● cn-hangzhou'."\n"
                                                ."\n"
                                                .'● cn-beijing'."\n"
                                                ."\n"
                                                .'● cn-shanghai'."\n"
                                                ."\n"
                                                .'● cn-shenzhen',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '创建时间。',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-04T11:26:09.036+08:00',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '更新时间。',
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-04T11:26:09.036+08:00',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2CA11923-2A3D-5E5A-8314-E699D2DD15DE\\",\\n  \\"TotalCount\\": 10,\\n  \\"Instances\\": [\\n    {\\n      \\"InstanceId\\": \\"featureStore-cn-7mz2xfu****\\",\\n      \\"Type\\": \\"Basic\\",\\n      \\"Status\\": \\"Initializing\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GmtCreateTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2023-07-04T11:26:09.036+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取实例列表',
        ],
        'GetInstance' => [
            'summary' => '获取实例详细信息。',
            'path' => '/api/v1/instances/{InstanceId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1C5B1511-8A5B-59C3-90AF-513F9210E882',
                            ],
                            'Status' => [
                                'title' => '状态。'."\n"
                                    .'● Initializing-初始化中。'."\n"
                                    .'● Running-运行中。'."\n"
                                    .'● Failure-创建失败。'."\n"
                                    .'● Stopped-停止服务。',
                                'description' => '状态。'."\n"
                                    ."\n"
                                    .'● Initializing-初始化中。'."\n"
                                    ."\n"
                                    .'● Running-运行中。'."\n"
                                    ."\n"
                                    .'● Failure-创建失败。'."\n"
                                    ."\n"
                                    .'● Stopped-停止服务。',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'RegionId' => [
                                'title' => '所属区域。',
                                'description' => '所属区域。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T11:26:09.036+08:00',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '更新时间。',
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T11:26:09.036+08:00',
                            ],
                            'Progress' => [
                                'title' => '实例生产进度。',
                                'description' => '实例生产进度。',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '0.8',
                            ],
                            'Message' => [
                                'title' => '实例生产日志信息。',
                                'description' => '实例生产日志信息。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Type' => [
                                'title' => '实例类型。',
                                'description' => '实例类型。',
                                'type' => 'string',
                                'example' => 'Basic',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C5B1511-8A5B-59C3-90AF-513F9210E882\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"GmtCreateTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n  \\"Progress\\": 0.8,\\n  \\"Message\\": \\"Success\\",\\n  \\"Type\\": \\"Basic\\"\\n}","type":"json"}]',
            'title' => '获取实例详细信息',
        ],
        'CheckInstanceDatasource' => [
            'summary' => '检查数据源连通性。',
            'path' => '/api/v1/instances/{InstanceId}/action/checkdatasource',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '数据源类型。'."\n"
                                    .'● Hologres'."\n"
                                    .'● GraphCompute'."\n"
                                    .'● Redis'."\n"
                                    .'● MaxCompute',
                                'description' => '数据源类型。'."\n"
                                    ."\n"
                                    .'● Hologres'."\n"
                                    ."\n"
                                    .'● GraphCompute'."\n"
                                    ."\n"
                                    .'● Redis'."\n"
                                    ."\n"
                                    .'● MaxCompute',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Hologres',
                            ],
                            'Uri' => [
                                'title' => '资源地址。',
                                'description' => '资源地址。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'igraph1',
                            ],
                            'Config' => [
                                'title' => '资源配置。',
                                'description' => '资源配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"address": ""}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C03B2680-AC9C-59CD-93C5-8142B92537FA',
                            ],
                            'Status' => [
                                'title' => '资源检测状态。'."\n"
                                    .'● Success-成功。'."\n"
                                    .'● Failure-失败。',
                                'description' => '资源检测状态。'."\n"
                                    ."\n"
                                    .'● Success-成功。'."\n"
                                    ."\n"
                                    .'● Failure-失败。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C03B2680-AC9C-59CD-93C5-8142B92537FA\\",\\n  \\"Status\\": \\"Success\\"\\n}","type":"json"}]',
            'title' => '检查数据源连通性',
        ],
        'CreateProject' => [
            'summary' => '创建特征平台项目。',
            'path' => '/api/v1/instances/{InstanceId}/projects',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'project1',
                            ],
                            'WorkspaceId' => [
                                'title' => '工作空间ID。',
                                'description' => '工作空间ID，可通过[ListWorkspaces](~~449124~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '324',
                            ],
                            'Description' => [
                                'title' => '项目描述。',
                                'description' => '项目描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is a test.',
                            ],
                            'OfflineDatasourceId' => [
                                'title' => '离线数据源ID，可通过接口ListDatasources获取。',
                                'description' => '离线数据源ID，可通过接口ListDatasources获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '4',
                            ],
                            'OfflineLifeCycle' => [
                                'description' => '离线数据生命周期（天）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '90',
                            ],
                            'OnlineDatasourceId' => [
                                'title' => '在线数据源ID，可通过接口ListDatasources获取。',
                                'description' => '在线数据源ID，可通过接口ListDatasources获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '977ADE3A-D69D-58AD-8323-96E2FB898E99',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"977ADE3A-D69D-58AD-8323-96E2FB898E99\\",\\n  \\"ProjectId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建项目',
        ],
        'GetProject' => [
            'summary' => '获取项目详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可通过接口ListProjects获取。',
                        'description' => '项目ID，可通过接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C33E160C-BFCA-5719-B958-942850E949F6',
                            ],
                            'Name' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project1',
                            ],
                            'Description' => [
                                'title' => '项目描述。',
                                'description' => '项目描述。',
                                'type' => 'string',
                                'example' => 'This is a test.',
                            ],
                            'OfflineDatasourceType' => [
                                'title' => '离线数据源类型。',
                                'description' => '离线数据源类型，目前仅支持Dataworks。',
                                'type' => 'string',
                                'example' => 'MaxCompute',
                            ],
                            'OfflineDatasourceId' => [
                                'title' => '离线数据源ID。',
                                'description' => '离线数据源ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'OfflineDatasourceName' => [
                                'title' => '离线数据源名称。',
                                'description' => '离线数据源名称。',
                                'type' => 'string',
                                'example' => 'datasource1',
                            ],
                            'OnlineDatasourceType' => [
                                'title' => '在线数据源类型。',
                                'description' => '在线数据源类型。'."\n"
                                    ."\n"
                                    .'- Hologres '."\n"
                                    ."\n"
                                    .'- GraphCompute'."\n"
                                    ."\n"
                                    .'- Redis',
                                'type' => 'string',
                                'example' => 'Hologres',
                            ],
                            'OnlineDatasourceId' => [
                                'title' => '在线数据源ID。',
                                'description' => '在线数据源ID。',
                                'type' => 'string',
                                'example' => '5',
                            ],
                            'OnlineDatasourceName' => [
                                'title' => '在线数据源名称。',
                                'description' => '在线数据源名称。',
                                'type' => 'string',
                                'example' => 'datasource2',
                            ],
                            'OfflineLifecycle' => [
                                'description' => '离线数据生命周期（天）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '90',
                            ],
                            'FeatureEntityCount' => [
                                'description' => '项目所含特征实体个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'FeatureViewCount' => [
                                'description' => '项目所含特征视图个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'ModelCount' => [
                                'description' => '项目所含模型特征个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'Owner' => [
                                'title' => '项目所有者。',
                                'description' => '项目所有者的阿里云账号ID。',
                                'type' => 'string',
                                'example' => '1232132543543****',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '更新时间。',
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C33E160C-BFCA-5719-B958-942850E949F6\\",\\n  \\"Name\\": \\"project1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"OfflineDatasourceType\\": \\"MaxCompute\\",\\n  \\"OfflineDatasourceId\\": \\"4\\",\\n  \\"OfflineDatasourceName\\": \\"datasource1\\",\\n  \\"OnlineDatasourceType\\": \\"Hologres\\",\\n  \\"OnlineDatasourceId\\": \\"5\\",\\n  \\"OnlineDatasourceName\\": \\"datasource2\\",\\n  \\"OfflineLifecycle\\": 90,\\n  \\"FeatureEntityCount\\": 10,\\n  \\"FeatureViewCount\\": 10,\\n  \\"ModelCount\\": 5,\\n  \\"Owner\\": \\"1232132543543****\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n}","type":"json"}]',
            'title' => '获取项目详细信息',
        ],
        'DeleteProject' => [
            'summary' => '删除特征平台项目。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可通过接口ListProjects获取。',
                        'description' => '项目ID，可通过接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0DA35264-0877-5852-8971-7735B547C969',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0DA35264-0877-5852-8971-7735B547C969\\"\\n}","type":"json"}]',
            'title' => '删除项目',
        ],
        'WriteProjectFeatureEntityHotIds' => [
            'summary' => '向指定项目下的特征实体写入热点数据。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/featureentities/{FeatureEntityName}/action/writehotids',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'FeatureEntityName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征实体名称。',
                        'description' => '特征实体名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'feature_entity_1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Version' => [
                                'title' => '版本。',
                                'description' => '版本。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '20221213',
                            ],
                            'HotIds' => [
                                'title' => '热点ID列表。',
                                'description' => '热点ID列表。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1,2,3',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8\\"\\n}","type":"json"}]',
            'title' => '向指定项目下的特征实体写入热点数据',
        ],
        'UpdateProject' => [
            'summary' => '更新项目信息。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可通过接口ListProjects获取。',
                        'description' => '项目ID，可通过接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'project1',
                            ],
                            'Description' => [
                                'title' => '项目描述。',
                                'description' => '项目描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is a test.',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2150233F-A1F7-54D2-B5B5-8A70567549BD',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2150233F-A1F7-54D2-B5B5-8A70567549BD\\"\\n}","type":"json"}]',
            'title' => '更新项目信息',
        ],
        'ListProjects' => [
            'summary' => '获取项目列表。',
            'path' => '/api/v1/instances/{InstanceId}/projects',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID，可通过工作空间接口ListWorkspaces获取。',
                        'description' => '工作空间ID，可通过工作空间接口[ListWorkspaces](~~449124~~)获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '234',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目名称过滤。',
                        'description' => '项目名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fs1',
                    ],
                ],
                [
                    'name' => 'Owner',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目所有者。',
                        'description' => '项目所有者的阿里云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '134324352****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码，起始值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页大小，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。',
                        'description' => '排序方式。'."\n"
                            ."\n"
                            .'- Asc - 升序排列。'."\n"
                            ."\n"
                            .'- Desc - 降序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Asc',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。',
                        'description' => '排序依据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtModifiedTime',
                    ],
                ],
                [
                    'name' => 'ProjectIds',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '项目ID过滤。',
                        'description' => '项目ID过滤。',
                        'type' => 'array',
                        'items' => [
                            'description' => '项目ID，可通过接口ListProjects获取。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '3',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '44933189-493B-5C43-A5C6-11EEC2A43520',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Projects' => [
                                'title' => '项目列表。',
                                'description' => '项目列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '项目。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProjectId' => [
                                            'title' => '项目ID。',
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => '项目名称。',
                                            'description' => '项目名称。',
                                            'type' => 'string',
                                            'example' => 'project1',
                                        ],
                                        'Description' => [
                                            'title' => '项目描述。',
                                            'description' => '项目描述。',
                                            'type' => 'string',
                                            'example' => 'This is a test.',
                                        ],
                                        'OfflineDatasourceType' => [
                                            'title' => '离线数据源类型。',
                                            'description' => '离线数据源类型。',
                                            'type' => 'string',
                                            'example' => 'MaxCompute',
                                        ],
                                        'OfflineDatasourceId' => [
                                            'title' => '离线数据源ID。',
                                            'description' => '离线数据源ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'OfflineDatasourceName' => [
                                            'title' => '离线数据源名称。',
                                            'description' => '离线数据源名称。',
                                            'type' => 'string',
                                            'example' => 'datasource1',
                                        ],
                                        'OnlineDatasourceType' => [
                                            'title' => '在线数据源类型。',
                                            'description' => '在线数据源类型。',
                                            'type' => 'string',
                                            'example' => 'Hologres',
                                        ],
                                        'OnlineDatasourceId' => [
                                            'title' => '在线数据源ID。',
                                            'description' => '在线数据源ID。',
                                            'type' => 'string',
                                            'example' => '5',
                                        ],
                                        'OnlineDatasourceName' => [
                                            'title' => '在线数据源名称。',
                                            'description' => '在线数据源名称。',
                                            'type' => 'string',
                                            'example' => 'datasource2',
                                        ],
                                        'OfflineLifecycle' => [
                                            'description' => '离线数据生命周期（天）。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'FeatureEntityCount' => [
                                            'description' => '项目所含特征实体个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'FeatureViewCount' => [
                                            'description' => '项目所含特征视图个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'ModelCount' => [
                                            'description' => '项目所含模型特征个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'Owner' => [
                                            'title' => '项目所有者。',
                                            'description' => '项目所有者。',
                                            'type' => 'string',
                                            'example' => '1232132543543****',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '创建时间。',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '更新时间。',
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"44933189-493B-5C43-A5C6-11EEC2A43520\\",\\n  \\"TotalCount\\": 10,\\n  \\"Projects\\": [\\n    {\\n      \\"ProjectId\\": \\"3\\",\\n      \\"Name\\": \\"project1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"OfflineDatasourceType\\": \\"MaxCompute\\",\\n      \\"OfflineDatasourceId\\": \\"4\\",\\n      \\"OfflineDatasourceName\\": \\"datasource1\\",\\n      \\"OnlineDatasourceType\\": \\"Hologres\\",\\n      \\"OnlineDatasourceId\\": \\"5\\",\\n      \\"OnlineDatasourceName\\": \\"datasource2\\",\\n      \\"OfflineLifecycle\\": 10,\\n      \\"FeatureEntityCount\\": 10,\\n      \\"FeatureViewCount\\": 10,\\n      \\"ModelCount\\": 5,\\n      \\"Owner\\": \\"1232132543543****\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取项目列表',
        ],
        'ListProjectFeatureViews' => [
            'summary' => '获取特征视图与特征列表。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/featureviews',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AE2AF33E-0C0D-51A8-B89B-C5F1DF261D92',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'FeatureViews' => [
                                'title' => '特征视图列表。',
                                'description' => '特征视图列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '特征视图名称。',
                                            'description' => '特征视图名称。',
                                            'type' => 'string',
                                            'example' => 'feature_view1',
                                        ],
                                        'FeatureViewId' => [
                                            'title' => '特征视图ID。',
                                            'description' => '特征视图ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Features' => [
                                            'title' => '特征列表。',
                                            'description' => '特征列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'title' => '特征名称。',
                                                        'description' => '特征名称。',
                                                        'type' => 'string',
                                                        'example' => 'f1',
                                                    ],
                                                    'Type' => [
                                                        'title' => '特征类型。'."\n"
                                                            .'● INT32'."\n"
                                                            .'● INT64'."\n"
                                                            .'● FLOAT'."\n"
                                                            .'● DOUBLE'."\n"
                                                            .'● STRING'."\n"
                                                            .'● BOOLEAN'."\n"
                                                            .'● TIMESTAMP',
                                                        'description' => '特征类型，包括：'."\n"
                                                            .'- INT32'."\n"
                                                            .'- INT64'."\n"
                                                            .'- FLOAT'."\n"
                                                            .'- DOUBLE'."\n"
                                                            .'- STRING'."\n"
                                                            .'- BOOLEAN'."\n"
                                                            .'- TIMESTAMP',
                                                        'type' => 'string',
                                                        'example' => 'INT32',
                                                    ],
                                                    'Attributes' => [
                                                        'title' => '字段属性列表，可选值包括：'."\n"
                                                            .'● Partition-分区字段'."\n"
                                                            .'● PrimaryKey-主键'."\n"
                                                            .'● EventTime-事件时间',
                                                        'description' => '字段属性列表，可选值包括：'."\n"
                                                            .'- Partition-分区字段'."\n"
                                                            .'- PrimaryKey-主键'."\n"
                                                            .'- EventTime-事件时间',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '字段属性。',
                                                            'type' => 'string',
                                                            'example' => 'Partition',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Type' => [
                                            'title' => '类型。'."\n"
                                                .'● Batch-离线特征'."\n"
                                                .'● Stream-实时特征'."\n"
                                                .'● Sequence-序列特征',
                                            'description' => '特征视图类型。'."\n"
                                                .'- Batch-离线'."\n"
                                                .'- Stream-实时'."\n"
                                                .'- Sequence-行为序列',
                                            'type' => 'string',
                                            'example' => 'Batch',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AE2AF33E-0C0D-51A8-B89B-C5F1DF261D92\\",\\n  \\"TotalCount\\": 10,\\n  \\"FeatureViews\\": [\\n    {\\n      \\"Name\\": \\"feature_view1\\",\\n      \\"FeatureViewId\\": \\"3\\",\\n      \\"Features\\": [\\n        {\\n          \\"Name\\": \\"f1\\",\\n          \\"Type\\": \\"INT32\\",\\n          \\"Attributes\\": [\\n            \\"Partition\\"\\n          ]\\n        }\\n      ],\\n      \\"Type\\": \\"Batch\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征视图与特征列表',
        ],
        'ListProjectFeatureViewTags' => [
            'summary' => '获取项目下所有特征视图的标签列表。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/featureviewtags',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D3DB6C44-2EFD-5575-A58D-BED4BD07BE46',
                            ],
                            'Tags' => [
                                'title' => '标签列表。',
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '特征视图的标签。',
                                    'type' => 'string',
                                    'example' => 'tag1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3DB6C44-2EFD-5575-A58D-BED4BD07BE46\\",\\n  \\"Tags\\": [\\n    \\"tag1\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取项目下所有特征视图的标签列表',
        ],
        'ListProjectFeatureViewOwners' => [
            'summary' => '获取项目下全部特征视图的创建人列表。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/featureviewowners',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FBBE454-9BD1-5D8F-9129-D14DB7FAFE0B',
                            ],
                            'Owners' => [
                                'title' => '创建人列表。',
                                'description' => '创建人列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '创建人的云账号ID。',
                                    'type' => 'string',
                                    'example' => '1321434324****',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FBBE454-9BD1-5D8F-9129-D14DB7FAFE0B\\",\\n  \\"Owners\\": [\\n    \\"1321434324****\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取项目下全部特征视图的创建人列表',
        ],
        'GetProjectModelFeature' => [
            'summary' => '根据模型特征名称，获取项目下指定模型特征的详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/modelfeatures/{ModelFeatureName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'ModelFeatureName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征视图名称。',
                        'description' => '特征视图名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'model_feature_1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8',
                            ],
                            'ModelFeatureId' => [
                                'title' => '模型特征ID。',
                                'description' => '模型特征ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ProjectName' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project1',
                            ],
                            'Name' => [
                                'title' => '模型特征名称。',
                                'description' => '模型特征名称。',
                                'type' => 'string',
                                'example' => 'model_feature_1',
                            ],
                            'Owner' => [
                                'title' => '模型特征创建人。',
                                'description' => '模型特征创建人。',
                                'type' => 'string',
                                'example' => '12324325324****',
                            ],
                            'LabelTableId' => [
                                'title' => 'Label表ID。',
                                'description' => 'Label表ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'LabelDatasourceId' => [
                                'title' => 'Label表数据源ID。',
                                'description' => 'Label表数据源ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'LabelDatasourceTable' => [
                                'title' => 'Label表基于的数据表名称。',
                                'description' => 'Label表基于的数据表名称。',
                                'type' => 'string',
                                'example' => 'table1',
                            ],
                            'LabelEventTime' => [
                                'title' => '事件时间字段。',
                                'description' => '事件时间字段。',
                                'type' => 'string',
                                'example' => 'dt',
                            ],
                            'TrainingSetTable' => [
                                'title' => '导出的训练集表。',
                                'description' => '导出的训练集表。',
                                'type' => 'string',
                                'example' => 'model_feature_xxx_training_set',
                            ],
                            'TrainingSetFGTable' => [
                                'description' => '训练集特征生成表。',
                                'type' => 'string',
                                'example' => 'table2',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T14:46:22.227+08:00',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '更新时间。',
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T14:46:22.227+08:00',
                            ],
                            'Features' => [
                                'title' => '特征列表。',
                                'description' => '特征列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureViewId' => [
                                            'title' => '特征视图ID。',
                                            'description' => '特征视图ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'FeatureViewName' => [
                                            'title' => '特征视图名称。',
                                            'description' => '特征视图名称。',
                                            'type' => 'string',
                                            'example' => 'feature_view1',
                                        ],
                                        'Name' => [
                                            'title' => '特征名称。',
                                            'description' => '特征名称。',
                                            'type' => 'string',
                                            'example' => 'feature1',
                                        ],
                                        'Type' => [
                                            'title' => '特征类型。'."\n"
                                                .'● INT32'."\n"
                                                .'● INT64'."\n"
                                                .'● FLOAT'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING'."\n"
                                                .'● BOOLEAN'."\n"
                                                .'● TIMESTAMP',
                                            'description' => '特征类型，可选值包括：'."\n"
                                                ."\n"
                                                .'● INT32'."\n"
                                                ."\n"
                                                .'● INT64'."\n"
                                                ."\n"
                                                .'● FLOAT'."\n"
                                                ."\n"
                                                .'● DOUBLE'."\n"
                                                ."\n"
                                                .'● STRING'."\n"
                                                ."\n"
                                                .'● BOOLEAN'."\n"
                                                ."\n"
                                                .'● TIMESTAMP',
                                            'type' => 'string',
                                            'example' => 'INT32',
                                        ],
                                        'AliasName' => [
                                            'title' => '特征别名。',
                                            'description' => '特征别名。',
                                            'type' => 'string',
                                            'example' => 'feature2',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8\\",\\n  \\"ModelFeatureId\\": \\"3\\",\\n  \\"ProjectId\\": \\"3\\",\\n  \\"ProjectName\\": \\"project1\\",\\n  \\"Name\\": \\"model_feature_1\\",\\n  \\"Owner\\": \\"12324325324****\\",\\n  \\"LabelTableId\\": \\"3\\",\\n  \\"LabelDatasourceId\\": \\"3\\",\\n  \\"LabelDatasourceTable\\": \\"table1\\",\\n  \\"LabelEventTime\\": \\"dt\\",\\n  \\"TrainingSetTable\\": \\"model_feature_xxx_training_set\\",\\n  \\"TrainingSetFGTable\\": \\"table2\\",\\n  \\"GmtCreateTime\\": \\"2023-07-04T14:46:22.227+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2023-07-04T14:46:22.227+08:00\\",\\n  \\"Features\\": [\\n    {\\n      \\"FeatureViewId\\": \\"3\\",\\n      \\"FeatureViewName\\": \\"feature_view1\\",\\n      \\"Name\\": \\"feature1\\",\\n      \\"Type\\": \\"INT32\\",\\n      \\"AliasName\\": \\"feature2\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取项目下模型特征的详细信息',
        ],
        'GetProjectFeatureView' => [
            'summary' => '根据特征视图名，获取项目下指定特征视图的详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/featureviews/{FeatureViewName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'FeatureViewName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征视图名称。',
                        'description' => '特征视图名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fv1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BFD68AD5-398C-5AC4-A357-C7EA8DF33C26',
                            ],
                            'FeatureViewId' => [
                                'title' => '特征视图ID。',
                                'description' => '特征视图ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ProjectName' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project1',
                            ],
                            'FeatureEntityId' => [
                                'title' => '特征实体ID。',
                                'description' => '特征实体ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'FeatureEntityName' => [
                                'title' => '特征实体名称。',
                                'description' => '特征实体名称。',
                                'type' => 'string',
                                'example' => 'entity1',
                            ],
                            'JoinId' => [
                                'description' => '特征实体的Join ID。',
                                'type' => 'string',
                                'example' => 'user_id',
                            ],
                            'Name' => [
                                'title' => '特征视图名称。',
                                'description' => '特征视图名称。',
                                'type' => 'string',
                                'example' => 'feature_view1',
                            ],
                            'Owner' => [
                                'title' => '特征视图创建人。',
                                'description' => '特征视图创建人。',
                                'type' => 'string',
                                'example' => '1231421342****',
                            ],
                            'Type' => [
                                'title' => '类型。'."\n"
                                    .'● Batch-离线特征'."\n"
                                    .'● Stream-实时特征',
                                'description' => '类型。'."\n"
                                    .'● Batch-离线特征'."\n"
                                    .'● Stream-实时特征',
                                'type' => 'string',
                                'example' => 'Batch',
                            ],
                            'WriteMethod' => [
                                'title' => '写入方式。'."\n"
                                    .'● ByReadyMadeTable-使用现成表注册'."\n"
                                    .'● Custom-自定义表结构',
                                'description' => '写入方式。'."\n"
                                    .'● ByReadyMadeTable-使用现成表注册'."\n"
                                    .'● Custom-自定义表结构',
                                'type' => 'string',
                                'example' => 'Custom',
                            ],
                            'RegisterTable' => [
                                'title' => '注册表名称。',
                                'description' => '注册表名称。',
                                'type' => 'string',
                                'example' => 'table1',
                            ],
                            'RegisterDatasourceId' => [
                                'title' => '注册表所在数据源ID。',
                                'description' => '注册表所在数据源ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'SyncOnlineTable' => [
                                'title' => '是否同步在线特征表。',
                                'description' => '是否同步在线特征表。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TTL' => [
                                'title' => '生命周期。',
                                'description' => '生命周期。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '90',
                            ],
                            'Tags' => [
                                'title' => '标签列表。',
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签。',
                                    'type' => 'string',
                                    'example' => 'tag1',
                                ],
                            ],
                            'Config' => [
                                'title' => '配置。',
                                'description' => '配置。',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'GmtSyncTime' => [
                                'title' => '同步时间。',
                                'description' => '同步时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'LastSyncConfig' => [
                                'title' => '最后一次更新的配置。',
                                'description' => '最后一次更新的配置。',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'Fields' => [
                                'title' => '字段列表。',
                                'description' => '字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '字段名称。',
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'example' => 'field1',
                                        ],
                                        'Type' => [
                                            'title' => '字段类型。'."\n"
                                                .'● INT32'."\n"
                                                .'● INT64'."\n"
                                                .'● FLOAT'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING'."\n"
                                                .'● BOOLEAN'."\n"
                                                .'● TIMESTAMP',
                                            'description' => '字段类型。'."\n"
                                                .'● INT32'."\n"
                                                .'● INT64'."\n"
                                                .'● FLOAT'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING'."\n"
                                                .'● BOOLEAN'."\n"
                                                .'● TIMESTAMP',
                                            'type' => 'string',
                                            'example' => 'INT32',
                                        ],
                                        'Attributes' => [
                                            'title' => '字段属性列表，可选值包括：'."\n"
                                                .'● Partition-分区字段'."\n"
                                                .'● PrimaryKey-主键'."\n"
                                                .'● EventTime-事件时间',
                                            'description' => '字段属性列表，可选值包括：'."\n"
                                                .'● Partition-分区字段'."\n"
                                                .'● PrimaryKey-主键'."\n"
                                                .'● EventTime-事件时间',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '字段属性。',
                                                'type' => 'string',
                                                'example' => 'Partition',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BFD68AD5-398C-5AC4-A357-C7EA8DF33C26\\",\\n  \\"FeatureViewId\\": \\"3\\",\\n  \\"ProjectId\\": \\"3\\",\\n  \\"ProjectName\\": \\"project1\\",\\n  \\"FeatureEntityId\\": \\"4\\",\\n  \\"FeatureEntityName\\": \\"entity1\\",\\n  \\"JoinId\\": \\"user_id\\",\\n  \\"Name\\": \\"feature_view1\\",\\n  \\"Owner\\": \\"1231421342****\\",\\n  \\"Type\\": \\"Batch\\",\\n  \\"WriteMethod\\": \\"Custom\\",\\n  \\"RegisterTable\\": \\"table1\\",\\n  \\"RegisterDatasourceId\\": \\"4\\",\\n  \\"SyncOnlineTable\\": true,\\n  \\"TTL\\": 90,\\n  \\"Tags\\": [\\n    \\"tag1\\"\\n  ],\\n  \\"Config\\": \\"{}\\",\\n  \\"GmtSyncTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"LastSyncConfig\\": \\"{}\\",\\n  \\"Fields\\": [\\n    {\\n      \\"Name\\": \\"field1\\",\\n      \\"Type\\": \\"INT32\\",\\n      \\"Attributes\\": [\\n        \\"Partition\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取项目下指定特征视图的详细信息',
        ],
        'GetProjectFeatureEntityHotIds' => [
            'summary' => '获取项目下，指定特征实体指定的热点数据。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/featureentities/{FeatureEntityName}/hotids/{NextSeqNumber}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'NextSeqNumber',
                    'in' => 'path',
                    'schema' => [
                        'title' => '下次获取数据的序列号。',
                        'description' => '下次获取数据的序列号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'FeatureEntityName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征实体名称。',
                        'description' => '特征实体名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'feature_entity_1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FFD39C0F-DD8D-51B2-864E-2842206DB0E8',
                            ],
                            'HotIds' => [
                                'title' => '热点ID数据。',
                                'description' => '热点ID数据。',
                                'type' => 'string',
                                'example' => '1,2,3',
                            ],
                            'Count' => [
                                'title' => '热点ID 个数。',
                                'description' => '热点ID个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'NextSeqNumber' => [
                                'title' => '下次获取数据的序列。',
                                'description' => '下次获取数据的序列。',
                                'type' => 'string',
                                'example' => '5',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FFD39C0F-DD8D-51B2-864E-2842206DB0E8\\",\\n  \\"HotIds\\": \\"1,2,3\\",\\n  \\"Count\\": 3,\\n  \\"NextSeqNumber\\": \\"5\\"\\n}","type":"json"}]',
            'title' => '获取特征实体的热点数据',
        ],
        'GetProjectFeatureEntity' => [
            'summary' => '根据名称，获取项目下指定特征实体的详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/featureentities/{FeatureEntityName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'FeatureEntityName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征实体名称。',
                        'description' => '特征实体名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'feature_entity_1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '37D19490-AB69-567D-A852-407C94E510E9',
                            ],
                            'Name' => [
                                'description' => '特征实体名称。',
                                'type' => 'string',
                                'example' => 'feature_entity_1',
                            ],
                            'FeatureEntityId' => [
                                'description' => '特征实体ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ProjectName' => [
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project_1',
                            ],
                            'WorkspaceId' => [
                                'description' => '工作空间ID。',
                                'type' => 'string',
                                'example' => '34245',
                            ],
                            'JoinId' => [
                                'description' => '关联特征视图用的Join ID。',
                                'type' => 'string',
                                'example' => 'user_id',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"37D19490-AB69-567D-A852-407C94E510E9\\",\\n  \\"Name\\": \\"feature_entity_1\\",\\n  \\"FeatureEntityId\\": \\"3\\",\\n  \\"ProjectName\\": \\"project_1\\",\\n  \\"WorkspaceId\\": \\"34245\\",\\n  \\"JoinId\\": \\"user_id\\"\\n}","type":"json"}]',
            'title' => '获取项目下指定特征实体详细信息',
        ],
        'ChangeProjectFeatureEntityHotIdVersion' => [
            'summary' => '切换生效的热点数据的版本。',
            'path' => '/api/v1/instances/{InstanceId}/projects/{ProjectId}/featureentities/{FeatureEntityName}/action/changehotidversion',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'FeatureEntityName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征实体名称。',
                        'description' => '特征实体名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'feature_entity1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Version' => [
                                'title' => '热点数据版本。',
                                'description' => '热点数据版本。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '20221213',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CD377C31-372F-5CCD-ADB9-A31D6E118CA1',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CD377C31-372F-5CCD-ADB9-A31D6E118CA1\\"\\n}","type":"json"}]',
            'title' => '切换生效的热点数据的版本',
        ],
        'CreateDatasource' => [
            'summary' => '创建数据源。',
            'path' => '/api/v1/instances/{InstanceId}/datasources',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'featureStore-cn-test1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '数据源名称。',
                                'description' => '数据源名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'datasource1',
                            ],
                            'WorkspaceId' => [
                                'title' => '工作空间ID。',
                                'description' => '工作空间ID，可从接口[ListWorkspaces](~~449124~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '234',
                            ],
                            'Type' => [
                                'title' => '数据源类型。'."\n"
                                    .'● Hologres'."\n"
                                    .'● GraphCompute'."\n"
                                    .'● Redis'."\n"
                                    .'● MaxCompute',
                                'description' => '数据源类型，取值如下：'."\n"
                                    ."\n"
                                    .'● Hologres'."\n"
                                    ."\n"
                                    .'● GraphCompute'."\n"
                                    ."\n"
                                    .'● Redis'."\n"
                                    ."\n"
                                    .'● MaxCompute',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Hologres',
                            ],
                            'Uri' => [
                                'title' => '资源地址。',
                                'description' => '资源地址。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'igraph_instance1',
                            ],
                            'Config' => [
                                'title' => '资源配置。',
                                'description' => '资源配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"address": ""}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1C5B1511-8A5B-59C3-90AF-513F9210E882',
                            ],
                            'DatasourceId' => [
                                'title' => '数据源ID。',
                                'description' => '数据源ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C5B1511-8A5B-59C3-90AF-513F9210E882\\",\\n  \\"DatasourceId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建数据源',
        ],
        'ListDatasources' => [
            'summary' => '获取数据源列表。',
            'path' => '/api/v1/instances/{InstanceId}/datasources',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'featureStore-cn-XXXXXXX',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID，可从接口[ListWorkspaces](~~449124~~)获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '234',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据源类型。'."\n"
                            .'● Hologres'."\n"
                            .'● Redis'."\n"
                            .'● GraphCompute'."\n"
                            .'● MaxCompute',
                        'description' => '数据源类型，取值如下：'."\n"
                            ."\n"
                            .'● Hologres'."\n"
                            ."\n"
                            .'● Redis'."\n"
                            ."\n"
                            .'● GraphCompute'."\n"
                            ."\n"
                            .'● MaxCompute',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MaxCompute',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据源名称。',
                        'description' => '数据源名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'datasource1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码，起始值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。',
                        'description' => '排序方式，取值如下：'."\n"
                            ."\n"
                            .'- Asc - 升序排列。'."\n"
                            ."\n"
                            .'- Desc - 降序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Asc',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。',
                        'description' => '排序依据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtModifiedTime',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '44933189-493B-5C43-A5C6-11EEC2A43520',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Datasources' => [
                                'title' => '数据源列表。',
                                'description' => '数据源列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DatasourceId' => [
                                            'title' => '数据源ID。',
                                            'description' => '数据源ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => '数据源名称。',
                                            'description' => '数据源名称。',
                                            'type' => 'string',
                                            'example' => 'datasource1',
                                        ],
                                        'Type' => [
                                            'title' => '数据源类型。'."\n"
                                                .'● Hologres'."\n"
                                                .'● Redis'."\n"
                                                .'● GraphCompute'."\n"
                                                .'● MaxCompute',
                                            'description' => '数据源类型。'."\n"
                                                ."\n"
                                                .'● Hologres'."\n"
                                                ."\n"
                                                .'● Redis'."\n"
                                                ."\n"
                                                .'● GraphCompute'."\n"
                                                ."\n"
                                                .'● MaxCompute',
                                            'type' => 'string',
                                            'example' => 'Hologres',
                                        ],
                                        'Uri' => [
                                            'title' => '资源地址。',
                                            'description' => '资源地址。',
                                            'type' => 'string',
                                            'example' => 'igraph_instance1',
                                        ],
                                        'Config' => [
                                            'title' => '资源配置。',
                                            'description' => '资源配置。',
                                            'type' => 'string',
                                            'example' => '{"address": ""}',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '创建时间。',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '更新时间。',
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'WorkspaceId' => [
                                            'title' => '工作空间ID。',
                                            'description' => '工作空间ID。',
                                            'type' => 'string',
                                            'example' => '32324',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"44933189-493B-5C43-A5C6-11EEC2A43520\\",\\n  \\"TotalCount\\": 10,\\n  \\"Datasources\\": [\\n    {\\n      \\"DatasourceId\\": \\"3\\",\\n      \\"Name\\": \\"datasource1\\",\\n      \\"Type\\": \\"Hologres\\",\\n      \\"Uri\\": \\"igraph_instance1\\",\\n      \\"Config\\": \\"{\\\\\\"address\\\\\\": \\\\\\"\\\\\\"}\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"WorkspaceId\\": \\"32324\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据源列表',
        ],
        'GetDatasource' => [
            'summary' => '获取数据源详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/datasources/{DatasourceId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-********',
                    ],
                ],
                [
                    'name' => 'DatasourceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据源ID，可通过接口ListDatasources获取。',
                        'description' => '数据源ID，可通过接口ListDatasources获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'datasource1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AD7D9E95-BD31-53F2-B710-6C01866FCB05',
                            ],
                            'DatasourceId' => [
                                'title' => '数据源ID。',
                                'description' => '数据源ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '数据源名称。',
                                'description' => '数据源名称。',
                                'type' => 'string',
                                'example' => 'datasource1',
                            ],
                            'Type' => [
                                'title' => '数据源类型。'."\n"
                                    .'● Hologres'."\n"
                                    .'● Redis'."\n"
                                    .'● GraphCompute'."\n"
                                    .'● MaxCompute',
                                'description' => '数据源类型，包含以下可选值：'."\n"
                                    ."\n"
                                    .'● Hologres'."\n"
                                    ."\n"
                                    .'● Redis'."\n"
                                    ."\n"
                                    .'● GraphCompute'."\n"
                                    ."\n"
                                    .'● MaxCompute',
                                'type' => 'string',
                                'example' => 'Hologres',
                            ],
                            'Uri' => [
                                'title' => '资源地址。',
                                'description' => '资源地址。',
                                'type' => 'string',
                                'example' => 'igraph_instance1',
                            ],
                            'Config' => [
                                'title' => '资源配置。',
                                'description' => '资源配置。',
                                'type' => 'string',
                                'example' => '{"address": ""}',
                            ],
                            'WorkspaceId' => [
                                'title' => '工作空间ID。',
                                'description' => '工作空间ID。',
                                'type' => 'string',
                                'example' => '32244',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T11:26:09.036+08:00',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '更新时间。',
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T11:26:09.036+08:00',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AD7D9E95-BD31-53F2-B710-6C01866FCB05\\",\\n  \\"DatasourceId\\": \\"3\\",\\n  \\"Name\\": \\"datasource1\\",\\n  \\"Type\\": \\"Hologres\\",\\n  \\"Uri\\": \\"igraph_instance1\\",\\n  \\"Config\\": \\"{\\\\\\"address\\\\\\": \\\\\\"\\\\\\"}\\",\\n  \\"WorkspaceId\\": \\"32244\\",\\n  \\"GmtCreateTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2023-07-04T11:26:09.036+08:00\\"\\n}","type":"json"}]',
            'title' => '获取数据源详细信息',
        ],
        'UpdateDatasource' => [
            'summary' => '更新数据源信息，例如更新数据源名称。',
            'path' => '/api/v1/instances/{InstanceId}/datasources/{DatasourceId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'DatasourceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据源ID，可通过接口ListDatasources获取。',
                        'description' => '数据源ID，可通过接口ListDatasources获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '数据源名称。',
                                'description' => '数据源名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'datasource1',
                            ],
                            'Uri' => [
                                'title' => '资源地址。',
                                'description' => '资源地址。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'igraph_instance1',
                            ],
                            'Config' => [
                                'title' => '资源配置。',
                                'description' => '资源配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"address": ""}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C33E160C-BFCA-5719-B958-942850E949F6',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C33E160C-BFCA-5719-B958-942850E949F6\\"\\n}","type":"json"}]',
            'title' => '更新数据源',
        ],
        'ListDatasourceTables' => [
            'summary' => '获取指定数据源下的数据表的列表。',
            'path' => '/api/v1/instances/{InstanceId}/datasources/{DatasourceId}/tables',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '188514',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'DatasourceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据源ID。',
                        'description' => '数据源ID，可从接口ListDatasources获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '表名过滤。',
                        'description' => '表名过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'table1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C03B2680-AC9C-59CD-93C5-8142B92537FA',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Tables' => [
                                'title' => '数据表列表。',
                                'description' => '数据表列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据表表名。',
                                    'type' => 'string',
                                    'example' => 'table1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C03B2680-AC9C-59CD-93C5-8142B92537FA\\",\\n  \\"TotalCount\\": 10,\\n  \\"Tables\\": [\\n    \\"table1\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据源下的数据表列表',
        ],
        'GetDatasourceTable' => [
            'summary' => '获取数据源下指定表的详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/datasources/{DatasourceId}/tables/{TableName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '188515',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'DatasourceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据源ID。',
                        'description' => '数据源ID，可从接口ListDatasources获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据表名称。',
                        'description' => '数据表名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'table1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7B2F8C4-49C7-5CFA-8075-9D715A114873',
                            ],
                            'TableName' => [
                                'title' => '数据表名称。',
                                'description' => '数据表名称。',
                                'type' => 'string',
                                'example' => 'table1',
                            ],
                            'Fields' => [
                                'title' => '字段列表。',
                                'description' => '字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '字段名称。',
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'example' => 'field1',
                                        ],
                                        'Type' => [
                                            'title' => '字段类型。'."\n"
                                                .'● INT32'."\n"
                                                .'● INT64'."\n"
                                                .'● FLOAT'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING'."\n"
                                                .'● BOOLEAN'."\n"
                                                .'● TIMESTAMP',
                                            'description' => '字段类型，可选的值包括：'."\n"
                                                ."\n"
                                                .'● INT32'."\n"
                                                ."\n"
                                                .'● INT64'."\n"
                                                ."\n"
                                                .'● FLOAT'."\n"
                                                ."\n"
                                                .'● DOUBLE'."\n"
                                                ."\n"
                                                .'● STRING'."\n"
                                                ."\n"
                                                .'● BOOLEAN'."\n"
                                                ."\n"
                                                .'● TIMESTAMP',
                                            'type' => 'string',
                                            'example' => 'INT32',
                                        ],
                                        'Attributes' => [
                                            'title' => '字段属性列表，可能出现的值包括：'."\n"
                                                .'● Partition-分区字段'."\n"
                                                .'● EventTime-事件时间'."\n"
                                                .'● PrimaryKey-主键',
                                            'description' => '字段属性列表，可能出现的值包括：'."\n"
                                                ."\n"
                                                .'● Partition-分区字段'."\n"
                                                ."\n"
                                                .'● EventTime-事件时间'."\n"
                                                ."\n"
                                                .'● PrimaryKey-主键',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '字段属性。',
                                                'type' => 'string',
                                                'example' => 'Partition',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7B2F8C4-49C7-5CFA-8075-9D715A114873\\",\\n  \\"TableName\\": \\"table1\\",\\n  \\"Fields\\": [\\n    {\\n      \\"Name\\": \\"field1\\",\\n      \\"Type\\": \\"INT32\\",\\n      \\"Attributes\\": [\\n        \\"Partition\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据源下指定表的详细信息',
        ],
        'DeleteDatasource' => [
            'summary' => '删除指定数据源。',
            'path' => '/api/v1/instances/{InstanceId}/datasources/{DatasourceId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'DatasourceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据源ID，可通过接口ListDatasources获取。',
                        'description' => '数据源ID，可通过接口ListDatasources获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E2E1575F-29D1-5579-B649-B7883A793562',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E2E1575F-29D1-5579-B649-B7883A793562\\"\\n}","type":"json"}]',
            'title' => '删除数据源',
        ],
        'CreateFeatureEntity' => [
            'summary' => '创建特征实体。',
            'path' => '/api/v1/instances/{InstanceId}/featureentities',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '',
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'JoinId' => [
                                'title' => '关联特征视图用的join id。',
                                'description' => '关联特征视图用的Join Id。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'user_id ',
                            ],
                            'Name' => [
                                'title' => '特征实体名称。',
                                'description' => '特征实体名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'feature_entity_1',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID，可从接口ListInstances获取。',
                                'description' => '项目ID，可从接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0C89F5E1-7F24-5EEC-9F05-508A39278CC8',
                            ],
                            'FeatureEntityId' => [
                                'title' => '特征实体ID。',
                                'description' => '特征实体ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0C89F5E1-7F24-5EEC-9F05-508A39278CC8\\",\\n  \\"FeatureEntityId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建特征实体',
        ],
        'ListFeatureEntities' => [
            'summary' => '获取特征实体列表。',
            'path' => '/api/v1/instances/{InstanceId}/featureentities',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '特征实体名称过滤。',
                        'description' => '特征实体名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'feature_entity_1',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码，起始值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Owner',
                    'in' => 'query',
                    'schema' => [
                        'title' => '创建人。',
                        'description' => '创建人的阿里云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1231432*****',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。',
                        'description' => '排序依据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtModifiedTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。',
                        'description' => '排序方式，可选值包括：'."\n"
                            ."\n"
                            .'- Asc - 升序排序。'."\n"
                            ."\n"
                            .'- Desc - 降序排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                    ],
                ],
                [
                    'name' => 'FeatureEntityIds',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '特征实体ID过滤。',
                        'description' => '特征实体ID过滤。',
                        'type' => 'array',
                        'items' => [
                            'description' => '特征实体ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '4',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '37D19490-AB69-567D-A852-407C94E510E9',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'FeatureEntities' => [
                                'title' => '特征实体列表。',
                                'description' => '特征实体列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureEntityId' => [
                                            'title' => '特征实体ID。',
                                            'description' => '特征实体ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '创建时间。',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'JoinId' => [
                                            'title' => '关联特征视图用的join id。',
                                            'description' => '关联特征视图用的Join ID。',
                                            'type' => 'string',
                                            'example' => 'user_id',
                                        ],
                                        'Name' => [
                                            'title' => '特征实体名称。',
                                            'description' => '特征实体名称。',
                                            'type' => 'string',
                                            'example' => 'feature_entity_1',
                                        ],
                                        'Owner' => [
                                            'title' => '创建人。',
                                            'description' => '创建者的阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '123456789****',
                                        ],
                                        'ProjectId' => [
                                            'title' => '项目ID。',
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'ProjectName' => [
                                            'title' => '项目名称。',
                                            'description' => '项目名称。',
                                            'type' => 'string',
                                            'example' => 'project_1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"37D19490-AB69-567D-A852-407C94E510E9\\",\\n  \\"TotalCount\\": 10,\\n  \\"FeatureEntities\\": [\\n    {\\n      \\"FeatureEntityId\\": \\"3\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"JoinId\\": \\"user_id\\",\\n      \\"Name\\": \\"feature_entity_1\\",\\n      \\"Owner\\": \\"123456789****\\",\\n      \\"ProjectId\\": \\"3\\",\\n      \\"ProjectName\\": \\"project_1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征实体列表',
        ],
        'GetFeatureEntity' => [
            'summary' => '获取特征实体详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/featureentities/{FeatureEntityId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实力ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureEntityId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征实体ID，可从接口ListFeatureEntities获取。',
                        'description' => '特征实体ID，可从接口ListFeatureEntities获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E23EFF09-58AA-5420-934F-8453AE01548D',
                            ],
                            'Name' => [
                                'title' => '特征实体名称。',
                                'description' => '特征实体名称。',
                                'type' => 'string',
                                'example' => 'feature_entity_1',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ProjectName' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project_1',
                            ],
                            'JoinId' => [
                                'title' => '关联特征视图用的join id。',
                                'description' => '关联特征视图用的Join ID。',
                                'type' => 'string',
                                'example' => 'user_id',
                            ],
                            'Owner' => [
                                'title' => '创建人。',
                                'description' => '创建者的阿里云账号ID。',
                                'type' => 'string',
                                'example' => '123456789*****',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E23EFF09-58AA-5420-934F-8453AE01548D\\",\\n  \\"Name\\": \\"feature_entity_1\\",\\n  \\"ProjectId\\": \\"3\\",\\n  \\"ProjectName\\": \\"project_1\\",\\n  \\"JoinId\\": \\"user_id\\",\\n  \\"Owner\\": \\"123456789*****\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n}","type":"json"}]',
            'title' => '获取特征实体详细信息',
        ],
        'DeleteFeatureEntity' => [
            'summary' => '删除特征实体。',
            'path' => '/api/v1/instances/{InstanceId}/featureentities/{FeatureEntityId}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureEntityId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征实体ID，可从接口ListFeatureEntities获取。',
                        'description' => '特征实体ID，可从接口ListFeatureEntities获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E23EFF09-58AA-5420-934F-8453AE01548D',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E23EFF09-58AA-5420-934F-8453AE01548D\\"\\n}","type":"json"}]',
            'title' => '删除特征实体',
        ],
        'ListFeatureViewOnlineFeatures' => [
            'summary' => '获取特征视图下的在线特征数据。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews/{FeatureViewId}/onlinefeatures',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '225290',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureViewId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征视图ID。',
                        'description' => '特征视图ID，可通过接口ListFeatureViews获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'JoinIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'JoinId值列表。',
                        'description' => '查询的JoinId列表。',
                        'type' => 'array',
                        'items' => [
                            'title' => 'JoinId的值。',
                            'description' => 'JoinId的值。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'user1',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BF349686-C932-55B5-9B31-DAFA395C0E06',
                            ],
                            'OnlineFeatures' => [
                                'title' => '在线特征数据。',
                                'description' => '在线特征数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '在线特征数据。',
                                    'type' => 'string',
                                    'example' => '{"f1":123,"f2":"456"}',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BF349686-C932-55B5-9B31-DAFA395C0E06\\",\\n  \\"OnlineFeatures\\": [\\n    \\"{\\\\\\"f1\\\\\\":123,\\\\\\"f2\\\\\\":\\\\\\"456\\\\\\"}\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征视图下的在线特征数据',
        ],
        'WriteFeatureViewTable' => [
            'summary' => '向指定特征视图写表。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews/{FeatureViewId}/action/writetable',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureViewId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '特征视图ID，可从LIstFeatureViews获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Partitions' => [
                                'title' => '分区表。',
                                'description' => '分区表。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'string',
                                        'example' => '20220909',
                                        'description' => '分区日期。',
                                    ],
                                    'description' => '分区字段的映射。',
                                ],
                            ],
                            'UrlDatasource' => [
                                'title' => '文件数据源。',
                                'description' => '文件数据源。',
                                'type' => 'object',
                                'properties' => [
                                    'Path' => [
                                        'title' => '数据源路径。',
                                        'description' => '数据源路径。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'xxx.xxx.com/file.csv',
                                    ],
                                    'Delimiter' => [
                                        'title' => '文件分隔符。',
                                        'description' => '文件分隔符。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => ',',
                                    ],
                                    'OmitHeader' => [
                                        'title' => '文件中是否省略header。',
                                        'description' => '文件中是否省略header。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Mode' => [
                                'title' => '模式'."\n"
                                    .'● Overwrite-覆盖写'."\n"
                                    .'● Merge-合并',
                                'description' => '模式'."\n"
                                    ."\n"
                                    .'● Overwrite-覆盖写'."\n"
                                    ."\n"
                                    .'● Merge-合并',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Merge',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0C89F5E1-7F24-5EEC-9F05-508A39278CC8',
                            ],
                            'TaskId' => [
                                'title' => '任务ID。',
                                'description' => '任务ID。',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0C89F5E1-7F24-5EEC-9F05-508A39278CC8\\",\\n  \\"TaskId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '向指定特征视图写表',
        ],
        'PublishFeatureViewTable' => [
            'summary' => '将特征视图的离线数据发布/同步到线上。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews/{FeatureViewId}/action/publishtable',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureViewId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征视图ID，可从接口ListFeatureViews获取。',
                        'description' => '特征视图ID，可从接口ListFeatureViews获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Partitions' => [
                                'title' => '分区表。',
                                'description' => '分区表。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'string',
                                        'example' => '20220718',
                                        'description' => '分区日期。',
                                    ],
                                    'description' => '分区字段的映射。',
                                ],
                            ],
                            'Mode' => [
                                'title' => '模式'."\n"
                                    .'● Overwrite-覆盖写'."\n"
                                    .'● Merge-合并',
                                'description' => '模式，包括以下可选值：'."\n"
                                    ."\n"
                                    .'● Overwrite-覆盖写'."\n"
                                    ."\n"
                                    .'● Merge-合并',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Overwrite',
                            ],
                            'EventTime' => [
                                'title' => '事件时间。',
                                'description' => '事件时间。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'Config' => [
                                'title' => '配置。',
                                'description' => '配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{}',
                            ],
                            'OfflineToOnline' => [
                                'title' => '是否同步在线特征。',
                                'description' => '是否同步在线特征。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '627B5776-4D06-5A49-8A04-508AA39653F4',
                            ],
                            'TaskId' => [
                                'title' => '任务ID。',
                                'description' => '任务ID。',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"627B5776-4D06-5A49-8A04-508AA39653F4\\",\\n  \\"TaskId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '发布特征视图下表数据',
        ],
        'ListFeatureViews' => [
            'summary' => '获取特征视图列表。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '188634',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID，可通过接口ListProjects获取。',
                        'description' => '项目ID，可通过接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Owner',
                    'in' => 'query',
                    'schema' => [
                        'title' => '创建人过滤。',
                        'description' => '创建人过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1232143243242****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签过滤。',
                        'description' => '标签过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag1',
                    ],
                ],
                [
                    'name' => 'FeatureName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '特征名称。',
                        'description' => '特征名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'feature1',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。',
                        'description' => '排序依据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。',
                        'description' => '排序方式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                    ],
                ],
                [
                    'name' => 'FeatureViewIds',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '特征视图ID过滤。',
                        'description' => '特征视图ID过滤。',
                        'type' => 'array',
                        'items' => [
                            'description' => '特征视图ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '3',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '类型。'."\n"
                            .'● Batch-离线特征'."\n"
                            .'● Stream-实时特征',
                        'description' => '类型。'."\n"
                            ."\n"
                            .'● Batch-离线特征'."\n"
                            ."\n"
                            .'● Stream-实时特征',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Batch',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '特征视图名称过滤。',
                        'description' => '特征视图名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fv1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C03B2680-AC9C-59CD-93C5-8142B92537FA',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'FeatureViews' => [
                                'title' => '特征视图列表。',
                                'description' => '特征视图列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '',
                                    'description' => '',
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureViewId' => [
                                            'title' => '特征视图ID。',
                                            'description' => '特征视图ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'ProjectId' => [
                                            'title' => '项目ID。',
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'ProjectName' => [
                                            'title' => '项目名称。',
                                            'description' => '项目名称。',
                                            'type' => 'string',
                                            'example' => 'project1',
                                        ],
                                        'FeatureEntityName' => [
                                            'title' => '特征实体名称。',
                                            'description' => '特征实体名称。',
                                            'type' => 'string',
                                            'example' => 'featureEntity1',
                                        ],
                                        'Name' => [
                                            'title' => '特征视图名称。',
                                            'description' => '特征视图名称。',
                                            'type' => 'string',
                                            'example' => 'featureView1',
                                        ],
                                        'Owner' => [
                                            'title' => '创建人。',
                                            'description' => '创建人的阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '12321421412****',
                                        ],
                                        'Type' => [
                                            'title' => '类型。'."\n"
                                                .'● Batch-离线特征'."\n"
                                                .'● Stream-实时特征',
                                            'description' => '类型，可选值如下：'."\n"
                                                ."\n"
                                                .'● Batch-离线特征'."\n"
                                                ."\n"
                                                .'● Stream-实时特征',
                                            'type' => 'string',
                                            'example' => 'Batch',
                                        ],
                                        'WriteToFeatureDB' => [
                                            'title' => '是否写入在线托管存储。',
                                            'description' => '是否写入在线托管存储。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '创建时间。',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '更新时间。',
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'RegisterTable' => [
                                            'title' => '注册表名称。',
                                            'description' => '注册表名称。',
                                            'type' => 'string',
                                            'example' => 'table1',
                                        ],
                                        'RegisterDatasourceName' => [
                                            'title' => '注册表所在数据源。',
                                            'description' => '注册表所在数据源。',
                                            'type' => 'string',
                                            'example' => 'datasource1',
                                        ],
                                        'TTL' => [
                                            'title' => '特征生命周期（秒）。',
                                            'description' => '特征生命周期（秒）。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '90',
                                        ],
                                        'RegisterDatasourceId' => [
                                            'title' => '注册表所在数据源ID。',
                                            'description' => '注册表所在数据源ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C03B2680-AC9C-59CD-93C5-8142B92537FA\\",\\n  \\"TotalCount\\": 10,\\n  \\"FeatureViews\\": [\\n    {\\n      \\"FeatureViewId\\": \\"3\\",\\n      \\"ProjectId\\": \\"3\\",\\n      \\"ProjectName\\": \\"project1\\",\\n      \\"FeatureEntityName\\": \\"featureEntity1\\",\\n      \\"Name\\": \\"featureView1\\",\\n      \\"Owner\\": \\"12321421412****\\",\\n      \\"Type\\": \\"Batch\\",\\n      \\"WriteToFeatureDB\\": false,\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"RegisterTable\\": \\"table1\\",\\n      \\"RegisterDatasourceName\\": \\"datasource1\\",\\n      \\"TTL\\": 90,\\n      \\"RegisterDatasourceId\\": \\"4\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征视图列表',
        ],
        'ListFeatureViewRelationships' => [
            'summary' => '获取特征视图血缘关系。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews/{FeatureViewId}/relationships',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureViewId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征视图ID，可从接口ListFeatureViews获取。',
                        'description' => '特征视图ID，可从接口ListFeatureViews获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FBBE454-9BD1-5D8F-9129-D14DB7FAFE0B',
                            ],
                            'Relationships' => [
                                'title' => '血缘关系列表。',
                                'description' => '血缘关系列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureViewName' => [
                                            'title' => '特征视图名称。',
                                            'description' => '特征视图名称。',
                                            'type' => 'string',
                                            'example' => 'fv1',
                                        ],
                                        'ProjectName' => [
                                            'title' => '项目名称。',
                                            'description' => '项目名称。',
                                            'type' => 'string',
                                            'example' => 'project1',
                                        ],
                                        'Models' => [
                                            'title' => '模型特征列表。',
                                            'description' => '模型特征列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ModelId' => [
                                                        'title' => '模型特征ID。',
                                                        'description' => '模型特征ID。',
                                                        'type' => 'string',
                                                        'example' => '3',
                                                    ],
                                                    'ModelName' => [
                                                        'title' => '模型特征名称。',
                                                        'description' => '模型特征名称。',
                                                        'type' => 'string',
                                                        'example' => 'dbmtl',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FBBE454-9BD1-5D8F-9129-D14DB7FAFE0B\\",\\n  \\"Relationships\\": [\\n    {\\n      \\"FeatureViewName\\": \\"fv1\\",\\n      \\"ProjectName\\": \\"project1\\",\\n      \\"Models\\": [\\n        {\\n          \\"ModelId\\": \\"3\\",\\n          \\"ModelName\\": \\"dbmtl\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征视图血缘关系',
        ],
        'ListFeatureViewFieldRelationships' => [
            'summary' => '获取特征字段血缘关系。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews/{FeatureViewId}/fields/{FieldName}/relationships',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureViewId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征视图ID，可从接口ListFeatureViews获取。',
                        'description' => '特征视图ID，可从接口ListFeatureViews获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'FieldName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征字段名称。',
                        'description' => '特征字段名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BF349686-C932-55B5-9B31-DAFA395C0E06',
                            ],
                            'Relationships' => [
                                'title' => '血缘关系列表。',
                                'description' => '血缘关系列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureName' => [
                                            'title' => '特征视图名称。',
                                            'description' => '特征视图名称。',
                                            'type' => 'string',
                                            'example' => 'featureView1',
                                        ],
                                        'OnlineTableName' => [
                                            'title' => '在线表名称。',
                                            'description' => '在线表名称。',
                                            'type' => 'string',
                                            'example' => 'table1',
                                        ],
                                        'OfflineTableName' => [
                                            'title' => '离线表名称。',
                                            'description' => '离线表名称。',
                                            'type' => 'string',
                                            'example' => 'table2',
                                        ],
                                        'Models' => [
                                            'title' => '模型列表。',
                                            'description' => '模型列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ModelId' => [
                                                        'title' => '模型ID。',
                                                        'description' => '模型ID。',
                                                        'type' => 'string',
                                                        'example' => '3',
                                                    ],
                                                    'ModelName' => [
                                                        'title' => '模型名称。',
                                                        'description' => '模型名称。',
                                                        'type' => 'string',
                                                        'example' => 'dbmtl',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BF349686-C932-55B5-9B31-DAFA395C0E06\\",\\n  \\"Relationships\\": [\\n    {\\n      \\"FeatureName\\": \\"featureView1\\",\\n      \\"OnlineTableName\\": \\"table1\\",\\n      \\"OfflineTableName\\": \\"table2\\",\\n      \\"Models\\": [\\n        {\\n          \\"ModelId\\": \\"3\\",\\n          \\"ModelName\\": \\"dbmtl\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征字段血缘关系',
        ],
        'GetFeatureView' => [
            'summary' => '获取指定特征视图详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews/{FeatureViewId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '188637',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureViewId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征视图ID，可通过接口ListFeatureViews获取。',
                        'description' => '特征视图ID，可通过接口ListFeatureViews获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '72F15A8A-5A28-5B18-A0DE-0EABD7D3245A',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ProjectName' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project1',
                            ],
                            'FeatureEntityName' => [
                                'title' => '特征实体名称。',
                                'description' => '特征实体名称。',
                                'type' => 'string',
                                'example' => 'featureEntity1',
                            ],
                            'Name' => [
                                'title' => '特征视图名称。',
                                'description' => '特征视图名称。',
                                'type' => 'string',
                                'example' => 'featureView1',
                            ],
                            'Owner' => [
                                'title' => '创建人。',
                                'description' => '创建人的阿里云账号ID。',
                                'type' => 'string',
                                'example' => '12321421412****',
                            ],
                            'Type' => [
                                'title' => '类型。'."\n"
                                    .'● Batch-离线特征'."\n"
                                    .'● Stream-实时特征',
                                'description' => '类型。'."\n"
                                    ."\n"
                                    .'● Batch-离线特征'."\n"
                                    ."\n"
                                    .'● Stream-实时特征',
                                'type' => 'string',
                                'example' => 'Batch',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '更新时间。',
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'FeatureEntityId' => [
                                'title' => '特征实体ID。',
                                'description' => '特征实体ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'JoinId' => [
                                'title' => '特征实体的joinid。',
                                'description' => '特征实体的Join ID。',
                                'type' => 'string',
                                'example' => 'user_id',
                            ],
                            'WriteMethod' => [
                                'title' => '写入方式。'."\n"
                                    .'● ByReadyMadeTable-使用现成表注册'."\n"
                                    .'● Custom-自定义表结构',
                                'description' => '写入方式。'."\n"
                                    ."\n"
                                    .'● ByReadyMadeTable-使用现成表注册'."\n"
                                    ."\n"
                                    .'● Custom-自定义表结构',
                                'type' => 'string',
                                'example' => 'custom',
                            ],
                            'RegisterTable' => [
                                'title' => '注册表名称。',
                                'description' => '注册表名称。',
                                'type' => 'string',
                                'example' => 'table1',
                            ],
                            'RegisterDatasourceId' => [
                                'title' => '注册表所在数据源ID。',
                                'description' => '注册表所在数据源ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'RegisterDatasourceName' => [
                                'title' => '注册表所在数据源名称。',
                                'description' => '注册表所在数据源名称。',
                                'type' => 'string',
                                'example' => 'datasource1',
                            ],
                            'WriteToFeatureDB' => [
                                'title' => '是否写入在线托管存储。',
                                'description' => '是否写入在线托管存储。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'SyncOnlineTable' => [
                                'title' => '是否同步在线特征表。',
                                'description' => '是否同步在线特征表。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TTL' => [
                                'title' => '生命周期。',
                                'description' => '生命周期。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '90',
                            ],
                            'Tags' => [
                                'title' => '标签列表。',
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '特征视图的标签。',
                                    'type' => 'string',
                                    'example' => 'tag1',
                                ],
                            ],
                            'Config' => [
                                'title' => '配置。',
                                'description' => '配置。',
                                'type' => 'string',
                                'example' => '{"save_original_field":true}',
                            ],
                            'GmtSyncTime' => [
                                'title' => '同步时间。',
                                'description' => '同步时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'LastSyncConfig' => [
                                'title' => '最近一次的同步配置。',
                                'description' => '最近一次的同步配置。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'	"mode": "overwrite",'."\n"
                                    .'	"partitions": {'."\n"
                                    .'		"ds": {'."\n"
                                    .'			"value": "20230820"'."\n"
                                    .'		}'."\n"
                                    .'	},'."\n"
                                    .'	"event_time": "",'."\n"
                                    .'	"config": {},'."\n"
                                    .'	"offline_to_online": true'."\n"
                                    .'}',
                            ],
                            'Fields' => [
                                'title' => '字段列表。',
                                'description' => '字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '字段名称。',
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'example' => 'user',
                                        ],
                                        'Type' => [
                                            'title' => '字段类型。'."\n"
                                                .'● int'."\n"
                                                .'● string'."\n"
                                                .'● float',
                                            'description' => '字段类型。'."\n"
                                                ."\n"
                                                .'● int'."\n"
                                                ."\n"
                                                .'● string'."\n"
                                                ."\n"
                                                .'● float',
                                            'type' => 'string',
                                            'example' => 'int',
                                        ],
                                        'Attributes' => [
                                            'title' => '字段属性列表，可选值包括：'."\n"
                                                .'● Partition-分区字段'."\n"
                                                .'● PrimaryKey-主键'."\n"
                                                .'● EventTime-事件时间',
                                            'description' => '字段属性列表，可选值包括：'."\n"
                                                ."\n"
                                                .'● Partition-分区字段'."\n"
                                                ."\n"
                                                .'● PrimaryKey-主键'."\n"
                                                ."\n"
                                                .'● EventTime-事件时间',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '字段属性。',
                                                'type' => 'string',
                                                'example' => 'Partition',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'PublishTableScript' => [
                                'title' => '同步数据脚本',
                                'description' => '同步数据脚本。',
                                'type' => 'string',
                                'example' => 'from feature_store_py.fs_client import FeatureStoreClient\\nimport datetime\\nfrom feature_store_py.fs_datasource import MaxComputeDataSource\\nimport sys\\n\\ncur_day = args[\'dt\']\\nprint(\'cur_day = \', cur_day)\\n\\naccess_key_id = o.account.access_id\\naccess_key_secret = o.account.secret_access_key\\nfs = FeatureStoreClient(access_key_id=access_key_id, access_key_secret=access_key_secret, region=\'cn-beijing\')\\ncur_project_name = \'p1\'\\nproject = fs.get_project(cur_project_name)\\n\\nfeature_view_name = \'user_fea\'\\nbatch_feature_view = project.get_feature_view(feature_view_name)\\ntask = batch_feature_view.publish_table(partitions={\'ds\':cur_day}, mode=\'Overwrite\')\\ntask.wait()\\ntask.print_summary()\\n',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"72F15A8A-5A28-5B18-A0DE-0EABD7D3245A\\",\\n  \\"ProjectId\\": \\"3\\",\\n  \\"ProjectName\\": \\"project1\\",\\n  \\"FeatureEntityName\\": \\"featureEntity1\\",\\n  \\"Name\\": \\"featureView1\\",\\n  \\"Owner\\": \\"12321421412****\\",\\n  \\"Type\\": \\"Batch\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"FeatureEntityId\\": \\"3\\",\\n  \\"JoinId\\": \\"user_id\\",\\n  \\"WriteMethod\\": \\"custom\\",\\n  \\"RegisterTable\\": \\"table1\\",\\n  \\"RegisterDatasourceId\\": \\"4\\",\\n  \\"RegisterDatasourceName\\": \\"datasource1\\",\\n  \\"WriteToFeatureDB\\": false,\\n  \\"SyncOnlineTable\\": true,\\n  \\"TTL\\": 90,\\n  \\"Tags\\": [\\n    \\"tag1\\"\\n  ],\\n  \\"Config\\": \\"{\\\\\\"save_original_field\\\\\\":true}\\",\\n  \\"GmtSyncTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"LastSyncConfig\\": \\"{\\\\n\\\\t\\\\\\"mode\\\\\\": \\\\\\"overwrite\\\\\\",\\\\n\\\\t\\\\\\"partitions\\\\\\": {\\\\n\\\\t\\\\t\\\\\\"ds\\\\\\": {\\\\n\\\\t\\\\t\\\\t\\\\\\"value\\\\\\": \\\\\\"20230820\\\\\\"\\\\n\\\\t\\\\t}\\\\n\\\\t},\\\\n\\\\t\\\\\\"event_time\\\\\\": \\\\\\"\\\\\\",\\\\n\\\\t\\\\\\"config\\\\\\": {},\\\\n\\\\t\\\\\\"offline_to_online\\\\\\": true\\\\n}\\",\\n  \\"Fields\\": [\\n    {\\n      \\"Name\\": \\"user\\",\\n      \\"Type\\": \\"int\\",\\n      \\"Attributes\\": [\\n        \\"Partition\\"\\n      ]\\n    }\\n  ],\\n  \\"PublishTableScript\\": \\"from feature_store_py.fs_client import FeatureStoreClient\\\\\\\\nimport datetime\\\\\\\\nfrom feature_store_py.fs_datasource import MaxComputeDataSource\\\\\\\\nimport sys\\\\\\\\n\\\\\\\\ncur_day = args[\'dt\']\\\\\\\\nprint(\'cur_day = \', cur_day)\\\\\\\\n\\\\\\\\naccess_key_id = o.account.access_id\\\\\\\\naccess_key_secret = o.account.secret_access_key\\\\\\\\nfs = FeatureStoreClient(access_key_id=access_key_id, access_key_secret=access_key_secret, region=\'cn-beijing\')\\\\\\\\ncur_project_name = \'p1\'\\\\\\\\nproject = fs.get_project(cur_project_name)\\\\\\\\n\\\\\\\\nfeature_view_name = \'user_fea\'\\\\\\\\nbatch_feature_view = project.get_feature_view(feature_view_name)\\\\\\\\ntask = batch_feature_view.publish_table(partitions={\'ds\':cur_day}, mode=\'Overwrite\')\\\\\\\\ntask.wait()\\\\\\\\ntask.print_summary()\\\\\\\\n\\"\\n}","type":"json"}]',
            'title' => '获取特征视图详细信息',
        ],
        'DeleteFeatureView' => [
            'summary' => '删除特征视图。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews/{FeatureViewId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可通过接口ListInstances获取。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'FeatureViewId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征视图ID，可通过接口ListFeatureViews获取。',
                        'description' => '特征视图ID，可通过接口ListFeatureViews获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BF349686-C932-55B5-9B31-DAFA395C0E06',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BF349686-C932-55B5-9B31-DAFA395C0E06\\"\\n}","type":"json"}]',
            'title' => '删除特征视图',
        ],
        'CreateFeatureView' => [
            'summary' => '创建特征视图。',
            'path' => '/api/v1/instances/{InstanceId}/featureviews',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '188527',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'FeatureEntityId' => [
                                'title' => '特征实体ID。',
                                'description' => '特征实体ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '4',
                            ],
                            'Name' => [
                                'title' => '特征视图名称。',
                                'description' => '特征视图名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'FeatureView1',
                            ],
                            'Type' => [
                                'title' => '类型。'."\n"
                                    .'● Batch-离线特征'."\n"
                                    .'● Stream-实时特征',
                                'description' => '类型。'."\n"
                                    ."\n"
                                    .'● Batch-离线特征'."\n"
                                    ."\n"
                                    .'● Stream-实时特征',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Batch',
                            ],
                            'WriteMethod' => [
                                'title' => '写入方式。'."\n"
                                    .'● ByReadyMadeTable-使用现成表注册'."\n"
                                    .'● Custom-自定义表结构',
                                'description' => '写入方式。'."\n"
                                    ."\n"
                                    .'● ByReadyMadeTable-使用现成表注册'."\n"
                                    ."\n"
                                    .'● Custom-自定义表结构',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Custom',
                            ],
                            'WriteToFeatureDB' => [
                                'title' => '是否写入在线托管存储。如果项目在线数据源为托管存储，会自动设置为true。'."\n"
                                    .'默认：false',
                                'description' => '是否写入在线托管存储，取值如下：'."\n"
                                    ."\n"
                                    .'- true - 是'."\n"
                                    ."\n"
                                    .'- false - 否',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'RegisterTable' => [
                                'title' => '注册表名称。',
                                'description' => '注册表名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'table1',
                            ],
                            'RegisterDatasourceId' => [
                                'title' => '注册表所在数据源ID。',
                                'description' => '注册表所在数据源ID，可从接口ListDatasources获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '5',
                            ],
                            'SyncOnlineTable' => [
                                'title' => '是否同步在线特征表。',
                                'description' => '是否同步在线特征表，取值如下：'."\n"
                                    ."\n"
                                    .'- true - 是'."\n"
                                    ."\n"
                                    .'- false - 否',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'TTL' => [
                                'title' => '生命周期。',
                                'description' => '生命周期（单位：天）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '90',
                            ],
                            'Tags' => [
                                'title' => '标签列表。',
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '特征视图的标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'label1',
                                ],
                                'required' => false,
                            ],
                            'Config' => [
                                'title' => '特征视图配置。',
                                'description' => '特征视图配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"save_original_field":true}',
                            ],
                            'Fields' => [
                                'title' => '字段列表。',
                                'description' => '字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '字段名称。',
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'age',
                                        ],
                                        'Type' => [
                                            'title' => '字段类型。'."\n"
                                                .'● INT32'."\n"
                                                .'● INT64'."\n"
                                                .'● FLOAT'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING'."\n"
                                                .'● BOOLEAN'."\n"
                                                .'● TIMESTAMP',
                                            'description' => '字段类型。'."\n"
                                                ."\n"
                                                .'● INT32'."\n"
                                                ."\n"
                                                .'● INT64'."\n"
                                                ."\n"
                                                .'● FLOAT'."\n"
                                                ."\n"
                                                .'● DOUBLE'."\n"
                                                ."\n"
                                                .'● STRING'."\n"
                                                ."\n"
                                                .'● BOOLEAN'."\n"
                                                ."\n"
                                                .'● TIMESTAMP',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'INT32',
                                        ],
                                        'Attributes' => [
                                            'title' => '字段属性列表，可选值包括：'."\n"
                                                .'● Partition-分区字段'."\n"
                                                .'● PrimaryKey-主键'."\n"
                                                .'● EventTime-事件时间',
                                            'description' => '字段属性列表，可选值包括：'."\n"
                                                ."\n"
                                                .'● Partition-分区字段'."\n"
                                                ."\n"
                                                .'● PrimaryKey-主键'."\n"
                                                ."\n"
                                                .'● EventTime-事件时间',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '字段属性。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'Partition',
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0C89F5E1-7F24-5EEC-9F05-508A39278CC8',
                            ],
                            'FeatureViewId' => [
                                'title' => '特征视图ID。',
                                'description' => '特征视图ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0C89F5E1-7F24-5EEC-9F05-508A39278CC8\\",\\n  \\"FeatureViewId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建特征视图',
        ],
        'UpdateLabelTable' => [
            'summary' => '更新label表信息，例如更新表名。',
            'path' => '/api/v1/instances/{InstanceId}/labeltables/{LabelTableId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'featurestore-test1',
                    ],
                ],
                [
                    'name' => 'LabelTableId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Label表ID。',
                        'description' => 'Label表ID，可从接口ListLabelTables获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => 'label表名称。',
                                'description' => 'label表名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rec_test',
                            ],
                            'DatasourceId' => [
                                'title' => 'label表所在数据源ID。',
                                'description' => 'label表所在数据源ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Fields' => [
                                'title' => '字段列表。',
                                'description' => '字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '字段名称。',
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'lat',
                                        ],
                                        'Type' => [
                                            'title' => '字段类型。',
                                            'description' => '字段类型。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'DOUBLE',
                                            'enum' => [
                                                'DOUBLE',
                                                'INT32',
                                                'INT64',
                                                'FLOAT',
                                                'STRING',
                                                'BOOLEAN',
                                                'TIMESTAMP',
                                            ],
                                        ],
                                        'Attributes' => [
                                            'title' => '字段属性列表。',
                                            'description' => '字段属性列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '字段属性。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'Partition',
                                                'enum' => [
                                                    'Partition',
                                                    'FeatureField',
                                                    'FeatureGenerationReserveField',
                                                    'EventTime',
                                                    'LabelField',
                                                ],
                                            ],
                                            'required' => true,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\"\\n}","type":"json"}]',
            'title' => '更新label表',
        ],
        'ListLabelTables' => [
            'summary' => '获取label表列表。',
            'path' => '/api/v1/instances/{InstanceId}/labeltables',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'featurestore-test*',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'project1',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。'."\n",
                        'description' => '页大小，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码，起始值为1，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'label表名称。',
                        'description' => 'label表名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'label_table1',
                    ],
                ],
                [
                    'name' => 'Owner',
                    'in' => 'query',
                    'schema' => [
                        'title' => '创建人。',
                        'description' => '创建人的阿里云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1231432432****',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。',
                        'description' => '排序依据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtModifiedTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。',
                        'description' => '排序方式。'."\n"
                            ."\n"
                            .'- Asc - 升序排序。'."\n"
                            ."\n"
                            .'- Desc - 降序排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Asc',
                    ],
                ],
                [
                    'name' => 'LabelTableIds',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => 'label表ID过滤。',
                        'description' => 'Label表ID过滤。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'Label表ID，可从接口ListLabelTables获取。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '3',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '21',
                                'default' => '10',
                            ],
                            'LabelTables' => [
                                'title' => 'Label表列表。',
                                'description' => 'Label表列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LabelTableId' => [
                                            'title' => 'Label表ID。',
                                            'description' => 'Label表ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'ProjectId' => [
                                            'title' => '项目ID。',
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'ProjectName' => [
                                            'title' => '项目名称。',
                                            'description' => '项目名称。',
                                            'type' => 'string',
                                            'example' => 'project1',
                                        ],
                                        'DatasourceId' => [
                                            'title' => '数据源ID。',
                                            'description' => '数据源ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => 'label表名称。',
                                            'description' => 'label表名称。',
                                            'type' => 'string',
                                            'example' => 'label_table1',
                                        ],
                                        'DatasourceName' => [
                                            'title' => '数据源名称。',
                                            'description' => '数据源名称。',
                                            'type' => 'string',
                                            'example' => 'datasource1',
                                        ],
                                        'Owner' => [
                                            'title' => '创建人',
                                            'description' => '创建人的阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '123214213214',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '创建时间。',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '更新时间。',
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"TotalCount\\": 21,\\n  \\"LabelTables\\": [\\n    {\\n      \\"LabelTableId\\": \\"3\\",\\n      \\"ProjectId\\": \\"1\\",\\n      \\"ProjectName\\": \\"project1\\",\\n      \\"DatasourceId\\": \\"3\\",\\n      \\"Name\\": \\"label_table1\\",\\n      \\"DatasourceName\\": \\"datasource1\\",\\n      \\"Owner\\": \\"123214213214\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取label表列表',
        ],
        'GetLabelTable' => [
            'summary' => '获取label表详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/labeltables/{LabelTableId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'LabelTableId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Label表ID。',
                        'description' => 'Label表ID，可从接口ListLabelTables获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'ProjectName' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project1',
                            ],
                            'DatasourceId' => [
                                'title' => '数据源ID。',
                                'description' => '数据源ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Name' => [
                                'title' => 'label表名称。',
                                'description' => 'Label表名称。',
                                'type' => 'string',
                                'example' => 'label_table1',
                            ],
                            'DatasourceName' => [
                                'title' => '数据源名称。',
                                'description' => '数据源名称。',
                                'type' => 'string',
                                'example' => 'datasource1',
                            ],
                            'Owner' => [
                                'title' => '创建人。',
                                'description' => '创建人的阿里云账号ID。',
                                'type' => 'string',
                                'example' => '12321312*****',
                            ],
                            'RelatedModelFeatures' => [
                                'description' => '关联模型特征名称列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '关联模型特征名称。',
                                    'type' => 'string',
                                    'example' => 'rank_v1',
                                ],
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '更新时间。',
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'Fields' => [
                                'title' => '字段列表。',
                                'description' => '字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '字段名称。',
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'example' => 'field1',
                                        ],
                                        'Type' => [
                                            'title' => '字段类型。',
                                            'description' => '字段类型。',
                                            'type' => 'string',
                                            'example' => 'INT32',
                                            'enum' => [
                                                'INT32',
                                                'INT64',
                                                'FLOAT',
                                                'DOUBLE',
                                                'STRING',
                                                'BOOLEAN',
                                                'TIMESTAMP',
                                            ],
                                        ],
                                        'Attributes' => [
                                            'title' => '字段属性列表。',
                                            'description' => '字段属性列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '字段属性。',
                                                'type' => 'string',
                                                'example' => 'Partition',
                                                'enum' => [
                                                    'Partition',
                                                    'FeatureField',
                                                    'FeatureGenerationReserveField',
                                                    'EventTime',
                                                    'LabelField',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"ProjectId\\": \\"1\\",\\n  \\"ProjectName\\": \\"project1\\",\\n  \\"DatasourceId\\": \\"1\\",\\n  \\"Name\\": \\"label_table1\\",\\n  \\"DatasourceName\\": \\"datasource1\\",\\n  \\"Owner\\": \\"12321312*****\\",\\n  \\"RelatedModelFeatures\\": [\\n    \\"rank_v1\\"\\n  ],\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"Fields\\": [\\n    {\\n      \\"Name\\": \\"field1\\",\\n      \\"Type\\": \\"INT32\\",\\n      \\"Attributes\\": [\\n        \\"Partition\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取label表详细信息',
        ],
        'DeleteLabelTable' => [
            'summary' => '删除label表。',
            'path' => '/api/v1/instances/{InstanceId}/labeltables/{LabelTableId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'LabelTableId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Label表ID，可从接口ListLabelTables获取。',
                        'description' => 'Label表ID，可从接口ListLabelTables获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FFD39C0F-DD8D-51B2-864E-2842206DB0E8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FFD39C0F-DD8D-51B2-864E-2842206DB0E8\\"\\n}","type":"json"}]',
            'title' => '删除label表',
        ],
        'CreateLabelTable' => [
            'summary' => '创建label表。',
            'path' => '/api/v1/instances/{InstanceId}/labeltables',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'featurestore-test1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID，可从接口ListProjects获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => 'label表名称。',
                                'description' => 'Label表名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rec_test',
                            ],
                            'DatasourceId' => [
                                'title' => 'label表所在数据源ID。',
                                'description' => 'Label表所在数据源ID，可从接口ListDatasources获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Fields' => [
                                'title' => '字段列表。',
                                'description' => '字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '字段名称。',
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'lat',
                                        ],
                                        'Type' => [
                                            'title' => '字段类型。',
                                            'description' => '字段类型。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'INT32',
                                            'enum' => [
                                                'INT32',
                                                'INT64',
                                                'FLOAT',
                                                'DOUBLE',
                                                'STRING',
                                                'BOOLEAN',
                                                'TIMESTAMP',
                                            ],
                                        ],
                                        'Attributes' => [
                                            'title' => '字段属性列表，可选值包括：'."\n"
                                                .'● Partition-分区字段'."\n"
                                                .'● FeatureField-特征字段。'."\n"
                                                .'● FeatureGenerationReserveField-FG保留字段'."\n"
                                                .'● EventTime-事件时间'."\n"
                                                .'● LabelField-Label字段。',
                                            'description' => '字段属性列表，可选值包括：'."\n"
                                                ."\n"
                                                .'● Partition-分区字段。'."\n"
                                                ."\n"
                                                .'● FeatureField-特征字段。'."\n"
                                                ."\n"
                                                .'● FeatureGenerationReserveField-FG保留字段。'."\n"
                                                ."\n"
                                                .'● EventTime-事件时间。'."\n"
                                                ."\n"
                                                .'● LabelField-Label字段。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '字段属性。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'Partition',
                                                'enum' => [
                                                    'Partition',
                                                    'FeatureField',
                                                    'FeatureGenerationReserveField',
                                                    'EventTime',
                                                    'LabelField',
                                                ],
                                            ],
                                            'required' => true,
                                        ],
                                    ],
                                    'required' => true,
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FA90B3B-F30A-5C9D-A9FD-8114F8868062',
                            ],
                            'LabelTableId' => [
                                'title' => 'label表ID。',
                                'description' => 'Label表ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FA90B3B-F30A-5C9D-A9FD-8114F8868062\\",\\n  \\"LabelTableId\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '创建label表',
        ],
        'ListModelFeatures' => [
            'summary' => '获取模型特征列表。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，起始值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。'."\n"
                            .'● GmtCreateTime-创建时间。'."\n"
                            .'● GmtModifiedTime-更新时间。',
                        'description' => '排序依据。'."\n"
                            ."\n"
                            .'● GmtCreateTime-创建时间。'."\n"
                            ."\n"
                            .'● GmtModifiedTime-更新时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。'."\n"
                            .'● ASC-升序。'."\n"
                            .'● DESC-降序。',
                        'description' => '排序方式。'."\n"
                            ."\n"
                            .'● ASC-升序。'."\n"
                            ."\n"
                            .'● DESC-降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模型特征名称过滤。',
                        'description' => '模型特征名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'model_feature1',
                    ],
                ],
                [
                    'name' => 'Owner',
                    'in' => 'query',
                    'schema' => [
                        'title' => '创建人。',
                        'description' => '创建人的阿里云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12323143****',
                    ],
                ],
                [
                    'name' => 'ModelFeatureIds',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '模型特征ID过滤。',
                        'description' => '模型特征ID过滤。',
                        'type' => 'array',
                        'items' => [
                            'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '3',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2CA11923-2A3D-5E5A-8314-E699D2DD15DE',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4',
                            ],
                            'ModelFeatures' => [
                                'description' => '模型特征列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '模型特征。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ModelFeatureId' => [
                                            'title' => '模型特征ID。',
                                            'description' => '模型特征ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'ProjectId' => [
                                            'title' => '项目ID。',
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => '5',
                                        ],
                                        'ProjectName' => [
                                            'title' => '项目名称。',
                                            'description' => '项目名称。',
                                            'type' => 'string',
                                            'example' => 'project1',
                                        ],
                                        'Name' => [
                                            'title' => '模型特征名称。',
                                            'description' => '模型特征名称。',
                                            'type' => 'string',
                                            'example' => 'model_feature1',
                                        ],
                                        'Owner' => [
                                            'title' => '创建人。',
                                            'description' => '创建人的阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '1231243253****',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '创建时间。',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-04T14:46:22.227+08:00',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '更新时间。',
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-04T14:46:22.227+08:00',
                                        ],
                                        'LabelTableName' => [
                                            'title' => 'label表名称。',
                                            'description' => 'Label表名称。',
                                            'type' => 'string',
                                            'example' => 'label_table_1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2CA11923-2A3D-5E5A-8314-E699D2DD15DE\\",\\n  \\"TotalCount\\": 4,\\n  \\"ModelFeatures\\": [\\n    {\\n      \\"ModelFeatureId\\": \\"3\\",\\n      \\"ProjectId\\": \\"5\\",\\n      \\"ProjectName\\": \\"project1\\",\\n      \\"Name\\": \\"model_feature1\\",\\n      \\"Owner\\": \\"1231243253****\\",\\n      \\"GmtCreateTime\\": \\"2023-07-04T14:46:22.227+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2023-07-04T14:46:22.227+08:00\\",\\n      \\"LabelTableName\\": \\"label_table_1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取模型特征列表',
        ],
        'GetModelFeature' => [
            'summary' => '获取模型特征详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0C89F5E1-7F24-5EEC-9F05-508A39278CC8',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => '5',
                            ],
                            'ProjectName' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project1',
                            ],
                            'Name' => [
                                'title' => '模型特征名称。',
                                'description' => '模型特征名称。',
                                'type' => 'string',
                                'example' => 'model_feature1',
                            ],
                            'Owner' => [
                                'title' => '创建人。',
                                'description' => '创建人的阿里云账号ID。',
                                'type' => 'string',
                                'example' => '1231243253****',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T14:46:22.227+08:00',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '更新时间。',
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T14:46:22.227+08:00',
                            ],
                            'LabelTableId' => [
                                'title' => 'Label表ID。',
                                'description' => 'Label表ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'LabelTableName' => [
                                'title' => 'Label表名称。',
                                'description' => 'Label表名称。',
                                'type' => 'string',
                                'example' => 'label_table1',
                            ],
                            'TrainingSetTable' => [
                                'title' => '导出训练集表的名称。',
                                'description' => '导出训练集表的名称。',
                                'type' => 'string',
                                'example' => 'table1',
                            ],
                            'TrainingSetFGTable' => [
                                'title' => '导出训练集FG表的名称。',
                                'description' => '导出训练集FG表的名称。',
                                'type' => 'string',
                                'example' => 'table2',
                            ],
                            'Features' => [
                                'title' => '特征列表。',
                                'description' => '特征列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '特征。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureViewId' => [
                                            'title' => '特征视图ID。',
                                            'description' => '特征视图ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'FeatureViewName' => [
                                            'title' => '特征视图名称。',
                                            'description' => '特征视图名称。',
                                            'type' => 'string',
                                            'example' => 'feature_view_1',
                                        ],
                                        'Name' => [
                                            'title' => '特征名称。',
                                            'description' => '特征名称。',
                                            'type' => 'string',
                                            'example' => 'feature1',
                                        ],
                                        'Type' => [
                                            'title' => '特征类型。'."\n"
                                                .'● INT32'."\n"
                                                .'● INT64'."\n"
                                                .'● FLOAT'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING'."\n"
                                                .'● BOOLEAN'."\n"
                                                .'● TIMESTAMP',
                                            'description' => '特征类型。'."\n"
                                                ."\n"
                                                .'● INT32'."\n"
                                                ."\n"
                                                .'● INT64'."\n"
                                                ."\n"
                                                .'● FLOAT'."\n"
                                                ."\n"
                                                .'● DOUBLE'."\n"
                                                ."\n"
                                                .'● STRING'."\n"
                                                ."\n"
                                                .'● BOOLEAN'."\n"
                                                ."\n"
                                                .'● TIMESTAMP',
                                            'type' => 'string',
                                            'example' => 'INT32',
                                        ],
                                        'AliasName' => [
                                            'title' => '特征别名。',
                                            'description' => '特征别名。',
                                            'type' => 'string',
                                            'example' => 'feature2',
                                        ],
                                    ],
                                ],
                            ],
                            'Relations' => [
                                'title' => '特征关系。',
                                'description' => '特征关系。',
                                'type' => 'object',
                                'properties' => [
                                    'Domains' => [
                                        'title' => 'Domain列表。',
                                        'description' => 'Domain列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => 'Domain ID。',
                                                    'description' => 'Domain ID。',
                                                    'type' => 'string',
                                                    'example' => '3',
                                                ],
                                                'Name' => [
                                                    'title' => 'Domain名称。',
                                                    'description' => 'Domain名称。',
                                                    'type' => 'string',
                                                    'example' => 'feature_entity_1',
                                                ],
                                                'DomainType' => [
                                                    'title' => 'Domain类型。'."\n"
                                                        .'● FeatureEntity-特征实体'."\n"
                                                        .'● FeatureView-特征视图'."\n"
                                                        .'● ModelFeature-模型特征',
                                                    'description' => 'Domain类型。'."\n"
                                                        ."\n"
                                                        .'● FeatureEntity-特征实体'."\n"
                                                        ."\n"
                                                        .'● FeatureView-特征视图'."\n"
                                                        ."\n"
                                                        .'● ModelFeature-模型特征',
                                                    'type' => 'string',
                                                    'example' => 'FeatureEntity',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Links' => [
                                        'title' => '特征关系连接信息列表。',
                                        'description' => '特征关系连接信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'From' => [
                                                    'title' => '连接头ID。',
                                                    'description' => '连接头ID。',
                                                    'type' => 'string',
                                                    'example' => 'model_feature_2',
                                                ],
                                                'To' => [
                                                    'title' => '连接尾ID。',
                                                    'description' => '连接尾ID。',
                                                    'type' => 'string',
                                                    'example' => 'feature_entity_3',
                                                ],
                                                'Link' => [
                                                    'title' => '连接依赖字段。',
                                                    'description' => '连接依赖字段。',
                                                    'type' => 'string',
                                                    'example' => 'user_id',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ExportTrainingSetTableScript' => [
                                'title' => '导出training set表脚本',
                                'description' => '导出训练样本表脚本。',
                                'type' => 'string',
                                'example' => 'from feature_store_py.fs_client import FeatureStoreClient\\nfrom feature_store_py.fs_project import FeatureStoreProject\\nfrom feature_store_py.fs_datasource import LabelInput, MaxComputeDataSource, TrainingSetOutput\\nfrom feature_store_py.fs_features import FeatureSelector\\nfrom feature_store_py.fs_config import LabelInputConfig, PartitionConfig, FeatureViewConfig\\nfrom feature_store_py.fs_config import TrainSetOutputConfig, EASDeployConfig\\nimport datetime\\nimport sys\\n\\ncur_day = args[\'dt\']\\nprint(\'cur_day = \', cur_day)\\noffset = datetime.timedelta(days=-1)\\npre_day = (datetime.datetime.strptime(cur_day, \'%Y%m%d\') + offset).strftime(\'%Y%m%d\')\\nprint(\'pre_day = \', pre_day)\\n\\n\\naccess_key_id = o.account.access_id\\naccess_key_secret = o.account.secret_access_key\\nfs = FeatureStoreClient(access_key_id=access_key_id, access_key_secret=access_key_secret, region=\'cn-beijing\')\\ncur_project_name = \'p1\'\\nproject = fs.get_project(cur_project_name)\\n\\nlabel_partitions = PartitionConfig(name = \'ds\', value = cur_day)\\nlabel_input_config = LabelInputConfig(partition_config=label_partitions)\\n\\nfeature_view_1_partitions = PartitionConfig(name = \'ds\', value = pre_day)\\nfeature_view_1_config = FeatureViewConfig(name = \'user_fea\',\\npartition_config=feature_view_1_partitions)\\n\\nfeature_view_2_partitions = PartitionConfig(name = \'ds\', value = pre_day)\\nfeature_view_2_config = FeatureViewConfig(name = \'seq_fea\',\\npartition_config=feature_view_2_partitions)\\n\\nfeature_view_3_partitions = PartitionConfig(name = \'ds\', value = pre_day)\\nfeature_view_3_config = FeatureViewConfig(name = \'item_fea\',\\npartition_config=feature_view_3_partitions)\\n\\nfeature_view_config_list = [feature_view_1_config,feature_view_2_config,feature_view_3_config]\\ntrain_set_partitions = PartitionConfig(name = \'ds\', value = cur_day)\\ntrain_set_output_config = TrainSetOutputConfig(partition_config=train_set_partitions)\\n\\n\\nmodel_name = \'rank_v1\'\\ncur_model = project.get_model(model_name)\\ntask = cur_model.export_train_set(label_input_config, feature_view_config_list, train_set_output_config)\\ntask.wait()\\nprint(\'task_summary = \', task.task_summary)\\n',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0C89F5E1-7F24-5EEC-9F05-508A39278CC8\\",\\n  \\"ProjectId\\": \\"5\\",\\n  \\"ProjectName\\": \\"project1\\",\\n  \\"Name\\": \\"model_feature1\\",\\n  \\"Owner\\": \\"1231243253****\\",\\n  \\"GmtCreateTime\\": \\"2023-07-04T14:46:22.227+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2023-07-04T14:46:22.227+08:00\\",\\n  \\"LabelTableId\\": \\"3\\",\\n  \\"LabelTableName\\": \\"label_table1\\",\\n  \\"TrainingSetTable\\": \\"table1\\",\\n  \\"TrainingSetFGTable\\": \\"table2\\",\\n  \\"Features\\": [\\n    {\\n      \\"FeatureViewId\\": \\"3\\",\\n      \\"FeatureViewName\\": \\"feature_view_1\\",\\n      \\"Name\\": \\"feature1\\",\\n      \\"Type\\": \\"INT32\\",\\n      \\"AliasName\\": \\"feature2\\"\\n    }\\n  ],\\n  \\"Relations\\": {\\n    \\"Domains\\": [\\n      {\\n        \\"Id\\": \\"3\\",\\n        \\"Name\\": \\"feature_entity_1\\",\\n        \\"DomainType\\": \\"FeatureEntity\\"\\n      }\\n    ],\\n    \\"Links\\": [\\n      {\\n        \\"From\\": \\"model_feature_2\\",\\n        \\"To\\": \\"feature_entity_3\\",\\n        \\"Link\\": \\"user_id\\"\\n      }\\n    ]\\n  },\\n  \\"ExportTrainingSetTableScript\\": \\"from feature_store_py.fs_client import FeatureStoreClient\\\\\\\\nfrom feature_store_py.fs_project import FeatureStoreProject\\\\\\\\nfrom feature_store_py.fs_datasource import LabelInput, MaxComputeDataSource, TrainingSetOutput\\\\\\\\nfrom feature_store_py.fs_features import FeatureSelector\\\\\\\\nfrom feature_store_py.fs_config import LabelInputConfig, PartitionConfig, FeatureViewConfig\\\\\\\\nfrom feature_store_py.fs_config import TrainSetOutputConfig, EASDeployConfig\\\\\\\\nimport datetime\\\\\\\\nimport sys\\\\\\\\n\\\\\\\\ncur_day = args[\'dt\']\\\\\\\\nprint(\'cur_day = \', cur_day)\\\\\\\\noffset = datetime.timedelta(days=-1)\\\\\\\\npre_day = (datetime.datetime.strptime(cur_day, \'%Y%m%d\') + offset).strftime(\'%Y%m%d\')\\\\\\\\nprint(\'pre_day = \', pre_day)\\\\\\\\n\\\\\\\\n\\\\\\\\naccess_key_id = o.account.access_id\\\\\\\\naccess_key_secret = o.account.secret_access_key\\\\\\\\nfs = FeatureStoreClient(access_key_id=access_key_id, access_key_secret=access_key_secret, region=\'cn-beijing\')\\\\\\\\ncur_project_name = \'p1\'\\\\\\\\nproject = fs.get_project(cur_project_name)\\\\\\\\n\\\\\\\\nlabel_partitions = PartitionConfig(name = \'ds\', value = cur_day)\\\\\\\\nlabel_input_config = LabelInputConfig(partition_config=label_partitions)\\\\\\\\n\\\\\\\\nfeature_view_1_partitions = PartitionConfig(name = \'ds\', value = pre_day)\\\\\\\\nfeature_view_1_config = FeatureViewConfig(name = \'user_fea\',\\\\\\\\npartition_config=feature_view_1_partitions)\\\\\\\\n\\\\\\\\nfeature_view_2_partitions = PartitionConfig(name = \'ds\', value = pre_day)\\\\\\\\nfeature_view_2_config = FeatureViewConfig(name = \'seq_fea\',\\\\\\\\npartition_config=feature_view_2_partitions)\\\\\\\\n\\\\\\\\nfeature_view_3_partitions = PartitionConfig(name = \'ds\', value = pre_day)\\\\\\\\nfeature_view_3_config = FeatureViewConfig(name = \'item_fea\',\\\\\\\\npartition_config=feature_view_3_partitions)\\\\\\\\n\\\\\\\\nfeature_view_config_list = [feature_view_1_config,feature_view_2_config,feature_view_3_config]\\\\\\\\ntrain_set_partitions = PartitionConfig(name = \'ds\', value = cur_day)\\\\\\\\ntrain_set_output_config = TrainSetOutputConfig(partition_config=train_set_partitions)\\\\\\\\n\\\\\\\\n\\\\\\\\nmodel_name = \'rank_v1\'\\\\\\\\ncur_model = project.get_model(model_name)\\\\\\\\ntask = cur_model.export_train_set(label_input_config, feature_view_config_list, train_set_output_config)\\\\\\\\ntask.wait()\\\\\\\\nprint(\'task_summary = \', task.task_summary)\\\\\\\\n\\"\\n}","type":"json"}]',
            'title' => '获取模型特征详细信息',
        ],
        'ExportModelFeatureTrainingSetTable' => [
            'summary' => '导出指定模型特征的训练集表。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}/action/exporttrainingsettable',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '189386',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'LabelInputConfig' => [
                                'title' => 'Label输入配置。',
                                'description' => 'Label输入配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Partitions' => [
                                        'title' => '分区列表。',
                                        'description' => '分区列表。',
                                        'type' => 'object',
                                        'required' => false,
                                        'additionalProperties' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => '20230101',
                                                'description' => '分区日期',
                                            ],
                                            'description' => '分区字段的映射。',
                                        ],
                                    ],
                                    'EventTime' => [
                                        'title' => '事件时间。',
                                        'description' => '事件时间。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '2022-07-02 00:00:00',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'FeatureViewConfig' => [
                                'description' => '特征视图配置映射表。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Partitions' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Value' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'StartValue' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'EndValue' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'description' => '分区字段的映射。',
                                            ],
                                            'description' => '分区列表。',
                                        ],
                                        'EventTime' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Equal' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                    ],
                                    'description' => '特征视图配置。',
                                ],
                            ],
                            'TrainingSetConfig' => [
                                'title' => '训练集配置。',
                                'description' => '训练集配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Partitions' => [
                                        'title' => '分区列表。',
                                        'description' => '分区列表。',
                                        'type' => 'object',
                                        'required' => false,
                                        'additionalProperties' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => '分区日期。',
                                                'example' => '20230101',
                                            ],
                                            'description' => '分区字段的映射。',
                                        ],
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '请求ID。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FBBE454-9BD1-5D8F-9129-D14DB7FAFE0B',
                            ],
                            'TaskId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FBBE454-9BD1-5D8F-9129-D14DB7FAFE0B\\",\\n  \\"TaskId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '导出模型特征的训练集表',
        ],
        'DeleteModelFeature' => [
            'summary' => '删除指定模型特征。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8\\"\\n}","type":"json"}]',
            'title' => '删除模型特征',
        ],
        'CreateModelFeature' => [
            'summary' => '创建模型特征。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '189325',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'ProjectId' => [
                                'title' => '项目ID，可从接口ListProjects获取。',
                                'description' => '项目ID，可从接口ListProjects获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '模型特征名称。',
                                'description' => '模型特征名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'model_feature_1',
                            ],
                            'LabelTableId' => [
                                'title' => 'Label表ID，可从接口ListLabelTables获取。',
                                'description' => 'Label表ID，可从接口ListLabelTables获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '4',
                            ],
                            'Features' => [
                                'title' => '特征列表。',
                                'description' => '特征列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '特征。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureViewId' => [
                                            'title' => '特征视图ID。',
                                            'description' => '特征视图ID，可从接口ListFeatureViews获取。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '5',
                                        ],
                                        'Name' => [
                                            'title' => '特征名称。',
                                            'description' => '特征名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'user_id',
                                        ],
                                        'AliasName' => [
                                            'title' => '特征别名。',
                                            'description' => '特征别名。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'userid',
                                        ],
                                        'Type' => [
                                            'title' => '特征类型。'."\n"
                                                .'● INT32'."\n"
                                                .'● INT64'."\n"
                                                .'● FLOAT'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING'."\n"
                                                .'● BOOLEAN'."\n"
                                                .'● TIMESTAMP',
                                            'description' => '特征类型。'."\n"
                                                ."\n"
                                                .'● INT32'."\n"
                                                ."\n"
                                                .'● INT64'."\n"
                                                ."\n"
                                                .'● FLOAT'."\n"
                                                ."\n"
                                                .'● DOUBLE'."\n"
                                                ."\n"
                                                .'● STRING'."\n"
                                                ."\n"
                                                .'● BOOLEAN'."\n"
                                                ."\n"
                                                .'● TIMESTAMP',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'STRING',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                            'SequenceFeatureViewIds' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '37D19490-AB69-567D-A852-407C94E510E9',
                            ],
                            'ModelFeatureId' => [
                                'title' => '模型特征ID。',
                                'description' => '模型特征ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"37D19490-AB69-567D-A852-407C94E510E9\\",\\n  \\"ModelFeatureId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建模型特征',
        ],
        'UpdateModelFeature' => [
            'summary' => '更新指定模型特征的信息，例如更新模型特征关联的label表ID。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'LabelTableId' => [
                                'title' => 'Label表ID，可从接口ListLabelTables获取。',
                                'description' => 'Label表ID，可从接口ListLabelTables获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '4',
                            ],
                            'Features' => [
                                'title' => '特征列表。',
                                'description' => '特征列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '特征。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureViewId' => [
                                            'title' => '特征视图ID，可从接口ListFeatureViews获取。',
                                            'description' => '特征视图ID，可从接口ListFeatureViews获取。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '5',
                                        ],
                                        'Name' => [
                                            'title' => '特征名称。',
                                            'description' => '特征名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'gender',
                                        ],
                                        'AliasName' => [
                                            'title' => '特征别名。',
                                            'description' => '特征别名。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'sex',
                                        ],
                                        'Type' => [
                                            'title' => '特征类型。'."\n"
                                                .'● INT32'."\n"
                                                .'● INT64'."\n"
                                                .'● FLOAT'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING'."\n"
                                                .'● BOOLEAN'."\n"
                                                .'● TIMESTAMP',
                                            'description' => '特征类型。'."\n"
                                                ."\n"
                                                .'● INT32'."\n"
                                                ."\n"
                                                .'● INT64'."\n"
                                                ."\n"
                                                .'● FLOAT'."\n"
                                                ."\n"
                                                .'● DOUBLE'."\n"
                                                ."\n"
                                                .'● STRING'."\n"
                                                ."\n"
                                                .'● BOOLEAN'."\n"
                                                ."\n"
                                                .'● TIMESTAMP',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'STRING',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'SequenceFeatureViewIds' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C33E160C-BFCA-5719-B958-942850E949F6',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C33E160C-BFCA-5719-B958-942850E949F6\\"\\n}","type":"json"}]',
            'title' => '更新模型特征',
        ],
        'CreateModelFeatureTrainingSetFGTable' => [
            'summary' => '创建训练样本FG表。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}/trainingsetfgtable',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '205454',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '93FF6A91-5326-5FA1-9D89-DB46DAA99E55',
                            ],
                            'TrainingSetFGTableName' => [
                                'title' => '训练样本FG表名称。',
                                'description' => '训练样本FG表名称。',
                                'type' => 'string',
                                'example' => 'project_model_training_set_fg',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93FF6A91-5326-5FA1-9D89-DB46DAA99E55\\",\\n  \\"TrainingSetFGTableName\\": \\"project_model_training_set_fg\\"\\n}","type":"json"}]',
            'title' => '创建模型特征训练样本FG表',
        ],
        'UpdateModelFeatureFGInfo' => [
            'summary' => '更新模型特征的fg.json文件配置信息。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}/fginfo',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '205441',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Content' => [
                                'title' => 'fg.json文件配置内容。',
                                'description' => 'fg.json文件配置内容。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '{"features": [{"feature_name": "item_id","feature_type": "id_feature","value_type": "String","expression": "item:item_id","default_value": "-1024","combiner": "mean","need_prefix": false},{"feature_name": "f1","feature_type": "lookup_feature","value_type": "Integer","map": "item:f1","key": "user:1","default_value": "0","combiner": "mean","need_prefix": false,"needDiscrete": false,"needWeighting": false,"needKey": false}],"reserves": ["f1"]}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E8CA47C5-B3E8-5BD7-9910-245432A365EB',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E8CA47C5-B3E8-5BD7-9910-245432A365EB\\"\\n}","type":"json"}]',
            'title' => '更新模型特征的fg.json文件配置信息',
        ],
        'UpdateModelFeatureFGFeature' => [
            'summary' => '更新模型特征的FG特征配置信息。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}/fgfeature',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '205443',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'RawFeatures' => [
                                'title' => '基础特征信息。',
                                'description' => '基础特征信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InputFeatureName' => [
                                            'title' => '原始特征名称。',
                                            'description' => '原始特征名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'item_id',
                                        ],
                                        'FeatureDomain' => [
                                            'title' => '原始特征域。'."\n"
                                                .'● User'."\n"
                                                .'● Item'."\n"
                                                .'● Context',
                                            'description' => '原始特征域。'."\n"
                                                .'- User-用户侧'."\n"
                                                .'- Item-物品侧'."\n"
                                                .'- Context-上下文',
                                            'type' => 'string',
                                            'required' => true,
                                            'enumValueTitles' => [],
                                            'example' => 'User',
                                        ],
                                        'FeatureName' => [
                                            'title' => '生成特征的名称。',
                                            'description' => '生成特征的名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'item_id',
                                        ],
                                        'FeatureType' => [
                                            'title' => 'FG基础特征类型。'."\n"
                                                .'● IdFeature-主键'."\n"
                                                .'● RawFeature-基础特征',
                                            'description' => 'FG基础特征类型。'."\n"
                                                .'- IdFeature-主键'."\n"
                                                .'- RawFeature-基础特征',
                                            'type' => 'string',
                                            'required' => true,
                                            'enumValueTitles' => [],
                                            'example' => 'IdFeature',
                                        ],
                                        'ValueType' => [
                                            'title' => '特征值类型。'."\n"
                                                .'● INTEGER'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING',
                                            'description' => '特征值类型。'."\n"
                                                .'- INTEGER'."\n"
                                                .'- DOUBLE'."\n"
                                                .'- STRING',
                                            'type' => 'string',
                                            'required' => true,
                                            'enumValueTitles' => [],
                                            'example' => 'STRING',
                                        ],
                                        'DefaultValue' => [
                                            'title' => '默认值。',
                                            'description' => '默认值。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '-1024',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'LookupFeatures' => [
                                'title' => '查询特征信息。',
                                'description' => '查询特征信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MapFeatureName' => [
                                            'title' => 'map特征名称。',
                                            'description' => 'map特征名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'item_id',
                                        ],
                                        'MapFeatureDomain' => [
                                            'title' => 'map特征域。'."\n"
                                                .'● User'."\n"
                                                .'● Item'."\n"
                                                .'● Context',
                                            'description' => 'map特征域。'."\n"
                                                .'- User-用户侧'."\n"
                                                .'- Item-物品侧'."\n"
                                                .'- Context-上下文',
                                            'type' => 'string',
                                            'required' => true,
                                            'enumValueTitles' => [],
                                            'example' => 'User',
                                        ],
                                        'FeatureName' => [
                                            'title' => '生成特征的名称。',
                                            'description' => '生成特征的名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'item_id',
                                        ],
                                        'ValueType' => [
                                            'title' => '特征值类型。'."\n"
                                                .'● INTEGER'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING',
                                            'description' => '特征值类型。'."\n"
                                                .'- INTEGER'."\n"
                                                .'- DOUBLE'."\n"
                                                .'- STRING',
                                            'type' => 'string',
                                            'required' => true,
                                            'enumValueTitles' => [],
                                            'example' => 'STRING',
                                        ],
                                        'DefaultValue' => [
                                            'title' => '默认值。',
                                            'description' => '默认值。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '-1024',
                                        ],
                                        'KeyFeatureName' => [
                                            'title' => 'key特征特征。',
                                            'description' => 'key特征。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '1',
                                        ],
                                        'KeyFeatureDomain' => [
                                            'title' => 'key特征域。'."\n"
                                                .'● User'."\n"
                                                .'● Item'."\n"
                                                .'● Context',
                                            'description' => 'key特征域。'."\n"
                                                .'- User-用户侧'."\n"
                                                .'- Item-物品侧'."\n"
                                                .'- Context-上下文',
                                            'type' => 'string',
                                            'required' => true,
                                            'enumValueTitles' => [],
                                            'example' => 'Item',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'SequenceFeatures' => [
                                'title' => '序列特征信息。',
                                'description' => '序列特征信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureName' => [
                                            'title' => '序列特征名称。',
                                            'description' => '序列特征名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'item_id',
                                        ],
                                        'SequenceLength' => [
                                            'title' => '序列特征最大长度。',
                                            'description' => '序列特征最大长度。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                            'example' => '50',
                                        ],
                                        'SequenceDelim' => [
                                            'title' => '序列特征分隔符。',
                                            'description' => '序列特征分隔符。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => ';',
                                        ],
                                        'AttributeDelim' => [
                                            'title' => '特征属性分隔符。',
                                            'description' => '特征属性分隔符。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '#',
                                        ],
                                        'SubFeatures' => [
                                            'title' => '序列特征子特征列表。',
                                            'description' => '序列特征子特征列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'InputFeatureName' => [
                                                        'title' => '原始特征名称。',
                                                        'description' => '原始特征名称。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'item_id',
                                                    ],
                                                    'FeatureDomain' => [
                                                        'title' => '原始特征域。'."\n"
                                                            .'● User'."\n"
                                                            .'● Item'."\n"
                                                            .'● Context',
                                                        'description' => '原始特征域。'."\n"
                                                            .'- User-用户侧'."\n"
                                                            .'- Item-物品侧'."\n"
                                                            .'- Context-上下文',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'enumValueTitles' => [],
                                                        'example' => 'User',
                                                    ],
                                                    'FeatureName' => [
                                                        'title' => '生成子特征的名称。',
                                                        'description' => '生成子特征的名称。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'item_id',
                                                    ],
                                                    'FeatureType' => [
                                                        'title' => 'FG序列特征子特征类型。'."\n"
                                                            .'● IdFeature-主键'."\n"
                                                            .'● RawFeature-基础特征',
                                                        'description' => 'FG序列特征子特征类型。'."\n"
                                                            .'- IdFeature-主键'."\n"
                                                            .'- RawFeature-基础特征',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'enumValueTitles' => [],
                                                        'example' => 'RawFeature',
                                                    ],
                                                    'ValueType' => [
                                                        'title' => '特征值类型。'."\n"
                                                            .'● INTEGER'."\n"
                                                            .'● DOUBLE'."\n"
                                                            .'● STRING',
                                                        'description' => '特征值类型。'."\n"
                                                            .'- INTEGER'."\n"
                                                            .'- DOUBLE'."\n"
                                                            .'- STRING',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'enumValueTitles' => [],
                                                        'example' => 'STRING',
                                                    ],
                                                    'DefaultValue' => [
                                                        'title' => '默认值。',
                                                        'description' => '默认值。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => '-1024',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'Reserves' => [
                                'title' => '保留字段。',
                                'description' => '保留字段。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '保留字段名称。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'f1',
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7D497816-607C-5B67-97B1-61354B6ACB2B',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"7D497816-607C-5B67-97B1-61354B6ACB2B\\"\\n}","type":"json"}]',
            'title' => '更新模型特征的FG特征配置信息',
        ],
        'ListModelFeatureAvailableFeatures' => [
            'summary' => '获取注册FG特征时模型特征下可选的所有特征。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}/availablefeatures',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '205398',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'FeatureName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '特征名称（模糊过滤）。',
                        'description' => '特征名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ED4DEA2F-F216-57F0-AE28-08D791233280',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'AvaliableFeatures' => [
                                'title' => '可选的特征列表。',
                                'description' => '可选的特征列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '特征名。',
                                            'description' => '特征名。',
                                            'type' => 'string',
                                            'example' => 'age',
                                        ],
                                        'Type' => [
                                            'title' => '特征值类型。'."\n"
                                                .'● INTEGER'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING',
                                            'description' => '特征值类型。'."\n"
                                                .'- INTEGER'."\n"
                                                .'- DOUBLE'."\n"
                                                .'- STRING',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'STRING',
                                        ],
                                        'SourceType' => [
                                            'title' => '特征来源'."\n"
                                                .'● FeatureView'."\n"
                                                .'● LabelTable',
                                            'description' => '特征来源'."\n"
                                                .'- FeatureView-特征视图'."\n"
                                                .'- LabelTable-Label表',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'FeatureView',
                                        ],
                                        'SourceName' => [
                                            'title' => '特征来源名称',
                                            'description' => '特征来源名称',
                                            'type' => 'string',
                                            'example' => 'user_fea',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ED4DEA2F-F216-57F0-AE28-08D791233280\\",\\n  \\"TotalCount\\": 10,\\n  \\"AvaliableFeatures\\": [\\n    {\\n      \\"Name\\": \\"age\\",\\n      \\"Type\\": \\"STRING\\",\\n      \\"SourceType\\": \\"FeatureView\\",\\n      \\"SourceName\\": \\"user_fea\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取注册FG特征时模型特征下可选的所有特征',
        ],
        'GetModelFeatureFGInfo' => [
            'summary' => '获取模型特征的fg.json文件配置信息。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}/fginfo',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '205348',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8',
                            ],
                            'Content' => [
                                'title' => 'fg.json文件配置内容。',
                                'description' => 'fg.json文件配置内容。',
                                'type' => 'string',
                                'example' => '{"features": [{"feature_name": "item_id","feature_type": "id_feature","value_type": "String","expression": "item:item_id","default_value": "-1024","combiner": "mean","need_prefix": false},{"feature_name": "f1","feature_type": "lookup_feature","value_type": "Integer","map": "item:f1","key": "user:1","default_value": "0","combiner": "mean","need_prefix": false,"needDiscrete": false,"needWeighting": false,"needKey": false}],"reserves": ["f1"]}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6B662A64-E4BF-56F8-BF5F-4C63F34EC0A8\\",\\n  \\"Content\\": \\"{\\\\\\"features\\\\\\": [{\\\\\\"feature_name\\\\\\": \\\\\\"item_id\\\\\\",\\\\\\"feature_type\\\\\\": \\\\\\"id_feature\\\\\\",\\\\\\"value_type\\\\\\": \\\\\\"String\\\\\\",\\\\\\"expression\\\\\\": \\\\\\"item:item_id\\\\\\",\\\\\\"default_value\\\\\\": \\\\\\"-1024\\\\\\",\\\\\\"combiner\\\\\\": \\\\\\"mean\\\\\\",\\\\\\"need_prefix\\\\\\": false},{\\\\\\"feature_name\\\\\\": \\\\\\"f1\\\\\\",\\\\\\"feature_type\\\\\\": \\\\\\"lookup_feature\\\\\\",\\\\\\"value_type\\\\\\": \\\\\\"Integer\\\\\\",\\\\\\"map\\\\\\": \\\\\\"item:f1\\\\\\",\\\\\\"key\\\\\\": \\\\\\"user:1\\\\\\",\\\\\\"default_value\\\\\\": \\\\\\"0\\\\\\",\\\\\\"combiner\\\\\\": \\\\\\"mean\\\\\\",\\\\\\"need_prefix\\\\\\": false,\\\\\\"needDiscrete\\\\\\": false,\\\\\\"needWeighting\\\\\\": false,\\\\\\"needKey\\\\\\": false}],\\\\\\"reserves\\\\\\": [\\\\\\"f1\\\\\\"]}\\"\\n}","type":"json"}]',
            'title' => '获取模型特征的fg.json文件配置信息',
        ],
        'GetModelFeatureFGFeature' => [
            'summary' => '获取模型特征的FG特征配置信息。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}/fgfeature',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '205386',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E23EFF09-58AA-5420-934F-8453AE01548D',
                            ],
                            'RawFeatures' => [
                                'title' => '基础特征信息。',
                                'description' => '基础特征信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InputFeatureName' => [
                                            'title' => '原始特征名称。',
                                            'description' => '原始特征名称。',
                                            'type' => 'string',
                                            'example' => 'item_id',
                                        ],
                                        'FeatureDomain' => [
                                            'title' => '原始特征域。'."\n"
                                                .'● User'."\n"
                                                .'● Item'."\n"
                                                .'● Context',
                                            'description' => '原始特征域。'."\n"
                                                .'- User-用户侧'."\n"
                                                .'- Item-物品侧'."\n"
                                                .'- Context-上下文',
                                            'type' => 'string',
                                            'example' => 'User',
                                        ],
                                        'FeatureName' => [
                                            'title' => '生成特征的名称。',
                                            'description' => '生成特征的名称。',
                                            'type' => 'string',
                                            'example' => 'item_id',
                                        ],
                                        'FeatureType' => [
                                            'title' => 'FG基础特征类型。'."\n"
                                                .'● IdFeature-主键'."\n"
                                                .'● RawFeature-基础特征',
                                            'description' => 'FG基础特征类型。'."\n"
                                                .'- IdFeature-主键'."\n"
                                                .'- RawFeature-基础特征',
                                            'type' => 'string',
                                            'example' => 'IdFeature',
                                        ],
                                        'ValueType' => [
                                            'title' => '特征值类型。'."\n"
                                                .'● INTEGER'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING',
                                            'description' => '特征值类型。'."\n"
                                                .'- INTEGER'."\n"
                                                .'- DOUBLE'."\n"
                                                .'- STRING',
                                            'type' => 'string',
                                            'example' => 'STRING',
                                        ],
                                        'DefaultValue' => [
                                            'title' => '默认值。',
                                            'description' => '默认值。',
                                            'type' => 'string',
                                            'example' => '-1024',
                                        ],
                                    ],
                                ],
                            ],
                            'LookupFeatures' => [
                                'title' => '查询特征信息。',
                                'description' => '查询特征信息。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '',
                                    'description' => '',
                                    'type' => 'object',
                                    'properties' => [
                                        'MapFeatureName' => [
                                            'title' => 'map特征名称。',
                                            'description' => 'map特征名称。',
                                            'type' => 'string',
                                            'example' => 'item_id',
                                        ],
                                        'MapFeatureDomain' => [
                                            'title' => 'map特征域。'."\n"
                                                .'● User'."\n"
                                                .'● Item'."\n"
                                                .'● Context',
                                            'description' => 'map特征域。'."\n"
                                                .'- User-用户侧'."\n"
                                                .'- Item-物品侧'."\n"
                                                .'- Context-上下文',
                                            'type' => 'string',
                                            'example' => 'User',
                                        ],
                                        'FeatureName' => [
                                            'title' => '生成特征的名称。',
                                            'description' => '生成特征的名称。',
                                            'type' => 'string',
                                            'example' => 'item_id',
                                        ],
                                        'ValueType' => [
                                            'title' => '特征值类型。'."\n"
                                                .'● INTEGER'."\n"
                                                .'● DOUBLE'."\n"
                                                .'● STRING',
                                            'description' => '特征值类型。'."\n"
                                                .'- INTEGER'."\n"
                                                .'- DOUBLE'."\n"
                                                .'- STRING',
                                            'type' => 'string',
                                            'example' => 'STRING',
                                        ],
                                        'DefaultValue' => [
                                            'title' => '默认值。',
                                            'description' => '默认值。',
                                            'type' => 'string',
                                            'example' => '-1024',
                                        ],
                                        'KeyFeatureName' => [
                                            'title' => 'key特征名称。',
                                            'description' => 'key特征名称。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'KeyFeatureDomain' => [
                                            'title' => 'key特征域。'."\n"
                                                .'● User'."\n"
                                                .'● Item'."\n"
                                                .'● Context',
                                            'description' => 'key特征域。'."\n"
                                                .'- User-用户侧'."\n"
                                                .'- Item-物品侧'."\n"
                                                .'- Context-上下文',
                                            'type' => 'string',
                                            'example' => 'Item',
                                        ],
                                    ],
                                ],
                            ],
                            'SequenceFeatures' => [
                                'title' => '序列特征信息。',
                                'description' => '序列特征信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureName' => [
                                            'title' => '序列特征名称。',
                                            'description' => '序列特征名称。',
                                            'type' => 'string',
                                            'example' => 'item_id',
                                        ],
                                        'SequenceLength' => [
                                            'title' => '序列特征最大长度。',
                                            'description' => '序列特征最大长度。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '50',
                                        ],
                                        'SequenceDelim' => [
                                            'title' => '序列特征分隔符。',
                                            'description' => '序列特征分隔符。',
                                            'type' => 'string',
                                            'example' => ';',
                                        ],
                                        'AttributeDelim' => [
                                            'title' => '特征属性分隔符。',
                                            'description' => '特征属性分隔符。',
                                            'type' => 'string',
                                            'example' => '#',
                                        ],
                                        'SubFeatures' => [
                                            'title' => '序列特征子特征列表。',
                                            'description' => '序列特征子特征列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'InputFeatureName' => [
                                                        'title' => '原始特征名称',
                                                        'description' => '原始特征名称',
                                                        'type' => 'string',
                                                        'example' => 'item_id',
                                                    ],
                                                    'FeatureDomain' => [
                                                        'title' => '原始特征域。'."\n"
                                                            .'● User'."\n"
                                                            .'● Item'."\n"
                                                            .'● Context',
                                                        'description' => '原始特征域。'."\n"
                                                            .'- User-用户侧'."\n"
                                                            .'- Item-物品侧'."\n"
                                                            .'- Context-上下文',
                                                        'type' => 'string',
                                                        'example' => 'User',
                                                    ],
                                                    'FeatureName' => [
                                                        'title' => '生成特征的名称。',
                                                        'description' => '生成特征的名称。',
                                                        'type' => 'string',
                                                        'example' => 'item_id',
                                                    ],
                                                    'FeatureType' => [
                                                        'title' => 'FG特征类型。'."\n"
                                                            .'● IdFeature-主键'."\n"
                                                            .'● RawFeature-基础特征',
                                                        'description' => 'FG特征类型。'."\n"
                                                            .'- IdFeature-主键'."\n"
                                                            .'- RawFeature-基础特征',
                                                        'type' => 'string',
                                                        'example' => 'IdFeature',
                                                    ],
                                                    'ValueType' => [
                                                        'title' => '特征值类型。'."\n"
                                                            .'● INTEGER'."\n"
                                                            .'● DOUBLE'."\n"
                                                            .'● STRING',
                                                        'description' => '特征值类型。'."\n"
                                                            .'- INTEGER'."\n"
                                                            .'- DOUBLE'."\n"
                                                            .'- STRING',
                                                        'type' => 'string',
                                                        'example' => 'STRING',
                                                    ],
                                                    'DefaultValue' => [
                                                        'title' => '默认值。',
                                                        'description' => '默认值。',
                                                        'type' => 'string',
                                                        'example' => '-1024',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Reserves' => [
                                'title' => '保留字段。',
                                'description' => '保留字段。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '保留字段名称。',
                                    'type' => 'string',
                                    'example' => 'f1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E23EFF09-58AA-5420-934F-8453AE01548D\\",\\n  \\"RawFeatures\\": [\\n    {\\n      \\"InputFeatureName\\": \\"item_id\\",\\n      \\"FeatureDomain\\": \\"User\\",\\n      \\"FeatureName\\": \\"item_id\\",\\n      \\"FeatureType\\": \\"IdFeature\\",\\n      \\"ValueType\\": \\"STRING\\",\\n      \\"DefaultValue\\": \\"-1024\\"\\n    }\\n  ],\\n  \\"LookupFeatures\\": [\\n    {\\n      \\"MapFeatureName\\": \\"item_id\\",\\n      \\"MapFeatureDomain\\": \\"User\\",\\n      \\"FeatureName\\": \\"item_id\\",\\n      \\"ValueType\\": \\"STRING\\",\\n      \\"DefaultValue\\": \\"-1024\\",\\n      \\"KeyFeatureName\\": \\"1\\",\\n      \\"KeyFeatureDomain\\": \\"Item\\"\\n    }\\n  ],\\n  \\"SequenceFeatures\\": [\\n    {\\n      \\"FeatureName\\": \\"item_id\\",\\n      \\"SequenceLength\\": 50,\\n      \\"SequenceDelim\\": \\";\\",\\n      \\"AttributeDelim\\": \\"#\\",\\n      \\"SubFeatures\\": [\\n        {\\n          \\"InputFeatureName\\": \\"item_id\\",\\n          \\"FeatureDomain\\": \\"User\\",\\n          \\"FeatureName\\": \\"item_id\\",\\n          \\"FeatureType\\": \\"IdFeature\\",\\n          \\"ValueType\\": \\"STRING\\",\\n          \\"DefaultValue\\": \\"-1024\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Reserves\\": [\\n    \\"f1\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取模型特征的FG特征配置信息',
        ],
        'ExportModelFeatureTrainingSetFGTable' => [
            'summary' => '导出训练样本FG表。',
            'path' => '/api/v1/instances/{InstanceId}/modelfeatures/{ModelFeatureId}/action/exporttrainingsetfgtable',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '205457',
                'abilityTreeNodes' => [
                    'FEATURElearnC62G6X',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ModelFeatureId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模型特征ID。',
                        'description' => '模型特征ID，可从接口ListModelFeatures获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'TrainingSetFgConfig' => [
                                'title' => '导出训练样本FG表配置',
                                'description' => '导出训练样本FG表配置',
                                'type' => 'object',
                                'properties' => [
                                    'Partitions' => [
                                        'title' => '分区列表。',
                                        'description' => '分区列表。',
                                        'type' => 'object',
                                        'required' => true,
                                        'additionalProperties' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => '20240102',
                                                'description' => '分区值。',
                                            ],
                                            'description' => '分区字段的映射。',
                                        ],
                                    ],
                                    'FgJsonName' => [
                                        'title' => 'fg.json文件名称。',
                                        'description' => 'fg.json文件名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'rank_v1_fg.json',
                                    ],
                                    'JarName' => [
                                        'title' => 'jar包文件名称。',
                                        'description' => 'jar包文件名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'fg_on_odps-1.3.60-jar-with-dependencies.jar',
                                    ],
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '514F82AF-3C04-5C3D-8F38-A11261BF37B0',
                            ],
                            'TaskId' => [
                                'title' => '任务ID。',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"514F82AF-3C04-5C3D-8F38-A11261BF37B0\\",\\n  \\"TaskId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '导出模型特征训练样本FG表',
        ],
        'GetTask' => [
            'summary' => '获取任务详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/tasks/{TaskId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '任务ID，可从接口ListTasks获取。',
                        'description' => '任务ID，可从接口ListTasks获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '37D19490-AB69-567D-A852-407C94E510E9',
                            ],
                            'ProjectId' => [
                                'title' => '项目ID。',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ProjectName' => [
                                'title' => '项目名称。',
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project_1',
                            ],
                            'Type' => [
                                'title' => '任务类型。'."\n"
                                    .'● OfflineToOnline-离在线数据同步。'."\n"
                                    .'● ExportTrainingSet-导出训练样本表。',
                                'description' => '任务类型。'."\n"
                                    ."\n"
                                    .'● OfflineToOnline-离在线数据同步。'."\n"
                                    ."\n"
                                    .'● ExportTrainingSet-导出训练样本表。',
                                'type' => 'string',
                                'example' => 'OfflineToOnline',
                            ],
                            'ObjectType' => [
                                'title' => '任务目标类型。'."\n"
                                    .'● ModelFeature-模型特征'."\n"
                                    .'● FeatureView-特征视图',
                                'description' => '任务目标类型。'."\n"
                                    ."\n"
                                    .'● ModelFeature-模型特征'."\n"
                                    ."\n"
                                    .'● FeatureView-特征视图',
                                'type' => 'string',
                                'example' => 'ModelFeature',
                            ],
                            'ObjectId' => [
                                'title' => '任务目标ID。',
                                'description' => '任务目标ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'Status' => [
                                'title' => '状态。'."\n"
                                    .'● Initializing-初始化中。'."\n"
                                    .'● Running-运行中。'."\n"
                                    .'● Success-成功。'."\n"
                                    .'● Failure-失败。',
                                'description' => '状态。'."\n"
                                    ."\n"
                                    .'● Initializing-初始化中。'."\n"
                                    ."\n"
                                    .'● Running-运行中。'."\n"
                                    ."\n"
                                    .'● Success-成功。'."\n"
                                    ."\n"
                                    .'● Failure-失败。',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'Config' => [
                                'title' => '任务配置。',
                                'description' => '任务配置。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'	"mode": "overwrite",'."\n"
                                    .'	"partitions": {'."\n"
                                    .'		"dt": "20230820"'."\n"
                                    .'	},'."\n"
                                    .'	"event_time": "",'."\n"
                                    .'	"config": {},'."\n"
                                    .'	"offline_to_online": true'."\n"
                                    .'}',
                            ],
                            'RunningConfig' => [
                                'title' => '任务运行配置。',
                                'description' => '任务运行配置。',
                                'type' => 'string',
                                'example' => 'DROP TABLE IF EXISTS public.fsxxx',
                            ],
                            'GmtCreateTime' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T11:26:09.036+08:00',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '更新时间。',
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T11:26:09.036+08:00',
                            ],
                            'GmtExecutedTime' => [
                                'title' => '执行时间。',
                                'description' => '执行时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T11:26:09.036+08:00',
                            ],
                            'GmtFinishedTime' => [
                                'title' => '完成时间。',
                                'description' => '完成时间。',
                                'type' => 'string',
                                'example' => '2023-07-04T11:26:09.036+08:00',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"37D19490-AB69-567D-A852-407C94E510E9\\",\\n  \\"ProjectId\\": \\"3\\",\\n  \\"ProjectName\\": \\"project_1\\",\\n  \\"Type\\": \\"OfflineToOnline\\",\\n  \\"ObjectType\\": \\"ModelFeature\\",\\n  \\"ObjectId\\": \\"3\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"Config\\": \\"{\\\\n\\\\t\\\\\\"mode\\\\\\": \\\\\\"overwrite\\\\\\",\\\\n\\\\t\\\\\\"partitions\\\\\\": {\\\\n\\\\t\\\\t\\\\\\"dt\\\\\\": \\\\\\"20230820\\\\\\"\\\\n\\\\t},\\\\n\\\\t\\\\\\"event_time\\\\\\": \\\\\\"\\\\\\",\\\\n\\\\t\\\\\\"config\\\\\\": {},\\\\n\\\\t\\\\\\"offline_to_online\\\\\\": true\\\\n}\\",\\n  \\"RunningConfig\\": \\"DROP TABLE IF EXISTS public.fsxxx\\",\\n  \\"GmtCreateTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n  \\"GmtExecutedTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n  \\"GmtFinishedTime\\": \\"2023-07-04T11:26:09.036+08:00\\"\\n}","type":"json"}]',
            'title' => '获取任务详细信息',
        ],
        'ListTaskLogs' => [
            'summary' => '获取任务日志。',
            'path' => '/api/v1/instances/{InstanceId}/tasks/{TaskId}/logs',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '任务ID。',
                        'description' => '任务ID，可从接口ListTasks获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码，起始值为1，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '72F15A8A-5A28-5B18-A0DE-0EABD7D3245A',
                            ],
                            'TotalCount' => [
                                'title' => '日志总行数。',
                                'description' => '日志总行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'Logs' => [
                                'title' => '日志列表。',
                                'description' => '日志列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志。',
                                    'type' => 'string',
                                    'example' => 'success！',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"72F15A8A-5A28-5B18-A0DE-0EABD7D3245A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Logs\\": [\\n    \\"success！\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取任务日志',
        ],
        'ListTasks' => [
            'summary' => '获取任务列表。',
            'path' => '/api/v1/instances/{InstanceId}/tasks',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID，可从接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fs-cn-********',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID，可从接口ListProjects获取。',
                        'description' => '项目ID，可从接口ListProjects获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'ObjectType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务对象类型。'."\n"
                            .'● ModelFeature-模型特征。'."\n"
                            .'● FeatureView-特征视图。',
                        'description' => '任务对象类型。'."\n"
                            ."\n"
                            .'● ModelFeature-模型特征。'."\n"
                            ."\n"
                            .'● FeatureView-特征视图。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ModelFeature',
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务对象ID。',
                        'description' => '任务对象ID，可从接口ListModelFeatures、ListFeatureViews获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '状态。'."\n"
                            .'● Initializing-初始化中。'."\n"
                            .'● Running-运行中。'."\n"
                            .'● Success-成功。'."\n"
                            .'● Failure-失败。',
                        'description' => '状态。'."\n"
                            ."\n"
                            .'● Initializing-初始化中。'."\n"
                            ."\n"
                            .'● Running-运行中。'."\n"
                            ."\n"
                            .'● Success-成功。'."\n"
                            ."\n"
                            .'● Failure-失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码，起始值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务类型过滤。'."\n"
                            .'● OfflineToOnline-离在线数据同步。'."\n"
                            .'● ExportTrainingSet-导出训练样本表。',
                        'description' => '任务类型过滤。'."\n"
                            .'● OfflineToOnline-离在线数据同步。'."\n"
                            .'● ExportTrainingSet-导出训练样本表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OfflineToOnline',
                    ],
                ],
                [
                    'name' => 'TaskIds',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '任务ID过滤。',
                        'description' => '任务ID过滤。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务ID，可从接口ListTasks获取。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '3',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C33E160C-BFCA-5719-B958-942850E949F6',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Tasks' => [
                                'title' => '任务列表。',
                                'description' => '任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GmtCreateTime' => [
                                            'title' => '创建时间。',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-04T11:26:09.036+08:00',
                                        ],
                                        'GmtExecutedTime' => [
                                            'title' => '执行时间。',
                                            'description' => '执行时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-04T11:26:09.036+08:00',
                                        ],
                                        'GmtFinishedTime' => [
                                            'title' => '完成时间。',
                                            'description' => '完成时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-04T11:26:09.036+08:00',
                                        ],
                                        'ObjectId' => [
                                            'title' => '任务对象ID。',
                                            'description' => '任务对象ID。',
                                            'type' => 'string',
                                            'example' => '5',
                                        ],
                                        'ObjectType' => [
                                            'title' => '任务对象类型。'."\n"
                                                .'● ModelFeature-模型特征'."\n"
                                                .'● FeatureView-特征视图',
                                            'description' => '任务对象类型。'."\n"
                                                ."\n"
                                                .'● ModelFeature-模型特征'."\n"
                                                ."\n"
                                                .'● FeatureView-特征视图',
                                            'type' => 'string',
                                            'example' => 'ModelFeature',
                                        ],
                                        'ProjectId' => [
                                            'title' => '项目ID。',
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'ProjectName' => [
                                            'title' => '项目名称。',
                                            'description' => '项目名称。',
                                            'type' => 'string',
                                            'example' => 'project_1',
                                        ],
                                        'Status' => [
                                            'title' => '状态。'."\n"
                                                .'● Initializing-初始化中。'."\n"
                                                .'● Running-运行中。'."\n"
                                                .'● Success-成功。'."\n"
                                                .'● Failure-失败。',
                                            'description' => '状态。'."\n"
                                                ."\n"
                                                .'● Initializing-初始化中。'."\n"
                                                ."\n"
                                                .'● Running-运行中。'."\n"
                                                ."\n"
                                                .'● Success-成功。'."\n"
                                                ."\n"
                                                .'● Failure-失败。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'TaskId' => [
                                            'title' => '任务ID。',
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'Type' => [
                                            'title' => '任务类型。'."\n"
                                                .'● OfflineToOnline-离在线数据同步。'."\n"
                                                .'● ExportTrainingSet-导出训练样本表。',
                                            'description' => '任务类型。'."\n"
                                                ."\n"
                                                .'● OfflineToOnline-离在线数据同步。'."\n"
                                                ."\n"
                                                .'● ExportTrainingSet-导出训练样本表。',
                                            'type' => 'string',
                                            'example' => 'OfflineToOnline',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C33E160C-BFCA-5719-B958-942850E949F6\\",\\n  \\"TotalCount\\": 10,\\n  \\"Tasks\\": [\\n    {\\n      \\"GmtCreateTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n      \\"GmtExecutedTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n      \\"GmtFinishedTime\\": \\"2023-07-04T11:26:09.036+08:00\\",\\n      \\"ObjectId\\": \\"5\\",\\n      \\"ObjectType\\": \\"ModelFeature\\",\\n      \\"ProjectId\\": \\"4\\",\\n      \\"ProjectName\\": \\"project_1\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"TaskId\\": \\"4\\",\\n      \\"Type\\": \\"OfflineToOnline\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取任务列表',
        ],
        'GetServiceIdentityRole' => [
            'summary' => '获取服务账户角色详细信息。',
            'path' => '/api/v1/serviceidentityroles/{RoleName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RoleName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务账户角色名称。',
                        'description' => '服务账户角色名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AliyunServiceRoleForFeatureStore',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6F629E92-F64D-502D-85AA-A9C54894CA3D',
                            ],
                            'RoleName' => [
                                'title' => '服务账户角色名称。',
                                'description' => '服务账户角色名称。',
                                'type' => 'string',
                                'example' => 'AliyunServiceRoleForPaiFeatureStore',
                            ],
                            'Policy' => [
                                'title' => '关联策略。',
                                'description' => '关联策略。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'"Version": "1",'."\n"
                                    .'"Statement":[]'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6F629E92-F64D-502D-85AA-A9C54894CA3D\\",\\n  \\"RoleName\\": \\"AliyunServiceRoleForPaiFeatureStore\\",\\n  \\"Policy\\": \\"{\\\\n\\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",\\\\n\\\\\\"Statement\\\\\\":[]\\\\n}\\"\\n}","type":"json"}]',
            'title' => '获取服务账户角色',
        ],
        'CreateServiceIdentityRole' => [
            'summary' => '创建服务账户角色。',
            'path' => '/api/v1/serviceidentityroles',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'RoleName' => [
                                'title' => '服务账户角色名称。',
                                'description' => '服务账户角色名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'AliyunServiceRoleForFeatureStore',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C03B2680-AC9C-59CD-93C5-8142B92537FA',
                            ],
                            'RoleName' => [
                                'title' => '服务账户角色名称。',
                                'description' => '服务账户角色名称。',
                                'type' => 'string',
                                'example' => 'AliyunServiceRoleForFeatureStore',
                            ],
                            'Code' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'ServiceLinkedRoleAlreadyExistsErrorProblem',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C03B2680-AC9C-59CD-93C5-8142B92537FA\\",\\n  \\"RoleName\\": \\"AliyunServiceRoleForFeatureStore\\",\\n  \\"Code\\": \\"ServiceLinkedRoleAlreadyExistsErrorProblem\\"\\n}","type":"json"}]',
            'title' => '创建服务账户角色',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'paifeaturestore.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paifeaturestore.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'paifeaturestore.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'paifeaturestore.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'paifeaturestore.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'paifeaturestore.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
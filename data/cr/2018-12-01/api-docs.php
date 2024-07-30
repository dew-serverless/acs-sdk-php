<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cr',
        'version' => '2018-12-01',
    ],
    'directories' => [
        [
            'id' => 191665,
            'title' => '制品生命周期管理',
            'type' => 'directory',
            'children' => [
                'UpdateArtifactLifecycleRule',
                'ListArtifactLifecycleRule',
                'GetArtifactLifecycleRule',
                'DeleteArtifactLifecycleRule',
                'CreateArtifactLifecycleRule',
            ],
        ],
        [
            'id' => 188192,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'UntagResources',
                'ListTagResources',
            ],
        ],
        [
            'id' => 112035,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'GetInstance',
                'GetInstanceUsage',
                'ListInstanceRegion',
                'ListInstance',
                'GetInstanceCount',
            ],
        ],
        [
            'id' => 112041,
            'title' => '实例访问控制管理',
            'type' => 'directory',
            'children' => [
                'CreateInstanceVpcEndpointLinkedVpc',
                'CreateInstanceEndpointAclPolicy',
                'DeleteInstanceEndpointAclPolicy',
                'DeleteInstanceVpcEndpointLinkedVpc',
                'UpdateInstanceEndpointStatus',
                'GetInstanceEndpoint',
                'ListInstanceEndpoint',
                'GetInstanceVpcEndpoint',
            ],
        ],
        [
            'id' => 112050,
            'title' => '实例同步管理',
            'type' => 'directory',
            'children' => [
                'CreateRepoSyncTaskByRule',
                'CreateRepoSyncRule',
                'CreateRepoSyncTask',
                'DeleteRepoSyncRule',
                'ListRepoSyncTask',
                'ListRepoSyncRule',
                'GetRepoSyncTask',
            ],
        ],
        [
            'id' => 112058,
            'title' => '镜像命名空间管理',
            'type' => 'directory',
            'children' => [
                'CreateNamespace',
                'DeleteNamespace',
                'UpdateNamespace',
                'GetNamespace',
                'ListNamespace',
            ],
        ],
        [
            'id' => 112064,
            'title' => '镜像仓库管理',
            'type' => 'directory',
            'children' => [
                'CreateRepository',
                'DeleteRepository',
                'UpdateRepository',
                'ListRepository',
                'GetRepository',
            ],
        ],
        [
            'id' => 112070,
            'title' => '镜像管理',
            'type' => 'directory',
            'children' => [
                'CreateRepoTag',
                'DeleteRepoTag',
                'ListRepoTag',
                'GetRepoTagLayers',
                'GetRepoTagManifest',
                'GetRepoTag',
            ],
        ],
        [
            'id' => 112077,
            'title' => '镜像安全管理',
            'type' => 'directory',
            'children' => [
                'CreateRepoTagScanTask',
                'GetRepoTagScanStatus',
                'GetRepoTagScanSummary',
                'ListRepoTagScanResult',
            ],
        ],
        [
            'id' => 112082,
            'title' => '镜像构建管理',
            'type' => 'directory',
            'children' => [
                'CreateArtifactBuildRule',
                'CreateBuildRecordByRule',
                'CreateRepoBuildRule',
                'CreateRepoSourceCodeRepo',
                'DeleteRepoBuildRule',
                'CancelRepoBuildRecord',
                'UpdateRepoBuildRule',
                'UpdateRepoSourceCodeRepo',
                'ListRepoBuildRecordLog',
                'ListRepoBuildRule',
                'ListRepoBuildRecord',
                'GetRepoBuildRecordStatus',
                'GetRepoBuildRecord',
                'GetRepoSourceCodeRepo',
            ],
        ],
        [
            'id' => 112096,
            'title' => '镜像触发器管理',
            'type' => 'directory',
            'children' => [
                'CreateRepoTrigger',
                'DeleteRepoTrigger',
                'UpdateRepoTrigger',
                'ListRepoTrigger',
            ],
        ],
        [
            'id' => 112102,
            'title' => 'Helm Chart 命名空间管理',
            'type' => 'directory',
            'children' => [
                'CreateChartNamespace',
                'DeleteChartNamespace',
                'UpdateChartNamespace',
                'GetChartNamespace',
                'ListChartNamespace',
            ],
        ],
        [
            'id' => 112108,
            'title' => 'Chart 仓库管理',
            'type' => 'directory',
            'children' => [
                'CreateChartRepository',
                'DeleteChartRepository',
                'UpdateChartRepository',
                'ListChartRepository',
                'GetChartRepository',
            ],
        ],
        [
            'id' => 112114,
            'title' => 'Chart 版本管理',
            'type' => 'directory',
            'children' => [
                'DeleteChartRelease',
                'ListChartRelease',
            ],
        ],
        [
            'id' => 112117,
            'title' => '访问凭证管理',
            'type' => 'directory',
            'children' => [
                'GetAuthorizationToken',
                'ResetLoginPassword',
            ],
        ],
        [
            'id' => 112120,
            'title' => '制品构建',
            'type' => 'directory',
            'children' => [
                'CancelArtifactBuildTask',
                'GetArtifactBuildTask',
                'ListArtifactBuildTaskLog',
            ],
        ],
        [
            'id' => 112124,
            'title' => '云原生交付链管理',
            'type' => 'directory',
            'children' => [
                'CreateChain',
                'DeleteChain',
                'UpdateChain',
                'GetChain',
                'ListChain',
                'ListChainInstance',
            ],
        ],
        [
            'id' => 112131,
            'title' => '事件通知',
            'type' => 'directory',
            'children' => [
                'DeleteEventCenterRule',
                'UpdateEventCenterRule',
                'ListEventCenterRecord',
                'ListEventCenterRuleName',
            ],
        ],
        [
            'id' => 172536,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ChangeResourceGroup',
                'CreateBuildRecordByRecord',
                'GetArtifactBuildRule',
                'ListScanBaselineByTask',
                'ListScanMaliciousFileByTask',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'UpdateArtifactLifecycleRule' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-r6ym0lerldp****',
                    ],
                ],
                [
                    'name' => 'Auto',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动执行',
                        'type' => 'boolean',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ScheduleTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行周期',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'WEEK',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-ns',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_1',
                    ],
                ],
                [
                    'name' => 'TagRegexp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留镜像版本的正则表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*production_.*',
                    ],
                ],
                [
                    'name' => 'RetentionTagCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留镜像个数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'EnableDeleteTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启生命周期管理',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cralr-luq6qiegzvx****',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '清理范围',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'REPO',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BF92FC2E-455F-5600-A276-D2150A59****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BF92FC2E-455F-5600-A276-D2150A59****\\"\\n}","type":"json"}]',
            'title' => '更新制品生命周期管理规则',
            'summary' => '更新制品生命周期管理规则。',
        ],
        'ListArtifactLifecycleRule' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业版实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-eztul9ucz76q****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'EnableDeleteTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启生命周期管理',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F92D82F9-A4C4-5A4A-97B9-E495BF1B****',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '39',
                            ],
                            'Rules' => [
                                'description' => '规则列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'NextTime' => [
                                            'description' => '下一次执行时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1638187989000',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1638187989000',
                                        ],
                                        'TagRegexp' => [
                                            'description' => '保留镜像版本的正则表达式',
                                            'type' => 'string',
                                            'example' => '.*-alpine'."\n",
                                        ],
                                        'EnableDeleteTag' => [
                                            'description' => '是否开启生命周期管理',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-brlg4cbj2yl****',
                                        ],
                                        'NamespaceName' => [
                                            'description' => '命名空间名称',
                                            'type' => 'string',
                                            'example' => 'test-ns',
                                        ],
                                        'RuleId' => [
                                            'description' => '规则ID',
                                            'type' => 'string',
                                            'example' => 'cralr-yqx1q5sir6d****',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1678341923385',
                                        ],
                                        'RetentionTagCount' => [
                                            'description' => '保留镜像个数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30',
                                        ],
                                        'Auto' => [
                                            'description' => '是否自动执行',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ScheduleTime' => [
                                            'description' => '执行周期',
                                            'type' => 'string',
                                            'example' => 'WEEK',
                                        ],
                                        'RepoName' => [
                                            'description' => '仓库名称',
                                            'type' => 'string',
                                            'example' => 'test_1',
                                        ],
                                        'Scope' => [
                                            'description' => '清理范围',
                                            'type' => 'string',
                                            'example' => 'INSTANCE',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access is denied for the user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F92D82F9-A4C4-5A4A-97B9-E495BF1B****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 39,\\n  \\"Rules\\": [\\n    {\\n      \\"NextTime\\": 1638187989000,\\n      \\"CreateTime\\": 1638187989000,\\n      \\"TagRegexp\\": \\".*-alpine\\\\n\\",\\n      \\"EnableDeleteTag\\": true,\\n      \\"InstanceId\\": \\"cri-brlg4cbj2yl****\\",\\n      \\"NamespaceName\\": \\"test-ns\\",\\n      \\"RuleId\\": \\"cralr-yqx1q5sir6d****\\",\\n      \\"ModifiedTime\\": 1678341923385,\\n      \\"RetentionTagCount\\": 30,\\n      \\"Auto\\": false,\\n      \\"ScheduleTime\\": \\"WEEK\\",\\n      \\"RepoName\\": \\"test_1\\",\\n      \\"Scope\\": \\"INSTANCE\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列举制品生命周期管理规则',
            'summary' => '列举制品生命周期管理规则。',
        ],
        'GetArtifactLifecycleRule' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-hpdfkc6utbaq****'."\n",
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cralr-a18bkiajy81****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextTime' => [
                                'description' => '下一次执行时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1701878400000',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1571926439000',
                            ],
                            'TagRegexp' => [
                                'description' => '保留镜像版本的正则表达式',
                                'type' => 'string',
                                'example' => '.*-alpine',
                            ],
                            'EnableDeleteTag' => [
                                'description' => '是否开启生命周期管理',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'cri-xkx6vujuhay0****',
                            ],
                            'NamespaceName' => [
                                'description' => '命名空间名称',
                                'type' => 'string',
                                'example' => 'test-namespace',
                            ],
                            'RuleId' => [
                                'description' => '规则ID',
                                'type' => 'string',
                                'example' => 'cralr-a18bkiajy8****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '724402D0-75CD-4794-BC20-7D37208****',
                            ],
                            'ModifiedTime' => [
                                'description' => '最近修改时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1638259914000',
                            ],
                            'RetentionTagCount' => [
                                'description' => '保留镜像个数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Auto' => [
                                'description' => '是否自动执行',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ScheduleTime' => [
                                'description' => '执行周期',
                                'type' => 'string',
                                'example' => 'WEEK',
                            ],
                            'RepoName' => [
                                'description' => '镜像仓库名称',
                                'type' => 'string',
                                'example' => 'test-repo',
                            ],
                            'Scope' => [
                                'description' => '清理范围',
                                'type' => 'string',
                                'example' => 'INSTANCE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextTime\\": 1701878400000,\\n  \\"CreateTime\\": 1571926439000,\\n  \\"TagRegexp\\": \\".*-alpine\\",\\n  \\"EnableDeleteTag\\": true,\\n  \\"IsSuccess\\": true,\\n  \\"InstanceId\\": \\"cri-xkx6vujuhay0****\\",\\n  \\"NamespaceName\\": \\"test-namespace\\",\\n  \\"RuleId\\": \\"cralr-a18bkiajy8****\\",\\n  \\"RequestId\\": \\"724402D0-75CD-4794-BC20-7D37208****\\",\\n  \\"ModifiedTime\\": 1638259914000,\\n  \\"RetentionTagCount\\": 30,\\n  \\"Code\\": \\"success\\",\\n  \\"Auto\\": true,\\n  \\"ScheduleTime\\": \\"WEEK\\",\\n  \\"RepoName\\": \\"test-repo\\",\\n  \\"Scope\\": \\"INSTANCE\\"\\n}","type":"json"}]',
            'title' => '查询制品生命周期管理规则',
            'summary' => '查询制品生命周期管理规则。',
        ],
        'DeleteArtifactLifecycleRule' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-brlg4cbj2ylkrqqq',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cralr-3v8pao9k7chb8q62',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '001AB638-C99B-5A27-8AC9-B2DBABFFEBB5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access is denied for the user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"001AB638-C99B-5A27-8AC9-B2DBABFFEBB5\\"\\n}","type":"json"}]',
            'title' => '删除制品生命周期管理规则',
            'summary' => '删除制品生命周期管理规则。',
        ],
        'CreateArtifactLifecycleRule' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-gbwfk7qbgrxe****',
                    ],
                ],
                [
                    'name' => 'Auto',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动执行',
                        'type' => 'boolean',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ScheduleTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行周期',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'WEEK',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dev-backend',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_1',
                    ],
                ],
                [
                    'name' => 'TagRegexp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留镜像版本的正则表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'release-.*',
                    ],
                ],
                [
                    'name' => 'RetentionTagCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留镜像个数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'EnableDeleteTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启生命周期管理',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '清理范围',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INSTANCE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0AA66379-B880-5123-9F6A-96BB25D****',
                            ],
                            'RuleId' => [
                                'description' => '规则ID',
                                'type' => 'string',
                                'example' => 'cralr-b6thg027zmk1****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access is denied for the user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"0AA66379-B880-5123-9F6A-96BB25D****\\",\\n  \\"RuleId\\": \\"cralr-b6thg027zmk1****\\"\\n}","type":"json"}]',
            'title' => '创建制品生命周期管理规则',
            'summary' => '创建制品生命周期管理规则。',
        ],
        'TagResources' => [
            'summary' => '给资源打标签。当前支持实例 Instance 资源。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'abilityTreeCode' => '188653',
                'abilityTreeNodes' => [
                    'FEATUREacrRKSIY1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。当前支持实例 Instance 资源。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Instance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源 ID。最多支持添加 20 个资源。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源 ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cri-1lg7vtctpqdn****',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域Id',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。最多支持输入20个标签键。如需传入该值，则不能输入空字符串。'."\n"
                                        ."\n"
                                        .'一个标签键最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-key',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。最多支持输入20个标签值。如需传入该值，可以输入空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-val',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 21,
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E9A586D0-3977-5C28-A44D-55D3A9CD53CC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceId',
                        'errorMessage' => 'The ResourceId parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceIds are not found in our records.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.RegionId',
                        'errorMessage' => 'The RegionId parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The ResourceType parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIds',
                        'errorMessage' => 'You must specify ResourceId.N.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceType',
                        'errorMessage' => 'You must specify ResourceType.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Tags',
                        'errorMessage' => 'You must specify Tags.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagKey',
                        'errorMessage' => 'You must specify Tag.N.Key.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagValue',
                        'errorMessage' => 'You must specify Tag.N.Value.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The Tag.N.Key parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The Tag.N.Value parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of Tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'QuotaExceed.TagsPerResource',
                        'errorMessage' => 'The maximum number of tags for each resource is exceeded.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'The operator is not permission for this operate',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InvalidOperation.ConcurrentModification',
                        'errorMessage' => 'The resource is modified concurrently.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E9A586D0-3977-5C28-A44D-55D3A9CD53CC\\"\\n}","type":"json"}]',
            'title' => '给资源打标签',
            'description' => '单个实例最多可绑定 20 条标签。绑定标签前，阿里云会校验资源已有标签数量，超过限制值会返回报错信息。',
        ],
        'UntagResources' => [
            'summary' => '删除资源标签。当前支持实例 Instance 资源。',
            'methods' => [
                'post',
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
            'systemTags' => [
                'abilityTreeCode' => '188658',
                'abilityTreeNodes' => [
                    'FEATUREacrRKSIY1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。当前支持实例 Instance 资源。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Instance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源 ID。最多支持添加 20 个资源。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cri-8qong6ve5p3m****',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域Id',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签键。N的取值范围为1~20。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签的键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test-key',
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否解绑资源上全部的标签，取值：'."\n"
                            ."\n"
                            .'- **true**：解绑资源上的全部标签。'."\n"
                            ."\n"
                            .'- **false**：不解绑全部标签。'."\n"
                            ."\n"
                            .'> 如果同时设置了**TagKey.n**和本参数，则本参数不生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '724402D0-75CD-4794-BC20-7D3720823AE0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The ResourceType parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIds',
                        'errorMessage' => 'You must specify ResourceId.N.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceType',
                        'errorMessage' => 'You must specify ResourceType.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The Tag.N.Key parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKeysOrDeleteAll',
                        'errorMessage' => 'The TagKeys or DeleteAll parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.TagKeys',
                        'errorMessage' => 'The maximum number of TagKeys is exceeded.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceIds are not found in our records.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'The operator is not permission for this operate	',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"724402D0-75CD-4794-BC20-7D3720823AE0\\"\\n}","type":"json"}]',
            'title' => '删除资源标签',
        ],
        'ListTagResources' => [
            'summary' => '查询资源已经绑定的标签列表。当前支持实例 Instance 资源。',
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '188659',
                'abilityTreeNodes' => [
                    'FEATUREacrRKSIY1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型定义，当前支持实例 Instance 资源。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Instance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源 ID。最多支持添加 20 个资源。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源 ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cri-5w1ztcu2kruj****',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域Id',
                        'description' => '资源所在的地域 ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。最多支持输入20个标签键。如需传入该值，则不能输入空字符串。'."\n"
                                        ."\n"
                                        .'一个标签键最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-key',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。最多支持输入20个标签值。如需传入该值，可以输入空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test-val',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：第一次查询和没有下一次查询时，均无需填写。如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAfj+3fkqd8igM6VLaQjlaYc=',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '7FF809ED-B42F-5AC3-9A17-CFE14BE32A8E',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => '标签资源列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagKey' => [
                                                    'description' => '标签的键。',
                                                    'type' => 'string',
                                                    'example' => 'test-key'."\n",
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签的值。',
                                                    'type' => 'string',
                                                    'example' => 'test-val',
                                                ],
                                                'ResourceId' => [
                                                    'description' => '资源ID',
                                                    'type' => 'string',
                                                    'example' => 'cri-w19e7qr2wibl****',
                                                ],
                                                'ResourceType' => [
                                                    'description' => '资源类型',
                                                    'type' => 'string',
                                                    'example' => 'Instance',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：第一次查询和没有下一次查询时，均无需填写。如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                                'type' => 'string',
                                'example' => 'AAAAAfj+3fkqd8igM6VLaQjlaYc='."\n",
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The ResourceType parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIdsOrTags',
                        'errorMessage' => 'You must specify ResourceId.N or Tags.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceType',
                        'errorMessage' => 'You must specify ResourceType.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagKey',
                        'errorMessage' => 'You must specify Tag.N.Key.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of Tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.NextToken',
                        'errorMessage' => 'The NextToken parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission	',
                        'errorMessage' => 'The operator is not permission for this operate',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7FF809ED-B42F-5AC3-9A17-CFE14BE32A8E\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagKey\\": \\"test-key\\\\n\\",\\n        \\"TagValue\\": \\"test-val\\",\\n        \\"ResourceId\\": \\"cri-w19e7qr2wibl****\\",\\n        \\"ResourceType\\": \\"Instance\\"\\n      }\\n    ]\\n  },\\n  \\"NextToken\\": \\"AAAAAfj+3fkqd8igM6VLaQjlaYc=\\\\n\\"\\n}","type":"json"}]',
            'title' => '查询资源标签关系',
            'description' => '- 请求中ResourceId.N 及 (Tag.N.Key,Tag.N.Value) 至少存在一个，以确定检索对象。'."\n"
                ."\n"
                .'- Tag.N是资源的标签，由一个键值对组成。仅指定Tag.N.Key时，则返回该标签键关联的所有标签值。仅指定Tag.N.Value会报错。'."\n"
                ."\n"
                .'- ResourceId.N需满足所有输入的键值对。当输入多个键值对，查询结果为资源中包含指定多个键值对的资源。',
        ],
        'GetInstance' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ModifiedTime' => [
                                'description' => '修改时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1571926560000',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6EF34B18-4228-470C-860C-D28597CF010E',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1571926439000',
                            ],
                            'InstanceName' => [
                                'description' => '实例名称',
                                'type' => 'string',
                                'example' => 'shanghai-instance1',
                            ],
                            'InstanceSpecification' => [
                                'description' => '实例规格。取值：'."\n"
                                    .'Enterprise\\_Basic：基础实例'."\n"
                                    .'Enterprise\\_Standard：标准版实例'."\n"
                                    .'Enterprise\\_Advanced：高级版实例',
                                'type' => 'string',
                                'example' => 'Enterprise_Basic',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'InstanceStatus' => [
                                'description' => '实例状态，取值：'."\n"
                                    ."\n"
                                    .'- `PENDING`：初始化中'."\n"
                                    ."\n"
                                    .'- `INIT_ERROR`：初始化失败'."\n"
                                    ."\n"
                                    .'- `STARTING`：启动中'."\n"
                                    ."\n"
                                    .'- `RUNNING`：运行中'."\n"
                                    ."\n"
                                    .'- `STOPPING`：停止中'."\n"
                                    ."\n"
                                    .'- `STOPPED`：已停止'."\n"
                                    ."\n"
                                    .'- `DELETING`：删除中'."\n"
                                    ."\n"
                                    .'- `DELETED`：已删除',
                                'type' => 'string',
                                'example' => 'RUNNING',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'cri-xkx6vujuhay0****',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID',
                                'type' => 'string',
                                'example' => 'rg-acfmv36i4isx****',
                            ],
                            'InstanceIssue' => [
                                'description' => '实例问题。',
                                'type' => 'string',
                                'example' => '实例问题，取值：'."\n"
                                    .'OSS_TOO_MANY_BUCKETS：OSS Bucket 数量超限'."\n"
                                    ."\n"
                                    .'OSS_BUCKET_ALREADY_EXISTS：同名 OSS Bucket 已存在'."\n"
                                    ."\n"
                                    .'OSS_SERVICE_ROLE_UNAUTHORIZED：OSS 权限未授权'."\n"
                                    ."\n"
                                    .'USER_NOT_REGISTERED_BY_REAL_NAME：阿里云账号未实名',
                            ],
                            'Tags' => [
                                'description' => '实例的标签集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagKey' => [
                                            'title' => '标签键',
                                            'description' => '标签键',
                                            'type' => 'string',
                                            'example' => 'test_key',
                                        ],
                                        'TagValue' => [
                                            'title' => '标签值',
                                            'description' => '标签值',
                                            'type' => 'string',
                                            'example' => 'test_value',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ModifiedTime\\": 1571926560000,\\n  \\"RequestId\\": \\"6EF34B18-4228-470C-860C-D28597CF010E\\",\\n  \\"CreateTime\\": 1571926439000,\\n  \\"InstanceName\\": \\"shanghai-instance1\\",\\n  \\"InstanceSpecification\\": \\"Enterprise_Basic\\",\\n  \\"Code\\": \\"success\\",\\n  \\"InstanceStatus\\": \\"RUNNING\\",\\n  \\"InstanceId\\": \\"cri-xkx6vujuhay0****\\",\\n  \\"IsSuccess\\": true,\\n  \\"ResourceGroupId\\": \\"rg-acfmv36i4isx****\\",\\n  \\"InstanceIssue\\": \\"实例问题，取值：\\\\nOSS_TOO_MANY_BUCKETS：OSS Bucket 数量超限\\\\n\\\\nOSS_BUCKET_ALREADY_EXISTS：同名 OSS Bucket 已存在\\\\n\\\\nOSS_SERVICE_ROLE_UNAUTHORIZED：OSS 权限未授权\\\\n\\\\nUSER_NOT_REGISTERED_BY_REAL_NAME：阿里云账号未实名\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagKey\\": \\"test_key\\",\\n      \\"TagValue\\": \\"test_value\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetInstanceResponse>\\n    <ModifiedTime>1571926560000</ModifiedTime>\\n    <RequestId>6EF34B18-4228-470C-860C-D28597CF010E</RequestId>\\n    <CreateTime>1571926439000</CreateTime>\\n    <InstanceName>shanghai-instance1</InstanceName>\\n    <InstanceSpecification>Enterprise_Basic</InstanceSpecification>\\n    <Code>success</Code>\\n    <InstanceStatus>RUNNING</InstanceStatus>\\n    <InstanceId>cri-xkx6vujuhay0****</InstanceId>\\n    <IsSuccess>true</IsSuccess>\\n</GetInstanceResponse>","errorExample":""}]',
            'title' => '查询实例信息',
            'summary' => '查询实例信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetInstanceUsage' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NamespaceUsage' => [
                                'description' => '镜像命名空间使用量',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'RepoQuota' => [
                                'description' => '镜像仓库配额',
                                'type' => 'string',
                                'example' => '1000',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A726E801-7FCF-43F9-AF1C-51B3E65D3E7A',
                            ],
                            'ChartNamespaceQuota' => [
                                'description' => 'Chart命名空间的配额数',
                                'type' => 'string',
                                'example' => '50',
                            ],
                            'RepoUsage' => [
                                'description' => '镜像仓库使用量',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'NamespaceQuota' => [
                                'description' => '镜像命名空间配额',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ChartRepoUsage' => [
                                'description' => '创建的Chart仓库的数量',
                                'type' => 'string',
                                'example' => '5',
                            ],
                            'ChartNamespaceUsage' => [
                                'description' => '创建的Chart命名空间数量',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'ChartRepoQuota' => [
                                'description' => 'Chart仓库的配额数',
                                'type' => 'string',
                                'example' => '5000',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NamespaceUsage\\": \\"4\\",\\n  \\"RepoQuota\\": \\"1000\\",\\n  \\"RequestId\\": \\"A726E801-7FCF-43F9-AF1C-51B3E65D3E7A\\",\\n  \\"ChartNamespaceQuota\\": \\"50\\",\\n  \\"RepoUsage\\": \\"2\\",\\n  \\"NamespaceQuota\\": \\"100\\",\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"ChartRepoUsage\\": \\"5\\",\\n  \\"ChartNamespaceUsage\\": \\"2\\",\\n  \\"ChartRepoQuota\\": \\"5000\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<ChartNamespaceUsage>2</ChartNamespaceUsage>\\n<ChartNamespaceQuota>50</ChartNamespaceQuota>\\n<RepoQuota>1000</RepoQuota>\\n<RequestId>A726E801-7FCF-43F9-AF1C-51B3E65D3E7A</RequestId>\\n<RepoUsage>2</RepoUsage>\\n<NamespaceQuota>100</NamespaceQuota>\\n<NamespaceUsage>4</NamespaceUsage>\\n<Code>success</Code>\\n<ChartRepoUsage>5</ChartRepoUsage>\\n<ChartRepoQuota>5000</ChartRepoQuota>","errorExample":""}]',
            'title' => '查询实例配额使用情况',
            'summary' => '查询实例配额使用情况。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInstanceRegion' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '33779',
                'abilityTreeNodes' => [
                    'FEATUREacrRKSIY1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回参数的所用语言，目前支持`zh_CN`和`en_US`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_CN',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '11F182E1-0F84-4F5B-8D3B-61E991482727',
                            ],
                            'Regions' => [
                                'description' => '地区列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LocalName' => [
                                            'description' => '地区名称',
                                            'type' => 'string',
                                            'example' => '华南1（深圳）',
                                        ],
                                        'RegionId' => [
                                            'description' => '地区ID',
                                            'type' => 'string',
                                            'example' => 'cn-shenzhen',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"11F182E1-0F84-4F5B-8D3B-61E991482727\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"华南1（深圳）\\",\\n      \\"RegionId\\": \\"cn-shenzhen\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>11F182E1-0F84-4F5B-8D3B-61E991482727</RequestId>\\n<Regions>\\n    <RegionId>cn-shenzhen</RegionId>\\n    <LocalName>华南1（深圳）</LocalName>\\n</Regions>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询实例Region列表',
            'summary' => '查询实例地域列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInstance' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'InstanceStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例状态，取值：'."\n"
                            ."\n"
                            .'- `PENDING`：初始化中。'."\n"
                            ."\n"
                            .'- `INIT_ERROR`：初始化失败。'."\n"
                            ."\n"
                            .'- `STARTING`：启动中。'."\n"
                            ."\n"
                            .'- `RUNNING`：运行中。'."\n"
                            ."\n"
                            .'- `STOPPING`：停止中。'."\n"
                            ."\n"
                            .'- `STOPPED`：已停止。'."\n"
                            ."\n"
                            .'- `DELETING`：删除中。'."\n"
                            ."\n"
                            .'- `DELETED`：已删除。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RUNNING',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号。',
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
                        'description' => '页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmv36i4is****',
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
                                'example' => 'A2A9BA68-B264-4953-9154-CE61B1C03BA6',
                            ],
                            'Code' => [
                                'description' => '返回值。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号，默认值 1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小，默认值 30。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12121',
                            ],
                            'Instances' => [
                                'description' => '实例信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ModifiedTime' => [
                                            'description' => '最近修改时间。',
                                            'type' => 'string',
                                            'example' => '1562849760000',
                                        ],
                                        'InstanceName' => [
                                            'description' => '实例名。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '1562849679000',
                                        ],
                                        'InstanceSpecification' => [
                                            'description' => '企业版规格。',
                                            'type' => 'string',
                                            'example' => 'Enterprise_Basic',
                                        ],
                                        'InstanceStatus' => [
                                            'description' => '实例状态。',
                                            'type' => 'string',
                                            'example' => 'RUNNING',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'cri-sgedpenzw80e****',
                                        ],
                                        'RegionId' => [
                                            'description' => '区域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-aek2h3aexpy****',
                                        ],
                                        'InstanceIssue' => [
                                            'description' => '实例问题。',
                                            'type' => 'string',
                                            'example' => 'oss bucket already exists',
                                        ],
                                        'Tags' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagKey' => [
                                                        'title' => '标签键',
                                                        'description' => '标签键',
                                                        'type' => 'string',
                                                    ],
                                                    'TagValue' => [
                                                        'title' => '标签值',
                                                        'description' => '标签值',
                                                        'type' => 'string',
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
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A2A9BA68-B264-4953-9154-CE61B1C03BA6\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 12121,\\n  \\"Instances\\": [\\n    {\\n      \\"ModifiedTime\\": \\"1562849760000\\",\\n      \\"InstanceName\\": \\"test\\",\\n      \\"CreateTime\\": \\"1562849679000\\",\\n      \\"InstanceSpecification\\": \\"Enterprise_Basic\\",\\n      \\"InstanceStatus\\": \\"RUNNING\\",\\n      \\"InstanceId\\": \\"cri-sgedpenzw80e****\\",\\n      \\"RegionId\\": \\"cn-shanghai\\",\\n      \\"ResourceGroupId\\": \\"rg-aek2h3aexpy****\\",\\n      \\"InstanceIssue\\": \\"oss bucket already exists\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"\\",\\n          \\"TagValue\\": \\"\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Instances>\\n    <InstanceName>test</InstanceName>\\n    <ModifiedTime>1562849760000</ModifiedTime>\\n    <InstanceSpecification>Enterprise_Basic</InstanceSpecification>\\n    <InstanceId>cri-sgedpenzw80e****</InstanceId>\\n    <InstanceStatus>RUNNING</InstanceStatus>\\n    <CreateTime>1562849679000</CreateTime>\\n    <RegionId>cn-shanghai</RegionId>\\n</Instances>\\n<IsSuccess>true</IsSuccess>\\n<TotalCount>12121</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>A2A9BA68-B264-4953-9154-CE61B1C03BA6</RequestId>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询实例列表',
            'summary' => '调用该接口查询实例列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetInstanceCount' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BC648259-91A7-4502-BED3-EDF64361FA83',
                            ],
                            'Count' => [
                                'description' => '实例数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BC648259-91A7-4502-BED3-EDF64361FA83\\",\\n  \\"Count\\": 5\\n}","type":"json"}]',
            'title' => '获取用户实例个数',
            'summary' => '获取用户实例个数。',
        ],
        'CreateInstanceVpcEndpointLinkedVpc' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-uf6pa68zxnnlc48dd****',
                    ],
                ],
                [
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vsw-uf6u0kn8x2gbzxfn2****',
                    ],
                ],
                [
                    'name' => 'ModuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置访问的模块，取值：'."\n"
                            ."\n"
                            .'- `Registry`：访问镜像仓库。'."\n"
                            ."\n"
                            .'- `Chart`：访问Helm Chart。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Registry',
                    ],
                ],
                [
                    'name' => 'EnableCreateDNSRecordInPvzt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动创建Privatezone记录，取值：'."\n"
                            ."\n"
                            .'> 如果您开启了自动创建Privatezone记录，后续添加VPC实例时都会自动创建Privatezone记录。'."\n"
                            ."\n"
                            .'- `true`：自动创建Privatezone记录。'."\n"
                            ."\n"
                            .'- `false`：不自动创建Privatezone记录。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功'."\n"
                                    .'- `true`：调用成功。'."\n"
                                    .'- `false`：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D4978DCC-ECBD-40B0-A714-EE6959B22C77',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"D4978DCC-ECBD-40B0-A714-EE6959B22C77\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>D4978DCC-ECBD-40B0-A714-EE6959B22C77</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '为实例添加可访问实例的VPC实例',
            'summary' => '为实例添加可访问实例的VPC实例。',
            'description' => '当前允许关联的VPC个数限制为3个，若您有额外需求请联系技术支持申请。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateInstanceEndpointAclPolicy' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'EndpointType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端点类型，只支持 Internet',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'internet',
                    ],
                ],
                [
                    'name' => 'Entry',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许访问的IP段',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '192.168.1.1/32',
                    ],
                ],
                [
                    'name' => 'Comment',
                    'in' => 'query',
                    'schema' => [
                        'description' => '说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ModuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要设置访问策略的模块，取值：'."\n"
                            ."\n"
                            .'- `Registry`：访问镜像仓库'."\n"
                            ."\n"
                            .'- `Chart`：访问Helm Chart',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Registry',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D735C5EC-4206-4F48-A090-307BF56BEB99',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SLB_SERVICE_ERROR',
                        'errorMessage' => 'Bad request for this user.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"D735C5EC-4206-4F48-A090-307BF56BEB99\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>D735C5EC-4206-4F48-A090-307BF56BEB99</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '为实例访问入口（限公网）创建白名单策略',
            'summary' => '为实例访问入口（限公网）创建白名单策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteInstanceEndpointAclPolicy' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'EndpointType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端点类型，只支持 Internet',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'internet',
                    ],
                ],
                [
                    'name' => 'Entry',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IP段',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '127.0.0.1/32',
                    ],
                ],
                [
                    'name' => 'ModuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置访问策略的模块，取值：'."\n"
                            ."\n"
                            .'- `Registry`：访问镜像仓库'."\n"
                            ."\n"
                            .'- `Chart`：访问Helm Chart',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Chart',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BDB1F145-F0FF-44E9-AADF-A678642A7C7D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SLB_SERVICE_ERROR',
                        'errorMessage' => 'Bad request for this user.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BDB1F145-F0FF-44E9-AADF-A678642A7C7D\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>BDB1F145-F0FF-44E9-AADF-A678642A7C7D</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '为实例访问入口（限公网）删除白名单策略',
            'summary' => '为实例访问入口（限公网）删除白名单策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteInstanceVpcEndpointLinkedVpc' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-uf6pa68zxnnlc48dd****',
                    ],
                ],
                [
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-uf6pa68zxnnlc48dd****',
                    ],
                ],
                [
                    'name' => 'ModuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置访问的模块，取值：'."\n"
                            ."\n"
                            .'- `Registry`：访问镜像仓库'."\n"
                            ."\n"
                            .'- `Chart`：访问Helm Chart',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Chart',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '20FE7A66-0044-4E23-BBEC-C434EADBD7AF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"true\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"20FE7A66-0044-4E23-BBEC-C434EADBD7AF\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>20FE7A66-0044-4E23-BBEC-C434EADBD7AF</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '移除可访问实例的VPC实例',
            'summary' => '为实例移除可访问实例的VPC实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateInstanceEndpointStatus' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'EndpointType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端点类型，只支持Internet',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'internet',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启实例访问入口，取值：'."\n"
                            ."\n"
                            .'- `true`：开启实例访问入口'."\n"
                            ."\n"
                            .'- `false`：关闭实例访问入口',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ModuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置访问的模块，取值：'."\n"
                            ."\n"
                            .'- `Registry`：访问镜像仓库'."\n"
                            ."\n"
                            .'- `Chart`：访问Helm Chart',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Chart',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2FC14396-A16A-42BA-AAE4-BB94D956DF09',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"2FC14396-A16A-42BA-AAE4-BB94D956DF09\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>2FC14396-A16A-42BA-AAE4-BB94D956DF09</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '更新实例访问入口状态',
            'summary' => '更新实例访问入口状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetInstanceEndpoint' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'EndpointType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端点类型，只支持Internet',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'internet',
                    ],
                ],
                [
                    'name' => 'ModuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问模块，取值：'."\n"
                            ."\n"
                            .'- `Registry`：镜像仓库'."\n"
                            ."\n"
                            .'- `Chart`：Helm Chart',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Registry',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '运行状态，取值：'."\n"
                                    ."\n"
                                    .'`CREATING`：创建中'."\n"
                                    ."\n"
                                    .'`RUNNING`：运行中'."\n"
                                    ."\n"
                                    .'`DELETING`：删除中',
                                'type' => 'string',
                                'example' => 'RUNNING',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8F3D5EC5-39D1-4C53-A198-48C54C658FA3',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'AclEnable' => [
                                'description' => '是否启用ACL',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Enable' => [
                                'description' => '是否开启该访问入口',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Domains' => [
                                'description' => '域名列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '域名类型，取值：'."\n"
                                                ."\n"
                                                .'- `SYSTEM`：系统域名'."\n"
                                                ."\n"
                                                .'- `USER`：用户域名',
                                            'type' => 'string',
                                            'example' => 'SYSTEM',
                                        ],
                                        'Domain' => [
                                            'description' => '访问企业版实例的域名',
                                            'type' => 'string',
                                            'example' => 'shanghai-instance1-registry.cn-shanghai.cr.aliyuncs.com',
                                        ],
                                    ],
                                ],
                            ],
                            'AclEntries' => [
                                'description' => 'ACL列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Comment' => [
                                            'description' => '添加公网白名单的备注',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Entry' => [
                                            'description' => '添加公网白名单地址段',
                                            'type' => 'string',
                                            'example' => '192.168.1.0/24',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"RUNNING\\",\\n  \\"RequestId\\": \\"8F3D5EC5-39D1-4C53-A198-48C54C658FA3\\",\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"AclEnable\\": true,\\n  \\"Enable\\": true,\\n  \\"Domains\\": [\\n    {\\n      \\"Type\\": \\"SYSTEM\\",\\n      \\"Domain\\": \\"shanghai-instance1-registry.cn-shanghai.cr.aliyuncs.com\\"\\n    }\\n  ],\\n  \\"AclEntries\\": [\\n    {\\n      \\"Comment\\": \\"1\\",\\n      \\"Entry\\": \\"192.168.1.0/24\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Status>RUNNING</Status>\\n<Domains>\\n    <Type>SYSTEM</Type>\\n    <Domain>shanghai-instance1-registry.cn-shanghai.cr.aliyuncs.com</Domain>\\n</Domains>\\n<AclEntries>\\n    <Comment>1</Comment>\\n    <Entry>192.168.1.0/24</Entry>\\n</AclEntries>\\n<IsSuccess>true</IsSuccess>\\n<AclEnable>true</AclEnable>\\n<RequestId>8F3D5EC5-39D1-4C53-A198-48C54C658FA3</RequestId>\\n<Enable>true</Enable>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询实例的访问入口',
            'summary' => '查询实例的访问入口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInstanceEndpoint' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'ModuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置访问的模块，取值：'."\n"
                            ."\n"
                            .'- `Registry`：访问镜像仓库'."\n"
                            ."\n"
                            .'- `Chart`：访问Helm Chart',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Chart',
                    ],
                ],
                [
                    'name' => 'Summary',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '1B21A877-66A2-4095-90EB-20A7781A4A67',
                            ],
                            'Endpoints' => [
                                'description' => '网络访问入口列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'RUNNING',
                                        ],
                                        'EndpointType' => [
                                            'description' => '网络访问入口类型',
                                            'type' => 'string',
                                            'example' => 'internet',
                                        ],
                                        'AclEnable' => [
                                            'description' => '打开访问控制',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Enable' => [
                                            'description' => '开启',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Domains' => [
                                            'description' => '域名列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Type' => [
                                                        'description' => '类型',
                                                        'type' => 'string',
                                                        'example' => 'SYSTEM',
                                                    ],
                                                    'Domain' => [
                                                        'description' => '域名',
                                                        'type' => 'string',
                                                        'example' => 't****-registry.cn-shanghai.cr.aliyuncs.com',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LinkedVpcs' => [
                                            'description' => '关联VPC列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'VpcId' => [
                                                        'description' => 'VPC ID',
                                                        'type' => 'string',
                                                        'example' => 'null',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'AclEntries' => [
                                            'description' => '访问控制实体列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Entry' => [
                                                        'description' => '实体信息',
                                                        'type' => 'string',
                                                        'example' => 'null',
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
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"1B21A877-66A2-4095-90EB-20A7781A4A67\\",\\n  \\"Endpoints\\": [\\n    {\\n      \\"Status\\": \\"RUNNING\\",\\n      \\"EndpointType\\": \\"internet\\",\\n      \\"AclEnable\\": true,\\n      \\"Enable\\": true,\\n      \\"Domains\\": [\\n        {\\n          \\"Type\\": \\"SYSTEM\\",\\n          \\"Domain\\": \\"t****-registry.cn-shanghai.cr.aliyuncs.com\\"\\n        }\\n      ],\\n      \\"LinkedVpcs\\": [\\n        {\\n          \\"VpcId\\": \\"null\\"\\n        }\\n      ],\\n      \\"AclEntries\\": [\\n        {\\n          \\"Entry\\": \\"null\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Endpoints>\\n    <Status>RUNNING</Status>\\n    <AclEnable>true</AclEnable>\\n    <EndpointType>internet</EndpointType>\\n    <Enable>true</Enable>\\n    <Domains>\\n        <Type>SYSTEM</Type>\\n        <Domain>t****-registry.cn-shanghai.cr.aliyuncs.com</Domain>\\n    </Domains>\\n    <AclEntries>\\n        <Entry>null</Entry>\\n    </AclEntries>\\n    <LinkedVpcs>\\n        <VpcId>null</VpcId>\\n    </LinkedVpcs>\\n</Endpoints>\\n<IsSuccess>true</IsSuccess>\\n<RequestId>1B21A877-66A2-4095-90EB-20A7781A4A67</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询实例网络访问入口列表',
            'summary' => '查询实例网络访问入口列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetInstanceVpcEndpoint' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'ModuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置访问的模块，取值：'."\n"
                            ."\n"
                            .'- `Registry`：访问镜像仓库'."\n"
                            ."\n"
                            .'- `Chart`：访问Helm Chart',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Chart',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BAE9349D-A587-4F9A-B574-9DA0EF2638D1',
                            ],
                            'Enable' => [
                                'description' => '是否开启访问控制，取值：'."\n"
                                    ."\n"
                                    .'- `true`：开启访问控制'."\n"
                                    ."\n"
                                    .'- `false`：不开启访问控制',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Domains' => [
                                'description' => '域名列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名',
                                    'type' => 'string',
                                    'example' => 'test-registry.cn-hangzhou.cr.aliyuncs.com',
                                ],
                            ],
                            'LinkedVpcs' => [
                                'description' => '关联的VPC列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'VPC信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => 'VPC状态，取值：'."\n"
                                                ."\n"
                                                .'- `CREATING`：创建中'."\n"
                                                ."\n"
                                                .'- `RUNNING`：运行中',
                                            'type' => 'string',
                                            'example' => 'CREATING',
                                        ],
                                        'VpcId' => [
                                            'description' => 'VPC ID',
                                            'type' => 'string',
                                            'example' => 'vpc-uf6aamu2nomfr1thd****',
                                        ],
                                        'Ip' => [
                                            'description' => 'IP地址',
                                            'type' => 'string',
                                            'example' => '192.168.10.11',
                                        ],
                                        'DefaultAccess' => [
                                            'description' => '缺省访问策略',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'VswitchId' => [
                                            'description' => '交换机ID',
                                            'type' => 'string',
                                            'example' => 'vsw-uf62m5vmxl2e72dk7****',
                                        ],
                                    ],
                                ],
                            ],
                            'ModuleName' => [
                                'description' => '设置访问的模块，取值：'."\n"
                                    ."\n"
                                    .'- `Registry`：访问镜像仓库'."\n"
                                    ."\n"
                                    .'- `Chart`：访问Helm Chart',
                                'type' => 'string',
                                'example' => 'Registry',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BAE9349D-A587-4F9A-B574-9DA0EF2638D1\\",\\n  \\"Enable\\": true,\\n  \\"Domains\\": [\\n    \\"test-registry.cn-hangzhou.cr.aliyuncs.com\\"\\n  ],\\n  \\"LinkedVpcs\\": [\\n    {\\n      \\"Status\\": \\"CREATING\\",\\n      \\"VpcId\\": \\"vpc-uf6aamu2nomfr1thd****\\",\\n      \\"Ip\\": \\"192.168.10.11\\",\\n      \\"DefaultAccess\\": false,\\n      \\"VswitchId\\": \\"vsw-uf62m5vmxl2e72dk7****\\"\\n    }\\n  ],\\n  \\"ModuleName\\": \\"Registry\\"\\n}","errorExample":""},{"type":"xml","example":"<GetInstanceVpcEndpointResponse>\\n    <Code>success</Code>\\n    <IsSuccess>true</IsSuccess>\\n    <RequestId>BAE9349D-A587-4F9A-B574-9DA0EF2638D1</RequestId>\\n    <Enable>true</Enable>\\n    <Domains>test-registry.cn-hangzhou.cr.aliyuncs.com</Domains>\\n    <LinkedVpcs>\\n        <Status>CREATING</Status>\\n        <VpcId>vpc-uf6aamu2nomfr1thd****</VpcId>\\n        <Ip>192.168.10.11</Ip>\\n        <DefaultAccess>false</DefaultAccess>\\n        <VswitchId>vsw-uf62m5vmxl2e72dk7****</VswitchId>\\n    </LinkedVpcs>\\n</GetInstanceVpcEndpointResponse>","errorExample":""}]',
            'title' => '获取实例VPC网络端点',
            'summary' => '获取实例VPC网络端点。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRepoSyncTaskByRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-hpdfkc6utbaq****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-hnoq7j93or3k****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待同步的镜像版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.24',
                    ],
                ],
                [
                    'name' => 'SyncRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '同步规则ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crsr-o8n4dijbumgq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => "\n"
                                    .'是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '17A4C658-AE8F-4A08-821F-EDCB5FC74EE8',
                            ],
                            'SyncTaskId' => [
                                'description' => '同步任务ID',
                                'type' => 'string',
                                'example' => 'rst-biu4u4pm4it5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"17A4C658-AE8F-4A08-821F-EDCB5FC74EE8\\",\\n  \\"SyncTaskId\\": \\"rst-biu4u4pm4it5****\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>17A4C658-AE8F-4A08-821F-EDCB5FC74EE8</RequestId>\\n<SyncTaskId>rst-biu4u4pm4it5****</SyncTaskId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建镜像仓库同步任务',
            'summary' => '根据同步规则（限手动同步规则）创建镜像仓库同步任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRepoSyncRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-hpdfkc6utbaq****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源实例命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ns1',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源实例仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'TargetRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例地区ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TargetInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-ibxs3piklys3****',
                    ],
                ],
                [
                    'name' => 'TargetNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ns1',
                    ],
                ],
                [
                    'name' => 'TargetRepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例镜像仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'TagFilter',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Tag过滤规则',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '.*',
                    ],
                ],
                [
                    'name' => 'SyncScope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '同步类型，取值：'."\n"
                            ."\n"
                            .'- `REPO`：按照镜像仓库同步'."\n"
                            ."\n"
                            .'- `NAMESPACE`：按照命名空间同步',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'REPO',
                    ],
                ],
                [
                    'name' => 'SyncRuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '同步规则名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rule',
                    ],
                ],
                [
                    'name' => 'SyncTrigger',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发同步动作，取值：'."\n"
                            ."\n"
                            .'- `INITIATIVE`：手动触发'."\n"
                            .' '."\n"
                            .'- `PASSIVE`：自动触发',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'PASSIVE',
                    ],
                ],
                [
                    'name' => 'TargetUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例所在的账号UID'."\n"
                            ."\n"
                            .'> 跨账号同步镜像时，需要使用账号UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12645940***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'SyncRuleId' => [
                                'description' => '同步规则ID',
                                'type' => 'string',
                                'example' => 'crsr-gk5p2ns1kzns****',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8F8A0BA6-7F06-4BAE-B147-10BD6A25****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"SyncRuleId\\": \\"crsr-gk5p2ns1kzns****\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"8F8A0BA6-7F06-4BAE-B147-10BD6A25****\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<SyncRuleId>crsr-gk5p2ns1kzns****</SyncRuleId>\\n<RequestId>8F8A0BA6-7F06-4BAE-B147-10BD6A25****</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建镜像仓库同步规则',
            'summary' => '创建镜像仓库同步规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRepoSyncTask' => [
            'methods' => [
                'get',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-hpdfkc6utbaq****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源实例镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-iql7jalx4g0****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源实例镜像Tag',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'tag1',
                    ],
                ],
                [
                    'name' => 'TargetRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例地域ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TargetInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cri-ibxs3piklys3****',
                    ],
                ],
                [
                    'name' => 'TargetNamespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例命名空间',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ns1',
                    ],
                ],
                [
                    'name' => 'TargetRepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例镜像仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'TargetTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例镜像Tag',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag1',
                    ],
                ],
                [
                    'name' => 'TargetUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例所在账号UID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12345***',
                    ],
                ],
                [
                    'name' => 'Override',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制覆盖已存在镜像：'."\n"
                            ."\n"
                            .'- `true`：强制覆盖已存在镜像'."\n"
                            ."\n"
                            .'- `false`：不强制覆盖已存在镜像',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8F8A0BA6-7F06-4BAE-B147-10BD6A25****',
                            ],
                            'SyncTaskId' => [
                                'description' => '同步任务ID',
                                'type' => 'string',
                                'example' => 'rst-gbch330f0c****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"8F8A0BA6-7F06-4BAE-B147-10BD6A25****\\",\\n  \\"SyncTaskId\\": \\"rst-gbch330f0c****\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>8F8A0BA6-7F06-4BAE-B147-10BD6A25****</RequestId>\\n<SyncTaskId>rst-gbch330f0c****</SyncTaskId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '手动创建仓库同步任务',
            'summary' => '手动创建同步任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRepoSyncRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-hpdfkc6utbaq****',
                    ],
                ],
                [
                    'name' => 'SyncRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '同步规则ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crsr-gk5p2ns1kzns****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '72DD4198-1BB9-47A3-BC01-EAD1A6D5E173',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"72DD4198-1BB9-47A3-BC01-EAD1A6D5E173\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>72DD4198-1BB9-47A3-BC01-EAD1A6D5E173</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除镜像仓库同步规则',
            'summary' => '删除镜像仓库同步规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRepoSyncTask' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库所在命名空间的名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ns',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nginx',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'SyncRecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '同步任务记录ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'crsr-7lph66uloi6h****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '7640819A-FB5B-4E25-A227-97717F62****',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'SyncTasks' => [
                                'description' => '同步任务列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ModifedTime' => [
                                            'description' => '修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1572839133000',
                                        ],
                                        'SyncRuleId' => [
                                            'description' => '同步规则ID',
                                            'type' => 'string',
                                            'example' => 'crsr-7lph66uloi6h****',
                                        ],
                                        'SyncTaskId' => [
                                            'description' => '同步任务ID',
                                            'type' => 'string',
                                            'example' => 'rst-4kfd7fk6pohk****',
                                        ],
                                        'TaskStatus' => [
                                            'description' => '任务状态',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1572839126000',
                                        ],
                                        'SyncBatchTaskId' => [
                                            'description' => '批量层同步任务ID',
                                            'type' => 'string',
                                            'example' => '15DEEB56-9271-4FDD-AC4D-C3A5CC2C****',
                                        ],
                                        'CrossUser' => [
                                            'description' => '是否为跨账号同步镜像，取值：'."\n"
                                                ."\n"
                                                .'- `true`：跨账号同步镜像'."\n"
                                                ."\n"
                                                .'- `false`：同账号同步镜像'."\n"
                                                ."\n"
                                                .'默认值：`false`',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SyncTransAccelerate' => [
                                            'description' => '同步传输加速',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'TaskTrigger' => [
                                            'description' => '触发策略，取值：'."\n"
                                                ."\n"
                                                .'- `PASSIVE`：自动触发同步'."\n"
                                                ."\n"
                                                .'- `INITIATIVE`：手动触发同步'."\n"
                                                ."\n"
                                                .'默认值：`PASSIVE`',
                                            'type' => 'string',
                                            'example' => 'PASSIVE',
                                        ],
                                        'ImageFrom' => [
                                            'description' => '来源镜像',
                                            'type' => 'object',
                                            'properties' => [
                                                'RepoNamespaceName' => [
                                                    'description' => '仓库命名空间',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '实例ID',
                                                    'type' => 'string',
                                                    'example' => 'cri-kmsiwlxxdcva****',
                                                ],
                                                'ImageTag' => [
                                                    'description' => '镜像TAG',
                                                    'type' => 'string',
                                                    'example' => 'v0.1',
                                                ],
                                                'RepoName' => [
                                                    'description' => '仓库名称',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地区ID',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
                                                ],
                                            ],
                                        ],
                                        'ImageTo' => [
                                            'description' => '目标镜像',
                                            'type' => 'object',
                                            'properties' => [
                                                'RepoNamespaceName' => [
                                                    'description' => '仓库命名空间',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '实例ID',
                                                    'type' => 'string',
                                                    'example' => 'cri-k77rd2eo9zttneqo',
                                                ],
                                                'ImageTag' => [
                                                    'description' => '镜像TAG',
                                                    'type' => 'string',
                                                    'example' => 'v0.1',
                                                ],
                                                'RepoName' => [
                                                    'description' => '仓库名称',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地区ID',
                                                    'type' => 'string',
                                                    'example' => 'cn-shenzhen',
                                                ],
                                            ],
                                        ],
                                        'CustomLink' => [
                                            'description' => '是否自动链接',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7640819A-FB5B-4E25-A227-97717F62****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"SyncTasks\\": [\\n    {\\n      \\"ModifedTime\\": 1572839133000,\\n      \\"SyncRuleId\\": \\"crsr-7lph66uloi6h****\\",\\n      \\"SyncTaskId\\": \\"rst-4kfd7fk6pohk****\\",\\n      \\"TaskStatus\\": \\"SUCCESS\\",\\n      \\"CreateTime\\": 1572839126000,\\n      \\"SyncBatchTaskId\\": \\"15DEEB56-9271-4FDD-AC4D-C3A5CC2C****\\",\\n      \\"CrossUser\\": true,\\n      \\"SyncTransAccelerate\\": true,\\n      \\"TaskTrigger\\": \\"PASSIVE\\",\\n      \\"ImageFrom\\": {\\n        \\"RepoNamespaceName\\": \\"test\\",\\n        \\"InstanceId\\": \\"cri-kmsiwlxxdcva****\\",\\n        \\"ImageTag\\": \\"v0.1\\",\\n        \\"RepoName\\": \\"test\\",\\n        \\"RegionId\\": \\"cn-shanghai\\"\\n      },\\n      \\"ImageTo\\": {\\n        \\"RepoNamespaceName\\": \\"test\\",\\n        \\"InstanceId\\": \\"cri-k77rd2eo9zttneqo\\",\\n        \\"ImageTag\\": \\"v0.1\\",\\n        \\"RepoName\\": \\"test\\",\\n        \\"RegionId\\": \\"cn-shenzhen\\"\\n      },\\n      \\"CustomLink\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>7640819A-FB5B-4E25-A227-97717F62****</RequestId>\\n<PageNo>1</PageNo>\\n<SyncTasks>\\n    <SyncRuleId>crsr-7lph66uloi6h****</SyncRuleId>\\n    <TaskTrigger>PASSIVE</TaskTrigger>\\n    <CrossUser>true</CrossUser>\\n    <CreateTime>1572839126000</CreateTime>\\n    <SyncBatchTaskId>15DEEB56-9271-4FDD-AC4D-C3A5CC2C****</SyncBatchTaskId>\\n    <TaskStatus>SUCCESS</TaskStatus>\\n    <SyncTaskId>rst-4kfd7fk6pohk****</SyncTaskId>\\n    <ModifedTime>1572839133000</ModifedTime>\\n    <ImageFrom>\\n        <RepoNamespaceName>test</RepoNamespaceName>\\n        <ImageTag>v0.1</ImageTag>\\n        <InstanceId>cri-kmsiwlxxdcva****</InstanceId>\\n        <RepoName>test</RepoName>\\n        <RegionId>cn-shanghai</RegionId>\\n    </ImageFrom>\\n    <ImageTo>\\n        <RepoNamespaceName>test</RepoNamespaceName>\\n        <ImageTag>v0.1</ImageTag>\\n        <InstanceId>cri-k77rd2eo9zttneqo</InstanceId>\\n        <RepoName>test</RepoName>\\n        <RegionId>cn-shenzhen</RegionId>\\n    </ImageTo>\\n</SyncTasks>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询仓库同步任务列表',
            'summary' => '查询仓库同步任务列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRepoSyncRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-namespace',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-repo',
                    ],
                ],
                [
                    'name' => 'TargetInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cri-k77rd2eo9ztt****',
                    ],
                ],
                [
                    'name' => 'TargetRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地区ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shenzhen',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '838D1602-6D8F-47FB-B60A-656645D2****',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'SyncRules' => [
                                'description' => '同步规则列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SyncTrigger' => [
                                            'description' => '触发策略，取值：'."\n"
                                                ."\n"
                                                .'- `INITIATIVE`：主动触发'."\n"
                                                ."\n"
                                                .'- `PASSIVE`：被动触发',
                                            'type' => 'string',
                                            'example' => 'PASSIVE',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1572604642000',
                                        ],
                                        'LocalRegionId' => [
                                            'description' => '源实例区域ID',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai',
                                        ],
                                        'SyncScope' => [
                                            'description' => '同步范围，取值：'."\n"
                                                ."\n"
                                                .'- `NAMESPACE`：按照命名空间同步'."\n"
                                                ."\n"
                                                .'- `REPO`：按照镜像仓库同步',
                                            'type' => 'string',
                                            'example' => 'NAMESPACE',
                                        ],
                                        'TagFilter' => [
                                            'description' => 'TAG过滤规则',
                                            'type' => 'string',
                                            'example' => '.*',
                                        ],
                                        'TargetNamespaceName' => [
                                            'description' => '目标实例命名空间名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'TargetInstanceId' => [
                                            'description' => '目标实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-k77rd2eo9ztt****',
                                        ],
                                        'TargetRepoName' => [
                                            'description' => '目标实例仓库名称',
                                            'type' => 'string',
                                            'example' => 'test-repo-target',
                                        ],
                                        'SyncRuleId' => [
                                            'description' => '同步规则ID',
                                            'type' => 'string',
                                            'example' => 'crsr-7lph66uloi6h****',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1572604642000',
                                        ],
                                        'SyncRuleName' => [
                                            'description' => '同步规则名称',
                                            'type' => 'string',
                                            'example' => 'sync-rule-1',
                                        ],
                                        'TargetRegionId' => [
                                            'description' => '目标实例地区ID',
                                            'type' => 'string',
                                            'example' => 'cn-shenzhen',
                                        ],
                                        'LocalInstanceId' => [
                                            'description' => '源实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-kmsiwlxxdcva****',
                                        ],
                                        'LocalNamespaceName' => [
                                            'description' => '源实例命名空间名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'LocalRepoName' => [
                                            'description' => '源实例仓库名称',
                                            'type' => 'string',
                                            'example' => 'test-repo-local',
                                        ],
                                        'SyncDirection' => [
                                            'description' => '同步方向，取值：'."\n"
                                                ."\n"
                                                .'- `FROM`：源实例同步到目标实例'."\n"
                                                ."\n"
                                                .'- `TO`：目标实例同步到源实例',
                                            'type' => 'string',
                                            'example' => 'FROM',
                                        ],
                                        'CrossUser' => [
                                            'description' => '是否为跨账号同步镜像，取值：'."\n"
                                                ."\n"
                                                .'- `true`：跨账号同步镜像'."\n"
                                                ."\n"
                                                .'- `false`：同账号同步镜像'."\n"
                                                ."\n"
                                                .'默认值：`false`',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"838D1602-6D8F-47FB-B60A-656645D2****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"SyncRules\\": [\\n    {\\n      \\"SyncTrigger\\": \\"PASSIVE\\",\\n      \\"CreateTime\\": 1572604642000,\\n      \\"LocalRegionId\\": \\"cn-shanghai\\",\\n      \\"SyncScope\\": \\"NAMESPACE\\",\\n      \\"TagFilter\\": \\".*\\",\\n      \\"TargetNamespaceName\\": \\"test\\",\\n      \\"TargetRepoName\\": \\"test-repo-target\\",\\n      \\"TargetInstanceId\\": \\"cri-k77rd2eo9ztt****\\",\\n      \\"SyncRuleId\\": \\"crsr-7lph66uloi6h****\\",\\n      \\"ModifiedTime\\": 1572604642000,\\n      \\"SyncRuleName\\": \\"sync-rule-1\\",\\n      \\"TargetRegionId\\": \\"cn-shenzhen\\",\\n      \\"LocalInstanceId\\": \\"cri-kmsiwlxxdcva****\\",\\n      \\"CrossUser\\": true,\\n      \\"LocalNamespaceName\\": \\"test\\",\\n      \\"SyncDirection\\": \\"FROM\\",\\n      \\"LocalRepoName\\": \\"test-repo-local\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>838D1602-6D8F-47FB-B60A-656645D2****</RequestId>\\n<SyncRules>\\n    <LocalInstanceId>cri-kmsiwlxxdcva****</LocalInstanceId>\\n    <SyncScope>NAMESPACE</SyncScope>\\n    <TagFilter>.*</TagFilter>\\n    <CreateTime>1572604642000</CreateTime>\\n    <TargetInstanceId>cri-k77rd2eo9ztt****</TargetInstanceId>\\n    <SyncDirection>FROM</SyncDirection>\\n    <SyncRuleName>sync-rule-1</SyncRuleName>\\n    <LocalRepoName>test-repo-local</LocalRepoName>\\n    <LocalNamespaceName>test</LocalNamespaceName>\\n    <SyncRuleId>crsr-7lph66uloi6h****</SyncRuleId>\\n    <TargetRepoName>test-repo-target</TargetRepoName>\\n    <ModifiedTime>1572604642000</ModifiedTime>\\n    <CrossUser>true</CrossUser>\\n    <SyncTrigger>PASSIVE</SyncTrigger>\\n    <TargetRegionId>cn-shenzhen</TargetRegionId>\\n    <TargetNamespaceName>test</TargetNamespaceName>\\n    <LocalRegionId>cn-shanghai</LocalRegionId>\\n</SyncRules>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询仓库同步规则列表',
            'summary' => '查询仓库同步规则列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRepoSyncTask' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-sgedpenzw80e****',
                    ],
                ],
                [
                    'name' => 'SyncTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '同步任务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rst-zxjkiv5oil6f****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SyncRuleId' => [
                                'description' => '同步规则ID',
                                'type' => 'string',
                                'example' => 'crsr-cllro6ho3wne****',
                            ],
                            'Progress' => [
                                'description' => '同步进度，取值：'."\n"
                                    ."\n"
                                    .'- `0`：表示同步刚开始或同步失败'."\n"
                                    ."\n"
                                    .'- `1`：表示同步成功',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A6DEF8B0-5D45-46D6-867D-8C7FF0966B07',
                            ],
                            'SyncedSize' => [
                                'description' => '已同步大小，单位 Byte',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '23655489',
                            ],
                            'TaskStatus' => [
                                'description' => '任务状态，取值：'."\n"
                                    ."\n"
                                    .'`PENDING`：同步等待中'."\n"
                                    ."\n"
                                    .'`SYNCHRONIZING`：同步进行中'."\n"
                                    ."\n"
                                    .'`SUCCESS`：同步成功'."\n"
                                    ."\n"
                                    .'`ERROR`：同步失败',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SyncTransAccelerate' => [
                                'description' => '是否同步传输加速。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'CrossUser' => [
                                'description' => '是否跨用户',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'SyncTaskId' => [
                                'description' => '同步任务ID',
                                'type' => 'string',
                                'example' => 'rst-zxjkiv5oil6f****',
                            ],
                            'SyncBatchTaskId' => [
                                'description' => '同步批任务ID',
                                'type' => 'string',
                                'example' => 'a9434731-95ef-4087-9cf4-369c8e90****',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TaskTrigger' => [
                                'description' => '同步任务触发类型，取值：'."\n"
                                    ."\n"
                                    .'`PASSIVE`：自动触发同步任务'."\n"
                                    ."\n"
                                    .'`INITIATIVE`：手动触发同步任务',
                                'type' => 'string',
                                'example' => 'PASSIVE',
                            ],
                            'ImageFrom' => [
                                'description' => '来源镜像',
                                'type' => 'object',
                                'properties' => [
                                    'RepoNamespaceName' => [
                                        'description' => '命名空间名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'InstanceId' => [
                                        'description' => '实例ID',
                                        'type' => 'string',
                                        'example' => 'cri-sgedpenzw80e****',
                                    ],
                                    'ImageTag' => [
                                        'description' => '镜像TAG',
                                        'type' => 'string',
                                        'example' => 'master',
                                    ],
                                    'RepoName' => [
                                        'description' => '仓库名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                ],
                            ],
                            'ImageTo' => [
                                'description' => '目标镜像',
                                'type' => 'object',
                                'properties' => [
                                    'RepoNamespaceName' => [
                                        'description' => '命名空间名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'InstanceId' => [
                                        'description' => '实例ID',
                                        'type' => 'string',
                                        'example' => 'cri-leqzomz5vijc****',
                                    ],
                                    'ImageTag' => [
                                        'description' => '镜像TAG',
                                        'type' => 'string',
                                        'example' => 'master',
                                    ],
                                    'RepoName' => [
                                        'description' => '仓库名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域',
                                        'type' => 'string',
                                        'example' => 'eu-west-1',
                                    ],
                                ],
                            ],
                            'LayerTasks' => [
                                'description' => '镜像层同步任务列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '镜像层同步任务列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskStatus' => [
                                            'description' => '任务状态',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'Digest' => [
                                            'description' => '镜像digest值',
                                            'type' => 'string',
                                            'example' => 'sha256:36fb85fcb5e919cb60e782397a6be04201868fe7b38ef7669fc01caec1c8fc4e',
                                        ],
                                        'SyncedSize' => [
                                            'description' => '已同步大小',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '23655489',
                                        ],
                                        'Size' => [
                                            'description' => '大小',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '23655489',
                                        ],
                                        'SyncLayerTaskId' => [
                                            'description' => '同步层任务ID',
                                            'type' => 'string',
                                            'example' => 'rslt-074x4q20fx2d****',
                                        ],
                                        'ArtifactDigest' => [
                                            'description' => '制品的digest值',
                                            'type' => 'string',
                                            'example' => 'sha256:36fb85fcb5e919cb60e782397a6be04201868fe7b38ef7669fc01caec1c8fc4e',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SyncRuleId\\": \\"crsr-cllro6ho3wne****\\",\\n  \\"Progress\\": 1,\\n  \\"RequestId\\": \\"A6DEF8B0-5D45-46D6-867D-8C7FF0966B07\\",\\n  \\"SyncedSize\\": 23655489,\\n  \\"TaskStatus\\": \\"SUCCESS\\",\\n  \\"SyncTransAccelerate\\": true,\\n  \\"CrossUser\\": true,\\n  \\"SyncTaskId\\": \\"rst-zxjkiv5oil6f****\\",\\n  \\"SyncBatchTaskId\\": \\"a9434731-95ef-4087-9cf4-369c8e90****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"TaskTrigger\\": \\"PASSIVE\\",\\n  \\"ImageFrom\\": {\\n    \\"RepoNamespaceName\\": \\"test\\",\\n    \\"InstanceId\\": \\"cri-sgedpenzw80e****\\",\\n    \\"ImageTag\\": \\"master\\",\\n    \\"RepoName\\": \\"test\\",\\n    \\"RegionId\\": \\"cn-shanghai\\"\\n  },\\n  \\"ImageTo\\": {\\n    \\"RepoNamespaceName\\": \\"test\\",\\n    \\"InstanceId\\": \\"cri-leqzomz5vijc****\\",\\n    \\"ImageTag\\": \\"master\\",\\n    \\"RepoName\\": \\"test\\",\\n    \\"RegionId\\": \\"eu-west-1\\"\\n  },\\n  \\"LayerTasks\\": [\\n    {\\n      \\"TaskStatus\\": \\"SUCCESS\\",\\n      \\"Digest\\": \\"sha256:36fb85fcb5e919cb60e782397a6be04201868fe7b38ef7669fc01caec1c8fc4e\\",\\n      \\"SyncedSize\\": 23655489,\\n      \\"Size\\": 23655489,\\n      \\"SyncLayerTaskId\\": \\"rslt-074x4q20fx2d****\\",\\n      \\"ArtifactDigest\\": \\"sha256:36fb85fcb5e919cb60e782397a6be04201868fe7b38ef7669fc01caec1c8fc4e\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<Progress>1</Progress>\\n<RequestId>A6DEF8B0-5D45-46D6-867D-8C7FF0966B07</RequestId>\\n<LayerTasks>\\n    <Digest>sha256:36fb85fcb5e919cb60e782397a6be04201868fe7b38ef7669fc01caec1c8fc4e</Digest>\\n    <Size>23655489</Size>\\n    <ArtifactDigest>sha256:36fb85fcb5e919cb60e782397a6be04201868fe7b38ef7669fc01caec1c8fc4e</ArtifactDigest>\\n    <TaskStatus>SUCCESS</TaskStatus>\\n    <SyncedSize>23655489</SyncedSize>\\n    <SyncLayerTaskId>rslt-074x4q20fx2d****</SyncLayerTaskId>\\n</LayerTasks>\\n<TaskStatus>SUCCESS</TaskStatus>\\n<SyncTaskId>rst-zxjkiv5oil6f****</SyncTaskId>\\n<Code>success</Code>\\n<SyncedSize>23655489</SyncedSize>\\n<SyncRuleId>crsr-cllro6ho3wne****</SyncRuleId>\\n<ImageFrom>\\n    <RepoNamespaceName>test</RepoNamespaceName>\\n    <ImageTag>master</ImageTag>\\n    <InstanceId>cri-sgedpenzw80e****</InstanceId>\\n    <RepoName>test</RepoName>\\n    <RegionId>cn-shanghai</RegionId>\\n</ImageFrom>\\n<TaskTrigger>null</TaskTrigger>\\n<ImageTo>\\n    <RepoNamespaceName>test</RepoNamespaceName>\\n    <ImageTag>master</ImageTag>\\n    <InstanceId>cri-leqzomz5vijc****</InstanceId>\\n    <RepoName>test</RepoName>\\n    <RegionId>eu-west-1</RegionId>\\n</ImageTo>\\n<SyncBatchTaskId>a9434731-95ef-4087-9cf4-369c8e90****</SyncBatchTaskId>","errorExample":""}]',
            'title' => '查询仓库同步任务',
            'summary' => '查询仓库同步任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称，长度为 2 - 120 位，可填写小写英文字母、数字，可使用的分隔符包括“_”、“-”、“.”（分隔符不能在首位或末位）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'namespace1',
                    ],
                ],
                [
                    'name' => 'AutoCreateRepo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动创建镜像仓库',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DefaultRepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动创建仓库默认类型，取值：'."\n"
                            ."\n"
                            .'- `PUBLIC`：公开'."\n"
                            ."\n"
                            .'- `PRIVATE`：私有',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PUBLIC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BC648259-91A7-4502-BED3-EDF64361FA83',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BC648259-91A7-4502-BED3-EDF64361FA83\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>BC648259-91A7-4502-BED3-EDF64361FA83</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建镜像仓库命名空间',
            'summary' => '创建镜像仓库命名空间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ns3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BA08C185-8F76-48D7-ACB3-BA11BF2778F9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BA08C185-8F76-48D7-ACB3-BA11BF2778F9\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>BA08C185-8F76-48D7-ACB3-BA11BF2778F9</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除镜像仓库命名空间',
            'summary' => '删除镜像仓库命名空间。',
            'description' => '> 删除镜像仓库命名空间会将存在于该命名空间下的所有仓库以及所有仓库下的镜像一并删除。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'AutoCreateRepo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许推送时自动创建仓库',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DefaultRepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '默认仓库类型，取值：'."\n"
                            ."\n"
                            .'- `PUBLIC`：公开仓库'."\n"
                            ."\n"
                            .'- `PRIVATE`：私有仓库',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PRIVATE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '90B8475C-C066-4B92-946E-4D0DECB514E8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"90B8475C-C066-4B92-946E-4D0DECB514E8\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>90B8475C-C066-4B92-946E-4D0DECB514E8</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '更新命名空间',
            'summary' => '更新命名空间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'crn-tiw8t3f8i5lta****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DefaultRepoType' => [
                                'description' => '默认仓库类型，取值：'."\n"
                                    ."\n"
                                    .'- PUBLIC：公开仓库'."\n"
                                    .'- PRIVATE：私有仓库',
                                'type' => 'string',
                                'example' => 'PUBLIC',
                            ],
                            'NamespaceId' => [
                                'description' => '命名空间ID',
                                'type' => 'string',
                                'example' => 'crn-tiw8t3f8i5lt****',
                            ],
                            'NamespaceStatus' => [
                                'description' => '命名空间状态',
                                'type' => 'string',
                                'example' => 'NORMAL',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E4BC9E21-8AA5-4582-83C1-C1209AB8196F',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'cri-kmsiwlxxdcva****',
                            ],
                            'AutoCreateRepo' => [
                                'description' => '开启自动创建仓库',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'NamespaceName' => [
                                'description' => '命名空间名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ResourceGroupId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DefaultRepoType\\": \\"PUBLIC\\",\\n  \\"NamespaceId\\": \\"crn-tiw8t3f8i5lt****\\",\\n  \\"NamespaceStatus\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"E4BC9E21-8AA5-4582-83C1-C1209AB8196F\\",\\n  \\"Code\\": \\"success\\",\\n  \\"InstanceId\\": \\"cri-kmsiwlxxdcva****\\",\\n  \\"AutoCreateRepo\\": true,\\n  \\"IsSuccess\\": true,\\n  \\"NamespaceName\\": \\"test\\",\\n  \\"ResourceGroupId\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<AutoCreateRepo>true</AutoCreateRepo>\\n<Code>success</Code>\\n<DefaultRepoType>PUBLIC</DefaultRepoType>\\n<InstanceId>cri-kmsiwlxxdcvaduwb</InstanceId>\\n<IsSuccess>true</IsSuccess>\\n<NamespaceName>test</NamespaceName>\\n<NamespcaeId>crn-tiw8t3f8i5lta4uv</NamespcaeId>\\n<NamespaceStatus>NORMAL</NamespaceStatus>\\n<RequestId>E4BC9E21-8AA5-4582-83C1-C1209AB8196F</RequestId>","errorExample":""}]',
            'title' => '查询命名空间信息',
            'summary' => '查询命名空间信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-94klsruryslx****',
                    ],
                ],
                [
                    'name' => 'NamespaceStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间状态，取值：'."\n"
                            ."\n"
                            .'- `NORMAL`：正常'."\n"
                            ."\n"
                            .'- `DELETING`：删除中',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NORMAL',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-namespace',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '一页展示的列表数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7E5FCA5-55ED-451C-9649-0BB2B93387D0',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '一页展示的列表数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Namespaces' => [
                                'description' => '命名空间列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultRepoType' => [
                                            'description' => '默认仓库类型，取值：'."\n"
                                                ."\n"
                                                .'- `PUBLIC`：公开仓库'."\n"
                                                ."\n"
                                                .'- `PRIVATE`：私有仓库',
                                            'type' => 'string',
                                            'example' => 'PUBLIC',
                                        ],
                                        'NamespaceStatus' => [
                                            'description' => '命名空间状态，取值：'."\n"
                                                ."\n"
                                                .'- `NORMAL`：正常'."\n"
                                                ."\n"
                                                .'- `DELETING`：删除中',
                                            'type' => 'string',
                                            'example' => 'NORMAL',
                                        ],
                                        'NamespaceId' => [
                                            'description' => '命名空间ID',
                                            'type' => 'string',
                                            'example' => 'crn-tiw8t3f8i5lt****',
                                        ],
                                        'AutoCreateRepo' => [
                                            'description' => '开启自动创建仓库',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-94klsruryslx****',
                                        ],
                                        'NamespaceName' => [
                                            'description' => '命名空间名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfm4n5kzyf2fbi',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B7E5FCA5-55ED-451C-9649-0BB2B93387D0\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"Namespaces\\": [\\n    {\\n      \\"DefaultRepoType\\": \\"PUBLIC\\",\\n      \\"NamespaceStatus\\": \\"NORMAL\\",\\n      \\"NamespaceId\\": \\"crn-tiw8t3f8i5lt****\\",\\n      \\"AutoCreateRepo\\": true,\\n      \\"InstanceId\\": \\"cri-94klsruryslx****\\",\\n      \\"NamespaceName\\": \\"test\\",\\n      \\"ResourceGroupId\\": \\"rg-acfm4n5kzyf2fbi\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<Namespaces>\\n    <NamespaceStatus>NORMAL</NamespaceStatus>\\n    <NamespaceName>test</NamespaceName>\\n    <DefaultRepoType>PUBLIC</DefaultRepoType>\\n    <InstanceId>cri-94klsruryslx****</InstanceId>\\n    <AutoCreateRepo>true</AutoCreateRepo>\\n    <NamespaceId>crn-tiw8t3f8i5lt****</NamespaceId>\\n</Namespaces>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>B7E5FCA5-55ED-451C-9649-0BB2B93387D0</RequestId>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询命名空间列表',
            'summary' => '查询命名空间列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'namespace01',
                    ],
                ],
                [
                    'name' => 'RepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库类型，取值：'."\n"
                            ."\n"
                            .'- `PUBLIC`：公开仓库'."\n"
                            ."\n"
                            .'- `PRIVATE`：私有仓库'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'PRIVATE',
                    ],
                ],
                [
                    'name' => 'Summary',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库摘要',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'Detail',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库详细描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'TagImmutability',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像tag不可变性，取值：'."\n"
                            ."\n"
                            .'- `true`：开启'."\n"
                            ."\n"
                            .'- `false`：关闭',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RepoId' => [
                                'description' => '镜像仓库 ID',
                                'type' => 'string',
                                'example' => 'crr-xwvi3osiy4ff****',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '886FB272-15C3-44FC-AA54-F4ABD5B93A28',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"RepoId\\": \\"crr-xwvi3osiy4ff****\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"886FB272-15C3-44FC-AA54-F4ABD5B93A28\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>886FB272-15C3-44FC-AA54-F4ABD5B93A28</RequestId>\\n<RepoId>crr-xwvi3osiy4ff****</RepoId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建镜像仓库',
            'summary' => '创建镜像仓库。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'crr-l4933wbcmun2****',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-repo',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-namespace',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => "\n"
                                    .'是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '47DD9D56-09A0-4C52-B520-C3805DBAB96B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"47DD9D56-09A0-4C52-B520-C3805DBAB96B\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>47DD9D56-09A0-4C52-B520-C3805DBAB96B</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除镜像仓库',
            'summary' => '删除镜像仓库。',
            'description' => '注意这个操作会将存在于该仓库下的所有镜像一并删除。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8p****',
                    ],
                ],
                [
                    'name' => 'RepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库类型，取值：'."\n"
                            ."\n"
                            .'- `PUBLIC`：公开仓库'."\n"
                            ."\n"
                            .'- `PRIVATE`：私有仓库',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'PUBLIC',
                    ],
                ],
                [
                    'name' => 'Summary',
                    'in' => 'query',
                    'schema' => [
                        'description' => '摘要信息',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test repo',
                    ],
                ],
                [
                    'name' => 'Detail',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库介绍',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'repo-for-test',
                    ],
                ],
                [
                    'name' => 'TagImmutability',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像tag不可变性，取值：'."\n"
                            ."\n"
                            .'- `true`：开启'."\n"
                            ."\n"
                            .'- `false`：关闭',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ejiayou-other',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dsp/domain-microapp',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'CC43EC6B-0DD4-40AE-8811-B0519617051A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"CC43EC6B-0DD4-40AE-8811-B0519617051A\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRepositoryResponse>\\n    <Code>success</Code>\\n    <IsSuccess>true</IsSuccess>\\n    <RequestId>CC43EC6B-0DD4-40AE-8811-B0519617051A</RequestId>\\n</UpdateRepositoryResponse>","errorExample":""}]',
            'title' => '更新仓库信息',
            'summary' => '更新仓库信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库状态，取值：'."\n"
                            ."\n"
                            .'- `NORMAL`：正常'."\n"
                            ."\n"
                            .'- `DELETING`：删除中'."\n"
                            ."\n"
                            .'- `DELETED`：已删除'."\n"
                            ."\n"
                            .'- `ALL`：所有仓库状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALL',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'repo-test',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'repo-namespace-test',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '一页展示的列表数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5241C090-DA69-4B0F-8E3F-2F24FDE1110E',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Repositories' => [
                                'description' => '仓库列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Summary' => [
                                            'description' => '摘要信息',
                                            'type' => 'string',
                                            'example' => 'test OK',
                                        ],
                                        'RepoBuildType' => [
                                            'description' => '仓库构建类型，取值：'."\n"
                                                ."\n"
                                                .'- `AUTO`：自动触发构建'."\n"
                                                ."\n"
                                                .'- `MANUAL`：手动触发构建',
                                            'type' => 'string',
                                            'example' => 'MANUAL',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '最近修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1564153576000',
                                        ],
                                        'RepoId' => [
                                            'description' => '仓库ID',
                                            'type' => 'string',
                                            'example' => 'crr-03cuozrsqhkw****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1564153576000',
                                        ],
                                        'RepoNamespaceName' => [
                                            'description' => '仓库命名空间',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'TagImmutability' => [
                                            'description' => '镜像tag不可变性',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-kmsiwlxxdcv****',
                                        ],
                                        'RepoType' => [
                                            'description' => '仓库类型，取值：'."\n"
                                                ."\n"
                                                .'- `PUBLIC`：公开'."\n"
                                                ."\n"
                                                .'- `PRIVATE`：私有',
                                            'type' => 'string',
                                            'example' => 'PRIVATE',
                                        ],
                                        'RepoStatus' => [
                                            'description' => '仓库状态',
                                            'type' => 'string',
                                            'example' => 'NORMAL',
                                        ],
                                        'RepoName' => [
                                            'description' => '仓库名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfm4n5kzyfxxxx'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5241C090-DA69-4B0F-8E3F-2F24FDE1110E\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"Repositories\\": [\\n    {\\n      \\"Summary\\": \\"test OK\\",\\n      \\"RepoBuildType\\": \\"MANUAL\\",\\n      \\"ModifiedTime\\": 1564153576000,\\n      \\"RepoId\\": \\"crr-03cuozrsqhkw****\\",\\n      \\"CreateTime\\": 1564153576000,\\n      \\"RepoNamespaceName\\": \\"test\\",\\n      \\"TagImmutability\\": true,\\n      \\"InstanceId\\": \\"cri-kmsiwlxxdcv****\\",\\n      \\"RepoType\\": \\"PRIVATE\\",\\n      \\"RepoStatus\\": \\"NORMAL\\",\\n      \\"RepoName\\": \\"test\\",\\n      \\"ResourceGroupId\\": \\"rg-acfm4n5kzyfxxxx\\\\n\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Repositories>\\n    <RepoNamespaceName>test</RepoNamespaceName>\\n    <TagImmutability>true</TagImmutability>\\n    <RepoBuildType>MANUAL</RepoBuildType>\\n    <ModifiedTime>1564153576000</ModifiedTime>\\n    <RepoType>PRIVATE</RepoType>\\n    <RepoStatus>NORMAL</RepoStatus>\\n    <InstanceId>cri-kmsiwlxxdcv****</InstanceId>\\n    <CreateTime>1564153576000</CreateTime>\\n    <RepoName>test</RepoName>\\n    <Summary>test OK</Summary>\\n    <RepoId>crr-03cuozrsqhkw****</RepoId>\\n</Repositories>\\n<IsSuccess>true</IsSuccess>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>5241C090-DA69-4B0F-8E3F-2F24FDE1110E</RequestId>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询镜像仓库列表',
            'summary' => '查询镜像仓库列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'RepoId、RepoNamespaceName、RepoName不可同时为空，至少需传入1个。',
                        'description' => '仓库ID。该 API 支持通过 RepoId 查询，或通过 RepoNamespaceName+RepoName 查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'crr-03cuozrsqhkw****',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'RepoId、RepoNamespaceName、RepoName不可同时为空，至少需传入1个。',
                        'description' => '仓库命名空间名称。该 API 支持通过 RepoId 查询，或通过 RepoNamespaceName+RepoName 查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'RepoId、RepoNamespaceName、RepoName不可同时为空，至少需传入1个。',
                        'description' => '仓库名称。该 API 支持通过 RepoId 查询，或通过 RepoNamespaceName+RepoName 查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Summary' => [
                                'description' => '摘要信息',
                                'type' => 'string',
                                'example' => 'Automatically created repository',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1570759546000',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'cri-kmsiwlxxdcva****',
                            ],
                            'RepoStatus' => [
                                'description' => '仓库状态',
                                'type' => 'string',
                                'example' => 'NORMAL',
                            ],
                            'RepoType' => [
                                'description' => '仓库类型，取值：'."\n"
                                    ."\n"
                                    .'- `PUBLIC`：公开仓库'."\n"
                                    ."\n"
                                    .'- `PRIVATE`：私有仓库',
                                'type' => 'string',
                                'example' => 'PRIVATE',
                            ],
                            'RepoBuildType' => [
                                'description' => '仓库构建类型，取值：'."\n"
                                    ."\n"
                                    .'- `MANUAL`：手动触发构建'."\n"
                                    ."\n"
                                    .'- `AUTO`：自动触发构建',
                                'type' => 'string',
                                'example' => 'MANUAL',
                            ],
                            'ModifiedTime' => [
                                'description' => '最近修改时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1570759546100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '915E6734-3E50-4640-8DBA-126D2D94DE29',
                            ],
                            'RepoId' => [
                                'description' => '仓库ID',
                                'type' => 'string',
                                'example' => 'crr-l5eoubonp0l****',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RepoNamespaceName' => [
                                'description' => '命名空间名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'TagImmutability' => [
                                'description' => '镜像tag不可变性，取值：'."\n"
                                    ."\n"
                                    .'- `true`：开启'."\n"
                                    ."\n"
                                    .'- `false`：关闭',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RepoName' => [
                                'description' => '仓库名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'Detail' => [
                                'description' => '细节信息',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID',
                                'type' => 'string',
                                'example' => 'rg-acfmv36i4is****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Summary\\": \\"Automatically created repository\\",\\n  \\"CreateTime\\": 1570759546000,\\n  \\"IsSuccess\\": true,\\n  \\"InstanceId\\": \\"cri-kmsiwlxxdcva****\\",\\n  \\"RepoStatus\\": \\"NORMAL\\",\\n  \\"RepoType\\": \\"PRIVATE\\",\\n  \\"RepoBuildType\\": \\"MANUAL\\",\\n  \\"ModifiedTime\\": 1570759546100,\\n  \\"RequestId\\": \\"915E6734-3E50-4640-8DBA-126D2D94DE29\\",\\n  \\"RepoId\\": \\"crr-l5eoubonp0l****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"RepoNamespaceName\\": \\"test\\",\\n  \\"TagImmutability\\": true,\\n  \\"RepoName\\": \\"test\\",\\n  \\"Detail\\": \\"test\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmv36i4is****\\"\\n}","errorExample":""},{"type":"xml","example":"<RepoNamespaceName>test</RepoNamespaceName>\\n<IsSuccess>true</IsSuccess>\\n<RequestId>915E6734-3E50-4640-8DBA-126D2D94DE29</RequestId>\\n<InstanceId>cri-kmsiwlxxdcva****</InstanceId>\\n<CreateTime>1570759546000</CreateTime>\\n<RepoName>test</RepoName>\\n<Code>success</Code>\\n<TagImmutability>true</TagImmutability>\\n<RepoBuildType>MANUAL</RepoBuildType>\\n<ModifiedTime>1570759546100</ModifiedTime>\\n<RepoType>PRIVATE</RepoType>\\n<RepoStatus>NORMAL</RepoStatus>\\n<Summary>Automatically created repository</Summary>\\n<RepoId>crr-l5eoubonp0l****</RepoId>\\n<Detail>test</Detail>","errorExample":""}]',
            'title' => '查询仓库信息',
            'summary' => '查询仓库信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRepoTag' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-shac42yvqzv****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ns',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'FromTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源镜像版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'ToTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标镜像版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码'."\n",
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID'."\n",
                                'type' => 'string',
                                'example' => 'C4C7DD0C-C9D6-437A-A7EE-8BY*****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access is denied for the user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"C4C7DD0C-C9D6-437A-A7EE-8BY*****\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>C4C7DD0C-C9D6-437A-A7EE-8BY*****</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建仓库 Tag',
            'summary' => '为仓库中现有镜像版本生成新版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRepoTag' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-xwvi3osiy4ff****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.24',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '96E66B3A-C81A-48BE-ACD6-C0AB1F9313C0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"96E66B3A-C81A-48BE-ACD6-C0AB1F9313C0\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>96E66B3A-C81A-48BE-ACD6-C0AB1F9313C0</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除镜像',
            'summary' => '删除镜像。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRepoTag' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8p****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '031572FA-7D8F-4C05-B790-1071E0E05DE6',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Images' => [
                                'description' => '镜像列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'NORMAL',
                                        ],
                                        'ImageSize' => [
                                            'description' => '镜像大小，单位 Byte',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '27107966',
                                        ],
                                        'ImageCreate' => [
                                            'description' => '镜像创建时间',
                                            'type' => 'string',
                                            'example' => '1572839125000',
                                        ],
                                        'Digest' => [
                                            'description' => 'digest值',
                                            'type' => 'string',
                                            'example' => '67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1****',
                                        ],
                                        'ImageUpdate' => [
                                            'description' => '镜像更新时间',
                                            'type' => 'string',
                                            'example' => '1572875608000',
                                        ],
                                        'Tag' => [
                                            'description' => '镜像TAG',
                                            'type' => 'string',
                                            'example' => 'v0.1',
                                        ],
                                        'ImageId' => [
                                            'description' => '镜像ID',
                                            'type' => 'string',
                                            'example' => '45023655bf39c382e26a8607d057c27871dee163c1ecf48cc1ebf2a1****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"031572FA-7D8F-4C05-B790-1071E0E05DE6\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"Images\\": [\\n    {\\n      \\"Status\\": \\"NORMAL\\",\\n      \\"ImageSize\\": 27107966,\\n      \\"ImageCreate\\": \\"1572839125000\\",\\n      \\"Digest\\": \\"67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1****\\",\\n      \\"ImageUpdate\\": \\"1572875608000\\",\\n      \\"Tag\\": \\"v0.1\\",\\n      \\"ImageId\\": \\"45023655bf39c382e26a8607d057c27871dee163c1ecf48cc1ebf2a1****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>031572FA-7D8F-4C05-B790-1071E0E05DE6</RequestId>\\n<Images>\\n    <Status>NORMAL</Status>\\n    <ImageCreate>1572839125000</ImageCreate>\\n    <ImageSize>27107966</ImageSize>\\n    <Digest>67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1****</Digest>\\n    <ImageId>45023655bf39c382e26a8607d057c27871dee163c1ecf48cc1ebf2a1****</ImageId>\\n    <ImageUpdate>1572875608000</ImageUpdate>\\n    <Tag>v0.1</Tag>\\n</Images>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询镜像版本（Tag）列表',
            'summary' => '查询镜像版本（Tag）列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRepoTagLayers' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-v7m9m2g0qkqjf56p',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'master',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像digest',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sha256:c851258edfe02c14772a1a3c0194a8aeb2a08c0db5e51371165b3610946f0953',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => "\n"
                                    .'是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BC648259-91A7-4502-BED3-EDF64361FA83',
                            ],
                            'Layers' => [
                                'description' => '镜像层级列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '镜像单层信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'BlobDigest' => [
                                            'description' => '镜像单层digest',
                                            'type' => 'string',
                                            'example' => 'sha256:a3ed95caeb02ffe68cdd9fd84406680ae93d633cb16422d00e8a7c22955b46d4',
                                        ],
                                        'LayerIndex' => [
                                            'description' => '层堆叠顺序号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'LayerInstruction' => [
                                            'description' => '镜像层命令',
                                            'type' => 'string',
                                            'example' => 'CMD',
                                        ],
                                        'LayerCMD' => [
                                            'description' => '镜像层执行操作内容',
                                            'type' => 'string',
                                            'example' => '["bash"]',
                                        ],
                                        'BlobSize' => [
                                            'description' => '镜像层大小',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '32',
                                        ],
                                    ],
                                    'example' => '{}',
                                ],
                                'example' => '[]',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BC648259-91A7-4502-BED3-EDF64361FA83\\",\\n  \\"Layers\\": [\\n    {\\n      \\"BlobDigest\\": \\"sha256:a3ed95caeb02ffe68cdd9fd84406680ae93d633cb16422d00e8a7c22955b46d4\\",\\n      \\"LayerIndex\\": 1,\\n      \\"LayerInstruction\\": \\"CMD\\",\\n      \\"LayerCMD\\": \\"[\\\\\\"bash\\\\\\"]\\",\\n      \\"BlobSize\\": 32\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取某Tag对应镜像的层数据',
            'summary' => '获取某Tag对应镜像层数据。',
        ],
        'GetRepoTagManifest' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'master',
                    ],
                ],
                [
                    'name' => 'SchemaVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Schema版本，可选1和2。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-kwgb20p8wwmh****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D39D7151-0299-47E3-B948-E49E1EA8D406',
                            ],
                            'Manifest' => [
                                'description' => 'Manifest信息',
                                'type' => 'object',
                                'properties' => [
                                    'Tag' => [
                                        'description' => '镜像TAG',
                                        'type' => 'string',
                                        'example' => 'master',
                                    ],
                                    'Name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'null',
                                    ],
                                    'MediaType' => [
                                        'description' => '类型',
                                        'type' => 'string',
                                        'example' => 'application/vnd.docker.distribution.manifest.v2+json',
                                    ],
                                    'SchemaVersion' => [
                                        'description' => 'schema版本',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'Architecture' => [
                                        'description' => '架构',
                                        'type' => 'string',
                                        'example' => 'amd64',
                                    ],
                                    'FsLayers' => [
                                        'description' => '文件层信息',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'BlobSum' => [
                                                    'description' => '块sum值',
                                                    'type' => 'string',
                                                    'example' => 'null',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'History' => [
                                        'description' => '历史信息',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'V1Compatibility' => [
                                                    'description' => 'v1兼容性',
                                                    'type' => 'object',
                                                    'example' => 'null',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Signatures' => [
                                        'description' => '签名列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Signature' => [
                                                    'description' => '签名信息',
                                                    'type' => 'string',
                                                    'example' => 'null',
                                                ],
                                                'Header' => [
                                                    'description' => '头信息',
                                                    'type' => 'object',
                                                    'example' => 'null',
                                                ],
                                                'Protected' => [
                                                    'description' => '受保护',
                                                    'type' => 'string',
                                                    'example' => 'null',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Layers' => [
                                        'description' => '层列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Digest' => [
                                                    'description' => 'digest值',
                                                    'type' => 'string',
                                                    'example' => 'sha256:e692418e4cbaf90ca69d05a66403747baa33ee08806650b51fab815ad7fc331f',
                                                ],
                                                'MediaType' => [
                                                    'description' => '文件类型',
                                                    'type' => 'string',
                                                    'example' => 'application/vnd.docker.image.rootfs.diff.tar.gzip',
                                                ],
                                                'Size' => [
                                                    'description' => '大小，单位 Byte',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '32654',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Config' => [
                                        'description' => '配置信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'Digest' => [
                                                'description' => 'digest值',
                                                'type' => 'string',
                                                'example' => 'sha256:b5b2b2c507a0944348e0303114d8d93aaaa081732b86451d9bce1f432a537bc7',
                                            ],
                                            'MediaType' => [
                                                'description' => '文件类型',
                                                'type' => 'string',
                                                'example' => 'application/vnd.docker.container.image.v1+json',
                                            ],
                                            'Size' => [
                                                'description' => '大小，单位 Byte',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '7023',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"D39D7151-0299-47E3-B948-E49E1EA8D406\\",\\n  \\"Manifest\\": {\\n    \\"Tag\\": \\"master\\",\\n    \\"Name\\": \\"null\\",\\n    \\"MediaType\\": \\"application/vnd.docker.distribution.manifest.v2+json\\",\\n    \\"SchemaVersion\\": 2,\\n    \\"Architecture\\": \\"amd64\\",\\n    \\"FsLayers\\": [\\n      {\\n        \\"BlobSum\\": \\"null\\"\\n      }\\n    ],\\n    \\"History\\": [\\n      {\\n        \\"V1Compatibility\\": null\\n      }\\n    ],\\n    \\"Signatures\\": [\\n      {\\n        \\"Signature\\": \\"null\\",\\n        \\"Header\\": null,\\n        \\"Protected\\": \\"null\\"\\n      }\\n    ],\\n    \\"Layers\\": [\\n      {\\n        \\"Digest\\": \\"sha256:e692418e4cbaf90ca69d05a66403747baa33ee08806650b51fab815ad7fc331f\\",\\n        \\"MediaType\\": \\"application/vnd.docker.image.rootfs.diff.tar.gzip\\",\\n        \\"Size\\": 32654\\n      }\\n    ],\\n    \\"Config\\": {\\n      \\"Digest\\": \\"sha256:b5b2b2c507a0944348e0303114d8d93aaaa081732b86451d9bce1f432a537bc7\\",\\n      \\"MediaType\\": \\"application/vnd.docker.container.image.v1+json\\",\\n      \\"Size\\": 7023\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>D39D7151-0299-47E3-B948-E49E1EA8D406</RequestId>\\n<Manifest>\\n    <Architecture>null</Architecture>\\n    <SchemaVersion>2</SchemaVersion>\\n    <MediaType>application/vnd.docker.distribution.manifest.v2+json</MediaType>\\n    <Tag>master</Tag>\\n    <Name>null</Name>\\n    <FsLayers>\\n        <BlobSum>null</BlobSum>\\n    </FsLayers>\\n    <History>\\n        <V1Compatibility>null</V1Compatibility>\\n    </History>\\n    <Signatures>\\n        <Protected>null</Protected>\\n        <Header>null</Header>\\n        <Signature>null</Signature>\\n    </Signatures>\\n    <Layers>\\n        <Digest>sha256:e692418e4cbaf90ca69d05a66403747baa33ee08806650b51fab815ad7fc331f</Digest>\\n        <Size>32654</Size>\\n        <MediaType>application/vnd.docker.image.rootfs.diff.tar.gzip</MediaType>\\n    </Layers>\\n    <Config>\\n        <Digest>sha256:b5b2b2c507a0944348e0303114d8d93aaaa081732b86451d9bce1f432a537bc7</Digest>\\n        <Size>7023</Size>\\n        <MediaType>application/vnd.docker.container.image.v1+json</MediaType>\\n    </Config>\\n</Manifest>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询镜像版本 Manifest 信息',
            'summary' => '查询单架构镜像版本Manifest信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRepoTag' => [
            'summary' => '获取单个镜像Tag信息。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8p****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态，取值：'."\n"
                                    ."\n"
                                    .'- `NORMAL`：正常镜像'."\n"
                                    ."\n"
                                    .'- `DELETING`：镜像删除中',
                                'type' => 'string',
                                'example' => 'NORMAL',
                            ],
                            'ImageCreate' => [
                                'description' => '镜像创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1572839125000',
                            ],
                            'ImageSize' => [
                                'description' => '镜像大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '27107966',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '031572FA-7D8F-4C05-B790-1071E0E05DE6',
                            ],
                            'Digest' => [
                                'description' => 'digest值',
                                'type' => 'string',
                                'example' => '67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1****',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ImageUpdate' => [
                                'description' => '镜像更新时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1572875608000',
                            ],
                            'Tag' => [
                                'description' => '仓库版本',
                                'type' => 'string',
                                'example' => '1.0',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ImageId' => [
                                'description' => '镜像ID',
                                'type' => 'string',
                                'example' => '45023655bf39c382e26a8607d057c27871dee163c1ecf48cc1ebf2a1****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"NORMAL\\",\\n  \\"ImageCreate\\": 1572839125000,\\n  \\"ImageSize\\": 27107966,\\n  \\"RequestId\\": \\"031572FA-7D8F-4C05-B790-1071E0E05DE6\\",\\n  \\"Digest\\": \\"67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"ImageUpdate\\": 1572875608000,\\n  \\"Tag\\": \\"1.0\\",\\n  \\"IsSuccess\\": true,\\n  \\"ImageId\\": \\"45023655bf39c382e26a8607d057c27871dee163c1ecf48cc1ebf2a1****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetRepoTagResponse>\\n    <Status>NORMAL</Status>\\n    <ImageCreate>1572839125000</ImageCreate>\\n    <ImageSize>27107966</ImageSize>\\n    <RequestId>031572FA-7D8F-4C05-B790-1071E0E05DE6</RequestId>\\n    <Digest>67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1****</Digest>\\n    <Code>success</Code>\\n    <ImageUpdate>1572875608000</ImageUpdate>\\n    <Tag>1.0</Tag>\\n    <IsSuccess>true</IsSuccess>\\n    <ImageId>45023655bf39c382e26a8607d057c27871dee163c1ecf48cc1ebf2a1****</ImageId>\\n</GetRepoTagResponse>","errorExample":""}]',
            'title' => '查询某镜像的标签信息',
        ],
        'CreateRepoTagScanTask' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-xwvi3osiy4ff****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.24',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像digest',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sha256:815386ebbe9a3490f38785ab11bda34ec8dacf4634af77b8912832d4f85dca04',
                    ],
                ],
                [
                    'name' => 'ScanService',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扫描引擎类型'."\n"
                            .'- `SAS_SCAN_SERVICE`, 云安全扫描引擎（需要付费开通）'."\n"
                            .'- `ACR_SCAN_SERVICE`, ACR扫描引擎',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACR_SCAN_SERVICE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => "\n"
                                    .'是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BC648259-91A7-4502-BED3-EDF64361FA83',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BC648259-91A7-4502-BED3-EDF64361FA83\\"\\n}","type":"json"}]',
            'title' => '创建镜像安全扫描任务',
            'summary' => '创建镜像安全扫描任务。',
        ],
        'GetRepoTagScanStatus' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-2j88dtld8yel****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'crr-uf082u9dg8do****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像Tag',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ScanTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像扫描任务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '838152F9-F725-5A52-A344-8972D65AC045',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像digest值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1d529',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '镜像版本扫描状态，取值：'."\n"
                                    ."\n"
                                    .'- `SCANNING`：扫描中'."\n"
                                    ."\n"
                                    .'- `COMPLETE`：扫描完成'."\n"
                                    ."\n"
                                    .'- `FAILED`：扫描失败'."\n"
                                    ."\n"
                                    .'- `RETRYING`：重试中',
                                'type' => 'string',
                                'example' => 'COMPLETE',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BC648259-91A7-4502-BED3-EDF64361FA83',
                            ],
                            'ScanService' => [
                                'description' => '扫描引擎类型'."\n"
                                    .'- `ACR_SCAN_SERVICE`：acr的trivy扫描引擎'."\n"
                                    .'- `SAS_SCAN_SERVICE`：云安全扫描引擎',
                                'type' => 'string',
                                'example' => 'ACR_SCAN_SERVICE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"COMPLETE\\",\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BC648259-91A7-4502-BED3-EDF64361FA83\\",\\n  \\"ScanService\\": \\"ACR_SCAN_SERVICE\\"\\n}","type":"json"}]',
            'title' => '获取镜像版本扫描状态',
            'summary' => '获取镜像版本扫描状态。',
        ],
        'GetRepoTagScanSummary' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-2j88dtld8yel****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'crr-c2i5yk6h6pu9d5o8',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ScanTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像扫描任务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47A3E5A3-6AD4-5F02-93B8-59F778AE25D4',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'digest值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sha256:c9f370a4eb1c00d0b0d7212a0a9fa4a7697756c90f0f680afaf9737a25725f4c',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UnknownSeverity' => [
                                'description' => '未知等级漏洞数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BC648259-91A7-4502-BED3-EDF64361FA83',
                            ],
                            'TotalSeverity' => [
                                'description' => '总漏洞数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '196',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'MediumSeverity' => [
                                'description' => '中危漏洞数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '81',
                            ],
                            'IsSuccess' => [
                                'description' => "\n"
                                    .'是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HighSeverity' => [
                                'description' => '高危漏洞数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '22',
                            ],
                            'LowSeverity' => [
                                'description' => '低危漏洞数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '89',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UnknownSeverity\\": 4,\\n  \\"RequestId\\": \\"BC648259-91A7-4502-BED3-EDF64361FA83\\",\\n  \\"TotalSeverity\\": 196,\\n  \\"Code\\": \\"success\\",\\n  \\"MediumSeverity\\": 81,\\n  \\"IsSuccess\\": true,\\n  \\"HighSeverity\\": 22,\\n  \\"LowSeverity\\": 89\\n}","type":"json"}]',
            'title' => '获取镜像版本扫描结果数目',
            'summary' => '获取镜像版本扫描结果数目。',
        ],
        'ListRepoTagScanResult' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-2j88dtld8yel****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'crr-uf082u9dg8do****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ScanTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像扫描任务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6b0b094f-8a90-4f8f-b660-2427aed0****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扫描结果列表页码',
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
                        'description' => '扫描结果列表每页展示数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Severity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扫描漏洞等级，取值：'."\n"
                            ."\n"
                            .'- `High`：高危'."\n"
                            ."\n"
                            .'- `Medium`：中危'."\n"
                            ."\n"
                            .'- `Low`：低危'."\n"
                            ."\n"
                            .'- `Unknown`：未知',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'High',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像digest',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sha256:6b0b094f8a904f8fb6602427aed0d1fa',
                    ],
                ],
                [
                    'name' => 'ScanType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '漏洞类型，取值：'."\n"
                            ."\n"
                            .'- `cve`：镜像系统漏洞'."\n"
                            .'- `sca`：镜像应用漏洞',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sca',
                    ],
                ],
                [
                    'name' => 'VulQueryKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扫描模糊查询词，支持按照CVE名称模糊查询',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CVE-2021',
                    ],
                ],
                [
                    'name' => 'FilterValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置查询的参数，当值为`FixCmd`时只返回`FixCmd`的结果，其余字段不返回',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FixCmd',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '56B5C92F-F5D9-46E0-823F-EC71D1892DAA',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '扫描结果列表页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：成功'."\n"
                                    ."\n"
                                    .'- `false`：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '扫描结果列表每页展示数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '扫描漏洞总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '196',
                            ],
                            'Vulnerabilities' => [
                                'description' => '扫描漏洞数组',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Severity' => [
                                            'description' => '扫描漏洞等级，取值：'."\n"
                                                ."\n"
                                                .'- `High`：高危'."\n"
                                                ."\n"
                                                .'- `Medium`：中危'."\n"
                                                ."\n"
                                                .'- `Low`：低危'."\n"
                                                ."\n"
                                                .'- `Unknown`：未知',
                                            'type' => 'string',
                                            'example' => 'Medium',
                                        ],
                                        'AddedBy' => [
                                            'description' => '引入漏洞的镜像层',
                                            'type' => 'string',
                                            'example' => 'sha256:123456717b8e40b6480979b739010d8d549989602bcdd07922119aec6f9dbe57',
                                        ],
                                        'CveName' => [
                                            'description' => '漏洞名称',
                                            'type' => 'string',
                                            'example' => 'CVE-2009-5155',
                                        ],
                                        'Description' => [
                                            'description' => '漏洞描述',
                                            'type' => 'string',
                                            'example' => 'description.',
                                        ],
                                        'Feature' => [
                                            'description' => '引入漏洞的方式',
                                            'type' => 'string',
                                            'example' => 'eglibc',
                                        ],
                                        'Version' => [
                                            'description' => '漏洞版本',
                                            'type' => 'string',
                                            'example' => '2.19-6.9',
                                        ],
                                        'VersionFormat' => [
                                            'description' => '漏洞格式',
                                            'type' => 'string',
                                            'example' => 'dpkg',
                                        ],
                                        'CveLink' => [
                                            'description' => '漏洞链接',
                                            'type' => 'string',
                                            'example' => 'https://security-tracker.debian.org/tracker/CVE-2009-5155',
                                        ],
                                        'VersionFixed' => [
                                            'description' => '解决该漏洞的版本',
                                            'type' => 'string',
                                            'example' => '2.19-18+deb8u5',
                                        ],
                                        'FixCmd' => [
                                            'description' => '漏洞修复命令',
                                            'type' => 'string',
                                            'example' => 'yum install -y xxx',
                                        ],
                                        'CveLocation' => [
                                            'description' => '漏洞位置',
                                            'type' => 'string',
                                            'example' => '/test.txt',
                                        ],
                                        'ScanType' => [
                                            'description' => '漏洞类型'."\n"
                                                ."\n"
                                                .'- `cve`：系统漏洞'."\n"
                                                ."\n"
                                                .'- `sca`：应用漏洞',
                                            'type' => 'string',
                                            'example' => 'cve',
                                        ],
                                        'AliasName' => [
                                            'description' => '漏洞名称',
                                            'type' => 'string',
                                            'example' => '漏洞',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"56B5C92F-F5D9-46E0-823F-EC71D1892DAA\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 196,\\n  \\"Vulnerabilities\\": [\\n    {\\n      \\"Severity\\": \\"Medium\\",\\n      \\"AddedBy\\": \\"sha256:123456717b8e40b6480979b739010d8d549989602bcdd07922119aec6f9dbe57\\",\\n      \\"CveName\\": \\"CVE-2009-5155\\",\\n      \\"Description\\": \\"description.\\",\\n      \\"Feature\\": \\"eglibc\\",\\n      \\"Version\\": \\"2.19-6.9\\",\\n      \\"VersionFormat\\": \\"dpkg\\",\\n      \\"CveLink\\": \\"https://security-tracker.debian.org/tracker/CVE-2009-5155\\",\\n      \\"VersionFixed\\": \\"2.19-18+deb8u5\\",\\n      \\"FixCmd\\": \\"yum install -y xxx\\",\\n      \\"CveLocation\\": \\"/test.txt\\",\\n      \\"ScanType\\": \\"cve\\",\\n      \\"AliasName\\": \\"漏洞\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRepoTagScanResultResponse>\\n    <RequestId>56B5C92F-F5D9-46E0-823F-EC71D1892DAA</RequestId>\\n    <Code>success</Code>\\n    <PageNo>1</PageNo>\\n    <IsSuccess>true</IsSuccess>\\n    <PageSize>30</PageSize>\\n    <TotalCount>196</TotalCount>\\n    <Vulnerabilities>\\n        <Severity>Medium</Severity>\\n        <AddedBy>sha256:123456717b8e40b6480979b739010d8d549989602bcdd07922119aec6f9dbe57</AddedBy>\\n        <CveName>CVE-2009-5155</CveName>\\n        <Description>description.</Description>\\n        <Feature>eglibc</Feature>\\n        <Version>2.19-6.9</Version>\\n        <VersionFormat>dpkg</VersionFormat>\\n        <CveLink>https://security-tracker.debian.org/tracker/CVE-2009-5155</CveLink>\\n        <VersionFixed>2.19-18+deb8u5</VersionFixed>\\n        <FixCmd>yum install -y xxx</FixCmd>\\n        <CveLocation>/test.txt</CveLocation>\\n        <ScanType>cve</ScanType>\\n        <AliasName>漏洞</AliasName>\\n    </Vulnerabilities>\\n</ListRepoTagScanResultResponse>","errorExample":""}]',
            'title' => '获取镜像版本扫描结果列表',
            'summary' => '获取镜像版本扫描结果列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateArtifactBuildRule' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-cxreylqvcyje****',
                    ],
                ],
                [
                    'name' => 'ScopeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则生效范围，取值：'."\n"
                            .'- `REPOSITORY`：表示生效范围仓库级别。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'REPOSITORY',
                    ],
                ],
                [
                    'name' => 'ScopeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则生效范围的ID，取值：'."\n"
                            ."\n"
                            .'- ScopeId配置为镜像仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-pmajihou6cg0****',
                    ],
                ],
                [
                    'name' => 'ArtifactType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速镜像类型，取值：'."\n"
                            ."\n"
                            .'- `ACCELERATED_IMAGE`：表示生成加速镜像。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ACCELERATED_IMAGE',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '附加参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C8E90AB5-0A96-5D12-9E59-11EE46360642',
                            ],
                            'BuildRuleId' => [
                                'description' => '构建规则ID。',
                                'type' => 'string',
                                'example' => 'crabr-7dfa5qye5****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"C8E90AB5-0A96-5D12-9E59-11EE46360642\\",\\n  \\"BuildRuleId\\": \\"crabr-7dfa5qye5****\\"\\n}","type":"json"}]',
            'title' => '创建加速镜像构建规则',
            'summary' => '创建镜像仓库加速镜像构建规则。',
            'description' => '<props="intl">加速镜像构建规则创建仅限标准版和高级版实例，基础版不支持创建加速镜像构建规则，实例规格差异请参考[规格说明](https://www.alibabacloud.com/help/zh/container-registry/latest/what-is-container-registry#section-go7-lhg-qbc)。</props>'."\n"
                ."\n"
                .'<props="china">加速镜像构建规则创建仅限标准版和高级版实例，基础版不支持创建加速镜像构建规则，实例规格差异请参考[规格说明](https://help.aliyun.com/document_detail/257112.html#section-go7-lhg-qbc)。</props>'."\n"
                ."\n"
                .'目前在金融云、政务云地域暂不支持加速镜像转换。',
        ],
        'CreateBuildRecordByRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-asd6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-8dz3aedjqlmk****',
                    ],
                ],
                [
                    'name' => 'BuildRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建规则ID ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crbr-1j95g4bu2s1i****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B01B8857-A16E-40E9-A37E-764F15776FAA',
                            ],
                            'BuildRecordId' => [
                                'description' => '构建记录ID',
                                'type' => 'string',
                                'example' => '0A311FC5-B8C6-4332-80E4-539EB73****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"B01B8857-A16E-40E9-A37E-764F15776FAA\\",\\n  \\"BuildRecordId\\": \\"0A311FC5-B8C6-4332-80E4-539EB73****\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>B01B8857-A16E-40E9-A37E-764F15776FAA</RequestId>\\n<BuildRecordId>0A311FC5-B8C6-4332-80E4-539EB73****</BuildRecordId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建构建记录',
            'summary' => '根据规则创建构建记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRepoBuildRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-8dz3aedjqlmk****',
                    ],
                ],
                [
                    'name' => 'DockerfileLocation',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Dockerfile路径',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '/',
                    ],
                ],
                [
                    'name' => 'DockerfileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Dockerfile名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Dockerfile',
                    ],
                ],
                [
                    'name' => 'PushType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送类型，取值：'."\n"
                            ."\n"
                            .'- `GIT_TAG`：TAG触发'."\n"
                            ."\n"
                            .'- `GIT_BRANCH`：分支触发',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'GIT_BRANCH',
                    ],
                ],
                [
                    'name' => 'PushName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'master',
                    ],
                ],
                [
                    'name' => 'ImageTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v0.9.5',
                    ],
                ],
                [
                    'name' => 'BuildArgs',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '构建参数',
                        'type' => 'array',
                        'items' => [
                            'description' => '构建参数',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'UserName=Test',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Platforms',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '构建镜像架构，取值：'."\n"
                            ."\n"
                            .'- `linux/amd64`'."\n"
                            ."\n"
                            .'- `linux/arm64`'."\n"
                            ."\n"
                            .'- `linux/386`'."\n"
                            ."\n"
                            .'- `linux/arm/v7`'."\n"
                            ."\n"
                            .'- `linux/arm/v6`'."\n"
                            ."\n"
                            .'默认值：`linux/amd64`',
                        'type' => 'array',
                        'items' => [
                            'description' => '构建镜像架构，取值：'."\n"
                                ."\n"
                                .'- `linux/amd64`'."\n"
                                ."\n"
                                .'- `linux/arm64`'."\n"
                                ."\n"
                                .'- `linux/386`'."\n"
                                ."\n"
                                .'- `linux/arm/v7`'."\n"
                                ."\n"
                                .'- `linux/arm/v6`'."\n"
                                ."\n"
                                .'默认值：`linux/amd64`',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'linux/amd64',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4CE1F661-75DD-4EBD-A4AD-057B26834ABB',
                            ],
                            'BuildRuleId' => [
                                'description' => '构建规则ID',
                                'type' => 'string',
                                'example' => 'crbr-ly77w5i3t31f****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"4CE1F661-75DD-4EBD-A4AD-057B26834ABB\\",\\n  \\"BuildRuleId\\": \\"crbr-ly77w5i3t31f****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRepoBuildRuleResponse>\\n    <Code>success</Code>\\n    <IsSuccess>true</IsSuccess>\\n    <RequestId>4CE1F661-75DD-4EBD-A4AD-057B26834ABB</RequestId>\\n    <BuildRuleId>crbr-ly77w5i3t31f****</BuildRuleId>\\n</CreateRepoBuildRuleResponse>","errorExample":""}]',
            'title' => '创建镜像仓库构建规则',
            'summary' => '创建镜像仓库构建规则。',
        ],
        'CreateRepoSourceCodeRepo' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-shac42yvqzvq****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-gzsrlevmvoaq****',
                    ],
                ],
                [
                    'name' => 'CodeRepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源代码平台类型，取值：`GITHUB`、`GITLAB`、`GITEE`、`CODE`、`CODEUP`',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'GITHUB',
                    ],
                ],
                [
                    'name' => 'CodeRepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源代码仓库命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'namespace',
                    ],
                ],
                [
                    'name' => 'CodeRepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源代码仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo',
                    ],
                ],
                [
                    'name' => 'AutoBuild',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动构建，取值：'."\n"
                            ."\n"
                            .'- `true`：自动构建'."\n"
                            ."\n"
                            .'- `false`：不自动构建',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'OverseaBuild',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启海外源智能构建加速，取值：'."\n"
                            .'- `true`：开启海外源智能构建加速'."\n"
                            ."\n"
                            .'- `false`：不开启海外源智能构建加速',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DisableCacheBuild',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否关闭构建缓存，取值：'."\n"
                            ."\n"
                            .'- `true`：关闭构建缓存'."\n"
                            ."\n"
                            .'- `false`：开启构建缓存',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4CE1F661-75DD-4EBD-A4AD-057B26834ABB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"4CE1F661-75DD-4EBD-A4AD-057B26834ABB\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>4CE1F661-75DD-4EBD-A4AD-057B26834ABB</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '绑定源代码仓库',
            'summary' => '给镜像仓库绑定源代码仓库。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRepoBuildRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-xwvi3osiy4ff****',
                    ],
                ],
                [
                    'name' => 'BuildRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建规则ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crbr-36tffn0kouvi****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2E3F55BF-FA7B-454E-B2C6-85265E243ADC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"2E3F55BF-FA7B-454E-B2C6-85265E243ADC\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>2E3F55BF-FA7B-454E-B2C6-85265E243ADC</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除镜像仓库构建规则',
            'summary' => '删除镜像仓库构建规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelRepoBuildRecord' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8p****',
                    ],
                ],
                [
                    'name' => 'BuildRecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建记录ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '74FDBA62-30C0-4F22-BE7B-F1D36FD1****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4CE1F661-75DD-4EBD-A4AD-057B26834ABB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"4CE1F661-75DD-4EBD-A4AD-057B26834ABB\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>4CE1F661-75DD-4EBD-A4AD-057B26834ABB</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '取消仓库构建',
            'summary' => '取消仓库构建。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateRepoBuildRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8p****',
                    ],
                ],
                [
                    'name' => 'DockerfileLocation',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Dockerfile路径',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/',
                    ],
                ],
                [
                    'name' => 'DockerfileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Dockerfile名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Dockerfile',
                    ],
                ],
                [
                    'name' => 'PushType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '推送类型，取值：'."\n"
                            ."\n"
                            .'- `GIT_TAG`：TAG触发'."\n"
                            ."\n"
                            .'- `GIT_BRANCH`：分支触发',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GIT_BRANCH',
                    ],
                ],
                [
                    'name' => 'PushName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'master',
                    ],
                ],
                [
                    'name' => 'ImageTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像Tag版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v0.9.5',
                    ],
                ],
                [
                    'name' => 'BuildRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建规则ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crbr-ly77w5i3t31f****',
                    ],
                ],
                [
                    'name' => 'BuildArgs',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '构建参数',
                        'type' => 'array',
                        'items' => [
                            'description' => '构建参数',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'UserName=Test',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Platforms',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '构建镜像架构，取值：'."\n"
                            ."\n"
                            .'- `linux/amd64`'."\n"
                            ."\n"
                            .'-  `linux/arm64`'."\n"
                            ."\n"
                            .'- `linux/386`'."\n"
                            ."\n"
                            .'- `linux/arm/v7`'."\n"
                            ."\n"
                            .'- `linux/arm/v6`'."\n"
                            ."\n"
                            .'默认值：`linux/amd64`',
                        'type' => 'array',
                        'items' => [
                            'description' => '构建镜像架构，取值：'."\n"
                                ."\n"
                                .'- `linux/amd64`'."\n"
                                ."\n"
                                .'-  `linux/arm64`'."\n"
                                ."\n"
                                .'- `linux/386`'."\n"
                                ."\n"
                                .'- `linux/arm/v7`'."\n"
                                ."\n"
                                .'- `linux/arm/v6`'."\n"
                                ."\n"
                                .'默认值：`linux/amd64`',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'linux/amd64',
                        ],
                        'required' => false,
                        'example' => 'linux/amd64',
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '更新联系人是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：更新成功'."\n"
                                    .'- `false`：更新失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BC648259-91A7-4502-BED3-EDF64361FA83',
                            ],
                            'BuildRuleId' => [
                                'description' => '构建规则ID',
                                'type' => 'string',
                                'example' => 'crbr-ly77w5i3t31f****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"BC648259-91A7-4502-BED3-EDF64361FA83\\",\\n  \\"BuildRuleId\\": \\"crbr-ly77w5i3t31f****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRepoBuildRuleResponse>\\n    <Code>success</Code>\\n    <IsSuccess>true</IsSuccess>\\n    <RequestId>BC648259-91A7-4502-BED3-EDF64361FA83</RequestId>\\n    <BuildRuleId>crbr-ly77w5i3t31f****</BuildRuleId>\\n</UpdateRepoBuildRuleResponse>","errorExample":""}]',
            'title' => '更新镜像仓库构建规则',
            'summary' => '更新镜像仓库构建规则。',
        ],
        'UpdateRepoSourceCodeRepo' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业版实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-shac42yvqzvq****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-gzsrlevmvoa****',
                    ],
                ],
                [
                    'name' => 'CodeRepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源代码平台类型。支持：GITHUB、GITLAB、GITEE、CODEUP、CODE',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'GITHUB',
                    ],
                ],
                [
                    'name' => 'CodeRepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源代码仓库命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'namespace',
                    ],
                ],
                [
                    'name' => 'CodeRepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源代码仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo',
                    ],
                ],
                [
                    'name' => 'AutoBuild',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启提交代码自动触发构建，取值：'."\n"
                            ."\n"
                            .'- `true`：开启提交代码自动触发构建'."\n"
                            ."\n"
                            .'- `false`：不开启提交代码自动触发构建',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'OverseaBuild',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启海外构建模式，取值：'."\n"
                            .'- `true`：开启海外构建模式'."\n"
                            ."\n"
                            .'- `false`：不开启海外构建模式',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DisableCacheBuild',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否禁用构建缓存，取值：'."\n"
                            .'- `true`：禁用构建缓存'."\n"
                            ."\n"
                            .'- `false`：启用构建缓存'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CodeRepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代码仓库ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'crr-cp7d6sget5r****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F56D589D-AF7F-4900-BA46-62C780AC2C10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"F56D589D-AF7F-4900-BA46-62C780AC2C10\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>F56D589D-AF7F-4900-BA46-62C780AC2C10</RequestId>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '更新镜像仓库的源代码仓库',
            'summary' => '更新镜像仓库的源代码仓库地址。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRepoBuildRecordLog' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-nmbv37dlv5d3****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'crr-z4dvahhku9wv4****',
                    ],
                ],
                [
                    'name' => 'BuildRecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建记录ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'C5B4D5D7-A1C6-4E9B-ABD2-401361C4****',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志行偏移量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4CE1F661-75DD-4EBD-A4AD-057B26834ABB',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '一页中日志显示条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1000',
                            ],
                            'BuildRecordLogs' => [
                                'description' => '构建日志内容',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LineNumber' => [
                                            'description' => '日志所在行号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'Message' => [
                                            'description' => '日志内容',
                                            'type' => 'string',
                                            'example' => 'fetch stage begin',
                                        ],
                                        'BuildStage' => [
                                            'description' => '日志所在阶段',
                                            'type' => 'string',
                                            'example' => 'GIT_CLONE',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4CE1F661-75DD-4EBD-A4AD-057B26834ABB\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 100,\\n  \\"TotalCount\\": \\"1000\\",\\n  \\"BuildRecordLogs\\": [\\n    {\\n      \\"LineNumber\\": 2,\\n      \\"Message\\": \\"fetch stage begin\\",\\n      \\"BuildStage\\": \\"GIT_CLONE\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<BuildRecordLogs>\\n    <Message>fetch stage begin</Message>\\n    <BuildStage>GIT_CLONE</BuildStage>\\n    <LineNumber>2</LineNumber>\\n</BuildRecordLogs>\\n<TotalCount>1000</TotalCount>\\n<PageSize>100</PageSize>\\n<RequestId>4CE1F661-75DD-4EBD-A4AD-057B26834ABB</RequestId>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '获取某次构建记录的日志',
            'summary' => '获取某次构建记录的日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRepoBuildRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '42D782C8-E8F6-4A32-BEA0-6A6AC854C22A',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'BuildRules' => [
                                'description' => '构建规则列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DockerfileLocation' => [
                                            'description' => 'Dockerfile所在目录',
                                            'type' => 'string',
                                            'example' => '/',
                                        ],
                                        'BuildRuleId' => [
                                            'description' => '构建规则ID',
                                            'type' => 'string',
                                            'example' => 'crbr-khys0nd3asbe****',
                                        ],
                                        'PushType' => [
                                            'description' => '源代码推送触发构建类型，取值：'."\n"
                                                ."\n"
                                                .'- GIT_BRANCH：从Branch推送源代码'."\n"
                                                ."\n"
                                                .'- GIT_TAG：从Tag推送源代码',
                                            'type' => 'string',
                                            'example' => 'GIT_BRANCH',
                                        ],
                                        'PushName' => [
                                            'description' => '代码推送触发构建名称',
                                            'type' => 'string',
                                            'example' => 'v0.1',
                                        ],
                                        'ImageTag' => [
                                            'description' => '镜像TAG',
                                            'type' => 'string',
                                            'example' => 'v0.1',
                                        ],
                                        'DockerfileName' => [
                                            'description' => 'Dockerfile文件名称',
                                            'type' => 'string',
                                            'example' => 'Dockerfile',
                                        ],
                                        'Platforms' => [
                                            'description' => '镜像操作系统和平台',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '镜像操作系统和平台',
                                                'type' => 'string',
                                                'example' => 'linux/amd64',
                                            ],
                                        ],
                                        'BuildArgs' => [
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '构建参数',
                                                'type' => 'string',
                                                'example' => 'http_proxy=127.0.0.1 ',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"42D782C8-E8F6-4A32-BEA0-6A6AC854C22A\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"BuildRules\\": [\\n    {\\n      \\"DockerfileLocation\\": \\"/\\",\\n      \\"BuildRuleId\\": \\"crbr-khys0nd3asbe****\\",\\n      \\"PushType\\": \\"GIT_BRANCH\\",\\n      \\"PushName\\": \\"v0.1\\",\\n      \\"ImageTag\\": \\"v0.1\\",\\n      \\"DockerfileName\\": \\"Dockerfile\\",\\n      \\"Platforms\\": [\\n        \\"linux/amd64\\"\\n      ],\\n      \\"BuildArgs\\": [\\n        \\"http_proxy=127.0.0.1 \\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>42D782C8-E8F6-4A32-BEA0-6A6AC854C22A</RequestId>\\n<BuildRules>\\n    <PushType>GIT_BRANCH</PushType>\\n    <ImageTag>v0.1</ImageTag>\\n    <BuildRuleId>crbr-khys0nd3asbe****</BuildRuleId>\\n    <PushName>v0.1</PushName>\\n    <DockerfileLocation>/</DockerfileLocation>\\n    <DockerfileName>Dockerfile</DockerfileName>\\n    <BuildArgs>http_proxy=127.0.0.1 </BuildArgs>\\n    <Platforms>linux/amd64</Platforms>\\n</BuildRules>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询镜像仓库构建规则列表',
            'summary' => '查询镜像仓库构建规则列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRepoBuildRecord' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9D23DEDF-E91D-434B-B7D5-9D12C648D166',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'BuildRecords' => [
                                'description' => '构建记录列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '结束时间',
                                            'type' => 'string',
                                            'example' => '1572875610000',
                                        ],
                                        'StartTime' => [
                                            'description' => '开始时间',
                                            'type' => 'string',
                                            'example' => '1572872207000',
                                        ],
                                        'BuildStatus' => [
                                            'description' => '构建状态',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'BuildRecordId' => [
                                            'description' => '构建记录ID',
                                            'type' => 'string',
                                            'example' => '537e08ab-735e-415f-b7c2-160eb87f8****',
                                        ],
                                        'Image' => [
                                            'description' => '镜像信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'RepoNamespaceName' => [
                                                    'description' => '仓库命名空间名称',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'ImageTag' => [
                                                    'description' => '镜像TAG',
                                                    'type' => 'string',
                                                    'example' => 'v0.1',
                                                ],
                                                'RepoId' => [
                                                    'description' => '仓库ID',
                                                    'type' => 'string',
                                                    'example' => 'crr-gzsrlevmvoaq****',
                                                ],
                                                'RepoName' => [
                                                    'description' => '仓库名称',
                                                    'type' => 'string',
                                                    'example' => 'test',
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
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9D23DEDF-E91D-434B-B7D5-9D12C648D166\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"BuildRecords\\": [\\n    {\\n      \\"EndTime\\": \\"1572875610000\\",\\n      \\"StartTime\\": \\"1572872207000\\",\\n      \\"BuildStatus\\": \\"SUCCESS\\",\\n      \\"BuildRecordId\\": \\"537e08ab-735e-415f-b7c2-160eb87f8****\\",\\n      \\"Image\\": {\\n        \\"RepoNamespaceName\\": \\"test\\",\\n        \\"ImageTag\\": \\"v0.1\\",\\n        \\"RepoId\\": \\"crr-gzsrlevmvoaq****\\",\\n        \\"RepoName\\": \\"test\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<BuildRecords>\\n    <EndTime>1572875610000</EndTime>\\n    <StartTime>1572872207000</StartTime>\\n    <BuildStatus>SUCCESS</BuildStatus>\\n    <BuildRecordId>537e08ab-735e-415f-b7c2-160eb87f8****</BuildRecordId>\\n    <Image>\\n        <RepoNamespaceName>test</RepoNamespaceName>\\n        <ImageTag>v0.1</ImageTag>\\n        <RepoName>test</RepoName>\\n        <RepoId>crr-gzsrlevmvoaq****</RepoId>\\n    </Image>\\n</BuildRecords>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>9D23DEDF-E91D-434B-B7D5-9D12C648D166</RequestId>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询镜像仓库构建记录列表',
            'summary' => '查询镜像仓库构建记录列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRepoBuildRecordStatus' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-jnzm47ihjmgc****',
                    ],
                ],
                [
                    'name' => 'BuildRecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建记录ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'a78ec6fb-16ea-4649-93b7-f52afba7d****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '79174CBA-8556-443A-8976-22C922D7BE37',
                            ],
                            'BuildStatus' => [
                                'description' => '构建状态',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"79174CBA-8556-443A-8976-22C922D7BE37\\",\\n  \\"BuildStatus\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>79174CBA-8556-443A-8976-22C922D7BE37</RequestId>\\n<BuildStatus>success</BuildStatus>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '获取构建状态',
            'summary' => '获取构建状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRepoBuildRecord' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'BuildRecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建记录ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'a78ec6fb-16ea-4649-93b7-f52afba7d****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'EndTime' => [
                                'description' => '终止时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1568718698000',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1568718468000',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'a78ec6fb-16ea-4649-93b7-f52afba7d9de1	',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'BuildRecordId' => [
                                'description' => '构建记录ID',
                                'type' => 'string',
                                'example' => '79174CBA-8556-443A-8976-22C922D7****',
                            ],
                            'Image' => [
                                'description' => '镜像信息',
                                'type' => 'object',
                                'properties' => [
                                    'RepoNamespaceName' => [
                                        'description' => '镜像仓库命名空间名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'ImageTag' => [
                                        'description' => '镜像TAG',
                                        'type' => 'string',
                                        'example' => 'master',
                                    ],
                                    'RepoName' => [
                                        'description' => '镜像仓库名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"true\\",\\n  \\"EndTime\\": 1568718698000,\\n  \\"StartTime\\": 1568718468000,\\n  \\"RequestId\\": \\"a78ec6fb-16ea-4649-93b7-f52afba7d9de1\\\\t\\",\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"BuildRecordId\\": \\"79174CBA-8556-443A-8976-22C922D7****\\",\\n  \\"Image\\": {\\n    \\"RepoNamespaceName\\": \\"test\\",\\n    \\"ImageTag\\": \\"master\\",\\n    \\"RepoName\\": \\"test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Status>true</Status>\\n<IsSuccess>true</IsSuccess>\\n<EndTime>1568718698000</EndTime>\\n<RequestId>a78ec6fb-16ea-4649-93b7-f52afba7d9de1\\t</RequestId>\\n<StartTime>1568718468000</StartTime>\\n<BuildRecordId>79174CBA-8556-443A-8976-22C922D7****</BuildRecordId>\\n<Image>\\n    <RepoNamespaceName>test</RepoNamespaceName>\\n    <ImageTag>master</ImageTag>\\n    <RepoName>test</RepoName>\\n</Image>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询仓库构建记录',
            'summary' => '查询仓库构建记录。',
            'description' => '****',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRepoSourceCodeRepo' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-shac42yvqzvq****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-gzsrlevmvoaq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CodeRepoType' => [
                                'description' => '源代码平台类型，取值：`GITHUB`、`GITLAB`、`GITEE`、`CODE`、`CODEUP`',
                                'type' => 'string',
                                'example' => 'GITHUB',
                            ],
                            'RepoId' => [
                                'description' => '镜像仓库ID',
                                'type' => 'string',
                                'example' => 'crr-gzsrlevmvoaq****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4CE1F661-75DD-4EBD-A4AD-057B26834ABB',
                            ],
                            'CodeRepoNamespaceName' => [
                                'description' => '源代码仓库命名空间名称',
                                'type' => 'string',
                                'example' => 'namespace',
                            ],
                            'OverseaBuild' => [
                                'description' => '是否打开海外源智能构建加速，取值：'."\n"
                                    ."\n"
                                    .'- `true`：打开海外源智能构建加速'."\n"
                                    ."\n"
                                    .'- `false`：关闭海外源智能构建加速',
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'CodeRepoName' => [
                                'description' => '源代码仓库名称',
                                'type' => 'string',
                                'example' => 'repo',
                            ],
                            'AutoBuild' => [
                                'description' => '是否打开源代码提交自动触发构建，取值：'."\n"
                                    ."\n"
                                    .'- `true`：打开源代码提交自动触发构建'."\n"
                                    ."\n"
                                    .'- `false`：关闭源代码提交自动触发构建',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'DisableCacheBuild' => [
                                'description' => '是否关闭构建缓存，取值：'."\n"
                                    ."\n"
                                    .'- `true`：关闭构建缓存'."\n"
                                    ."\n"
                                    .'- `false`：打开构建缓存',
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'CodeRepoDomain' => [
                                'description' => '源代码仓库地址',
                                'type' => 'string',
                                'example' => 'https://github.com',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CodeRepoType\\": \\"GITHUB\\",\\n  \\"RepoId\\": \\"crr-gzsrlevmvoaq****\\",\\n  \\"RequestId\\": \\"4CE1F661-75DD-4EBD-A4AD-057B26834ABB\\",\\n  \\"CodeRepoNamespaceName\\": \\"namespace\\",\\n  \\"OverseaBuild\\": \\"false\\",\\n  \\"Code\\": \\"success\\",\\n  \\"CodeRepoName\\": \\"repo\\",\\n  \\"AutoBuild\\": \\"true\\",\\n  \\"IsSuccess\\": true,\\n  \\"DisableCacheBuild\\": \\"false\\",\\n  \\"CodeRepoDomain\\": \\"https://github.com\\"\\n}","errorExample":""},{"type":"xml","example":"<AutoBuild>true</AutoBuild>\\n<CodeRepoNamespaceName>namespace</CodeRepoNamespaceName>\\n<IsSuccess>true</IsSuccess>\\n<DisableCacheBuild>false</DisableCacheBuild>\\n<CodeRepoDomain>https://github.com</CodeRepoDomain>\\n<RequestId>4CE1F661-75DD-4EBD-A4AD-057B26834ABB</RequestId>\\n<CodeRepoName>repo</CodeRepoName>\\n<OverseaBuild>false</OverseaBuild>\\n<CodeRepoType>GITHUB</CodeRepoType>\\n<RepoId>crr-gzsrlevmvoaq****</RepoId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '获取源代码仓库绑定信息',
            'summary' => '获取源代码仓库的绑定信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRepoTrigger' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-xwvi3osiy4ff****',
                    ],
                ],
                [
                    'name' => 'TriggerName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'trigger1',
                    ],
                ],
                [
                    'name' => 'TriggerUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器URL',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://www.mysite.com',
                    ],
                ],
                [
                    'name' => 'TriggerType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器类型，取值：'."\n"
                            .'- `ALL`：全部触发'."\n"
                            .'- `TAG_LIST`：Tag触发'."\n"
                            .'- `TAG_REG_EXP`：表达式触发'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ALL',
                    ],
                ],
                [
                    'name' => 'TriggerTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发触发器的镜像版本。'."\n"
                            ."\n"
                            .'> - `TriggerType`为`ALL`，`TriggerTag`可以为任意字符串，示例`*`。'."\n"
                            .'- `TriggerType`为`TAG_LIST`，`TriggerTag`为数组，示例`[1]`。'."\n"
                            .'- `TriggerType`为`TAG_REG_EXP`，`TriggerTag`为字符串，示例`*`。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '[1]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B79F5E0E-8770-407D-BCB6-ECF4BA9C****',
                            ],
                            'TriggerId' => [
                                'description' => '触发器ID',
                                'type' => 'string',
                                'example' => 'crw-0z4pf81pgz35****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"B79F5E0E-8770-407D-BCB6-ECF4BA9C****\\",\\n  \\"TriggerId\\": \\"crw-0z4pf81pgz35****\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>B79F5E0E-8770-407D-BCB6-ECF4BA9C****</RequestId>\\n<TriggerId>crw-0z4pf81pgz35****</TriggerId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建镜像仓库触发器',
            'summary' => '创建镜像仓库触发器。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRepoTrigger' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-xwvi3osiy4ff****',
                    ],
                ],
                [
                    'name' => 'TriggerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crw-0z4pf81pgz35****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '85180AE4-9A57-48F8-9EF9-68ECCE54B552',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"85180AE4-9A57-48F8-9EF9-68ECCE54B552\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>85180AE4-9A57-48F8-9EF9-68ECCE54B552</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除镜像仓库触发器',
            'summary' => '删除镜像仓库触发器。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateRepoTrigger' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8p****',
                    ],
                ],
                [
                    'name' => 'TriggerName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器名称'."\n"
                            ."\n"
                            .'非必选参数，TriggerName与TriggerUrl参数二选一',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test_trigger',
                    ],
                ],
                [
                    'name' => 'TriggerUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://www.test.com',
                    ],
                ],
                [
                    'name' => 'TriggerType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发类型，取值：'."\n"
                            ."\n"
                            .'- `ALL`：全部触发'."\n"
                            ."\n"
                            .'- `TAG_LISTTAG`：触发'."\n"
                            ."\n"
                            .'- `TAG_REG_EXP`：表达式触发',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALL',
                    ],
                ],
                [
                    'name' => 'TriggerTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发触发器的镜像版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'master',
                    ],
                ],
                [
                    'name' => 'TriggerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crw-k7bdx4kt52ty****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '32535049-ED91-4589-98C0-7C88766EDF1F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"32535049-ED91-4589-98C0-7C88766EDF1F\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>32535049-ED91-4589-98C0-7C88766EDF1F</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '更新镜像仓库触发器',
            'summary' => '更新镜像仓库触发器。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRepoTrigger' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-tquyps22md8p****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2CA76D52-A8F0-4D0B-854E-FBD9F6C99049',
                            ],
                            'Triggers' => [
                                'description' => '触发器列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TriggerName' => [
                                            'description' => '触发器名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'RepoEvent' => [
                                            'description' => '触发事件类型，取值：'."\n"
                                                ."\n"
                                                .'- `BUILD_SUCCESS`：触发成功'."\n"
                                                ."\n"
                                                .'- `BUILD_Fail`：触发失败',
                                            'type' => 'string',
                                            'example' => 'BUILD_SUCCESS',
                                        ],
                                        'TriggerId' => [
                                            'description' => '触发器ID',
                                            'type' => 'string',
                                            'example' => 'crw-vriyql9eq7ep****',
                                        ],
                                        'TriggerUrl' => [
                                            'description' => '触发器URL地址',
                                            'type' => 'string',
                                            'example' => 'https://www.test.com',
                                        ],
                                        'TriggerType' => [
                                            'description' => '触发类型，取值：'."\n"
                                                ."\n"
                                                .'- `ALL`：全部触发'."\n"
                                                ."\n"
                                                .'- `TAG_LISTTAG`：触发'."\n"
                                                ."\n"
                                                .'- `TAG_REG_EXP`：表达式触发',
                                            'type' => 'string',
                                            'example' => 'ALL',
                                        ],
                                        'TriggerTag' => [
                                            'description' => '触发触发器的镜像版本',
                                            'type' => 'string',
                                            'example' => '*',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"2CA76D52-A8F0-4D0B-854E-FBD9F6C99049\\",\\n  \\"Triggers\\": [\\n    {\\n      \\"TriggerName\\": \\"test\\",\\n      \\"RepoEvent\\": \\"BUILD_SUCCESS\\",\\n      \\"TriggerId\\": \\"crw-vriyql9eq7ep****\\",\\n      \\"TriggerUrl\\": \\"https://www.test.com\\",\\n      \\"TriggerType\\": \\"ALL\\",\\n      \\"TriggerTag\\": \\"*\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>2CA76D52-A8F0-4D0B-854E-FBD9F6C99049</RequestId>\\n<Triggers>\\n    <TriggerUrl>https://www.test.com</TriggerUrl>\\n    <TriggerType>ALL</TriggerType>\\n    <RepoEvent>BUILD_SUCCESS</RepoEvent>\\n    <TriggerName>test</TriggerName>\\n    <TriggerTag>*</TriggerTag>\\n    <TriggerId>crw-vriyql9eq7ep****</TriggerId>\\n</Triggers>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询仓库触发器列表',
            'summary' => '查询仓库触发器列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateChartNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'namespace01',
                    ],
                ],
                [
                    'name' => 'AutoCreateRepo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动创建仓库，取值：'."\n"
                            ."\n"
                            .'-` true`：自动创建仓库'."\n"
                            ."\n"
                            .'-` false`：不自动创建仓库',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DefaultRepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库默认类型，取值：'."\n"
                            .'- `PUBLIC`：公开仓库'."\n"
                            ."\n"
                            .'- `PRIVATE`：私有仓库'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PUBLIC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '724402D0-75CD-4794-BC20-7D3720823AE0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"724402D0-75CD-4794-BC20-7D3720823AE0\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>724402D0-75CD-4794-BC20-7D3720823AE0</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建Chart命名空间',
            'summary' => '创建Chart的命名空间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteChartNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Chart命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ns2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'FEC62DF1-1394-467F-A69F-4BC1BA29F383',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"FEC62DF1-1394-467F-A69F-4BC1BA29F383\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>FEC62DF1-1394-467F-A69F-4BC1BA29F383</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除Chart命名空间',
            'summary' => '删除Chart的命名空间。',
            'description' => '> 删除Chart命名空间会将存在于该命名空间下的所有仓库以及所有仓库下的内容一并删除。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateChartNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'AutoCreateRepo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动创建仓库，取值：'."\n"
                            .'- `true`：自动创建仓库'."\n"
                            .'- `false`：不自动创建仓库',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DefaultRepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '默认仓库类型，取值：'."\n"
                            ."\n"
                            .'- `PUBLIC`：公开仓库'."\n"
                            ."\n"
                            .'- `PRIVATE`：私有仓库'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PUBLIC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6877B80A-2895-44C4-BC9E-703B157DEE66',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"6877B80A-2895-44C4-BC9E-703B157DEE66\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>6877B80A-2895-44C4-BC9E-703B157DEE66</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '更新图表命名空间',
            'summary' => '更新命名空间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetChartNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ns1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DefaultRepoType' => [
                                'description' => '仓库默认类型，取值：'."\n"
                                    ."\n"
                                    .'- `PUBLIC`：公开仓库'."\n"
                                    ."\n"
                                    .'- `PRIVATE`：私有仓库',
                                'type' => 'string',
                                'example' => 'PRIVATE',
                            ],
                            'NamespaceId' => [
                                'description' => '命名空间ID',
                                'type' => 'string',
                                'example' => 'crcn-43dhbjbyt2xl****',
                            ],
                            'NamespaceStatus' => [
                                'description' => '命名空间状态，取值'."\n"
                                    ."\n"
                                    .'- `NORMAL`：正常'."\n"
                                    ."\n"
                                    .'- `DELETING`：删除中',
                                'type' => 'string',
                                'example' => 'NORMAL',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'CD71CF13-93AA-4805-848B-69B2DD543A9A',
                            ],
                            'Code' => [
                                'description' => '请求返回状态',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'cri-xkx6vujuhay0****',
                            ],
                            'AutoCreateRepo' => [
                                'description' => '是否自动创建镜像仓库，取值：'."\n"
                                    ."\n"
                                    .'- `true`：自动创建镜像仓库'."\n"
                                    ."\n"
                                    .'- `false`：不自动创建镜像仓库',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'NamespaceName' => [
                                'description' => '命名空间名称',
                                'type' => 'string',
                                'example' => 'ns1',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID',
                                'type' => 'string',
                                'example' => 'rg-acfmv36i4is****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DefaultRepoType\\": \\"PRIVATE\\",\\n  \\"NamespaceId\\": \\"crcn-43dhbjbyt2xl****\\",\\n  \\"NamespaceStatus\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"CD71CF13-93AA-4805-848B-69B2DD543A9A\\",\\n  \\"Code\\": \\"success\\",\\n  \\"InstanceId\\": \\"cri-xkx6vujuhay0****\\",\\n  \\"AutoCreateRepo\\": true,\\n  \\"IsSuccess\\": true,\\n  \\"NamespaceName\\": \\"ns1\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmv36i4is****\\"\\n}","errorExample":""},{"type":"xml","example":"<NamespaceStatus>NORMAL</NamespaceStatus>\\n<NamespaceName>ns1</NamespaceName>\\n<IsSuccess>true</IsSuccess>\\n<DefaultRepoType>PRIVATE</DefaultRepoType>\\n<RequestId>CD71CF13-93AA-4805-848B-69B2DD543A9A</RequestId>\\n<InstanceId>cri-xkx6vujuhay0****</InstanceId>\\n<AutoCreateRepo>true</AutoCreateRepo>\\n<NamespaceId>crcn-43dhbjbyt2xl****</NamespaceId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询Chart命名空间',
            'summary' => '查询Chart的命名空间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListChartNamespace' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'NamespaceStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间状态，取值：'."\n"
                            ."\n"
                            .'- `NORMAL`：正常'."\n"
                            ."\n"
                            .'- `DELETING`：删除中',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NORMAL',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F56D589D-AF7F-4900-BA46-62C780AC2C10',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Namespaces' => [
                                'description' => '命名空间列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DefaultRepoType' => [
                                            'description' => '仓库默认类型，取值：'."\n"
                                                ."\n"
                                                .'- `PUBLIC`：公开仓库'."\n"
                                                ."\n"
                                                .'- `PRIVATE`：私有仓库',
                                            'type' => 'string',
                                            'example' => 'PUBLIC',
                                        ],
                                        'NamespaceStatus' => [
                                            'description' => '命名空间状态，取值：'."\n"
                                                ."\n"
                                                .'- `NORMAL`：正常'."\n"
                                                ."\n"
                                                .'- `DELETING`：删除中',
                                            'type' => 'string',
                                            'example' => 'NORMAL',
                                        ],
                                        'NamespaceId' => [
                                            'description' => '命名空间ID',
                                            'type' => 'string',
                                            'example' => 'null',
                                        ],
                                        'AutoCreateRepo' => [
                                            'description' => '自动创建仓库',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-kmsiwlxxdcva****',
                                        ],
                                        'NamespaceName' => [
                                            'description' => '命名空间名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfm4n5kzyf****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F56D589D-AF7F-4900-BA46-62C780AC2C10\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"Namespaces\\": [\\n    {\\n      \\"DefaultRepoType\\": \\"PUBLIC\\",\\n      \\"NamespaceStatus\\": \\"NORMAL\\",\\n      \\"NamespaceId\\": \\"null\\",\\n      \\"AutoCreateRepo\\": true,\\n      \\"InstanceId\\": \\"cri-kmsiwlxxdcva****\\",\\n      \\"NamespaceName\\": \\"test\\",\\n      \\"ResourceGroupId\\": \\"rg-acfm4n5kzyf****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<Namespaces>\\n    <NamespaceStatus>NORMAL</NamespaceStatus>\\n    <NamespaceName>test</NamespaceName>\\n    <DefaultRepoType>PUBLIC</DefaultRepoType>\\n    <InstanceId>cri-kmsiwlxxdcva****</InstanceId>\\n    <AutoCreateRepo>true</AutoCreateRepo>\\n    <NamespaceId>null</NamespaceId>\\n</Namespaces>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>F56D589D-AF7F-4900-BA46-62C780AC2C10</RequestId>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询图表命名空间列表',
            'summary' => '查询命名空间列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateChartRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo01',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'namespace01',
                    ],
                ],
                [
                    'name' => 'RepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库默认类型，取值：'."\n"
                            ."\n"
                            .'- `PUBLIC`：公开仓库'."\n"
                            ."\n"
                            .'- `PRIVATE`：私有仓库'."\n"
                            ."\n"
                            .'RepoType与Summary参数二选一，该参数非必选。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'PUBLIC',
                    ],
                ],
                [
                    'name' => 'Summary',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库摘要',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'summary',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RepoId' => [
                                'description' => '镜像仓库ID',
                                'type' => 'string',
                                'example' => 'crcr-2micxey5ewj4****',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '60390244-A483-491A-B41D-F866C95380A1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"RepoId\\": \\"crcr-2micxey5ewj4****\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"60390244-A483-491A-B41D-F866C95380A1\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>60390244-A483-491A-B41D-F866C95380A1</RequestId>\\n<RepoId>crcr-2micxey5ewj4****</RepoId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '创建Chart仓库',
            'summary' => '创建Chart的仓库。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteChartRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay****',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'namespace01',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo01',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '12589EF7-96E2-4554-AAD7-F7209E88CAD3',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"12589EF7-96E2-4554-AAD7-F7209E88CAD3\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>12589EF7-96E2-4554-AAD7-F7209E88CAD3</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除Chart仓库',
            'summary' => '删除Chart的仓库。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateChartRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库类型，取值：'."\n"
                            .'- `PUBLIC`：公开仓库'."\n"
                            ."\n"
                            .'- `PRIVATE`：私有仓库',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'PUBLIC',
                    ],
                ],
                [
                    'name' => 'Summary',
                    'in' => 'query',
                    'schema' => [
                        'description' => '摘要信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => "\n"
                                    .'是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'EB9C5722-51E2-4497-A573-575B0CA5CE0C',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"EB9C5722-51E2-4497-A573-575B0CA5CE0C\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>EB9C5722-51E2-4497-A573-575B0CA5CE0C</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '更新仓库信息',
            'summary' => '更新仓库信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListChartRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Chart仓库状态，取值：'."\n"
                            ."\n"
                            .'- `NORMAL`：显示正常的Chart仓库状态'."\n"
                            .' '."\n"
                            .'- `DELETING`：删除中的Chart仓库状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NORMAL',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ns1',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
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
                        'description' => '单页条目数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0AB62FB8-6873-4032-8515-4578D27523B7',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Repositories' => [
                                'description' => '仓库列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Summary' => [
                                            'description' => '仓库概述',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '仓库修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1571930329000',
                                        ],
                                        'RepoId' => [
                                            'description' => '仓库ID',
                                            'type' => 'string',
                                            'example' => 'crcr-gpsu7b8chmxk****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '仓库创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1571926644000',
                                        ],
                                        'RepoNamespaceName' => [
                                            'description' => '仓库命名空间',
                                            'type' => 'string',
                                            'example' => 'ns1',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-xkx6vujuhay0****',
                                        ],
                                        'RepoType' => [
                                            'description' => '仓库状态，取值：'."\n"
                                                ."\n"
                                                .'- `PRIVATE`：私有仓库'."\n"
                                                .'- `PUBLIC`：公开仓库'."\n",
                                            'type' => 'string',
                                            'example' => 'PUBLIC',
                                        ],
                                        'RepoStatus' => [
                                            'description' => '仓库状态，取值：'."\n"
                                                ."\n"
                                                .'- `NORMAL`：正常'."\n"
                                                ."\n"
                                                .'- `DELETING`：删除中',
                                            'type' => 'string',
                                            'example' => 'NORMAL',
                                        ],
                                        'RepoName' => [
                                            'description' => '仓库名称',
                                            'type' => 'string',
                                            'example' => 'repo1',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组 ID',
                                            'type' => 'string',
                                            'example' => 'rg-aek2ikd5rxxxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0AB62FB8-6873-4032-8515-4578D27523B7\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"Repositories\\": [\\n    {\\n      \\"Summary\\": \\"test\\",\\n      \\"ModifiedTime\\": 1571930329000,\\n      \\"RepoId\\": \\"crcr-gpsu7b8chmxk****\\",\\n      \\"CreateTime\\": 1571926644000,\\n      \\"RepoNamespaceName\\": \\"ns1\\",\\n      \\"InstanceId\\": \\"cri-xkx6vujuhay0****\\",\\n      \\"RepoType\\": \\"PUBLIC\\",\\n      \\"RepoStatus\\": \\"NORMAL\\",\\n      \\"RepoName\\": \\"repo1\\",\\n      \\"ResourceGroupId\\": \\"rg-aek2ikd5rxxxxxx\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Repositories>\\n    <RepoNamespaceName>ns1</RepoNamespaceName>\\n    <ModifiedTime>1571930329000</ModifiedTime>\\n    <RepoType>PUBLIC</RepoType>\\n    <RepoStatus>NORMAL</RepoStatus>\\n    <InstanceId>cri-xkx6vujuhay0****</InstanceId>\\n    <CreateTime>1571926644000</CreateTime>\\n    <RepoName>repo1</RepoName>\\n    <Summary>test</Summary>\\n    <RepoId>crcr-gpsu7b8chmxk****</RepoId>\\n</Repositories>\\n<IsSuccess>true</IsSuccess>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>0AB62FB8-6873-4032-8515-4578D27523B7</RequestId>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询仓库列表',
            'summary' => '查询仓库列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetChartRepository' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Summary' => [
                                'description' => 'Chart仓库概述',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'CreateTime' => [
                                'description' => 'Chart仓库创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1563767620000',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'cri-kmsiwlxxdcva****',
                            ],
                            'RepoStatus' => [
                                'description' => 'Chart仓库状态，取值：'."\n"
                                    ."\n"
                                    .'- `NORMAL`：正常'."\n"
                                    .'  '."\n"
                                    .'- `DELETING`：删除中',
                                'type' => 'string',
                                'example' => 'NORMAL',
                            ],
                            'RepoType' => [
                                'description' => 'Chart仓库类型，取值：'."\n"
                                    ."\n"
                                    .'- `PUBLIC`：公开仓库'."\n"
                                    ."\n"
                                    .'- `PRIVATE`：私有仓库'."\n",
                                'type' => 'string',
                                'example' => 'PUBLIC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A3F6AB56-DEF4-4FF5-8DE4-680362C0E21F',
                            ],
                            'RepoId' => [
                                'description' => 'Chart仓库ID',
                                'type' => 'string',
                                'example' => 'crcr-c7letfwev5oq****',
                            ],
                            'ModifiedTime' => [
                                'description' => 'Chart仓库修改时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1563767700000',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RepoNamespaceName' => [
                                'description' => 'Chart仓库所处于的命名空间',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'RepoName' => [
                                'description' => 'Chart仓库名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID',
                                'type' => 'string',
                                'example' => 'rg-acfmv36i4is****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Summary\\": \\"test\\",\\n  \\"CreateTime\\": 1563767620000,\\n  \\"IsSuccess\\": true,\\n  \\"InstanceId\\": \\"cri-kmsiwlxxdcva****\\",\\n  \\"RepoStatus\\": \\"NORMAL\\",\\n  \\"RepoType\\": \\"PUBLIC\\",\\n  \\"RequestId\\": \\"A3F6AB56-DEF4-4FF5-8DE4-680362C0E21F\\",\\n  \\"RepoId\\": \\"crcr-c7letfwev5oq****\\",\\n  \\"ModifiedTime\\": 1563767700000,\\n  \\"Code\\": \\"success\\",\\n  \\"RepoNamespaceName\\": \\"test\\",\\n  \\"RepoName\\": \\"test\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmv36i4is****\\"\\n}","errorExample":""},{"type":"xml","example":"<RepoNamespaceName>test</RepoNamespaceName>\\n<IsSuccess>true</IsSuccess>\\n<RequestId>A3F6AB56-DEF4-4FF5-8DE4-680362C0E21F</RequestId>\\n<InstanceId>cri-kmsiwlxxdcva****</InstanceId>\\n<CreateTime>1563767620000</CreateTime>\\n<RepoName>test</RepoName>\\n<Code>success</Code>\\n<ModifiedTime>1563767700000</ModifiedTime>\\n<RepoType>PUBLIC</RepoType>\\n<RepoStatus>NORMAL</RepoStatus>\\n<Summary>test</Summary>\\n<RepoId>crcr-c7letfwev5oq****</RepoId>","errorExample":""}]',
            'title' => '查询Chart仓库信息',
            'summary' => '查询Chart的仓库信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteChartRelease' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'Chart',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Chart名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'chart3',
                    ],
                ],
                [
                    'name' => 'Release',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Chart版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0.1.0',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ns1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C2D6CE47-6DEF-45F4-A1AC-90F3AFBA751F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"C2D6CE47-6DEF-45F4-A1AC-90F3AFBA751F\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>C2D6CE47-6DEF-45F4-A1AC-90F3AFBA751F</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除Chart版本',
            'summary' => '删除Chart的版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListChartRelease' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ns1',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
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
                        'description' => '单页条目数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Chart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本前缀',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'null',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F68823F6-F1B5-4A4E-8421-A83CAB8F2963',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'ChartReleases' => [
                                'description' => 'Chart版本列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'ENABLED',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => 'Chart修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1571930323000',
                                        ],
                                        'RepoId' => [
                                            'description' => 'Chart仓库ID',
                                            'type' => 'string',
                                            'example' => 'crcr-gpsu7b8chmxk****',
                                        ],
                                        'Release' => [
                                            'description' => 'Chart版本号',
                                            'type' => 'string',
                                            'example' => '0.1.0',
                                        ],
                                        'Size' => [
                                            'description' => 'Chart版本大小，单位 Byte',
                                            'type' => 'string',
                                            'example' => '2826',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-xkx6vujuhay0****',
                                        ],
                                        'Chart' => [
                                            'description' => 'Chart版本名称',
                                            'type' => 'string',
                                            'example' => 'chart1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F68823F6-F1B5-4A4E-8421-A83CAB8F2963\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": \\"1\\",\\n  \\"ChartReleases\\": [\\n    {\\n      \\"Status\\": \\"ENABLED\\",\\n      \\"ModifiedTime\\": 1571930323000,\\n      \\"RepoId\\": \\"crcr-gpsu7b8chmxk****\\",\\n      \\"Release\\": \\"0.1.0\\",\\n      \\"Size\\": \\"2826\\",\\n      \\"InstanceId\\": \\"cri-xkx6vujuhay0****\\",\\n      \\"Chart\\": \\"chart1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<TotalCount>1</TotalCount>\\n<PageSize>30</PageSize>\\n<RequestId>F68823F6-F1B5-4A4E-8421-A83CAB8F2963</RequestId>\\n<ChartReleases>\\n    <Status>null</Status>\\n    <ModifiedTime>1571930323000</ModifiedTime>\\n    <InstanceId>cri-xkx6vujuhay0****</InstanceId>\\n    <Size>2826</Size>\\n    <RepoId>crcr-gpsu7b8chmxk****</RepoId>\\n    <Release>0.1.0</Release>\\n    <Chart>chart1</Chart>\\n</ChartReleases>\\n<PageNo>1</PageNo>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '查询Chart版本列表',
            'summary' => '查询Chart的版本列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAuthorizationToken' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcvaduwb',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E069EB86-E6AD-4A98-ADDE-0E993390239A',
                            ],
                            'ExpireTime' => [
                                'description' => '临时 Token 的过期时间戳，单位为 ms',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1571242083000',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TempUsername' => [
                                'description' => '用于登录 Registry 的用户名',
                                'type' => 'string',
                                'example' => 'temp_user_cr',
                            ],
                            'AuthorizationToken' => [
                                'description' => '用于登录 Registry 的密码',
                                'type' => 'string',
                                'example' => 'shaunadadakks:uuczxnjcyeyhdjadkkajsjdjadhyucb',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E069EB86-E6AD-4A98-ADDE-0E993390239A\\",\\n  \\"ExpireTime\\": 1571242083000,\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"TempUsername\\": \\"temp_user_cr\\",\\n  \\"AuthorizationToken\\": \\"shaunadadakks:uuczxnjcyeyhdjadkkajsjdjadhyucb\\"\\n}","errorExample":""},{"type":"xml","example":"<AuthorizationToken>shaunadadakks:uuczxnjcyeyhdjadkkajsjdjadhyucb</AuthorizationToken>\\n<Code>success</Code>\\n<ExpireTime/>\\n<IsSuccess>true</IsSuccess>\\n<RequestId>E069EB86-E6AD-4A98-ADDE-0E993390239A</RequestId>\\n<TempUsername>temp_user_cr</TempUsername>","errorExample":""}]',
            'title' => '获取用于登录实例的临时账号和临时密码',
            'summary' => '获取用于登录实例的临时账号和临时密码。',
            'description' => '临时密码的有效时间为1小时，若使用 STS 方式请求时，临时密码的有效时间等同于本次请求 STS Token 的有效时间。'."\n"
                ."\n"
                .'- 使用通过主账号获取的临时 Token 登录实例的权限等同于主账号使用用户名和密码登录实例的权限。'."\n"
                .'- 使用通过子账号获取的临时 Token 登录实例的权限等同于子账号使用用户名和密码登录实例的权限。'."\n"
                .'- 使用 STS 方式获取的临时 Token 登录实例的权限等同于 STS Token 的权限。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ResetLoginPassword' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '33801',
                'abilityTreeNodes' => [
                    'FEATUREacrBHA1DM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录密码，8-32位，必须包含字母、符号或数字中的至少两项',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'EB9C5722-51E2-4497-A573-575B0CA5CE0C',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"EB9C5722-51E2-4497-A573-575B0CA5CE0C\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>EB9C5722-51E2-4497-A573-575B0CA5CE0C</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '重置登录密码',
            'summary' => '重置登录密码。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelArtifactBuildTask' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-shac42yvqzvq****',
                    ],
                ],
                [
                    'name' => 'BuildTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '制品构建任务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i2ei-12****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C4C7DD0C-C9D6-437A-A7EE-121EFD70D002',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"C4C7DD0C-C9D6-437A-A7EE-121EFD70D002\\"\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<RequestId>C4C7DD0C-C9D6-437A-A7EE-121EFD70D002</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '取消制品构建任务',
            'summary' => '取消制品的构建任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetArtifactBuildTask' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-shac42yvqzvq****',
                    ],
                ],
                [
                    'name' => 'BuildTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '制品构建任务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i2a-1yu****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1685415871',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1685437471',
                            ],
                            'ArtifactBuildType' => [
                                'description' => '制品构建类型，目前支持：'."\n"
                                    ."\n"
                                    .'- `IMAGE_TO_ACCELERATED_IMAGE`：ACK场景优化的加速镜像制作'."\n"
                                    ."\n"
                                    .'- `IMAGE_TO_ECI_ACCELERATED_IMAGE`：ECI场景优化的加速镜像制品',
                                'type' => 'string',
                                'example' => 'IMAGE_TO_ACCELERATED_IMAGE',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C4C7DD0C-C9D6-437A-A7EE-121EFD70D002',
                            ],
                            'TaskStatus' => [
                                'description' => '制品制作状态，取值：'."\n"
                                    .'- `PENDING`：调度中'."\n"
                                    ."\n"
                                    .'- `BUILDING`：制作中'."\n"
                                    ."\n"
                                    .'- `SUCCESS`：制作成功'."\n"
                                    ."\n"
                                    .'- `FAILED`：制作失败',
                                'type' => 'string',
                                'example' => 'BUILDING',
                            ],
                            'BuildTaskId' => [
                                'description' => '制品构建任务ID',
                                'type' => 'string',
                                'example' => 'i2a-1yu****',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Instructions' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '保留字段，需要为空',
                                    'type' => 'string',
                                    'example' => 'null',
                                ],
                            ],
                            'SourceArtifact' => [
                                'description' => '源制品',
                                'type' => 'object',
                                'properties' => [
                                    'RepoId' => [
                                        'description' => '仓库ID，目前仅支持镜像仓库。',
                                        'type' => 'string',
                                        'example' => 'cri-shac42yvqzvq****',
                                    ],
                                    'Version' => [
                                        'description' => '制品版本，目前只支持镜像版本。',
                                        'type' => 'string',
                                        'example' => 'latest',
                                    ],
                                    'ArtifactType' => [
                                        'description' => '制品类型，目前仅支持IMAGE。',
                                        'type' => 'string',
                                        'example' => 'IMAGE',
                                    ],
                                ],
                            ],
                            'TargetArtifact' => [
                                'description' => '目的制品',
                                'type' => 'object',
                                'properties' => [
                                    'RepoId' => [
                                        'description' => '仓库ID，目前仅支持镜像仓库，且目的制品的仓库ID需要与源制品仓库ID保持一致。',
                                        'type' => 'string',
                                        'example' => 'crr-1234567',
                                    ],
                                    'Version' => [
                                        'description' => '制品版本，目前只支持镜像。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'latest_accelerated',
                                    ],
                                    'ArtifactType' => [
                                        'description' => '制品类型，目前仅支持IMAGE。',
                                        'type' => 'string',
                                        'example' => 'IMAGE',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": 1685415871,\\n  \\"StartTime\\": 1685437471,\\n  \\"ArtifactBuildType\\": \\"IMAGE_TO_ACCELERATED_IMAGE\\",\\n  \\"RequestId\\": \\"C4C7DD0C-C9D6-437A-A7EE-121EFD70D002\\",\\n  \\"TaskStatus\\": \\"BUILDING\\",\\n  \\"BuildTaskId\\": \\"i2a-1yu****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"Instructions\\": [\\n    \\"null\\"\\n  ],\\n  \\"SourceArtifact\\": {\\n    \\"RepoId\\": \\"cri-shac42yvqzvq****\\",\\n    \\"Version\\": \\"latest\\",\\n    \\"ArtifactType\\": \\"IMAGE\\"\\n  },\\n  \\"TargetArtifact\\": {\\n    \\"RepoId\\": \\"crr-1234567\\",\\n    \\"Version\\": \\"latest_accelerated\\",\\n    \\"ArtifactType\\": \\"IMAGE\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TargetArtifact>\\n    <Version>latest_accelerated</Version>\\n    <ArtifactType>IMAGE</ArtifactType>\\n    <RepoId>crr-1234567</RepoId>\\n</TargetArtifact>\\n<ArtifactBuildType>IMAGE_TO_ACCELERATED_IMAGE</ArtifactBuildType>\\n<IsSuccess>true</IsSuccess>\\n<EndTime>15687188001</EndTime>\\n<BuildTaskId>i2a-123456</BuildTaskId>\\n<RequestId>C4C7DD0C-C9D6-437A-A7EE-121EFD70D002</RequestId>\\n<StartTime>15687188001</StartTime>\\n<Instructions/>\\n<TaskStatus>BUILDING</TaskStatus>\\n<Code>success</Code>\\n<SourceArtifact>\\n    <Version>latest</Version>\\n    <ArtifactType>IMAGE</ArtifactType>\\n    <RepoId>crr-1234567</RepoId>\\n</SourceArtifact>","errorExample":""}]',
            'title' => '获取制品构建任务',
            'summary' => '获取制品的构建任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListArtifactBuildTaskLog' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-shac42yvqzvq****',
                    ],
                ],
                [
                    'name' => 'BuildTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '制品构建任务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i2a-1yu****',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C4C7DD0C-C9D6-437A-A7EE-121EFD70D002',
                            ],
                            'TotalCount' => [
                                'description' => '日志总条目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'BuildTaskLogs' => [
                                'description' => '制品构建单行日志',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Message' => [
                                            'description' => '日志信息',
                                            'type' => 'string',
                                            'example' => 'Start Build',
                                        ],
                                        'LineNumber' => [
                                            'description' => '日志行号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"C4C7DD0C-C9D6-437A-A7EE-121EFD70D002\\",\\n  \\"TotalCount\\": 200,\\n  \\"BuildTaskLogs\\": [\\n    {\\n      \\"Message\\": \\"Start Build\\",\\n      \\"LineNumber\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<IsSuccess>true</IsSuccess>\\n<TotalCount>200</TotalCount>\\n<BuildTaskLogs>\\n    <Message>Start Build</Message>\\n    <LineNumber>1</LineNumber>\\n</BuildTaskLogs>\\n<RequestId>C4C7DD0C-C9D6-437A-A7EE-121EFD70D002</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '获取制品构建任务日志',
            'summary' => '获取制品的构建任务日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateChain' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-4cdrlqmhn4gm****',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'repo1',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ns1',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付链名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付链描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description',
                    ],
                ],
                [
                    'name' => 'ChainConfig',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'JSON化交付链描述的实体对象',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'chainconfig',
                    ],
                ],
                [
                    'name' => 'ScopeExclude',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '不被交付链执行的仓库集合',
                        'type' => 'array',
                        'items' => [
                            'description' => '不被交付链执行的仓库名，多个仓库名用英文逗号分隔',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'repo_name1,repo_name2',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ChainId' => [
                                'description' => '交付链ID',
                                'type' => 'string',
                                'example' => 'chi-02ymhtwl3cq8****',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID'."\n",
                                'type' => 'string',
                                'example' => '4BC03B36-E515-5806-99AC-268AE3C0****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"ChainId\\": \\"chi-02ymhtwl3cq8****\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"4BC03B36-E515-5806-99AC-268AE3C0****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateChainResponse>\\n    <Code>success</Code>\\n    <ChainId>chi-02ymhtwl3cq8****</ChainId>\\n    <IsSuccess>true</IsSuccess>\\n    <RequestId>4BC03B36-E515-5806-99AC-268AE3C0****</RequestId>\\n</CreateChainResponse>","errorExample":""}]',
            'title' => '创建交付链',
            'summary' => '创建交付链。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteChain' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-4cdrlqmhn4gm****',
                    ],
                ],
                [
                    'name' => 'ChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付链ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'chi-02ymhtwl3cq8****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID'."\n",
                                'type' => 'string',
                                'example' => 'DB1809A8-E1C8-5707-BAF8-D4FC1C11****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"DB1809A8-E1C8-5707-BAF8-D4FC1C11****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteChainResponse>\\n    <Code>success</Code>\\n    <IsSuccess>true</IsSuccess>\\n    <RequestId>DB1809A8-E1C8-5707-BAF8-D4FC1C11****</RequestId>\\n</DeleteChainResponse>","errorExample":""}]',
            'title' => '删除交付链',
            'summary' => '删除交付链。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateChain' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-4cdrlqmhn4gm****',
                    ],
                ],
                [
                    'name' => 'ChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付链ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'chi-02ymhtwl3cq8****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付链名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付链描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description',
                    ],
                ],
                [
                    'name' => 'ChainConfig',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'JSON化交付链描述的实体对象',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'chainconfig',
                    ],
                ],
                [
                    'name' => 'ScopeExclude',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '不被交付链执行的仓库集合',
                        'type' => 'array',
                        'items' => [
                            'description' => '不被交付链执行的仓库名，多个仓库名用英文逗号分隔',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'repo_name1,repo_name2',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                        'minItems' => 0,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '85A99B10-3926-5201-958E-C06FA47F****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"85A99B10-3926-5201-958E-C06FA47F****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateChainResponse>\\n    <Code>success</Code>\\n    <IsSuccess>true</IsSuccess>\\n    <RequestId>85A99B10-3926-5201-958E-C06FA47F****</RequestId>\\n</UpdateChainResponse>","errorExample":""}]',
            'title' => '修改交付链定义',
            'summary' => '修改交付链定义，例如修改交付链的节点执行顺序。',
        ],
        'GetChain' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-4cdrlqmhn4gm****',
                    ],
                ],
                [
                    'name' => 'ChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付链ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'chi-0ops0gsmw5x2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ModifiedTime' => [
                                'description' => '交付链描述修改时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1638259914000',
                            ],
                            'ScopeId' => [
                                'description' => '交付链作用域ID',
                                'type' => 'string',
                                'example' => 'crr-nyrh2oko32xb****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C87993B5-7D61-5CAC-8D64-1AC732DD69FF',
                            ],
                            'Description' => [
                                'description' => '交付链描述',
                                'type' => 'string',
                                'example' => 'description',
                            ],
                            'CreateTime' => [
                                'description' => '交付链创建时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1638255427000',
                            ],
                            'ScopeType' => [
                                'description' => '交付链作用域类型',
                                'type' => 'string',
                                'example' => 'REPOSITORY',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ChainId' => [
                                'description' => '交付链ID',
                                'type' => 'string',
                                'example' => 'chi-0ops0gsmw5x2****',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'cri-4cdrlqmhn4gm****',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Name' => [
                                'description' => '交付链名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ChainConfig' => [
                                'description' => '交付链配置描述',
                                'type' => 'object',
                                'properties' => [
                                    'ChainConfigId' => [
                                        'description' => '交付链配置ID',
                                        'type' => 'string',
                                        'example' => 'cci-lz3ycgo69ukt****',
                                    ],
                                    'IsActive' => [
                                        'description' => '交付链配置是否有生效，取值：'."\n"
                                            ."\n"
                                            .'- `true`：生效'."\n"
                                            ."\n"
                                            .'- `false`：不生效',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Version' => [
                                        'description' => '交付链版本',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Routers' => [
                                        'description' => '交付链节点间执行顺序关系',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'From' => [
                                                    'description' => '源节点',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'NodeName' => [
                                                            'description' => '源节点名称',
                                                            'type' => 'string',
                                                            'example' => 'DOCKER_IMAGE_BUILD',
                                                        ],
                                                    ],
                                                ],
                                                'To' => [
                                                    'description' => '目的节点',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'NodeName' => [
                                                            'description' => '目的节点名称',
                                                            'type' => 'string',
                                                            'example' => 'DOCKER_IMAGE_PUSH',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Nodes' => [
                                        'description' => '交付链中的每一个节点',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'NodeName' => [
                                                    'description' => '交付链节点名称',
                                                    'type' => 'string',
                                                    'example' => 'VULNERABILITY_SCANNING',
                                                ],
                                                'Enable' => [
                                                    'description' => '是否启用该交付链节点，取值：'."\n"
                                                        ."\n"
                                                        .'- `true`：启用交付链节点'."\n"
                                                        ."\n"
                                                        .'- `false`：不启用交付链节点',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'NodeConfig' => [
                                                    'description' => '交付链节点配置',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Timeout' => [
                                                            'description' => '超时时间（单位秒）',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '900',
                                                        ],
                                                        'Retry' => [
                                                            'description' => '重试次数',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '3',
                                                        ],
                                                        'DenyPolicy' => [
                                                            'description' => '交付链节点中扫描节点的阻断规则',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Logic' => [
                                                                    'description' => '扫描触发阻断的逻辑',
                                                                    'type' => 'string',
                                                                    'example' => 'AND',
                                                                ],
                                                                'IssueLevel' => [
                                                                    'description' => '扫描漏洞等级达到多少时触发阻断',
                                                                    'type' => 'string',
                                                                    'example' => 'HIGH',
                                                                ],
                                                                'IssueCount' => [
                                                                    'description' => '扫描漏洞数达到多少时触发阻断',
                                                                    'type' => 'string',
                                                                    'example' => '10',
                                                                ],
                                                                'Action' => [
                                                                    'description' => '阻断动作，取值：'."\n"
                                                                        ."\n"
                                                                        .'- `BLOCK`：阻断交付链继续执行'."\n"
                                                                        ."\n"
                                                                        .'- `BLOCK_RETAG`：阻断覆盖推送镜像 tag'."\n"
                                                                        ."\n"
                                                                        .'- `BLOCK_DELETE_TAG`：阻断删除镜像 tag',
                                                                    'type' => 'string',
                                                                    'example' => 'BLOCK',
                                                                ],
                                                                'IssueList' => [
                                                                    'description' => '需要阻断的CVE漏洞集合，多个CVE漏洞名用英文逗号分隔',
                                                                    'type' => 'string',
                                                                    'example' => 'CVE-2020-8286,CVE-2020-8285',
                                                                ],
                                                                'MaliciousList' => [
                                                                    'description' => '需要阻断的恶意样本集合，多个恶意样本名用英文逗号分隔',
                                                                    'type' => 'string',
                                                                    'example' => 'mutate_cockhorse,abnormal_program',
                                                                ],
                                                                'BaselineList' => [
                                                                    'description' => '需要阻断的基线样本集合，多个基线样本名用英文逗号分隔',
                                                                    'type' => 'string',
                                                                    'example' => 'identification,hc_image_exploit',
                                                                ],
                                                            ],
                                                        ],
                                                        'ScanEngine' => [
                                                            'description' => '交付链扫描节点引擎'."\n"
                                                                ."\n"
                                                                .'- `SAS_SCAN_SERVICE`, 云安全扫描引擎（需要付费开通）'."\n"
                                                                .'- `ACR_SCAN_SERVICE`, ACR扫描引擎',
                                                            'type' => 'string',
                                                            'example' => 'ACR_SCAN_SERVICE',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ScopeExclude' => [
                                'description' => '不被交付链执行的仓库集合',
                                'type' => 'array',
                                'items' => [
                                    'description' => '不被交付链执行的仓库名，多个仓库名用英文逗号分隔',
                                    'type' => 'string',
                                    'example' => 'repo_name1,repo_name2'."\n",
                                ],
                                'maxItems' => 50,
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ModifiedTime\\": 1638259914000,\\n  \\"ScopeId\\": \\"crr-nyrh2oko32xb****\\",\\n  \\"RequestId\\": \\"C87993B5-7D61-5CAC-8D64-1AC732DD69FF\\",\\n  \\"Description\\": \\"description\\",\\n  \\"CreateTime\\": 1638255427000,\\n  \\"ScopeType\\": \\"REPOSITORY\\",\\n  \\"Code\\": \\"success\\",\\n  \\"ChainId\\": \\"chi-0ops0gsmw5x2****\\",\\n  \\"InstanceId\\": \\"cri-4cdrlqmhn4gm****\\",\\n  \\"IsSuccess\\": true,\\n  \\"Name\\": \\"test\\",\\n  \\"ChainConfig\\": {\\n    \\"ChainConfigId\\": \\"cci-lz3ycgo69ukt****\\",\\n    \\"IsActive\\": true,\\n    \\"Version\\": \\"1\\",\\n    \\"Routers\\": [\\n      {\\n        \\"From\\": {\\n          \\"NodeName\\": \\"DOCKER_IMAGE_BUILD\\"\\n        },\\n        \\"To\\": {\\n          \\"NodeName\\": \\"DOCKER_IMAGE_PUSH\\"\\n        }\\n      }\\n    ],\\n    \\"Nodes\\": [\\n      {\\n        \\"NodeName\\": \\"VULNERABILITY_SCANNING\\",\\n        \\"Enable\\": true,\\n        \\"NodeConfig\\": {\\n          \\"Timeout\\": 900,\\n          \\"Retry\\": 3,\\n          \\"DenyPolicy\\": {\\n            \\"Logic\\": \\"AND\\",\\n            \\"IssueLevel\\": \\"HIGH\\",\\n            \\"IssueCount\\": \\"10\\",\\n            \\"Action\\": \\"BLOCK\\",\\n            \\"IssueList\\": \\"CVE-2020-8286,CVE-2020-8285\\",\\n            \\"MaliciousList\\": \\"mutate_cockhorse,abnormal_program\\",\\n            \\"BaselineList\\": \\"identification,hc_image_exploit\\"\\n          },\\n          \\"ScanEngine\\": \\"ACR_SCAN_SERVICE\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"ScopeExclude\\": [\\n    \\"repo_name1,repo_name2\\\\n\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetChainResponse>\\n    <ModifiedTime>1638259914000</ModifiedTime>\\n    <ScopeId>crr-nyrh2oko32xb****</ScopeId>\\n    <RequestId>C87993B5-7D61-5CAC-8D64-1AC732DD69FF</RequestId>\\n    <Description>description</Description>\\n    <CreateTime>1638255427000</CreateTime>\\n    <ScopeType>REPOSITORY</ScopeType>\\n    <Code>success</Code>\\n    <ChainId>chi-0ops0gsmw5x2****</ChainId>\\n    <InstanceId>cri-4cdrlqmhn4gm****</InstanceId>\\n    <IsSuccess>true</IsSuccess>\\n    <Name>test</Name>\\n    <ChainConfig>\\n        <ChainConfigId>cci-lz3ycgo69ukt****</ChainConfigId>\\n        <IsActive>true</IsActive>\\n        <Version>1</Version>\\n        <Routers>\\n            <From>\\n                <NodeName>DOCKER_IMAGE_BUILD</NodeName>\\n            </From>\\n            <To>\\n                <NodeName>DOCKER_IMAGE_PUSH</NodeName>\\n            </To>\\n        </Routers>\\n        <Nodes>\\n            <NodeName>VULNERABILITY_SCANNING</NodeName>\\n            <Enable>true</Enable>\\n            <NodeConfig>\\n                <Timeout>5</Timeout>\\n                <Retry>3</Retry>\\n                <DenyPolicy>\\n                    <Logic>AND</Logic>\\n                    <IssueLevel>HIGH</IssueLevel>\\n                    <IssueCount>10</IssueCount>\\n                    <Action>BLOCK</Action>\\n                </DenyPolicy>\\n                <ScanEngine>ACR_SCAN_SERVICE</ScanEngine>\\n            </NodeConfig>\\n        </Nodes>\\n    </ChainConfig>\\n</GetChainResponse>","errorExample":""}]',
            'title' => '获取交付链定义',
            'summary' => '获取交付链定义，用于了解交付链的节点执行顺序。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListChain' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-4cdrlqmhn4gm****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ns1',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'repo1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '85A99B10-3926-5201-958E-C06FA47F****',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '总计交付链数目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Chains' => [
                                'description' => '交付链条目数组',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ModifiedTime' => [
                                            'description' => '交付链修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1638259914000',
                                        ],
                                        'ScopeId' => [
                                            'description' => '交付链作用域ID',
                                            'type' => 'string',
                                            'example' => 'crr-nyrh2oko32xb****',
                                        ],
                                        'Description' => [
                                            'description' => '交付链描述',
                                            'type' => 'string',
                                            'example' => 'description',
                                        ],
                                        'CreateTime' => [
                                            'description' => '交付链创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1638255427000',
                                        ],
                                        'ScopeType' => [
                                            'description' => '交付链作用域类型',
                                            'type' => 'string',
                                            'example' => 'REPOSITORY',
                                        ],
                                        'ChainId' => [
                                            'description' => '交付链ID',
                                            'type' => 'string',
                                            'example' => 'chi-0ops0gsmw5x2****',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-4cdrlqmhn4gm****',
                                        ],
                                        'Name' => [
                                            'description' => '交付链名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ScopeExclude' => [
                                            'description' => '不被交付链执行的仓库集合',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '不被交付链执行的仓库名，多个仓库名用英文逗号分隔',
                                                'type' => 'string',
                                                'example' => 'repo_name1,repo_name2',
                                            ],
                                            'minItems' => 0,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85A99B10-3926-5201-958E-C06FA47F****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Chains\\": [\\n    {\\n      \\"ModifiedTime\\": 1638259914000,\\n      \\"ScopeId\\": \\"crr-nyrh2oko32xb****\\",\\n      \\"Description\\": \\"description\\",\\n      \\"CreateTime\\": 1638255427000,\\n      \\"ScopeType\\": \\"REPOSITORY\\",\\n      \\"ChainId\\": \\"chi-0ops0gsmw5x2****\\",\\n      \\"InstanceId\\": \\"cri-4cdrlqmhn4gm****\\",\\n      \\"Name\\": \\"test\\",\\n      \\"ScopeExclude\\": [\\n        \\"repo_name1,repo_name2\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListChainResponse>\\n    <RequestId>85A99B10-3926-5201-958E-C06FA47F****</RequestId>\\n    <Code>success</Code>\\n    <PageNo>1</PageNo>\\n    <IsSuccess>true</IsSuccess>\\n    <PageSize>1</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Chains>\\n        <ModifiedTime>1638259914000</ModifiedTime>\\n        <ScopeId>crr-nyrh2oko32xb****</ScopeId>\\n        <Description>description</Description>\\n        <CreateTime>1638255427000</CreateTime>\\n        <ScopeType>REPOSITORY</ScopeType>\\n        <ChainId>chi-0ops0gsmw5x2****</ChainId>\\n        <InstanceId>cri-4cdrlqmhn4gm****</InstanceId>\\n        <Name>test</Name>\\n    </Chains>\\n</ListChainResponse>","errorExample":""}]',
            'title' => '获取交付链条目',
            'summary' => '获取交付链条目。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListChainInstance' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-namespace',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-repo',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '838D1602-6D8F-47FB-B60A-656645D2****',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'example' => 'cri-kmsiwlxxdcva****',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ChainInstances' => [
                                'description' => '交付链执行记录列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '完成时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1636685856000',
                                        ],
                                        'Status' => [
                                            'description' => '交付链执行状态，取值：'."\n"
                                                ."\n"
                                                .'- `RUNNING`：运行中'."\n"
                                                .'- `COMPLETE`：完成'."\n"
                                                .'- `CANCELING`：取消中'."\n"
                                                .'- `CANCELED`：已取消'."\n",
                                            'type' => 'string',
                                            'example' => 'COMPLETE',
                                        ],
                                        'StartTime' => [
                                            'description' => '开始时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1636685776000',
                                        ],
                                        'Result' => [
                                            'description' => '交付链执行结果，取值：'."\n"
                                                ."\n"
                                                .'- `SUCCESS`：成功'."\n"
                                                .'- `FAILED`：失败'."\n"
                                                .'- `CANCELED`：取消'."\n"
                                                .'- `DENIED`：阻断',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'ChainInstanceId' => [
                                            'description' => '交付链实例ID',
                                            'type' => 'string',
                                            'example' => 'F4CF4DDB-BEF2-5575-****-*******',
                                        ],
                                        'RepoNamespaceName' => [
                                            'description' => '命名空间',
                                            'type' => 'string',
                                            'example' => 'test-ns',
                                        ],
                                        'RepoName' => [
                                            'description' => '仓库名称',
                                            'type' => 'string',
                                            'example' => 'test-repo',
                                        ],
                                        'Chain' => [
                                            'description' => '交付链执行记录',
                                            'type' => 'object',
                                            'properties' => [
                                                'ChainId' => [
                                                    'description' => '交付链 ID',
                                                    'type' => 'string',
                                                    'example' => 'chi-m42gbku0****',
                                                ],
                                                'ChainName' => [
                                                    'description' => '交付链名称',
                                                    'type' => 'string',
                                                    'example' => 'test-chain',
                                                ],
                                                'Version' => [
                                                    'description' => '交付链版本',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"838D1602-6D8F-47FB-B60A-656645D2****\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"InstanceId\\": \\"cri-kmsiwlxxdcva****\\",\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"ChainInstances\\": [\\n    {\\n      \\"EndTime\\": 1636685856000,\\n      \\"Status\\": \\"COMPLETE\\",\\n      \\"StartTime\\": 1636685776000,\\n      \\"Result\\": \\"SUCCESS\\",\\n      \\"ChainInstanceId\\": \\"F4CF4DDB-BEF2-5575-****-*******\\",\\n      \\"RepoNamespaceName\\": \\"test-ns\\",\\n      \\"RepoName\\": \\"test-repo\\",\\n      \\"Chain\\": {\\n        \\"ChainId\\": \\"chi-m42gbku0****\\",\\n        \\"ChainName\\": \\"test-chain\\",\\n        \\"Version\\": 1\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListChainInstanceResponse>\\n    <RequestId>838D1602-6D8F-47FB-B60A-656645D2****</RequestId>\\n    <Code>success</Code>\\n    <PageNo>1</PageNo>\\n    <IsSuccess>true</IsSuccess>\\n    <InstanceId>cri-kmsiwlxxdcva****</InstanceId>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <ChainInstances>\\n        <EndTime>1636685856000</EndTime>\\n        <Status>COMPLETE</Status>\\n        <StartTime>1636685776000</StartTime>\\n        <Result>SUCCESS</Result>\\n        <ChainInstanceId>F4CF4DDB-BEF2-5575-****-*******</ChainInstanceId>\\n        <RepoNamespaceName>test-ns</RepoNamespaceName>\\n        <RepoName>test-repo</RepoName>\\n        <Chain>\\n            <ChainId>chi-m42gbku0****</ChainId>\\n            <ChainName>test-chain</ChainName>\\n            <Version>1</Version>\\n        </Chain>\\n    </ChainInstances>\\n</ListChainInstanceResponse>","errorExample":""}]',
            'title' => '查询交付链执行记录',
            'summary' => '查询交付链执行记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
        ],
        'DeleteEventCenterRule' => [
            'summary' => '删除事件通知规则。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cri-xkx6vujuhay0****',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件规则ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'crecr-n6pbhgjx*****',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '031572FA-7D8F-4C05-B790-1071E0E05DE6',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"031572FA-7D8F-4C05-B790-1071E0E05DE6\\",\\n  \\"Code\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>031572FA-7D8F-4C05-B790-1071E0E05DE6</RequestId>\\n<Code>success</Code>","errorExample":""}]',
            'title' => '删除事件通知规则',
        ],
        'UpdateEventCenterRule' => [
            'summary' => '更新事件规则。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件规则ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'crecr-n6pbhgjxt*****',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'chain-demo',
                    ],
                ],
                [
                    'name' => 'EventChannel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件通道',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EVENT_BRIDGE',
                    ],
                ],
                [
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件类型，取值：'."\n"
                            .'- `cr:Artifact:DeliveryChainCompleted`：交付链处理完成'."\n"
                            .'- `cr:Artifact:SynchronizationCompleted`：镜像同步完成'."\n"
                            .'- `cr:Artifact:BuildCompleted`：镜像构建完成'."\n"
                            .'- `cr:Artifact:ScanCompleted`：镜像扫描完成'."\n"
                            .'- `cr:Artifact:SigningCompleted`：镜像加签完成',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cr:Artifact:DeliveryChainCompleted',
                    ],
                ],
                [
                    'name' => 'EventScope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件范围，取值：'."\n"
                            ."\n"
                            .'- `INSTANCE`：实例'."\n"
                            ."\n"
                            .'- `NAMESPACE`：命名空间'."\n"
                            ."\n"
                            .'- `REPO`：镜像仓库'."\n"
                            ."\n"
                            .'默认值：`INSTANCE`',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INSTANCE',
                    ],
                ],
                [
                    'name' => 'Namespaces',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '事件规则生效的命名空间',
                        'type' => 'array',
                        'items' => [
                            'description' => '命名空间列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["ns1","ns2"]',
                        ],
                        'required' => false,
                        'example' => 'ns',
                    ],
                ],
                [
                    'name' => 'RepoNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '事件规则生效的仓库名称',
                        'type' => 'array',
                        'items' => [
                            'description' => '仓库名称列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["repo1","repo2"]',
                        ],
                        'required' => false,
                        'example' => 'reponame',
                    ],
                ],
                [
                    'name' => 'RepoTagFilterPattern',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件触发的tag过滤规则',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*',
                    ],
                ],
                [
                    'name' => 'EventConfig',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件配置',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'        "notifyMethod":"http",'."\n"
                            .'        "notifyConfig":{'."\n"
                            .'            "Url":"http://www.aliyundoc.com",'."\n"
                            .'            "id":"MaAV3HgTkO5Fh8l1V********",'."\n"
                            .'        },'."\n"
                            .'        "notifyFilter":{}'."\n"
                            .'    }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '031572FA-7D8F-4C05-B790-1071E0E05DE6',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RuleId' => [
                                'description' => '事件规则ID',
                                'type' => 'string',
                                'example' => 'crecr-n6pbhgjxt*****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"031572FA-7D8F-4C05-B790-1071E0E05DE6\\",\\n  \\"Code\\": 200,\\n  \\"RuleId\\": \\"crecr-n6pbhgjxt*****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateEventCenterRuleResponse>\\n    <RequestId>031572FA-7D8F-4C05-B790-1071E0E05DE6</RequestId>\\n    <Code>200</Code>\\n    <RuleId>crecr-n6pbhgjxt*****</RuleId>\\n</UpdateEventCenterRuleResponse>","errorExample":""}]',
            'title' => '更新事件规则',
        ],
        'ListEventCenterRecord' => [
            'summary' => '获取事件规则事件历史。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
                [
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件类型，取值：'."\n"
                            .'- `cr:Artifact:DeliveryChainCompleted`：交付链处理完成'."\n"
                            .'- `cr:Artifact:SynchronizationCompleted`：镜像同步完成'."\n"
                            .'- `cr:Artifact:BuildCompleted`：镜像构建完成'."\n"
                            .'- `cr:Artifact:ScanCompleted`：镜像扫描完成'."\n"
                            .'- `cr:Artifact:SigningCompleted`：镜像加签完成'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cr:Artifact:DeliveryChainCompleted',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件规则ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'crecr-n6pbhgjxtla***',
                    ],
                ],
                [
                    'name' => 'RepoNamespaceName',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '665C7A5E-BAEC-5BCD-AF9F-5F9260D672BF',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '事件历史总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Records' => [
                                'description' => '事件历史列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RecordId' => [
                                            'description' => '事件记录ID',
                                            'type' => 'string',
                                            'example' => 'crecrr-ctdbzwtkpr*****',
                                        ],
                                        'RuleId' => [
                                            'description' => '事件规则ID',
                                            'type' => 'string',
                                            'example' => 'crecr-n6pbhgjxtla*****',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => 'cri-gl34plsa****',
                                        ],
                                        'RuleName' => [
                                            'description' => '事件规则名称',
                                            'type' => 'string',
                                            'example' => 'chain-demo',
                                        ],
                                        'Namespace' => [
                                            'description' => '命名空间',
                                            'type' => 'string',
                                            'example' => 'mychain',
                                        ],
                                        'RepoName' => [
                                            'description' => '仓库名称',
                                            'type' => 'string',
                                            'example' => 'ruby-2.4.0',
                                        ],
                                        'Tag' => [
                                            'description' => '标签',
                                            'type' => 'string',
                                            'example' => 'ruby-2.4.0',
                                        ],
                                        'EventChannel' => [
                                            'description' => '通知渠道',
                                            'type' => 'string',
                                            'example' => 'EVENT_BRIDGE',
                                        ],
                                        'EventType' => [
                                            'description' => '事件类型',
                                            'type' => 'string',
                                            'example' => 'cr:Artifact:DeliveryChainCompleted',
                                        ],
                                        'EventNotifyMethod' => [
                                            'description' => '通知方式，取值：'."\n"
                                                ."\n"
                                                .'- `http`：使用HTTP通知'."\n"
                                                ."\n"
                                                .'- `https`：使用HTTPS通知'."\n"
                                                ."\n"
                                                .'- `dingding`：使用钉钉通知'."\n",
                                            'type' => 'string',
                                            'example' => 'http',
                                        ],
                                        'EventNotifyId' => [
                                            'description' => '下游通知的事件ID',
                                            'type' => 'string',
                                            'example' => '7d478419-61df-49e5-b92b-30ce730c2127',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1638188622000',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1638188622000',
                                        ],
                                    ],
                                ],
                                'example' => '[]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"665C7A5E-BAEC-5BCD-AF9F-5F9260D672BF\\",\\n  \\"Code\\": \\"success\\",\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 50,\\n  \\"Records\\": [\\n    {\\n      \\"RecordId\\": \\"crecrr-ctdbzwtkpr*****\\",\\n      \\"RuleId\\": \\"crecr-n6pbhgjxtla*****\\",\\n      \\"InstanceId\\": \\"cri-gl34plsa****\\",\\n      \\"RuleName\\": \\"chain-demo\\",\\n      \\"Namespace\\": \\"mychain\\",\\n      \\"RepoName\\": \\"ruby-2.4.0\\",\\n      \\"Tag\\": \\"ruby-2.4.0\\",\\n      \\"EventChannel\\": \\"EVENT_BRIDGE\\",\\n      \\"EventType\\": \\"cr:Artifact:DeliveryChainCompleted\\",\\n      \\"EventNotifyMethod\\": \\"http\\",\\n      \\"EventNotifyId\\": \\"7d478419-61df-49e5-b92b-30ce730c2127\\",\\n      \\"CreateTime\\": 1638188622000,\\n      \\"UpdateTime\\": 1638188622000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListEventCenterRecordResponse>\\n    <RequestId>665C7A5E-BAEC-5BCD-AF9F-5F9260D672BF</RequestId>\\n    <Code>success</Code>\\n    <PageNo>1</PageNo>\\n    <IsSuccess>true</IsSuccess>\\n    <PageSize>30</PageSize>\\n    <TotalCount>50</TotalCount>\\n    <Records>\\n        <RecordId>crecrr-ctdbzwtkpr*****</RecordId>\\n        <RuleId>crecr-n6pbhgjxtla*****</RuleId>\\n        <InstanceId>cri-gl34plsa****</InstanceId>\\n        <RuleName>chain-demo</RuleName>\\n        <Namespace>mychain</Namespace>\\n        <RepoName>ruby-2.4.0</RepoName>\\n        <Tag>ruby-2.4.0</Tag>\\n        <EventChannel>EVENT_BRIDGE</EventChannel>\\n        <EventType>cr:Artifact:DeliveryChainCompleted</EventType>\\n        <EventNotifyMethod>http</EventNotifyMethod>\\n        <EventNotifyId>7d478419-61df-49e5-b92b-30ce730c2127</EventNotifyId>\\n        <CreateTime>1638188622000</CreateTime>\\n        <UpdateTime>1638188622000</UpdateTime>\\n    </Records>\\n</ListEventCenterRecordResponse>","errorExample":""}]',
            'title' => '获取事件规则事件历史',
        ],
        'ListEventCenterRuleName' => [
            'summary' => '获取事件规则名称。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cri-kmsiwlxxdcva****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '031572FA-7D8F-4C05-B790-1071E0E05DE6',
                            ],
                            'Code' => [
                                'description' => '返回值',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RuleNames' => [
                                'description' => '事件规则名称列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RuleId' => [
                                            'description' => '事件规则ID',
                                            'type' => 'string',
                                            'example' => 'crecr-n6pbhgjxtl*****',
                                        ],
                                        'RuleName' => [
                                            'description' => '事件规则名称',
                                            'type' => 'string',
                                            'example' => 'test-chain',
                                        ],
                                    ],
                                ],
                                'example' => '[{\'RuleName\': \'mlf\', \'RuleId\': \'crecr-73q93pgljm1pc2fp\'}]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"031572FA-7D8F-4C05-B790-1071E0E05DE6\\",\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RuleNames\\": [\\n    {\\n      \\"RuleId\\": \\"crecr-n6pbhgjxtl*****\\",\\n      \\"RuleName\\": \\"test-chain\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListEventCenterRuleNameResponse>\\n    <RequestId>031572FA-7D8F-4C05-B790-1071E0E05DE6</RequestId>\\n    <Code>success</Code>\\n    <IsSuccess>true</IsSuccess>\\n    <RuleNames>\\n        <RuleId>crecr-n6pbhgjxtl*****</RuleId>\\n        <RuleName>test-chain</RuleName>\\n    </RuleNames>\\n</ListEventCenterRuleNameResponse>","errorExample":""}]',
            'title' => '获取事件规则名称',
        ],
        'ChangeResourceGroup' => [
            'summary' => '修改资源所属的资源组信息。',
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源Id',
                        'description' => '资源ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cri-8qong6ve5p3mhlgt',
                    ],
                ],
                [
                    'name' => 'ResourceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域Id',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shenzhen-finance-1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '目标资源组',
                        'description' => '目标资源组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-aekz5nlvlaksnvi',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '314CB661-35A5-5F01-A623-3EC6F87FF52F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission.ChangeResourceGroup',
                        'errorMessage' => 'You are not authorized to change resourcegroup',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceRegionId',
                        'errorMessage' => 'The ResourceRegionId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceId',
                        'errorMessage' => 'The ResourceId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceGroupId',
                        'errorMessage' => 'The ResourceGroupId parameters that are required for processing this request are missing',
                    ],
                    [
                        'errorCode' => 'InvalidResourceGroup',
                        'errorMessage' => 'The specified ResourceGroupId is invalid',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred while processing your request',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => ' The specified resource is not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"314CB661-35A5-5F01-A623-3EC6F87FF52F\\"\\n}","type":"json"}]',
            'title' => '更改资源组',
        ],
        'CreateBuildRecordByRecord' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-hpdfkc6utbaq****'."\n",
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-hnoq7j93or3k****'."\n",
                    ],
                ],
                [
                    'name' => 'BuildRecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建记录ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0A311FC5-B8C6-4332-80E4-539EB73****'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码：200：表示成功。                                 其它：表示错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '调用是否成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用成功'."\n"
                                    ."\n"
                                    .'- `false`：调用失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4CE1F661-75DD-4EBD-A4AD-057B26834ABB'."\n",
                            ],
                            'BuildRecordId' => [
                                'description' => '构建记录ID',
                                'type' => 'string',
                                'example' => 'crbr-ly77w5i3t31f****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'NoPrivilege',
                        'errorMessage' => 'Access denied for this user.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'Unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true,\\n  \\"RequestId\\": \\"4CE1F661-75DD-4EBD-A4AD-057B26834ABB\\\\n\\",\\n  \\"BuildRecordId\\": \\"crbr-ly77w5i3t31f****\\\\n\\"\\n}","type":"json"}]',
            'title' => '创建构建记录',
            'summary' => '根据记录创建构建记录。',
        ],
        'GetArtifactBuildRule' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cri-xkx6vujuhay0****'."\n",
                    ],
                ],
                [
                    'name' => 'ScopeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则生效范围，取值：'."\n"
                            .'- `REPOSITORY`：表示生效范围仓库级别',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'REPOSITORY',
                    ],
                ],
                [
                    'name' => 'ScopeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则生效范围的ID，取值：'."\n"
                            ."\n"
                            .'- ScopeId配置为镜像仓库ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'crr-8dz3aedjqlmk****'."\n",
                    ],
                ],
                [
                    'name' => 'ArtifactType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加速镜像类型，取值：'."\n"
                            ."\n"
                            .'- `ACCELERATED_IMAGE`：表示生成加速镜像',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ACCELERATED_IMAGE',
                    ],
                ],
                [
                    'name' => 'BuildRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建规则ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'crabr-o2670wqz2n70****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '7A3E98F6-296C-54AC-A612-B75E7777D4C1',
                            ],
                            'ScopeId' => [
                                'description' => '规则生效范围的ID，取值：'."\n"
                                    ."\n"
                                    .'- ScopeId配置为镜像仓库ID',
                                'type' => 'string',
                                'example' => 'crr-8dz3aedjqlmk****',
                            ],
                            'BuildRuleId' => [
                                'description' => '构建规则ID',
                                'type' => 'string',
                                'example' => 'crabr-o2670wqz2n70****'."\n",
                            ],
                            'ArtifactType' => [
                                'description' => '加速镜像类型，取值：'."\n"
                                    ."\n"
                                    .'- `ACCELERATED_IMAGE`：表示生成加速镜像',
                                'type' => 'string',
                                'example' => 'ACCELERATED_IMAGE',
                            ],
                            'ScopeType' => [
                                'description' => '规则生效范围，取值：'."\n"
                                    .'- `REPOSITORY`：表示生效范围仓库级别',
                                'type' => 'string',
                                'example' => 'REPOSITORY',
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'properties' => [
                                    'ImageIndexOnly' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '接口返回码：'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用API成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7A3E98F6-296C-54AC-A612-B75E7777D4C1\\",\\n  \\"ScopeId\\": \\"crr-8dz3aedjqlmk****\\",\\n  \\"BuildRuleId\\": \\"crabr-o2670wqz2n70****\\\\n\\",\\n  \\"ArtifactType\\": \\"ACCELERATED_IMAGE\\",\\n  \\"ScopeType\\": \\"REPOSITORY\\",\\n  \\"Parameters\\": {\\n    \\"ImageIndexOnly\\": true\\n  },\\n  \\"Code\\": \\"success\\",\\n  \\"IsSuccess\\": true\\n}","type":"json"}]',
            'title' => '获取制品构建规则',
            'summary' => '获取制品构建规则。',
        ],
        'ListScanBaselineByTask' => [
            'summary' => '分页查询一个云安全扫描任务的基线漏洞。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cri-***********',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Level',
                    'in' => 'query',
                    'schema' => [
                        'description' => '等级',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'High',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'crr-**************',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.1.36',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像 digest 值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sha256:1c89806cfaf66d2990e2cf1131ebd56ff24b133745a33abf1228*************',
                    ],
                ],
                [
                    'name' => 'ScanTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像扫描任务 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3e526d7e-4b45-4703-b046-***********',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '5259118F-79E2-57E9-9AEA-551586F4FAED',
                            ],
                            'Code' => [
                                'description' => '返回码'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '页号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用 API 成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用 API 成功'."\n"
                                    ."\n"
                                    .'- `false`：调用 API 失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '条目数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'ScanBaselines' => [
                                'description' => '基线列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '基线列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'ScanTaskId' => [
                                            'description' => '镜像扫描任务 ID',
                                            'type' => 'string',
                                            'example' => '2328fcaa-f28a-405d-a357-asdvfrew23',
                                        ],
                                        'BaselineClassAlias' => [
                                            'description' => '基线检查分类',
                                            'type' => 'string',
                                            'example' => '服务配置',
                                        ],
                                        'BaselineNameAlias' => [
                                            'description' => '基线检查名称',
                                            'type' => 'string',
                                            'example' => '服务配置',
                                        ],
                                        'BaselineNameLevel' => [
                                            'description' => '基线检查风险等级',
                                            'type' => 'string',
                                            'example' => 'high',
                                        ],
                                        'LowRiskItemCount' => [
                                            'description' => '低风险数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'MiddleRiskItemCount' => [
                                            'description' => '中风险数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'HighRiskItemCount' => [
                                            'description' => '高风险数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'BaselineItemCount' => [
                                            'description' => '基线检查数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'BaselineNameKey' => [
                                            'description' => '基线名称key',
                                            'type' => 'string',
                                            'example' => 'ak_leak',
                                        ],
                                        'FirstScanTime' => [
                                            'description' => '首次扫描时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2024-04-10 15:33:26',
                                        ],
                                        'BaselineDetailDescription' => [
                                            'description' => '基线描述',
                                            'type' => 'string',
                                            'example' => 'Access Key 明文存储',
                                        ],
                                        'BaselineDetailPrompt' => [
                                            'description' => '基线检查路径和内容',
                                            'type' => 'string',
                                            'example' => 'usr/local/www/project/environments/dev/common/config/paramsxxx',
                                        ],
                                        'BaselineDetailAdvice' => [
                                            'description' => '基线检查修复建议',
                                            'type' => 'string',
                                            'example' => '建议对ak混淆加密，避免被利用',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1695090008000',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1684220824226',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5259118F-79E2-57E9-9AEA-551586F4FAED\\",\\n  \\"Code\\": 0,\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 2,\\n  \\"ScanBaselines\\": [\\n    {\\n      \\"ScanTaskId\\": \\"2328fcaa-f28a-405d-a357-asdvfrew23\\",\\n      \\"BaselineClassAlias\\": \\"服务配置\\",\\n      \\"BaselineNameAlias\\": \\"服务配置\\",\\n      \\"BaselineNameLevel\\": \\"high\\",\\n      \\"LowRiskItemCount\\": 1,\\n      \\"MiddleRiskItemCount\\": 1,\\n      \\"HighRiskItemCount\\": 1,\\n      \\"BaselineItemCount\\": 1,\\n      \\"BaselineNameKey\\": \\"ak_leak\\",\\n      \\"FirstScanTime\\": 0,\\n      \\"BaselineDetailDescription\\": \\"Access Key 明文存储\\",\\n      \\"BaselineDetailPrompt\\": \\"usr/local/www/project/environments/dev/common/config/paramsxxx\\",\\n      \\"BaselineDetailAdvice\\": \\"建议对ak混淆加密，避免被利用\\",\\n      \\"CreateTime\\": 1695090008000,\\n      \\"UpdateTime\\": 1684220824226\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '根据扫描任务列举基线漏洞',
            'description' => '使用接口前，先使用云安全引擎扫描镜像。',
        ],
        'ListScanMaliciousFileByTask' => [
            'summary' => '分页查询一个扫描任务的恶意文件漏洞。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cri-gu94qynvpwk*****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Level',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恶意文件等级',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'High',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'crr-h1y4l279wb8*****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'V6.11',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像 digest 值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sha256:aa4bffff6406785e930dab1f94c9a1297ba22xxxx71d71504a015764*********',
                    ],
                ],
                [
                    'name' => 'ScanTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像扫描任务 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '79ee6bc2-3288-4c56-b967-**********',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '52AE49C8-B91A-5C1A-821F-C34324B42F7C',
                            ],
                            'Code' => [
                                'description' => '返回码'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'success',
                            ],
                            'PageNo' => [
                                'description' => '查询数据的当前页码。传入此参数，可指定查询数据从第几页开始返回。默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsSuccess' => [
                                'description' => '是否调用 API 成功，取值：'."\n"
                                    ."\n"
                                    .'- `true`：调用API成功'."\n"
                                    ."\n"
                                    .'- `false`：调用API失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageSize' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '13',
                            ],
                            'ScanMaliciousFiles' => [
                                'description' => '恶意文件列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '恶意文件列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'ScanTaskId' => [
                                            'description' => '镜像扫描任务 ID',
                                            'type' => 'string',
                                            'example' => 'fe2d8980-de45-4f55-b57d-e438e6d2e972',
                                        ],
                                        'MaliciousName' => [
                                            'description' => '恶意样本类型',
                                            'type' => 'string',
                                            'example' => '疑似含有Webshell代码',
                                        ],
                                        'MaliciousMd5' => [
                                            'description' => '恶意文件md5值',
                                            'type' => 'string',
                                            'example' => 'e76c9759783cbbc9be0ff91ca3xxxxxx',
                                        ],
                                        'FirstScanTime' => [
                                            'description' => '首次扫描时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2023-04-10 11:42:06'."\n",
                                        ],
                                        'Level' => [
                                            'description' => '等级',
                                            'type' => 'string',
                                            'example' => 'remind',
                                        ],
                                        'FilePath' => [
                                            'description' => '文件路径',
                                            'type' => 'string',
                                            'example' => 'tenant/0000000000000000/',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2023-04-10 11:42:06',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2023-04-10 11:42:06'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"52AE49C8-B91A-5C1A-821F-C34324B42F7C\\",\\n  \\"Code\\": 0,\\n  \\"PageNo\\": 1,\\n  \\"IsSuccess\\": true,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 13,\\n  \\"ScanMaliciousFiles\\": [\\n    {\\n      \\"ScanTaskId\\": \\"fe2d8980-de45-4f55-b57d-e438e6d2e972\\",\\n      \\"MaliciousName\\": \\"疑似含有Webshell代码\\",\\n      \\"MaliciousMd5\\": \\"e76c9759783cbbc9be0ff91ca3xxxxxx\\",\\n      \\"FirstScanTime\\": 0,\\n      \\"Level\\": \\"remind\\",\\n      \\"FilePath\\": \\"tenant/0000000000000000/\\",\\n      \\"CreateTime\\": 0,\\n      \\"UpdateTime\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '根据扫描任务列举恶意文件结果',
            'description' => '使用接口前，先使用云安全引擎扫描镜像',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cr.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cr.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cr.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-jva',
            'endpoint' => 'cr.cn-zhengzhou-jva.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cr.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'cr.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cr.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cr.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'cr.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'cr.cn-fuzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cr.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'cr.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'cr.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cr.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cr.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cr.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'cr.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cr.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cr.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cr.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cr.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'cr.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cr.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cr.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cr.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cr.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cr.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cr.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cr.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cr.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cr.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'cr.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'cr.me-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan-lr',
            'endpoint' => 'cr.cn-wuhan-lr.aliyuncs.com',
        ],
    ],
];
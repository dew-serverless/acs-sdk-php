<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PaiRecService',
        'version' => '2022-12-13',
    ],
    'directories' => [
        [
            'id' => 183827,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'ListInstances',
                'GetInstance',
            ],
        ],
        [
            'id' => 188034,
            'title' => '数据资源管理',
            'type' => 'directory',
            'children' => [
                'CheckInstanceResources',
                'UpdateInstanceResource',
                'GetInstanceResourceTable',
                'ListInstanceResources',
                'GetInstanceResource',
                'DeleteInstanceResource',
                'CreateInstanceResource',
            ],
        ],
        [
            'id' => 187974,
            'title' => '数据表管理',
            'type' => 'directory',
            'children' => [
                'UpdateTableMeta',
                'ListTableMetas',
                'GetTableMeta',
                'DeleteTableMeta',
                'CreateTableMeta',
            ],
        ],
        [
            'id' => 183688,
            'title' => '场景管理',
            'type' => 'directory',
            'children' => [
                'CreateScene',
                'DeleteScene',
                'UpdateScene',
                'ListScenes',
                'GetScene',
            ],
        ],
        [
            'id' => 183822,
            'title' => '参数管理',
            'type' => 'directory',
            'children' => [
                'CreateParam',
                'DeleteParam',
                'UpdateParam',
                'ListParams',
            ],
        ],
        [
            'id' => 183834,
            'title' => '人群管理',
            'type' => 'directory',
            'children' => [
                'CreateCrowd',
                'CreateSubCrowd',
                'DeleteCrowd',
                'DeleteSubCrowd',
                'UpdateCrowd',
                'ListCrowds',
                'ListCrowdUsers',
                'ListSubCrowds',
                'GetSubCrowd',
            ],
        ],
        [
            'id' => 183857,
            'title' => '实验室管理',
            'type' => 'directory',
            'children' => [
                'CreateLaboratory',
                'DeleteLaboratory',
                'UpdateLaboratory',
                'ListLaboratories',
                'GetLaboratory',
                'OnlineLaboratory',
                'OfflineLaboratory',
                'CloneLaboratory',
            ],
        ],
        [
            'id' => 183850,
            'title' => '层管理',
            'type' => 'directory',
            'children' => [
                'CreateLayer',
                'DeleteLayer',
                'UpdateLayer',
                'ListLayers',
                'GetLayer',
            ],
        ],
        [
            'id' => 183866,
            'title' => '实验组管理',
            'type' => 'directory',
            'children' => [
                'CreateExperimentGroup',
                'DeleteExperimentGroup',
                'UpdateExperimentGroup',
                'ListExperimentGroups',
                'GetExperimentGroup',
                'CloneExperimentGroup',
                'OnlineExperimentGroup',
                'OfflineExperimentGroup',
            ],
        ],
        [
            'id' => 183812,
            'title' => '实验管理',
            'type' => 'directory',
            'children' => [
                'CreateExperiment',
                'DeleteExperiment',
                'UpdateExperiment',
                'GetExperiment',
                'ListExperiments',
                'CloneExperiment',
                'OfflineExperiment',
                'PushAllExperiment',
                'OnlineExperiment',
            ],
        ],
        [
            'id' => 188051,
            'title' => 'AB指标管理',
            'type' => 'directory',
            'children' => [
                'UpdateABMetric',
                'CreateABMetric',
                'ListABMetrics',
                'GetABMetric',
                'DeleteABMetric',
            ],
        ],
        [
            'id' => 188045,
            'title' => 'AB指标组管理',
            'type' => 'directory',
            'children' => [
                'ReportABMetricGroup',
                'UpdateABMetricGroup',
                'CreateABMetricGroup',
                'ListABMetricGroups',
                'GetABMetricGroup',
                'DeleteABMetricGroup',
            ],
        ],
        [
            'id' => 188041,
            'title' => '计算任务管理',
            'type' => 'directory',
            'children' => [
                'ListCalculationJobs',
                'GetCalculationJob',
                'CreateCalculationJobs',
            ],
        ],
        [
            'id' => 185916,
            'title' => '特征一致性检查任务管理',
            'type' => 'directory',
            'children' => [
                'CreateFeatureConsistencyCheckJobConfig',
                'CreateFeatureConsistencyCheckJob',
                'UpdateFeatureConsistencyCheckJobConfig',
                'ListFeatureConsistencyCheckJobConfigs',
                'GetFeatureConsistencyCheckJobConfig',
                'ListFeatureConsistencyCheckJobs',
                'GetFeatureConsistencyCheckJob',
                'ListFeatureConsistencyCheckJobFeatureReports',
                'ListFeatureConsistencyCheckJobScoreReports',
                'CloneFeatureConsistencyCheckJobConfig',
                'TerminateFeatureConsistencyCheckJob',
                'BackflowFeatureConsistencyCheckJobData',
                'SyncFeatureConsistencyCheckJobReplayLog',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ListInstances' => [
            'summary' => '获取PAIRec实例的列表。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id模糊匹配过滤。',
                        'description' => '实例ID模糊匹配过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-test1',
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
                        'example' => 'Type',
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小。',
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
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例类型。'."\n"
                            .'● basic-基础版'."\n"
                            .'● highleve-升级版'."\n"
                            .'● advance-进阶版'."\n"
                            .'● standard-标准版',
                        'description' => '实例类型。'."\n"
                            .'- basic-基础版'."\n"
                            .'- highleve-升级版'."\n"
                            .'- advance-进阶版'."\n"
                            .'- standard-标准版',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'basic',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BDB621CB-A81E-5D39-8793-39A365CBCC74',
                            ],
                            'Instances' => [
                                'description' => '实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例id。',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'pairec-test1',
                                        ],
                                        'Type' => [
                                            'title' => '实例类型。'."\n"
                                                .'● basic-基础版'."\n"
                                                .'● highleve-升级版'."\n"
                                                .'● advance-进阶版'."\n"
                                                .'● standard-标准版',
                                            'description' => '实例类型。'."\n"
                                                .'- basic-基础版'."\n"
                                                .'- highleve-升级版'."\n"
                                                .'- advance-进阶版'."\n"
                                                .'- standard-标准版',
                                            'type' => 'string',
                                            'example' => 'basic',
                                        ],
                                        'Status' => [
                                            'title' => '实例状态。'."\n"
                                                .'● Initializing-初始化中'."\n"
                                                .'● Stopped-停止服务'."\n"
                                                .'● Running-运行中',
                                            'description' => '实例状态。'."\n"
                                                .'- Initializing-初始化中'."\n"
                                                .'- Stopped-停止服务'."\n"
                                                .'- Running-运行中',
                                            'type' => 'string',
                                            'example' => 'Initializing',
                                        ],
                                        'RegionId' => [
                                            'title' => '区域ID。'."\n"
                                                .'● cn-shenzhen - 深圳'."\n"
                                                .'● cn-hangzhou - 杭州'."\n"
                                                .'● cn-beijing - 北京'."\n"
                                                .'● cn-shanghai - 上海',
                                            'description' => '区域ID。'."\n"
                                                .'- cn-shenzhen-深圳'."\n"
                                                .'- cn-hangzhou- 杭州'."\n"
                                                .'- cn-beijing - 北京'."\n"
                                                .'- cn-shanghai- 上海',
                                            'type' => 'string',
                                            'example' => 'cn-shenzhen',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '实例创建时间。',
                                            'description' => '实例创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-13 17:34:52.0',
                                        ],
                                        'GmtModifiedTime' => [
                                            'title' => '实例更新时间。',
                                            'description' => '实例更新时间。',
                                            'type' => 'string',
                                            'example' => '2022-11-05 09:02:30.0',
                                        ],
                                        'ExpiredTime' => [
                                            'title' => '实例过期时间。',
                                            'description' => '实例过期时间。',
                                            'type' => 'string',
                                            'example' => '2022-12-14 00:00:00.0',
                                        ],
                                        'CommodityCode' => [
                                            'title' => '实例所属的商品code。',
                                            'description' => '实例所属的商品code。',
                                            'type' => 'string',
                                            'example' => 'airec_developers_public_cn',
                                        ],
                                        'ChargeType' => [
                                            'title' => '实例的付费类型，目前仅支持Subscription（预付费）。',
                                            'description' => '实例的付费类型，目前仅支持Subscription（预付费）。',
                                            'type' => 'string',
                                            'example' => 'Subscription',
                                        ],
                                        'Config' => [
                                            'title' => '实例配置。',
                                            'description' => '实例配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Engines' => [
                                                    'title' => '服务引擎列表。',
                                                    'description' => '服务引擎列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ComponentCode' => [
                                                                'title' => '组件代码。',
                                                                'description' => '组件代码。',
                                                                'type' => 'string',
                                                                'example' => 'feature',
                                                            ],
                                                            'Type' => [
                                                                'title' => '组件类型。',
                                                                'description' => '组件类型。',
                                                                'type' => 'string',
                                                                'example' => 'Hologres',
                                                            ],
                                                            'Meta' => [
                                                                'title' => '元数据。',
                                                                'description' => '元数据。',
                                                                'type' => 'object',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Monitors' => [
                                                    'title' => '配套功能列表。',
                                                    'description' => '配套功能列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ComponentCode' => [
                                                                'title' => '组件代码。',
                                                                'description' => '组件代码。',
                                                                'type' => 'string',
                                                                'example' => 'featuresets',
                                                            ],
                                                            'Type' => [
                                                                'title' => '组件类型。',
                                                                'description' => '组件类型。',
                                                                'type' => 'string',
                                                                'example' => 'Platform',
                                                            ],
                                                            'Meta' => [
                                                                'title' => '元数据。',
                                                                'description' => '元数据。',
                                                                'type' => 'object',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'DataManagements' => [
                                                    'title' => '建模环境列表。',
                                                    'description' => '建模环境列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ComponentCode' => [
                                                                'title' => '组件代码。',
                                                                'description' => '组件代码。',
                                                                'type' => 'string',
                                                                'example' => 'storage',
                                                            ],
                                                            'Type' => [
                                                                'title' => '组件类型。',
                                                                'description' => '组件类型。',
                                                                'type' => 'string',
                                                                'example' => 'OSS',
                                                            ],
                                                            'Meta' => [
                                                                'title' => '元数据。',
                                                                'description' => '元数据。',
                                                                'type' => 'object',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总数。',
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '7',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDB621CB-A81E-5D39-8793-39A365CBCC74\\",\\n  \\"Instances\\": [\\n    {\\n      \\"InstanceId\\": \\"pairec-test1\\",\\n      \\"Type\\": \\"basic\\",\\n      \\"Status\\": \\"Initializing\\",\\n      \\"RegionId\\": \\"cn-shenzhen\\",\\n      \\"GmtCreateTime\\": \\"2022-10-13 17:34:52.0\\",\\n      \\"GmtModifiedTime\\": \\"2022-11-05 09:02:30.0\\",\\n      \\"ExpiredTime\\": \\"2022-12-14 00:00:00.0\\",\\n      \\"CommodityCode\\": \\"airec_developers_public_cn\\",\\n      \\"ChargeType\\": \\"Subscription\\",\\n      \\"Config\\": {\\n        \\"Engines\\": [\\n          {\\n            \\"ComponentCode\\": \\"feature\\",\\n            \\"Type\\": \\"Hologres\\",\\n            \\"Meta\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          }\\n        ],\\n        \\"Monitors\\": [\\n          {\\n            \\"ComponentCode\\": \\"featuresets\\",\\n            \\"Type\\": \\"Platform\\",\\n            \\"Meta\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          }\\n        ],\\n        \\"DataManagements\\": [\\n          {\\n            \\"ComponentCode\\": \\"storage\\",\\n            \\"Type\\": \\"OSS\\",\\n            \\"Meta\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 7\\n}","type":"json"}]',
            'title' => '获取实例列表',
        ],
        'GetInstance' => [
            'summary' => '获取指定PAIRec实例的详细信息。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'InstanceId' => [
                                'title' => '实例id。',
                                'description' => '实例id。',
                                'type' => 'string',
                                'example' => 'pairec-test1',
                            ],
                            'Type' => [
                                'title' => '实例类型。'."\n"
                                    .'● basic-基础版'."\n"
                                    .'● highleve-升级版'."\n"
                                    .'● advance-进阶版'."\n"
                                    .'● standard-标准版',
                                'description' => '实例类型。'."\n"
                                    .'● basic-基础版'."\n"
                                    .'● highleve-升级版'."\n"
                                    .'● advance-进阶版'."\n"
                                    .'● standard-标准版',
                                'type' => 'string',
                                'example' => 'basic',
                            ],
                            'Status' => [
                                'title' => '实例状态。'."\n"
                                    .'● Initializing-初始化中'."\n"
                                    .'● Stopped-停止服务'."\n"
                                    .'● Running-运行中',
                                'description' => '实例状态。'."\n"
                                    .'● Initializing-初始化中'."\n"
                                    .'● Stopped-停止服务'."\n"
                                    .'● Running-运行中',
                                'type' => 'string',
                                'example' => 'Initializing',
                            ],
                            'RegionId' => [
                                'title' => '区域ID。'."\n"
                                    .'● cn-shenzhen - 深圳'."\n"
                                    .'● cn-hangzhou - 杭州'."\n"
                                    .'● cn-beijing - 北京'."\n"
                                    .'● cn-shanghai - 上海',
                                'description' => '区域ID。'."\n"
                                    .'● cn-shenzhen - 深圳'."\n"
                                    .'● cn-hangzhou - 杭州'."\n"
                                    .'● cn-beijing - 北京'."\n"
                                    .'● cn-shanghai - 上海',
                                'type' => 'string',
                                'example' => 'cn-shenzhen',
                            ],
                            'GmtCreateTime' => [
                                'title' => '实例创建时间。',
                                'description' => '实例创建时间。',
                                'type' => 'string',
                                'example' => '2022-10-13 17:34:52.0',
                            ],
                            'GmtModifiedTime' => [
                                'title' => '实例更新时间。',
                                'description' => '实例更新时间。',
                                'type' => 'string',
                                'example' => '2022-11-05 09:02:30.0',
                            ],
                            'ExpiredTime' => [
                                'title' => '实例过期时间。',
                                'description' => '实例过期时间。',
                                'type' => 'string',
                                'example' => '2022-12-14 00:00:00.0',
                            ],
                            'CommodityCode' => [
                                'title' => '实例所属的商品code。',
                                'description' => '实例所属的商品code。',
                                'type' => 'string',
                                'example' => 'airec_developers_public_cn',
                            ],
                            'ChargeType' => [
                                'title' => '实例的付费类型，目前仅支持Subscription（预付费）。',
                                'description' => '实例的付费类型，目前仅支持Subscription（预付费）。',
                                'type' => 'string',
                                'example' => 'Subscription',
                            ],
                            'Config' => [
                                'title' => '实例配置。',
                                'description' => '实例配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Engines' => [
                                        'title' => '服务引擎列表。',
                                        'description' => '服务引擎列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ComponentCode' => [
                                                    'title' => '组件代码。',
                                                    'description' => '组件代码。',
                                                    'type' => 'string',
                                                    'example' => 'feature',
                                                ],
                                                'Type' => [
                                                    'title' => '组件类型。',
                                                    'description' => '组件类型。',
                                                    'type' => 'string',
                                                    'example' => 'Hologres',
                                                ],
                                                'Meta' => [
                                                    'title' => '元数据。',
                                                    'description' => '元数据。',
                                                    'type' => 'object',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Monitors' => [
                                        'title' => '配套功能列表。',
                                        'description' => '配套功能列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ComponentCode' => [
                                                    'title' => '组件代码。',
                                                    'description' => '组件代码。',
                                                    'type' => 'string',
                                                    'example' => 'featuresets',
                                                ],
                                                'Type' => [
                                                    'title' => '组件类型。',
                                                    'description' => '组件类型。',
                                                    'type' => 'string',
                                                    'example' => 'Platform',
                                                ],
                                                'Meta' => [
                                                    'title' => '元数据。',
                                                    'description' => '元数据。',
                                                    'type' => 'object',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'DataManagements' => [
                                        'title' => '建模环境列表。',
                                        'description' => '建模环境列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ComponentCode' => [
                                                    'title' => '组件代码。',
                                                    'description' => '组件代码。',
                                                    'type' => 'string',
                                                    'example' => 'storage',
                                                ],
                                                'Type' => [
                                                    'title' => '组件类型。',
                                                    'description' => '组件类型。',
                                                    'type' => 'string',
                                                    'example' => 'OSS',
                                                ],
                                                'Meta' => [
                                                    'title' => '元数据。',
                                                    'description' => '元数据。',
                                                    'type' => 'object',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"InstanceId\\": \\"pairec-test1\\",\\n  \\"Type\\": \\"basic\\",\\n  \\"Status\\": \\"Initializing\\",\\n  \\"RegionId\\": \\"cn-shenzhen\\",\\n  \\"GmtCreateTime\\": \\"2022-10-13 17:34:52.0\\",\\n  \\"GmtModifiedTime\\": \\"2022-11-05 09:02:30.0\\",\\n  \\"ExpiredTime\\": \\"2022-12-14 00:00:00.0\\",\\n  \\"CommodityCode\\": \\"airec_developers_public_cn\\",\\n  \\"ChargeType\\": \\"Subscription\\",\\n  \\"Config\\": {\\n    \\"Engines\\": [\\n      {\\n        \\"ComponentCode\\": \\"feature\\",\\n        \\"Type\\": \\"Hologres\\",\\n        \\"Meta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ],\\n    \\"Monitors\\": [\\n      {\\n        \\"ComponentCode\\": \\"featuresets\\",\\n        \\"Type\\": \\"Platform\\",\\n        \\"Meta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ],\\n    \\"DataManagements\\": [\\n      {\\n        \\"ComponentCode\\": \\"storage\\",\\n        \\"Type\\": \\"OSS\\",\\n        \\"Meta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取实例详细信息',
        ],
        'CheckInstanceResources' => [
            'summary' => '检测实例下配置的资源的连接状态。',
            'path' => '/api/v1/instances/{InstanceId}/action/checkresources',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '资源类型。'."\n"
                                    ."\n"
                                    .'- Hologres'."\n"
                                    ."\n"
                                    .'- EAS'."\n"
                                    ."\n"
                                    .'- BE'."\n"
                                    ."\n"
                                    .'- Rec'."\n"
                                    ."\n"
                                    .'- Platform'."\n"
                                    ."\n"
                                    .'- SLS'."\n"
                                    ."\n"
                                    .'- DataHub'."\n"
                                    ."\n"
                                    .'- Kafka'."\n"
                                    ."\n"
                                    .'- Flinkvvp'."\n"
                                    ."\n"
                                    .'- ACR'."\n"
                                    ."\n"
                                    .'- OSS'."\n"
                                    ."\n"
                                    .'- DataWorks'."\n"
                                    ."\n"
                                    .'- PAI'."\n"
                                    ."\n"
                                    .'- MaxCompute'."\n"
                                    ."\n"
                                    .'- GraphCompute'."\n"
                                    ."\n"
                                    .'- Redis',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OSS',
                            ],
                            'Uri' => [
                                'description' => '资源地址。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'bucket-test-123',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
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
                                'example' => '9763624B-5FBB-5E3A-9193-B1ADB554CEAE',
                            ],
                            'Resources' => [
                                'description' => '资源列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '资源类型'."\n"
                                                ."\n"
                                                .'- Hologres'."\n"
                                                ."\n"
                                                .'- EAS'."\n"
                                                ."\n"
                                                .'- BE'."\n"
                                                ."\n"
                                                .'- Rec'."\n"
                                                ."\n"
                                                .'- Platform'."\n"
                                                ."\n"
                                                .'- SLS'."\n"
                                                ."\n"
                                                .'- DataHub'."\n"
                                                ."\n"
                                                .'- Kafka'."\n"
                                                ."\n"
                                                .'- Flinkvvp'."\n"
                                                ."\n"
                                                .'- ACR'."\n"
                                                ."\n"
                                                .'- OSS'."\n"
                                                ."\n"
                                                .'- DataWorks'."\n"
                                                ."\n"
                                                .'- PAI'."\n"
                                                ."\n"
                                                .'- MaxCompute'."\n"
                                                ."\n"
                                                .'- GraphCompute'."\n"
                                                ."\n"
                                                .'- Redis',
                                            'type' => 'string',
                                            'example' => 'OSS',
                                        ],
                                        'Uri' => [
                                            'description' => '资源地址。',
                                            'type' => 'string',
                                            'example' => 'bucket-test-123',
                                        ],
                                        'Status' => [
                                            'description' => '访问状态'."\n"
                                                ."\n"
                                                .'- Success'."\n"
                                                ."\n"
                                                .'- Failure',
                                            'type' => 'string',
                                            'example' => 'Success',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9763624B-5FBB-5E3A-9193-B1ADB554CEAE\\",\\n  \\"Resources\\": [\\n    {\\n      \\"Type\\": \\"OSS\\",\\n      \\"Uri\\": \\"bucket-test-123\\",\\n      \\"Status\\": \\"Success\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '检查资源状态',
        ],
        'UpdateInstanceResource' => [
            'summary' => '更新指定实例下指定资源的信息。',
            'path' => '/api/v1/instances/{InstanceId}/resources/{ResourceId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'reso-2s416t***',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构体。',
                        'type' => 'object',
                        'properties' => [
                            'Uri' => [
                                'description' => '资源地址。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'bucket-test-123',
                            ],
                            'Config' => [
                                'description' => '资源配置信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{}',
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
                                'example' => '3AAA45F6-0798-5461-9360-81D133823CE7',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3AAA45F6-0798-5461-9360-81D133823CE7\\"\\n}","type":"json"}]',
            'title' => '更新资源信息',
        ],
        'GetInstanceResourceTable' => [
            'summary' => '获取数据源下数据表的列表。',
            'path' => '/api/v1/instances/{InstanceId}/resources/{ResourceId}/tables/{TableName}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'reso-2s416t***',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '表名称过滤。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_table',
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
                                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
                            ],
                            'TableName' => [
                                'description' => '表名。',
                                'type' => 'string',
                                'example' => 'test_table',
                            ],
                            'Fields' => [
                                'description' => '表的字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'example' => 'age',
                                        ],
                                        'Type' => [
                                            'description' => '字段类型。',
                                            'type' => 'string',
                                            'example' => 'BIGINT',
                                        ],
                                        'Meaning' => [
                                            'description' => '字段含义。',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'IsDimensionField' => [
                                            'description' => '是否是维度字段。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'IsPartitionField' => [
                                            'description' => '是否为分区字段。',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\",\\n  \\"TableName\\": \\"test_table\\",\\n  \\"Fields\\": [\\n    {\\n      \\"Name\\": \\"age\\",\\n      \\"Type\\": \\"BIGINT\\",\\n      \\"Meaning\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"IsDimensionField\\": false,\\n      \\"IsPartitionField\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取资源下表信息',
        ],
        'ListInstanceResources' => [
            'summary' => '获取实例下配置的资源列表。',
            'path' => '/api/v1/instances/{InstanceId}/resources',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类别'."\n"
                            ."\n"
                            .'- DataManagement'."\n"
                            ."\n"
                            .'- Engine'."\n"
                            ."\n"
                            .'- Monitor',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DataManagement',
                    ],
                ],
                [
                    'name' => 'Group',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源分组。'."\n"
                            ."\n"
                            .'当资源类别为DataManagement时，资源分组有：'."\n"
                            ."\n"
                            .'- storage'."\n"
                            ."\n"
                            .'- modelpipeline'."\n"
                            ."\n"
                            .'- datastorage'."\n"
                            ."\n"
                            .'- modeltrain'."\n"
                            ."\n"
                            .'当资源类别为Engine时，资源分组有：'."\n"
                            ."\n"
                            .'- feature'."\n"
                            ."\n"
                            .'- predict'."\n"
                            ."\n"
                            .'- recall'."\n"
                            ."\n"
                            .'- recengine'."\n"
                            ."\n"
                            .'当资源类别为Monitor时，资源分组有：'."\n"
                            ."\n"
                            .'- logs'."\n"
                            ."\n"
                            .'- logsback'."\n"
                            ."\n"
                            .'- coldstart'."\n"
                            ."\n"
                            .'- deploy',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'storage',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型过滤。'."\n"
                            ."\n"
                            .'- Hologres'."\n"
                            ."\n"
                            .'- EAS'."\n"
                            ."\n"
                            .'- BE'."\n"
                            ."\n"
                            .'- Rec'."\n"
                            ."\n"
                            .'- Platform'."\n"
                            ."\n"
                            .'- SLS'."\n"
                            ."\n"
                            .'- DataHub'."\n"
                            ."\n"
                            .'- Kafka'."\n"
                            ."\n"
                            .'- Flinkvvp'."\n"
                            ."\n"
                            .'- ACR'."\n"
                            ."\n"
                            .'- OSS'."\n"
                            ."\n"
                            .'- DataWorks'."\n"
                            ."\n"
                            .'- PAI'."\n"
                            ."\n"
                            .'- MaxCompute'."\n"
                            ."\n"
                            .'- GraphCompute'."\n"
                            ."\n"
                            .'- Redis',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OSS',
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
                                'example' => '9763624B-5FBB-5E3A-9193-B1ADB554CEAE',
                            ],
                            'TotalCount' => [
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Resources' => [
                                'description' => '资源对象的列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'reso-2s416t***'."\n",
                                        ],
                                        'Category' => [
                                            'description' => '资源类别'."\n"
                                                ."\n"
                                                .'- DataManagement'."\n"
                                                ."\n"
                                                .'- Engine'."\n"
                                                ."\n"
                                                .'- Monitor',
                                            'type' => 'string',
                                            'example' => 'DataManagement',
                                        ],
                                        'Group' => [
                                            'description' => '资源分组。'."\n"
                                                ."\n"
                                                .'当资源类别为DataManagement时，资源分组有：'."\n"
                                                ."\n"
                                                .'- storage'."\n"
                                                ."\n"
                                                .'- modelpipeline'."\n"
                                                ."\n"
                                                .'- datastorage'."\n"
                                                ."\n"
                                                .'- modeltrain'."\n"
                                                ."\n"
                                                .'当资源类别为Engine时，资源分组有：'."\n"
                                                ."\n"
                                                .'- feature'."\n"
                                                ."\n"
                                                .'- predict'."\n"
                                                ."\n"
                                                .'- recall'."\n"
                                                ."\n"
                                                .'- recengine'."\n"
                                                ."\n"
                                                .'当资源类别为Monitor时，资源分组有：'."\n"
                                                ."\n"
                                                .'- logs'."\n"
                                                ."\n"
                                                .'- logsback'."\n"
                                                ."\n"
                                                .'- coldstart'."\n"
                                                ."\n"
                                                .'- deploy',
                                            'type' => 'string',
                                            'example' => 'storage',
                                        ],
                                        'Type' => [
                                            'description' => '资源类型'."\n"
                                                ."\n"
                                                .'- Hologres'."\n"
                                                ."\n"
                                                .'- EAS'."\n"
                                                ."\n"
                                                .'- BE'."\n"
                                                ."\n"
                                                .'- Rec'."\n"
                                                ."\n"
                                                .'- Platform'."\n"
                                                ."\n"
                                                .'- SLS'."\n"
                                                ."\n"
                                                .'- DataHub'."\n"
                                                ."\n"
                                                .'- Kafka'."\n"
                                                ."\n"
                                                .'- Flinkvvp'."\n"
                                                ."\n"
                                                .'- ACR'."\n"
                                                ."\n"
                                                .'- OSS'."\n"
                                                ."\n"
                                                .'- DataWorks'."\n"
                                                ."\n"
                                                .'- PAI'."\n"
                                                ."\n"
                                                .'- MaxCompute'."\n"
                                                ."\n"
                                                .'- GraphCompute'."\n"
                                                ."\n"
                                                .'- Redis',
                                            'type' => 'string',
                                            'example' => 'OSS',
                                        ],
                                        'Uri' => [
                                            'description' => '资源地址。',
                                            'type' => 'string',
                                            'example' => 'bucket-test-123',
                                        ],
                                        'Config' => [
                                            'description' => '资源的配置信息。',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'GmtCreateAt' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-10-13 17:34:52'."\n",
                                        ],
                                        'GmtModifiedAt' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2020-10-13 17:34:52'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9763624B-5FBB-5E3A-9193-B1ADB554CEAE\\",\\n  \\"TotalCount\\": 10,\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceId\\": \\"reso-2s416t***\\\\n\\",\\n      \\"Category\\": \\"DataManagement\\",\\n      \\"Group\\": \\"storage\\",\\n      \\"Type\\": \\"OSS\\",\\n      \\"Uri\\": \\"bucket-test-123\\",\\n      \\"Config\\": \\"{}\\",\\n      \\"GmtCreateAt\\": \\"2020-10-13 17:34:52\\\\n\\",\\n      \\"GmtModifiedAt\\": \\"2020-10-13 17:34:52\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取资源列表',
        ],
        'GetInstanceResource' => [
            'summary' => '获取指定实例下指定资源的详细信息。',
            'path' => '/api/v1/instances/{InstanceId}/resources/{ResourceId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'reso-2s416t***',
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
                                'example' => 'D75C43DC-3D3A-5CC8-9AAC-8C77306C433B',
                            ],
                            'ResourceId' => [
                                'description' => '资源ID。',
                                'type' => 'string',
                                'example' => 'reso-2s416t***',
                            ],
                            'Category' => [
                                'description' => '资源类别'."\n"
                                    ."\n"
                                    .'- DataManagement'."\n"
                                    ."\n"
                                    .'- Engine'."\n"
                                    ."\n"
                                    .'- Monitor',
                                'type' => 'string',
                                'example' => 'DataManagement',
                            ],
                            'Group' => [
                                'description' => '资源分组。'."\n"
                                    ."\n"
                                    .'当资源类别为DataManagement时，资源分组有：'."\n"
                                    ."\n"
                                    .'- storage'."\n"
                                    ."\n"
                                    .'- modelpipeline'."\n"
                                    ."\n"
                                    .'- datastorage'."\n"
                                    ."\n"
                                    .'- modeltrain'."\n"
                                    ."\n"
                                    .'当资源类别为Engine时，资源分组有：'."\n"
                                    ."\n"
                                    .'- feature'."\n"
                                    ."\n"
                                    .'- predict'."\n"
                                    ."\n"
                                    .'- recall'."\n"
                                    ."\n"
                                    .'- recengine'."\n"
                                    ."\n"
                                    .'当资源类别为Monitor时，资源分组有：'."\n"
                                    ."\n"
                                    .'- logs'."\n"
                                    ."\n"
                                    .'- logsback'."\n"
                                    ."\n"
                                    .'- coldstart'."\n"
                                    ."\n"
                                    .'- deploy',
                                'type' => 'string',
                                'example' => 'storage',
                            ],
                            'Type' => [
                                'description' => '资源类型'."\n"
                                    ."\n"
                                    .'- Hologres'."\n"
                                    ."\n"
                                    .'- EAS'."\n"
                                    ."\n"
                                    .'- BE'."\n"
                                    ."\n"
                                    .'- Rec'."\n"
                                    ."\n"
                                    .'- Platform'."\n"
                                    ."\n"
                                    .'- SLS'."\n"
                                    ."\n"
                                    .'- DataHub'."\n"
                                    ."\n"
                                    .'- Kafka'."\n"
                                    ."\n"
                                    .'- Flinkvvp'."\n"
                                    ."\n"
                                    .'- ACR'."\n"
                                    ."\n"
                                    .'- OSS'."\n"
                                    ."\n"
                                    .'- DataWorks'."\n"
                                    ."\n"
                                    .'- PAI'."\n"
                                    ."\n"
                                    .'- MaxCompute'."\n"
                                    ."\n"
                                    .'- GraphCompute'."\n"
                                    ."\n"
                                    .'- Redis',
                                'type' => 'string',
                                'example' => 'OSS',
                            ],
                            'Uri' => [
                                'description' => '资源地址。',
                                'type' => 'string',
                                'example' => 'bucket-test-123',
                            ],
                            'Config' => [
                                'description' => '资源的配置信息。',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'GmtCreateTime' => [
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2020-10-13 17:34:52',
                            ],
                            'GmtModifiedTime' => [
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2020-10-13 17:34:52',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D75C43DC-3D3A-5CC8-9AAC-8C77306C433B\\",\\n  \\"ResourceId\\": \\"reso-2s416t***\\",\\n  \\"Category\\": \\"DataManagement\\",\\n  \\"Group\\": \\"storage\\",\\n  \\"Type\\": \\"OSS\\",\\n  \\"Uri\\": \\"bucket-test-123\\",\\n  \\"Config\\": \\"{}\\",\\n  \\"GmtCreateTime\\": \\"2020-10-13 17:34:52\\",\\n  \\"GmtModifiedTime\\": \\"2020-10-13 17:34:52\\"\\n}","type":"json"}]',
            'title' => '获取资源详细信息',
        ],
        'DeleteInstanceResource' => [
            'summary' => '删除指定实例下的指定配置资源。',
            'path' => '/api/v1/instances/{InstanceId}/resources/{ResourceId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test123',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'reso-2s416t***',
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
                                'example' => '7D59453C-48AA-5FC5-8848-2D373BD1A17F',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7D59453C-48AA-5FC5-8848-2D373BD1A17F\\"\\n}","type":"json"}]',
            'title' => '删除资源配置',
        ],
        'CreateInstanceResource' => [
            'summary' => '为指定实例配置创建新的配置资源。',
            'path' => '/api/v1/instances/{InstanceId}/resources',
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
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Category' => [
                                'description' => '资源类别'."\n"
                                    .'- DataManagement'."\n"
                                    .'- Engine'."\n"
                                    .'- Monitor',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'DataManagement',
                            ],
                            'Group' => [
                                'description' => '资源分组。'."\n"
                                    ."\n"
                                    .'当资源类别为DataManagement时，资源分组有：'."\n"
                                    .'- storage'."\n"
                                    ."\n"
                                    .'- modelpipeline'."\n"
                                    ."\n"
                                    .'- datastorage'."\n"
                                    ."\n"
                                    .'- modeltrain'."\n"
                                    ."\n"
                                    .'当资源类别为Engine时，资源分组有：'."\n"
                                    .'- feature'."\n"
                                    ."\n"
                                    .'- predict'."\n"
                                    ."\n"
                                    .'- recall'."\n"
                                    ."\n"
                                    .'- recengine'."\n"
                                    ."\n"
                                    .'当资源类别为Monitor时，资源分组有：'."\n"
                                    .'- logs'."\n"
                                    ."\n"
                                    .'- logsback'."\n"
                                    ."\n"
                                    .'- coldstart'."\n"
                                    ."\n"
                                    .'- deploy',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'storage',
                            ],
                            'Type' => [
                                'description' => '资源类型'."\n"
                                    ."\n"
                                    .'- Hologres'."\n"
                                    ."\n"
                                    .'- EAS'."\n"
                                    ."\n"
                                    .'- BE'."\n"
                                    ."\n"
                                    .'- Rec'."\n"
                                    ."\n"
                                    .'- Platform'."\n"
                                    ."\n"
                                    .'- SLS'."\n"
                                    ."\n"
                                    .'- DataHub'."\n"
                                    ."\n"
                                    .'- Kafka'."\n"
                                    ."\n"
                                    .'- Flinkvvp'."\n"
                                    ."\n"
                                    .'- ACR'."\n"
                                    ."\n"
                                    .'- OSS'."\n"
                                    ."\n"
                                    .'- DataWorks'."\n"
                                    ."\n"
                                    .'- PAI'."\n"
                                    ."\n"
                                    .'- MaxCompute'."\n"
                                    ."\n"
                                    .'- GraphCompute'."\n"
                                    ."\n"
                                    .'- Redis',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OSS',
                            ],
                            'Uri' => [
                                'description' => '资源地址。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'bucket-test-123',
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
                                'example' => '6CF1E160-3F36-5E73-A170-C75504F05BBC',
                            ],
                            'ResourceId' => [
                                'description' => '资源ID。',
                                'type' => 'string',
                                'example' => 'reso-2s416t***',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF1E160-3F36-5E73-A170-C75504F05BBC\\",\\n  \\"ResourceId\\": \\"reso-2s416t***\\"\\n}","type":"json"}]',
            'title' => '创建配置资源',
        ],
        'UpdateTableMeta' => [
            'summary' => '更新数据表。',
            'path' => '/api/v1/tablemetas/{TableMetaId}',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TableMetaId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据表ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'description' => '数据表名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'table_test',
                            ],
                            'ResourceId' => [
                                'description' => '资源ID，可通过[ListInstanceResource](~~2672886~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'reso-2s416t***',
                            ],
                            'TableName' => [
                                'description' => '数据库中的表名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'table_mysql',
                            ],
                            'Module' => [
                                'description' => '数据表模块。'."\n"
                                    ."\n"
                                    .'- ABTest：实验数据表。'."\n"
                                    ."\n"
                                    .'- ExperimentTool：实验工具表。'."\n"
                                    ."\n"
                                    .'- DataDiagnosis：数据诊断',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ABTest',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-test1',
                            ],
                            'Fields' => [
                                'description' => '表字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '字段名。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'name',
                                        ],
                                        'Meaning' => [
                                            'description' => '字段含义。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '名称字段',
                                        ],
                                        'Type' => [
                                            'description' => '字段类型。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'BIGINT',
                                        ],
                                        'IsDimensionField' => [
                                            'description' => '是否是维度字段。',
                                            'type' => 'boolean',
                                            'required' => true,
                                            'example' => 'false',
                                        ],
                                        'DataType' => [
                                            'description' => '字段的数据类型。',
                                            'type' => 'string',
                                            'required' => false,
                                            'enumValueTitles' => [
                                                'number' => '数字',
                                                'image' => '图片',
                                                'text' => '文本',
                                                'video' => '视频',
                                                'primary_key' => '主键',
                                                'url' => '超链接',
                                            ],
                                            'example' => 'primary_key',
                                        ],
                                        'IsPartitionField' => [
                                            'description' => '是否为分区字段。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'true',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                            'Description' => [
                                'description' => '表的描述信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'this is a test table',
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
            'title' => '更新数据表',
        ],
        'ListTableMetas' => [
            'summary' => '获取数据表列表。',
            'path' => '/api/v1/tablemetas',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据表类型。'."\n"
                            ."\n"
                            .'- MaxCompute'."\n"
                            ."\n"
                            .'- Hologres',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MaxCompute',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'Module',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据表模块。'."\n"
                            ."\n"
                            .'- ABTest-实验数据表。'."\n"
                            ."\n"
                            .'- ExperimentTool-实验工具表。'."\n"
                            ."\n"
                            .'- DataDiagnosis-数据诊断',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ABTest',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
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
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
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
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'TotalCount' => [
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'TableMetas' => [
                                'description' => '数据表列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据表信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TableMetaId' => [
                                            'description' => '数据表ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'description' => '数据表名称。',
                                            'type' => 'string',
                                            'example' => 'test_table',
                                        ],
                                        'Description' => [
                                            'description' => '数据表描述。',
                                            'type' => 'string',
                                            'example' => 'this is a test table',
                                        ],
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'reso-2s416t***',
                                        ],
                                        'TableName' => [
                                            'description' => '数据库中的表名。',
                                            'type' => 'string',
                                            'example' => 'table_mysql',
                                        ],
                                        'Type' => [
                                            'description' => '数据表类型。'."\n"
                                                ."\n"
                                                .'- MaxCompute'."\n"
                                                ."\n"
                                                .'- Hologres',
                                            'type' => 'string',
                                            'example' => 'MaxCompute',
                                        ],
                                        'Module' => [
                                            'description' => '数据表模块'."\n"
                                                ."\n"
                                                .'- ABTest-实验数据表。'."\n"
                                                ."\n"
                                                .'- ExperimentTool-实验工具表。'."\n"
                                                ."\n"
                                                .'- DataDiagnosis-数据诊断',
                                            'type' => 'string',
                                            'example' => 'ABTest',
                                        ],
                                        'CanDelete' => [
                                            'description' => '是否可以删除，如果表在其他地方正在被引用，则返回false。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'GmtCreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-12 12:24:33',
                                        ],
                                        'GmtModifiedTime' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-12 12:24:33',
                                        ],
                                        'GmtImportedTime' => [
                                            'description' => '字段导入时间。',
                                            'type' => 'string',
                                            'example' => 'imprecation',
                                        ],
                                        'Fields' => [
                                            'description' => '表的字段列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '字段信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '字段名称。',
                                                        'type' => 'string',
                                                        'example' => 'gender',
                                                    ],
                                                    'Meaning' => [
                                                        'description' => '字段含义。',
                                                        'type' => 'string',
                                                        'example' => 'the gender of people',
                                                    ],
                                                    'Type' => [
                                                        'description' => '字段类型。',
                                                        'type' => 'string',
                                                        'example' => 'BIGINT',
                                                    ],
                                                    'IsDimensionField' => [
                                                        'description' => '是否是维度字段。',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Url' => [
                                            'description' => '如果是MaxCompute表，此处为数据地图的表的链接。',
                                            'type' => 'string',
                                            'example' => 'https://dmc-xxx.com/dm/table/xxx',
                                        ],
                                        'Config' => [
                                            'description' => '数据表的一些额外的配置。',
                                            'type' => 'string',
                                            'example' => '{"table_type":"item"}',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"TotalCount\\": 20,\\n  \\"TableMetas\\": [\\n    {\\n      \\"TableMetaId\\": \\"3\\",\\n      \\"Name\\": \\"test_table\\",\\n      \\"Description\\": \\"this is a test table\\",\\n      \\"ResourceId\\": \\"reso-2s416t***\\",\\n      \\"TableName\\": \\"table_mysql\\",\\n      \\"Type\\": \\"MaxCompute\\",\\n      \\"Module\\": \\"ABTest\\",\\n      \\"CanDelete\\": true,\\n      \\"GmtCreateTime\\": \\"2021-12-12 12:24:33\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-12 12:24:33\\",\\n      \\"GmtImportedTime\\": \\"imprecation\\",\\n      \\"Fields\\": [\\n        {\\n          \\"Name\\": \\"gender\\",\\n          \\"Meaning\\": \\"the gender of people\\",\\n          \\"Type\\": \\"BIGINT\\",\\n          \\"IsDimensionField\\": false\\n        }\\n      ],\\n      \\"Url\\": \\"https://dmc-xxx.com/dm/table/xxx\\",\\n      \\"Config\\": \\"{\\\\\\"table_type\\\\\\":\\\\\\"item\\\\\\"}\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据表列表',
        ],
        'GetTableMeta' => [
            'summary' => '获取数据表详细信息。',
            'path' => '/api/v1/tablemetas/{TableMetaId}',
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
                    'name' => 'TableMetaId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据表ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '实例ID	pairec-cn-test1',
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
                                'example' => '28C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'Name' => [
                                'description' => '数据表名称。',
                                'type' => 'string',
                                'example' => 'test_table',
                            ],
                            'Description' => [
                                'description' => '数据表描述。',
                                'type' => 'string',
                                'example' => 'this is a test table',
                            ],
                            'ResourceId' => [
                                'description' => '资源ID。',
                                'type' => 'string',
                                'example' => 'reso-wkgo***',
                            ],
                            'TableName' => [
                                'description' => '数据库中的表名.',
                                'type' => 'string',
                                'example' => 'table_mysql',
                            ],
                            'Type' => [
                                'description' => '数据表类型。'."\n"
                                    ."\n"
                                    .'- MaxCompute'."\n"
                                    ."\n"
                                    .'- Hologres',
                                'type' => 'string',
                                'example' => 'MaxCompute',
                            ],
                            'Module' => [
                                'description' => '数据表模块。'."\n"
                                    ."\n"
                                    .'- ABTest-实验数据表。'."\n"
                                    ."\n"
                                    .'- ExperimentTool-实验工具表。'."\n"
                                    ."\n"
                                    .'- DataDiagnosis-数据诊断',
                                'type' => 'string',
                                'example' => 'ABTest',
                            ],
                            'CanDelete' => [
                                'description' => '是否可以删除，如果表在其他地方正在被引用，则返回 false。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'GmtCreateTime' => [
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-12-15:24:33',
                            ],
                            'GmtModifiedTime' => [
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2021-12-15:24:33',
                            ],
                            'Fields' => [
                                'description' => '表的字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'example' => 'gender',
                                        ],
                                        'Meaning' => [
                                            'description' => '字段含义。',
                                            'type' => 'string',
                                            'example' => 'the gender of people',
                                        ],
                                        'Type' => [
                                            'description' => '字段类型。',
                                            'type' => 'string',
                                            'example' => 'BIGINT',
                                        ],
                                        'IsDimensionField' => [
                                            'description' => '是否是维度字段。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                            'Url' => [
                                'description' => '如果是MaxCompute表，此字段为数据地图的表的链接，否则为空。',
                                'type' => 'string',
                                'example' => 'https://dmc-xxx.com/dm/table/xxx'."\n",
                            ],
                            'TableMetaId' => [
                                'description' => '数据表ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'GmtImportedTime' => [
                                'description' => '字段导入时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'Config' => [
                                'description' => '数据表的一些额外的配置。',
                                'type' => 'string',
                                'example' => '{"table_type":"item"}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"28C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"Name\\": \\"test_table\\",\\n  \\"Description\\": \\"this is a test table\\",\\n  \\"ResourceId\\": \\"reso-wkgo***\\",\\n  \\"TableName\\": \\"table_mysql\\",\\n  \\"Type\\": \\"MaxCompute\\",\\n  \\"Module\\": \\"ABTest\\",\\n  \\"CanDelete\\": false,\\n  \\"GmtCreateTime\\": \\"2021-12-15:24:33\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15:24:33\\",\\n  \\"Fields\\": [\\n    {\\n      \\"Name\\": \\"gender\\",\\n      \\"Meaning\\": \\"the gender of people\\",\\n      \\"Type\\": \\"BIGINT\\",\\n      \\"IsDimensionField\\": false\\n    }\\n  ],\\n  \\"Url\\": \\"https://dmc-xxx.com/dm/table/xxx\\\\n\\",\\n  \\"TableMetaId\\": \\"3\\",\\n  \\"GmtImportedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"Config\\": \\"{\\\\\\"table_type\\\\\\":\\\\\\"item\\\\\\"}\\"\\n}","type":"json"}]',
            'title' => '获取数据表',
        ],
        'DeleteTableMeta' => [
            'summary' => '删除数据表。',
            'path' => '/api/v1/tablemetas/{TableMetaId}',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'TableMetaId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据表ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '实例ID	pairec-cn-test1',
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
            'title' => '删除数据表',
        ],
        'CreateTableMeta' => [
            'summary' => '创建数据表。',
            'path' => '/api/v1/tablemetas',
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
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'description' => '数据表名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'table_test',
                            ],
                            'ResourceId' => [
                                'description' => '资源 ID，可通过ListInstanceResources获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'reso-2s416t146ffjc3yefx',
                            ],
                            'TableName' => [
                                'description' => '数据库中的表名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'table_mysql',
                            ],
                            'Module' => [
                                'description' => '表的模块。'."\n"
                                    ."\n"
                                    .'- ABTest-实验数据表。'."\n"
                                    ."\n"
                                    .'- ExperimentTool-实验工具表。'."\n"
                                    ."\n"
                                    .'- DataDiagnosis-数据诊断',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ABTest',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-test123',
                            ],
                            'Fields' => [
                                'description' => '字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '字段名称。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'gender',
                                        ],
                                        'Meaning' => [
                                            'description' => '字段含义。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'this is gender of people',
                                        ],
                                        'Type' => [
                                            'description' => '字段类型。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'BIGINT',
                                        ],
                                        'IsDimensionField' => [
                                            'description' => '是否是维度字段。',
                                            'type' => 'boolean',
                                            'required' => true,
                                            'example' => 'false',
                                        ],
                                        'DataType' => [
                                            'description' => '字段的数据类型。',
                                            'type' => 'string',
                                            'required' => false,
                                            'enumValueTitles' => [
                                                'number' => '数字',
                                                'image' => '图片',
                                                'text' => '文本',
                                                'video' => '视频',
                                                'primary_key' => '主键',
                                                'url' => '超链接',
                                            ],
                                            'example' => 'primary_key',
                                        ],
                                        'IsPartitionField' => [
                                            'description' => '是否为分区字段。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'true',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                            'Description' => [
                                'description' => '数据表描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'this is a test table',
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
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'TableMetaId' => [
                                'description' => '数据表ID。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"TableMetaId\\": \\"2\\"\\n}","type":"json"}]',
            'title' => '创建数据表',
        ],
        'CreateScene' => [
            'summary' => '创建一个场景，在场景下可进行指标、实验分析。',
            'path' => '/api/v1/scenes',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '场景名称。',
                                'description' => '场景名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'scene1',
                            ],
                            'Description' => [
                                'title' => '场景描述。',
                                'description' => '场景描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is a test.',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'pairec-cn-abcdefg1234',
                            ],
                            'Flows' => [
                                'title' => '流量列表。',
                                'description' => '流量列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '流量。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FlowName' => [
                                            'title' => '流量名称。',
                                            'description' => '流量名称。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '流量1',
                                        ],
                                        'FlowCode' => [
                                            'title' => '流量编码。',
                                            'description' => '流量编码。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'liuliang1',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'FCF741D8-9C30-578E-807F-B935487DB34A',
                            ],
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FCF741D8-9C30-578E-807F-B935487DB34A\\",\\n  \\"SceneId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建场景',
        ],
        'DeleteScene' => [
            'summary' => '删除指定场景。',
            'path' => '/api/v1/scenes/{SceneId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '场景ID。',
                        'description' => '场景ID，可通过接口ListScenes获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'D75C43DC-3D3A-5CC8-9AAC-8C77306C433B',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D75C43DC-3D3A-5CC8-9AAC-8C77306C433B\\"\\n}","type":"json"}]',
            'title' => '删除场景',
        ],
        'UpdateScene' => [
            'summary' => '更新场景信息，例如更新场景的名称、描述。',
            'path' => '/api/v1/scenes/{SceneId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID，可通过接口ListScenes获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '场景名称。',
                                'description' => '场景名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'scene1',
                            ],
                            'Description' => [
                                'title' => '场景描述。',
                                'description' => '场景描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is a test.',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'pairec-cn-abcdefg1234',
                            ],
                            'Flows' => [
                                'title' => '流量列表。',
                                'description' => '流量列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FlowName' => [
                                            'title' => '流量名称。',
                                            'description' => '流量名称。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '流量1',
                                        ],
                                        'FlowCode' => [
                                            'title' => '流量编码。',
                                            'description' => '流量编码。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'liuliang1',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'FC17887E-3C82-5096-8AA6-F4C2E7417245',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FC17887E-3C82-5096-8AA6-F4C2E7417245\\"\\n}","type":"json"}]',
            'title' => '更新场景',
        ],
        'ListScenes' => [
            'summary' => '获取场景列表。',
            'path' => '/api/v1/scenes',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-cn-abcdefg1234',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景名称过滤。',
                        'description' => '场景名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'scene1',
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
                                'example' => 'B8987BF7-6028-5B17-80E0-251B7BD67BBA',
                            ],
                            'TotalCount' => [
                                'description' => '列表内元素数量总和。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Scenes' => [
                                'title' => '场景列表。',
                                'description' => '场景列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SceneId' => [
                                            'title' => '场景ID。',
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => '场景名称。',
                                            'description' => '场景名称。',
                                            'type' => 'string',
                                            'example' => 'scene1',
                                        ],
                                        'Description' => [
                                            'title' => '场景描述。',
                                            'description' => '场景描述。',
                                            'type' => 'string',
                                            'example' => 'This is a test.',
                                        ],
                                        'Flows' => [
                                            'title' => '流量列表。',
                                            'description' => '流量列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'FlowName' => [
                                                        'title' => '流量名称。',
                                                        'description' => '流量名称。',
                                                        'type' => 'string',
                                                        'example' => '流量1',
                                                    ],
                                                    'FlowCode' => [
                                                        'title' => '流量编码。',
                                                        'description' => '流量编码。',
                                                        'type' => 'string',
                                                        'example' => 'liuliang1',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8987BF7-6028-5B17-80E0-251B7BD67BBA\\",\\n  \\"TotalCount\\": 10,\\n  \\"Scenes\\": [\\n    {\\n      \\"SceneId\\": \\"3\\",\\n      \\"Name\\": \\"scene1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"Flows\\": [\\n        {\\n          \\"FlowName\\": \\"流量1\\",\\n          \\"FlowCode\\": \\"liuliang1\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取场景列表',
        ],
        'GetScene' => [
            'summary' => '获取指定场景的详细信息。',
            'path' => '/api/v1/scenes/{SceneId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '场景ID。',
                        'description' => '场景ID，可通过接口ListScenes获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'B8987BF7-6028-5B17-80E0-251B7BD67BBA',
                            ],
                            'Name' => [
                                'title' => '场景名称。',
                                'description' => '场景名称。',
                                'type' => 'string',
                                'example' => 'scene1',
                            ],
                            'Description' => [
                                'title' => '场景描述。',
                                'description' => '场景描述。',
                                'type' => 'string',
                                'example' => 'This is a test.',
                            ],
                            'Flows' => [
                                'title' => '流量列表。',
                                'description' => '流量列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FlowName' => [
                                            'title' => '流量名称。',
                                            'description' => '流量名称。',
                                            'type' => 'string',
                                            'example' => '流量1',
                                        ],
                                        'FlowCode' => [
                                            'title' => '流量编码。',
                                            'description' => '流量编码。',
                                            'type' => 'string',
                                            'example' => 'liuliang1',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8987BF7-6028-5B17-80E0-251B7BD67BBA\\",\\n  \\"Name\\": \\"scene1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"Flows\\": [\\n    {\\n      \\"FlowName\\": \\"流量1\\",\\n      \\"FlowCode\\": \\"liuliang1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取场景详细信息',
        ],
        'CreateParam' => [
            'summary' => '创建一个参数。通过对参数进行管理，无需修改引擎配置、发布变更，即可对服务读取的变量进行修改，提高灵活性。',
            'path' => '/api/v1/params',
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
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID，可通过接口ListScenes获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '4',
                            ],
                            'Name' => [
                                'title' => '参数名称。',
                                'description' => '参数名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'home',
                            ],
                            'Value' => [
                                'title' => '参数值。',
                                'description' => '参数值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'house',
                            ],
                            'Environment' => [
                                'title' => '参数所属的环境。'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'description' => '参数所属的环境。'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Daily',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'F8F613A9-DF1C-551A-88E1-397A3981A785',
                            ],
                            'ParamId' => [
                                'title' => '参数ID。',
                                'description' => '参数ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '4',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8F613A9-DF1C-551A-88E1-397A3981A785\\",\\n  \\"ParamId\\": 4\\n}","type":"json"}]',
            'title' => '创建参数',
        ],
        'DeleteParam' => [
            'summary' => '删除指定参数。',
            'path' => '/api/v1/params/{ParamId}',
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
                    'name' => 'ParamId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '参数ID。',
                        'description' => '参数ID，可通过接口ListParams获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'F0AB6527-093F-5C44-B3BD-42C8C210C619',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F0AB6527-093F-5C44-B3BD-42C8C210C619\\"\\n}","type":"json"}]',
            'title' => '删除参数',
        ],
        'UpdateParam' => [
            'summary' => '更新指定参数的信息，例如更新参数的值。',
            'path' => '/api/v1/params/{ParamId}',
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
                    'name' => 'ParamId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '参数ID。',
                        'description' => '参数ID，可通过接口ListParams获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
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
                            'Value' => [
                                'title' => '参数值。',
                                'description' => '参数值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'house',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'BBD41FBF-E75C-551A-92FA-CAD654AA006F',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BBD41FBF-E75C-551A-92FA-CAD654AA006F\\"\\n}","type":"json"}]',
            'title' => '更新参数',
        ],
        'ListParams' => [
            'summary' => '获取参数列表。',
            'path' => '/api/v1/params',
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
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景ID。',
                        'description' => '场景ID，可通过接口ListScenes获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '参数名称。',
                        'description' => '参数名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'home',
                    ],
                ],
                [
                    'name' => 'Environment',
                    'in' => 'query',
                    'schema' => [
                        'title' => '参数所属的环境。'."\n"
                            .'● Daily-日常环境'."\n"
                            .'● Pre-预发环境'."\n"
                            .'● Prod-生产环境',
                        'description' => '参数所属的环境。'."\n"
                            .'● Daily-日常环境'."\n"
                            .'● Pre-预发环境'."\n"
                            .'● Prod-生产环境',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Daily',
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'A2D07551-38DA-531E-9B22-877D1D86A579',
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总数。',
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Params' => [
                                'title' => '参数列表。',
                                'description' => '参数列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ParamId' => [
                                            'title' => '参数ID。',
                                            'description' => '参数ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'Name' => [
                                            'title' => '参数名称。',
                                            'description' => '参数名称。',
                                            'type' => 'string',
                                            'example' => 'home',
                                        ],
                                        'Value' => [
                                            'title' => '参数值。',
                                            'description' => '参数值。',
                                            'type' => 'string',
                                            'example' => 'house',
                                        ],
                                        'Environment' => [
                                            'title' => '参数所属的环境。'."\n"
                                                .'● Daily-日常环境'."\n"
                                                .'● Prepub-预发环境'."\n"
                                                .'● Product-生产环境',
                                            'description' => '参数所属的环境。'."\n"
                                                .'● Daily-日常环境'."\n"
                                                .'● Prepub-预发环境'."\n"
                                                .'● Product-生产环境',
                                            'type' => 'string',
                                            'example' => 'Daily',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A2D07551-38DA-531E-9B22-877D1D86A579\\",\\n  \\"TotalCount\\": 10,\\n  \\"Params\\": [\\n    {\\n      \\"ParamId\\": \\"4\\",\\n      \\"Name\\": \\"home\\",\\n      \\"Value\\": \\"house\\",\\n      \\"Environment\\": \\"Daily\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取参数列表',
        ],
        'CreateCrowd' => [
            'summary' => '创建一个人群，用于表示用户群体。',
            'path' => '/api/v1/crowds',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234',
                            ],
                            'Name' => [
                                'title' => '人群名称。',
                                'description' => '人群名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'xx人群',
                            ],
                            'Description' => [
                                'title' => '人群描述。',
                                'description' => '人群描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'This is a test.',
                            ],
                            'Label' => [
                                'title' => '人群标签。',
                                'description' => '人群标签。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'os=android',
                            ],
                            'Source' => [
                                'title' => '人群来源。'."\n"
                                    .'● ManualInput-手工输入'."\n"
                                    .'● UploadFile-文件上传',
                                'description' => '人群来源。'."\n"
                                    .'● ManualInput-手工输入'."\n"
                                    .'● UploadFile-文件上传',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ManualInput',
                            ],
                            'Users' => [
                                'title' => '人群中包含的用户，多个用户间用逗号隔开。',
                                'description' => '人群中包含的用户，多个用户间用逗号隔开。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user1,user2,user3',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
                            ],
                            'CrowdId' => [
                                'title' => '人群ID。',
                                'description' => '人群ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\",\\n  \\"CrowdId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建人群',
        ],
        'CreateSubCrowd' => [
            'summary' => '在指定人群下创建子人群。',
            'path' => '/api/v1/crowds/{CrowdId}/subcrowds',
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
                    'name' => 'CrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '人群ID。',
                        'description' => '人群ID，可通过接口ListCrowds获取。',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'Source' => [
                                'title' => '人群来源。'."\n"
                                    .'● ManualInput-手工输入'."\n"
                                    .'● UploadFile-文件上传',
                                'description' => '人群来源。'."\n"
                                    .'● ManualInput-手工输入'."\n"
                                    .'● UploadFile-文件上传',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ManualInput',
                            ],
                            'Users' => [
                                'title' => '人群中包含的用户，多个用户间用逗号隔开。',
                                'description' => '人群中包含的用户，多个用户间用逗号隔开。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'user1,user2,user3',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-test1',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '9763624B-5FBB-5E3A-9193-B1ADB554CEAE',
                            ],
                            'SubCrowdId' => [
                                'title' => '子人群ID。',
                                'description' => '子人群ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9763624B-5FBB-5E3A-9193-B1ADB554CEAE\\",\\n  \\"SubCrowdId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建子人群',
        ],
        'DeleteCrowd' => [
            'summary' => '删除指定人群。',
            'path' => '/api/v1/crowds/{CrowdId}',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'CrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '人群ID。',
                        'description' => '人群ID，可通过接口ListCrowds获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\"\\n}","type":"json"}]',
            'title' => '删除人群',
        ],
        'DeleteSubCrowd' => [
            'summary' => '删除指定子人群。',
            'path' => '/api/v1/crowds/{CrowdId}/subcrowds/{SubCrowdId}',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'CrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '人群ID。',
                        'description' => '人群ID，可通过接口ListCrowds获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'SubCrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '子人群ID。',
                        'description' => '子人群ID，可通过接口ListSubCrowds获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'EE97D06A-2AA0-5AD9-B6CF-8A267924D691',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EE97D06A-2AA0-5AD9-B6CF-8A267924D691\\"\\n}","type":"json"}]',
            'title' => '删除子人群',
        ],
        'UpdateCrowd' => [
            'summary' => '更新指定人群信息，例如更新人群的名称、描述。',
            'path' => '/api/v1/crowds/{CrowdId}',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '人群名称。',
                                'description' => '人群名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'xx人群',
                            ],
                            'Description' => [
                                'title' => '人群描述。',
                                'description' => '人群描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'This is a test.',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-test1',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '人群ID。',
                        'description' => '人群ID，可通过接口ListCrowds获取。',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '8C27790E-CCA5-56BB-BA17-646295DEC0A2',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8C27790E-CCA5-56BB-BA17-646295DEC0A2\\"\\n}","type":"json"}]',
            'title' => '更新人群',
        ],
        'ListCrowds' => [
            'summary' => '获取人群列表。',
            'path' => '/api/v1/crowds',
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
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => '9763624B-5FBB-5E3A-9193-B1ADB554CEAE',
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总数。',
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Crowds' => [
                                'title' => '人群列表。',
                                'description' => '人群列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CrowdId' => [
                                            'title' => '人群ID。',
                                            'description' => '人群ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => '人群名称。',
                                            'description' => '人群名称。',
                                            'type' => 'string',
                                            'example' => 'crowd1',
                                        ],
                                        'Description' => [
                                            'title' => '人群描述。',
                                            'description' => '人群描述。',
                                            'type' => 'string',
                                            'example' => 'This is a test.',
                                        ],
                                        'Label' => [
                                            'title' => '人群标签。',
                                            'description' => '人群标签。',
                                            'type' => 'string',
                                            'example' => 'os=android',
                                        ],
                                        'Source' => [
                                            'title' => '人群来源。'."\n"
                                                .'● ManualInput-手工输入'."\n"
                                                .'● UploadFile-文件上传',
                                            'description' => '人群来源。'."\n"
                                                .'● ManualInput-手工输入'."\n"
                                                .'● UploadFile-文件上传',
                                            'type' => 'string',
                                            'example' => 'ManualInput',
                                        ],
                                        'Quantity' => [
                                            'title' => '数量。',
                                            'description' => '数量。',
                                            'type' => 'string',
                                            'example' => '10',
                                        ],
                                        'Users' => [
                                            'title' => '人群内包含的用户，多个用户间以逗号隔开。',
                                            'description' => '人群内包含的用户，多个用户间以逗号隔开。',
                                            'type' => 'string',
                                            'example' => 'user1,user2',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '人群创建时间。',
                                            'description' => '人群创建时间。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9763624B-5FBB-5E3A-9193-B1ADB554CEAE\\",\\n  \\"TotalCount\\": 10,\\n  \\"Crowds\\": [\\n    {\\n      \\"CrowdId\\": \\"3\\",\\n      \\"Name\\": \\"crowd1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"Label\\": \\"os=android\\",\\n      \\"Source\\": \\"ManualInput\\",\\n      \\"Quantity\\": \\"10\\",\\n      \\"Users\\": \\"user1,user2\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取人群列表',
        ],
        'ListCrowdUsers' => [
            'summary' => '获取指定人群所包含的所有用户，包括人群下的子人群内的用户。',
            'path' => '/api/v1/crowds/{CrowdId}/users',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'CrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '人群ID。',
                        'description' => '人群ID，可通过接口ListCrowds获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'F0AB6527-093F-5C44-B3BD-42C8C210C619',
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总个数。',
                                'description' => '列表内元素总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'Users' => [
                                'title' => '用户列表。',
                                'description' => '用户列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户ID。',
                                    'type' => 'string',
                                    'example' => 'user1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F0AB6527-093F-5C44-B3BD-42C8C210C619\\",\\n  \\"TotalCount\\": 3,\\n  \\"Users\\": [\\n    \\"user1\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取人群下用户列表',
        ],
        'ListSubCrowds' => [
            'summary' => '获取指定人群下的子人群列表。',
            'path' => '/api/v1/crowds/{CrowdId}/subcrowds',
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
                    'name' => 'CrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '人群ID。',
                        'description' => '人群ID，可通过接口ListCrowds获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'C5AEB79E-FAA4-5DCE-8CD7-1CAF549ECC3E',
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总数。',
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'SubCrowds' => [
                                'title' => '子人群列表。',
                                'description' => '子人群列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SubCrowdId' => [
                                            'title' => '子人群ID。',
                                            'description' => '子人群ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Source' => [
                                            'title' => '人群来源。'."\n"
                                                .'● ManualInput-手工输入'."\n"
                                                .'● UploadFile-文件上传',
                                            'description' => '人群来源。'."\n"
                                                .'● ManualInput-手工输入'."\n"
                                                .'● UploadFile-文件上传',
                                            'type' => 'string',
                                            'example' => 'ManualInput',
                                        ],
                                        'Users' => [
                                            'title' => '人群分组中的用户。',
                                            'description' => '人群分组中的用户。',
                                            'type' => 'string',
                                            'example' => 'user1,user2',
                                        ],
                                        'Quantity' => [
                                            'title' => '人群分组所含的用户量。',
                                            'description' => '人群分组所含的用户量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
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
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C5AEB79E-FAA4-5DCE-8CD7-1CAF549ECC3E\\",\\n  \\"TotalCount\\": 10,\\n  \\"SubCrowds\\": [\\n    {\\n      \\"SubCrowdId\\": \\"3\\",\\n      \\"Source\\": \\"ManualInput\\",\\n      \\"Users\\": \\"user1,user2\\",\\n      \\"Quantity\\": 2,\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取子人群列表',
        ],
        'GetSubCrowd' => [
            'summary' => '获取指定子人群的详细信息。',
            'path' => '/api/v1/crowds/{CrowdId}/subcrowds/{SubCrowdId}',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '人群ID。',
                        'description' => '人群ID，可通过接口ListCrowds获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'SubCrowdId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '子人群ID。',
                        'description' => '子人群ID，可通过接口ListSubCrowds获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => '01D22D08-BA20-5F35-8302-99115F288220',
                            ],
                            'Source' => [
                                'title' => '人群来源。'."\n"
                                    .'● ManualInput-手工输入'."\n"
                                    .'● UploadFile-文件上传',
                                'description' => '人群来源。'."\n"
                                    .'● ManualInput-手工输入'."\n"
                                    .'● UploadFile-文件上传',
                                'type' => 'string',
                                'example' => 'ManualInput',
                            ],
                            'Users' => [
                                'title' => '人群分组中的用户。',
                                'description' => '人群分组中的用户。',
                                'type' => 'string',
                                'example' => 'user1,user2',
                            ],
                            'Quantity' => [
                                'title' => '人群分组所含的用户量。',
                                'description' => '人群分组所含的用户量。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'GmtCreateTime' => [
                                'title' => '人群创建时间。',
                                'description' => '人群创建时间。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01D22D08-BA20-5F35-8302-99115F288220\\",\\n  \\"Source\\": \\"ManualInput\\",\\n  \\"Users\\": \\"user1,user2\\",\\n  \\"Quantity\\": \\"3\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n}","type":"json"}]',
            'title' => '获取子人群详细信息',
        ],
        'CreateLaboratory' => [
            'summary' => '创建一个实验室，实验室是一组流量的集合，在实验室下可开展实验。',
            'path' => '/api/v1/laboratories',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID，可通过接口ListScenes获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '实验室名称。',
                                'description' => '实验室名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'laboratory1',
                            ],
                            'Description' => [
                                'title' => '实验室描述。',
                                'description' => '实验室描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is a test.',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1124512470******,1124512471******,1124512472******',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'BucketCount' => [
                                'title' => '分桶数量。',
                                'description' => '分桶数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '24',
                            ],
                            'Buckets' => [
                                'title' => '分配桶号。',
                                'description' => '分配桶号。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1,2,3,10-20',
                            ],
                            'BucketType' => [
                                'title' => '分桶方式'."\n"
                                    .'● UidHash-UID哈希（默认）'."\n"
                                    .'● Uid-UID分桶'."\n"
                                    .'● Filter-过滤条件分桶',
                                'description' => '分桶方式'."\n"
                                    .'● UidHash-UID哈希（默认）'."\n"
                                    .'● Uid-UID分桶'."\n"
                                    .'● Filter-过滤条件分桶',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'UidHash',
                            ],
                            'Filter' => [
                                'title' => '过滤条件。',
                                'description' => '过滤条件。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'filter=xxx',
                            ],
                            'Environment' => [
                                'title' => '运行环境'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环',
                                'description' => '运行环境'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Daily',
                            ],
                            'Type' => [
                                'title' => '实验室类型'."\n"
                                    .'● Base'."\n"
                                    .'● NonBase',
                                'description' => '实验室类型'."\n"
                                    .'● Base'."\n"
                                    .'● NonBase',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Base',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '42391E6D-822C-58F8-9F7E-D991BB86D6AD',
                            ],
                            'LaboratoryId' => [
                                'title' => '实验室ID。',
                                'description' => '实验室ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"42391E6D-822C-58F8-9F7E-D991BB86D6AD\\",\\n  \\"LaboratoryId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建实验室',
        ],
        'DeleteLaboratory' => [
            'summary' => '删除指定实验室。',
            'path' => '/api/v1/laboratories/{LaboratoryId}',
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
                    'name' => 'LaboratoryId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验室ID。',
                        'description' => '实验室ID，可通过接口ListLaboratories获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => '1C0898E5-9220-5443-B2D9-445FF0688215',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C0898E5-9220-5443-B2D9-445FF0688215\\"\\n}","type":"json"}]',
            'title' => '删除实验室',
        ],
        'UpdateLaboratory' => [
            'summary' => '更新实验室信息，例如更新实验室的名称。',
            'path' => '/api/v1/laboratories/{LaboratoryId}',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LaboratoryId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验室ID。',
                        'description' => '实验室ID，可通过接口ListLaboratories获取。',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '实验室名称。',
                                'description' => '实验室名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'laboratory1',
                            ],
                            'Description' => [
                                'title' => '实验室介绍。',
                                'description' => '实验室介绍。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is a test.',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1124512470******,1124512471******,1124512472******',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'BucketCount' => [
                                'title' => '分桶数量。',
                                'description' => '分桶数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '24',
                            ],
                            'Buckets' => [
                                'title' => '分配桶号。',
                                'description' => '分配桶号。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1,2,3,10-20',
                            ],
                            'BucketType' => [
                                'title' => '分桶方式。'."\n"
                                    .'● Uid-UID分桶（默认）'."\n"
                                    .'● UidHash-UID哈希'."\n"
                                    .'● Filter-过滤条件分桶',
                                'description' => '分桶方式。'."\n"
                                    .'● Uid-UID分桶（默认）'."\n"
                                    .'● UidHash-UID哈希'."\n"
                                    .'● Filter-过滤条件分桶',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Filter',
                            ],
                            'Filter' => [
                                'title' => '过滤条件。',
                                'description' => '过滤条件。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'filter=xxx',
                            ],
                            'Type' => [
                                'title' => '实验室类型。'."\n"
                                    .'● Base'."\n"
                                    .'● NonBase',
                                'description' => '实验室类型。'."\n"
                                    .'● Base'."\n"
                                    .'● NonBase',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Base',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-test1',
                            ],
                            'Environment' => [
                                'title' => '运行环境'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'description' => '运行环境'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Daily',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\"\\n}","type":"json"}]',
            'title' => '更新实验室',
        ],
        'ListLaboratories' => [
            'summary' => '获取某个场景下的实验室列表。',
            'path' => '/api/v1/laboratories',
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
                    'name' => 'Environment',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实验室所属的环境。'."\n"
                            .'● Daily-日常环境'."\n"
                            .'● Pre-预发环境'."\n"
                            .'● Prod-生产环境',
                        'description' => '实验室所属的环境。'."\n"
                            .'● Daily-日常环境'."\n"
                            .'● Pre-预发环境'."\n"
                            .'● Prod-生产环境',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Daily',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景ID。',
                        'description' => '场景ID，可通过接口ListScenes获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '状态。'."\n"
                            .'● Offline-未上线。'."\n"
                            .'● Online-已上线。',
                        'description' => '状态。'."\n"
                            .'● Offline-未上线。'."\n"
                            .'● Online-已上线。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Offline',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-test1',
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
                                'example' => '1C0898E5-9220-5443-B2D9-445FF0688215',
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总数。',
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Laboratories' => [
                                'title' => '实验室列表。',
                                'description' => '实验室列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LaboratoryId' => [
                                            'title' => '实验室ID。',
                                            'description' => '实验室ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'SceneId' => [
                                            'title' => '场景ID。',
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => '实验室名称。',
                                            'description' => '实验室名称。',
                                            'type' => 'string',
                                            'example' => 'laboratory1',
                                        ],
                                        'Description' => [
                                            'title' => '实验室描述。',
                                            'description' => '实验室描述。',
                                            'type' => 'string',
                                            'example' => 'This is a test.',
                                        ],
                                        'DebugUsers' => [
                                            'title' => '调试用户。',
                                            'description' => '调试用户。',
                                            'type' => 'string',
                                            'example' => 'user1,user2,user3',
                                        ],
                                        'DebugCrowdId' => [
                                            'title' => '调试人群ID。',
                                            'description' => '调试人群ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'BucketCount' => [
                                            'title' => '分桶数量。',
                                            'description' => '分桶数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'Buckets' => [
                                            'title' => '分配桶号。',
                                            'description' => '分配桶号。',
                                            'type' => 'string',
                                            'example' => '1,2,3,10-20',
                                        ],
                                        'BucketType' => [
                                            'title' => '分桶方式。'."\n"
                                                .'● Uid-UID分桶（默认）'."\n"
                                                .'● UidHash-UID哈希'."\n"
                                                .'● Filter-过滤条件分桶',
                                            'description' => '分桶方式。'."\n"
                                                .'● Uid-UID分桶（默认）'."\n"
                                                .'● UidHash-UID哈希'."\n"
                                                .'● Filter-过滤条件分桶',
                                            'type' => 'string',
                                            'example' => 'Filter',
                                        ],
                                        'Filter' => [
                                            'title' => '过滤条件。',
                                            'description' => '过滤条件。',
                                            'type' => 'string',
                                            'example' => 'filter=xxx',
                                        ],
                                        'Environment' => [
                                            'title' => '运行环境'."\n"
                                                .'● Daily-日常环境'."\n"
                                                .'● Pre-预发环境'."\n"
                                                .'● Prod-生产环境',
                                            'description' => '运行环境'."\n"
                                                .'● Daily-日常环境'."\n"
                                                .'● Pre-预发环境'."\n"
                                                .'● Prod-生产环境',
                                            'type' => 'string',
                                            'example' => 'Daily',
                                        ],
                                        'Type' => [
                                            'title' => '实验室类型'."\n"
                                                .'● Base'."\n"
                                                .'● NonBase',
                                            'description' => '实验室类型'."\n"
                                                .'● Base'."\n"
                                                .'● NonBase',
                                            'type' => 'string',
                                            'example' => 'Base',
                                        ],
                                        'Status' => [
                                            'title' => '状态。'."\n"
                                                .'● Offline-未上线。'."\n"
                                                .'● Online-已上线。',
                                            'description' => '状态。'."\n"
                                                .'● Offline-未上线。'."\n"
                                                .'● Online-已上线。',
                                            'type' => 'string',
                                            'example' => 'Offline',
                                        ],
                                        'CrowdId' => [
                                            'title' => '人群ID。',
                                            'description' => '人群ID。',
                                            'type' => 'string',
                                            'example' => '3',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C0898E5-9220-5443-B2D9-445FF0688215\\",\\n  \\"TotalCount\\": 10,\\n  \\"Laboratories\\": [\\n    {\\n      \\"LaboratoryId\\": \\"3\\",\\n      \\"SceneId\\": \\"3\\",\\n      \\"Name\\": \\"laboratory1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"DebugUsers\\": \\"user1,user2,user3\\",\\n      \\"DebugCrowdId\\": \\"3\\",\\n      \\"BucketCount\\": 100,\\n      \\"Buckets\\": \\"1,2,3,10-20\\",\\n      \\"BucketType\\": \\"Filter\\",\\n      \\"Filter\\": \\"filter=xxx\\",\\n      \\"Environment\\": \\"Daily\\",\\n      \\"Type\\": \\"Base\\",\\n      \\"Status\\": \\"Offline\\",\\n      \\"CrowdId\\": \\"3\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取实验室列表',
        ],
        'GetLaboratory' => [
            'summary' => '获取指定实验室的详细信息。',
            'path' => '/api/v1/laboratories/{LaboratoryId}',
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
                    'name' => 'LaboratoryId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验室ID。',
                        'description' => '实验室ID，可通过接口ListLaboratories获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-test1',
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
                                'example' => '1C0898E5-9220-5443-B2D9-445FF0688215',
                            ],
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '实验室名称。',
                                'description' => '实验室名称。',
                                'type' => 'string',
                                'example' => 'laboratory1',
                            ],
                            'Description' => [
                                'title' => '实验室描述。',
                                'description' => '实验室描述。',
                                'type' => 'string',
                                'example' => 'This is a test.',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户。',
                                'type' => 'string',
                                'example' => 'user1,user2,user3',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'BucketCount' => [
                                'title' => '分桶数量。',
                                'description' => '分桶数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'Buckets' => [
                                'title' => '分配桶号。',
                                'description' => '分配桶号。',
                                'type' => 'string',
                                'example' => '1,2,3,10-20',
                            ],
                            'BucketType' => [
                                'title' => '分桶方式。'."\n"
                                    .'● Uid-UID分桶（默认）'."\n"
                                    .'● UidHash-UID哈希'."\n"
                                    .'● Filter-过滤条件分桶',
                                'description' => '分桶方式。'."\n"
                                    .'● Uid-UID分桶（默认）'."\n"
                                    .'● UidHash-UID哈希'."\n"
                                    .'● Filter-过滤条件分桶',
                                'type' => 'string',
                                'example' => 'Filter',
                            ],
                            'Filter' => [
                                'title' => '过滤条件。',
                                'description' => '过滤条件。',
                                'type' => 'string',
                                'example' => 'filter=xxx',
                            ],
                            'Environment' => [
                                'title' => '运行环境'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'description' => '运行环境'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'type' => 'string',
                                'example' => 'Daily',
                            ],
                            'Type' => [
                                'title' => '实验室类型'."\n"
                                    .'● Base'."\n"
                                    .'● NonBase',
                                'description' => '实验室类型'."\n"
                                    .'● Base'."\n"
                                    .'● NonBase',
                                'type' => 'string',
                                'example' => 'Base',
                            ],
                            'Status' => [
                                'title' => '状态。'."\n"
                                    .'● Offline-未上线。'."\n"
                                    .'● Online-已上线。',
                                'description' => '状态。'."\n"
                                    .'● Offline-未上线。'."\n"
                                    .'● Online-已上线。',
                                'type' => 'string',
                                'example' => 'Offline',
                            ],
                            'CrowdId' => [
                                'title' => '人群ID。',
                                'description' => '人群ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C0898E5-9220-5443-B2D9-445FF0688215\\",\\n  \\"SceneId\\": \\"3\\",\\n  \\"Name\\": \\"laboratory1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"DebugUsers\\": \\"user1,user2,user3\\",\\n  \\"DebugCrowdId\\": \\"3\\",\\n  \\"BucketCount\\": 100,\\n  \\"Buckets\\": \\"1,2,3,10-20\\",\\n  \\"BucketType\\": \\"Filter\\",\\n  \\"Filter\\": \\"filter=xxx\\",\\n  \\"Environment\\": \\"Daily\\",\\n  \\"Type\\": \\"Base\\",\\n  \\"Status\\": \\"Offline\\",\\n  \\"CrowdId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '获取实验室详细信息',
        ],
        'OnlineLaboratory' => [
            'summary' => '将指定实验室进行发布上线，以开展实验分析。',
            'path' => '/api/v1/laboratories/{LaboratoryId}/action/online',
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
                    'name' => 'LaboratoryId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验室ID。',
                        'description' => '实验室ID，可通过接口ListLaboratories获取。',
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
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-test1',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '8C27790E-CCA5-56BB-BA17-646295DEC0A2',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8C27790E-CCA5-56BB-BA17-646295DEC0A2\\"\\n}","type":"json"}]',
            'title' => '上线实验室',
        ],
        'OfflineLaboratory' => [
            'summary' => '将指定实验室下线。',
            'path' => '/api/v1/laboratories/{LaboratoryId}/action/offline',
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
                    'name' => 'LaboratoryId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验室ID。',
                        'description' => '实验室ID，可通过接口ListLaboratories获取。',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\"\\n}","type":"json"}]',
            'title' => '下线实验室',
        ],
        'CloneLaboratory' => [
            'summary' => '将指定实验室克隆到指定环境，克隆时需指定是否克隆实验室下的实验组。',
            'path' => '/api/v1/laboratories/{LaboratoryId}/action/clone',
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
                    'name' => 'LaboratoryId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验室ID。',
                        'description' => '实验室ID，可通过接口ListLaboratories获取。',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234',
                            ],
                            'Environment' => [
                                'title' => '运行环境'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'description' => '运行环境'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Daily',
                            ],
                            'CloneExperimentGroup' => [
                                'title' => '是否克隆实验组。',
                                'description' => '是否克隆实验组。',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '01D22D08-BA20-5F35-8302-99115F288220',
                            ],
                            'LaboratoryId' => [
                                'title' => '克隆出的实验室的ID。',
                                'description' => '克隆出的实验室的ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01D22D08-BA20-5F35-8302-99115F288220\\",\\n  \\"LaboratoryId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '克隆实验室',
        ],
        'CreateLayer' => [
            'summary' => '在指定实验室下创建一个层，用于分层实验。层与层之间正交，可独立开展实验，避免流量饥饿问题。',
            'path' => '/api/v1/layers',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'LaboratoryId' => [
                                'title' => '实验室ID。',
                                'description' => '实验室ID，可通过接口ListLaboratories获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '层名称。',
                                'description' => '层名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'layer1',
                            ],
                            'Description' => [
                                'title' => '层描述。',
                                'description' => '层描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'This is a test.',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
                            ],
                            'LayerId' => [
                                'title' => '层ID。',
                                'description' => '层ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\",\\n  \\"LayerId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建层',
        ],
        'DeleteLayer' => [
            'summary' => '删除指定层。',
            'path' => '/api/v1/layers/{LayerId}',
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
                    'name' => 'LayerId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '层ID。',
                        'description' => '层ID，可通过接口ListLayers获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => '8F457D79-C4A2-5E8C-83E4-0D089456E2AC',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F457D79-C4A2-5E8C-83E4-0D089456E2AC\\"\\n}","type":"json"}]',
            'title' => '删除层',
        ],
        'UpdateLayer' => [
            'summary' => '更新指定层的信息，例如更新层的名称、描述。',
            'path' => '/api/v1/layers/{LayerId}',
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
                    'name' => 'LayerId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '层ID，可通过接口ListLayers获取。',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-test1',
                            ],
                            'Name' => [
                                'title' => '层名称。',
                                'description' => '层名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'layer1',
                            ],
                            'Description' => [
                                'title' => '层描述。',
                                'description' => '层描述。',
                                'type' => 'string',
                                'required' => true,
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '0EA9215E-EC21-53AB-B8D9-D3DEA90D040A',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0EA9215E-EC21-53AB-B8D9-D3DEA90D040A\\"\\n}","type":"json"}]',
            'title' => '更新层',
        ],
        'ListLayers' => [
            'summary' => '获取某个实验室下的层列表。',
            'path' => '/api/v1/layers',
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
                'abilityTreeCode' => '183174',
                'abilityTreeNodes' => [
                    'FEATURElearnN0NAWV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'LaboratoryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实验室ID。',
                        'description' => '实验室ID，可通过接口ListLaboratories获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => '518C64F6-DFF7-11ED-85B0-00163E14B3D1',
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总数。',
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Layers' => [
                                'title' => '层列表。',
                                'description' => '层列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LayerId' => [
                                            'title' => '层ID。',
                                            'description' => '层ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'LaboratoryId' => [
                                            'title' => '实验室ID。',
                                            'description' => '实验室ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'SceneId' => [
                                            'title' => '场景ID。',
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => '层名称。',
                                            'description' => '层名称。',
                                            'type' => 'string',
                                            'example' => 'layer1',
                                        ],
                                        'Description' => [
                                            'title' => '层描述。',
                                            'description' => '层描述。',
                                            'type' => 'string',
                                            'example' => 'This is a test.',
                                        ],
                                        'ResidualFlow' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'GmtCreateTime' => [
                                            'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"518C64F6-DFF7-11ED-85B0-00163E14B3D1\\",\\n  \\"TotalCount\\": 10,\\n  \\"Layers\\": [\\n    {\\n      \\"LayerId\\": \\"3\\",\\n      \\"LaboratoryId\\": \\"3\\",\\n      \\"SceneId\\": \\"3\\",\\n      \\"Name\\": \\"layer1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"ResidualFlow\\": 0,\\n      \\"GmtCreateTime\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取层列表',
        ],
        'GetLayer' => [
            'summary' => '获取指定层的详细信息。',
            'path' => '/api/v1/layers/{LayerId}',
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
                'abilityTreeCode' => '183176',
                'abilityTreeNodes' => [
                    'FEATURElearnN0NAWV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'LayerId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '层ID。',
                        'description' => '层ID，可通过接口ListLayers获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'EE97D06A-2AA0-5AD9-B6CF-8A267924D691',
                            ],
                            'LaboratoryId' => [
                                'title' => '实验室ID。',
                                'description' => '实验室ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'Name' => [
                                'title' => '层名称。',
                                'description' => '层名称。',
                                'type' => 'string',
                                'example' => 'layer1',
                            ],
                            'Description' => [
                                'title' => '层描述。',
                                'description' => '层描述。',
                                'type' => 'string',
                                'example' => 'This is a test.',
                            ],
                            'ResidualFlow' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'GmtCreateTime' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EE97D06A-2AA0-5AD9-B6CF-8A267924D691\\",\\n  \\"LaboratoryId\\": \\"3\\",\\n  \\"SceneId\\": \\"4\\",\\n  \\"Name\\": \\"layer1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"ResidualFlow\\": 0,\\n  \\"GmtCreateTime\\": \\"\\"\\n}","type":"json"}]',
            'title' => '获取层详细信息',
        ],
        'CreateExperimentGroup' => [
            'summary' => '在指定层下，创建一个实验组。可按照实验类型划分实验组，从而按照实验组观测实验整体效果表现。',
            'path' => '/api/v1/experimentgroups',
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
                'abilityTreeCode' => '183389',
                'abilityTreeNodes' => [
                    'FEATURElearnN0NAWV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'LayerId' => [
                                'title' => '层ID。',
                                'description' => '层ID，可通过接口ListLayers获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '实验组名称。',
                                'description' => '实验组名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'experiment_group_test',
                            ],
                            'Description' => [
                                'title' => '实验组描述。',
                                'description' => '实验组描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'This is a test.',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1124512470******,1124512471******,1124512472******',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID，可通过接口ListCrowds获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'NeedAA' => [
                                'title' => '是否需要AA实验组。',
                                'description' => '是否需要AA实验组。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'Filter' => [
                                'title' => '人群定向指定的过滤条件。',
                                'description' => '人群定向指定的过滤条件。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'gender=male',
                            ],
                            'CrowdId' => [
                                'title' => '人群定向的指定人群ID。',
                                'description' => '人群定向的指定人群ID，可通过接口ListCrowds获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                            'DistributionType' => [
                                'title' => '分流方式。'."\n"
                                    .'● UserId-用户ID'."\n"
                                    .'● TimeDuration-时段',
                                'description' => '分流方式。'."\n"
                                    .'● UserId-用户ID'."\n"
                                    .'● TimeDuration-时段',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'UserId',
                            ],
                            'DistributionTimeDuration' => [
                                'title' => '分流时段。',
                                'description' => '分流时段。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Config' => [
                                'title' => '实验组配置。',
                                'description' => '实验组配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"RankBy": "Score"}',
                            ],
                            'ReservedBuckets' => [
                                'title' => '预留桶号。',
                                'description' => '预留桶号。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1,2,3',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-test1',
                            ],
                            'CrowdTargetType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RandomFlow' => [
                                'type' => 'integer',
                                'format' => 'int64',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
                            ],
                            'ExperimentGroupId' => [
                                'title' => '实验组ID。',
                                'description' => '实验组ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\",\\n  \\"ExperimentGroupId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建实验组',
        ],
        'DeleteExperimentGroup' => [
            'summary' => '删除指定实验组。',
            'path' => '/api/v1/experimentgroups/{ExperimentGroupId}',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验组ID。',
                        'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'A009D9BE-C85E-57B2-AE05-BD78BB6EBF50',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A009D9BE-C85E-57B2-AE05-BD78BB6EBF50\\"\\n}","type":"json"}]',
            'title' => '删除实验组',
        ],
        'UpdateExperimentGroup' => [
            'summary' => '更新指定实验组的信息，例如更新实验组的名称、描述。',
            'path' => '/api/v1/experimentgroups/{ExperimentGroupId}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '183398',
                'abilityTreeNodes' => [
                    'FEATURElearnN0NAWV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentGroupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'LayerId' => [
                                'title' => '层ID。',
                                'description' => '层ID，可通过接口ListLayers获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '实验组名称。',
                                'description' => '实验组名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'experiment_group1',
                            ],
                            'Description' => [
                                'title' => '实验组描述。',
                                'description' => '实验组描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'This is a test.',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user1,user2,user3',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID，可通过接口ListCrowds获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'NeedAA' => [
                                'title' => '是否需要AA实验组。',
                                'description' => '是否需要AA实验组。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'Filter' => [
                                'title' => '人群定向指定的过滤条件。',
                                'description' => '人群定向指定的过滤条件。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'gender=male',
                            ],
                            'CrowdId' => [
                                'title' => '人群定向的指定人群ID。',
                                'description' => '人群定向的指定人群ID，可通过接口ListCrowds获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'DistributionType' => [
                                'title' => '分流方式。'."\n"
                                    .'● UserId-用户ID'."\n"
                                    .'● TimeDuration-时段',
                                'description' => '分流方式。'."\n"
                                    .'● UserId-用户ID'."\n"
                                    .'● TimeDuration-时段',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'UserId',
                            ],
                            'DistributionTimeDuration' => [
                                'title' => '分流时段。',
                                'description' => '分流时段。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Config' => [
                                'title' => '实验组配置。',
                                'description' => '实验组配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"RankBy": "Score"}',
                            ],
                            'ReservcedBuckets' => [
                                'title' => '预留桶号。',
                                'description' => '预留桶号。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1,2,3',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234',
                            ],
                            'CrowdTargetType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RandomFlow' => [
                                'type' => 'integer',
                                'format' => 'int64',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\"\\n}","type":"json"}]',
            'title' => '更新实验组',
        ],
        'ListExperimentGroups' => [
            'summary' => '获取实验组列表。',
            'path' => '/api/v1/experimentgroups',
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
                'abilityTreeCode' => '183391',
                'abilityTreeNodes' => [
                    'FEATURElearnN0NAWV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'LayerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '层ID。',
                        'description' => '层ID，可通过接口ListLayers获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '状态过滤'."\n"
                            .'● Offline-未上线'."\n"
                            .'● Online-已上线'."\n"
                            .'● Pushed-已推全',
                        'description' => '状态过滤'."\n"
                            .'● Offline-未上线'."\n"
                            .'● Online-已上线'."\n"
                            .'● Pushed-已推全',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Online',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
                            ],
                            'TotalCount' => [
                                'title' => '列表内元素总数。',
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'ExperimentGroups' => [
                                'title' => '实验组列表。',
                                'description' => '实验组列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ExperimentGroupId' => [
                                            'title' => '实验组ID。',
                                            'description' => '实验组ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'LayerId' => [
                                            'title' => '层ID。',
                                            'description' => '层ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'LaboratoryId' => [
                                            'title' => '实验室ID。',
                                            'description' => '实验室ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'SceneId' => [
                                            'title' => '场景ID。',
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'title' => '实验组名称。',
                                            'description' => '实验组名称。',
                                            'type' => 'string',
                                            'example' => 'experiment_group1',
                                        ],
                                        'Description' => [
                                            'title' => '实验组描述。',
                                            'description' => '实验组描述。',
                                            'type' => 'string',
                                            'example' => 'This is a test.',
                                        ],
                                        'DebugUsers' => [
                                            'title' => '调试用户。',
                                            'description' => '调试用户。',
                                            'type' => 'string',
                                            'example' => '1124512470******,1124512471******,1124512472******',
                                        ],
                                        'DebugCrowdId' => [
                                            'title' => '调试人群ID。',
                                            'description' => '调试人群ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'Owner' => [
                                            'title' => '创建人。',
                                            'description' => '创建人。',
                                            'type' => 'string',
                                            'example' => '1124512470******',
                                        ],
                                        'NeedAA' => [
                                            'title' => '是否需要AB实验组。',
                                            'description' => '是否需要AB实验组。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Filter' => [
                                            'title' => '过滤条件。',
                                            'description' => '过滤条件。',
                                            'type' => 'string',
                                            'example' => 'gender=female',
                                        ],
                                        'DistributionType' => [
                                            'title' => '分流方式。'."\n"
                                                .'● UserId-用户ID'."\n"
                                                .'● TimeDuration-时段',
                                            'description' => '分流方式。'."\n"
                                                .'● UserId-用户ID'."\n"
                                                .'● TimeDuration-时段',
                                            'type' => 'string',
                                            'example' => 'UserId',
                                        ],
                                        'DistributionTimeDuration' => [
                                            'title' => '分流时段。',
                                            'description' => '分流时段。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'CrowdId' => [
                                            'title' => '人群ID。',
                                            'description' => '人群ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Config' => [
                                            'title' => '实验组配置。',
                                            'description' => '实验组配置。',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'ReservedBuckets' => [
                                            'title' => '预留桶号。',
                                            'description' => '预留桶号。',
                                            'type' => 'string',
                                            'example' => '1,2,3,4',
                                        ],
                                        'Status' => [
                                            'title' => '实验组状态。'."\n"
                                                .'● Offline-未上线'."\n"
                                                .'● Online-已上线'."\n"
                                                .'● Pushed-已推全',
                                            'description' => '实验组状态。'."\n"
                                                .'● Offline-未上线'."\n"
                                                .'● Online-已上线'."\n"
                                                .'● Pushed-已推全',
                                            'type' => 'string',
                                            'example' => 'Offline',
                                        ],
                                        'CrowdTargetType' => [
                                            'type' => 'string',
                                        ],
                                        'RandomFlow' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'HoldingBuckets' => [
                                            'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\",\\n  \\"TotalCount\\": 10,\\n  \\"ExperimentGroups\\": [\\n    {\\n      \\"ExperimentGroupId\\": \\"3\\",\\n      \\"LayerId\\": \\"3\\",\\n      \\"LaboratoryId\\": \\"4\\",\\n      \\"SceneId\\": \\"1\\",\\n      \\"Name\\": \\"experiment_group1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"DebugUsers\\": \\"1124512470******,1124512471******,1124512472******\\",\\n      \\"DebugCrowdId\\": \\"4\\",\\n      \\"Owner\\": \\"1124512470******\\",\\n      \\"NeedAA\\": true,\\n      \\"Filter\\": \\"gender=female\\",\\n      \\"DistributionType\\": \\"UserId\\",\\n      \\"DistributionTimeDuration\\": 5,\\n      \\"CrowdId\\": \\"3\\",\\n      \\"Config\\": \\"{}\\",\\n      \\"ReservedBuckets\\": \\"1,2,3,4\\",\\n      \\"Status\\": \\"Offline\\",\\n      \\"CrowdTargetType\\": \\"\\",\\n      \\"RandomFlow\\": 0,\\n      \\"HoldingBuckets\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取实验组列表',
        ],
        'GetExperimentGroup' => [
            'summary' => '获取指定实验组的详细信息。',
            'path' => '/api/v1/experimentgroups/{ExperimentGroupId}',
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
                'abilityTreeCode' => '183395',
                'abilityTreeNodes' => [
                    'FEATURElearnN0NAWV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验组ID。',
                        'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => 'BDB621CB-A81E-5D39-8793-39A365CBCC74',
                            ],
                            'LayerId' => [
                                'title' => '层ID。',
                                'description' => '层ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'LaboratoryId' => [
                                'title' => '实验室ID。',
                                'description' => '实验室ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Name' => [
                                'title' => '实验组名称。',
                                'description' => '实验组名称。',
                                'type' => 'string',
                                'example' => 'experiment_group1',
                            ],
                            'Description' => [
                                'title' => '实验组描述。',
                                'description' => '实验组描述。',
                                'type' => 'string',
                                'example' => 'This is a test.',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户，多个用户间用逗号作间隔。',
                                'type' => 'string',
                                'example' => '1124512470******,1124512471******,1124512472******',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'Owner' => [
                                'title' => '创建人。',
                                'description' => '创建人。',
                                'type' => 'string',
                                'example' => '1124512470******',
                            ],
                            'NeedAA' => [
                                'title' => '是否需要AB实验组。',
                                'description' => '是否需要AB实验组。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Filter' => [
                                'title' => '过滤条件。',
                                'description' => '过滤条件。',
                                'type' => 'string',
                                'example' => 'gender=female',
                            ],
                            'DistributionType' => [
                                'title' => '分流方式。'."\n"
                                    .'● UserId-用户ID'."\n"
                                    .'● TimeDuration-时段',
                                'description' => '分流方式。'."\n"
                                    .'● UserId-用户ID'."\n"
                                    .'● TimeDuration-时段',
                                'type' => 'string',
                                'example' => 'UserId',
                            ],
                            'DistributionTimeDuration' => [
                                'title' => '分流时段。',
                                'description' => '分流时段。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'CrowdId' => [
                                'title' => '人群ID。',
                                'description' => '人群ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'Config' => [
                                'title' => '实验组配置。',
                                'description' => '实验组配置。',
                                'type' => 'string',
                                'example' => '{"RankBy": "Score"}',
                            ],
                            'ReservedBuckets' => [
                                'title' => '预留桶号。',
                                'description' => '预留桶号。',
                                'type' => 'string',
                                'example' => '1,2,3,4',
                            ],
                            'Status' => [
                                'title' => '实验组状态。'."\n"
                                    .'● Offline-未上线'."\n"
                                    .'● Online-已上线'."\n"
                                    .'● Pushed-已推全',
                                'description' => '实验组状态。'."\n"
                                    .'● Offline-未上线'."\n"
                                    .'● Online-已上线'."\n"
                                    .'● Pushed-已推全',
                                'type' => 'string',
                                'example' => 'Offline',
                            ],
                            'CrowdTargetType' => [
                                'type' => 'string',
                            ],
                            'RandomFlow' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'HoldingBuckets' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDB621CB-A81E-5D39-8793-39A365CBCC74\\",\\n  \\"LayerId\\": \\"3\\",\\n  \\"LaboratoryId\\": \\"4\\",\\n  \\"SceneId\\": \\"1\\",\\n  \\"Name\\": \\"experiment_group1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"DebugUsers\\": \\"1124512470******,1124512471******,1124512472******\\",\\n  \\"DebugCrowdId\\": \\"4\\",\\n  \\"Owner\\": \\"1124512470******\\",\\n  \\"NeedAA\\": true,\\n  \\"Filter\\": \\"gender=female\\",\\n  \\"DistributionType\\": \\"UserId\\",\\n  \\"DistributionTimeDuration\\": 5,\\n  \\"CrowdId\\": \\"3\\",\\n  \\"Config\\": \\"{\\\\\\"RankBy\\\\\\": \\\\\\"Score\\\\\\"}\\",\\n  \\"ReservedBuckets\\": \\"1,2,3,4\\",\\n  \\"Status\\": \\"Offline\\",\\n  \\"CrowdTargetType\\": \\"\\",\\n  \\"RandomFlow\\": 0,\\n  \\"HoldingBuckets\\": \\"\\"\\n}","type":"json"}]',
            'title' => '获取实验组详细信息',
        ],
        'CloneExperimentGroup' => [
            'summary' => '向指定环境克隆一个实验组。',
            'path' => '/api/v1/experimentgroups/{ExperimentGroupId}/action/clone',
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
                    'name' => 'ExperimentGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验组ID。',
                        'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234'."\n",
                            ],
                            'LayerId' => [
                                'title' => '层ID。',
                                'description' => '层ID，可通过接口ListLayers获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Environment' => [
                                'title' => '克隆到的环境。'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'description' => '克隆到的环境。'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Daily',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '12A65C6C-AFA1-59B2-9A66-A9E0BB73F0E5',
                            ],
                            'ExperimentGroupId' => [
                                'title' => '克隆后的实验组ID。',
                                'description' => '克隆后的实验组ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"12A65C6C-AFA1-59B2-9A66-A9E0BB73F0E5\\",\\n  \\"ExperimentGroupId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '克隆实验组',
        ],
        'OnlineExperimentGroup' => [
            'summary' => '上线指定实验组。',
            'path' => '/api/v1/experimentgroups/{ExperimentGroupId}/action/online',
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
                    'name' => 'ExperimentGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验组ID。',
                        'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
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
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234'."\n",
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '47F761ED-BE4E-51A6-B678-78E1490DF313',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"47F761ED-BE4E-51A6-B678-78E1490DF313\\"\\n}","type":"json"}]',
            'title' => '上线实验组',
        ],
        'OfflineExperimentGroup' => [
            'summary' => '下线指定实验组。',
            'path' => '/api/v1/experimentgroups/{ExperimentGroupId}/action/offline',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentGroupId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验组ID。',
                        'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
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
                        'title' => '请求body。',
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234'."\n",
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '518C64F6-DFF7-11ED-85B0-00163E14B3D1',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"518C64F6-DFF7-11ED-85B0-00163E14B3D1\\"\\n}","type":"json"}]',
            'title' => '下线实验组',
        ],
        'CreateExperiment' => [
            'summary' => '在指定实验组下创建一个实验。',
            'path' => '/api/v1/experiments',
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
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-test1',
                            ],
                            'ExperimentGroupId' => [
                                'title' => '实验组ID。',
                                'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '实验名称。',
                                'description' => '实验名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'experiment_test',
                            ],
                            'Description' => [
                                'title' => '实验描述。',
                                'description' => '实验描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'This is a test.',
                            ],
                            'Type' => [
                                'title' => '实验类型。'."\n"
                                    .'● Baseline-基准实验。'."\n"
                                    .'● Normal-普通实验。',
                                'description' => '实验类型。'."\n"
                                    .'● Baseline-基准实验。'."\n"
                                    .'● Normal-普通实验。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Baseline',
                            ],
                            'FlowPercent' => [
                                'title' => '流量分配百分比。',
                                'description' => '流量分配百分比。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '100',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1124512470******,1124512471******,1124512472******',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID，可通过接口ListCrowds获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Config' => [
                                'title' => '实验配置。',
                                'description' => '实验配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"RankBy": "Score"}',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '3AAA45F6-0798-5461-9360-81D133823CE7',
                            ],
                            'ExperimentId' => [
                                'title' => '实验ID。',
                                'description' => '实验ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3AAA45F6-0798-5461-9360-81D133823CE7\\",\\n  \\"ExperimentId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '创建实验',
        ],
        'DeleteExperiment' => [
            'summary' => '删除指定实验。',
            'path' => '/api/v1/experiments/{ExperimentId}',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验ID。',
                        'description' => '实验ID，可通过接口ListExperiments获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => '2A734D87-2212-5C84-B63A-1AC87CA843D4',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2A734D87-2212-5C84-B63A-1AC87CA843D4\\"\\n}","type":"json"}]',
            'title' => '删除实验',
        ],
        'UpdateExperiment' => [
            'summary' => '更新指定实验的信息，例如更新实验的名称。',
            'path' => '/api/v1/experiments/{ExperimentId}',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234',
                            ],
                            'Name' => [
                                'title' => '实验名称。',
                                'description' => '实验名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'experiment_test',
                            ],
                            'Description' => [
                                'title' => '实验描述。',
                                'description' => '实验描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'This is a test.',
                            ],
                            'Type' => [
                                'title' => '实验类型。'."\n"
                                    .'● Baseline-基准实验。'."\n"
                                    .'● Normal-普通实验。',
                                'description' => '实验类型。'."\n"
                                    .'● Baseline-基准实验。'."\n"
                                    .'● Normal-普通实验。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Baseline',
                            ],
                            'FlowPercent' => [
                                'title' => '流量分配百分比。',
                                'description' => '流量分配百分比。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '100',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1124512470******,1124512471******,1124512472******',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID，可通过接口ListCrowds获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Config' => [
                                'title' => '实验配置。',
                                'description' => '实验配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"RankBy": "Score"}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验ID。',
                        'description' => '实验ID，可通过接口ListExperiments获取。',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'A760D972-1475-58C0-BBB3-92B5FB08904F',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A760D972-1475-58C0-BBB3-92B5FB08904F\\"\\n}","type":"json"}]',
            'title' => '更新实验',
        ],
        'GetExperiment' => [
            'summary' => '获取指定实验的详细信息。',
            'path' => '/api/v1/experiments/{ExperimentId}',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验ID。',
                        'description' => '实验ID，可通过接口ListExperiments获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
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
                                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
                            ],
                            'AliasExperimentId' => [
                                'title' => '实验ID别名。',
                                'description' => '实验ID别名。',
                                'type' => 'string',
                                'example' => 'L1#EG1#E1',
                            ],
                            'ExperimentGroupId' => [
                                'title' => '实验组ID。',
                                'description' => '实验组ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'LayerId' => [
                                'title' => '层ID。',
                                'description' => '层ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'LaboratoryId' => [
                                'title' => '实验室ID。',
                                'description' => '实验室ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'Name' => [
                                'title' => '实验名称。',
                                'description' => '实验名称。',
                                'type' => 'string',
                                'example' => 'experiment_test1',
                            ],
                            'Description' => [
                                'title' => '实验描述。',
                                'description' => '实验描述。',
                                'type' => 'string',
                                'example' => 'This is a test.',
                            ],
                            'Type' => [
                                'title' => '实验类型。'."\n"
                                    .'● Baseline-基准实验。'."\n"
                                    .'● Normal-普通实验。',
                                'description' => '实验类型。'."\n"
                                    .'● Baseline-基准实验。'."\n"
                                    .'● Normal-普通实验。',
                                'type' => 'string',
                                'example' => 'Baseline',
                            ],
                            'FlowPercent' => [
                                'title' => '流量分配百分比。',
                                'description' => '流量分配百分比。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                                'default' => '100',
                            ],
                            'Buckets' => [
                                'title' => '分配桶号。',
                                'description' => '分配桶号。',
                                'type' => 'string',
                                'example' => '1,2,3',
                            ],
                            'DebugUsers' => [
                                'title' => '调试用户。',
                                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                                'type' => 'string',
                                'example' => '1124512470******,1124512471******,1124512472******',
                            ],
                            'DebugCrowdId' => [
                                'title' => '调试人群ID。',
                                'description' => '调试人群ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'Config' => [
                                'title' => '实验配置。',
                                'description' => '实验配置。',
                                'type' => 'string',
                                'example' => '{"RankBy": "Score"}',
                            ],
                            'Status' => [
                                'title' => '状态过滤。'."\n"
                                    .'● Offline-未上线'."\n"
                                    .'● Online-已上线',
                                'description' => '状态过滤。'."\n"
                                    .'● Offline-未上线'."\n"
                                    .'● Online-已上线',
                                'type' => 'string',
                                'example' => 'Offline',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\",\\n  \\"AliasExperimentId\\": \\"L1#EG1#E1\\",\\n  \\"ExperimentGroupId\\": \\"3\\",\\n  \\"LayerId\\": \\"3\\",\\n  \\"LaboratoryId\\": \\"3\\",\\n  \\"SceneId\\": \\"3\\",\\n  \\"Name\\": \\"experiment_test1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"Type\\": \\"Baseline\\",\\n  \\"FlowPercent\\": 100,\\n  \\"Buckets\\": \\"1,2,3\\",\\n  \\"DebugUsers\\": \\"1124512470******,1124512471******,1124512472******\\",\\n  \\"DebugCrowdId\\": \\"3\\",\\n  \\"Config\\": \\"{\\\\\\"RankBy\\\\\\": \\\\\\"Score\\\\\\"}\\",\\n  \\"Status\\": \\"Offline\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n}","type":"json"}]',
            'title' => '获取实验详细信息',
        ],
        'ListExperiments' => [
            'summary' => '获取指定实验组下的实验列表。',
            'path' => '/api/v1/experiments',
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
                    'name' => 'ExperimentGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实验组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '状态过滤。'."\n"
                            .'● Offline-未上线'."\n"
                            .'● Online-已上线',
                        'description' => '状态过滤。'."\n"
                            .'● Offline-未上线'."\n"
                            .'● Online-已上线',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Offline',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，可通过接口ListInstances获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-abcdefg1234',
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'schema' => [
                        'title' => '快速查询时的过滤参数。会返回与名称/标签匹配的所有实验。',
                        'description' => '快速查询时的过滤参数。会返回与名称/标签匹配的所有实验。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'experiment_test1',
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
                                'example' => '68075085-1A7D-55C2-B51D-7AD9B02A6DD6',
                            ],
                            'TotalCount' => [
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Experiments' => [
                                'title' => '实验列表',
                                'description' => '实验列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ExperimentId' => [
                                            'title' => '实验ID。',
                                            'description' => '实验ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'AliasExperimentId' => [
                                            'title' => '实验ID别名。',
                                            'description' => '实验ID别名。',
                                            'type' => 'string',
                                            'example' => 'L1#EG1#E1',
                                        ],
                                        'ExperimentGroupId' => [
                                            'title' => '实验组ID。',
                                            'description' => '实验组ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'LayerId' => [
                                            'title' => '层ID。',
                                            'description' => '层ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'LaboratoryId' => [
                                            'title' => '实验室ID。',
                                            'description' => '实验室ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'SceneId' => [
                                            'title' => '场景ID。',
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => '实验名称。',
                                            'description' => '实验名称。',
                                            'type' => 'string',
                                            'example' => 'experiment_test1',
                                        ],
                                        'Description' => [
                                            'title' => '实验描述。',
                                            'description' => '实验描述。',
                                            'type' => 'string',
                                            'example' => 'This is a test.',
                                        ],
                                        'Type' => [
                                            'title' => '实验类型。'."\n"
                                                .'● Baseline-基准实验。'."\n"
                                                .'● Normal-普通实验。',
                                            'description' => '实验类型。'."\n"
                                                .'● Baseline-基准实验。'."\n"
                                                .'● Normal-普通实验。',
                                            'type' => 'string',
                                            'example' => 'Baseline',
                                        ],
                                        'FlowPercent' => [
                                            'title' => '流量分配百分比。',
                                            'description' => '流量分配百分比。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                            'default' => '100',
                                        ],
                                        'Buckets' => [
                                            'title' => '分配桶号。',
                                            'description' => '分配桶号。',
                                            'type' => 'string',
                                            'example' => '1,2,3',
                                        ],
                                        'DebugUsers' => [
                                            'title' => '调试用户。',
                                            'description' => '调试用户。',
                                            'type' => 'string',
                                            'example' => 'uid1,uid2,uid3',
                                        ],
                                        'DebugCrowdId' => [
                                            'title' => '调试人群ID。',
                                            'description' => '调试人群ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Config' => [
                                            'title' => '实验配置。',
                                            'description' => '实验配置。',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'Status' => [
                                            'title' => '状态过滤。'."\n"
                                                .'● Offline-未上线'."\n"
                                                .'● Online-已上线',
                                            'description' => '状态过滤。'."\n"
                                                .'● Offline-未上线'."\n"
                                                .'● Online-已上线',
                                            'type' => 'string',
                                            'example' => 'Offline',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"68075085-1A7D-55C2-B51D-7AD9B02A6DD6\\",\\n  \\"TotalCount\\": 10,\\n  \\"Experiments\\": [\\n    {\\n      \\"ExperimentId\\": \\"3\\",\\n      \\"AliasExperimentId\\": \\"L1#EG1#E1\\",\\n      \\"ExperimentGroupId\\": \\"3\\",\\n      \\"LayerId\\": \\"3\\",\\n      \\"LaboratoryId\\": \\"3\\",\\n      \\"SceneId\\": \\"3\\",\\n      \\"Name\\": \\"experiment_test1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"Type\\": \\"Baseline\\",\\n      \\"FlowPercent\\": 100,\\n      \\"Buckets\\": \\"1,2,3\\",\\n      \\"DebugUsers\\": \\"uid1,uid2,uid3\\",\\n      \\"DebugCrowdId\\": \\"3\\",\\n      \\"Config\\": \\"{}\\",\\n      \\"Status\\": \\"Offline\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取实验列表',
        ],
        'CloneExperiment' => [
            'summary' => '对指定实验进行克隆。',
            'path' => '/api/v1/experiments/{ExperimentId}/action/clone',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验ID。',
                        'description' => '实验ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'experiment_test',
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
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234'."\n",
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'F8F613A9-DF1C-551A-88E1-397A3981A785',
                            ],
                            'ExperimentId' => [
                                'description' => '实验ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8F613A9-DF1C-551A-88E1-397A3981A785\\",\\n  \\"ExperimentId\\": \\"3\\"\\n}","type":"json"}]',
            'title' => '克隆实验',
        ],
        'OfflineExperiment' => [
            'summary' => '将指定实验下线。',
            'path' => '/api/v1/experiments/{ExperimentId}/action/offline',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验ID。',
                        'description' => '实验ID，实验ID可通过接口ListExperiments获取。',
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
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '872951C9-7755-5FA1-AACD-7F9375A6D27A',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"872951C9-7755-5FA1-AACD-7F9375A6D27A\\"\\n}","type":"json"}]',
            'title' => '下线实验',
        ],
        'PushAllExperiment' => [
            'summary' => '对于效果较优且稳定的实验，可对该实验进行推全。对某个实验推全后，该实验所属的实验组将结束生命周期，不再支持继续实验。平台会生成一个新的实验组，被推全的实验将在该实验组下占有全额的流量。',
            'path' => '/api/v1/experiments/{ExperimentId}/action/pushall',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验ID。',
                        'description' => '实验ID，可通过接口ListExperiments获取。',
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
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\"\\n}","type":"json"}]',
            'title' => '推全实验',
        ],
        'OnlineExperiment' => [
            'summary' => '将指定实验发布上线。',
            'path' => '/api/v1/experiments/{ExperimentId}/action/online',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实验ID。',
                        'description' => '实验ID，可通过接口ListExperiments获取。',
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
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID，可通过接口ListInstances获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'pairec-cn-abcdefg1234',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '6CF1E160-3F36-5E73-A170-C75504F05BBC',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF1E160-3F36-5E73-A170-C75504F05BBC\\"\\n}","type":"json"}]',
            'title' => '上线实验',
        ],
        'UpdateABMetric' => [
            'summary' => '更新AB实验指标。',
            'path' => '/api/v1/abmetrics/{ABMetricId}',
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
                    'name' => 'ABMetricId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'AB指标ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'description' => '指标名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pv',
                            ],
                            'Description' => [
                                'description' => '指标描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pv 指标',
                            ],
                            'SceneId' => [
                                'description' => '场景ID，可通过接口[ListScenes](~~2402581~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1',
                            ],
                            'Type' => [
                                'description' => '指标类型。'."\n"
                                    ."\n"
                                    .'- Single-单一指标。'."\n"
                                    ."\n"
                                    .'- Derived-衍生指标。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Single',
                            ],
                            'Realtime' => [
                                'description' => '是否为实时指标。'."\n"
                                    ."\n"
                                    .'- true-是。'."\n"
                                    ."\n"
                                    .'- false-否。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'false',
                            ],
                            'TableMetaId' => [
                                'description' => '数据表ID，可以通过ListTableMetas获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2',
                            ],
                            'ResultResourceId' => [
                                'description' => '写回数据表的数据源的ID，可以通过ListInstanceResources获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Definition' => [
                                'description' => '指标定义。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'sum(click_cnt)',
                            ],
                            'StatisticsCycle' => [
                                'description' => '统计周期。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'LeftMetricId' => [
                                'description' => '衍生指标的左指标ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2',
                            ],
                            'RightMetricId' => [
                                'description' => '衍生指标的右指标ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Operator' => [
                                'description' => '衍生指标计算的操作符。'."\n"
                                    ."\n"
                                    .'- Plus-加'."\n"
                                    ."\n"
                                    .'- Minus-减'."\n"
                                    ."\n"
                                    .'- Multiplication-乘'."\n"
                                    ."\n"
                                    .'- Division-除',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Division',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-test123',
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
                                'example' => '6CF1E160-3F36-5E73-A170-C75504F05BBC',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF1E160-3F36-5E73-A170-C75504F05BBC\\"\\n}","type":"json"}]',
            'title' => '更新AB指标',
        ],
        'CreateABMetric' => [
            'summary' => '创建AB实验指标。',
            'path' => '/api/v1/abmetrics',
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
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'description' => '指标名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pv',
                            ],
                            'Description' => [
                                'description' => '指标描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pv指标',
                            ],
                            'SceneId' => [
                                'description' => '场景ID，可通过接口[ListScenes](~~2402581~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1',
                            ],
                            'Type' => [
                                'description' => '指标类型。'."\n"
                                    ."\n"
                                    .'- Single-单一指标。'."\n"
                                    ."\n"
                                    .'- Derived-衍生指标。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Single',
                            ],
                            'Realtime' => [
                                'description' => '是否为实时指标。'."\n"
                                    ."\n"
                                    .'- true-是。'."\n"
                                    ."\n"
                                    .'- false-否。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'false',
                            ],
                            'TableMetaId' => [
                                'description' => '数据表ID，可通过ListTableMetas获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2',
                            ],
                            'ResultResourceId' => [
                                'description' => '写回数据表的数据源的ID，可以通过ListInstanceResources获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Definition' => [
                                'description' => '指标定义。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'sum(click_cnt)',
                            ],
                            'StatisticsCycle' => [
                                'description' => '统计周期。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'LeftMetricId' => [
                                'description' => '衍生指标的左指标ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2',
                            ],
                            'RightMetricId' => [
                                'description' => '衍生指标的右指标ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Operator' => [
                                'description' => '衍生指标计算的操作符。'."\n"
                                    ."\n"
                                    .'- Plus-加'."\n"
                                    ."\n"
                                    .'- Minus-减'."\n"
                                    ."\n"
                                    .'- Multiplication-乘'."\n"
                                    ."\n"
                                    .'- Division-除',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Division',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID，可从接口[ListInstances](~~2411819~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-test1',
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
                                'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
                            ],
                            'ABMetricId' => [
                                'description' => 'AB指标ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\",\\n  \\"ABMetricId\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '创建AB指标',
        ],
        'ListABMetrics' => [
            'summary' => '获取AB实验指标列表。',
            'path' => '/api/v1/abmetrics',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指标类型过滤。'."\n"
                            ."\n"
                            .'- Single-单一指标。'."\n"
                            ."\n"
                            .'- Derived-衍生指标。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Single',
                    ],
                ],
                [
                    'name' => 'Realtime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否指标实时类型过滤。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
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
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'home',
                    ],
                ],
                [
                    'name' => 'TableMetaId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据表ID，可通过ListTableMetas获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID，来源于[ListScenes](~~2402581~~)接口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
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
                                'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
                            ],
                            'TotalCount' => [
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'ABMetrics' => [
                                'description' => 'AB指标列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'AB指标信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ABMetricId' => [
                                            'description' => 'AB指标ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '指标名称。',
                                            'type' => 'string',
                                            'example' => 'pv',
                                        ],
                                        'Description' => [
                                            'description' => '指标描述。',
                                            'type' => 'string',
                                            'example' => 'pv指标',
                                        ],
                                        'SceneId' => [
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'SceneName' => [
                                            'description' => '场景名称',
                                            'type' => 'string',
                                            'example' => 'home_feed',
                                        ],
                                        'Type' => [
                                            'description' => '指标类型。'."\n"
                                                ."\n"
                                                .'- Single-单一指标。'."\n"
                                                ."\n"
                                                .'- Derived-衍生指标。',
                                            'type' => 'string',
                                            'example' => 'Single',
                                        ],
                                        'Realtime' => [
                                            'description' => '是否为实时指标。'."\n"
                                                ."\n"
                                                .'- true-是。'."\n"
                                                ."\n"
                                                .'- false-否。',
                                            'type' => 'string',
                                            'example' => 'false',
                                        ],
                                        'TableMetaId' => [
                                            'description' => '数据表ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'ResultTableMetaId' => [
                                            'description' => '数据写回到的数据表ID。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'ResultResourceId' => [
                                            'description' => '写回数据表的数据源的ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Definition' => [
                                            'description' => '指标定义。',
                                            'type' => 'string',
                                            'example' => 'sum(click_cnt)',
                                        ],
                                        'StatisticsCycle' => [
                                            'description' => '统计周期。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'LeftMetricId' => [
                                            'description' => '衍生指标的左指标ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'RightMetricId' => [
                                            'description' => '衍生指标的右指标ID。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'Operator' => [
                                            'description' => '衍生指标计算的操作符。'."\n"
                                                ."\n"
                                                .'- Plus-加'."\n"
                                                ."\n"
                                                .'- Minus-减'."\n"
                                                ."\n"
                                                .'- Multiplication-乘'."\n"
                                                ."\n"
                                                .'- Division-除',
                                            'type' => 'string',
                                            'example' => 'Division',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\",\\n  \\"TotalCount\\": 10,\\n  \\"ABMetrics\\": [\\n    {\\n      \\"ABMetricId\\": \\"1\\",\\n      \\"Name\\": \\"pv\\",\\n      \\"Description\\": \\"pv指标\\",\\n      \\"SceneId\\": \\"1\\",\\n      \\"SceneName\\": \\"home_feed\\",\\n      \\"Type\\": \\"Single\\",\\n      \\"Realtime\\": \\"false\\",\\n      \\"TableMetaId\\": \\"1\\",\\n      \\"ResultTableMetaId\\": \\"2\\",\\n      \\"ResultResourceId\\": \\"3\\",\\n      \\"Definition\\": \\"sum(click_cnt)\\",\\n      \\"StatisticsCycle\\": 1,\\n      \\"LeftMetricId\\": \\"3\\",\\n      \\"RightMetricId\\": \\"2\\",\\n      \\"Operator\\": \\"Division\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取AB指标列表',
        ],
        'GetABMetric' => [
            'summary' => '获取AB实验指标详细信息。',
            'path' => '/api/v1/abmetrics/{ABMetricId}',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ABMetricId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'AB指标ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
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
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'Name' => [
                                'description' => '指标名称。',
                                'type' => 'string',
                                'example' => 'pv',
                            ],
                            'Description' => [
                                'description' => '指标描述。',
                                'type' => 'string',
                                'example' => '页面访问次数',
                            ],
                            'SceneId' => [
                                'description' => '场景ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'SceneName' => [
                                'description' => '场景名称。',
                                'type' => 'string',
                                'example' => 'home_feed',
                            ],
                            'Type' => [
                                'description' => '指标类型。'."\n"
                                    ."\n"
                                    .'- Single-单一指标。'."\n"
                                    ."\n"
                                    .'- Derived-衍生指标。',
                                'type' => 'string',
                                'example' => 'Single',
                            ],
                            'Realtime' => [
                                'description' => '是否为实时指标。'."\n"
                                    ."\n"
                                    .'- true-是。'."\n"
                                    ."\n"
                                    .'- false-否。',
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'TableMetaId' => [
                                'description' => '来源数据表ID。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'ResultTableMetaId' => [
                                'description' => '数据写回到的数据表ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'ResultResourceId' => [
                                'description' => '写回数据表的数据源的ID。',
                                'type' => 'string',
                                'example' => '5',
                            ],
                            'Definition' => [
                                'description' => '指标定义。',
                                'type' => 'string',
                                'example' => 'sum(click_cnt)',
                            ],
                            'StatisticsCycle' => [
                                'description' => '统计周期。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'LeftMetricId' => [
                                'description' => '衍生指标的左指标ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'RightMetricId' => [
                                'description' => '衍生指标的右指标ID。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'Operator' => [
                                'description' => '衍生指标计算的操作符。'."\n"
                                    ."\n"
                                    .'- Plus-加'."\n"
                                    ."\n"
                                    .'- Minus-减'."\n"
                                    ."\n"
                                    .'- Multiplication-乘'."\n"
                                    ."\n"
                                    .'- Division-除',
                                'type' => 'string',
                                'example' => 'Division',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"Name\\": \\"pv\\",\\n  \\"Description\\": \\"页面访问次数\\",\\n  \\"SceneId\\": \\"1\\",\\n  \\"SceneName\\": \\"home_feed\\",\\n  \\"Type\\": \\"Single\\",\\n  \\"Realtime\\": \\"false\\",\\n  \\"TableMetaId\\": \\"2\\",\\n  \\"ResultTableMetaId\\": \\"3\\",\\n  \\"ResultResourceId\\": \\"5\\",\\n  \\"Definition\\": \\"sum(click_cnt)\\",\\n  \\"StatisticsCycle\\": 1,\\n  \\"LeftMetricId\\": \\"3\\",\\n  \\"RightMetricId\\": \\"2\\",\\n  \\"Operator\\": \\"Division\\"\\n}","type":"json"}]',
            'title' => '获取AB指标详细信息',
        ],
        'DeleteABMetric' => [
            'summary' => '删除指定AB实验指标。',
            'path' => '/api/v1/abmetrics/{ABMetricId}',
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
                    'name' => 'ABMetricId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'AB指标ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
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
            'title' => '删除AB指标',
        ],
        'ReportABMetricGroup' => [
            'summary' => '查询指标组的报表。',
            'path' => '/api/v1/abmetricgroups/{ABMetricGroupId}/action/report',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ABMetricGroupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '指标组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'InstanceId' => [
                                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-test1',
                            ],
                            'ReportType' => [
                                'description' => '报表类型。'."\n"
                                    ."\n"
                                    .'- Realtime-实时报表'."\n"
                                    ."\n"
                                    .'- Offline-离线报表'."\n"
                                    ."\n"
                                    .'- Market-大盘报表',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Offline',
                            ],
                            'SceneId' => [
                                'description' => '场景ID，可通过[ListScenes](~~2402581~~)获取。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                            'ExperimentGroupId' => [
                                'description' => '实验组ID，可通过接口[ListExperimentGroups](~~2402573~~)获取（离线、实时报表需要）。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '3',
                            ],
                            'ExperimentIds' => [
                                'description' => '实验ID列表，可通过[ListExperiments](~~2402582~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3,4,5',
                            ],
                            'BaseExperimentId' => [
                                'description' => '基准实验ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'TimeStatisticsMethod' => [
                                'description' => '统计时间类型（实时报表需要）。'."\n"
                                    ."\n"
                                    .'- Hour-按小时统计。'."\n"
                                    ."\n"
                                    .'- Day-从当日0点开始累加。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Hour',
                            ],
                            'DimensionFields' => [
                                'description' => '维度字段。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"gender":"man"}',
                            ],
                            'StartDate' => [
                                'description' => '开始日期。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2021-07-01',
                            ],
                            'EndDate' => [
                                'description' => '结束日期。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2021-07-01',
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
                                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
                            ],
                            'ExperimentReport' => [
                                'description' => '实验报表。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Baseline' => [
                                            'type' => 'boolean',
                                            'description' => '是否是基准实验数据。',
                                            'example' => 'true',
                                        ],
                                        'MetricResults' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ExpId' => [
                                                            'type' => 'string',
                                                            'description' => '实验ID。',
                                                            'example' => '2',
                                                        ],
                                                        'ExpName' => [
                                                            'type' => 'string',
                                                            'example' => 'test实验',
                                                            'description' => '实验名称。',
                                                        ],
                                                        'MetricName' => [
                                                            'type' => 'string',
                                                            'example' => 'pv',
                                                            'description' => '指标名称。',
                                                        ],
                                                        'MetricValue' => [
                                                            'type' => 'string',
                                                            'example' => '100',
                                                            'description' => '指标值。',
                                                        ],
                                                        'DimensionValue' => [
                                                            'type' => 'string',
                                                            'example' => 'ALL',
                                                            'description' => '维度值。',
                                                        ],
                                                        'Date' => [
                                                            'type' => 'string',
                                                            'example' => '20230206',
                                                            'description' => '日期。',
                                                        ],
                                                        'PercentDiff' => [
                                                            'type' => 'string',
                                                            'description' => '相较于base的增长率。',
                                                            'example' => '0.1',
                                                        ],
                                                        'PercentDiffStr' => [
                                                            'type' => 'string',
                                                            'description' => '相较于base的增长率（string 类型）。',
                                                            'example' => '"0.1"',
                                                        ],
                                                    ],
                                                    'description' => '指标结果。',
                                                ],
                                                'description' => '指标结果。',
                                            ],
                                            'description' => '指标结果。',
                                        ],
                                    ],
                                    'description' => '报表信息。',
                                ],
                            ],
                            'GroupDimension' => [
                                'description' => '维度字段。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '维度信息。',
                                    'type' => 'string',
                                    'example' => '["all"]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\",\\n  \\"ExperimentReport\\": {\\n    \\"key\\": {\\n      \\"Baseline\\": true,\\n      \\"MetricResults\\": {\\n        \\"key\\": {\\n          \\"key\\": {\\n            \\"ExpId\\": \\"2\\",\\n            \\"ExpName\\": \\"test实验\\",\\n            \\"MetricName\\": \\"pv\\",\\n            \\"MetricValue\\": \\"100\\",\\n            \\"DimensionValue\\": \\"ALL\\",\\n            \\"Date\\": \\"20230206\\",\\n            \\"PercentDiff\\": \\"0.1\\",\\n            \\"PercentDiffStr\\": \\"\\\\\\"0.1\\\\\\"\\"\\n          }\\n        }\\n      }\\n    }\\n  },\\n  \\"GroupDimension\\": [\\n    \\"[\\\\\\"all\\\\\\"]\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询指标组报表',
        ],
        'UpdateABMetricGroup' => [
            'summary' => '更新AB实验指标组。',
            'path' => '/api/v1/abmetricgroups/{ABMetricGroupId}',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'description' => '指标组名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'visits',
                            ],
                            'SceneId' => [
                                'description' => '场景ID，可通过接口[ListScenes](~~2402581~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1',
                            ],
                            'Description' => [
                                'description' => '指标组描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '访问量相关指标',
                            ],
                            'ABMetricIds' => [
                                'description' => 'AB实验指标ID列表，逗号分隔。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1,2',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID，可从接口[ListInstances](~~2411819~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-test1',
                            ],
                            'Realtime' => [
                                'description' => '是否为实时指标组。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ABMetricGroupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '指标组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\"\\n}","type":"json"}]',
            'title' => '更新指标组',
        ],
        'CreateABMetricGroup' => [
            'summary' => '创建AB实验指标组。',
            'path' => '/api/v1/abmetricgroups',
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
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'description' => '指标组名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'visits',
                            ],
                            'SceneId' => [
                                'description' => '场景ID，可通过接口[ListScenes](~~2402581~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1',
                            ],
                            'Description' => [
                                'description' => '指标组描述。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '访问量相关指标',
                            ],
                            'ABMetricIds' => [
                                'description' => 'AB实验指标ID列表，逗号分隔。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1,2',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-test1',
                            ],
                            'Realtime' => [
                                'description' => '是否为实时指标组。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'false',
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
                                'example' => 'E15A1443-7917-5BE0-AE70-25538ECF398D',
                            ],
                            'ABMetricGroupId' => [
                                'description' => '指标组ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E15A1443-7917-5BE0-AE70-25538ECF398D\\",\\n  \\"ABMetricGroupId\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '创建指标组',
        ],
        'ListABMetricGroups' => [
            'summary' => '获取AB实验指标组列表。',
            'path' => '/api/v1/abmetricgroups',
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
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID，可通过接口[ListScenes]((~~2402581~~))获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
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
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Realtime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指标组实时类型过滤',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序依据，取值：'."\n"
                            ."\n"
                            .'- GmtCreateTime：创建时间。'."\n"
                            .'- GmtModifiedTime：更新时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方式，取值：'."\n"
                            ."\n"
                            .'- ASC：升序。'."\n"
                            .'- DESC：降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
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
                                'example' => 'E15A1443-7917-5BE0-AE70-25538ECF398D',
                            ],
                            'TotalCount' => [
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'ABMetricGroups' => [
                                'description' => 'AB指标组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'AB指标组信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ABMetricGroupId' => [
                                            'description' => '指标组ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '指标组名称。',
                                            'type' => 'string',
                                            'example' => 'visits',
                                        ],
                                        'SceneId' => [
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Description' => [
                                            'description' => '指标组描述。',
                                            'type' => 'string',
                                            'example' => '访问量相关指标',
                                        ],
                                        'Owner' => [
                                            'description' => '负责人。',
                                            'type' => 'string',
                                            'example' => '2799614***',
                                        ],
                                        'ABMetricIds' => [
                                            'description' => 'AB实验指标ID列表，逗号分隔。',
                                            'type' => 'string',
                                            'example' => '1,2',
                                        ],
                                        'ABMetricNames' => [
                                            'description' => 'AB实验指标名称列表，逗号分隔。',
                                            'type' => 'string',
                                            'example' => 'pv,uv',
                                        ],
                                        'Realtime' => [
                                            'description' => '是否为实时指标组。',
                                            'type' => 'boolean',
                                            'example' => 'false',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E15A1443-7917-5BE0-AE70-25538ECF398D\\",\\n  \\"TotalCount\\": 10,\\n  \\"ABMetricGroups\\": [\\n    {\\n      \\"ABMetricGroupId\\": \\"1\\",\\n      \\"Name\\": \\"visits\\",\\n      \\"SceneId\\": \\"1\\",\\n      \\"Description\\": \\"访问量相关指标\\",\\n      \\"Owner\\": \\"2799614***\\",\\n      \\"ABMetricIds\\": \\"1,2\\",\\n      \\"ABMetricNames\\": \\"pv,uv\\",\\n      \\"Realtime\\": false\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取指标组列表',
        ],
        'GetABMetricGroup' => [
            'summary' => '获取AB实验指标组详细信息。',
            'path' => '/api/v1/abmetricgroups/{ABMetricGroupId}',
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
                    'name' => 'ABMetricGroupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '指标组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
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
                                'example' => '01D22D08-BA20-5F35-8302-99115F288220',
                            ],
                            'Name' => [
                                'description' => '指标组名称。',
                                'type' => 'string',
                                'example' => 'visits',
                            ],
                            'SceneId' => [
                                'description' => '场景ID，来源于[ListScenes](https://icms.alibaba-inc.com/content/learn/pai?l=1&m=16768&n=4298955)接口。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Description' => [
                                'description' => '指标组描述。',
                                'type' => 'string',
                                'example' => '访问量相关指标',
                            ],
                            'Owner' => [
                                'description' => '负责人。',
                                'type' => 'string',
                                'example' => '2799614***'."\n",
                            ],
                            'ABMetricIds' => [
                                'description' => 'AB实验指标ID列表，逗号分隔。',
                                'type' => 'string',
                                'example' => '1,2',
                            ],
                            'ABMetricNames' => [
                                'description' => 'AB实验指标名称列表，逗号分隔。',
                                'type' => 'string',
                                'example' => 'pv,uv',
                            ],
                            'Realtime' => [
                                'description' => '是否为实时指标组。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01D22D08-BA20-5F35-8302-99115F288220\\",\\n  \\"Name\\": \\"visits\\",\\n  \\"SceneId\\": \\"1\\",\\n  \\"Description\\": \\"访问量相关指标\\",\\n  \\"Owner\\": \\"2799614***\\\\n\\",\\n  \\"ABMetricIds\\": \\"1,2\\",\\n  \\"ABMetricNames\\": \\"pv,uv\\",\\n  \\"Realtime\\": false\\n}","type":"json"}]',
            'title' => '获取指标组详细信息',
        ],
        'DeleteABMetricGroup' => [
            'summary' => '删除AB实验指标组。',
            'path' => '/api/v1/abmetricgroups/{ABMetricGroupId}',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ABMetricGroupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '指标组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
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
                                'example' => 'BDB621CB-A81E-5D39-8793-39A365CBCC74',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDB621CB-A81E-5D39-8793-39A365CBCC74\\"\\n}","type":"json"}]',
            'title' => '删除指标组',
        ],
        'ListCalculationJobs' => [
            'summary' => '获取计算任务列表。',
            'path' => '/api/v1/calculationjobs',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
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
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID，可通过[ListScenes](~~2402581~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态。'."\n"
                            ."\n"
                            .'- Success-成功'."\n"
                            ."\n"
                            .'- Failure-失败'."\n"
                            ."\n"
                            .'- Initializing-初始化中'."\n"
                            ."\n"
                            .'- Running-运行中',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Success',
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
                                'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
                            ],
                            'TotalCount' => [
                                'description' => '列表内元素总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'CalculationJobs' => [
                                'description' => '计算任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '计算任务信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CalculationJobId' => [
                                            'description' => '计算任务ID。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'ABMetricName' => [
                                            'description' => 'AB指标名称。',
                                            'type' => 'string',
                                            'example' => 'pv',
                                        ],
                                        'Status' => [
                                            'description' => '任务状态。'."\n"
                                                ."\n"
                                                .'- Success-成功'."\n"
                                                ."\n"
                                                .'- Failure-失败'."\n"
                                                ."\n"
                                                .'- Initializing-初始化中'."\n"
                                                ."\n"
                                                .'- Running-运行中',
                                            'type' => 'string',
                                            'example' => 'Success',
                                        ],
                                        'JobMessage' => [
                                            'description' => '任务信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '任务信息。',
                                                'type' => 'string',
                                                'example' => 'success',
                                            ],
                                        ],
                                        'Config' => [
                                            'description' => '任务配置。',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'GmtRanTime' => [
                                            'description' => '运行时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'BizDate' => [
                                            'description' => '业务时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15',
                                        ],
                                        'JobSource' => [
                                            'description' => '任务来源。'."\n"
                                                ."\n"
                                                .'- CronOffline-离线定时任务'."\n"
                                                ."\n"
                                                .'- DataRerun-数据重跑任务',
                                            'type' => 'string',
                                            'example' => 'CronOffline',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\",\\n  \\"TotalCount\\": 10,\\n  \\"CalculationJobs\\": [\\n    {\\n      \\"CalculationJobId\\": \\"2\\",\\n      \\"ABMetricName\\": \\"pv\\",\\n      \\"Status\\": \\"Success\\",\\n      \\"JobMessage\\": [\\n        \\"success\\"\\n      ],\\n      \\"Config\\": \\"{}\\",\\n      \\"GmtRanTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"BizDate\\": \\"2021-12-15\\",\\n      \\"JobSource\\": \\"CronOffline\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取计算任务列表',
        ],
        'GetCalculationJob' => [
            'summary' => '获取指定计算任务详细信息。',
            'path' => '/api/v1/calculationjobs/{CalculationJobId}',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CalculationJobId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '计算任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-test1',
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
                                'example' => '7D59453C-48AA-5FC5-8848-2D373BD1A17F',
                            ],
                            'ABMetricId' => [
                                'description' => 'AB指标ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'ABMetricName' => [
                                'description' => 'AB指标名称。',
                                'type' => 'string',
                                'example' => 'pv',
                            ],
                            'Status' => [
                                'description' => '状态。'."\n"
                                    ."\n"
                                    .'- Success-成功'."\n"
                                    ."\n"
                                    .'- Failure-失败'."\n"
                                    ."\n"
                                    .'- Initializing-初始化中'."\n"
                                    ."\n"
                                    .'- Running-运行中',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'JobMessage' => [
                                'description' => '任务信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务信息。',
                                    'type' => 'string',
                                    'example' => 'success',
                                ],
                            ],
                            'Config' => [
                                'description' => '任务配置。',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'GmtRanTime' => [
                                'description' => '运行时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'BizDate' => [
                                'description' => '业务时间。',
                                'type' => 'string',
                                'example' => '2021-12-15',
                            ],
                            'JobSource' => [
                                'description' => '任务来源。'."\n"
                                    ."\n"
                                    .'- CronOffline-离线定时任务'."\n"
                                    ."\n"
                                    .'- DataRerun-数据重跑任务',
                                'type' => 'string',
                                'example' => 'CronOffline',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7D59453C-48AA-5FC5-8848-2D373BD1A17F\\",\\n  \\"ABMetricId\\": \\"1\\",\\n  \\"ABMetricName\\": \\"pv\\",\\n  \\"Status\\": \\"Success\\",\\n  \\"JobMessage\\": [\\n    \\"success\\"\\n  ],\\n  \\"Config\\": \\"{}\\",\\n  \\"GmtRanTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"BizDate\\": \\"2021-12-15\\",\\n  \\"JobSource\\": \\"CronOffline\\"\\n}","type":"json"}]',
            'title' => '获取计算任务',
        ],
        'CreateCalculationJobs' => [
            'summary' => '批量创建计算任务。',
            'path' => '/api/v1/batch/calculationjobs/create',
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
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'ABMetricIds' => [
                                'description' => 'AB实验指标ID列表，使用逗号分隔。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2,3,4',
                            ],
                            'StartDate' => [
                                'description' => '开始日期。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2023-01-01',
                            ],
                            'EndDate' => [
                                'description' => '结束日期。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '2023-01-03',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID，可从接口[ListInstances](~~2411819~~)获取。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-test1',
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
                                'example' => '8C27790E-CCA5-56BB-BA17-646295DEC0A2',
                            ],
                            'CalculationJobIds' => [
                                'description' => '计算任务ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'ID列表。',
                                    'type' => 'string',
                                    'example' => '["12","13","14"]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8C27790E-CCA5-56BB-BA17-646295DEC0A2\\",\\n  \\"CalculationJobIds\\": [\\n    \\"[\\\\\\"12\\\\\\",\\\\\\"13\\\\\\",\\\\\\"14\\\\\\"]\\"\\n  ]\\n}","type":"json"}]',
            'title' => '创建计算任务',
        ],
        'CreateFeatureConsistencyCheckJobConfig' => [
            'summary' => '创建特征一致性检查任务配置。',
            'path' => '/api/v1/featureconsistencycheck/jobconfigs',
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
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-********',
                            ],
                            'Name' => [
                                'title' => '特征一致性检查名称。',
                                'description' => '特征一致性检查名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'feature_consistency_check1',
                            ],
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'SampleRate' => [
                                'title' => '采样比例（0-1）。',
                                'description' => '采样比例（0-1）。',
                                'type' => 'number',
                                'format' => 'double',
                                'required' => true,
                                'example' => '0.89',
                            ],
                            'FeatureLandingResourceId' => [
                                'title' => '数据回落数据源ID。',
                                'description' => '数据回落数据源ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'reso-********',
                            ],
                            'EasServiceName' => [
                                'title' => 'PAI-EAS服务名称。',
                                'description' => 'PAI-EAS服务名称。如何获取服务名称，请参见[ListServices](~~412109~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'service_123',
                            ],
                            'FgJsonFileName' => [
                                'title' => 'fg_json文件名称。',
                                'description' => 'fg_json文件名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'file.json',
                            ],
                            'UserTable' => [
                                'title' => 'user表名。',
                                'description' => 'user表名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user_table',
                            ],
                            'UserIdField' => [
                                'title' => 'user_id字段名。',
                                'description' => 'user_id字段名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user_id',
                            ],
                            'UserTablePartitionField' => [
                                'title' => 'user表分区字段。',
                                'description' => 'user表分区字段。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ds',
                            ],
                            'UserTablePartitionFieldFormat' => [
                                'title' => 'user表分区字段格式。'."\n"
                                    .'● yyyymmdd'."\n"
                                    .'● yyyy-mm-dd',
                                'description' => 'user表分区字段格式。'."\n"
                                    .'- yyyymmdd'."\n"
                                    .'- yyyy-mm-dd',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'yyyymmdd',
                            ],
                            'ItemTable' => [
                                'title' => 'item表名。',
                                'description' => 'item表名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'item_table',
                            ],
                            'ItemIdField' => [
                                'title' => 'item_id字段名。',
                                'description' => 'item_id字段名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'item_id',
                            ],
                            'ItemTablePartitionField' => [
                                'title' => 'item表分区字段。',
                                'description' => 'item表分区字段。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ds',
                            ],
                            'ItemTablePartitionFieldFormat' => [
                                'title' => 'item表分区字段格式。'."\n"
                                    .'● yyyymmdd'."\n"
                                    .'● yyyy-mm-dd',
                                'description' => 'item表分区字段格式。'."\n"
                                    .'- yyyymmdd'."\n"
                                    .'- yyyy-mm-dd',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'yyyymmdd',
                            ],
                            'CompareFeature' => [
                                'title' => '是否需要特征比对。',
                                'description' => '是否需要特征比对。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'GenerateZip' => [
                                'title' => '是否需要生成zip包。',
                                'description' => '是否需要生成zip包。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'ServiceId' => [
                                'title' => '服务ID。',
                                'description' => '服务ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '4',
                            ],
                            'WorkflowName' => [
                                'title' => '工作流名称。',
                                'description' => '工作流名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'work_flow_1',
                            ],
                            'OssResourceId' => [
                                'title' => 'OSS数据源ID。',
                                'description' => 'OSS数据源ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'reso-********',
                            ],
                            'EasyRecVersion' => [
                                'title' => 'EasyRec版本。',
                                'description' => 'EasyRec版本。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1.3.60',
                            ],
                            'EasyRecPackagePath' => [
                                'title' => 'EasyRec包路径。',
                                'description' => 'EasyRec包所在的OSS Bucket路径。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'oss://*******',
                            ],
                            'FgJarVersion' => [
                                'title' => 'fg_jar版本。',
                                'description' => 'fg_jar版本。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1.0.0',
                            ],
                            'FeaturePriority' => [
                                'title' => '特征优先级，多个特征通过逗号分开。',
                                'description' => '特征优先级，多个特征通过半角逗号（,）分开。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'feature1,feature2,feature3',
                            ],
                            'FeatureDisplayExclude' => [
                                'title' => '特征展示过滤，多个特征通过逗号分开。',
                                'description' => '特征展示过滤，多个特征通过半角逗号（,）分开。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'feature1,feature2',
                            ],
                            'UseFeatureStore' => [
                                'description' => '是否需要使用feature store，取值：'."\n"
                                    ."\n"
                                    .'- true：使用feature store，此时FeatureStoreProjectId、FeatureStoreProjectName、FeatureStoreModelId、FeatureStoreUserId、FeatureStoreItemId为必填项。'."\n"
                                    .'- false：不使用feature store，此时UserTable、UserIdField、UserTablePartitionField、UserTablePartitionFieldFormat、ItemTable、ItemIdField、ItemTablePartitionField、ItemTablePartitionFieldFormat为必填项。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                            'FeatureStoreProjectName' => [
                                'description' => 'feature store项目名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'project-1',
                            ],
                            'FeatureStoreModelId' => [
                                'description' => 'feature store model ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2',
                            ],
                            'FeatureStoreUserId' => [
                                'description' => 'feature store user侧主键。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user',
                            ],
                            'FeatureStoreItemId' => [
                                'description' => 'feature store item侧主键。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'item',
                            ],
                            'FeatureStoreSeqFeatureView' => [
                                'description' => '序列特征中item特征所在的特征视图的名字。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'item-1',
                            ],
                            'FeatureStoreProjectId' => [
                                'description' => 'feature store项目ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'prj-01',
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
                                'example' => 'E15A1443-7917-5BE0-AE70-25538ECF398D',
                            ],
                            'FeatureConsistencyCheckJobConfigId' => [
                                'title' => '特征一致性检查配置ID。',
                                'description' => '特征一致性检查配置ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E15A1443-7917-5BE0-AE70-25538ECF398D\\",\\n  \\"FeatureConsistencyCheckJobConfigId\\": \\"4\\"\\n}","type":"json"}]',
            'title' => '创建特征一致性检查任务配置',
        ],
        'CreateFeatureConsistencyCheckJob' => [
            'summary' => '创建特征一致性检查任务。',
            'path' => '/api/v1/featureconsistencycheck/jobs',
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
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-********',
                            ],
                            'FeatureConsistencyCheckJobConfigId' => [
                                'title' => '特征一致性检查任务配置ID。',
                                'description' => '特征一致性检查任务配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'Environment' => [
                                'title' => '运行环境。'."\n"
                                    .'● Daily-日常环境'."\n"
                                    .'● Pre-预发环境'."\n"
                                    .'● Prod-生产环境',
                                'description' => '运行环境：'."\n"
                                    .'- Daily：日常环境'."\n"
                                    .'- Pre：预发环境'."\n"
                                    .'- Prod：生产环境',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Pre',
                            ],
                            'SamplingDuration' => [
                                'description' => '采样运行时长（单位：分钟）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '10',
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
                                'example' => '7D59453C-48AA-5FC5-8848-2D373BD1A17F',
                            ],
                            'FeatureConsistencyCheckJobId' => [
                                'title' => '特征一致性检查任务ID。',
                                'description' => '特征一致性检查任务ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7D59453C-48AA-5FC5-8848-2D373BD1A17F\\",\\n  \\"FeatureConsistencyCheckJobId\\": \\"4\\"\\n}","type":"json"}]',
            'title' => '创建特征一致性检查任务',
        ],
        'UpdateFeatureConsistencyCheckJobConfig' => [
            'summary' => '更新特征一致性检查任务配置详细信息，例如更新名称。',
            'path' => '/api/v1/featureconsistencycheck/jobconfigs/{FeatureConsistencyCheckJobConfigId}',
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
                    'name' => 'FeatureConsistencyCheckJobConfigId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征一致性检查配置ID。',
                        'description' => '特征一致性检查配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
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
                            'InstanceId' => [
                                'title' => '实例ID，可从接口ListInstances获取。',
                                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-********',
                            ],
                            'Name' => [
                                'title' => '特征一致性检查名称。',
                                'description' => '特征一致性检查名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'feature_consistency_check1',
                            ],
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'SampleRate' => [
                                'title' => '采样比例（0-1）。',
                                'description' => '采样比例（0-1）。',
                                'type' => 'number',
                                'format' => 'double',
                                'required' => true,
                                'example' => '0.89',
                            ],
                            'FeatureLandingResourceId' => [
                                'title' => '数据回落数据源ID。',
                                'description' => '数据回落数据源ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'reso-********',
                            ],
                            'EasServiceName' => [
                                'title' => 'PAI-EAS服务名称。',
                                'description' => 'PAI-EAS服务名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'service_123',
                            ],
                            'FgJsonFileName' => [
                                'title' => 'fg_json文件名称。',
                                'description' => 'fg_json文件名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'file.json',
                            ],
                            'UserTable' => [
                                'title' => 'user表名。',
                                'description' => 'user表名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'user_table',
                            ],
                            'UserIdField' => [
                                'title' => 'user_id字段名。',
                                'description' => 'user_id字段名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'user_id',
                            ],
                            'UserTablePartitionField' => [
                                'title' => 'user表分区字段。',
                                'description' => 'user表分区字段。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ds',
                            ],
                            'UserTablePartitionFieldFormat' => [
                                'title' => 'user表分区字段格式。'."\n"
                                    .'● yyyymmdd'."\n"
                                    .'● yyyy-mm-dd',
                                'description' => 'user表分区字段格式。'."\n"
                                    .'- yyyymmdd'."\n"
                                    .'- yyyy-mm-dd',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'yyyymmdd',
                            ],
                            'ItemTable' => [
                                'title' => 'item表名。',
                                'description' => 'item表名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'item_table',
                            ],
                            'ItemIdField' => [
                                'title' => 'item_id字段名。',
                                'description' => 'item_id字段名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'item_id',
                            ],
                            'ItemTablePartitionField' => [
                                'title' => 'item表分区字段。',
                                'description' => 'item表分区字段。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ds',
                            ],
                            'ItemTablePartitionFieldFormat' => [
                                'title' => 'item表分区字段格式。'."\n"
                                    .'● yyyymmdd'."\n"
                                    .'● yyyy-mm-dd',
                                'description' => 'item表分区字段格式：'."\n"
                                    .'- yyyymmdd'."\n"
                                    .'- yyyy-mm-dd',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'yyyymmdd',
                            ],
                            'CompareFeature' => [
                                'title' => '是否需要特征比对。',
                                'description' => '是否需要特征比对。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'GenerateZip' => [
                                'title' => '是否需要生成zip包。',
                                'description' => '是否需要生成zip包。',
                                'type' => 'boolean',
                                'required' => true,
                                'example' => 'true',
                            ],
                            'ServiceId' => [
                                'title' => '服务ID。',
                                'description' => '服务ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '4',
                            ],
                            'WorkflowName' => [
                                'title' => '工作流名称。',
                                'description' => '工作流名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'work_flow_1',
                            ],
                            'OssResourceId' => [
                                'title' => 'OSS数据源ID。',
                                'description' => 'OSS数据源ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'reso-********',
                            ],
                            'EasyRecVersion' => [
                                'title' => 'EasyRec版本。',
                                'description' => 'EasyRec版本。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1.3.60',
                            ],
                            'EasyRecPackagePath' => [
                                'title' => 'EasyRec包路径。',
                                'description' => 'EasyRec包路径。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'oss://********',
                            ],
                            'FgJarVersion' => [
                                'title' => 'fg_jar版本。',
                                'description' => 'fg_jar版本。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1.0.0',
                            ],
                            'FeaturePriority' => [
                                'title' => '特征优先级，多个特征通过逗号分开。',
                                'description' => '特征优先级，多个特征通过半角逗号（,）分开，表示哪些特征优先从user表读取，若user表为空，则从行为表查询。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'feature1,feature2,feature3',
                            ],
                            'FeatureDisplayExclude' => [
                                'title' => '特征展示过滤，多个特征通过逗号分开。',
                                'description' => '特征展示过滤，多个特征通过半角逗号（,）分开。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'feature1,feature2',
                            ],
                            'IsUseFeatureStore' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'FeatureStoreProjectName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FeatureStoreModelId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FeatureStoreUserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FeatureStoreItemId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FeatureStoreSeqFeatureView' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FeatureStoreProjectId' => [
                                'type' => 'string',
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
                                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\"\\n}","type":"json"}]',
            'title' => '更新特征一致性检查任务配置',
        ],
        'ListFeatureConsistencyCheckJobConfigs' => [
            'summary' => '获取特征一致性检查任务配置列表。',
            'path' => '/api/v1/featureconsistencycheck/jobconfigs',
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
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-********',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码。起始值为1，默认值为1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。'."\n"
                            .'GmtCreateTime-创建时间。'."\n"
                            .'GmtModifiedTime-更新时间。',
                        'description' => '排序依据。'."\n"
                            .'- GmtCreateTime：按创建时间排序。'."\n"
                            .'- GmtModifiedTime-按更新时间排序。',
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
                            .'- ASC：升序。'."\n"
                            .'- DESC：降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
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
                                'example' => 'FCF741D8-9C30-578E-807F-B935487DB34A',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'FeatureConsistencyCheckConfigs' => [
                                'title' => '特征一致性检查列表。',
                                'description' => '特征一致性检查列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureConsistencyCheckJobConfigId' => [
                                            'title' => '特征一致性检查配置ID。',
                                            'description' => '特征一致性检查配置ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'Name' => [
                                            'title' => '特征一致性检查配置名称。',
                                            'description' => '特征一致性检查配置名称。',
                                            'type' => 'string',
                                            'example' => 'feature_consistency_check1',
                                        ],
                                        'SceneId' => [
                                            'title' => '场景ID。',
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'SceneName' => [
                                            'title' => '场景名称。',
                                            'description' => '场景名称。',
                                            'type' => 'string',
                                            'example' => 'scene1',
                                        ],
                                        'Status' => [
                                            'title' => '状态。'."\n"
                                                .'● Editable-可编辑的。'."\n"
                                                .'● Uneditable-不可编辑的。',
                                            'description' => '状态。可能值为：'."\n"
                                                .'- Editable：可编辑的。'."\n"
                                                .'- Uneditable：不可编辑的。',
                                            'type' => 'string',
                                            'example' => 'Editable',
                                        ],
                                        'CompareFeature' => [
                                            'title' => '是否开启特征比对。',
                                            'description' => '是否开启特征比对。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'LatestJobId' => [
                                            'title' => '基于该配置最近一次创建的任务ID。',
                                            'description' => '基于该配置最近一次创建的任务ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'LatestJobGmtSamplingStartTime' => [
                                            'title' => '最近一次创建的任务的开始时间。',
                                            'description' => '最近一次创建的任务的开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'LatestJobGmtSamplingEndTime' => [
                                            'title' => '最近一次创建的任务的结束时间。',
                                            'description' => '最近一次创建的任务的结束时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'SampleRate' => [
                                            'title' => '采样比例（0-1）。',
                                            'description' => '采样比例（0-1）。',
                                            'type' => 'string',
                                            'example' => '0.89',
                                        ],
                                        'FeatureLandingResourceId' => [
                                            'title' => '数据回落数据源ID。',
                                            'description' => '数据回落数据源ID。',
                                            'type' => 'string',
                                            'example' => 'reso-********',
                                        ],
                                        'FeatureLandingResourceUri' => [
                                            'title' => '数据回落数据源地址。',
                                            'description' => '数据回落数据源地址。',
                                            'type' => 'string',
                                            'example' => 'mc_project_1',
                                        ],
                                        'EasServiceName' => [
                                            'title' => 'EAS服务名称。',
                                            'description' => 'EAS服务名称。',
                                            'type' => 'string',
                                            'example' => 'eas_service_1',
                                        ],
                                        'FgJsonFileName' => [
                                            'title' => 'fg_json文件名称。',
                                            'description' => 'fg_json文件名称。',
                                            'type' => 'string',
                                            'example' => 'file.json',
                                        ],
                                        'UserTable' => [
                                            'title' => 'user表名。',
                                            'description' => 'user表名。',
                                            'type' => 'string',
                                            'example' => 'user_table',
                                        ],
                                        'UserIdField' => [
                                            'title' => 'user_id字段名。',
                                            'description' => 'user_id字段名。',
                                            'type' => 'string',
                                            'example' => 'user_id',
                                        ],
                                        'UserTablePartitionField' => [
                                            'title' => 'user表分区字段。',
                                            'description' => 'user表分区字段。',
                                            'type' => 'string',
                                            'example' => 'ds',
                                        ],
                                        'UserTablePartitionFieldFormat' => [
                                            'title' => 'user表分区字段格式。'."\n"
                                                .'● yyyymmdd'."\n"
                                                .'● yyyy-mm-dd',
                                            'description' => 'user表分区字段格式：'."\n"
                                                .'- yyyymmdd'."\n"
                                                .'- yyyy-mm-dd',
                                            'type' => 'string',
                                            'example' => 'yyyymmdd',
                                        ],
                                        'ItemTable' => [
                                            'title' => 'item表名。',
                                            'description' => 'item表名。',
                                            'type' => 'string',
                                            'example' => 'item_table',
                                        ],
                                        'ItemIdField' => [
                                            'title' => 'item_id字段名。',
                                            'description' => 'item_id字段名。',
                                            'type' => 'string',
                                            'example' => 'item_id',
                                        ],
                                        'ItemTablePartitionField' => [
                                            'title' => 'item表分区字段。',
                                            'description' => 'item表分区字段。',
                                            'type' => 'string',
                                            'example' => 'ds',
                                        ],
                                        'ItemTablePartitionFieldFormat' => [
                                            'title' => 'item表分区字段格式。'."\n"
                                                .'● yyyymmdd'."\n"
                                                .'● yyyy-mm-dd',
                                            'description' => 'item表分区字段格式：'."\n"
                                                .'- yyyymmdd'."\n"
                                                .'- yyyy-mm-dd',
                                            'type' => 'string',
                                            'example' => 'yyyymmdd',
                                        ],
                                        'GenerateZip' => [
                                            'title' => '是否需要生成zip包。',
                                            'description' => '是否需要生成zip包。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ServiceId' => [
                                            'title' => '服务ID。',
                                            'description' => '服务ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'ServiceName' => [
                                            'title' => '服务名称。',
                                            'description' => '服务名称。',
                                            'type' => 'string',
                                            'example' => 'service1',
                                        ],
                                        'WorkflowName' => [
                                            'title' => '工作流名称。',
                                            'description' => '工作流名称。',
                                            'type' => 'string',
                                            'example' => 'work_flow_1',
                                        ],
                                        'OssResourceId' => [
                                            'title' => 'OSS数据源ID。',
                                            'description' => 'OSS数据源ID。',
                                            'type' => 'string',
                                            'example' => 'reso-********',
                                        ],
                                        'OssBucket' => [
                                            'title' => 'OSS bucket名称。',
                                            'description' => 'OSS bucket名称。',
                                            'type' => 'string',
                                            'example' => 'oss_bucket_1',
                                        ],
                                        'EasyRecVersion' => [
                                            'title' => 'EasyRec版本。',
                                            'description' => 'EasyRec版本。',
                                            'type' => 'string',
                                            'example' => '1.3.60',
                                        ],
                                        'EasyRecPackagePath' => [
                                            'title' => 'EasyRec包路径。',
                                            'description' => 'EasyRec包路径。',
                                            'type' => 'string',
                                            'example' => 'oss://*******',
                                        ],
                                        'FgJarVersion' => [
                                            'title' => 'fg_jar版本。',
                                            'description' => 'fg_jar版本。',
                                            'type' => 'string',
                                            'example' => '1.0.0',
                                        ],
                                        'FeaturePriority' => [
                                            'title' => '特征优先级，多个特征通过逗号分开。',
                                            'description' => '特征优先级，多个特征通过半角逗号（,）分开，表示哪些特征优先从user表读取，若user表为空，则从行为表查询。',
                                            'type' => 'string',
                                            'example' => 'feature1,feature2,feature3',
                                        ],
                                        'FeatureDisplayExclude' => [
                                            'title' => '特征展示过滤，多个特征通过逗号分开。',
                                            'description' => '特征展示过滤，多个特征通过半角逗号（,）分开。',
                                            'type' => 'string',
                                            'example' => 'feature1,feature2',
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
                                        'UseFeatureStore' => [
                                            'description' => '是否使用feature store，取值：'."\n"
                                                ."\n"
                                                .'- true：使用，此时返回FeatureStoreProjectId、FeatureStoreProjectName、FeatureStoreModelId、FeatureStoreUserId、FeatureStoreItemId。'."\n"
                                                .'- false：不使用，此时返回UserTable、UserIdField、UserTablePartitionField、UserTablePartitionFieldFormat、ItemTable、ItemIdField、ItemTablePartitionField、ItemTablePartitionFieldFormat。',
                                            'type' => 'string',
                                            'example' => 'true',
                                        ],
                                        'FeatureStoreProjectName' => [
                                            'description' => 'feature store项目名称。',
                                            'type' => 'string',
                                            'example' => 'project-1',
                                        ],
                                        'FeatureStoreModelId' => [
                                            'description' => 'feature store model ID。',
                                            'type' => 'string',
                                            'example' => '2'."\n",
                                        ],
                                        'FeatureStoreUserId' => [
                                            'description' => 'feature store user侧主键。',
                                            'type' => 'string',
                                            'example' => 'user',
                                        ],
                                        'FeatureStoreItemId' => [
                                            'description' => 'feature store item侧主键。',
                                            'type' => 'string',
                                            'example' => 'item',
                                        ],
                                        'FeatureStoreSeqFeatureView' => [
                                            'description' => '序列特征中item特征所在的特征视图的名字。',
                                            'type' => 'string',
                                            'example' => 'item-1',
                                        ],
                                        'FeatureStoreProjectId' => [
                                            'description' => 'feature store项目ID。',
                                            'type' => 'string',
                                            'example' => 'prj-01',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FCF741D8-9C30-578E-807F-B935487DB34A\\",\\n  \\"TotalCount\\": 10,\\n  \\"FeatureConsistencyCheckConfigs\\": [\\n    {\\n      \\"FeatureConsistencyCheckJobConfigId\\": \\"3\\",\\n      \\"Name\\": \\"feature_consistency_check1\\",\\n      \\"SceneId\\": \\"3\\",\\n      \\"SceneName\\": \\"scene1\\",\\n      \\"Status\\": \\"Editable\\",\\n      \\"CompareFeature\\": true,\\n      \\"LatestJobId\\": \\"3\\",\\n      \\"LatestJobGmtSamplingStartTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"LatestJobGmtSamplingEndTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"SampleRate\\": \\"0.89\\",\\n      \\"FeatureLandingResourceId\\": \\"reso-********\\",\\n      \\"FeatureLandingResourceUri\\": \\"mc_project_1\\",\\n      \\"EasServiceName\\": \\"eas_service_1\\",\\n      \\"FgJsonFileName\\": \\"file.json\\",\\n      \\"UserTable\\": \\"user_table\\",\\n      \\"UserIdField\\": \\"user_id\\",\\n      \\"UserTablePartitionField\\": \\"ds\\",\\n      \\"UserTablePartitionFieldFormat\\": \\"yyyymmdd\\",\\n      \\"ItemTable\\": \\"item_table\\",\\n      \\"ItemIdField\\": \\"item_id\\",\\n      \\"ItemTablePartitionField\\": \\"ds\\",\\n      \\"ItemTablePartitionFieldFormat\\": \\"yyyymmdd\\",\\n      \\"GenerateZip\\": true,\\n      \\"ServiceId\\": \\"4\\",\\n      \\"ServiceName\\": \\"service1\\",\\n      \\"WorkflowName\\": \\"work_flow_1\\",\\n      \\"OssResourceId\\": \\"reso-********\\",\\n      \\"OssBucket\\": \\"oss_bucket_1\\",\\n      \\"EasyRecVersion\\": \\"1.3.60\\",\\n      \\"EasyRecPackagePath\\": \\"oss://*******\\",\\n      \\"FgJarVersion\\": \\"1.0.0\\",\\n      \\"FeaturePriority\\": \\"feature1,feature2,feature3\\",\\n      \\"FeatureDisplayExclude\\": \\"feature1,feature2\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"UseFeatureStore\\": \\"true\\",\\n      \\"FeatureStoreProjectName\\": \\"project-1\\",\\n      \\"FeatureStoreModelId\\": \\"2\\\\n\\",\\n      \\"FeatureStoreUserId\\": \\"user\\",\\n      \\"FeatureStoreItemId\\": \\"item\\",\\n      \\"FeatureStoreSeqFeatureView\\": \\"item-1\\",\\n      \\"FeatureStoreProjectId\\": \\"prj-01\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征一致性检查任务配置列表',
        ],
        'GetFeatureConsistencyCheckJobConfig' => [
            'summary' => '获取特征一致性检查任务配置详情。',
            'path' => '/api/v1/featureconsistencycheck/jobconfigs/{FeatureConsistencyCheckJobConfigId}',
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
                    'name' => 'FeatureConsistencyCheckJobConfigId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征一致性检查配置ID。',
                        'description' => '特征一致性检查配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID，可从接口ListInstances获取。',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-********',
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
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'Name' => [
                                'title' => '特征一致性检查配置名称。',
                                'description' => '特征一致性检查配置名称。',
                                'type' => 'string',
                                'example' => 'feature_consistency_check1',
                            ],
                            'SceneId' => [
                                'title' => '场景ID。',
                                'description' => '场景ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'SceneName' => [
                                'title' => '场景名称。',
                                'description' => '场景名称。',
                                'type' => 'string',
                                'example' => 'scene1',
                            ],
                            'Status' => [
                                'title' => '状态。'."\n"
                                    .'● Editable-可编辑的。'."\n"
                                    .'● Uneditable-不可编辑的。',
                                'description' => '状态。可能值为：'."\n"
                                    .'- Editable：可编辑的。'."\n"
                                    .'- Uneditable：不可编辑的。',
                                'type' => 'string',
                                'example' => 'Editable',
                            ],
                            'CompareFeature' => [
                                'title' => '是否开启特征比对。',
                                'description' => '是否开启特征比对。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LatestJobId' => [
                                'title' => '基于该配置最近一次创建的任务ID。',
                                'description' => '基于该配置最近一次创建的任务ID。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'LatestJobGmtSamplingStartTime' => [
                                'title' => '最近一次创建的任务的开始时间。',
                                'description' => '最近一次创建的任务的开始时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'LatestJobGmtSamplingEndTime' => [
                                'title' => '最近一次创建的任务的结束时间。',
                                'description' => '最近一次创建的任务的结束时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'SampleRate' => [
                                'title' => '采样比例（0-1）。',
                                'description' => '采样比例（0-1）。',
                                'type' => 'string',
                                'example' => '0.89',
                            ],
                            'FeatureLandingResourceId' => [
                                'title' => '数据回落数据源ID。',
                                'description' => '数据回落数据源ID。',
                                'type' => 'string',
                                'example' => 'reso-********',
                            ],
                            'FeatureLandingResourceUri' => [
                                'title' => '数据回落数据源地址。',
                                'description' => '数据回落数据源地址。',
                                'type' => 'string',
                                'example' => 'mc_project_1',
                            ],
                            'EasServiceName' => [
                                'title' => 'EAS服务名称。',
                                'description' => 'EAS服务名称。',
                                'type' => 'string',
                                'example' => 'eas_service_1',
                            ],
                            'FgJsonFileName' => [
                                'title' => 'fg_json文件名称。',
                                'description' => 'fg_json文件名称。',
                                'type' => 'string',
                                'example' => 'file.json',
                            ],
                            'UserTable' => [
                                'title' => 'user表名。',
                                'description' => 'user表名。',
                                'type' => 'string',
                                'example' => 'user_table',
                            ],
                            'UserIdField' => [
                                'title' => 'user_id字段名。',
                                'description' => 'user_id字段名。',
                                'type' => 'string',
                                'example' => 'user_id',
                            ],
                            'UserTablePartitionField' => [
                                'title' => 'user表分区字段。',
                                'description' => 'user表分区字段。',
                                'type' => 'string',
                                'example' => 'ds',
                            ],
                            'UserTablePartitionFieldFormat' => [
                                'title' => 'user表分区字段格式。'."\n"
                                    .'● yyyymmdd'."\n"
                                    .'● yyyy-mm-dd',
                                'description' => 'user表分区字段格式：'."\n"
                                    .'- yyyymmdd'."\n"
                                    .'- yyyy-mm-dd',
                                'type' => 'string',
                                'example' => 'yyyymmdd',
                            ],
                            'ItemTable' => [
                                'title' => 'item表名。',
                                'description' => 'item表名。',
                                'type' => 'string',
                                'example' => 'item_table',
                            ],
                            'ItemIdField' => [
                                'title' => 'item_id字段名。',
                                'description' => 'item_id字段名。',
                                'type' => 'string',
                                'example' => 'item_id',
                            ],
                            'ItemTablePartitionField' => [
                                'title' => 'item表分区字段。',
                                'description' => 'item表分区字段。',
                                'type' => 'string',
                                'example' => 'ds',
                            ],
                            'ItemTablePartitionFieldFormat' => [
                                'title' => 'item表分区字段格式。'."\n"
                                    .'● yyyymmdd'."\n"
                                    .'● yyyy-mm-dd',
                                'description' => 'item表分区字段格式：'."\n"
                                    .'- yyyymmdd'."\n"
                                    .'- yyyy-mm-dd',
                                'type' => 'string',
                                'example' => 'yyyymmdd',
                            ],
                            'GenerateZip' => [
                                'title' => '是否需要生成zip包。',
                                'description' => '是否需要生成zip包。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ServiceId' => [
                                'title' => '服务ID。',
                                'description' => '服务ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                            'ServiceName' => [
                                'title' => '服务名称。',
                                'description' => '服务名称。',
                                'type' => 'string',
                                'example' => 'service1',
                            ],
                            'WorkflowName' => [
                                'title' => '工作流名称。',
                                'description' => '工作流名称。',
                                'type' => 'string',
                                'example' => 'work_flow_1',
                            ],
                            'OssResourceId' => [
                                'title' => 'OSS数据源ID。',
                                'description' => 'OSS数据源ID。',
                                'type' => 'string',
                                'example' => 'reso-********',
                            ],
                            'OssBucket' => [
                                'title' => 'OSS bucket名称。',
                                'description' => 'OSS bucket名称。',
                                'type' => 'string',
                                'example' => 'oss_bucket_1',
                            ],
                            'EasyRecVersion' => [
                                'title' => 'EasyRec版本。',
                                'description' => 'EasyRec版本。',
                                'type' => 'string',
                                'example' => '1.3.60',
                            ],
                            'EasyRecPackagePath' => [
                                'title' => 'EasyRec包路径。',
                                'description' => 'EasyRec包路径。',
                                'type' => 'string',
                                'example' => 'oss://*******',
                            ],
                            'FgJarVersion' => [
                                'title' => 'fg_jar版本。',
                                'description' => 'fg_jar版本。',
                                'type' => 'string',
                                'example' => '1.0.0',
                            ],
                            'FeaturePriority' => [
                                'title' => '特征优先级，多个特征通过逗号分开。',
                                'description' => '特征优先级，多个特征通过半角逗号（,）分开。',
                                'type' => 'string',
                                'example' => 'feature1,feature2,feature3',
                            ],
                            'FeatureDisplayExclude' => [
                                'title' => '特征展示过滤，多个特征通过逗号分开。',
                                'description' => '特征展示过滤，多个特征通过半角逗号（,）分开。',
                                'type' => 'string',
                                'example' => 'feature1,feature2',
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
                            'UseFeatureStore' => [
                                'description' => '是否需要使用feature store，取值：'."\n"
                                    ."\n"
                                    .'- true：使用，此时返回FeatureStoreProjectId、FeatureStoreProjectName、FeatureStoreModelId、FeatureStoreUserId、FeatureStoreItemId。'."\n"
                                    .'- false：不使用，此时UserTable、UserIdField、UserTablePartitionField、UserTablePartitionFieldFormat、ItemTable、ItemIdField、ItemTablePartitionField、ItemTablePartitionFieldFormat为必填项。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'FeatureStoreProjectName' => [
                                'description' => 'feature store项目名称。',
                                'type' => 'string',
                                'example' => 'project-1',
                            ],
                            'FeatureStoreModelId' => [
                                'description' => 'feature store model ID。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'FeatureStoreUserId' => [
                                'description' => 'feature store user侧主键。',
                                'type' => 'string',
                                'example' => 'user',
                            ],
                            'FeatureStoreItemId' => [
                                'description' => 'feature store item侧主键。',
                                'type' => 'string',
                                'example' => 'item',
                            ],
                            'FeatureStoreSeqFeatureView' => [
                                'description' => '序列特征中item特征所在的特征视图的名字。',
                                'type' => 'string',
                                'example' => 'item-1',
                            ],
                            'FeatureStoreProjectId' => [
                                'description' => 'feature store项目ID',
                                'type' => 'string',
                                'example' => 'prj-01',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"Name\\": \\"feature_consistency_check1\\",\\n  \\"SceneId\\": \\"3\\",\\n  \\"SceneName\\": \\"scene1\\",\\n  \\"Status\\": \\"Editable\\",\\n  \\"CompareFeature\\": true,\\n  \\"LatestJobId\\": \\"3\\",\\n  \\"LatestJobGmtSamplingStartTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"LatestJobGmtSamplingEndTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"SampleRate\\": \\"0.89\\",\\n  \\"FeatureLandingResourceId\\": \\"reso-********\\",\\n  \\"FeatureLandingResourceUri\\": \\"mc_project_1\\",\\n  \\"EasServiceName\\": \\"eas_service_1\\",\\n  \\"FgJsonFileName\\": \\"file.json\\",\\n  \\"UserTable\\": \\"user_table\\",\\n  \\"UserIdField\\": \\"user_id\\",\\n  \\"UserTablePartitionField\\": \\"ds\\",\\n  \\"UserTablePartitionFieldFormat\\": \\"yyyymmdd\\",\\n  \\"ItemTable\\": \\"item_table\\",\\n  \\"ItemIdField\\": \\"item_id\\",\\n  \\"ItemTablePartitionField\\": \\"ds\\",\\n  \\"ItemTablePartitionFieldFormat\\": \\"yyyymmdd\\",\\n  \\"GenerateZip\\": true,\\n  \\"ServiceId\\": \\"4\\",\\n  \\"ServiceName\\": \\"service1\\",\\n  \\"WorkflowName\\": \\"work_flow_1\\",\\n  \\"OssResourceId\\": \\"reso-********\\",\\n  \\"OssBucket\\": \\"oss_bucket_1\\",\\n  \\"EasyRecVersion\\": \\"1.3.60\\",\\n  \\"EasyRecPackagePath\\": \\"oss://*******\\",\\n  \\"FgJarVersion\\": \\"1.0.0\\",\\n  \\"FeaturePriority\\": \\"feature1,feature2,feature3\\",\\n  \\"FeatureDisplayExclude\\": \\"feature1,feature2\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"UseFeatureStore\\": true,\\n  \\"FeatureStoreProjectName\\": \\"project-1\\",\\n  \\"FeatureStoreModelId\\": \\"2\\",\\n  \\"FeatureStoreUserId\\": \\"user\\",\\n  \\"FeatureStoreItemId\\": \\"item\\",\\n  \\"FeatureStoreSeqFeatureView\\": \\"item-1\\",\\n  \\"FeatureStoreProjectId\\": \\"prj-01\\"\\n}","type":"json"}]',
            'title' => '获取特征一致性检查任务配置详情',
        ],
        'ListFeatureConsistencyCheckJobs' => [
            'summary' => '获取特征一致性检查任务列表。',
            'path' => '/api/v1/featureconsistencycheck/jobs',
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
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-********',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小。',
                        'description' => '页大小。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据。'."\n"
                            .'● GmtCreateTime-创建时间。'."\n"
                            .'● GmtModifiedTime-更新时间。',
                        'description' => '排序依据：'."\n"
                            .'- GmtCreateTime：按创建时间。'."\n"
                            .'- GmtModifiedTime：按更新时间。',
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
                        'description' => '排序方式：'."\n"
                            .'- ASC：升序。'."\n"
                            .'- DESC：降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务状态。'."\n"
                            .'● ToRun-待运行。'."\n"
                            .'● Running-运行中。'."\n"
                            .'● Success-成功。'."\n"
                            .'● Failure-失败。'."\n"
                            .'● Stopped-停止/已取消。',
                        'description' => '任务状态。取值如下：'."\n"
                            .'- ToRun：待运行。'."\n"
                            .'- Running：运行中。'."\n"
                            .'- Success：成功。'."\n"
                            .'- Failure：失败。'."\n"
                            .'- Stopped：停止或已取消。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
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
                                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
                            ],
                            'TotalCount' => [
                                'title' => '总个数。',
                                'description' => '总个数。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'FeatureConsistencyCheckJobs' => [
                                'title' => '特征一致性检查任务列表。',
                                'description' => '特征一致性检查任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FeatureConsistencyCheckJobId' => [
                                            'title' => '特征一致性检查任务ID。',
                                            'description' => '特征一致性检查任务ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'FeatureConsistencyCheckJobConfigId' => [
                                            'title' => '特征一致性检查配置ID。',
                                            'description' => '特征一致性检查配置ID。',
                                            'type' => 'string',
                                            'example' => '5',
                                        ],
                                        'FeatureConsistencyCheckJobConfigName' => [
                                            'title' => '特征一致性检查任务配置名称。',
                                            'description' => '特征一致性检查任务配置名称。',
                                            'type' => 'string',
                                            'example' => 'feature_consistency_check_1',
                                        ],
                                        'GmtStartTime' => [
                                            'title' => '开始时间。',
                                            'description' => '开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'GmtEndTime' => [
                                            'title' => '结束时间。',
                                            'description' => '结束时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-15T23:24:33.132+08:00',
                                        ],
                                        'Status' => [
                                            'title' => '任务状态。'."\n"
                                                .'● ToRun-待运行。'."\n"
                                                .'● Running-运行中。'."\n"
                                                .'● Success-成功。'."\n"
                                                .'● Failure-失败。'."\n"
                                                .'● Terminated-停止/已取消。',
                                            'description' => '任务状态。可能值为：'."\n"
                                                .'- ToRun：待运行。'."\n"
                                                .'- Running：运行中。'."\n"
                                                .'- Success：成功。'."\n"
                                                .'- Failure：失败。'."\n"
                                                .'- Stopped：停止或已取消。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'Config' => [
                                            'title' => '配置信息。',
                                            'description' => '配置信息。',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'Logs' => [
                                            'title' => '日志信息。',
                                            'description' => '日志信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '日志。',
                                                'type' => 'string',
                                                'example' => '2022/09/26 02:16:24 INFO: job status: Created',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\",\\n  \\"TotalCount\\": \\"10\\",\\n  \\"FeatureConsistencyCheckJobs\\": [\\n    {\\n      \\"FeatureConsistencyCheckJobId\\": \\"4\\",\\n      \\"FeatureConsistencyCheckJobConfigId\\": \\"5\\",\\n      \\"FeatureConsistencyCheckJobConfigName\\": \\"feature_consistency_check_1\\",\\n      \\"GmtStartTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtEndTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Config\\": \\"{}\\",\\n      \\"Logs\\": [\\n        \\"2022/09/26 02:16:24 INFO: job status: Created\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征一致性检查任务列表',
        ],
        'GetFeatureConsistencyCheckJob' => [
            'summary' => '获取特征一致性检查任务详情。',
            'path' => '/api/v1/featureconsistencycheck/jobs/{FeatureConsistencyCheckJobId}',
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
                    'name' => 'FeatureConsistencyCheckJobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征一致性检查任务ID。',
                        'description' => '特征一致性检查任务ID。如何获取任务ID，请参见[ListFeatureConsistencyCheckJobs](~~2557571~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-cn-********',
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
                                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
                            ],
                            'FeatureConsistencyCheckJobConfigId' => [
                                'title' => '特征一致性检查配置ID。',
                                'description' => '特征一致性检查配置ID。',
                                'type' => 'string',
                                'example' => '5',
                            ],
                            'FeatureConsistencyCheckJobConfigName' => [
                                'title' => '特征一致性检查任务配置名称。',
                                'description' => '特征一致性检查任务配置名称。',
                                'type' => 'string',
                                'example' => 'feature_consistency_check_1',
                            ],
                            'GmtStartTime' => [
                                'title' => '开始时间。',
                                'description' => '开始时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'GmtEndTime' => [
                                'title' => '结束时间。',
                                'description' => '结束时间。',
                                'type' => 'string',
                                'example' => '2021-12-15T23:24:33.132+08:00',
                            ],
                            'Status' => [
                                'title' => '任务状态。'."\n"
                                    .'● ToRun-待运行。'."\n"
                                    .'● Running-运行中。'."\n"
                                    .'● Success-成功。'."\n"
                                    .'● Failure-失败。'."\n"
                                    .'● Terminated-停止/已取消。',
                                'description' => '任务状态。可能值为：'."\n"
                                    .'- ToRun：待运行。'."\n"
                                    .'- Running：运行中。'."\n"
                                    .'- Success：成功。'."\n"
                                    .'- Failure：失败。'."\n"
                                    .'- Terminated：停止或已取消。',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'Config' => [
                                'title' => '配置信息。',
                                'description' => '配置信息。',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'Logs' => [
                                'title' => '日志信息。',
                                'description' => '日志信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志。',
                                    'type' => 'string',
                                    'example' => '2023-02-21 14:28:04 INFO: epoch [1][745/127291]tlr: 2.925e-05, eta: 2 days, 2:11:04, iter_time: 1.682, data_load_time: 0.997, memory: 12898, loss: 1.3768',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\",\\n  \\"FeatureConsistencyCheckJobConfigId\\": \\"5\\",\\n  \\"FeatureConsistencyCheckJobConfigName\\": \\"feature_consistency_check_1\\",\\n  \\"GmtStartTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtEndTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"Config\\": \\"{}\\",\\n  \\"Logs\\": [\\n    \\"2023-02-21 14:28:04 INFO: epoch [1][745/127291]tlr: 2.925e-05, eta: 2 days, 2:11:04, iter_time: 1.682, data_load_time: 0.997, memory: 12898, loss: 1.3768\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取特征一致性检查任务详情',
        ],
        'ListFeatureConsistencyCheckJobFeatureReports' => [
            'summary' => '获取特征一致性检查任务的特征报表。',
            'path' => '/api/v1/featureconsistencycheck/jobs/{FeatureConsistencyCheckJobId}/featurereports',
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
                    'name' => 'FeatureConsistencyCheckJobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征一致性检查任务ID。',
                        'description' => '特征一致性检查任务ID。如何获取任务ID，请参见[ListFeatureConsistencyCheckJobs](~~2557571~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pairec-cn-********',
                    ],
                ],
                [
                    'name' => 'LogUserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '特征比对时的UserId。',
                        'description' => '特征比对时的UserId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1010',
                    ],
                ],
                [
                    'name' => 'LogItemId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '特征比对时的ItemId。',
                        'description' => '特征比对时的ItemId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '9010',
                    ],
                ],
                [
                    'name' => 'LogRequestId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '特征比对时的RequestId。',
                        'description' => '特征比对时的RequestId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
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
                                'example' => 'BBD41FBF-E75C-551A-92FA-CAD654AA006F',
                            ],
                            'ReportsOfFeatureDiff' => [
                                'title' => '特征比对报表。',
                                'description' => '特征比对报表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '',
                                    'description' => '',
                                    'type' => 'object',
                                    'properties' => [
                                        'LogUserId' => [
                                            'title' => '用户ID。',
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => '1010',
                                        ],
                                        'LogItemId' => [
                                            'title' => '物品ID。',
                                            'description' => '物品ID。',
                                            'type' => 'string',
                                            'example' => '9010',
                                        ],
                                        'LogRequestId' => [
                                            'title' => '请求ID。',
                                            'description' => '请求ID。',
                                            'type' => 'string',
                                            'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
                                        ],
                                        'FeatureName' => [
                                            'title' => '特征名称。',
                                            'description' => '特征名称。',
                                            'type' => 'string',
                                            'example' => 'gender',
                                        ],
                                        'OfflineValue' => [
                                            'title' => '离线值。',
                                            'description' => '离线值。',
                                            'type' => 'string',
                                            'example' => 'male',
                                        ],
                                        'OnlineValue' => [
                                            'title' => '在线值。',
                                            'description' => '在线值。',
                                            'type' => 'string',
                                            'example' => 'male',
                                        ],
                                    ],
                                ],
                            ],
                            'DataPath' => [
                                'description' => '数据路径。',
                                'type' => 'string',
                                'example' => 'https://********',
                            ],
                            'OssPath' => [
                                'description' => 'OSS路径。',
                                'type' => 'string',
                                'example' => 'oss://********',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BBD41FBF-E75C-551A-92FA-CAD654AA006F\\",\\n  \\"ReportsOfFeatureDiff\\": [\\n    {\\n      \\"LogUserId\\": \\"1010\\",\\n      \\"LogItemId\\": \\"9010\\",\\n      \\"LogRequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\",\\n      \\"FeatureName\\": \\"gender\\",\\n      \\"OfflineValue\\": \\"male\\",\\n      \\"OnlineValue\\": \\"male\\"\\n    }\\n  ],\\n  \\"DataPath\\": \\"https://********\\",\\n  \\"OssPath\\": \\"oss://********\\"\\n}","type":"json"}]',
            'title' => '获取特征一致性检查任务的特征报表',
        ],
        'ListFeatureConsistencyCheckJobScoreReports' => [
            'summary' => '获取特征一致性检查任务分数报表。',
            'path' => '/api/v1/featureconsistencycheck/jobs/{FeatureConsistencyCheckJobId}/scorereports',
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
                    'name' => 'FeatureConsistencyCheckJobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征一致性检查任务报表ID。',
                        'description' => '特征一致性检查任务报表ID。特征一致性检查任务ID。如何获取任务ID，请参见[ListFeatureConsistencyCheckJobs](~~2557561~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pairec-cn-********',
                    ],
                ],
                [
                    'name' => 'ExcludeRequestIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '特征比对时排除的RequestId。',
                        'description' => '特征比对时排除的RequestId列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '请求ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
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
                                'example' => 'F0AB6527-093F-5C44-B3BD-42C8C210C619',
                            ],
                            'ReportsOfScoreDiff' => [
                                'title' => '分数比对报表。',
                                'description' => '分数比对报表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LogUserId' => [
                                            'title' => '用户ID。',
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'LogItemId' => [
                                            'title' => '物品ID。',
                                            'description' => '物品ID。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'LogRequestId' => [
                                            'title' => '请求ID。',
                                            'description' => '请求ID。',
                                            'type' => 'string',
                                            'example' => '323',
                                        ],
                                        'ScoreDiff' => [
                                            'title' => '分数差值。',
                                            'description' => '分数差值。',
                                            'type' => 'string',
                                            'example' => '0.00000234',
                                        ],
                                        'ScoreDiffDetail' => [
                                            'title' => '分数比对详细。',
                                            'description' => '分数比对详细。',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                    ],
                                ],
                            ],
                            'DataPath' => [
                                'title' => '数据路径。',
                                'description' => '数据路径。',
                                'type' => 'string',
                                'example' => 'http://*******',
                            ],
                            'OssPath' => [
                                'title' => 'oss路径。',
                                'description' => 'oss路径。',
                                'type' => 'string',
                                'example' => 'oss://********',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F0AB6527-093F-5C44-B3BD-42C8C210C619\\",\\n  \\"ReportsOfScoreDiff\\": [\\n    {\\n      \\"LogUserId\\": \\"3\\",\\n      \\"LogItemId\\": \\"4\\",\\n      \\"LogRequestId\\": \\"323\\",\\n      \\"ScoreDiff\\": \\"0.00000234\\",\\n      \\"ScoreDiffDetail\\": \\"{}\\"\\n    }\\n  ],\\n  \\"DataPath\\": \\"http://*******\\",\\n  \\"OssPath\\": \\"oss://********\\"\\n}","type":"json"}]',
            'title' => '获取特征一致性检查任务分数报表',
        ],
        'CloneFeatureConsistencyCheckJobConfig' => [
            'summary' => '克隆特征一致性检查任务配置。',
            'path' => '/api/v1/featureconsistencycheck/jobconfigs/{SourceFeatureConsistencyCheckJobConfigId}/action/clone',
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
                    'name' => 'SourceFeatureConsistencyCheckJobConfigId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征一致性检查配置ID。',
                        'description' => '特征一致性检查配置ID。如何获取配置ID，请参见。[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
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
                            'InstanceId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-********',
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
                                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
                            ],
                            'FeatureConsistencyCheckId' => [
                                'title' => '克隆后新的特征一致性检查配置ID。',
                                'description' => '克隆后新的特征一致性检查配置ID。',
                                'type' => 'string',
                                'example' => '4',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\",\\n  \\"FeatureConsistencyCheckId\\": \\"4\\"\\n}","type":"json"}]',
            'title' => '克隆特征一致性检查任务配置',
        ],
        'TerminateFeatureConsistencyCheckJob' => [
            'summary' => '取消指定特征一致性检查正在运行中的任务。',
            'path' => '/api/v1/featureconsistencycheck/jobs/{FeatureConsistencyCheckJobId}/action/terminate',
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
                    'name' => 'FeatureConsistencyCheckJobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '特征一致性检查任务ID。',
                        'description' => '特征一致性检查任务ID。如何获取任务ID，请参见[ListFeatureConsistencyCheckJobs](~~2557571~~)。',
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
                            'InstanceId' => [
                                'title' => '实例ID，可从接口ListInstances获取。',
                                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-********',
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
                                'example' => 'A6C01890-54CA-5C49-BC91-AD85A98E4A98',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A6C01890-54CA-5C49-BC91-AD85A98E4A98\\"\\n}","type":"json"}]',
            'title' => '取消指定特征一致性检查正在运行中的任务',
        ],
        'BackflowFeatureConsistencyCheckJobData' => [
            'summary' => '对指定特征一致性检查任务配置下，最近一次创建的任务进行数据回流。',
            'path' => '/api/v1/featureconsistencycheck/jobs/action/backflowdata',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'FeatureConsistencyCheckJobConfigId' => [
                                'title' => '特征一致性检查任务配置ID，可从接口ListFeatureConsistencyCheckJobConfigs获取。',
                                'description' => '特征一致性检查任务配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '4',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID，可从接口ListInstances获取。',
                                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-********',
                            ],
                            'LogUserId' => [
                                'title' => '日志中用户ID。',
                                'description' => '日志中用户ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1010',
                            ],
                            'LogItemId' => [
                                'title' => '日志中物品ID。',
                                'description' => '日志中物品ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '9010',
                            ],
                            'LogRequestId' => [
                                'title' => '日志请求ID。',
                                'description' => '日志请求ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'SceneName' => [
                                'title' => '场景名称。',
                                'description' => '场景名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'video-feed',
                            ],
                            'Scores' => [
                                'title' => '分数。',
                                'description' => '分数。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '[\\"{\\\\\\"dbmtl_probs_is_valid_play\\\\\\":0.00032182207107543945,\\\\\\"dbmtl_y_play_time\\\\\\":0.0043269748210906982}\\"]',
                            ],
                            'UserFeatures' => [
                                'title' => '用户特征。',
                                'description' => '用户特征。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '{\\"userid\\":{\\"value\\":1010,\\"type\\":\\"string\\"},\\"click_5_seq\\":{\\"value\\":\\"9001;9002;9003;9004;9005\\",\\"type\\":\\"string\\"}}',
                            ],
                            'ItemFeatures' => [
                                'title' => '物品特征。',
                                'description' => '物品特征。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '[\\"{\\\\\\"itemid\\\\\\":{\\\\\\"value\\\\\\":1010,\\\\\\"type\\\\\\":\\\\\\"string\\\\\\"}}\\"]',
                            ],
                            'LogRequestTime' => [
                                'title' => '日志请求时间。',
                                'description' => '日志请求时间（UNIX纪元时间戳）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1693900981465',
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
                                'example' => 'BDB621CB-A81E-5D39-8793-39A365CBCC74',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDB621CB-A81E-5D39-8793-39A365CBCC74\\"\\n}","type":"json"}]',
            'title' => '特征一致性检查数据回流',
        ],
        'SyncFeatureConsistencyCheckJobReplayLog' => [
            'summary' => '同步特征一致性检查任务重放日志。',
            'path' => '/api/v1/featureconsistencycheck/jobs/action/syncreplaylog',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'FeatureConsistencyCheckJobConfigId' => [
                                'title' => '特征一致性检查任务配置ID，可从接口ListFeatureConsistencyCheckJobConfigs获取。',
                                'description' => '特征一致性检查任务配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '3',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID，可从接口ListInstances获取。',
                                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'pairec-cn-********',
                            ],
                            'LogUserId' => [
                                'title' => '日志中用户ID。',
                                'description' => '日志中用户ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1010',
                            ],
                            'LogItemId' => [
                                'title' => '日志中物品ID。',
                                'description' => '日志中物品ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '9010',
                            ],
                            'LogRequestId' => [
                                'title' => '日志中请求ID。',
                                'description' => '日志中请求ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
                            ],
                            'SceneName' => [
                                'title' => '场景名称。',
                                'description' => '场景名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'video-feed',
                            ],
                            'LogRequestTime' => [
                                'title' => '日志请求时间。',
                                'description' => '日志请求时间（UNIX纪元时间戳）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1693900981465',
                            ],
                            'GeneratedFeatures' => [
                                'title' => '生成特征。',
                                'description' => '生成特征。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'week_day:1 | userid:3 | itemid:9001 | cate:cat1 | click_5_seq__cate:cat1',
                            ],
                            'ContextFeatures' => [
                                'title' => '上下文特征。',
                                'description' => '上下文特征。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '[{\\"Value\\":{\\"FloatFeature\\":0.1}}]',
                            ],
                            'RawFeatures' => [
                                'title' => '原始特征。',
                                'description' => '原始特征。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'author__kv_city_expr_cnt_15d：北京市 | tem__min_age_15d:28',
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
                                'example' => 'C7D0B48F-0105-52B9-B60A-FA7606E2234D',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C7D0B48F-0105-52B9-B60A-FA7606E2234D\\"\\n}","type":"json"}]',
            'title' => '同步特征一致性检查任务重放日志',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'pairecservice.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'pairecservice.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'pairecservice.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'pairecservice.cn-shenzhen.aliyuncs.com',
        ],
    ],
];
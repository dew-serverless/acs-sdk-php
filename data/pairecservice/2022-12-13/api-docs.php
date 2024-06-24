<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'PaiRecService',
    'version' => '2022-12-13',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 183827,
      'title' => '实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListInstances',
        1 => 'GetInstance',
      ),
    ),
    1 => 
    array (
      'id' => 188034,
      'title' => '数据资源管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CheckInstanceResources',
        1 => 'UpdateInstanceResource',
        2 => 'GetInstanceResourceTable',
        3 => 'ListInstanceResources',
        4 => 'GetInstanceResource',
        5 => 'DeleteInstanceResource',
        6 => 'CreateInstanceResource',
      ),
    ),
    2 => 
    array (
      'id' => 187974,
      'title' => '数据表管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateTableMeta',
        1 => 'ListTableMetas',
        2 => 'GetTableMeta',
        3 => 'DeleteTableMeta',
        4 => 'CreateTableMeta',
      ),
    ),
    3 => 
    array (
      'id' => 183688,
      'title' => '场景管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateScene',
        1 => 'DeleteScene',
        2 => 'UpdateScene',
        3 => 'ListScenes',
        4 => 'GetScene',
      ),
    ),
    4 => 
    array (
      'id' => 183822,
      'title' => '参数管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateParam',
        1 => 'DeleteParam',
        2 => 'UpdateParam',
        3 => 'ListParams',
      ),
    ),
    5 => 
    array (
      'id' => 183834,
      'title' => '人群管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCrowd',
        1 => 'CreateSubCrowd',
        2 => 'DeleteCrowd',
        3 => 'DeleteSubCrowd',
        4 => 'UpdateCrowd',
        5 => 'ListCrowds',
        6 => 'ListCrowdUsers',
        7 => 'ListSubCrowds',
        8 => 'GetSubCrowd',
      ),
    ),
    6 => 
    array (
      'id' => 183857,
      'title' => '实验室管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLaboratory',
        1 => 'DeleteLaboratory',
        2 => 'UpdateLaboratory',
        3 => 'ListLaboratories',
        4 => 'GetLaboratory',
        5 => 'OnlineLaboratory',
        6 => 'OfflineLaboratory',
        7 => 'CloneLaboratory',
      ),
    ),
    7 => 
    array (
      'id' => 183850,
      'title' => '层管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLayer',
        1 => 'DeleteLayer',
        2 => 'UpdateLayer',
        3 => 'ListLayers',
        4 => 'GetLayer',
      ),
    ),
    8 => 
    array (
      'id' => 183866,
      'title' => '实验组管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateExperimentGroup',
        1 => 'DeleteExperimentGroup',
        2 => 'UpdateExperimentGroup',
        3 => 'ListExperimentGroups',
        4 => 'GetExperimentGroup',
        5 => 'CloneExperimentGroup',
        6 => 'OnlineExperimentGroup',
        7 => 'OfflineExperimentGroup',
      ),
    ),
    9 => 
    array (
      'id' => 183812,
      'title' => '实验管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateExperiment',
        1 => 'DeleteExperiment',
        2 => 'UpdateExperiment',
        3 => 'GetExperiment',
        4 => 'ListExperiments',
        5 => 'CloneExperiment',
        6 => 'OfflineExperiment',
        7 => 'PushAllExperiment',
        8 => 'OnlineExperiment',
      ),
    ),
    10 => 
    array (
      'id' => 188051,
      'title' => 'AB指标管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateABMetric',
        1 => 'CreateABMetric',
        2 => 'ListABMetrics',
        3 => 'GetABMetric',
        4 => 'DeleteABMetric',
      ),
    ),
    11 => 
    array (
      'id' => 188045,
      'title' => 'AB指标组管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ReportABMetricGroup',
        1 => 'UpdateABMetricGroup',
        2 => 'CreateABMetricGroup',
        3 => 'ListABMetricGroups',
        4 => 'GetABMetricGroup',
        5 => 'DeleteABMetricGroup',
      ),
    ),
    12 => 
    array (
      'id' => 188041,
      'title' => '计算任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListCalculationJobs',
        1 => 'GetCalculationJob',
        2 => 'CreateCalculationJobs',
      ),
    ),
    13 => 
    array (
      'id' => 185916,
      'title' => '特征一致性检查任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFeatureConsistencyCheckJobConfig',
        1 => 'CreateFeatureConsistencyCheckJob',
        2 => 'UpdateFeatureConsistencyCheckJobConfig',
        3 => 'ListFeatureConsistencyCheckJobConfigs',
        4 => 'GetFeatureConsistencyCheckJobConfig',
        5 => 'ListFeatureConsistencyCheckJobs',
        6 => 'GetFeatureConsistencyCheckJob',
        7 => 'ListFeatureConsistencyCheckJobFeatureReports',
        8 => 'ListFeatureConsistencyCheckJobScoreReports',
        9 => 'CloneFeatureConsistencyCheckJobConfig',
        10 => 'TerminateFeatureConsistencyCheckJob',
        11 => 'BackflowFeatureConsistencyCheckJobData',
        12 => 'SyncFeatureConsistencyCheckJobReplayLog',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'ListInstances' => 
    array (
      'summary' => '获取PAIRec实例的列表。',
      'path' => '/api/v1/instances',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例Id模糊匹配过滤。',
            'description' => '实例ID模糊匹配过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-test1',
          ),
        ),
        1 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序依据。',
            'description' => '排序依据。',
            'type' => 'string',
            'required' => false,
            'example' => 'Type',
          ),
        ),
        2 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式。',
            'description' => '排序方式。',
            'type' => 'string',
            'required' => false,
            'example' => 'Desc',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小。',
            'description' => '页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码。',
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例类型。
● basic-基础版
● highleve-升级版
● advance-进阶版
● standard-标准版',
            'description' => '实例类型。
- basic-基础版
- highleve-升级版
- advance-进阶版
- standard-标准版',
            'type' => 'string',
            'required' => false,
            'example' => 'basic',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BDB621CB-A81E-5D39-8793-39A365CBCC74',
              ),
              'Instances' => 
              array (
                'description' => '实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'title' => '实例id。',
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'pairec-test1',
                    ),
                    'Type' => 
                    array (
                      'title' => '实例类型。
● basic-基础版
● highleve-升级版
● advance-进阶版
● standard-标准版',
                      'description' => '实例类型。
- basic-基础版
- highleve-升级版
- advance-进阶版
- standard-标准版',
                      'type' => 'string',
                      'example' => 'basic',
                    ),
                    'Status' => 
                    array (
                      'title' => '实例状态。
● Initializing-初始化中
● Stopped-停止服务
● Running-运行中',
                      'description' => '实例状态。
- Initializing-初始化中
- Stopped-停止服务
- Running-运行中',
                      'type' => 'string',
                      'example' => 'Initializing',
                    ),
                    'RegionId' => 
                    array (
                      'title' => '区域ID。
● cn-shenzhen - 深圳
● cn-hangzhou - 杭州
● cn-beijing - 北京
● cn-shanghai - 上海',
                      'description' => '区域ID。
- cn-shenzhen-深圳
- cn-hangzhou- 杭州
- cn-beijing - 北京
- cn-shanghai- 上海',
                      'type' => 'string',
                      'example' => 'cn-shenzhen',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '实例创建时间。',
                      'description' => '实例创建时间。',
                      'type' => 'string',
                      'example' => '2022-10-13 17:34:52.0',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'title' => '实例更新时间。',
                      'description' => '实例更新时间。',
                      'type' => 'string',
                      'example' => '2022-11-05 09:02:30.0',
                    ),
                    'ExpiredTime' => 
                    array (
                      'title' => '实例过期时间。',
                      'description' => '实例过期时间。',
                      'type' => 'string',
                      'example' => '2022-12-14 00:00:00.0',
                    ),
                    'CommodityCode' => 
                    array (
                      'title' => '实例所属的商品code。',
                      'description' => '实例所属的商品code。',
                      'type' => 'string',
                      'example' => 'airec_developers_public_cn',
                    ),
                    'ChargeType' => 
                    array (
                      'title' => '实例的付费类型，目前仅支持Subscription（预付费）。',
                      'description' => '实例的付费类型，目前仅支持Subscription（预付费）。',
                      'type' => 'string',
                      'example' => 'Subscription',
                    ),
                    'Config' => 
                    array (
                      'title' => '实例配置。',
                      'description' => '实例配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Engines' => 
                        array (
                          'title' => '服务引擎列表。',
                          'description' => '服务引擎列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ComponentCode' => 
                              array (
                                'title' => '组件代码。',
                                'description' => '组件代码。',
                                'type' => 'string',
                                'example' => 'feature',
                              ),
                              'Type' => 
                              array (
                                'title' => '组件类型。',
                                'description' => '组件类型。',
                                'type' => 'string',
                                'example' => 'Hologres',
                              ),
                              'Meta' => 
                              array (
                                'title' => '元数据。',
                                'description' => '元数据。',
                                'type' => 'object',
                              ),
                            ),
                          ),
                        ),
                        'Monitors' => 
                        array (
                          'title' => '配套功能列表。',
                          'description' => '配套功能列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ComponentCode' => 
                              array (
                                'title' => '组件代码。',
                                'description' => '组件代码。',
                                'type' => 'string',
                                'example' => 'featuresets',
                              ),
                              'Type' => 
                              array (
                                'title' => '组件类型。',
                                'description' => '组件类型。',
                                'type' => 'string',
                                'example' => 'Platform',
                              ),
                              'Meta' => 
                              array (
                                'title' => '元数据。',
                                'description' => '元数据。',
                                'type' => 'object',
                              ),
                            ),
                          ),
                        ),
                        'DataManagements' => 
                        array (
                          'title' => '建模环境列表。',
                          'description' => '建模环境列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ComponentCode' => 
                              array (
                                'title' => '组件代码。',
                                'description' => '组件代码。',
                                'type' => 'string',
                                'example' => 'storage',
                              ),
                              'Type' => 
                              array (
                                'title' => '组件类型。',
                                'description' => '组件类型。',
                                'type' => 'string',
                                'example' => 'OSS',
                              ),
                              'Meta' => 
                              array (
                                'title' => '元数据。',
                                'description' => '元数据。',
                                'type' => 'object',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '列表内元素总数。',
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDB621CB-A81E-5D39-8793-39A365CBCC74\\",\\n  \\"Instances\\": [\\n    {\\n      \\"InstanceId\\": \\"pairec-test1\\",\\n      \\"Type\\": \\"basic\\",\\n      \\"Status\\": \\"Initializing\\",\\n      \\"RegionId\\": \\"cn-shenzhen\\",\\n      \\"GmtCreateTime\\": \\"2022-10-13 17:34:52.0\\",\\n      \\"GmtModifiedTime\\": \\"2022-11-05 09:02:30.0\\",\\n      \\"ExpiredTime\\": \\"2022-12-14 00:00:00.0\\",\\n      \\"CommodityCode\\": \\"airec_developers_public_cn\\",\\n      \\"ChargeType\\": \\"Subscription\\",\\n      \\"Config\\": {\\n        \\"Engines\\": [\\n          {\\n            \\"ComponentCode\\": \\"feature\\",\\n            \\"Type\\": \\"Hologres\\",\\n            \\"Meta\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          }\\n        ],\\n        \\"Monitors\\": [\\n          {\\n            \\"ComponentCode\\": \\"featuresets\\",\\n            \\"Type\\": \\"Platform\\",\\n            \\"Meta\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          }\\n        ],\\n        \\"DataManagements\\": [\\n          {\\n            \\"ComponentCode\\": \\"storage\\",\\n            \\"Type\\": \\"OSS\\",\\n            \\"Meta\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 7\\n}","type":"json"}]',
      'title' => '获取实例列表',
    ),
    'GetInstance' => 
    array (
      'summary' => '获取指定PAIRec实例的详细信息。',
      'path' => '/api/v1/instances/{InstanceId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
              'InstanceId' => 
              array (
                'title' => '实例id。',
                'description' => '实例id。',
                'type' => 'string',
                'example' => 'pairec-test1',
              ),
              'Type' => 
              array (
                'title' => '实例类型。
● basic-基础版
● highleve-升级版
● advance-进阶版
● standard-标准版',
                'description' => '实例类型。
● basic-基础版
● highleve-升级版
● advance-进阶版
● standard-标准版',
                'type' => 'string',
                'example' => 'basic',
              ),
              'Status' => 
              array (
                'title' => '实例状态。
● Initializing-初始化中
● Stopped-停止服务
● Running-运行中',
                'description' => '实例状态。
● Initializing-初始化中
● Stopped-停止服务
● Running-运行中',
                'type' => 'string',
                'example' => 'Initializing',
              ),
              'RegionId' => 
              array (
                'title' => '区域ID。
● cn-shenzhen - 深圳
● cn-hangzhou - 杭州
● cn-beijing - 北京
● cn-shanghai - 上海',
                'description' => '区域ID。
● cn-shenzhen - 深圳
● cn-hangzhou - 杭州
● cn-beijing - 北京
● cn-shanghai - 上海',
                'type' => 'string',
                'example' => 'cn-shenzhen',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '实例创建时间。',
                'description' => '实例创建时间。',
                'type' => 'string',
                'example' => '2022-10-13 17:34:52.0',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '实例更新时间。',
                'description' => '实例更新时间。',
                'type' => 'string',
                'example' => '2022-11-05 09:02:30.0',
              ),
              'ExpiredTime' => 
              array (
                'title' => '实例过期时间。',
                'description' => '实例过期时间。',
                'type' => 'string',
                'example' => '2022-12-14 00:00:00.0',
              ),
              'CommodityCode' => 
              array (
                'title' => '实例所属的商品code。',
                'description' => '实例所属的商品code。',
                'type' => 'string',
                'example' => 'airec_developers_public_cn',
              ),
              'ChargeType' => 
              array (
                'title' => '实例的付费类型，目前仅支持Subscription（预付费）。',
                'description' => '实例的付费类型，目前仅支持Subscription（预付费）。',
                'type' => 'string',
                'example' => 'Subscription',
              ),
              'Config' => 
              array (
                'title' => '实例配置。',
                'description' => '实例配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Engines' => 
                  array (
                    'title' => '服务引擎列表。',
                    'description' => '服务引擎列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ComponentCode' => 
                        array (
                          'title' => '组件代码。',
                          'description' => '组件代码。',
                          'type' => 'string',
                          'example' => 'feature',
                        ),
                        'Type' => 
                        array (
                          'title' => '组件类型。',
                          'description' => '组件类型。',
                          'type' => 'string',
                          'example' => 'Hologres',
                        ),
                        'Meta' => 
                        array (
                          'title' => '元数据。',
                          'description' => '元数据。',
                          'type' => 'object',
                        ),
                      ),
                    ),
                  ),
                  'Monitors' => 
                  array (
                    'title' => '配套功能列表。',
                    'description' => '配套功能列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ComponentCode' => 
                        array (
                          'title' => '组件代码。',
                          'description' => '组件代码。',
                          'type' => 'string',
                          'example' => 'featuresets',
                        ),
                        'Type' => 
                        array (
                          'title' => '组件类型。',
                          'description' => '组件类型。',
                          'type' => 'string',
                          'example' => 'Platform',
                        ),
                        'Meta' => 
                        array (
                          'title' => '元数据。',
                          'description' => '元数据。',
                          'type' => 'object',
                        ),
                      ),
                    ),
                  ),
                  'DataManagements' => 
                  array (
                    'title' => '建模环境列表。',
                    'description' => '建模环境列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ComponentCode' => 
                        array (
                          'title' => '组件代码。',
                          'description' => '组件代码。',
                          'type' => 'string',
                          'example' => 'storage',
                        ),
                        'Type' => 
                        array (
                          'title' => '组件类型。',
                          'description' => '组件类型。',
                          'type' => 'string',
                          'example' => 'OSS',
                        ),
                        'Meta' => 
                        array (
                          'title' => '元数据。',
                          'description' => '元数据。',
                          'type' => 'object',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"InstanceId\\": \\"pairec-test1\\",\\n  \\"Type\\": \\"basic\\",\\n  \\"Status\\": \\"Initializing\\",\\n  \\"RegionId\\": \\"cn-shenzhen\\",\\n  \\"GmtCreateTime\\": \\"2022-10-13 17:34:52.0\\",\\n  \\"GmtModifiedTime\\": \\"2022-11-05 09:02:30.0\\",\\n  \\"ExpiredTime\\": \\"2022-12-14 00:00:00.0\\",\\n  \\"CommodityCode\\": \\"airec_developers_public_cn\\",\\n  \\"ChargeType\\": \\"Subscription\\",\\n  \\"Config\\": {\\n    \\"Engines\\": [\\n      {\\n        \\"ComponentCode\\": \\"feature\\",\\n        \\"Type\\": \\"Hologres\\",\\n        \\"Meta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ],\\n    \\"Monitors\\": [\\n      {\\n        \\"ComponentCode\\": \\"featuresets\\",\\n        \\"Type\\": \\"Platform\\",\\n        \\"Meta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ],\\n    \\"DataManagements\\": [\\n      {\\n        \\"ComponentCode\\": \\"storage\\",\\n        \\"Type\\": \\"OSS\\",\\n        \\"Meta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取实例详细信息',
    ),
    'CheckInstanceResources' => 
    array (
      'summary' => '检测实例下配置的资源的连接状态。',
      'path' => '/api/v1/instances/{InstanceId}/action/checkresources',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '资源类型。

- Hologres

- EAS

- BE

- Rec

- Platform

- SLS

- DataHub

- Kafka

- Flinkvvp

- ACR

- OSS

- DataWorks

- PAI

- MaxCompute

- GraphCompute

- Redis',
                'type' => 'string',
                'required' => true,
                'example' => 'OSS',
              ),
              'Uri' => 
              array (
                'description' => '资源地址。',
                'type' => 'string',
                'required' => false,
                'example' => 'bucket-test-123',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9763624B-5FBB-5E3A-9193-B1ADB554CEAE',
              ),
              'Resources' => 
              array (
                'description' => '资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '资源类型

- Hologres

- EAS

- BE

- Rec

- Platform

- SLS

- DataHub

- Kafka

- Flinkvvp

- ACR

- OSS

- DataWorks

- PAI

- MaxCompute

- GraphCompute

- Redis',
                      'type' => 'string',
                      'example' => 'OSS',
                    ),
                    'Uri' => 
                    array (
                      'description' => '资源地址。',
                      'type' => 'string',
                      'example' => 'bucket-test-123',
                    ),
                    'Status' => 
                    array (
                      'description' => '访问状态

- Success

- Failure',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9763624B-5FBB-5E3A-9193-B1ADB554CEAE\\",\\n  \\"Resources\\": [\\n    {\\n      \\"Type\\": \\"OSS\\",\\n      \\"Uri\\": \\"bucket-test-123\\",\\n      \\"Status\\": \\"Success\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '检查资源状态',
    ),
    'UpdateInstanceResource' => 
    array (
      'summary' => '更新指定实例下指定资源的信息。',
      'path' => '/api/v1/instances/{InstanceId}/resources/{ResourceId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'reso-2s416t***',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'Uri' => 
              array (
                'description' => '资源地址。',
                'type' => 'string',
                'required' => false,
                'example' => 'bucket-test-123',
              ),
              'Config' => 
              array (
                'description' => '资源配置信息。',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3AAA45F6-0798-5461-9360-81D133823CE7',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3AAA45F6-0798-5461-9360-81D133823CE7\\"\\n}","type":"json"}]',
      'title' => '更新资源信息',
    ),
    'GetInstanceResourceTable' => 
    array (
      'summary' => '获取数据源下数据表的列表。',
      'path' => '/api/v1/instances/{InstanceId}/resources/{ResourceId}/tables/{TableName}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'reso-2s416t***',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '表名称过滤。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_table',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
              ),
              'TableName' => 
              array (
                'description' => '表名。',
                'type' => 'string',
                'example' => 'test_table',
              ),
              'Fields' => 
              array (
                'description' => '表的字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字段信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '字段名称。',
                      'type' => 'string',
                      'example' => 'age',
                    ),
                    'Type' => 
                    array (
                      'description' => '字段类型。',
                      'type' => 'string',
                      'example' => 'BIGINT',
                    ),
                    'Meaning' => 
                    array (
                      'description' => '字段含义。',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'IsDimensionField' => 
                    array (
                      'description' => '是否是维度字段。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'IsPartitionField' => 
                    array (
                      'description' => '是否为分区字段。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\",\\n  \\"TableName\\": \\"test_table\\",\\n  \\"Fields\\": [\\n    {\\n      \\"Name\\": \\"age\\",\\n      \\"Type\\": \\"BIGINT\\",\\n      \\"Meaning\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"IsDimensionField\\": false,\\n      \\"IsPartitionField\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取资源下表信息',
    ),
    'ListInstanceResources' => 
    array (
      'summary' => '获取实例下配置的资源列表。',
      'path' => '/api/v1/instances/{InstanceId}/resources',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
        1 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类别

- DataManagement

- Engine

- Monitor',
            'type' => 'string',
            'required' => false,
            'example' => 'DataManagement',
          ),
        ),
        2 => 
        array (
          'name' => 'Group',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源分组。

当资源类别为DataManagement时，资源分组有：

- storage

- modelpipeline

- datastorage

- modeltrain

当资源类别为Engine时，资源分组有：

- feature

- predict

- recall

- recengine

当资源类别为Monitor时，资源分组有：

- logs

- logsback

- coldstart

- deploy',
            'type' => 'string',
            'required' => false,
            'example' => 'storage',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型过滤。

- Hologres

- EAS

- BE

- Rec

- Platform

- SLS

- DataHub

- Kafka

- Flinkvvp

- ACR

- OSS

- DataWorks

- PAI

- MaxCompute

- GraphCompute

- Redis',
            'type' => 'string',
            'required' => false,
            'example' => 'OSS',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9763624B-5FBB-5E3A-9193-B1ADB554CEAE',
              ),
              'TotalCount' => 
              array (
                'description' => '总个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Resources' => 
              array (
                'description' => '资源对象的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'reso-2s416t***
',
                    ),
                    'Category' => 
                    array (
                      'description' => '资源类别

- DataManagement

- Engine

- Monitor',
                      'type' => 'string',
                      'example' => 'DataManagement',
                    ),
                    'Group' => 
                    array (
                      'description' => '资源分组。

当资源类别为DataManagement时，资源分组有：

- storage

- modelpipeline

- datastorage

- modeltrain

当资源类别为Engine时，资源分组有：

- feature

- predict

- recall

- recengine

当资源类别为Monitor时，资源分组有：

- logs

- logsback

- coldstart

- deploy',
                      'type' => 'string',
                      'example' => 'storage',
                    ),
                    'Type' => 
                    array (
                      'description' => '资源类型

- Hologres

- EAS

- BE

- Rec

- Platform

- SLS

- DataHub

- Kafka

- Flinkvvp

- ACR

- OSS

- DataWorks

- PAI

- MaxCompute

- GraphCompute

- Redis',
                      'type' => 'string',
                      'example' => 'OSS',
                    ),
                    'Uri' => 
                    array (
                      'description' => '资源地址。',
                      'type' => 'string',
                      'example' => 'bucket-test-123',
                    ),
                    'Config' => 
                    array (
                      'description' => '资源的配置信息。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'GmtCreateAt' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-10-13 17:34:52
',
                    ),
                    'GmtModifiedAt' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2020-10-13 17:34:52
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9763624B-5FBB-5E3A-9193-B1ADB554CEAE\\",\\n  \\"TotalCount\\": 10,\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceId\\": \\"reso-2s416t***\\\\n\\",\\n      \\"Category\\": \\"DataManagement\\",\\n      \\"Group\\": \\"storage\\",\\n      \\"Type\\": \\"OSS\\",\\n      \\"Uri\\": \\"bucket-test-123\\",\\n      \\"Config\\": \\"{}\\",\\n      \\"GmtCreateAt\\": \\"2020-10-13 17:34:52\\\\n\\",\\n      \\"GmtModifiedAt\\": \\"2020-10-13 17:34:52\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取资源列表',
    ),
    'GetInstanceResource' => 
    array (
      'summary' => '获取指定实例下指定资源的详细信息。',
      'path' => '/api/v1/instances/{InstanceId}/resources/{ResourceId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'reso-2s416t***',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D75C43DC-3D3A-5CC8-9AAC-8C77306C433B',
              ),
              'ResourceId' => 
              array (
                'description' => '资源ID。',
                'type' => 'string',
                'example' => 'reso-2s416t***',
              ),
              'Category' => 
              array (
                'description' => '资源类别

- DataManagement

- Engine

- Monitor',
                'type' => 'string',
                'example' => 'DataManagement',
              ),
              'Group' => 
              array (
                'description' => '资源分组。

当资源类别为DataManagement时，资源分组有：

- storage

- modelpipeline

- datastorage

- modeltrain

当资源类别为Engine时，资源分组有：

- feature

- predict

- recall

- recengine

当资源类别为Monitor时，资源分组有：

- logs

- logsback

- coldstart

- deploy',
                'type' => 'string',
                'example' => 'storage',
              ),
              'Type' => 
              array (
                'description' => '资源类型

- Hologres

- EAS

- BE

- Rec

- Platform

- SLS

- DataHub

- Kafka

- Flinkvvp

- ACR

- OSS

- DataWorks

- PAI

- MaxCompute

- GraphCompute

- Redis',
                'type' => 'string',
                'example' => 'OSS',
              ),
              'Uri' => 
              array (
                'description' => '资源地址。',
                'type' => 'string',
                'example' => 'bucket-test-123',
              ),
              'Config' => 
              array (
                'description' => '资源的配置信息。',
                'type' => 'string',
                'example' => '{}',
              ),
              'GmtCreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2020-10-13 17:34:52',
              ),
              'GmtModifiedTime' => 
              array (
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2020-10-13 17:34:52',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D75C43DC-3D3A-5CC8-9AAC-8C77306C433B\\",\\n  \\"ResourceId\\": \\"reso-2s416t***\\",\\n  \\"Category\\": \\"DataManagement\\",\\n  \\"Group\\": \\"storage\\",\\n  \\"Type\\": \\"OSS\\",\\n  \\"Uri\\": \\"bucket-test-123\\",\\n  \\"Config\\": \\"{}\\",\\n  \\"GmtCreateTime\\": \\"2020-10-13 17:34:52\\",\\n  \\"GmtModifiedTime\\": \\"2020-10-13 17:34:52\\"\\n}","type":"json"}]',
      'title' => '获取资源详细信息',
    ),
    'DeleteInstanceResource' => 
    array (
      'summary' => '删除指定实例下的指定配置资源。',
      'path' => '/api/v1/instances/{InstanceId}/resources/{ResourceId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test123',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'reso-2s416t***',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7D59453C-48AA-5FC5-8848-2D373BD1A17F',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7D59453C-48AA-5FC5-8848-2D373BD1A17F\\"\\n}","type":"json"}]',
      'title' => '删除资源配置',
    ),
    'CreateInstanceResource' => 
    array (
      'summary' => '为指定实例配置创建新的配置资源。',
      'path' => '/api/v1/instances/{InstanceId}/resources',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Category' => 
              array (
                'description' => '资源类别
- DataManagement
- Engine
- Monitor',
                'type' => 'string',
                'required' => true,
                'example' => 'DataManagement',
              ),
              'Group' => 
              array (
                'description' => '资源分组。

当资源类别为DataManagement时，资源分组有：
- storage

- modelpipeline

- datastorage

- modeltrain

当资源类别为Engine时，资源分组有：
- feature

- predict

- recall

- recengine

当资源类别为Monitor时，资源分组有：
- logs

- logsback

- coldstart

- deploy',
                'type' => 'string',
                'required' => true,
                'example' => 'storage',
              ),
              'Type' => 
              array (
                'description' => '资源类型

- Hologres

- EAS

- BE

- Rec

- Platform

- SLS

- DataHub

- Kafka

- Flinkvvp

- ACR

- OSS

- DataWorks

- PAI

- MaxCompute

- GraphCompute

- Redis',
                'type' => 'string',
                'required' => true,
                'example' => 'OSS',
              ),
              'Uri' => 
              array (
                'description' => '资源地址。',
                'type' => 'string',
                'required' => true,
                'example' => 'bucket-test-123',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6CF1E160-3F36-5E73-A170-C75504F05BBC',
              ),
              'ResourceId' => 
              array (
                'description' => '资源ID。',
                'type' => 'string',
                'example' => 'reso-2s416t***',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF1E160-3F36-5E73-A170-C75504F05BBC\\",\\n  \\"ResourceId\\": \\"reso-2s416t***\\"\\n}","type":"json"}]',
      'title' => '创建配置资源',
    ),
    'UpdateTableMeta' => 
    array (
      'summary' => '更新数据表。',
      'path' => '/api/v1/tablemetas/{TableMetaId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TableMetaId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据表ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '数据表名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'table_test',
              ),
              'ResourceId' => 
              array (
                'description' => '资源ID，可通过[ListInstanceResource](~~2672886~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'reso-2s416t***',
              ),
              'TableName' => 
              array (
                'description' => '数据库中的表名。',
                'type' => 'string',
                'required' => true,
                'example' => 'table_mysql',
              ),
              'Module' => 
              array (
                'description' => '数据表模块。

- ABTest：实验数据表。

- ExperimentTool：实验工具表。

- DataDiagnosis：数据诊断',
                'type' => 'string',
                'required' => true,
                'example' => 'ABTest',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-test1',
              ),
              'Fields' => 
              array (
                'description' => '表字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字段信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '字段名。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'name',
                    ),
                    'Meaning' => 
                    array (
                      'description' => '字段含义。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '名称字段',
                    ),
                    'Type' => 
                    array (
                      'description' => '字段类型。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'BIGINT',
                    ),
                    'IsDimensionField' => 
                    array (
                      'description' => '是否是维度字段。',
                      'type' => 'boolean',
                      'required' => true,
                      'example' => 'false',
                    ),
                    'DataType' => 
                    array (
                      'description' => '字段的数据类型。',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'number' => '数字',
                        'image' => '图片',
                        'text' => '文本',
                        'video' => '视频',
                        'primary_key' => '主键',
                        'url' => '超链接',
                      ),
                      'example' => 'primary_key',
                    ),
                    'IsPartitionField' => 
                    array (
                      'description' => '是否为分区字段。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'true',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'Description' => 
              array (
                'description' => '表的描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'this is a test table',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\"\\n}","type":"json"}]',
      'title' => '更新数据表',
    ),
    'ListTableMetas' => 
    array (
      'summary' => '获取数据表列表。',
      'path' => '/api/v1/tablemetas',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据表类型。

- MaxCompute

- Hologres',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1',
          ),
        ),
        2 => 
        array (
          'name' => 'Module',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据表模块。

- ABTest-实验数据表。

- ExperimentTool-实验工具表。

- DataDiagnosis-数据诊断',
            'type' => 'string',
            'required' => true,
            'example' => 'ABTest',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
              'TotalCount' => 
              array (
                'description' => '总个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'TableMetas' => 
              array (
                'description' => '数据表列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据表信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TableMetaId' => 
                    array (
                      'description' => '数据表ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Name' => 
                    array (
                      'description' => '数据表名称。',
                      'type' => 'string',
                      'example' => 'test_table',
                    ),
                    'Description' => 
                    array (
                      'description' => '数据表描述。',
                      'type' => 'string',
                      'example' => 'this is a test table',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'reso-2s416t***',
                    ),
                    'TableName' => 
                    array (
                      'description' => '数据库中的表名。',
                      'type' => 'string',
                      'example' => 'table_mysql',
                    ),
                    'Type' => 
                    array (
                      'description' => '数据表类型。

- MaxCompute

- Hologres',
                      'type' => 'string',
                      'example' => 'MaxCompute',
                    ),
                    'Module' => 
                    array (
                      'description' => '数据表模块

- ABTest-实验数据表。

- ExperimentTool-实验工具表。

- DataDiagnosis-数据诊断',
                      'type' => 'string',
                      'example' => 'ABTest',
                    ),
                    'CanDelete' => 
                    array (
                      'description' => '是否可以删除，如果表在其他地方正在被引用，则返回false。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-12-12 12:24:33',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2021-12-12 12:24:33',
                    ),
                    'GmtImportedTime' => 
                    array (
                      'description' => '字段导入时间。',
                      'type' => 'string',
                      'example' => 'imprecation',
                    ),
                    'Fields' => 
                    array (
                      'description' => '表的字段列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '字段信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '字段名称。',
                            'type' => 'string',
                            'example' => 'gender',
                          ),
                          'Meaning' => 
                          array (
                            'description' => '字段含义。',
                            'type' => 'string',
                            'example' => 'the gender of people',
                          ),
                          'Type' => 
                          array (
                            'description' => '字段类型。',
                            'type' => 'string',
                            'example' => 'BIGINT',
                          ),
                          'IsDimensionField' => 
                          array (
                            'description' => '是否是维度字段。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                        ),
                      ),
                    ),
                    'Url' => 
                    array (
                      'description' => '如果是MaxCompute表，此处为数据地图的表的链接。',
                      'type' => 'string',
                      'example' => 'https://dmc-xxx.com/dm/table/xxx',
                    ),
                    'Config' => 
                    array (
                      'description' => '数据表的一些额外的配置。',
                      'type' => 'string',
                      'example' => '{"table_type":"item"}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"TotalCount\\": 20,\\n  \\"TableMetas\\": [\\n    {\\n      \\"TableMetaId\\": \\"3\\",\\n      \\"Name\\": \\"test_table\\",\\n      \\"Description\\": \\"this is a test table\\",\\n      \\"ResourceId\\": \\"reso-2s416t***\\",\\n      \\"TableName\\": \\"table_mysql\\",\\n      \\"Type\\": \\"MaxCompute\\",\\n      \\"Module\\": \\"ABTest\\",\\n      \\"CanDelete\\": true,\\n      \\"GmtCreateTime\\": \\"2021-12-12 12:24:33\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-12 12:24:33\\",\\n      \\"GmtImportedTime\\": \\"imprecation\\",\\n      \\"Fields\\": [\\n        {\\n          \\"Name\\": \\"gender\\",\\n          \\"Meaning\\": \\"the gender of people\\",\\n          \\"Type\\": \\"BIGINT\\",\\n          \\"IsDimensionField\\": false\\n        }\\n      ],\\n      \\"Url\\": \\"https://dmc-xxx.com/dm/table/xxx\\",\\n      \\"Config\\": \\"{\\\\\\"table_type\\\\\\":\\\\\\"item\\\\\\"}\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取数据表列表',
    ),
    'GetTableMeta' => 
    array (
      'summary' => '获取数据表详细信息。',
      'path' => '/api/v1/tablemetas/{TableMetaId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TableMetaId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据表ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => '实例ID	pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '28C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
              'Name' => 
              array (
                'description' => '数据表名称。',
                'type' => 'string',
                'example' => 'test_table',
              ),
              'Description' => 
              array (
                'description' => '数据表描述。',
                'type' => 'string',
                'example' => 'this is a test table',
              ),
              'ResourceId' => 
              array (
                'description' => '资源ID。',
                'type' => 'string',
                'example' => 'reso-wkgo***',
              ),
              'TableName' => 
              array (
                'description' => '数据库中的表名.',
                'type' => 'string',
                'example' => 'table_mysql',
              ),
              'Type' => 
              array (
                'description' => '数据表类型。

- MaxCompute

- Hologres',
                'type' => 'string',
                'example' => 'MaxCompute',
              ),
              'Module' => 
              array (
                'description' => '数据表模块。

- ABTest-实验数据表。

- ExperimentTool-实验工具表。

- DataDiagnosis-数据诊断',
                'type' => 'string',
                'example' => 'ABTest',
              ),
              'CanDelete' => 
              array (
                'description' => '是否可以删除，如果表在其他地方正在被引用，则返回 false。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'GmtCreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-12-15:24:33',
              ),
              'GmtModifiedTime' => 
              array (
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2021-12-15:24:33',
              ),
              'Fields' => 
              array (
                'description' => '表的字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字段信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '字段名称。',
                      'type' => 'string',
                      'example' => 'gender',
                    ),
                    'Meaning' => 
                    array (
                      'description' => '字段含义。',
                      'type' => 'string',
                      'example' => 'the gender of people',
                    ),
                    'Type' => 
                    array (
                      'description' => '字段类型。',
                      'type' => 'string',
                      'example' => 'BIGINT',
                    ),
                    'IsDimensionField' => 
                    array (
                      'description' => '是否是维度字段。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
              'Url' => 
              array (
                'description' => '如果是MaxCompute表，此字段为数据地图的表的链接，否则为空。',
                'type' => 'string',
                'example' => 'https://dmc-xxx.com/dm/table/xxx
',
              ),
              'TableMetaId' => 
              array (
                'description' => '数据表ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'GmtImportedTime' => 
              array (
                'description' => '字段导入时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'Config' => 
              array (
                'description' => '数据表的一些额外的配置。',
                'type' => 'string',
                'example' => '{"table_type":"item"}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"28C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"Name\\": \\"test_table\\",\\n  \\"Description\\": \\"this is a test table\\",\\n  \\"ResourceId\\": \\"reso-wkgo***\\",\\n  \\"TableName\\": \\"table_mysql\\",\\n  \\"Type\\": \\"MaxCompute\\",\\n  \\"Module\\": \\"ABTest\\",\\n  \\"CanDelete\\": false,\\n  \\"GmtCreateTime\\": \\"2021-12-15:24:33\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15:24:33\\",\\n  \\"Fields\\": [\\n    {\\n      \\"Name\\": \\"gender\\",\\n      \\"Meaning\\": \\"the gender of people\\",\\n      \\"Type\\": \\"BIGINT\\",\\n      \\"IsDimensionField\\": false\\n    }\\n  ],\\n  \\"Url\\": \\"https://dmc-xxx.com/dm/table/xxx\\\\n\\",\\n  \\"TableMetaId\\": \\"3\\",\\n  \\"GmtImportedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"Config\\": \\"{\\\\\\"table_type\\\\\\":\\\\\\"item\\\\\\"}\\"\\n}","type":"json"}]',
      'title' => '获取数据表',
    ),
    'DeleteTableMeta' => 
    array (
      'summary' => '删除数据表。',
      'path' => '/api/v1/tablemetas/{TableMetaId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TableMetaId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据表ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => '实例ID	pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\"\\n}","type":"json"}]',
      'title' => '删除数据表',
    ),
    'CreateTableMeta' => 
    array (
      'summary' => '创建数据表。',
      'path' => '/api/v1/tablemetas',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '数据表名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'table_test',
              ),
              'ResourceId' => 
              array (
                'description' => '资源 ID，可通过ListInstanceResources获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'reso-2s416t146ffjc3yefx',
              ),
              'TableName' => 
              array (
                'description' => '数据库中的表名。',
                'type' => 'string',
                'required' => true,
                'example' => 'table_mysql',
              ),
              'Module' => 
              array (
                'description' => '表的模块。

- ABTest-实验数据表。

- ExperimentTool-实验工具表。

- DataDiagnosis-数据诊断',
                'type' => 'string',
                'required' => true,
                'example' => 'ABTest',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-test123',
              ),
              'Fields' => 
              array (
                'description' => '字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字段信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '字段名称。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'gender',
                    ),
                    'Meaning' => 
                    array (
                      'description' => '字段含义。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'this is gender of people',
                    ),
                    'Type' => 
                    array (
                      'description' => '字段类型。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'BIGINT',
                    ),
                    'IsDimensionField' => 
                    array (
                      'description' => '是否是维度字段。',
                      'type' => 'boolean',
                      'required' => true,
                      'example' => 'false',
                    ),
                    'DataType' => 
                    array (
                      'description' => '字段的数据类型。',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'number' => '数字',
                        'image' => '图片',
                        'text' => '文本',
                        'video' => '视频',
                        'primary_key' => '主键',
                        'url' => '超链接',
                      ),
                      'example' => 'primary_key',
                    ),
                    'IsPartitionField' => 
                    array (
                      'description' => '是否为分区字段。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'true',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'Description' => 
              array (
                'description' => '数据表描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'this is a test table',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
              'TableMetaId' => 
              array (
                'description' => '数据表ID。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"TableMetaId\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '创建数据表',
    ),
    'CreateScene' => 
    array (
      'summary' => '创建一个场景，在场景下可进行指标、实验分析。',
      'path' => '/api/v1/scenes',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '场景名称。',
                'description' => '场景名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'scene1',
              ),
              'Description' => 
              array (
                'title' => '场景描述。',
                'description' => '场景描述。',
                'type' => 'string',
                'required' => false,
                'example' => 'This is a test.',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => false,
                'example' => 'pairec-cn-abcdefg1234',
              ),
              'Flows' => 
              array (
                'title' => '流量列表。',
                'description' => '流量列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '流量。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FlowName' => 
                    array (
                      'title' => '流量名称。',
                      'description' => '流量名称。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '流量1',
                    ),
                    'FlowCode' => 
                    array (
                      'title' => '流量编码。',
                      'description' => '流量编码。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'liuliang1',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'FCF741D8-9C30-578E-807F-B935487DB34A',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FCF741D8-9C30-578E-807F-B935487DB34A\\",\\n  \\"SceneId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '创建场景',
    ),
    'DeleteScene' => 
    array (
      'summary' => '删除指定场景。',
      'path' => '/api/v1/scenes/{SceneId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '场景ID。',
            'description' => '场景ID，可通过接口ListScenes获取。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'D75C43DC-3D3A-5CC8-9AAC-8C77306C433B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D75C43DC-3D3A-5CC8-9AAC-8C77306C433B\\"\\n}","type":"json"}]',
      'title' => '删除场景',
    ),
    'UpdateScene' => 
    array (
      'summary' => '更新场景信息，例如更新场景的名称、描述。',
      'path' => '/api/v1/scenes/{SceneId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID，可通过接口ListScenes获取。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '场景名称。',
                'description' => '场景名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'scene1',
              ),
              'Description' => 
              array (
                'title' => '场景描述。',
                'description' => '场景描述。',
                'type' => 'string',
                'required' => false,
                'example' => 'This is a test.',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => false,
                'example' => 'pairec-cn-abcdefg1234',
              ),
              'Flows' => 
              array (
                'title' => '流量列表。',
                'description' => '流量列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FlowName' => 
                    array (
                      'title' => '流量名称。',
                      'description' => '流量名称。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '流量1',
                    ),
                    'FlowCode' => 
                    array (
                      'title' => '流量编码。',
                      'description' => '流量编码。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'liuliang1',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'FC17887E-3C82-5096-8AA6-F4C2E7417245',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FC17887E-3C82-5096-8AA6-F4C2E7417245\\"\\n}","type":"json"}]',
      'title' => '更新场景',
    ),
    'ListScenes' => 
    array (
      'summary' => '获取场景列表。',
      'path' => '/api/v1/scenes',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景名称过滤。',
            'description' => '场景名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'scene1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'B8987BF7-6028-5B17-80E0-251B7BD67BBA',
              ),
              'TotalCount' => 
              array (
                'description' => '列表内元素数量总和。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Scenes' => 
              array (
                'title' => '场景列表。',
                'description' => '场景列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SceneId' => 
                    array (
                      'title' => '场景ID。',
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Name' => 
                    array (
                      'title' => '场景名称。',
                      'description' => '场景名称。',
                      'type' => 'string',
                      'example' => 'scene1',
                    ),
                    'Description' => 
                    array (
                      'title' => '场景描述。',
                      'description' => '场景描述。',
                      'type' => 'string',
                      'example' => 'This is a test.',
                    ),
                    'Flows' => 
                    array (
                      'title' => '流量列表。',
                      'description' => '流量列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'FlowName' => 
                          array (
                            'title' => '流量名称。',
                            'description' => '流量名称。',
                            'type' => 'string',
                            'example' => '流量1',
                          ),
                          'FlowCode' => 
                          array (
                            'title' => '流量编码。',
                            'description' => '流量编码。',
                            'type' => 'string',
                            'example' => 'liuliang1',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8987BF7-6028-5B17-80E0-251B7BD67BBA\\",\\n  \\"TotalCount\\": 10,\\n  \\"Scenes\\": [\\n    {\\n      \\"SceneId\\": \\"3\\",\\n      \\"Name\\": \\"scene1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"Flows\\": [\\n        {\\n          \\"FlowName\\": \\"流量1\\",\\n          \\"FlowCode\\": \\"liuliang1\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取场景列表',
    ),
    'GetScene' => 
    array (
      'summary' => '获取指定场景的详细信息。',
      'path' => '/api/v1/scenes/{SceneId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '场景ID。',
            'description' => '场景ID，可通过接口ListScenes获取。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'B8987BF7-6028-5B17-80E0-251B7BD67BBA',
              ),
              'Name' => 
              array (
                'title' => '场景名称。',
                'description' => '场景名称。',
                'type' => 'string',
                'example' => 'scene1',
              ),
              'Description' => 
              array (
                'title' => '场景描述。',
                'description' => '场景描述。',
                'type' => 'string',
                'example' => 'This is a test.',
              ),
              'Flows' => 
              array (
                'title' => '流量列表。',
                'description' => '流量列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FlowName' => 
                    array (
                      'title' => '流量名称。',
                      'description' => '流量名称。',
                      'type' => 'string',
                      'example' => '流量1',
                    ),
                    'FlowCode' => 
                    array (
                      'title' => '流量编码。',
                      'description' => '流量编码。',
                      'type' => 'string',
                      'example' => 'liuliang1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8987BF7-6028-5B17-80E0-251B7BD67BBA\\",\\n  \\"Name\\": \\"scene1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"Flows\\": [\\n    {\\n      \\"FlowName\\": \\"流量1\\",\\n      \\"FlowCode\\": \\"liuliang1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取场景详细信息',
    ),
    'CreateParam' => 
    array (
      'summary' => '创建一个参数。通过对参数进行管理，无需修改引擎配置、发布变更，即可对服务读取的变量进行修改，提高灵活性。',
      'path' => '/api/v1/params',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID，可通过接口ListScenes获取。',
                'type' => 'string',
                'required' => false,
                'example' => '4',
              ),
              'Name' => 
              array (
                'title' => '参数名称。',
                'description' => '参数名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'home',
              ),
              'Value' => 
              array (
                'title' => '参数值。',
                'description' => '参数值。',
                'type' => 'string',
                'required' => false,
                'example' => 'house',
              ),
              'Environment' => 
              array (
                'title' => '参数所属的环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'description' => '参数所属的环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'type' => 'string',
                'required' => false,
                'example' => 'Daily',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => false,
                'example' => 'pairec-cn-abcdefg1234',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F8F613A9-DF1C-551A-88E1-397A3981A785',
              ),
              'ParamId' => 
              array (
                'title' => '参数ID。',
                'description' => '参数ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8F613A9-DF1C-551A-88E1-397A3981A785\\",\\n  \\"ParamId\\": 4\\n}","type":"json"}]',
      'title' => '创建参数',
    ),
    'DeleteParam' => 
    array (
      'summary' => '删除指定参数。',
      'path' => '/api/v1/params/{ParamId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '参数ID。',
            'description' => '参数ID，可通过接口ListParams获取。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F0AB6527-093F-5C44-B3BD-42C8C210C619',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F0AB6527-093F-5C44-B3BD-42C8C210C619\\"\\n}","type":"json"}]',
      'title' => '删除参数',
    ),
    'UpdateParam' => 
    array (
      'summary' => '更新指定参数的信息，例如更新参数的值。',
      'path' => '/api/v1/params/{ParamId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '参数ID。',
            'description' => '参数ID，可通过接口ListParams获取。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'Value' => 
              array (
                'title' => '参数值。',
                'description' => '参数值。',
                'type' => 'string',
                'required' => false,
                'example' => 'house',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => false,
                'example' => 'pairec-cn-abcdefg1234',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'BBD41FBF-E75C-551A-92FA-CAD654AA006F',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BBD41FBF-E75C-551A-92FA-CAD654AA006F\\"\\n}","type":"json"}]',
      'title' => '更新参数',
    ),
    'ListParams' => 
    array (
      'summary' => '获取参数列表。',
      'path' => '/api/v1/params',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID。',
            'description' => '场景ID，可通过接口ListScenes获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '参数名称。',
            'description' => '参数名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'home',
          ),
        ),
        2 => 
        array (
          'name' => 'Environment',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '参数所属的环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
            'description' => '参数所属的环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
            'type' => 'string',
            'required' => false,
            'example' => 'Daily',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码。',
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小。',
            'description' => '页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A2D07551-38DA-531E-9B22-877D1D86A579',
              ),
              'TotalCount' => 
              array (
                'title' => '列表内元素总数。',
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Params' => 
              array (
                'title' => '参数列表。',
                'description' => '参数列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParamId' => 
                    array (
                      'title' => '参数ID。',
                      'description' => '参数ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'Name' => 
                    array (
                      'title' => '参数名称。',
                      'description' => '参数名称。',
                      'type' => 'string',
                      'example' => 'home',
                    ),
                    'Value' => 
                    array (
                      'title' => '参数值。',
                      'description' => '参数值。',
                      'type' => 'string',
                      'example' => 'house',
                    ),
                    'Environment' => 
                    array (
                      'title' => '参数所属的环境。
● Daily-日常环境
● Prepub-预发环境
● Product-生产环境',
                      'description' => '参数所属的环境。
● Daily-日常环境
● Prepub-预发环境
● Product-生产环境',
                      'type' => 'string',
                      'example' => 'Daily',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'title' => '更新时间。',
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A2D07551-38DA-531E-9B22-877D1D86A579\\",\\n  \\"TotalCount\\": 10,\\n  \\"Params\\": [\\n    {\\n      \\"ParamId\\": \\"4\\",\\n      \\"Name\\": \\"home\\",\\n      \\"Value\\": \\"house\\",\\n      \\"Environment\\": \\"Daily\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取参数列表',
    ),
    'CreateCrowd' => 
    array (
      'summary' => '创建一个人群，用于表示用户群体。',
      'path' => '/api/v1/crowds',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234',
              ),
              'Name' => 
              array (
                'title' => '人群名称。',
                'description' => '人群名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'xx人群',
              ),
              'Description' => 
              array (
                'title' => '人群描述。',
                'description' => '人群描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'This is a test.',
              ),
              'Label' => 
              array (
                'title' => '人群标签。',
                'description' => '人群标签。',
                'type' => 'string',
                'required' => false,
                'example' => 'os=android',
              ),
              'Source' => 
              array (
                'title' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                'description' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                'type' => 'string',
                'required' => false,
                'example' => 'ManualInput',
              ),
              'Users' => 
              array (
                'title' => '人群中包含的用户，多个用户间用逗号隔开。',
                'description' => '人群中包含的用户，多个用户间用逗号隔开。',
                'type' => 'string',
                'required' => false,
                'example' => 'user1,user2,user3',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
              ),
              'CrowdId' => 
              array (
                'title' => '人群ID。',
                'description' => '人群ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\",\\n  \\"CrowdId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '创建人群',
    ),
    'CreateSubCrowd' => 
    array (
      'summary' => '在指定人群下创建子人群。',
      'path' => '/api/v1/crowds/{CrowdId}/subcrowds',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '人群ID。',
            'description' => '人群ID，可通过接口ListCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'Source' => 
              array (
                'title' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                'description' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                'type' => 'string',
                'required' => true,
                'example' => 'ManualInput',
              ),
              'Users' => 
              array (
                'title' => '人群中包含的用户，多个用户间用逗号隔开。',
                'description' => '人群中包含的用户，多个用户间用逗号隔开。',
                'type' => 'string',
                'required' => true,
                'example' => 'user1,user2,user3',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-test1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '9763624B-5FBB-5E3A-9193-B1ADB554CEAE',
              ),
              'SubCrowdId' => 
              array (
                'title' => '子人群ID。',
                'description' => '子人群ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9763624B-5FBB-5E3A-9193-B1ADB554CEAE\\",\\n  \\"SubCrowdId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '创建子人群',
    ),
    'DeleteCrowd' => 
    array (
      'summary' => '删除指定人群。',
      'path' => '/api/v1/crowds/{CrowdId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '人群ID。',
            'description' => '人群ID，可通过接口ListCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\"\\n}","type":"json"}]',
      'title' => '删除人群',
    ),
    'DeleteSubCrowd' => 
    array (
      'summary' => '删除指定子人群。',
      'path' => '/api/v1/crowds/{CrowdId}/subcrowds/{SubCrowdId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '人群ID。',
            'description' => '人群ID，可通过接口ListCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'SubCrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '子人群ID。',
            'description' => '子人群ID，可通过接口ListSubCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'EE97D06A-2AA0-5AD9-B6CF-8A267924D691',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EE97D06A-2AA0-5AD9-B6CF-8A267924D691\\"\\n}","type":"json"}]',
      'title' => '删除子人群',
    ),
    'UpdateCrowd' => 
    array (
      'summary' => '更新指定人群信息，例如更新人群的名称、描述。',
      'path' => '/api/v1/crowds/{CrowdId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '人群名称。',
                'description' => '人群名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'xx人群',
              ),
              'Description' => 
              array (
                'title' => '人群描述。',
                'description' => '人群描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'This is a test.',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-test1',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'CrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '人群ID。',
            'description' => '人群ID，可通过接口ListCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8C27790E-CCA5-56BB-BA17-646295DEC0A2',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8C27790E-CCA5-56BB-BA17-646295DEC0A2\\"\\n}","type":"json"}]',
      'title' => '更新人群',
    ),
    'ListCrowds' => 
    array (
      'summary' => '获取人群列表。',
      'path' => '/api/v1/crowds',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '9763624B-5FBB-5E3A-9193-B1ADB554CEAE',
              ),
              'TotalCount' => 
              array (
                'title' => '列表内元素总数。',
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Crowds' => 
              array (
                'title' => '人群列表。',
                'description' => '人群列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CrowdId' => 
                    array (
                      'title' => '人群ID。',
                      'description' => '人群ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Name' => 
                    array (
                      'title' => '人群名称。',
                      'description' => '人群名称。',
                      'type' => 'string',
                      'example' => 'crowd1',
                    ),
                    'Description' => 
                    array (
                      'title' => '人群描述。',
                      'description' => '人群描述。',
                      'type' => 'string',
                      'example' => 'This is a test.',
                    ),
                    'Label' => 
                    array (
                      'title' => '人群标签。',
                      'description' => '人群标签。',
                      'type' => 'string',
                      'example' => 'os=android',
                    ),
                    'Source' => 
                    array (
                      'title' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                      'description' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                      'type' => 'string',
                      'example' => 'ManualInput',
                    ),
                    'Quantity' => 
                    array (
                      'title' => '数量。',
                      'description' => '数量。',
                      'type' => 'string',
                      'example' => '10',
                    ),
                    'Users' => 
                    array (
                      'title' => '人群内包含的用户，多个用户间以逗号隔开。',
                      'description' => '人群内包含的用户，多个用户间以逗号隔开。',
                      'type' => 'string',
                      'example' => 'user1,user2',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '人群创建时间。',
                      'description' => '人群创建时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9763624B-5FBB-5E3A-9193-B1ADB554CEAE\\",\\n  \\"TotalCount\\": 10,\\n  \\"Crowds\\": [\\n    {\\n      \\"CrowdId\\": \\"3\\",\\n      \\"Name\\": \\"crowd1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"Label\\": \\"os=android\\",\\n      \\"Source\\": \\"ManualInput\\",\\n      \\"Quantity\\": \\"10\\",\\n      \\"Users\\": \\"user1,user2\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取人群列表',
    ),
    'ListCrowdUsers' => 
    array (
      'summary' => '获取指定人群所包含的所有用户，包括人群下的子人群内的用户。',
      'path' => '/api/v1/crowds/{CrowdId}/users',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '人群ID。',
            'description' => '人群ID，可通过接口ListCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F0AB6527-093F-5C44-B3BD-42C8C210C619',
              ),
              'TotalCount' => 
              array (
                'title' => '列表内元素总个数。',
                'description' => '列表内元素总个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'Users' => 
              array (
                'title' => '用户列表。',
                'description' => '用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户ID。',
                  'type' => 'string',
                  'example' => 'user1',
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F0AB6527-093F-5C44-B3BD-42C8C210C619\\",\\n  \\"TotalCount\\": 3,\\n  \\"Users\\": [\\n    \\"user1\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取人群下用户列表',
    ),
    'ListSubCrowds' => 
    array (
      'summary' => '获取指定人群下的子人群列表。',
      'path' => '/api/v1/crowds/{CrowdId}/subcrowds',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '人群ID。',
            'description' => '人群ID，可通过接口ListCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'C5AEB79E-FAA4-5DCE-8CD7-1CAF549ECC3E',
              ),
              'TotalCount' => 
              array (
                'title' => '列表内元素总数。',
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'SubCrowds' => 
              array (
                'title' => '子人群列表。',
                'description' => '子人群列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SubCrowdId' => 
                    array (
                      'title' => '子人群ID。',
                      'description' => '子人群ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Source' => 
                    array (
                      'title' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                      'description' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                      'type' => 'string',
                      'example' => 'ManualInput',
                    ),
                    'Users' => 
                    array (
                      'title' => '人群分组中的用户。',
                      'description' => '人群分组中的用户。',
                      'type' => 'string',
                      'example' => 'user1,user2',
                    ),
                    'Quantity' => 
                    array (
                      'title' => '人群分组所含的用户量。',
                      'description' => '人群分组所含的用户量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '创建时间。',
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C5AEB79E-FAA4-5DCE-8CD7-1CAF549ECC3E\\",\\n  \\"TotalCount\\": 10,\\n  \\"SubCrowds\\": [\\n    {\\n      \\"SubCrowdId\\": \\"3\\",\\n      \\"Source\\": \\"ManualInput\\",\\n      \\"Users\\": \\"user1,user2\\",\\n      \\"Quantity\\": 2,\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取子人群列表',
    ),
    'GetSubCrowd' => 
    array (
      'summary' => '获取指定子人群的详细信息。',
      'path' => '/api/v1/crowds/{CrowdId}/subcrowds/{SubCrowdId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '人群ID。',
            'description' => '人群ID，可通过接口ListCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'SubCrowdId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '子人群ID。',
            'description' => '子人群ID，可通过接口ListSubCrowds获取。',
            'type' => 'string',
            'required' => true,
            'example' => '4',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '01D22D08-BA20-5F35-8302-99115F288220',
              ),
              'Source' => 
              array (
                'title' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                'description' => '人群来源。
● ManualInput-手工输入
● UploadFile-文件上传',
                'type' => 'string',
                'example' => 'ManualInput',
              ),
              'Users' => 
              array (
                'title' => '人群分组中的用户。',
                'description' => '人群分组中的用户。',
                'type' => 'string',
                'example' => 'user1,user2',
              ),
              'Quantity' => 
              array (
                'title' => '人群分组所含的用户量。',
                'description' => '人群分组所含的用户量。',
                'type' => 'string',
                'example' => '3',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '人群创建时间。',
                'description' => '人群创建时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01D22D08-BA20-5F35-8302-99115F288220\\",\\n  \\"Source\\": \\"ManualInput\\",\\n  \\"Users\\": \\"user1,user2\\",\\n  \\"Quantity\\": \\"3\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n}","type":"json"}]',
      'title' => '获取子人群详细信息',
    ),
    'CreateLaboratory' => 
    array (
      'summary' => '创建一个实验室，实验室是一组流量的集合，在实验室下可开展实验。',
      'path' => '/api/v1/laboratories',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID，可通过接口ListScenes获取。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'Name' => 
              array (
                'title' => '实验室名称。',
                'description' => '实验室名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'laboratory1',
              ),
              'Description' => 
              array (
                'title' => '实验室描述。',
                'description' => '实验室描述。',
                'type' => 'string',
                'required' => false,
                'example' => 'This is a test.',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                'type' => 'string',
                'required' => false,
                'example' => '1124512470******,1124512471******,1124512472******',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'BucketCount' => 
              array (
                'title' => '分桶数量。',
                'description' => '分桶数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '24',
              ),
              'Buckets' => 
              array (
                'title' => '分配桶号。',
                'description' => '分配桶号。',
                'type' => 'string',
                'required' => false,
                'example' => '1,2,3,10-20',
              ),
              'BucketType' => 
              array (
                'title' => '分桶方式
● UidHash-UID哈希（默认）
● Uid-UID分桶
● Filter-过滤条件分桶',
                'description' => '分桶方式
● UidHash-UID哈希（默认）
● Uid-UID分桶
● Filter-过滤条件分桶',
                'type' => 'string',
                'required' => true,
                'example' => 'UidHash',
              ),
              'Filter' => 
              array (
                'title' => '过滤条件。',
                'description' => '过滤条件。',
                'type' => 'string',
                'required' => false,
                'example' => 'filter=xxx',
              ),
              'Environment' => 
              array (
                'title' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环',
                'description' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环',
                'type' => 'string',
                'required' => true,
                'example' => 'Daily',
              ),
              'Type' => 
              array (
                'title' => '实验室类型
● Base
● NonBase',
                'description' => '实验室类型
● Base
● NonBase',
                'type' => 'string',
                'required' => true,
                'example' => 'Base',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '42391E6D-822C-58F8-9F7E-D991BB86D6AD',
              ),
              'LaboratoryId' => 
              array (
                'title' => '实验室ID。',
                'description' => '实验室ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"42391E6D-822C-58F8-9F7E-D991BB86D6AD\\",\\n  \\"LaboratoryId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '创建实验室',
    ),
    'DeleteLaboratory' => 
    array (
      'summary' => '删除指定实验室。',
      'path' => '/api/v1/laboratories/{LaboratoryId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LaboratoryId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验室ID。',
            'description' => '实验室ID，可通过接口ListLaboratories获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '1C0898E5-9220-5443-B2D9-445FF0688215',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C0898E5-9220-5443-B2D9-445FF0688215\\"\\n}","type":"json"}]',
      'title' => '删除实验室',
    ),
    'UpdateLaboratory' => 
    array (
      'summary' => '更新实验室信息，例如更新实验室的名称。',
      'path' => '/api/v1/laboratories/{LaboratoryId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LaboratoryId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验室ID。',
            'description' => '实验室ID，可通过接口ListLaboratories获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '实验室名称。',
                'description' => '实验室名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'laboratory1',
              ),
              'Description' => 
              array (
                'title' => '实验室介绍。',
                'description' => '实验室介绍。',
                'type' => 'string',
                'required' => false,
                'example' => 'This is a test.',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                'type' => 'string',
                'required' => false,
                'example' => '1124512470******,1124512471******,1124512472******',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'BucketCount' => 
              array (
                'title' => '分桶数量。',
                'description' => '分桶数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '24',
              ),
              'Buckets' => 
              array (
                'title' => '分配桶号。',
                'description' => '分配桶号。',
                'type' => 'string',
                'required' => false,
                'example' => '1,2,3,10-20',
              ),
              'BucketType' => 
              array (
                'title' => '分桶方式。
● Uid-UID分桶（默认）
● UidHash-UID哈希
● Filter-过滤条件分桶',
                'description' => '分桶方式。
● Uid-UID分桶（默认）
● UidHash-UID哈希
● Filter-过滤条件分桶',
                'type' => 'string',
                'required' => true,
                'example' => 'Filter',
              ),
              'Filter' => 
              array (
                'title' => '过滤条件。',
                'description' => '过滤条件。',
                'type' => 'string',
                'required' => false,
                'example' => 'filter=xxx',
              ),
              'Type' => 
              array (
                'title' => '实验室类型。
● Base
● NonBase',
                'description' => '实验室类型。
● Base
● NonBase',
                'type' => 'string',
                'required' => true,
                'example' => 'Base',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-test1',
              ),
              'Environment' => 
              array (
                'title' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'description' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'type' => 'string',
                'required' => false,
                'example' => 'Daily',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\"\\n}","type":"json"}]',
      'title' => '更新实验室',
    ),
    'ListLaboratories' => 
    array (
      'summary' => '获取某个场景下的实验室列表。',
      'path' => '/api/v1/laboratories',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Environment',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实验室所属的环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
            'description' => '实验室所属的环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
            'type' => 'string',
            'required' => false,
            'example' => 'Daily',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID。',
            'description' => '场景ID，可通过接口ListScenes获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '状态。
● Offline-未上线。
● Online-已上线。',
            'description' => '状态。
● Offline-未上线。
● Online-已上线。',
            'type' => 'string',
            'required' => false,
            'example' => 'Offline',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '1C0898E5-9220-5443-B2D9-445FF0688215',
              ),
              'TotalCount' => 
              array (
                'title' => '列表内元素总数。',
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Laboratories' => 
              array (
                'title' => '实验室列表。',
                'description' => '实验室列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LaboratoryId' => 
                    array (
                      'title' => '实验室ID。',
                      'description' => '实验室ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'SceneId' => 
                    array (
                      'title' => '场景ID。',
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Name' => 
                    array (
                      'title' => '实验室名称。',
                      'description' => '实验室名称。',
                      'type' => 'string',
                      'example' => 'laboratory1',
                    ),
                    'Description' => 
                    array (
                      'title' => '实验室描述。',
                      'description' => '实验室描述。',
                      'type' => 'string',
                      'example' => 'This is a test.',
                    ),
                    'DebugUsers' => 
                    array (
                      'title' => '调试用户。',
                      'description' => '调试用户。',
                      'type' => 'string',
                      'example' => 'user1,user2,user3',
                    ),
                    'DebugCrowdId' => 
                    array (
                      'title' => '调试人群ID。',
                      'description' => '调试人群ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'BucketCount' => 
                    array (
                      'title' => '分桶数量。',
                      'description' => '分桶数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'Buckets' => 
                    array (
                      'title' => '分配桶号。',
                      'description' => '分配桶号。',
                      'type' => 'string',
                      'example' => '1,2,3,10-20',
                    ),
                    'BucketType' => 
                    array (
                      'title' => '分桶方式。
● Uid-UID分桶（默认）
● UidHash-UID哈希
● Filter-过滤条件分桶',
                      'description' => '分桶方式。
● Uid-UID分桶（默认）
● UidHash-UID哈希
● Filter-过滤条件分桶',
                      'type' => 'string',
                      'example' => 'Filter',
                    ),
                    'Filter' => 
                    array (
                      'title' => '过滤条件。',
                      'description' => '过滤条件。',
                      'type' => 'string',
                      'example' => 'filter=xxx',
                    ),
                    'Environment' => 
                    array (
                      'title' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                      'description' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                      'type' => 'string',
                      'example' => 'Daily',
                    ),
                    'Type' => 
                    array (
                      'title' => '实验室类型
● Base
● NonBase',
                      'description' => '实验室类型
● Base
● NonBase',
                      'type' => 'string',
                      'example' => 'Base',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态。
● Offline-未上线。
● Online-已上线。',
                      'description' => '状态。
● Offline-未上线。
● Online-已上线。',
                      'type' => 'string',
                      'example' => 'Offline',
                    ),
                    'CrowdId' => 
                    array (
                      'title' => '人群ID。',
                      'description' => '人群ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C0898E5-9220-5443-B2D9-445FF0688215\\",\\n  \\"TotalCount\\": 10,\\n  \\"Laboratories\\": [\\n    {\\n      \\"LaboratoryId\\": \\"3\\",\\n      \\"SceneId\\": \\"3\\",\\n      \\"Name\\": \\"laboratory1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"DebugUsers\\": \\"user1,user2,user3\\",\\n      \\"DebugCrowdId\\": \\"3\\",\\n      \\"BucketCount\\": 100,\\n      \\"Buckets\\": \\"1,2,3,10-20\\",\\n      \\"BucketType\\": \\"Filter\\",\\n      \\"Filter\\": \\"filter=xxx\\",\\n      \\"Environment\\": \\"Daily\\",\\n      \\"Type\\": \\"Base\\",\\n      \\"Status\\": \\"Offline\\",\\n      \\"CrowdId\\": \\"3\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取实验室列表',
    ),
    'GetLaboratory' => 
    array (
      'summary' => '获取指定实验室的详细信息。',
      'path' => '/api/v1/laboratories/{LaboratoryId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LaboratoryId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验室ID。',
            'description' => '实验室ID，可通过接口ListLaboratories获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '1C0898E5-9220-5443-B2D9-445FF0688215',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'Name' => 
              array (
                'title' => '实验室名称。',
                'description' => '实验室名称。',
                'type' => 'string',
                'example' => 'laboratory1',
              ),
              'Description' => 
              array (
                'title' => '实验室描述。',
                'description' => '实验室描述。',
                'type' => 'string',
                'example' => 'This is a test.',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户。',
                'type' => 'string',
                'example' => 'user1,user2,user3',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'BucketCount' => 
              array (
                'title' => '分桶数量。',
                'description' => '分桶数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'Buckets' => 
              array (
                'title' => '分配桶号。',
                'description' => '分配桶号。',
                'type' => 'string',
                'example' => '1,2,3,10-20',
              ),
              'BucketType' => 
              array (
                'title' => '分桶方式。
● Uid-UID分桶（默认）
● UidHash-UID哈希
● Filter-过滤条件分桶',
                'description' => '分桶方式。
● Uid-UID分桶（默认）
● UidHash-UID哈希
● Filter-过滤条件分桶',
                'type' => 'string',
                'example' => 'Filter',
              ),
              'Filter' => 
              array (
                'title' => '过滤条件。',
                'description' => '过滤条件。',
                'type' => 'string',
                'example' => 'filter=xxx',
              ),
              'Environment' => 
              array (
                'title' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'description' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'type' => 'string',
                'example' => 'Daily',
              ),
              'Type' => 
              array (
                'title' => '实验室类型
● Base
● NonBase',
                'description' => '实验室类型
● Base
● NonBase',
                'type' => 'string',
                'example' => 'Base',
              ),
              'Status' => 
              array (
                'title' => '状态。
● Offline-未上线。
● Online-已上线。',
                'description' => '状态。
● Offline-未上线。
● Online-已上线。',
                'type' => 'string',
                'example' => 'Offline',
              ),
              'CrowdId' => 
              array (
                'title' => '人群ID。',
                'description' => '人群ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C0898E5-9220-5443-B2D9-445FF0688215\\",\\n  \\"SceneId\\": \\"3\\",\\n  \\"Name\\": \\"laboratory1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"DebugUsers\\": \\"user1,user2,user3\\",\\n  \\"DebugCrowdId\\": \\"3\\",\\n  \\"BucketCount\\": 100,\\n  \\"Buckets\\": \\"1,2,3,10-20\\",\\n  \\"BucketType\\": \\"Filter\\",\\n  \\"Filter\\": \\"filter=xxx\\",\\n  \\"Environment\\": \\"Daily\\",\\n  \\"Type\\": \\"Base\\",\\n  \\"Status\\": \\"Offline\\",\\n  \\"CrowdId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '获取实验室详细信息',
    ),
    'OnlineLaboratory' => 
    array (
      'summary' => '将指定实验室进行发布上线，以开展实验分析。',
      'path' => '/api/v1/laboratories/{LaboratoryId}/action/online',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LaboratoryId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验室ID。',
            'description' => '实验室ID，可通过接口ListLaboratories获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-test1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8C27790E-CCA5-56BB-BA17-646295DEC0A2',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8C27790E-CCA5-56BB-BA17-646295DEC0A2\\"\\n}","type":"json"}]',
      'title' => '上线实验室',
    ),
    'OfflineLaboratory' => 
    array (
      'summary' => '将指定实验室下线。',
      'path' => '/api/v1/laboratories/{LaboratoryId}/action/offline',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LaboratoryId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验室ID。',
            'description' => '实验室ID，可通过接口ListLaboratories获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\"\\n}","type":"json"}]',
      'title' => '下线实验室',
    ),
    'CloneLaboratory' => 
    array (
      'summary' => '将指定实验室克隆到指定环境，克隆时需指定是否克隆实验室下的实验组。',
      'path' => '/api/v1/laboratories/{LaboratoryId}/action/clone',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LaboratoryId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验室ID。',
            'description' => '实验室ID，可通过接口ListLaboratories获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234',
              ),
              'Environment' => 
              array (
                'title' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'description' => '运行环境
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'type' => 'string',
                'required' => true,
                'example' => 'Daily',
              ),
              'CloneExperimentGroup' => 
              array (
                'title' => '是否克隆实验组。',
                'description' => '是否克隆实验组。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '01D22D08-BA20-5F35-8302-99115F288220',
              ),
              'LaboratoryId' => 
              array (
                'title' => '克隆出的实验室的ID。',
                'description' => '克隆出的实验室的ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01D22D08-BA20-5F35-8302-99115F288220\\",\\n  \\"LaboratoryId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '克隆实验室',
    ),
    'CreateLayer' => 
    array (
      'summary' => '在指定实验室下创建一个层，用于分层实验。层与层之间正交，可独立开展实验，避免流量饥饿问题。',
      'path' => '/api/v1/layers',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'LaboratoryId' => 
              array (
                'title' => '实验室ID。',
                'description' => '实验室ID，可通过接口ListLaboratories获取。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'Name' => 
              array (
                'title' => '层名称。',
                'description' => '层名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'layer1',
              ),
              'Description' => 
              array (
                'title' => '层描述。',
                'description' => '层描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'This is a test.',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
              ),
              'LayerId' => 
              array (
                'title' => '层ID。',
                'description' => '层ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\",\\n  \\"LayerId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '创建层',
    ),
    'DeleteLayer' => 
    array (
      'summary' => '删除指定层。',
      'path' => '/api/v1/layers/{LayerId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LayerId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '层ID。',
            'description' => '层ID，可通过接口ListLayers获取。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8F457D79-C4A2-5E8C-83E4-0D089456E2AC',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F457D79-C4A2-5E8C-83E4-0D089456E2AC\\"\\n}","type":"json"}]',
      'title' => '删除层',
    ),
    'UpdateLayer' => 
    array (
      'summary' => '更新指定层的信息，例如更新层的名称、描述。',
      'path' => '/api/v1/layers/{LayerId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LayerId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '层ID，可通过接口ListLayers获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-test1',
              ),
              'Name' => 
              array (
                'title' => '层名称。',
                'description' => '层名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'layer1',
              ),
              'Description' => 
              array (
                'title' => '层描述。',
                'description' => '层描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'This is a test.',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '0EA9215E-EC21-53AB-B8D9-D3DEA90D040A',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0EA9215E-EC21-53AB-B8D9-D3DEA90D040A\\"\\n}","type":"json"}]',
      'title' => '更新层',
    ),
    'ListLayers' => 
    array (
      'summary' => '获取某个实验室下的层列表。',
      'path' => '/api/v1/layers',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '183174',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnN0NAWV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LaboratoryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实验室ID。',
            'description' => '实验室ID，可通过接口ListLaboratories获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '518C64F6-DFF7-11ED-85B0-00163E14B3D1',
              ),
              'TotalCount' => 
              array (
                'title' => '列表内元素总数。',
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Layers' => 
              array (
                'title' => '层列表。',
                'description' => '层列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LayerId' => 
                    array (
                      'title' => '层ID。',
                      'description' => '层ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'LaboratoryId' => 
                    array (
                      'title' => '实验室ID。',
                      'description' => '实验室ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'SceneId' => 
                    array (
                      'title' => '场景ID。',
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Name' => 
                    array (
                      'title' => '层名称。',
                      'description' => '层名称。',
                      'type' => 'string',
                      'example' => 'layer1',
                    ),
                    'Description' => 
                    array (
                      'title' => '层描述。',
                      'description' => '层描述。',
                      'type' => 'string',
                      'example' => 'This is a test.',
                    ),
                    'ResidualFlow' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"518C64F6-DFF7-11ED-85B0-00163E14B3D1\\",\\n  \\"TotalCount\\": 10,\\n  \\"Layers\\": [\\n    {\\n      \\"LayerId\\": \\"3\\",\\n      \\"LaboratoryId\\": \\"3\\",\\n      \\"SceneId\\": \\"3\\",\\n      \\"Name\\": \\"layer1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"ResidualFlow\\": 0,\\n      \\"GmtCreateTime\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取层列表',
    ),
    'GetLayer' => 
    array (
      'summary' => '获取指定层的详细信息。',
      'path' => '/api/v1/layers/{LayerId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '183176',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnN0NAWV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LayerId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '层ID。',
            'description' => '层ID，可通过接口ListLayers获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'EE97D06A-2AA0-5AD9-B6CF-8A267924D691',
              ),
              'LaboratoryId' => 
              array (
                'title' => '实验室ID。',
                'description' => '实验室ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID。',
                'type' => 'string',
                'example' => '4',
              ),
              'Name' => 
              array (
                'title' => '层名称。',
                'description' => '层名称。',
                'type' => 'string',
                'example' => 'layer1',
              ),
              'Description' => 
              array (
                'title' => '层描述。',
                'description' => '层描述。',
                'type' => 'string',
                'example' => 'This is a test.',
              ),
              'ResidualFlow' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'GmtCreateTime' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EE97D06A-2AA0-5AD9-B6CF-8A267924D691\\",\\n  \\"LaboratoryId\\": \\"3\\",\\n  \\"SceneId\\": \\"4\\",\\n  \\"Name\\": \\"layer1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"ResidualFlow\\": 0,\\n  \\"GmtCreateTime\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取层详细信息',
    ),
    'CreateExperimentGroup' => 
    array (
      'summary' => '在指定层下，创建一个实验组。可按照实验类型划分实验组，从而按照实验组观测实验整体效果表现。',
      'path' => '/api/v1/experimentgroups',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '183389',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnN0NAWV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'LayerId' => 
              array (
                'title' => '层ID。',
                'description' => '层ID，可通过接口ListLayers获取。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'Name' => 
              array (
                'title' => '实验组名称。',
                'description' => '实验组名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'experiment_group_test',
              ),
              'Description' => 
              array (
                'title' => '实验组描述。',
                'description' => '实验组描述。',
                'type' => 'string',
                'required' => false,
                'example' => 'This is a test.',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                'type' => 'string',
                'required' => false,
                'example' => '1124512470******,1124512471******,1124512472******',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID，可通过接口ListCrowds获取。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'NeedAA' => 
              array (
                'title' => '是否需要AA实验组。',
                'description' => '是否需要AA实验组。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'Filter' => 
              array (
                'title' => '人群定向指定的过滤条件。',
                'description' => '人群定向指定的过滤条件。',
                'type' => 'string',
                'required' => false,
                'example' => 'gender=male',
              ),
              'CrowdId' => 
              array (
                'title' => '人群定向的指定人群ID。',
                'description' => '人群定向的指定人群ID，可通过接口ListCrowds获取。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'DistributionType' => 
              array (
                'title' => '分流方式。
● UserId-用户ID
● TimeDuration-时段',
                'description' => '分流方式。
● UserId-用户ID
● TimeDuration-时段',
                'type' => 'string',
                'required' => false,
                'example' => 'UserId',
              ),
              'DistributionTimeDuration' => 
              array (
                'title' => '分流时段。',
                'description' => '分流时段。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '3',
              ),
              'Config' => 
              array (
                'title' => '实验组配置。',
                'description' => '实验组配置。',
                'type' => 'string',
                'required' => false,
                'example' => '{"RankBy": "Score"}',
              ),
              'ReservedBuckets' => 
              array (
                'title' => '预留桶号。',
                'description' => '预留桶号。',
                'type' => 'string',
                'required' => false,
                'example' => '1,2,3',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-test1',
              ),
              'CrowdTargetType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'RandomFlow' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
              ),
              'ExperimentGroupId' => 
              array (
                'title' => '实验组ID。',
                'description' => '实验组ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\",\\n  \\"ExperimentGroupId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '创建实验组',
    ),
    'DeleteExperimentGroup' => 
    array (
      'summary' => '删除指定实验组。',
      'path' => '/api/v1/experimentgroups/{ExperimentGroupId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验组ID。',
            'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A009D9BE-C85E-57B2-AE05-BD78BB6EBF50',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A009D9BE-C85E-57B2-AE05-BD78BB6EBF50\\"\\n}","type":"json"}]',
      'title' => '删除实验组',
    ),
    'UpdateExperimentGroup' => 
    array (
      'summary' => '更新指定实验组的信息，例如更新实验组的名称、描述。',
      'path' => '/api/v1/experimentgroups/{ExperimentGroupId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '183398',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnN0NAWV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'LayerId' => 
              array (
                'title' => '层ID。',
                'description' => '层ID，可通过接口ListLayers获取。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'Name' => 
              array (
                'title' => '实验组名称。',
                'description' => '实验组名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'experiment_group1',
              ),
              'Description' => 
              array (
                'title' => '实验组描述。',
                'description' => '实验组描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'This is a test.',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                'type' => 'string',
                'required' => false,
                'example' => 'user1,user2,user3',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID，可通过接口ListCrowds获取。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'NeedAA' => 
              array (
                'title' => '是否需要AA实验组。',
                'description' => '是否需要AA实验组。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'Filter' => 
              array (
                'title' => '人群定向指定的过滤条件。',
                'description' => '人群定向指定的过滤条件。',
                'type' => 'string',
                'required' => false,
                'example' => 'gender=male',
              ),
              'CrowdId' => 
              array (
                'title' => '人群定向的指定人群ID。',
                'description' => '人群定向的指定人群ID，可通过接口ListCrowds获取。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'DistributionType' => 
              array (
                'title' => '分流方式。
● UserId-用户ID
● TimeDuration-时段',
                'description' => '分流方式。
● UserId-用户ID
● TimeDuration-时段',
                'type' => 'string',
                'required' => false,
                'example' => 'UserId',
              ),
              'DistributionTimeDuration' => 
              array (
                'title' => '分流时段。',
                'description' => '分流时段。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '3',
              ),
              'Config' => 
              array (
                'title' => '实验组配置。',
                'description' => '实验组配置。',
                'type' => 'string',
                'required' => false,
                'example' => '{"RankBy": "Score"}',
              ),
              'ReservcedBuckets' => 
              array (
                'title' => '预留桶号。',
                'description' => '预留桶号。',
                'type' => 'string',
                'required' => false,
                'example' => '1,2,3',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234',
              ),
              'CrowdTargetType' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'RandomFlow' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\"\\n}","type":"json"}]',
      'title' => '更新实验组',
    ),
    'ListExperimentGroups' => 
    array (
      'summary' => '获取实验组列表。',
      'path' => '/api/v1/experimentgroups',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '183391',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnN0NAWV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LayerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '层ID。',
            'description' => '层ID，可通过接口ListLayers获取。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '状态过滤
● Offline-未上线
● Online-已上线
● Pushed-已推全',
            'description' => '状态过滤
● Offline-未上线
● Online-已上线
● Pushed-已推全',
            'type' => 'string',
            'required' => false,
            'example' => 'Online',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
              ),
              'TotalCount' => 
              array (
                'title' => '列表内元素总数。',
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'ExperimentGroups' => 
              array (
                'title' => '实验组列表。',
                'description' => '实验组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ExperimentGroupId' => 
                    array (
                      'title' => '实验组ID。',
                      'description' => '实验组ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'LayerId' => 
                    array (
                      'title' => '层ID。',
                      'description' => '层ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'LaboratoryId' => 
                    array (
                      'title' => '实验室ID。',
                      'description' => '实验室ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'SceneId' => 
                    array (
                      'title' => '场景ID。',
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Name' => 
                    array (
                      'title' => '实验组名称。',
                      'description' => '实验组名称。',
                      'type' => 'string',
                      'example' => 'experiment_group1',
                    ),
                    'Description' => 
                    array (
                      'title' => '实验组描述。',
                      'description' => '实验组描述。',
                      'type' => 'string',
                      'example' => 'This is a test.',
                    ),
                    'DebugUsers' => 
                    array (
                      'title' => '调试用户。',
                      'description' => '调试用户。',
                      'type' => 'string',
                      'example' => '1124512470******,1124512471******,1124512472******',
                    ),
                    'DebugCrowdId' => 
                    array (
                      'title' => '调试人群ID。',
                      'description' => '调试人群ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'Owner' => 
                    array (
                      'title' => '创建人。',
                      'description' => '创建人。',
                      'type' => 'string',
                      'example' => '1124512470******',
                    ),
                    'NeedAA' => 
                    array (
                      'title' => '是否需要AB实验组。',
                      'description' => '是否需要AB实验组。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Filter' => 
                    array (
                      'title' => '过滤条件。',
                      'description' => '过滤条件。',
                      'type' => 'string',
                      'example' => 'gender=female',
                    ),
                    'DistributionType' => 
                    array (
                      'title' => '分流方式。
● UserId-用户ID
● TimeDuration-时段',
                      'description' => '分流方式。
● UserId-用户ID
● TimeDuration-时段',
                      'type' => 'string',
                      'example' => 'UserId',
                    ),
                    'DistributionTimeDuration' => 
                    array (
                      'title' => '分流时段。',
                      'description' => '分流时段。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'CrowdId' => 
                    array (
                      'title' => '人群ID。',
                      'description' => '人群ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Config' => 
                    array (
                      'title' => '实验组配置。',
                      'description' => '实验组配置。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'ReservedBuckets' => 
                    array (
                      'title' => '预留桶号。',
                      'description' => '预留桶号。',
                      'type' => 'string',
                      'example' => '1,2,3,4',
                    ),
                    'Status' => 
                    array (
                      'title' => '实验组状态。
● Offline-未上线
● Online-已上线
● Pushed-已推全',
                      'description' => '实验组状态。
● Offline-未上线
● Online-已上线
● Pushed-已推全',
                      'type' => 'string',
                      'example' => 'Offline',
                    ),
                    'CrowdTargetType' => 
                    array (
                      'type' => 'string',
                    ),
                    'RandomFlow' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'HoldingBuckets' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\",\\n  \\"TotalCount\\": 10,\\n  \\"ExperimentGroups\\": [\\n    {\\n      \\"ExperimentGroupId\\": \\"3\\",\\n      \\"LayerId\\": \\"3\\",\\n      \\"LaboratoryId\\": \\"4\\",\\n      \\"SceneId\\": \\"1\\",\\n      \\"Name\\": \\"experiment_group1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"DebugUsers\\": \\"1124512470******,1124512471******,1124512472******\\",\\n      \\"DebugCrowdId\\": \\"4\\",\\n      \\"Owner\\": \\"1124512470******\\",\\n      \\"NeedAA\\": true,\\n      \\"Filter\\": \\"gender=female\\",\\n      \\"DistributionType\\": \\"UserId\\",\\n      \\"DistributionTimeDuration\\": 5,\\n      \\"CrowdId\\": \\"3\\",\\n      \\"Config\\": \\"{}\\",\\n      \\"ReservedBuckets\\": \\"1,2,3,4\\",\\n      \\"Status\\": \\"Offline\\",\\n      \\"CrowdTargetType\\": \\"\\",\\n      \\"RandomFlow\\": 0,\\n      \\"HoldingBuckets\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取实验组列表',
    ),
    'GetExperimentGroup' => 
    array (
      'summary' => '获取指定实验组的详细信息。',
      'path' => '/api/v1/experimentgroups/{ExperimentGroupId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '183395',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnN0NAWV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验组ID。',
            'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'BDB621CB-A81E-5D39-8793-39A365CBCC74',
              ),
              'LayerId' => 
              array (
                'title' => '层ID。',
                'description' => '层ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'LaboratoryId' => 
              array (
                'title' => '实验室ID。',
                'description' => '实验室ID。',
                'type' => 'string',
                'example' => '4',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'Name' => 
              array (
                'title' => '实验组名称。',
                'description' => '实验组名称。',
                'type' => 'string',
                'example' => 'experiment_group1',
              ),
              'Description' => 
              array (
                'title' => '实验组描述。',
                'description' => '实验组描述。',
                'type' => 'string',
                'example' => 'This is a test.',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户，多个用户间用逗号作间隔。',
                'type' => 'string',
                'example' => '1124512470******,1124512471******,1124512472******',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID。',
                'type' => 'string',
                'example' => '4',
              ),
              'Owner' => 
              array (
                'title' => '创建人。',
                'description' => '创建人。',
                'type' => 'string',
                'example' => '1124512470******',
              ),
              'NeedAA' => 
              array (
                'title' => '是否需要AB实验组。',
                'description' => '是否需要AB实验组。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Filter' => 
              array (
                'title' => '过滤条件。',
                'description' => '过滤条件。',
                'type' => 'string',
                'example' => 'gender=female',
              ),
              'DistributionType' => 
              array (
                'title' => '分流方式。
● UserId-用户ID
● TimeDuration-时段',
                'description' => '分流方式。
● UserId-用户ID
● TimeDuration-时段',
                'type' => 'string',
                'example' => 'UserId',
              ),
              'DistributionTimeDuration' => 
              array (
                'title' => '分流时段。',
                'description' => '分流时段。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'CrowdId' => 
              array (
                'title' => '人群ID。',
                'description' => '人群ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'Config' => 
              array (
                'title' => '实验组配置。',
                'description' => '实验组配置。',
                'type' => 'string',
                'example' => '{"RankBy": "Score"}',
              ),
              'ReservedBuckets' => 
              array (
                'title' => '预留桶号。',
                'description' => '预留桶号。',
                'type' => 'string',
                'example' => '1,2,3,4',
              ),
              'Status' => 
              array (
                'title' => '实验组状态。
● Offline-未上线
● Online-已上线
● Pushed-已推全',
                'description' => '实验组状态。
● Offline-未上线
● Online-已上线
● Pushed-已推全',
                'type' => 'string',
                'example' => 'Offline',
              ),
              'CrowdTargetType' => 
              array (
                'type' => 'string',
              ),
              'RandomFlow' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'HoldingBuckets' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDB621CB-A81E-5D39-8793-39A365CBCC74\\",\\n  \\"LayerId\\": \\"3\\",\\n  \\"LaboratoryId\\": \\"4\\",\\n  \\"SceneId\\": \\"1\\",\\n  \\"Name\\": \\"experiment_group1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"DebugUsers\\": \\"1124512470******,1124512471******,1124512472******\\",\\n  \\"DebugCrowdId\\": \\"4\\",\\n  \\"Owner\\": \\"1124512470******\\",\\n  \\"NeedAA\\": true,\\n  \\"Filter\\": \\"gender=female\\",\\n  \\"DistributionType\\": \\"UserId\\",\\n  \\"DistributionTimeDuration\\": 5,\\n  \\"CrowdId\\": \\"3\\",\\n  \\"Config\\": \\"{\\\\\\"RankBy\\\\\\": \\\\\\"Score\\\\\\"}\\",\\n  \\"ReservedBuckets\\": \\"1,2,3,4\\",\\n  \\"Status\\": \\"Offline\\",\\n  \\"CrowdTargetType\\": \\"\\",\\n  \\"RandomFlow\\": 0,\\n  \\"HoldingBuckets\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取实验组详细信息',
    ),
    'CloneExperimentGroup' => 
    array (
      'summary' => '向指定环境克隆一个实验组。',
      'path' => '/api/v1/experimentgroups/{ExperimentGroupId}/action/clone',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验组ID。',
            'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234
',
              ),
              'LayerId' => 
              array (
                'title' => '层ID。',
                'description' => '层ID，可通过接口ListLayers获取。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'Environment' => 
              array (
                'title' => '克隆到的环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'description' => '克隆到的环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'type' => 'string',
                'required' => true,
                'example' => 'Daily',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '12A65C6C-AFA1-59B2-9A66-A9E0BB73F0E5',
              ),
              'ExperimentGroupId' => 
              array (
                'title' => '克隆后的实验组ID。',
                'description' => '克隆后的实验组ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"12A65C6C-AFA1-59B2-9A66-A9E0BB73F0E5\\",\\n  \\"ExperimentGroupId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '克隆实验组',
    ),
    'OnlineExperimentGroup' => 
    array (
      'summary' => '上线指定实验组。',
      'path' => '/api/v1/experimentgroups/{ExperimentGroupId}/action/online',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验组ID。',
            'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234
',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '47F761ED-BE4E-51A6-B678-78E1490DF313',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"47F761ED-BE4E-51A6-B678-78E1490DF313\\"\\n}","type":"json"}]',
      'title' => '上线实验组',
    ),
    'OfflineExperimentGroup' => 
    array (
      'summary' => '下线指定实验组。',
      'path' => '/api/v1/experimentgroups/{ExperimentGroupId}/action/offline',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验组ID。',
            'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求body。',
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234
',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '518C64F6-DFF7-11ED-85B0-00163E14B3D1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"518C64F6-DFF7-11ED-85B0-00163E14B3D1\\"\\n}","type":"json"}]',
      'title' => '下线实验组',
    ),
    'CreateExperiment' => 
    array (
      'summary' => '在指定实验组下创建一个实验。',
      'path' => '/api/v1/experiments',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-test1',
              ),
              'ExperimentGroupId' => 
              array (
                'title' => '实验组ID。',
                'description' => '实验组ID，可通过接口ListExperimentGroups获取。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'Name' => 
              array (
                'title' => '实验名称。',
                'description' => '实验名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'experiment_test',
              ),
              'Description' => 
              array (
                'title' => '实验描述。',
                'description' => '实验描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'This is a test.',
              ),
              'Type' => 
              array (
                'title' => '实验类型。
● Baseline-基准实验。
● Normal-普通实验。',
                'description' => '实验类型。
● Baseline-基准实验。
● Normal-普通实验。',
                'type' => 'string',
                'required' => true,
                'example' => 'Baseline',
              ),
              'FlowPercent' => 
              array (
                'title' => '流量分配百分比。',
                'description' => '流量分配百分比。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                'type' => 'string',
                'required' => false,
                'example' => '1124512470******,1124512471******,1124512472******',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID，可通过接口ListCrowds获取。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'Config' => 
              array (
                'title' => '实验配置。',
                'description' => '实验配置。',
                'type' => 'string',
                'required' => false,
                'example' => '{"RankBy": "Score"}',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '3AAA45F6-0798-5461-9360-81D133823CE7',
              ),
              'ExperimentId' => 
              array (
                'title' => '实验ID。',
                'description' => '实验ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3AAA45F6-0798-5461-9360-81D133823CE7\\",\\n  \\"ExperimentId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '创建实验',
    ),
    'DeleteExperiment' => 
    array (
      'summary' => '删除指定实验。',
      'path' => '/api/v1/experiments/{ExperimentId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验ID。',
            'description' => '实验ID，可通过接口ListExperiments获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '2A734D87-2212-5C84-B63A-1AC87CA843D4',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2A734D87-2212-5C84-B63A-1AC87CA843D4\\"\\n}","type":"json"}]',
      'title' => '删除实验',
    ),
    'UpdateExperiment' => 
    array (
      'summary' => '更新指定实验的信息，例如更新实验的名称。',
      'path' => '/api/v1/experiments/{ExperimentId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234',
              ),
              'Name' => 
              array (
                'title' => '实验名称。',
                'description' => '实验名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'experiment_test',
              ),
              'Description' => 
              array (
                'title' => '实验描述。',
                'description' => '实验描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'This is a test.',
              ),
              'Type' => 
              array (
                'title' => '实验类型。
● Baseline-基准实验。
● Normal-普通实验。',
                'description' => '实验类型。
● Baseline-基准实验。
● Normal-普通实验。',
                'type' => 'string',
                'required' => true,
                'example' => 'Baseline',
              ),
              'FlowPercent' => 
              array (
                'title' => '流量分配百分比。',
                'description' => '流量分配百分比。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                'type' => 'string',
                'required' => false,
                'example' => '1124512470******,1124512471******,1124512472******',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID，可通过接口ListCrowds获取。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'Config' => 
              array (
                'title' => '实验配置。',
                'description' => '实验配置。',
                'type' => 'string',
                'required' => false,
                'example' => '{"RankBy": "Score"}',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验ID。',
            'description' => '实验ID，可通过接口ListExperiments获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A760D972-1475-58C0-BBB3-92B5FB08904F',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A760D972-1475-58C0-BBB3-92B5FB08904F\\"\\n}","type":"json"}]',
      'title' => '更新实验',
    ),
    'GetExperiment' => 
    array (
      'summary' => '获取指定实验的详细信息。',
      'path' => '/api/v1/experiments/{ExperimentId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验ID。',
            'description' => '实验ID，可通过接口ListExperiments获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
              ),
              'AliasExperimentId' => 
              array (
                'title' => '实验ID别名。',
                'description' => '实验ID别名。',
                'type' => 'string',
                'example' => 'L1#EG1#E1',
              ),
              'ExperimentGroupId' => 
              array (
                'title' => '实验组ID。',
                'description' => '实验组ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'LayerId' => 
              array (
                'title' => '层ID。',
                'description' => '层ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'LaboratoryId' => 
              array (
                'title' => '实验室ID。',
                'description' => '实验室ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'Name' => 
              array (
                'title' => '实验名称。',
                'description' => '实验名称。',
                'type' => 'string',
                'example' => 'experiment_test1',
              ),
              'Description' => 
              array (
                'title' => '实验描述。',
                'description' => '实验描述。',
                'type' => 'string',
                'example' => 'This is a test.',
              ),
              'Type' => 
              array (
                'title' => '实验类型。
● Baseline-基准实验。
● Normal-普通实验。',
                'description' => '实验类型。
● Baseline-基准实验。
● Normal-普通实验。',
                'type' => 'string',
                'example' => 'Baseline',
              ),
              'FlowPercent' => 
              array (
                'title' => '流量分配百分比。',
                'description' => '流量分配百分比。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
                'default' => '100',
              ),
              'Buckets' => 
              array (
                'title' => '分配桶号。',
                'description' => '分配桶号。',
                'type' => 'string',
                'example' => '1,2,3',
              ),
              'DebugUsers' => 
              array (
                'title' => '调试用户。',
                'description' => '调试用户（需为阿里云账户主账号/子账号uid），多个用户需通过逗号作间隔。',
                'type' => 'string',
                'example' => '1124512470******,1124512471******,1124512472******',
              ),
              'DebugCrowdId' => 
              array (
                'title' => '调试人群ID。',
                'description' => '调试人群ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'Config' => 
              array (
                'title' => '实验配置。',
                'description' => '实验配置。',
                'type' => 'string',
                'example' => '{"RankBy": "Score"}',
              ),
              'Status' => 
              array (
                'title' => '状态过滤。
● Offline-未上线
● Online-已上线',
                'description' => '状态过滤。
● Offline-未上线
● Online-已上线',
                'type' => 'string',
                'example' => 'Offline',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建时间。',
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '更新时间。',
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\",\\n  \\"AliasExperimentId\\": \\"L1#EG1#E1\\",\\n  \\"ExperimentGroupId\\": \\"3\\",\\n  \\"LayerId\\": \\"3\\",\\n  \\"LaboratoryId\\": \\"3\\",\\n  \\"SceneId\\": \\"3\\",\\n  \\"Name\\": \\"experiment_test1\\",\\n  \\"Description\\": \\"This is a test.\\",\\n  \\"Type\\": \\"Baseline\\",\\n  \\"FlowPercent\\": 100,\\n  \\"Buckets\\": \\"1,2,3\\",\\n  \\"DebugUsers\\": \\"1124512470******,1124512471******,1124512472******\\",\\n  \\"DebugCrowdId\\": \\"3\\",\\n  \\"Config\\": \\"{\\\\\\"RankBy\\\\\\": \\\\\\"Score\\\\\\"}\\",\\n  \\"Status\\": \\"Offline\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n}","type":"json"}]',
      'title' => '获取实验详细信息',
    ),
    'ListExperiments' => 
    array (
      'summary' => '获取指定实验组下的实验列表。',
      'path' => '/api/v1/experiments',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实验组ID。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '状态过滤。
● Offline-未上线
● Online-已上线',
            'description' => '状态过滤。
● Offline-未上线
● Online-已上线',
            'type' => 'string',
            'required' => false,
            'example' => 'Offline',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID，可通过接口ListInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-abcdefg1234',
          ),
        ),
        3 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '快速查询时的过滤参数。会返回与名称/标签匹配的所有实验。',
            'description' => '快速查询时的过滤参数。会返回与名称/标签匹配的所有实验。',
            'type' => 'string',
            'required' => false,
            'example' => 'experiment_test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '68075085-1A7D-55C2-B51D-7AD9B02A6DD6',
              ),
              'TotalCount' => 
              array (
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Experiments' => 
              array (
                'title' => '实验列表',
                'description' => '实验列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ExperimentId' => 
                    array (
                      'title' => '实验ID。',
                      'description' => '实验ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'AliasExperimentId' => 
                    array (
                      'title' => '实验ID别名。',
                      'description' => '实验ID别名。',
                      'type' => 'string',
                      'example' => 'L1#EG1#E1',
                    ),
                    'ExperimentGroupId' => 
                    array (
                      'title' => '实验组ID。',
                      'description' => '实验组ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'LayerId' => 
                    array (
                      'title' => '层ID。',
                      'description' => '层ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'LaboratoryId' => 
                    array (
                      'title' => '实验室ID。',
                      'description' => '实验室ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'SceneId' => 
                    array (
                      'title' => '场景ID。',
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Name' => 
                    array (
                      'title' => '实验名称。',
                      'description' => '实验名称。',
                      'type' => 'string',
                      'example' => 'experiment_test1',
                    ),
                    'Description' => 
                    array (
                      'title' => '实验描述。',
                      'description' => '实验描述。',
                      'type' => 'string',
                      'example' => 'This is a test.',
                    ),
                    'Type' => 
                    array (
                      'title' => '实验类型。
● Baseline-基准实验。
● Normal-普通实验。',
                      'description' => '实验类型。
● Baseline-基准实验。
● Normal-普通实验。',
                      'type' => 'string',
                      'example' => 'Baseline',
                    ),
                    'FlowPercent' => 
                    array (
                      'title' => '流量分配百分比。',
                      'description' => '流量分配百分比。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                      'default' => '100',
                    ),
                    'Buckets' => 
                    array (
                      'title' => '分配桶号。',
                      'description' => '分配桶号。',
                      'type' => 'string',
                      'example' => '1,2,3',
                    ),
                    'DebugUsers' => 
                    array (
                      'title' => '调试用户。',
                      'description' => '调试用户。',
                      'type' => 'string',
                      'example' => 'uid1,uid2,uid3',
                    ),
                    'DebugCrowdId' => 
                    array (
                      'title' => '调试人群ID。',
                      'description' => '调试人群ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Config' => 
                    array (
                      'title' => '实验配置。',
                      'description' => '实验配置。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态过滤。
● Offline-未上线
● Online-已上线',
                      'description' => '状态过滤。
● Offline-未上线
● Online-已上线',
                      'type' => 'string',
                      'example' => 'Offline',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '创建时间。',
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'title' => '更新时间。',
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"68075085-1A7D-55C2-B51D-7AD9B02A6DD6\\",\\n  \\"TotalCount\\": 10,\\n  \\"Experiments\\": [\\n    {\\n      \\"ExperimentId\\": \\"3\\",\\n      \\"AliasExperimentId\\": \\"L1#EG1#E1\\",\\n      \\"ExperimentGroupId\\": \\"3\\",\\n      \\"LayerId\\": \\"3\\",\\n      \\"LaboratoryId\\": \\"3\\",\\n      \\"SceneId\\": \\"3\\",\\n      \\"Name\\": \\"experiment_test1\\",\\n      \\"Description\\": \\"This is a test.\\",\\n      \\"Type\\": \\"Baseline\\",\\n      \\"FlowPercent\\": 100,\\n      \\"Buckets\\": \\"1,2,3\\",\\n      \\"DebugUsers\\": \\"uid1,uid2,uid3\\",\\n      \\"DebugCrowdId\\": \\"3\\",\\n      \\"Config\\": \\"{}\\",\\n      \\"Status\\": \\"Offline\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取实验列表',
    ),
    'CloneExperiment' => 
    array (
      'summary' => '对指定实验进行克隆。',
      'path' => '/api/v1/experiments/{ExperimentId}/action/clone',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验ID。',
            'description' => '实验ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'experiment_test',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234
',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F8F613A9-DF1C-551A-88E1-397A3981A785',
              ),
              'ExperimentId' => 
              array (
                'description' => '实验ID。',
                'type' => 'string',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8F613A9-DF1C-551A-88E1-397A3981A785\\",\\n  \\"ExperimentId\\": \\"3\\"\\n}","type":"json"}]',
      'title' => '克隆实验',
    ),
    'OfflineExperiment' => 
    array (
      'summary' => '将指定实验下线。',
      'path' => '/api/v1/experiments/{ExperimentId}/action/offline',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验ID。',
            'description' => '实验ID，实验ID可通过接口ListExperiments获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-abcdefg1234',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '872951C9-7755-5FA1-AACD-7F9375A6D27A',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"872951C9-7755-5FA1-AACD-7F9375A6D27A\\"\\n}","type":"json"}]',
      'title' => '下线实验',
    ),
    'PushAllExperiment' => 
    array (
      'summary' => '对于效果较优且稳定的实验，可对该实验进行推全。对某个实验推全后，该实验所属的实验组将结束生命周期，不再支持继续实验。平台会生成一个新的实验组，被推全的实验将在该实验组下占有全额的流量。',
      'path' => '/api/v1/experiments/{ExperimentId}/action/pushall',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验ID。',
            'description' => '实验ID，可通过接口ListExperiments获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => false,
                'example' => 'pairec-cn-abcdefg1234',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\"\\n}","type":"json"}]',
      'title' => '推全实验',
    ),
    'OnlineExperiment' => 
    array (
      'summary' => '将指定实验发布上线。',
      'path' => '/api/v1/experiments/{ExperimentId}/action/online',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实验ID。',
            'description' => '实验ID，可通过接口ListExperiments获取。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID，可通过接口ListInstances获取。',
                'type' => 'string',
                'required' => false,
                'example' => 'pairec-cn-abcdefg1234',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '6CF1E160-3F36-5E73-A170-C75504F05BBC',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF1E160-3F36-5E73-A170-C75504F05BBC\\"\\n}","type":"json"}]',
      'title' => '上线实验',
    ),
    'UpdateABMetric' => 
    array (
      'summary' => '更新AB实验指标。',
      'path' => '/api/v1/abmetrics/{ABMetricId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ABMetricId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'AB指标ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '指标名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'pv',
              ),
              'Description' => 
              array (
                'description' => '指标描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'pv 指标',
              ),
              'SceneId' => 
              array (
                'description' => '场景ID，可通过接口[ListScenes](~~2402581~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'Type' => 
              array (
                'description' => '指标类型。

- Single-单一指标。

- Derived-衍生指标。',
                'type' => 'string',
                'required' => true,
                'example' => 'Single',
              ),
              'Realtime' => 
              array (
                'description' => '是否为实时指标。

- true-是。

- false-否。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'false',
              ),
              'TableMetaId' => 
              array (
                'description' => '数据表ID，可以通过ListTableMetas获取。',
                'type' => 'string',
                'required' => true,
                'example' => '2',
              ),
              'ResultResourceId' => 
              array (
                'description' => '写回数据表的数据源的ID，可以通过ListInstanceResources获取。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'Definition' => 
              array (
                'description' => '指标定义。',
                'type' => 'string',
                'required' => true,
                'example' => 'sum(click_cnt)',
              ),
              'StatisticsCycle' => 
              array (
                'description' => '统计周期。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'LeftMetricId' => 
              array (
                'description' => '衍生指标的左指标ID。',
                'type' => 'string',
                'required' => false,
                'example' => '2',
              ),
              'RightMetricId' => 
              array (
                'description' => '衍生指标的右指标ID。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'Operator' => 
              array (
                'description' => '衍生指标计算的操作符。

- Plus-加

- Minus-减

- Multiplication-乘

- Division-除',
                'type' => 'string',
                'required' => false,
                'example' => 'Division',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-test123',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6CF1E160-3F36-5E73-A170-C75504F05BBC',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6CF1E160-3F36-5E73-A170-C75504F05BBC\\"\\n}","type":"json"}]',
      'title' => '更新AB指标',
    ),
    'CreateABMetric' => 
    array (
      'summary' => '创建AB实验指标。',
      'path' => '/api/v1/abmetrics',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '指标名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'pv',
              ),
              'Description' => 
              array (
                'description' => '指标描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'pv指标',
              ),
              'SceneId' => 
              array (
                'description' => '场景ID，可通过接口[ListScenes](~~2402581~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'Type' => 
              array (
                'description' => '指标类型。

- Single-单一指标。

- Derived-衍生指标。',
                'type' => 'string',
                'required' => true,
                'example' => 'Single',
              ),
              'Realtime' => 
              array (
                'description' => '是否为实时指标。

- true-是。

- false-否。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'false',
              ),
              'TableMetaId' => 
              array (
                'description' => '数据表ID，可通过ListTableMetas获取。',
                'type' => 'string',
                'required' => true,
                'example' => '2',
              ),
              'ResultResourceId' => 
              array (
                'description' => '写回数据表的数据源的ID，可以通过ListInstanceResources获取。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'Definition' => 
              array (
                'description' => '指标定义。',
                'type' => 'string',
                'required' => true,
                'example' => 'sum(click_cnt)',
              ),
              'StatisticsCycle' => 
              array (
                'description' => '统计周期。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'LeftMetricId' => 
              array (
                'description' => '衍生指标的左指标ID。',
                'type' => 'string',
                'required' => false,
                'example' => '2',
              ),
              'RightMetricId' => 
              array (
                'description' => '衍生指标的右指标ID。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'Operator' => 
              array (
                'description' => '衍生指标计算的操作符。

- Plus-加

- Minus-减

- Multiplication-乘

- Division-除',
                'type' => 'string',
                'required' => false,
                'example' => 'Division',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID，可从接口[ListInstances](~~2411819~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-test1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
              ),
              'ABMetricId' => 
              array (
                'description' => 'AB指标ID。',
                'type' => 'string',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\",\\n  \\"ABMetricId\\": \\"1\\"\\n}","type":"json"}]',
      'title' => '创建AB指标',
    ),
    'ListABMetrics' => 
    array (
      'summary' => '获取AB实验指标列表。',
      'path' => '/api/v1/abmetrics',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指标类型过滤。

- Single-单一指标。

- Derived-衍生指标。',
            'type' => 'string',
            'required' => false,
            'example' => 'Single',
          ),
        ),
        1 => 
        array (
          'name' => 'Realtime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否指标实时类型过滤。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'home',
          ),
        ),
        5 => 
        array (
          'name' => 'TableMetaId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据表ID，可通过ListTableMetas获取。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
        7 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID，来源于[ListScenes](~~2402581~~)接口。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
              ),
              'TotalCount' => 
              array (
                'description' => '总个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'ABMetrics' => 
              array (
                'description' => 'AB指标列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'AB指标信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ABMetricId' => 
                    array (
                      'description' => 'AB指标ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Name' => 
                    array (
                      'description' => '指标名称。',
                      'type' => 'string',
                      'example' => 'pv',
                    ),
                    'Description' => 
                    array (
                      'description' => '指标描述。',
                      'type' => 'string',
                      'example' => 'pv指标',
                    ),
                    'SceneId' => 
                    array (
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'SceneName' => 
                    array (
                      'description' => '场景名称',
                      'type' => 'string',
                      'example' => 'home_feed',
                    ),
                    'Type' => 
                    array (
                      'description' => '指标类型。

- Single-单一指标。

- Derived-衍生指标。',
                      'type' => 'string',
                      'example' => 'Single',
                    ),
                    'Realtime' => 
                    array (
                      'description' => '是否为实时指标。

- true-是。

- false-否。',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'TableMetaId' => 
                    array (
                      'description' => '数据表ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ResultTableMetaId' => 
                    array (
                      'description' => '数据写回到的数据表ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'ResultResourceId' => 
                    array (
                      'description' => '写回数据表的数据源的ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Definition' => 
                    array (
                      'description' => '指标定义。',
                      'type' => 'string',
                      'example' => 'sum(click_cnt)',
                    ),
                    'StatisticsCycle' => 
                    array (
                      'description' => '统计周期。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'LeftMetricId' => 
                    array (
                      'description' => '衍生指标的左指标ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'RightMetricId' => 
                    array (
                      'description' => '衍生指标的右指标ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'Operator' => 
                    array (
                      'description' => '衍生指标计算的操作符。

- Plus-加

- Minus-减

- Multiplication-乘

- Division-除',
                      'type' => 'string',
                      'example' => 'Division',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\",\\n  \\"TotalCount\\": 10,\\n  \\"ABMetrics\\": [\\n    {\\n      \\"ABMetricId\\": \\"1\\",\\n      \\"Name\\": \\"pv\\",\\n      \\"Description\\": \\"pv指标\\",\\n      \\"SceneId\\": \\"1\\",\\n      \\"SceneName\\": \\"home_feed\\",\\n      \\"Type\\": \\"Single\\",\\n      \\"Realtime\\": \\"false\\",\\n      \\"TableMetaId\\": \\"1\\",\\n      \\"ResultTableMetaId\\": \\"2\\",\\n      \\"ResultResourceId\\": \\"3\\",\\n      \\"Definition\\": \\"sum(click_cnt)\\",\\n      \\"StatisticsCycle\\": 1,\\n      \\"LeftMetricId\\": \\"3\\",\\n      \\"RightMetricId\\": \\"2\\",\\n      \\"Operator\\": \\"Division\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取AB指标列表',
    ),
    'GetABMetric' => 
    array (
      'summary' => '获取AB实验指标详细信息。',
      'path' => '/api/v1/abmetrics/{ABMetricId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ABMetricId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'AB指标ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
              'Name' => 
              array (
                'description' => '指标名称。',
                'type' => 'string',
                'example' => 'pv',
              ),
              'Description' => 
              array (
                'description' => '指标描述。',
                'type' => 'string',
                'example' => '页面访问次数',
              ),
              'SceneId' => 
              array (
                'description' => '场景ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'SceneName' => 
              array (
                'description' => '场景名称。',
                'type' => 'string',
                'example' => 'home_feed',
              ),
              'Type' => 
              array (
                'description' => '指标类型。

- Single-单一指标。

- Derived-衍生指标。',
                'type' => 'string',
                'example' => 'Single',
              ),
              'Realtime' => 
              array (
                'description' => '是否为实时指标。

- true-是。

- false-否。',
                'type' => 'string',
                'example' => 'false',
              ),
              'TableMetaId' => 
              array (
                'description' => '来源数据表ID。',
                'type' => 'string',
                'example' => '2',
              ),
              'ResultTableMetaId' => 
              array (
                'description' => '数据写回到的数据表ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'ResultResourceId' => 
              array (
                'description' => '写回数据表的数据源的ID。',
                'type' => 'string',
                'example' => '5',
              ),
              'Definition' => 
              array (
                'description' => '指标定义。',
                'type' => 'string',
                'example' => 'sum(click_cnt)',
              ),
              'StatisticsCycle' => 
              array (
                'description' => '统计周期。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'LeftMetricId' => 
              array (
                'description' => '衍生指标的左指标ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'RightMetricId' => 
              array (
                'description' => '衍生指标的右指标ID。',
                'type' => 'string',
                'example' => '2',
              ),
              'Operator' => 
              array (
                'description' => '衍生指标计算的操作符。

- Plus-加

- Minus-减

- Multiplication-乘

- Division-除',
                'type' => 'string',
                'example' => 'Division',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"Name\\": \\"pv\\",\\n  \\"Description\\": \\"页面访问次数\\",\\n  \\"SceneId\\": \\"1\\",\\n  \\"SceneName\\": \\"home_feed\\",\\n  \\"Type\\": \\"Single\\",\\n  \\"Realtime\\": \\"false\\",\\n  \\"TableMetaId\\": \\"2\\",\\n  \\"ResultTableMetaId\\": \\"3\\",\\n  \\"ResultResourceId\\": \\"5\\",\\n  \\"Definition\\": \\"sum(click_cnt)\\",\\n  \\"StatisticsCycle\\": 1,\\n  \\"LeftMetricId\\": \\"3\\",\\n  \\"RightMetricId\\": \\"2\\",\\n  \\"Operator\\": \\"Division\\"\\n}","type":"json"}]',
      'title' => '获取AB指标详细信息',
    ),
    'DeleteABMetric' => 
    array (
      'summary' => '删除指定AB实验指标。',
      'path' => '/api/v1/abmetrics/{ABMetricId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ABMetricId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'AB指标ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\"\\n}","type":"json"}]',
      'title' => '删除AB指标',
    ),
    'ReportABMetricGroup' => 
    array (
      'summary' => '查询指标组的报表。',
      'path' => '/api/v1/abmetricgroups/{ABMetricGroupId}/action/report',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ABMetricGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指标组ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-test1',
              ),
              'ReportType' => 
              array (
                'description' => '报表类型。

- Realtime-实时报表

- Offline-离线报表

- Market-大盘报表',
                'type' => 'string',
                'required' => true,
                'example' => 'Offline',
              ),
              'SceneId' => 
              array (
                'description' => '场景ID，可通过[ListScenes](~~2402581~~)获取。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'ExperimentGroupId' => 
              array (
                'description' => '实验组ID，可通过接口[ListExperimentGroups](~~2402573~~)获取（离线、实时报表需要）。',
                'type' => 'string',
                'required' => false,
                'example' => '3',
              ),
              'ExperimentIds' => 
              array (
                'description' => '实验ID列表，可通过[ListExperiments](~~2402582~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => '3,4,5',
              ),
              'BaseExperimentId' => 
              array (
                'description' => '基准实验ID。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'TimeStatisticsMethod' => 
              array (
                'description' => '统计时间类型（实时报表需要）。

- Hour-按小时统计。

- Day-从当日0点开始累加。',
                'type' => 'string',
                'required' => false,
                'example' => 'Hour',
              ),
              'DimensionFields' => 
              array (
                'description' => '维度字段。',
                'type' => 'string',
                'required' => false,
                'example' => '{"gender":"man"}',
              ),
              'StartDate' => 
              array (
                'description' => '开始日期。',
                'type' => 'string',
                'required' => false,
                'example' => '2021-07-01',
              ),
              'EndDate' => 
              array (
                'description' => '结束日期。',
                'type' => 'string',
                'required' => false,
                'example' => '2021-07-01',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '59CE7EC6-F268-5D71-9215-32922CC50D72',
              ),
              'ExperimentReport' => 
              array (
                'description' => '实验报表。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Baseline' => 
                    array (
                      'type' => 'boolean',
                      'description' => '是否是基准实验数据。',
                      'example' => 'true',
                    ),
                    'MetricResults' => 
                    array (
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ExpId' => 
                            array (
                              'type' => 'string',
                              'description' => '实验ID。',
                              'example' => '2',
                            ),
                            'ExpName' => 
                            array (
                              'type' => 'string',
                              'example' => 'test实验',
                              'description' => '实验名称。',
                            ),
                            'MetricName' => 
                            array (
                              'type' => 'string',
                              'example' => 'pv',
                              'description' => '指标名称。',
                            ),
                            'MetricValue' => 
                            array (
                              'type' => 'string',
                              'example' => '100',
                              'description' => '指标值。',
                            ),
                            'DimensionValue' => 
                            array (
                              'type' => 'string',
                              'example' => 'ALL',
                              'description' => '维度值。',
                            ),
                            'Date' => 
                            array (
                              'type' => 'string',
                              'example' => '20230206',
                              'description' => '日期。',
                            ),
                            'PercentDiff' => 
                            array (
                              'type' => 'string',
                              'description' => '相较于base的增长率。',
                              'example' => '0.1',
                            ),
                            'PercentDiffStr' => 
                            array (
                              'type' => 'string',
                              'description' => '相较于base的增长率（string 类型）。',
                              'example' => '"0.1"',
                            ),
                          ),
                          'description' => '指标结果。',
                        ),
                        'description' => '指标结果。',
                      ),
                      'description' => '指标结果。',
                    ),
                  ),
                  'description' => '报表信息。',
                ),
              ),
              'GroupDimension' => 
              array (
                'description' => '维度字段。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '维度信息。',
                  'type' => 'string',
                  'example' => '["all"]',
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59CE7EC6-F268-5D71-9215-32922CC50D72\\",\\n  \\"ExperimentReport\\": {\\n    \\"key\\": {\\n      \\"Baseline\\": true,\\n      \\"MetricResults\\": {\\n        \\"key\\": {\\n          \\"key\\": {\\n            \\"ExpId\\": \\"2\\",\\n            \\"ExpName\\": \\"test实验\\",\\n            \\"MetricName\\": \\"pv\\",\\n            \\"MetricValue\\": \\"100\\",\\n            \\"DimensionValue\\": \\"ALL\\",\\n            \\"Date\\": \\"20230206\\",\\n            \\"PercentDiff\\": \\"0.1\\",\\n            \\"PercentDiffStr\\": \\"\\\\\\"0.1\\\\\\"\\"\\n          }\\n        }\\n      }\\n    }\\n  },\\n  \\"GroupDimension\\": [\\n    \\"[\\\\\\"all\\\\\\"]\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询指标组报表',
    ),
    'UpdateABMetricGroup' => 
    array (
      'summary' => '更新AB实验指标组。',
      'path' => '/api/v1/abmetricgroups/{ABMetricGroupId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '指标组名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'visits',
              ),
              'SceneId' => 
              array (
                'description' => '场景ID，可通过接口[ListScenes](~~2402581~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'Description' => 
              array (
                'description' => '指标组描述。',
                'type' => 'string',
                'required' => true,
                'example' => '访问量相关指标',
              ),
              'ABMetricIds' => 
              array (
                'description' => 'AB实验指标ID列表，逗号分隔。',
                'type' => 'string',
                'required' => true,
                'example' => '1,2',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID，可从接口[ListInstances](~~2411819~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-test1',
              ),
              'Realtime' => 
              array (
                'description' => '是否为实时指标组。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ABMetricGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指标组ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\"\\n}","type":"json"}]',
      'title' => '更新指标组',
    ),
    'CreateABMetricGroup' => 
    array (
      'summary' => '创建AB实验指标组。',
      'path' => '/api/v1/abmetricgroups',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '指标组名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'visits',
              ),
              'SceneId' => 
              array (
                'description' => '场景ID，可通过接口[ListScenes](~~2402581~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'Description' => 
              array (
                'description' => '指标组描述。',
                'type' => 'string',
                'required' => true,
                'example' => '访问量相关指标',
              ),
              'ABMetricIds' => 
              array (
                'description' => 'AB实验指标ID列表，逗号分隔。',
                'type' => 'string',
                'required' => true,
                'example' => '1,2',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-test1',
              ),
              'Realtime' => 
              array (
                'description' => '是否为实时指标组。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E15A1443-7917-5BE0-AE70-25538ECF398D',
              ),
              'ABMetricGroupId' => 
              array (
                'description' => '指标组ID。',
                'type' => 'string',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E15A1443-7917-5BE0-AE70-25538ECF398D\\",\\n  \\"ABMetricGroupId\\": \\"1\\"\\n}","type":"json"}]',
      'title' => '创建指标组',
    ),
    'ListABMetricGroups' => 
    array (
      'summary' => '获取AB实验指标组列表。',
      'path' => '/api/v1/abmetricgroups',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID，可通过接口[ListScenes]((~~2402581~~))获取。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Realtime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指标组实时类型过滤',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序依据，取值：

- GmtCreateTime：创建时间。
- GmtModifiedTime：更新时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtCreateTime',
          ),
        ),
        6 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，取值：

- ASC：升序。
- DESC：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E15A1443-7917-5BE0-AE70-25538ECF398D',
              ),
              'TotalCount' => 
              array (
                'description' => '总个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'ABMetricGroups' => 
              array (
                'description' => 'AB指标组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'AB指标组信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ABMetricGroupId' => 
                    array (
                      'description' => '指标组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Name' => 
                    array (
                      'description' => '指标组名称。',
                      'type' => 'string',
                      'example' => 'visits',
                    ),
                    'SceneId' => 
                    array (
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Description' => 
                    array (
                      'description' => '指标组描述。',
                      'type' => 'string',
                      'example' => '访问量相关指标',
                    ),
                    'Owner' => 
                    array (
                      'description' => '负责人。',
                      'type' => 'string',
                      'example' => '2799614***',
                    ),
                    'ABMetricIds' => 
                    array (
                      'description' => 'AB实验指标ID列表，逗号分隔。',
                      'type' => 'string',
                      'example' => '1,2',
                    ),
                    'ABMetricNames' => 
                    array (
                      'description' => 'AB实验指标名称列表，逗号分隔。',
                      'type' => 'string',
                      'example' => 'pv,uv',
                    ),
                    'Realtime' => 
                    array (
                      'description' => '是否为实时指标组。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E15A1443-7917-5BE0-AE70-25538ECF398D\\",\\n  \\"TotalCount\\": 10,\\n  \\"ABMetricGroups\\": [\\n    {\\n      \\"ABMetricGroupId\\": \\"1\\",\\n      \\"Name\\": \\"visits\\",\\n      \\"SceneId\\": \\"1\\",\\n      \\"Description\\": \\"访问量相关指标\\",\\n      \\"Owner\\": \\"2799614***\\",\\n      \\"ABMetricIds\\": \\"1,2\\",\\n      \\"ABMetricNames\\": \\"pv,uv\\",\\n      \\"Realtime\\": false\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取指标组列表',
    ),
    'GetABMetricGroup' => 
    array (
      'summary' => '获取AB实验指标组详细信息。',
      'path' => '/api/v1/abmetricgroups/{ABMetricGroupId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ABMetricGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指标组ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '01D22D08-BA20-5F35-8302-99115F288220',
              ),
              'Name' => 
              array (
                'description' => '指标组名称。',
                'type' => 'string',
                'example' => 'visits',
              ),
              'SceneId' => 
              array (
                'description' => '场景ID，来源于[ListScenes](https://icms.alibaba-inc.com/content/learn/pai?l=1&m=16768&n=4298955)接口。',
                'type' => 'string',
                'example' => '1',
              ),
              'Description' => 
              array (
                'description' => '指标组描述。',
                'type' => 'string',
                'example' => '访问量相关指标',
              ),
              'Owner' => 
              array (
                'description' => '负责人。',
                'type' => 'string',
                'example' => '2799614***
',
              ),
              'ABMetricIds' => 
              array (
                'description' => 'AB实验指标ID列表，逗号分隔。',
                'type' => 'string',
                'example' => '1,2',
              ),
              'ABMetricNames' => 
              array (
                'description' => 'AB实验指标名称列表，逗号分隔。',
                'type' => 'string',
                'example' => 'pv,uv',
              ),
              'Realtime' => 
              array (
                'description' => '是否为实时指标组。',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01D22D08-BA20-5F35-8302-99115F288220\\",\\n  \\"Name\\": \\"visits\\",\\n  \\"SceneId\\": \\"1\\",\\n  \\"Description\\": \\"访问量相关指标\\",\\n  \\"Owner\\": \\"2799614***\\\\n\\",\\n  \\"ABMetricIds\\": \\"1,2\\",\\n  \\"ABMetricNames\\": \\"pv,uv\\",\\n  \\"Realtime\\": false\\n}","type":"json"}]',
      'title' => '获取指标组详细信息',
    ),
    'DeleteABMetricGroup' => 
    array (
      'summary' => '删除AB实验指标组。',
      'path' => '/api/v1/abmetricgroups/{ABMetricGroupId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ABMetricGroupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指标组ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BDB621CB-A81E-5D39-8793-39A365CBCC74',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDB621CB-A81E-5D39-8793-39A365CBCC74\\"\\n}","type":"json"}]',
      'title' => '删除指标组',
    ),
    'ListCalculationJobs' => 
    array (
      'summary' => '获取计算任务列表。',
      'path' => '/api/v1/calculationjobs',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
        3 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID，可通过[ListScenes](~~2402581~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态。

- Success-成功

- Failure-失败

- Initializing-初始化中

- Running-运行中',
            'type' => 'string',
            'required' => false,
            'example' => 'Success',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
              ),
              'TotalCount' => 
              array (
                'description' => '列表内元素总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'CalculationJobs' => 
              array (
                'description' => '计算任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '计算任务信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CalculationJobId' => 
                    array (
                      'description' => '计算任务ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'ABMetricName' => 
                    array (
                      'description' => 'AB指标名称。',
                      'type' => 'string',
                      'example' => 'pv',
                    ),
                    'Status' => 
                    array (
                      'description' => '任务状态。

- Success-成功

- Failure-失败

- Initializing-初始化中

- Running-运行中',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'JobMessage' => 
                    array (
                      'description' => '任务信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '任务信息。',
                        'type' => 'string',
                        'example' => 'success',
                      ),
                    ),
                    'Config' => 
                    array (
                      'description' => '任务配置。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'GmtRanTime' => 
                    array (
                      'description' => '运行时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                    'BizDate' => 
                    array (
                      'description' => '业务时间。',
                      'type' => 'string',
                      'example' => '2021-12-15',
                    ),
                    'JobSource' => 
                    array (
                      'description' => '任务来源。

- CronOffline-离线定时任务

- DataRerun-数据重跑任务',
                      'type' => 'string',
                      'example' => 'CronOffline',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\",\\n  \\"TotalCount\\": 10,\\n  \\"CalculationJobs\\": [\\n    {\\n      \\"CalculationJobId\\": \\"2\\",\\n      \\"ABMetricName\\": \\"pv\\",\\n      \\"Status\\": \\"Success\\",\\n      \\"JobMessage\\": [\\n        \\"success\\"\\n      ],\\n      \\"Config\\": \\"{}\\",\\n      \\"GmtRanTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"BizDate\\": \\"2021-12-15\\",\\n      \\"JobSource\\": \\"CronOffline\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取计算任务列表',
    ),
    'GetCalculationJob' => 
    array (
      'summary' => '获取指定计算任务详细信息。',
      'path' => '/api/v1/calculationjobs/{CalculationJobId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CalculationJobId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '计算任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可通过接口[ListInstances](~~2411819~~)获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-test1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7D59453C-48AA-5FC5-8848-2D373BD1A17F',
              ),
              'ABMetricId' => 
              array (
                'description' => 'AB指标ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'ABMetricName' => 
              array (
                'description' => 'AB指标名称。',
                'type' => 'string',
                'example' => 'pv',
              ),
              'Status' => 
              array (
                'description' => '状态。

- Success-成功

- Failure-失败

- Initializing-初始化中

- Running-运行中',
                'type' => 'string',
                'example' => 'Success',
              ),
              'JobMessage' => 
              array (
                'description' => '任务信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务信息。',
                  'type' => 'string',
                  'example' => 'success',
                ),
              ),
              'Config' => 
              array (
                'description' => '任务配置。',
                'type' => 'string',
                'example' => '{}',
              ),
              'GmtRanTime' => 
              array (
                'description' => '运行时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'BizDate' => 
              array (
                'description' => '业务时间。',
                'type' => 'string',
                'example' => '2021-12-15',
              ),
              'JobSource' => 
              array (
                'description' => '任务来源。

- CronOffline-离线定时任务

- DataRerun-数据重跑任务',
                'type' => 'string',
                'example' => 'CronOffline',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7D59453C-48AA-5FC5-8848-2D373BD1A17F\\",\\n  \\"ABMetricId\\": \\"1\\",\\n  \\"ABMetricName\\": \\"pv\\",\\n  \\"Status\\": \\"Success\\",\\n  \\"JobMessage\\": [\\n    \\"success\\"\\n  ],\\n  \\"Config\\": \\"{}\\",\\n  \\"GmtRanTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"BizDate\\": \\"2021-12-15\\",\\n  \\"JobSource\\": \\"CronOffline\\"\\n}","type":"json"}]',
      'title' => '获取计算任务',
    ),
    'CreateCalculationJobs' => 
    array (
      'summary' => '批量创建计算任务。',
      'path' => '/api/v1/batch/calculationjobs/create',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'ABMetricIds' => 
              array (
                'description' => 'AB实验指标ID列表，使用逗号分隔。',
                'type' => 'string',
                'required' => true,
                'example' => '2,3,4',
              ),
              'StartDate' => 
              array (
                'description' => '开始日期。',
                'type' => 'string',
                'required' => true,
                'example' => '2023-01-01',
              ),
              'EndDate' => 
              array (
                'description' => '结束日期。',
                'type' => 'string',
                'required' => true,
                'example' => '2023-01-03',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID，可从接口[ListInstances](~~2411819~~)获取。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-test1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8C27790E-CCA5-56BB-BA17-646295DEC0A2',
              ),
              'CalculationJobIds' => 
              array (
                'description' => '计算任务ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'ID列表。',
                  'type' => 'string',
                  'example' => '["12","13","14"]',
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8C27790E-CCA5-56BB-BA17-646295DEC0A2\\",\\n  \\"CalculationJobIds\\": [\\n    \\"[\\\\\\"12\\\\\\",\\\\\\"13\\\\\\",\\\\\\"14\\\\\\"]\\"\\n  ]\\n}","type":"json"}]',
      'title' => '创建计算任务',
    ),
    'CreateFeatureConsistencyCheckJobConfig' => 
    array (
      'summary' => '创建特征一致性检查任务配置。',
      'path' => '/api/v1/featureconsistencycheck/jobconfigs',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-********',
              ),
              'Name' => 
              array (
                'title' => '特征一致性检查名称。',
                'description' => '特征一致性检查名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'feature_consistency_check1',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'SampleRate' => 
              array (
                'title' => '采样比例（0-1）。',
                'description' => '采样比例（0-1）。',
                'type' => 'number',
                'format' => 'double',
                'required' => true,
                'example' => '0.89',
              ),
              'FeatureLandingResourceId' => 
              array (
                'title' => '数据回落数据源ID。',
                'description' => '数据回落数据源ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'reso-********',
              ),
              'EasServiceName' => 
              array (
                'title' => 'PAI-EAS服务名称。',
                'description' => 'PAI-EAS服务名称。如何获取服务名称，请参见[ListServices](~~412109~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'service_123',
              ),
              'FgJsonFileName' => 
              array (
                'title' => 'fg_json文件名称。',
                'description' => 'fg_json文件名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'file.json',
              ),
              'UserTable' => 
              array (
                'title' => 'user表名。',
                'description' => 'user表名。',
                'type' => 'string',
                'required' => false,
                'example' => 'user_table',
              ),
              'UserIdField' => 
              array (
                'title' => 'user_id字段名。',
                'description' => 'user_id字段名。',
                'type' => 'string',
                'required' => false,
                'example' => 'user_id',
              ),
              'UserTablePartitionField' => 
              array (
                'title' => 'user表分区字段。',
                'description' => 'user表分区字段。',
                'type' => 'string',
                'required' => false,
                'example' => 'ds',
              ),
              'UserTablePartitionFieldFormat' => 
              array (
                'title' => 'user表分区字段格式。
● yyyymmdd
● yyyy-mm-dd',
                'description' => 'user表分区字段格式。
- yyyymmdd
- yyyy-mm-dd',
                'type' => 'string',
                'required' => false,
                'example' => 'yyyymmdd',
              ),
              'ItemTable' => 
              array (
                'title' => 'item表名。',
                'description' => 'item表名。',
                'type' => 'string',
                'required' => false,
                'example' => 'item_table',
              ),
              'ItemIdField' => 
              array (
                'title' => 'item_id字段名。',
                'description' => 'item_id字段名。',
                'type' => 'string',
                'required' => false,
                'example' => 'item_id',
              ),
              'ItemTablePartitionField' => 
              array (
                'title' => 'item表分区字段。',
                'description' => 'item表分区字段。',
                'type' => 'string',
                'required' => false,
                'example' => 'ds',
              ),
              'ItemTablePartitionFieldFormat' => 
              array (
                'title' => 'item表分区字段格式。
● yyyymmdd
● yyyy-mm-dd',
                'description' => 'item表分区字段格式。
- yyyymmdd
- yyyy-mm-dd',
                'type' => 'string',
                'required' => false,
                'example' => 'yyyymmdd',
              ),
              'CompareFeature' => 
              array (
                'title' => '是否需要特征比对。',
                'description' => '是否需要特征比对。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'GenerateZip' => 
              array (
                'title' => '是否需要生成zip包。',
                'description' => '是否需要生成zip包。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'ServiceId' => 
              array (
                'title' => '服务ID。',
                'description' => '服务ID。',
                'type' => 'string',
                'required' => true,
                'example' => '4',
              ),
              'WorkflowName' => 
              array (
                'title' => '工作流名称。',
                'description' => '工作流名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'work_flow_1',
              ),
              'OssResourceId' => 
              array (
                'title' => 'OSS数据源ID。',
                'description' => 'OSS数据源ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'reso-********',
              ),
              'EasyRecVersion' => 
              array (
                'title' => 'EasyRec版本。',
                'description' => 'EasyRec版本。',
                'type' => 'string',
                'required' => false,
                'example' => '1.3.60',
              ),
              'EasyRecPackagePath' => 
              array (
                'title' => 'EasyRec包路径。',
                'description' => 'EasyRec包所在的OSS Bucket路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'oss://*******',
              ),
              'FgJarVersion' => 
              array (
                'title' => 'fg_jar版本。',
                'description' => 'fg_jar版本。',
                'type' => 'string',
                'required' => false,
                'example' => '1.0.0',
              ),
              'FeaturePriority' => 
              array (
                'title' => '特征优先级，多个特征通过逗号分开。',
                'description' => '特征优先级，多个特征通过半角逗号（,）分开。',
                'type' => 'string',
                'required' => false,
                'example' => 'feature1,feature2,feature3',
              ),
              'FeatureDisplayExclude' => 
              array (
                'title' => '特征展示过滤，多个特征通过逗号分开。',
                'description' => '特征展示过滤，多个特征通过半角逗号（,）分开。',
                'type' => 'string',
                'required' => false,
                'example' => 'feature1,feature2',
              ),
              'UseFeatureStore' => 
              array (
                'description' => '是否需要使用feature store，取值：

- true：使用feature store，此时FeatureStoreProjectId、FeatureStoreProjectName、FeatureStoreModelId、FeatureStoreUserId、FeatureStoreItemId为必填项。
- false：不使用feature store，此时UserTable、UserIdField、UserTablePartitionField、UserTablePartitionFieldFormat、ItemTable、ItemIdField、ItemTablePartitionField、ItemTablePartitionFieldFormat为必填项。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
                'default' => 'false',
              ),
              'FeatureStoreProjectName' => 
              array (
                'description' => 'feature store项目名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'project-1',
              ),
              'FeatureStoreModelId' => 
              array (
                'description' => 'feature store model ID。',
                'type' => 'string',
                'required' => false,
                'example' => '2',
              ),
              'FeatureStoreUserId' => 
              array (
                'description' => 'feature store user侧主键。',
                'type' => 'string',
                'required' => false,
                'example' => 'user',
              ),
              'FeatureStoreItemId' => 
              array (
                'description' => 'feature store item侧主键。',
                'type' => 'string',
                'required' => false,
                'example' => 'item',
              ),
              'FeatureStoreSeqFeatureView' => 
              array (
                'description' => '序列特征中item特征所在的特征视图的名字。',
                'type' => 'string',
                'required' => false,
                'example' => 'item-1',
              ),
              'FeatureStoreProjectId' => 
              array (
                'description' => 'feature store项目ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'prj-01',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E15A1443-7917-5BE0-AE70-25538ECF398D',
              ),
              'FeatureConsistencyCheckJobConfigId' => 
              array (
                'title' => '特征一致性检查配置ID。',
                'description' => '特征一致性检查配置ID。',
                'type' => 'string',
                'example' => '4',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E15A1443-7917-5BE0-AE70-25538ECF398D\\",\\n  \\"FeatureConsistencyCheckJobConfigId\\": \\"4\\"\\n}","type":"json"}]',
      'title' => '创建特征一致性检查任务配置',
    ),
    'CreateFeatureConsistencyCheckJob' => 
    array (
      'summary' => '创建特征一致性检查任务。',
      'path' => '/api/v1/featureconsistencycheck/jobs',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-********',
              ),
              'FeatureConsistencyCheckJobConfigId' => 
              array (
                'title' => '特征一致性检查任务配置ID。',
                'description' => '特征一致性检查任务配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'Environment' => 
              array (
                'title' => '运行环境。
● Daily-日常环境
● Pre-预发环境
● Prod-生产环境',
                'description' => '运行环境：
- Daily：日常环境
- Pre：预发环境
- Prod：生产环境',
                'type' => 'string',
                'required' => true,
                'example' => 'Pre',
              ),
              'SamplingDuration' => 
              array (
                'description' => '采样运行时长（单位：分钟）。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '10',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7D59453C-48AA-5FC5-8848-2D373BD1A17F',
              ),
              'FeatureConsistencyCheckJobId' => 
              array (
                'title' => '特征一致性检查任务ID。',
                'description' => '特征一致性检查任务ID。',
                'type' => 'string',
                'example' => '4',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7D59453C-48AA-5FC5-8848-2D373BD1A17F\\",\\n  \\"FeatureConsistencyCheckJobId\\": \\"4\\"\\n}","type":"json"}]',
      'title' => '创建特征一致性检查任务',
    ),
    'UpdateFeatureConsistencyCheckJobConfig' => 
    array (
      'summary' => '更新特征一致性检查任务配置详细信息，例如更新名称。',
      'path' => '/api/v1/featureconsistencycheck/jobconfigs/{FeatureConsistencyCheckJobConfigId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FeatureConsistencyCheckJobConfigId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征一致性检查配置ID。',
            'description' => '特征一致性检查配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID，可从接口ListInstances获取。',
                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-********',
              ),
              'Name' => 
              array (
                'title' => '特征一致性检查名称。',
                'description' => '特征一致性检查名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'feature_consistency_check1',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'SampleRate' => 
              array (
                'title' => '采样比例（0-1）。',
                'description' => '采样比例（0-1）。',
                'type' => 'number',
                'format' => 'double',
                'required' => true,
                'example' => '0.89',
              ),
              'FeatureLandingResourceId' => 
              array (
                'title' => '数据回落数据源ID。',
                'description' => '数据回落数据源ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'reso-********',
              ),
              'EasServiceName' => 
              array (
                'title' => 'PAI-EAS服务名称。',
                'description' => 'PAI-EAS服务名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'service_123',
              ),
              'FgJsonFileName' => 
              array (
                'title' => 'fg_json文件名称。',
                'description' => 'fg_json文件名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'file.json',
              ),
              'UserTable' => 
              array (
                'title' => 'user表名。',
                'description' => 'user表名。',
                'type' => 'string',
                'required' => true,
                'example' => 'user_table',
              ),
              'UserIdField' => 
              array (
                'title' => 'user_id字段名。',
                'description' => 'user_id字段名。',
                'type' => 'string',
                'required' => true,
                'example' => 'user_id',
              ),
              'UserTablePartitionField' => 
              array (
                'title' => 'user表分区字段。',
                'description' => 'user表分区字段。',
                'type' => 'string',
                'required' => true,
                'example' => 'ds',
              ),
              'UserTablePartitionFieldFormat' => 
              array (
                'title' => 'user表分区字段格式。
● yyyymmdd
● yyyy-mm-dd',
                'description' => 'user表分区字段格式。
- yyyymmdd
- yyyy-mm-dd',
                'type' => 'string',
                'required' => true,
                'example' => 'yyyymmdd',
              ),
              'ItemTable' => 
              array (
                'title' => 'item表名。',
                'description' => 'item表名。',
                'type' => 'string',
                'required' => true,
                'example' => 'item_table',
              ),
              'ItemIdField' => 
              array (
                'title' => 'item_id字段名。',
                'description' => 'item_id字段名。',
                'type' => 'string',
                'required' => true,
                'example' => 'item_id',
              ),
              'ItemTablePartitionField' => 
              array (
                'title' => 'item表分区字段。',
                'description' => 'item表分区字段。',
                'type' => 'string',
                'required' => true,
                'example' => 'ds',
              ),
              'ItemTablePartitionFieldFormat' => 
              array (
                'title' => 'item表分区字段格式。
● yyyymmdd
● yyyy-mm-dd',
                'description' => 'item表分区字段格式：
- yyyymmdd
- yyyy-mm-dd',
                'type' => 'string',
                'required' => true,
                'example' => 'yyyymmdd',
              ),
              'CompareFeature' => 
              array (
                'title' => '是否需要特征比对。',
                'description' => '是否需要特征比对。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'GenerateZip' => 
              array (
                'title' => '是否需要生成zip包。',
                'description' => '是否需要生成zip包。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'ServiceId' => 
              array (
                'title' => '服务ID。',
                'description' => '服务ID。',
                'type' => 'string',
                'required' => false,
                'example' => '4',
              ),
              'WorkflowName' => 
              array (
                'title' => '工作流名称。',
                'description' => '工作流名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'work_flow_1',
              ),
              'OssResourceId' => 
              array (
                'title' => 'OSS数据源ID。',
                'description' => 'OSS数据源ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'reso-********',
              ),
              'EasyRecVersion' => 
              array (
                'title' => 'EasyRec版本。',
                'description' => 'EasyRec版本。',
                'type' => 'string',
                'required' => false,
                'example' => '1.3.60',
              ),
              'EasyRecPackagePath' => 
              array (
                'title' => 'EasyRec包路径。',
                'description' => 'EasyRec包路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'oss://********',
              ),
              'FgJarVersion' => 
              array (
                'title' => 'fg_jar版本。',
                'description' => 'fg_jar版本。',
                'type' => 'string',
                'required' => false,
                'example' => '1.0.0',
              ),
              'FeaturePriority' => 
              array (
                'title' => '特征优先级，多个特征通过逗号分开。',
                'description' => '特征优先级，多个特征通过半角逗号（,）分开，表示哪些特征优先从user表读取，若user表为空，则从行为表查询。',
                'type' => 'string',
                'required' => false,
                'example' => 'feature1,feature2,feature3',
              ),
              'FeatureDisplayExclude' => 
              array (
                'title' => '特征展示过滤，多个特征通过逗号分开。',
                'description' => '特征展示过滤，多个特征通过半角逗号（,）分开。',
                'type' => 'string',
                'required' => false,
                'example' => 'feature1,feature2',
              ),
              'IsUseFeatureStore' => 
              array (
                'type' => 'boolean',
                'required' => false,
              ),
              'FeatureStoreProjectName' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'FeatureStoreModelId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'FeatureStoreUserId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'FeatureStoreItemId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'FeatureStoreSeqFeatureView' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'FeatureStoreProjectId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\"\\n}","type":"json"}]',
      'title' => '更新特征一致性检查任务配置',
    ),
    'ListFeatureConsistencyCheckJobConfigs' => 
    array (
      'summary' => '获取特征一致性检查任务配置列表。',
      'path' => '/api/v1/featureconsistencycheck/jobconfigs',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-********',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码。',
            'description' => '页码。起始值为1，默认值为1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小。',
            'description' => '页大小。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序依据。
GmtCreateTime-创建时间。
GmtModifiedTime-更新时间。',
            'description' => '排序依据。
- GmtCreateTime：按创建时间排序。
- GmtModifiedTime-按更新时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtCreateTime',
          ),
        ),
        4 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式。
● ASC-升序。
● DESC-降序。',
            'description' => '排序方式。
- ASC：升序。
- DESC：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FCF741D8-9C30-578E-807F-B935487DB34A',
              ),
              'TotalCount' => 
              array (
                'title' => '总个数。',
                'description' => '总个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'FeatureConsistencyCheckConfigs' => 
              array (
                'title' => '特征一致性检查列表。',
                'description' => '特征一致性检查列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FeatureConsistencyCheckJobConfigId' => 
                    array (
                      'title' => '特征一致性检查配置ID。',
                      'description' => '特征一致性检查配置ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Name' => 
                    array (
                      'title' => '特征一致性检查配置名称。',
                      'description' => '特征一致性检查配置名称。',
                      'type' => 'string',
                      'example' => 'feature_consistency_check1',
                    ),
                    'SceneId' => 
                    array (
                      'title' => '场景ID。',
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'SceneName' => 
                    array (
                      'title' => '场景名称。',
                      'description' => '场景名称。',
                      'type' => 'string',
                      'example' => 'scene1',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态。
● Editable-可编辑的。
● Uneditable-不可编辑的。',
                      'description' => '状态。可能值为：
- Editable：可编辑的。
- Uneditable：不可编辑的。',
                      'type' => 'string',
                      'example' => 'Editable',
                    ),
                    'CompareFeature' => 
                    array (
                      'title' => '是否开启特征比对。',
                      'description' => '是否开启特征比对。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'LatestJobId' => 
                    array (
                      'title' => '基于该配置最近一次创建的任务ID。',
                      'description' => '基于该配置最近一次创建的任务ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'LatestJobGmtSamplingStartTime' => 
                    array (
                      'title' => '最近一次创建的任务的开始时间。',
                      'description' => '最近一次创建的任务的开始时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                    'LatestJobGmtSamplingEndTime' => 
                    array (
                      'title' => '最近一次创建的任务的结束时间。',
                      'description' => '最近一次创建的任务的结束时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                    'SampleRate' => 
                    array (
                      'title' => '采样比例（0-1）。',
                      'description' => '采样比例（0-1）。',
                      'type' => 'string',
                      'example' => '0.89',
                    ),
                    'FeatureLandingResourceId' => 
                    array (
                      'title' => '数据回落数据源ID。',
                      'description' => '数据回落数据源ID。',
                      'type' => 'string',
                      'example' => 'reso-********',
                    ),
                    'FeatureLandingResourceUri' => 
                    array (
                      'title' => '数据回落数据源地址。',
                      'description' => '数据回落数据源地址。',
                      'type' => 'string',
                      'example' => 'mc_project_1',
                    ),
                    'EasServiceName' => 
                    array (
                      'title' => 'EAS服务名称。',
                      'description' => 'EAS服务名称。',
                      'type' => 'string',
                      'example' => 'eas_service_1',
                    ),
                    'FgJsonFileName' => 
                    array (
                      'title' => 'fg_json文件名称。',
                      'description' => 'fg_json文件名称。',
                      'type' => 'string',
                      'example' => 'file.json',
                    ),
                    'UserTable' => 
                    array (
                      'title' => 'user表名。',
                      'description' => 'user表名。',
                      'type' => 'string',
                      'example' => 'user_table',
                    ),
                    'UserIdField' => 
                    array (
                      'title' => 'user_id字段名。',
                      'description' => 'user_id字段名。',
                      'type' => 'string',
                      'example' => 'user_id',
                    ),
                    'UserTablePartitionField' => 
                    array (
                      'title' => 'user表分区字段。',
                      'description' => 'user表分区字段。',
                      'type' => 'string',
                      'example' => 'ds',
                    ),
                    'UserTablePartitionFieldFormat' => 
                    array (
                      'title' => 'user表分区字段格式。
● yyyymmdd
● yyyy-mm-dd',
                      'description' => 'user表分区字段格式：
- yyyymmdd
- yyyy-mm-dd',
                      'type' => 'string',
                      'example' => 'yyyymmdd',
                    ),
                    'ItemTable' => 
                    array (
                      'title' => 'item表名。',
                      'description' => 'item表名。',
                      'type' => 'string',
                      'example' => 'item_table',
                    ),
                    'ItemIdField' => 
                    array (
                      'title' => 'item_id字段名。',
                      'description' => 'item_id字段名。',
                      'type' => 'string',
                      'example' => 'item_id',
                    ),
                    'ItemTablePartitionField' => 
                    array (
                      'title' => 'item表分区字段。',
                      'description' => 'item表分区字段。',
                      'type' => 'string',
                      'example' => 'ds',
                    ),
                    'ItemTablePartitionFieldFormat' => 
                    array (
                      'title' => 'item表分区字段格式。
● yyyymmdd
● yyyy-mm-dd',
                      'description' => 'item表分区字段格式：
- yyyymmdd
- yyyy-mm-dd',
                      'type' => 'string',
                      'example' => 'yyyymmdd',
                    ),
                    'GenerateZip' => 
                    array (
                      'title' => '是否需要生成zip包。',
                      'description' => '是否需要生成zip包。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ServiceId' => 
                    array (
                      'title' => '服务ID。',
                      'description' => '服务ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'ServiceName' => 
                    array (
                      'title' => '服务名称。',
                      'description' => '服务名称。',
                      'type' => 'string',
                      'example' => 'service1',
                    ),
                    'WorkflowName' => 
                    array (
                      'title' => '工作流名称。',
                      'description' => '工作流名称。',
                      'type' => 'string',
                      'example' => 'work_flow_1',
                    ),
                    'OssResourceId' => 
                    array (
                      'title' => 'OSS数据源ID。',
                      'description' => 'OSS数据源ID。',
                      'type' => 'string',
                      'example' => 'reso-********',
                    ),
                    'OssBucket' => 
                    array (
                      'title' => 'OSS bucket名称。',
                      'description' => 'OSS bucket名称。',
                      'type' => 'string',
                      'example' => 'oss_bucket_1',
                    ),
                    'EasyRecVersion' => 
                    array (
                      'title' => 'EasyRec版本。',
                      'description' => 'EasyRec版本。',
                      'type' => 'string',
                      'example' => '1.3.60',
                    ),
                    'EasyRecPackagePath' => 
                    array (
                      'title' => 'EasyRec包路径。',
                      'description' => 'EasyRec包路径。',
                      'type' => 'string',
                      'example' => 'oss://*******',
                    ),
                    'FgJarVersion' => 
                    array (
                      'title' => 'fg_jar版本。',
                      'description' => 'fg_jar版本。',
                      'type' => 'string',
                      'example' => '1.0.0',
                    ),
                    'FeaturePriority' => 
                    array (
                      'title' => '特征优先级，多个特征通过逗号分开。',
                      'description' => '特征优先级，多个特征通过半角逗号（,）分开，表示哪些特征优先从user表读取，若user表为空，则从行为表查询。',
                      'type' => 'string',
                      'example' => 'feature1,feature2,feature3',
                    ),
                    'FeatureDisplayExclude' => 
                    array (
                      'title' => '特征展示过滤，多个特征通过逗号分开。',
                      'description' => '特征展示过滤，多个特征通过半角逗号（,）分开。',
                      'type' => 'string',
                      'example' => 'feature1,feature2',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '创建时间。',
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'title' => '更新时间。',
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                    'UseFeatureStore' => 
                    array (
                      'description' => '是否使用feature store，取值：

- true：使用，此时返回FeatureStoreProjectId、FeatureStoreProjectName、FeatureStoreModelId、FeatureStoreUserId、FeatureStoreItemId。
- false：不使用，此时返回UserTable、UserIdField、UserTablePartitionField、UserTablePartitionFieldFormat、ItemTable、ItemIdField、ItemTablePartitionField、ItemTablePartitionFieldFormat。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'FeatureStoreProjectName' => 
                    array (
                      'description' => 'feature store项目名称。',
                      'type' => 'string',
                      'example' => 'project-1',
                    ),
                    'FeatureStoreModelId' => 
                    array (
                      'description' => 'feature store model ID。',
                      'type' => 'string',
                      'example' => '2
',
                    ),
                    'FeatureStoreUserId' => 
                    array (
                      'description' => 'feature store user侧主键。',
                      'type' => 'string',
                      'example' => 'user',
                    ),
                    'FeatureStoreItemId' => 
                    array (
                      'description' => 'feature store item侧主键。',
                      'type' => 'string',
                      'example' => 'item',
                    ),
                    'FeatureStoreSeqFeatureView' => 
                    array (
                      'description' => '序列特征中item特征所在的特征视图的名字。',
                      'type' => 'string',
                      'example' => 'item-1',
                    ),
                    'FeatureStoreProjectId' => 
                    array (
                      'description' => 'feature store项目ID。',
                      'type' => 'string',
                      'example' => 'prj-01',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FCF741D8-9C30-578E-807F-B935487DB34A\\",\\n  \\"TotalCount\\": 10,\\n  \\"FeatureConsistencyCheckConfigs\\": [\\n    {\\n      \\"FeatureConsistencyCheckJobConfigId\\": \\"3\\",\\n      \\"Name\\": \\"feature_consistency_check1\\",\\n      \\"SceneId\\": \\"3\\",\\n      \\"SceneName\\": \\"scene1\\",\\n      \\"Status\\": \\"Editable\\",\\n      \\"CompareFeature\\": true,\\n      \\"LatestJobId\\": \\"3\\",\\n      \\"LatestJobGmtSamplingStartTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"LatestJobGmtSamplingEndTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"SampleRate\\": \\"0.89\\",\\n      \\"FeatureLandingResourceId\\": \\"reso-********\\",\\n      \\"FeatureLandingResourceUri\\": \\"mc_project_1\\",\\n      \\"EasServiceName\\": \\"eas_service_1\\",\\n      \\"FgJsonFileName\\": \\"file.json\\",\\n      \\"UserTable\\": \\"user_table\\",\\n      \\"UserIdField\\": \\"user_id\\",\\n      \\"UserTablePartitionField\\": \\"ds\\",\\n      \\"UserTablePartitionFieldFormat\\": \\"yyyymmdd\\",\\n      \\"ItemTable\\": \\"item_table\\",\\n      \\"ItemIdField\\": \\"item_id\\",\\n      \\"ItemTablePartitionField\\": \\"ds\\",\\n      \\"ItemTablePartitionFieldFormat\\": \\"yyyymmdd\\",\\n      \\"GenerateZip\\": true,\\n      \\"ServiceId\\": \\"4\\",\\n      \\"ServiceName\\": \\"service1\\",\\n      \\"WorkflowName\\": \\"work_flow_1\\",\\n      \\"OssResourceId\\": \\"reso-********\\",\\n      \\"OssBucket\\": \\"oss_bucket_1\\",\\n      \\"EasyRecVersion\\": \\"1.3.60\\",\\n      \\"EasyRecPackagePath\\": \\"oss://*******\\",\\n      \\"FgJarVersion\\": \\"1.0.0\\",\\n      \\"FeaturePriority\\": \\"feature1,feature2,feature3\\",\\n      \\"FeatureDisplayExclude\\": \\"feature1,feature2\\",\\n      \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"UseFeatureStore\\": \\"true\\",\\n      \\"FeatureStoreProjectName\\": \\"project-1\\",\\n      \\"FeatureStoreModelId\\": \\"2\\\\n\\",\\n      \\"FeatureStoreUserId\\": \\"user\\",\\n      \\"FeatureStoreItemId\\": \\"item\\",\\n      \\"FeatureStoreSeqFeatureView\\": \\"item-1\\",\\n      \\"FeatureStoreProjectId\\": \\"prj-01\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取特征一致性检查任务配置列表',
    ),
    'GetFeatureConsistencyCheckJobConfig' => 
    array (
      'summary' => '获取特征一致性检查任务配置详情。',
      'path' => '/api/v1/featureconsistencycheck/jobconfigs/{FeatureConsistencyCheckJobConfigId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FeatureConsistencyCheckJobConfigId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征一致性检查配置ID。',
            'description' => '特征一致性检查配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID，可从接口ListInstances获取。',
            'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
              'Name' => 
              array (
                'title' => '特征一致性检查配置名称。',
                'description' => '特征一致性检查配置名称。',
                'type' => 'string',
                'example' => 'feature_consistency_check1',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID。',
                'description' => '场景ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'SceneName' => 
              array (
                'title' => '场景名称。',
                'description' => '场景名称。',
                'type' => 'string',
                'example' => 'scene1',
              ),
              'Status' => 
              array (
                'title' => '状态。
● Editable-可编辑的。
● Uneditable-不可编辑的。',
                'description' => '状态。可能值为：
- Editable：可编辑的。
- Uneditable：不可编辑的。',
                'type' => 'string',
                'example' => 'Editable',
              ),
              'CompareFeature' => 
              array (
                'title' => '是否开启特征比对。',
                'description' => '是否开启特征比对。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LatestJobId' => 
              array (
                'title' => '基于该配置最近一次创建的任务ID。',
                'description' => '基于该配置最近一次创建的任务ID。',
                'type' => 'string',
                'example' => '3',
              ),
              'LatestJobGmtSamplingStartTime' => 
              array (
                'title' => '最近一次创建的任务的开始时间。',
                'description' => '最近一次创建的任务的开始时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'LatestJobGmtSamplingEndTime' => 
              array (
                'title' => '最近一次创建的任务的结束时间。',
                'description' => '最近一次创建的任务的结束时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'SampleRate' => 
              array (
                'title' => '采样比例（0-1）。',
                'description' => '采样比例（0-1）。',
                'type' => 'string',
                'example' => '0.89',
              ),
              'FeatureLandingResourceId' => 
              array (
                'title' => '数据回落数据源ID。',
                'description' => '数据回落数据源ID。',
                'type' => 'string',
                'example' => 'reso-********',
              ),
              'FeatureLandingResourceUri' => 
              array (
                'title' => '数据回落数据源地址。',
                'description' => '数据回落数据源地址。',
                'type' => 'string',
                'example' => 'mc_project_1',
              ),
              'EasServiceName' => 
              array (
                'title' => 'EAS服务名称。',
                'description' => 'EAS服务名称。',
                'type' => 'string',
                'example' => 'eas_service_1',
              ),
              'FgJsonFileName' => 
              array (
                'title' => 'fg_json文件名称。',
                'description' => 'fg_json文件名称。',
                'type' => 'string',
                'example' => 'file.json',
              ),
              'UserTable' => 
              array (
                'title' => 'user表名。',
                'description' => 'user表名。',
                'type' => 'string',
                'example' => 'user_table',
              ),
              'UserIdField' => 
              array (
                'title' => 'user_id字段名。',
                'description' => 'user_id字段名。',
                'type' => 'string',
                'example' => 'user_id',
              ),
              'UserTablePartitionField' => 
              array (
                'title' => 'user表分区字段。',
                'description' => 'user表分区字段。',
                'type' => 'string',
                'example' => 'ds',
              ),
              'UserTablePartitionFieldFormat' => 
              array (
                'title' => 'user表分区字段格式。
● yyyymmdd
● yyyy-mm-dd',
                'description' => 'user表分区字段格式：
- yyyymmdd
- yyyy-mm-dd',
                'type' => 'string',
                'example' => 'yyyymmdd',
              ),
              'ItemTable' => 
              array (
                'title' => 'item表名。',
                'description' => 'item表名。',
                'type' => 'string',
                'example' => 'item_table',
              ),
              'ItemIdField' => 
              array (
                'title' => 'item_id字段名。',
                'description' => 'item_id字段名。',
                'type' => 'string',
                'example' => 'item_id',
              ),
              'ItemTablePartitionField' => 
              array (
                'title' => 'item表分区字段。',
                'description' => 'item表分区字段。',
                'type' => 'string',
                'example' => 'ds',
              ),
              'ItemTablePartitionFieldFormat' => 
              array (
                'title' => 'item表分区字段格式。
● yyyymmdd
● yyyy-mm-dd',
                'description' => 'item表分区字段格式：
- yyyymmdd
- yyyy-mm-dd',
                'type' => 'string',
                'example' => 'yyyymmdd',
              ),
              'GenerateZip' => 
              array (
                'title' => '是否需要生成zip包。',
                'description' => '是否需要生成zip包。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ServiceId' => 
              array (
                'title' => '服务ID。',
                'description' => '服务ID。',
                'type' => 'string',
                'example' => '4',
              ),
              'ServiceName' => 
              array (
                'title' => '服务名称。',
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'service1',
              ),
              'WorkflowName' => 
              array (
                'title' => '工作流名称。',
                'description' => '工作流名称。',
                'type' => 'string',
                'example' => 'work_flow_1',
              ),
              'OssResourceId' => 
              array (
                'title' => 'OSS数据源ID。',
                'description' => 'OSS数据源ID。',
                'type' => 'string',
                'example' => 'reso-********',
              ),
              'OssBucket' => 
              array (
                'title' => 'OSS bucket名称。',
                'description' => 'OSS bucket名称。',
                'type' => 'string',
                'example' => 'oss_bucket_1',
              ),
              'EasyRecVersion' => 
              array (
                'title' => 'EasyRec版本。',
                'description' => 'EasyRec版本。',
                'type' => 'string',
                'example' => '1.3.60',
              ),
              'EasyRecPackagePath' => 
              array (
                'title' => 'EasyRec包路径。',
                'description' => 'EasyRec包路径。',
                'type' => 'string',
                'example' => 'oss://*******',
              ),
              'FgJarVersion' => 
              array (
                'title' => 'fg_jar版本。',
                'description' => 'fg_jar版本。',
                'type' => 'string',
                'example' => '1.0.0',
              ),
              'FeaturePriority' => 
              array (
                'title' => '特征优先级，多个特征通过逗号分开。',
                'description' => '特征优先级，多个特征通过半角逗号（,）分开。',
                'type' => 'string',
                'example' => 'feature1,feature2,feature3',
              ),
              'FeatureDisplayExclude' => 
              array (
                'title' => '特征展示过滤，多个特征通过逗号分开。',
                'description' => '特征展示过滤，多个特征通过半角逗号（,）分开。',
                'type' => 'string',
                'example' => 'feature1,feature2',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建时间。',
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '更新时间。',
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'UseFeatureStore' => 
              array (
                'description' => '是否需要使用feature store，取值：

- true：使用，此时返回FeatureStoreProjectId、FeatureStoreProjectName、FeatureStoreModelId、FeatureStoreUserId、FeatureStoreItemId。
- false：不使用，此时UserTable、UserIdField、UserTablePartitionField、UserTablePartitionFieldFormat、ItemTable、ItemIdField、ItemTablePartitionField、ItemTablePartitionFieldFormat为必填项。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'FeatureStoreProjectName' => 
              array (
                'description' => 'feature store项目名称。',
                'type' => 'string',
                'example' => 'project-1',
              ),
              'FeatureStoreModelId' => 
              array (
                'description' => 'feature store model ID。',
                'type' => 'string',
                'example' => '2',
              ),
              'FeatureStoreUserId' => 
              array (
                'description' => 'feature store user侧主键。',
                'type' => 'string',
                'example' => 'user',
              ),
              'FeatureStoreItemId' => 
              array (
                'description' => 'feature store item侧主键。',
                'type' => 'string',
                'example' => 'item',
              ),
              'FeatureStoreSeqFeatureView' => 
              array (
                'description' => '序列特征中item特征所在的特征视图的名字。',
                'type' => 'string',
                'example' => 'item-1',
              ),
              'FeatureStoreProjectId' => 
              array (
                'description' => 'feature store项目ID',
                'type' => 'string',
                'example' => 'prj-01',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77\\",\\n  \\"Name\\": \\"feature_consistency_check1\\",\\n  \\"SceneId\\": \\"3\\",\\n  \\"SceneName\\": \\"scene1\\",\\n  \\"Status\\": \\"Editable\\",\\n  \\"CompareFeature\\": true,\\n  \\"LatestJobId\\": \\"3\\",\\n  \\"LatestJobGmtSamplingStartTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"LatestJobGmtSamplingEndTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"SampleRate\\": \\"0.89\\",\\n  \\"FeatureLandingResourceId\\": \\"reso-********\\",\\n  \\"FeatureLandingResourceUri\\": \\"mc_project_1\\",\\n  \\"EasServiceName\\": \\"eas_service_1\\",\\n  \\"FgJsonFileName\\": \\"file.json\\",\\n  \\"UserTable\\": \\"user_table\\",\\n  \\"UserIdField\\": \\"user_id\\",\\n  \\"UserTablePartitionField\\": \\"ds\\",\\n  \\"UserTablePartitionFieldFormat\\": \\"yyyymmdd\\",\\n  \\"ItemTable\\": \\"item_table\\",\\n  \\"ItemIdField\\": \\"item_id\\",\\n  \\"ItemTablePartitionField\\": \\"ds\\",\\n  \\"ItemTablePartitionFieldFormat\\": \\"yyyymmdd\\",\\n  \\"GenerateZip\\": true,\\n  \\"ServiceId\\": \\"4\\",\\n  \\"ServiceName\\": \\"service1\\",\\n  \\"WorkflowName\\": \\"work_flow_1\\",\\n  \\"OssResourceId\\": \\"reso-********\\",\\n  \\"OssBucket\\": \\"oss_bucket_1\\",\\n  \\"EasyRecVersion\\": \\"1.3.60\\",\\n  \\"EasyRecPackagePath\\": \\"oss://*******\\",\\n  \\"FgJarVersion\\": \\"1.0.0\\",\\n  \\"FeaturePriority\\": \\"feature1,feature2,feature3\\",\\n  \\"FeatureDisplayExclude\\": \\"feature1,feature2\\",\\n  \\"GmtCreateTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtModifiedTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"UseFeatureStore\\": true,\\n  \\"FeatureStoreProjectName\\": \\"project-1\\",\\n  \\"FeatureStoreModelId\\": \\"2\\",\\n  \\"FeatureStoreUserId\\": \\"user\\",\\n  \\"FeatureStoreItemId\\": \\"item\\",\\n  \\"FeatureStoreSeqFeatureView\\": \\"item-1\\",\\n  \\"FeatureStoreProjectId\\": \\"prj-01\\"\\n}","type":"json"}]',
      'title' => '获取特征一致性检查任务配置详情',
    ),
    'ListFeatureConsistencyCheckJobs' => 
    array (
      'summary' => '获取特征一致性检查任务列表。',
      'path' => '/api/v1/featureconsistencycheck/jobs',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-********',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码。',
            'description' => '页码。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小。',
            'description' => '页大小。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序依据。
● GmtCreateTime-创建时间。
● GmtModifiedTime-更新时间。',
            'description' => '排序依据：
- GmtCreateTime：按创建时间。
- GmtModifiedTime：按更新时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtCreateTime',
          ),
        ),
        4 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式。
● ASC-升序。
● DESC-降序。',
            'description' => '排序方式：
- ASC：升序。
- DESC：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务状态。
● ToRun-待运行。
● Running-运行中。
● Success-成功。
● Failure-失败。
● Stopped-停止/已取消。',
            'description' => '任务状态。取值如下：
- ToRun：待运行。
- Running：运行中。
- Success：成功。
- Failure：失败。
- Stopped：停止或已取消。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
              ),
              'TotalCount' => 
              array (
                'title' => '总个数。',
                'description' => '总个数。',
                'type' => 'string',
                'example' => '10',
              ),
              'FeatureConsistencyCheckJobs' => 
              array (
                'title' => '特征一致性检查任务列表。',
                'description' => '特征一致性检查任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FeatureConsistencyCheckJobId' => 
                    array (
                      'title' => '特征一致性检查任务ID。',
                      'description' => '特征一致性检查任务ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'FeatureConsistencyCheckJobConfigId' => 
                    array (
                      'title' => '特征一致性检查配置ID。',
                      'description' => '特征一致性检查配置ID。',
                      'type' => 'string',
                      'example' => '5',
                    ),
                    'FeatureConsistencyCheckJobConfigName' => 
                    array (
                      'title' => '特征一致性检查任务配置名称。',
                      'description' => '特征一致性检查任务配置名称。',
                      'type' => 'string',
                      'example' => 'feature_consistency_check_1',
                    ),
                    'GmtStartTime' => 
                    array (
                      'title' => '开始时间。',
                      'description' => '开始时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                    'GmtEndTime' => 
                    array (
                      'title' => '结束时间。',
                      'description' => '结束时间。',
                      'type' => 'string',
                      'example' => '2021-12-15T23:24:33.132+08:00',
                    ),
                    'Status' => 
                    array (
                      'title' => '任务状态。
● ToRun-待运行。
● Running-运行中。
● Success-成功。
● Failure-失败。
● Terminated-停止/已取消。',
                      'description' => '任务状态。可能值为：
- ToRun：待运行。
- Running：运行中。
- Success：成功。
- Failure：失败。
- Stopped：停止或已取消。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'Config' => 
                    array (
                      'title' => '配置信息。',
                      'description' => '配置信息。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'Logs' => 
                    array (
                      'title' => '日志信息。',
                      'description' => '日志信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '日志。',
                        'type' => 'string',
                        'example' => '2022/09/26 02:16:24 INFO: job status: Created',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\",\\n  \\"TotalCount\\": \\"10\\",\\n  \\"FeatureConsistencyCheckJobs\\": [\\n    {\\n      \\"FeatureConsistencyCheckJobId\\": \\"4\\",\\n      \\"FeatureConsistencyCheckJobConfigId\\": \\"5\\",\\n      \\"FeatureConsistencyCheckJobConfigName\\": \\"feature_consistency_check_1\\",\\n      \\"GmtStartTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"GmtEndTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Config\\": \\"{}\\",\\n      \\"Logs\\": [\\n        \\"2022/09/26 02:16:24 INFO: job status: Created\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取特征一致性检查任务列表',
    ),
    'GetFeatureConsistencyCheckJob' => 
    array (
      'summary' => '获取特征一致性检查任务详情。',
      'path' => '/api/v1/featureconsistencycheck/jobs/{FeatureConsistencyCheckJobId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FeatureConsistencyCheckJobId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征一致性检查任务ID。',
            'description' => '特征一致性检查任务ID。如何获取任务ID，请参见[ListFeatureConsistencyCheckJobs](~~2557571~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '4',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-cn-********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A04CB8C0-E74A-5E83-BC61-64D153574EC7',
              ),
              'FeatureConsistencyCheckJobConfigId' => 
              array (
                'title' => '特征一致性检查配置ID。',
                'description' => '特征一致性检查配置ID。',
                'type' => 'string',
                'example' => '5',
              ),
              'FeatureConsistencyCheckJobConfigName' => 
              array (
                'title' => '特征一致性检查任务配置名称。',
                'description' => '特征一致性检查任务配置名称。',
                'type' => 'string',
                'example' => 'feature_consistency_check_1',
              ),
              'GmtStartTime' => 
              array (
                'title' => '开始时间。',
                'description' => '开始时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'GmtEndTime' => 
              array (
                'title' => '结束时间。',
                'description' => '结束时间。',
                'type' => 'string',
                'example' => '2021-12-15T23:24:33.132+08:00',
              ),
              'Status' => 
              array (
                'title' => '任务状态。
● ToRun-待运行。
● Running-运行中。
● Success-成功。
● Failure-失败。
● Terminated-停止/已取消。',
                'description' => '任务状态。可能值为：
- ToRun：待运行。
- Running：运行中。
- Success：成功。
- Failure：失败。
- Terminated：停止或已取消。',
                'type' => 'string',
                'example' => 'Running',
              ),
              'Config' => 
              array (
                'title' => '配置信息。',
                'description' => '配置信息。',
                'type' => 'string',
                'example' => '{}',
              ),
              'Logs' => 
              array (
                'title' => '日志信息。',
                'description' => '日志信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志。',
                  'type' => 'string',
                  'example' => '2023-02-21 14:28:04 INFO: epoch [1][745/127291]tlr: 2.925e-05, eta: 2 days, 2:11:04, iter_time: 1.682, data_load_time: 0.997, memory: 12898, loss: 1.3768',
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A04CB8C0-E74A-5E83-BC61-64D153574EC7\\",\\n  \\"FeatureConsistencyCheckJobConfigId\\": \\"5\\",\\n  \\"FeatureConsistencyCheckJobConfigName\\": \\"feature_consistency_check_1\\",\\n  \\"GmtStartTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"GmtEndTime\\": \\"2021-12-15T23:24:33.132+08:00\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"Config\\": \\"{}\\",\\n  \\"Logs\\": [\\n    \\"2023-02-21 14:28:04 INFO: epoch [1][745/127291]tlr: 2.925e-05, eta: 2 days, 2:11:04, iter_time: 1.682, data_load_time: 0.997, memory: 12898, loss: 1.3768\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取特征一致性检查任务详情',
    ),
    'ListFeatureConsistencyCheckJobFeatureReports' => 
    array (
      'summary' => '获取特征一致性检查任务的特征报表。',
      'path' => '/api/v1/featureconsistencycheck/jobs/{FeatureConsistencyCheckJobId}/featurereports',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FeatureConsistencyCheckJobId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征一致性检查任务ID。',
            'description' => '特征一致性检查任务ID。如何获取任务ID，请参见[ListFeatureConsistencyCheckJobs](~~2557571~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'pairec-cn-********',
          ),
        ),
        2 => 
        array (
          'name' => 'LogUserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '特征比对时的UserId。',
            'description' => '特征比对时的UserId。',
            'type' => 'string',
            'required' => true,
            'example' => '1010',
          ),
        ),
        3 => 
        array (
          'name' => 'LogItemId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '特征比对时的ItemId。',
            'description' => '特征比对时的ItemId。',
            'type' => 'string',
            'required' => true,
            'example' => '9010',
          ),
        ),
        4 => 
        array (
          'name' => 'LogRequestId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '特征比对时的RequestId。',
            'description' => '特征比对时的RequestId。',
            'type' => 'string',
            'required' => true,
            'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BBD41FBF-E75C-551A-92FA-CAD654AA006F',
              ),
              'ReportsOfFeatureDiff' => 
              array (
                'title' => '特征比对报表。',
                'description' => '特征比对报表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '',
                  'description' => '',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogUserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1010',
                    ),
                    'LogItemId' => 
                    array (
                      'title' => '物品ID。',
                      'description' => '物品ID。',
                      'type' => 'string',
                      'example' => '9010',
                    ),
                    'LogRequestId' => 
                    array (
                      'title' => '请求ID。',
                      'description' => '请求ID。',
                      'type' => 'string',
                      'example' => 'F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA',
                    ),
                    'FeatureName' => 
                    array (
                      'title' => '特征名称。',
                      'description' => '特征名称。',
                      'type' => 'string',
                      'example' => 'gender',
                    ),
                    'OfflineValue' => 
                    array (
                      'title' => '离线值。',
                      'description' => '离线值。',
                      'type' => 'string',
                      'example' => 'male',
                    ),
                    'OnlineValue' => 
                    array (
                      'title' => '在线值。',
                      'description' => '在线值。',
                      'type' => 'string',
                      'example' => 'male',
                    ),
                  ),
                ),
              ),
              'DataPath' => 
              array (
                'description' => '数据路径。',
                'type' => 'string',
                'example' => 'https://********',
              ),
              'OssPath' => 
              array (
                'description' => 'OSS路径。',
                'type' => 'string',
                'example' => 'oss://********',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BBD41FBF-E75C-551A-92FA-CAD654AA006F\\",\\n  \\"ReportsOfFeatureDiff\\": [\\n    {\\n      \\"LogUserId\\": \\"1010\\",\\n      \\"LogItemId\\": \\"9010\\",\\n      \\"LogRequestId\\": \\"F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA\\",\\n      \\"FeatureName\\": \\"gender\\",\\n      \\"OfflineValue\\": \\"male\\",\\n      \\"OnlineValue\\": \\"male\\"\\n    }\\n  ],\\n  \\"DataPath\\": \\"https://********\\",\\n  \\"OssPath\\": \\"oss://********\\"\\n}","type":"json"}]',
      'title' => '获取特征一致性检查任务的特征报表',
    ),
    'ListFeatureConsistencyCheckJobScoreReports' => 
    array (
      'summary' => '获取特征一致性检查任务分数报表。',
      'path' => '/api/v1/featureconsistencycheck/jobs/{FeatureConsistencyCheckJobId}/scorereports',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FeatureConsistencyCheckJobId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征一致性检查任务报表ID。',
            'description' => '特征一致性检查任务报表ID。特征一致性检查任务ID。如何获取任务ID，请参见[ListFeatureConsistencyCheckJobs](~~2557561~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'pairec-cn-********',
          ),
        ),
        2 => 
        array (
          'name' => 'ExcludeRequestIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '特征比对时排除的RequestId。',
            'description' => '特征比对时排除的RequestId列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '请求ID。',
              'type' => 'string',
              'required' => false,
              'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F0AB6527-093F-5C44-B3BD-42C8C210C619',
              ),
              'ReportsOfScoreDiff' => 
              array (
                'title' => '分数比对报表。',
                'description' => '分数比对报表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogUserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'LogItemId' => 
                    array (
                      'title' => '物品ID。',
                      'description' => '物品ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'LogRequestId' => 
                    array (
                      'title' => '请求ID。',
                      'description' => '请求ID。',
                      'type' => 'string',
                      'example' => '323',
                    ),
                    'ScoreDiff' => 
                    array (
                      'title' => '分数差值。',
                      'description' => '分数差值。',
                      'type' => 'string',
                      'example' => '0.00000234',
                    ),
                    'ScoreDiffDetail' => 
                    array (
                      'title' => '分数比对详细。',
                      'description' => '分数比对详细。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                  ),
                ),
              ),
              'DataPath' => 
              array (
                'title' => '数据路径。',
                'description' => '数据路径。',
                'type' => 'string',
                'example' => 'http://*******',
              ),
              'OssPath' => 
              array (
                'title' => 'oss路径。',
                'description' => 'oss路径。',
                'type' => 'string',
                'example' => 'oss://********',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F0AB6527-093F-5C44-B3BD-42C8C210C619\\",\\n  \\"ReportsOfScoreDiff\\": [\\n    {\\n      \\"LogUserId\\": \\"3\\",\\n      \\"LogItemId\\": \\"4\\",\\n      \\"LogRequestId\\": \\"323\\",\\n      \\"ScoreDiff\\": \\"0.00000234\\",\\n      \\"ScoreDiffDetail\\": \\"{}\\"\\n    }\\n  ],\\n  \\"DataPath\\": \\"http://*******\\",\\n  \\"OssPath\\": \\"oss://********\\"\\n}","type":"json"}]',
      'title' => '获取特征一致性检查任务分数报表',
    ),
    'CloneFeatureConsistencyCheckJobConfig' => 
    array (
      'summary' => '克隆特征一致性检查任务配置。',
      'path' => '/api/v1/featureconsistencycheck/jobconfigs/{SourceFeatureConsistencyCheckJobConfigId}/action/clone',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceFeatureConsistencyCheckJobConfigId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征一致性检查配置ID。',
            'description' => '特征一致性检查配置ID。如何获取配置ID，请参见。[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-********',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '74D958EF-3598-56FA-8296-FF1575CE43DF',
              ),
              'FeatureConsistencyCheckId' => 
              array (
                'title' => '克隆后新的特征一致性检查配置ID。',
                'description' => '克隆后新的特征一致性检查配置ID。',
                'type' => 'string',
                'example' => '4',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74D958EF-3598-56FA-8296-FF1575CE43DF\\",\\n  \\"FeatureConsistencyCheckId\\": \\"4\\"\\n}","type":"json"}]',
      'title' => '克隆特征一致性检查任务配置',
    ),
    'TerminateFeatureConsistencyCheckJob' => 
    array (
      'summary' => '取消指定特征一致性检查正在运行中的任务。',
      'path' => '/api/v1/featureconsistencycheck/jobs/{FeatureConsistencyCheckJobId}/action/terminate',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FeatureConsistencyCheckJobId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征一致性检查任务ID。',
            'description' => '特征一致性检查任务ID。如何获取任务ID，请参见[ListFeatureConsistencyCheckJobs](~~2557571~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'title' => '实例ID，可从接口ListInstances获取。',
                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-********',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A6C01890-54CA-5C49-BC91-AD85A98E4A98',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A6C01890-54CA-5C49-BC91-AD85A98E4A98\\"\\n}","type":"json"}]',
      'title' => '取消指定特征一致性检查正在运行中的任务',
    ),
    'BackflowFeatureConsistencyCheckJobData' => 
    array (
      'summary' => '对指定特征一致性检查任务配置下，最近一次创建的任务进行数据回流。',
      'path' => '/api/v1/featureconsistencycheck/jobs/action/backflowdata',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'FeatureConsistencyCheckJobConfigId' => 
              array (
                'title' => '特征一致性检查任务配置ID，可从接口ListFeatureConsistencyCheckJobConfigs获取。',
                'description' => '特征一致性检查任务配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '4',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID，可从接口ListInstances获取。',
                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-********',
              ),
              'LogUserId' => 
              array (
                'title' => '日志中用户ID。',
                'description' => '日志中用户ID。',
                'type' => 'string',
                'required' => true,
                'example' => '1010',
              ),
              'LogItemId' => 
              array (
                'title' => '日志中物品ID。',
                'description' => '日志中物品ID。',
                'type' => 'string',
                'required' => true,
                'example' => '9010',
              ),
              'LogRequestId' => 
              array (
                'title' => '日志请求ID。',
                'description' => '日志请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
              'SceneName' => 
              array (
                'title' => '场景名称。',
                'description' => '场景名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'video-feed',
              ),
              'Scores' => 
              array (
                'title' => '分数。',
                'description' => '分数。',
                'type' => 'string',
                'required' => true,
                'example' => '[\\"{\\\\\\"dbmtl_probs_is_valid_play\\\\\\":0.00032182207107543945,\\\\\\"dbmtl_y_play_time\\\\\\":0.0043269748210906982}\\"]',
              ),
              'UserFeatures' => 
              array (
                'title' => '用户特征。',
                'description' => '用户特征。',
                'type' => 'string',
                'required' => true,
                'example' => '{\\"userid\\":{\\"value\\":1010,\\"type\\":\\"string\\"},\\"click_5_seq\\":{\\"value\\":\\"9001;9002;9003;9004;9005\\",\\"type\\":\\"string\\"}}',
              ),
              'ItemFeatures' => 
              array (
                'title' => '物品特征。',
                'description' => '物品特征。',
                'type' => 'string',
                'required' => true,
                'example' => '[\\"{\\\\\\"itemid\\\\\\":{\\\\\\"value\\\\\\":1010,\\\\\\"type\\\\\\":\\\\\\"string\\\\\\"}}\\"]',
              ),
              'LogRequestTime' => 
              array (
                'title' => '日志请求时间。',
                'description' => '日志请求时间（UNIX纪元时间戳）。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1693900981465',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BDB621CB-A81E-5D39-8793-39A365CBCC74',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BDB621CB-A81E-5D39-8793-39A365CBCC74\\"\\n}","type":"json"}]',
      'title' => '特征一致性检查数据回流',
    ),
    'SyncFeatureConsistencyCheckJobReplayLog' => 
    array (
      'summary' => '同步特征一致性检查任务重放日志。',
      'path' => '/api/v1/featureconsistencycheck/jobs/action/syncreplaylog',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'FeatureConsistencyCheckJobConfigId' => 
              array (
                'title' => '特征一致性检查任务配置ID，可从接口ListFeatureConsistencyCheckJobConfigs获取。',
                'description' => '特征一致性检查任务配置ID。如何获取配置ID，请参见[ListFeatureConsistencyCheckJobConfigs](~~2557567~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '3',
              ),
              'InstanceId' => 
              array (
                'title' => '实例ID，可从接口ListInstances获取。',
                'description' => '实例ID。如何获取实例ID，请参见[ListInstances](~~2411819~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'pairec-cn-********',
              ),
              'LogUserId' => 
              array (
                'title' => '日志中用户ID。',
                'description' => '日志中用户ID。',
                'type' => 'string',
                'required' => true,
                'example' => '1010',
              ),
              'LogItemId' => 
              array (
                'title' => '日志中物品ID。',
                'description' => '日志中物品ID。',
                'type' => 'string',
                'required' => true,
                'example' => '9010',
              ),
              'LogRequestId' => 
              array (
                'title' => '日志中请求ID。',
                'description' => '日志中请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77',
              ),
              'SceneName' => 
              array (
                'title' => '场景名称。',
                'description' => '场景名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'video-feed',
              ),
              'LogRequestTime' => 
              array (
                'title' => '日志请求时间。',
                'description' => '日志请求时间（UNIX纪元时间戳）。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1693900981465',
              ),
              'GeneratedFeatures' => 
              array (
                'title' => '生成特征。',
                'description' => '生成特征。',
                'type' => 'string',
                'required' => true,
                'example' => 'week_day:1 | userid:3 | itemid:9001 | cate:cat1 | click_5_seq__cate:cat1',
              ),
              'ContextFeatures' => 
              array (
                'title' => '上下文特征。',
                'description' => '上下文特征。',
                'type' => 'string',
                'required' => true,
                'example' => '[{\\"Value\\":{\\"FloatFeature\\":0.1}}]',
              ),
              'RawFeatures' => 
              array (
                'title' => '原始特征。',
                'description' => '原始特征。',
                'type' => 'string',
                'required' => true,
                'example' => 'author__kv_city_expr_cnt_15d：北京市 | tem__min_age_15d:28',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C7D0B48F-0105-52B9-B60A-FA7606E2234D',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C7D0B48F-0105-52B9-B60A-FA7606E2234D\\"\\n}","type":"json"}]',
      'title' => '同步特征一致性检查任务重放日志',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'pairecservice.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'pairecservice.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'pairecservice.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'pairecservice.cn-shenzhen.aliyuncs.com',
    ),
  ),
);
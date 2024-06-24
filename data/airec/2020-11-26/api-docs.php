<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'Airec',
    'version' => '2020-11-26',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 156261,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstance',
        1 => 'ModifyInstance',
        2 => 'DescribeInstance',
        3 => 'ListInstance',
        4 => 'RunInstance',
        5 => 'UpgradeInstance',
        6 => 'ValidateInstance',
        7 => 'DowngradeInstance',
      ),
    ),
    1 => 
    array (
      'id' => 156270,
      'title' => '外部数据源',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateExtraDataSource',
        1 => 'DeleteExtraDataSource',
        2 => 'ListExtraDataSources',
      ),
    ),
    2 => 
    array (
      'id' => 156273,
      'title' => '数据集',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteDataSet',
        1 => 'AttachDataset',
        2 => 'DescribeDataSetMessage',
        3 => 'ListDataSet',
      ),
    ),
    3 => 
    array (
      'id' => 156276,
      'title' => '实验',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteExperiment',
        1 => 'EnableExperiment',
        2 => 'UpdateExperimentBasicInfo',
        3 => 'UpdateExperimentConfig',
        4 => 'UpdateExperimentStatus',
        5 => 'DescribeBaseExperiment',
        6 => 'DescribeExperiment',
        7 => 'DescribeExperimentEnv',
        8 => 'DescribeExperimentEnvProgress',
        9 => 'ListExperiments',
        10 => 'CloneExperiment',
      ),
    ),
    4 => 
    array (
      'id' => 174242,
      'title' => '流量调控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListFlowControlTaskReports',
        1 => 'ListFlowControlTaskInvalidItems',
        2 => 'ListFlowControlTaskItems',
        3 => 'CreateFlowControlTask',
        4 => 'GetFlowControlTask',
        5 => 'DeleteFlowControlTask',
        6 => 'ListFlowControlTask',
        7 => 'ListFlowControlTaskItemReports',
        8 => 'ListFlowControlTaskReference',
        9 => 'ModifyFlowControlTask',
        10 => 'StopFlowControlTask',
        11 => 'PublishFlowControlTask',
      ),
    ),
    5 => 
    array (
      'id' => 156282,
      'title' => '召回表',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFilteringAlgorithm',
        1 => 'DeleteFilteringAlgorithm',
        2 => 'ModifyFilteringAlgorithmMeta',
        3 => 'DescribeFilteringAlgorithm',
        4 => 'ListFilteringAlgorithms',
        5 => 'OfflineFilteringAlgorithm',
      ),
    ),
    6 => 
    array (
      'id' => 156289,
      'title' => '排序系统',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRankingSystem',
        1 => 'DeleteRankingSystem',
        2 => 'ModifyRankingSystem',
        3 => 'GetRankingSystem',
        4 => 'GetRankingSystemHistory',
        5 => 'ListRankingSystems',
        6 => 'ListRankingSystemHistories',
        7 => 'DeployRankingSystem',
        8 => 'VerifyRankingSystem',
        9 => 'RollbackRankingSystem',
      ),
    ),
    7 => 
    array (
      'id' => 156299,
      'title' => '排序模型模版',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRankingModelTemplate',
        1 => 'DeleteRankingModelTemplate',
        2 => 'ModifyRankingModelTemplate',
        3 => 'GetRankingModelTemplate',
        4 => 'RunRankingModelTemplate',
      ),
    ),
    8 => 
    array (
      'id' => 156305,
      'title' => '排序模型',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRankingModel',
        1 => 'DeleteRankingModel',
        2 => 'DeleteRankingModelVersion',
        3 => 'ModifyRankingModel',
        4 => 'ListRankingModels',
        5 => 'ListRankingModelTemplates',
        6 => 'GetRankingModelVersion',
        7 => 'ListRankingModelVersions',
        8 => 'DecribeRankingModel',
        9 => 'CheckRankingModelReachable',
      ),
    ),
    9 => 
    array (
      'id' => 156255,
      'title' => '规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRule',
        1 => 'ModifyRule',
        2 => 'ListRules',
        3 => 'DescribeRule',
        4 => 'PublishRule',
      ),
    ),
    10 => 
    array (
      'id' => 156258,
      'title' => '场景',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateScene',
        1 => 'DeleteScene',
        2 => 'ModifyScene',
        3 => 'DescribeScene',
        4 => 'ListScenes',
      ),
    ),
    11 => 
    array (
      'id' => 156320,
      'title' => '样本',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCustomSample',
        1 => 'CreateSampleFormatConfig',
        2 => 'DeleteSample',
        3 => 'ModifySample',
        4 => 'ListSamples',
        5 => 'GetSample',
        6 => 'CloneSample',
        7 => 'GenerateSample',
      ),
    ),
    12 => 
    array (
      'id' => 156251,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCustomAnalysisTask',
        1 => 'AttachIndexVersion',
        2 => 'ModifyDataSource',
        3 => 'ModifyFeatureTable',
        4 => 'ModifyItems',
        5 => 'ModifyOfflineStorages',
        6 => 'StopDataSet',
        7 => 'DescribeCustomAnalysisTask',
        8 => 'DescribeDefaultAlgorithms',
        9 => 'DescribeLatestTask',
        10 => 'DescribeQuota',
        11 => 'DescribeRegions',
        12 => 'DescribeSceneBucket',
        13 => 'DescribeSceneThroughput',
        14 => 'DescribeSyncReportDetail',
        15 => 'DescribeSyncReportOutliers',
        16 => 'DescribeUserMetrics',
        17 => 'GetExtraDataSource',
        18 => 'ListDashboardDetails',
        19 => 'ListDashboardDetailsFlows',
        20 => 'ListDashboardMetrics',
        21 => 'ListDashboardMetricsFlows',
        22 => 'ListFeatureTables',
        23 => 'ListIndexVersions',
        24 => 'ListInstanceTask',
        25 => 'ListItems',
        26 => 'ListLogs',
        27 => 'ListMixCategories',
        28 => 'ListOfflineStorages',
        29 => 'ListRuleConditions',
        30 => 'ListRuleTasks',
        31 => 'ListSampleFormatConfigs',
        32 => 'ListSceneItems',
        33 => 'ListSceneParameters',
        34 => 'ListUmengAppkeys',
        35 => 'ListUserClusters',
        36 => 'QueryDataMessage',
        37 => 'QueryDataMessageStatistics',
        38 => 'QueryExceptionHistory',
        39 => 'QueryRawData',
        40 => 'QuerySingleAggregationReport',
        41 => 'QuerySingleReport',
        42 => 'QuerySyncReportAggregation',
        43 => 'ListDataSource',
        44 => 'InitComputingResource',
        45 => 'PushDocument',
        46 => 'PushIntervention',
        47 => 'RebuildIndex',
        48 => 'Recommend',
        49 => 'RefreshFeatureTable',
        50 => 'RunSampleFormatConfig',
        51 => 'UnLockIndexVersion',
        52 => 'CreateDataDiagnoseTask',
        53 => 'CreateUmengToken',
        54 => 'GetLatestDataDiagnoseTaskStatus',
        55 => 'ListDataDiagnoseReports',
        56 => 'ListDataDiagnoseSampleDetails',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'ExtraDataSource' => 
      array (
        'title' => '扩展数据源',
        'description' => '扩展数据源',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => '状态',
            'description' => '状态',
            'type' => 'string',
            'example' => 'Ready 待应用；Online 已应用；Failed失败',
          ),
          'Meta' => 
          array (
            'title' => '数据源配置参数',
            'description' => '数据源配置参数',
            'type' => 'object',
            'properties' => 
            array (
              'Internal' => 
              array (
                'title' => '是否为内置数据源',
                'description' => '是否为内置数据源',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'MetaType' => 
              array (
                'title' => '配置类型',
                'description' => '配置类型',
                'type' => 'string',
                'required' => false,
                'example' => 'ExtraDataSource',
              ),
              'ProjectName' => 
              array (
                'title' => 'ODPS project name。',
                'description' => 'ODPS 项目名称',
                'type' => 'string',
                'example' => 'test_project',
              ),
              'TableName' => 
              array (
                'title' => 'ODPS table name。',
                'description' => 'ODPS 表名称',
                'type' => 'string',
                'example' => 'test_table',
              ),
              'Type' => 
              array (
                'title' => '数据源类型，当前只支持ODPS。',
                'description' => '数据源类型，当前只支持ODPS。',
                'type' => 'string',
                'example' => 'ODPS',
              ),
              'UpdateFrequency' => 
              array (
                'title' => '更新频率',
                'description' => '更新频率',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '86400',
              ),
            ),
          ),
          'Type' => 
          array (
            'title' => '数据源类型',
            'description' => '数据源类型',
            'type' => 'string',
            'example' => 'UserCustomDataSource\\ItemCustomDataSource\\
BehaviorCustomDataSource\\
SampleCustomDataSource',
          ),
          'GmtCreate' => 
          array (
            'title' => '创建数据源的UTC时间。',
            'description' => '创建数据源的UTC时间。',
            'type' => 'string',
            'example' => '2021-12-07T13:26:29.000Z',
          ),
          'GmtModified' => 
          array (
            'title' => '最后修改数据源的UTC时间。',
            'description' => '最后修改数据源的UTC时间。',
            'type' => 'string',
            'example' => '2021-12-07T13:26:29.000Z',
          ),
          'DataSourceId' => 
          array (
            'title' => '数据源id',
            'description' => '数据源id',
            'type' => 'string',
            'example' => 'E01D574F-ABD0-4C55-A5E3-8D24FD8D42EA',
          ),
        ),
      ),
      'FeatureTable' => 
      array (
        'title' => '特征表',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => '状态',
            'type' => 'string',
          ),
          'Meta' => 
          array (
            'title' => '配置信息',
            'type' => 'object',
            'properties' => 
            array (
              'DataSourceId' => 
              array (
                'title' => '数据源id',
                'type' => 'string',
                'example' => '907648f5-abae-44fd-a4c4-525cc25947e9',
              ),
              'FeatureList' => 
              array (
                'title' => '特征列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Comment' => 
                    array (
                      'title' => '备注',
                      'type' => 'string',
                      'example' => 'com11',
                    ),
                    'FeatureName' => 
                    array (
                      'title' => '特征名称',
                      'type' => 'string',
                      'example' => 'fn11',
                    ),
                    'FieldName' => 
                    array (
                      'title' => '字段名称',
                      'type' => 'string',
                      'example' => 'fieldName11',
                    ),
                    'Status' => 
                    array (
                      'title' => '特征状态',
                      'type' => 'string',
                      'example' => 'NotApplied 未应用 Applied 已应用',
                    ),
                  ),
                ),
              ),
              'Internal' => 
              array (
                'title' => '是否为内置特征表',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'MetaType' => 
              array (
                'title' => '配置类型',
                'type' => 'string',
                'example' => 'FeatureTable',
              ),
              'Source' => 
              array (
                'title' => '数据源来源',
                'type' => 'string',
                'example' => 'test_project.test_table',
              ),
              'UpdateFrequency' => 
              array (
                'title' => '更新频率',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '86400',
              ),
            ),
          ),
          'FeatureTableId' => 
          array (
            'title' => '特征表id',
            'type' => 'string',
            'example' => '30E70118-FC7C-4438-9287-583CE47266A9',
          ),
          'Type' => 
          array (
            'title' => '特征表类型',
            'type' => 'string',
            'example' => 'ItemFeatureTable 物品特征表 UserFeatureTable 用户特征表',
          ),
          'GmtCreate' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'example' => '2021-12-10T02:59:54.000Z',
          ),
          'GmtModified' => 
          array (
            'title' => '修改时间',
            'type' => 'string',
            'example' => '2021-12-10T02:59:54.000Z',
          ),
        ),
      ),
      'RankingModelTemplate' => 
      array (
        'title' => '模型模板信息',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => '状态',
            'type' => 'string',
            'example' => 'TRAINING_SUCCESS',
          ),
          'Meta' => 
          array (
            'title' => '配置信息',
            'type' => 'object',
            'properties' => 
            array (
              'Authorized' => 
              array (
                'title' => '是否授权',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AutoRun' => 
              array (
                'title' => '是否自动训练',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AutoRunTime' => 
              array (
                'title' => '自动训练频率',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'AutoRunType' => 
              array (
                'title' => '自动训练时间类型',
                'type' => 'string',
                'example' => 'DAY',
              ),
              'Conf' => 
              array (
                'title' => '参数配置内容',
                'type' => 'string',
                'example' => 'train_config {}',
              ),
              'LastEditTime' => 
              array (
                'title' => '最后编辑时间',
                'type' => 'string',
                'example' => '2021-12-06T03:01:41.217Z',
              ),
              'OssArn' => 
              array (
                'title' => 'OSS arn',
                'type' => 'string',
                'example' => 'acs:ram::111:role/aliyunodpspaidefaultrole',
              ),
              'OssBucket' => 
              array (
                'title' => 'OSS bucket名称',
                'type' => 'string',
                'example' => 'bucket-a',
              ),
              'OssEndpoint' => 
              array (
                'title' => 'OSS endpoint',
                'type' => 'string',
                'example' => 'oss-cn-beijing.aliyuncs.com',
              ),
              'SampleId' => 
              array (
                'title' => '格式化样本ID',
                'type' => 'string',
                'example' => '1111',
              ),
              'SampleName' => 
              array (
                'title' => '样本名称',
                'type' => 'string',
                'example' => '样本1',
              ),
              'SampleTimeWindow' => 
              array (
                'title' => '采样时间窗大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'SampleTimeWindowType' => 
              array (
                'title' => '采样时间窗类型',
                'type' => 'string',
                'example' => 'DAY',
              ),
              'Type' => 
              array (
                'title' => '排序模型类型',
                'type' => 'string',
                'example' => 'MULTI_TOWER',
              ),
              'Name' => 
              array (
                'title' => '模型模板名称',
                'type' => 'string',
                'example' => '模型A',
              ),
              'DeployStatus' => 
              array (
                'title' => '部署状态',
                'type' => 'string',
                'example' => 'NOT_DEPLOYED',
              ),
              'CanDeploy' => 
              array (
                'title' => '是否可部署',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
          'VersionNum' => 
          array (
            'title' => '版本数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
          'TemplateId' => 
          array (
            'title' => '模型模板ID',
            'type' => 'string',
            'example' => 'a-a-a',
          ),
        ),
      ),
      'RankingModelVersion' => 
      array (
        'title' => '模型版本信息',
        'description' => '模型版本信息',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => '训练状态',
            'description' => '训练状态',
            'type' => 'string',
            'example' => 'TRAINING',
          ),
          'RunTime' => 
          array (
            'title' => '启动训练时间',
            'description' => '启动训练时间',
            'type' => 'string',
            'example' => '2021-12-08T20:00:00.0Z',
          ),
          'RunLog' => 
          array (
            'title' => '运行日志',
            'description' => '运行日志',
            'type' => 'string',
          ),
          'TemplateName' => 
          array (
            'title' => '模型模板名称',
            'description' => '模型模板名称',
            'type' => 'string',
            'example' => '模型A',
          ),
          'RunResult' => 
          array (
            'title' => '运行结果',
            'description' => '运行结果',
            'type' => 'object',
            'properties' => 
            array (
              'AssessAuc' => 
              array (
                'title' => '评估AUC',
                'description' => '评估AUC',
                'type' => 'string',
                'example' => '0.3',
              ),
              'AssessGauc' => 
              array (
                'title' => '评估Loss',
                'description' => '评估Loss',
                'type' => 'string',
                'example' => '0.3',
              ),
              'AssessLoss' => 
              array (
                'title' => '评估GAUC',
                'description' => '评估GAUC',
                'type' => 'string',
                'example' => '0.3',
              ),
              'TrainAuc' => 
              array (
                'title' => '训练AUC',
                'description' => '训练AUC',
                'type' => 'string',
                'example' => '0.3',
              ),
              'TrainGauc' => 
              array (
                'title' => '训练GAUC',
                'description' => '训练GAUC',
                'type' => 'string',
                'example' => '0.3',
              ),
              'TrainLoss' => 
              array (
                'title' => '训练Loss',
                'description' => '训练Loss',
                'type' => 'string',
                'example' => '0.3',
              ),
            ),
          ),
          'Name' => 
          array (
            'title' => '版本名称',
            'description' => '版本名称',
            'type' => 'string',
            'example' => '模型A_t1638964800000',
          ),
          'TemplateId' => 
          array (
            'title' => '模型模板ID',
            'description' => '模型模板ID',
            'type' => 'string',
            'example' => 'a-a-a',
          ),
        ),
      ),
      'RankingSystem' => 
      array (
        'title' => '排序服务',
        'description' => '排序服务',
        'type' => 'object',
        'properties' => 
        array (
          'Meta' => 
          array (
            'title' => '元信息',
            'description' => '元信息',
            'type' => 'object',
            'properties' => 
            array (
              'AutoDeploy' => 
              array (
                'title' => '是否自动部署',
                'description' => '是否自动部署',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AutoDeployAuc' => 
              array (
                'title' => '自动部署设定的AUC阈值',
                'description' => '自动部署设定的AUC阈值',
                'type' => 'string',
                'example' => '0.3',
              ),
              'Conf' => 
              array (
                'title' => '配置文件',
                'description' => '配置文件',
                'type' => 'string',
              ),
              'PredictEngine' => 
              array (
                'title' => '预测引擎配置',
                'description' => '预测引擎配置',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceId' => 
                  array (
                    'title' => '预测引擎资源id',
                    'description' => '预测引擎资源id',
                    'type' => 'string',
                    'example' => 'eas-oljkkdrggxhx7eizjd',
                  ),
                  'Version' => 
                  array (
                    'title' => '预测引擎版本',
                    'description' => '预测引擎版本',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'ClusterId' => 
                  array (
                    'title' => '预测引擎集群id',
                    'description' => '预测引擎集群id',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
                  ),
                ),
              ),
              'PredictEngineType' => 
              array (
                'title' => '预测引擎类型',
                'description' => '预测引擎类型',
                'type' => 'string',
                'example' => 'EAS',
              ),
              'ModelVersionName' => 
              array (
                'title' => '模型版本名称',
                'description' => '模型版本名称',
                'type' => 'string',
                'example' => '模型A_T1638964800000',
              ),
              'FailMsg' => 
              array (
                'title' => '部署失败原因',
                'description' => '部署失败原因',
                'type' => 'string',
              ),
            ),
          ),
          'ApplyStatus' => 
          array (
            'title' => '应用状态',
            'description' => '应用状态',
            'type' => 'string',
            'example' => 'NOT_APPLIED',
          ),
          'DeployStatus' => 
          array (
            'title' => '部署状态',
            'description' => '部署状态',
            'type' => 'string',
            'example' => 'NOT_DEPLOYED',
          ),
          'SceneIdList' => 
          array (
            'title' => '应用场景列表',
            'description' => '应用场景列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
              'example' => '[1, 2, 3]',
            ),
          ),
          'Name' => 
          array (
            'title' => '服务命名',
            'description' => '服务命名',
            'type' => 'string',
            'example' => 'servicea',
          ),
          'ModelTemplateId' => 
          array (
            'title' => '模型模板ID',
            'description' => '模型模板ID',
            'type' => 'string',
            'example' => 'a-a-a',
          ),
        ),
      ),
      'RankingSystemHistory' => 
      array (
        'title' => '排序服务操作记录',
        'description' => '排序服务操作记录',
        'type' => 'object',
        'properties' => 
        array (
          'Meta' => 
          array (
            'title' => '元信息',
            'description' => '元信息',
            'type' => 'object',
            'properties' => 
            array (
              'AutoDeploy' => 
              array (
                'title' => '是否自动部署',
                'description' => '是否自动部署',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AutoDeployAuc' => 
              array (
                'title' => '自动部署的AUC阈值',
                'description' => '自动部署的AUC阈值',
                'type' => 'string',
                'example' => '0.3',
              ),
              'Conf' => 
              array (
                'title' => '配置文件',
                'description' => '配置文件',
                'type' => 'string',
              ),
              'ModelTemplateName' => 
              array (
                'title' => '模型模板名称',
                'description' => '模型模板名称',
                'type' => 'string',
                'example' => '排序模型A',
              ),
              'PredictEngine' => 
              array (
                'title' => '预测引擎信息',
                'description' => '预测引擎信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceId' => 
                  array (
                    'title' => '预测引擎资源id',
                    'description' => '预测引擎资源id',
                    'type' => 'string',
                    'example' => 'eas-oljkkdrggxhx7eizjd',
                  ),
                  'Version' => 
                  array (
                    'title' => '预测引擎版本',
                    'description' => '预测引擎版本',
                    'type' => 'string',
                    'example' => '1',
                  ),
                ),
              ),
              'PredictEngineType' => 
              array (
                'title' => '预测引擎类型',
                'description' => '预测引擎类型',
                'type' => 'string',
                'example' => 'EAS',
              ),
              'PreviousOperateId' => 
              array (
                'title' => '上一次操作记录ID',
                'description' => '上一次操作记录ID',
                'type' => 'string',
                'example' => 'aaaa',
              ),
            ),
          ),
          'OperateTime' => 
          array (
            'title' => '操作时间',
            'description' => '操作时间',
            'type' => 'string',
            'example' => '2021-12-06T03:01:41.217Z',
          ),
          'OperateId' => 
          array (
            'title' => '操作id',
            'description' => '操作id',
            'type' => 'string',
            'example' => '8AC865AF-37D6-42ED-AA9A-B60D8ECDF640',
          ),
          'OperateType' => 
          array (
            'title' => '操作类型',
            'description' => '操作类型',
            'type' => 'string',
            'example' => 'CONF_CHANGE',
          ),
          'Name' => 
          array (
            'title' => '服务名称',
            'description' => '服务名称',
            'type' => 'string',
            'example' => 'servicea',
          ),
        ),
      ),
      'Sample' => 
      array (
        'title' => '样本',
        'description' => '样本实体。',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => '状态',
            'description' => '样本状态枚举值。

取值：

- **Unready**：未完成配置。

- **Ready**：配置完成。

- **Generating**：样本生成中。

- **Success**：样本生成成功。

- **Failed**：样本生成失败。

- **Formatting**：格式化中。

- **Formatted**：格式化完成。

- **FormatFailed**：格式化失败。

- **Applied**：已应用到模型中。',
            'type' => 'string',
            'example' => 'Formatted',
          ),
          'Meta' => 
          array (
            'title' => '配置',
            'description' => '配置。',
            'type' => 'object',
            'properties' => 
            array (
              'AutoUpdate' => 
              array (
                'title' => '是否自动更新',
                'description' => '是否自动更新样本配置。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AutoUpdateFrequency' => 
              array (
                'title' => '更新频率，秒级别时间戳',
                'description' => '更新频率，秒级别时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1673341140',
              ),
              'ClonedId' => 
              array (
                'title' => '克隆的id',
                'description' => '克隆的ID。',
                'type' => 'string',
                'example' => '1638877561147',
              ),
              'Config' => 
              array (
                'title' => '样本配置详情',
                'description' => '样本配置详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'BhvTableSourceIds' => 
                  array (
                    'title' => '行为数据源列表',
                    'description' => '行为数据源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '行为数据源。',
                      'type' => 'string',
                    ),
                  ),
                  'FeatureConfig' => 
                  array (
                    'title' => '特征',
                    'description' => '特征配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ItemFeatures' => 
                      array (
                        'title' => '物品特征，支持多值，逗号分隔。',
                        'description' => '物品特征，支持多值，逗号分隔。',
                        'type' => 'string',
                        'example' => 'deress,red',
                      ),
                      'UserFeatures' => 
                      array (
                        'title' => '用户特征，支持多值，逗号分隔。',
                        'description' => '用户特征，支持多值，逗号分隔。',
                        'type' => 'string',
                        'example' => 'man',
                      ),
                    ),
                  ),
                  'LabelLogic' => 
                  array (
                    'title' => '打标逻辑',
                    'description' => '样品打标逻辑。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'BhvTimeWindow' => 
                      array (
                        'title' => '时间窗口，秒级别时间戳。',
                        'description' => '时间窗口，秒级别时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '86400',
                      ),
                      'NegativeBhvTypes' => 
                      array (
                        'title' => '负行为，支持多值，逗号分隔。',
                        'description' => '负行为，支持多值，逗号分隔。',
                        'type' => 'string',
                        'example' => 'click,expose',
                      ),
                      'PositiveBhvTypes' => 
                      array (
                        'title' => '是	正行为，支持多值，逗号分隔。',
                        'description' => '是	正行为，支持多值，逗号分隔。',
                        'type' => 'string',
                        'example' => 'like',
                      ),
                    ),
                  ),
                  'WeightLogicList' => 
                  array (
                    'title' => '权重逻辑',
                    'description' => '权重逻辑配置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '权重。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Bhv' => 
                        array (
                          'title' => '行为类型',
                          'description' => '行为类型。',
                          'type' => 'string',
                          'example' => 'click',
                        ),
                        'Weight' => 
                        array (
                          'title' => '权重',
                          'description' => '权重（1-100）。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ExtendParams' => 
              array (
                'title' => '扩展参数',
                'description' => '扩展参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'LatestTaskStatus' => 
                  array (
                    'title' => '任务状态',
                    'description' => '任务状态枚举值。

取值：

- **0**：没有任务。

- **1**：正常。

- **2**：异常。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'SampleCount' => 
                  array (
                    'title' => '样本数量',
                    'description' => '样本数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'MetaType' => 
              array (
                'title' => '修改元信息类型',
                'description' => '修改元信息类型。',
                'type' => 'string',
                'example' => 'Sample',
              ),
              'Name' => 
              array (
                'title' => '样本名称',
                'description' => '样本名称。',
                'type' => 'string',
                'example' => '12345',
              ),
              'StoreConfig' => 
              array (
                'title' => '存储位置',
                'description' => '存储位置。',
                'type' => 'string',
                'example' => 'projectName.tableName',
              ),
              'Type' => 
              array (
                'title' => '样本类型',
                'description' => '样本类型枚举值。

取值：

- **Cloned**：复制的。

- **System**：系统的。

- **Custom**：自定义的。',
                'type' => 'string',
                'example' => 'System',
              ),
            ),
          ),
          'GmtCreate' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间，单位为UTC时间。',
            'type' => 'string',
            'example' => '2021-12-07T12:28:52.000Z',
          ),
          'GmtModified' => 
          array (
            'title' => '修改时间',
            'description' => '最后修改时间。',
            'type' => 'string',
            'example' => '2021-12-07T12:28:52.000Z',
          ),
          'SampleId' => 
          array (
            'title' => '样本id',
            'description' => '样本ID。',
            'type' => 'string',
            'example' => '1638880131873',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreateInstance' => 
    array (
      'path' => '/v2/openapi/instances',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '18666',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'instanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'airec-cn-****',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"instanceId\\": \\"airec-cn-****\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</RequestId>\\n<Result>\\n    <InstanceId>airec-cn-xxxxx</InstanceId>\\n</Result>","errorExample":""}]',
      'title' => '创建一个预付费实例',
      'summary' => '创建一个智能推荐实例。',
      'requestParamsDescription' => '| 参数 | 类型 | 是否必需 | 描述 |
| :--- | :--- | :--- | :--- |
| type | String |是| 指定实例的类型，分为算法配置版（ Algorithm Configuration Edition ）和行业运营版（Industry Operation Edition）。|
| chargeType | String |是|实例的付费方式。取值范围： PREPAY：预付费，包年包月。选择该类付费方式时，您必须确认自己的账号支持余额支付/信用支付，否则将返回 InvalidPayMethod 的错误提示，并且需要指定paymentInfo参数。POSTPAY：按量付费（当前暂不支持）。|
| quota| Map| 是|您要申请的配额信息|
| userCountPerUnit|Integer|是|您要申请的用户表文档数的配额信息，限制请看系统限制。|
| itemCountPerUnit|Integer|是|您要申请的物品表文档数的配额信息，限制请看系统限制。|
| qps|Integer|是|您要申请的推荐请求的QPS配额信息，限制请看系统限制。|
| paymentInfo|Map|否|付费信息。|
| duration|Integer|否|付费周期，包含1，2，3，4，5，6，7，8，9，10，12|
| pricingCycle|String|否|周期单位，包含：月（Month），年（Year）等|
| autoRenew|Boolean|否|是否自动续费，包含：是（true）和否（false）|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstance' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18721',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5G3YBA',
          1 => 'FEATUREairecX63J28',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'regionId' => 
                  array (
                    'description' => '实例所在的区域。
',
                    'type' => 'string',
                    'example' => 'cn-beijing',
                  ),
                  'type' => 
                  array (
                    'description' => '实例类型。

取值：

- **Algorithm_configuration**：算法配置版。

- **Industry_operation**：行业运营版。

- **Cold_start**：冷启动版。',
                    'type' => 'string',
                    'example' => 'Algorithm_configuration',
                  ),
                  'lockMode' => 
                  array (
                    'description' => '实例锁定状态。

取值：

- **Unlock**：未锁定。

- **ManualLock**：手动锁定。

- **LockByExpiration**：欠费锁定。',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'expiredTime' => 
                  array (
                    'description' => '实例过期时间，单位为UTC时间。
',
                    'type' => 'string',
                    'example' => '2019-01-06T16:00:00.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '实例运行状态。

取值：

- **Initializing**：初始化中。

- **Ready**：待数据导入。

- **Running**：运行中。',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '实例创建时间，单位为UTC时间。
',
                    'type' => 'string',
                    'example' => '2018-12-06T06:14:01.000Z',
                  ),
                  'chargeType' => 
                  array (
                    'description' => '实例付费类型。

取值：

- **PREPAY**：预付费（包年包月）。

- **POSTPAY**：后付费（按量付费）。',
                    'type' => 'string',
                    'example' => 'POSTPAY',
                  ),
                  'industry' => 
                  array (
                    'description' => '实例行业类型。

取值：

- **content**：内容型。

- **item**：商品型。

- **news**：新闻型。',
                    'type' => 'string',
                    'example' => 'news',
                  ),
                  'commodityCode' => 
                  array (
                    'description' => 'Airec商品代码。',
                    'type' => 'string',
                    'example' => 'airecpre',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '实例最后修改时间。',
                    'type' => 'string',
                    'example' => '2020-04-23T06:08:48.000Z',
                  ),
                  'dataSetVersion' => 
                  array (
                    'description' => '当前实例在线服务的数据集版本。',
                    'type' => 'string',
                    'example' => '20181206170353',
                  ),
                  'name' => 
                  array (
                    'description' => '实例名称。
',
                    'type' => 'string',
                    'example' => '实例1',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID。
',
                    'type' => 'string',
                    'example' => 'airec-cn-****',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B5AA8EF-DB75-5BE9-ADFD-E645F9EA7374',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"regionId\\": \\"cn-beijing\\",\\n    \\"type\\": \\"Algorithm_configuration\\",\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"expiredTime\\": \\"2019-01-06T16:00:00.000Z\\",\\n    \\"status\\": \\"Running\\",\\n    \\"gmtCreate\\": \\"2018-12-06T06:14:01.000Z\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"industry\\": \\"news\\",\\n    \\"commodityCode\\": \\"airecpre\\",\\n    \\"gmtModified\\": \\"2020-04-23T06:08:48.000Z\\",\\n    \\"dataSetVersion\\": \\"20181206170353\\",\\n    \\"name\\": \\"实例1\\",\\n    \\"instanceId\\": \\"airec-cn-****\\"\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"9B5AA8EF-DB75-5BE9-ADFD-E645F9EA7374\\",\\n  \\"message\\": \\"successful\\"\\n}","type":"json"}]',
      'title' => '修改实例',
      'summary' => '修改指定实例配置。',
    ),
    'DescribeInstance' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18683',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'regionId' => 
                  array (
                    'description' => '实例所在的区域。
',
                    'type' => 'string',
                    'example' => 'cn-beijing',
                  ),
                  'type' => 
                  array (
                    'description' => '实例类型。

取值：

- **Algorithm_configuration**：算法配置版。

- **Industry_operation**：行业运营版。

- **Cold_start**：冷启动版。',
                    'type' => 'string',
                    'example' => 'Standard',
                  ),
                  'lockMode' => 
                  array (
                    'description' => '实例锁定状态。

取值：

- **Unlock**：未锁定。

- **ManualLock**：手动锁定。

- **LockByExpiration**：欠费锁定。',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'expiredTime' => 
                  array (
                    'description' => '实例过期时间，单位为UTC时间。
',
                    'type' => 'string',
                    'example' => '2019-01-06T16:00:00.000Z',
                  ),
                  'scene' => 
                  array (
                    'description' => '场景名称。

取值：

- **gul**：猜你喜欢。

- **rr**：相关推荐。

- **hot**：热门推荐。

- **focus**：焦点图推荐。',
                    'type' => 'string',
                    'example' => 'gul',
                  ),
                  'status' => 
                  array (
                    'description' => '实例运行状态。

取值：

- **Initializing**：初始化中。

- **Ready**：待数据导入。

- **Running**：运行中。',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '实例创建时间，单位为UTC时间。
',
                    'type' => 'string',
                    'example' => '2018-12-06T06:14:01.000Z',
                  ),
                  'chargeType' => 
                  array (
                    'description' => '实例付费类型。

取值：

- **PREPAY**：预付费（包年包月）。

- **POSTPAY**：后付费（按量付费）。',
                    'type' => 'string',
                    'example' => 'PrePaid',
                  ),
                  'industry' => 
                  array (
                    'description' => '实例行业类型。

取值：

- **content**：内容型。

- **item**：商品型。

- **news**：新闻型。',
                    'type' => 'string',
                    'example' => 'news',
                  ),
                  'commodityCode' => 
                  array (
                    'description' => 'Airec商品代码。',
                    'type' => 'string',
                    'example' => 'airecpre',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '实例最后更新时间，单位为UTC时间。
',
                    'type' => 'string',
                    'example' => '2018-12-06T11:17:49.000Z',
                  ),
                  'dataSetVersion' => 
                  array (
                    'description' => '当前在线服务的数据集版本。',
                    'type' => 'string',
                    'example' => '20181206170353',
                  ),
                  'name' => 
                  array (
                    'description' => '实例名称。
',
                    'type' => 'string',
                    'example' => '实例1',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID。
',
                    'type' => 'string',
                    'example' => 'airec-cn-****',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"regionId\\": \\"cn-beijing\\",\\n    \\"type\\": \\"Standard\\",\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"expiredTime\\": \\"2019-01-06T16:00:00.000Z\\",\\n    \\"scene\\": \\"gul\\",\\n    \\"status\\": \\"Running\\",\\n    \\"gmtCreate\\": \\"2018-12-06T06:14:01.000Z\\",\\n    \\"chargeType\\": \\"PrePaid\\",\\n    \\"industry\\": \\"news\\",\\n    \\"commodityCode\\": \\"airecpre\\",\\n    \\"gmtModified\\": \\"2018-12-06T11:17:49.000Z\\",\\n    \\"dataSetVersion\\": \\"20181206170353\\",\\n    \\"name\\": \\"实例1\\",\\n    \\"instanceId\\": \\"airec-cn-****\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<Result>\\n    <InstanceId>airec-cn-xxxxxx</InstanceId>\\n    <Name>airec-cn-xxxxxx</Name>\\n    <Type>Standard</Type>\\n    <Status>Running</Status>\\n    <Industry>news</Industry>\\n    <Scene>gul</Scene>\\n    <RegionId>cn-beijing</RegionId>\\n    <ChargeType>PrePaid</ChargeType>\\n    <DataSetVersion>20181206170353</DataSetVersion>\\n    <CommodityCode>airecpre</CommodityCode>\\n    <GmtCreate>2018-12-06T06:14:01.000Z</GmtCreate>\\n    <GmtModified>2018-12-06T11:17:49.000Z</GmtModified>\\n    <ExpiredTime>2019-01-06T16:00:00.000Z</ExpiredTime>\\n    <LockMode>Unlock</LockMode>\\n</Result>\\n<RequestId>B352FBD9-4643-441E-80ED-699D47D7B6A3</RequestId>","errorExample":""}]',
      'title' => '查询实例信息',
      'summary' => '通过指定的实例ID查看实例详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListInstance' => 
    array (
      'path' => '/v2/openapi/instances',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18705',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定页码，默认为：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定每页展示条数，默认为10，限制:[1-50]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通过实例运行状态进行过滤。

取值：

- **Initializing**：初始化中。

- **Ready**：待数据导入。

- **Running**：运行中。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        3 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通过实例名称进行过滤，支持模糊匹配。
',
            'type' => 'string',
            'required' => false,
            'example' => '实例1',
          ),
        ),
        4 => 
        array (
          'name' => 'expiredTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '秒级时间戳，通过过期时间过滤，大于当前时间会过滤出即将过期的实例（不包含已经过期的实例）。',
            'type' => 'string',
            'required' => false,
            'example' => '1608533404',
          ),
        ),
        5 => 
        array (
          'name' => 'instanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通过实例ID进行过滤，支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'regionId' => 
                    array (
                      'description' => '实例所在的区域。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'type' => 
                    array (
                      'description' => '实例类型。

取值：

- **Algorithm_configuration**：算法配置版。

- **Industry_operation**：行业运营版。

- **Cold_start**：冷启动版。',
                      'type' => 'string',
                      'example' => 'Standard',
                    ),
                    'lockMode' => 
                    array (
                      'description' => '实例锁定状态。

取值：

- **Unlock**：未锁定。

- **ManualLock**：手动锁定。

- **LockByExpiration**：欠费锁定。',
                      'type' => 'string',
                      'example' => 'Unlock',
                    ),
                    'expiredTime' => 
                    array (
                      'description' => '实例过期时间，单位为UTC时间。',
                      'type' => 'string',
                      'example' => '2019-01-06T16:00:00.000Z',
                    ),
                    'status' => 
                    array (
                      'description' => '实例运行状态。

取值：

- **Initializing**：初始化中。

- **Ready**：待数据导入。

- **Running**：运行中。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '实例创建时间，单位为UTC时间。',
                      'type' => 'string',
                      'example' => '2018-12-06T06:14:01.000Z',
                    ),
                    'chargeType' => 
                    array (
                      'description' => '实例付费类型。

取值：

- **PREPAY**：预付费（包年包月）。

- **POSTPAY**：后付费（按量付费）。',
                      'type' => 'string',
                      'example' => 'PrePaid',
                    ),
                    'industry' => 
                    array (
                      'description' => '实例行业类型。

取值：

- **content**：内容型。

- **item**：商品型。

- **news**：新闻型。',
                      'type' => 'string',
                      'example' => 'news',
                    ),
                    'commodityCode' => 
                    array (
                      'description' => 'Airec商品代码。',
                      'type' => 'string',
                      'example' => 'airecpre',
                    ),
                    'gmtModified' => 
                    array (
                      'description' => '实例最后更新时间，单位为UTC时间。',
                      'type' => 'string',
                      'example' => '2018-12-06T11:17:49.000Z',
                    ),
                    'dataSetVersion' => 
                    array (
                      'description' => '当前在线服务的数据集版本。',
                      'type' => 'string',
                      'example' => '20181206170353',
                    ),
                    'name' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => '实例1',
                    ),
                    'instanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'airec-cn-****',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"regionId\\": \\"cn-beijing\\",\\n      \\"type\\": \\"Standard\\",\\n      \\"lockMode\\": \\"Unlock\\",\\n      \\"expiredTime\\": \\"2019-01-06T16:00:00.000Z\\",\\n      \\"status\\": \\"Running\\",\\n      \\"gmtCreate\\": \\"2018-12-06T06:14:01.000Z\\",\\n      \\"chargeType\\": \\"PrePaid\\",\\n      \\"industry\\": \\"news\\",\\n      \\"commodityCode\\": \\"airecpre\\",\\n      \\"gmtModified\\": \\"2018-12-06T11:17:49.000Z\\",\\n      \\"dataSetVersion\\": \\"20181206170353\\",\\n      \\"name\\": \\"实例1\\",\\n      \\"instanceId\\": \\"airec-cn-****\\"\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <instanceId>airec-cn-5i3mq380d9q6</instanceId>\\n    <name>测试使用</name>\\n    <type>Standard</type>\\n    <status>Running</status>\\n    <industry>item</industry>\\n    <regionId>cn-hangzhou</regionId>\\n    <chargeType>PrePaid</chargeType>\\n    <dataSetVersion>20201220105251</dataSetVersion>\\n    <commodityCode>airecpre</commodityCode>\\n    <gmtCreate>2020-12-20T02:51:57.000Z</gmtCreate>\\n    <gmtModified>2020-12-20T03:34:05.000Z</gmtModified>\\n    <expiredTime>2021-01-20T16:00:00.000Z</expiredTime>\\n    <lockMode>Unlock</lockMode>\\n</result>\\n<requestId>CD76827D-8D92-4C90-9C31-A01941834442</requestId>\\n<headers>\\n    <X-Total-Count>1</X-Total-Count>\\n</headers>","errorExample":""}]',
      'title' => '查询实例列表',
      'summary' => '查询一个或多个实例的详细信息。',
      'description' => '获取实例列表，返回实例列表按GmtCreate倒序。请求参数的作用类似于一个过滤器，过滤器为逻辑与（ AND ）关系。如果某个参数为空，则过滤器不起作用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RunInstance' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/actions/import',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18739',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '是否成功创建数据集。
',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": false,\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</RequestId>\\n<Result>true</Result>","errorExample":""}]',
      'title' => '运行实例',
      'summary' => '启动实例开始全量数据导入任务。',
      'description' => '启动实例全量数据导入，此时系统会创建一个数据集新版本。系统会从您的数据源中导入所有的全量数据到系统并训练。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeInstance' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/actions/upgrade',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18745',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecIDS0JZ',
          1 => 'FEATUREairecDTVO6V',
          2 => 'FEATUREairecDM7OX0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'instanceId' => 
                  array (
                    'description' => '实例ID。
',
                    'type' => 'string',
                    'example' => 'airec-cn-****',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"instanceId\\": \\"airec-cn-****\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>90D6B8F5-FE97-4509-9AAB-367836C51818</RequestId>\\n<Result>\\n    <InstanceId>airec-cn-xxxxxx</InstanceId>\\n</Result>","errorExample":""}]',
      'title' => '更新实例配额信息',
      'summary' => '更新指定实例配额（Quota）信息。',
      'description' => '更新指定实例配额 (Quota)信息。

用户数限制为：最小值 1,000,000、最大值 10,000,000物品数限制为：最小值 1,000,000、最大值 10,000,000推荐请求QPS限制为：最小值 10、最大值 500。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ValidateInstance' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/actions/validate',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '18746',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecIDS0JZ',
          1 => 'FEATUREairecEDD4RN',
          2 => 'FEATUREairecDTVO6V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90D6B8F5-FE97-4509-9AAB-367836C51818',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": true,\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"90D6B8F5-FE97-4509-9AAB-367836C51818\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '校验指定实例有效性',
      'summary' => '校验指定实例信息的有效性。',
    ),
    'DowngradeInstance' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/actions/downgrade',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18694',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecIDS0JZ',
          1 => 'FEATUREairecDTVO6V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'instanceId' => 
                  array (
                    'description' => '实例ID。
',
                    'type' => 'string',
                    'example' => 'airec-cn-****',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"instanceId\\": \\"airec-cn-****\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>90D6B8F5-FE97-4509-9AAB-367836C51818</RequestId>\\n<Result>\\n    <InstanceId>airec-cn-xxxxxx</InstanceId>\\n</Result>","errorExample":""}]',
      'title' => '降低指定实例配额 (Quota)信息',
      'summary' => '降低指定实例配额 （Quota）信息。',
      'description' => '新的配额数据不能大于已经选择的配额并且不能小于目前已经使用的配额。

用户数限制为：最小值 1,000,000、最大值 10,000,000；
物品数限制为：最小值 1,000,000、最大值 10,000,000；
推荐请求QPS限制为：最小值 10、最大值 500。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateExtraDataSource' => 
    array (
      'summary' => '创建一个数据源。',
      'path' => '/v2/openapi/instances/{instanceId}/extra-data-sources',
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
        'abilityTreeCode' => '117103',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                '$ref' => '#/components/schemas/ExtraDataSource',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"Ready 待应用；Online 已应用；Failed失败\\",\\n    \\"Meta\\": {\\n      \\"Internal\\": true,\\n      \\"MetaType\\": \\"ExtraDataSource\\",\\n      \\"ProjectName\\": \\"test_project\\",\\n      \\"TableName\\": \\"test_table\\",\\n      \\"Type\\": \\"ODPS\\",\\n      \\"UpdateFrequency\\": 86400\\n    },\\n    \\"Type\\": \\"UserCustomDataSource、ItemCustomDataSource、BehaviorCustomDataSource、SampleCustomDataSource\\",\\n    \\"GmtCreate\\": \\"2021-12-07T13:26:29.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-07T13:26:29.000Z\\",\\n    \\"DataSourceId\\": \\"E01D574F-ABD0-4C55-A5E3-8D24FD8D42EA\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建数据源',
    ),
    'DeleteExtraDataSource' => 
    array (
      'summary' => '删除数据源。',
      'path' => '/v2/openapi/instances/{instanceId}/extra-data-sources/{type}/{dataSourceId}',
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
        'abilityTreeCode' => '117109',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '数据源类型',
            'description' => '数据源类型。

取值：

- **UserCustomDataSource**：用户数据源。

- **ItemCustomDataSource**：物品数据源。

- **BehaviorCustomDataSource**：行为数据源。',
            'type' => 'string',
            'required' => true,
            'example' => 'UserCustomDataSource',
          ),
        ),
        2 => 
        array (
          'name' => 'dataSourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '数据源id',
            'description' => '数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                '$ref' => '#/components/schemas/ExtraDataSource',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"Ready 待应用；Online 已应用；Failed失败\\",\\n    \\"Meta\\": {\\n      \\"Internal\\": true,\\n      \\"MetaType\\": \\"ExtraDataSource\\",\\n      \\"ProjectName\\": \\"test_project\\",\\n      \\"TableName\\": \\"test_table\\",\\n      \\"Type\\": \\"ODPS\\",\\n      \\"UpdateFrequency\\": 86400\\n    },\\n    \\"Type\\": \\"UserCustomDataSource、ItemCustomDataSource、BehaviorCustomDataSource、SampleCustomDataSource\\",\\n    \\"GmtCreate\\": \\"2021-12-07T13:26:29.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-07T13:26:29.000Z\\",\\n    \\"DataSourceId\\": \\"E01D574F-ABD0-4C55-A5E3-8D24FD8D42EA\\"\\n  }\\n}","type":"json"}]',
      'title' => '删除数据源',
    ),
    'ListExtraDataSources' => 
    array (
      'summary' => '获取特征、样本数据源列表。',
      'path' => '/v2/openapi/instances/{instanceId}/extra-data-sources',
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
        'abilityTreeCode' => '117105',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '根据数据源类型过滤',
            'description' => '数据源类型。

取值：

- **UserCustomDataSource**：用户数据源。

- **ItemCustomDataSource**：物品数据源。

- **BehaviorCustomDataSource**：行为数据源。',
            'type' => 'string',
            'required' => false,
            'example' => 'UserCustomDataSource',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据源列表。',
                  '$ref' => '#/components/schemas/ExtraDataSource',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": [\\n    {\\n      \\"Status\\": \\"Ready 待应用；Online 已应用；Failed失败\\",\\n      \\"Meta\\": {\\n        \\"Internal\\": true,\\n        \\"MetaType\\": \\"ExtraDataSource\\",\\n        \\"ProjectName\\": \\"test_project\\",\\n        \\"TableName\\": \\"test_table\\",\\n        \\"Type\\": \\"ODPS\\",\\n        \\"UpdateFrequency\\": 86400\\n      },\\n      \\"Type\\": \\"UserCustomDataSource、ItemCustomDataSource、BehaviorCustomDataSource、SampleCustomDataSource\\",\\n      \\"GmtCreate\\": \\"2021-12-07T13:26:29.000Z\\",\\n      \\"GmtModified\\": \\"2021-12-07T13:26:29.000Z\\",\\n      \\"DataSourceId\\": \\"E01D574F-ABD0-4C55-A5E3-8D24FD8D42EA\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取数据源',
    ),
    'DeleteDataSet' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dataSets/{versionId}',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '18671',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'versionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2018102321****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'versionId' => 
                  array (
                    'description' => '版本号ID。',
                    'type' => 'string',
                    'example' => '2018102321****',
                  ),
                  'state' => 
                  array (
                    'description' => 'State状态类型。

取值：

- **Importing**：数据导入中。

- **DataSuccess**：数据导入成功。

- **DataFailed**：数据导入失败，终态。

- **Training**：训练中。

- **Success**：成功，终态。

- **Failed**：失败，终态。

- **Stopped**：终止，终态。',
                    'type' => 'string',
                    'example' => 'Importing',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改数据源的时间。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2018-12-06T11:17:49.000Z',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建数据源的时间。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID。
',
                    'type' => 'string',
                    'example' => 'airec-cn-o400whm78004',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"versionId\\": \\"2018102321****\\",\\n    \\"state\\": \\"Importing\\",\\n    \\"gmtModified\\": 0,\\n    \\"gmtCreate\\": 0,\\n    \\"instanceId\\": \\"airec-cn-o400whm78004\\"\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '删除指定实例的指定数据集版本',
      'summary' => '删除指定实例的指定数据集版本。',
    ),
    'AttachDataset' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dataSets/{versionId}/actions/current',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18661',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'versionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2018102321****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'versionId' => 
                  array (
                    'description' => '版本号ID。',
                    'type' => 'string',
                    'example' => '2018102321****',
                  ),
                  'state' => 
                  array (
                    'description' => 'State状态类型。

取值：

- **Importing**：数据导入中。

- **DataSuccess**：数据导入成功。

- **DataFailed**：数据导入失败，终态。

- **Training**：训练中。

- **Success**：成功，终态。

- **Failed**：失败，终态。

- **Stopped**：终止，终态。',
                    'type' => 'string',
                    'example' => 'Importing',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2018-12-06T06:14:01.000Z',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'airec-cn-****',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F60021C4-57AF-5F46-9B3E-FCEF1C7A1459',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"versionId\\": \\"2018102321****\\",\\n    \\"state\\": \\"Importing\\",\\n    \\"gmtModified\\": 0,\\n    \\"gmtCreate\\": 0,\\n    \\"instanceId\\": \\"airec-cn-****\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"F60021C4-57AF-5F46-9B3E-FCEF1C7A1459\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","type":"json"}]',
      'title' => '开启数据训练',
      'summary' => '指定实例的指定数据集版本提供在线服务。',
    ),
    'DescribeDataSetMessage' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dataSets/{versionId}/messages',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18677',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'versionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2018102321****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'message' => 
                    array (
                      'description' => '数据诊断错误详情。',
                      'type' => 'string',
                      'example' => 'item商品表合法率0.36，可被采纳数据（符合规范）较少。会影响预热期推荐效果。请检查数据，补充相关字段信息，重新导入。建议优化。',
                    ),
                    'timestamp' => 
                    array (
                      'description' => '数据诊断错误时间。',
                      'type' => 'string',
                      'example' => '20181211 17:27:44',
                    ),
                    'errorLevel' => 
                    array (
                      'description' => '数据诊断错误级别。',
                      'type' => 'string',
                      'example' => 'warn',
                    ),
                    'errorType' => 
                    array (
                      'description' => '数据诊断错误类型。',
                      'type' => 'string',
                      'example' => '合法率',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"message\\": \\"item商品表合法率0.36，可被采纳数据（符合规范）较少。会影响预热期推荐效果。请检查数据，补充相关字段信息，重新导入。建议优化。\\",\\n      \\"timestamp\\": \\"20181211 17:27:44\\",\\n      \\"errorLevel\\": \\"warn\\",\\n      \\"errorType\\": \\"合法率\\"\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</RequestId>\\n<Result>\\n    <ErrorType>合法率</ErrorType>\\n    <ErrorLevel>warn</ErrorLevel>\\n    <Message>item商品表合法率0.36，可被采纳数据（符合规范）较少。会影响预热期推荐效果。请检查数据，补充相关字段信息，重新导入。建议优化。</Message>\\n    <Timestamp>20181211 17:27:44</Timestamp>\\n</Result>","errorExample":""}]',
      'title' => 'DescribeDataSetMessage',
      'summary' => '获取指定实例的指定数据集版本数据错误详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDataSet' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dataSets',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18700',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'versionId' => 
                    array (
                      'description' => '数据版本ID。',
                      'type' => 'string',
                      'example' => '2018102321****',
                    ),
                    'state' => 
                    array (
                      'description' => 'State状态类型。

取值：

- **Importing**：数据导入中。

- **DataSuccess**：数据导入成功。

- **DataFailed**：数据导入失败，终态。

- **Training**：训练中。

- **Success**：成功，终态。

- **Failed**：失败，终态。

- **Stopped**：终止，终态。',
                      'type' => 'string',
                      'example' => 'Importing',
                    ),
                    'gmtModified' => 
                    array (
                      'description' => '最后修改时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2020-11-11T09:47:43.000Z',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2018-12-07T02:24:26.000Z',
                    ),
                    'instanceId' => 
                    array (
                      'description' => '实例ID。
',
                      'type' => 'string',
                      'example' => 'airec-cn-o400whm78004',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"versionId\\": \\"2018102321****\\",\\n      \\"state\\": \\"Importing\\",\\n      \\"gmtModified\\": 0,\\n      \\"gmtCreate\\": 0,\\n      \\"instanceId\\": \\"airec-cn-o400whm78004\\"\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '获取数据集列表',
      'summary' => '获取指定实例的数据集列表。',
    ),
    'DeleteExperiment' => 
    array (
      'summary' => '删除一个实验。',
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiments/{experimentId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '18672',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****
',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
        2 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12345',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除实验',
    ),
    'EnableExperiment' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/actions/enable-experiment',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18695',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B\\"\\n}","type":"json"}]',
      'title' => '启用实验',
      'summary' => '启用实验功能。',
    ),
    'UpdateExperimentBasicInfo' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiments/{experimentId}/basic',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18742',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
        2 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12345',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'base' => 
                  array (
                    'description' => '分桶列表。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'onlineTime' => 
                  array (
                    'description' => '实验上线时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'offlineTime' => 
                  array (
                    'description' => '实验下线时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'description' => 
                  array (
                    'description' => '实验备注。',
                    'type' => 'string',
                    'example' => 'demo1',
                  ),
                  'status' => 
                  array (
                    'description' => '实验状态。

取值：

- **Init**：未上线。

- **Online**：上线。

- **Finish**：推全。

- **Offline**：下线。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'name' => 
                  array (
                    'description' => '实验名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'algorithms' => 
                  array (
                    'description' => '实验参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实验参数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '算法key。

取值：

- **i2i**：i2i召回链路。

- **u2x2i**：u2x2i召回链路。

- **hot**：热门商品召回链路。

- **new**：新品召回链路。

- **embedding**：向量召回链路。

- **mtorder**：召回链路优先级。

- **rankservice**：排序服务。',
                          'type' => 'string',
                          'example' => 'I2I',
                        ),
                        'config' => 
                        array (
                          'description' => '子配置项列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子配置项信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'key' => 
                              array (
                                'description' => '算法配置项key。',
                                'type' => 'string',
                                'example' => 'I2I',
                              ),
                              'defaultValue' => 
                              array (
                                'description' => '算法配置项默认值。',
                                'type' => 'string',
                                'example' => 'true',
                              ),
                              'experimentValue' => 
                              array (
                                'description' => '实验值。',
                                'type' => 'string',
                                'example' => '400',
                              ),
                              'name' => 
                              array (
                                'description' => '子配置名称。',
                                'type' => 'string',
                                'example' => 'i2i召回链路',
                              ),
                            ),
                          ),
                        ),
                        'defaultValue' => 
                        array (
                          'description' => '默认召回数量。',
                          'type' => 'string',
                          'example' => '400',
                        ),
                        'type' => 
                        array (
                          'description' => '算法类别。

取值：

- **SYSTEM**：系统默认类型。

- **CUSTOM**：用户自定义类型。',
                          'type' => 'string',
                          'example' => 'SYSTEM',
                        ),
                        'experimentValue' => 
                        array (
                          'description' => '实验定制值。',
                          'type' => 'string',
                          'example' => '400',
                        ),
                        'hasConfig' => 
                        array (
                          'description' => '是否有子配置项。

取值：

- **true**：是。

- **false**：否。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'category' => 
                        array (
                          'description' => '算法类目。

取值：

- **RECALL**：召回。

- **RANK**：排序。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                        'name' => 
                        array (
                          'description' => '实验名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                      ),
                    ),
                  ),
                  'buckets' => 
                  array (
                    'description' => '分桶列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分桶。',
                      'type' => 'string',
                      'example' => '["1","2","3"]',
                    ),
                  ),
                  'experimentId' => 
                  array (
                    'description' => '实验ID。',
                    'type' => 'string',
                    'example' => '12345',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"base\\": true,\\n    \\"onlineTime\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"offlineTime\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"description\\": \\"demo1\\",\\n    \\"status\\": \\"1\\",\\n    \\"name\\": \\"test\\",\\n    \\"algorithms\\": [\\n      {\\n        \\"key\\": \\"I2I\\",\\n        \\"config\\": [\\n          {\\n            \\"key\\": \\"I2I\\",\\n            \\"defaultValue\\": \\"true\\",\\n            \\"experimentValue\\": \\"400\\",\\n            \\"name\\": \\"i2i召回链路\\"\\n          }\\n        ],\\n        \\"defaultValue\\": \\"400\\",\\n        \\"type\\": \\"SYSTEM\\",\\n        \\"experimentValue\\": \\"400\\",\\n        \\"hasConfig\\": false,\\n        \\"category\\": \\"2\\",\\n        \\"name\\": \\"test\\"\\n      }\\n    ],\\n    \\"buckets\\": [\\n      \\"[\\\\\\"1\\\\\\",\\\\\\"2\\\\\\",\\\\\\"3\\\\\\"]\\"\\n    ],\\n    \\"experimentId\\": \\"12345\\"\\n  },\\n  \\"requestId\\": \\"E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新实验基本信息',
      'summary' => '更新实验基本信息。',
    ),
    'UpdateExperimentConfig' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiments/{experimentId}/config',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18743',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****
',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
        2 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12345',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'base' => 
                  array (
                    'description' => '是否为默认实验。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'onlineTime' => 
                  array (
                    'description' => '实验上线时间。',
                    'type' => 'string',
                    'example' => '2020-12-07T06:47:30.000Z',
                  ),
                  'offlineTime' => 
                  array (
                    'description' => '实验下线/推全时间。',
                    'type' => 'string',
                    'example' => '2020-12-07T06:47:30.000Z',
                  ),
                  'description' => 
                  array (
                    'description' => '实验备注。',
                    'type' => 'string',
                    'example' => 'demo1',
                  ),
                  'status' => 
                  array (
                    'description' => '实验状态。

取值：

- **Init**：未上线。

- **Online**：上线。

- **Finish**：推全。

- **Offline**：下线。',
                    'type' => 'string',
                    'example' => 'Online',
                  ),
                  'name' => 
                  array (
                    'description' => '实验名称。',
                    'type' => 'string',
                    'example' => 'I2I召回链路',
                  ),
                  'algorithms' => 
                  array (
                    'description' => '实验参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实验参数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '算法key。

取值：

- **I2I**：I2I召回链路。

- **u2X2I**：U2X2I召回链路。

- **hot**：热门商品召回链路。

- **new**：新品召回链路。

- **embedding**：向量召回链路。

- **mtorder**：召回链路优先级。

- **rankservice**：排序服务。',
                          'type' => 'string',
                          'example' => 'I2I',
                        ),
                        'config' => 
                        array (
                          'description' => '子配置项列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子配置项信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'key' => 
                              array (
                                'description' => '算法配置项key。',
                                'type' => 'string',
                                'example' => 'I2I',
                              ),
                              'defaultValue' => 
                              array (
                                'description' => '算法配置项默认值。',
                                'type' => 'string',
                                'example' => 'true',
                              ),
                              'experimentValue' => 
                              array (
                                'description' => '实验值。',
                                'type' => 'string',
                                'example' => 'true',
                              ),
                              'name' => 
                              array (
                                'description' => '子配置名称。',
                                'type' => 'string',
                                'example' => 'xxx',
                              ),
                            ),
                          ),
                        ),
                        'defaultValue' => 
                        array (
                          'description' => '默认召回数量。',
                          'type' => 'string',
                          'example' => '400',
                        ),
                        'type' => 
                        array (
                          'description' => '算法类别。

取值：

- **SYSTEM**：系统默认类型。

- **CUSTOM**：用户自定义类型。',
                          'type' => 'string',
                          'example' => 'SYSTEM',
                        ),
                        'experimentValue' => 
                        array (
                          'description' => '实验值。',
                          'type' => 'string',
                          'example' => '300',
                        ),
                        'hasConfig' => 
                        array (
                          'description' => '是否有子配置项。

取值：

- **true**：是

- **false**：否',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'category' => 
                        array (
                          'description' => '算法类目。

取值：

- **RECALL**：召回。

- **RANK**：排序。',
                          'type' => 'string',
                          'example' => 'RECALL',
                        ),
                        'name' => 
                        array (
                          'description' => '实验名称。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                      ),
                    ),
                  ),
                  'buckets' => 
                  array (
                    'description' => '分桶列表，上线实验时该字段才生效。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分桶信息。',
                      'type' => 'string',
                      'example' => 'userid',
                    ),
                  ),
                  'experimentId' => 
                  array (
                    'description' => '实验ID。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"base\\": true,\\n    \\"onlineTime\\": \\"2020-12-07T06:47:30.000Z\\",\\n    \\"offlineTime\\": \\"2020-12-07T06:47:30.000Z\\",\\n    \\"description\\": \\"demo1\\",\\n    \\"status\\": \\"Online\\",\\n    \\"name\\": \\"I2I召回链路\\",\\n    \\"algorithms\\": [\\n      {\\n        \\"key\\": \\"I2I\\",\\n        \\"config\\": [\\n          {\\n            \\"key\\": \\"I2I\\",\\n            \\"defaultValue\\": \\"true\\",\\n            \\"experimentValue\\": \\"true\\",\\n            \\"name\\": \\"xxx\\"\\n          }\\n        ],\\n        \\"defaultValue\\": \\"400\\",\\n        \\"type\\": \\"SYSTEM\\",\\n        \\"experimentValue\\": \\"300\\",\\n        \\"hasConfig\\": true,\\n        \\"category\\": \\"RECALL\\",\\n        \\"name\\": \\"xxx\\"\\n      }\\n    ],\\n    \\"buckets\\": [\\n      \\"userid\\"\\n    ],\\n    \\"experimentId\\": \\"xxx\\"\\n  },\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新实验配置',
      'summary' => '更新一个实验配置信息。',
    ),
    'UpdateExperimentStatus' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiments/{experimentId}/status',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18744',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
        2 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'base' => 
                  array (
                    'description' => '是否为默认实验。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'onlineTime' => 
                  array (
                    'description' => '实验上线时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'offlineTime' => 
                  array (
                    'description' => '实验下线时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'description' => 
                  array (
                    'description' => '实验备注。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'status' => 
                  array (
                    'description' => '实验状态。

取值：

- **Init**：未上线。

- **Online**：上线。

- **Finish**：推全。

- **Offline**：下线。',
                    'type' => 'string',
                    'example' => 'init',
                  ),
                  'name' => 
                  array (
                    'description' => '实验名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'algorithms' => 
                  array (
                    'description' => '实验参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实验参数信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '算法key。

取值：

- **I2I**：I2I召回链路。

- **u2X2I**：U2X2I召回链路。

- **hot**：热门商品召回链路。

- **new**：新品召回链路。

- **embedding**：向量召回链路。

- **mtorder**：召回链路优先级。

- **rankservice**：排序服务。',
                          'type' => 'string',
                          'example' => 'hot',
                        ),
                        'config' => 
                        array (
                          'description' => '子配置项列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子配置项信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'key' => 
                              array (
                                'description' => '算法配置项key。',
                                'type' => 'string',
                                'example' => 'hot',
                              ),
                              'defaultValue' => 
                              array (
                                'description' => '算法配置项默认值。',
                                'type' => 'string',
                                'example' => 'xxx',
                              ),
                              'experimentValue' => 
                              array (
                                'description' => '实验值。',
                                'type' => 'string',
                                'example' => 'xxx',
                              ),
                              'name' => 
                              array (
                                'description' => '子配置名称。',
                                'type' => 'string',
                                'example' => 'xxx',
                              ),
                            ),
                          ),
                        ),
                        'defaultValue' => 
                        array (
                          'description' => '默认召回数量。',
                          'type' => 'string',
                          'example' => 'swing',
                        ),
                        'type' => 
                        array (
                          'description' => '算法类别。

取值：

- **SYSTEM**：系统默认类型。

- **CUSTOM**：用户自定义类型。',
                          'type' => 'string',
                          'example' => 'SYSTEM',
                        ),
                        'experimentValue' => 
                        array (
                          'description' => '实验值。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'hasConfig' => 
                        array (
                          'description' => '是否有子配置项。

取值：

- **true**：是

- **false**：否',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'category' => 
                        array (
                          'description' => '算法类目。

取值：

- **RECALL**：召回。

- **RANK**：排序。',
                          'type' => 'string',
                          'example' => 'RECALL',
                        ),
                        'name' => 
                        array (
                          'description' => '实验名称。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                      ),
                    ),
                  ),
                  'buckets' => 
                  array (
                    'description' => '分桶列表，上线实验时该字段才生效。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分桶信息。',
                      'type' => 'string',
                      'example' => '["1"、"2"、"3"]',
                    ),
                  ),
                  'experimentId' => 
                  array (
                    'description' => '实验ID。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"base\\": true,\\n    \\"onlineTime\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"offlineTime\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"description\\": \\"xxx\\",\\n    \\"status\\": \\"init\\",\\n    \\"name\\": \\"test\\",\\n    \\"algorithms\\": [\\n      {\\n        \\"key\\": \\"hot\\",\\n        \\"config\\": [\\n          {\\n            \\"key\\": \\"hot\\",\\n            \\"defaultValue\\": \\"xxx\\",\\n            \\"experimentValue\\": \\"xxx\\",\\n            \\"name\\": \\"xxx\\"\\n          }\\n        ],\\n        \\"defaultValue\\": \\"swing\\",\\n        \\"type\\": \\"SYSTEM\\",\\n        \\"experimentValue\\": \\"xxx\\",\\n        \\"hasConfig\\": false,\\n        \\"category\\": \\"RECALL\\",\\n        \\"name\\": \\"xxx\\"\\n      }\\n    ],\\n    \\"buckets\\": [\\n      \\"[\\\\\\"1\\\\\\"、\\\\\\"2\\\\\\"、\\\\\\"3\\\\\\"]\\"\\n    ],\\n    \\"experimentId\\": \\"123\\"\\n  },\\n  \\"requestId\\": \\"E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateExperimentStatusResponse>\\n    <result>\\n        <experimentId>12345</experimentId>\\n        <name>实验1</name>\\n        <description>demo1</description>\\n        <buckets>1</buckets>\\n        <buckets>2</buckets>\\n        <buckets>3</buckets>\\n        <status>init</status>\\n        <base>true</base>\\n        <onlineTime>2020-11-11t09:47:43.000z</onlineTime>\\n        <offlineTime/>\\n        <algorithms>\\n            <key>i2i</key>\\n            <name>i2i召回链路</name>\\n            <category>recall</category>\\n            <type>system</type>\\n            <defaultValue>true</defaultValue>\\n            <experimentValue/>\\n            <hasConfig>true</hasConfig>\\n            <config>\\n                <key>i2i-truncedquantity</key>\\n                <name>截断数量</name>\\n                <defaultValue>400</defaultValue>\\n                <experimentValue>300</experimentValue>\\n            </config>\\n            <config>\\n                <key>i2i-algo</key>\\n                <name>i2i算法</name>\\n                <defaultValue>swing;commoni2i;pcategory;scategory</defaultValue>\\n                <experimentValue/>\\n            </config>\\n        </algorithms>\\n        <algorithms>\\n            <key>mtorder</key>\\n            <name>召回链路优先级</name>\\n            <type>system</type>\\n            <category>recall</category>\\n            <defaultValue>i2i;u2x2i;new;hot;embedding;embedding</defaultValue>\\n            <experimentValue/>\\n            <hasConfig>false</hasConfig>\\n        </algorithms>\\n    </result>\\n    <requestId>e3d6fe3b-b7c2-43da-9a13-5ea837aced9b</requestId>\\n</UpdateExperimentStatusResponse>","errorExample":""}]',
      'title' => '更新实验状态',
      'summary' => '更新实验状态。',
    ),
    'DescribeBaseExperiment' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/base-experiment',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18676',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'base' => 
                  array (
                    'description' => '是否为默认实验。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'onlineTime' => 
                  array (
                    'description' => '实验上线时间。',
                    'type' => 'string',
                    'example' => '2020-12-07T06:47:30.000Z',
                  ),
                  'offlineTime' => 
                  array (
                    'description' => '实验下线/推全时间。',
                    'type' => 'string',
                    'example' => '2020-12-07T06:47:30.000Z',
                  ),
                  'description' => 
                  array (
                    'description' => '实验备注。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'status' => 
                  array (
                    'description' => '实验状态。

取值：

- **Init**：未上线。

- **Online**：上线。

- **Finish**：推全。

- **Offline**：下线。',
                    'type' => 'string',
                    'example' => 'Init',
                  ),
                  'name' => 
                  array (
                    'description' => '实验名称。',
                    'type' => 'string',
                    'example' => '测试实验',
                  ),
                  'algorithms' => 
                  array (
                    'description' => '实验参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实验参数信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '算法key。

取值：

- **I2I**：I2I召回链路。

- **u2X2I**：U2X2I召回链路。

- **hot**：热门商品召回链路。

- **new**：新品召回链路。

- **embedding**：向量召回链路。

- **mtorder**：召回链路优先级。

- **rankservice**：排序服务。',
                          'type' => 'string',
                          'example' => 'I2I',
                        ),
                        'config' => 
                        array (
                          'description' => '子配置项列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子配置项信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'key' => 
                              array (
                                'description' => '算法配置项key。',
                                'type' => 'string',
                                'example' => 'I2I',
                              ),
                              'defaultValue' => 
                              array (
                                'description' => '算法配置项默认值。',
                                'type' => 'string',
                                'example' => 'true',
                              ),
                              'experimentValue' => 
                              array (
                                'description' => '实验值。',
                                'type' => 'string',
                                'example' => '400',
                              ),
                              'name' => 
                              array (
                                'description' => '子配置名称。',
                                'type' => 'string',
                                'example' => 'xxx',
                              ),
                            ),
                          ),
                        ),
                        'defaultValue' => 
                        array (
                          'description' => '默认召回数量。',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'type' => 
                        array (
                          'description' => '算法类别。

取值：

- **SYSTEM**：系统默认类型。

- **CUSTOM**：用户自定义类型。',
                          'type' => 'string',
                          'example' => 'SYSTEM',
                        ),
                        'experimentValue' => 
                        array (
                          'description' => '实验值。',
                          'type' => 'string',
                          'example' => '400',
                        ),
                        'hasConfig' => 
                        array (
                          'description' => '是否有子配置项。

取值：

- **true**：是

- **false**：否',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'category' => 
                        array (
                          'description' => '算法类目。

取值：

- **RECALL**：召回。

- **RANK**：排序。',
                          'type' => 'string',
                          'example' => 'RECALL',
                        ),
                        'name' => 
                        array (
                          'description' => '实验名称。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                      ),
                    ),
                  ),
                  'buckets' => 
                  array (
                    'description' => '分桶列表，上线实验时该字段才生效。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分桶信息。',
                      'type' => 'string',
                      'example' => '[1,2,3]',
                    ),
                  ),
                  'experimentId' => 
                  array (
                    'description' => '实验ID。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => 'A74E3FB7-406C-5CBB-833E-E49308B5DC05',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"base\\": true,\\n    \\"onlineTime\\": \\"2020-12-07T06:47:30.000Z\\",\\n    \\"offlineTime\\": \\"2020-12-07T06:47:30.000Z\\",\\n    \\"description\\": \\"xxx\\",\\n    \\"status\\": \\"Init\\",\\n    \\"name\\": \\"测试实验\\",\\n    \\"algorithms\\": [\\n      {\\n        \\"key\\": \\"I2I\\",\\n        \\"config\\": [\\n          {\\n            \\"key\\": \\"I2I\\",\\n            \\"defaultValue\\": \\"true\\",\\n            \\"experimentValue\\": \\"400\\",\\n            \\"name\\": \\"xxx\\"\\n          }\\n        ],\\n        \\"defaultValue\\": \\"true\\",\\n        \\"type\\": \\"SYSTEM\\",\\n        \\"experimentValue\\": \\"400\\",\\n        \\"hasConfig\\": false,\\n        \\"category\\": \\"RECALL\\",\\n        \\"name\\": \\"xxx\\"\\n      }\\n    ],\\n    \\"buckets\\": [\\n      \\"[1,2,3]\\"\\n    ],\\n    \\"experimentId\\": \\"xxx\\"\\n  },\\n  \\"requestId\\": \\"A74E3FB7-406C-5CBB-833E-E49308B5DC05\\"\\n}","type":"json"}]',
      'title' => '获取基础实验',
      'summary' => '获取基础实验。',
    ),
    'DescribeExperiment' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiments/{experimentId}',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18679',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
        2 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '23245',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'base' => 
                  array (
                    'description' => '是否为默认实验。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'onlineTime' => 
                  array (
                    'description' => '实验上线时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'offlineTime' => 
                  array (
                    'description' => '实验下线时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'description' => 
                  array (
                    'description' => '实验备注。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'status' => 
                  array (
                    'description' => '实验状态。

取值：

- **Init**：未上线。

- **Online**：上线。

- **Finish**：推全。

- **Offline**：下线。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'name' => 
                  array (
                    'description' => '实验名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'algorithms' => 
                  array (
                    'description' => '实验参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实验参数信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '算法key。

取值：

- **I2I**：I2I召回链路。

- **u2X2I**：U2X2I召回链路。

- **hot**：热门商品召回链路。

- **new**：新品召回链路。

- **embedding**：向量召回链路。

- **mtorder**：召回链路优先级。

- **rankservice**：排序服务。',
                          'type' => 'string',
                          'example' => 'I2I',
                        ),
                        'config' => 
                        array (
                          'description' => '子配置项列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子配置项信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'key' => 
                              array (
                                'description' => '算法配置项key。',
                                'type' => 'string',
                                'example' => 'I2I',
                              ),
                              'defaultValue' => 
                              array (
                                'description' => '算法配置项默认值。',
                                'type' => 'string',
                                'example' => 'true',
                              ),
                              'experimentValue' => 
                              array (
                                'description' => '实验值。',
                                'type' => 'string',
                                'example' => '400',
                              ),
                              'name' => 
                              array (
                                'description' => '子配置名称。',
                                'type' => 'string',
                                'example' => 'xxx',
                              ),
                            ),
                          ),
                        ),
                        'defaultValue' => 
                        array (
                          'description' => '默认召回数量。',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'type' => 
                        array (
                          'description' => '算法类别。

取值：

- **SYSTEM**：系统默认类型。

- **CUSTOM**：用户自定义类型。',
                          'type' => 'string',
                          'example' => 'SYSTEM',
                        ),
                        'experimentValue' => 
                        array (
                          'description' => '实验值。',
                          'type' => 'string',
                          'example' => '空',
                        ),
                        'hasConfig' => 
                        array (
                          'description' => '是否有子配置项。

取值：

- **true**：是

- **false**：否',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'category' => 
                        array (
                          'description' => '算法类目。

取值：

- **RECALL**：召回。

- **RANK**：排序。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                        'name' => 
                        array (
                          'description' => '实验名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                      ),
                    ),
                  ),
                  'buckets' => 
                  array (
                    'description' => '分桶列表，上线实验时该字段才生效。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分桶信息。',
                      'type' => 'string',
                      'example' => '["1","2","3"]',
                    ),
                  ),
                  'experimentId' => 
                  array (
                    'description' => '实验ID。',
                    'type' => 'string',
                    'example' => '12345',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"base\\": true,\\n    \\"onlineTime\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"offlineTime\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"description\\": \\"xxx\\",\\n    \\"status\\": \\"1\\",\\n    \\"name\\": \\"test\\",\\n    \\"algorithms\\": [\\n      {\\n        \\"key\\": \\"I2I\\",\\n        \\"config\\": [\\n          {\\n            \\"key\\": \\"I2I\\",\\n            \\"defaultValue\\": \\"true\\",\\n            \\"experimentValue\\": \\"400\\",\\n            \\"name\\": \\"xxx\\"\\n          }\\n        ],\\n        \\"defaultValue\\": \\"true\\",\\n        \\"type\\": \\"SYSTEM\\",\\n        \\"experimentValue\\": \\"空\\",\\n        \\"hasConfig\\": false,\\n        \\"category\\": \\"2\\",\\n        \\"name\\": \\"test\\"\\n      }\\n    ],\\n    \\"buckets\\": [\\n      \\"[\\\\\\"1\\\\\\",\\\\\\"2\\\\\\",\\\\\\"3\\\\\\"]\\"\\n    ],\\n    \\"experimentId\\": \\"12345\\"\\n  },\\n  \\"requestId\\": \\"E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'DescribeExperiment',
      'summary' => '查看一个实验详情。',
    ),
    'DescribeExperimentEnv' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiment-env',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18680',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'bucketCount' => 
                  array (
                    'description' => '分桶数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'divideType' => 
                  array (
                    'description' => '分桶方式UID/IMEI。',
                    'type' => 'string',
                    'example' => 'UID',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"bucketCount\\": 10,\\n    \\"divideType\\": \\"UID\\"\\n  },\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取实验环境',
      'summary' => '查看实验场景信息。',
    ),
    'DescribeExperimentEnvProgress' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiment-progress',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18681',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'status' => 
                  array (
                    'description' => '开通状态。

取值：

- **NotOpen**：未开通。

- **Processing**：开通中。

- **Running**：运行中。',
                    'type' => 'string',
                    'example' => 'Processing',
                  ),
                  'progress' => 
                  array (
                    'description' => '执行进度，范围为0-100，100为执行结束。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '80',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"status\\": \\"Processing\\",\\n    \\"progress\\": 80\\n  },\\n  \\"requestId\\": \\"E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B\\"\\n}","type":"json"}]',
      'title' => '获取实验环境进度',
      'summary' => '查看实验场景开通状态。',
    ),
    'ListExperiments' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiments',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18702',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'base' => 
                    array (
                      'description' => '是否为默认实验。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'onlineTime' => 
                    array (
                      'description' => '实验上线时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T06:47:30.000Z',
                    ),
                    'offlineTime' => 
                    array (
                      'description' => '实验下线时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T06:47:30.000Z',
                    ),
                    'description' => 
                    array (
                      'description' => '实验备注。',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'status' => 
                    array (
                      'description' => '实验状态。

取值：

- **Init**：未上线。

- **Online**：上线。

- **Finish**：推全。

- **Offline**：下线。',
                      'type' => 'string',
                      'example' => 'init',
                    ),
                    'name' => 
                    array (
                      'description' => '实验名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'buckets' => 
                    array (
                      'description' => '分桶列表，上线实验时该字段才生效。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '分桶信息。',
                        'type' => 'string',
                        'example' => '[1,2,3]',
                      ),
                    ),
                    'experimentId' => 
                    array (
                      'description' => '实验ID。',
                      'type' => 'string',
                      'example' => '123',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"base\\": true,\\n      \\"onlineTime\\": \\"2020-12-07T06:47:30.000Z\\",\\n      \\"offlineTime\\": \\"2020-12-07T06:47:30.000Z\\",\\n      \\"description\\": \\"xxx\\",\\n      \\"status\\": \\"init\\",\\n      \\"name\\": \\"test\\",\\n      \\"buckets\\": [\\n        \\"[1,2,3]\\"\\n      ],\\n      \\"experimentId\\": \\"123\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B\\"\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <experimentId>12345</experimentId>\\n    <name>实验1</name>\\n    <description>demo1</description>\\n    <buckets>1</buckets>\\n    <buckets>2</buckets>\\n    <buckets>3</buckets>\\n    <status>init</status>\\n    <base>true</base>\\n    <onlineTime>2020-11-11t09:47:43.000z</onlineTime>\\n    <offlineTime/>\\n</result>\\n<requestId>e3d6fe3b-b7c2-43da-9a13-5ea837aced9b</requestId>","errorExample":""}]',
      'title' => 'ListExperiments',
      'summary' => '列出实验清单，说明：只展示实验基本信息，不展示算法配置，暂不提供分页功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CloneExperiment' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiments/{experimentId}/actions/clone',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '18664',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sceneId',
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否完成克隆。

取值：

- **true**：校验实验信息。

- **false**：默认false,创建实验。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'base' => 
                  array (
                    'description' => '是否为默认实验。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'onlineTime' => 
                  array (
                    'description' => '实验线上时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'offlineTime' => 
                  array (
                    'description' => '实验下线时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'description' => 
                  array (
                    'description' => '实验备注。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'status' => 
                  array (
                    'description' => '实验状态。

取值：

- **Init**：未上线。

- **Online**：上线。

- **Finish**：推全。

- **Offline**：下线。',
                    'type' => 'string',
                    'example' => 'Init',
                  ),
                  'name' => 
                  array (
                    'description' => '实验名称。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'algorithms' => 
                  array (
                    'description' => '实验参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实验参数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '算法key。

取值：

- **I2I**：I2I召回链路。

- **u2X2I**：U2X2I召回链路。

- **hot**：热门商品召回链路。

- **new**：新品召回链路。

- **embedding**：向量召回链路。

- **mtorder**：召回链路优先级。

- **rankservice**：排序服务。',
                          'type' => 'string',
                          'example' => 'I2I',
                        ),
                        'config' => 
                        array (
                          'description' => '子配置项列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '子配置项信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'key' => 
                              array (
                                'description' => '算法配置项key。',
                                'type' => 'string',
                                'example' => 'I2I-truncedquantity',
                              ),
                              'defaultValue' => 
                              array (
                                'description' => '算法配置项默认值。',
                                'type' => 'string',
                                'example' => '400',
                              ),
                              'experimentValue' => 
                              array (
                                'description' => '实验值。',
                                'type' => 'string',
                                'example' => 'swing;commoni2i;pcategory;scategory',
                              ),
                              'name' => 
                              array (
                                'description' => '子配置名称。',
                                'type' => 'string',
                                'example' => 'I2I算法',
                              ),
                            ),
                          ),
                        ),
                        'defaultValue' => 
                        array (
                          'description' => '默认召回数量。',
                          'type' => 'string',
                          'example' => 'i2i;u2x2i;new;hot;embedding;embedding',
                        ),
                        'type' => 
                        array (
                          'description' => '算法类别。

取值：

- **SYSTEM**：系统默认类型。

- **CUSTOM**：用户自定义类型。',
                          'type' => 'string',
                          'example' => 'SYSTEM',
                        ),
                        'experimentValue' => 
                        array (
                          'description' => '实验值。',
                          'type' => 'string',
                          'example' => '300',
                        ),
                        'hasConfig' => 
                        array (
                          'description' => '是否有子配置项。

取值：

- **true**：是。

- **false**：否。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'category' => 
                        array (
                          'description' => '算法类目。

取值：

- **RECALL**：召回。

- **RANK**：排序。',
                          'type' => 'string',
                          'example' => 'RECALL',
                        ),
                        'name' => 
                        array (
                          'description' => '实验名称。',
                          'type' => 'string',
                          'example' => 'name',
                        ),
                      ),
                    ),
                  ),
                  'buckets' => 
                  array (
                    'description' => '分桶列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分桶。',
                      'type' => 'string',
                      'example' => '["1","2","3"]',
                    ),
                  ),
                  'experimentId' => 
                  array (
                    'description' => '实验ID。',
                    'type' => 'string',
                    'example' => '12345',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"base\\": true,\\n    \\"onlineTime\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"offlineTime\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"description\\": \\"xxx\\",\\n    \\"status\\": \\"Init\\",\\n    \\"name\\": \\"xxx\\",\\n    \\"algorithms\\": [\\n      {\\n        \\"key\\": \\"I2I\\",\\n        \\"config\\": [\\n          {\\n            \\"key\\": \\"I2I-truncedquantity\\",\\n            \\"defaultValue\\": \\"400\\",\\n            \\"experimentValue\\": \\"swing;commoni2i;pcategory;scategory\\",\\n            \\"name\\": \\"I2I算法\\"\\n          }\\n        ],\\n        \\"defaultValue\\": \\"i2i;u2x2i;new;hot;embedding;embedding\\",\\n        \\"type\\": \\"SYSTEM\\",\\n        \\"experimentValue\\": \\"300\\",\\n        \\"hasConfig\\": true,\\n        \\"category\\": \\"RECALL\\",\\n        \\"name\\": \\"name\\"\\n      }\\n    ],\\n    \\"buckets\\": [\\n      \\"[\\\\\\"1\\\\\\",\\\\\\"2\\\\\\",\\\\\\"3\\\\\\"]\\"\\n    ],\\n    \\"experimentId\\": \\"12345\\"\\n  },\\n  \\"requestId\\": \\"E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B</RequestId>","errorExample":""}]',
      'title' => '克隆实验',
      'summary' => '克隆实验。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFlowControlTaskReports' => 
    array (
      'summary' => '流量调控任务曝光分析。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}/flowTaskReports',
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
        'abilityTreeCode' => '155143',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1666697299358',
          ),
        ),
        2 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 's时间戳（格式：yyyymmdd），如果
不传，默认查询任务开始到t-1天统计数据与指标分析数据。',
            'type' => 'string',
            'required' => false,
            'example' => '1666195200',
          ),
        ),
        3 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 's时间戳（格式：yyyymmdd），最大值为t-1。',
            'type' => 'string',
            'required' => false,
            'example' => '1668268800',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16B78383-2803-4964-9605-37B30C073B0E',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'total' => 
                  array (
                    'description' => '指标统计数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'accTaskCtr' => 
                      array (
                        'description' => 'Ctr指标。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.1',
                      ),
                      'accTaskPv' => 
                      array (
                        'description' => 'Pv指标。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000',
                      ),
                      'accTotalCtr' => 
                      array (
                        'description' => '场景Ctr指标。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.2',
                      ),
                      'InvalidPercent' => 
                      array (
                        'description' => '失效物品占比指标。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.3',
                      ),
                    ),
                  ),
                  'metrics' => 
                  array (
                    'description' => '指标列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '指标详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'type' => 
                        array (
                          'description' => '指标类型。',
                          'type' => 'string',
                          'example' => 'taskPv',
                        ),
                        'details' => 
                        array (
                          'description' => '数据列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '指标。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'val' => 
                              array (
                                'description' => '指标值。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                              'endTime' => 
                              array (
                                'description' => '指标结束时间秒级时间戳。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1664035200',
                              ),
                              'startTime' => 
                              array (
                                'description' => '指标开始时间秒级时间戳。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1664000452',
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
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"16B78383-2803-4964-9605-37B30C073B0E\\",\\n  \\"result\\": {\\n    \\"total\\": {\\n      \\"accTaskCtr\\": 0.1,\\n      \\"accTaskPv\\": 1000,\\n      \\"accTotalCtr\\": 0.2,\\n      \\"InvalidPercent\\": 0.3\\n    },\\n    \\"metrics\\": [\\n      {\\n        \\"type\\": \\"taskPv\\",\\n        \\"details\\": [\\n          {\\n            \\"val\\": 0,\\n            \\"endTime\\": 1664035200,\\n            \\"startTime\\": 1664000452\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowControlTaskReportsResponse>\\n    <requestId>16B78383-2803-4964-9605-37B30C073B0E</requestId>\\n    <result>\\n        <total>\\n            <accTaskPv>1000</accTaskPv>\\n            <accPvPercent>0.2</accPvPercent>\\n            <accTaskCtr>0.1</accTaskCtr>\\n            <accTotalCtr>0.2</accTotalCtr>\\n            <invalidPercent>0.2</invalidPercent>\\n        </total>\\n        <metrics>\\n            <type>taskPv</type>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588003200</startTime>\\n                <endTime>1588006800</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588089600</startTime>\\n                <endTime>1588093200</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n        </metrics>\\n        <metrics>\\n            <type>totalPv</type>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588003200</startTime>\\n                <endTime>1588006800</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588089600</startTime>\\n                <endTime>1588093200</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n        </metrics>\\n        <metrics>\\n            <type>pvPercent</type>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588003200</startTime>\\n                <endTime>1588006800</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588089600</startTime>\\n                <endTime>1588093200</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n        </metrics>\\n        <metrics>\\n            <type>taskCtr</type>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588003200</startTime>\\n                <endTime>1588006800</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588089600</startTime>\\n                <endTime>1588093200</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n        </metrics>\\n        <metrics>\\n            <type>totalCtr</type>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588003200</startTime>\\n                <endTime>1588006800</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588089600</startTime>\\n                <endTime>1588093200</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n        </metrics>\\n        <metrics>\\n            <type>totalCount</type>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588003200</startTime>\\n                <endTime>1588006800</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588089600</startTime>\\n                <endTime>1588093200</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n        </metrics>\\n        <metrics>\\n            <type>invalidCount</type>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588003200</startTime>\\n                <endTime>1588006800</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n            <details>\\n                <val>0</val>\\n                <startTime>1588089600</startTime>\\n                <endTime>1588093200</endTime>\\n                <count>0</count>\\n                <totalCount>0</totalCount>\\n            </details>\\n        </metrics>\\n    </result>\\n</ListFlowControlTaskReportsResponse>","errorExample":""}]',
      'title' => '流量调控任务曝光分析',
    ),
    'ListFlowControlTaskInvalidItems' => 
    array (
      'summary' => '查询当前流量调控任务中失效物品清单，返回物品ID(ItemId)与物品类型(ItemType)。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}/invalidItems',
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
        'operationType' => 'list',
        'abilityTreeCode' => '156202',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1661506482',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ItemId与ItemType组合JSON。',
              'type' => 'string',
              'required' => false,
              'example' => '[     {         "itemId": "10",         "itemType": "itemType"     },     {         "itemId": "10",         "itemType": "itemType"     } ]',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'invalidItems' => 
                    array (
                      'description' => '失效物品ItemId与ItemType清单。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '失效物品。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'itemId' => 
                          array (
                            'description' => '物品ID。',
                            'type' => 'string',
                            'example' => '287723',
                          ),
                          'itemType' => 
                          array (
                            'description' => '物品Type。',
                            'type' => 'string',
                            'example' => 'video',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"result\\": [\\n    {\\n      \\"invalidItems\\": [\\n        {\\n          \\"itemId\\": \\"287723\\",\\n          \\"itemType\\": \\"video\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListFlowControlTaskInvalidItemsResponse>\\n    <requestId>16B78383-2803-4964-9605-37B30C073B0E</requestId>\\n    <result>\\n        <invalidItems>\\n            <itemId>itemId</itemId>\\n            <itemType>111111</itemType>\\n        </invalidItems>\\n    </result>\\n</ListFlowControlTaskInvalidItemsResponse>","errorExample":""}]',
      'title' => '查询失效物品清单',
    ),
    'ListFlowControlTaskItems' => 
    array (
      'summary' => '流量调控预览。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}/actions/items',
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
        'abilityTreeCode' => '155140',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1667369058068',
          ),
        ),
        2 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页，页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置的每页行数。最大值为500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'totalCount' => 
                  array (
                    'description' => '物品总条数。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'validCount' => 
                  array (
                    'description' => '有效物品个数。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'detail' => 
                  array (
                    'description' => '物品列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '物品信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'author' => 
                        array (
                          'description' => '作者。',
                          'type' => 'string',
                          'example' => 'zhangsan',
                        ),
                        'duration' => 
                        array (
                          'description' => '持续时间。',
                          'type' => 'string',
                          'example' => '18',
                        ),
                        'itemId' => 
                        array (
                          'description' => '物品ID。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'itemType' => 
                        array (
                          'description' => '物品Type。',
                          'type' => 'string',
                          'example' => 'video',
                        ),
                        'expireTime' => 
                        array (
                          'description' => '过期时间。',
                          'type' => 'string',
                          'example' => '1612687809',
                        ),
                        'categoryPath' => 
                        array (
                          'description' => '类目路径。',
                          'type' => 'string',
                          'example' => '12_34',
                        ),
                        'pubTime' => 
                        array (
                          'description' => '发布时间。',
                          'type' => 'string',
                          'example' => '1661931487',
                        ),
                        'lastModifyTime' => 
                        array (
                          'description' => '最后修改时间。',
                          'type' => 'string',
                          'example' => '1662346558',
                        ),
                        'channel' => 
                        array (
                          'description' => '频道。',
                          'type' => 'string',
                          'example' => 'news',
                        ),
                        'weight' => 
                        array (
                          'description' => '权重。',
                          'type' => 'string',
                          'example' => '10',
                        ),
                        'title' => 
                        array (
                          'description' => '标题。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'status' => 
                        array (
                          'description' => '物品状态。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"result\\": {\\n    \\"totalCount\\": \\"1\\",\\n    \\"validCount\\": \\"1\\",\\n    \\"detail\\": [\\n      {\\n        \\"author\\": \\"zhangsan\\",\\n        \\"duration\\": \\"18\\",\\n        \\"itemId\\": \\"123\\",\\n        \\"itemType\\": \\"video\\",\\n        \\"expireTime\\": \\"1612687809\\",\\n        \\"categoryPath\\": \\"12_34\\",\\n        \\"pubTime\\": \\"1661931487\\",\\n        \\"lastModifyTime\\": \\"1662346558\\",\\n        \\"channel\\": \\"news\\",\\n        \\"weight\\": \\"10\\",\\n        \\"title\\": \\"test\\",\\n        \\"status\\": \\"1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowControlTaskItemsResponse>\\n    <requestId>16B78383-2803-4964-9605-37B30C073B0E</requestId>\\n    <result>\\n        <detail>\\n            <duration>-1</duration>\\n            <itemId>item1076848</itemId>\\n            <itemType>video</itemType>\\n            <expireTime>4102416000</expireTime>\\n            <categoryPath>none</categoryPath>\\n            <author>none</author>\\n            <pubTime>1661931487</pubTime>\\n            <lastModifyTime>1662025185</lastModifyTime>\\n            <channel>none</channel>\\n            <weight>1</weight>\\n            <title>none</title>\\n            <status>1</status>\\n        </detail>\\n        <detail>\\n            <duration>-1</duration>\\n            <itemId>item8281501</itemId>\\n            <itemType>image</itemType>\\n            <expireTime>4102416000</expireTime>\\n            <categoryPath>none</categoryPath>\\n            <author>none</author>\\n            <pubTime>1661931487</pubTime>\\n            <lastModifyTime>1662346558</lastModifyTime>\\n            <channel>none</channel>\\n            <weight>1</weight>\\n            <title>none</title>\\n            <status>1</status>\\n        </detail>\\n        <totalCount>19835</totalCount>\\n        <validCount>19835</validCount>\\n    </result>\\n</ListFlowControlTaskItemsResponse>","errorExample":""}]',
      'title' => '流量调控预览',
    ),
    'CreateFlowControlTask' => 
    array (
      'summary' => '创建流控任务。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks',
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
        'abilityTreeCode' => '154018',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求。

取值：

- **true**：只检查参数正确。

- **false**：检查参数后执行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'taskId' => 
                  array (
                    'description' => '流量调控任务ID。',
                    'type' => 'string',
                    'example' => '1667297014460',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '实例最后更新时间，单位为UTC时间。
',
                    'type' => 'string',
                    'example' => '2018-12-06T11:17:49.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '任务状态。

取值：

- **DRAFT**：草稿。

- **READY**：待生效。

- **RUNNING**：运行中。

- **ENDED**：结束。',
                    'type' => 'string',
                    'example' => 'DRAFT',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2020-04-27T06:38:28.000Z',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EDF43C1F-99E4-431F-A7C0-8B260A5A792E',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"taskId\\": \\"1667297014460\\",\\n    \\"gmtModified\\": \\"2018-12-06T11:17:49.000Z\\",\\n    \\"status\\": \\"DRAFT\\",\\n    \\"gmtCreate\\": \\"2020-04-27T06:38:28.000Z\\"\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"EDF43C1F-99E4-431F-A7C0-8B260A5A792E\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowControlTaskResponse>\\n    <taskName>test</taskName>\\n    <description>这是一个测试任务</description>\\n    <startTime>1621267200</startTime>\\n    <endTime>1621267200</endTime>\\n    <selectionParams>\\n        <selectType/>\\n        <selectionOperation/>\\n        <selectValue/>\\n    </selectionParams>\\n    <sceneIds>1,2,3</sceneIds>\\n    <target>\\n        <type>EXPOSE_PERCENT</type>\\n        <value>50</value>\\n    </target>\\n    <metaType>FlowControlTask</metaType>\\n</CreateFlowControlTaskResponse>","errorExample":""}]',
      'title' => '创建流量调控任务',
    ),
    'GetFlowControlTask' => 
    array (
      'summary' => '获取流量调控任务详情。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}',
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
        'abilityTreeCode' => '155268',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1667979619806',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间的UTC时间。',
                      'type' => 'string',
                      'example' => '2018-12-07T02:24:26.000Z',
                    ),
                    'gmtModified' => 
                    array (
                      'description' => '最后修改数据源的UTC时间。',
                      'type' => 'string',
                      'example' => '2020-04-23T06:08:48.000Z',
                    ),
                    'meta' => 
                    array (
                      'description' => '流量调控Meta。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'description' => 
                        array (
                          'description' => '流量调控描述信息。',
                          'type' => 'string',
                          'example' => '用于首页推荐物品调控。',
                        ),
                        'endTime' => 
                        array (
                          'description' => '结束时间秒级时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1656518399',
                        ),
                        'metaType' => 
                        array (
                          'description' => '流量调控Meta类型，固定值FlowControlTask。',
                          'type' => 'string',
                          'example' => 'FlowControlTask',
                        ),
                        'sceneIds' => 
                        array (
                          'description' => '场景ID，支持多个，英文,分割即可。',
                          'type' => 'string',
                          'example' => '1,2,3',
                        ),
                        'selectionParams' => 
                        array (
                          'description' => '选品规则参数列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '选品规则参数。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'selectType' => 
                              array (
                                'description' => '选品规则过滤条件类型。',
                                'type' => 'string',
                                'example' => 'QUERY_PUB_TIME',
                              ),
                              'selectValue' => 
                              array (
                                'description' => '选品规则过滤条件具体数值。',
                                'type' => 'string',
                                'example' => '10000',
                              ),
                              'selectionOperation' => 
                              array (
                                'description' => '选品规则过滤条件操作。',
                                'type' => 'string',
                                'example' => 'OPERATOR_HIGHER',
                              ),
                            ),
                          ),
                        ),
                        'startTime' => 
                        array (
                          'description' => '开始时间（秒级时间戳）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1640739600',
                        ),
                        'target' => 
                        array (
                          'description' => '曝光配置。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'type' => 
                            array (
                              'description' => '曝光类型。

取值：

- **EXPOSE_PERCENT**：每日曝光百分比。

- **EXPOSE_COUNT**：曝光总量。',
                              'type' => 'string',
                              'example' => 'EXPOSE_PERCENT',
                            ),
                            'value' => 
                            array (
                              'description' => '曝光值。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '20',
                            ),
                          ),
                        ),
                        'taskName' => 
                        array (
                          'description' => '流量调控任务名称。',
                          'type' => 'string',
                          'example' => '曝光任务',
                        ),
                      ),
                    ),
                    'status' => 
                    array (
                      'description' => '任务状态。

取值：

- **DRAFT**：草稿。

- **READY**：待生效。

- **RUNNING**：运行中。

- **ENDED**：结束。',
                      'type' => 'string',
                      'example' => 'DRAFT',
                    ),
                    'taskId' => 
                    array (
                      'description' => '流量调控任务ID。',
                      'type' => 'string',
                      'example' => '1666854602398',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": [\\n    {\\n      \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"gmtModified\\": \\"2020-04-23T06:08:48.000Z\\",\\n      \\"meta\\": {\\n        \\"description\\": \\"用于首页推荐物品调控。\\",\\n        \\"endTime\\": 1656518399,\\n        \\"metaType\\": \\"FlowControlTask\\",\\n        \\"sceneIds\\": \\"1,2,3\\",\\n        \\"selectionParams\\": [\\n          {\\n            \\"selectType\\": \\"QUERY_PUB_TIME\\",\\n            \\"selectValue\\": \\"10000\\",\\n            \\"selectionOperation\\": \\"OPERATOR_HIGHER\\"\\n          }\\n        ],\\n        \\"startTime\\": 1640739600,\\n        \\"target\\": {\\n          \\"type\\": \\"EXPOSE_PERCENT\\",\\n          \\"value\\": 20\\n        },\\n        \\"taskName\\": \\"曝光任务\\"\\n      },\\n      \\"status\\": \\"DRAFT\\",\\n      \\"taskId\\": \\"1666854602398\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取流量调控任务详情',
    ),
    'DeleteFlowControlTask' => 
    array (
      'summary' => '删除流量调控任务。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}',
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
        'abilityTreeCode' => '154373',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1661506482',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E427B10-30FC-1873-922F-FC176D3398D4',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"6E427B10-30FC-1873-922F-FC176D3398D4\\",\\n  \\"result\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowControlTaskResponse>\\n    <requestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</requestId>\\n    <result>true</result>\\n</DeleteFlowControlTaskResponse>","errorExample":""}]',
      'title' => '删除流量调控任务',
    ),
    'ListFlowControlTask' => 
    array (
      'summary' => '查询流控任务列表。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks',
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
        'abilityTreeCode' => '155267',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1661506482',
          ),
        ),
        2 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态。

取值：

- **DRAFT**：草稿。

- **READY**：待生效。

- **RUNNING**：运行中。

- **ENDED**：结束。',
            'type' => 'string',
            'required' => false,
            'example' => 'DRAFT',
          ),
        ),
        3 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定每页展示条数，默认为10，限制:[1-50]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E427B10-30FC-1873-922F-FC176D3398D4',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间，单位为UTC时间。',
                      'type' => 'string',
                      'example' => '2022-08-06T06:14:01.000Z',
                    ),
                    'gmtModified' => 
                    array (
                      'description' => '最后修改时间，单位为UTC时间。',
                      'type' => 'string',
                      'example' => '2022-08-06T06:14:01.000Z',
                    ),
                    'meta' => 
                    array (
                      'description' => '流量调控Meta。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'description' => 
                        array (
                          'description' => '流量调控描述信息。',
                          'type' => 'string',
                          'example' => '这是一个测试任务',
                        ),
                        'endTime' => 
                        array (
                          'description' => '结束时间秒级时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1621267200',
                        ),
                        'metaType' => 
                        array (
                          'description' => '流量调控Meta类型，固定值FlowControlTask。',
                          'type' => 'string',
                          'example' => 'metaType',
                        ),
                        'sceneIds' => 
                        array (
                          'description' => '场景ID，支持多个，英文,分割即可。',
                          'type' => 'string',
                          'example' => '1,2,3',
                        ),
                        'selectionParams' => 
                        array (
                          'description' => '选品规则参数列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '选品规则参数。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'selectType' => 
                              array (
                                'description' => '选品规则过滤条件类型。',
                                'type' => 'string',
                                'example' => 'selectType',
                              ),
                              'selectValue' => 
                              array (
                                'description' => '选品规则过滤条件具体数值。',
                                'type' => 'string',
                                'example' => 'selectValue',
                              ),
                              'selectionOperation' => 
                              array (
                                'description' => '选品规则过滤条件操作。',
                                'type' => 'string',
                                'example' => 'selectionOperation',
                              ),
                            ),
                          ),
                        ),
                        'startTime' => 
                        array (
                          'description' => '开始时间秒级时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1621267200',
                        ),
                        'target' => 
                        array (
                          'description' => '曝光配置。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'type' => 
                            array (
                              'description' => '曝光类型。

取值：

- **EXPOSE_PERCENT**：每日曝光百分比。

- **EXPOSE_COUNT**：曝光总量。',
                              'type' => 'string',
                              'example' => 'EXPOSE_PERCENT',
                            ),
                            'value' => 
                            array (
                              'description' => '曝光值。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '50',
                            ),
                          ),
                        ),
                        'taskName' => 
                        array (
                          'description' => '流量调控任务名称。',
                          'type' => 'string',
                          'example' => 'testtaskname',
                        ),
                      ),
                    ),
                    'status' => 
                    array (
                      'description' => '任务状态。

取值：

- **DRAFT**：草稿。

- **READY**：待生效。

- **RUNNING**：运行中。

- **ENDED**：结束。',
                      'type' => 'string',
                      'example' => 'DRAFT',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '流量调控任务ID。',
                      'type' => 'string',
                      'example' => '1661506482',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"6E427B10-30FC-1873-922F-FC176D3398D4\\",\\n  \\"result\\": [\\n    {\\n      \\"gmtCreate\\": \\"2022-08-06T06:14:01.000Z\\",\\n      \\"gmtModified\\": \\"2022-08-06T06:14:01.000Z\\",\\n      \\"meta\\": {\\n        \\"description\\": \\"这是一个测试任务\\",\\n        \\"endTime\\": 1621267200,\\n        \\"metaType\\": \\"metaType\\",\\n        \\"sceneIds\\": \\"1,2,3\\",\\n        \\"selectionParams\\": [\\n          {\\n            \\"selectType\\": \\"selectType\\",\\n            \\"selectValue\\": \\"selectValue\\",\\n            \\"selectionOperation\\": \\"selectionOperation\\"\\n          }\\n        ],\\n        \\"startTime\\": 1621267200,\\n        \\"target\\": {\\n          \\"type\\": \\"EXPOSE_PERCENT\\",\\n          \\"value\\": 50\\n        },\\n        \\"taskName\\": \\"testtaskname\\"\\n      },\\n      \\"status\\": \\"DRAFT\\",\\n      \\"TaskId\\": \\"1661506482\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListFlowControlTaskResponse>\\n    <requestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</requestId>\\n    <result>\\n        <taskMeta>\\n            <taskName>test</taskName>\\n            <description>这是一个测试任务</description>\\n            <startTime>1621267200</startTime>\\n            <endTime>1621267200</endTime>\\n            <selectionParams>\\n                <selectType/>\\n                <selectionOperation/>\\n                <selectValue/>\\n            </selectionParams>\\n            <sceneIds>1,2,3</sceneIds>\\n            <target>\\n                <type>EXPOSE_PERCENT</type>\\n                <value>50</value>\\n            </target>\\n        </taskMeta>\\n        <taskId>1661506482</taskId>\\n        <status>DRAFT</status>\\n        <gmtCreate>2022-08-06T06:14:01.000Z</gmtCreate>\\n        <gmtModified>2022-08-06T11:17:49.000Z</gmtModified>\\n    </result>\\n    <headers>\\n        <X-Total-Count>1</X-Total-Count>\\n    </headers>\\n</ListFlowControlTaskResponse>","errorExample":""}]',
      'title' => '获取流量调控任务列表，按照创建时间倒序返回',
    ),
    'ListFlowControlTaskItemReports' => 
    array (
      'summary' => '流量调控曝光排名物品/失效物品查询。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}/itemReports',
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
        'abilityTreeCode' => '155145',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1666854493104',
          ),
        ),
        2 => 
        array (
          'name' => 'selectTimeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询时间段，如果selectType=invalidItem，则只支持yesterDay。

取值：

- **yesterDay**：昨天。

- **lastSevenDays**：最近7天。

- **lastFifteenDays**：最近15天。',
            'type' => 'string',
            'required' => false,
            'example' => 'yesterDay',
          ),
        ),
        3 => 
        array (
          'name' => 'selectType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据类型。

取值：

- **topExposeItem**：曝光排名物品。

- **invalidItem**：失效物品。',
            'type' => 'string',
            'required' => false,
            'example' => 'invalidItem',
          ),
        ),
        4 => 
        array (
          'name' => 'count',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当selectType="topItem"，count 代表查询TOP前xx个物品，默认10
当selectType="invalidItem"，count 代表查询失效物品个数，默认10个。',
            'type' => 'string',
            'required' => false,
            'example' => '5',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D486768B-8BF8-4D80-B491-43DC3D0AF8AB',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'detail' => 
                  array (
                    'description' => '数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'taskId' => 
                        array (
                          'description' => '流量调控任务ID。',
                          'type' => 'string',
                          'example' => '1666669577221',
                        ),
                        'itemId' => 
                        array (
                          'description' => '物品ID。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'itemType' => 
                        array (
                          'description' => '物品Type。',
                          'type' => 'string',
                          'example' => 'video',
                        ),
                        'taskRank' => 
                        array (
                          'description' => '当天曝光量排名。',
                          'type' => 'string',
                          'example' => '12',
                        ),
                        'itemPv' => 
                        array (
                          'description' => '物品当天曝光量。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'taskPv' => 
                        array (
                          'description' => '任务当天曝光量。',
                          'type' => 'string',
                          'example' => '50',
                        ),
                        'pvPercent' => 
                        array (
                          'description' => '物品当天曝光占比。',
                          'type' => 'string',
                          'example' => '10.12',
                        ),
                        'itemClick' => 
                        array (
                          'description' => '物品当天点击量。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'taskClick' => 
                        array (
                          'description' => '任务当天点击量。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'clickPercent' => 
                        array (
                          'description' => '物品当天点击占比。',
                          'type' => 'string',
                          'example' => '1.23',
                        ),
                        'itemCtr' => 
                        array (
                          'description' => '物品当天点击率。',
                          'type' => 'string',
                          'example' => '2.34',
                        ),
                        'taskCtr' => 
                        array (
                          'description' => '任务当天点击率。',
                          'type' => 'string',
                          'example' => '1.23',
                        ),
                        'accTaskRank' => 
                        array (
                          'description' => '累计曝光量排名。',
                          'type' => 'string',
                          'example' => '10',
                        ),
                        'accItemPv' => 
                        array (
                          'description' => '物品累计曝光量。',
                          'type' => 'string',
                          'example' => '500',
                        ),
                        'accTaskPv' => 
                        array (
                          'description' => '任务累计曝光量。',
                          'type' => 'string',
                          'example' => '200',
                        ),
                        'accPvPercent' => 
                        array (
                          'description' => '物品累计曝光占比。',
                          'type' => 'string',
                          'example' => '20.12',
                        ),
                        'accItemClick' => 
                        array (
                          'description' => '物品累计点击量。',
                          'type' => 'string',
                          'example' => '1000',
                        ),
                        'accTaskClick' => 
                        array (
                          'description' => '任务累计点击量。',
                          'type' => 'string',
                          'example' => '600',
                        ),
                        'accClickPercent' => 
                        array (
                          'description' => '物品累计点击占比。',
                          'type' => 'string',
                          'example' => '3.24',
                        ),
                        'accItemCtr' => 
                        array (
                          'description' => '物品累计点击率。',
                          'type' => 'string',
                          'example' => '4.56',
                        ),
                        'accTaskCtr' => 
                        array (
                          'description' => '任务累计点击率。',
                          'type' => 'string',
                          'example' => '3.22',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D486768B-8BF8-4D80-B491-43DC3D0AF8AB\\",\\n  \\"result\\": {\\n    \\"detail\\": [\\n      {\\n        \\"taskId\\": \\"1666669577221\\",\\n        \\"itemId\\": \\"123\\",\\n        \\"itemType\\": \\"video\\",\\n        \\"taskRank\\": \\"12\\",\\n        \\"itemPv\\": \\"100\\",\\n        \\"taskPv\\": \\"50\\",\\n        \\"pvPercent\\": \\"10.12\\",\\n        \\"itemClick\\": \\"100\\",\\n        \\"taskClick\\": \\"100\\",\\n        \\"clickPercent\\": \\"1.23\\",\\n        \\"itemCtr\\": \\"2.34\\",\\n        \\"taskCtr\\": \\"1.23\\",\\n        \\"accTaskRank\\": \\"10\\",\\n        \\"accItemPv\\": \\"500\\",\\n        \\"accTaskPv\\": \\"200\\",\\n        \\"accPvPercent\\": \\"20.12\\",\\n        \\"accItemClick\\": \\"1000\\",\\n        \\"accTaskClick\\": \\"600\\",\\n        \\"accClickPercent\\": \\"3.24\\",\\n        \\"accItemCtr\\": \\"4.56\\",\\n        \\"accTaskCtr\\": \\"3.22\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowControlTaskItemReportsResponse>\\n    <requestId>16B78383-2803-4964-9605-37B30C073B0E</requestId>\\n    <result>\\n        <detail>\\n            <taskId>111111</taskId>\\n            <itemId>itemId</itemId>\\n            <itemType>itemType</itemType>\\n            <title>title</title>\\n            <categoryPath>人文关怀</categoryPath>\\n            <author>张三</author>\\n            <channel>渠道</channel>\\n            <brandId>121</brandId>\\n            <shopId>111</shopId>\\n            <taskRank>12</taskRank>\\n            <itemPv>100</itemPv>\\n            <taskPv>50</taskPv>\\n            <pvPercent>10.12</pvPercent>\\n            <itemClick>100</itemClick>\\n            <taskClick>100</taskClick>\\n            <clickPercent>1.23</clickPercent>\\n            <itemCtr>2.34</itemCtr>\\n            <taskCtr>1.56</taskCtr>\\n            <accTaskRank>10</accTaskRank>\\n            <accItemPv>500</accItemPv>\\n            <accTaskPv>200</accTaskPv>\\n            <accPvPercent>20.12</accPvPercent>\\n            <accItemClick>500</accItemClick>\\n            <accTaskClick>300</accTaskClick>\\n            <accClickPercent>3.24</accClickPercent>\\n            <accItemCtr>4.56</accItemCtr>\\n            <accTaskCtr>3.22</accTaskCtr>\\n        </detail>\\n        <detail>\\n            <taskId>111111</taskId>\\n            <itemId>itemId</itemId>\\n            <itemType>itemType</itemType>\\n            <taskRank>12</taskRank>\\n            <itemPv>100</itemPv>\\n            <taskPv>50</taskPv>\\n            <pvPercent>10.12</pvPercent>\\n            <itemClick>100</itemClick>\\n            <taskClick>100</taskClick>\\n            <clickPercent>1.23</clickPercent>\\n            <itemCtr>2.34</itemCtr>\\n            <taskCtr>1.56</taskCtr>\\n            <accTaskRank>10</accTaskRank>\\n            <accItemPv>500</accItemPv>\\n            <accTaskPv>200</accTaskPv>\\n            <accPvPercent>20.12</accPvPercent>\\n            <accItemClick>500</accItemClick>\\n            <accTaskClick>300</accTaskClick>\\n            <accClickPercent>3.24</accClickPercent>\\n            <accItemCtr>4.56</accItemCtr>\\n            <accTaskCtr>3.22</accTaskCtr>\\n        </detail>\\n    </result>\\n</ListFlowControlTaskItemReportsResponse>","errorExample":""}]',
      'title' => '流量调控曝光排名物品/失效物品查询',
    ),
    'ListFlowControlTaskReference' => 
    array (
      'summary' => '流量调控参考数据。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}/reference',
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
        'abilityTreeCode' => '155137',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1666670046687',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'last7PvPercent' => 
                  array (
                    'description' => '最近7天物品池平均曝光占比。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.1',
                  ),
                  'last7ScenePv' => 
                  array (
                    'description' => '最近7天场景平均曝光。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '10',
                  ),
                  'last7TaskPv' => 
                  array (
                    'description' => '最近7天物品池在选中场景平均曝光。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '10',
                  ),
                  'lastPvPercent' => 
                  array (
                    'description' => '昨天物品池曝光占比。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.1',
                  ),
                  'lastScenePv' => 
                  array (
                    'description' => '昨天场景总曝光。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'lastTaskPv' => 
                  array (
                    'description' => '昨天物品池在选中场景内曝光。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'referenceId' => 
                  array (
                    'description' => '预览ID。',
                    'type' => 'string',
                    'example' => '421351235918',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"last7PvPercent\\": 0.1,\\n    \\"last7ScenePv\\": 10,\\n    \\"last7TaskPv\\": 10,\\n    \\"lastPvPercent\\": 0.1,\\n    \\"lastScenePv\\": 10,\\n    \\"lastTaskPv\\": 10,\\n    \\"referenceId\\": \\"421351235918\\"\\n  },\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\"\\n}","errorExample":""},{"type":"xml","example":"<ListFlowControlTaskReferenceResponse>\\n    <requestId>16B78383-2803-4964-9605-37B30C073B0E</requestId>\\n    <result>\\n        <referenceId>421351235918</referenceId>\\n        <lastTaskPv>10</lastTaskPv>\\n        <lastScenePv>10</lastScenePv>\\n        <lastPvPercent>0.1</lastPvPercent>\\n        <last7TaskPv>10</last7TaskPv>\\n        <last7ScenePv>10</last7ScenePv>\\n        <last7PvPercent>0.1</last7PvPercent>\\n    </result>\\n</ListFlowControlTaskReferenceResponse>","errorExample":""}]',
      'title' => '流量调控参考数据',
    ),
    'ModifyFlowControlTask' => 
    array (
      'summary' => '流调任务修改接口。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}',
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
        'abilityTreeCode' => '154309',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1667297014460',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TaskName' => 
              array (
                'description' => '流量调控任务名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'testname',
              ),
              'description' => 
              array (
                'description' => '流量调控描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => '描述',
              ),
              'endTime' => 
              array (
                'description' => '结束时间秒级时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1639519200',
              ),
              'metaType' => 
              array (
                'description' => '流量调控Meta类型，固定值FlowControlTask。',
                'type' => 'string',
                'required' => false,
                'example' => 'FlowControlTask',
              ),
              'sceneIds' => 
              array (
                'description' => '场景ID，支持多个，英文,分割即可。',
                'type' => 'string',
                'required' => false,
                'example' => 'all,sy101',
              ),
              'selectionParams' => 
              array (
                'description' => '选品规则参数列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '选品规则参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'selectType' => 
                    array (
                      'description' => '选品规则过滤条件类型。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'invalidItem',
                    ),
                    'selectValue' => 
                    array (
                      'description' => '选品规则过滤条件具体数值。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '20',
                    ),
                    'selectionOperation' => 
                    array (
                      'description' => '选品规则过滤条件操作。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'OPERATOR_HIGHER',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'startTime' => 
              array (
                'description' => '开始时间（秒级时间戳）。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1638460800',
              ),
              'target' => 
              array (
                'description' => '物品曝光配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'type' => 
                  array (
                    'description' => '曝光类型。

取值：

- **EXPOSE_PERCENT**：每日曝光百分比。

- **EXPOSE_COUNT**：曝光总量。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'EXPOSE_PERCENT',
                  ),
                  'value' => 
                  array (
                    'description' => '曝光值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '50',
                  ),
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改数据源的UTC时间。',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'meta' => 
                  array (
                    'description' => '流量调控Meta。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'description' => 
                      array (
                        'description' => '流量调控描述信息。',
                        'type' => 'string',
                        'example' => 'tst',
                      ),
                      'endTime' => 
                      array (
                        'description' => '结束时间秒级时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1656518399',
                      ),
                      'metaType' => 
                      array (
                        'description' => '流量调控Meta类型，固定值FlowControlTask。',
                        'type' => 'string',
                        'example' => 'FlowControlTask',
                      ),
                      'sceneIds' => 
                      array (
                        'description' => '场景ID，支持多个，英文,分割即可。',
                        'type' => 'string',
                        'example' => '1,2,3',
                      ),
                      'selectionParams' => 
                      array (
                        'description' => '选品规则参数列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '选品规则参数。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'selectType' => 
                            array (
                              'description' => '选品规则过滤条件类型。',
                              'type' => 'string',
                              'example' => 'QUERY_PUB_TIME',
                            ),
                            'selectValue' => 
                            array (
                              'description' => '选品规则过滤条件具体数值。',
                              'type' => 'string',
                              'example' => '10000',
                            ),
                            'selectionOperation' => 
                            array (
                              'description' => '选品规则过滤条件操作。',
                              'type' => 'string',
                              'example' => 'OPERATOR_HIGHER',
                            ),
                          ),
                        ),
                      ),
                      'startTime' => 
                      array (
                        'description' => '开始时间（秒级时间戳）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1640739600',
                      ),
                      'target' => 
                      array (
                        'description' => '曝光配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'type' => 
                          array (
                            'description' => '曝光类型。

取值：

- **EXPOSE_PERCENT**：每日曝光百分比。

- **EXPOSE_COUNT**：曝光总量。',
                            'type' => 'string',
                            'example' => 'EXPOSE_PERCENT',
                          ),
                          'value' => 
                          array (
                            'description' => '曝光值。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '20',
                          ),
                        ),
                      ),
                      'taskName' => 
                      array (
                        'description' => '流量调侃任务名称。',
                        'type' => 'string',
                        'example' => '活动用户测试',
                      ),
                    ),
                  ),
                  'status' => 
                  array (
                    'description' => '任务状态。

取值：

- **DRAFT**：草稿。

- **READY**：待生效。

- **RUNNING**：运行中。

- **ENDED**：结束。',
                    'type' => 'string',
                    'example' => 'DRAFT',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '流量调侃任务ID。',
                    'type' => 'string',
                    'example' => '1661506482',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"result\\": {\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"gmtModified\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"meta\\": {\\n      \\"description\\": \\"tst\\",\\n      \\"endTime\\": 1656518399,\\n      \\"metaType\\": \\"FlowControlTask\\",\\n      \\"sceneIds\\": \\"1,2,3\\",\\n      \\"selectionParams\\": [\\n        {\\n          \\"selectType\\": \\"QUERY_PUB_TIME\\",\\n          \\"selectValue\\": \\"10000\\",\\n          \\"selectionOperation\\": \\"OPERATOR_HIGHER\\"\\n        }\\n      ],\\n      \\"startTime\\": 1640739600,\\n      \\"target\\": {\\n        \\"type\\": \\"EXPOSE_PERCENT\\",\\n        \\"value\\": 20\\n      },\\n      \\"taskName\\": \\"活动用户测试\\"\\n    },\\n    \\"status\\": \\"DRAFT\\",\\n    \\"TaskId\\": \\"1661506482\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ModifyFlowControlTaskResponse>\\n    <taskName>test</taskName>\\n    <description>这是一个测试任务</description>\\n    <startTime>1621267200</startTime>\\n    <endTime>1621267200</endTime>\\n    <selectionParams>\\n        <selectType/>\\n        <selectionOperation/>\\n        <selectValue/>\\n    </selectionParams>\\n    <sceneIds>1,2,3</sceneIds>\\n    <target>\\n        <type>EXPOSE_PERCENT</type>\\n        <value>50</value>\\n    </target>\\n    <metaType>FlowControlTask</metaType>\\n</ModifyFlowControlTaskResponse>","errorExample":""}]',
      'title' => '修改流量控制任务，目前只支持草稿态和发布失败状态的任务修改配置信息',
    ),
    'StopFlowControlTask' => 
    array (
      'summary' => '结束流量调控任务。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}/actions/stop',
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
        'abilityTreeCode' => '154378',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1666854602398',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopFlowControlTaskResponse>\\n    <requestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</requestId>\\n    <result>true</result>\\n</StopFlowControlTaskResponse>","errorExample":""}]',
      'title' => '结束流量调控任务',
    ),
    'PublishFlowControlTask' => 
    array (
      'summary' => '发布流量调控任务。',
      'path' => '/v2/openapi/instances/{instanceId}/flowControlTasks/{taskId}/actions/publish',
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
        'abilityTreeCode' => '154377',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '流量调控任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1666669577221',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": true\\n}","errorExample":""},{"type":"xml","example":"<PublishFlowControlTaskResponse>\\n    <requestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</requestId>\\n    <result>true</result>\\n</PublishFlowControlTaskResponse>","errorExample":""}]',
      'title' => '发布流量调控任务',
    ),
    'CreateFilteringAlgorithm' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '18665',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否预检参数。

取值：

- **true**：不会真实执行。

- **false**：会直接执行。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '召回表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'gmtModified' => 
                  array (
                    'description' => '最后更新时间，单位为UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '表示单签召回表的状态。 

取值：

- **Draft**：草稿。

- **Running**：运行中。

- **Offline**：已下线。

- **Deleted**：已删除。',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'algorithmId' => 
                  array (
                    'description' => '召回表ID。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'meta' => 
                  array (
                    'description' => 'Meta源数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'type' => 
                      array (
                        'description' => '数据源类型，当前只支持ODPS。',
                        'type' => 'string',
                        'example' => 'ODPS',
                      ),
                      'extInfo' => 
                      array (
                        'description' => '召回表类型包含内容。',
                        'type' => 'object',
                        'example' => '{}',
                      ),
                      'category' => 
                      array (
                        'description' => '数据源召回类目。',
                        'type' => 'string',
                        'example' => '1_2',
                      ),
                      'threshold' => 
                      array (
                        'description' => 'Table的阈值信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'sourceDataSizeThreshold' => 
                          array (
                            'description' => '源数据大小波动阈值(0-100)。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'sourceDataRecordThreshold' => 
                          array (
                            'description' => '源数据条目数波动阈值(0-100)。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexSizeThreshold' => 
                          array (
                            'description' => '索引大小波动阈值(0-100)。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexLossThreshold' => 
                          array (
                            'description' => '索引丢失阈值(0-100)。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                        ),
                      ),
                      'status' => 
                      array (
                        'description' => '表示单签召回表的状态。 

取值：

- **Draft**：草稿。

- **Running**：运行中。

- **Offline**：已下线。

- **Deleted**：已删除。',
                        'type' => 'string',
                        'example' => 'Running',
                      ),
                      'gmtCreate' => 
                      array (
                        'description' => '创建时间的UTC时间。',
                        'type' => 'string',
                        'example' => '2018-12-07T02:24:26.000Z',
                      ),
                      'tableName' => 
                      array (
                        'description' => 'ODPS召回表名称。',
                        'type' => 'string',
                        'example' => 'table_test',
                      ),
                      'cron' => 
                      array (
                        'description' => '定时调度任务Cron。',
                        'type' => 'string',
                        'example' => '0 0/12 0 * *',
                      ),
                      'description' => 
                      array (
                        'description' => '描述。',
                        'type' => 'string',
                        'example' => 'xx',
                      ),
                      'gmtModified' => 
                      array (
                        'description' => '最后修改时间的UTC时间。',
                        'type' => 'string',
                        'example' => '2018-12-07T02:24:26.000Z',
                      ),
                      'projectName' => 
                      array (
                        'description' => 'ODPS中的ProjectName。',
                        'type' => 'string',
                        'example' => 'testname',
                      ),
                      'algorithmName' => 
                      array (
                        'description' => '召回名称。',
                        'type' => 'string',
                        'example' => 'algorithmTest',
                      ),
                      'cronEnabled' => 
                      array (
                        'description' => '是否开启定时任务。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"status\\": \\"Running\\",\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"algorithmId\\": \\"abc\\",\\n    \\"meta\\": {\\n      \\"type\\": \\"ODPS\\",\\n      \\"extInfo\\": {},\\n      \\"category\\": \\"1_2\\",\\n      \\"threshold\\": {\\n        \\"sourceDataSizeThreshold\\": 1,\\n        \\"sourceDataRecordThreshold\\": 1,\\n        \\"indexSizeThreshold\\": 1,\\n        \\"indexLossThreshold\\": 1\\n      },\\n      \\"status\\": \\"Running\\",\\n      \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"tableName\\": \\"table_test\\",\\n      \\"cron\\": \\"0 0/12 0 * *\\",\\n      \\"description\\": \\"xx\\",\\n      \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"projectName\\": \\"testname\\",\\n      \\"algorithmName\\": \\"algorithmTest\\",\\n      \\"cronEnabled\\": true\\n    }\\n  },\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建召回表',
      'summary' => '创建召回表，目前召回表由PAI训练完成导出到odps中，在AIRec中指定ODPS表信息。',
    ),
    'DeleteFilteringAlgorithm' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '18673',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定的召回ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '召回表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'gmtModified' => 
                  array (
                    'description' => '最后更新时间，单位为UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '表示单签召回表的状态。 

取值：

- **Draft**：草稿。

- **Running**：运行中。

- **Offline**：已下线。

- **Deleted**：已删除。',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'algorithmId' => 
                  array (
                    'description' => '指定的召回ID。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'meta' => 
                  array (
                    'description' => 'Meta源数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'taskId' => 
                      array (
                        'description' => '任务ID。',
                        'type' => 'string',
                        'example' => 'test01',
                      ),
                      'metaType' => 
                      array (
                        'description' => '算法类型，当前只支持ODPS。',
                        'type' => 'string',
                        'example' => 'odps',
                      ),
                      'type' => 
                      array (
                        'description' => '数据源类型，当前只支持ODPS。
',
                        'type' => 'string',
                        'example' => 'ODPS',
                      ),
                      'extInfo' => 
                      array (
                        'description' => '召回表类型包含内容。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'kvSeparator' => 
                          array (
                            'description' => 'kv分隔符。',
                            'type' => 'string',
                            'example' => '；',
                          ),
                          'itemSeparator' => 
                          array (
                            'description' => 'Item分隔符。',
                            'type' => 'string',
                            'example' => '；',
                          ),
                        ),
                      ),
                      'category' => 
                      array (
                        'description' => '召回类别。',
                        'type' => 'string',
                        'example' => 'i2i',
                      ),
                      'threshold' => 
                      array (
                        'description' => 'Table的阈值信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'sourceDataSizeThreshold' => 
                          array (
                            'description' => '源数据大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'sourceDataRecordThreshold' => 
                          array (
                            'description' => '源数据条目数波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexSizeThreshold' => 
                          array (
                            'description' => '索引大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexLossThreshold' => 
                          array (
                            'description' => '索引丢失阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                        ),
                      ),
                      'tableName' => 
                      array (
                        'description' => 'ODPS召回表名称。',
                        'type' => 'string',
                        'example' => 'table01',
                      ),
                      'clusterId' => 
                      array (
                        'description' => '集群ID。',
                        'type' => 'string',
                        'example' => '1001',
                      ),
                      'cron' => 
                      array (
                        'description' => '定时调度任务Cron。',
                        'type' => 'string',
                        'example' => '0 0/12 0 * *',
                      ),
                      'description' => 
                      array (
                        'description' => '描述。',
                        'type' => 'string',
                        'example' => '训练任务',
                      ),
                      'projectName' => 
                      array (
                        'description' => 'ODPS中的ProjectName。',
                        'type' => 'string',
                        'example' => 'name01',
                      ),
                      'algorithmName' => 
                      array (
                        'description' => '召回名称。',
                        'type' => 'string',
                        'example' => 'user',
                      ),
                      'cronEnabled' => 
                      array (
                        'description' => '是否开启定时任务。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '936BE457-5D14-4DBD-85AE-176F7BA8D96D',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"status\\": \\"Running\\",\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"algorithmId\\": \\"123\\",\\n    \\"meta\\": {\\n      \\"taskId\\": \\"test01\\",\\n      \\"metaType\\": \\"odps\\",\\n      \\"type\\": \\"ODPS\\",\\n      \\"extInfo\\": {\\n        \\"kvSeparator\\": \\"；\\",\\n        \\"itemSeparator\\": \\"；\\"\\n      },\\n      \\"category\\": \\"i2i\\",\\n      \\"threshold\\": {\\n        \\"sourceDataSizeThreshold\\": 1,\\n        \\"sourceDataRecordThreshold\\": 1,\\n        \\"indexSizeThreshold\\": 1,\\n        \\"indexLossThreshold\\": 1\\n      },\\n      \\"tableName\\": \\"table01\\",\\n      \\"clusterId\\": \\"1001\\",\\n      \\"cron\\": \\"0 0/12 0 * *\\",\\n      \\"description\\": \\"训练任务\\",\\n      \\"projectName\\": \\"name01\\",\\n      \\"algorithmName\\": \\"user\\",\\n      \\"cronEnabled\\": true\\n    }\\n  },\\n  \\"requestId\\": \\"936BE457-5D14-4DBD-85AE-176F7BA8D96D\\"\\n}","errorExample":""},{"type":"xml","example":"<algorithmId>abc</algorithmId>\\n<gmtCreate>2018-12-07t02:24:26.000z</gmtCreate>\\n<gmtModified>2018-12-07t02:24:26.000z</gmtModified>\\n<meta>\\n    <algorithmName>user</algorithmName>\\n    <category>i2i</category>\\n    <cron>00***</cron>\\n    <extInfo>\\n        <itemSeparator>,</itemSeparator>\\n        <kvseparator>;</kvseparator>\\n    </extInfo>\\n    <fields>\\n        <dest>triggeritemId</dest>\\n        <source>abc</source>\\n    </fields>\\n    <fields>\\n        <dest>targeitemId</dest>\\n        <source>def</source>\\n    </fields>\\n    <fields>\\n        <dest>weight</dest>\\n        <source>ade</source>\\n    </fields>\\n    <partition/>\\n    <projectName>openrecGray</projectName>\\n    <tableName>userFakeAna</tableName>\\n    <type>odps</type>\\n</meta>","errorExample":""}]',
      'title' => '删除召回表',
      'summary' => '删除指定的召回配置及相关索引表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyFilteringAlgorithmMeta' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}/meta',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18720',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定的召回ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '召回表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'gmtModified' => 
                  array (
                    'description' => '最后更新时间，单位为UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '表示单签召回表的状态。 

取值：

- **Draft**：草稿。

- **Running**：运行中。

- **Offline**：已下线。

- **Deleted**：已删除。',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'algorithmId' => 
                  array (
                    'description' => '指定的召回ID。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'meta' => 
                  array (
                    'description' => 'Meta源数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'taskId' => 
                      array (
                        'description' => '任务ID。',
                        'type' => 'string',
                        'example' => 'taskId',
                      ),
                      'metaType' => 
                      array (
                        'description' => '算法类型，当前只支持ODPS。',
                        'type' => 'string',
                        'example' => 'metaType',
                      ),
                      'type' => 
                      array (
                        'description' => '数据源类型，当前只支持ODPS。',
                        'type' => 'string',
                        'example' => 'ODPS',
                      ),
                      'extInfo' => 
                      array (
                        'description' => '召回表类型包含内容。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'kvSeparator' => 
                          array (
                            'description' => 'kv分隔符。',
                            'type' => 'string',
                            'example' => ':',
                          ),
                          'itemSeparator' => 
                          array (
                            'description' => 'Item分隔符。',
                            'type' => 'string',
                            'example' => ',',
                          ),
                        ),
                      ),
                      'category' => 
                      array (
                        'description' => '召回类别。',
                        'type' => 'string',
                        'example' => '1_2',
                      ),
                      'threshold' => 
                      array (
                        'description' => 'ODPS表的阈值配置信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'sourceDataSizeThreshold' => 
                          array (
                            'description' => '源数据大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'sourceDataRecordThreshold' => 
                          array (
                            'description' => '源数据条目数波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexSizeThreshold' => 
                          array (
                            'description' => '索引大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexLossThreshold' => 
                          array (
                            'description' => '索引丢失阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                        ),
                      ),
                      'tableName' => 
                      array (
                        'description' => 'ODPS召回表名称。',
                        'type' => 'string',
                        'example' => 'test_table',
                      ),
                      'clusterId' => 
                      array (
                        'description' => '集群ID。',
                        'type' => 'string',
                        'example' => '244',
                      ),
                      'cron' => 
                      array (
                        'description' => '定时调度任务Cron。',
                        'type' => 'string',
                        'example' => '* * 24 7 0',
                      ),
                      'description' => 
                      array (
                        'description' => '召回算法配置描述。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'projectName' => 
                      array (
                        'description' => 'ODPS中的ProjectName。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'algorithmName' => 
                      array (
                        'description' => '召回算法配置名称。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'cronEnabled' => 
                      array (
                        'description' => '是否开启定时启动实验任务配置。

取值：

- **true**：开启。

- **false**：关闭。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '7585C2B2-0D61-4C96-AC5D-B960BFEDD4A3',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"status\\": \\"Running\\",\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"algorithmId\\": \\"abc\\",\\n    \\"meta\\": {\\n      \\"taskId\\": \\"taskId\\",\\n      \\"metaType\\": \\"metaType\\",\\n      \\"type\\": \\"ODPS\\",\\n      \\"extInfo\\": {\\n        \\"kvSeparator\\": \\":\\",\\n        \\"itemSeparator\\": \\",\\"\\n      },\\n      \\"category\\": \\"1_2\\",\\n      \\"threshold\\": {\\n        \\"sourceDataSizeThreshold\\": 1,\\n        \\"sourceDataRecordThreshold\\": 1,\\n        \\"indexSizeThreshold\\": 1,\\n        \\"indexLossThreshold\\": 1\\n      },\\n      \\"tableName\\": \\"test_table\\",\\n      \\"clusterId\\": \\"244\\",\\n      \\"cron\\": \\"* * 24 7 0\\",\\n      \\"description\\": \\"test\\",\\n      \\"projectName\\": \\"test\\",\\n      \\"algorithmName\\": \\"test\\",\\n      \\"cronEnabled\\": true\\n    }\\n  },\\n  \\"requestId\\": \\"7585C2B2-0D61-4C96-AC5D-B960BFEDD4A3\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'ModifyFilteringAlgorithmMeta',
      'summary' => '修改召回表的配置。',
      'description' => '可修改的配置有：
● cron、cronEnabled
● description
● algorithmName
● threshold：注意，如果要修改ODPS表的阈值配置信息，必须全量提交，不支持只传入ODPS表的阈值配置信息下边的某一项。',
    ),
    'DescribeFilteringAlgorithm' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18682',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定的召回表ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '召回表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'gmtModified' => 
                  array (
                    'description' => '最后更新时间，单位为UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '表示单签召回表的状态。 

取值：

- **Draft**：草稿。

- **Running**：运行中。

- **Offline**：已下线。

- **Deleted**：已删除。',
                    'type' => 'string',
                    'example' => 'Draft',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'algorithmId' => 
                  array (
                    'description' => '指定的召回ID。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'meta' => 
                  array (
                    'description' => 'Meta源数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'taskId' => 
                      array (
                        'description' => '任务ID。',
                        'type' => 'string',
                        'example' => 'taskId',
                      ),
                      'metaType' => 
                      array (
                        'description' => '算法类型，当前只支持ODPS。',
                        'type' => 'string',
                        'example' => 'metaType',
                      ),
                      'type' => 
                      array (
                        'description' => '数据源类型，当前只支持ODPS。',
                        'type' => 'string',
                        'example' => 'ODPS',
                      ),
                      'extInfo' => 
                      array (
                        'description' => '召回表类型包含内容。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'kvSeparator' => 
                          array (
                            'description' => 'kv分隔符。',
                            'type' => 'string',
                            'example' => ':',
                          ),
                          'itemSeparator' => 
                          array (
                            'description' => 'Item分隔符。',
                            'type' => 'string',
                            'example' => ',',
                          ),
                        ),
                      ),
                      'category' => 
                      array (
                        'description' => '召回类别。',
                        'type' => 'string',
                        'example' => '1_2',
                      ),
                      'threshold' => 
                      array (
                        'description' => 'Table的阈值信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'sourceDataSizeThreshold' => 
                          array (
                            'description' => '源数据大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'sourceDataRecordThreshold' => 
                          array (
                            'description' => '源数据条目数波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexSizeThreshold' => 
                          array (
                            'description' => '索引大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexLossThreshold' => 
                          array (
                            'description' => '索引丢失阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                        ),
                      ),
                      'tableName' => 
                      array (
                        'description' => 'ODPS召回表名称。',
                        'type' => 'string',
                        'example' => 'test_table',
                      ),
                      'clusterId' => 
                      array (
                        'description' => '集群ID。',
                        'type' => 'string',
                        'example' => '244',
                      ),
                      'cron' => 
                      array (
                        'description' => '定时调度任务Cron。',
                        'type' => 'string',
                        'example' => '* * 24 7 0',
                      ),
                      'description' => 
                      array (
                        'description' => '描述。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'projectName' => 
                      array (
                        'description' => 'ODPS中的ProjectName。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'algorithmName' => 
                      array (
                        'description' => '算法名称。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'cronEnabled' => 
                      array (
                        'description' => '是否开启定时任务。',
                        'type' => 'boolean',
                        'example' => 'Y',
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7585C2B2-0D61-4C96-AC5D-B960BFEDD4A3',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"status\\": \\"Draft\\",\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"algorithmId\\": \\"abc\\",\\n    \\"meta\\": {\\n      \\"taskId\\": \\"taskId\\",\\n      \\"metaType\\": \\"metaType\\",\\n      \\"type\\": \\"ODPS\\",\\n      \\"extInfo\\": {\\n        \\"kvSeparator\\": \\":\\",\\n        \\"itemSeparator\\": \\",\\"\\n      },\\n      \\"category\\": \\"1_2\\",\\n      \\"threshold\\": {\\n        \\"sourceDataSizeThreshold\\": 1,\\n        \\"sourceDataRecordThreshold\\": 1,\\n        \\"indexSizeThreshold\\": 1,\\n        \\"indexLossThreshold\\": 1\\n      },\\n      \\"tableName\\": \\"test_table\\",\\n      \\"clusterId\\": \\"244\\",\\n      \\"cron\\": \\"* * 24 7 0\\",\\n      \\"description\\": \\"test\\",\\n      \\"projectName\\": \\"test\\",\\n      \\"algorithmName\\": \\"test\\",\\n      \\"cronEnabled\\": true\\n    }\\n  },\\n  \\"requestId\\": \\"7585C2B2-0D61-4C96-AC5D-B960BFEDD4A3\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取召回表',
      'summary' => '根据指定召回表ID 获取某个召回配置信息。',
    ),
    'ListFilteringAlgorithms' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18703',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表示单签召回表的状态。 

取值：

- **Draft**：草稿。

- **Running**：运行中。

- **Offline**：已下线。

- **Deleted**：已删除。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Running',
          ),
        ),
        2 => 
        array (
          'name' => 'algorithmId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '召回表ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '召回表分页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '召回表大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '召回表信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'gmtModified' => 
                    array (
                      'description' => '最后更新时间，单位为UTC时间。',
                      'type' => 'string',
                      'example' => '2018-12-07T02:24:26.000Z',
                    ),
                    'status' => 
                    array (
                      'description' => '表示单签召回表的状态。 

取值：

- **Draft**：草稿。

- **Running**：运行中。

- **Offline**：已下线。

- **Deleted**：已删除。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间的UTC时间。',
                      'type' => 'string',
                      'example' => '2018-12-07T02:24:26.000Z',
                    ),
                    'algorithmId' => 
                    array (
                      'description' => '指定的召回ID。',
                      'type' => 'string',
                      'example' => '123',
                    ),
                    'meta' => 
                    array (
                      'description' => 'Meta源数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'taskId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'metaType' => 
                        array (
                          'description' => '算法类型，当前只支持ODPS。',
                          'type' => 'string',
                          'example' => 'ODPS',
                        ),
                        'type' => 
                        array (
                          'description' => '数据源类型，当前只支持ODPS。',
                          'type' => 'string',
                          'example' => 'odps',
                        ),
                        'extInfo' => 
                        array (
                          'description' => '召回表类型包含内容。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'kvSeparator' => 
                            array (
                              'description' => 'kv分隔符。',
                              'type' => 'string',
                              'example' => ':',
                            ),
                            'itemSeparator' => 
                            array (
                              'description' => 'Item分隔符。',
                              'type' => 'string',
                              'example' => ',',
                            ),
                          ),
                        ),
                        'category' => 
                        array (
                          'description' => '召回类别。',
                          'type' => 'string',
                          'example' => 'odps',
                        ),
                        'threshold' => 
                        array (
                          'description' => 'Table的阈值信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'sourceDataSizeThreshold' => 
                            array (
                              'description' => '源数据大小波动阈值。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'sourceDataRecordThreshold' => 
                            array (
                              'description' => '源数据条目数波动阈值。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'indexSizeThreshold' => 
                            array (
                              'description' => '索引大小阈值。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'indexLossThreshold' => 
                            array (
                              'description' => '索引丢失阈值。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                          ),
                        ),
                        'tableName' => 
                        array (
                          'description' => 'ODPS召回表名称。',
                          'type' => 'string',
                          'example' => 'item',
                        ),
                        'clusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'cron' => 
                        array (
                          'description' => '定时调度任务Cron。',
                          'type' => 'string',
                          'example' => '0 0/12 0 * *',
                        ),
                        'description' => 
                        array (
                          'description' => '描述。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'projectName' => 
                        array (
                          'description' => 'ODPS中的ProjectName。',
                          'type' => 'string',
                          'example' => 'airec123',
                        ),
                        'algorithmName' => 
                        array (
                          'description' => '算法名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'cronEnabled' => 
                        array (
                          'description' => '是否开启定时任务。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'headers' => 
              array (
                'description' => '显示header信息，目前有count在map中。',
                'type' => 'object',
                'properties' => 
                array (
                  'X-Total-Count' => 
                  array (
                    'description' => '总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7585C2B2-0D61-4C96-AC5D-B960BFEDD4A3',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"status\\": \\"Running\\",\\n      \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"algorithmId\\": \\"123\\",\\n      \\"meta\\": {\\n        \\"taskId\\": \\"123\\",\\n        \\"metaType\\": \\"ODPS\\",\\n        \\"type\\": \\"odps\\",\\n        \\"extInfo\\": {\\n          \\"kvSeparator\\": \\":\\",\\n          \\"itemSeparator\\": \\",\\"\\n        },\\n        \\"category\\": \\"odps\\",\\n        \\"threshold\\": {\\n          \\"sourceDataSizeThreshold\\": 1,\\n          \\"sourceDataRecordThreshold\\": 1,\\n          \\"indexSizeThreshold\\": 1,\\n          \\"indexLossThreshold\\": 1\\n        },\\n        \\"tableName\\": \\"item\\",\\n        \\"clusterId\\": \\"123\\",\\n        \\"cron\\": \\"0 0/12 0 * *\\",\\n        \\"description\\": \\"test\\",\\n        \\"projectName\\": \\"airec123\\",\\n        \\"algorithmName\\": \\"test\\",\\n        \\"cronEnabled\\": true\\n      }\\n    }\\n  ],\\n  \\"headers\\": {\\n    \\"X-Total-Count\\": 12\\n  },\\n  \\"requestId\\": \\"7585C2B2-0D61-4C96-AC5D-B960BFEDD4A3\\"\\n}","errorExample":""},{"type":"xml","example":"<headers>\\n    <x-total-count>12</x-total-count>\\n</headers>\\n<requestId>7585c2b2-0d61-4c96-ac5d-b960bfedd4a3</requestId>\\n<result>\\n    <algorithmId>abc</algorithmId>\\n    <gmtCreate>2018-12-07t02:24:26.000z</gmtCreate>\\n    <gmtModified>2018-12-07t02:24:26.000z</gmtModified>\\n    <meta>\\n        <algorithmName>user</algorithmName>\\n        <category>i2i</category>\\n        <cron>00***</cron>\\n        <extInfo>\\n            <itemSeparator>,</itemSeparator>\\n            <kvseparator>;</kvseparator>\\n        </extInfo>\\n        <fields>\\n            <dest>triggeritemId</dest>\\n            <source>abc</source>\\n        </fields>\\n        <fields>\\n            <dest>targeitemId</dest>\\n            <source>def</source>\\n        </fields>\\n        <fields>\\n            <dest>weight</dest>\\n            <source>ade</source>\\n        </fields>\\n        <partition/>\\n        <projectName>openrecGray</projectName>\\n        <tableName>userFakeAna</tableName>\\n        <type>odps</type>\\n    </meta>\\n    <status>running</status>\\n</result>","errorExample":""}]',
      'title' => '获取召回表列表',
      'summary' => '列表显示所有的召回表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OfflineFilteringAlgorithm' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}/actions/offline',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18726',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '召回算法ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '召回表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'gmtModified' => 
                  array (
                    'description' => '最后更新时间，单位为UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '表示单签召回表的状态。 

取值：

- **Draft**：草稿。

- **Running**：运行中。

- **Offline**：已下线。

- **Deleted**：已删除。',
                    'type' => 'string',
                    'example' => 'Init',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'algorithmId' => 
                  array (
                    'description' => '指定的召回ID。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'meta' => 
                  array (
                    'description' => 'Meta源数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'taskId' => 
                      array (
                        'description' => '任务ID。',
                        'type' => 'string',
                        'example' => 'taskId',
                      ),
                      'metaType' => 
                      array (
                        'description' => '算法类型，当前只支持ODPS。',
                        'type' => 'string',
                        'example' => 'metaType',
                      ),
                      'type' => 
                      array (
                        'description' => '数据源类型，当前只支持ODPS。',
                        'type' => 'string',
                        'example' => 'ODPS',
                      ),
                      'extInfo' => 
                      array (
                        'description' => '召回表类型包含内容。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'kvSeparator' => 
                          array (
                            'description' => 'kv分隔符。',
                            'type' => 'string',
                            'example' => ':',
                          ),
                          'itemSeparator' => 
                          array (
                            'description' => 'Item分隔符。',
                            'type' => 'string',
                            'example' => ',',
                          ),
                        ),
                      ),
                      'category' => 
                      array (
                        'description' => '召回类别。',
                        'type' => 'string',
                        'example' => '1_2',
                      ),
                      'threshold' => 
                      array (
                        'description' => 'Table的阈值信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'sourceDataSizeThreshold' => 
                          array (
                            'description' => '源数据大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'sourceDataRecordThreshold' => 
                          array (
                            'description' => '源数据条目数波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexSizeThreshold' => 
                          array (
                            'description' => '索引大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'indexLossThreshold' => 
                          array (
                            'description' => '索引大小波动阈值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                        ),
                      ),
                      'tableName' => 
                      array (
                        'description' => 'ODPS召回表名称。',
                        'type' => 'string',
                        'example' => 'test_table',
                      ),
                      'clusterId' => 
                      array (
                        'description' => '集群ID。',
                        'type' => 'string',
                        'example' => '244',
                      ),
                      'cron' => 
                      array (
                        'description' => '定时调度任务Cron。',
                        'type' => 'string',
                        'example' => '* * 24 7 0',
                      ),
                      'description' => 
                      array (
                        'description' => '描述。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'projectName' => 
                      array (
                        'description' => 'ODPS中的ProjectName。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'algorithmName' => 
                      array (
                        'description' => '算法名称。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'cronEnabled' => 
                      array (
                        'description' => '是否开启定时任务。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7585C2B2-0D61-4C96-AC5D-B960BFEDD4A3',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"status\\": \\"Init\\",\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"algorithmId\\": \\"abc\\",\\n    \\"meta\\": {\\n      \\"taskId\\": \\"taskId\\",\\n      \\"metaType\\": \\"metaType\\",\\n      \\"type\\": \\"ODPS\\",\\n      \\"extInfo\\": {\\n        \\"kvSeparator\\": \\":\\",\\n        \\"itemSeparator\\": \\",\\"\\n      },\\n      \\"category\\": \\"1_2\\",\\n      \\"threshold\\": {\\n        \\"sourceDataSizeThreshold\\": 1,\\n        \\"sourceDataRecordThreshold\\": 1,\\n        \\"indexSizeThreshold\\": 1,\\n        \\"indexLossThreshold\\": 1\\n      },\\n      \\"tableName\\": \\"test_table\\",\\n      \\"clusterId\\": \\"244\\",\\n      \\"cron\\": \\"* * 24 7 0\\",\\n      \\"description\\": \\"test\\",\\n      \\"projectName\\": \\"test\\",\\n      \\"algorithmName\\": \\"test\\",\\n      \\"cronEnabled\\": true\\n    }\\n  },\\n  \\"requestId\\": \\"7585C2B2-0D61-4C96-AC5D-B960BFEDD4A3\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '下线召回表',
      'summary' => '下线召回表。',
    ),
    'CreateRankingSystem' => 
    array (
      'summary' => '创建排序服务。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems',
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
        'abilityTreeCode' => '117162',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'result' => 
              array (
                'description' => '返回详情结果',
                '$ref' => '#/components/schemas/RankingSystem',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"result\\": {\\n    \\"Meta\\": {\\n      \\"AutoDeploy\\": true,\\n      \\"AutoDeployAuc\\": \\"0.3\\",\\n      \\"Conf\\": \\"\\",\\n      \\"PredictEngine\\": {\\n        \\"ResourceId\\": \\"eas-oljkkdrggxhx7eizjd\\",\\n        \\"Version\\": \\"1\\",\\n        \\"ClusterId\\": \\"cn-shanghai\\"\\n      },\\n      \\"PredictEngineType\\": \\"EAS\\",\\n      \\"ModelVersionName\\": \\"模型A_T1638964800000\\",\\n      \\"FailMsg\\": \\"\\"\\n    },\\n    \\"ApplyStatus\\": \\"NOT_APPLIED\\",\\n    \\"DeployStatus\\": \\"NOT_DEPLOYED\\",\\n    \\"SceneIdList\\": [\\n      0\\n    ],\\n    \\"Name\\": \\"servicea\\",\\n    \\"ModelTemplateId\\": \\"a-a-a\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>\\n<result>\\n    <name>service-a</name>\\n    <deployStatus>NOT_DEPLOYED</deployStatus>\\n    <applyStatus>NOT_APPLIED</applyStatus>\\n    <modelTemplateId>123465</modelTemplateId>\\n    <modelTemplateName>排序模型A</modelTemplateName>\\n    <sceneIdList>1</sceneIdList>\\n    <sceneIdList>2</sceneIdList>\\n    <sceneIdList>3</sceneIdList>\\n    <meta>\\n        <autoDeploy>true</autoDeploy>\\n        <autoDeployAuc>0.9</autoDeployAuc>\\n        <conf/>\\n        <predictEngineType>EAS</predictEngineType>\\n        <predictEngine>\\n            <clusterId>cn-shanghai</clusterId>\\n            <resourceId>eas-oljkkdrggxhx7eizjd</resourceId>\\n            <version>v1</version>\\n        </predictEngine>\\n    </meta>\\n</result>","errorExample":""}]',
      'title' => '创建排序服务',
    ),
    'DeleteRankingSystem' => 
    array (
      'summary' => '删除排序服务。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems/{name}',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '117181',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
            'title' => 'A short description of struct',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
            'title' => '排序服务名称',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/RankingSystem',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>\\n<result>\\n    <name>service-a</name>\\n    <deployStatus>DEPLOY_SUCCESS</deployStatus>\\n    <applyStatus>NOT_APPLIED</applyStatus>\\n    <modelTemplateName>排序模型A</modelTemplateName>\\n    <modelTemplateId>123124</modelTemplateId>\\n    <sceneIdList>1</sceneIdList>\\n    <sceneIdList>2</sceneIdList>\\n    <sceneIdList>3</sceneIdList>\\n    <meta>\\n        <autoDeploy>true</autoDeploy>\\n        <autoDeployAuc>0.9</autoDeployAuc>\\n        <conf>{\\n\\t\\"fg_threads\\": 4,\\n  \\"fg_mode\\":\\"normal\\",\\n\\t\\"inter_op_parallelism_threads\\": 4,\\n\\t\\"intra_op_parallelism_threads\\": 4,\\n\\t\\"remote_type\\": \\"hologres\\",\\n\\t\\"url\\": \\"postgres://user:password@addr:port/db_name\\",\\n\\t\\"period\\": 2880,\\n\\t\\"timeout\\": 600,\\n\\t\\"tables\\": [{\\n\\t\\t\\"name\\": \\"table1\\",\\n\\t\\t\\"key\\": \\"svid\\",\\n\\t\\t\\"value\\": \\"feat1,feat2,feat3,feat4 as alt_feat4\\",\\n\\t\\t\\"timekey\\": \\"update_time\\",\\n\\t\\t\\"condition\\": \\"feat1 &lt; 50\\"\\n\\t}, {\\n\\t\\t\\"name\\": \\"table2\\",\\n\\t\\t\\"key\\": \\"svid\\",\\n\\t\\t\\"value\\": \\"feat5,feat6,feat7,feat8\\",\\n\\t\\t\\"timekey\\": \\"update_time\\"\\n\\t}]\\n}</conf>\\n        <predictEngineType>EAS</predictEngineType>\\n        <predictEngine>\\n            <clusterId>cn-shanghai</clusterId>\\n            <resourceId>eas-oljkkdrggxhx7eizjd</resourceId>\\n            <version>v1</version>\\n        </predictEngine>\\n    </meta>\\n</result>","errorExample":""}]',
      'title' => '删除排序服务',
    ),
    'ModifyRankingSystem' => 
    array (
      'summary' => '修改排序服务。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems/{name}',
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
        'abilityTreeCode' => '117165',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序服务',
            'description' => '排序服务',
            'type' => 'string',
            'required' => true,
            'example' => '"service-a',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '配置',
            'type' => 'object',
            'required' => false,
            'example' => '{}',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'description' => '修改后的排序服务实体',
                '$ref' => '#/components/schemas/RankingSystem',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": {\\n    \\"Meta\\": {\\n      \\"AutoDeploy\\": true,\\n      \\"AutoDeployAuc\\": \\"0.3\\",\\n      \\"Conf\\": \\"\\",\\n      \\"PredictEngine\\": {\\n        \\"ResourceId\\": \\"eas-oljkkdrggxhx7eizjd\\",\\n        \\"Version\\": \\"1\\",\\n        \\"ClusterId\\": \\"cn-shanghai\\"\\n      },\\n      \\"PredictEngineType\\": \\"EAS\\",\\n      \\"ModelVersionName\\": \\"模型A_T1638964800000\\",\\n      \\"FailMsg\\": \\"\\"\\n    },\\n    \\"ApplyStatus\\": \\"NOT_APPLIED\\",\\n    \\"DeployStatus\\": \\"NOT_DEPLOYED\\",\\n    \\"SceneIdList\\": [\\n      0\\n    ],\\n    \\"Name\\": \\"servicea\\",\\n    \\"ModelTemplateId\\": \\"a-a-a\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改排序服务',
    ),
    'GetRankingSystem' => 
    array (
      'summary' => '获取排序服务详情。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems/{name}',
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
        'abilityTreeCode' => '117168',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序服务名称',
            'description' => '服务名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test-service',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'result' => 
              array (
                'description' => '响应业务实体',
                '$ref' => '#/components/schemas/RankingSystem',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"result\\": {\\n    \\"Meta\\": {\\n      \\"AutoDeploy\\": true,\\n      \\"AutoDeployAuc\\": \\"0.3\\",\\n      \\"Conf\\": \\"\\",\\n      \\"PredictEngine\\": {\\n        \\"ResourceId\\": \\"eas-oljkkdrggxhx7eizjd\\",\\n        \\"Version\\": \\"1\\",\\n        \\"ClusterId\\": \\"cn-shanghai\\"\\n      },\\n      \\"PredictEngineType\\": \\"EAS\\",\\n      \\"ModelVersionName\\": \\"模型A_T1638964800000\\",\\n      \\"FailMsg\\": \\"\\"\\n    },\\n    \\"ApplyStatus\\": \\"NOT_APPLIED\\",\\n    \\"DeployStatus\\": \\"NOT_DEPLOYED\\",\\n    \\"SceneIdList\\": [\\n      0\\n    ],\\n    \\"Name\\": \\"servicea\\",\\n    \\"ModelTemplateId\\": \\"a-a-a\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>\\n<result>\\n    <name>service-a</name>\\n    <deployStatus>DEPLOY_SUCCESS</deployStatus>\\n    <applyStatus>NOT_APPLIED</applyStatus>\\n    <modelTemplateName>排序模型A</modelTemplateName>\\n    <modelTemplateId>123455</modelTemplateId>\\n    <sceneIdList>1</sceneIdList>\\n    <sceneIdList>2</sceneIdList>\\n    <sceneIdList>3</sceneIdList>\\n    <meta>\\n        <autoDeploy>true</autoDeploy>\\n        <autoDeployAuc>0.9</autoDeployAuc>\\n        <conf>{\\n\\t\\"fg_threads\\": 4,\\n  \\"fg_mode\\":\\"normal\\",\\n\\t\\"inter_op_parallelism_threads\\": 4,\\n\\t\\"intra_op_parallelism_threads\\": 4,\\n\\t\\"remote_type\\": \\"hologres\\",\\n\\t\\"url\\": \\"postgres://user:password@addr:port/db_name\\",\\n\\t\\"period\\": 2880,\\n\\t\\"timeout\\": 600,\\n\\t\\"tables\\": [{\\n\\t\\t\\"name\\": \\"table1\\",\\n\\t\\t\\"key\\": \\"svid\\",\\n\\t\\t\\"value\\": \\"feat1,feat2,feat3,feat4 as alt_feat4\\",\\n\\t\\t\\"timekey\\": \\"update_time\\",\\n\\t\\t\\"condition\\": \\"feat1 &lt; 50\\"\\n\\t}, {\\n\\t\\t\\"name\\": \\"table2\\",\\n\\t\\t\\"key\\": \\"svid\\",\\n\\t\\t\\"value\\": \\"feat5,feat6,feat7,feat8\\",\\n\\t\\t\\"timekey\\": \\"update_time\\"\\n\\t}]\\n}</conf>\\n        <predictEngineType>EAS</predictEngineType>\\n        <predictEngine>\\n            <clusterId>cn-shanghai</clusterId>\\n            <resourceId>eas-oljkkdrggxhx7eizjd</resourceId>\\n            <version>v1</version>\\n        </predictEngine>\\n    </meta>\\n</result>","errorExample":""}]',
      'title' => '获取排序服务详情',
      'description' => '****',
    ),
    'GetRankingSystemHistory' => 
    array (
      'summary' => '查询排序服务操作记录。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems/{name}/histories/{operateId}',
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
        'abilityTreeCode' => '117155',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序服务名称',
            'description' => '排序服务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'service-a',
          ),
        ),
        2 => 
        array (
          'name' => 'operateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '操作记录id',
            'description' => '操作记录id',
            'type' => 'string',
            'required' => true,
            'example' => 'u-s-a',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'description' => '响应业务实体',
                '$ref' => '#/components/schemas/RankingSystemHistory',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": {\\n    \\"Meta\\": {\\n      \\"AutoDeploy\\": true,\\n      \\"AutoDeployAuc\\": \\"0.3\\",\\n      \\"Conf\\": \\"\\",\\n      \\"ModelTemplateName\\": \\"排序模型A\\",\\n      \\"PredictEngine\\": {\\n        \\"ResourceId\\": \\"eas-oljkkdrggxhx7eizjd\\",\\n        \\"Version\\": \\"1\\"\\n      },\\n      \\"PredictEngineType\\": \\"EAS\\",\\n      \\"PreviousOperateId\\": \\"aaaa\\"\\n    },\\n    \\"OperateTime\\": \\"2021-12-06T03:01:41.217Z\\",\\n    \\"OperateId\\": \\"8AC865AF-37D6-42ED-AA9A-B60D8ECDF640\\",\\n    \\"OperateType\\": \\"CONF_CHANGE\\",\\n    \\"Name\\": \\"servicea\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询排序服务操作记录',
    ),
    'ListRankingSystems' => 
    array (
      'summary' => '获取排序服务列表。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems',
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
        'abilityTreeCode' => '117169',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序服务名称',
            'description' => '排序服务名称',
            'type' => 'string',
            'required' => false,
            'example' => 'service-a',
          ),
        ),
        2 => 
        array (
          'name' => 'deployStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询部署状态',
            'description' => '查询部署状态：
NOT_DEPLOYED 未部署
DEPLOY_SUCCESS 部署成功',
            'type' => 'string',
            'required' => false,
            'example' => 'NOT_DEPLOYED',
          ),
        ),
        3 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，页码',
            'description' => '分页，页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，大小',
            'description' => '分页，大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => 'result',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务列表信息',
                  '$ref' => '#/components/schemas/RankingSystem',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": [\\n    {\\n      \\"Meta\\": {\\n        \\"AutoDeploy\\": true,\\n        \\"AutoDeployAuc\\": \\"0.3\\",\\n        \\"Conf\\": \\"\\",\\n        \\"PredictEngine\\": {\\n          \\"ResourceId\\": \\"eas-oljkkdrggxhx7eizjd\\",\\n          \\"Version\\": \\"1\\",\\n          \\"ClusterId\\": \\"cn-shanghai\\"\\n        },\\n        \\"PredictEngineType\\": \\"EAS\\",\\n        \\"ModelVersionName\\": \\"模型A_T1638964800000\\",\\n        \\"FailMsg\\": \\"\\"\\n      },\\n      \\"ApplyStatus\\": \\"NOT_APPLIED\\",\\n      \\"DeployStatus\\": \\"NOT_DEPLOYED\\",\\n      \\"SceneIdList\\": [\\n        0\\n      ],\\n      \\"Name\\": \\"servicea\\",\\n      \\"ModelTemplateId\\": \\"a-a-a\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取排序服务列表',
    ),
    'ListRankingSystemHistories' => 
    array (
      'summary' => '查询服务操作记录列表。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems/{name}/histories',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '117159',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序服务名称',
            'description' => '排序服务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'service-a',
          ),
        ),
        2 => 
        array (
          'name' => 'operateType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '操作类型',
            'description' => '操作类型：
CONF_CHANGE（配置变更）、DEPLOY_CHANGE（部署变更）',
            'type' => 'string',
            'required' => false,
            'example' => 'CONF_CHANGE',
          ),
        ),
        3 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，页码',
            'description' => '分页，页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，大小',
            'description' => '分页，大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => 'result',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '响应业务实体',
                  '$ref' => '#/components/schemas/RankingSystemHistory',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": [\\n    {\\n      \\"Meta\\": {\\n        \\"AutoDeploy\\": true,\\n        \\"AutoDeployAuc\\": \\"0.3\\",\\n        \\"Conf\\": \\"\\",\\n        \\"ModelTemplateName\\": \\"排序模型A\\",\\n        \\"PredictEngine\\": {\\n          \\"ResourceId\\": \\"eas-oljkkdrggxhx7eizjd\\",\\n          \\"Version\\": \\"1\\"\\n        },\\n        \\"PredictEngineType\\": \\"EAS\\",\\n        \\"PreviousOperateId\\": \\"aaaa\\"\\n      },\\n      \\"OperateTime\\": \\"2021-12-06T03:01:41.217Z\\",\\n      \\"OperateId\\": \\"8AC865AF-37D6-42ED-AA9A-B60D8ECDF640\\",\\n      \\"OperateType\\": \\"CONF_CHANGE\\",\\n      \\"Name\\": \\"servicea\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询服务操作记录列表',
    ),
    'DeployRankingSystem' => 
    array (
      'summary' => '部署/重启部署排序服务，已经部署过的服务，修改配置后必须重启部署，注：若未修改任何参数，则可以不传body。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems/{name}/actions/deploy',
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
        'operationType' => 'update',
        'abilityTreeCode' => '117176',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例id',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序服务名称',
            'description' => '服务名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '配置',
            'type' => 'object',
            'required' => false,
            'example' => '  "meta": {
    "autoDeploy": true,
    "autoDeployAuc": "0.9",
    "conf":"",
    "predictEngineType": "EAS",
    "predictEngine":{
    	"resourceId": "eas-oljkkdrggxhx7eizjd"
    }
  }',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => '返回结果',
                'type' => 'object',
                'example' => 'xxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<code>InternalServerError</code>\\n<message>An internal server error occurred.</message>\\n<requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>","errorExample":""}]',
      'title' => '部署排序服务',
    ),
    'VerifyRankingSystem' => 
    array (
      'summary' => '调试排序服务。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems/{name}/actions/verify',
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
        'abilityTreeCode' => '117171',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序服务名称',
            'description' => '排序服务名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'service-a',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{
  "userFeatures": "a:c,d:b",
  "itemFeatures": "a:1,b:2"
}',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'test',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": \\"test\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '调试排序服务',
    ),
    'RollbackRankingSystem' => 
    array (
      'summary' => '回滚排序服务。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-systems/{name}/actions/rollback',
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
        'operationType' => 'list',
        'abilityTreeCode' => '117180',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序服务名称',
            'description' => '排序服务名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'service-a',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{
	"operateId": "a-b-c"
}',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => '返回结果。',
                'type' => 'object',
                'example' => '无',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '回滚排序服务',
    ),
    'CreateRankingModelTemplate' => 
    array (
      'summary' => '创建排序模型模板。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-templates',
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
        'abilityTreeCode' => '117139',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'result' => 
              array (
                'title' => '排序模型模板信息',
                'description' => '排序模型模板信息。',
                '$ref' => '#/components/schemas/RankingModelTemplate',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"TRAINING_SUCCESS\\",\\n    \\"Meta\\": {\\n      \\"Authorized\\": true,\\n      \\"AutoRun\\": true,\\n      \\"AutoRunTime\\": 1,\\n      \\"AutoRunType\\": \\"DAY\\",\\n      \\"Conf\\": \\"train_config {}\\",\\n      \\"LastEditTime\\": \\"2021-12-06T03:01:41.217Z\\",\\n      \\"OssArn\\": \\"acs:ram::111:role/aliyunodpspaidefaultrole\\",\\n      \\"OssBucket\\": \\"bucket-a\\",\\n      \\"OssEndpoint\\": \\"oss-cn-beijing.aliyuncs.com\\",\\n      \\"SampleId\\": \\"1111\\",\\n      \\"SampleName\\": \\"样本1\\",\\n      \\"SampleTimeWindow\\": 3,\\n      \\"SampleTimeWindowType\\": \\"DAY\\",\\n      \\"Type\\": \\"MULTI_TOWER\\",\\n      \\"Name\\": \\"模型A\\",\\n      \\"DeployStatus\\": \\"NOT_DEPLOYED\\",\\n      \\"CanDeploy\\": true\\n    },\\n    \\"VersionNum\\": 3,\\n    \\"TemplateId\\": \\"a-a-a\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建排序模型模板',
    ),
    'DeleteRankingModelTemplate' => 
    array (
      'summary' => '删除模型。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-templates/{templateId}',
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
        'abilityTreeCode' => '117145',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'templateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序模型模板ID',
            'description' => '排序模型模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'testTemplateId',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'description' => '返回参数。',
                '$ref' => '#/components/schemas/RankingModelTemplate',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"TRAINING_SUCCESS\\",\\n    \\"Meta\\": {\\n      \\"Authorized\\": true,\\n      \\"AutoRun\\": true,\\n      \\"AutoRunTime\\": 1,\\n      \\"AutoRunType\\": \\"DAY\\",\\n      \\"Conf\\": \\"train_config {}\\",\\n      \\"LastEditTime\\": \\"2021-12-06T03:01:41.217Z\\",\\n      \\"OssArn\\": \\"acs:ram::111:role/aliyunodpspaidefaultrole\\",\\n      \\"OssBucket\\": \\"bucket-a\\",\\n      \\"OssEndpoint\\": \\"oss-cn-beijing.aliyuncs.com\\",\\n      \\"SampleId\\": \\"1111\\",\\n      \\"SampleName\\": \\"样本1\\",\\n      \\"SampleTimeWindow\\": 3,\\n      \\"SampleTimeWindowType\\": \\"DAY\\",\\n      \\"Type\\": \\"MULTI_TOWER\\",\\n      \\"Name\\": \\"模型A\\",\\n      \\"DeployStatus\\": \\"NOT_DEPLOYED\\",\\n      \\"CanDeploy\\": true\\n    },\\n    \\"VersionNum\\": 3,\\n    \\"TemplateId\\": \\"a-a-a\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除模型',
    ),
    'ModifyRankingModelTemplate' => 
    array (
      'summary' => '修改排序模型模板。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-templates/{templateId}',
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
        'abilityTreeCode' => '117144',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'templateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '排序模型模板ID',
            'description' => '排序模型模板ID',
            'type' => 'string',
            'required' => true,
            'example' => 'a-a-a',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '配置信息',
            'type' => 'object',
            'required' => false,
            'example' => '{}',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'description' => '模型信息',
                '$ref' => '#/components/schemas/RankingModelTemplate',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"TRAINING_SUCCESS\\",\\n    \\"Meta\\": {\\n      \\"Authorized\\": true,\\n      \\"AutoRun\\": true,\\n      \\"AutoRunTime\\": 1,\\n      \\"AutoRunType\\": \\"DAY\\",\\n      \\"Conf\\": \\"train_config {}\\",\\n      \\"LastEditTime\\": \\"2021-12-06T03:01:41.217Z\\",\\n      \\"OssArn\\": \\"acs:ram::111:role/aliyunodpspaidefaultrole\\",\\n      \\"OssBucket\\": \\"bucket-a\\",\\n      \\"OssEndpoint\\": \\"oss-cn-beijing.aliyuncs.com\\",\\n      \\"SampleId\\": \\"1111\\",\\n      \\"SampleName\\": \\"样本1\\",\\n      \\"SampleTimeWindow\\": 3,\\n      \\"SampleTimeWindowType\\": \\"DAY\\",\\n      \\"Type\\": \\"MULTI_TOWER\\",\\n      \\"Name\\": \\"模型A\\",\\n      \\"DeployStatus\\": \\"NOT_DEPLOYED\\",\\n      \\"CanDeploy\\": true\\n    },\\n    \\"VersionNum\\": 3,\\n    \\"TemplateId\\": \\"a-a-a\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改排序模型模板',
    ),
    'GetRankingModelTemplate' => 
    array (
      'summary' => '查看排序模型配置详情。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-templates/{templateId}',
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
        'abilityTreeCode' => '117142',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-test',
            'title' => 'A short description of struct',
          ),
        ),
        1 => 
        array (
          'name' => 'templateId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模型ID',
            'type' => 'string',
            'required' => false,
            'example' => '123',
            'title' => '模型模板ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/RankingModelTemplate',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>\\n<result>\\n    <templateId>a-a-a</templateId>\\n    <status>TRAINING_READY</status>\\n    <versionNum>3</versionNum>\\n    <meta>\\n        <name>模型a</name>\\n        <metaType>RankingModelTemplate</metaType>\\n        <lastEditTime>2021-12-06T03:01:41.217Z</lastEditTime>\\n        <type>MULTI_TOWER</type>\\n        <conf>train_config {\\n  batch_size: 1024\\n  log_step_count_steps: 100\\n  optimizer_config: {\\n    adam_optimizer: {\\n      learning_rate: {\\n        exponential_decay_learning_rate {\\n          initial_learning_rate: 0.001\\n          decay_steps: 1000\\n          decay_factor: 0.5\\n          min_learning_rate: 0.00001\\n        }\\n      }\\n    }\\n    use_moving_average: false\\n  }\\n  save_checkpoints_steps: 100\\n  sync_replicas: True\\n  num_steps: 2500\\n}\\n\\nmodel_config {\\n  model_class: \\"MultiTower\\"\\n  feature_groups {\\n    group_name: \\"item\\"\\n    feature_names: \\"adgroup_id\\"\\n    feature_names: \\"cate_id\\"\\n    feature_names: \\"campaign_id\\"\\n    feature_names: \\"customer\\"\\n    feature_names: \\"brand\\"\\n    feature_names: \\"price\\"\\n    feature_names: \\"pid\\"\\n    wide_deep: DEEP\\n  }\\n  feature_groups {\\n    group_name: \\"user\\"\\n    feature_names: \\"user_id\\"\\n    feature_names: \\"cms_segid\\"\\n    feature_names: \\"cms_group_id\\"\\n    feature_names: \\"age_level\\"\\n    feature_names: \\"pvalue_level\\"\\n    feature_names: \\"shopping_level\\"\\n    feature_names: \\"occupation\\"\\n    feature_names: \\"new_user_class_level\\"\\n    feature_names: \\"user_tag_cate\\"\\n    wide_deep: DEEP\\n  }\\n  feature_groups {\\n    group_name: \\"combo\\"\\n    feature_names: \\"combo__user_id_occupation\\"\\n    feature_names: \\"combo__age_level_customer\\"\\n    feature_names: \\"combo__pvalue_level_brand\\"\\n    wide_deep: DEEP\\n  }\\n  embedding_regularization: 1e-05\\n  multi_tower {\\n    towers {\\n      input: \\"item\\"\\n      dnn {\\n        hidden_units: 192\\n        hidden_units: 256\\n        hidden_units: 192\\n        hidden_units: 128\\n      }\\n    }\\n    towers {\\n      input: \\"user\\"\\n      dnn {\\n        hidden_units: 192\\n        hidden_units: 256\\n        hidden_units: 192\\n        hidden_units: 128\\n      }\\n    }\\n    towers {\\n      input: \\"combo\\"\\n      dnn {\\n        hidden_units: 192\\n        hidden_units: 256\\n        hidden_units: 192\\n        hidden_units: 128\\n      }\\n    }\\n    final_dnn {\\n      hidden_units: 256\\n      hidden_units: 192\\n      hidden_units: 128\\n      hidden_units: 64\\n    }\\n    l2_regularization: 0.0001\\n  }\\n}</conf>\\n        <sampleId>123</sampleId>\\n        <sampleName>样本1</sampleName>\\n        <sampleTimeWindow>30</sampleTimeWindow>\\n        <sampleTimeWindowType>HOUR</sampleTimeWindowType>\\n        <authorized>true</authorized>\\n        <ossBucket>keluo</ossBucket>\\n        <ossEndpoint>oss-cn-beijing.aliyuncs.com</ossEndpoint>\\n        <ossArn>acs:ram::111:role/aliyunodpspaidefaultrole</ossArn>\\n        <autoRun>true</autoRun>\\n        <autoRunTime>3</autoRunTime>\\n        <autoRunType>HOUR</autoRunType>\\n        <deployStatus>NOT_DEPLOYED</deployStatus>\\n        <canDeploy>true</canDeploy>\\n    </meta>\\n</result>","errorExample":""}]',
      'title' => '查看排序模型配置详情',
    ),
    'RunRankingModelTemplate' => 
    array (
      'summary' => '运行排序模型模板',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-templates/{templateId}/actions/run',
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
        'operationType' => 'update',
        'abilityTreeCode' => '117149',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'templateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型模板ID',
            'description' => '模型ID',
            'type' => 'string',
            'required' => true,
            'example' => '123',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => '返回结果',
                'type' => 'object',
                'example' => 'xxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>","errorExample":""}]',
      'title' => '启动训练',
    ),
    'CreateRankingModel' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/ranking-models',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '18667',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否校验参数。

取值：

- **true**：校验模型ID是否存在。

- **false**：默认false，校验参数后创建模型 。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'rankingModelId' => 
                  array (
                    'description' => '排序模型ID。',
                    'type' => 'string',
                    'example' => 'testRankingId',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'meta' => 
                  array (
                    'description' => '模型Meta原信息。',
                    'type' => 'object',
                    'example' => 'map',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"rankingModelId\\": \\"testRankingId\\",\\n    \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"meta\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建排名模型',
      'summary' => '创建模型。',
    ),
    'DeleteRankingModel' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/ranking-models/{rankingModelId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '18674',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'rankingModelId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '排序模型ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testRankingId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'rankingModelId' => 
                  array (
                    'description' => '排序模型ID。',
                    'type' => 'string',
                    'example' => 'testRankingId',
                  ),
                  'meta' => 
                  array (
                    'description' => '模型Meta原信息。',
                    'type' => 'object',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D486768B-8BF8-4D80-B491-43DC3D0AF8AB',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"rankingModelId\\": \\"testRankingId\\",\\n    \\"meta\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"D486768B-8BF8-4D80-B491-43DC3D0AF8AB\\",\\n  \\"message\\": \\"successful\\"\\n}","type":"json"}]',
      'title' => '删除排名模型',
      'summary' => '删除排序模型。',
    ),
    'DeleteRankingModelVersion' => 
    array (
      'summary' => '删除某个模型版本。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-versions/{versionId}',
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
        'abilityTreeCode' => '119230',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'versionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本ID',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除模型版本',
    ),
    'ModifyRankingModel' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/ranking-models/{rankingModelId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18723',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'rankingModelId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '排序模型ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'rankingModelId' => 
                  array (
                    'description' => '排序模型ID',
                    'type' => 'string',
                    'example' => 'test1234',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2020-11-11T09:47:43.000Z',
                  ),
                  'meta' => 
                  array (
                    'description' => '数据源信息，召回表的数据来源，目前只支持ODPS',
                    'type' => 'object',
                    'example' => '{}',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误code',
                'type' => 'string',
                'example' => '1',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'message' => 
              array (
                'description' => '返回消息',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"rankingModelId\\": \\"test1234\\",\\n    \\"gmtModified\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"gmtCreate\\": \\"2020-11-11T09:47:43.000Z\\",\\n    \\"meta\\": {}\\n  },\\n  \\"code\\": \\"1\\",\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改排名模型',
      'summary' => '修改模型信息。',
    ),
    'ListRankingModels' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/ranking-models',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18710',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test001',
          ),
        ),
        1 => 
        array (
          'name' => 'rankingModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型id',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定页码，默认为：1
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定每页展示条数，默认为10，限制:[1-50]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果

',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'rankingModelId' => 
                    array (
                      'description' => '模型ID',
                      'type' => 'string',
                      'example' => '123',
                    ),
                    'gmtModified' => 
                    array (
                      'description' => '最后修改时间',
                      'type' => 'string',
                      'example' => '2020-11-11T09:47:43.000Z',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2020-04-27T06:38:28.000Z',
                    ),
                    'meta' => 
                    array (
                      'description' => 'meta',
                      'type' => 'object',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '2D898E45-B97A-4245-B590-6D0AFEAF626B',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"rankingModelId\\": \\"123\\",\\n      \\"gmtModified\\": \\"2020-11-11T09:47:43.000Z\\",\\n      \\"gmtCreate\\": \\"2020-04-27T06:38:28.000Z\\",\\n      \\"meta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"2D898E45-B97A-4245-B590-6D0AFEAF626B\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '获取排名模型列表',
      'summary' => '查询模型列表。',
    ),
    'ListRankingModelTemplates' => 
    array (
      'summary' => '查看排序模型模板列表，按创建时间倒序。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-templates',
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
        'abilityTreeCode' => '117146',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，页码',
            'description' => '指定页码，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，大小',
            'description' => '指定每页展示条数，默认为10，限制:[1-50]。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F1C976E0-FCD2-52E8-9244-179C9C095C29',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '排序模型。',
                  '$ref' => '#/components/schemas/RankingModelTemplate',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F1C976E0-FCD2-52E8-9244-179C9C095C29\\",\\n  \\"result\\": [\\n    {\\n      \\"Status\\": \\"TRAINING_SUCCESS\\",\\n      \\"Meta\\": {\\n        \\"Authorized\\": true,\\n        \\"AutoRun\\": true,\\n        \\"AutoRunTime\\": 1,\\n        \\"AutoRunType\\": \\"DAY\\",\\n        \\"Conf\\": \\"train_config {}\\",\\n        \\"LastEditTime\\": \\"2021-12-06T03:01:41.217Z\\",\\n        \\"OssArn\\": \\"acs:ram::111:role/aliyunodpspaidefaultrole\\",\\n        \\"OssBucket\\": \\"bucket-a\\",\\n        \\"OssEndpoint\\": \\"oss-cn-beijing.aliyuncs.com\\",\\n        \\"SampleId\\": \\"1111\\",\\n        \\"SampleName\\": \\"样本1\\",\\n        \\"SampleTimeWindow\\": 3,\\n        \\"SampleTimeWindowType\\": \\"DAY\\",\\n        \\"Type\\": \\"MULTI_TOWER\\",\\n        \\"Name\\": \\"模型A\\",\\n        \\"DeployStatus\\": \\"NOT_DEPLOYED\\",\\n        \\"CanDeploy\\": true\\n      },\\n      \\"VersionNum\\": 3,\\n      \\"TemplateId\\": \\"a-a-a\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看排序模型模板列表',
    ),
    'GetRankingModelVersion' => 
    array (
      'summary' => '查看排序模型版本详情，包括评估结果和训练结果。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-versions/{versionId}',
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
        'abilityTreeCode' => '117152',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
            'title' => 'A short description of struct',
          ),
        ),
        1 => 
        array (
          'name' => 'versionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模型版本ID',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'title' => '模型版本ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/RankingModelVersion',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>\\n<result>\\n    <id>a-a-a</id>\\n    <name>模型A_t1638964800000</name>\\n    <status>TRAINING</status>\\n    <templateId>a-a-a</templateId>\\n    <templateName>模型A</templateName>\\n    <runTime>2021-12-08T20:00:00.0Z</runTime>\\n    <runLog/>\\n    <runResult>\\n        <trainAuc>0.3</trainAuc>\\n        <trainLoss>0.2</trainLoss>\\n        <trainGauc>0.1</trainGauc>\\n        <assessAuc>0.4</assessAuc>\\n        <assessGauc>0.3</assessGauc>\\n    </runResult>\\n</result>","errorExample":""}]',
      'title' => '查看排序模型版本详情',
    ),
    'ListRankingModelVersions' => 
    array (
      'summary' => '获取排序模型版本。',
      'path' => '/v2/openapi/instances/{instanceId}/ranking-model-versions',
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
        'abilityTreeCode' => '117151',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'templateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型模板ID',
            'description' => '模型模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，页码',
            'description' => '指定页码，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，大小',
            'description' => '指定每页展示条数，默认为10，限制:[1-50]。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '版本状态',
            'description' => '版本状态。

取值：

- **DRAFT**：草稿状态。

- **EFFECTIVE**：生效状态。

- **PUBLISHING**：发布中状态。

- **INEFFECTIVE**：已失效状态。

- **FAILED**：未生效状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'TRAINING',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'result' => 
              array (
                'title' => 'map',
                'description' => '返回参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '排序模型版本数据。',
                  '$ref' => '#/components/schemas/RankingModelVersion',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"result\\": [\\n    {\\n      \\"Status\\": \\"TRAINING\\",\\n      \\"RunTime\\": \\"2021-12-08T20:00:00.0Z\\",\\n      \\"RunLog\\": \\"\\",\\n      \\"TemplateName\\": \\"模型A\\",\\n      \\"RunResult\\": {\\n        \\"AssessAuc\\": \\"0.3\\",\\n        \\"AssessGauc\\": \\"0.3\\",\\n        \\"AssessLoss\\": \\"0.3\\",\\n        \\"TrainAuc\\": \\"0.3\\",\\n        \\"TrainGauc\\": \\"0.3\\",\\n        \\"TrainLoss\\": \\"0.3\\"\\n      },\\n      \\"Name\\": \\"模型A_t1638964800000\\",\\n      \\"TemplateId\\": \\"a-a-a\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取排序模型版本',
    ),
    'DecribeRankingModel' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/ranking-models/{rankingModelId}',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18670',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'rankingModelId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '排序模型ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testRankingId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'rankingModelId' => 
                  array (
                    'description' => '排序模型ID。',
                    'type' => 'string',
                    'example' => 'testRankingId',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间的UTC时间。',
                    'type' => 'string',
                    'example' => '2020-04-27T06:38:28.000Z',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建的UTC时间。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'meta' => 
                  array (
                    'description' => '模型Meta原信息。',
                    'type' => 'object',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"rankingModelId\\": \\"testRankingId\\",\\n    \\"gmtModified\\": \\"2020-04-27T06:38:28.000Z\\",\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"meta\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"message\\": \\"successful\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取排序模型',
      'summary' => '获取排序模型。',
    ),
    'CheckRankingModelReachable' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/ranking-models/{rankingModelId}/actions/check-connectivity',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '18663',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecY1ADIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-7e22x6f75001',
          ),
        ),
        1 => 
        array (
          'name' => 'rankingModelId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模型id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rankingModelId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '当前请求的RequestID。
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckRankingModelReachableResponse>\\n    <result>true</result>\\n    <requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>\\n</CheckRankingModelReachableResponse>","errorExample":""}]',
      'title' => '测试模型网络联通性',
      'summary' => '测试模型网络联通性。',
    ),
    'CreateRule' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/rules',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '18668',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-****
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'ruleId' => 
                  array (
                    'description' => '规则ID。',
                    'type' => 'string',
                    'example' => '98493A14-D619-4E88-9F8D-108939817F9F',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间。',
                    'type' => 'string',
                    'example' => '2020-04-27T06:38:28.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '规则状态：

- **DRAFT**：草稿状态


- **EFFECTIVE**：生效状态

- **PUBLISHING**：发布中状态

- **INEFFECTIVE**：已失效状态

- **FAILED**：未生效状态',
                    'type' => 'string',
                    'example' => 'EFFECTIVE',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2020-04-27T06:38:28.000Z',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"ruleId\\": \\"98493A14-D619-4E88-9F8D-108939817F9F\\",\\n    \\"gmtModified\\": \\"2020-04-27T06:38:28.000Z\\",\\n    \\"status\\": \\"EFFECTIVE\\",\\n    \\"gmtCreate\\": \\"2020-04-27T06:38:28.000Z\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<0>\\n    <Result>\\n        <Status>DRAFT</Status>\\n        <GmtCreate>2020-04-27T06:38:28.000Z</GmtCreate>\\n        <GmtModified>2020-04-27T06:38:28.000Z</GmtModified>\\n        <RuleId>98493A14-D619-4E88-9F8D-108939817F9F</RuleId>\\n        <RuleMeta>\\n            <RuleMetaType>SELECTION</RuleMetaType>\\n            <SceneId>123</SceneId>\\n            <PubState>PUBLISHING</PubState>\\n            <SelectionParams>\\n                <SelectType>QUERY_ITEM_TYPE</SelectType>\\n                <SelectionOperation>OPERATOR_EQUAL</SelectionOperation>\\n                <SelectValue>atrical,image</SelectValue>\\n            </SelectionParams>\\n        </RuleMeta>\\n    </Result>\\n    <RequestId>76E2C51D-A2D7-4775-9FD8-2AB84B2A0CEF</RequestId>\\n</0>\\n<1>\\n    <Result>\\n        <Status>DRAFT</Status>\\n        <GmtCreate>2020-04-27T03:17:21.000Z</GmtCreate>\\n        <GmtModified>2020-04-27T03:17:21.000Z</GmtModified>\\n        <RuleId>123456789001122</RuleId>\\n        <RuleMeta>\\n            <RuleMetaType>OPERATION</RuleMetaType>\\n            <SceneId>123</SceneId>\\n            <PubState>PUBLISHING</PubState>\\n            <OperationParams>\\n                <OperationType>MIX</OperationType>\\n                <Settings>\\n                    <Name>image</Name>\\n                    <Value>10</Value>\\n                </Settings>\\n            </OperationParams>\\n            <OperationParams>\\n                <OperationType>DIVERSIFY</OperationType>\\n                <CategoryIndex>1</CategoryIndex>\\n                <Window>2</Window>\\n                <Status>true</Status>\\n                <DiversifyType>TYPE_SHOP</DiversifyType>\\n            </OperationParams>\\n            <OperationParams>\\n                <OperationType>EXPOSURE</OperationType>\\n                <ExposureSettings>\\n                    <DurationSeconds>12340</DurationSeconds>\\n                    <Status>true</Status>\\n                    <ExposureType>TYPE_EXPOSE</ExposureType>\\n                    <ScenarioBased>true</ScenarioBased>\\n                </ExposureSettings>\\n                <ExposureSettings>\\n                    <DurationSeconds>12340000</DurationSeconds>\\n                    <Status>true</Status>\\n                    <ExposureType>TYPE_CLICK</ExposureType>\\n                    <ScenarioBased>true</ScenarioBased>\\n                </ExposureSettings>\\n            </OperationParams>\\n        </RuleMeta>\\n    </Result>\\n    <RequestId>76E2C51D-A2D7-4775-9FD8-2AB84B2A0CEF</RequestId>\\n</1>","errorExample":""}]',
      'title' => '创建规则',
      'summary' => '创建推荐策略运营规则。',
      'requestParamsDescription' => '请求的body：
| 参数 | 类型 | 是否必需 | 描述 |
| --- | --- | --- | --- |
| type | String | 是 | 规则类型<br />**SelectionRule：**选品规则<br />**OperationRule：**运营规则<br />**TopRule：** 置顶规则<br />**FixedPositionRule：**定坑规则 |
| ruleMeta | Map | 是 | 规则的具体信息 |
| └sceneId | String | 是 | 场景ID<br />如要修改全局运营规则，填global |
| selectionParams | List | 是 | 选品规则参数 |
| └selectType | Enum | 是 | **QUERY_ITEM_TYPE： **物品类型<br />**QUERY_CATEGORY：**物品类目<br />**QUERY_PUB_TIME ：**发布时间<br />**QUERY_CHANNEL：** 渠道 |
| └selectionOperation | Enum | 是 | **OPERATOR_HIGHER：**大于等于<br />**OPERATOR_LOWER：**小于等于<br />**_QUERY_VALUE_IN：** 包括_ |
| └selectValue | String | 是 | 具体选择的选品规则（Json格式传递） |
| operationParams |  |  |  |
| └modifyOperationType | List | 是 | ["DIVERSIFY","EXPOSURE"] 添加需要修改的 key |
| └instanceDiversifyEnable | boolean | 是 | 是否使用实例级别的多样性规则 |
| └instanceMixEnable | boolean | <br /> | 是否使用实例级别的混排规则 |
| └operationType | Enum | 是 | MIX 排序<br />**DIVERSIFY：** 多样性<br />**EXPOSURE：**曝光 （只有全局规则支持曝光类型） |
|    └settings | MixSetting | 是 |  |
|       └name | String | 是 | 混排类型 |
|       └value | int | 是 | 混排类型所占百分比 |
|   └diversifyType | Enum | 是 | **TYPE_SHOP：** 店铺打散<br />**TYPE_AUTHOR ：**作者打散<br />**TYPE_CATEGORY：**类目打散<br />**TYPE_ITEM_TYPE：** 物品类型打散 |
|      └categoryIndex | int | 是 | 层级，没有填0 |
|      └window | int | 是 | 窗口 |
|      └status | boolean | 是 | 打散是否开启，**true**：开启，**false**：关闭|
|  └instanceExposureEnable | boolean | 是 | 是否使用实例级别的曝光配置，<br />默认true |
|   └exposureSettings | List | 是 | 曝光配置列表 |
|       └durationSeconds | Long | 是 | 曝光时间（秒级时间戳） |
|       └exposureType | String | 是 | 曝光类型：<br />**TYPE_EXPOSE**：曝光<br />**TYPE_CLICK**：点击<br />**TYPE_LOOP**：循环 |
|       └status | boolean | 是 | 曝光是否开启，**true**：开启，**false**：关闭|
|       └scenarioBased | boolean | 是 | 是否基于场景，**true**：是，**false**：否，基于实例|
|   └mtOrderSettings | MtOrderSetting | 是 | 相关度规则配置列表 |
|  └index | int | 是 | 该值为标识顺序以及符号，<br />例如：a=b=c：111，a=b>c：112，a>b>c：123 |
|  └value | String | 是 | 相关度规则，**TITLE**，**TAG**，**CHANNEL**，**AUTHOR** |
|   └settings | NewItemSetting | 是 | 新品定义规则配置 |
|       └selectType | String | 是 | QUERY_PUB_TIME，固定字符串 |
|       └selectionOperation | String | 是 | OPERATOR_LOWER，固定字符串 |
|       └selectValue | int | 是 | 新品定义的时间，秒级别时间戳|
|   └settings | SimilaritySetting |  | 标题相似度规则 |
|       └windowSize | int |  | 重复个数，标题相似度这个规则不需要修改 |
|       └repeatLimit | int |  | 时间窗口 ，标题相似度这个规则不需要修改|
|       └type | String |  | title，固定字符串 |
|       └status | boolean |  | 标题相似度规则是否开启，**true**：是，**false**：否|
| topParams | List | 是 | 置顶规则物品列表 |
| └itemId | String | 是 | 物品ID|
| └itemType | String | 是 | 物品类型 |
| └title | String | 是 | 标题 |
| └categoryPath | String | 是 | 类目 |
| └channel | String | 是 | 渠道（内容/新闻） |
| └author | String | 是 | 作者（内容/新闻） |
| └brandId | String | 是 | 品牌（电商） |
| └shopId | String | 是 | 店铺（电商） |
| fixedPositionParams | List<Fixed> | 是 | 定坑规则列表 |
| └positions | List<Long> | 是 | 位置列表，格式为[坑位ID1,坑位ID2] |
| └selectType | String | 是 | 选品类型，固定值为QUERY_ITEM_ID_AND_TYPE |
| └selectionOperation | String | 是 | 选品规则，固定值为QUERY_VALUE_IN |
| └selectValue | String | 是 | 选品物品，格式为1:item;2:item |',
    ),
    'ModifyRule' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/rules/{ruleId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18724',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'ruleId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '13469',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ruleId' => 
                  array (
                    'description' => '规则ID。',
                    'type' => 'string',
                    'example' => '98493A14-D619-4E88-9F8D-108939817F9F',
                  ),
                  'ruleMeta' => 
                  array (
                    'description' => '规则的具体信息。',
                    'type' => 'object',
                    'example' => 'xxx',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间。',
                    'type' => 'string',
                    'example' => '2020-04-27T06:38:28.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '规则状态：
**DRAFT:** 草稿状态

**EFFECTIVE:** 生效状态

**PUBLISHING:**发布中状态

**INEFFECTIVE:** 已失效状态

**FAILED:**未生效状态',
                    'type' => 'string',
                    'example' => 'EFFECTIVE',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2020-04-27T06:38:28.000Z',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"ruleId\\": \\"98493A14-D619-4E88-9F8D-108939817F9F\\",\\n    \\"ruleMeta\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"gmtModified\\": \\"2020-04-27T06:38:28.000Z\\",\\n    \\"status\\": \\"EFFECTIVE\\",\\n    \\"gmtCreate\\": \\"2020-04-27T06:38:28.000Z\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'ModifyRule',
      'summary' => '修改规则。',
      'requestParamsDescription' => '```json
// 修改选品规则
{	  "type":"SelectionRule",
    "ruleMeta":{
        "sceneId":"123",
        "ruleMetaType":"SELECTION",
        "selectionParams":[
            {
                "selectType":"QUERY_ITEM_TYPE",
                "selectionOperation":"QUERY_VALUE_IN",
                "selectValue":"[\\"atrical\\",\\"image\\"]"
            }
        ]
    }
}
// 修改运营规则
{
    "type":"OperationRule",
    "ruleMeta":{
        "ruleMetaType":"OPERATION",
        "sceneId":"123",
        "operationParams":[
            {
                "operationType":"MIX",
                "settings":[
                    {
                        "name":"image",
                        "value":10
                    }
                ]
            },
            {
                "operationType":"DIVERSIFY",
                "status":true,
                "diversifyType":"TYPE_SHOP",
                "categoryIndex":1,
                "window":2
            },
            {
                "operationType":"EXPOSURE",
                "exposureSettings":[
                    {
                        "durationSeconds":1234000,
                        "status":true,
                        "exposureType":"TYPE_EXPOSE",
                        "scenarioBased":true
                    },
                    {
                        "durationSeconds":123400,
                        "status":true,
                        "exposureType":"TYPE_CLICK",
                        "scenarioBased":true
                    },
                    {
                        "durationSeconds":3000,
                        "status":true,
                        "exposureType":"TYPE_LOOP",
                        "scenarioBased":false
                    }
                ]
            }
        ]
    }
}
```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListRules' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/rules',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18712',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改规则的场景ID，
如要修改全局运营规则，则填**global**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'scenetest',
          ),
        ),
        2 => 
        array (
          'name' => 'ruleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则类型：
**selection:** 选品规则

**operation:**运营规则。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'selection',
          ),
        ),
        3 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则状态：
**DRAFT:** 草稿状态；

**EFFECTIVE:** 生效状态；

**PUBLISHING:**发布中状态；

**INEFFECTIVE:** 已失效状态；

**FAILED:**未生效状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'EFFECTIVE',
          ),
        ),
        4 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定页码，默认为：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定每页展示条数，默认为10，限制:[1-50]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间（秒级时间戳）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '4102444800',
            'minimum' => '1546300800',
            'example' => '1567584765',
          ),
        ),
        7 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间 （秒级时间戳）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1567584765',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ruleId' => 
                    array (
                      'description' => '规则ID。',
                      'type' => 'string',
                      'example' => '98493A14-D619-4E88-9F8D-108939817F9F',
                    ),
                    'gmtModified' => 
                    array (
                      'description' => '最后修改时间。',
                      'type' => 'string',
                      'example' => '2020-04-27T06:38:28.000Z',
                    ),
                    'status' => 
                    array (
                      'description' => '规则状态：
**DRAFT:** 草稿状态；

**EFFECTIVE:** 生效状态；

**PUBLISHING:**发布中状态；

**INEFFECTIVE:** 已失效状态；

**FAILED:**未生效状态。',
                      'type' => 'string',
                      'example' => 'draft',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-04-27T06:38:28.000Z',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"ruleId\\": \\"98493A14-D619-4E88-9F8D-108939817F9F\\",\\n      \\"gmtModified\\": \\"2020-04-27T06:38:28.000Z\\",\\n      \\"status\\": \\"draft\\",\\n      \\"gmtCreate\\": \\"2020-04-27T06:38:28.000Z\\"\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<0>\\n    <Result>\\n        <Status>DRAFT</Status>\\n        <GmtCreate>2020-04-27T06:38:28.000Z</GmtCreate>\\n        <GmtModified>2020-04-27T06:38:28.000Z</GmtModified>\\n        <RuleId>98493A14-D619-4E88-9F8D-108939817F9F</RuleId>\\n        <RuleMeta>\\n            <RuleMetaType>SELECTION</RuleMetaType>\\n            <SceneId>123</SceneId>\\n            <PubState>PUBLISHING</PubState>\\n            <SelectionParams>\\n                <SelectType>QUERY_ITEM_TYPE</SelectType>\\n                <SelectionOperation>OPERATOR_EQUAL</SelectionOperation>\\n                <SelectValue>atrical,image</SelectValue>\\n            </SelectionParams>\\n        </RuleMeta>\\n    </Result>\\n    <RequestId>76E2C51D-A2D7-4775-9FD8-2AB84B2A0CEF</RequestId>\\n    <Headers>\\n        <X-Total-Count>19</X-Total-Count>\\n    </Headers>\\n</0>\\n<1>\\n    <Result>\\n        <Status>DRAFT</Status>\\n        <GmtCreate>2020-04-27T03:17:21.000Z</GmtCreate>\\n        <GmtModified>2020-04-27T03:17:21.000Z</GmtModified>\\n        <RuleId>123456789001122</RuleId>\\n        <RuleMeta>\\n            <RuleMetaType>OPERATION</RuleMetaType>\\n            <SceneId>123</SceneId>\\n            <PubState>PUBLISHING</PubState>\\n            <OperationParams>\\n                <OperationType>MIX</OperationType>\\n                <Settings>\\n                    <Name>image</Name>\\n                    <Value>10</Value>\\n                </Settings>\\n            </OperationParams>\\n            <OperationParams>\\n                <OperationType>DIVERSIFY</OperationType>\\n                <CategoryIndex>1</CategoryIndex>\\n                <Window>2</Window>\\n                <Status>true</Status>\\n                <DiversifyType>TYPE_SHOP</DiversifyType>\\n            </OperationParams>\\n            <OperationParams>\\n                <OperationType>EXPOSURE</OperationType>\\n                <ExposureSettings>\\n                    <DurationSeconds>1234000</DurationSeconds>\\n                    <Status>true</Status>\\n                    <ExposureType>TYPE_EXPOSE</ExposureType>\\n                    <ScenarioBased>true</ScenarioBased>\\n                </ExposureSettings>\\n                <ExposureSettings>\\n                    <DurationSeconds>123400</DurationSeconds>\\n                    <Status>true</Status>\\n                    <ExposureType>TYPE_CLICK</ExposureType>\\n                    <ScenarioBased>true</ScenarioBased>\\n                </ExposureSettings>\\n            </OperationParams>\\n        </RuleMeta>\\n    </Result>\\n    <RequestId>76E2C51D-A2D7-4775-9FD8-2AB84B2A0CEF</RequestId>\\n    <Headers>\\n        <X-Total-Count>19</X-Total-Count>\\n    </Headers>\\n</1>","errorExample":""}]',
      'title' => '获取规则列表',
      'summary' => '查询规则列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRule' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/rules/{ruleId}',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18687',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'ruleId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '通过规则ID查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '98493A14-D619-4E88-9F8D-108939817F9F',
          ),
        ),
        2 => 
        array (
          'name' => 'sceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'scenetest',
          ),
        ),
        3 => 
        array (
          'name' => 'ruleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则类型：
**selection：**选品规则

**operation：**运营规则

**top：**置顶规则

**fixed：**定坑规则',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'selection',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'ruleId' => 
                  array (
                    'description' => '通过规则ID查询。',
                    'type' => 'string',
                    'example' => '98493A14-D619-4E88-9F8D-108939817F9F',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间。',
                    'type' => 'string',
                    'example' => '2020-04-27T06:38:28.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '规则状态：
**DRAFT:** 草稿状态

**EFFECTIVE:** 生效状态

**PUBLISHING:**发布中状态

**INEFFECTIVE:** 已失效状态

**FAILED:**未生效状态',
                    'type' => 'string',
                    'example' => 'DRAFT',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2020-04-27T06:38:28.000Z',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"ruleId\\": \\"98493A14-D619-4E88-9F8D-108939817F9F\\",\\n    \\"gmtModified\\": \\"2020-04-27T06:38:28.000Z\\",\\n    \\"status\\": \\"DRAFT\\",\\n    \\"gmtCreate\\": \\"2020-04-27T06:38:28.000Z\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <gmtModified/>\\n    <ruleId/>\\n    <gmtCreate/>\\n    <status/>\\n</result>\\n<code/>\\n<requestId/>\\n<message/>","errorExample":""}]',
      'title' => '获取规则信息',
      'summary' => '查询一个规则的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PublishRule' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/rules/{ruleId}/actions/publish',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18727',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecG8RBMT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ruleId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '98493A14-D619-4E88-9F8D-108939817F9F',
          ),
        ),
        1 => 
        array (
          'name' => 'ruleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则类型：
**selection：**选品规则

**operation：**运营规则

**top：**置顶规则

**fixed：**定坑规则',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'selection',
          ),
        ),
        2 => 
        array (
          'name' => 'sceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'ruleId' => 
                  array (
                    'description' => '规则ID。',
                    'type' => 'string',
                    'example' => '98493A14-D619-4E88-9F8D-108939817F9F',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"ruleId\\": \\"98493A14-D619-4E88-9F8D-108939817F9F\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","type":"json"}]',
      'title' => '发布规则',
      'summary' => '发布一个规则。',
    ),
    'CreateScene' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '18669',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun
**true：**校验场景ID是否存在
**false：**默认为false,创建场景。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'sceneId' => 
                  array (
                    'description' => '场景ID。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间。',
                    'type' => 'string',
                    'example' => '2020-04-23T06:08:48.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '场景状态：
- **DRAFT**：唤醒，重新发布
- **PUBLISHING** ：发布
- **RUNNING**：运行中
- **FAILED**：发布失败
- **FROZEN** ：冻结',
                    'type' => 'string',
                    'example' => 'DRAFT',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2020-04-23T06:08:48.000Z',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"sceneId\\": \\"test\\",\\n    \\"gmtModified\\": \\"2020-04-23T06:08:48.000Z\\",\\n    \\"status\\": \\"DRAFT\\",\\n    \\"gmtCreate\\": \\"2020-04-23T06:08:48.000Z\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<sceneId>123</sceneId>\\n<sceneMeta>\\n    <sceneName>sceneTest</sceneName>\\n    <description>xxx</description>\\n</sceneMeta>","errorExample":""}]',
      'title' => '创建场景',
      'summary' => '校验创建场景的信息。',
      'description' => '如需使用场景管理功能，不建议使用API进行操作。请使用控制台中“场景管理”功能，使用详情见官方文档<props="china">：[通过选投策略配置，快速搭建推荐场景](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M)</props>',
    ),
    'DeleteScene' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '18675',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testid',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'sceneId' => 
                  array (
                    'description' => '场景ID。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"sceneId\\": \\"test\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</RequestId>\\n<Result>\\n    <InstanceId>airec-yunchu-test</InstanceId>\\n    <SceneId>1234</SceneId>\\n    <Id>901</Id>\\n    <Type>Scene</Type>\\n    <Status/>\\n    <GmtCreate>1587435971000</GmtCreate>\\n    <GmtModified>1587435971000</GmtModified>\\n    <SceneMeta>\\n        <Description>this is a test scene</Description>\\n        <SceneName>aaa</SceneName>\\n        <Metric>\\n            <Weekly>123</Weekly>\\n            <Daily>12334</Daily>\\n            <PvCtr>123</PvCtr>\\n        </Metric>\\n    </SceneMeta>\\n</Result>","errorExample":""}]',
      'title' => '删除场景',
      'summary' => '删除场景。',
      'description' => '如需使用场景管理功能，不建议使用API进行操作。请使用控制台中“场景管理”功能，使用详情见官方文档<props="china">：[通过选投策略配置，快速搭建推荐场景](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M)</props>',
    ),
    'ModifyScene' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18725',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'sceneId' => 
                  array (
                    'description' => '场景ID。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间。',
                    'type' => 'string',
                    'example' => '2020-04-23T06:08:48.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '场景状态：
- **DRAFT**：唤醒，重新发布
- **PUBLISHING** ：发布
- **RUNNING**：运行中
- **FAILED**：发布失败
- **FROZEN** ：冻结',
                    'type' => 'string',
                    'example' => 'DRAFT',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2020-04-23T06:08:48.000Z',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"sceneId\\": \\"test\\",\\n    \\"gmtModified\\": \\"2020-04-23T06:08:48.000Z\\",\\n    \\"status\\": \\"DRAFT\\",\\n    \\"gmtCreate\\": \\"2020-04-23T06:08:48.000Z\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<Result>\\n    <Status>RUNNING</Status>\\n    <GmtCreate>2020-04-23T06:08:48.000Z</GmtCreate>\\n    <GmtModified>2020-04-23T10:04:24.000Z</GmtModified>\\n    <SceneId>123</SceneId>\\n    <SceneMeta>\\n        <SceneName>xxx</SceneName>\\n        <Description>xxx</Description>\\n    </SceneMeta>\\n</Result>\\n<RequestId>E6535761-3448-4D6E-A791-477531763F29</RequestId>","errorExample":""}]',
      'title' => '修改场景信息',
      'summary' => '修改场景信息。',
      'description' => '如需使用场景管理功能，不建议使用API进行操作。请使用控制台中“场景管理”功能，使用详情见官方文档<props="china">：[通过选投策略配置，快速搭建推荐场景](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M)</props>',
    ),
    'DescribeScene' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18688',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testid',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '场景详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '场景详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'sceneId' => 
                  array (
                    'description' => '场景ID。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改时间。',
                    'type' => 'string',
                    'example' => '2020-04-23T06:08:48.000Z',
                  ),
                  'status' => 
                  array (
                    'description' => '场景状态：
- **DRAFT**：唤醒，重新发布
- **PUBLISHING** ：发布
- **RUNNING**：运行中
- **FAILED**：发布失败
- **FROZEN** ：冻结',
                    'type' => 'string',
                    'example' => 'DRAFT',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2020-04-23T06:08:48.000Z',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"sceneId\\": \\"test\\",\\n    \\"gmtModified\\": \\"2020-04-23T06:08:48.000Z\\",\\n    \\"status\\": \\"DRAFT\\",\\n    \\"gmtCreate\\": \\"2020-04-23T06:08:48.000Z\\"\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<Result>\\n    <Status>DRAFT</Status>\\n    <GmtCreate>2020-04-23T06:08:48.000Z</GmtCreate>\\n    <GmtModified>2020-04-23T06:08:48.000Z</GmtModified>\\n    <SceneId>123</SceneId>\\n    <SceneMeta>\\n        <SceneName>sceneTest</SceneName>\\n        <Description>xxx</Description>\\n        <Metric>\\n            <PvCtr>32</PvCtr>\\n            <Daily>32</Daily>\\n            <Weekly>32</Weekly>\\n        </Metric>\\n    </SceneMeta>\\n</Result>\\n<RequestId>76E2C51D-A2D7-4775-9FD8-2AB84B2A0CEF</RequestId>","errorExample":""}]',
      'title' => '查询场景详情',
      'summary' => '查询场景详情。',
      'description' => '如需使用场景管理功能，不建议使用API进行操作。请使用控制台中“场景管理”功能，使用详情见官方文档<props="china">：[通过选投策略配置，快速搭建推荐场景](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M)</props>',
    ),
    'ListScenes' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18716',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景状态：
- **DRAFT**：唤醒，重新发布
- **PUBLISHING** ：发布
- **RUNNING**：运行中
- **FAILED**：发布失败
- **FROZEN** ：冻结',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'sceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定页码，默认为：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定每页展示条数，默认为10，限制:1-50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'sceneId' => 
                    array (
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'gmtModified' => 
                    array (
                      'description' => '最后修改时间。',
                      'type' => 'string',
                      'example' => '2020-04-23T06:08:48.000Z',
                    ),
                    'status' => 
                    array (
                      'description' => '场景状态：
- **DRAFT**：唤醒，重新发布
- **PUBLISHING** ：发布
- **RUNNING**：运行中
- **FAILED**：发布失败
- **FROZEN** ：冻结',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-04-23T06:08:48.000Z',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"sceneId\\": \\"test\\",\\n      \\"gmtModified\\": \\"2020-04-23T06:08:48.000Z\\",\\n      \\"status\\": \\"1\\",\\n      \\"gmtCreate\\": \\"2020-04-23T06:08:48.000Z\\"\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<Result>\\n    <Status>DRAFT</Status>\\n    <GmtCreate>2020-04-23T06:08:48.000Z</GmtCreate>\\n    <GmtModified>2020-04-23T06:08:48.000Z</GmtModified>\\n    <SceneId>123</SceneId>\\n    <SceneMeta>\\n        <SceneName>sceneTest</SceneName>\\n        <Description>xxx</Description>\\n        <Metric>\\n            <PvCtr>32</PvCtr>\\n            <Daily>32</Daily>\\n            <Weekly>32</Weekly>\\n        </Metric>\\n    </SceneMeta>\\n</Result>\\n<RequestId>0D532E4F-899E-4A59-96B8-C7843A286A53</RequestId>","errorExample":""}]',
      'title' => '查询场景列表',
      'summary' => '查询场景列表。',
      'description' => '如需使用场景管理功能，不建议使用API进行操作。请使用控制台中“场景管理”功能，使用详情见官方文档<props="china">：[通过选投策略配置，快速搭建推荐场景](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M)</props>',
    ),
    'CreateCustomSample' => 
    array (
      'summary' => '创建自定义样本。',
      'path' => '/v2/openapi/instances/{instanceId}/samples',
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
        'abilityTreeCode' => '117123',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-xxx',
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
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '返回结果详情。',
                '$ref' => '#/components/schemas/Sample',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"样本状态 Unready 未完成配置 \\\\u0000Ready   配置完成 \\\\u0000Generating 样本生成中 \\\\u0000Success  样本生成成功 \\\\u0000Failed 样本生成失败 \\\\u0000Formatting 格式化中 \\\\u0000Formatted 格式化完成 \\\\u0000FormatFailed 格式化失败 \\\\u0000Applied 已应用到模型中\\",\\n    \\"Meta\\": {\\n      \\"AutoUpdate\\": true,\\n      \\"AutoUpdateFrequency\\": 86400,\\n      \\"ClonedId\\": \\"1638877561147\\",\\n      \\"Config\\": {\\n        \\"BhvTableSourceIds\\": [\\n          \\"\\"\\n        ],\\n        \\"FeatureConfig\\": {\\n          \\"ItemFeatures\\": \\"物品特征，支持多值，逗号分隔。\\",\\n          \\"UserFeatures\\": \\"用户特征，支持多值，逗号分隔。\\"\\n        },\\n        \\"LabelLogic\\": {\\n          \\"BhvTimeWindow\\": 86400,\\n          \\"NegativeBhvTypes\\": \\"click,expose\\",\\n          \\"PositiveBhvTypes\\": \\"like\\"\\n        },\\n        \\"WeightLogicList\\": [\\n          {\\n            \\"Bhv\\": \\"click\\",\\n            \\"Weight\\": \\"1.01\\"\\n          }\\n        ]\\n      },\\n      \\"ExtendParams\\": {\\n        \\"LatestTaskStatus\\": 0,\\n        \\"SampleCount\\": 0\\n      },\\n      \\"MetaType\\": \\"Sample\\",\\n      \\"Name\\": \\"12345\\",\\n      \\"StoreConfig\\": \\"projectName.tableName\\",\\n      \\"Type\\": \\"Cloned 复制的 System 系统的 Custom 自定义的\\"\\n    },\\n    \\"GmtCreate\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"SampleId\\": \\"1638880131873\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建自定义样本',
    ),
    'CreateSampleFormatConfig' => 
    array (
      'summary' => '创建样本格式化配置。',
      'path' => '/v2/openapi/instances/{instanceId}/samples/{sampleId}/format-configs',
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
        'abilityTreeCode' => '117132',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-****',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '样本id',
            'description' => '样本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'Sample1',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{
    "type": "SampleFormatConfig",
    "meta": {
        "metaType": "SampleFormatConfig",
        "config": {
            "features": [
                {
                    "feature_type": "id_feature",
                    "value_type": "String",
                    "hash_bucket_size": 100000,
                    "expression": "user:user_id",
                    "feature_name": "user_id",
                    "embedding_dim": 16,
                    "combiner": "mean",
                    "group": "user"
                },
                {
                    "feature_type": "id_feature",
                    "value_type": "String",
                    "hash_bucket_size": 100,
                    "expression": "user:cms_segid",
                    "feature_name": "cms_segid",
                    "embedding_dim": 16,
                    "combiner": "mean",
                    "group": "user"
                },
                {
                    "feature_type": "id_feature",
                    "value_type": "String",
                    "hash_bucket_size": 100,
                    "expression": "user:cms_group_id",
                    "feature_name": "cms_group_id",
                    "embedding_dim": 16,
                    "combiner": "mean",
                    "group": "user"
                },
                {
                    "feature_type": "combo_feature",
                    "hash_bucket_size": 10,
                    "expression": [
                        "user:pvalue_level",
                        "item:brand"
                    ],
                    "feature_name": "combo__pvalue_level_brand",
                    "embedding_dim": 16,
                    "group": "combo"
                }
            ]
        }
    }
}',
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
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => '格式化配置详情。',
                'type' => 'object',
                'example' => '{
    "result": {
        "meta": {
            "metaType": "SampleFormatConfig",
            "sampleId": "Sample1",
            "config": {
                "features": [
                    {
                        "feature_type": "id_feature",
                        "value_type": "String",
                        "hash_bucket_size": 100000,
                        "expression": "user:user_id",
                        "feature_name": "user_id",
                        "embedding_dim": 16,
                        "combiner": "mean",
                        "group": "user"
                    }
                ]
            }
        },
        "status": "",
        "gmtCreate": "2021-12-07T08:58:19.000Z",
        "gmtModified": "2021-12-07T08:58:19.000Z",
        "sampleFormatConfigId": "99D369F6-0A73-4247-9E9F-F693A16CD6AC"
    }
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"result\\": {\\n      \\"meta\\": {\\n        \\"metaType\\": \\"SampleFormatConfig\\",\\n        \\"sampleId\\": \\"Sample1\\",\\n        \\"config\\": {\\n          \\"features\\": [\\n            {\\n              \\"feature_type\\": \\"id_feature\\",\\n              \\"value_type\\": \\"String\\",\\n              \\"hash_bucket_size\\": 100000,\\n              \\"expression\\": \\"user:user_id\\",\\n              \\"feature_name\\": \\"user_id\\",\\n              \\"embedding_dim\\": 16,\\n              \\"combiner\\": \\"mean\\",\\n              \\"group\\": \\"user\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"status\\": \\"\\",\\n      \\"gmtCreate\\": \\"2021-12-07T08:58:19.000Z\\",\\n      \\"gmtModified\\": \\"2021-12-07T08:58:19.000Z\\",\\n      \\"sampleFormatConfigId\\": \\"99D369F6-0A73-4247-9E9F-F693A16CD6AC\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '创建样本格式化配置',
      'responseParamsDescription' => '| 参数 | 类型 | 是否必需 | 描述 |
| :--- | :--- | :--- | :--- |
| meta|String|是|Meta源数据。|
| metaType|String|是|SampleFormatConfig固定字符串。|
| sampleId|String|是|样本ID。|
| config|Object|是|配置列表。|
| features|List|是|配置信息。|
| feature_type|String|是|特征类型。|
| value_type|String|否|返回值类型。|
| hash_bucket_size|Integer|否|哈希桶大小。|
| expression|String|否|特征表字段名数组。|
| feature_name|String|否|特征名。|
| embedding_dim|Integer|否|embedding维数。|
| combiner|String|否|组合器名称。|
| group|String|否|特征组名。|',
    ),
    'DeleteSample' => 
    array (
      'summary' => '删除样本。',
      'path' => '/v2/openapi/instances/{instanceId}/samples/{sampleId}',
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
        'abilityTreeCode' => '117130',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '样本id',
            'description' => '样本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'Sample1',
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
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '返回结果详情。',
                '$ref' => '#/components/schemas/Sample',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"样本状态 Unready 未完成配置 \\\\u0000Ready   配置完成 \\\\u0000Generating 样本生成中 \\\\u0000Success  样本生成成功 \\\\u0000Failed 样本生成失败 \\\\u0000Formatting 格式化中 \\\\u0000Formatted 格式化完成 \\\\u0000FormatFailed 格式化失败 \\\\u0000Applied 已应用到模型中\\",\\n    \\"Meta\\": {\\n      \\"AutoUpdate\\": true,\\n      \\"AutoUpdateFrequency\\": 86400,\\n      \\"ClonedId\\": \\"1638877561147\\",\\n      \\"Config\\": {\\n        \\"BhvTableSourceIds\\": [\\n          \\"\\"\\n        ],\\n        \\"FeatureConfig\\": {\\n          \\"ItemFeatures\\": \\"物品特征，支持多值，逗号分隔。\\",\\n          \\"UserFeatures\\": \\"用户特征，支持多值，逗号分隔。\\"\\n        },\\n        \\"LabelLogic\\": {\\n          \\"BhvTimeWindow\\": 86400,\\n          \\"NegativeBhvTypes\\": \\"click,expose\\",\\n          \\"PositiveBhvTypes\\": \\"like\\"\\n        },\\n        \\"WeightLogicList\\": [\\n          {\\n            \\"Bhv\\": \\"click\\",\\n            \\"Weight\\": \\"1.01\\"\\n          }\\n        ]\\n      },\\n      \\"ExtendParams\\": {\\n        \\"LatestTaskStatus\\": 0,\\n        \\"SampleCount\\": 0\\n      },\\n      \\"MetaType\\": \\"Sample\\",\\n      \\"Name\\": \\"12345\\",\\n      \\"StoreConfig\\": \\"projectName.tableName\\",\\n      \\"Type\\": \\"Cloned 复制的 System 系统的 Custom 自定义的\\"\\n    },\\n    \\"GmtCreate\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"SampleId\\": \\"1638880131873\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除样本',
    ),
    'ModifySample' => 
    array (
      'summary' => '修改样本配置。',
      'path' => '/v2/openapi/instances/{instanceId}/samples/{sampleId}',
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
        'abilityTreeCode' => '117127',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '样本id',
            'description' => '样本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'Sample1',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body参数。',
            'type' => 'object',
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
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/Sample',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"样本状态 Unready 未完成配置 \\\\u0000Ready   配置完成 \\\\u0000Generating 样本生成中 \\\\u0000Success  样本生成成功 \\\\u0000Failed 样本生成失败 \\\\u0000Formatting 格式化中 \\\\u0000Formatted 格式化完成 \\\\u0000FormatFailed 格式化失败 \\\\u0000Applied 已应用到模型中\\",\\n    \\"Meta\\": {\\n      \\"AutoUpdate\\": true,\\n      \\"AutoUpdateFrequency\\": 86400,\\n      \\"ClonedId\\": \\"1638877561147\\",\\n      \\"Config\\": {\\n        \\"BhvTableSourceIds\\": [\\n          \\"\\"\\n        ],\\n        \\"FeatureConfig\\": {\\n          \\"ItemFeatures\\": \\"物品特征，支持多值，逗号分隔。\\",\\n          \\"UserFeatures\\": \\"用户特征，支持多值，逗号分隔。\\"\\n        },\\n        \\"LabelLogic\\": {\\n          \\"BhvTimeWindow\\": 86400,\\n          \\"NegativeBhvTypes\\": \\"click,expose\\",\\n          \\"PositiveBhvTypes\\": \\"like\\"\\n        },\\n        \\"WeightLogicList\\": [\\n          {\\n            \\"Bhv\\": \\"click\\",\\n            \\"Weight\\": \\"1.01\\"\\n          }\\n        ]\\n      },\\n      \\"ExtendParams\\": {\\n        \\"LatestTaskStatus\\": 0,\\n        \\"SampleCount\\": 0\\n      },\\n      \\"MetaType\\": \\"Sample\\",\\n      \\"Name\\": \\"12345\\",\\n      \\"StoreConfig\\": \\"projectName.tableName\\",\\n      \\"Type\\": \\"Cloned 复制的 System 系统的 Custom 自定义的\\"\\n    },\\n    \\"GmtCreate\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"SampleId\\": \\"1638880131873\\"\\n  }\\n}","type":"json"}]',
      'title' => '修改样本配置',
    ),
    'ListSamples' => 
    array (
      'summary' => '获取样本列表。',
      'path' => '/v2/openapi/instances/{instanceId}/samples',
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
        'abilityTreeCode' => '117124',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '指定的实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '样本id',
            'description' => '样本id',
            'type' => 'string',
            'required' => false,
            'example' => 'Sample1',
          ),
        ),
        2 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，页码',
            'description' => '分页，页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，大小',
            'description' => '分页，大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'title' => 'result',
                'description' => '样本列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果详情',
                  '$ref' => '#/components/schemas/Sample',
                ),
                'example' => 'result',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": [\\n    {\\n      \\"Status\\": \\"样本状态 Unready 未完成配置 \\\\u0000Ready   配置完成 \\\\u0000Generating 样本生成中 \\\\u0000Success  样本生成成功 \\\\u0000Failed 样本生成失败 \\\\u0000Formatting 格式化中 \\\\u0000Formatted 格式化完成 \\\\u0000FormatFailed 格式化失败 \\\\u0000Applied 已应用到模型中\\",\\n      \\"Meta\\": {\\n        \\"AutoUpdate\\": true,\\n        \\"AutoUpdateFrequency\\": 86400,\\n        \\"ClonedId\\": \\"1638877561147\\",\\n        \\"Config\\": {\\n          \\"BhvTableSourceIds\\": [\\n            \\"\\"\\n          ],\\n          \\"FeatureConfig\\": {\\n            \\"ItemFeatures\\": \\"物品特征，支持多值，逗号分隔。\\",\\n            \\"UserFeatures\\": \\"用户特征，支持多值，逗号分隔。\\"\\n          },\\n          \\"LabelLogic\\": {\\n            \\"BhvTimeWindow\\": 86400,\\n            \\"NegativeBhvTypes\\": \\"click,expose\\",\\n            \\"PositiveBhvTypes\\": \\"like\\"\\n          },\\n          \\"WeightLogicList\\": [\\n            {\\n              \\"Bhv\\": \\"click\\",\\n              \\"Weight\\": \\"1.01\\"\\n            }\\n          ]\\n        },\\n        \\"ExtendParams\\": {\\n          \\"LatestTaskStatus\\": 0,\\n          \\"SampleCount\\": 0\\n        },\\n        \\"MetaType\\": \\"Sample\\",\\n        \\"Name\\": \\"12345\\",\\n        \\"StoreConfig\\": \\"projectName.tableName\\",\\n        \\"Type\\": \\"Cloned 复制的 System 系统的 Custom 自定义的\\"\\n      },\\n      \\"GmtCreate\\": \\"2021-12-07T12:28:52.000Z\\",\\n      \\"GmtModified\\": \\"2021-12-07T12:28:52.000Z\\",\\n      \\"SampleId\\": \\"1638880131873\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取样本列表',
    ),
    'GetSample' => 
    array (
      'summary' => '获取样本详情。',
      'path' => '/v2/openapi/instances/{instanceId}/samples/{sampleId}',
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
        'abilityTreeCode' => '117125',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '样本id',
            'description' => '样本ID。',
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'withExtendParmas',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否携带扩展参数',
            'description' => '是否携带扩展参数

- **true**：有扩展参数

- **false**：没有扩展参数',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/Sample',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"样本状态 Unready 未完成配置 \\\\u0000Ready   配置完成 \\\\u0000Generating 样本生成中 \\\\u0000Success  样本生成成功 \\\\u0000Failed 样本生成失败 \\\\u0000Formatting 格式化中 \\\\u0000Formatted 格式化完成 \\\\u0000FormatFailed 格式化失败 \\\\u0000Applied 已应用到模型中\\",\\n    \\"Meta\\": {\\n      \\"AutoUpdate\\": true,\\n      \\"AutoUpdateFrequency\\": 86400,\\n      \\"ClonedId\\": \\"1638877561147\\",\\n      \\"Config\\": {\\n        \\"BhvTableSourceIds\\": [\\n          \\"\\"\\n        ],\\n        \\"FeatureConfig\\": {\\n          \\"ItemFeatures\\": \\"物品特征，支持多值，逗号分隔。\\",\\n          \\"UserFeatures\\": \\"用户特征，支持多值，逗号分隔。\\"\\n        },\\n        \\"LabelLogic\\": {\\n          \\"BhvTimeWindow\\": 86400,\\n          \\"NegativeBhvTypes\\": \\"click,expose\\",\\n          \\"PositiveBhvTypes\\": \\"like\\"\\n        },\\n        \\"WeightLogicList\\": [\\n          {\\n            \\"Bhv\\": \\"click\\",\\n            \\"Weight\\": \\"1.01\\"\\n          }\\n        ]\\n      },\\n      \\"ExtendParams\\": {\\n        \\"LatestTaskStatus\\": 0,\\n        \\"SampleCount\\": 0\\n      },\\n      \\"MetaType\\": \\"Sample\\",\\n      \\"Name\\": \\"12345\\",\\n      \\"StoreConfig\\": \\"projectName.tableName\\",\\n      \\"Type\\": \\"Cloned 复制的 System 系统的 Custom 自定义的\\"\\n    },\\n    \\"GmtCreate\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"SampleId\\": \\"1638880131873\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取样本详情',
    ),
    'CloneSample' => 
    array (
      'summary' => '复制创建样本。',
      'path' => '/v2/openapi/instances/{instanceId}/samples/{sampleId}/actions/clone',
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
        'operationType' => 'create',
        'abilityTreeCode' => '117122',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '样本id',
            'description' => '样本id',
            'type' => 'string',
            'required' => true,
            'example' => 'abc',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '样本',
                '$ref' => '#/components/schemas/Sample',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"样本状态 Unready 未完成配置 \\\\u0000Ready   配置完成 \\\\u0000Generating 样本生成中 \\\\u0000Success  样本生成成功 \\\\u0000Failed 样本生成失败 \\\\u0000Formatting 格式化中 \\\\u0000Formatted 格式化完成 \\\\u0000FormatFailed 格式化失败 \\\\u0000Applied 已应用到模型中\\",\\n    \\"Meta\\": {\\n      \\"AutoUpdate\\": true,\\n      \\"AutoUpdateFrequency\\": 86400,\\n      \\"ClonedId\\": \\"1638877561147\\",\\n      \\"Config\\": {\\n        \\"BhvTableSourceIds\\": [\\n          \\"\\"\\n        ],\\n        \\"FeatureConfig\\": {\\n          \\"ItemFeatures\\": \\"物品特征，支持多值，逗号分隔。\\",\\n          \\"UserFeatures\\": \\"用户特征，支持多值，逗号分隔。\\"\\n        },\\n        \\"LabelLogic\\": {\\n          \\"BhvTimeWindow\\": 86400,\\n          \\"NegativeBhvTypes\\": \\"click,expose\\",\\n          \\"PositiveBhvTypes\\": \\"like\\"\\n        },\\n        \\"WeightLogicList\\": [\\n          {\\n            \\"Bhv\\": \\"click\\",\\n            \\"Weight\\": \\"1.01\\"\\n          }\\n        ]\\n      },\\n      \\"ExtendParams\\": {\\n        \\"LatestTaskStatus\\": 0,\\n        \\"SampleCount\\": 0\\n      },\\n      \\"MetaType\\": \\"Sample\\",\\n      \\"Name\\": \\"12345\\",\\n      \\"StoreConfig\\": \\"projectName.tableName\\",\\n      \\"Type\\": \\"Cloned 复制的 System 系统的 Custom 自定义的\\"\\n    },\\n    \\"GmtCreate\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-07T12:28:52.000Z\\",\\n    \\"SampleId\\": \\"1638880131873\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '复制创建样本',
    ),
    'GenerateSample' => 
    array (
      'summary' => '生成样本，只针对复制创建的样本。',
      'path' => '/v2/openapi/instances/{instanceId}/samples/{sampleId}/actions/generate',
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
        'operationType' => 'create',
        'abilityTreeCode' => '117131',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
            'title' => 'A short description of struct',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '样本ID',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'title' => '样本id',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/Sample',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<result>\\n    <meta>\\n        <metaType>Sample</metaType>\\n        <name>asbdfs</name>\\n        <type>System</type>\\n        <autoUpdate>true</autoUpdate>\\n        <autoUpdateFrequency>86000</autoUpdateFrequency>\\n        <storeConfig>project.table</storeConfig>\\n        <extendParams>\\n            <sampleCount>0</sampleCount>\\n            <latestTaskStatus/>\\n        </extendParams>\\n        <config>\\n            <bhvTableSourceIds>id1</bhvTableSourceIds>\\n            <bhvTableSourceIds>id2</bhvTableSourceIds>\\n            <labelLogic>\\n                <positiveBhvTypes>like,expose</positiveBhvTypes>\\n                <negativeBhvTypes>click,expose</negativeBhvTypes>\\n                <bhvTimeWindow>86400</bhvTimeWindow>\\n            </labelLogic>\\n            <weightLogicList>\\n                <bhv>click</bhv>\\n                <weight>2</weight>\\n            </weightLogicList>\\n            <featureConfig>\\n                <userFeatures>use1,use2</userFeatures>\\n                <itemFeatures>item1,item2</itemFeatures>\\n            </featureConfig>\\n        </config>\\n    </meta>\\n    <status>Generating</status>\\n    <gmtCreate>2021-12-07T11:46:02.000Z</gmtCreate>\\n    <gmtModified>2021-12-07T11:46:02.000Z</gmtModified>\\n    <sampleId>1638877561147</sampleId>\\n</result>\\n<requestId>936BE457-5D14-4DBD-85AE-176F7BA8D96D</requestId>","errorExample":""}]',
      'title' => '生成样本',
    ),
    'CreateCustomAnalysisTask' => 
    array (
      'summary' => '创建自定义分析任务。',
      'path' => '/v2/openapi/instances/{instanceId}/dashboard/custom-analysis-tasks',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '36672',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询类型 。
如：
**ITEM_CUSTOM**：物品维度自定义分析。',
            'type' => 'string',
            'required' => true,
            'example' => 'ITEM_CUSTOM',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-xxx',
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
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16B78383-2803-4964-9605-37B30C073B0E',
              ),
              'code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'result' => 
              array (
                'description' => '创建任务的ID。',
                'type' => 'object',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"16B78383-2803-4964-9605-37B30C073B0E\\",\\n  \\"code\\": \\"200\\",\\n  \\"message\\": \\"success\\",\\n  \\"result\\": 123\\n}","errorExample":""},{"type":"xml","example":"<requestId>16B78383-2803-4964-9605-37B30C073B0E</requestId>\\n<result>\\n    <taskId>latest</taskId>\\n</result>","errorExample":""}]',
      'title' => '创建自定义分析任务',
    ),
    'AttachIndexVersion' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}/index-versions/{versionId}/actions/attach',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18662',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '召回配置ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'versionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引版本ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '是否切换成功。
**TRUE**：是。
**FALSE**：否。',
                'type' => 'boolean',
                'example' => 'TRUE',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E63A27A4-3411-4910-B7D5-12EEAC19389B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"E63A27A4-3411-4910-B7D5-12EEAC19389B\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'AttachIndexVersion',
      'summary' => '把指定版本的索引切换到线上。',
    ),
    'ModifyDataSource' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dataSources/{tableName}',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18719',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '要修改数据源的数据表名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'behavior',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果详情。',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'gmtModified' => 
                  array (
                    'description' => '最后修改数据源的时间。
',
                    'type' => 'string',
                    'example' => '2020-04-23T06:08:48.000Z',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建时间的时间戳。',
                    'type' => 'string',
                    'example' => '2018-12-07T02:24:26.000Z',
                  ),
                  'tableName' => 
                  array (
                    'description' => '智能推荐的实例的表名。
',
                    'type' => 'string',
                    'example' => 'behavior',
                  ),
                  'meta' => 
                  array (
                    'description' => '数据源配置参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'bucketName' => 
                      array (
                        'description' => 'oss数据源的bucketName信息。',
                        'type' => 'string',
                        'example' => 'airec',
                      ),
                      'accessKeyId' => 
                      array (
                        'description' => '有访问ODPS权限的accesskey ID。
',
                        'type' => 'string',
                        'example' => 'xxx',
                      ),
                      'type' => 
                      array (
                        'description' => '数据源类型，当前只支持ODPS。
',
                        'type' => 'string',
                        'example' => 'ODPS',
                      ),
                      'partition' => 
                      array (
                        'description' => 'ODPS Partition。例如：ds=20180102。',
                        'type' => 'string',
                        'example' => 'ds=20181122',
                      ),
                      'timestamp' => 
                      array (
                        'description' => 'ODPS 毫秒数据时间戳。例如：1544112000000。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1544112000000',
                      ),
                      'path' => 
                      array (
                        'description' => 'oss数据源的信息。',
                        'type' => 'string',
                        'example' => 'oss://xxx.xxx',
                      ),
                      'tableName' => 
                      array (
                        'description' => 'ODPS 数据源的table name。',
                        'type' => 'string',
                        'example' => 'table01',
                      ),
                      'projectName' => 
                      array (
                        'description' => 'ODPS数据源的 project name。',
                        'type' => 'string',
                        'example' => 'airecproject',
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情。',
                'type' => 'string',
                'example' => 'successful',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"gmtModified\\": \\"2020-04-23T06:08:48.000Z\\",\\n    \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n    \\"tableName\\": \\"behavior\\",\\n    \\"meta\\": {\\n      \\"bucketName\\": \\"airec\\",\\n      \\"accessKeyId\\": \\"xxx\\",\\n      \\"type\\": \\"ODPS\\",\\n      \\"partition\\": \\"ds=20181122\\",\\n      \\"timestamp\\": 1544112000000,\\n      \\"path\\": \\"oss://xxx.xxx\\",\\n      \\"tableName\\": \\"table01\\",\\n      \\"projectName\\": \\"airecproject\\"\\n    }\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"successful\\"\\n}","type":"json"}]',
      'title' => '修改指定实例的指定数据源信息',
      'summary' => '修改指定表的数据源信息。',
    ),
    'ModifyFeatureTable' => 
    array (
      'summary' => '修改特征表，只支表级别持特征列表的全量修改。',
      'path' => '/v2/openapi/instances/{instanceId}/feature-tables/{type}/{featureTableId}',
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
        'abilityTreeCode' => '117111',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征表类型',
            'description' => '特征表类型
UserFeatureTable
ItemFeatureTable',
            'type' => 'string',
            'required' => true,
            'example' => 'UserFeatureTable',
          ),
        ),
        2 => 
        array (
          'name' => 'featureTableId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征表id',
            'description' => '特征表id',
            'type' => 'string',
            'required' => true,
            'example' => '123',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/FeatureTable',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"\\",\\n    \\"Meta\\": {\\n      \\"DataSourceId\\": \\"907648f5-abae-44fd-a4c4-525cc25947e9\\",\\n      \\"FeatureList\\": [\\n        {\\n          \\"Comment\\": \\"com11\\",\\n          \\"FeatureName\\": \\"fn11\\",\\n          \\"FieldName\\": \\"fieldName11\\",\\n          \\"Status\\": \\"NotApplied 未应用 Applied 已应用\\"\\n        }\\n      ],\\n      \\"Internal\\": true,\\n      \\"MetaType\\": \\"FeatureTable\\",\\n      \\"Source\\": \\"test_project.test_table\\",\\n      \\"UpdateFrequency\\": 86400\\n    },\\n    \\"FeatureTableId\\": \\"30E70118-FC7C-4438-9287-583CE47266A9\\",\\n    \\"Type\\": \\"ItemFeatureTable 物品特征表 UserFeatureTable 用户特征表\\",\\n    \\"GmtCreate\\": \\"2021-12-10T02:59:54.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-10T02:59:54.000Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <type>ItemFeatureTable</type>\\n    <meta>\\n        <metaType>FeatureTable</metaType>\\n        <dataSourceId>907648f5-abae-44fd-a4c4-525cc25947e9</dataSourceId>\\n        <source>project_name.table</source>\\n        <updateFrequency>86400</updateFrequency>\\n        <featureList>\\n            <fieldName>fieldName11</fieldName>\\n            <featureName>fn11</featureName>\\n            <comment>com11</comment>\\n        </featureList>\\n        <featureList>\\n            <fieldName>fieldName22</fieldName>\\n            <featureName>fn22</featureName>\\n            <comment>com2222</comment>\\n        </featureList>\\n    </meta>\\n    <status/>\\n    <gmtCreate>2021-12-10T02:59:54.000Z</gmtCreate>\\n    <gmtModified>2021-12-10T02:59:54.000Z</gmtModified>\\n    <featureTableId>30E70118-FC7C-4438-9287-583CE47266A9</featureTableId>\\n</result>\\n<requestId>15847E8B-F00E-44AD-8FD0-26E1B0F4A0A6</requestId>","errorExample":""}]',
      'title' => '修改特征表',
    ),
    'ModifyItems' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/items',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18722',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '成功，失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'requestId' => 
              array (
                'description' => '返回的RequestId',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\"\\n}","type":"json"}]',
      'title' => '修改项目',
      'summary' => '批量操作物品池。',
    ),
    'ModifyOfflineStorages' => 
    array (
      'summary' => '修改实例的离线存储配置。（只支持三张表同时修改）。',
      'path' => '/v2/openapi/instances/[instanceId]/offlineStorages',
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
        'operationType' => 'update',
        'abilityTreeCode' => '20403',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test-xxx',
            'title' => '实例id',
            'format' => 'byte',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '7F176EE8-51DA-4B4D-8FFE-04448CD7A171',
                'title' => 'Id of the request',
                'format' => 'byte',
              ),
              'result' => 
              array (
                'description' => '结果',
                'type' => 'boolean',
                'example' => 'true',
                'title' => '是否成功',
              ),
            ),
            'title' => 'Schema of Response',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"7F176EE8-51DA-4B4D-8FFE-04448CD7A171\\",\\n  \\"result\\": true\\n}","errorExample":""},{"type":"xml","example":"<result>true</result>\\n<requestId>7F176EE8-51DA-4B4D-8FFE-04448CD7A171</requestId>","errorExample":""}]',
      'title' => '修改实例的离线存储配置',
    ),
    'StopDataSet' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dataSets/{versionId}/actions/stop',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18740',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'versionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '20181023214546',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '数据集详情
',
                'type' => 'object',
                'properties' => 
                array (
                  'versionId' => 
                  array (
                    'description' => '版本号
',
                    'type' => 'string',
                    'example' => '20181023214546',
                  ),
                  'state' => 
                  array (
                    'description' => '数据版本状态（Importing：导入中）
',
                    'type' => 'string',
                    'example' => 'Importing',
                  ),
                  'gmtModified' => 
                  array (
                    'description' => '最后修改数据源的时间。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1544112000000',
                  ),
                  'gmtCreate' => 
                  array (
                    'description' => '创建数据源的时间。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1544112000000',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID。
',
                    'type' => 'string',
                    'example' => 'airec-cn-o400whm78004',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"message\\": \\"An internal server error occurred\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"result\\": {\\n    \\"versionId\\": \\"20181023214546\\",\\n    \\"state\\": \\"Importing\\",\\n    \\"gmtModified\\": 1544112000000,\\n    \\"gmtCreate\\": 1544112000000,\\n    \\"instanceId\\": \\"airec-cn-o400whm78004\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8F81A922-6C81-46D6-B78C-CC35E16B1691</RequestId>\\n<Result>\\n    <InstanceId>airec-cn-xxxxx</InstanceId>\\n    <VersionId>20181023214546</VersionId>\\n    <State>Importing</State>\\n    <GmtCreate>1537531932000</GmtCreate>\\n    <GmtModified>1537531932000</GmtModified>\\n</Result>","errorExample":""}]',
      'title' => '停止数据集',
      'summary' => '停止指定实例的指定数据集版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCustomAnalysisTask' => 
    array (
      'summary' => '查询指定实例的仪表盘自定义分析任务结果。',
      'path' => '/v2/openapi/instances/{instanceId}/dashboard/custom-analysis-tasks/{taskId}',
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
        'abilityTreeCode' => '36674',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
              ),
              'result' => 
              array (
                'type' => 'object',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"\\",\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"code\\": \\"\\",\\n  \\"message\\": \\"\\"\\n}","type":"json"}]',
      'title' => '查询指定实例的仪表盘自定义分析任务结果',
    ),
    'DescribeDefaultAlgorithms' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/default-algorithms',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18678',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-xxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'description' => '算法key
I2I   I2I召回链路
u2X2I    U2X2I召回链路
hot  热门商品召回链路
new    新品召回链路
embedding    向量召回链路
mtorder    召回链路优先级
rankservice    排序服务',
                      'type' => 'string',
                      'example' => 'I2I',
                    ),
                    'config' => 
                    array (
                      'description' => '实验定制值',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '子配置项信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'key' => 
                          array (
                            'description' => '算法配置项key',
                            'type' => 'string',
                            'example' => 'I2I-truncedquantity',
                          ),
                          'defaultValue' => 
                          array (
                            'description' => '算法配置项默认值',
                            'type' => 'string',
                            'example' => 'swing;commoni2i;pcategory;scategory',
                          ),
                          'experimentValue' => 
                          array (
                            'description' => '算法配置项实验值',
                            'type' => 'string',
                            'example' => '300',
                          ),
                          'name' => 
                          array (
                            'description' => '算法配置项name
（说明：系统默认算法，控制台需要通过美杜莎获取，用户自定义算法，后端会返回name）',
                            'type' => 'string',
                            'example' => 'I2I算法',
                          ),
                        ),
                      ),
                    ),
                    'defaultValue' => 
                    array (
                      'description' => '算法默认值
对于i2i,hot,new等召回算法为"true"/"false"
对于mtorder为各路召回链路的排序',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'type' => 
                    array (
                      'description' => '算法类别
SYSTEM 系统默认类型
CUSTOM 用户自定义类型',
                      'type' => 'string',
                      'example' => 'SYSTEM',
                    ),
                    'experimentValue' => 
                    array (
                      'description' => '实验定制值',
                      'type' => 'string',
                      'example' => '300',
                    ),
                    'hasConfig' => 
                    array (
                      'description' => '是否有子配置项
true  是
false  否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'category' => 
                    array (
                      'description' => '算法类目
RECALL  召回
RANK  排序',
                      'type' => 'string',
                      'example' => 'RECALL',
                    ),
                    'name' => 
                    array (
                      'description' => '名称（说明：系统默认算法，控制台需要通过美杜莎获取，用户自定义算法，后端会返回name）',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => 'F60021C4-57AF-5F46-9B3E-FCEF1C7A1459',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"key\\": \\"I2I\\",\\n      \\"config\\": [\\n        {\\n          \\"key\\": \\"I2I-truncedquantity\\",\\n          \\"defaultValue\\": \\"swing;commoni2i;pcategory;scategory\\",\\n          \\"experimentValue\\": \\"300\\",\\n          \\"name\\": \\"I2I算法\\"\\n        }\\n      ],\\n      \\"defaultValue\\": \\"true\\",\\n      \\"type\\": \\"SYSTEM\\",\\n      \\"experimentValue\\": \\"300\\",\\n      \\"hasConfig\\": true,\\n      \\"category\\": \\"RECALL\\",\\n      \\"name\\": \\"xxx\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"F60021C4-57AF-5F46-9B3E-FCEF1C7A1459\\"\\n}","type":"json"}]',
      'title' => '获取默认算法信息',
      'summary' => '获取默认算法信息。',
    ),
    'DescribeLatestTask' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}/tasks/latest',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18684',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定的召回ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '召回表信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '召回表信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'code' => 
                    array (
                      'description' => '错误码',
                      'type' => 'string',
                      'example' => '400',
                    ),
                    'switchedTime' => 
                    array (
                      'description' => '索引切换完成时间，为UTC时间',
                      'type' => 'string',
                      'example' => '2020-11-08T02:00:00Z',
                    ),
                    'rollbackEnabled' => 
                    array (
                      'description' => '是否可以回滚',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'message' => 
                    array (
                      'description' => '错误信息',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'flowType' => 
                    array (
                      'description' => '任务类型，包含 Auto Manual Rollback ',
                      'type' => 'string',
                      'example' => 'Manual',
                    ),
                    'costSeconds' => 
                    array (
                      'description' => '索引构建耗时',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'builtTime' => 
                    array (
                      'description' => '索引开始构建时间，为UTC时间',
                      'type' => 'string',
                      'example' => '2020-11-08T02:00:00Z',
                    ),
                    'versionId' => 
                    array (
                      'description' => '索引版本的版本号，后端生成',
                      'type' => 'string',
                      'example' => '20102010211',
                    ),
                    'size' => 
                    array (
                      'description' => '索引构建大小',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2938475566',
                    ),
                    'status' => 
                    array (
                      'description' => '索引状态，包含索引：

- 失败(failed)
- 生效中(online)
- 已失效（offline）

全量任务：

- 全量中（pending  ）
- 已完成（success）
- 失败(failed) 

等',
                      'type' => 'string',
                      'example' => 'pending',
                    ),
                    'progress' => 
                    array (
                      'description' => '进度展示百分比，例如80',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"code\\": \\"400\\",\\n      \\"switchedTime\\": \\"2020-11-08T02:00:00Z\\",\\n      \\"rollbackEnabled\\": true,\\n      \\"message\\": \\"xxx\\",\\n      \\"flowType\\": \\"Manual\\",\\n      \\"costSeconds\\": 50,\\n      \\"builtTime\\": \\"2020-11-08T02:00:00Z\\",\\n      \\"versionId\\": \\"20102010211\\",\\n      \\"size\\": 2938475566,\\n      \\"status\\": \\"pending\\",\\n      \\"progress\\": 80\\n    }\\n  ],\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","type":"json"}]',
      'title' => '获取最新任务',
      'summary' => '获取最近一次构建的任务。',
    ),
    'DescribeQuota' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/quota',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18685',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecDM7OX0',
          1 => 'FEATUREairecEDD4RN',
          2 => 'FEATUREairecIDS0JZ',
          3 => 'FEATUREairecDTVO6V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'itemCountUsed' => 
                  array (
                    'description' => '已经使用的物品数

',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'itemCount' => 
                  array (
                    'description' => '物品表文档数，取值范围：1~1000',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'userCount' => 
                  array (
                    'description' => '用户表文档数，取值范围如下：
1~1000',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'userCountUsed' => 
                  array (
                    'description' => '已使用的用户数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'qps' => 
                  array (
                    'description' => '查询的QPS值，取值范围如下：

最小值 10、最大值 500',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'currentQps' => 
                  array (
                    'description' => '弹性QPS数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"itemCountUsed\\": 100,\\n    \\"itemCount\\": 100,\\n    \\"userCount\\": 100,\\n    \\"userCountUsed\\": 100,\\n    \\"qps\\": 10,\\n    \\"currentQps\\": 10\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '获取指定实例的配额信息',
      'summary' => '通过指定的实例ID查看实例的配额信息。',
    ),
    'DescribeRegions' => 
    array (
      'path' => '/v2/openapi/configurations/regions',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18686',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'acceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的语言，默认值为zh-cn。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-cn',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'regionId' => 
                    array (
                      'description' => '实例所在的区域。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'endpoint' => 
                    array (
                      'description' => '接入点地址',
                      'type' => 'string',
                      'example' => '47.109.94.218',
                    ),
                    'status' => 
                    array (
                      'description' => '开通状态:
NotOpen 未开通
Processing 开通中
Running 运行中',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'localName' => 
                    array (
                      'description' => '区域名称',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'consoleUrl' => 
                    array (
                      'description' => '控制台地址',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '16B78383-2803-4964-9605-37B30C073B0E',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'successful',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"regionId\\": \\"cn-beijing\\",\\n      \\"endpoint\\": \\"47.109.94.218\\",\\n      \\"status\\": \\"Running\\",\\n      \\"localName\\": \\"xxx\\",\\n      \\"consoleUrl\\": \\"xxx\\"\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"16B78383-2803-4964-9605-37B30C073B0E\\",\\n  \\"message\\": \\"successful\\"\\n}","type":"json"}]',
      'title' => '查询区域',
      'summary' => '查询可以使用的阿里云区域。',
    ),
    'DescribeSceneBucket' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/experiment-bucket',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18689',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec4DBEUA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'num' => 
                  array (
                    'description' => '总桶数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'inUse' => 
                  array (
                    'description' => '当前所有ab占用桶号，其余均为缺省实验占用',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'detail' => 
                  array (
                    'description' => '详情',
                    'type' => 'object',
                    'example' => 'xxx',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"num\\": 2,\\n    \\"inUse\\": \\"1\\",\\n    \\"detail\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"requestId\\": \\"E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSceneBucketResponse>\\n    <result>\\n        <num>10</num>\\n        <inUse>1</inUse>\\n        <inUse>2</inUse>\\n        <inUse>3</inUse>\\n        <detail>\\n            <123396>3</123396>\\n            <123417>1</123417>\\n            <123417>2</123417>\\n        </detail>\\n    </result>\\n    <requestId>E3D6FE3B-B7C2-43DA-9A13-5EA837ACED9B</requestId>\\n</DescribeSceneBucketResponse>","errorExample":""}]',
      'title' => 'DescribeSceneBucket',
      'summary' => '查看场景下实验桶分布情况。',
    ),
    'DescribeSceneThroughput' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/throughput',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18690',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景id

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testid',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果

',
                'type' => 'object',
                'properties' => 
                array (
                  'pvCount' => 
                  array (
                    'description' => 'pv计数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"pvCount\\": 123\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<Result>\\n    <PvCount>123213</PvCount>\\n</Result>\\n<RequestId>6839AE7C-A984-48C1-AC17-331BAC6D97BC</RequestId>","errorExample":""}]',
      'title' => '获取场景流量',
      'summary' => '获取场景流量。',
      'description' => '如需使用场景管理功能，不建议使用API进行操作。请使用控制台中“场景管理”功能，使用详情见官方文档<props="china">：[通过选投策略配置，快速搭建推荐场景](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M)</props>',
    ),
    'DescribeSyncReportDetail' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/sync-reports/detail',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18691',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间秒级时间戳
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间秒级时间戳
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        3 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'behavior/item/user表',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'behavior',
          ),
        ),
        4 => 
        array (
          'name' => 'levelType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '严重等级 error/warn/info',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'error',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'historyData' => 
                    array (
                      'description' => '历史数据异常记录占比列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'errorPercent' => 
                          array (
                            'description' => '指定时间段异常数据记录占比 ',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '84.6',
                          ),
                          'startTime' => 
                          array (
                            'description' => '开始时间秒级时间戳
',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1586673466',
                          ),
                          'endTime' => 
                          array (
                            'description' => '结束时间秒级时间戳
',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1586673466',
                          ),
                        ),
                      ),
                    ),
                    'sampleDisplay' => 
                    array (
                      'description' => '是否样本展示',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'type' => 
                    array (
                      'description' => '例如：实时行为记录的bhv_time不合法。
',
                      'type' => 'string',
                      'example' => 'bhvTimeBehavior',
                    ),
                    'errorCount' => 
                    array (
                      'description' => '错误数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '246165',
                    ),
                    'errorPercent' => 
                    array (
                      'description' => '异常记录占比',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '84.6',
                    ),
                    'defaultDisplay' => 
                    array (
                      'description' => '是否默认展示',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"historyData\\": [\\n        {\\n          \\"errorPercent\\": 84.6,\\n          \\"startTime\\": 1586673466,\\n          \\"endTime\\": 1586673466\\n        }\\n      ],\\n      \\"sampleDisplay\\": true,\\n      \\"type\\": \\"bhvTimeBehavior\\",\\n      \\"errorCount\\": 246165,\\n      \\"errorPercent\\": 84.6,\\n      \\"defaultDisplay\\": false\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<Result>\\n    <Total>\\n        <ErrorPercent>84.6</ErrorPercent>\\n        <TotalCount>290993</TotalCount>\\n        <ErrorCount>246165</ErrorCount>\\n        <StartTime>1567152000</StartTime>\\n        <EndTime>1567155600</EndTime>\\n    </Total>\\n    <Detail>\\n        <Type>userIdBehavior</Type>\\n        <ErrorPercent>0</ErrorPercent>\\n        <ErrorCount>100</ErrorCount>\\n        <History>\\n            <ErrorPercent>0</ErrorPercent>\\n            <StartTime>1567119600</StartTime>\\n            <EndTime>1567123200</EndTime>\\n        </History>\\n        <History>\\n            <ErrorPercent>0</ErrorPercent>\\n            <StartTime>1567119600</StartTime>\\n            <EndTime>1567123200</EndTime>\\n        </History>\\n    </Detail>\\n    <Detail>\\n        <Type>userIdBehavior</Type>\\n        <ErrorPercent>0</ErrorPercent>\\n        <ErrorCount>100</ErrorCount>\\n        <History>\\n            <ErrorPercent>0</ErrorPercent>\\n            <StartTime>1567119600</StartTime>\\n            <EndTime>1567123200</EndTime>\\n        </History>\\n        <History>\\n            <ErrorPercent>0</ErrorPercent>\\n            <StartTime>1567119600</StartTime>\\n            <EndTime>1567123200</EndTime>\\n        </History>\\n    </Detail>\\n</Result>\\n<RequestId>AD3BCF47-2A4C-44DD-B6B7-CC2F2BCB1DB9</RequestId>","errorExample":""}]',
      'title' => '获取实时数据小时级别报告细节信息',
      'summary' => '获取实时数据小时级别报告细节信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSyncReportOutliers' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/sync-reports/outliers',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18692',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-test',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        2 => 
        array (
          'name' => 'key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'itemBhv
实时行为中，商品ID是否存在于商品库中
userBhv
实时行为中，用户ID是否存在于用户库中
bhvTypeBhv
实时行为中，bhv_type是否合法
traceIdBhv
实时行为中，trace_id是否合法
traceInfoBhv
实时行为中，trace_info是否合法
itemItem
修改记录物品ID是否合法
userUser
修改记录用户ID是否合法',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'itemBhv',
          ),
        ),
        3 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据表名(behavior/item/user)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hehavoir',
          ),
        ),
        4 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        5 => 
        array (
          'name' => 'levelType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常级别(error/warn/info)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'error',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果

',
                'type' => 'object',
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '获取实时数据报告异常明细',
      'summary' => '获取实时数据报告异常明细。',
    ),
    'DescribeUserMetrics' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/metrics',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18693',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间（秒级时间戳）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1567152000',
          ),
        ),
        1 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间（秒级时间戳）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1658110530',
          ),
        ),
        2 => 
        array (
          'name' => 'metricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据类型：

- pvCtr
- uvCtr',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pvCtr',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果

',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果
',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'sceneId' => 
                    array (
                      'description' => '场景ID',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'dataPoints' => 
                    array (
                      'description' => '指标结果',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '指标结果',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'val' => 
                          array (
                            'description' => '具体数值',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '84.6',
                          ),
                          'startTime' => 
                          array (
                            'description' => '开始时间（秒级时间戳）',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1567152000',
                          ),
                          'endTime' => 
                          array (
                            'description' => '结束时间（秒级时间戳）',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1567152000',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"sceneId\\": \\"test\\",\\n      \\"dataPoints\\": [\\n        {\\n          \\"val\\": 84.6,\\n          \\"startTime\\": 1567152000,\\n          \\"endTime\\": 1567152000\\n        }\\n      ]\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '获取用户指标（转化率信息）',
      'summary' => '获取用户指标（转化率信息）。',
    ),
    'GetExtraDataSource' => 
    array (
      'summary' => '查看其他数据源详情。',
      'path' => '/v2/openapi/instances/{instanceId}/extra-data-sources/{type}/{dataSourceId}',
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
        'abilityTreeCode' => '117108',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
            'title' => 'A short description of struct',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源类型
UserCustomDataSource
ItemCustomDataSource
BehaviorCustomDataSource
SampleCustomDataSource',
            'type' => 'string',
            'required' => true,
            'example' => 'UserCustomDataSource',
            'title' => '数据源类型',
          ),
        ),
        2 => 
        array (
          'name' => 'dataSourceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源ID',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'title' => '数据源id',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/ExtraDataSource',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<result>\\n    <type>UserCustomDataSource</type>\\n    <meta>\\n        <metaType>ExtraDataSource</metaType>\\n        <projectName>project_name</projectName>\\n        <tableName>table</tableName>\\n        <type>ODPS</type>\\n        <updateFrequency>86400</updateFrequency>\\n        <internal>false</internal>\\n    </meta>\\n    <status>Online</status>\\n    <gmtCreate>2021-11-30T11:53:05.000Z</gmtCreate>\\n    <gmtModified>2021-11-30T11:53:05.000Z</gmtModified>\\n    <dataSourceId>cd4bb4b3-1e54-4dbb-a178-e58dac4035a5</dataSourceId>\\n</result>\\n<requestId>90D6B8F5-FE97-4509-9AAB-367836C51818</requestId>","errorExample":""}]',
      'title' => '查看其他数据源详情',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDashboardDetails' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dashboard/details',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18696',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1588521600',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1588521600',
          ),
        ),
        3 => 
        array (
          'name' => 'traceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'trace_Id，同数据规范',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Alibaba',
          ),
        ),
        4 => 
        array (
          'name' => 'sceneIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'metricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询指标，枚举选择

USER_ACTION_PV_COUNT 整体流量规模PV

USER_ACTION_UV_COUNT 整体流量规模UV

USER_ACTION_PV_RATIO 流量转化率

USER_ACTION_UV_RATIO 人均流量

USER_PV_STAY 人均停留 （内容型）

USER_UV_STAY 次均停留 （内容型）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xxx',
          ),
        ),
        6 => 
        array (
          'name' => 'experimentIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实验ID列表，all（场景级别整体效果）。默认值为all。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        7 => 
        array (
          'name' => 'matchTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '匹配类型列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'hot,emb,u2x2i,hilp,new,',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '指定指标的详细信息

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'traceId' => 
                    array (
                      'description' => 'trace_id',
                      'type' => 'string',
                      'example' => 'Alibaba',
                    ),
                    'sceneId' => 
                    array (
                      'description' => '场景ID',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'metricRes' => 
                    array (
                      'description' => '指标结果
',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'total' => 
                        array (
                          'description' => '统计',
                          'type' => 'object',
                          'example' => 'xxx',
                        ),
                        'detail' => 
                        array (
                          'description' => '详细信息',
                          'type' => 'object',
                          'example' => 'xxx',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"traceId\\": \\"Alibaba\\",\\n      \\"sceneId\\": \\"test\\",\\n      \\"metricRes\\": {\\n        \\"total\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"detail\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <TraceId>alibaba</TraceId>\\n    <SceneId>scene_id1</SceneId>\\n    <MetricRes>\\n        <Total>\\n            <Vval>0</Vval>\\n            <Min>0</Min>\\n            <Avg>0</Avg>\\n            <Max>0</Max>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588521600</StartTime>\\n            <EndTime>1588525200</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Total>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588003200</StartTime>\\n            <EndTime>1588006800</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588089600</StartTime>\\n            <EndTime>1588093200</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588176000</StartTime>\\n            <EndTime>1588179600</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588262400</StartTime>\\n            <EndTime>1588266000</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588348800</StartTime>\\n            <EndTime>1588352400</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588435200</StartTime>\\n            <EndTime>1588438800</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588521600</StartTime>\\n            <EndTime>1588525200</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n    </MetricRes>\\n</Result>\\n<Result>\\n    <TraceId>alibaba</TraceId>\\n    <SceneId>all</SceneId>\\n    <MetricRes>\\n        <Total>\\n            <Val>0</Val>\\n            <Min>0</Min>\\n            <Avg>0</Avg>\\n            <Max>0</Max>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588521600</StartTime>\\n            <EndTime>1588525200</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Total>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588003200</StartTime>\\n            <EndTime>1588006800</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588089600</StartTime>\\n            <EndTime>1588093200</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588176000</StartTime>\\n            <EndTime>1588179600</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588262400</StartTime>\\n            <EndTime>1588266000</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588348800</StartTime>\\n            <EndTime>1588352400</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588435200</StartTime>\\n            <EndTime>1588438800</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n        <Detail>\\n            <Val>0</Val>\\n            <Last7dayCompare>0</Last7dayCompare>\\n            <StartTime>1588521600</StartTime>\\n            <EndTime>1588525200</EndTime>\\n            <LastDayCompare>0</LastDayCompare>\\n        </Detail>\\n    </MetricRes>\\n</Result>","errorExample":""}]',
      'title' => 'ListDashboardDetails',
      'summary' => '通过指定条件查询指定实例的细分指标。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDashboardDetailsFlows' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dashboard/details/flows',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18697',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '秒级时间戳
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1588521600',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '秒级时间戳
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1588521600',
          ),
        ),
        3 => 
        array (
          'name' => 'traceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'trace_Id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Alibaba',
          ),
        ),
        4 => 
        array (
          'name' => 'sceneIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'metricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询指标，枚举选择

USER_ACTION_PV_COUNT 整体流量规模PV

USER_ACTION_UV_COUNT 整体流量规模UV

USER_ACTION_PV_RATIO  流量转化率

USER_ACTION_UV_RATIO 人均流量

USER_PV_STAY 人均停留 （内容型）

USER_UV_STAY 次均停留  （内容型）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'USERACTIONUV_COUNT',
          ),
        ),
        6 => 
        array (
          'name' => 'experimentIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实验ID列表，all（场景级别整体效果）。默认值为all。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '指定指标的详细信息

',
                'type' => 'object',
                'properties' => 
                array (
                  'metricType' => 
                  array (
                    'description' => '查询指标，枚举选择

USER_ACTION_PV_COUNT 整体流量规模PV

USER_ACTION_UV_COUNT 整体流量规模UV

USER_ACTION_PV_RATIO  流量转化率

USER_ACTION_UV_RATIO 人均流量

USER_PV_STAY 人均停留 （内容型）

USER_UV_STAY 次均停留  （内容型）',
                    'type' => 'string',
                    'example' => 'USERACTIONUV_COUNT',
                  ),
                  'metricData' => 
                  array (
                    'description' => '指标结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'traceId' => 
                        array (
                          'description' => 'trace_id',
                          'type' => 'string',
                          'example' => 'Alibaba',
                        ),
                        'sceneId' => 
                        array (
                          'description' => '场景ID',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'metricRes' => 
                        array (
                          'description' => '指标结果',
                          'type' => 'object',
                          'example' => 'xxx',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"metricType\\": \\"USERACTIONUV_COUNT\\",\\n    \\"metricData\\": [\\n      {\\n        \\"traceId\\": \\"Alibaba\\",\\n        \\"sceneId\\": \\"test\\",\\n        \\"metricRes\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <MetricType>cart</MetricType>\\n    <MetricData>\\n        <TraceId>alibaba</TraceId>\\n        <SceneId>scene_id1</SceneId>\\n        <MetricRes>\\n            <Total>\\n                <Val>0</Val>\\n                <Min>0</Min>\\n                <Avg>0</Avg>\\n                <Max>0</Max>\\n                <Last7dayCompare>0</Last7dayCompare>\\n                <StartTime>1588521600</StartTime>\\n                <EndTime>1588525200</EndTime>\\n                <LastDayCompare>0</LastDayCompare>\\n            </Total>\\n            <Detail>\\n                <Val>0</Val>\\n                <Last7dayCompare>0</Last7dayCompare>\\n                <StartTime>1585929600</StartTime>\\n                <EndTime>1585933200</EndTime>\\n                <LastDayCompare>0</LastDayCompare>\\n            </Detail>\\n            <Detail>\\n                <Val>0</Val>\\n                <Last7dayCompare>0</Last7dayCompare>\\n                <StartTime>1586016000</StartTime>\\n                <EndTime>1586019600</EndTime>\\n                <LastDayCompare>0</LastDayCompare>\\n            </Detail>\\n        </MetricRes>\\n    </MetricData>\\n    <MetricData>\\n        <TraceId>alibaba</TraceId>\\n        <SceneId>all</SceneId>\\n        <MetricRes>\\n            <Total>\\n                <Val>0</Val>\\n                <Min>0</Min>\\n                <Avg>0</Avg>\\n                <Max>0</Max>\\n                <Last7dayCompare>0</Last7dayCompare>\\n                <StartTime>1588521600</StartTime>\\n                <EndTime>1588525200</EndTime>\\n                <LastDayCompare>0</LastDayCompare>\\n            </Total>\\n            <Detail>\\n                <Val>0</Val>\\n                <Last7dayCompare>0</Last7dayCompare>\\n                <StartTime>1588521600</StartTime>\\n                <EndTime>1588525200</EndTime>\\n                <LastDayCompare>0</LastDayCompare>\\n            </Detail>\\n        </MetricRes>\\n    </MetricData>\\n</Result>","errorExample":""}]',
      'title' => '通过指定条件查询实例的细分流量指标',
      'summary' => '通过指定条件查询指定实例的细分流量指标。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDashboardMetrics' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dashboard/metrics',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18698',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间，秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '截止时间，秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1586673466',
          ),
        ),
        3 => 
        array (
          'name' => 'metricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指标类型

USER_ACTION_PV_COUNT 整体流量规模PV

USER_ACTION_UV_COUNT 整体流量规模UV

USER_ACTION_PV_RATIO 流量转化率

USER_ACTION_UV_RATIO 人均流量',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '指标类型

USERACTIONPV_COUNT',
          ),
        ),
        4 => 
        array (
          'name' => 'metricView',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询维度，配合metricQuery使用，默认值为USER, 枚举值如下；
 USER 用户维度,
 ITEM  物品维度',
            'type' => 'string',
            'required' => false,
            'example' => 'ITEM',
          ),
        ),
        5 => 
        array (
          'name' => 'metricQuery',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询条件，格式 k1:v1;k2:v2',
            'type' => 'string',
            'required' => false,
            'example' => 'dimension:ITEM_TYPE;behaviorType:expose',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '统计结果
',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'total' => 
                    array (
                      'description' => '统计',
                      'type' => 'object',
                      'example' => 'xxx',
                    ),
                    'detail' => 
                    array (
                      'description' => '详细信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'val' => 
                          array (
                            'description' => '具体数值',
                            'type' => 'string',
                            'example' => '13',
                          ),
                          'startTime' => 
                          array (
                            'description' => '秒级时间戳',
                            'type' => 'string',
                            'example' => '1586673466',
                          ),
                          'endTime' => 
                          array (
                            'description' => '秒级时间戳',
                            'type' => 'string',
                            'example' => '1586673466',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"total\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"detail\\": [\\n        {\\n          \\"val\\": \\"13\\",\\n          \\"startTime\\": \\"1586673466\\",\\n          \\"endTime\\": \\"1586673466\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <Total>\\n        <Val>32</Val>\\n        <Min>32</Min>\\n        <Average7>32</Average7>\\n        <Max>32</Max>\\n        <Average30>32</Average30>\\n        <Daily>32</Daily>\\n        <StatTime>1586673466</StatTime>\\n        <EndTime>1586673466</EndTime>\\n        <Weekly>32</Weekly>\\n    </Total>\\n    <Detail>\\n        <Val>13</Val>\\n        <StartTime>1586673466</StartTime>\\n        <EndTime>1586673466</EndTime>\\n    </Detail>\\n    <Detail>\\n        <Val>32</Val>\\n        <StartTime>1586673466</StartTime>\\n        <EndTime>1586673466</EndTime>\\n    </Detail>\\n</Result>","errorExample":""}]',
      'title' => 'ListDashboardMetrics',
      'summary' => '查询指定实例的整理仪表盘数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDashboardMetricsFlows' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dashboard/metrics/flows',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18699',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '秒级时间戳

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '秒级时间戳

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        3 => 
        array (
          'name' => 'metricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指标类型

USER_ACTION_PV_COUNT 整体流量规模PV

USER_ACTION_UV_COUNT 整体流量规模UV

USER_ACTION_PV_RATIO  流量转化率

USER_ACTION_UV_RATIO 人均流量',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'USERACTIONPV_COUNT',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '统计结果
',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'metricType' => 
                    array (
                      'description' => '指标类型',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'metricData' => 
                    array (
                      'description' => '指标数据',
                      'type' => 'object',
                      'example' => 'xxx',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"metricType\\": \\"xxx\\",\\n      \\"metricData\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <MetricType>click</MetricType>\\n    <MetricData>\\n        <Val>32</Val>\\n        <Min>32</Min>\\n        <Average7>32</Average7>\\n        <Max>32</Max>\\n        <Average30>32</Average30>\\n        <Daily>32</Daily>\\n        <StatTime>1586673466</StatTime>\\n        <EndTime>1586673466</EndTime>\\n        <Detail>\\n            <Val>10</Val>\\n            <StartTime>1586673466</StartTime>\\n            <EndTime>1586673466</EndTime>\\n            <Type>click</Type>\\n        </Detail>\\n        <Detail>\\n            <Val>10</Val>\\n            <StartTime>1586673466</StartTime>\\n            <EndTime>1586673466</EndTime>\\n            <Type>expose</Type>\\n        </Detail>\\n        <Weekly>32</Weekly>\\n    </MetricData>\\n</Result>","errorExample":""}]',
      'title' => '查询指定实例的整理仪表盘流量数据',
      'summary' => '查询指定实例的整理仪表盘流量数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFeatureTables' => 
    array (
      'summary' => '获取特征表列表。',
      'path' => '/v2/openapi/instances/{instanceId}/feature-tables',
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
        'abilityTreeCode' => '117113',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
            'title' => 'A short description of struct',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特征表类型
UserFeatureTable
ItemFeatureTable',
            'type' => 'string',
            'required' => false,
            'example' => 'UserFeatureTable',
            'title' => '特征表类型',
          ),
        ),
        2 => 
        array (
          'name' => 'updateFrequency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特征更新频率',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'title' => '特征更新频率',
          ),
        ),
        3 => 
        array (
          'name' => 'dataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源Id',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'title' => '数据源id',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'title' => 'result',
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/FeatureTable',
                ),
                'example' => 'result',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"<result>\\n    <type>ItemFeatureTable</type>\\n    <meta>\\n        <metaType>FeatureTable</metaType>\\n        <dataSourceId>907648f5-abae-44fd-a4c4-525cc25947e9</dataSourceId>\\n        <source>project_name.table</source>\\n        <updateFrequency>86400</updateFrequency>\\n        <internal>false</internal>\\n        <featureList>\\n            <fieldName>fieldName1</fieldName>\\n            <featureName>fn1</featureName>\\n            <comment>com1</comment>\\n            <status>NotApplied</status>\\n        </featureList>\\n        <featureList>\\n            <fieldName>fieldName2</fieldName>\\n            <featureName>fn2</featureName>\\n            <comment>com2</comment>\\n            <status>NotApplied</status>\\n        </featureList>\\n    </meta>\\n    <status/>\\n    <gmtCreate>2021-12-10T02:59:54.000Z</gmtCreate>\\n    <gmtModified>2021-12-10T02:59:54.000Z</gmtModified>\\n    <featureTableId>30E70118-FC7C-4438-9287-583CE47266A9</featureTableId>\\n</result>\\n<result>\\n    <type>ItemFeatureTable</type>\\n    <meta>\\n        <metaType>FeatureTable</metaType>\\n        <dataSourceId>907648f5-abae-44fd-a4c4-525cc25947e9</dataSourceId>\\n        <source>project_name.table</source>\\n        <updateFrequency>86400</updateFrequency>\\n        <internal>false</internal>\\n        <featureList>\\n            <fieldName>fieldName1</fieldName>\\n            <featureName>fn1</featureName>\\n            <comment>com1</comment>\\n            <status>NotApplied</status>\\n        </featureList>\\n        <featureList>\\n            <fieldName>fieldName2</fieldName>\\n            <featureName>fn2</featureName>\\n            <comment>com2</comment>\\n            <status>NotApplied</status>\\n        </featureList>\\n    </meta>\\n    <status/>\\n    <gmtCreate>2021-12-10T02:55:35.000Z</gmtCreate>\\n    <gmtModified>2021-12-10T02:55:35.000Z</gmtModified>\\n    <featureTableId>303300A4-94DE-4F48-9B6C-5BC6907B246D</featureTableId>\\n</result>\\n<result>\\n    <type>UserFeatureTable</type>\\n    <meta>\\n        <metaType>FeatureTable</metaType>\\n        <dataSourceId>cd4bb4b3-1e54-4dbb-a178-e58dac4035a5</dataSourceId>\\n        <source>project_name.table</source>\\n        <updateFrequency>86400</updateFrequency>\\n        <internal>false</internal>\\n        <featureList>\\n            <fieldName>fieldName1</fieldName>\\n            <featureName>fn1</featureName>\\n            <comment>com1</comment>\\n            <status>NotApplied</status>\\n        </featureList>\\n        <featureList>\\n            <fieldName>fieldName2</fieldName>\\n            <featureName>fn2</featureName>\\n            <comment>com2</comment>\\n            <status>NotApplied</status>\\n        </featureList>\\n    </meta>\\n    <status/>\\n    <gmtCreate>2021-12-10T02:52:54.000Z</gmtCreate>\\n    <gmtModified>2021-12-10T02:52:54.000Z</gmtModified>\\n    <featureTableId>236A59AE-D5B5-45BC-AEFD-0E1EFBE54ABC</featureTableId>\\n</result>\\n<requestId>A8B7313B-5E9D-4A53-8AD1-2040965F1EFE</requestId>","errorExample":""}]',
      'title' => '获取特征表列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListIndexVersions' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}/index-versions',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18704',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定的表ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '召回表信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'code' => 
                    array (
                      'description' => '错误码',
                      'type' => 'string',
                      'example' => 'abc',
                    ),
                    'switchedTime' => 
                    array (
                      'description' => '索引切换完成时间，为UTC时间',
                      'type' => 'string',
                      'example' => '2020-11-08T02:00:00Z',
                    ),
                    'rollbackEnabled' => 
                    array (
                      'description' => '是否可以回滚',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'message' => 
                    array (
                      'description' => '错误信息',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'flowType' => 
                    array (
                      'description' => '任务类型，包含 Auto Manual Rollback ',
                      'type' => 'string',
                      'example' => 'Auto',
                    ),
                    'costSeconds' => 
                    array (
                      'description' => '索引构建耗时',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '600',
                    ),
                    'builtTime' => 
                    array (
                      'description' => '索引开始构建时间，为UTC时间',
                      'type' => 'string',
                      'example' => '2020-11-08T02:00:00Z',
                    ),
                    'versionId' => 
                    array (
                      'description' => '索引版本的版本号，后端生成',
                      'type' => 'string',
                      'example' => '2020112301',
                    ),
                    'size' => 
                    array (
                      'description' => '索引构建大小',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '300922211',
                    ),
                    'status' => 
                    array (
                      'description' => '索引状态，包含索引：

- 失败(failed)
- 生效中(online)
- 已失效（offline）

全量任务：

- 全量中（pending）
- 已完成（success）
- 失败(failed)

等',
                      'type' => 'string',
                      'example' => 'abc',
                    ),
                    'progress' => 
                    array (
                      'description' => '进度展示百分比，例如80',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"code\\": \\"abc\\",\\n      \\"switchedTime\\": \\"2020-11-08T02:00:00Z\\",\\n      \\"rollbackEnabled\\": true,\\n      \\"message\\": \\"xxx\\",\\n      \\"flowType\\": \\"Auto\\",\\n      \\"costSeconds\\": 600,\\n      \\"builtTime\\": \\"2020-11-08T02:00:00Z\\",\\n      \\"versionId\\": \\"2020112301\\",\\n      \\"size\\": 300922211,\\n      \\"status\\": \\"abc\\",\\n      \\"progress\\": 80\\n    }\\n  ],\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取索引版本列表',
      'summary' => '根据指定的实例ID，召回表ID获取索引版本列表。目前仅支持显示10条数据（包含3条可以切换的），所以不用翻页，不用过滤。',
    ),
    'ListInstanceTask' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/tasks',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18706',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果
',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'subProgressInfos' => 
                    array (
                      'description' => '子任务具体进度信息列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '子任务具体进度信息列表',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'type' => 
                          array (
                            'description' => '子任务类型',
                            'type' => 'string',
                            'example' => 'DATA_PROCESS',
                          ),
                          'detail' => 
                          array (
                            'description' => '子任务具体描述',
                            'type' => 'string',
                            'example' => 'data import progress info',
                          ),
                          'totalNum' => 
                          array (
                            'description' => '子任务一共的任务数量',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '11',
                          ),
                          'finishedNum' => 
                          array (
                            'description' => '已完成子任务数',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '2',
                          ),
                          'progress' => 
                          array (
                            'description' => '执行进度
范围为0-100
100为执行结束',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '20',
                          ),
                        ),
                      ),
                    ),
                    'totalProgress' => 
                    array (
                      'description' => '当前任务整体进度',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'name' => 
                    array (
                      'description' => '任务名称',
                      'type' => 'string',
                      'example' => '启动任务',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'successful',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"subProgressInfos\\": [\\n        {\\n          \\"type\\": \\"DATA_PROCESS\\",\\n          \\"detail\\": \\"data import progress info\\",\\n          \\"totalNum\\": 11,\\n          \\"finishedNum\\": 2,\\n          \\"progress\\": 20\\n        }\\n      ],\\n      \\"totalProgress\\": 50,\\n      \\"name\\": \\"启动任务\\"\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"successful\\"\\n}","type":"json"}]',
      'title' => '查询指定实例的任务列表',
      'summary' => '查询指定实例的任务列表。',
    ),
    'ListItems' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/items/actions/list',
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
        'operationType' => 'get',
        'abilityTreeCode' => '18707',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'strategyUsed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认false，传入true 则使用置顶/定坑侧逻辑，但是必须在body中传入 sceneId',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'withInvalidDetail',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '置顶/定坑侧控制返回值中是否包含InvalidDetail' . "\0" . ', 用于 itemId:itemType 查询类型使用',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页数，默认1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数量，默认10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'total' => 
                  array (
                    'description' => '统计',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'sceneWeightItem' => 
                      array (
                        'description' => '场景加权物品数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'totalCount' => 
                      array (
                        'description' => '全部数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5000',
                      ),
                      'queryCount' => 
                      array (
                        'description' => '列出数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3000',
                      ),
                      'sceneRecommendItem' => 
                      array (
                        'description' => '场景可推荐物品数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '200',
                      ),
                      'weightItem' => 
                      array (
                        'description' => '加权物品',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                      ),
                      'instanceRecommendItem' => 
                      array (
                        'description' => '实例可推荐物品数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '200',
                      ),
                    ),
                  ),
                  'detail' => 
                  array (
                    'description' => '详细信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'title' => 
                        array (
                          'description' => '标题',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'categoryPath' => 
                        array (
                          'description' => '类目路径',
                          'type' => 'string',
                          'example' => '1_2',
                        ),
                        'itemId' => 
                        array (
                          'description' => 'itemId，同数据规范同字段',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'itemType' => 
                        array (
                          'description' => 'itemType，同数据规范同字段',
                          'type' => 'string',
                          'example' => 'item',
                        ),
                        'status' => 
                        array (
                          'description' => '是否可推荐',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'brandId' => 
                        array (
                          'description' => '品牌ID',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'shopId' => 
                        array (
                          'description' => '店铺ID',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'pubTime' => 
                        array (
                          'description' => '发布时间',
                          'type' => 'string',
                          'example' => '1647998107012',
                        ),
                        'channel' => 
                        array (
                          'description' => '频道',
                          'type' => 'string',
                          'example' => 'news',
                        ),
                        'duration' => 
                        array (
                          'description' => '持续时间',
                          'type' => 'string',
                          'example' => '30',
                        ),
                        'author' => 
                        array (
                          'description' => '作者',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                        'expireTime' => 
                        array (
                          'description' => '过期时间',
                          'type' => 'string',
                          'example' => '1647998107012',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '6839AE7C-A984-48C1-AC17-331BAC6D97BC',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"total\\": {\\n      \\"sceneWeightItem\\": 10,\\n      \\"totalCount\\": 5000,\\n      \\"queryCount\\": 3000,\\n      \\"sceneRecommendItem\\": 200,\\n      \\"weightItem\\": 10,\\n      \\"instanceRecommendItem\\": 200\\n    },\\n    \\"detail\\": [\\n      {\\n        \\"title\\": \\"test\\",\\n        \\"categoryPath\\": \\"1_2\\",\\n        \\"itemId\\": \\"123\\",\\n        \\"itemType\\": \\"item\\",\\n        \\"status\\": \\"1\\",\\n        \\"brandId\\": \\"1\\",\\n        \\"shopId\\": \\"1\\",\\n        \\"pubTime\\": \\"1647998107012\\",\\n        \\"channel\\": \\"news\\",\\n        \\"duration\\": \\"30\\",\\n        \\"author\\": \\"abc\\",\\n        \\"expireTime\\": \\"1647998107012\\"\\n      }\\n    ]\\n  },\\n  \\"requestId\\": \\"6839AE7C-A984-48C1-AC17-331BAC6D97BC\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取列表项',
      'summary' => '查询实例物品池。',
    ),
    'ListLogs' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/logs',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18708',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecY1ADIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'queryParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询条件:
key1:value1;key2:value;
例如：requestId:xxxx;requestUri:xxx;',
            'type' => 'string',
            'required' => false,
            'example' => 'key1:value1;key2:value',
          ),
        ),
        2 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间（秒级时间戳）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        3 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间 （秒级时间戳）

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1565193600',
            'example' => '1678155766',
          ),
        ),
        4 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页数，默认1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定每页展示条数，默认为10，限制:[1-50]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果
',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询结果
',
                  'type' => 'object',
                ),
              ),
              'headers' => 
              array (
                'description' => 'headers info',
                'type' => 'object',
                'properties' => 
                array (
                  'X-Total-Count' => 
                  array (
                    'description' => '查询总量

',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  ],\\n  \\"headers\\": {\\n    \\"X-Total-Count\\": 12\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '获取日志列表',
      'summary' => '该接口用于获取指定实例的日志信息（近七日内）。',
    ),
    'ListMixCategories' => 
    array (
      'path' => '/v2/openapi/configurations/mixCategories',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18709',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询结果
',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'categories' => 
                    array (
                      'description' => '类目',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '类目',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => 'aaaa',
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ED093A1D-1C56-57A2-B078-3C518F632F03',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'Success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"categories\\": [\\n        0\\n      ]\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"ED093A1D-1C56-57A2-B078-3C518F632F03\\",\\n  \\"message\\": \\"Success\\"\\n}","type":"json"}]',
      'title' => 'ListMixCategories',
      'summary' => '查询类目列表。',
    ),
    'ListOfflineStorages' => 
    array (
      'summary' => '查询离线存储。',
      'path' => '/v2/openapi/instances/[instanceId]/offlineStorages',
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
        'abilityTreeCode' => '20401',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'instanceId',
            'description' => 'instanceId',
            'type' => 'string',
            'format' => 'byte',
            'required' => true,
            'example' => 'airec-cn-xxx',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'format' => 'byte',
                'example' => '6839AE7C-A984-48C1-AC17-331BAC6D97BC',
              ),
              'result' => 
              array (
                'title' => '结果列表',
                'description' => '结果列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'tableName' => 
                    array (
                      'title' => '表名称',
                      'description' => '表名称',
                      'type' => 'string',
                      'format' => 'byte',
                      'example' => 'item',
                    ),
                    'meta' => 
                    array (
                      'title' => '元信息',
                      'description' => '元信息',
                      'type' => 'object',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"6839AE7C-A984-48C1-AC17-331BAC6D97BC\\",\\n  \\"result\\": [\\n    {\\n      \\"tableName\\": \\"item\\",\\n      \\"meta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询离线存储',
    ),
    'ListRuleConditions' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/rule-conditions',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18711',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'selectType' => 
                    array (
                      'description' => '选品规则过滤条件类型',
                      'type' => 'string',
                      'example' => 'QUERY_ITEM_TYPE',
                    ),
                    'selectValue' => 
                    array (
                      'description' => '选品规则过滤条件具体数值
',
                      'type' => 'string',
                      'example' => '[\\"image\\",\\"article\\",\\"video\\",\\"shortvideo\\",\\"item\\",\\"recipe\\",\\"audio\\"]',
                    ),
                    'selectionOperation' => 
                    array (
                      'description' => '选品规则过滤条件操作
',
                      'type' => 'string',
                      'example' => 'QUERY_VALUE_IN',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"selectType\\": \\"QUERY_ITEM_TYPE\\",\\n      \\"selectValue\\": \\"[\\\\\\\\\\\\\\"image\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"article\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"video\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"shortvideo\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"item\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"recipe\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"audio\\\\\\\\\\\\\\"]\\",\\n      \\"selectionOperation\\": \\"QUERY_VALUE_IN\\"\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '查询实例具体的选品规则',
      'summary' => '查询实例具体的选品规则.。',
    ),
    'ListRuleTasks' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/rule-tasks',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18713',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecJZYTIA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testid',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果
',
                'type' => 'object',
                'properties' => 
                array (
                  'finishTime' => 
                  array (
                    'description' => '完成时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588240081',
                  ),
                  'finishRate' => 
                  array (
                    'description' => '完成率',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"finishTime\\": 1588240081,\\n    \\"finishRate\\": 50\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B352FBD9-4643-441E-80ED-699D47D7B6A3</RequestId>\\n<Result>\\n    <FinishRate>50</FinishRate>\\n    <FinishTime>1588240081</FinishTime>\\n</Result>","errorExample":""}]',
      'title' => '查询规则的任务状态',
      'summary' => '查询规则的任务状态。',
    ),
    'ListSampleFormatConfigs' => 
    array (
      'summary' => '获取样本格式化配置列表。',
      'path' => '/v2/openapi/instances/{instanceId}/samples/{sampleId}/format-configs',
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
        'abilityTreeCode' => '117133',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
            'title' => 'A short description of struct',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '样本id',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'title' => '样本id',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'EDF43C1F-99E4-431F-A7C0-8B260A5A792E',
                'title' => 'Id of the request',
              ),
              'result' => 
              array (
                'description' => '格式化配置列表',
                'type' => 'object',
                'example' => 'xxx',
                'title' => 'result',
              ),
            ),
            'title' => 'Schema of Response',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"requestId\\": \\"EDF43C1F-99E4-431F-A7C0-8B260A5A792E\\"\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <meta>\\n        <metaType>SampleFormatConfig</metaType>\\n        <sampleId>111</sampleId>\\n        <config>{\\"features\\":[{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100000.0,\\"expression\\":\\"user:user_id\\",\\"feature_name\\":\\"user_id\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"user\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100.0,\\"expression\\":\\"user:cms_segid\\",\\"feature_name\\":\\"cms_segid\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"user\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100.0,\\"expression\\":\\"user:cms_group_id\\",\\"feature_name\\":\\"cms_group_id\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"user\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":10.0,\\"expression\\":\\"user:age_level\\",\\"feature_name\\":\\"age_level\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"user\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":10.0,\\"expression\\":\\"user:pvalue_level\\",\\"feature_name\\":\\"pvalue_level\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"user\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":10.0,\\"expression\\":\\"user:shopping_level\\",\\"feature_name\\":\\"shopping_level\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"user\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":10.0,\\"expression\\":\\"user:occupation\\",\\"feature_name\\":\\"occupation\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"user\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":10.0,\\"expression\\":\\"user:new_user_class_level\\",\\"feature_name\\":\\"new_user_class_level\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"user\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100000.0,\\"expression\\":\\"item:adgroup_id\\",\\"feature_name\\":\\"adgroup_id\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"item\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100000.0,\\"expression\\":\\"item:cate_id\\",\\"feature_name\\":\\"cate_id\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"item\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100000.0,\\"expression\\":\\"item:campaign_id\\",\\"feature_name\\":\\"campaign_id\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"item\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100000.0,\\"expression\\":\\"item:customer\\",\\"feature_name\\":\\"customer\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"item\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100000.0,\\"expression\\":\\"item:brand\\",\\"feature_name\\":\\"brand\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"item\\"},{\\"feature_type\\":\\"raw_feature\\",\\"value_type\\":\\"Integer\\",\\"expression\\":\\"item:price\\",\\"feature_name\\":\\"price\\",\\"combiner\\":\\"mean\\",\\"group\\":\\"item\\"},{\\"feature_type\\":\\"id_feature\\",\\"value_type\\":\\"String\\",\\"hash_bucket_size\\":100000.0,\\"expression\\":\\"item:pid\\",\\"feature_name\\":\\"pid\\",\\"embedding_dim\\":16.0,\\"combiner\\":\\"mean\\",\\"group\\":\\"item\\"},{\\"feature_type\\":\\"id_feature\\",\\"hash_bucket_size\\":100000.0,\\"expression\\":\\"user:tag_category_list\\",\\"feature_name\\":\\"user_tag_cate\\",\\"group\\":\\"user\\",\\"is_multi\\":true},{\\"feature_type\\":\\"combo_feature\\",\\"hash_bucket_size\\":10.0,\\"expression\\":[\\"user:user_id\\",\\"user:occupation\\"],\\"feature_name\\":\\"combo__user_id_occupation\\",\\"embedding_dim\\":16.0,\\"group\\":\\"combo\\"},{\\"feature_type\\":\\"combo_feature\\",\\"hash_bucket_size\\":10.0,\\"expression\\":[\\"user:age_level\\",\\"item:customer\\"],\\"feature_name\\":\\"combo__age_level_customer\\",\\"embedding_dim\\":16.0,\\"group\\":\\"combo\\"},{\\"feature_type\\":\\"combo_feature\\",\\"hash_bucket_size\\":10.0,\\"expression\\":[\\"user:pvalue_level\\",\\"item:brand\\"],\\"feature_name\\":\\"combo__pvalue_level_brand\\",\\"embedding_dim\\":16.0,\\"group\\":\\"combo\\"}]}</config>\\n    </meta>\\n    <status/>\\n    <gmtCreate>2021-12-07T08:58:19.000Z</gmtCreate>\\n    <gmtModified>2021-12-07T08:58:19.000Z</gmtModified>\\n    <sampleFormatConfigId>99D369F6-0A73-4247-9E9F-F693A16CD6AC</sampleFormatConfigId>\\n</result>\\n<requestId>1AEB0EBA-07EF-4C18-85FD-DC93B7A07DA2</requestId>","errorExample":""}]',
      'title' => '获取样本格式化配置列表',
    ),
    'ListSceneItems' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/scenes/{sceneId}/items',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18714',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景id
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'operationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营规则id
',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'selectionRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '选品规则id
',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定页码，默认为：1
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定每页展示条数，默认为10，限制:[1-50]

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '128',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'previewType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预览类型：

PREVIEW_ITEM 单独预览选品规则预览结果

PREVIEW_QUERY 预览整体配置结果',
            'type' => 'string',
            'required' => false,
            'example' => 'PREVIEW_ITEM',
          ),
        ),
        7 => 
        array (
          'name' => 'queryCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数量
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果

',
                'type' => 'object',
                'properties' => 
                array (
                  'total' => 
                  array (
                    'description' => '统计',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'totalCount' => 
                      array (
                        'description' => '实例中item总数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000',
                      ),
                      'sceneWeightItem' => 
                      array (
                        'description' => '当前场景加权的item数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000',
                      ),
                      'sceneRecommendItem' => 
                      array (
                        'description' => '当前场景下可推荐的item数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000',
                      ),
                      'weightItem' => 
                      array (
                        'description' => '实例中加权的item数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000',
                      ),
                      'instanceRecommendItem' => 
                      array (
                        'description' => '当前实例可推荐的item数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000',
                      ),
                    ),
                  ),
                  'detail' => 
                  array (
                    'description' => '详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'title' => 
                        array (
                          'description' => '标题',
                          'type' => 'string',
                          'example' => 'title',
                        ),
                        'categoryPath' => 
                        array (
                          'description' => '类目路径',
                          'type' => 'string',
                          'example' => '12_34',
                        ),
                        'itemId' => 
                        array (
                          'description' => 'item_id',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'itemType' => 
                        array (
                          'description' => 'item_type',
                          'type' => 'string',
                          'example' => 'video',
                        ),
                        'status' => 
                        array (
                          'description' => '是否可推荐，1为可推荐，0为不可推荐',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'brandId' => 
                        array (
                          'description' => '品牌id',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'shopId' => 
                        array (
                          'description' => '店铺id',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'pubTime' => 
                        array (
                          'description' => '发布时间',
                          'type' => 'string',
                          'example' => '1612687809',
                        ),
                        'channel' => 
                        array (
                          'description' => '频道',
                          'type' => 'string',
                          'example' => '娱乐',
                        ),
                        'duration' => 
                        array (
                          'description' => '停留时长',
                          'type' => 'string',
                          'example' => '300',
                        ),
                        'author' => 
                        array (
                          'description' => '作者',
                          'type' => 'string',
                          'example' => 'zhangsan',
                        ),
                        'expireTime' => 
                        array (
                          'description' => '失效时间',
                          'type' => 'string',
                          'example' => '1612687809',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"total\\": {\\n      \\"totalCount\\": 1000,\\n      \\"sceneWeightItem\\": 1000,\\n      \\"sceneRecommendItem\\": 1000,\\n      \\"weightItem\\": 1000,\\n      \\"instanceRecommendItem\\": 1000\\n    },\\n    \\"detail\\": [\\n      {\\n        \\"title\\": \\"title\\",\\n        \\"categoryPath\\": \\"12_34\\",\\n        \\"itemId\\": \\"123\\",\\n        \\"itemType\\": \\"video\\",\\n        \\"status\\": \\"1\\",\\n        \\"brandId\\": \\"123\\",\\n        \\"shopId\\": \\"123\\",\\n        \\"pubTime\\": \\"1612687809\\",\\n        \\"channel\\": \\"娱乐\\",\\n        \\"duration\\": \\"300\\",\\n        \\"author\\": \\"zhangsan\\",\\n        \\"expireTime\\": \\"1612687809\\"\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<Result>\\n    <Total>\\n        <InstanceRecommendItem>200</InstanceRecommendItem>\\n        <SceneRecommendItem>50</SceneRecommendItem>\\n        <WeightItem>10</WeightItem>\\n        <SceneWeightItem>2217</SceneWeightItem>\\n        <TotalCount>5000</TotalCount>\\n    </Total>\\n    <Detail>\\n        <ItemId>15755228600501_15755228759463</ItemId>\\n        <ItemType>item</ItemType>\\n        <ExpireTime/>\\n        <CategoryPath>1024_10003</CategoryPath>\\n        <PubTime>1575523106</PubTime>\\n        <BrandId>15692083252170</BrandId>\\n        <Weight>1</Weight>\\n        <ShopId/>\\n        <Title>澜笛若慕洁面乳</Title>\\n        <Status>1</Status>\\n        <Duration>123123</Duration>\\n        <Author>123123</Author>\\n        <Channel>123123</Channel>\\n    </Detail>\\n</Result>\\n<RequestId>6839AE7C-A984-48C1-AC17-331BAC6D97BC</RequestId>","errorExample":""}]',
      'title' => '获取预览结果',
      'summary' => '获取预览结果。',
      'description' => '如需使用场景管理功能，不建议使用API进行操作。请使用控制台中“场景管理”功能，使用详情见官方文档<props="china">：[通过选投策略配置，快速搭建推荐场景](https://help.aliyun.com/document_detail/171790.html?spm=a2c4g.11186623.6.677.1f6a3483tNyo2M)</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSceneParameters' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dashboard/scene-parameters',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18715',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecX63J28',
          1 => 'FEATUREairec5G3YBA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果',
                'type' => 'object',
                'properties' => 
                array (
                  'traceId' => 
                  array (
                    'description' => '渠道列表
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'trace_id',
                      'type' => 'string',
                      'example' => 'alibaba',
                    ),
                  ),
                  'sceneId' => 
                  array (
                    'description' => '场景列表

',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '场景ID',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '当前请求的RequestID。
',
                'type' => 'string',
                'example' => 'A40E64C6-9E21-5E9C-B333-DD920AE5AB4A',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"traceId\\": [\\n      \\"alibaba\\"\\n    ],\\n    \\"sceneId\\": [\\n      \\"test\\"\\n    ]\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"A40E64C6-9E21-5E9C-B333-DD920AE5AB4A\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '获取指定实例全量的渠道和场景信息列表',
      'summary' => '获取指定实例全量的渠道和场景信息列表。',
    ),
    'ListUmengAppkeys' => 
    array (
      'path' => '/v2/openapi/umeng/appkeys',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18717',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果
',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'appkey' => 
                    array (
                      'description' => 'appkey
',
                      'type' => 'string',
                      'example' => '5ddcf39f57729e708b00000e',
                    ),
                    'platform' => 
                    array (
                      'description' => 'Android/ios',
                      'type' => 'string',
                      'example' => 'ios',
                    ),
                    'name' => 
                    array (
                      'description' => 'app名称',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"appkey\\": \\"5ddcf39f57729e708b00000e\\",\\n      \\"platform\\": \\"ios\\",\\n      \\"name\\": \\"xxx\\"\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '获取友盟 appkey 列表信息',
      'summary' => '获取友盟appkey列表信息。',
    ),
    'ListUserClusters' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/user-clusters',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18718',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '指定的实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回详情结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'gmtModified' => 
                    array (
                      'description' => '最后修改时间的UTC时间',
                      'type' => 'string',
                      'example' => '2018-12-07T02:24:26.000Z',
                    ),
                    'status' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间的UTC时间',
                      'type' => 'string',
                      'example' => '2018-12-07T02:24:26.000Z',
                    ),
                    'name' => 
                    array (
                      'description' => '用户cluster名称',
                      'type' => 'string',
                      'example' => 'mycluster-for-airec',
                    ),
                    'meta' => 
                    array (
                      'description' => 'meta',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'metaType' => 
                        array (
                          'description' => 'meta类型',
                          'type' => 'string',
                          'example' => 'UserCluster',
                        ),
                        'description' => 
                        array (
                          'description' => '描述信息',
                          'type' => 'string',
                          'example' => 'tst',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'headers' => 
              array (
                'description' => 'headers info',
                'type' => 'object',
                'properties' => 
                array (
                  'X-Total-Count' => 
                  array (
                    'description' => '总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1E2CBBA8-C623-4FEE-BC84-9672E460CA39',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"status\\": \\"1\\",\\n      \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"name\\": \\"mycluster-for-airec\\",\\n      \\"meta\\": {\\n        \\"metaType\\": \\"UserCluster\\",\\n        \\"description\\": \\"tst\\"\\n      }\\n    }\\n  ],\\n  \\"headers\\": {\\n    \\"X-Total-Count\\": 1\\n  },\\n  \\"requestId\\": \\"1E2CBBA8-C623-4FEE-BC84-9672E460CA39\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取用户集群列表',
      'summary' => '列表显示当前的实例用户cluster。',
    ),
    'QueryDataMessage' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/tables/{table}/data-message',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18730',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间秒级时间戳
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        3 => 
        array (
          'name' => 'table',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '智能推荐表名（item/user）
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'item',
          ),
        ),
        4 => 
        array (
          'name' => 'cmdType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'update/delete/add 三选一

',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'update',
          ),
        ),
        5 => 
        array (
          'name' => 'itemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 item 时必选
',
            'type' => 'string',
            'required' => false,
            'example' => '111',
          ),
        ),
        6 => 
        array (
          'name' => 'itemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 item 时必选
',
            'type' => 'string',
            'required' => false,
            'example' => 'video',
          ),
        ),
        7 => 
        array (
          'name' => 'userId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 user 时必选
',
            'type' => 'string',
            'required' => false,
            'example' => '222',
          ),
        ),
        8 => 
        array (
          'name' => 'userType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 user 时必选
',
            'type' => 'string',
            'required' => false,
            'example' => 'app',
          ),
        ),
        9 => 
        array (
          'name' => 'page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认为 1

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认每页返回 20 条

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        11 => 
        array (
          'name' => 'traceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'trace_id',
            'type' => 'string',
            'required' => false,
            'example' => 'Alibaba',
          ),
        ),
        12 => 
        array (
          'name' => 'sceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景id',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        13 => 
        array (
          'name' => 'bhvType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '	
expose 曝光

click 点击

like 点赞

comment 评论


collect 收藏

stay 停留时长

cart 加购

buy 购买

evaluate 评论',
            'type' => 'string',
            'required' => false,
            'example' => 'expose',
          ),
        ),
        14 => 
        array (
          'name' => 'messageSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CONSOLE   控制台更新物品

FEEDER  SDK更新物品',
            'type' => 'string',
            'required' => false,
            'example' => 'CONSOLE',
          ),
        ),
        15 => 
        array (
          'name' => 'imei',
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
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果
',
                'type' => 'object',
                'example' => 'xxx',
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <TotalNum>20000</TotalNum>\\n    <ReturnNum>1000</ReturnNum>\\n    <Detail>\\n        <UploadTimestamp>2019-09-09T16:00:00.000Z</UploadTimestamp>\\n        <Cmd>update</Cmd>\\n        <Content>\\n            <ItemId>0</ItemId>\\n            <ItemType>article</ItemType>\\n            <Title>abc</Title>\\n        </Content>\\n    </Detail>\\n    <Detail>\\n        <UploadTimestamp>2019-09-09T16:00:00.000Z</UploadTimestamp>\\n        <Cmd>add</Cmd>\\n        <Content>\\n            <ItemId>0</ItemId>\\n            <ItemType>article</ItemType>\\n            <Title>abc</Title>\\n        </Content>\\n    </Detail>\\n</Result>","errorExample":""}]',
      'title' => '查询用户数据表中的更新消息',
      'summary' => '用户数据表中的更新消息查询。',
      'description' => '查询用户指定实例，指定数据表中的更新消息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDataMessageStatistics' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/tables/{table}/data-message-statistics',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18731',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间秒级时间戳
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '946656000',
            'example' => '1586673466',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间秒级时间戳
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '946656000',
            'example' => '1586673466',
          ),
        ),
        3 => 
        array (
          'name' => 'table',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '智能推荐表名（item/user）
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'item',
          ),
        ),
        4 => 
        array (
          'name' => 'cmdType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'update/delete/add 三选一
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'update',
          ),
        ),
        5 => 
        array (
          'name' => 'itemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 item 时必选
',
            'type' => 'string',
            'required' => false,
            'example' => '111',
          ),
        ),
        6 => 
        array (
          'name' => 'itemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 item 时必选
',
            'type' => 'string',
            'required' => false,
            'example' => 'video',
          ),
        ),
        7 => 
        array (
          'name' => 'userId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 user 时必选
',
            'type' => 'string',
            'required' => false,
            'example' => '222',
          ),
        ),
        8 => 
        array (
          'name' => 'userType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 user 时必选
',
            'type' => 'string',
            'required' => false,
            'example' => 'app',
          ),
        ),
        9 => 
        array (
          'name' => 'traceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'trace_id
',
            'type' => 'string',
            'required' => false,
            'example' => 'Alibaba',
          ),
        ),
        10 => 
        array (
          'name' => 'sceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景id
',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        11 => 
        array (
          'name' => 'bhvType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'expose 曝光

click 点击

like 点赞

comment 评论

collect 收藏

stay 停留时长

cart 加购

buy 购买

evaluate 评论',
            'type' => 'string',
            'required' => false,
            'example' => 'expose ',
          ),
        ),
        12 => 
        array (
          'name' => 'messageSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CONSOLE

FEEDER',
            'type' => 'string',
            'required' => false,
            'example' => '  FEEDER',
          ),
        ),
        13 => 
        array (
          'name' => 'imei',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备 imei',
            'type' => 'string',
            'required' => false,
            'example' => 'd41d8cd98f00b204e9800998ecf8427e',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果
',
                'type' => 'object',
                'example' => 'xxx',
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <UploadTimestamp>123456</UploadTimestamp>\\n    <Number>100</Number>\\n</Result>\\n<Result>\\n    <UploadTimestamp>123456</UploadTimestamp>\\n    <Number>100</Number>\\n</Result>","errorExample":""}]',
      'title' => '查询用户数据表中的更新消息统计数据',
      'summary' => '用户数据表中的更新消息统计数据查询。',
      'description' => '查询用户指定实例，指定数据表中的更新消息的统计数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryExceptionHistory' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/sync-reports/exception-history',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18732',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        3 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '必填   item|behavior|user',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'user',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果
',
                'type' => 'object',
              ),
              'code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'successful',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"successful\\"\\n}","type":"json"}]',
      'title' => '异常数据历史分段查询',
      'summary' => '异常数据历史分段查询。',
    ),
    'QueryRawData' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/tables/{table}/raw-data',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18733',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecY1ADIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'table',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '智能推荐表名（item/user）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'item',
          ),
        ),
        2 => 
        array (
          'name' => 'itemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 item 时必选',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '112',
          ),
        ),
        3 => 
        array (
          'name' => 'itemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 item 时必选',
            'type' => 'string',
            'required' => false,
            'example' => 'video',
          ),
        ),
        4 => 
        array (
          'name' => 'userId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 user 时必选',
            'type' => 'string',
            'required' => false,
            'example' => '111',
          ),
        ),
        5 => 
        array (
          'name' => 'userType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'table 为 user 时必选',
            'type' => 'string',
            'required' => false,
            'example' => 'app',
          ),
        ),
        6 => 
        array (
          'name' => 'imei',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果

',
                'type' => 'object',
                'example' => 'xxx',
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'Message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"Message\\": \\"An internal server error occurred\\",\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <Detail>\\n        <ItemId>1243</ItemId>\\n        <ItemType>article</ItemType>\\n        <SceneId>1,2,3</SceneId>\\n        <Xxx>Xxx</Xxx>\\n    </Detail>\\n    <Messages>\\n        <UploadTimestamp>2019-09-09T16:00:00.000Z</UploadTimestamp>\\n        <Cmd>update</Cmd>\\n        <Content>\\n            <ItemId>0</ItemId>\\n            <ItemType>article</ItemType>\\n            <Title>abc</Title>\\n        </Content>\\n    </Messages>\\n    <Messages>\\n        <UploadTimestamp>2019-09-09T16:00:00.000Z</UploadTimestamp>\\n        <Cmd>add</Cmd>\\n        <Content>\\n            <ItemId>0</ItemId>\\n            <ItemType>article</ItemType>\\n            <Title>abc</Title>\\n        </Content>\\n    </Messages>\\n</Result>","errorExample":""}]',
      'title' => '用户数据表中的原始数据查询',
      'summary' => '用户数据表中的原始数据查询。',
      'description' => '对当前实例进行特定表和主键的检索，返回结果供客户确认。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QuerySingleAggregationReport' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/sync-reports/single-aggregation-report',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18734',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果
',
                'type' => 'object',
              ),
              'code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情',
                'type' => 'string',
                'example' => 'successful',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"successful\\"\\n}","type":"json"}]',
      'title' => '单表聚合查询',
      'summary' => '单表聚合查询（数据可能有修改）。',
    ),
    'QuerySingleReport' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/sync-reports/single-report',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18735',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
        1 => 
        array (
          'name' => 'reportType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '必填，单表报告类型：
- typeItemValidScene
- typeItemTag
- typeItemTagScene
- typeItemWeightScene
- typeItemRawScene
- typeItemExpireScene',
            'type' => 'string',
            'required' => true,
            'example' => 'typeItemTagScene',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果

',
                'type' => 'object',
                'example' => 'xxx',
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <ItemScene>1_0:1</ItemScene>\\n    <ItemValidCount>1</ItemValidCount>\\n</Result>\\n<Result>\\n    <ItemScene>1_0:0</ItemScene>\\n    <ItemValidCount>2</ItemValidCount>\\n</Result>","errorExample":""}]',
      'title' => 'QuerySingleReport',
      'summary' => '单表维度分析查询（类型可能会增加）。',
    ),
    'QuerySyncReportAggregation' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/sync-reports/aggregation',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18736',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecLALQPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004
',
          ),
        ),
        1 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
        2 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间秒级时间戳
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4102416000',
            'minimum' => '1565193600',
            'example' => '1586673466',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '查询结果
',
                'type' => 'object',
                'example' => 'xxx',
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>16B78383-2803-4964-9605-37B30C073B0E</RequestId>\\n<Result>\\n    <Level>normal</Level>\\n    <StartTime>1566489600</StartTime>\\n    <EndTime>1566658800</EndTime>\\n    <Detail>\\n        <Level>normal</Level>\\n        <TotalCount/>\\n        <Type>behavior</Type>\\n        <ErrorCount/>\\n        <ErrorPercent/>\\n    </Detail>\\n    <Detail>\\n        <Level>normal</Level>\\n        <TotalCount/>\\n        <Type>item</Type>\\n        <ErrorCount/>\\n        <ErrorPercent/>\\n    </Detail>\\n    <Detail>\\n        <Level>normal</Level>\\n        <TotalCount/>\\n        <Type>user</Type>\\n        <ErrorCount/>\\n        <ErrorPercent/>\\n    </Detail>\\n</Result>","errorExample":""}]',
      'title' => '查询整体数据概览',
      'summary' => '查询整体数据概览。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDataSource' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/dataSources',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18701',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-cn-o400whm78004',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '数据源信息列表
',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'gmtModified' => 
                    array (
                      'description' => '最后修改数据源的UTC时间。
',
                      'type' => 'string',
                      'example' => '2018-12-07T02:24:26.000Z',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建数据源的UTC时间。
',
                      'type' => 'string',
                      'example' => '2018-12-07T02:24:26.000Z',
                    ),
                    'tableName' => 
                    array (
                      'description' => '智能推荐的实例的表名。
',
                      'type' => 'string',
                      'example' => 'behavior',
                    ),
                    'meta' => 
                    array (
                      'description' => '数据源配置参数
',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'bucketName' => 
                        array (
                          'description' => 'oss数据源的bucketName信息',
                          'type' => 'string',
                          'example' => 'airec',
                        ),
                        'accessKeyId' => 
                        array (
                          'description' => '有访问ODPS权限的accesskey ID。
',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'type' => 
                        array (
                          'description' => '数据源类型，当前只支持ODPS。
',
                          'type' => 'string',
                          'example' => 'ODPS',
                        ),
                        'partition' => 
                        array (
                          'description' => 'ODPS Partition。例如：ds=20180102
',
                          'type' => 'string',
                          'example' => 'ds=20181122',
                        ),
                        'timestamp' => 
                        array (
                          'description' => 'ODPS 毫秒数据时间戳。例如：1544112000000
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1544112000000',
                        ),
                        'path' => 
                        array (
                          'description' => 'oss数据源的path信息',
                          'type' => 'string',
                          'example' => 'oss://xxx.xxx',
                        ),
                        'tableName' => 
                        array (
                          'description' => 'ODPS的table name。',
                          'type' => 'string',
                          'example' => 'test_maxcompute',
                        ),
                        'projectName' => 
                        array (
                          'description' => 'ODPS 的project name。',
                          'type' => 'string',
                          'example' => 'openrec_gray',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => 'InternalServerError',
              ),
              'requestId' => 
              array (
                'description' => '当前请求的RequestID。
',
                'type' => 'string',
                'example' => '8F81A922-6C81-46D6-B78C-CC35E16B1691',
              ),
              'message' => 
              array (
                'description' => '错误详情
',
                'type' => 'string',
                'example' => 'An internal server error occurred',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"gmtModified\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"gmtCreate\\": \\"2018-12-07T02:24:26.000Z\\",\\n      \\"tableName\\": \\"behavior\\",\\n      \\"meta\\": {\\n        \\"bucketName\\": \\"airec\\",\\n        \\"accessKeyId\\": \\"xxx\\",\\n        \\"type\\": \\"ODPS\\",\\n        \\"partition\\": \\"ds=20181122\\",\\n        \\"timestamp\\": 1544112000000,\\n        \\"path\\": \\"oss://xxx.xxx\\",\\n        \\"tableName\\": \\"test_maxcompute\\",\\n        \\"projectName\\": \\"openrec_gray\\"\\n      }\\n    }\\n  ],\\n  \\"code\\": \\"InternalServerError\\",\\n  \\"requestId\\": \\"8F81A922-6C81-46D6-B78C-CC35E16B1691\\",\\n  \\"message\\": \\"An internal server error occurred\\"\\n}","errorExample":""},{"type":"xml","example":"<GmtCreate>2018-12-07T02:24:26.000Z</GmtCreate>\\n<GmtModified>2018-12-07T02:24:26.000Z</GmtModified>\\n<TableName>item</TableName>\\n<Meta>\\n    <Type>ODPS</Type>\\n    <Timestamp>1544112000000</Timestamp>\\n    <AccessKeyId>LTAIHhxxxxxxxxxx</AccessKeyId>\\n    <ProjectName>openrec_gray</ProjectName>\\n    <TableName>content_gul_item_autotest</TableName>\\n    <Partition>ds=20181122</Partition>\\n</Meta>","errorExample":""}]',
      'title' => '获取指定实例的数据源列表',
      'summary' => '获取指定实例的数据源列表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InitComputingResource' => 
    array (
      'summary' => '初始化计算资源。',
      'path' => '/v2/openapi/instances/{instanceId}/computing-resources/actions/init',
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
        'abilityTreeCode' => '117128',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例id',
            'type' => 'string',
            'required' => false,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '计算资源类型',
            'description' => '资源类型，本期固定为：MAX_COMPUTE',
            'type' => 'string',
            'required' => false,
            'example' => '是',
          ),
        ),
        2 => 
        array (
          'name' => 'key',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '计算资源初始化参数',
            'description' => 'type=MAX_COMPUTE则为mc工作空间名称',
            'type' => 'string',
            'required' => false,
            'example' => 'MAX_COMPUTE',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>829F38F6-E2D6-4109-90A6-888160BD16C2</requestId>\\n<result>true</result>","errorExample":""}]',
      'title' => '初始化计算资源',
    ),
    'PushDocument' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/tables/{tableName}/actions/bulk',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18728',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecY1ADIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '智能推荐的实例 Id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '行业的3张表，分别是用户表(user)、物品表(item)和行为表(behavior)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'user',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => 'true/false',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '0',
              ),
              'requestId' => 
              array (
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"code\\": \\"0\\",\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '推送文档',
      'summary' => '向指定实例指定表推送文档。',
    ),
    'PushIntervention' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/actions/intervene',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18729',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecY1ADIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => 'result true/false',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'code' => 
              array (
                'description' => 'code',
                'type' => 'string',
                'example' => '1',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
              'message' => 
              array (
                'description' => '返回消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"code\\": \\"1\\",\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\",\\n  \\"message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'PushIntervention',
      'summary' => '该接口用于向指定实例推送干预数据。',
    ),
    'RebuildIndex' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}/actions/rebuild',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18737',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '算法ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'string',
                'example' => 'true',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": \\"true\\",\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","type":"json"}]',
      'title' => '重建索引',
      'summary' => '重建索引。',
    ),
    'Recommend' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/actions/recommend',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '18738',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecY1ADIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test001',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物品被投放的场景ID',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'userId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户唯一ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户最后登录的IP',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.1.1',
          ),
        ),
        4 => 
        array (
          'name' => 'imei',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID',
            'type' => 'string',
            'required' => false,
            'example' => '06e1565409c9fc4887036b974421****',
          ),
        ),
        5 => 
        array (
          'name' => 'returnCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果条数（0-50之间）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'items',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于相关推荐的item（限于相关推荐场景使用）',
            'type' => 'string',
            'required' => false,
            'example' => '1001',
          ),
        ),
        7 => 
        array (
          'name' => 'serviceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '略',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'userInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '略',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'rankOpen',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '召回排序阶段是否根据用户ID个性化排序',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'recType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推荐服务类型',
            'type' => 'string',
            'required' => false,
            'example' => 'gul',
          ),
        ),
        11 => 
        array (
          'name' => 'filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推荐过滤字符串',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJqb2luIjoiYW5kIiwiZmlsdGVycyI6W3siY29uZCI6ImNvbnRhaW4iLCJmaWVsZCI6InRhZ3MiLCJ2YWx1ZSI6IuWPjOS6uiJ9XX0.',
          ),
        ),
        12 => 
        array (
          'name' => 'strategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果需要使用坑位策略，请求参数内新增strategy="fixedSlot"，此时系统将按照坑位配置返回推荐结果',
            'type' => 'string',
            'required' => false,
            'example' => 'fixedSlot',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'matchInfo' => 
                    array (
                      'description' => '不用关心，debug时可能用到',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'traceId' => 
                    array (
                      'description' => '回传日志时使用，回传日志时，trace_id=ali',
                      'type' => 'string',
                      'example' => 'ali',
                    ),
                    'position' => 
                    array (
                      'description' => '物品在需要展示的位置，从0开始（注意：返回结果已经按照position排序，可以不用关注）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'itemId' => 
                    array (
                      'description' => '物品ID',
                      'type' => 'string',
                      'example' => '123',
                    ),
                    'itemType' => 
                    array (
                      'description' => '物品类型',
                      'type' => 'string',
                      'example' => 'item',
                    ),
                    'traceInfo' => 
                    array (
                      'description' => '返回结果里traceInfo的值（注意：每个item的值均不一样，回传日志时，需要传对应的）',
                      'type' => 'string',
                      'example' => '"1007.62381.131491.100200300000000:bcb946ed-3f09-4e9b-bf4a-c19862f42231:792783::0:s101:::15:content___130788_stall:item:i2i_common_common:0.0205279946753756:null:null:1673258031504::context__recall_index=156,context__hour=17,context__trigger_num=2::C7EF99C9-6C55-5D45-A8D5-0754082E9DCF:hot_common,i2i_common_common,i2i_swing_common,hot_full:::::"',
                    ),
                    'weight' => 
                    array (
                      'description' => '权重',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '1',
                    ),
                    'flowWeight' => 
                    array (
                      'description' => '流控加权字段；=0未加权；>0加权；<0降权',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0',
                    ),
                    'message' => 
                    array (
                      'description' => '状态信息',
                      'type' => 'string',
                      'example' => 'Successful',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '04707E49-642A-4649-827A-F8EEB07D4C27',
              ),
              'message' => 
              array (
                'description' => '状态信息',
                'type' => 'string',
                'example' => '"i2i_common_common;NotFound;1673254401;similar product/content of clicked ones;2023-01-09 16:53:21"',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [\\n    {\\n      \\"matchInfo\\": \\"xxx\\",\\n      \\"traceId\\": \\"ali\\",\\n      \\"position\\": 1,\\n      \\"itemId\\": \\"123\\",\\n      \\"itemType\\": \\"item\\",\\n      \\"traceInfo\\": \\"\\\\\\"1007.62381.131491.100200300000000:bcb946ed-3f09-4e9b-bf4a-c19862f42231:792783::0:s101:::15:content___130788_stall:item:i2i_common_common:0.0205279946753756:null:null:1673258031504::context__recall_index=156,context__hour=17,context__trigger_num=2::C7EF99C9-6C55-5D45-A8D5-0754082E9DCF:hot_common,i2i_common_common,i2i_swing_common,hot_full:::::\\\\\\"\\",\\n      \\"weight\\": 1,\\n      \\"flowWeight\\": 0,\\n      \\"message\\": \\"Successful\\"\\n    }\\n  ],\\n  \\"code\\": \\"200\\",\\n  \\"requestId\\": \\"04707E49-642A-4649-827A-F8EEB07D4C27\\",\\n  \\"message\\": \\"\\\\\\"i2i_common_common;NotFound;1673254401;similar product/content of clicked ones;2023-01-09 16:53:21\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>04707E49-642A-4649-827A-F8EEB07D4C27</RequestId>\\n<Result>\\n    <ItemId>897068</ItemId>\\n    <ItemType>article</ItemType>\\n    <MatchType>emb_title2vec_common</MatchType>\\n    <Weight>1</Weight>\\n    <Title>极简主义的“有水蛋糕”，香软甜绵5个步骤搞定，给孩子收藏了</Title>\\n    <SceneId>articleCommonRelated</SceneId>\\n    <CategoryLevel>1</CategoryLevel>\\n    <CategoryPath>none</CategoryPath>\\n    <Tags>美食</Tags>\\n    <PubTime>164</PubTime>\\n    <ExpireTime>4102416000</ExpireTime>\\n    <MatchScore>0.6191751956939697</MatchScore>\\n    <RankScore>1</RankScore>\\n    <InalScore>1</InalScore>\\n    <TraceInfo>1007.19746.107647.100200300000000:c7bd13e3-371b-4276-b142-4c1a439f21a0:1:40000:0::::2:content___1729346806:image:cd:0.0545865490313237:0.027317269681932512:0.6218346196125295:::::::::::</TraceInfo>\\n</Result>\\n<Result>\\n    <ItemId>897068</ItemId>\\n    <ItemType>article</ItemType>\\n    <MatchType>emb_title2vec_common</MatchType>\\n    <Weight>1</Weight>\\n    <Title>极简主义的“有水蛋糕”，香软甜绵5个步骤搞定，给孩子收藏了</Title>\\n    <SceneId>articleCommonRelated</SceneId>\\n    <CategoryLevel>1</CategoryLevel>\\n    <CategoryPath>none</CategoryPath>\\n    <Tags>美食</Tags>\\n    <PubTime>164</PubTime>\\n    <ExpireTime>4102416000</ExpireTime>\\n    <MatchScore>0.6191751956939697</MatchScore>\\n    <RankScore>1</RankScore>\\n    <InalScore>1</InalScore>\\n    <TraceInfo>1007.19746.107647.100200300000000:c7bd13e3-371b-4276-b142-4c1a439f21a0:1:40000:0::::2:content___1729346806:image:cd:0.0545865490313237:0.027317269681932512:0.6218346196125295:::::::::::</TraceInfo>\\n</Result>","errorExample":""}]',
      'title' => '智能推荐',
      'summary' => '该接口用于获取指定实例的推荐结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RefreshFeatureTable' => 
    array (
      'summary' => '刷新特征表，根据特征表源更新特征表，刷新策略为以用户源表为准。',
      'path' => '/v2/openapi/instances/{instanceId}/feature-tables/{type}/{featureTableId}/actions/refresh',
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
        'abilityTreeCode' => '117112',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecGK86LR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征表类型',
            'description' => '特征表类型',
            'type' => 'string',
            'required' => true,
            'example' => 'ItemFeatureTable UserFeatureTable',
          ),
        ),
        2 => 
        array (
          'name' => 'featureTableId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '特征表id',
            'description' => '特征表id',
            'type' => 'string',
            'required' => true,
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                '$ref' => '#/components/schemas/FeatureTable',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"Status\\": \\"\\",\\n    \\"Meta\\": {\\n      \\"DataSourceId\\": \\"907648f5-abae-44fd-a4c4-525cc25947e9\\",\\n      \\"FeatureList\\": [\\n        {\\n          \\"Comment\\": \\"com11\\",\\n          \\"FeatureName\\": \\"fn11\\",\\n          \\"FieldName\\": \\"fieldName11\\",\\n          \\"Status\\": \\"NotApplied 未应用 Applied 已应用\\"\\n        }\\n      ],\\n      \\"Internal\\": true,\\n      \\"MetaType\\": \\"FeatureTable\\",\\n      \\"Source\\": \\"test_project.test_table\\",\\n      \\"UpdateFrequency\\": 86400\\n    },\\n    \\"FeatureTableId\\": \\"30E70118-FC7C-4438-9287-583CE47266A9\\",\\n    \\"Type\\": \\"ItemFeatureTable 物品特征表 UserFeatureTable 用户特征表\\",\\n    \\"GmtCreate\\": \\"2021-12-10T02:59:54.000Z\\",\\n    \\"GmtModified\\": \\"2021-12-10T02:59:54.000Z\\"\\n  }\\n}","type":"json"}]',
      'title' => '刷新特征表',
    ),
    'RunSampleFormatConfig' => 
    array (
      'summary' => '触发样本格式化。',
      'path' => '/v2/openapi/instances/{instanceId}/samples/{sampleId}/format-configs/actions/run',
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
        'abilityTreeCode' => '117134',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairec5XEKC0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-test',
            'title' => 'A short description of struct',
          ),
        ),
        1 => 
        array (
          'name' => 'sampleId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '样本id',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'title' => '样本id',
          ),
        ),
        2 => 
        array (
          'name' => 'mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '格式化模式
Latest：采用最新的格式化配置（默认值）',
            'type' => 'string',
            'required' => false,
            'example' => 'latest',
            'title' => '格式化模式',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '实例id',
                'type' => 'string',
                'example' => 'airec-test',
                'title' => 'Id of the request',
              ),
              'result' => 
              array (
                'description' => '格式化配置',
                'type' => 'boolean',
                'example' => 'true',
                'title' => 'result',
              ),
            ),
            'title' => 'Schema of Response',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"airec-test\\"\\n}","errorExample":""},{"type":"xml","example":"<result>true</result>\\n<requestId>90D6B8F5-FE97-4509-9AAB-367836C51818</requestId>","errorExample":""}]',
      'title' => '触发样本格式化',
    ),
    'UnLockIndexVersion' => 
    array (
      'path' => '/v2/openapi/instances/{instanceId}/filtering-algorithms/{algorithmId}/actions/unlock',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '18741',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecXPRU1W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'airec-test',
          ),
        ),
        1 => 
        array (
          'name' => 'algorithmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '召回ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'requestId' => 
              array (
                'description' => '请求的RequestID',
                'type' => 'string',
                'example' => '829F38F6-E2D6-4109-90A6-888160BD16C2',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"829F38F6-E2D6-4109-90A6-888160BD16C2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '解锁索引版本',
      'summary' => '解锁召回表的索引版本。',
    ),
    'CreateDataDiagnoseTask' => 
    array (
      'summary' => '创建数据诊断任务。',
      'path' => '/v2/openapi/instances/{instanceId}/data-diagnose-task',
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
        'abilityTreeCode' => '138221',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecG8RBMT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
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
            'description' => '返回内容',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '创建任务是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": true\\n}","type":"json"}]',
      'title' => '创建数据诊断任务',
    ),
    'CreateUmengToken' => 
    array (
      'summary' => '创建友盟授权token',
      'path' => '/v2/openapi/umeng/token',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '148531',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecY1ADIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'code',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'type' => 'boolean',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetLatestDataDiagnoseTaskStatus' => 
    array (
      'summary' => '获取最新诊断任务状态。',
      'path' => '/v2/openapi/instances/{instanceId}/data-diagnose-task/status',
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
        'abilityTreeCode' => '138222',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecG8RBMT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '创建的任务状态
任务状态：

- RUNNING 运行中
- FAILURE  失败
- SUCCESS 成功
- NOTASK 没有任务',
                'type' => 'object',
                'example' => 'RUNNING',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '获取最新诊断任务状态',
    ),
    'ListDataDiagnoseReports' => 
    array (
      'summary' => '获取数据诊断报告 （包括用户手动触发的诊断、每天产出的周期报告、数据启动时诊断的报告）。',
      'path' => '/v2/openapi/instances/{instanceId}/data-diagnose-reports',
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
        'abilityTreeCode' => '138223',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecG8RBMT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
          ),
        ),
        1 => 
        array (
          'name' => 'taskCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建任务的时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1566489600',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{
    "todayTimeLimit":8,
    "totalCount":10,
    "reports":[
        {
            "diagnoseLevel":"low | medium | high",
            "startTime":1566489600,
            "endTime":1566489600,
            "taskCreateTime":1566489600,
            "taskSource":"manual | cycle | firstRun",
            "total":{
                "itemCount":100,
                "userCount":100,
                "bhvCount":100
            },
            "details":[
                {
                    "key":"",
                    "level":"error | warn | info",
                    "errorCount":10,
                    "errorPercent":10,
                    "sampleEnabled":true;
                }
            ]
        },
        {
            "diagnoseLevel":"low | medium | high",
            "startTime":1566489600,
            "endTime":1566489600,
            "taskCreateTime":1566489600,
            "taskSource":"manual | cycle | firstRun",
            "total":{
                "itemCount":100,
                "userCount":100,
                "bhvCount":100
            },
            "details":[
                {
                    "key":"",
                    "level":"error | warn | info",
                    "errorCount":10,
                    "errorPercent":10,
                    "sampleEnabled":true;
                }
            ]
        }
    ]
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '获取数据诊断报告 ',
    ),
    'ListDataDiagnoseSampleDetails' => 
    array (
      'summary' => '获取数据诊断报告抽样明细。',
      'path' => '/v2/openapi/instances/{instanceId}/data-diagnose-reports/sample-details',
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
        'abilityTreeCode' => '139245',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREairecG8RBMT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'airec-cn-shdjkgkeog',
          ),
        ),
        1 => 
        array (
          'name' => 'taskCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '毫秒时间戳， 诊断任务创建的时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1665936000000',
          ),
        ),
        2 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '秒级时间戳，查询的整点时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1665158400',
          ),
        ),
        3 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '秒级时间戳，查询的整点时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1682179200',
          ),
        ),
        4 => 
        array (
          'name' => 'taskSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型：firstRun, manual, cycle',
            'type' => 'string',
            'required' => true,
            'example' => 'cycle',
          ),
        ),
        5 => 
        array (
          'name' => 'key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '诊断项',
            'type' => 'string',
            'required' => true,
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '8B90B646-1678-41A3-B23F-EAC6587B0E48',
              ),
              'result' => 
              array (
                'description' => '返回详情结果',
                'type' => 'object',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8B90B646-1678-41A3-B23F-EAC6587B0E48\\",\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '获取数据诊断报告抽样明细',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'airec.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'airec.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'airec.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'airec.cn-shenzhen.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'airec.ap-southeast-1.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'airec.us-east-1.aliyuncs.com',
    ),
  ),
);
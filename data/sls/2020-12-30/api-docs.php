<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'SLS',
    'product' => 'Sls',
    'version' => '2020-12-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 111475,
      'title' => '日志项目',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProject',
        1 => 'CreateDomain',
        2 => 'CreateLogging',
        3 => 'DeleteProject',
        4 => 'DeleteLogging',
        5 => 'DeleteDomain',
        6 => 'UpdateProject',
        7 => 'UpdateLogging',
        8 => 'PutProjectTransferAcceleration',
        9 => 'GetProject',
        10 => 'ListProject',
        11 => 'GetProjectLogs',
        12 => 'GetLogging',
        13 => 'ListDomains',
      ),
    ),
    1 => 
    array (
      'id' => 111489,
      'title' => '日志库',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLogStore',
        1 => 'CreateIndex',
        2 => 'DeleteLogStore',
        3 => 'DeleteIndex',
        4 => 'PutWebtracking',
        5 => 'UpdateLogStore',
        6 => 'UpdateIndex',
        7 => 'SplitShard',
        8 => 'UpdateLogStoreMeteringMode',
        9 => 'MergeShard',
        10 => 'ListLogStores',
        11 => 'GetLogStore',
        12 => 'GetIndex',
        13 => 'ListShards',
        14 => 'GetLogs',
        15 => 'GetCursor',
        16 => 'GetContextLogs',
        17 => 'GetHistograms',
        18 => 'GetCursorTime',
        19 => 'GetLogsV2',
        20 => 'GetLogStoreMeteringMode',
      ),
    ),
    2 => 
    array (
      'id' => 191749,
      'title' => '时序库',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateMetricStoreMeteringMode',
        1 => 'GetMetricStoreMeteringMode',
      ),
    ),
    3 => 
    array (
      'id' => 191369,
      'title' => '数据集',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateStoreView',
        1 => 'DeleteStoreView',
        2 => 'UpdateStoreView',
        3 => 'GetStoreView',
        4 => 'GetStoreViewIndex',
        5 => 'ListStoreViews',
      ),
    ),
    4 => 
    array (
      'id' => 111512,
      'title' => '机器组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMachineGroup',
        1 => 'DeleteMachineGroup',
        2 => 'RemoveConfigFromMachineGroup',
        3 => 'ApplyConfigToMachineGroup',
        4 => 'UpdateMachineGroup',
        5 => 'UpdateMachineGroupMachine',
        6 => 'ListMachineGroup',
        7 => 'ListMachines',
        8 => 'GetMachineGroup',
        9 => 'GetAppliedConfigs',
        10 => 'GetAppliedMachineGroups',
      ),
    ),
    5 => 
    array (
      'id' => 111526,
      'title' => '采集配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateConfig',
        1 => 'CreateLogtailPipelineConfig',
        2 => 'DeleteConfig',
        3 => 'DeleteLogtailPipelineConfig',
        4 => 'UpdateConfig',
        5 => 'UpdateLogtailPipelineConfig',
        6 => 'GetConfig',
        7 => 'ListConfig',
        8 => 'GetLogtailPipelineConfig',
        9 => 'ListLogtailPipelineConfig',
      ),
    ),
    6 => 
    array (
      'id' => 186122,
      'title' => '仪表盘',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDashboard',
        1 => 'DeleteDashboard',
        2 => 'UpdateDashboard',
        3 => 'GetDashboard',
        4 => 'ListDashboard',
      ),
    ),
    7 => 
    array (
      'id' => 111533,
      'title' => '消费组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateConsumerGroup',
        1 => 'DeleteConsumerGroup',
        2 => 'ConsumerGroupUpdateCheckPoint',
        3 => 'UpdateConsumerGroup',
        4 => 'ConsumerGroupHeartBeat',
        5 => 'ListConsumerGroup',
        6 => 'GetCheckPoint',
      ),
    ),
    8 => 
    array (
      'id' => 111539,
      'title' => '外部存储',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateOssExternalStore',
        1 => 'CreateRdsExternalStore',
        2 => 'DeleteExternalStore',
        3 => 'UpdateRdsExternalStore',
        4 => 'UpdateOssExternalStore',
        5 => 'GetExternalStore',
      ),
    ),
    9 => 
    array (
      'id' => 111545,
      'title' => '快速查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSavedSearch',
        1 => 'DeleteSavedSearch',
        2 => 'UpdateSavedSearch',
        3 => 'ListSavedSearch',
        4 => 'GetSavedSearch',
      ),
    ),
    10 => 
    array (
      'id' => 188843,
      'title' => '告警',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAlert',
        1 => 'DeleteAlert',
        2 => 'UpdateAlert',
        3 => 'EnableAlert',
        4 => 'DisableAlert',
        5 => 'GetAlert',
        6 => 'ListAlerts',
      ),
    ),
    11 => 
    array (
      'id' => 189060,
      'title' => '导入',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateOSSIngestion',
        1 => 'DeleteOSSIngestion',
        2 => 'UpdateOSSIngestion',
        3 => 'StartOSSIngestion',
        4 => 'StopOSSIngestion',
        5 => 'GetOSSIngestion',
        6 => 'ListOSSIngestions',
      ),
    ),
    12 => 
    array (
      'id' => 111565,
      'title' => '日志投递',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateOSSExport',
        1 => 'CreateOSSHDFSExport',
        2 => 'DeleteOSSExport',
        3 => 'DeleteOSSHDFSExport',
        4 => 'UpdateOSSExport',
        5 => 'StartOSSExport',
        6 => 'StopOSSExport',
        7 => 'GetOSSExport',
        8 => 'UpdateOSSHDFSExport',
        9 => 'StartOSSHDFSExport',
        10 => 'StopOSSHDFSExport',
        11 => 'ListOSSExports',
        12 => 'GetOSSHDFSExport',
        13 => 'ListOSSHDFSExports',
      ),
    ),
    13 => 
    array (
      'id' => 189125,
      'title' => '数据加工',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateETL',
        1 => 'DeleteETL',
        2 => 'UpdateETL',
        3 => 'StartETL',
        4 => 'StopETL',
        5 => 'ListETLs',
        6 => 'GetETL',
      ),
    ),
    14 => 
    array (
      'id' => 189105,
      'title' => '定时SQL',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateScheduledSQL',
        1 => 'DeleteScheduledSQL',
        2 => 'UpdateScheduledSQL',
        3 => 'EnableScheduledSQL',
        4 => 'DisableScheduledSQL',
        5 => 'ListScheduledSQLs',
        6 => 'GetScheduledSQL',
      ),
    ),
    15 => 
    array (
      'id' => 186269,
      'title' => '机器学习',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAnnotationLabel',
        1 => 'PutAnnotationData',
        2 => 'CreateAnnotationDataSet',
        3 => 'DeleteAnnotationLabel',
        4 => 'DeleteAnnotationData',
        5 => 'DeleteAnnotationDataSet',
        6 => 'UpdateAnnotationLabel',
        7 => 'UpdateAnnotationDataSet',
        8 => 'GetAnnotationLabel',
        9 => 'ListAnnotationLabels',
        10 => 'GetAnnotationData',
        11 => 'ListAnnotationData',
        12 => 'GetAnnotationDataSet',
        13 => 'ListAnnotationDataSets',
        14 => 'GetMLServiceResults',
        15 => 'QueryMLServiceResults',
      ),
    ),
    16 => 
    array (
      'id' => 169520,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'UntagResources',
        2 => 'ListTagResources',
      ),
    ),
    17 => 
    array (
      'id' => 172655,
      'title' => '授权策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'PutProjectPolicy',
        1 => 'DeleteProjectPolicy',
        2 => 'GetProjectPolicy',
      ),
    ),
    18 => 
    array (
      'id' => 183542,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeResourceGroup',
      ),
    ),
    19 => 
    array (
      'id' => 187332,
      'title' => '云产品采集规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpsertCollectionPolicy',
        1 => 'DeleteCollectionPolicy',
        2 => 'ListCollectionPolicies',
        3 => 'GetCollectionPolicy',
      ),
    ),
    20 => 
    array (
      'id' => 190736,
      'title' => 'SQL独享实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSqlInstance',
        1 => 'UpdateSqlInstance',
        2 => 'GetSqlInstance',
      ),
    ),
    21 => 
    array (
      'id' => 190287,
      'title' => '服务开通',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenSlsService',
        1 => 'GetSlsService',
      ),
    ),
    22 => 
    array (
      'id' => 190379,
      'title' => '控制台内嵌',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTicket',
        1 => 'RefreshToken',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'Alert' => 
      array (
        'title' => '告警规则响应结果',
        'description' => '告警规则响应结果',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '告警规则ID',
            'description' => '告警规则ID',
            'type' => 'string',
            'required' => true,
            'example' => 'alert-123456',
          ),
          'displayName' => 
          array (
            'title' => '告警规则名称',
            'description' => '告警规则名称',
            'type' => 'string',
            'required' => true,
            'example' => 'alertNameExample',
          ),
          'description' => 
          array (
            'title' => '告警规则描述',
            'description' => '告警规则描述',
            'type' => 'string',
            'example' => 'Alert Desc',
          ),
          'configuration' => 
          array (
            'title' => '告警规则配置',
            'description' => '告警规则配置',
            'required' => true,
            '$ref' => '#/components/schemas/AlertConfiguration',
          ),
          'schedule' => 
          array (
            'title' => '调度配置',
            'description' => '调度配置',
            'required' => true,
            '$ref' => '#/components/schemas/Schedule',
          ),
          'createTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'lastModifiedTime' => 
          array (
            'title' => '最近一次修改时间',
            'description' => '最近一次修改时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'status' => 
          array (
            'title' => '告警状态',
            'description' => '告警状态',
            'type' => 'string',
            'example' => 'ENABLED/DISABLED',
          ),
        ),
      ),
      'AlertConfiguration' => 
      array (
        'title' => '告警规则配置',
        'description' => '告警配置',
        'type' => 'object',
        'properties' => 
        array (
          'muteUntil' => 
          array (
            'title' => '临时关闭时间',
            'description' => '临时关闭时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1698907508',
          ),
          'version' => 
          array (
            'title' => '版本',
            'description' => '版本',
            'type' => 'string',
            'required' => true,
            'example' => '2.0',
            'default' => '2.0',
          ),
          'type' => 
          array (
            'title' => '告警规则类型',
            'description' => '告警规则类型',
            'type' => 'string',
            'example' => 'default',
          ),
          'templateConfiguration' => 
          array (
            'title' => '告警模板配置',
            'description' => '告警模板配置',
            '$ref' => '#/components/schemas/TemplateConfiguration',
          ),
          'dashboard' => 
          array (
            'title' => '告警绑定的dashboardId',
            'description' => '告警绑定的dashboardId',
            'type' => 'string',
            'example' => 'dasnboardExample',
          ),
          'threshold' => 
          array (
            'title' => '连续触发阈值',
            'description' => '连续触发阈值',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'noDataFire' => 
          array (
            'title' => '是否开启无数据告警',
            'description' => '是否开启无数据告警',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
          'noDataSeverity' => 
          array (
            'title' => '无数据告警严重度',
            'description' => '无数据告警严重度',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '6',
          ),
          'sendResolved' => 
          array (
            'title' => '是否发送恢复告警',
            'description' => '是否发送恢复告警',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
          'queryList' => 
          array (
            'title' => '查询语句列表',
            'description' => '查询语句列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/AlertQuery',
            ),
            'required' => true,
          ),
          'annotations' => 
          array (
            'title' => '告警标注',
            'description' => '告警标注',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/AlertTag',
            ),
          ),
          'labels' => 
          array (
            'title' => '告警标签',
            'description' => '告警标签',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/AlertTag',
            ),
          ),
          'conditionConfiguration' => 
          array (
            'title' => '告警触发条件',
            'description' => '告警触发条件',
            '$ref' => '#/components/schemas/ConditionConfiguration',
          ),
          'severityConfigurations' => 
          array (
            'title' => '告警严重度配置',
            'description' => '告警严重度配置',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/SeverityConfiguration',
            ),
            'required' => true,
          ),
          'joinConfigurations' => 
          array (
            'title' => '告警查询分析语句集合操作配置',
            'description' => '告警查询分析语句集合操作配置',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/JoinConfiguration',
            ),
          ),
          'groupConfiguration' => 
          array (
            'title' => '分组评估配置',
            'description' => '分组评估配置',
            'required' => true,
            '$ref' => '#/components/schemas/GroupConfiguration',
          ),
          'policyConfiguration' => 
          array (
            'title' => 'SLS告警通知服务配置',
            'description' => 'SLS告警通知服务配置',
            '$ref' => '#/components/schemas/PolicyConfiguration',
          ),
          'autoAnnotation' => 
          array (
            'title' => '是否开启自动标注',
            'description' => '是否开启自动标注',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
          'sinkEventStore' => 
          array (
            'title' => '发送给EventStore配置',
            'description' => '发送给EventStore配置',
            '$ref' => '#/components/schemas/SinkEventStoreConfiguration',
          ),
          'sinkCms' => 
          array (
            'title' => '发送给云监控配置',
            'description' => '发送给云监控配置',
            '$ref' => '#/components/schemas/SinkCmsConfiguration',
          ),
          'sinkAlerthub' => 
          array (
            'title' => '发送给SLS告警管理服务配置',
            'description' => '发送给SLS告警管理服务配置',
            'required' => false,
            '$ref' => '#/components/schemas/SinkAlerthubConfiguration',
          ),
          'tags' => 
          array (
            'title' => '告警自定义标签',
            'description' => '告警自定义标签',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => 'host',
            ),
          ),
        ),
      ),
      'AlertQuery' => 
      array (
        'title' => '告警查询分析配置',
        'description' => '告警查询分析语句配置',
        'type' => 'object',
        'properties' => 
        array (
          'chartTitle' => 
          array (
            'title' => '图表名称',
            'description' => '图表名称',
            'type' => 'string',
            'example' => 'chartExmaple',
          ),
          'query' => 
          array (
            'title' => '查询分析语句',
            'description' => '查询分析语句',
            'type' => 'string',
            'required' => true,
            'example' => '* | select *',
          ),
          'timeSpanType' => 
          array (
            'title' => '时间片类型',
            'description' => '时间片类型',
            'type' => 'string',
            'required' => true,
            'example' => 'Relative',
          ),
          'start' => 
          array (
            'title' => '开始时间',
            'description' => '开始时间',
            'type' => 'string',
            'required' => true,
            'example' => '-5m',
          ),
          'end' => 
          array (
            'title' => '结束时间',
            'description' => '结束时间',
            'type' => 'string',
            'required' => true,
            'example' => 'now',
          ),
          'storeType' => 
          array (
            'title' => 'store类型',
            'description' => 'store类型',
            'type' => 'string',
            'required' => true,
            'example' => 'log',
          ),
          'project' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectExample',
          ),
          'store' => 
          array (
            'title' => 'store名称',
            'description' => 'store名称',
            'type' => 'string',
            'required' => true,
            'example' => 'store Example',
          ),
          'region' => 
          array (
            'title' => '区域',
            'description' => '区域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
          'roleArn' => 
          array (
            'title' => '角色ARN',
            'description' => '角色ARN',
            'type' => 'string',
          ),
          'dashboardId' => 
          array (
            'title' => '仪表盘ID',
            'description' => '仪表盘ID',
            'type' => 'string',
            'example' => 'dashboardExample',
          ),
          'powerSqlMode' => 
          array (
            'title' => '是否开启独享SQL',
            'description' => '是否开启独享SQL',
            'type' => 'string',
            'example' => 'auto',
          ),
          'ui' => 
          array (
            'title' => '特定场景告警前端使用',
            'description' => '特定场景告警前端使用',
            'type' => 'string',
          ),
        ),
      ),
      'AlertTag' => 
      array (
        'title' => 'alertTag',
        'description' => 'alert tag',
        'type' => 'object',
        'properties' => 
        array (
          'key' => 
          array (
            'title' => '键名',
            'description' => '键名',
            'type' => 'string',
            'example' => 'title',
          ),
          'value' => 
          array (
            'title' => '值',
            'description' => '值',
            'type' => 'string',
            'example' => 'example value',
          ),
        ),
      ),
      'ConditionConfiguration' => 
      array (
        'title' => '触发条件配置',
        'description' => '触发条件配置',
        'type' => 'object',
        'properties' => 
        array (
          'condition' => 
          array (
            'title' => '评估表达式',
            'description' => '评估表达式',
            'type' => 'string',
            'example' => 'cnt > 100',
          ),
          'countCondition' => 
          array (
            'title' => '满足评估表达式的结果条数',
            'description' => '满足评估表达式的结果条数',
            'type' => 'string',
            'example' => '__count__ > 5',
          ),
        ),
      ),
      'ConsumerGroup' => 
      array (
        'title' => 'Consumer Group',
        'description' => '消费组数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '消费者名称。',
            'description' => '消费组名称。',
            'type' => 'string',
            'example' => 'test-consumer-group',
          ),
          'timeout' => 
          array (
            'title' => '消费超时时长，单位为秒',
            'description' => '超时时间。在超时时间段内没有收到心跳，消费者将被删除。单位：秒。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '300',
          ),
          'order' => 
          array (
            'title' => '是否有序消费',
            'description' => '是否按顺序消费。

- true：在Shard中按顺序消费。Shard分裂后，先消费原Shard中数据，然后同时消费由该Shard分裂的Shard中数据。Shard合并后，先消费原Shard中数据，然后消费由原Shard合并后的新Shard中数据。
- false：不按顺序消费。即所有同时开始消费，Shard分裂或者合并后产生的新Shard，也会立即消费。',
            'type' => 'boolean',
            'example' => 'false',
          ),
        ),
      ),
      'ETL' => 
      array (
        'title' => 'ETL',
        'description' => 'ETL',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '任务名称',
            'description' => 'job name',
            'type' => 'string',
            'required' => true,
            'example' => 'etl-20240426',
          ),
          'description' => 
          array (
            'title' => '任务描述',
            'description' => 'job description',
            'type' => 'string',
            'example' => '加工作业',
          ),
          'displayName' => 
          array (
            'title' => '显示名称',
            'description' => 'job displayName',
            'type' => 'string',
            'required' => true,
            'example' => 'etljob',
          ),
          'configuration' => 
          array (
            'title' => '数据加工配置',
            'description' => '数据加工配置',
            'required' => true,
            '$ref' => '#/components/schemas/ETLConfiguration',
          ),
          'createTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1714274900',
          ),
          'lastModifiedTime' => 
          array (
            'title' => '最近一次修改时间',
            'description' => '最近一次修改时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1714274900',
          ),
          'status' => 
          array (
            'title' => '加工状态',
            'description' => '加工状态',
            'type' => 'string',
            'example' => 'RUNNING',
          ),
          'scheduleId' => 
          array (
            'title' => '调度ID',
            'description' => '调度ID',
            'type' => 'string',
            'example' => 'f0eb655e501a8780808d1970ef6d04c4',
          ),
        ),
      ),
      'ETLConfiguration' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'ETLConfiguration',
        'type' => 'object',
        'properties' => 
        array (
          'script' => 
          array (
            'title' => '加工脚本',
            'description' => '加工脚本',
            'type' => 'string',
            'required' => true,
            'example' => 'e_set("key","value")',
          ),
          'lang' => 
          array (
            'title' => '数据加工语法类型',
            'description' => '数据加工语法类型',
            'type' => 'string',
            'example' => 'SPL',
          ),
          'logstore' => 
          array (
            'title' => '源Logstore名称',
            'description' => '源Logstore名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
          'roleArn' => 
          array (
            'title' => '授权读取源Logstore的角色ARN',
            'description' => '授权读取源Logstore的角色ARN',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:ram::13234:role/logtarget',
          ),
          'accessKeyId' => 
          array (
            'title' => '授权读取源Logstore的AccessKey ID，必填。使用角色授权时，填入空字符串',
            'description' => '授权读取源Logstore的AccessKey ID，必填。使用角色授权时，填入空字符串',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
          ),
          'accessKeySecret' => 
          array (
            'title' => '授权读取源Logstore的AccessKey Secret，必填。使用角色授权时，填入空字符串。',
            'description' => '授权读取源Logstore的AccessKey Secret，必填。使用角色授权时，填入空字符串。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
          ),
          'fromTime' => 
          array (
            'title' => '加工时间起点时间戳（精确到秒），必填。从源Logstore中最早接收到的第一条日志开始消费时，填入0',
            'description' => '加工时间起点时间戳（精确到秒），必填。从源Logstore中最早接收到的第一条日志开始消费时，填入0',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '0',
          ),
          'toTime' => 
          array (
            'title' => '加工时间结束时间戳（精确到秒），必填。持续消费至手动停止时，填入0',
            'description' => '加工时间结束时间戳（精确到秒），必填。持续消费至手动停止时，填入0',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '0',
          ),
          'sinks' => 
          array (
            'title' => '加工结果输出目标列表',
            'description' => '加工结果输出目标列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/ETLConfigurationSink',
            ),
            'required' => true,
          ),
          'parameters' => 
          array (
            'title' => '高级参数配置',
            'description' => '高级参数配置',
            'type' => 'object',
            'example' => 'config.vpc.vpc_id.test1：vpc-uf6mskb0b****n9yj',
          ),
        ),
      ),
      'ETLConfigurationSink' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'ETLSinkObject',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '输出目标名称',
            'description' => '输出目标名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-etljob',
          ),
          'endpoint' => 
          array (
            'title' => '目标Project所在区域的endpoint',
            'description' => '目标Project所在区域的endpoint',
            'type' => 'string',
          ),
          'project' => 
          array (
            'title' => '目标Project名称',
            'description' => '目标Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
          'logstore' => 
          array (
            'title' => '目标Logstore名称',
            'description' => '目标Logstore名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
          'datasets' => 
          array (
            'title' => '写入结果集',
            'description' => '写入结果集',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => true,
              'example' => '__UNNAMED__',
            ),
            'minItems' => 1,
          ),
          'roleArn' => 
          array (
            'title' => '授权写入目标Logstore的角色ARN',
            'description' => '授权写入目标Logstore的角色ARN',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:ram::13234:role/logtarget',
          ),
          'accessKeyId' => 
          array (
            'title' => '授权写入目标Logstore的AccessKey ID',
            'description' => '授权写入目标Logstore的AccessKey ID',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
          ),
          'accessKeySecret' => 
          array (
            'title' => '授权写入目标Logstore的AccessKey Secret',
            'description' => '授权写入目标Logstore的AccessKey Secret',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
          ),
        ),
      ),
      'EncryptConf' => 
      array (
        'title' => 'A short description of struct',
        'description' => '加密配置数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'enable' => 
          array (
            'title' => 'enable',
            'description' => '是否启用数据加密。

- true：是
- false：否',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
            'default' => 'true',
          ),
          'encrypt_type' => 
          array (
            'title' => '加密算法，只支持default和m4。当 enable 为 true 时，此项必选。',
            'description' => '加密算法，只支持default和sm4。当enable为true时，此项必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
            'default' => 'default',
          ),
          'user_cmk_info' => 
          array (
            'description' => '可选字段。如果设置该字段，则表示使用自带密钥（BYOK），否则使用日志服务的服务密钥。',
            'example' => ' {    "cmk_key_id" : "f5136b95-2420-ab31-xxxxxxxxx"    "arn" :  "acs:ram::13234:role/logsource"    "region_id" : "cn-hangzhou"  }',
            '$ref' => '#/components/schemas/EncryptUserCmkConf',
          ),
        ),
      ),
      'EncryptUserCmkConf' => 
      array (
        'title' => 'A short description of struct',
        'description' => '用户加密配置数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'cmk_key_id' => 
          array (
            'title' => 'cmk_key_id',
            'description' => 'BYOK的主密钥ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'f5136b95-2420-ab31-xxxxxxxxx',
          ),
          'arn' => 
          array (
            'title' => 'arn',
            'description' => 'RAM角色的ARN。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:ram::13234:role/logsource',
          ),
          'region_id' => 
          array (
            'title' => 'region_id',
            'description' => '主密钥所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'GroupConfiguration' => 
      array (
        'title' => '告警分组评估配置',
        'description' => '告警分组评估配置',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '分组评估类型',
            'description' => '分组评估类型',
            'type' => 'string',
            'required' => true,
            'example' => 'custom',
          ),
          'fields' => 
          array (
            'title' => '分组评估字段',
            'description' => '分组评估字段',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => 'id',
            ),
          ),
        ),
      ),
      'Histogram' => 
      array (
        'title' => 'A short description of struct',
        'description' => '日志分布情况数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'from' => 
          array (
            'title' => '开始',
            'description' => '子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1409529600',
          ),
          'to' => 
          array (
            'title' => '结束',
            'description' => '子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1409569200',
          ),
          'count' => 
          array (
            'title' => 'count',
            'description' => '该子时间区间内查询到的日志条数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '2',
          ),
          'progress' => 
          array (
            'title' => 'progress',
            'description' => '当前查询结果在该子时间区间内的结果是否完整。

- Complete：查询已经完成，返回结果为完整结果。
- Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
            'type' => 'string',
            'example' => 'Complete',
          ),
        ),
      ),
      'JoinConfiguration' => 
      array (
        'title' => '告警集合操作配置',
        'description' => '告警集合操作配置',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '集合操作类型',
            'description' => '集合操作类型',
            'type' => 'string',
            'example' => 'left_join',
          ),
          'condition' => 
          array (
            'title' => '集合操作条件',
            'description' => '集合操作条件',
            'type' => 'string',
            'example' => '$0.id == $1.id',
          ),
        ),
      ),
      'LogContent' => 
      array (
        'title' => '日志字段',
        'description' => '日志字段',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => '自定义Key名称。',
            'description' => '自定义Key名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'key-test',
          ),
          'Value' => 
          array (
            'title' => '自定义Key对应的值。',
            'description' => '自定义Key对应的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'value-test',
          ),
        ),
      ),
      'LogGroup' => 
      array (
        'title' => '日志组',
        'description' => '日志组',
        'type' => 'object',
        'properties' => 
        array (
          'Topic' => 
          array (
            'title' => '日志主题，用户自定义字段，用于区分不同特征的日志数据。',
            'type' => 'string',
            'required' => true,
            'example' => 'topic-test',
          ),
          'Source' => 
          array (
            'title' => '日志的来源。例如产生该日志的机器的IP地址。',
            'type' => 'string',
            'example' => '192.1.1.1',
          ),
          'LogTags' => 
          array (
            'title' => '日志的标签列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/LogTag',
            ),
            'required' => true,
          ),
          'Logs' => 
          array (
            'title' => '日志列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/LogItem',
            ),
            'required' => true,
          ),
        ),
      ),
      'LogItem' => 
      array (
        'title' => '日志',
        'description' => '日志',
        'type' => 'object',
        'properties' => 
        array (
          'Time' => 
          array (
            'title' => '日志时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'description' => '日志时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1690254376',
          ),
          'Contents' => 
          array (
            'title' => '日志字段列表。',
            'description' => '日志字段列表。',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/LogContent',
            ),
            'required' => true,
          ),
        ),
      ),
      'LogTag' => 
      array (
        'title' => '日志标签',
        'description' => '日志标签',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => '自定义Key名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'key-test',
          ),
          'Value' => 
          array (
            'title' => '自定义Key对应的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'value-test',
          ),
        ),
      ),
      'LogtailConfig' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Logtail配置数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'configName' => 
          array (
            'title' => 'logtail 配置的名称。',
            'description' => '	
Logtail配置的名称，在其所属Project内必须唯一。创建Logtail配置成功后，无法修改其名称。命名规则如下：
- 只能包括小写字母、数字、短划线（-）和下划线（_）。
- 必须以小写字母或者数字开头和结尾。
- 长度必须在2~128字符之间。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-config',
          ),
          'logSample' => 
          array (
            'title' => '日志样例，可以用于自动生成正则捕获字段。',
            'description' => '日志样例。',
            'type' => 'string',
            'example' => '2022-06-14 11:13:29.796 | DEBUG    | __main__:<module>:1 - hello world',
          ),
          'inputType' => 
          array (
            'title' => 'logtail 读取日志的输入类型。',
            'description' => '日志输入的方式。可选值如下：
- **plugin**：通过Logtail插件采集MySQL Binlog等日志。
- **file**：通过固定模式（正则模式、分隔符模式等）采集文本文件中的日志。',
            'type' => 'string',
            'required' => true,
            'example' => 'file',
          ),
          'inputDetail' => 
          array (
            'title' => 'logtail 输入的详细配置。',
            'description' => '日志输入的相关配置。更多信息，请参见[inputDetail参数说明](~~29058~~)。',
            'type' => 'object',
            'required' => true,
            'example' => '"logType": "common_reg_log", "logPath": "/var/log/httpd/", "filePattern": "access*.log", "localStorage": true, "timeFormat": "%Y/%m/%d %H:%M:%S", "logBeginRegex": ".*", "regex": "(\\w+)(\\s+)", "key" :["key1", "key2"], "filterKey":["key1"], "filterRegex":["regex1"], "fileEncoding":"utf8", "topicFormat": "none"',
          ),
          'outputType' => 
          array (
            'title' => 'logtail 输出的目标类型。这里固定选择 LogService。',
            'description' => '日志输出的方式，只支持LogService，即只支持将数据上传到日志服务。',
            'type' => 'string',
            'required' => true,
            'example' => 'LogService',
          ),
          'outputDetail' => 
          array (
            'title' => 'logtail 输出的详细配置。',
            'description' => '日志输出的相关配置。更多信息，请参见[outputDetail参数说明](~~29058~~)。',
            'type' => 'object',
            'properties' => 
            array (
              'endpoint' => 
              array (
                'title' => '日志项目的 endpoint。',
                'description' => '服务入口。更多信息，请参见[服务入口](~~29008~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'cn-hangzhou-intranet.log.aliyuncs.com',
              ),
              'logstoreName' => 
              array (
                'title' => '输出的目标 logstore 名称。',
                'description' => 'Logstore名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'test-logstore',
              ),
              'region' => 
              array (
                'title' => '地域。',
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
            ),
            'required' => true,
          ),
          'createTime' => 
          array (
            'title' => '创建时间，unix 时间戳。',
            'description' => 'Logtail配置创建时间。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1655176807',
          ),
          'lastModifyTime' => 
          array (
            'title' => '最后一次修改时间，unix 时间戳。',
            'description' => 'Logtail配置最后一次更新时间。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1655176807',
          ),
        ),
      ),
      'LogtailPipelineConfig' => 
      array (
        'title' => 'Logtail流水线配置',
        'description' => 'Logtail流水线配置',
        'type' => 'object',
        'properties' => 
        array (
          'configName' => 
          array (
            'title' => '配置名称',
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-config',
            'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z_-]{0,126}[0-9a-zA-Z]$',
          ),
          'logSample' => 
          array (
            'title' => '日志样例',
            'description' => '日志样例',
            'type' => 'string',
            'example' => '127.0.0.1 - - [10/Jun/2022:12:36:49 +0800] "GET /index.html HTTP/1.1" 200',
          ),
          'global' => 
          array (
            'title' => '全局信息',
            'description' => '全局信息',
            'type' => 'object',
          ),
          'inputs' => 
          array (
            'title' => '输入插件',
            'description' => '输入插件',
            'type' => 'array',
            'items' => 
            array (
              'description' => '输入插件',
              'type' => 'object',
              'example' => '{ "Type": "input_file", "FilePaths": ["/var/log/*.log"] }',
            ),
            'required' => true,
            'minItems' => 1,
          ),
          'processors' => 
          array (
            'title' => '处理插件',
            'description' => '处理插件',
            'type' => 'array',
            'items' => 
            array (
              'description' => '处理插件',
              'type' => 'object',
              'example' => '{ "Type": "processor_parse_json_native", "SourceKey": "content" }',
            ),
            'minItems' => 1,
          ),
          'aggregators' => 
          array (
            'title' => '聚合插件',
            'description' => '聚合插件',
            'type' => 'array',
            'items' => 
            array (
              'description' => '聚合插件',
              'type' => 'object',
            ),
            'minItems' => 1,
          ),
          'flushers' => 
          array (
            'title' => '输出插件',
            'description' => '输出插件',
            'type' => 'array',
            'items' => 
            array (
              'description' => '输出插件',
              'type' => 'object',
              'example' => '{ "Type": "flusher_sls", "Project": "test_project", "Logstore": "test", "Region": "cn-hangzhou", "Endpoint": "cn-hangzhou-intranet.log.aliyuncs.com", "TelemetryType": "log" }',
            ),
            'required' => true,
            'minItems' => 1,
          ),
          'createTime' => 
          array (
            'title' => '创建时间，UNIX时间戳',
            'description' => '创建时间，UNIX时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1655176807',
          ),
          'lastModifyTime' => 
          array (
            'title' => '最后修改时间，UNIX时间戳',
            'description' => '最后修改时间，UNIX时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1655176807',
          ),
        ),
      ),
      'MLDataParam' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'MLDataParam',
        'type' => 'object',
        'properties' => 
        array (
          'annotationdataId' => 
          array (
            'title' => '数据的唯一标识',
            'description' => '数据的唯一标识',
            'type' => 'string',
            'example' => 'dc74b0f569126bb310e1ba6454c351ac',
          ),
          'dataHash' => 
          array (
            'title' => '数据内容的hash值',
            'description' => '数据内容的hash值',
            'type' => 'string',
            'example' => '59db060bd89468245d76416a68a510ac',
          ),
          'datasetId' => 
          array (
            'title' => '关联的数据集的id',
            'description' => '关联的数据集的id',
            'type' => 'string',
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
          ),
          'value' => 
          array (
            'title' => '数据来源',
            'description' => '数据来源',
            'type' => 'string',
            'example' => 'xxx/xxx/xxx/',
          ),
          'valueType' => 
          array (
            'title' => '数据来源格式',
            'description' => '数据来源格式',
            'type' => 'string',
            'example' => 'oss',
          ),
          'config' => 
          array (
            'title' => '数据的配置信息',
            'description' => '数据的配置信息',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '配置信息。',
              'type' => 'string',
              'example' => 'simulator-nginx-demo',
            ),
          ),
          'annotations' => 
          array (
            'title' => '标注信息',
            'description' => '标注信息',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '标注信息',
              'type' => 'object',
              'properties' => 
              array (
                'annotatedBy' => 
                array (
                  'title' => '标注人',
                  'description' => '标注人的aliuid',
                  'type' => 'string',
                  'example' => 'xxxx',
                ),
                'updateTime' => 
                array (
                  'title' => '更新的时间',
                  'description' => '更新的时间戳',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1694761550',
                ),
                'results' => 
                array (
                  'title' => '标注的结果',
                  'description' => '标注结果',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '标注结果',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'description' => '标注结果',
                      'type' => 'string',
                      'example' => 'SPIKE_UP_TYPE',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'predictions' => 
          array (
            'title' => '模型预览结果信息',
            'description' => '模型预览结果信息',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '模型预览结果',
              'type' => 'object',
              'properties' => 
              array (
                'annotatedBy' => 
                array (
                  'title' => '标注人',
                  'description' => '标注',
                  'type' => 'string',
                  'example' => 'xxx',
                ),
                'updateTime' => 
                array (
                  'title' => '更新的时间',
                  'description' => '更新时间',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1694761550',
                ),
                'results' => 
                array (
                  'title' => '模型预览结果',
                  'description' => '结果',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '模型预览结果',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'description' => '模型预览结果',
                      'type' => 'string',
                      'example' => 'SPIKE_UP_TYPE',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'createTime' => 
          array (
            'title' => '创建的时间',
            'description' => '创建的时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1695094335',
          ),
          'lastModifyTime' => 
          array (
            'title' => '最后一次修改的时间',
            'description' => '最后一次修改的时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1695094335',
          ),
        ),
      ),
      'MLDataSetParam' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'MLDataSetParam',
        'type' => 'object',
        'properties' => 
        array (
          'datasetId' => 
          array (
            'title' => '数据集的唯一标识',
            'description' => '数据集的唯一标识',
            'type' => 'string',
            'example' => 'd9bd488f6dd42d294495fb780858e83d',
          ),
          'name' => 
          array (
            'title' => '数据集的名称',
            'description' => '数据集的名称',
            'type' => 'string',
            'example' => 'sls_builtin_dataset_metric.shapeclassification.anomalydetection',
          ),
          'description' => 
          array (
            'title' => '数据集的描述',
            'description' => '数据集的描述',
            'type' => 'string',
            'example' => '数据集A',
          ),
          'dataType' => 
          array (
            'title' => '数据类型',
            'description' => '数据类型',
            'type' => 'string',
            'example' => 'Metric',
          ),
          'labelId' => 
          array (
            'title' => '数据集对应的标签系统id',
            'description' => '数据集对应的标签系统id',
            'type' => 'string',
            'example' => 'a191ae4ca615b0ccb93c211fc8a998af',
          ),
          'createTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1695090077',
          ),
          'lastModifyTime' => 
          array (
            'title' => '最终修改时间',
            'description' => '最终修改时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1695090077',
          ),
          'createBy' => 
          array (
            'title' => '创建的对象',
            'description' => '创建的对象',
            'type' => 'string',
            'example' => 'sls-console',
          ),
          'settingType' => 
          array (
            'title' => 'label表配置类型',
            'description' => 'label表配置类型',
            'type' => 'string',
            'example' => 'Metric.ShapeClassification.AnomalyDetection',
          ),
        ),
      ),
      'MLLabelParam' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'labelId' => 
          array (
            'title' => '标签表的唯一标识',
            'description' => '标签表的唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'abbd488f6dd42d294495fb780858e83d',
          ),
          'name' => 
          array (
            'title' => '标签表的名称',
            'description' => '标签表的名称',
            'type' => 'string',
            'required' => false,
            'example' => '标签表',
          ),
          'description' => 
          array (
            'title' => '标签表的描述信息',
            'description' => '标签表的描述信息',
            'type' => 'string',
            'required' => false,
            'example' => '默认表',
          ),
          'type' => 
          array (
            'title' => '标签表的类型',
            'description' => '标签表的类型',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
          'settings' => 
          array (
            'title' => '标签表的配置',
            'description' => '标签表的配置',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签表的配置',
              'type' => 'object',
              'properties' => 
              array (
                'mode' => 
                array (
                  'title' => '配置的模式',
                  'description' => '配置的模式',
                  'type' => 'string',
                  'example' => 'builtin',
                ),
                'type' => 
                array (
                  'title' => '配置的任务类型',
                  'description' => '配置的任务类型',
                  'type' => 'string',
                  'example' => 'Trace.RCA',
                ),
                'config' => 
                array (
                  'title' => '配置的具体信息',
                  'description' => '配置的具体信息',
                  'type' => 'string',
                  'example' => '""',
                ),
                'version' => 
                array (
                  'title' => '配置的版本号',
                  'description' => '配置的版本号',
                  'type' => 'string',
                  'example' => '0.01',
                ),
              ),
            ),
          ),
          'createTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1695090077',
          ),
          'lastModifyTime' => 
          array (
            'title' => '最后修改时间',
            'description' => '最后修改时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1695090077',
          ),
        ),
        'required' => false,
      ),
      'MLServiceAnalysisParam' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'MLServiceAnalysisParam',
        'type' => 'object',
        'properties' => 
        array (
          'parameter' => 
          array (
            'title' => 'parameter',
            'description' => 'parameter',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => 'parameter',
              'type' => 'string',
              'example' => 'parameter',
            ),
          ),
          'input' => 
          array (
            'title' => 'input',
            'description' => 'input',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'input',
              'type' => 'object',
              'additionalProperties' => 
              array (
                'description' => 'input',
                'type' => 'string',
                'example' => 'data',
              ),
            ),
          ),
        ),
      ),
      'MLServiceParam' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '微服务名称',
            'type' => 'string',
            'example' => 'service_name',
          ),
          'description' => 
          array (
            'title' => '微服务描述',
            'type' => 'string',
            'example' => '某某服务',
          ),
          'serviceType' => 
          array (
            'title' => '微服务类型',
            'type' => 'string',
            'example' => 'sls_builtin',
          ),
          'status' => 
          array (
            'title' => '微服务状态',
            'type' => 'string',
            'example' => 'running',
          ),
          'updateTimestamp' => 
          array (
            'title' => '微服务更新时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1695090077',
          ),
          'model' => 
          array (
            'title' => '微服务依赖的模型配置',
            'type' => 'object',
            'properties' => 
            array (
              'modelResourceId' => 
              array (
                'title' => '模型资源ID',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'modelResourceType' => 
              array (
                'title' => '模型资源类型',
                'type' => 'string',
                'example' => 'xxx_type',
              ),
            ),
          ),
          'resource' => 
          array (
            'title' => '微服务资源配置',
            'type' => 'object',
            'properties' => 
            array (
              'cpuLimit' => 
              array (
                'title' => '所需要CPU资源上限',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'memoryLimit' => 
              array (
                'title' => '所需要内存资源上限',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '64',
              ),
              'replica' => 
              array (
                'title' => '微服务的副本数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'gpu' => 
              array (
                'title' => '需要的GPU显存大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
            ),
          ),
        ),
      ),
      'MaxComputeExport' => 
      array (
        'title' => 'max compute export',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => 'job name',
            'type' => 'string',
            'required' => true,
            'example' => 'MaxComputeExport',
          ),
          'description' => 
          array (
            'title' => 'job description',
            'type' => 'string',
            'example' => 'MaxComputeExport',
          ),
          'displayName' => 
          array (
            'title' => 'job displayName',
            'type' => 'string',
            'required' => true,
            'example' => 'MaxComputeExport',
          ),
          'configuration' => 
          array (
            'title' => 'MC投递配置',
            'required' => true,
            '$ref' => '#/components/schemas/MaxComputeExportConfiguration',
          ),
          'createTime' => 
          array (
            'title' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'lastModifiedTime' => 
          array (
            'title' => '最近一次修改时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'status' => 
          array (
            'title' => '投递任务状态',
            'type' => 'string',
            'example' => 'RUNNING',
          ),
        ),
      ),
      'MaxComputeExportConfiguration' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'MaxComputeExportConfiguration',
        'type' => 'object',
        'properties' => 
        array (
          'logstore' => 
          array (
            'title' => '需要投递的logstore',
            'type' => 'string',
            'required' => true,
          ),
          'roleArn' => 
          array (
            'title' => '读日志服务ram角色',
            'type' => 'string',
            'required' => true,
          ),
          'sink' => 
          array (
            'required' => true,
            '$ref' => '#/components/schemas/MaxComputeExportConfigurationSink',
          ),
          'fromTime' => 
          array (
            'title' => '开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'toTime' => 
          array (
            'title' => '结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
        ),
      ),
      'MaxComputeExportConfigurationSink' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'MaxComputeExportConfigurationSink',
        'type' => 'object',
        'properties' => 
        array (
          'odpsEndpoint' => 
          array (
            'title' => 'odps url',
            'type' => 'string',
            'required' => true,
            'example' => 'http://xxxxxxxx',
          ),
          'odpsTunnelEndpoint' => 
          array (
            'title' => 'odps url',
            'type' => 'string',
            'required' => true,
          ),
          'odpsProject' => 
          array (
            'title' => 'odps项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo_project',
          ),
          'odpsTable' => 
          array (
            'title' => 'odps表名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo_table',
          ),
          'odpsRolearn' => 
          array (
            'title' => '写MaxCompute ram角色',
            'type' => 'string',
            'example' => 'acs:ram::xxxxxxx',
          ),
          'odpsAccessKeyId' => 
          array (
            'title' => '写数据ak id',
            'type' => 'string',
            'deprecated' => true,
          ),
          'odpsAccessSecret' => 
          array (
            'title' => '写数据ak secret',
            'type' => 'string',
            'deprecated' => true,
          ),
          'partitionTimeFormat' => 
          array (
            'title' => '时间分区格式',
            'type' => 'string',
            'required' => true,
            'example' => '%Y_%m_%d',
          ),
          'timeZone' => 
          array (
            'title' => '时间分区',
            'type' => 'string',
            'required' => true,
            'example' => '+0800',
          ),
          'fields' => 
          array (
            'title' => '需要投递的字段',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => '\'f1\'',
            ),
            'required' => true,
          ),
          'partitionColumn' => 
          array (
            'title' => '需要投递的分区字段',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => '\'p1\'',
            ),
            'required' => true,
          ),
        ),
      ),
      'OSSExport' => 
      array (
        'title' => 'OSS投递任务',
        'description' => 'OSS投递配置',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '任务名称',
            'description' => 'OSS投递名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-oss-1234567890-123456',
          ),
          'description' => 
          array (
            'title' => '任务描述',
            'description' => 'OSS投递描述',
            'type' => 'string',
            'required' => false,
            'example' => 'my-oss-job',
          ),
          'displayName' => 
          array (
            'title' => '显示名称',
            'description' => 'OSS投递任务显示名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-oss-job',
          ),
          'configuration' => 
          array (
            'title' => 'OSS投递配置',
            'description' => 'Oss Export Configuration',
            'required' => false,
            '$ref' => '#/components/schemas/OSSExportConfiguration',
          ),
          'createTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1718787534',
          ),
          'lastModifiedTime' => 
          array (
            'title' => '修改时间',
            'description' => '最后一次修改的时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1718787681',
          ),
          'status' => 
          array (
            'title' => 'OSS投递任务状态',
            'description' => '投递任务的状态',
            'type' => 'string',
            'required' => false,
            'example' => 'RUNNING',
          ),
        ),
        'required' => true,
      ),
      'OSSExportConfiguration' => 
      array (
        'title' => 'OSS投递配置',
        'description' => 'OSSExportConfiguration',
        'type' => 'object',
        'properties' => 
        array (
          'logstore' => 
          array (
            'title' => 'Logstore名称',
            'description' => 'Logstore名称',
            'type' => 'string',
            'required' => false,
            'example' => 'my-logstore',
          ),
          'roleArn' => 
          array (
            'title' => '角色roleArn',
            'description' => '读SLS RAM角色roleArn，请填写您自己的角色roleArn',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::1234567890:role/aliyunlogdefaultrole',
          ),
          'sink' => 
          array (
            'title' => '投递OSS配置',
            'description' => '投递OSS配置',
            'type' => 'object',
            'properties' => 
            array (
              'endpoint' => 
              array (
                'title' => 'OSS Endpoint',
                'description' => '- OSS Endpoint，只能是OSS内网Endpoint，仅支持同地域。详情请参见[OSS访问域名和数据中心](~~31837~~)，值为`http://+OSS Endpoint`。
- OSS-HDFS Endpoint，只能是OSS-HDFS内网Endpoint，仅支持同地域。',
                'type' => 'string',
                'required' => true,
                'example' => 'https://oss-cn-hangzhou-internal.aliyuncs.com',
              ),
              'bucket' => 
              array (
                'title' => 'OSS Bucket',
                'description' => 'OSS Bucket',
                'type' => 'string',
                'required' => true,
                'example' => 'my-bucket',
              ),
              'prefix' => 
              array (
                'title' => '文件前缀',
                'description' => 'OSS文件前缀',
                'type' => 'string',
                'required' => false,
                'example' => 'prefix-demo/',
              ),
              'suffix' => 
              array (
                'title' => '文件后缀',
                'description' => 'OSS文件后缀',
                'type' => 'string',
                'required' => false,
                'example' => '.json',
              ),
              'roleArn' => 
              array (
                'title' => '写角色roleArn',
                'description' => '写OSS RAM角色roleArn，请填写您自己的角色roleArn',
                'type' => 'string',
                'required' => true,
                'example' => 'acs:ram::1234567890:role/aliyunlogdefaultrole',
              ),
              'pathFormat' => 
              array (
                'title' => '分区格式',
                'description' => '分区格式，详情参见[分区格式](~~371934~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '%Y/%m/%d/%H/%M',
              ),
              'pathFormatType' => 
              array (
                'title' => '分区格式类型',
                'description' => '分区格式类型',
                'type' => 'string',
                'required' => true,
                'example' => 'time',
              ),
              'timeZone' => 
              array (
                'title' => '时区',
                'description' => '时区，详情参见[时区列表](~~375323~~)。',
                'type' => 'string',
                'required' => false,
                'example' => '+0800',
              ),
              'contentType' => 
              array (
                'title' => '存储格式',
                'description' => 'OSS文件存储支持4种格式，如：json、parquet、csv、orc',
                'type' => 'string',
                'required' => false,
                'example' => 'csv',
              ),
              'contentDetail' => 
              array (
                'title' => '内容详情',
                'description' => 'OSS文件内容详情，注意：该参数值为json格式并且应受contentType参数值的不同进行更新，参考如下详细',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'description' => 'contentType值为json时，contentDetail值的参数详细，
- 若允许投递tag，参数enableTag值为true，如：{"enableTag": true}
- 不允许投递tag，参数enableTag值为false，如：{"enableTag": false}

contentType值为csv时，contentDetail值的参数详细：
- 参数columns为源日志库中日志的key，如：["bucket", "bucket_location", "cdn_in", "cdn_out"]
- 分隔符参数delimiter，有四种情况值，如","、"|"、" " 或 "\\t"
- 参数header决定oss文件是否保留header，有两种情况值，如true或false
- 换行符参数lineFeed，有三种情况值，如"\\t"、"\\n" 或 ""
- 无效字段内容参数nullI，来指定字段名称不存在时的投递内容，如"-"
- 转义符参数quote，有三种情况值，如"\\""、"\'" 或 ""

contentType值为parquet时，contentDetail值的参数详细：
- 参数columns为源日志库中日志的key，且需携带key的数据类型，如：{\'columns\': [{\'name\': "bucket", \'type\': "string"}, {\'name\': "bucket_location", \'type\': "string"}, {\'name\': "cdn_in", \'type\': "string"},{\'name\': "cdn_out", \'type\': "string"}]

contentType值为orc时，contentDetail值的参数详细：
- 参数columns为源日志库中日志的key，且需携带key的数据类型，如：{\'columns\': [{\'name\': "bucket", \'type\': "string"}, {\'name\': "bucket_location", \'type\': "string"}, {\'name\': "cdn_in", \'type\': "string"},{\'name\': "cdn_out", \'type\': "string"}]',
                  'type' => 'any',
                  'example' => '{
    "columns": [
        "your log key1",
        "your log key2",
        "your log key3",
    ],
    "delimiter": " ",
    "header": True,
    "lineFeed": "\\n",
    "null": "-",
    "quote": "\\""
},',
                ),
              ),
              'compressionType' => 
              array (
                'title' => '压缩类型',
                'description' => '支持4种压缩类型，如：snappy、gizp、zstd、none',
                'type' => 'string',
                'required' => false,
                'example' => 'snappy',
              ),
              'bufferInterval' => 
              array (
                'title' => '投递时间',
                'description' => '投递时间，取值范围为300~900，单位为秒。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '300',
              ),
              'bufferSize' => 
              array (
                'title' => '投递大小',
                'description' => '投递的文件大小，取值范围为5~256，单位为MB。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '256',
              ),
              'delaySec' => 
              array (
                'title' => '废弃',
                'description' => '延迟投递时间
> - 该字段废弃使用。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'example' => '123',
              ),
              'delaySeconds' => 
              array (
                'title' => '延迟投递',
                'description' => '延迟投递时间，设置的时间不能超过目标Logstore的数据保存时间。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '900',
              ),
            ),
            'required' => false,
          ),
          'fromTime' => 
          array (
            'title' => '时间范围开始',
            'description' => '时间范围开始，值设为1则表示将从日志库中第一条数据开始',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1718380800',
          ),
          'toTime' => 
          array (
            'title' => '时间范围结束',
            'description' => '时间范围结束，值设为0则表示任务会一直运行，除非任务被手动停止。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1718380800',
          ),
        ),
        'required' => false,
      ),
      'OSSIngestion' => 
      array (
        'title' => 'oss ingestion job',
        'description' => 'oss ingestion job',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '导入任务名称',
            'description' => '导入任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ingest-oss-123456',
          ),
          'description' => 
          array (
            'title' => 'job description',
            'description' => 'job description',
            'type' => 'string',
            'example' => 'oss ingestion',
          ),
          'displayName' => 
          array (
            'title' => 'job displayName',
            'description' => 'job displayName',
            'type' => 'string',
            'required' => true,
            'example' => 'oss ingestion',
          ),
          'schedule' => 
          array (
            'title' => '调度配置',
            'description' => '调度配置',
            'required' => true,
            '$ref' => '#/components/schemas/Schedule',
          ),
          'configuration' => 
          array (
            'title' => 'oss导入配置',
            'description' => 'oss导入配置',
            'required' => true,
            '$ref' => '#/components/schemas/OSSIngestionConfiguration',
          ),
          'createTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1714360481',
          ),
          'lastModifiedTime' => 
          array (
            'title' => '最近一次修改时间',
            'description' => '最近一次修改时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1714360481',
          ),
          'status' => 
          array (
            'title' => '导入状态',
            'description' => '导入状态',
            'type' => 'string',
            'example' => 'RUNNING',
          ),
          'scheduleId' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'string',
            'example' => 'c7f01719d9feb105fc9d8df92af62010',
          ),
        ),
      ),
      'OSSIngestionConfiguration' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'OSS导入',
        'type' => 'object',
        'properties' => 
        array (
          'logstore' => 
          array (
            'title' => 'logstore',
            'description' => 'logstore',
            'type' => 'string',
            'required' => true,
            'example' => 'myLogstore',
          ),
          'source' => 
          array (
            'description' => 'OSS导入配置',
            'required' => true,
            '$ref' => '#/components/schemas/OSSIngestionConfigurationSource',
          ),
        ),
      ),
      'OSSIngestionConfigurationSource' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'OSS导入配置',
        'type' => 'object',
        'properties' => 
        array (
          'endpoint' => 
          array (
            'title' => 'oss endpoint',
            'description' => 'oss endpoint',
            'type' => 'string',
            'required' => true,
            'example' => 'oss-cn-hangzhou.aliyuncs.com',
          ),
          'bucket' => 
          array (
            'title' => 'oss bucket',
            'description' => 'oss bucket',
            'type' => 'string',
            'required' => true,
            'example' => 'ossbucket',
          ),
          'compressionCodec' => 
          array (
            'title' => '压缩类型：none,snappy,gzip',
            'description' => '压缩类型',
            'type' => 'string',
            'required' => true,
            'example' => 'none',
          ),
          'encoding' => 
          array (
            'title' => '编码类型',
            'description' => '编码类型',
            'type' => 'string',
            'required' => true,
            'example' => 'UTF-8',
          ),
          'format' => 
          array (
            'title' => '格式',
            'description' => '格式',
            'type' => 'object',
            'required' => true,
            'additionalProperties' => 
            array (
              'description' => 'OSS数据格式。
- 单行文本日志：`{"type":"Line"}`
- CSV：

```
{
  "type": "CSV",
  "fieldDelimiter": ",",   //分隔符
  "quoteChar": "\\"",      //引号
  "escapeChar": "\\\\",    //转义符
  "firstRowAsHeader": true,    //首行是否作为字段名称
  "maxLines": 1,    //日志最大跨行数
  "skipLeadingRows": 0   //跳过行数
}

```
- 单行JSON：`{"type": "JSON"}`
- 跨行文本日志：

```
{
  "type": "Multiline",
  "match": "after", //正字匹配位置
  "pattern": "\\\\d+", //正则表达式
  "maxLines": 10 //最大行数
}
```
- ORC：`{"type": "ORC"}`
- Parquet：`{"type": "Parquet"}`
- 阿里云OSS访问日志：`{"type": "ossAccessLog"}`
- 阿里云CDN下载日志：`{"type": "cdnDownloadedLog"}`',
              'type' => 'any',
              'example' => '{"type": "Line"}',
            ),
          ),
          'interval' => 
          array (
            'title' => '检查新文件周期',
            'description' => '检查新文件周期',
            'type' => 'string',
            'required' => true,
            'example' => 'never',
          ),
          'pattern' => 
          array (
            'title' => '文件路径正则过滤',
            'description' => '文件路径正则过滤',
            'type' => 'string',
            'example' => '.*',
          ),
          'prefix' => 
          array (
            'title' => '文件路径前缀过滤',
            'description' => '文件路径前缀过滤',
            'type' => 'string',
            'example' => 'prefix',
          ),
          'restoreObjectEnabled' => 
          array (
            'title' => '导入归档文件',
            'description' => '导入归档文件',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'startTime' => 
          array (
            'title' => '某个时间点后修改过的文件',
            'description' => '某个时间点后修改过的文件',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1714274081',
          ),
          'endTime' => 
          array (
            'title' => '某个时间点前修改过的文件',
            'description' => '某个时间点前修改过的文件',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1714360481',
          ),
          'timeField' => 
          array (
            'title' => '提取时间字段',
            'description' => '提取时间字段',
            'type' => 'string',
            'example' => '__time__',
          ),
          'timeFormat' => 
          array (
            'title' => '时间字段格式',
            'description' => '时间字段格式',
            'type' => 'string',
            'example' => 'yyyy-MM-dd HH:mm:ss',
          ),
          'timePattern' => 
          array (
            'title' => '提取时间正则',
            'description' => '提取时间正则',
            'type' => 'string',
            'example' => '[0-9]{0,2}\\/[0-9a-zA-Z]+\\/[0-9:,]+',
          ),
          'timeZone' => 
          array (
            'title' => '时间字段分区',
            'description' => '时间字段分区',
            'type' => 'string',
            'example' => 'GMT+08:00',
          ),
          'useMetaIndex' => 
          array (
            'title' => '使用OSS元数据索引',
            'description' => '使用OSS元数据索引',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
          'roleARN' => 
          array (
            'title' => 'roleArn',
            'description' => 'roleArn',
            'type' => 'string',
            'example' => 'acs:ram::12345:role/aliyunlogdefaultrole',
          ),
        ),
      ),
      'PolicyConfiguration' => 
      array (
        'title' => '告警通知策略配置',
        'description' => '告警通知策略配置',
        'type' => 'object',
        'properties' => 
        array (
          'alertPolicyId' => 
          array (
            'title' => '告警策略',
            'description' => '告警策略',
            'type' => 'string',
            'example' => 'sls.builtin.dynamic',
          ),
          'actionPolicyId' => 
          array (
            'title' => '行动策略',
            'description' => '行动策略',
            'type' => 'string',
            'example' => 'example_action_policy',
          ),
          'repeatInterval' => 
          array (
            'title' => '重复等待时间',
            'description' => '重复等待时间',
            'type' => 'string',
            'example' => '10m',
          ),
        ),
      ),
      'SavedSearch' => 
      array (
        'title' => 'A short description of struct',
        'description' => '快速查询数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'savedsearchName' => 
          array (
            'title' => 'savedsearchName',
            'description' => '快速查询名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'savedsearch-name',
          ),
          'searchQuery' => 
          array (
            'title' => 'searchQuery',
            'description' => '查询语句或者分析语句。',
            'type' => 'string',
            'required' => true,
            'example' => 'status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5',
          ),
          'logstore' => 
          array (
            'title' => 'logstore',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyun-test-logstore',
          ),
          'topic' => 
          array (
            'title' => 'topic',
            'description' => '日志主题。默认值为空字符串（""）。',
            'type' => 'string',
            'example' => 'topic',
          ),
          'displayName' => 
          array (
            'title' => 'displayName',
            'description' => '快速查询显示名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'Method统计',
          ),
        ),
      ),
      'Schedule' => 
      array (
        'title' => 'job schedule',
        'description' => '调度结构',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '定时类型：FixedRate/Cron',
            'description' => 'schedule type',
            'type' => 'string',
            'required' => true,
            'example' => 'Cron',
            'enum' => 
            array (
              0 => 'FixedRate',
              1 => 'Cron',
            ),
          ),
          'cronExpression' => 
          array (
            'title' => 'Cron情况下：cron表达式',
            'description' => 'cron表达式',
            'type' => 'string',
            'required' => false,
            'example' => '0/5 * * * *',
          ),
          'runImmediately' => 
          array (
            'title' => '定时任务是否立即执行',
            'description' => '定时任务是否立即执行',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
          'timeZone' => 
          array (
            'title' => 'Cron表达式所在时区，默认为空，表示东八区',
            'description' => 'Cron表达式所在时区，默认为空，表示东八区',
            'type' => 'string',
            'required' => false,
            'example' => '+0800',
          ),
          'delay' => 
          array (
            'title' => '定时类任务延迟执行（单位是秒：s）',
            'description' => '定时类任务延迟执行（单位是秒：s）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
          'interval' => 
          array (
            'title' => 'FixedRate情况下：固定间隔',
            'description' => '固定间隔',
            'type' => 'string',
            'required' => false,
            'example' => '1m',
          ),
        ),
        'required' => false,
      ),
      'ScheduledSQL' => 
      array (
        'title' => '定时sql调度任务',
        'description' => 'scheduled sql job request configuration',
        'type' => 'object',
        'properties' => 
        array (
          'description' => 
          array (
            'title' => '定时sql任务描述',
            'description' => 'Job Description',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a scheduled sql job',
          ),
          'displayName' => 
          array (
            'title' => '定时sql显示名称',
            'description' => 'Job DisplayName',
            'type' => 'string',
            'required' => true,
            'example' => 'This is a scheduled sql job',
          ),
          'name' => 
          array (
            'title' => '定时sql任务名称',
            'description' => 'Scheduled SQL name',
            'type' => 'string',
            'required' => true,
            'example' => 'test-scheduled-sql',
          ),
          'schedule' => 
          array (
            'title' => '调度配置',
            'description' => '调度配置',
            'required' => true,
            '$ref' => '#/components/schemas/Schedule',
          ),
          'configuration' => 
          array (
            'title' => '定时sql配置',
            'description' => '定时sql配置',
            'required' => true,
            '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
          ),
          'createTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1714123644',
          ),
          'lastModifiedTime' => 
          array (
            'title' => '最近修改时间',
            'description' => '最近修改时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1714123644',
          ),
          'scheduleId' => 
          array (
            'title' => '调度ID',
            'description' => '调度ID',
            'type' => 'string',
            'example' => 'e73f43732852064ad5d091914e39342f',
          ),
          'status' => 
          array (
            'title' => '定时SQL状态',
            'description' => '定时SQL状态',
            'type' => 'string',
            'example' => 'ENABLED',
          ),
        ),
        'required' => false,
      ),
      'ScheduledSQLConfiguration' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'script' => 
          array (
            'title' => 'SQL代码',
            'description' => 'script',
            'type' => 'string',
            'required' => true,
            'example' => '* | select *',
          ),
          'sqlType' => 
          array (
            'title' => 'SQL类型',
            'description' => 'sqlType',
            'type' => 'string',
            'required' => true,
            'example' => 'searchQuery',
          ),
          'destEndpoint' => 
          array (
            'title' => '目标Region',
            'description' => 'destEndpoint',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-intranet.log.aliyuncs.com',
          ),
          'destProject' => 
          array (
            'title' => '目标Project',
            'description' => 'destProject',
            'type' => 'string',
            'required' => true,
            'example' => 'project-demo',
          ),
          'sourceLogstore' => 
          array (
            'title' => '源库',
            'description' => 'sourceLogstore',
            'type' => 'string',
            'required' => true,
            'example' => 'source-logstore-demo',
          ),
          'destLogstore' => 
          array (
            'title' => '目标库',
            'description' => 'destLogstore',
            'type' => 'string',
            'required' => true,
            'example' => 'dest-logstore-demo',
          ),
          'roleArn' => 
          array (
            'title' => '角色ARN',
            'description' => 'roleArn',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:ram::123456789:role/aliyunlogetlrole',
          ),
          'destRoleArn' => 
          array (
            'title' => '写角色ARN',
            'description' => 'destRoleArn',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:ram::123456789:role/aliyunlogetlrole',
          ),
          'fromTimeExpr' => 
          array (
            'title' => 'SQL时间窗口开始',
            'description' => 'fromTimeExpr',
            'type' => 'string',
            'required' => true,
            'example' => '@m-1m',
          ),
          'toTimeExpr' => 
          array (
            'title' => 'SQL时间窗口结束',
            'description' => 'toTimeExpr',
            'type' => 'string',
            'required' => true,
            'example' => '@m',
          ),
          'maxRunTimeInSeconds' => 
          array (
            'title' => 'SQL超时最长时间',
            'description' => 'maxRunTimeInSeconds',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '600',
          ),
          'resourcePool' => 
          array (
            'title' => 'resourcePool',
            'description' => 'resourcePool',
            'type' => 'string',
            'required' => true,
            'example' => 'enhanced',
          ),
          'maxRetries' => 
          array (
            'title' => 'SQL超时最大次数',
            'description' => 'maxRetries',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '20',
          ),
          'fromTime' => 
          array (
            'title' => '调度时间范围开始',
            'description' => 'fromTime',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1712592000',
          ),
          'toTime' => 
          array (
            'title' => '调度时间范围结束',
            'description' => 'toTime',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '0',
          ),
          'dataFormat' => 
          array (
            'title' => '定时sql写入模式',
            'description' => 'dataFormat',
            'type' => 'string',
            'required' => true,
            'example' => 'log2log',
          ),
          'parameters' => 
          array (
            'title' => 'parameters',
            'description' => 'parameters',
            'type' => 'object',
            'required' => true,
          ),
        ),
        'required' => false,
      ),
      'SeverityConfiguration' => 
      array (
        'title' => '告警严重度配置',
        'description' => '告警严重度配置',
        'type' => 'object',
        'properties' => 
        array (
          'severity' => 
          array (
            'title' => '告警严重度数值',
            'description' => '告警严重度数值',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '8',
          ),
          'evalCondition' => 
          array (
            'title' => '触发条件配置',
            'description' => '触发条件配置',
            '$ref' => '#/components/schemas/ConditionConfiguration',
          ),
        ),
      ),
      'SinkAlerthubConfiguration' => 
      array (
        'title' => '告警发送到SLS告警管理服务的配置',
        'description' => '告警发送到SLS告警管理服务的配置',
        'type' => 'object',
        'properties' => 
        array (
          'enabled' => 
          array (
            'title' => '是否开启',
            'description' => '是否开启',
            'type' => 'boolean',
            'example' => 'true',
          ),
        ),
        'required' => false,
      ),
      'SinkCmsConfiguration' => 
      array (
        'title' => '告警发送到云监控的配置',
        'description' => '告警发送到云监控的配置',
        'type' => 'object',
        'properties' => 
        array (
          'enabled' => 
          array (
            'title' => '是否开启',
            'description' => '是否开启',
            'type' => 'boolean',
            'example' => 'true',
          ),
        ),
      ),
      'SinkEventStoreConfiguration' => 
      array (
        'title' => '告警发送到EventStore的配置',
        'description' => '告警发送到EventStore的配置',
        'type' => 'object',
        'properties' => 
        array (
          'enabled' => 
          array (
            'title' => '是否开启',
            'description' => '是否开启',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'endpoint' => 
          array (
            'title' => 'endpoint',
            'description' => 'endpoint',
            'type' => 'string',
            'example' => 'cn-shanghai-intranet.log.aliyuncs.com',
          ),
          'project' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'example' => 'exampleProject',
          ),
          'eventStore' => 
          array (
            'title' => '事件库名称',
            'description' => '事件库名称',
            'type' => 'string',
            'example' => 'exampleStore',
          ),
          'roleArn' => 
          array (
            'title' => '角色',
            'description' => '角色',
            'type' => 'string',
            'example' => 'acs:ram::123456789:role/aliyunlogetlrole',
          ),
        ),
      ),
      'StoreViewStore' => 
      array (
        'title' => '数据集中关联的日志库或时序库',
        'description' => 'StoreView store',
        'type' => 'object',
        'properties' => 
        array (
          'project' => 
          array (
            'title' => 'Project 名称',
            'description' => 'Project 名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
          'storeName' => 
          array (
            'title' => 'LogStore 或 MetricStore 名称',
            'description' => 'LogStore 或 MetricStore 名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-logstore',
          ),
          'query' => 
          array (
            'title' => '查询过滤语句',
            'description' => '查询过滤语句',
            'type' => 'string',
          ),
        ),
      ),
      'TemplateConfiguration' => 
      array (
        'title' => '模板告警配置',
        'description' => '模板告警配置',
        'type' => 'object',
        'properties' => 
        array (
          'id' => 
          array (
            'title' => '模板ID',
            'description' => '模板ID',
            'type' => 'string',
            'required' => true,
            'example' => 'sls.app.ack.ip.not_enough',
          ),
          'type' => 
          array (
            'title' => '模板类型',
            'description' => '模板类型',
            'type' => 'string',
            'required' => true,
            'example' => 'sys',
          ),
          'version' => 
          array (
            'title' => '模板版本',
            'description' => '模板版本',
            'type' => 'string',
            'example' => '1',
          ),
          'lang' => 
          array (
            'title' => '模板语言',
            'description' => '模板语言',
            'type' => 'string',
            'example' => 'cn',
          ),
          'tokens' => 
          array (
            'title' => '模板携带的token',
            'description' => '模板携带的token',
            'type' => 'object',
            'required' => false,
          ),
          'aonotations' => 
          array (
            'title' => '模板标注',
            'description' => '模板标注',
            'type' => 'object',
          ),
        ),
      ),
      'Ticket' => 
      array (
        'title' => 'Ticket结构',
        'description' => 'Ticket信息',
        'type' => 'object',
        'properties' => 
        array (
          'ticketId' => 
          array (
            'title' => 'ticket对应唯一Id',
            'type' => 'string',
            'example' => 'xxxxx',
          ),
          'ticket' => 
          array (
            'title' => 'ticket',
            'type' => 'string',
            'example' => 'xxxxx',
          ),
          'number' => 
          array (
            'title' => 'ticket最大使用次数',
            'type' => 'integer',
            'format' => 'int32',
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
          ),
          'expirationTime' => 
          array (
            'title' => 'ticket过期时间，秒为单位',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'extra' => 
          array (
            'title' => '扩展字段',
            'type' => 'string',
            'example' => '{"xx":"yy"}',
          ),
          'callerUid' => 
          array (
            'title' => 'ticket创建时的Uid',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1000000000',
          ),
          'name' => 
          array (
            'title' => '名称',
            'type' => 'string',
            'example' => '测试',
          ),
          'usedNumber' => 
          array (
            'title' => 'ticket已使用次数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'createDate' => 
          array (
            'title' => 'ticket创建时间',
            'type' => 'string',
            'example' => '2023-09-06 14:57:07',
          ),
          'expireDate' => 
          array (
            'title' => 'ticket过期时间',
            'type' => 'string',
            'example' => '2023-09-06 14:58:07',
          ),
          'valid' => 
          array (
            'title' => '是否禁止',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'sharingTo' => 
          array (
            'title' => '分享对象',
            'type' => 'string',
            'example' => '{"type":"aliyun","ids":[1,2]}',
          ),
        ),
      ),
      'chart' => 
      array (
        'title' => 'A short description of struct',
        'description' => '图表数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'title' => 
          array (
            'title' => '图表标题。支持大小写英文字母、数字、下划线_、连字符-，连字符与下划线不能作为名称开头与结尾，长度必须在[2,64] 之间。',
            'description' => '图表标题。',
            'type' => 'string',
            'required' => true,
            'example' => 'my-chart',
          ),
          'type' => 
          array (
            'title' => '图表的类型。',
            'description' => '图表类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'linepro',
          ),
          'search' => 
          array (
            'title' => '查询配置',
            'description' => '查询配置。',
            'type' => 'object',
            'required' => true,
            'example' => '(*)| SELECT date_format(__time__ - __time__ % 60, \'%H:%i:%s\') as time, count(1) as count GROUP BY time ORDER BY time',
          ),
          'display' => 
          array (
            'title' => '图表的显示配置',
            'description' => '图表的显示配置。',
            'type' => 'object',
            'required' => true,
          ),
          'action' => 
          array (
            'title' => 'action',
            'description' => 'action',
            'type' => 'object',
            'required' => true,
          ),
        ),
      ),
      'dashboard' => 
      array (
        'title' => 'A short description of struct',
        'description' => '仪表盘数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'dashboardName' => 
          array (
            'title' => '仪表盘ID。同一个Project下，仪表盘ID唯一，不可重复。',
            'description' => '仪表盘的内部显示名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dashboard-1609294922657-434834',
          ),
          'displayName' => 
          array (
            'title' => '仪表盘的展示名称。',
            'description' => '仪表盘的展示名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-alert',
          ),
          'description' => 
          array (
            'title' => '描述信息。',
            'description' => '仪表盘的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个仪表盘。',
          ),
          'attribute' => 
          array (
            'title' => '属性值，可用于修改仪表盘的布局等属性，例如 "type": "free" 自由布局， "type":"grid" 网格布局。',
            'description' => '仪表盘的属性值。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '仪表盘的属性值。',
              'type' => 'string',
              'example' => 'yyy',
            ),
          ),
          'charts' => 
          array (
            'title' => '仪表盘内包含的图表。',
            'description' => '仪表盘包含的图表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '图表数据结构。',
              '$ref' => '#/components/schemas/chart',
            ),
            'required' => true,
          ),
        ),
      ),
      'etlJob' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据加工任务数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'etlJobName' => 
          array (
            'title' => '任务名称',
            'description' => '数据加工任务名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'etl-name',
          ),
          'sourceConfig' => 
          array (
            'title' => '配置数据来源',
            'description' => '配置数据来源。',
            'type' => 'object',
            'properties' => 
            array (
              'logstoreName' => 
              array (
                'title' => 'logstore 名称',
                'description' => 'Logstore名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'my-logstore',
              ),
            ),
            'required' => true,
          ),
          'triggerConfig' => 
          array (
            'title' => '触发器配置',
            'description' => '加工任务触发器配置。',
            'type' => 'object',
            'properties' => 
            array (
              'roleArn' => 
              array (
                'title' => '角色授权配置',
                'description' => '角色授权配置，例如角色ARN为`acs:ram::13791******44:role/aliyunlogetlrole`。',
                'type' => 'string',
                'required' => true,
                'example' => 'acs:ram::13791******44:role/aliyunlogetlrole',
              ),
              'triggerInterval' => 
              array (
                'title' => '触发间隔，单位为秒，必须在 [3,600] 之间',
                'description' => '触发间隔。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '5',
              ),
              'maxRetryTime' => 
              array (
                'title' => '最大重试次数，必须在[0,100] 之间',
                'description' => '最大重试次数。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '10',
              ),
              'startingPosition' => 
              array (
                'title' => '开始位置，可选 latest、at-unixtime， 默认 latest。',
                'description' => '开始位置。',
                'type' => 'string',
                'required' => false,
                'example' => 'at-unixtime',
              ),
              'startingUnixtime' => 
              array (
                'title' => '开始时间',
                'description' => '开始时间。当startingPosition为at-unixtime时生效。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1655176807',
              ),
            ),
            'required' => true,
          ),
          'functionConfig' => 
          array (
            'title' => '运行函数配置',
            'description' => '运行函数配置。',
            'type' => 'object',
            'properties' => 
            array (
              'functionProvider' => 
              array (
                'title' => '函数 provider，可选值为 FunctionCompute 、CloudProdLogDispatch。当值为 FunctionCompute 时，endpoint、accountid 、regionName 、serviceName 、functionName 必选。',
                'description' => '函数provider。',
                'type' => 'string',
                'required' => true,
                'example' => 'FunctionCompute',
              ),
              'endpoint' => 
              array (
                'title' => 'endpoint',
                'description' => '服务入口Endpoint。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-hangzhou.log.aliyuncs.com',
              ),
              'accountId' => 
              array (
                'title' => '账户 id',
                'description' => '阿里云账号ID。',
                'type' => 'string',
                'required' => false,
                'example' => '13791******44',
              ),
              'regionName' => 
              array (
                'title' => '地域',
                'description' => '地域。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-hangzhou',
              ),
              'serviceName' => 
              array (
                'title' => '服务名',
                'description' => '服务名。',
                'type' => 'string',
                'required' => false,
                'example' => 'my-service',
              ),
              'functionName' => 
              array (
                'title' => '函数名',
                'description' => '函数名。',
                'type' => 'string',
                'required' => false,
                'example' => 'hello-world',
              ),
              'roleArn' => 
              array (
                'title' => '角色授权',
                'description' => '角色授权配置，例如角色ARN为`acs:ram::13791******44:role/aliyunlogetlrole`。',
                'type' => 'string',
                'example' => 'acs:ram::13791******44:role/aliyunlogetlrole',
              ),
            ),
            'required' => true,
          ),
          'functionParameter' => 
          array (
            'title' => '参数列表',
            'description' => '参数列表。',
            'type' => 'object',
            'required' => true,
          ),
          'enable' => 
          array (
            'title' => '是否启用',
            'description' => '是否启用。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
          'logConfig' => 
          array (
            'title' => '日志配置',
            'description' => '日志配置。',
            'type' => 'object',
            'properties' => 
            array (
              'endpoint' => 
              array (
                'title' => 'endpoint',
                'description' => '服务入口Endpoint。',
                'type' => 'string',
                'required' => true,
                'example' => 'cn-hangzhou.log.aliyuncs.com',
              ),
              'projectName' => 
              array (
                'title' => 'project 名称',
                'description' => 'Project名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'ali-test-project',
              ),
              'logstoreName' => 
              array (
                'title' => 'logstore 名称',
                'description' => 'Logstore名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'ali-test-logstore',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'etlMeta' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'etlMeta数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'etlMetaName' => 
          array (
            'title' => '名字',
            'description' => 'MetaName',
            'type' => 'string',
            'required' => true,
            'example' => 'MetaName',
          ),
          'etlMetaKey' => 
          array (
            'title' => 'key',
            'description' => 'MetaKey',
            'type' => 'string',
            'required' => true,
            'example' => 'MetaKey',
          ),
          'etlMetaTag' => 
          array (
            'title' => 'tag',
            'description' => 'MetaTag',
            'type' => 'string',
            'example' => 'MetaTag',
          ),
          'enable' => 
          array (
            'title' => '是否启用',
            'description' => 'Enable',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
          'etlMetaValue' => 
          array (
            'title' => 'value',
            'description' => 'MetaValue',
            'type' => 'string',
            'example' => 'MetaValue',
          ),
        ),
      ),
      'externalStore' => 
      array (
        'title' => 'A short description of struct',
        'description' => '外部存储数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'externalStoreName' => 
          array (
            'title' => '外部存储的名称。',
            'description' => '外部存储名称，在同一Project中名称不能重复，且和Logstore名称不能重复。',
            'type' => 'string',
            'required' => true,
            'example' => 'rds_store',
          ),
          'storeType' => 
          array (
            'title' => '类型。可选 rds-vpc 或者 oss',
            'description' => '存储类型。固定取值为rds-vpc，表示VPC下的RDS MySQL数据库。',
            'type' => 'string',
            'required' => true,
            'example' => 'rds-vpc',
          ),
          'parameter' => 
          array (
            'title' => '参数',
            'description' => '外部存储的配置参数。',
            'type' => 'object',
            'required' => true,
            'example' => '{ 		"vpc-id": "vpc-bp1aevy8sofi8mh1q****", 		"instance-id": "i-bp1b6c719dfa08exf****", 		"host": "192.168.XX.XX", 		"port": "3306", 		"username": "root", 		"password": "sfdsfldsfksfls****", 		"db": "meta", 		"table": "join_meta", 		"region": "cn-qingdao" 	}',
          ),
        ),
      ),
      'index' => 
      array (
        'title' => '日志索引',
        'description' => '索引配置数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'ttl' => 
          array (
            'title' => 'ttl',
            'description' => '日志保存时间，单位为天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '30',
          ),
          'max_text_len' => 
          array (
            'title' => '统计字段最大长度',
            'description' => '日志服务默认字段值的最大长度为2048字节，即2 KB。如果您需要修改字段值的最大长度，可设置统计字段（text）最大长度，取值范围为64~16384字节。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '2048',
          ),
          'log_reduce_white_list' => 
          array (
            'title' => '日志聚类的聚类字段过滤白名单，仅当日志聚类开启时有效',
            'description' => '日志聚类的聚类字段过滤白名单，仅当日志聚类开启时有效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '白名单字段。',
              'type' => 'string',
              'example' => 'name',
            ),
          ),
          'log_reduce_black_list' => 
          array (
            'title' => '日志聚类的聚类字段过滤黑名单，仅当日志聚类开启时有效',
            'description' => '日志聚类的聚类字段过滤黑名单，仅当日志聚类开启时有效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '黑名单字段。',
              'type' => 'string',
              'example' => 'time',
            ),
          ),
          'line' => 
          array (
            'title' => '全文索引',
            'description' => '全文索引配置。该参数和keys必须至少指定一个。',
            'type' => 'object',
            'properties' => 
            array (
              'chn' => 
              array (
                'title' => '包含中文',
                'description' => '是否包含中文。

- true：包含中文。
- false（默认值）：不包含中文。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'caseSensitive' => 
              array (
                'title' => '大小写敏感',
                'description' => '是否大小写敏感。

- true：大小写敏感。
- false（默认值）：大小写不敏感。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'token' => 
              array (
                'title' => '分词符',
                'description' => '分词符列表。可以设置一个分词参数，指定这个字段按照哪一种方式分词。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分词符。例如 ","  "."  "\\r" "\\n" 等。',
                  'type' => 'string',
                  'example' => ',',
                ),
                'required' => true,
              ),
              'include_keys' => 
              array (
                'title' => '包含的字段列表，不能与exclude_keys同时指定。',
                'description' => '包含的字段列表，不能与exclude_keys同时指定。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '包含字段列表。',
                  'type' => 'string',
                  'example' => 'includeField',
                ),
              ),
              'exclude_keys' => 
              array (
                'title' => '排除的字段列表，不能与include_keys同时指定。',
                'description' => '排除的字段列表，不能与include_keys同时指定。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '排除字段列表。',
                  'type' => 'string',
                  'example' => 'excludeField',
                ),
              ),
            ),
          ),
          'keys' => 
          array (
            'title' => '字段索引',
            'description' => '字段索引配置，key为字段名称，value为字段索引配置。该参数和line必须至少指定一个。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '字段索引配置，key为字段名称，value为字段索引配置。',
              'type' => 'object',
              'properties' => 
              array (
                'chn' => 
                array (
                  'title' => '是否包含中文',
                  'description' => '是否包含中文。仅当type参数取值为text时，必须设置。

- true：包含中文。
- false（默认值）：不包含中文。',
                  'type' => 'boolean',
                  'example' => 'true',
                ),
                'caseSensitive' => 
                array (
                  'title' => '大小写敏感',
                  'description' => '是否大小写敏感。仅当type参数取值为text时，必须设置。

- true：大小写敏感。
- false（默认值）：大小写不敏感。',
                  'type' => 'boolean',
                  'example' => 'true',
                ),
                'token' => 
                array (
                  'title' => '分词符',
                  'description' => '分词符列表。可以设置一个分词参数，指定这个字段按照哪一种方式分词。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '分词符，例如 ","、  "|" 、"." 等。',
                    'type' => 'string',
                    'example' => '|',
                  ),
                ),
                'alias' => 
                array (
                  'title' => '别名',
                  'description' => '字段的别名，例如ip。别名仅用于分析语句，查询时仍需使用原始字段名称。',
                  'type' => 'string',
                  'example' => 'myAlias',
                ),
                'type' => 
                array (
                  'title' => '字段类型',
                  'description' => '日志字段值（Value）的数据类型，可选值为text、long、double和json。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'text',
                ),
                'doc_value' => 
                array (
                  'title' => '开启统计',
                  'description' => '是否字段开启统计。

- true：开启统计。
- false：不开启统计。',
                  'type' => 'boolean',
                  'example' => 'true',
                ),
              ),
            ),
          ),
          'log_reduce' => 
          array (
            'title' => '是否开启日志聚类',
            'description' => '是否开启日志聚类。开启后白名单与黑名单至多生效其中一个。

- true：开启日志聚类。
- false（默认值）：不开启日志聚类。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'lastModifyTime' => 
          array (
            'title' => '上次修改时间',
            'description' => '上次修改时间，unix 时间戳，记录从 1970年1月1日0时0分0秒以来的所经过的秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1622186280',
          ),
        ),
      ),
      'logging' => 
      array (
        'title' => 'A short description of struct',
        'description' => '项目的服务日志数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'loggingProject' => 
          array (
            'title' => 'project 名称。',
            'description' => '服务日志要保存到的Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
          'loggingDetails' => 
          array (
            'title' => 'logging 配置项',
            'description' => '服务日志配置列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务日志配置项，每项代表开启一种服务日志类型。',
              'type' => 'object',
              'properties' => 
              array (
                'type' => 
                array (
                  'title' => 'logging 类型。',
                  'description' => '服务日志的种类。取值包括：

- consumergroup_log：消费组延迟日志
- logtail_alarm：Logtail告警日志
- operation_log：操作日志（此项服务收费）
- logtail_profile：Logtail采集日志
- metering：计量日志
- logtail_status：Logtail状态日志
- scheduledsqlalert：定时SQL任务运行日志
- etl_alert：数据加工任务的运行日志',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'consumergroup_log',
                  'enum' => 
                  array (
                    0 => 'consumergroup_log',
                    1 => 'logtail_alarm',
                    2 => 'operation_log',
                    3 => 'logtail_profile',
                    4 => 'metering',
                    5 => 'logtail_status',
                    6 => 'scheduled_sql_alert',
                    7 => 'etl_alert',
                  ),
                ),
                'logstore' => 
                array (
                  'title' => 'logstore 名称。',
                  'description' => 'Logstore名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'my-logstore',
                ),
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'logstore' => 
      array (
        'title' => 'A short description of struct',
        'description' => '日志库Logstore数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'logstoreName' => 
          array (
            'title' => 'logstore 的名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'my-logstore',
          ),
          'ttl' => 
          array (
            'title' => '数据保存的天数。',
            'description' => '数据的保存时间，单位为天。取值范围为1~3650。如果配置为3650，表示永久保存。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'shardCount' => 
          array (
            'title' => 'shard 数量。',
            'description' => 'Shard分区个数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '2',
          ),
          'enable_tracking' => 
          array (
            'title' => 'WebTracking功能支持快速采集各种浏览器以及iOS/Android/APP访问信息，默认关闭',
            'description' => '是否开启WebTracking功能。默认值为false。

- true：开启WebTracking。
- false：不开启WebTracking。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'autoSplit' => 
          array (
            'title' => '是否开启 shard 自动分裂。当写入数据量超过已有分区（Shard）写入服务能力且持续5分钟以上时，开启自动分裂功能可自动根据数据量增加分区数量',
            'description' => '是否自动分裂Shard。

- true：自动分裂Shard。
- false：不自动分裂Shard。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'maxSplitShard' => 
          array (
            'title' => '最大 shard 数量。',
            'description' => '自动分裂时最大的Shard个数，最小值是1，最大值是64。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '6',
          ),
          'appendMeta' => 
          array (
            'title' => '接收日志后，自动添加客户端外网IP和日志到达时间',
            'description' => '是否记录外网IP地址功能。默认值为false。

- true：记录外网IP地址。
- false：不记录外网IP地址。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'telemetryType' => 
          array (
            'title' => 'telemetryType',
            'description' => '要查询的日志类型。取值：

- Metrics：时序存储。
- None：非时序存储。',
            'type' => 'string',
            'example' => 'Metrics',
          ),
          'createTime' => 
          array (
            'title' => '创建时间。',
            'description' => '日志库创建时间。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1453949705',
          ),
          'lastModifyTime' => 
          array (
            'title' => '最后修改时间。',
            'description' => '日志库最后一次更新时间。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1524155379',
          ),
          'encrypt_conf' => 
          array (
            'title' => '加密配置',
            'description' => '数据加密配置。',
            '$ref' => '#/components/schemas/EncryptConf',
          ),
          'hot_ttl' => 
          array (
            'title' => '必须在 (30, ttl) 之间',
            'description' => '数据在Logstore热存储层中的存储时间，最少为30天。单位：天。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '60',
          ),
          'infrequentAccessTTL' => 
          array (
            'title' => '低频存储时间',
            'description' => '低频存储时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '30',
          ),
          'mode' => 
          array (
            'title' => '[ standard | query ]',
            'description' => '日志服务提供标准型（Standard）和查询型（Query）两种类型的Logstore。

- **standard**：支持日志服务一站式数据分析功能，适用于实时监控、交互式分析以及构建完整的可观测性系统等场景。
- **query**：支持高性能查询，索引流量费用约为Standard的一半，但不支持SQL分析，适用于数据量大、存储周期长（周、月级别以上）、无日志分析的场景。',
            'type' => 'string',
            'example' => 'standard',
          ),
          'productType' => 
          array (
            'title' => '日志所属产品类型',
            'description' => '日志所属产品类型。',
            'type' => 'string',
            'example' => 'aliyun',
          ),
        ),
      ),
      'machine' => 
      array (
        'title' => 'A short description of struct',
        'description' => '机器数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'ip' => 
          array (
            'title' => '机器 ip 地址。',
            'description' => '机器的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.xx.x',
          ),
          'machine-uniqueid' => 
          array (
            'title' => '机器的唯一标识。',
            'description' => '机器的唯一标识。',
            'type' => 'string',
            'required' => false,
            'example' => '3B70F4F1-80F7-46C4-A6C1-100***CEE647',
          ),
          'lastHeartbeatTime' => 
          array (
            'title' => '最后一次心跳时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'description' => '最后一次心跳时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1447182247',
          ),
          'userdefined-id' => 
          array (
            'title' => '机器的用户自定义标识。',
            'description' => '机器的用户自定义标识，当机器组标识类型为用户自定义类型时有效。',
            'type' => 'string',
            'example' => '无',
          ),
        ),
      ),
      'machineGroup' => 
      array (
        'title' => '机器组结构定义。',
        'description' => '机器组数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'groupName' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'machineGroup-1',
          ),
          'groupType' => 
          array (
            'title' => '机器组种类。目前固定为空字符串。',
            'description' => '机器组类型，目前固定为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '“”',
          ),
          'machineIdentifyType' => 
          array (
            'title' => '机器组标识种类，支持 IP 标识或者用户自定义标识，即 ip 、userdefined。',
            'description' => '机器标识类型。

- ip：IP地址机器组。
- userdefined：用户自定义标识机器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'ip',
          ),
          'groupAttribute' => 
          array (
            'title' => '机器组属性。',
            'description' => '机器组属性。',
            'type' => 'object',
            'properties' => 
            array (
              'groupTopic' => 
              array (
                'title' => '机器组的日志主题。',
                'description' => '机器组的日志主题。',
                'type' => 'string',
                'required' => false,
                'example' => 'testtopic',
              ),
              'externalName' => 
              array (
                'title' => '机器组所依赖的外部管理系统标识。',
                'description' => '机器组所依赖的外部管理系统标识。',
                'type' => 'string',
                'required' => false,
                'example' => 'testgroup',
              ),
            ),
          ),
          'machineList' => 
          array (
            'title' => '机器组标识列表。',
            'description' => '机器列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '机器的IP地址或自定义标识。',
              'type' => 'string',
              'example' => '47.100.XX.XX',
            ),
            'required' => true,
          ),
        ),
      ),
      'project' => 
      array (
        'title' => 'A short description of struct',
        'description' => '日志项目Project数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'createTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建Project的时间。',
            'type' => 'string',
            'example' => '2021-07-07 14:08:09',
          ),
          'lastModifyTime' => 
          array (
            'title' => '最后更新时间',
            'description' => '最后一次更新Project时间。',
            'type' => 'string',
            'example' => '2022-04-18 13:30:19',
          ),
          'description' => 
          array (
            'title' => '描述',
            'description' => 'Project描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'Description of my-project',
          ),
          'owner' => 
          array (
            'title' => 'project owner',
            'description' => 'Project所属得阿里云账号。',
            'type' => 'string',
            'example' => '""',
          ),
          'projectName' => 
          array (
            'title' => 'Project名称',
            'description' => 'Project名称，作为Host的一部分。Project名称在阿里云地域内全局唯一，创建后不可修改。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
          'region' => 
          array (
            'title' => '所在区域',
            'description' => 'Project所属地域。',
            'type' => 'string',
            'example' => 'cn-hangzhou',
          ),
          'status' => 
          array (
            'title' => '状态',
            'description' => 'Project状态。

- Normal：正常
- Disable：禁用',
            'type' => 'string',
            'example' => 'Normal',
          ),
          'resourceGroupId' => 
          array (
            'title' => '资源组Id',
            'description' => 'Project所属的资源组ID。',
            'type' => 'string',
            'example' => 'rg-acf******sq',
          ),
          'dataRedundancyType' => 
          array (
            'title' => '数据冗余类型',
            'description' => '数据冗余类型',
            'type' => 'string',
            'example' => 'LRS',
          ),
          'quota' => 
          array (
            'title' => 'project quota',
            'description' => 'project quota',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'any',
            ),
          ),
        ),
      ),
      'serviceStatus' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'status' => 
          array (
            'title' => '当前状态',
            'type' => 'string',
            'example' => 'NotExist',
          ),
          'enabled' => 
          array (
            'title' => '是否开通',
            'type' => 'boolean',
            'example' => 'false',
          ),
        ),
      ),
      'shard' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Shard数据结构。',
        'type' => 'object',
        'properties' => 
        array (
          'shardID' => 
          array (
            'title' => 'shard id',
            'description' => 'shard id',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'status' => 
          array (
            'title' => 'shard 的读写状态，readwrite 或者 readonly。',
            'description' => 'Shard状态。创建Shard时，所有Shard状态均为readwrite状态。执行分裂或合并操作后，Shard状态变更为readonly，并生成新的readwrite状态的Shard。Shard状态不影响其数据读取的性能。readwrite状态的Shard可保证数据写入性能，readonly状态的Shard不提供数据写入服务。取值包括：

- readwrite（读写）
- readonly（只读）
',
            'type' => 'string',
            'example' => 'readwrite',
          ),
          'inclusiveBeginKey' => 
          array (
            'title' => '指定Shard范围的起始值，Shard范围中包含该值。即 shard 包含MD5值在 [inclusiveBeginKey, exclusiveEndKey) 之间的日志。',
            'description' => 'Shard起始的Key值，在Shard MD5范围中包含该值。',
            'type' => 'string',
            'example' => '00000000000000000000000000000000',
          ),
          'exclusiveEndKey' => 
          array (
            'title' => '指定Shard范围的结束值，Shard范围中不包含该值。即 shard 包含MD5值在 [inclusiveBeginKey, exclusiveEndKey) 之间的日志。',
            'description' => '分区结束的Key值。',
            'type' => 'string',
            'example' => '8000000000000000000000000000000',
          ),
          'createTime' => 
          array (
            'title' => 'Shard的创建时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'description' => '分区的创建时间。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1524222931',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreateProject' => 
    array (
      'summary' => '创建一个Project。',
      'path' => '/',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
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
              'description' => 
              array (
                'title' => 'project描述信息',
                'description' => 'Project描述。',
                'type' => 'string',
                'required' => true,
                'example' => 'this is test',
              ),
              'projectName' => 
              array (
                'title' => 'project名字',
                'description' => 'Project名称在阿里云地域内全局唯一，创建后不可修改。其命名规则如下：

- Project名称必须全局唯一。
- 只能包括小写字母、数字和短划线（-）。
- 必须以小写字母或者数字开头和结尾。
- 长度为3-63字符。',
                'type' => 'string',
                'required' => true,
                'example' => 'test-project',
              ),
              'resourceGroupId' => 
              array (
                'title' => '资源组Id',
                'description' => '资源组ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'rg-aekzf******sxby',
              ),
              'dataRedundancyType' => 
              array (
                'title' => '数据冗余类型：ZRS（同城冗余）、LRS（本地冗余）',
                'description' => '容灾类型。
- LRS：本地冗余存储。

- ZRS：同城冗余存储。
',
                'type' => 'string',
                'required' => false,
                'example' => 'LRS',
                'enum' => 
                array (
                  0 => 'LRS',
                  1 => 'ZRS',
                ),
              ),
            ),
            'required' => true,
            'example' => 'test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建Project',
      'description' => '### 接口说明
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- Project名称在阿里云地域内全局唯一，创建后不可修改。
- 每个阿里云账号支持添加的project数量请参见[基础资源](~~86660~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:CreateProject`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`  |',
      'requestParamsDescription' => '请求示例：

~~~
POST / HTTP/1.1
Host:test-project.cn-hangzhou.log.aliyuncs.com
Content-Type:application/json

{
  "description" : "this is test",
  "projectName" : "test-project",
  "resourceGroupId" : "rg-aekzf******sxby"
}
~~~',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | ProjectAlreadyExist | Project already exist.  | Project已存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'CreateDomain' => 
    array (
      'summary' => '为Project绑定新的自定义域名。',
      'path' => '/domains',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求消息体。',
            'type' => 'object',
            'properties' => 
            array (
              'domainName' => 
              array (
                'description' => '域名。',
                'type' => 'string',
                'required' => true,
                'example' => 'example.com',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建自定义域名',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 403  | ExceedQuota|  domain quota exceed. | 域名创建达到上限，目前最多只支持绑定一个域名。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'CreateLogging' => 
    array (
      'summary' => '为Project创建服务日志。',
      'path' => '/logging',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求结构体。',
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'loggingProject' => 
              array (
                'title' => '服务日志要保存到的 project 名称。',
                'description' => '服务日志要保存到的Project名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'my-project',
              ),
              'loggingDetails' => 
              array (
                'title' => '服务日志配置列表。',
                'description' => '服务日志配置列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '服务日志配置项。',
                  'description' => '服务日志配置项。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'type' => 
                    array (
                      'title' => '服务日志的种类。可选 "consumergroup_log"、 "logtail_alarm"、"operation_log"、"logtail_profile"、"metering"、"logtail_status"、"scheduled_sql_alert"、 "etl_alert" 等。',
                      'description' => '服务日志的种类。取值包括：

-  consumergroup_log：消费组延迟日志
-  logtail_alarm：消费组延迟日志
- operation_log：操作日志
- logtail_profile：Logtail采集日志
- metering：计量日志
- logtail_status：Logtail状态日志
- scheduled_sql_alert：Scheduled SQL作业运行日志
-  etl_alert：数据加工作业的运行日志',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'consumergroup_log',
                      'enum' => 
                      array (
                        0 => 'consumergroup_log',
                        1 => 'logtail_alarm',
                        2 => 'operation_log',
                        3 => 'logtail_profile',
                        4 => 'metering',
                        5 => 'logtail_status',
                        6 => 'scheduled_sql_alert',
                        7 => 'etl_alert',
                      ),
                    ),
                    'logstore' => 
                    array (
                      'title' => '该种类服务日志要保存到的 logstore 名称。',
                      'description' => '该种类服务日志要保存到的Logstore名称。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'my-logstore',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建服务日志',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'DeleteProject' => 
    array (
      'summary' => '删除一个指定的Project。',
      'path' => '/',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'projetc 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-project-test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除指定Project',
      'description' => '### 接口说明
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project名称。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 删除Project后，其管理的所有日志数据及配置信息都会被释放，不可恢复。在删除Project前请慎重确认，避免数据丢失。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:DeleteProject`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`  |',
      'requestParamsDescription' => '请求示例：

DELETE / HTTP/1.1
Host:ali-project-test.cn-hangzhou.log.aliyuncs.com
Content-Type:application/json

公共请求参数',
      'responseParamsDescription' => '返回示例：

HTTP/1.1 200 OK',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist| The Project does not exist : projectName.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'DeleteLogging' => 
    array (
      'summary' => '删除一个指定Project的服务日志。',
      'path' => '/logging',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除指定服务日志',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'DeleteDomain' => 
    array (
      'summary' => '删除Project绑定的自定义域名。',
      'path' => '/domains/{domainName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'domainName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '要删除的域名',
            'description' => '要删除的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除自定义域名',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | ParameterInvalid|  specified domain does not exist. | 要删除的域名不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateProject' => 
    array (
      'summary' => '更新一个Project信息。',
      'path' => '/',
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
      ),
      'operationType' => 'write',
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
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'description' => 
              array (
                'title' => 'Project description',
                'description' => 'Project的描述。默认为空字符串。',
                'type' => 'string',
                'required' => true,
                'example' => 'Description of my-project-test',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project name',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-project-test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Access-Control-Allow-Origin' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '*',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新Project',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:UpdateProject`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`  |',
      'requestParamsDescription' => '请求示例：

PUT / HTTP/1.1
Host:ali-project-test.cn-hangzhou.log.aliyuncs.com
Content-Type:application/json

{
  "description" : "Description of my-project-test"
}',
      'responseParamsDescription' => '返回示例：

HTTP/1.1 200 OK',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist| The Project does not exist : projectName  | Project不存在。  |
| 404  | ParameterInvalid| The body is not valid json string.  | 无效的参数。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateLogging' => 
    array (
      'summary' => '更新一个Project的服务日志配置。',
      'path' => '/logging',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project 名称。',
            'description' => 'Project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求结构体。',
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'loggingProject' => 
              array (
                'title' => '服务日志要保存到的 project 名称。',
                'description' => '服务日志要保存到的 project 名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'my-project',
              ),
              'loggingDetails' => 
              array (
                'title' => '服务日志配置列表。',
                'description' => '服务日志配置列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '服务日志配置项。',
                  'description' => '服务日志配置项。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'type' => 
                    array (
                      'title' => '服务日志的种类。可选 "consumergroup_log"、 "logtail_alarm"、"operation_log"、"logtail_profile"、"metering"、"logtail_status"、"scheduled_sql_alert"、 "etl_alert" 等。',
                      'description' => '服务日志的种类。取值包括：

-  consumergroup_log：消费组延迟日志
-  logtail_alarm：消费组延迟日志
- operation_log：操作日志
- logtail_profile：Logtail采集日志
- metering：计量日志
- logtail_status：Logtail状态日志
- scheduled_sql_alert：Scheduled SQL作业运行日志
-  etl_alert：数据加工作业的运行日志',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'consumergroup_log',
                      'enum' => 
                      array (
                        0 => 'consumergroup_log',
                        1 => 'logtail_alarm',
                        2 => 'operation_log',
                        3 => 'logtail_profile',
                        4 => 'metering',
                        5 => 'logtail_status',
                        6 => 'scheduled_sql_alert',
                        7 => 'etl_alert',
                      ),
                    ),
                    'logstore' => 
                    array (
                      'title' => '该种类服务日志要保存到的 logstore 名称。',
                      'description' => '该种类服务日志要保存到的Logstore名称。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'my-logstore',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新服务日志配置',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'PutProjectTransferAcceleration' => 
    array (
      'summary' => '开通或关闭传输加速。',
      'path' => '/transferacceleration',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '205449',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsMYXSJS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'enabled' => 
              array (
                'description' => '是否开通传输加速',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '配置传输加速',
    ),
    'GetProject' => 
    array (
      'summary' => '查询目标Project的详细信息。',
      'path' => '/',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-project-test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => 'Project详细信息。',
            'example' => '{     "createTime": "2020-11-18 16:55:57",     "description": "test",     "lastModifyTime": "2020-11-18 17:07:26",     "owner": "174****745",     "projectName": "ali-project-test",     "region": "cn-hangzhou",     "status": "Normal" }',
            '$ref' => '#/components/schemas/project',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"createTime\\": \\"\\",\\n  \\"lastModifyTime\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"owner\\": \\"\\",\\n  \\"projectName\\": \\"\\",\\n  \\"region\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"resourceGroupId\\": \\"\\",\\n  \\"dataRedundancyType\\": \\"LRS\\",\\n  \\"quota\\": {\\n    \\"key\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取指定Project',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist| The Project does not exist : projectName  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'ListProject' => 
    array (
      'summary' => '列出符合条件的Project信息。',
      'path' => '/',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '8912',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsMYXSJS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '默认值为 500。',
            'description' => '分页查询时，设置的每页行数。默认值为100，最多返回500个Project信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '500',
          ),
        ),
        3 => 
        array (
          'name' => 'resourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzf******sxby',
          ),
        ),
        4 => 
        array (
          'name' => 'fetchQuota',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Access-Control-Allow-Origin' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '*',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => 'Project列表。',
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'description' => '当前页返回的Project个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'total' => 
              array (
                'description' => '符合查询条件的Project总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '11',
              ),
              'projects' => 
              array (
                'description' => '符合查询条件Project列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '符合查询条件Project。',
                  'example' => '不涉及',
                  '$ref' => '#/components/schemas/project',
                ),
                'example' => '不涉及',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"count\\": 2,\\n  \\"total\\": 11,\\n  \\"projects\\": [\\n    {\\n      \\"createTime\\": \\"\\",\\n      \\"lastModifyTime\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"owner\\": \\"\\",\\n      \\"projectName\\": \\"\\",\\n      \\"region\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"resourceGroupId\\": \\"\\",\\n      \\"dataRedundancyType\\": \\"LRS\\",\\n      \\"quota\\": {\\n        \\"key\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出Project信息',
      'description' => '### 接口说明
Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'requestParamsDescription' => '请求示例：

GET /?projectName=ali-test-project&offset=0&size=10 HTTP/1.1
Host:ali-test-project.cn-hangzhou.log.aliyuncs.com
Content-Type:application/json',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ParameterInvalid | offset : offset pair is invalid  | offset参数取值不合法。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'GetProjectLogs' => 
    array (
      'summary' => '查询目标Project下的日志，该接口是Project级别的SQL查询接口。',
      'path' => '/logs',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '8913',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsCAO32E',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'query',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标准SQL语句。例如日志库名称为nginx-moni，查询时间区间在2022-03-01 10:41:40到2022-03-01 10:56:40之间的访问数量。',
            'description' => '标准SQL语句。例如日志库名称为nginx-moni，查询时间区间在2022-03-01 10:41:40到2022-03-01 10:56:40之间的访问数量。',
            'type' => 'string',
            'required' => true,
            'example' => 'SELECT COUNT(*) as pv FROM nginx-moni where __time__ > 1646102500 and __time__ < 1646103400',
          ),
        ),
        2 => 
        array (
          'name' => 'powerSql',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否使用SQL独享版。更多信息，请参见开启SQL独享版。

true：使用SQL独享版。
false（默认值）：使用SQL普通版。
除通过powerSql参数配置SQL独享版外，您还可以使用query参数。',
            'description' => '是否使用SQL独享版。更多信息，请参见[开启SQL独享版](~~223777~~)。

- true：使用SQL独享版。
- false（默认值）：使用SQL普通版。

除通过powerSql参数配置SQL独享版外，您还可以使用**query**参数。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-log-progress' => 
            array (
              'schema' => 
              array (
                'title' => '查询结果的状态，包括：  Complete：查询已经完成，返回结果为完整结果。 Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                'type' => 'string',
                'example' => 'Complete',
              ),
            ),
            'x-log-count' => 
            array (
              'schema' => 
              array (
                'title' => '当前查询结果的日志总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10000',
              ),
            ),
            'x-log-processed-rows' => 
            array (
              'schema' => 
              array (
                'title' => '本次查询处理的行数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10000',
              ),
            ),
            'x-log-elapsed-millisecond' => 
            array (
              'schema' => 
              array (
                'title' => '本次查询消耗的毫秒时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '返回日志列表，列表中每一项对应一条返回的日志。',
            'description' => '查询到的日志。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '每条日志是一个 Map<String,String>, 示例 {
  "__time__" : 1409529660,
  "__source__" : "192.168.1.100",
  "Key1" : "error",
  "Key2" : "Value2"
}',
              'description' => '查询到的日志。',
              'type' => 'object',
              'additionalProperties' => 
              array (
                'type' => 'string',
                'description' => '查询到的日志。',
                'example' => '[ { "__time__" : 1409529660, "__source__" : "192.168.1.100", "Key1" : "error", "Key2" : "Value2" }, { "__time__" : 1409529680, "__source__" : "192.168.1.100", "Key3" : "error", "Key4" : "Value4" } ]',
              ),
              'example' => '[ {   "__time__" : 1409529660,   "__source__" : "192.168.1.100",   "Key1" : "error",   "Key2" : "Value2" }, {   "__time__" : 1409529680,   "__source__" : "192.168.1.100",   "Key3" : "error",   "Key4" : "Value4" } ]',
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"key\\": \\"[ { \\\\\\"__time__\\\\\\" : 1409529660, \\\\\\"__source__\\\\\\" : \\\\\\"192.168.1.100\\\\\\", \\\\\\"Key1\\\\\\" : \\\\\\"error\\\\\\", \\\\\\"Key2\\\\\\" : \\\\\\"Value2\\\\\\" }, { \\\\\\"__time__\\\\\\" : 1409529680, \\\\\\"__source__\\\\\\" : \\\\\\"192.168.1.100\\\\\\", \\\\\\"Key3\\\\\\" : \\\\\\"error\\\\\\", \\\\\\"Key4\\\\\\" : \\\\\\"Value4\\\\\\" } ]\\"\\n  }\\n]","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取目标Project下的日志',
      'description' => '### 接口说明
- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。
- 查询日志前，已配置索引。具体操作，请参见[创建索引](~~90732~~)。
- 日志服务查询日志时存在使用限制。请设计合理查询与分析语句、设置合理查询区间等。更多信息，请参见[查询日志使用限制](~~43772~~)和[分析日志使用限制](~~53608~~)。
- 参数query是一个标准的SQL查询语句。
- 查询的Logstore在查询语句的from条件中指定。可以将Logstore看做是SQL中的表。
- 在查询的SQL条件中必须指定要查询的时间范围，时间范围由__date__（Timestamp类型）或__time__（Integer类型，单位是秒）来指定。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:GetProjectLogs`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`  |',
      'requestParamsDescription' => '**请求示例：** 

~~~
GET /logs?query=SELECT COUNT(*) as pv FROM nginx-moni where __time__ > 1646102500 and __time__ < 1646103400&powerSql=false HTTP/1.1
Host:ali-test-project.ch-hangzhou.log.aliyuncs.com
Content-Type:application/json
~~~',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
|  400 |  ParameterInvalid|  Parameter is invalid. | 请求的参数错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetLogging' => 
    array (
      'summary' => '查询目标Project的服务日志配置。',
      'path' => '/logging',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '服务日志信息。',
            'example' => '{"loggingDetails":[{"logstore":"internal-diagnostic_log","type":"consumergroup_log"},{"logstore":"internal-diagnostic_log","type":"logtail_alarm"},{"logstore":"internal-diagnostic_log","type":"logtail_profile"},{"logstore":"internal-diagnostic_log","type":"metering"},{"logstore":"internal-diagnostic_log","type":"scheduled_sql_alert"},{"logstore":"internal-diagnostic_log","type":"logtail_status"},{"logstore":"internal-diagnostic_log","type":"etl_alert"}],"loggingProject":"java-sdk-test-project-name"}
',
            '$ref' => '#/components/schemas/logging',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"loggingProject\\": \\"my-project\\",\\n  \\"loggingDetails\\": [\\n    {\\n      \\"type\\": \\"consumergroup_log\\",\\n      \\"logstore\\": \\"my-logstore\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取服务日志信息',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'ListDomains' => 
    array (
      'summary' => '列出Project绑定的自定义域名。',
      'path' => '/domains',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project name',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询开始的位置。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置的每页行数。默认值为500，最大值为500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'domainName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用于搜索匹配的自定义域名',
            'description' => '用于匹配自定义域名，例如`example.com`会匹配到`a.example.com`与`b.example.com`。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '请求返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'domains' => 
              array (
                'description' => '域名列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '域名。',
                  'type' => 'string',
                  'example' => 'example.com',
                ),
              ),
              'count' => 
              array (
                'description' => '当前页返回的域名数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'total' => 
              array (
                'description' => '域名总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domains\\": [\\n    \\"example.com\\"\\n  ],\\n  \\"count\\": 1,\\n  \\"total\\": 1\\n}","type":"json"}]',
      'title' => '查询自定义域名',
      'description' => '- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 目前每个Project最多只可以绑定一个自定义域名。',
    ),
    'CreateLogStore' => 
    array (
      'summary' => '创建 LogStore。',
      'path' => '/logstores',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'logstoreName' => 
              array (
                'description' => 'Logstore名称。其命名规则如下：

- 同一个Project下，Logstore名称不可重复。
- 只能包括小写字母、数字、短划线（-）和下划线（_）。
- 必须以小写字母或者数字开头和结尾。
- 长度为3-63字符。',
                'type' => 'string',
                'required' => true,
                'example' => 'my-logstore',
              ),
              'shardCount' => 
              array (
                'description' => 'Shard分区个数。

> 该接口不支持更新Shard个数。只能通过SplitShard或MergeShards接口修改Shard个数。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2',
              ),
              'ttl' => 
              array (
                'description' => '数据的保存时间，单位为天。取值范围为1~3000。如果配置为3650，表示永久保存。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'encrypt_conf' => 
              array (
                'description' => '加密配置数据结构，包含参数`enable`、 `encrypt_type`、 `user_cmk_info`。更多信息，请参见[EncryptConf ](~~409461~~)。',
                'required' => false,
                '$ref' => '#/components/schemas/EncryptConf',
              ),
              'autoSplit' => 
              array (
                'description' => '是否自动分裂Shard。

- true：自动分裂Shard。
- false：不自动分裂Shard。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'enable_tracking' => 
              array (
                'description' => '是否开启WebTracking功能。默认值为false。

- true：开启WebTracking。
- false：不开启WebTracking。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'maxSplitShard' => 
              array (
                'description' => '自动分裂时最大的Shard个数，最小值是1，最大值是256。

> 当autoSplit参数为true时必须设置。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '64',
              ),
              'appendMeta' => 
              array (
                'description' => '是否记录外网IP地址功能。默认值为false。

- true：记录外网IP地址。
- false：不记录外网IP地址。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'telemetryType' => 
              array (
                'description' => '可观测数据类型。取值包括：

- **None**：日志数据。默认为日志数据。
- **Metrics**：时序数据。',
                'type' => 'string',
                'required' => false,
                'example' => 'None',
              ),
              'hot_ttl' => 
              array (
                'title' => '数据在Logstore热存储层中的存储时间，最少为7天。单位：天，取值范围：7~3000。',
                'description' => '数据在Logstore热存储层中的存储时间，最少为7天。单位：天，取值范围：7~3000。

当数据的存储时间超过您所配置的热存储层数据保存时间后，数据将转为低频存储。更多信息，请参见[智能冷热分层存储](~~308645~~)。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '60',
              ),
              'mode' => 
              array (
                'description' => '日志服务提供标准型（Standard）和查询型（Query）两种类型的Logstore。

- **standard**：支持日志服务一站式数据分析功能，适用于实时监控、交互式分析以及构建完整的可观测性系统等场景。
- **query**：支持高性能查询，索引流量费用约为Standard的一半，但不支持SQL分析，适用于数据量大、存储周期长（周、月级别以上）、无日志分析的场景。
',
                'type' => 'string',
                'required' => false,
                'example' => 'standard',
              ),
              'infrequentAccessTTL' => 
              array (
                'title' => '低频存储。没有最少存储时间要求，至少保存30天转归档存储。',
                'description' => '低频存储。没有最少存储时间要求，至少保存30天转归档存储。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
        201 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建LogStore',
      'description' => '### 接口说明

- 请求语法中的Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等信息。如何查询，请参见[管理Project](~~48984~~)。

- 一个Project中，最多创建200个Logstore。
- 当日志保存时间达到您所设置的数据保存时间后，日志将被删除。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:CreateLogStore`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`  |',
      'extraInfo' => '
| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist | Project does not exist.  | Project不存在。  |
| 400  | LogstoreAlreadyExist | Logstore already exists. | Logstore已存在。  |
| 400  |  LogStoreInfoInvalid|  Logstore info is invalid | Logstore信息无效。  |
|  400 |  ProjectQuotaExceed|  Project Quota Exceed. | 超过Project限额。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'CreateIndex' => 
    array (
      'summary' => '为指定Logstore创建索引。',
      'path' => '/logstores/{logstore}/index',
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
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logstore的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-logstore-test',
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-project-test',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求消息体。',
            'type' => 'object',
            'properties' => 
            array (
              'keys' => 
              array (
                'description' => '字段索引配置，key为字段名称，value为字段索引配置。该参数和line必须至少指定一个，更多示例，请参见示例。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'caseSensitive' => 
                    array (
                      'title' => '大小写敏感',
                      'description' => '是否大小写敏感。仅当**type**参数取值为**text**时，必须设置。

- true：大小写敏感。
- false（默认值）：大小写不敏感。',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                    'chn' => 
                    array (
                      'title' => '包含中文',
                      'description' => '是否包含中文。仅当**type**参数取值为**text**时，必须设置。

- true：包含中文。
- false（默认值）：不包含中文。',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                    'type' => 
                    array (
                      'title' => '字段的索引类型',
                      'description' => '索引的字段类型。支持 text, json, double, long 四种类型。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'text',
                      'default' => 'text',
                    ),
                    'alias' => 
                    array (
                      'title' => '别名',
                      'description' => '字段别名。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'myAlias',
                    ),
                    'token' => 
                    array (
                      'title' => '分词符列表。仅当type参数取值为text时，必须设置。',
                      'description' => '分词符列表，用于分割文本。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                        'required' => false,
                        'description' => '分词符。',
                        'example' => '.',
                      ),
                      'required' => false,
                    ),
                    'doc_value' => 
                    array (
                      'title' => '开启统计',
                      'description' => '是否开启字段统计。',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                  ),
                  'description' => '单个字段的索引配置。',
                ),
              ),
              'line' => 
              array (
                'title' => '配置全文索引',
                'description' => '全文索引配置。该参数和keys必须至少指定一个，更多示例，请参见示例。',
                'type' => 'object',
                'properties' => 
                array (
                  'chn' => 
                  array (
                    'title' => '包含中文',
                    'description' => '是否包含中文。

- true：包含中文。
- false（默认值）：不包含中文。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'caseSensitive' => 
                  array (
                    'title' => '大小写敏感',
                    'description' => '是否大小写敏感。

- true：大小写敏感。
- false（默认值）：大小写不敏感。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'token' => 
                  array (
                    'title' => '分词符列表。可以设置一个分词参数，指定这个字段按照哪一种方式分词。',
                    'description' => '分词符列表。可以设置一个分词参数，指定这个字段按照哪一种方式分词。更多分词符，请参见示例。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分词符列表。可以设置一个分词参数，指定这个字段按照哪一种方式分词。更多分词符，请参见示例。',
                      'type' => 'string',
                      'required' => false,
                      'example' => ',',
                    ),
                    'required' => true,
                  ),
                  'include_keys' => 
                  array (
                    'title' => '包含的字段列表，不能与exclude_keys同时指定。',
                    'description' => '包含的字段列表，不能与exclude_keys同时指定。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '包含的字段列表，不能与exclude_keys同时指定。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'includeKey',
                    ),
                    'required' => false,
                  ),
                  'exclude_keys' => 
                  array (
                    'title' => '排除的字段列表，不能与include_keys同时指定。',
                    'description' => '排除的字段列表，不能与include_keys同时指定。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '排除的字段列表，不能与include_keys同时指定。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'excludeKey',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'ttl' => 
              array (
                'title' => '保存时间，单位为天',
                'description' => '日志保存时间，单位为天。可选 7天、30天、90天。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
              ),
              'max_text_len' => 
              array (
                'title' => '统计字段的最大长度',
                'description' => '日志服务默认字段值的最大长度为2048字节，即2 KB。如果您需要修改字段值的最大长度，可设置统计字段（text）最大长度，取值范围为64~16384字节。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2048',
              ),
              'log_reduce' => 
              array (
                'title' => '开启日志聚类，开启后白名单与黑名单至多生效其中一个。',
                'description' => '是否开启日志聚类。开启后白名单与黑名单至多生效其中一个。
',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'log_reduce_white_list' => 
              array (
                'title' => '日志聚类的聚类字段白名单',
                'description' => '日志聚类的聚类字段白名单。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志聚类的聚类字段白名单。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'a',
                ),
                'required' => false,
              ),
              'log_reduce_black_list' => 
              array (
                'title' => '日志聚类的聚类字段黑名单',
                'description' => '日志聚类的聚类字段黑名单。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志聚类的聚类字段黑名单。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'b',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建索引',
      'description' => 'Host 由 Project 名称和日志服务 Endpoint 构成，您需要在 Host 中指定 Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | IndexInfoInvalid  |  Required field token is lacking or of error format. | 缺少必要的字段标记或格式配置错误。  |
| 400  |  IndexAlreadyExist |  Logstore index is already created. | 日志索引已经创建。  |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'DeleteLogStore' => 
    array (
      'summary' => '删除指定Logstore，包括所有Shard数据和索引。',
      'path' => '/logstores/{logstore}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyun-test-logstore',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除LogStore',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 405  | InvalidTimeRange  |  invalid request method: /logstores/logstoreName| logstoreName参数不合法。 |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'DeleteIndex' => 
    array (
      'summary' => '删除指定Logstore的索引。',
      'path' => '/logstores/{logstore}/index',
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
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除索引',
      'description' => '### 接口说明
Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | ParameterInvalid  |  Log store index not created. | 没有创建日志索引。  |
| 404  | ProjectNotExist  | The Project does not exist : projectName.  | Project不存在。  |
| 404  | LogStoreNotExist  |logstore logstoreName does not exist.  | Logstore不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'PutWebtracking' => 
    array (
      'summary' => '通过 WebTracking 方式单次写入多条日志。',
      'path' => '/logstores/{logstoreName}/track',
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
          'Anonymous' => 
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '9127',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsWY5SG2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstoreName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求消息体。',
            'type' => 'object',
            'properties' => 
            array (
              '__topic__' => 
              array (
                'description' => '日志主题。',
                'type' => 'string',
                'required' => false,
                'example' => 'topic',
              ),
              '__source__' => 
              array (
                'description' => '日志来源。',
                'type' => 'string',
                'required' => true,
                'example' => 'source',
              ),
              '__logs__' => 
              array (
                'description' => '日志内容列表。每个元素为一个JSON对象，表示一条日志。
> **说明**WebTracking采集的日志时间为日志到达服务端的时间，每条日志中无需设置__time__字段，如果存在该字段，将被服务端使用日志到达的时间覆盖。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志内容列表。',
                  'type' => 'object',
                  'required' => false,
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                    'description' => '日志内容。',
                    'example' => '{          "key1": "value1",          "key2": "value2"         }',
                  ),
                ),
                'required' => true,
              ),
              '__tags__' => 
              array (
                'description' => '日志标签。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'description' => '日志标签。',
                  'example' => '{ "tag1": "value1", "tag2": "value2" }',
                ),
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '通过WebTracking批量写入日志',
      'description' => '### 接口说明

- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。

- 适用于在网页或者客户端采集日志的场景。
- 使用Web Tracking采集日志时，单个请求只能写入一条日志。更多信息，请参见[使用Web Tracking采集日志](~~31752~~)。
- 针对日志量较大的场景，可以调用PutWebTracking接口将多条日志合并为一次请求。
- 使用PutWebTracking接口写入日志时，需要先为Logstore打开Web Tracking开关。更多信息，请参见[使用Web Tracking采集日志](~~31752~~)。
- 该接口不支持同时写入多个Topic的日志数据。
- 使用该接口则表示该Logstore打开互联网匿名写入权限，没有经过有效鉴权（不需要AccessKey），可能产生脏数据。',
      'requestParamsDescription' => '仅支持如下三个请求头，在调用PutWebTracking接口时前两个为必选，格式和含义请参见公共请求参数文档。

- x-log-apiversion: 0.6.0
- x-log-bodyrawsize: 1234
- x-log-compresstype: lz4

如果发送的数据没有经过任何压缩，不需要指定x-log-compresstype。如果需要对数据压缩发送，当前仅支持lz4和Deflate算法，其分别对应的请求头为：`x-log-compresstype: lz4`或`x-log-compresstype: deflate`。详细数据压缩步骤，请参见[数据压缩](~~449460~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 400  | PostBodyInvalid  |  Fail to parse protobuf. | Protobuffer内容不合法，无法解析。  |
| 400  |  PostBodyInvalid |  Body invalid error message. | 请求的Body不合法。  |
|  400 |  PostBodyUncompressError |  Post body uncompressed fail. | 日志内容解压失败。  |
|  400 |  PostBodyTooLarge |  Body size bodySize must little than 10485760. | 请求Body （压缩前）不能超过10MB。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateLogStore' => 
    array (
      'summary' => '更新Logstore的属性信息。',
      'path' => '/logstores/{logstore}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
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
            'type' => 'object',
            'properties' => 
            array (
              'logstoreName' => 
              array (
                'description' => 'Logstore名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'test-logstore',
              ),
              'shardCount' => 
              array (
                'description' => 'Shard分区个数。

> 该接口不支持更新分区个数。只能通过SplitShard或MergeShards接口修改分区个数。',
                'type' => 'integer',
                'format' => 'int32',
                'deprecated' => true,
                'required' => false,
                'example' => '2',
              ),
              'ttl' => 
              array (
                'description' => '数据的保存时间，单位为天。取值范围为1~3650。如果配置为3650，表示永久保存。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '30',
              ),
              'encrypt_conf' => 
              array (
                'description' => '加密配置数据结构。',
                'required' => false,
                '$ref' => '#/components/schemas/EncryptConf',
              ),
              'autoSplit' => 
              array (
                'description' => '是否自动分裂Shard。

- true：自动分裂Shard。
- false：不自动分裂Shard。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'enable_tracking' => 
              array (
                'description' => '是否开启WebTracking功能。默认值为false。

- true：开启WebTracking。
- false：不开启WebTracking。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'appendMeta' => 
              array (
                'description' => '是否记录外网IP地址功能。默认值为false。

- true：记录外网IP地址。
- false：不记录外网IP地址。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'maxSplitShard' => 
              array (
                'description' => '自动分裂时最大的Shard个数，最小值是1，最大值是256。

> 当autoSplit为true时必须指定。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '64',
              ),
              'telemetryType' => 
              array (
                'description' => '可观测数据类型。取值包括：

- None：日志数据。默认为日志数据。
- Metrics：时序数据。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'None',
              ),
              'hot_ttl' => 
              array (
                'title' => '数据在Logstore热存储层中的存储时间，最少为7天。单位：天，取值范围：7~3000。',
                'description' => '数据在Logstore热存储层中的存储时间，最少为7天。单位：天，取值范围：7~3000。
当数据的存储时间超过您所配置的热存储层数据保存时间后，数据将转为低频存储。更多信息，请参见[智能冷热分层存储](~~308645~~)。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '60',
              ),
              'mode' => 
              array (
                'description' => '日志服务提供标准型（Standard）和查询型（Query）两种类型的Logstore。

- **standard**：支持日志服务一站式数据分析功能，适用于实时监控、交互式分析以及构建完整的可观测性系统等场景。
- **query**：支持高性能查询，索引流量费用约为Standard的一半，但不支持SQL分析，适用于数据量大、存储周期长（周、月级别以上）、无日志分析的场景。

',
                'type' => 'string',
                'required' => false,
                'example' => 'standard',
              ),
              'infrequentAccessTTL' => 
              array (
                'title' => '低频存储。没有最少存储时间要求，至少保存30天转归档存储。',
                'description' => '低频存储。没有最少存储时间要求，至少保存30天转归档存储。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新LogStore',
      'description' => '### 接口说明

- 更新Logstore前需要先使用GetLogStore获取Logstore的原配置，在此基础上修改后，作为参数传入到UpdateLogStore中。
- 请求语法中的Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等信息。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:UpdateLogStore`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateIndex' => 
    array (
      'summary' => '更新Logstore的索引信息。',
      'path' => '/logstores/{logstore}/index',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求结构体。',
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'keys' => 
              array (
                'title' => '字段索引配置，key为字段名称，value为字段索引配置。',
                'description' => '字段索引配置，key为字段名称，value为字段索引配置。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'title' => '单个索引字段的配置。',
                  'description' => '字段索引配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'caseSensitive' => 
                    array (
                      'title' => '大小写敏感',
                      'description' => '是否大小写敏感。

- true：大小写敏感。
- false：大小写不敏感。',
                      'type' => 'boolean',
                      'required' => false,
                      'default' => 'false',
                      'example' => 'false',
                    ),
                    'chn' => 
                    array (
                      'title' => '包含中文',
                      'description' => '是否包含中文。仅当**type**参数取值为**text**时，必须设置。
  - true：包含中文。
  - false：不包含中文。',
                      'type' => 'boolean',
                      'required' => false,
                      'default' => 'false',
                      'example' => 'false',
                    ),
                    'type' => 
                    array (
                      'title' => '字段的索引类型。支持 text, double, long, json 四种类型。',
                      'description' => '索引的字段类型。支持 text, json, double, long 四种类型。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'text',
                      'default' => 'text',
                      'enumValueTitles' => 
                      array (
                        'double' => 'double',
                        'json' => 'json',
                        'text' => 'text',
                        'long' => 'long',
                      ),
                    ),
                    'alias' => 
                    array (
                      'title' => '字段别名。',
                      'description' => '字段别名。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'myAlias',
                    ),
                    'token' => 
                    array (
                      'title' => '分词符列表。仅当字段的 type 参数取值为text时，必须设置分词符。',
                      'description' => '分词符列表，用于分割文本。仅当字段索引的 type 参数取值为text时，必须设置。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'title' => '分隔符，例如 , . 等',
                        'description' => '分词符列表，用于分割文本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.',
                      ),
                      'required' => true,
                    ),
                    'doc_value' => 
                    array (
                      'title' => '是否开启字段统计。',
                      'description' => '是否开启字段统计。',
                      'type' => 'boolean',
                      'required' => true,
                      'example' => 'false',
                    ),
                  ),
                  'required' => true,
                ),
              ),
              'line' => 
              array (
                'title' => '配置全文索引。',
                'description' => '全文索引配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'chn' => 
                  array (
                    'title' => '包含中文',
                    'description' => '是否包含中文。
  - true：包含中文。
  - false：不包含中文。',
                    'type' => 'boolean',
                    'required' => true,
                    'example' => 'false',
                  ),
                  'caseSensitive' => 
                  array (
                    'title' => '大小写敏感',
                    'description' => '是否大小写敏感。

- true：大小写敏感。
- false：大小写不敏感。',
                    'type' => 'boolean',
                    'required' => true,
                    'example' => 'true',
                  ),
                  'token' => 
                  array (
                    'title' => '分词符列表。可以设置一个分词参数，指定这个字段按照哪一种方式分词。',
                    'description' => '分词符列表，用于分割文本。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '分隔符，例如 , .  等',
                      'description' => '分词符列表，用于分割文本。',
                      'type' => 'string',
                      'required' => false,
                      'example' => ',',
                    ),
                    'required' => true,
                  ),
                  'include_keys' => 
                  array (
                    'title' => '包含的字段列表，不能与exclude_keys同时指定。',
                    'description' => '包含的字段列表，不能与exclude_keys同时指定。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '包含的字段。',
                      'description' => '包含的字段列表。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'includeField',
                    ),
                    'required' => false,
                  ),
                  'exclude_keys' => 
                  array (
                    'title' => '排除的字段列表，不能与include_keys同时指定。',
                    'description' => '排除的字段列表，不能与include_keys同时指定。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '排除的字段。',
                      'description' => '排除的字段列表。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'excludeField',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'ttl' => 
              array (
                'title' => '保存时间，单位为天',
                'description' => '数据的保存时间，单位为天。支持 7天、30天、90天。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '30',
              ),
              'max_text_len' => 
              array (
                'title' => '统计字段的最大长度',
                'description' => '统计字段的最大长度。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2048',
              ),
              'log_reduce' => 
              array (
                'title' => '开启日志聚类，开启后白名单与黑名单至多生效其中一个。',
                'description' => '是否开启日志聚类，开启后白名单 `log_reduce_white_list` 与黑名单 `log_reduce_black_list` 至多生效其中一个。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
              'log_reduce_white_list' => 
              array (
                'title' => '日志聚类的聚类字段白名单',
                'description' => '日志聚类的聚类字段白名单。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '白名单字段。',
                  'description' => '白名单字段。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'user',
                ),
                'required' => false,
              ),
              'log_reduce_black_list' => 
              array (
                'title' => '日志聚类的聚类字段黑名单',
                'description' => '日志聚类的聚类字段黑名单。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '黑名单字段。',
                  'description' => '黑名单字段。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'time',
                ),
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新索引',
      'description' => '### 接口说明
Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'SplitShard' => 
    array (
      'summary' => '分裂一个指定的readwrite状态的Shard。',
      'path' => '/logstores/{logstore}/shards/{shard}?action=split',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Logstore 名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'logstorename',
          ),
        ),
        2 => 
        array (
          'name' => 'shard',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '必须是一个 readwrite 状态的 shard 的 id。',
            'description' => 'Shard ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'key',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分裂的位置。',
            'description' => '分裂位置。',
            'type' => 'string',
            'required' => false,
            'example' => 'ef000000000000000000000000000000',
          ),
        ),
        4 => 
        array (
          'name' => 'shardCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '要分裂成的 shard 数量，默认为 2。',
            'description' => 'Shard分裂个数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '请求成功后，其响应Body中包含3个Shard元素组成的数组，第一个Shard为原Shard，后两个为分裂后的Shard。',
            'description' => '返回的Shard列表。例如Shard数量为2，则返回3个Shard元素组成的数组，第一个Shard为原Shard，后两个为分裂后的Shard。',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'shard 结构体。',
              'description' => 'Shard信息。',
              '$ref' => '#/components/schemas/shard',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"shardID\\": 0,\\n    \\"status\\": \\"readwrite\\",\\n    \\"inclusiveBeginKey\\": \\"00000000000000000000000000000000\\",\\n    \\"exclusiveEndKey\\": \\"8000000000000000000000000000000\\",\\n    \\"serverIp\\": \\"10.0.xx.x\\",\\n    \\"createTime\\": 1453949705\\n  }\\n]","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '分裂Shard',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
- 每个Shard均有范围，为MD5左闭右开区间`[BeginKey,EndKey)`。Shard状态包括readwrite（读写）和readonly（只读），支持分裂和合并Shard。更多信息，请参见[分区（Shard）](~~28976~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:SplitShard`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 400  | ParameterInvalid|  invalid shard id. | 无效Shard ID。  |
| 400  |  ParameterInvalid|  invalid mid hash. | 无效分裂位置参数。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[错误码对照表](~~29013~~)。',
    ),
    'UpdateLogStoreMeteringMode' => 
    array (
      'summary' => '更新Logstore计量模式。',
      'path' => '/logstores/{logstore}/meteringmode',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project名称',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectName',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'LogStore名称',
            'description' => 'LogStore名称',
            'type' => 'string',
            'required' => true,
            'example' => 'logstoreName',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'meteringMode' => 
              array (
                'title' => '计量模式。ChargeByFunction 默认计量模式，ChargeByDataIngest 流量模式。',
                'description' => '计量模式。ChargeByFunction 默认计量模式，ChargeByDataIngest 流量模式。',
                'type' => 'string',
                'required' => true,
                'example' => 'ChargeByFunction',
                'default' => 'ChargeByFunction',
                'enum' => 
                array (
                  0 => 'ChargeByDataIngest',
                  1 => 'ChargeByFunction',
                ),
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新LogStore计量模式',
    ),
    'MergeShard' => 
    array (
      'summary' => '合并相邻位置的读写Shard。',
      'path' => '/logstores/{logstore}/shards/{shard}?action=merge',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'shard',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Shard ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => 'Shard数据结构。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '包含3个Shard元素组成的数组，第一个Shard为合并之后的Shard，后两个为合并之前的Shard。',
              '$ref' => '#/components/schemas/shard',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"shardID\\": 0,\\n    \\"status\\": \\"readwrite\\",\\n    \\"inclusiveBeginKey\\": \\"00000000000000000000000000000000\\",\\n    \\"exclusiveEndKey\\": \\"8000000000000000000000000000000\\",\\n    \\"serverIp\\": \\"10.0.xx.x\\",\\n    \\"createTime\\": 1453949705\\n  }\\n]","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '合并shard',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 每个Shard均有范围，为MD5左闭右开区间`[BeginKey,EndKey)`。Shard状态包括readwrite（读写）和readonly（只读），支持分裂和合并Shard。更多信息，请参见[分区（Shard）](~~28976~~)。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 400  | ParameterInvalid|  invalid shard id.| 无效Shard ID。  |
| 400  |  ParameterInvalid| can not merge the last shard. | 无效merge。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[错误码对照表](~~29013~~)。',
    ),
    'ListLogStores' => 
    array (
      'summary' => '查询指定Project下所有或匹配的LogStore列表。',
      'path' => '/logstores',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '默认值为 500。',
            'description' => '分页查询时，设置的每页行数。最大值为500。默认值为500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '500',
          ),
        ),
        3 => 
        array (
          'name' => 'logstoreName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Logstore名称。支持模糊匹配，例如输入test，则返回名称包含test的Logstore列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'my-logstore',
          ),
        ),
        4 => 
        array (
          'name' => 'telemetryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的日志类型。取值包括：

- None：查询所有日志类型。
- Metrics：查询Metrics类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'None',
          ),
        ),
        5 => 
        array (
          'name' => 'mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志服务提供标准型（Standard）和查询型（Query）两种类型的Logstore。
  - **standard**：支持日志服务一站式数据分析功能，适用于实时监控、交互式分析以及构建完整的可观测性系统等场景。
  - **query**：支持高性能查询，索引流量费用约为Standard的一半，但不支持SQL分析，适用于数据量大、存储周期长（周、月级别以上）、无日志分析的场景。',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '',
            'description' => '返回body',
            'type' => 'object',
            'properties' => 
            array (
              'total' => 
              array (
                'title' => '符合查询条件的logstore总数',
                'description' => '符合查询条件的Logstore总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'count' => 
              array (
                'title' => '当前返回行数',
                'description' => '当前返回行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'logstores' => 
              array (
                'description' => '满足条件的Logstore列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Logstore信息。',
                  'type' => 'string',
                  'example' => 'test-1,test-2',
                ),
                'example' => '["test-1","test-2"]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"total\\": 2,\\n  \\"count\\": 2,\\n  \\"logstores\\": [\\n    \\"test-1,test-2\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '列出LogStore',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:ListLogStores`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/*`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetLogStore' => 
    array (
      'summary' => '查看Logstore的详细信息。',
      'path' => '/logstores/{logstore}',
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
        'abilityTreeCode' => '115730',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsTA08U2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'The logstore name.',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'host',
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
            'description' => 'Logstore结构体。',
            'example' => 'ali-test-logstore',
            '$ref' => '#/components/schemas/logstore',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"logstoreName\\": \\"my-logstore\\",\\n  \\"ttl\\": 30,\\n  \\"shardCount\\": 2,\\n  \\"enable_tracking\\": false,\\n  \\"autoSplit\\": true,\\n  \\"maxSplitShard\\": 2,\\n  \\"appendMeta\\": true,\\n  \\"telemetryType\\": \\"\\",\\n  \\"createTime\\": 0,\\n  \\"lastModifyTime\\": 0,\\n  \\"encrypt_conf\\": {\\n    \\"enable\\": true,\\n    \\"encrypt_type\\": \\"default\\",\\n    \\"user_cmk_info\\": {\\n      \\"cmk_key_id\\": \\"\\",\\n      \\"arn\\": \\"\\",\\n      \\"region_id\\": \\"\\"\\n    }\\n  },\\n  \\"hot_ttl\\": 0,\\n  \\"infrequentAccessTTL\\": 30,\\n  \\"mode\\": \\"standard\\",\\n  \\"productType\\": \\"\\",\\n  \\"resourceQuota\\": {\\n    \\"storage\\": {\\n      \\"preserved\\": 0,\\n      \\"used\\": 0\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查看Logstore信息',
      'description' => '### 接口说明
Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '### 错误码
| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'GetIndex' => 
    array (
      'summary' => '查询指定Logstore的索引信息。',
      'path' => '/logstores/{logstore}/index',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '请求返回的结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'index_mode' => 
              array (
                'title' => '索引模式',
                'description' => '索引类型。',
                'type' => 'string',
                'example' => 'v2',
              ),
              'keys' => 
              array (
                'title' => '字段索引配置。key为字段名称，value为索引配置。',
                'description' => '字段索引配置。key为字段名称，value为索引配置。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'title' => '单个字段的索引配置。',
                  'description' => '单个字段的索引配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'caseSensitive' => 
                    array (
                      'title' => '是否大小写敏感。',
                      'description' => '是否大小写敏感。仅当**type**参数取值为**text**时，必须设置。
  - true：大小写敏感。
  - false：大小写不敏感。',
                      'type' => 'boolean',
                      'default' => 'false',
                      'example' => 'false',
                    ),
                    'chn' => 
                    array (
                      'title' => '是否包含中文。',
                      'description' => '是否包含中文。仅当**type**参数取值为**text**时，必须设置。
  - true：包含中文。
  - false：不包含中文。',
                      'type' => 'boolean',
                      'default' => 'false',
                      'example' => 'false',
                    ),
                    'token' => 
                    array (
                      'title' => '分词符列表。',
                      'description' => '分词符列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'title' => '分词符。例如 ","  "."  "\\r" "\\n" 等。',
                        'description' => '分词符列表。仅当**type**参数取值为**text**时，必须设置。',
                        'type' => 'string',
                        'example' => ',',
                      ),
                    ),
                    'type' => 
                    array (
                      'title' => '索引的类型，支持 text，long，double，json 。',
                      'description' => '索引的字段类型。支持text、json、double、long四种类型。',
                      'type' => 'string',
                      'example' => 'text',
                      'default' => 'text',
                    ),
                    'doc_value' => 
                    array (
                      'title' => '是否字段开启统计。',
                      'description' => '是否开启字段统计。
  - true：开启统计。
  - false：不开启统计。',
                      'type' => 'boolean',
                      'default' => 'false',
                      'example' => 'false',
                    ),
                    'alias' => 
                    array (
                      'title' => '字段别名。',
                      'description' => '字段别名。',
                      'type' => 'string',
                      'example' => 'myAlias',
                    ),
                  ),
                ),
              ),
              'line' => 
              array (
                'title' => '配置全文索引。',
                'description' => '全文索引配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'include_keys' => 
                  array (
                    'title' => '包含的字段列表。',
                    'description' => '包含的字段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '包含的字段名。',
                      'description' => '包含字段列表。',
                      'type' => 'string',
                      'example' => 'includeField',
                    ),
                  ),
                  'exclude_keys' => 
                  array (
                    'title' => '排除的字段列表。',
                    'description' => '	排除的字段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '排除的字段名。',
                      'description' => '排除字段列表。',
                      'type' => 'string',
                      'example' => 'excludeField',
                    ),
                  ),
                  'chn' => 
                  array (
                    'title' => '是否包含中文。',
                    'description' => '是否包含中文。

- true：包含中文。
- false：不包含中文。',
                    'type' => 'boolean',
                    'example' => 'false',
                    'default' => 'false',
                  ),
                  'token' => 
                  array (
                    'title' => '分词符列表。',
                    'description' => '分词符列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '分词符。例如 ","  "."  "\\r" "\\n" 等。',
                      'description' => '分词符。例如 ","  "."  "\\r" "\\n" 等。',
                      'type' => 'string',
                      'example' => ',',
                    ),
                  ),
                  'caseSensitive' => 
                  array (
                    'title' => '大小写敏感',
                    'description' => '是否大小写敏感。
  - true：大小写敏感。
  - false：大小写不敏感。',
                    'type' => 'boolean',
                    'example' => 'false',
                    'default' => 'false',
                  ),
                ),
              ),
              'storage' => 
              array (
                'title' => '存储类型，目前固定取值为pg。',
                'description' => '存储类型，目前固定取值为pg。',
                'type' => 'string',
                'example' => 'pg',
                'default' => 'pg',
              ),
              'ttl' => 
              array (
                'title' => '索引文件生命周期，支持7天、30天、90天。',
                'description' => '索引文件生命周期，支持7天、30天、90天。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'lastModifyTime' => 
              array (
                'title' => '上次修改时间',
                'description' => '索引最后更新时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1524155379',
              ),
              'log_reduce' => 
              array (
                'title' => '是否开启日志聚类.',
                'description' => '是否开启日志聚类。',
                'type' => 'boolean',
                'example' => 'false',
                'default' => 'false',
              ),
              'max_text_len' => 
              array (
                'title' => '日志服务默认字段值的最大长度为2048字节，即2 KB。如果您需要修改字段值的最大长度，可设置统计字段（text）最大长度，取值范围为64~16384字节。',
                'description' => '日志服务默认字段值的最大长度为2048字节，即2 KB。如果您需要修改字段值的最大长度，可设置统计字段（text）最大长度，取值范围为64~16384字节。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2048',
                'default' => '2048',
              ),
              'log_reduce_black_list' => 
              array (
                'title' => '日志聚类的聚类字段过滤黑名单，仅当日志聚类开启时有效。',
                'description' => '日志聚类的聚类字段过滤黑名单，仅当日志聚类开启时有效。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '黑名单字段名。',
                  'description' => '黑名单字段。',
                  'type' => 'string',
                  'example' => 'b',
                ),
              ),
              'log_reduce_white_list' => 
              array (
                'title' => '日志聚类的聚类字段过滤白名单，仅当日志聚类开启时有效。',
                'description' => '日志聚类的聚类字段过滤白名单，仅当日志聚类开启时有效',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '白名单字段名。',
                  'description' => '白名单字段。',
                  'type' => 'string',
                  'example' => 'a',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"index_mode\\": \\"v2\\",\\n  \\"keys\\": {\\n    \\"key\\": {\\n      \\"caseSensitive\\": false,\\n      \\"chn\\": false,\\n      \\"token\\": [\\n        \\",\\"\\n      ],\\n      \\"type\\": \\"text\\",\\n      \\"doc_value\\": false,\\n      \\"alias\\": \\"myAlias\\"\\n    }\\n  },\\n  \\"line\\": {\\n    \\"include_keys\\": [\\n      \\"includeField\\"\\n    ],\\n    \\"exclude_keys\\": [\\n      \\"excludeField\\"\\n    ],\\n    \\"chn\\": false,\\n    \\"token\\": [\\n      \\",\\"\\n    ],\\n    \\"caseSensitive\\": false\\n  },\\n  \\"storage\\": \\"pg\\",\\n  \\"ttl\\": 30,\\n  \\"lastModifyTime\\": 1524155379,\\n  \\"log_reduce\\": false,\\n  \\"max_text_len\\": 2048,\\n  \\"log_reduce_black_list\\": [\\n    \\"b\\"\\n  ],\\n  \\"log_reduce_white_list\\": [\\n    \\"a\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取索引',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 404  | IndexConfigNotExist| index config doesn’t exist.  | 查询的索引不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'ListShards' => 
    array (
      'summary' => '列出指定Logstore中所有可用的Shard。',
      'path' => '/logstores/{logstore}/shards',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'shard 列表。',
            'description' => '返回项目下所有 shard 的列表。',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'shard 结构体。',
              'description' => 'shard 结构体。',
              '$ref' => '#/components/schemas/shard',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"shardID\\": 0,\\n    \\"status\\": \\"readwrite\\",\\n    \\"inclusiveBeginKey\\": \\"00000000000000000000000000000000\\",\\n    \\"exclusiveEndKey\\": \\"8000000000000000000000000000000\\",\\n    \\"serverIp\\": \\"10.0.xx.x\\",\\n    \\"createTime\\": 1453949705\\n  }\\n]","errorExample":""},{"type":"xml","example":"<ListShardsResponse>\\n    <shardID>0</shardID>\\n    <status>readwrite</status>\\n    <inclusiveBeginKey>0</inclusiveBeginKey>\\n    <exclusiveEndKey>8000000000000000000000000000000</exclusiveEndKey>\\n    <createTime>1453949705</createTime>\\n</ListShardsResponse>","errorExample":""}]',
      'title' => '查询shard列表',
    ),
    'GetLogs' => 
    array (
      'summary' => '查询指定Project下某个Logstore中的日志数据。',
      'path' => '/logstores/{logstore}?type=log',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => '查询Logstore中的数据。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'from',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询开始时间点。该时间是指写入日志数据时指定的日志时间。

请求参数from和to定义的时间区间遵循左闭右开原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'description' => '查询开始时间点。该时间是指写入日志数据时指定的日志时间。

- 请求参数**from**和**to**定义的时间区间遵循左闭右开原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果**from**和**to**的值相同，则为无效区间，函数直接返回错误。
- Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。

> 如果您要确保不漏查数据，请将查询时间对齐到分钟级别。如果您在分析语句中设置了时间范围，则查询分析时以该时间范围为准。

如果您需要精确到秒，需要在分析语句中指定时间时，使用[from_unixtime函数](~~63451~~)或[to_unixtime函数](~~63451~~)转换下时间格式。例如：
- `* | SELECT * FROM log WHERE from_unixtime(__time__) > from_unixtime(1664186624) AND from_unixtime(__time__) < now()`
- `* | SELECT * FROM log WHERE __time__ > to_unixtime(date_parse(\'2022-10-19 15:46:05\', \'%Y-%m-%d %H:%i:%s\')) AND __time__ < to_unixtime(now())`',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1627268185',
          ),
        ),
        3 => 
        array (
          'name' => 'to',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询结束时间点。该时间是指写入日志数据时指定的日志时间。

请求参数from和to定义的时间区间遵循左闭右开原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'description' => '查询结束时间点。该时间是指写入日志数据时指定的日志时间。

- 请求参数**from**和**to**定义的时间区间遵循左闭右开原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果**from**和**to**的值相同，则为无效区间，函数直接返回错误。
- Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。

> 如果您要确保不漏查数据，请将查询时间对齐到分钟级别。如果您在分析语句中设置了时间范围，则查询分析时以该时间范围为准。

如果您需要精确到秒，需要在分析语句中指定时间时，使用[from_unixtime函数](~~63451~~)或[to_unixtime函数](~~63451~~)转换下时间格式。例如：
- `* | SELECT * FROM log WHERE from_unixtime(__time__) > from_unixtime(1664186624) AND from_unixtime(__time__) < now()`
- `* | SELECT * FROM log WHERE __time__ > to_unixtime(date_parse(\'2022-10-19 15:46:05\', \'%Y-%m-%d %H:%i:%s\')) AND __time__ < to_unixtime(now())`',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1627269085',
          ),
        ),
        4 => 
        array (
          'name' => 'query',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询语句或者分析语句。更多信息，请参见查询概述和分析概述。

在query参数的分析语句中加上set session parallel_sql=true;，表示使用SQL独享版。例如* | set session parallel_sql=true; select count(*) as pv 。

说明 当query参数中有分析语句（SQL语句）时，该接口的line参数和offset参数无效，建议设置为0，需通过SQL语句的LIMIT语法实现翻页。更多信息，请参见分页显示查询分析结果。',
            'description' => '查询语句或者分析语句。更多信息，请参见[查询概述](~~43772~~)和[分析概述](~~53608~~)。
在query参数的分析语句中加上`set session parallel_sql=true;`，表示使用SQL独享版。例如`* | set session parallel_sql=true; select count(*) as pv` 。常见查询与分析问题，请参见[查询与分析日志的常见报错](~~61628~~)。

> 当query参数中有分析语句（SQL语句）时，该接口的line参数和offset参数无效，建议设置该接口的参数为0，需通过SQL语句的LIMIT语法实现翻页。更多信息，请参见[分页显示查询分析结果](~~89994~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5',
          ),
        ),
        5 => 
        array (
          'name' => 'topic',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5',
            'description' => '日志主题。默认值为双引号（""）。更多信息，请参见[日志主题（Topic）](~~48881~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'topic',
          ),
        ),
        6 => 
        array (
          'name' => 'line',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '仅当query参数为查询语句时，该参数有效，表示请求返回的最大日志条数。最小值为0，最大值为100，默认值为100。',
            'description' => '仅当query参数为查询语句时，该参数有效，表示请求返回的最大日志条数。最小值为0，最大值为100，默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '100',
            'default' => '100',
          ),
        ),
        7 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '仅当query参数为查询语句时，该参数有效，表示查询开始行。默认值为0。',
            'description' => '仅当query参数为查询语句时，该参数有效，表示查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'reverse',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用于指定返回结果是否按日志时间戳降序返回日志，精确到分钟级别。

true：按照日志时间戳降序返回日志。
false（默认值）：按照日志时间戳升序返回日志。
注意
当query参数为查询语句时，参数reverse有效，用于指定返回日志排序方式。
当query参数为查询和分析语句时，参数reverse无效，由SQL分析语句中order by语法指定排序方式。如果order by为asc（默认），则为升序；如果order by为desc，则为降序。',
            'description' => '用于指定返回结果是否按日志时间戳降序返回日志，精确到分钟级别。

- true：按照日志时间戳降序返回日志。
- false（默认值）：按照日志时间戳升序返回日志。

><notice>

- 当query参数为查询语句时，参数reverse有效，用于指定返回日志排序方式。
- 当query参数为查询和分析语句时，参数reverse无效，由SQL分析语句中order by语法指定排序方式。如果order by为asc（默认），则为升序；如果order by为desc，则为降序。

></notice>',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'powerSql',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用于指定返回结果是否按日志时间戳降序返回日志，精确到分钟级别。

true：按照日志时间戳降序返回日志。
false（默认值）：按照日志时间戳升序返回日志。
注意
当query参数为查询语句时，参数reverse有效，用于指定返回日志排序方式。
当query参数为查询和分析语句时，参数reverse无效，由SQL分析语句中order by语法指定排序方式。如果order by为asc（默认），则为升序；如果order by为desc，则为降序。',
            'description' => '是否使用SQL独享版。更多信息，请参见[开启SQL独享版](~~223777~~)。

- true：使用SQL独享版。
- false（默认值）：使用SQL普通版。

除通过powerSql参数配置SQL独享版外，您还可以使用**query**参数。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-log-progress' => 
            array (
              'schema' => 
              array (
                'title' => '查询结果的状态，包括：  Complete：查询已经完成，返回结果为完整结果。 Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                'type' => 'string',
                'example' => 'Complete',
              ),
            ),
            'x-log-count' => 
            array (
              'schema' => 
              array (
                'title' => '当前查询结果的日志总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10000',
              ),
            ),
            'x-log-processed-rows' => 
            array (
              'schema' => 
              array (
                'title' => '本次查询处理的行数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10000',
              ),
            ),
            'x-log-elapsed-millisecond' => 
            array (
              'schema' => 
              array (
                'title' => '本次查询消耗的毫秒时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '日志数组Logs，其每个元素就是一条Log。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '日志数组Logs，其每个元素就是一条Log。',
              'type' => 'object',
              'example' => '[{\'remote_addr\': \'198.51.XXX.XXX\', \'pv\': \'1\', \'__source__\': \'\', \'__time__\': \'1649902984\'}, {\'remote_addr\': \'198.51.XXX.XXX\', \'pv\': \'1\', \'__source__\': \'\', \'__time__\': \'1649902984\'}, {\'remote_addr\': \'198.51.XXX.XXX\', \'pv\': \'1\', \'__source__\': \'\', \'__time__\': \'1649902984\'}, {\'remote_addr\': \'198.51.XXX.XXX\', \'pv\': \'1\', \'__source__\': \'\', \'__time__\': \'1649902984\'}, {\'remote_addr\': \'198.51.100.XXX\', \'pv\': \'1\', \'__source__\': \'\', \'__time__\': \'1649902984\'}]',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n]","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询日志库日志',
      'description' => '### 接口说明
> 日志服务支持创建定时SQL任务。具体操作，请参见[创建定时SQL任务](~~286457~~)。

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。

- 当查询涉及的日志数量变化非常大时，日志服务API无法预测需要调用多少次该接口来获取完整结果。所以需要您查看每次请求返回结果中的x-log-progress状态值，根据状态值来确定是否需要重复调用该接口来获取最终完整结果。每次重复调用该接口都会重新消耗相同数量的查询CU。
- 当日志写入到Logstore中，日志服务的查询接口（GetHistograms和GetLogs）能够查到该日志的延时因写入日志类型不同而异。日志服务按日志时间戳把日志分为如下两类：

      - 实时数据：日志中时间点为服务器当前时间点\\(-180秒，900秒]。例如，日志时间为UTC 2014-09-25 12:03:00，服务器收到时为UTC 2014-09-25 12:05:00，则该日志被作为实时数据处理，一般出现在正常场景下。
     - 历史数据：日志中时间点为服务器当前时间点\\[-7x86400秒，-180秒）。例如，日志时间为UTC 2014-09-25 12:00:00，服务器收到时为UTC 2014-09-25 12:05:00，则该日志被作为历史数据处理，一般出现在补数据场景下。
   其中，实时数据写入至可查询的最大延时为3秒，99.9%情况下1秒内即可查询完毕。

> 日志服务将日志时间（字段名称为__time__）和服务器收到时间（字段名称为__tag__:__receive_time__）做差，若其差值位于\\(-180秒，900秒]范围，则为实时数据，若其差位于\\[-7x86400秒，-180秒），则为历史数据。

- 日志服务提供Java和Python SDK的GetLogs查询使用示例。更多信息，请参见[Java GetLogs使用示例](~~407683~~)和[Python GetLogs使用示例](~~407684~~)。
',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 400  | InvalidTimeRange  |  Request time range is invalid. | 请求的时间区间无效。  |
| 400  |  InvalidQueryString |  Query string is invalid. | 请求的查询分析语句无效。  |
|  400 |  InvalidOffset |  Offset is invalid. | 请求的offset参数无效。  |
|  400 |  InvalidLine |  Line is invalid. | 请求的line参数无效。  |
|  400 |  InvalidReverse |  Reverse value is invalid.| Reverse参数的值无效。  |
|  400 |  IndexConfigNotExist |  Logstore without index config. | Logstore未开启索引。  |
|  400 |  ParameterInvalid |  ErrorType:OLSQueryParseError.ErrorMessage:offset is not available for pagination in sql query, please use limit x,y syntax for pagination.|当query参数中有分析语句（SQL语句）时，建议设置该接口的line参数和offset参数为0，通过SQL语句的LIMIT语法实现翻页。<br/>query参数中的SQL语句存在问题时，您可以参见[查询与分析日志的常见报错](~~61628~~)进行排查。|
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetCursor' => 
    array (
      'summary' => '可以根据时间获取对应的游标（Cursor）。',
      'path' => '/logstores/{logstore}/shards/{shardId}?type=cursor',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'sls-test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'shardId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'shard id。',
            'description' => 'Shard ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'from',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '时间点（Unix时间戳）或者字符串begin、end。',
            'description' => '时间点（Unix时间戳）或者字符串`begin`、`end`。',
            'type' => 'string',
            'required' => true,
            'example' => 'begin',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => 'Cursor值。',
            'type' => 'object',
            'properties' => 
            array (
              'cursor' => 
              array (
                'title' => '游标位置。',
                'description' => 'Cursor值。',
                'type' => 'string',
                'example' => 'MTQ0NzI5OTYwNjg5NjYzMjM1Ng==',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cursor\\": \\"MTQ0NzI5OTYwNjg5NjYzMjM1Ng==\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '通过时间查询Cursor',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。

- Cursor与Project、Logstore、Shard的关系如下：
    - Project下有多个Logstore。
    - 每个Logstore会有多个Shard。
    - 通过Cursor可以获得特定日志对应的位置。',
      'requestParamsDescription' => '通过from可以在Shard中定位生命周期内的日志，假设Logstore的生命周期为`[begin_time,end_time)`，`from=from_time`，那么：

- 当`from_time ≤ begin_time or from_time = "begin"`时：返回时间点为begin_time对应的Cursor位置。
- 当`from_time ≥ end_time or from_time = "end"`时：返回当前时间点下一条将被写入的Cursor位置（当前该Cursor位置上无数据）。
- 当`from_time > begin_time and from_time < end_time`时：返回第一个服务端接收时间大于等于from_time的数据包对应的Cursor。

> Logstore生命周期由属性中TTL字段指定。例如，当前时间为`2018-11-11 09:00:00`，TTL=5。则每个Shard中可以消费的数据时间段为` [2018-11-05 09:00:00,2018-11-11 09:00:00)`，这里的时间指的是服务端时间。更多信息，请参见[数据保存时间](~~48990~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | ParameterInvalid  |  ParameterInvalid | 无效参数。  |
| 400  |  ShardNotExist |  Shard ShardID does not exist.| Shard不存在。  |
| 400  |  LogStoreWithoutShard |The logstore has no shard.  | Logstore没有Shard。 |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetContextLogs' => 
    array (
      'summary' => '调用GetContextLogs接口查询指定日志前（上文）后（下文）的若干条日志。',
      'path' => '/logstores/{logstore}',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Logstore中数据的类型。该接口中该参数固定为context_log。',
            'description' => 'Logstore中数据的类型。该接口中该参数固定为context_log。',
            'type' => 'string',
            'required' => true,
            'example' => 'context_log',
            'default' => 'context_log',
            'enum' => 
            array (
              0 => 'context_log',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'pack_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '起始日志所属的LogGroup的唯一身份标识。',
            'description' => '起始日志所属的LogGroup的唯一身份标识。',
            'type' => 'string',
            'required' => true,
            'example' => '85C897C740352DC6-808',
          ),
        ),
        4 => 
        array (
          'name' => 'pack_meta',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '起始日志在对应LogGroup内的唯一上下文结构标识。',
            'description' => '起始日志在对应LogGroup内的唯一上下文结构标识。',
            'type' => 'string',
            'required' => true,
            'example' => '2|MTY1NTcwNTUzODY5MTY0MDk1Mg==|3|0',
          ),
        ),
        5 => 
        array (
          'name' => 'back_lines',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定起始日志往前（上文）的日志条数，取值范围为(0,100]。',
            'description' => '指定起始日志往前（上文）的日志条数，取值范围为`(0,100]`。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'forward_lines',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定起始日志往后（下文）的日志条数，取值范围为(0,100]。',
            'description' => '指定起始日志往后（下文）的日志条数，取值范围为`(0,100]`。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
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
              'total_lines' => 
              array (
                'title' => '返回的总日志条数，包含请求参数中所指定的起始日志。',
                'description' => '返回的总日志条数，包含请求参数中所指定的起始日志。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '201',
              ),
              'back_lines' => 
              array (
                'title' => '向前查询到的日志条数。',
                'description' => '向前查询到的日志条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'forward_lines' => 
              array (
                'title' => '向后查询到的日志条数。',
                'description' => '向后查询到的日志条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'progress' => 
              array (
                'title' => '查询的结果是否完整。
Complete：查询已经完成，返回结果为完整结果。
Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                'description' => '查询的结果是否完整。

- Complete：查询已经完成，返回结果为完整结果。
- Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                'type' => 'string',
                'example' => 'Complete',
              ),
              'logs' => 
              array (
                'title' => '获取到的日志，按上下文顺序排列。当根据指定起始日志查询不到上下文日志时，此参数为空。',
                'description' => '获取到的日志。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '每一条日志是一个 map，例如 {
            "__index_number__": "-100",
            "__tag__:__pack_id__": "895CEA449A52FE-8c8",
            "__pack_meta__": "0|MTU1OTI4NTExMjg3NTQ2NDU1OA==|4|1",
            ...
      }。',
                  'description' => '获取到的日志，按上下文顺序排列。当根据指定起始日志查询不到上下文日志时，此参数为空。',
                  'type' => 'object',
                  'example' => '{ "__index_number__": "-100",             "__tag__:__pack_id__": "895CEA449A52FE-8c8",             "__pack_meta__": "0|MTU1OTI4NTExMjg3NTQ2NDU1OA==|4|1"}',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"total_lines\\": 201,\\n  \\"back_lines\\": 100,\\n  \\"forward_lines\\": 100,\\n  \\"progress\\": \\"Complete\\",\\n  \\"logs\\": [\\n    {\\n      \\"__index_number__\\": \\"-100\\",\\n      \\"__tag__:__pack_id__\\": \\"895CEA449A52FE-8c8\\",\\n      \\"__pack_meta__\\": \\"0|MTU1OTI4NTExMjg3NTQ2NDU1OA==|4|1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询上下文日志',
      'description' => '### 接口说明
- 上下文查询的时间范围为起始日志的前后一天。
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
- 查询日志前，已配置索引。具体操作，请参见[创建索引](~~90732~~)。
- pack\\_id和pack\\_meta字段属于内部字段，在执行查询前，您需要在日志服务控制台通过浏览器的调试功能获取字段值。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:GetLogStoreContextLogs`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`  |
',
      'responseParamsDescription' => 'logs中的每一项都是该日志的内容（键值对），除用户日志内容外，还包含三个字段，具体如下：
| 参数名称 | 数据类型| 示例值  | 描述  |
| :------------ | :------------ | :------------ | :------------ |
| `__index_number__ ` | String  |  -100| 该日志在本次查询结果中相对上下文的位置，负数表示上文，0表示起始日志，正数表示下文。例如：-100表示起始日志往前的第100条日志。  |
|`__tag__:__pack_id__`| String  |  895CEA449A52FE-8c8 | 该日志所属的LogGroup的唯一身份标识，可作为请求参数中的pack_id进行查询。  |
|`__pack_meta__`| String  | `0\\|MTU1OTI4NTExMjg3NTQ2NDU1OA==\\|4\\|1` | 该日志在所属LogGroup内的唯一上下文结构标识，可作为请求参数中的pack_meta进行查询。  |',
      'extraInfo' => '| HTTP 状态码 | 错误码| 错误信息  | 描述  |
| :------------ | :------------ | :------------ | :------------ |
|404|ProjectNotExist|Project ProjectName does not exist.|Project 不存在。|
|404|LogstoreNotExist|logstore logstoreName does not exist.|Logstore 不存在。|
|400|InvalidParameter|Invalid pack meta/id.|请求参数中的 pack_meta 或 pack_id 为非法值。|
|400|InvalidParameter|back_lines or forward_lines must be postive.|请求参数中的 back_lines 或 forward_lines 中有非法值，其中至少有一个参数应为正数。|

更多错误码，请参见[通用错误码](~~29013~~)。

**SDK示例**

此处以Java SDK为例，请使用Java SDK 0.6.38及以上的版本。 如果您通过Logtail采集方式采集日志，该方式将自动为日志附加上下文信息。 更多示例，请参见[SDK代码示例](https://github.com/aliyun/aliyun-log-java-producer/blob/a5a57cafd9e795ee5a781aa2b0c2742bce3ddef5/src/main/java/com/aliyun/openservices/aliyun/log/producer/internals/SendProducerBatchTask.java)。
```
package sdksample;

import com.aliyun.openservices.log.Client;
import com.aliyun.openservices.log.common.LogContent;
import com.aliyun.openservices.log.common.LogItem;
import com.aliyun.openservices.log.common.QueriedLog;
import com.aliyun.openservices.log.common.TagContent;
import com.aliyun.openservices.log.exception.LogException;
import com.aliyun.openservices.log.request.PutLogsRequest;
import com.aliyun.openservices.log.response.GetContextLogsResponse;
import com.aliyun.openservices.log.response.GetLogsResponse;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

public class GetContextLogsSample {

    private static int getCurrentTimestamp() {
        return (int) (new Date().getTime() / 1000);
    }

    private static class PackInfo {
        public String packID;
        public String packMeta;

        public PackInfo(String id, String meta) {
            this.packID = id;
            this.packMeta = meta;
        }
    }

    private static PackInfo extractPackInfo(QueriedLog log) {
        PackInfo ret = new PackInfo("", "");
        ArrayList<LogContent> contents = log.GetLogItem().GetLogContents();
        for (int i = 0; i < contents.size(); ++i) {
            LogContent content = contents.get(i);
            if (content.GetKey().equals("__tag__:__pack_id__")) {
                ret.packID = content.GetValue();
            } else if (content.GetKey().equals("__pack_meta__")) {
                ret.packMeta = content.GetValue();
            }
        }
        return ret;
    }

    public static void main(String args[]) throws InterruptedException, LogException {
        // 日志服务的服务接入点。此处以杭州为例，其它地域请根据实际情况填写。
        String endpoint = "https://cn-hangzhou.log.aliyuncs.com"; 
       // 本示例从环境变量中获取AccessKey ID和AccessKey Secret。
        String accessKeyId = System.getenv("ALIBABA_CLOUD_ACCESS_KEY_ID")；
        String accessKeySecret = System.getenv("ALIBABA_CLOUD_ACCESS_KEY_SECRET"); 
        // 待查询的Project名称。
        String project = "ProjectName"; 
       // 待查询的Logstore名称。
        String logstore = "logstoreName"; 
        // 构建一个客户端实例。
        Client client = new Client(endpoint, accessKeyId, accessKeySecret);

        System.out.println("请确保指定的logstore已开启索引。");
        Thread.sleep(3000);

        // 使用GetLogs并在查询语句中加上|with_pack_meta来获取起始日志的pack_id和pack_meta。
        // 查询时间范围：最近15分钟。
        // 起始日志：返回结果的第一条。
        String query = "*|with_pack_meta";
        GetLogsResponse response = client.GetLogs(project, logstore,
                (int) getCurrentTimestamp() - 900, (int) getCurrentTimestamp(),"", query);
        ArrayList<QueriedLog> logs = response.GetLogs();
        if (logs.isEmpty()) {
            System.out.println("未查询到任何日志。");
            System.exit(1);
        }

        // 提取第一条日志的pack信息。
        PackInfo info = extractPackInfo(logs.get(0));
        if (info.packMeta.isEmpty() || info.packID.isEmpty()) {
            System.out.println("pack ID: " + info.packID + ", pack meta: " + info.packMeta);
            System.out.println("起始日志的pack信息不完整，请确保该日志是通过logtail写入。");
            System.exit(1);
        }

        // 使用得到的pack信息进行上下文查询（双向查询）。
        GetContextLogsResponse contextRes = client.getContextLogs(project, logstore,
                info.packID, info.packMeta, 10, 10);
        System.out.println("双向查询");
        System.out.println("pack ID: " + info.packID + ", pack meta: " + info.packMeta);
        System.out.println("is complete: " + contextRes.isCompleted());
        System.out.println("total lines: " + contextRes.getTotalLines());
        System.out.println("back lines: " + contextRes.getBackLines());
        System.out.println("forward lines: " + contextRes.getForwardLines());
        Thread.sleep(1000);

        // 使用查询结果中的第一条日志，向前查询上文（单向），至多三次。
        List<QueriedLog> contextLogs = contextRes.getLogs();
        for (int i = 0; i < 3 && !contextLogs.isEmpty(); i++) {
            QueriedLog log = contextLogs.get(0);
            info = extractPackInfo(log);
            GetContextLogsResponse res = client.getContextLogs(project, logstore,
                    info.packID, info.packMeta, 10, 0);
            System.out.println("向前查询上文");
            System.out.println("pack ID: " + info.packID + ", pack meta: " + info.packMeta);
            System.out.println("is complete: " + res.isCompleted());
            System.out.println("total lines: " + res.getTotalLines());
            System.out.println("back lines: " + res.getBackLines());
            System.out.println("forward lines: " + res.getForwardLines());
            contextLogs = res.getLogs();

            Thread.sleep(1000);
        }

        // 使用查询结果中的最后一条日志，向后查询下文（单向），至多三次。
        contextLogs = contextRes.getLogs();
        for (int i = 0; i < 3 && !contextLogs.isEmpty(); i++) {
            QueriedLog log = contextLogs.get(contextLogs.size() - 1);
            info = extractPackInfo(log);
            GetContextLogsResponse res = client.getContextLogs(project, logstore,
                    info.packID, info.packMeta, 0, 10);
            System.out.println("向后查询下文");
            System.out.println("pack ID: " + info.packID + ", pack meta: " + info.packMeta);
            System.out.println("is complete: " + res.isCompleted());
            System.out.println("total lines: " + res.getTotalLines());
            System.out.println("back lines: " + res.getBackLines());
            System.out.println("forward lines: " + res.getForwardLines());
            contextLogs = res.getLogs();

            Thread.sleep(1000);
        }
    }
}
```



',
    ),
    'GetHistograms' => 
    array (
      'summary' => '调用GetHistograms接口查询指定Logstore中满足查询语法条件的日志分布情况。',
      'path' => '/logstores/{logstore}/index?type=histogram',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'from',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。

时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
            'description' => '子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1409529600',
          ),
        ),
        3 => 
        array (
          'name' => 'to',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。

时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
            'description' => '子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1409569200',
          ),
        ),
        4 => 
        array (
          'name' => 'topic',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '日志主题。',
            'description' => '日志主题。',
            'type' => 'string',
            'required' => false,
            'example' => 'topic',
          ),
        ),
        5 => 
        array (
          'name' => 'query',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询语句。仅支持查询语句，不支持分析语句。关于查询语句的详细语法，请参见查询语法。',
            'description' => '查询语句。仅支持查询语句，不支持分析语句。关于查询语句的详细语法，请参见[查询语法](~~43772~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'with_pack_meta',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'from' => 
                array (
                  'title' => '子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。

时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
                  'description' => '子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。

时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1409529600',
                ),
                'to' => 
                array (
                  'title' => '子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。

时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
                  'description' => '子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。

时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1409569200',
                ),
                'count' => 
                array (
                  'title' => '该子时间区间内查询到的日志条数。',
                  'description' => '该子时间区间内查询到的日志条数。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '2',
                ),
                'progress' => 
                array (
                  'title' => '当前查询结果在该子时间区间内的结果是否完整。

Complete：查询已经完成，返回结果为完整结果。

Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                  'description' => '当前查询结果在该子时间区间内的结果是否完整。

Complete：查询已经完成，返回结果为完整结果。

Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                  'type' => 'string',
                  'example' => 'Complete',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"from\\": 1409529600,\\n    \\"to\\": 1409569200,\\n    \\"count\\": 2,\\n    \\"progress\\": \\"Complete\\"\\n  }\\n]","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询日志分布情况',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 该接口的响应中子区间划分方式是一直稳定的。如果您在请求查询的时间区间不变，则响应中子区间划分结果也不会改变。
- 当查询涉及的日志数量变化非常大时，日志服务API无法预测需要调用多少次该接口来获取完整结果。所以需要您查看每次请求返回结果中的progress成员状态值，根据成员状态值来确定是否需要重复调用该接口来获取最终完整结果。每次重复调用该接口都会重新消耗相同数量的查询CU。
- 从日志写入日志库到查询接口（GetHistograms和GetLogs）查到该日志，延时时长因写入日志类型不同而异。日志服务按日志时间戳把日志分为如下两类：
    - 实时数据：日志中时间点为服务器当前时间点（-180秒，900秒]。例如，日志时间为UTC 2014-09-25 12:03:00，服务器收到时为UTC 2014-09-25 12:05:00，则该日志被视作实时数据处理。实时数据从写入到在日志查询界面查询到该数据的延迟为3秒。
    - 历史数据：日志中时间点为服务器当前时间点\\[-7x86400秒，-180秒）。例如，日志时间为UTC 2014-09-25 12:00:00，服务器收到时为UTC 2014-09-25 12:05:00，则该日志被作为历史数据处理，一般出现在补数据场景下。
   其中，实时数据写入至可查询的最大延时为3秒，99.9%情况下1秒内即可查询完毕。

> 日志服务将日志时间（字段名称为\\_\\_time\\_\\_）和服务器收到时间（字段名称为\\_\\_tag\\_\\_:\\_\\_receive\\_time\\__）做差，若其差值位于\\(-180秒，900秒]范围，则为实时数据，若其差位于\\[-7x86400秒，-180秒），则为历史数据。

- 日志服务提供Java SDK的GetHistograms查询使用示例。更多信息，请参见[使用GetHistograms查询日志分布数量](~~462234~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist| Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 400  |  InvalidTimeRange|  request time range is invalid. | 请求的时间区间无效。  |
|  400 |  InvalidQueryString|  query string is invalid. | 请求的查询语句无效。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'GetCursorTime' => 
    array (
      'summary' => '根据 Cursor 游标获取游标对应的服务端时间。',
      'path' => '/logstores/{logstore}/shards/{shardId}?type=cursor_time',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'shardId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'shard id。',
            'description' => 'Shard ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'cursor',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '游标。',
            'description' => '希望获取时间戳的Cursor。接口[GetCursor](~~2771314~~)可以获取Cursor。

> 如果Cursor取值小于Begin Cursor或者Cursor取值大于End Cursor，返回InvalidCursor；当Shard中无数据时，返回当前时间。',
            'type' => 'string',
            'required' => true,
            'example' => 'MTU0NzQ3MDY4MjM3NjUxMzQ0Ng==',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'cursor_time' => 
              array (
                'title' => 'Cursor的服务端时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                'description' => 'Cursor的服务端时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                'type' => 'string',
                'example' => '1554260243',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cursor_time\\": \\"1554260243\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '通过Cursor查询服务器端时间',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:GetCursorOrData`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 400  | ShardNotExist|  Shard shardID does not exist.| Shard不存在。  |
| 400  |  LogStoreWithoutShard| the logstore has no shard.| Logstore没有Shard。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetLogsV2' => 
    array (
      'summary' => '查询指定Project下某个Logstore中的原始日志数据，返回结果显示某时间区间中的原始日志（返回结果压缩后传输）。',
      'path' => '/logstores/{logstore}/logs',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'abilityTreeCode' => '179698',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsCAO32E',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'logstore 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'Accept-Encoding',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '压缩方式',
            'description' => '压缩方式

- Java、Python、Go目前仅支持lz4解压缩

- php、Js、C#目前仅支持gzip解压缩',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'lz4' => 'lz4',
              'gzip' => 'gzip',
            ),
            'example' => 'lz4',
            'default' => 'lz4',
          ),
        ),
        3 => 
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
              'from' => 
              array (
                'title' => '查询开始时间点。该时间是指写入日志数据时指定的日志时间。

请求参数from和to定义的时间区间遵循左闭右开原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                'description' => '查询开始时间点。该时间是指写入日志数据时指定的日志时间。

请求参数from和to定义的时间区间遵循左闭右开原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1627268185',
              ),
              'to' => 
              array (
                'title' => '查询结束时间点。该时间是指写入日志数据时指定的日志时间。

请求参数from和to定义的时间区间遵循左闭右开原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                'description' => '查询结束时间点。该时间是指写入日志数据时指定的日志时间。

请求参数from和to定义的时间区间遵循左闭右开原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1627268185',
              ),
              'line' => 
              array (
                'title' => '仅当query参数为查询语句时，该参数有效，表示请求返回的最大日志条数。最小值为0，最大值为100，默认值为100。',
                'description' => '仅当query参数为查询语句时，该参数有效，表示请求返回的最大日志条数。最小值为0，最大值为100，默认值为100。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'maximum' => '100',
                'minimum' => '0',
                'example' => '100',
                'default' => '100',
              ),
              'offset' => 
              array (
                'title' => '仅当query参数为查询语句时，该参数有效，表示查询开始行。默认值为0。',
                'description' => '仅当query参数为查询语句时，该参数有效，表示查询开始行。默认值为0。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '0',
                'default' => '0',
              ),
              'reverse' => 
              array (
                'title' => '用于指定返回结果是否按日志时间戳降序返回日志，精确到分钟级别。

true：按照日志时间戳降序返回日志。
false（默认值）：按照日志时间戳升序返回日志。
注意
当query参数为查询语句时，参数reverse有效，用于指定返回日志排序方式。
当query参数为查询和分析语句时，参数reverse无效，由SQL分析语句中order by语法指定排序方式。如果order by为asc（默认），则为升序；如果order by为desc，则为降序。',
                'description' => '用于指定返回结果是否按日志时间戳降序返回日志，精确到分钟级别。

true：按照日志时间戳降序返回日志。
false（默认值）：按照日志时间戳升序返回日志。
注意
当query参数为查询语句时，参数reverse有效，用于指定返回日志排序方式。
当query参数为查询和分析语句时，参数reverse无效，由SQL分析语句中order by语法指定排序方式。如果order by为asc（默认），则为升序；如果order by为desc，则为降序。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
              'powerSql' => 
              array (
                'title' => '是否开启增强sql，默认关闭。',
                'description' => '是否开启增强sql，默认关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
              'session' => 
              array (
                'description' => '查询参数',
                'type' => 'string',
                'required' => false,
                'example' => 'mode=scan',
              ),
              'topic' => 
              array (
                'description' => '日志主题。默认值为双引号（""）。',
                'type' => 'string',
                'required' => false,
                'example' => '""',
              ),
              'query' => 
              array (
                'title' => '查询语句或者分析语句。更多信息，请参见查询概述和分析概述。

在query参数的分析语句中加上set session parallel_sql=true;，表示使用SQL独享版。例如* | set session parallel_sql=true; select count(*) as pv 。

说明 当query参数中有分析语句（SQL语句）时，该接口的line参数和offset参数无效，建议设置为0，需通过SQL语句的LIMIT语法实现翻页。更多信息，请参见分页显示查询分析结果。',
                'description' => '查询语句或者分析语句。更多信息，请参见查询概述和分析概述。

在query参数的分析语句中加上set session parallel_sql=true;，表示使用SQL独享版。例如* | set session parallel_sql=true; select count(*) as pv 。

说明当query参数中有分析语句（SQL语句）时，该接口的line参数和offset参数无效，建议设置为0，需通过SQL语句的LIMIT语法实现翻页。更多信息，请参见分页显示查询分析结果。',
                'type' => 'string',
                'required' => false,
                'example' => 'status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5',
              ),
              'forward' => 
              array (
                'description' => 'scan或短语查询表示是否向前或向后翻页',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
              'highlight' => 
              array (
                'description' => '是否高亮',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
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
          'headers' => 
          array (
            'date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'content-length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
            'x-log-bodyrawsize' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应内容的大小。',
                'type' => 'string',
              ),
            ),
            'connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'content-type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'x-log-compresstype' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应内容的压缩格式。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'meta' => 
              array (
                'description' => '返回数据meta信息',
                'type' => 'object',
                'properties' => 
                array (
                  'progress' => 
                  array (
                    'description' => '查询的结果是否完整。

- Complete：查询已经完成，返回结果为完整结果。
- Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                    'type' => 'string',
                    'example' => 'Complete',
                  ),
                  'aggQuery' => 
                  array (
                    'description' => '查询语句中 | 之后的SQL部分',
                    'type' => 'string',
                    'example' => 'select *',
                  ),
                  'whereQuery' => 
                  array (
                    'description' => '查询语句中 | 之前的部分',
                    'type' => 'string',
                    'example' => '*',
                  ),
                  'hasSQL' => 
                  array (
                    'description' => '是否sql查询',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'processedRows' => 
                  array (
                    'description' => '本次查询处理的行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10000',
                  ),
                  'elapsedMillisecond' => 
                  array (
                    'description' => '本次查询消耗的毫秒时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'cpuSec' => 
                  array (
                    'description' => '独享SQL的核时',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.002',
                  ),
                  'cpuCores' => 
                  array (
                    'description' => '使用cpu核数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'keys' => 
                  array (
                    'description' => '查询结果中所有的key',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'key',
                      'type' => 'string',
                      'example' => 'key',
                    ),
                  ),
                  'terms' => 
                  array (
                    'description' => '查询语句中所有的词',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '词',
                      'type' => 'object',
                      'example' => '{term=*, key=}',
                    ),
                  ),
                  'limited' => 
                  array (
                    'description' => '限制条数，sql不带limit会返回',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'mode' => 
                  array (
                    'description' => '查询模式枚举
0: 普通查询（包括sql）
1: 短语查询
2: SCAN扫描
3: SCAN SQL',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'phraseQueryInfo' => 
                  array (
                    'description' => '短语查询',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'scanAll' => 
                      array (
                        'description' => '是否已经扫描了全部日志',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'beginOffset' => 
                      array (
                        'description' => '本次扫描结果对应的索引过滤后的起始offset',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                      ),
                      'endOffset' => 
                      array (
                        'description' => '本次扫描结果对应的索引过滤后的结束offset',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                      ),
                      'endTime' => 
                      array (
                        'description' => '本次扫描结果对应的索引过滤后的最后时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'scanBytes' => 
                  array (
                    'description' => 'scan时返回扫描的数据量（字节）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1024',
                  ),
                  'highlights' => 
                  array (
                    'description' => '高亮内容',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '高亮内容',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '高亮日志内容',
                        '$ref' => '#/components/schemas/LogContent',
                      ),
                    ),
                  ),
                  'count' => 
                  array (
                    'description' => '本次查询请求返回的日志行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'processedBytes' => 
                  array (
                    'description' => '查询处理日志量',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10000',
                  ),
                  'isAccurate' => 
                  array (
                    'description' => '是否秒级精确',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'columnTypes' => 
                  array (
                    'description' => '列类型',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '类型',
                      'type' => 'string',
                      'example' => 'long',
                    ),
                  ),
                  'telementryType' => 
                  array (
                    'description' => '可观测数据类型',
                    'type' => 'string',
                    'example' => 'None',
                  ),
                ),
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的数据。',
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                    'example' => '{\'remote_addr\': \'198.51.XXX.XXX\', \'pv\': \'1\', \'__source__\': \'\', \'__time__\': \'1649902984\'}',
                    'description' => '返回数据。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"meta\\": {\\n    \\"progress\\": \\"Complete\\",\\n    \\"aggQuery\\": \\"select *\\",\\n    \\"whereQuery\\": \\"*\\",\\n    \\"hasSQL\\": false,\\n    \\"processedRows\\": 10000,\\n    \\"elapsedMillisecond\\": 5,\\n    \\"cpuSec\\": 0.002,\\n    \\"cpuCores\\": 3,\\n    \\"keys\\": [\\n      \\"key\\"\\n    ],\\n    \\"terms\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ],\\n    \\"limited\\": 100,\\n    \\"mode\\": 0,\\n    \\"phraseQueryInfo\\": {\\n      \\"scanAll\\": true,\\n      \\"beginOffset\\": 0,\\n      \\"endOffset\\": 0,\\n      \\"endTime\\": 1\\n    },\\n    \\"scanBytes\\": 1024,\\n    \\"highlights\\": [\\n      [\\n        {\\n          \\"Key\\": \\"key-test\\",\\n          \\"Value\\": \\"value-test\\"\\n        }\\n      ]\\n    ],\\n    \\"count\\": 1,\\n    \\"processedBytes\\": 10000,\\n    \\"isAccurate\\": true,\\n    \\"columnTypes\\": [\\n      \\"long\\"\\n    ],\\n    \\"telementryType\\": \\"None\\"\\n  },\\n  \\"data\\": [\\n    {\\n      \\"key\\": \\"{\'remote_addr\': \'198.51.XXX.XXX\', \'pv\': \'1\', \'__source__\': \'\', \'__time__\': \'1649902984\'}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询Logstore中的日志数据',
      'description' => '- 日志服务SDK目前仅支持Go、Java、Python三种语言，OpenAPI全部已支持。

- 使用过程中注意指定压缩方法，不同语言实现的压缩算法不同，详情参考入参Accept-Encoding。

- 更多相关说明请参见[GetLogs](~~29029~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:GetLogStoreLogs`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`  |',
    ),
    'GetLogStoreMeteringMode' => 
    array (
      'summary' => '获取Logstore计量模式。',
      'path' => '/logstores/{logstore}/meteringmode',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '195981',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsTA08U2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project名称',
            'description' => 'project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectName',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore名称',
            'description' => 'logstore名称',
            'type' => 'string',
            'required' => true,
            'example' => 'logstoreName',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'meteringMode' => 
              array (
                'title' => '计量模式。ChargeByFunction 默认计量模式，ChargeByDataIngest 流量模式。',
                'description' => '计量模式。ChargeByFunction 默认计量模式，ChargeByDataIngest 流量模式。',
                'type' => 'string',
                'example' => 'ChargeByFunction',
                'enum' => 
                array (
                  0 => 'ChargeByFunction',
                  1 => 'ChargeByDataIngest',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"meteringMode\\": \\"ChargeByFunction\\"\\n}","type":"json"}]',
      'title' => '查询LogStore计量模式',
    ),
    'UpdateMetricStoreMeteringMode' => 
    array (
      'summary' => '更新指定 MetricStore 计量模式。',
      'path' => '/metricstores/{metricStore}/meteringmode',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '213244',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsA3NLDD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project名称',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectName',
          ),
        ),
        1 => 
        array (
          'name' => 'metricStore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'MetricStore名称',
            'description' => 'MetricStore名称',
            'type' => 'string',
            'required' => true,
            'example' => 'metricStoreName',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'meteringMode' => 
              array (
                'title' => '计量模式。ChargeByFunction 默认计量模式，ChargeByDataIngest 流量模式。',
                'description' => '计量模式。ChargeByFunction 默认计量模式，ChargeByDataIngest 流量模式。',
                'type' => 'string',
                'required' => true,
                'example' => 'ChargeByFunction',
                'default' => 'ChargeByFunction',
                'enum' => 
                array (
                  0 => 'ChargeByDataIngest',
                  1 => 'ChargeByFunction',
                ),
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新 MetricStore 计量模式',
    ),
    'GetMetricStoreMeteringMode' => 
    array (
      'summary' => '查询指定 MetricStore 计量模式。',
      'path' => '/metricstores/{metricStore}/meteringmode',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '213243',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsA3NLDD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project名称',
            'description' => 'project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'projectName',
          ),
        ),
        1 => 
        array (
          'name' => 'metricStore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'metricStore',
            'description' => 'metricStore',
            'type' => 'string',
            'required' => true,
            'example' => 'metricStoreName',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'meteringMode' => 
              array (
                'title' => '计量模式。ChargeByFunction 默认计量模式，ChargeByDataIngest 流量模式。',
                'description' => '计量模式。ChargeByFunction 默认计量模式，ChargeByDataIngest 流量模式。',
                'type' => 'string',
                'example' => 'ChargeByFunction',
                'enum' => 
                array (
                  0 => 'ChargeByFunction',
                  1 => 'ChargeByDataIngest',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"meteringMode\\": \\"ChargeByFunction\\"\\n}","type":"json"}]',
      'title' => '查询 MetricStore 计量模式',
    ),
    'CreateStoreView' => 
    array (
      'summary' => '创建一个数据集。',
      'path' => '/storeviews',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '208488',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls27DZA4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '日志项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '数据集配置。',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'description' => '数据集名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'my_storeview',
              ),
              'storeType' => 
              array (
                'description' => '数据集类型，支持两种类型，当创建时序库数据集时 storeType 指定为 metricstore ，当创建日志库数据集时， storeType 指定为 logstore 。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'metricstore' => 'metricstore',
                  'logstore' => 'logstore',
                ),
                'example' => 'logstore',
              ),
              'stores' => 
              array (
                'description' => '日志库或者时序库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志库或时序库。',
                  'required' => true,
                  '$ref' => '#/components/schemas/StoreViewStore',
                ),
                'required' => true,
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建数据集',
    ),
    'DeleteStoreView' => 
    array (
      'summary' => '根据名称删除指定数据集。',
      'path' => '/storeviews/{name}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'high',
        'chargeType' => 'free',
        'abilityTreeCode' => '208667',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls27DZA4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '日志项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'example-project',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my_storeview',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除数据集',
    ),
    'UpdateStoreView' => 
    array (
      'summary' => '更新指定数据集配置。',
      'path' => '/storeviews/{name}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'free',
        'abilityTreeCode' => '208677',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls27DZA4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '日志项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'example-project',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'my_storeview',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '数据集配置。',
            'type' => 'object',
            'properties' => 
            array (
              'storeType' => 
              array (
                'description' => '数据集类型',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'metricstore' => 'metricstore',
                  'logstore' => 'logstore',
                ),
                'example' => 'logstore',
              ),
              'stores' => 
              array (
                'description' => '日志库或者时序库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志库或者时序库。',
                  'required' => true,
                  '$ref' => '#/components/schemas/StoreViewStore',
                ),
                'required' => true,
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新数据集配置',
    ),
    'GetStoreView' => 
    array (
      'summary' => '根据名称查询指定数据集配置。',
      'path' => '/storeviews/{name}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '208676',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls27DZA4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '日志项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-project',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'my_storeview',
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
            'description' => '数据集配置。',
            'type' => 'object',
            'properties' => 
            array (
              'storeType' => 
              array (
                'title' => 'Id of the request',
                'description' => '数据集类型。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'metricstore' => 'metricstore',
                  'logstore' => 'logstore',
                ),
                'example' => 'logstore',
              ),
              'stores' => 
              array (
                'description' => '日志库或时序库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志库或者时序库。',
                  '$ref' => '#/components/schemas/StoreViewStore',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"storeType\\": \\"logstore\\",\\n  \\"stores\\": [\\n    {\\n      \\"project\\": \\"\\",\\n      \\"storeName\\": \\"\\",\\n      \\"query\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询指定数据集',
    ),
    'GetStoreViewIndex' => 
    array (
      'summary' => '根据指定名称查询数据集索引，只支持 logstore 类型的数据集。',
      'path' => '/storeviews/{name}/index',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '212612',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls27DZA4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '日志项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-project',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'my_storeview',
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
            'description' => '数据集中所有 LogStore 索引配置。',
            'type' => 'object',
            'properties' => 
            array (
              'indexes' => 
              array (
                'description' => '索引配置列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '索引配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'project' => 
                    array (
                      'description' => 'LogStore 所属日志项目名称。',
                      'type' => 'string',
                      'example' => 'example-project',
                    ),
                    'logstore' => 
                    array (
                      'description' => 'LogStore 名称。',
                      'type' => 'string',
                      'example' => 'my-logstore',
                    ),
                    'index' => 
                    array (
                      'description' => 'LogStore 索引配置。',
                      '$ref' => '#/components/schemas/index',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"indexes\\": [\\n    {\\n      \\"project\\": \\"example-project\\",\\n      \\"logstore\\": \\"my-logstore\\",\\n      \\"index\\": {\\n        \\"ttl\\": 30,\\n        \\"max_text_len\\": 2048,\\n        \\"log_reduce_white_list\\": [\\n          \\"name\\"\\n        ],\\n        \\"log_reduce_black_list\\": [\\n          \\"time\\"\\n        ],\\n        \\"line\\": {\\n          \\"chn\\": true,\\n          \\"caseSensitive\\": true,\\n          \\"token\\": [\\n            \\",\\"\\n          ],\\n          \\"include_keys\\": [\\n            \\"\\"\\n          ],\\n          \\"exclude_keys\\": [\\n            \\"\\"\\n          ]\\n        },\\n        \\"keys\\": {\\n          \\"key\\": {\\n            \\"chn\\": true,\\n            \\"caseSensitive\\": true,\\n            \\"token\\": [\\n              \\"|\\"\\n            ],\\n            \\"alias\\": \\"myAlias\\",\\n            \\"type\\": \\"text\\",\\n            \\"doc_value\\": true\\n          }\\n        },\\n        \\"log_reduce\\": true,\\n        \\"lastModifyTime\\": 1622186280\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询指定数据集索引配置',
    ),
    'ListStoreViews' => 
    array (
      'summary' => '查询日志项目中的数据集列表。',
      'path' => '/storeviews',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '208670',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls27DZA4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '日志项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'example-project',
          ),
        ),
        1 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '期望返回的数据集个数， 默认值为 100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        2 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果在全部数据集中的偏移位置， 默认为 0 。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于模糊搜索的数据集名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_storeview',
          ),
        ),
        4 => 
        array (
          'name' => 'storeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集类型，默认不根据类型过滤。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'metricstore' => 'metricstore',
              'logstore' => 'logstore',
            ),
            'example' => 'logstore',
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
            'description' => '数据集列表。',
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'description' => '返回的数据集个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'total' => 
              array (
                'description' => '日志项目中的数据集总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'storeviews' => 
              array (
                'description' => '数据集名称列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据集名称。',
                  'type' => 'string',
                  'example' => 'my_storeview',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"count\\": 100,\\n  \\"total\\": 100,\\n  \\"storeviews\\": [\\n    \\"my_storeview\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询数据集列表',
    ),
    'CreateMachineGroup' => 
    array (
      'summary' => '创建一个机器组。',
      'path' => '/machinegroups',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体。',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'groupName' => 
              array (
                'title' => '机器组名称。',
                'description' => '机器组名称。其命名规则如下：

- 同一个Project下，机器组名称不可重复。
- 只能包括小写字母、数字、短划线（-）和下划线（_）。
- 必须以小写字母或者数字开头和结尾。
- 长度为3-128字符。',
                'type' => 'string',
                'required' => true,
                'example' => 'test-machine-group',
              ),
              'machineIdentifyType' => 
              array (
                'title' => '机器组标识种类，支持 ip 、userdefined 两种。',
                'description' => '机器标识类型。

- ip：IP地址机器组。
- userdefined：用户自定义标识机器组。',
                'type' => 'string',
                'required' => true,
                'example' => 'ip',
                'default' => 'ip',
              ),
              'groupType' => 
              array (
                'title' => '机器组类型，可选值，默认为空。',
                'description' => '机器组类型，可选值为空。',
                'type' => 'string',
                'required' => false,
                'example' => '""',
              ),
              'groupAttribute' => 
              array (
                'title' => '机器组属性。',
                'description' => '机器组的属性。',
                'type' => 'object',
                'properties' => 
                array (
                  'groupTopic' => 
                  array (
                    'title' => '机器组的日志主题。',
                    'description' => '机器组的日志主题。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'testtopic',
                  ),
                  'externalName' => 
                  array (
                    'title' => '机器组所依赖的外部管理系统标识。',
                    'description' => '机器组所依赖的外部管理系统标识。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'testgroup',
                  ),
                ),
                'required' => false,
              ),
              'machineList' => 
              array (
                'title' => '机器列表。',
                'description' => '机器组的标识信息。

- 如果machineIdentifyType配置为ip，则此处填写服务器的IP地址。
- 如果machineIdentifyType配置为userdefined，则此处填写自定义的标识。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '机器标识，如 ip 地址、用户自定义标识。',
                  'description' => '机器标识，根据机器组类型填写IP地址或者用户自定义标识。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.XX.XX',
                ),
                'required' => true,
              ),
            ),
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建机器组',
      'description' => '### 接口说明
Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | MachineGroupAlreadyExist| groupName already exists. | 机器组已存在。  |
| 400  | InvalidParameter| invalid group resource json. | 无效机器组参数。  |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'DeleteMachineGroup' => 
    array (
      'summary' => '删除机器组。如果机器组已应用Logtail采集配置，则删除机器组后，会解绑对应的Logtail配置。',
      'path' => '/machinegroups/{machineGroup}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'machineGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-machine-group-4',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除机器组',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
|  404 |  MachineGroupNotExist|  MachineGroup groupName does not exist.| 机器组不存在。  |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'RemoveConfigFromMachineGroup' => 
    array (
      'summary' => '从机器组中移除Logtail配置。',
      'path' => '/machinegroups/{machineGroup}/configs/{configName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'machineGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-group',
          ),
        ),
        2 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logtail 配置名称。',
            'description' => 'Logtail配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logtail',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除机器组Logtail配置',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | MachineGroupNotExist| MachineGroup groupName does not exist.| 机器组不存在。  |
| 404  | ConfigNotExist| Config configName does not exist. | Logtail配置不存在。 |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'ApplyConfigToMachineGroup' => 
    array (
      'summary' => '将Logtail配置应用到机器组。',
      'path' => '/machinegroups/{machineGroup}/configs/{configName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'machineGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'sample-group',
          ),
        ),
        2 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logtail 配置名称。',
            'description' => 'Logtail配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'logtail-config-sample',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '应用Logtail配置到机器组',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | MachineGroupNotExist|  MachineGroupdoes not exist. | 机器组不存在。  |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | ConfigNotExist | Configdoes not exist. | Logtail配置不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateMachineGroup' => 
    array (
      'summary' => '修改机器组配置信息。',
      'path' => '/machinegroups/{groupName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'groupName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-group',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体。',
            'description' => '请求体结构。',
            'type' => 'object',
            'properties' => 
            array (
              'groupName' => 
              array (
                'title' => '机器组名称。',
                'description' => '机器组名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'test-machine-group',
              ),
              'machineIdentifyType' => 
              array (
                'title' => '机器组标识种类，支持 ip 、userdefined 两种。',
                'description' => '机器组标识类型。

- ip：IP地址机器组。
- userdefined：用户自定义标识机器组。',
                'type' => 'string',
                'required' => true,
                'example' => 'userdefined',
                'default' => 'ip',
              ),
              'groupType' => 
              array (
                'title' => '机器组类型，可选值，默认为空。',
                'description' => '机器组类型，固定为空字符串。',
                'type' => 'string',
                'required' => false,
                'example' => '""',
              ),
              'groupAttribute' => 
              array (
                'title' => '机器组属性。',
                'description' => '机器组的属性，默认为空。',
                'type' => 'object',
                'properties' => 
                array (
                  'groupTopic' => 
                  array (
                    'title' => '机器组的日志主题。',
                    'description' => '机器组的日志主题。默认为空。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'testtopic2',
                  ),
                  'externalName' => 
                  array (
                    'title' => '机器组所依赖的外部管理系统标识。',
                    'description' => '机器组所依赖的外部管理系统标识。默认为空。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'testgroup2',
                  ),
                ),
                'required' => false,
              ),
              'machineList' => 
              array (
                'title' => '机器列表。',
                'description' => '机器组的标识信息。

- 如果machineIdentifyType配置为ip，则此处填写服务器的IP地址。
- 如果machineIdentifyType配置为userdefined，则此处填写自定义的标识。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '机器标识，如 ip 地址、用户自定义标识。',
                  'description' => '机器标识，如IP地址、用户自定义标识。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.xx.xx',
                ),
                'required' => true,
                'example' => '[uu_id_1，uu_id_2]',
              ),
            ),
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改机器组',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project名称。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | InvalidParameter| invalid group resource json  | Project不存在。  |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | MachineGroupNotExist  | MachineGroup groupName does not exist.  | 无效机器组参数。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'UpdateMachineGroupMachine' => 
    array (
      'summary' => '修改机器组中的机器列表，支持从机器列表中增加或者删除机器。',
      'path' => '/machinegroups/{machineGroup}/machines',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'machineGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-group',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求结构体。要添加或删除的机器列表。',
            'description' => '请求结构体。要添加或删除的机器列表。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '机器标识。ip 地址或者用户自定义标识。',
              'description' => '机器标识。ip地址或者用户自定义标识。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.xx.x',
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'action',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'add 表示添加机器到机器组中， delete 表示从机器组中删除机器。',
            'description' => 'add表示添加机器到机器组中， delete表示从机器组中删除机器。',
            'type' => 'string',
            'required' => false,
            'example' => 'add',
            'default' => 'add',
            'enum' => 
            array (
              0 => 'add',
              1 => 'delete',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改机器组机器列表',
      'description' => '请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'ListMachineGroup' => 
    array (
      'summary' => '列出目标Project下的机器组。',
      'path' => '/machinegroups',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页请求的起始位置。默认为0。',
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
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
            'title' => '分页查询时，设置的每页行数。默认值为2000。',
            'description' => '分页查询时，设置的每页行数。最大值为500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '2000',
          ),
        ),
        3 => 
        array (
          'name' => 'groupName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '可将 groupName 作为 pattern 匹配名称，只会返回匹配的机器组。例如 test 可以匹配机器组 test-group。',
            'description' => '机器组名称。用于过滤机器组，支持部分匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-machine-group',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '请求返回体。',
            'description' => '符合查询条件的数据。',
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'title' => '当前页返回的机器组数量。',
                'description' => '当前页返回的机器组数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'total' => 
              array (
                'title' => '机器组总数量。',
                'description' => '符合查询条件的机器组总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'machinegroups' => 
              array (
                'title' => '机器组名称列表。',
                'description' => '符合查询条件的机器组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '机器组名称。',
                  'description' => '机器组名称。',
                  'type' => 'string',
                  'example' => 'test-group',
                ),
                'example' => '[ "test-machine-group-1", "test-machine-group-2" ]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"count\\": 1,\\n  \\"total\\": 1,\\n  \\"machinegroups\\": [\\n    \\"test-group\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询Project下的机器组',
      'description' => '### 接口说明
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。

- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:ListMachineGroup`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/machinegroup/*`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
|  500 |  InternalServerError |  internal server error. | 内部服务调用错误。 |

更多信息，请参见[错误码对照表](~~29013~~)。
',
    ),
    'ListMachines' => 
    array (
      'summary' => '列出目标机器组中与日志服务连接正常的机器列表。',
      'path' => '/machinegroups/{machineGroup}/machines',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'machineGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-group',
          ),
        ),
        2 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询开始行。默认值为0。',
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时，设置的每页行数。默认值为2000。',
            'description' => '分页查询时，设置的每页行数。默认值为100，最大值为500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '2000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '返回的机器信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'title' => '当前页返回的机器数目。',
                'description' => '当前页返回的机器数目。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'total' => 
              array (
                'title' => '机器总数。',
                'description' => '机器总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8',
              ),
              'machines' => 
              array (
                'title' => '返回的机器信息列表。',
                'description' => '返回的机器信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '机器信息。',
                  'description' => '机器信息。',
                  'example' => '[{"ip": "10.***.***.***", "machine-uniqueid": "", "userdefined-id": "", "lastHeartbeatTime":                                       1447182247},{"ip": "10.***.***.***", "machine-uniqueid": "","userdefined-id": "","lastHeartbeatTime":                                       1447182246}]',
                  '$ref' => '#/components/schemas/machine',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"count\\": 3,\\n  \\"total\\": 8,\\n  \\"machines\\": [\\n    {\\n      \\"ip\\": \\"192.168.x.x\\",\\n      \\"machine-uniqueid\\": \\"3B70F4F1-80F7-46C4-A6C1-100D66C***47\\",\\n      \\"lastHeartbeatTime\\": 1657509674,\\n      \\"userdefined-id\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询机器组中的机器列表',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | MachineGroupNotExist| MachineGroup groupName does not exist.  | 机器组不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'GetMachineGroup' => 
    array (
      'summary' => '查看目标机器组的具体信息。',
      'path' => '/machinegroups/{machineGroup}',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'machineGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-machine-group',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '请求返回体。',
            'description' => '机器组数据结构。',
            '$ref' => '#/components/schemas/machineGroup',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"groupName\\": \\"test-group\\",\\n  \\"groupType\\": \\"\\",\\n  \\"machineIdentifyType\\": \\"ip\\",\\n  \\"groupAttribute\\": {\\n    \\"groupTopic\\": \\"test-topic\\",\\n    \\"externalName\\": \\"test-group\\"\\n  },\\n  \\"machineList\\": [\\n    \\"192.168.xx.x\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取机器组配置',
      'description' => '### 接口说明
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。
- 已获取机器组名称。更多信息，请参见[ListMachineGroup](~~29035~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:GetMachineGroup`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/machinegroup/{#MachineGroupName}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | MachineGroupNotExist| MachineGroup groupName does not exist. | 机器组不存在。  |
| 500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetAppliedConfigs' => 
    array (
      'summary' => '获取目标机器组上已经被应用的Logtail配置列表。',
      'path' => '/machinegroups/{machineGroup}/configs',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'machineGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机器组名称。',
            'description' => '机器组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-machine-group',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '请求返回体。',
            'description' => '请求返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'title' => 'Logtail配置数量。',
                'description' => 'Logtail配置数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'configs' => 
              array (
                'title' => 'Logtail配置名称列表。',
                'description' => 'Logtail配置名称列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'Logtail 配置名称。',
                  'description' => 'Logtail配置信息。',
                  'type' => 'string',
                  'example' => '[ "two", "three", "test_logstore" ]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"count\\": 2,\\n  \\"configs\\": [\\n    \\"[ \\\\\\"two\\\\\\", \\\\\\"three\\\\\\", \\\\\\"test_logstore\\\\\\" ]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取已应用的Logtail配置列表',
      'description' => 'Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | MachineGroupNotExist| MachineGroup groupName does not exist. | 机器组不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetAppliedMachineGroups' => 
    array (
      'summary' => '调用GetAppliedMachineGroups接口获取已绑定指定Logtail配置的机器组列表。',
      'path' => '/configs/{configName}/machinegroups',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logtail 配置名称。',
            'description' => 'Logtail配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'logtail-config-sample',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '请求返回体。',
            'description' => '请求返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'title' => '返回的机器组数量。',
                'description' => '返回的机器组数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'machinegroups' => 
              array (
                'title' => '返回的机器组名称列表。',
                'description' => '返回的机器组名称。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '机器组名称。',
                  'description' => '机器组名称。',
                  'type' => 'string',
                  'example' => 'sample-group1',
                ),
                'example' => '[ "sample-group1","sample-group2" ]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"count\\": 2,\\n  \\"machinegroups\\": [\\n    \\"sample-group1\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '通过Logtail配置获取已绑定的机器组',
      'description' => '请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project名称。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | ConfigNotExist  | Config confiName does not exist.  | Logtail配置不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'CreateConfig' => 
    array (
      'summary' => '创建Logtail采集配置。',
      'path' => '/configs',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求消息体。',
            'required' => false,
            '$ref' => '#/components/schemas/LogtailConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建Logtail采集配置',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)。
- 每个Project最多可创建100个Logtail配置。

- 已规划好Logtail采集配置。更多信息，请参见[Logtail配置](~~29058~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | ConfigAlreadyExist  | config configname already exists.  | Logtail配置已存在。  |
|  400 |  InvalidParameter |  Invalid config resource json.| 无效的Logtail配置参数。 |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'CreateLogtailPipelineConfig' => 
    array (
      'summary' => '创建Logtail流水线配置。',
      'path' => '/pipelineconfigs',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project名称',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Logtail流水线配置内容',
            'description' => 'Logtail流水线配置内容。',
            'type' => 'object',
            'properties' => 
            array (
              'configName' => 
              array (
                'title' => '配置名称',
                'description' => '配置名称。

> 配置名称在所属Project内唯一，且创建成功后无法修改。命名规则如下：
> - 只能包括小写字母、数字、-和_。
> - 必须以小写字母或数字开头和结尾。
> - 长度必须在2~128字符之间。',
                'type' => 'string',
                'required' => true,
                'example' => 'test-config',
                'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
              ),
              'logSample' => 
              array (
                'title' => '日志样例',
                'description' => '日志样例。支持多条日志。',
                'type' => 'string',
                'required' => false,
                'example' => '2022-06-14 11:13:29.796 | DEBUG    | __main__:<module>:1 - hello world',
              ),
              'global' => 
              array (
                'title' => '全局配置',
                'description' => '全局配置。',
                'type' => 'object',
                'required' => false,
              ),
              'inputs' => 
              array (
                'title' => '输入插件列表',
                'description' => '输入插件列表。
><notice>目前，只允许配置1个输入插件。></notice>',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '输入插件',
                  'description' => '输入插件。

> 文件输入插件参数请参见[文件插件](~~65064~~)，其余输入插件参数请参见[处理插件](~~64957~~)。',
                  'type' => 'object',
                  'required' => false,
                  'example' => '{
    "Type": "input_file",
    "FilePaths": ["/var/log/*.log"]
}',
                ),
                'required' => true,
                'minItems' => 1,
              ),
              'processors' => 
              array (
                'title' => '输入插件列表',
                'description' => '处理插件列表。

> 可分为原生处理插件和扩展处理插件，详情请参见[处理插件](~~64957~~)。

><notice>

> - 原生插件仅可用于采集文本日志。
> - 不支持同时添加原生插件和扩展插件。
> - 使用原生插件时，须符合如下要求：
>   - 第一个处理插件必须为正则解析插件、分隔符模式解析插件、JSON解析插件、NGINX模式解析插件、Apache模式解析插件或IIS模式解析插件。
>   - 第一个处理插件之后仅允许存在1个时间解析处理插件，1个过滤插件和多个脱敏插件。></notice>',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '输入插件',
                  'description' => '处理插件。

> 原生处理插件和扩展处理插件，详情请参见[处理插件](~~64957~~)。',
                  'type' => 'object',
                  'required' => false,
                  'example' => '{
    "Type": "processor_parse_json_native",
    "SourceKey": "content"
}',
                ),
                'required' => false,
                'minItems' => 1,
              ),
              'aggregators' => 
              array (
                'title' => '聚合插件列表',
                'description' => '聚合插件列表。
><notice>仅当使用了扩展处理插件时有效，且最多允许使用1个聚合插件。></notice>',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '聚合插件',
                  'description' => '聚合插件。',
                  'type' => 'object',
                  'required' => false,
                ),
                'required' => false,
                'minItems' => 1,
              ),
              'flushers' => 
              array (
                'title' => '输出插件列表',
                'description' => '输出插件列表。
><notice>目前，只允许存在1个flusher_sls插件。></notice>',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '输出插件',
                  'description' => '输出插件。',
                  'type' => 'object',
                  'required' => false,
                  'example' => '{
    "Type": "flusher_sls",
    "Logstore": "test"
}',
                ),
                'required' => true,
                'minItems' => 1,
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建Logtail流水线配置',
      'requestParamsDescription' => '# 全局配置

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  TopicType  |  string  |  否  |  空  |  filepath  |  Topic类型。可选值包括：<ul><li>filepath：从日志文件路径中提取信息作为Topic。仅当输入插件为input\\_file时有效。</li><li>machine\\_group\\_topic：将应用该配置的机器组Topic作为Topic。</li><li>custom：自定义Topic      更多信息，请参见[日志主题](~~60069~~)。</li></ul>  |
|  TopicFormat  |  string  |  否，当TopicType取值为filepath或custom时必填  |  /  |  /var/log/(.\\*).log  |  Topic格式。  |
|  EnableTimestampNanosecond  |  bool  |  否  |  false  |  false  |  是否启用时间纳秒精度。  |

# 输入插件

## 文件输入插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  input\\_file  |  插件类型。固定为input\\_file。  |
|  FilePaths  |  \\[string\\]  |  是  |  /  |  \\["/var/log/\\*.log"\\]  |  待采集的日志文件路径列表（目前仅限1个路径）。路径中支持使用\\*和\\*\\*通配符，其中\\*\\*通配符仅能出现一次且仅限用于文件名前。  |
|  MaxDirSearchDepth  |  uint  |  否  |  0  |  0  |  文件路径中\\*\\*通配符匹配的最大目录深度。仅当日志路径中存在\\*\\*通配符时有效，取值范围为0～1000。  |
|  ExcludeFilePaths  |  \\[string\\]  |  否  |  空  |  \\["/home/admin/\\*.log"\\]  |  文件路径黑名单。路径必须为绝对路径，支持使用\\*通配符  |
|  ExcludeFiles  |  \\[string\\]  |  否  |  空  |  \\["app\\*.log", "password"\\]  |  文件名黑名单。支持使用\\*通配符  |
|  ExcludeDirs  |  \\[string\\]  |  否  |  空  |  \\["/home/admin/dir1", "/home/admin/dir2\\*"\\]  |  目录黑名单。路径必须为绝对路径，支持使用\\*通配符  |
|  FileEncoding  |  string  |  否  |  utf8  |  utf8  |  文件编码格式。可选值包括utf8和gbk。  |
|  TailSizeKB  |  uint  |  否  |  1024  |  1024  |  配置首次生效时，匹配文件的起始采集位置距离文件结尾的大小。如果文件大小小于该值，则从头开始采集，取值范围为0～10485760KB。  |
|  Multiline  |  object  |  否  |  空  |  /  |  多行聚合选项。  |
|  Multiline.Mode  |  string  |  否  |  custom  |  custom  |  多行聚合模式。可选值包括custom和JSON。  |
|  Multiline.StartPattern  |  string  |  当Multiline.Mode取值为custom时必填  |  空  |  \\d+-\\d+-\\d+.\\*  |  行首正则表达式。  |
|  EnableContainerDiscovery  |  bool  |  否  |  false  |  true  |  是否启用容器发现功能。仅当Logtail以Daemonset模式运行，且采集文件路径为容器内路径时有效。  |
|  ContainerFilters  |  object  |  否  |  空  |  /  |  容器过滤选项。多个选项之间为“且”的关系，仅当EnableContainerDiscovery取值为true时有效。  |
|  ContainerFilters.K8sNamespaceRegex  |  string  |  否  |  空  |  default  |  对于部署于K8s环境的容器，指定待采集容器所在Pod所属的命名空间条件。如果未添加该参数，则表示采集所有容器。支持正则匹配。  |
|  ContainerFilters.K8sPodRegex  |  string  |  否  |  空  |  test-pod  |  对于部署于K8s环境的容器，指定待采集容器所在Pod的名称条件。如果未添加该参数，则表示采集所有容器。支持正则匹配。  |
|  ContainerFilters.IncludeK8sLabel  |  map  |  否  |  空  |  /  |  对于部署于K8s环境的容器，指定待采集容器所在pod的标签条件。多个条件之间为“或”的关系，如果未添加该参数，则表示采集所有容器。支持正则匹配。 map中的key为Pod标签名，value为Pod标签的值，说明如下：<ul><li>如果map中的value为空，则pod标签中包含以key为键的pod都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当pod标签中存在以key为标签名且对应标签值能正则匹配value的情况时，相应的pod会被匹配；</li><li>其他情况下，当pod标签中存在以key为标签名且以value为标签值的情况时，相应的pod会被匹配。</li></ul></ul>       |
|  ContainerFilters.ExcludeK8sLabel  |  map  |  否  |  空  |  /  |  对于部署于K8s环境的容器，指定需要排除采集容器所在pod的标签条件。多个条件之间为“或”的关系，如果未添加该参数，则表示采集所有容器。支持正则匹配。 map中的key为pod标签名，value为pod标签的值，说明如下：<ul><li>如果map中的value为空，则pod标签中包含以key为键的pod都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当pod标签中存在以key为标签名且对应标签值能正则匹配value的情况时，相应的pod会被匹配；</li><li>其他情况下，当pod标签中存在以key为标签名且以value为标签值的情况时，相应的pod会被匹配。</li></ul></ul>       |
|  ContainerFilters.K8sContainerRegex  |  string  |  否  |  空  |  test-container  |  对于部署于K8s环境的容器，指定待采集容器的名称条件。如果未添加该参数，则表示采集所有容器。支持正则匹配。  |
|  ContainerFilters.IncludeEnv  |  map  |  否  |  空  |  /  |  指定待采集容器的环境变量条件。多个条件之间为“或”的关系，如果未添加该参数，则表示采集所有容器。支持正则匹配。 map中的key为环境变量名，value为环境变量的值，说明如下：<ul><li>如果map中的value为空，则容器环境变量中包含以key为键的容器都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当容器环境变量中存在以key为环境变量名且对应环境变量值能正则匹配value的情况时，相应的容器会被匹配；</li><li>其他情况下，当容器环境变量中存在以key为环境变量名且以value为环境变量值的情况时，相应的容器会被匹配。</li></ul></ul>      |
|  ContainerFilters.ExcludeEnv  |  map  |  否  |  空  |  /  |  指定需要排除采集容器的环境变量条件。多个条件之间为“或”的关系，如果未添加该参数，则表示采集所有容器。支持正则匹配。 map中的key为环境变量名，value为环境变量的值，说明如下：<ul><li>如果map中的value为空，则容器环境变量中包含以key为键的容器都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当容器环境变量中存在以key为环境变量名且对应环境变量值能正则匹配value的情况时，相应的容器会被匹配；</li><li>其他情况下，当容器环境变量中存在以key为环境变量名且以value为环境变量值的情况时，相应的容器会被匹配。</li></ul></ul>      |
|  ContainerFilters.IncludeContainerLabel  |  map  |  否  |  空  |  /  |  指定待采集容器的标签条件。多个条件之间为“或”的关系，如果未添加该参数，则默认为空，表示采集所有容器。支持正则匹配。 map中的key为容器标签名，value为容器标签的值，说明如下：<ul><li>如果map中的value为空，则容器标签中包含以key为键的容器都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当容器标签中存在以key为标签名且对应标签值能正则匹配value的情况时，相应的容器会被匹配；</li><li>其他情况下，当容器标签中存在以key为标签名且以value为标签值的情况时，相应的容器会被匹配。</li></ul></ul>       |
|  ContainerFilters.ExcludeContainerLabel  |  map  |  否  |  空  |  /  |  指定需要排除采集容器的标签条件。多个条件之间为“或”的关系，如果未添加该参数，则默认为空，表示采集所有容器。支持正则匹配。 map中的key为容器标签名，value为容器标签的值，说明如下：<ul><li>如果map中的value为空，则容器标签中包含以key为键的容器都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当容器标签中存在以key为标签名且对应标签值能正则匹配value的情况时，相应的容器会被匹配；</li><li>其他情况下，当容器标签中存在以key为标签名且以value为标签值的情况时，相应的容器会被匹配。</li></ul></ul>  |
|  ExternalK8sLabelTag  |  map  |  否  |  空  |  /  |  对于部署于K8s环境的容器，需要在日志中额外添加的与Pod标签相关的tag。map中的key为Pod标签名，value为对应的tag名。 例如：在map中添加`app: k8s\\_label\\_app`，则若pod中包含`app=serviceA`的标签时，会将该信息以tag的形式添加到日志中，即添加字段`__tag__:k8s_label_app: serviceA`；若不包含`app`标签，则会添加空字段`__tag__:k8s_label_app: `。 |
|  ExternalEnvTag  |  map  |  否  |  空  |  /  |  对于部署于K8s环境的容器，需要在日志中额外添加的与容器环境变量相关的tag。map中的key为环境变量名，value为对应的tag名。 例如：在map中添加`VERSION: env\\_version`，则当容器中包含环境变量`VERSION=v1.0.0`时，会将该信息以tag的形式添加到日志中，即添加字段`__tag__:env_version: v1.0.0`；若不包含`VERSION`环境变量，则会添加空字段`__tag__:env_version: ` 。|
|  CollectingContainersMeta  |  bool  |  否  |  false  |  true  |  是否启用容器元信息预览。  |
|  AppendingLogPositionMeta  |  bool  |  否  |  false  |  false  |  是否在日志中添加该条日志所属文件的元信息，包括\\_\\_tag\\_\\_:\\_\\_inode\\_\\_字段和\\_\\_file\\_offset\\_\\_字段。  |
|  AllowingIncludedByMultiConfigs  |  bool  |  否  |  false  |  false  |  是否允许当前配置采集其它配置已匹配的文件。  |

# 原生处理插件

## 正则解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_regex\\_native  |  插件类型。固定为processor\\_parse\\_regex\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  Regex  |  string  |  是  |  /  |  (\\d+-\\d+-\\d+)\\s+(.\\*)  |  正则表达式。  |
|  Keys  |  \\[string\\]  |  是  |  /  |  \\["time", "msg"\\]  |  提取的字段列表。  |
|  KeepingSourceWhenParseFail  |  bool  |  否  |  false  |  false  |  当解析失败时，是否保留源字段。  |
|  KeepingSourceWhenParseSucceed  |  bool  |  否  |  false  |  false  |  当解析成功时，是否保留源字段。  |
|  RenamedSourceKey  |  string  |  否  |  空  |  key  |  当源字段被保留时，用于存储源字段的字段名。若不填，默认不改名。  |

## JSON解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_json\\_native  |  插件类型。固定为processor\\_parse\\_json\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  KeepingSourceWhenParseFail  |  bool  |  否  |  false  |  false  |  当解析失败时，是否保留源字段。  |
|  KeepingSourceWhenParseSucceed  |  bool  |  否  |  false  |  false  |  当解析成功时，是否保留源字段。  |
|  RenamedSourceKey  |  string  |  否  |  空  |  key  |  当源字段被保留时，用于存储源字段的字段名。若不填，默认不改名。  |

## 分隔符解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_delimiter\\_native  |  插件类型。固定为processor\\_parse\\_delimiter\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  Separator  |  string  |  是  |  /  |  ,  |  分隔符。  |
|  Quote  |  string  |  否  |  "  |  "  |  引用符。  |
|  Keys  |  \\[string\\]  |  是  |  /  |  \\["time", "msg"\\]  |  提取的字段列表。  |
|  AllowingShortenedFields  |  bool  |  否  |  true  |  true  |  是否允许提取的字段数量小于Keys的数量。若不允许，则此情景会被视为解析失败。  |
|  OverflowedFieldsTreatment  |  string  |  否  |  extend  |  extend  |  当提取的字段数量大于Keys的数量时的行为。可选值包括：<ul><li>extend：保留多余的字段，且每个多余的字段都作为单独的一个字段加入日志，多余字段的字段名为\\_\\_column$i\\_\\_，其中$i代表额外字段序号，从0开始计数。</li><li>keep：保留多余的字段，但将多余内容作为一个整体字段加入日志，字段名为\\_\\_column0\\_\\_.</li><li>discard：丢弃多余的字段。</li></ul>       |
|  KeepingSourceWhenParseFail  |  bool  |  否  |  false  |  false  |  当解析失败时，是否保留源字段。  |
|  KeepingSourceWhenParseSucceed  |  bool  |  否  |  false  |  false  |  当解析成功时，是否保留源字段。  |
|  RenamedSourceKey  |  string  |  否  |  空  |  key  |  当源字段被保留时，用于存储源字段的字段名。若不填，默认不改名。  |

## 飞天解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_apsara\\_native  |  插件类型。固定为processor\\_parse\\_apsara\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  Timezone  |  string  |  否  |  空  |  GMT+08:00  |  日志时间所属时区。格式为GMT+HH:MM（东区）或GMT-HH:MM（西区）。  |
|  KeepingSourceWhenParseFail  |  bool  |  否  |  false  |  false  |  当解析失败时，是否保留源字段。  |
|  KeepingSourceWhenParseSucceed  |  bool  |  否  |  false  |  false  |  当解析成功时，是否保留源字段。  |
|  RenamedSourceKey  |  string  |  否  |  空  |  key  |  当源字段被保留时，用于存储源字段的字段名。若不填，默认不改名。  |

## 时间解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_timestamp\\_native  |  插件类型。固定为processor\\_parse\\_timestamp\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  SourceFormat  |  string  |  是  |  /  |  %Y/%m/%d %H:%M:%S  |  日志时间格式。更多信息，请参见[时间格式](~~28980~~)。  |
|  SourceTimezone  |  string  |  否  |  空  |  GMT+08:00  |  日志时间所属时区。格式为GMT+HH:MM（东区）或GMT-HH:MM（西区）。  |

## 过滤原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **示例**  |  **默认值**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  processor\\_filter\\_regex\\_native  |  /  |  插件类型。固定为processor\\_filter\\_regex\\_native。  |
|  Include  |  map  |  是  |  /  |  /  |  日志字段白名单，其中key为字段名，value为正则表达式，表示如果当前事件要被采集，则key指定的字段内容所需要满足的条件。多个条件之间为“且”的关系，仅当所有条件均满足时，该条日志才会被采集。  |

## 脱敏原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_desensitize\\_native  |  插件类型。固定为processor\\_desensitize\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  Method  |  string  |  是  |  /  |  const  |  脱敏方式。可选值包括：  const：用常量替换敏感内容。        md5：用敏感内容的MD5值替换相应内容。       |
|  ReplacingString  |  string  |  否，当Method取值为const时必选  |  /  |  \\*\\*\\*\\*\\*\\*  |  用于替换敏感内容的常量字符串。  |
|  ContentPatternBeforeReplacedString  |  string  |  是  |  /  |  \'password:\'  |  敏感内容的前缀正则表达式。  |
|  ReplacedContentPattern  |  string  |  是  |  /  |  \\[^\'\\]\\*  |  敏感内容的正则表达式。  |
|  ReplacingAll  |  bool  |  否  |  true  |  true  |  是否替换所有的匹配的敏感内容。  |

# 输出插件

## SLS输出插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  flusher\\_sls  |  插件类型。固定为flusher\\_sls。  |
|  Logstore  |  stirng  |  是  |  /  |  test-logstore  |  LogStrore名称。  |',
    ),
    'DeleteConfig' => 
    array (
      'summary' => '删除指定的Logtail配置。',
      'path' => '/configs/{configName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logtail配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'logtail-config-sample',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除Logtail配置',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 如果Logtail配置已经被应用到机器组，删除该配置，将无法采集到机器组数据。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。

- 已获取Logtail采集配置名称。更多信息，请参见[ListConfig](~~29043~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | ConfigNotExist| Config configname does not exist. | Logtail配置不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'DeleteLogtailPipelineConfig' => 
    array (
      'summary' => '删除Logtail流水线配置。',
      'path' => '/pipelineconfigs/{configName}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project名称',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Logtail流水线配置名称',
            'description' => 'Logtail流水线配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-config',
            'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除Logtail流水线配置',
    ),
    'UpdateConfig' => 
    array (
      'summary' => '修改指定的 Logtail 采集配置。',
      'path' => '/configs/{configName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logtail配置的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-sample',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求消息体。',
            'required' => false,
            '$ref' => '#/components/schemas/LogtailConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新Logtail采集配置',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 更新已经被应用到机器组的Logtail配置，则对应机器组的Logtail配置会立即生效。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。
- 已规划好Logtail采集配置。更多信息，请参见[Logtail配置](~~29058~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ConfigNotExist| Config configName does not exist. | Logtail配置不存在。  |
| 400  | InvalidParameter| invalid config resource json.  | 无效Logtail配置参数。  |
|  400 |  BadRequest|  Config resource configname does not match with request.| Logtail配置名称不符合要求。 |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateLogtailPipelineConfig' => 
    array (
      'summary' => '更新Logtail流水线配置。',
      'path' => '/pipelineconfigs/{configName}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project名称',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Logtail流水线配置名称',
            'description' => 'Logtail流水线配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-config',
            'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Logtail流水线配置内容',
            'description' => 'Logtail流水线配置内容。',
            'type' => 'object',
            'properties' => 
            array (
              'configName' => 
              array (
                'title' => '配置名称',
                'description' => '配置名称。

><notice>需要与外层的configName参数保持一致。></notice>',
                'type' => 'string',
                'required' => true,
                'example' => 'test-config',
                'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
              ),
              'logSample' => 
              array (
                'title' => '日志样例',
                'description' => '日志样例。支持多条日志。',
                'type' => 'string',
                'required' => false,
                'example' => '2022-06-14 11:13:29.796 | DEBUG    | __main__:<module>:1 - hello world',
              ),
              'global' => 
              array (
                'title' => '全局配置',
                'description' => '全局配置。',
                'type' => 'object',
                'required' => false,
              ),
              'inputs' => 
              array (
                'title' => '输入插件列表',
                'description' => '输入插件列表。

><notice>目前，只允许配置1个输入插件。></notice>',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '输入插件',
                  'description' => '输入插件。

> 文件输入插件参数请参见[文件插件](~~65064~~)，其余输入插件参数请参见[处理插件](~~64957~~)。',
                  'type' => 'object',
                  'required' => false,
                  'example' => '{
    "Type": "input_file",
    "FilePaths": ["/var/log/*.log"]
}',
                ),
                'required' => true,
                'minItems' => 1,
              ),
              'processors' => 
              array (
                'title' => '输入插件列表',
                'description' => '输入插件列表。

> 可分为原生处理插件和扩展处理插件，详情请参见[处理插件](~~64957~~)。

><notice>

> - 原生插件仅可用于采集文本日志。
> - 不支持同时添加原生插件和扩展插件。
> - 使用原生插件时，须符合如下要求：
>   - 第一个处理插件必须为正则解析插件、分隔符模式解析插件、JSON解析插件、NGINX模式解析插件、Apache模式解析插件或IIS模式解析插件。
>   - 第一个处理插件之后仅允许存在1个时间解析处理插件，1个过滤插件和多个脱敏插件。></notice>',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '输入插件',
                  'description' => '处理插件。

>详情请参见[处理插件](~~64957~~)。',
                  'type' => 'object',
                  'required' => false,
                  'example' => '{
    "Type": "processor_parse_json_native",
    "SourceKey": "content"
}',
                ),
                'required' => false,
                'minItems' => 1,
              ),
              'aggregators' => 
              array (
                'title' => '聚合插件列表',
                'description' => '聚合插件列表。

><notice>仅当使用了扩展处理插件时有效，且最多允许使用1个聚合插件。></notice>',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '聚合插件',
                  'description' => '聚合插件。',
                  'type' => 'object',
                  'required' => false,
                ),
                'required' => false,
                'minItems' => 1,
              ),
              'flushers' => 
              array (
                'title' => '输出插件列表',
                'description' => '输出插件列表。

><notice>目前，只允许存在1个SLS输出插件。></notice>',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '输出插件',
                  'description' => '输出插件。',
                  'type' => 'object',
                  'required' => false,
                  'example' => '{
    "Type": "flusher_sls",
    "Logstore": "test"
}',
                ),
                'required' => true,
                'minItems' => 1,
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新Logtail流水线配置',
      'requestParamsDescription' => '# 全局配置

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  TopicType  |  string  |  否  |  空  |  filepath  |  Topic类型。可选值包括：<ul><li>filepath：从日志文件路径中提取信息作为Topic。仅当输入插件为input\\_file时有效。</li><li>machine\\_group\\_topic：将应用该配置的机器组Topic作为Topic。</li><li>custom：自定义Topic      更多信息，请参见[日志主题](~~60069~~)。</li></ul>  |
|  TopicFormat  |  string  |  否，当TopicType取值为filepath或custom时必填  |  /  |  /var/log/(.\\*).log  |  Topic格式。  |
|  EnableTimestampNanosecond  |  bool  |  否  |  false  |  false  |  是否启用时间纳秒精度。  |

# 输入插件

## 文件输入插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  input\\_file  |  插件类型。固定为input\\_file。  |
|  FilePaths  |  \\[string\\]  |  是  |  /  |  \\["/var/log/\\*.log"\\]  |  待采集的日志文件路径列表（目前仅限1个路径）。路径中支持使用\\*和\\*\\*通配符，其中\\*\\*通配符仅能出现一次且仅限用于文件名前。  |
|  MaxDirSearchDepth  |  uint  |  否  |  0  |  0  |  文件路径中\\*\\*通配符匹配的最大目录深度。仅当日志路径中存在\\*\\*通配符时有效，取值范围为0～1000。  |
|  ExcludeFilePaths  |  \\[string\\]  |  否  |  空  |  \\["/home/admin/\\*.log"\\]  |  文件路径黑名单。路径必须为绝对路径，支持使用\\*通配符  |
|  ExcludeFiles  |  \\[string\\]  |  否  |  空  |  \\["app\\*.log", "password"\\]  |  文件名黑名单。支持使用\\*通配符  |
|  ExcludeDirs  |  \\[string\\]  |  否  |  空  |  \\["/home/admin/dir1", "/home/admin/dir2\\*"\\]  |  目录黑名单。路径必须为绝对路径，支持使用\\*通配符  |
|  FileEncoding  |  string  |  否  |  utf8  |  utf8  |  文件编码格式。可选值包括utf8和gbk。  |
|  TailSizeKB  |  uint  |  否  |  1024  |  1024  |  配置首次生效时，匹配文件的起始采集位置距离文件结尾的大小。如果文件大小小于该值，则从头开始采集，取值范围为0～10485760KB。  |
|  Multiline  |  object  |  否  |  空  |  /  |  多行聚合选项。  |
|  Multiline.Mode  |  string  |  否  |  custom  |  custom  |  多行聚合模式。可选值包括custom和JSON。  |
|  Multiline.StartPattern  |  string  |  当Multiline.Mode取值为custom时必填  |  空  |  \\d+-\\d+-\\d+.\\*  |  行首正则表达式。  |
|  EnableContainerDiscovery  |  bool  |  否  |  false  |  true  |  是否启用容器发现功能。仅当Logtail以Daemonset模式运行，且采集文件路径为容器内路径时有效。  |
|  ContainerFilters  |  object  |  否  |  空  |  /  |  容器过滤选项。多个选项之间为“且”的关系，仅当EnableContainerDiscovery取值为true时有效。  |
|  ContainerFilters.K8sNamespaceRegex  |  string  |  否  |  空  |  default  |  对于部署于K8s环境的容器，指定待采集容器所在Pod所属的命名空间条件。如果未添加该参数，则表示采集所有容器。支持正则匹配。  |
|  ContainerFilters.K8sPodRegex  |  string  |  否  |  空  |  test-pod  |  对于部署于K8s环境的容器，指定待采集容器所在Pod的名称条件。如果未添加该参数，则表示采集所有容器。支持正则匹配。  |
|  ContainerFilters.IncludeK8sLabel  |  map  |  否  |  空  |  /  |  对于部署于K8s环境的容器，指定待采集容器所在pod的标签条件。多个条件之间为“或”的关系，如果未添加该参数，则表示采集所有容器。支持正则匹配。 map中的key为Pod标签名，value为Pod标签的值，说明如下：<ul><li>如果map中的value为空，则pod标签中包含以key为键的pod都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当pod标签中存在以key为标签名且对应标签值能正则匹配value的情况时，相应的pod会被匹配；</li><li>其他情况下，当pod标签中存在以key为标签名且以value为标签值的情况时，相应的pod会被匹配。</li></ul></ul>       |
|  ContainerFilters.ExcludeK8sLabel  |  map  |  否  |  空  |  /  |  对于部署于K8s环境的容器，指定需要排除采集容器所在pod的标签条件。多个条件之间为“或”的关系，如果未添加该参数，则表示采集所有容器。支持正则匹配。 map中的key为pod标签名，value为pod标签的值，说明如下：<ul><li>如果map中的value为空，则pod标签中包含以key为键的pod都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当pod标签中存在以key为标签名且对应标签值能正则匹配value的情况时，相应的pod会被匹配；</li><li>其他情况下，当pod标签中存在以key为标签名且以value为标签值的情况时，相应的pod会被匹配。</li></ul></ul>       |
|  ContainerFilters.K8sContainerRegex  |  string  |  否  |  空  |  test-container  |  对于部署于K8s环境的容器，指定待采集容器的名称条件。如果未添加该参数，则表示采集所有容器。支持正则匹配。  |
|  ContainerFilters.IncludeEnv  |  map  |  否  |  空  |  /  |  指定待采集容器的环境变量条件。多个条件之间为“或”的关系，如果未添加该参数，则表示采集所有容器。支持正则匹配。 map中的key为环境变量名，value为环境变量的值，说明如下：<ul><li>如果map中的value为空，则容器环境变量中包含以key为键的容器都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当容器环境变量中存在以key为环境变量名且对应环境变量值能正则匹配value的情况时，相应的容器会被匹配；</li><li>其他情况下，当容器环境变量中存在以key为环境变量名且以value为环境变量值的情况时，相应的容器会被匹配。</li></ul></ul>      |
|  ContainerFilters.ExcludeEnv  |  map  |  否  |  空  |  /  |  指定需要排除采集容器的环境变量条件。多个条件之间为“或”的关系，如果未添加该参数，则表示采集所有容器。支持正则匹配。 map中的key为环境变量名，value为环境变量的值，说明如下：<ul><li>如果map中的value为空，则容器环境变量中包含以key为键的容器都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当容器环境变量中存在以key为环境变量名且对应环境变量值能正则匹配value的情况时，相应的容器会被匹配；</li><li>其他情况下，当容器环境变量中存在以key为环境变量名且以value为环境变量值的情况时，相应的容器会被匹配。</li></ul></ul>      |
|  ContainerFilters.IncludeContainerLabel  |  map  |  否  |  空  |  /  |  指定待采集容器的标签条件。多个条件之间为“或”的关系，如果未添加该参数，则默认为空，表示采集所有容器。支持正则匹配。 map中的key为容器标签名，value为容器标签的值，说明如下：<ul><li>如果map中的value为空，则容器标签中包含以key为键的容器都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当容器标签中存在以key为标签名且对应标签值能正则匹配value的情况时，相应的容器会被匹配；</li><li>其他情况下，当容器标签中存在以key为标签名且以value为标签值的情况时，相应的容器会被匹配。</li></ul></ul>       |
|  ContainerFilters.ExcludeContainerLabel  |  map  |  否  |  空  |  /  |  指定需要排除采集容器的标签条件。多个条件之间为“或”的关系，如果未添加该参数，则默认为空，表示采集所有容器。支持正则匹配。 map中的key为容器标签名，value为容器标签的值，说明如下：<ul><li>如果map中的value为空，则容器标签中包含以key为键的容器都会被匹配；</li><li>如果map中的value不为空，则：<ul></li><li>若value以`^`开头并且以`$`结尾，则当容器标签中存在以key为标签名且对应标签值能正则匹配value的情况时，相应的容器会被匹配；</li><li>其他情况下，当容器标签中存在以key为标签名且以value为标签值的情况时，相应的容器会被匹配。</li></ul></ul>  |
|  ExternalK8sLabelTag  |  map  |  否  |  空  |  /  |  对于部署于K8s环境的容器，需要在日志中额外添加的与Pod标签相关的tag。map中的key为Pod标签名，value为对应的tag名。 例如：在map中添加`app: k8s\\_label\\_app`，则若pod中包含`app=serviceA`的标签时，会将该信息以tag的形式添加到日志中，即添加字段`__tag__:k8s_label_app: serviceA`；若不包含`app`标签，则会添加空字段`__tag__:k8s_label_app: `。 |
|  ExternalEnvTag  |  map  |  否  |  空  |  /  |  对于部署于K8s环境的容器，需要在日志中额外添加的与容器环境变量相关的tag。map中的key为环境变量名，value为对应的tag名。 例如：在map中添加`VERSION: env\\_version`，则当容器中包含环境变量`VERSION=v1.0.0`时，会将该信息以tag的形式添加到日志中，即添加字段`__tag__:env_version: v1.0.0`；若不包含`VERSION`环境变量，则会添加空字段`__tag__:env_version:`  |
|  CollectingContainersMeta  |  bool  |  否  |  false  |  true  |  是否启用容器元信息预览。  |
|  AppendingLogPositionMeta  |  bool  |  否  |  false  |  false  |  是否在日志中添加该条日志所属文件的元信息，包括\\_\\_tag\\_\\_:\\_\\_inode\\_\\_字段和\\_\\_file\\_offset\\_\\_字段。  |
|  AllowingIncludedByMultiConfigs  |  bool  |  否  |  false  |  false  |  是否允许当前配置采集其它配置已匹配的文件。  |

# 原生处理插件

## 正则解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_regex\\_native  |  插件类型。固定为processor\\_parse\\_regex\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  Regex  |  string  |  是  |  /  |  (\\d+-\\d+-\\d+)\\s+(.\\*)  |  正则表达式。  |
|  Keys  |  \\[string\\]  |  是  |  /  |  \\["time", "msg"\\]  |  提取的字段列表。  |
|  KeepingSourceWhenParseFail  |  bool  |  否  |  false  |  false  |  当解析失败时，是否保留源字段。  |
|  KeepingSourceWhenParseSucceed  |  bool  |  否  |  false  |  false  |  当解析成功时，是否保留源字段。  |
|  RenamedSourceKey  |  string  |  否  |  空  |  key  |  当源字段被保留时，用于存储源字段的字段名。若不填，默认不改名。  |

## JSON解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_json\\_native  |  插件类型。固定为processor\\_parse\\_json\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  KeepingSourceWhenParseFail  |  bool  |  否  |  false  |  false  |  当解析失败时，是否保留源字段。  |
|  KeepingSourceWhenParseSucceed  |  bool  |  否  |  false  |  false  |  当解析成功时，是否保留源字段。  |
|  RenamedSourceKey  |  string  |  否  |  空  |  key  |  当源字段被保留时，用于存储源字段的字段名。若不填，默认不改名。  |

## 分隔符解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_delimiter\\_native  |  插件类型。固定为processor\\_parse\\_delimiter\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  Separator  |  string  |  是  |  /  |  ,  |  分隔符。  |
|  Quote  |  string  |  否  |  "  |  "  |  引用符。  |
|  Keys  |  \\[string\\]  |  是  |  /  |  \\["time", "msg"\\]  |  提取的字段列表。  |
|  AllowingShortenedFields  |  bool  |  否  |  true  |  true  |  是否允许提取的字段数量小于Keys的数量。若不允许，则此情景会被视为解析失败。  |
|  OverflowedFieldsTreatment  |  string  |  否  |  extend  |  extend  |  当提取的字段数量大于Keys的数量时的行为。可选值包括：<ul><li>extend：保留多余的字段，且每个多余的字段都作为单独的一个字段加入日志，多余字段的字段名为\\_\\_column$i\\_\\_，其中$i代表额外字段序号，从0开始计数。</li><li>keep：保留多余的字段，但将多余内容作为一个整体字段加入日志，字段名为\\_\\_column0\\_\\_.</li><li>discard：丢弃多余的字段。</li></ul>       |
|  KeepingSourceWhenParseFail  |  bool  |  否  |  false  |  false  |  当解析失败时，是否保留源字段。  |
|  KeepingSourceWhenParseSucceed  |  bool  |  否  |  false  |  false  |  当解析成功时，是否保留源字段。  |
|  RenamedSourceKey  |  string  |  否  |  空  |  key  |  当源字段被保留时，用于存储源字段的字段名。若不填，默认不改名。  |

## 飞天解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_apsara\\_native  |  插件类型。固定为processor\\_parse\\_apsara\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  Timezone  |  string  |  否  |  空  |  GMT+08:00  |  日志时间所属时区。格式为GMT+HH:MM（东区）或GMT-HH:MM（西区）。  |
|  KeepingSourceWhenParseFail  |  bool  |  否  |  false  |  false  |  当解析失败时，是否保留源字段。  |
|  KeepingSourceWhenParseSucceed  |  bool  |  否  |  false  |  false  |  当解析成功时，是否保留源字段。  |
|  RenamedSourceKey  |  string  |  否  |  空  |  key  |  当源字段被保留时，用于存储源字段的字段名。若不填，默认不改名。  |

## 时间解析原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_parse\\_timestamp\\_native  |  插件类型。固定为processor\\_parse\\_timestamp\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  SourceFormat  |  string  |  是  |  /  |  %Y/%m/%d %H:%M:%S  |  日志时间格式。更多信息，请参见[时间格式](~~28980~~)。  |
|  SourceTimezone  |  string  |  否  |  空  |  GMT+08:00  |  日志时间所属时区。格式为GMT+HH:MM（东区）或GMT-HH:MM（西区）。  |

## 过滤原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **示例**  |  **默认值**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  processor\\_filter\\_regex\\_native  |  /  |  插件类型。固定为processor\\_filter\\_regex\\_native。  |
|  Include  |  map  |  是  |  /  |  /  |  日志字段白名单，其中key为字段名，value为正则表达式，表示如果当前事件要被采集，则key指定的字段内容所需要满足的条件。多个条件之间为“且”的关系，仅当所有条件均满足时，该条日志才会被采集。  |

## 脱敏原生处理插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  processor\\_desensitize\\_native  |  插件类型。固定为processor\\_desensitize\\_native。  |
|  SourceKey  |  string  |  是  |  /  |  content  |  源字段名。  |
|  Method  |  string  |  是  |  /  |  const  |  脱敏方式。可选值包括： *   const：用常量替换敏感内容。      *   md5：用敏感内容的MD5值替换相应内容。       |
|  ReplacingString  |  string  |  否，当Method取值为const时必选  |  /  |  \\*\\*\\*\\*\\*\\*  |  用于替换敏感内容的常量字符串。  |
|  ContentPatternBeforeReplacedString  |  string  |  是  |  /  |  \'password:\'  |  敏感内容的前缀正则表达式。  |
|  ReplacedContentPattern  |  string  |  是  |  /  |  \\[^\'\\]\\*  |  敏感内容的正则表达式。  |
|  ReplacingAll  |  bool  |  否  |  true  |  true  |  是否替换所有的匹配的敏感内容。  |

# 输出插件

## SLS输出插件

|  **参数**  |  **类型**  |  **是否必填**  |  **默认值**  |  **示例**  |  **说明**  |
| --- | --- | --- | --- | --- | --- |
|  Type  |  string  |  是  |  /  |  flusher\\_sls  |  插件类型。固定为flusher\\_sls。  |
|  Logstore  |  stirng  |  是  |  /  |  test-logstore  |  LogStrore名称。  |',
    ),
    'GetConfig' => 
    array (
      'summary' => '获取Logtail配置的详细信息。',
      'path' => '/configs/{configName}',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logtail配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'logtail-config-sample',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => 'Logtail配置数据结构。',
            '$ref' => '#/components/schemas/LogtailConfig',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"configName\\": \\"test-config\\",\\n  \\"logSample\\": \\"2022-06-14 11:13:29.796 | DEBUG    | __main__:<module>:1 - hello world\\",\\n  \\"inputType\\": \\"file\\",\\n  \\"inputDetail\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"outputType\\": \\"LogService\\",\\n  \\"outputDetail\\": {\\n    \\"endpoint\\": \\"cn-hangzhou-intranet.log.aliyuncs.com\\",\\n    \\"logstoreName\\": \\"test-logstore\\",\\n    \\"region\\": \\"cn-hangzhou\\"\\n  },\\n  \\"createTime\\": 1655176807,\\n  \\"lastModifyTime\\": 1655176807\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取Logtail采集配置',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。

- 已获取Logtail采集配置名称。更多信息，请参见[ListConfig](~~29043~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | ConfigNotExist| Config configName does not exist.  | Logtail配置不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'ListConfig' => 
    array (
      'summary' => '调用ListConfig接口查询指定Project下所有的Logtail配置。',
      'path' => '/configs',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstoreName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '0',
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
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'configName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '可以进行名字匹配',
            'description' => 'Logtail配置名称，用于模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'logtail-config-sample',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'description' => '当前页返回的Logtail配置数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'total' => 
              array (
                'description' => '符合查询条件的Logtail配置总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'configs' => 
              array (
                'description' => '当前页返回的Logtail配置列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询出来的Logtail配置列表。',
                  'type' => 'string',
                  'example' => 'logtail-config-sample',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"count\\": 3,\\n  \\"total\\": 2,\\n  \\"configs\\": [\\n    \\"logtail-config-sample\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询Logtail配置列表',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist| The Project does not exist : projectName  | Project不存在。  |
| 404  | LogStoreNotExist| Logstore logstoreName does not exist.  | Logstore不存在。  |
| 404  | ConfigNotExist|config configName does not exist.  | Logtail配置不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetLogtailPipelineConfig' => 
    array (
      'summary' => '获取Logtail流水线配置。',
      'path' => '/pipelineconfigs/{configName}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project名称',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Logtail流水线配置名称',
            'description' => 'Logtail流水线配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-config',
            'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => 'Logtail流水线配置',
            '$ref' => '#/components/schemas/LogtailPipelineConfig',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"configName\\": \\"test-config\\",\\n  \\"logSample\\": \\"127.0.0.1 - - [10/Jun/2022:12:36:49 +0800] \\\\\\"GET /index.html HTTP/1.1\\\\\\" 200\\",\\n  \\"global\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"inputs\\": [\\n    {\\n      \\"Type\\": \\"input_file\\",\\n      \\"FilePaths\\": [\\n        \\"/var/log/*.log\\"\\n      ]\\n    }\\n  ],\\n  \\"processors\\": [\\n    {\\n      \\"Type\\": \\"processor_parse_json_native\\",\\n      \\"SourceKey\\": \\"content\\"\\n    }\\n  ],\\n  \\"aggregators\\": [\\n    {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  ],\\n  \\"flushers\\": [\\n    {\\n      \\"Type\\": \\"flusher_sls\\",\\n      \\"Project\\": \\"test_project\\",\\n      \\"Logstore\\": \\"test\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"Endpoint\\": \\"cn-hangzhou-intranet.log.aliyuncs.com\\",\\n      \\"TelemetryType\\": \\"log\\"\\n    }\\n  ],\\n  \\"createTime\\": 1655176807,\\n  \\"lastModifyTime\\": 1655176807\\n}","type":"json"}]',
      'title' => '获取Logtail流水线配置',
    ),
    'ListLogtailPipelineConfig' => 
    array (
      'summary' => '列举指定条件下的Logtail流水线配置名称。',
      'path' => '/pipelineconfigs',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project名称',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '起始行',
            'description' => '起始行',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '每页的流水线配置数量',
            'description' => '每页的流水线配置数量',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '500',
            'minimum' => '0',
            'example' => '20',
            'default' => '500',
          ),
        ),
        3 => 
        array (
          'name' => 'logstoreName',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => 'logstore名称',
            'description' => 'logstore名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test-logstore',
          ),
        ),
        4 => 
        array (
          'name' => 'configName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '流水线配置名称',
            'description' => '流水线配置名称',
            'type' => 'string',
            'required' => false,
            'example' => 'logtail-config-sample',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '',
            'description' => '',
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'title' => '当前页返回的Logtail流水线配置数量',
                'description' => '当前页返回的Logtail流水线配置数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'total' => 
              array (
                'title' => '当前Project下的Logtail流水线配置总数',
                'description' => '当前Project下的Logtail流水线配置总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'configs' => 
              array (
                'title' => '当前页返回的Logtail流水线配置列表',
                'description' => '当前页返回的Logtail流水线配置列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'Logtail流水线配置名称',
                  'description' => 'Logtail流水线配置名称',
                  'type' => 'string',
                  'example' => 'test_logstore',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"count\\": 10,\\n  \\"total\\": 20,\\n  \\"configs\\": [\\n    \\"test_logstore\\"\\n  ]\\n}","type":"json"}]',
      'title' => '罗列Logtail流水线配置',
    ),
    'CreateDashboard' => 
    array (
      'summary' => '创建仪表盘。',
      'path' => '/dashboards',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '仪表盘数据结构。',
            'required' => true,
            '$ref' => '#/components/schemas/dashboard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建仪表盘',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。',
    ),
    'DeleteDashboard' => 
    array (
      'summary' => '删除指定仪表盘。',
      'path' => '/dashboards/{dashboardName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project name',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'dashboardName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Dashboard name',
            'description' => '仪表盘名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dashboard-1609294922657-434834',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除仪表盘',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。',
    ),
    'UpdateDashboard' => 
    array (
      'summary' => '更新仪表盘。',
      'path' => '/dashboards/{dashboardName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'dashboardName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '仪表盘名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dashboard-1609294922657-434834',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '仪表盘数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'dashboardName' => 
              array (
                'title' => '内部名称',
                'description' => '仪表盘名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'dashboard-1609294922657-434834',
              ),
              'displayName' => 
              array (
                'title' => '展示名称',
                'description' => '仪表盘显示名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'Method pv',
              ),
              'description' => 
              array (
                'title' => '描述信息',
                'description' => '仪表盘描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'test dashboard.',
              ),
              'attribute' => 
              array (
                'title' => '属性值',
                'description' => '仪表盘属性值。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => '“”',
                  'description' => '仪表盘的属性值。',
                ),
              ),
              'charts' => 
              array (
                'title' => '包含的图表',
                'description' => '包含的图表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '图表数据结构。',
                  'required' => false,
                  '$ref' => '#/components/schemas/chart',
                ),
                'required' => true,
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新仪表盘',
      'description' => '### 接口说明
Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'GetDashboard' => 
    array (
      'summary' => '获取指定仪表盘。',
      'path' => '/dashboards/{dashboardName}',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'dashboardName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '仪表盘名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dashboard-1609294922657-434834',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '仪表盘数据结构。',
            '$ref' => '#/components/schemas/dashboard',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"dashboardName\\": \\"dashboard-1609294922657-434834\\",\\n  \\"displayName\\": \\"test-alert\\",\\n  \\"description\\": \\"这是一个仪表盘。\\",\\n  \\"attribute\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"charts\\": [\\n    {\\n      \\"title\\": \\"my-chart\\",\\n      \\"type\\": \\"linepro\\",\\n      \\"search\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"display\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"action\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取指定仪表盘',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。',
    ),
    'ListDashboard' => 
    array (
      'summary' => '查询仪表盘。',
      'path' => '/dashboards',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '默认值为 500。',
            'description' => '分页查询时，设置的每页行数。最大值为500。默认值为500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '500',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '仪表盘。',
            'type' => 'object',
            'properties' => 
            array (
              'dashboards' => 
              array (
                'title' => 'dashboard 的名字列表，对应 dashboardName',
                'description' => '仪表盘的名字列表，对应dashboardName。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '仪表盘的名字列表，对应dashboardName。',
                  'type' => 'string',
                  'example' => 'dashboard-1609294922657-434834',
                ),
              ),
              'dashboardItems' => 
              array (
                'description' => '仪表盘。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '仪表盘。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'dashboardName' => 
                    array (
                      'description' => '仪表盘ID。同一个Project下，仪表盘ID唯一，不可重复。支持模糊查询，例如输入da，会查询出所有以da开头的仪表盘。',
                      'type' => 'string',
                      'example' => 'dashboard-1609294922657-434834',
                    ),
                    'displayName' => 
                    array (
                      'description' => '仪表盘显示名称。',
                      'type' => 'string',
                      'example' => 'data-ingest',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"dashboards\\": [\\n    \\"dashboard-1609294922657-434834\\"\\n  ],\\n  \\"dashboardItems\\": [\\n    {\\n      \\"dashboardName\\": \\"dashboard-1609294922657-434834\\",\\n      \\"displayName\\": \\"data-ingest\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询仪表盘',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
|  400 |  ParameterInvalid |  offset: offset is invalid. |offset参数取值无效。|
|  400 |  ParameterInvalid |  size: size is invalid. |size参数取值无效。|
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'CreateConsumerGroup' => 
    array (
      'summary' => '在指定的Logstore上创建一个消费组。',
      'path' => '/logstores/{logstore}/consumergroups',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyun-test-logstore',
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyun-test-project',
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
            'type' => 'object',
            'properties' => 
            array (
              'consumerGroup' => 
              array (
                'description' => '消费组名称，在Project下必须唯一。',
                'type' => 'string',
                'required' => true,
                'example' => 'consumerGroupX',
              ),
              'timeout' => 
              array (
                'description' => '超时时间。在超时时间段内没有收到心跳，消费者将被删除。单位：秒。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '300',
              ),
              'order' => 
              array (
                'description' => '是否按顺序消费。

- true：按顺序消费。
    - 同一个Shard内按照保留字段**\\_\\_tag\\_\\_:\\_\\_receive\\_time\\_\\_**由小到大按顺序消费。
    - Shard分裂后，先消费原Shard数据，然后同时消费由该Shard分裂的Shard数据。
    - Shard合并后，先消费原Shard数据，然后消费由原Shard合并后的新Shard数据。
- false：不按顺序消费。即所有Shard同时开始消费，Shard分裂或者合并后产生的新Shard，也会立即消费。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建消费组',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 每个Logstore中最多创建30个消费组。消费组名称，在Project下必须唯一。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
- 日志服务提供基于Java SDK的普通消费和消费组消费日志使用示例。更多信息，请参见[普通消费](~~120035~~)和[通过消费组消费日志数据](~~28998~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:CreateConsumerGroup`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 400  | ConsumerGroupAlreadyExist  | consumer group already exist.| 消费组已存在。  |
| 400  |  JsonInfoInvalid |  consumerGroup or timeout is of error format. | 参数consumerGroup或timeout格式错误。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'DeleteConsumerGroup' => 
    array (
      'summary' => '删除一个指定的消费组。',
      'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project name',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Logstore name',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'consumerGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Consumer group',
            'description' => '消费组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'consumer-group-1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Access-Control-Allow-Origin' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '*',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除消费组',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
- 已获取消费组名称。更多信息，请参见[ListConsumerGroup](~~74964~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:DeleteConsumerGroup`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'ConsumerGroupUpdateCheckPoint' => 
    array (
      'summary' => '更新消费进度。',
      'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}?type=checkpoint',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '155573',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsD1VSU4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'consumerGroup',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '消费组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'consumer_group_test',
          ),
        ),
        3 => 
        array (
          'name' => 'consumer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消费者。',
            'type' => 'string',
            'required' => true,
            'example' => 'consumer_1',
          ),
        ),
        4 => 
        array (
          'name' => 'forceSuccess',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制更新。
  - true：强制更新
  - false：不强制更新',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Shard ID。',
            'type' => 'object',
            'properties' => 
            array (
              'shard' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
              ),
              'checkpoint' => 
              array (
                'type' => 'string',
                'required' => true,
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新消费进度',
      'description' => '### 接口说明

- 当不指定消费者时，必须指定**forceSuccess**为**true**才能更新checkpoint。
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | InvalidShardCheckPoint|  shard checkpoint not encoded by base64. |checkpoint不是Base64编码，格式错误。  |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 404  | ConsumerGroupNotExist| consumer group not exist. | 消费组不存在。  |
| 404  | ConsumerNotExist| consumer not exist in the consumer group.| 消费组中不存在该消费者。  |
| 404  | ShardNotExist| shard not exist.| Shard不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateConsumerGroup' => 
    array (
      'summary' => '修改指定消费组属性。',
      'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'logstore-test',
          ),
        ),
        2 => 
        array (
          'name' => 'consumerGroup',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '消费组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'consumer-group-1',
          ),
        ),
        3 => 
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
              'order' => 
              array (
                'description' => '是否按顺序消费。

- true：在Shard中按顺序消费。Shard分裂后，先消费原Shard数据，然后同时消费由该Shard分裂的Shard数据。Shard合并后，先消费原Shard数据，然后消费由原Shard合并后的新Shard数据。
- false：不按顺序消费。即所有同时开始消费，Shard分裂或者合并后产生的新Shard，也会立即消费。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'timeout' => 
              array (
                'description' => '超时时间。在超时时间段内没有收到心跳，消费者将被删除。单位：秒。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '300',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新消费者组',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:UpdateConsumerGroup`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400  | JsonInfoInvalid|  timeout is of error value type. | 参数timeout类型错误。  |
| 400  |  ConsumerGroupNotExist |  consumer group not exist. | 消费组不存在。  |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'ConsumerGroupHeartBeat' => 
    array (
      'summary' => '消费者发送心跳到服务端。',
      'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}?type=heartbeat',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'consumerGroup',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '消费组名称，同一Project中消费组名称为唯一值。',
            'type' => 'string',
            'required' => true,
            'example' => 'consumer_group_test',
          ),
        ),
        3 => 
        array (
          'name' => 'consumer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消费者。',
            'type' => 'string',
            'required' => true,
            'example' => 'consumer_1',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '正在消费的Shard ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '正在消费的Shard ID列表。',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '[0]',
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '消费者消费的所有Shard ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '消费者消费的所有Shard ID列表。',
              'type' => 'integer',
              'format' => 'int32',
              'example' => '[0]',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"[\\n  0\\n]","type":"json"}]',
      'title' => '消费者发送心跳到服务端',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 消费者和服务端通过固定时间发送心跳建立连接。在固定时间段内没有收到心跳，消费者将被删除。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。

- 已获取消费组名称。更多信息，请参见[ListConsumerGroup](~~74964~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:ConsumerGroupHeartBeat`  | `acs:log:${regionId}:${accountId}:project/{#ProjectName}/logstore/{#LogstoreName}/consumergroup/{#ConsumerGroupName}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 400| NotExistConsumerWithBody| non-exist consumer with non-empty body of heartbeat message.  | 不存在非空心跳消息的消费者。请求参数中的Shard实际分配的消费者，与请求参数中的消费者不一致。可能原因是和服务端心跳断开后，Shard已经分配给其他消费者，建议传入空Shard列表。  |
| 404| ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
| 404  | ConsumerGroupNotExist| consumer group not exist.  | 消费组不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'ListConsumerGroup' => 
    array (
      'summary' => '查询指定Logstore的所有消费组。',
      'path' => '/logstores/{logstore}/consumergroups',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project name',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Logstore name',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-logstore',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '消费组列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '消费组结构体。',
              'example' => 'test-consumer-group',
              '$ref' => '#/components/schemas/ConsumerGroup',
            ),
            'example' => '[{\'\'name\'\': \'\'test-consumer-group\'\', \'\'timeout\'\': 30, \'\'order\'\': False}]',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"name\\": \\"test-group\\",\\n    \\"timeout\\": 300,\\n    \\"order\\": false\\n  }\\n]","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询消费组',
      'description' => '### 接口说明

- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:ListConsumerGroup`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}/consumergroup/*`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。
',
    ),
    'GetCheckPoint' => 
    array (
      'summary' => '调用GetCheckPoint接口获取指定消费组消费数据时Shard的checkpoint。',
      'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'Project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'logstore',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'logstore 名称。',
            'description' => 'Logstore名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-logstore',
          ),
        ),
        2 => 
        array (
          'name' => 'consumerGroup',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '消费组名称。',
            'description' => '消费组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'consumer-group-1',
          ),
        ),
        3 => 
        array (
          'name' => 'shard',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Shard ID。
如果指定的Shard不存在，则返回空列表。
如果不指定Shard，则返回所有Shard的checkpoint。',
            'description' => 'Shard ID。

- 如果指定的Shard不存在，则返回空列表。
- 如果不指定Shard，则返回所有Shard的Checkpoint。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => '指定消费组消费数据时 Shard 的 checkpoint 列表。',
            'description' => '指定消费组消费数据时Shard的Checkpoint 列表。',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'checkpoint 结构体。',
              'description' => 'Checkpoint结构体。',
              'type' => 'object',
              'properties' => 
              array (
                'shard' => 
                array (
                  'title' => 'shard id。',
                  'description' => 'Shard ID。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '0',
                ),
                'checkpoint' => 
                array (
                  'title' => 'checkpoint 值。',
                  'description' => 'Checkpoint值。',
                  'type' => 'string',
                  'example' => 'MTUyNDE1NTM3OTM3MzkwODQ5Ng==',
                ),
                'updateTime' => 
                array (
                  'title' => 'checkpoint最后的更新时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                  'description' => 'Checkpoint最后的更新时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1524224984800922',
                ),
                'consumer' => 
                array (
                  'title' => '消费者。',
                  'description' => 'Checkpoint处的消费者。',
                  'type' => 'string',
                  'example' => 'consumer_1',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"shard\\": 0,\\n    \\"checkpoint\\": \\"MTUyNDE1NTM3OTM3MzkwODQ5Ng==\\",\\n    \\"updateTime\\": 1524224984800922,\\n    \\"consumer\\": \\"consumer_1\\"\\n  }\\n]","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取指定消费组的消费点',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
- 已获取消费组名称。更多信息，请参见[ListConsumerGroup](~~74964~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:GetConsumerGroupCheckPoint`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 404  | LogStoreNotExist  | Logstore does not exist.  | Logstore不存在。  |
|  404 |  ConsumerGroupNotExist|  consumer group not exist.| 消费组不存在。 |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'CreateOssExternalStore' => 
    array (
      'summary' => '调用CreateOssExternalStore接口创建OSS外部存储。',
      'path' => '/externalstores',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
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
              'externalStoreName' => 
              array (
                'title' => '外部存储的名称。',
                'description' => '外部存储的名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'test_oss_store',
              ),
              'storeType' => 
              array (
                'title' => '外部存储的类型。这里固定为 oss',
                'description' => '外部存储的类型。这里固定为oss。',
                'type' => 'string',
                'required' => true,
                'example' => 'oss',
                'default' => 'oss',
              ),
              'parameter' => 
              array (
                'title' => '外部存储的参数。',
                'description' => '外部存储的参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'accessid' => 
                  array (
                    'title' => '您的AccessKey ID。',
                    'description' => '您的AccessKey ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'LTAI5tFsHGGeYry*****1Sz',
                  ),
                  'accesskey' => 
                  array (
                    'title' => '您的AccessKey Secret。',
                    'description' => '您的AccessKey Secret。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'GyviCLDVHkHrOztdkxuE6******Rp6',
                  ),
                  'endpoint' => 
                  array (
                    'title' => 'oss 的 endpoint 访问网址。',
                    'description' => 'OSS的Endpoint访问网址。更多信息，请参见[访问域名](~~31837~~)。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'oss-cn-hangzhou.aliyuncs.com',
                  ),
                  'bucket' => 
                  array (
                    'title' => 'oss 桶名称。',
                    'description' => 'OSS Bucket名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'my-bucket',
                  ),
                  'objects' => 
                  array (
                    'description' => '关联的OSS文件名称。n的取值范围：1~100。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关联的OSS文件名称。n的取值范围：1~100。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'file-name',
                    ),
                    'required' => true,
                  ),
                  'columns' => 
                  array (
                    'description' => '关联的字段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关联的字段列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '字段名称。',
                          'type' => 'string',
                          'required' => true,
                          'example' => 'auto-test',
                        ),
                        'type' => 
                        array (
                          'description' => '字段类型。',
                          'type' => 'string',
                          'required' => true,
                          'example' => 'varchar',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => true,
                  ),
                ),
                'required' => true,
              ),
            ),
            'required' => true,
            'example' => 'my-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建OSS外部存储',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'CreateRdsExternalStore' => 
    array (
      'summary' => '调用CreateRdsExternalStore接口创建RDS外部存储。',
      'path' => '/externalstores',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
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
              'externalStoreName' => 
              array (
                'title' => '名称',
                'description' => '外部存储名称，在同一Project中名称不能重复，且和Logstore名称不能重复。',
                'type' => 'string',
                'required' => true,
                'example' => 'rds_store',
              ),
              'storeType' => 
              array (
                'title' => '类型，这里固定为 rds-vpc',
                'description' => '存储类型。固定取值为rds-vpc，表示VPC下的RDS MySQL数据库。',
                'type' => 'string',
                'required' => true,
                'example' => 'rds-vpc',
                'default' => 'rds-vpc',
              ),
              'parameter' => 
              array (
                'title' => '参数',
                'description' => '参数结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'vpc-id' => 
                  array (
                    'title' => 'RDS MySQL实例所属的VPC ID。',
                    'description' => 'RDS MySQL实例所属的VPC ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vpc-bp1aevy8sofi8mh1q****',
                  ),
                  'instance-id' => 
                  array (
                    'title' => 'RDS实例的VpcCloudInstanceId，可通过DescribeDBInstanceAttribute获取。',
                    'description' => 'RDS MySQL实例ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'i-bp1b6c719dfa08exf****',
                  ),
                  'host' => 
                  array (
                    'title' => 'RDS MySQL实例的内网地址或外网地址。',
                    'description' => 'RDS MySQL实例的内网地址或外网地址。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '192.168.XX.XX',
                  ),
                  'port' => 
                  array (
                    'title' => 'RDS MySQL实例的内网或者外网端口。',
                    'description' => 'RDS MySQL实例的内网或者外网端口。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '3306',
                  ),
                  'username' => 
                  array (
                    'title' => 'RDS MySQL实例中的账号名称。',
                    'description' => 'RDS MySQL实例中的账号名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'root',
                  ),
                  'password' => 
                  array (
                    'title' => 'RDS MySQL实例中账号对应的密码。',
                    'description' => 'RDS MySQL实例中账号对应的密码。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'sfdsfldsfksfls****',
                  ),
                  'db' => 
                  array (
                    'title' => 'RDS MySQL实例的数据库名称。',
                    'description' => 'RDS MySQL实例的数据库名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'meta',
                  ),
                  'table' => 
                  array (
                    'title' => 'RDS MySQL实例的数据库表名称。',
                    'description' => 'RDS MySQL实例的数据库表名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'join_meta',
                  ),
                  'region' => 
                  array (
                    'title' => 'RDS MySQL实例所在地域。',
                    'description' => 'RDS MySQL实例所在地域，目前仅支持cn-qingdao、cn-beijing、cn-hangzhou。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'cn-qingdao',
                  ),
                ),
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建RDS外部存储',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'DeleteExternalStore' => 
    array (
      'summary' => '删除指定外部存储配置。',
      'path' => '/externalstores/{externalStoreName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'externalStoreName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '外部存储名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'rds_store',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除外部存储配置',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:DeleteExternalStore`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/externalstore/{#ExternalStoreName}`  |',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
| 400  | ParameterInvalid| External store does not exist.  | 外部存储不存在。|
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateRdsExternalStore' => 
    array (
      'summary' => '调用UpdateRdsExternalStore接口更新RDS外部存储。',
      'path' => '/externalstores/{externalStoreName}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'externalStoreName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '外部存储名称。',
            'description' => '外部存储名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-external-store',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体结构。',
            'type' => 'object',
            'properties' => 
            array (
              'externalStoreName' => 
              array (
                'title' => '外部存储的名称',
                'description' => '外部存储的名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'rds_store',
              ),
              'storeType' => 
              array (
                'title' => '类型，这里固定为 rds-vpc',
                'description' => '存储类型。固定取值为rds-vpc，表示VPC下的RDS MySQL数据库。',
                'type' => 'string',
                'required' => true,
                'example' => 'rds-vpc',
                'default' => 'rds-vpc',
              ),
              'parameter' => 
              array (
                'title' => '参数',
                'description' => '参数结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'vpc-id' => 
                  array (
                    'title' => 'RDS MySQL实例所属的VPC ID。',
                    'description' => 'RDS MySQL实例所属的VPC ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vpc-bp1aevy8sofi8mh1q****',
                  ),
                  'instance-id' => 
                  array (
                    'title' => 'RDS实例的VpcCloudInstanceId，可通过DescribeDBInstanceAttribute获取。',
                    'description' => 'RDS MySQL实例ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'i-bp1b6c719dfa08exf****',
                  ),
                  'host' => 
                  array (
                    'title' => 'RDS MySQL实例的内网地址或外网地址。',
                    'description' => 'RDS MySQL实例的内网地址或外网地址。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '192.168.XX.XX',
                  ),
                  'port' => 
                  array (
                    'title' => 'RDS MySQL实例的内网或者外网端口。',
                    'description' => 'RDS MySQL实例的内网或者外网端口。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '3306',
                  ),
                  'username' => 
                  array (
                    'title' => 'RDS MySQL实例中的账号名称。',
                    'description' => 'RDS MySQL实例中的账号名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'root',
                  ),
                  'password' => 
                  array (
                    'title' => 'RDS MySQL实例中账号对应的密码。',
                    'description' => 'RDS MySQL实例中账号对应的密码。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'sfdsfldsfksfls****',
                  ),
                  'db' => 
                  array (
                    'title' => 'RDS MySQL实例的数据库名称。',
                    'description' => 'RDS MySQL实例的数据库名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'meta',
                  ),
                  'table' => 
                  array (
                    'title' => 'RDS MySQL实例的数据库表名称。',
                    'description' => 'RDS MySQL实例的数据库表名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'join_meta',
                  ),
                  'region' => 
                  array (
                    'title' => 'RDS MySQL实例所在地域，目前仅支持cn-qingdao、cn-beijing、cn-hangzhou。',
                    'description' => 'RDS MySQL实例所在地域，目前仅支持cn-qingdao、cn-beijing、cn-hangzhou。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'cn-qingdao',
                  ),
                ),
                'required' => true,
              ),
            ),
            'required' => true,
            'example' => 'test-external-store',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新RDS外部存储',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'UpdateOssExternalStore' => 
    array (
      'summary' => '调用UpdateOssExternalStore接口更新OSS外部存储。',
      'path' => '/externalstores/{externalStoreName}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '144698',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsW5WD7W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'project 名称。',
            'description' => 'project 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'externalStoreName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '外部存储的名称。',
            'description' => '外部存储的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-oss-store',
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
              'externalStoreName' => 
              array (
                'title' => '外部存储的名称。',
                'description' => '外部存储的名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'test-oss-store',
              ),
              'storeType' => 
              array (
                'title' => '外部存储的类型。这里固定为 oss',
                'description' => '外部存储的类型。这里固定为oss。',
                'type' => 'string',
                'required' => true,
                'example' => 'oss',
                'default' => 'oss',
              ),
              'parameter' => 
              array (
                'title' => '外部存储的参数。',
                'description' => '外部存储的参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'accessid' => 
                  array (
                    'title' => '您的AccessKey ID。',
                    'description' => '您的AccessKey ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'LTAI5tFsHGGeYry*****1Sz',
                  ),
                  'accesskey' => 
                  array (
                    'title' => '您的AccessKey Secret。',
                    'description' => '您的AccessKey Secret。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'GyviCLDVHkHrOztdkxuE6******Rp6',
                  ),
                  'endpoint' => 
                  array (
                    'title' => 'oss 的 endpoint 访问网址。',
                    'description' => 'OSS的Endpoint访问网址。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'oss-cn-hangzhou.aliyuncs.com',
                  ),
                  'bucket' => 
                  array (
                    'title' => 'oss 桶名称。',
                    'description' => 'OSS Bucket名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'my-bucket',
                  ),
                  'objects' => 
                  array (
                    'description' => '关联的OSS文件名称。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关联的OSS文件名称。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'file-name',
                    ),
                    'required' => true,
                  ),
                  'columns' => 
                  array (
                    'description' => '关联的字段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关联的字段列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '字段名称。',
                          'type' => 'string',
                          'required' => true,
                          'example' => 'test',
                        ),
                        'type' => 
                        array (
                          'description' => '字段类型。',
                          'type' => 'string',
                          'required' => true,
                          'example' => 'varchar',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => true,
                  ),
                ),
                'required' => true,
              ),
            ),
            'required' => true,
            'example' => 'test-oss-store',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新OSS外部存储',
      'description' => '### 接口说明
请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'GetExternalStore' => 
    array (
      'summary' => '调用GetExternalStore接口获取指定外部存储数据的详细信息。',
      'path' => '/externalstores/{externalStoreName}',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'externalStoreName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '外部存储名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'rds_store',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '外部存储结构体。',
            '$ref' => '#/components/schemas/externalStore',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"externalStoreName\\": \\"rds_store\\",\\n  \\"storeType\\": \\"rds-vpc\\",\\n  \\"parameter\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取指定外部存储数据',
      'description' => '- 目前支持OSS数据源和VPC下的RDS MySQL数据库作为外部存储数据。
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist  | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'CreateSavedSearch' => 
    array (
      'summary' => '创建一个快速查询。',
      'path' => '/savedsearches',
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
      ),
      'operationType' => 'write',
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
            'title' => 'A short description of struct',
            'description' => '快速查询结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'savedsearchName' => 
              array (
                'description' => '快速查询的名称。名称长度为3~63个字符。',
                'type' => 'string',
                'required' => true,
                'example' => 'pv in minutes',
              ),
              'searchQuery' => 
              array (
                'description' => '快速查询的查询和分析语句。由查询语句和分析语句构成，格式为`查询语句|分析语句`。
查询语句或者分析语句。更多信息，请参见[查询语法](~~43772~~)和[分析语法](~~53608~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '*|select date_format(__time__-__time__%60, \'%H:%i:%s\') as time, COUNT(*) as pv group by time',
              ),
              'logstore' => 
              array (
                'description' => '快速查询所属的Logstore名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'aliyun-test-logstore',
              ),
              'topic' => 
              array (
                'description' => '日志主题。',
                'type' => 'string',
                'required' => false,
                'example' => 'theme',
              ),
              'displayName' => 
              array (
                'description' => '显示名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'displayname',
              ),
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'host',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建快速查询',
      'description' => '### 接口说明
Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。',
    ),
    'DeleteSavedSearch' => 
    array (
      'summary' => '删除一个快速查询。',
      'path' => '/savedsearches/{savedsearchName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'savedsearchName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '待删除的快速查询名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-savedsearch-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除快速查询',
      'description' => '### 接口说明
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
- 删除快速查询后，无法恢复。请您谨慎操作。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:DeleteSavedSearch`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`  |',
    ),
    'UpdateSavedSearch' => 
    array (
      'summary' => '调用UpdateSavedSearch接口更新快速查询。',
      'path' => '/savedsearches/{savedsearchName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'Project 名称。',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'savedsearchName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '要更新的快速查询的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'savedsearch-name',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '快速查询结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'savedsearchName' => 
              array (
                'description' => '快速查询的名称。名称长度为3~63个字符。',
                'type' => 'string',
                'required' => true,
                'example' => 'savedsearch-name',
              ),
              'searchQuery' => 
              array (
                'description' => '快速查询的查询和分析语句。由查询语句和分析语句构成，格式为查询语句|分析语句。更多信息，请参见[查询语法](~~43772~~)和[分析语法](~~53608~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '*|select date_format(__time__-__time__%60, \'%H:%i:%s\') as time, COUNT(*) as pv group by time',
              ),
              'logstore' => 
              array (
                'description' => '快速查询所属的Logstore名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'aliyun-test-logstore',
              ),
              'topic' => 
              array (
                'description' => '日志主题。',
                'type' => 'string',
                'required' => false,
                'example' => 'theme',
              ),
              'displayName' => 
              array (
                'description' => '显示名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'displayname',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新快速查询',
      'description' => '### 接口说明
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
- 日志服务查询日志时存在使用限制。请设计合理查询与分析语句、设置合理查询区间等。更多信息，请参见[查询日志使用限制](~~43772~~)和[分析日志使用限制](~~53608~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:UpdateSavedSearch`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`  |
',
    ),
    'ListSavedSearch' => 
    array (
      'summary' => '查询快速查询列表。',
      'path' => '/savedsearches',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyun-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '默认值为 500。',
            'description' => '分页查询时，设置的每页行数。最大值为500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '500',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'total' => 
              array (
                'description' => '符合查询条件的快速查询总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'count' => 
              array (
                'description' => '当前页返回的快速查询个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'savedsearchItems' => 
              array (
                'description' => '快速查询列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '快速查询。',
                  'example' => 'test-1',
                  '$ref' => '#/components/schemas/SavedSearch',
                ),
                'example' => '[ "test-1", "test-2" ]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"total\\": 4,\\n  \\"count\\": 4,\\n  \\"savedsearchItems\\": [\\n    {\\n      \\"savedsearchName\\": \\"\\",\\n      \\"searchQuery\\": \\"\\",\\n      \\"logstore\\": \\"\\",\\n      \\"topic\\": \\"\\",\\n      \\"displayName\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询快速查询',
      'description' => '### 接口说明
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:ListSavedSearch`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/*`  |',
    ),
    'GetSavedSearch' => 
    array (
      'summary' => '获取指定的快速查询。',
      'path' => '/savedsearches/{savedsearchName}',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyun-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'savedsearchName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '快速查询名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'savedsearch-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '快速查询结构体。',
            'example' => 'saved-search',
            '$ref' => '#/components/schemas/SavedSearch',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"savedsearchName\\": \\"\\",\\n  \\"searchQuery\\": \\"\\",\\n  \\"logstore\\": \\"\\",\\n  \\"topic\\": \\"\\",\\n  \\"displayName\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取指定快速查询',
      'description' => '### 接口说明
- Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域、Logstore名称等。如何查询，请参见[管理Project](~~48984~~)和[管理Logstore](~~48990~~)。
- 您可以通过ListSavedSearch查询具体的快速查询名称。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:GetSavedSearch`  | `acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`  |',
    ),
    'CreateAlert' => 
    array (
      'summary' => '在指定Project下创建一个告警规则。',
      'path' => '/alerts',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '200211',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls7LA3N2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '告警规则配置',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'description' => '告警名称，project下唯一',
                'type' => 'string',
                'required' => true,
                'example' => 'alert-123456',
              ),
              'displayName' => 
              array (
                'description' => '告警显示名称',
                'type' => 'string',
                'required' => true,
                'example' => 'test-alert',
              ),
              'description' => 
              array (
                'description' => '告警描述',
                'type' => 'string',
                'required' => false,
                'example' => '一条告警规则',
              ),
              'configuration' => 
              array (
                'description' => '告警详细配置',
                'required' => true,
                '$ref' => '#/components/schemas/AlertConfiguration',
              ),
              'schedule' => 
              array (
                'description' => '告警调度配置',
                'required' => true,
                '$ref' => '#/components/schemas/Schedule',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建告警规则',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'DeleteAlert' => 
    array (
      'summary' => '删除指定的告警规则。',
      'path' => '/alerts/{alertName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '200218',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls7LA3N2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'alertName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '告警规则ID',
            'type' => 'string',
            'required' => true,
            'example' => 'alert-0123456789-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除告警规则',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'UpdateAlert' => 
    array (
      'summary' => '更新指定的告警规则。',
      'path' => '/alerts/{alertName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '200217',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls7LA3N2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'alertName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '告警规则ID',
            'type' => 'string',
            'required' => true,
            'example' => 'alert-0123456789-123456',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '更新告警规则的配置',
            'type' => 'object',
            'properties' => 
            array (
              'displayName' => 
              array (
                'description' => '告警显示名称',
                'type' => 'string',
                'required' => true,
                'example' => 'this is alert',
              ),
              'description' => 
              array (
                'description' => '告警描述',
                'type' => 'string',
                'required' => false,
                'example' => 'this is description',
              ),
              'configuration' => 
              array (
                'description' => '告警详细配置',
                'required' => true,
                '$ref' => '#/components/schemas/AlertConfiguration',
              ),
              'schedule' => 
              array (
                'description' => '告警调度配置',
                'required' => true,
                '$ref' => '#/components/schemas/Schedule',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新告警规则',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'EnableAlert' => 
    array (
      'summary' => '开启指定的告警规则。',
      'path' => '/alerts/{alertName}?action=enable',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '200854',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls7LA3N2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'alertName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '告警规则ID',
            'type' => 'string',
            'required' => true,
            'example' => 'alert-0123456789-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '开启告警规则',
    ),
    'DisableAlert' => 
    array (
      'summary' => '关闭指定的告警规则。',
      'path' => '/alerts/{alertName}?action=disable',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '200858',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls7LA3N2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'alertName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '告警规则ID',
            'type' => 'string',
            'required' => true,
            'example' => 'alert-0123456789-123456
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '关闭告警规则',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'GetAlert' => 
    array (
      'summary' => '获取指定的告警规则。',
      'path' => '/alerts/{alertName}',
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
        'abilityTreeCode' => '200220',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls7LA3N2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'alertName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '告警规则ID',
            'type' => 'string',
            'required' => true,
            'example' => 'alert-0123456789-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '告警规则配置',
            '$ref' => '#/components/schemas/Alert',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"alert-123456\\",\\n  \\"displayName\\": \\"alertNameExample\\",\\n  \\"description\\": \\"Alert Desc\\",\\n  \\"configuration\\": {\\n    \\"muteUntil\\": 1698907508,\\n    \\"version\\": \\"2.0\\",\\n    \\"type\\": \\"default\\",\\n    \\"templateConfiguration\\": {\\n      \\"id\\": \\"sls.app.ack.ip.not_enough\\",\\n      \\"type\\": \\"sys\\",\\n      \\"version\\": \\"1\\",\\n      \\"lang\\": \\"cn\\",\\n      \\"tokens\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"aonotations\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"dashboard\\": \\"dasnboardExample\\",\\n    \\"threshold\\": 1,\\n    \\"noDataFire\\": false,\\n    \\"noDataSeverity\\": 6,\\n    \\"sendResolved\\": false,\\n    \\"queryList\\": [\\n      {\\n        \\"chartTitle\\": \\"chartExmaple\\",\\n        \\"query\\": \\"* | select *\\",\\n        \\"timeSpanType\\": \\"Relative\\",\\n        \\"start\\": \\"-5m\\",\\n        \\"end\\": \\"now\\",\\n        \\"storeType\\": \\"log\\",\\n        \\"project\\": \\"projectExample\\",\\n        \\"store\\": \\"store Example\\",\\n        \\"region\\": \\"cn-hangzhou\\",\\n        \\"roleArn\\": \\"\\",\\n        \\"dashboardId\\": \\"dashboardExample\\",\\n        \\"powerSqlMode\\": \\"auto\\",\\n        \\"ui\\": \\"\\"\\n      }\\n    ],\\n    \\"annotations\\": [\\n      {\\n        \\"key\\": \\"title\\",\\n        \\"value\\": \\"example value\\"\\n      }\\n    ],\\n    \\"labels\\": [\\n      {\\n        \\"key\\": \\"title\\",\\n        \\"value\\": \\"example value\\"\\n      }\\n    ],\\n    \\"conditionConfiguration\\": {\\n      \\"condition\\": \\"cnt > 100\\",\\n      \\"countCondition\\": \\"__count__ > 5\\"\\n    },\\n    \\"severityConfigurations\\": [\\n      {\\n        \\"severity\\": 8,\\n        \\"evalCondition\\": {\\n          \\"condition\\": \\"cnt > 100\\",\\n          \\"countCondition\\": \\"__count__ > 5\\"\\n        }\\n      }\\n    ],\\n    \\"joinConfigurations\\": [\\n      {\\n        \\"type\\": \\"left_join\\",\\n        \\"condition\\": \\"$0.id == $1.id\\"\\n      }\\n    ],\\n    \\"groupConfiguration\\": {\\n      \\"type\\": \\"custom\\",\\n      \\"fields\\": [\\n        \\"id\\"\\n      ]\\n    },\\n    \\"policyConfiguration\\": {\\n      \\"alertPolicyId\\": \\"sls.builtin.dynamic\\",\\n      \\"actionPolicyId\\": \\"example_action_policy\\",\\n      \\"repeatInterval\\": \\"10m\\"\\n    },\\n    \\"autoAnnotation\\": false,\\n    \\"sinkEventStore\\": {\\n      \\"enabled\\": true,\\n      \\"endpoint\\": \\"cn-shanghai-intranet.log.aliyuncs.com\\",\\n      \\"project\\": \\"exampleProject\\",\\n      \\"eventStore\\": \\"exampleStore\\",\\n      \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogetlrole\\"\\n    },\\n    \\"sinkCms\\": {\\n      \\"enabled\\": true\\n    },\\n    \\"sinkAlerthub\\": {\\n      \\"enabled\\": true\\n    },\\n    \\"tags\\": [\\n      \\"host\\"\\n    ]\\n  },\\n  \\"schedule\\": {\\n    \\"type\\": \\"FixedRate\\",\\n    \\"cronExpression\\": \\"0/5 * * * *\\",\\n    \\"runImmediately\\": false,\\n    \\"timeZone\\": \\"+0800\\",\\n    \\"delay\\": 4,\\n    \\"interval\\": \\"60s\\"\\n  },\\n  \\"createTime\\": 0,\\n  \\"lastModifiedTime\\": 0,\\n  \\"status\\": \\"ENABLED/DISABLED\\"\\n}","type":"json"}]',
      'title' => '获取告警规则',
      'extraInfo' => '| HttpStatusCode  | ErrorCode  | ErrorMessage  | 错误码描述  |
| :------------ | :------------ | :------------ | :------------ |
| 404  | ProjectNotExist | Project does not exist.  | Project不存在。  |
|  500 |  InternalServerError |  Specified Server Error Message. | 内部服务调用错误。 |

更多信息，请参见[通用错误码](~~29013~~)。',
    ),
    'ListAlerts' => 
    array (
      'summary' => '列出指定Project下的告警规则。',
      'path' => '/alerts',
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
        'abilityTreeCode' => '199870',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls7LA3N2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置的每页行数。最大值为200。默认值为200。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'logstore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取指定Logstore下的告警规则。默认值为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-logstore',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'total' => 
              array (
                'description' => 'Project下告警总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'count' => 
              array (
                'description' => '当前返回的告警数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'results' => 
              array (
                'description' => '告警配置结果列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '告警配置',
                  '$ref' => '#/components/schemas/Alert',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"total\\": 80,\\n  \\"count\\": 10,\\n  \\"results\\": [\\n    {\\n      \\"name\\": \\"alert-123456\\",\\n      \\"displayName\\": \\"alertNameExample\\",\\n      \\"description\\": \\"Alert Desc\\",\\n      \\"configuration\\": {\\n        \\"muteUntil\\": 1698907508,\\n        \\"version\\": \\"2.0\\",\\n        \\"type\\": \\"default\\",\\n        \\"templateConfiguration\\": {\\n          \\"id\\": \\"sls.app.ack.ip.not_enough\\",\\n          \\"type\\": \\"sys\\",\\n          \\"version\\": \\"1\\",\\n          \\"lang\\": \\"cn\\",\\n          \\"tokens\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"aonotations\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"dashboard\\": \\"dasnboardExample\\",\\n        \\"threshold\\": 1,\\n        \\"noDataFire\\": false,\\n        \\"noDataSeverity\\": 6,\\n        \\"sendResolved\\": false,\\n        \\"queryList\\": [\\n          {\\n            \\"chartTitle\\": \\"chartExmaple\\",\\n            \\"query\\": \\"* | select *\\",\\n            \\"timeSpanType\\": \\"Relative\\",\\n            \\"start\\": \\"-5m\\",\\n            \\"end\\": \\"now\\",\\n            \\"storeType\\": \\"log\\",\\n            \\"project\\": \\"projectExample\\",\\n            \\"store\\": \\"store Example\\",\\n            \\"region\\": \\"cn-hangzhou\\",\\n            \\"roleArn\\": \\"\\",\\n            \\"dashboardId\\": \\"dashboardExample\\",\\n            \\"powerSqlMode\\": \\"auto\\",\\n            \\"ui\\": \\"\\"\\n          }\\n        ],\\n        \\"annotations\\": [\\n          {\\n            \\"key\\": \\"title\\",\\n            \\"value\\": \\"example value\\"\\n          }\\n        ],\\n        \\"labels\\": [\\n          {\\n            \\"key\\": \\"title\\",\\n            \\"value\\": \\"example value\\"\\n          }\\n        ],\\n        \\"conditionConfiguration\\": {\\n          \\"condition\\": \\"cnt > 100\\",\\n          \\"countCondition\\": \\"__count__ > 5\\"\\n        },\\n        \\"severityConfigurations\\": [\\n          {\\n            \\"severity\\": 8,\\n            \\"evalCondition\\": {\\n              \\"condition\\": \\"cnt > 100\\",\\n              \\"countCondition\\": \\"__count__ > 5\\"\\n            }\\n          }\\n        ],\\n        \\"joinConfigurations\\": [\\n          {\\n            \\"type\\": \\"left_join\\",\\n            \\"condition\\": \\"$0.id == $1.id\\"\\n          }\\n        ],\\n        \\"groupConfiguration\\": {\\n          \\"type\\": \\"custom\\",\\n          \\"fields\\": [\\n            \\"id\\"\\n          ]\\n        },\\n        \\"policyConfiguration\\": {\\n          \\"alertPolicyId\\": \\"sls.builtin.dynamic\\",\\n          \\"actionPolicyId\\": \\"example_action_policy\\",\\n          \\"repeatInterval\\": \\"10m\\"\\n        },\\n        \\"autoAnnotation\\": false,\\n        \\"sinkEventStore\\": {\\n          \\"enabled\\": true,\\n          \\"endpoint\\": \\"cn-shanghai-intranet.log.aliyuncs.com\\",\\n          \\"project\\": \\"exampleProject\\",\\n          \\"eventStore\\": \\"exampleStore\\",\\n          \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogetlrole\\"\\n        },\\n        \\"sinkCms\\": {\\n          \\"enabled\\": true\\n        },\\n        \\"sinkAlerthub\\": {\\n          \\"enabled\\": true\\n        },\\n        \\"tags\\": [\\n          \\"host\\"\\n        ]\\n      },\\n      \\"schedule\\": {\\n        \\"type\\": \\"FixedRate\\",\\n        \\"cronExpression\\": \\"0/5 * * * *\\",\\n        \\"runImmediately\\": false,\\n        \\"timeZone\\": \\"+0800\\",\\n        \\"delay\\": 4,\\n        \\"interval\\": \\"60s\\"\\n      },\\n      \\"createTime\\": 0,\\n      \\"lastModifiedTime\\": 0,\\n      \\"status\\": \\"ENABLED/DISABLED\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出告警规则',
    ),
    'CreateOSSIngestion' => 
    array (
      'summary' => '在指定Project下创建一个OSS导入任务。',
      'path' => '/ossingestions',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '203082',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsDQM02M',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'OSS导入任务配置',
            'type' => 'object',
            'properties' => 
            array (
              'description' => 
              array (
                'description' => '任务描述',
                'type' => 'string',
                'required' => false,
                'example' => '任务描述
',
              ),
              'displayName' => 
              array (
                'description' => '显示名称',
                'type' => 'string',
                'required' => true,
                'example' => 'OSS导入',
              ),
              'schedule' => 
              array (
                'description' => '调度类型，一般默认不需要填写。如果有强定时需求，如必须是每周一八点进行一次导入，可使用cron形式',
                'required' => false,
                '$ref' => '#/components/schemas/Schedule',
              ),
              'configuration' => 
              array (
                'description' => 'OSS导入配置',
                'required' => true,
                '$ref' => '#/components/schemas/OSSIngestionConfiguration',
              ),
              'name' => 
              array (
                'description' => 'OSS导入任务名称',
                'type' => 'string',
                'required' => true,
                'example' => 'ingest-oss-123456',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthorizationRequired',
            'errorMessage' => 'Authorization Required',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建OSS导入任务',
    ),
    'DeleteOSSIngestion' => 
    array (
      'summary' => '删除一个OSS导入任务。',
      'path' => '/ossingestions/{ossIngestionName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '203138',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsDQM02M',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossIngestionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'OSS导入任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ingest-oss-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除OSS导入任务',
    ),
    'UpdateOSSIngestion' => 
    array (
      'summary' => '更新指定的OSS导入任务。',
      'path' => '/ossingestions/{ossIngestionName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '203139',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsDQM02M',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'ossIngestionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'OSS导入任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ingest-oss-123455',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'description' => 
              array (
                'description' => 'OSS导入任务描述',
                'type' => 'string',
                'required' => false,
                'example' => 'OSS导入',
              ),
              'displayName' => 
              array (
                'description' => 'OSS导入任务展示名称',
                'type' => 'string',
                'required' => true,
                'example' => 'OSS导入',
              ),
              'schedule' => 
              array (
                'description' => '调度类型，一般默认不需要填写。如果有强定时需求，如必须是每周一八点进行一次导入，可使用cron形式',
                'required' => false,
                '$ref' => '#/components/schemas/Schedule',
              ),
              'configuration' => 
              array (
                'description' => 'OSS导入配置',
                'required' => true,
                '$ref' => '#/components/schemas/OSSIngestionConfiguration',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新OSS导入任务',
    ),
    'StartOSSIngestion' => 
    array (
      'summary' => '启动指定OSS导入任务。',
      'path' => '/ossingestions/{ossIngestionName}?action=START',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '203141',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsDQM02M',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'ossIngestionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'OSS导入任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ingest-oss-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '启动OSS导入任务',
    ),
    'StopOSSIngestion' => 
    array (
      'summary' => '停止指定OSS导入任务。',
      'path' => '/ossingestions/{ossIngestionName}?action=STOP',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '203142',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsDQM02M',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossIngestionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'OSS导入任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ingest-oss-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '停止OSS导入任务',
    ),
    'GetOSSIngestion' => 
    array (
      'summary' => '获取指定OSS导入任务。',
      'path' => '/ossingestions/{ossIngestionName}',
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
        'abilityTreeCode' => '203101',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls1DZPIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossIngestionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'OSS导入任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ingest-oss-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'OSS导入任务配置',
            '$ref' => '#/components/schemas/OSSIngestion',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"ingest-oss-123456\\",\\n  \\"description\\": \\"oss ingestion\\",\\n  \\"displayName\\": \\"oss ingestion\\",\\n  \\"schedule\\": {\\n    \\"type\\": \\"FixedRate\\",\\n    \\"cronExpression\\": \\"0/5 * * * *\\",\\n    \\"runImmediately\\": false,\\n    \\"timeZone\\": \\"+0800\\",\\n    \\"delay\\": 4,\\n    \\"interval\\": \\"60s\\"\\n  },\\n  \\"configuration\\": {\\n    \\"logstore\\": \\"myLogstore\\",\\n    \\"source\\": {\\n      \\"endpoint\\": \\"oss-cn-hangzhou.aliyuncs.com\\",\\n      \\"bucket\\": \\"ossbucket\\",\\n      \\"compressionCodec\\": \\"none\\",\\n      \\"encoding\\": \\"UTF-8\\",\\n      \\"format\\": {\\n        \\"key\\": \\"{\\\\\\"type\\\\\\": \\\\\\"line\\\\\\"}\\"\\n      },\\n      \\"interval\\": \\"never\\",\\n      \\"pattern\\": \\".*\\",\\n      \\"prefix\\": \\"prefix\\",\\n      \\"restoreObjectEnabled\\": true,\\n      \\"startTime\\": 1714274081,\\n      \\"endTime\\": 1714360481,\\n      \\"timeField\\": \\"__time__\\",\\n      \\"timeFormat\\": \\"yyyy-MM-dd HH:mm:ss\\",\\n      \\"timePattern\\": \\"[0-9]{0,2}\\\\\\\\/[0-9a-zA-Z]+\\\\\\\\/[0-9:,]+\\",\\n      \\"timeZone\\": \\"GMT+08:00\\",\\n      \\"useMetaIndex\\": false,\\n      \\"roleARN\\": \\"acs:ram::12345:role/aliyunlogdefaultrole\\"\\n    }\\n  },\\n  \\"createTime\\": 1714360481,\\n  \\"lastModifiedTime\\": 1714360481,\\n  \\"status\\": \\"RUNNING\\",\\n  \\"scheduleId\\": \\"c7f01719d9feb105fc9d8df92af62010\\"\\n}","type":"json"}]',
      'title' => '获取OSS导入任务',
    ),
    'ListOSSIngestions' => 
    array (
      'summary' => '列出指定Project下的OSS导入任务。',
      'path' => '/ossingestions',
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
        'abilityTreeCode' => '203123',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls0Z6RJ5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次查询需要获取的OSS导入任务数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10
',
          ),
        ),
        3 => 
        array (
          'name' => 'logstore',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'total' => 
              array (
                'description' => '指定Project下OSS导入任务数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'count' => 
              array (
                'description' => '当前列出的OSS导入任务数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'results' => 
              array (
                'description' => '具体OSS导入任务列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'OSS导入任务配置',
                  '$ref' => '#/components/schemas/OSSIngestion',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"total\\": 80,\\n  \\"count\\": 10,\\n  \\"results\\": [\\n    {\\n      \\"name\\": \\"ingest-oss-123456\\",\\n      \\"description\\": \\"oss ingestion\\",\\n      \\"displayName\\": \\"oss ingestion\\",\\n      \\"schedule\\": {\\n        \\"type\\": \\"FixedRate\\",\\n        \\"cronExpression\\": \\"0/5 * * * *\\",\\n        \\"runImmediately\\": false,\\n        \\"timeZone\\": \\"+0800\\",\\n        \\"delay\\": 4,\\n        \\"interval\\": \\"60s\\"\\n      },\\n      \\"configuration\\": {\\n        \\"logstore\\": \\"myLogstore\\",\\n        \\"source\\": {\\n          \\"endpoint\\": \\"oss-cn-hangzhou.aliyuncs.com\\",\\n          \\"bucket\\": \\"ossbucket\\",\\n          \\"compressionCodec\\": \\"none\\",\\n          \\"encoding\\": \\"UTF-8\\",\\n          \\"format\\": {\\n            \\"key\\": \\"{\\\\\\"type\\\\\\": \\\\\\"line\\\\\\"}\\"\\n          },\\n          \\"interval\\": \\"never\\",\\n          \\"pattern\\": \\".*\\",\\n          \\"prefix\\": \\"prefix\\",\\n          \\"restoreObjectEnabled\\": true,\\n          \\"startTime\\": 1714274081,\\n          \\"endTime\\": 1714360481,\\n          \\"timeField\\": \\"__time__\\",\\n          \\"timeFormat\\": \\"yyyy-MM-dd HH:mm:ss\\",\\n          \\"timePattern\\": \\"[0-9]{0,2}\\\\\\\\/[0-9a-zA-Z]+\\\\\\\\/[0-9:,]+\\",\\n          \\"timeZone\\": \\"GMT+08:00\\",\\n          \\"useMetaIndex\\": false,\\n          \\"roleARN\\": \\"acs:ram::12345:role/aliyunlogdefaultrole\\"\\n        }\\n      },\\n      \\"createTime\\": 1714360481,\\n      \\"lastModifiedTime\\": 1714360481,\\n      \\"status\\": \\"RUNNING\\",\\n      \\"scheduleId\\": \\"c7f01719d9feb105fc9d8df92af62010\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出OSS导入任务',
    ),
    'CreateOSSExport' => 
    array (
      'summary' => '将Logstore中的日志投递到OSS的Bucket。',
      'path' => '/ossexports',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '203278',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'OSS投递任务配置',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'description' => 'OSS投递任务唯一标识',
                'type' => 'string',
                'required' => true,
                'example' => 'export-oss-1234567890-123456',
              ),
              'displayName' => 
              array (
                'description' => '任务显示名',
                'type' => 'string',
                'required' => true,
                'example' => 'my-oss-job',
              ),
              'description' => 
              array (
                'description' => '任务描述',
                'type' => 'string',
                'required' => false,
                'example' => '创建一个OSS投递任务',
              ),
              'configuration' => 
              array (
                'description' => '任务配置',
                'required' => true,
                '$ref' => '#/components/schemas/OSSExportConfiguration',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthorizationRequired',
            'errorMessage' => 'Authorization Required',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建OSS投递任务',
    ),
    'CreateOSSHDFSExport' => 
    array (
      'summary' => '在指定的Project下创建一个OSS-HDFS投递功能。',
      'path' => '/osshdfsexports',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '203480',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'OSS投递任务配置',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'description' => 'OSS投递任务唯一标识',
                'type' => 'string',
                'required' => true,
                'example' => 'export-osshdfs-1234567890-123456',
              ),
              'displayName' => 
              array (
                'description' => '任务显示名',
                'type' => 'string',
                'required' => true,
                'example' => 'my-oss-hdfs-job
',
              ),
              'description' => 
              array (
                'description' => '任务描述',
                'type' => 'string',
                'required' => false,
                'example' => '创建一个OSS-HDFS投递任务
',
              ),
              'configuration' => 
              array (
                'description' => '任务配置',
                'required' => true,
                '$ref' => '#/components/schemas/OSSExportConfiguration',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthorizationRequired',
            'errorMessage' => 'Authorization Required',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建OSS-HDFS投递任务',
    ),
    'DeleteOSSExport' => 
    array (
      'summary' => '删除指定的OSS投递任务。',
      'path' => '/ossexports/{ossExportName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '203472',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-oss-1234567890-123456
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除OSS投递任务',
    ),
    'DeleteOSSHDFSExport' => 
    array (
      'summary' => '删除指定的OSS-HDFS投递任务。',
      'path' => '/osshdfsexports/{ossExportName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '203483',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-osshdfs-1234567890-123456

',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除OSS-HDFS投递任务',
    ),
    'UpdateOSSExport' => 
    array (
      'summary' => '更新指定的OSS投递任务。',
      'path' => '/ossexports/{ossExportName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '203473',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-oss-1234567890-123456
',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'OSS投递任务配置',
            'type' => 'object',
            'properties' => 
            array (
              'displayName' => 
              array (
                'description' => '任务显示名',
                'type' => 'string',
                'required' => false,
                'example' => 'my-oss-job
',
              ),
              'description' => 
              array (
                'description' => '任务描述',
                'type' => 'string',
                'required' => false,
                'example' => '更新OSS投递任务
',
              ),
              'configuration' => 
              array (
                'description' => '任务配置',
                'required' => false,
                '$ref' => '#/components/schemas/OSSExportConfiguration',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新OSS投递任务',
    ),
    'StartOSSExport' => 
    array (
      'summary' => '启动指定的OSS投递任务。',
      'path' => '/ossexports/{ossExportName}?action=START',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '203474',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-oss-1234567890-123456
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '启动OSS投递任务',
    ),
    'StopOSSExport' => 
    array (
      'summary' => '停止指定的OSS投递任务。',
      'path' => '/ossexports/{ossExportName}?action=STOP',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '203475',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-oss-1234567890-123456
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '停止OSS投递任务',
    ),
    'GetOSSExport' => 
    array (
      'summary' => '获取指定的OSS投递任务。',
      'path' => '/ossexports/{ossExportName}',
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
        'abilityTreeCode' => '203470',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-oss-123456789-123456
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
            'description' => '任务配置详细',
            '$ref' => '#/components/schemas/OSSExport',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"job-1714109458-123456\\",\\n  \\"description\\": \\"job-test\\",\\n  \\"displayName\\": \\"job-demo\\",\\n  \\"configuration\\": {\\n    \\"logstore\\": \\"logstore-demo\\",\\n    \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogdefaultrole\\",\\n    \\"sink\\": {\\n      \\"endpoint\\": \\"http://oss-cn-hangzhou-internal.aliyuncs.com\\",\\n      \\"bucket\\": \\"test-bucket\\",\\n      \\"prefix\\": \\"demo/\\",\\n      \\"suffix\\": \\".json\\",\\n      \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogdefaultrole\\",\\n      \\"pathFormat\\": \\"%Y/%m/%d/%H/%M\\",\\n      \\"pathFormatType\\": \\"time\\",\\n      \\"timeZone\\": \\"+0800\\",\\n      \\"contentType\\": \\"json\\",\\n      \\"contentDetail\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"compressionType\\": \\"snappy\\",\\n      \\"bufferInterval\\": 300,\\n      \\"bufferSize\\": 256,\\n      \\"delaySec\\": 900,\\n      \\"delaySeconds\\": 900\\n    },\\n    \\"fromTime\\": 1714123644,\\n    \\"toTime\\": 1714357112\\n  },\\n  \\"createTime\\": 1714284025,\\n  \\"lastModifiedTime\\": 1714284115,\\n  \\"status\\": \\"RUNNING\\"\\n}","type":"json"}]',
      'title' => ' 获取OSS投递任务',
    ),
    'UpdateOSSHDFSExport' => 
    array (
      'summary' => '更新指定的OSS-HDFS投递任务。',
      'path' => '/osshdfsexports/{ossExportName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '203477',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-osshdfs-1234567890-123456
',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'OSS-HDFS投递任务配置',
            'type' => 'object',
            'properties' => 
            array (
              'displayName' => 
              array (
                'description' => '任务显示名',
                'type' => 'string',
                'required' => false,
                'example' => 'my-oss-hdfs-job
',
              ),
              'description' => 
              array (
                'description' => '任务描述',
                'type' => 'string',
                'required' => false,
                'example' => '更新OSS-HDFS投递任务
',
              ),
              'configuration' => 
              array (
                'description' => '任务配置',
                'required' => false,
                '$ref' => '#/components/schemas/OSSExportConfiguration',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新OSS-HDFS投递任务',
    ),
    'StartOSSHDFSExport' => 
    array (
      'summary' => '启动指定的OSS-HDFS投递任务。',
      'path' => '/osshdfsexports/{ossExportName}?action=START',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '203482',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-osshdfs-1234567890-123456
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '启动OSS-HDFS投递任务',
    ),
    'StopOSSHDFSExport' => 
    array (
      'summary' => '停止指定的OSS-HDFS投递任务。',
      'path' => '/osshdfsexports/{ossExportName}?action=STOP',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '203481',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-osshdfs-123456789-123456
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '停止OSS-HDFS投递任务',
    ),
    'ListOSSExports' => 
    array (
      'summary' => '列出指定Project下的OSS投递任务。',
      'path' => '/ossexports',
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
        'abilityTreeCode' => '203471',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束行，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'logstore',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'total' => 
              array (
                'description' => '指定Project下所有OSS投递任务数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'count' => 
              array (
                'description' => '当前列出的OSS投递任务数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'results' => 
              array (
                'description' => '具体OSS投递任务列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务配置详细',
                  '$ref' => '#/components/schemas/OSSExport',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"total\\": 10,\\n  \\"count\\": 2,\\n  \\"results\\": [\\n    {\\n      \\"name\\": \\"job-1714109458-123456\\",\\n      \\"description\\": \\"job-test\\",\\n      \\"displayName\\": \\"job-demo\\",\\n      \\"configuration\\": {\\n        \\"logstore\\": \\"logstore-demo\\",\\n        \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogdefaultrole\\",\\n        \\"sink\\": {\\n          \\"endpoint\\": \\"http://oss-cn-hangzhou-internal.aliyuncs.com\\",\\n          \\"bucket\\": \\"test-bucket\\",\\n          \\"prefix\\": \\"demo/\\",\\n          \\"suffix\\": \\".json\\",\\n          \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogdefaultrole\\",\\n          \\"pathFormat\\": \\"%Y/%m/%d/%H/%M\\",\\n          \\"pathFormatType\\": \\"time\\",\\n          \\"timeZone\\": \\"+0800\\",\\n          \\"contentType\\": \\"json\\",\\n          \\"contentDetail\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"compressionType\\": \\"snappy\\",\\n          \\"bufferInterval\\": 300,\\n          \\"bufferSize\\": 256,\\n          \\"delaySec\\": 900,\\n          \\"delaySeconds\\": 900\\n        },\\n        \\"fromTime\\": 1714123644,\\n        \\"toTime\\": 1714357112\\n      },\\n      \\"createTime\\": 1714284025,\\n      \\"lastModifiedTime\\": 1714284115,\\n      \\"status\\": \\"RUNNING\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出OSS投递任务',
    ),
    'GetOSSHDFSExport' => 
    array (
      'summary' => '获取指定的OSS-HDFS投递任务。',
      'path' => '/osshdfsexports/{ossExportName}',
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
        'abilityTreeCode' => '203478',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ossExportName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'export-osshdfs-1234567890-123456
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
            'description' => '任务配置详细',
            '$ref' => '#/components/schemas/OSSExport',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"job-1714109458-123456\\",\\n  \\"description\\": \\"job-test\\",\\n  \\"displayName\\": \\"job-demo\\",\\n  \\"configuration\\": {\\n    \\"logstore\\": \\"logstore-demo\\",\\n    \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogdefaultrole\\",\\n    \\"sink\\": {\\n      \\"endpoint\\": \\"http://oss-cn-hangzhou-internal.aliyuncs.com\\",\\n      \\"bucket\\": \\"test-bucket\\",\\n      \\"prefix\\": \\"demo/\\",\\n      \\"suffix\\": \\".json\\",\\n      \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogdefaultrole\\",\\n      \\"pathFormat\\": \\"%Y/%m/%d/%H/%M\\",\\n      \\"pathFormatType\\": \\"time\\",\\n      \\"timeZone\\": \\"+0800\\",\\n      \\"contentType\\": \\"json\\",\\n      \\"contentDetail\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"compressionType\\": \\"snappy\\",\\n      \\"bufferInterval\\": 300,\\n      \\"bufferSize\\": 256,\\n      \\"delaySec\\": 900,\\n      \\"delaySeconds\\": 900\\n    },\\n    \\"fromTime\\": 1714123644,\\n    \\"toTime\\": 1714357112\\n  },\\n  \\"createTime\\": 1714284025,\\n  \\"lastModifiedTime\\": 1714284115,\\n  \\"status\\": \\"RUNNING\\"\\n}","type":"json"}]',
      'title' => '获取OSS-HDFS投递任务',
    ),
    'ListOSSHDFSExports' => 
    array (
      'summary' => '列出指定Project下的OSS-HDFS投递任务。',
      'path' => '/osshdfsexports',
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
        'abilityTreeCode' => '203484',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls6GHCRC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束行，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'logstore',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'total' => 
              array (
                'description' => '指定Project下所有OSS-HDFS投递任务数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'count' => 
              array (
                'description' => '当前列出的OSS-HDFS投递任务数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'results' => 
              array (
                'description' => '具体OSS-HDFS投递任务列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务配置详细',
                  '$ref' => '#/components/schemas/OSSExport',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"total\\": 10,\\n  \\"count\\": 2,\\n  \\"results\\": [\\n    {\\n      \\"name\\": \\"job-1714109458-123456\\",\\n      \\"description\\": \\"job-test\\",\\n      \\"displayName\\": \\"job-demo\\",\\n      \\"configuration\\": {\\n        \\"logstore\\": \\"logstore-demo\\",\\n        \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogdefaultrole\\",\\n        \\"sink\\": {\\n          \\"endpoint\\": \\"http://oss-cn-hangzhou-internal.aliyuncs.com\\",\\n          \\"bucket\\": \\"test-bucket\\",\\n          \\"prefix\\": \\"demo/\\",\\n          \\"suffix\\": \\".json\\",\\n          \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogdefaultrole\\",\\n          \\"pathFormat\\": \\"%Y/%m/%d/%H/%M\\",\\n          \\"pathFormatType\\": \\"time\\",\\n          \\"timeZone\\": \\"+0800\\",\\n          \\"contentType\\": \\"json\\",\\n          \\"contentDetail\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"compressionType\\": \\"snappy\\",\\n          \\"bufferInterval\\": 300,\\n          \\"bufferSize\\": 256,\\n          \\"delaySec\\": 900,\\n          \\"delaySeconds\\": 900\\n        },\\n        \\"fromTime\\": 1714123644,\\n        \\"toTime\\": 1714357112\\n      },\\n      \\"createTime\\": 1714284025,\\n      \\"lastModifiedTime\\": 1714284115,\\n      \\"status\\": \\"RUNNING\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出OSS-HDFS投递任务',
    ),
    'CreateETL' => 
    array (
      'summary' => '在指定Project下创建一个数据加工任务。',
      'path' => '/etls',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '203162',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls1DZPIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '数据加工任务配置',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'description' => '数据加工任务名称（project下唯一）',
                'type' => 'string',
                'required' => true,
                'example' => 'etl-123456',
              ),
              'displayName' => 
              array (
                'description' => '数据加工任务显示名称',
                'type' => 'string',
                'required' => true,
                'example' => 'sls-test-etl',
              ),
              'description' => 
              array (
                'description' => '数据加工任务描述',
                'type' => 'string',
                'required' => false,
                'example' => 'this is ETL',
              ),
              'configuration' => 
              array (
                'description' => '数据加工任务详细配置',
                'required' => true,
                '$ref' => '#/components/schemas/ETLConfiguration',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthorizationRequired',
            'errorMessage' => 'Authorization Required',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建数据加工任务',
    ),
    'DeleteETL' => 
    array (
      'summary' => '删除一个数据加工任务。',
      'path' => '/etls/{etlName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '203167',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls1DZPIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'etlName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据加工名称',
            'type' => 'string',
            'required' => true,
            'example' => 'etl-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除数据加工任务',
    ),
    'UpdateETL' => 
    array (
      'summary' => '更新指定的数据加工任务。',
      'path' => '/etls/{etlName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '203169',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls1DZPIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'etlName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据加工名称',
            'type' => 'string',
            'required' => true,
            'example' => 'etl-123456',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '更新的数据加工配置',
            'type' => 'object',
            'properties' => 
            array (
              'displayName' => 
              array (
                'description' => '数据加工显示名称',
                'type' => 'string',
                'required' => true,
                'example' => 'this is update',
              ),
              'description' => 
              array (
                'description' => '数据加工描述',
                'type' => 'string',
                'required' => false,
                'example' => 'this is description',
              ),
              'configuration' => 
              array (
                'description' => '数据加工详细配置',
                'required' => true,
                '$ref' => '#/components/schemas/ETLConfiguration',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新数据加工任务',
    ),
    'StartETL' => 
    array (
      'summary' => '启动指定的数据加工任务。',
      'path' => '/etls/{etlName}?action=START',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '203160',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls1DZPIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'etlName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据加工名称',
            'type' => 'string',
            'required' => false,
            'example' => 'etl-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '启动数据加工任务',
    ),
    'StopETL' => 
    array (
      'summary' => '停止指定的数据加工任务。',
      'path' => '/etls/{etlName}?action=STOP',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '203170',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls1DZPIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'etlName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据加工名称',
            'type' => 'string',
            'required' => false,
            'example' => 'etl-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '停止数据加工任务',
    ),
    'ListETLs' => 
    array (
      'summary' => '列出project下的数据加工任务。',
      'path' => '/etls',
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
        'abilityTreeCode' => '203166',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls1DZPIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询返回的数据加工任务数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'logstore',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'total' => 
              array (
                'description' => 'Project下总的数据加工数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'count' => 
              array (
                'description' => '当前返回的数据加工数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'results' => 
              array (
                'description' => '数据加工结果列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据加工配置',
                  '$ref' => '#/components/schemas/ETL',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"total\\": 80,\\n  \\"count\\": 10,\\n  \\"results\\": [\\n    {\\n      \\"name\\": \\"etl-20240426\\",\\n      \\"description\\": \\"加工作业\\",\\n      \\"displayName\\": \\"etljob\\",\\n      \\"configuration\\": {\\n        \\"script\\": \\"e_set(\\\\\\"key\\\\\\",\\\\\\"value\\\\\\")\\",\\n        \\"lang\\": \\"SPL\\",\\n        \\"logstore\\": \\"test-logstore\\",\\n        \\"roleArn\\": \\"acs:ram::13234:role/logtarget\\",\\n        \\"accessKeyId\\": \\"\\",\\n        \\"accessKeySecret\\": \\"\\",\\n        \\"fromTime\\": 1714274900,\\n        \\"toTime\\": 1714274970,\\n        \\"sinks\\": [\\n          {\\n            \\"name\\": \\"test-etljob\\",\\n            \\"endpoint\\": \\"\\",\\n            \\"project\\": \\"test-project\\",\\n            \\"logstore\\": \\"test-logstore\\",\\n            \\"datasets\\": [\\n              \\"__UNNAMED__\\"\\n            ],\\n            \\"roleArn\\": \\"acs:ram::13234:role/logtarget\\",\\n            \\"accessKeyId\\": \\"\\",\\n            \\"accessKeySecret\\": \\"\\"\\n          }\\n        ],\\n        \\"parameters\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"createTime\\": 1714274900,\\n      \\"lastModifiedTime\\": 1714274900,\\n      \\"status\\": \\"RUNNING\\",\\n      \\"scheduleId\\": \\"f0eb655e501a8780808d1970ef6d04c4\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出数据加工任务',
    ),
    'GetETL' => 
    array (
      'summary' => '获取指定的数据加工任务配置。',
      'path' => '/etls/{etlName}',
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
        'abilityTreeCode' => '203168',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls1DZPIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'Project名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'etlName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据加工名称',
            'type' => 'string',
            'required' => false,
            'example' => 'etl-123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '数据加工配置',
            '$ref' => '#/components/schemas/ETL',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"etl-20240426\\",\\n  \\"description\\": \\"加工作业\\",\\n  \\"displayName\\": \\"etljob\\",\\n  \\"configuration\\": {\\n    \\"script\\": \\"e_set(\\\\\\"key\\\\\\",\\\\\\"value\\\\\\")\\",\\n    \\"lang\\": \\"SPL\\",\\n    \\"logstore\\": \\"test-logstore\\",\\n    \\"roleArn\\": \\"acs:ram::13234:role/logtarget\\",\\n    \\"accessKeyId\\": \\"\\",\\n    \\"accessKeySecret\\": \\"\\",\\n    \\"fromTime\\": 1714274900,\\n    \\"toTime\\": 1714274970,\\n    \\"sinks\\": [\\n      {\\n        \\"name\\": \\"test-etljob\\",\\n        \\"endpoint\\": \\"\\",\\n        \\"project\\": \\"test-project\\",\\n        \\"logstore\\": \\"test-logstore\\",\\n        \\"datasets\\": [\\n          \\"__UNNAMED__\\"\\n        ],\\n        \\"roleArn\\": \\"acs:ram::13234:role/logtarget\\",\\n        \\"accessKeyId\\": \\"\\",\\n        \\"accessKeySecret\\": \\"\\"\\n      }\\n    ],\\n    \\"parameters\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"createTime\\": 1714274900,\\n  \\"lastModifiedTime\\": 1714274900,\\n  \\"status\\": \\"RUNNING\\",\\n  \\"scheduleId\\": \\"f0eb655e501a8780808d1970ef6d04c4\\"\\n}","type":"json"}]',
      'title' => '获取数据加工任务',
    ),
    'CreateScheduledSQL' => 
    array (
      'summary' => '在指定的Project下创建一个定时SQL任务。',
      'path' => '/scheduledsqls',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '209629',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsEPUWT1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '定时SQL任务配置',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'description' => '定时SQL任务唯一标识',
                'type' => 'string',
                'required' => true,
                'example' => 'sql-123456789-123456',
              ),
              'displayName' => 
              array (
                'description' => '任务显示名',
                'type' => 'string',
                'required' => true,
                'example' => 'ali-test-scheduled-sql',
              ),
              'description' => 
              array (
                'description' => '任务描述',
                'type' => 'string',
                'required' => false,
                'example' => '创建一个定时SQL任务',
              ),
              'schedule' => 
              array (
                'description' => '任务调度配置',
                'required' => true,
                '$ref' => '#/components/schemas/Schedule',
              ),
              'configuration' => 
              array (
                'description' => '任务配置',
                'required' => true,
                '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
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
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthorizationRequired',
            'errorMessage' => 'Authorization Required',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建定时SQL任务',
    ),
    'DeleteScheduledSQL' => 
    array (
      'summary' => '删除指定的定时SQL任务。',
      'path' => '/scheduledsqls/{scheduledSQLName}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '209792',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsEPUWT1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'scheduledSQLName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => false,
            'example' => 'sql-123456789-123456
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除定时SQL任务',
    ),
    'UpdateScheduledSQL' => 
    array (
      'summary' => '更新指定的定时SQL任务。',
      'path' => '/scheduledsqls/{scheduledSQLName}',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '209793',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsEPUWT1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'scheduledSQLName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => true,
            'example' => 'sql-123456789-123456',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '定时SQL任务配置',
            'type' => 'object',
            'properties' => 
            array (
              'displayName' => 
              array (
                'description' => '任务显示名',
                'type' => 'string',
                'required' => true,
                'example' => 'ali-test-scheduled-sql',
              ),
              'description' => 
              array (
                'description' => '任务描述',
                'type' => 'string',
                'required' => false,
                'example' => '更新定时SQL任务
',
              ),
              'schedule' => 
              array (
                'description' => '任务调度配置',
                'required' => true,
                '$ref' => '#/components/schemas/Schedule',
              ),
              'configuration' => 
              array (
                'description' => '任务配置',
                'required' => true,
                '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
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
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthorizationRequired',
            'errorMessage' => 'Authorization Required',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新定时SQL任务',
    ),
    'EnableScheduledSQL' => 
    array (
      'summary' => '启用定时SQL任务',
      'path' => '/scheduledsqls/{scheduledSQLName}?action=enable',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '219089',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsEPUWT1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'scheduledSQLName',
          'in' => 'path',
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
          'headers' => 
          array (
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
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
      'responseDemo' => '',
    ),
    'DisableScheduledSQL' => 
    array (
      'summary' => '禁用定时SQL任务',
      'path' => '/scheduledsqls/{scheduledSQLName}?action=disable',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '219106',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsEPUWT1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'scheduledSQLName',
          'in' => 'path',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
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
      'responseDemo' => '',
    ),
    'ListScheduledSQLs' => 
    array (
      'summary' => '列出指定Project下的定时SQL任务。',
      'path' => '/scheduledsqls',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'abilityTreeCode' => '209929',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsEPUWT1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行，默认值为0。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束行，默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'logstore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'logstore名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-logstore',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'total' => 
              array (
                'description' => 'Project下总的定时SQL任务数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'count' => 
              array (
                'description' => '当前返回的定时SQL任务数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'results' => 
              array (
                'description' => '定时SQL任务列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '定时SQL任务配置',
                  '$ref' => '#/components/schemas/ScheduledSQL',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"total\\": 80,\\n  \\"count\\": 10,\\n  \\"results\\": [\\n    {\\n      \\"description\\": \\"schedule-sql-test\\",\\n      \\"displayName\\": \\"scheduleSqlTest\\",\\n      \\"name\\": \\"sql-1714123463-225223\\",\\n      \\"schedule\\": {\\n        \\"type\\": \\"FixedRate\\",\\n        \\"cronExpression\\": \\"0/5 * * * *\\",\\n        \\"runImmediately\\": false,\\n        \\"timeZone\\": \\"+0800\\",\\n        \\"delay\\": 4,\\n        \\"interval\\": \\"60s\\"\\n      },\\n      \\"configuration\\": {\\n        \\"script\\": \\"* | select *\\",\\n        \\"sqlType\\": \\"searchQuery\\",\\n        \\"destEndpoint\\": \\"cn-hangzhou-intranet.log.aliyuncs.com\\",\\n        \\"destProject\\": \\"project-demo\\",\\n        \\"sourceLogstore\\": \\"source-logstore-demo\\",\\n        \\"destLogstore\\": \\"dest-logstore-demo\\",\\n        \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogetlrole\\",\\n        \\"destRoleArn\\": \\"acs:ram::123456789:role/aliyunlogetlrole\\",\\n        \\"fromTimeExpr\\": \\"@m-1m\\",\\n        \\"toTimeExpr\\": \\"@m\\",\\n        \\"maxRunTimeInSeconds\\": 600,\\n        \\"resourcePool\\": \\"enhanced\\",\\n        \\"maxRetries\\": 20,\\n        \\"fromTime\\": 1712592000,\\n        \\"toTime\\": 0,\\n        \\"dataFormat\\": \\"log2log\\",\\n        \\"parameters\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"createTime\\": 1714123644,\\n      \\"lastModifiedTime\\": 1714123644,\\n      \\"scheduleId\\": \\"e73f43732852064ad5d091914e39342f\\",\\n      \\"status\\": \\"ENABLED\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出定时SQL任务',
    ),
    'GetScheduledSQL' => 
    array (
      'summary' => '获取指定的定时SQL任务。',
      'path' => '/scheduledsqls/{scheduledSQLName}',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '209801',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsEPUWT1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project
',
          ),
        ),
        1 => 
        array (
          'name' => 'scheduledSQLName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已存在的唯一任务名称',
            'type' => 'string',
            'required' => false,
            'example' => 'sql-123456789-123456
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '定时SQL任务配置',
            '$ref' => '#/components/schemas/ScheduledSQL',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'AuthorizationRequired',
            'errorMessage' => 'Authorization Required',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"description\\": \\"schedule-sql-test\\",\\n  \\"displayName\\": \\"scheduleSqlTest\\",\\n  \\"name\\": \\"sql-1714123463-225223\\",\\n  \\"schedule\\": {\\n    \\"type\\": \\"FixedRate\\",\\n    \\"cronExpression\\": \\"0/5 * * * *\\",\\n    \\"runImmediately\\": false,\\n    \\"timeZone\\": \\"+0800\\",\\n    \\"delay\\": 4,\\n    \\"interval\\": \\"60s\\"\\n  },\\n  \\"configuration\\": {\\n    \\"script\\": \\"* | select *\\",\\n    \\"sqlType\\": \\"searchQuery\\",\\n    \\"destEndpoint\\": \\"cn-hangzhou-intranet.log.aliyuncs.com\\",\\n    \\"destProject\\": \\"project-demo\\",\\n    \\"sourceLogstore\\": \\"source-logstore-demo\\",\\n    \\"destLogstore\\": \\"dest-logstore-demo\\",\\n    \\"roleArn\\": \\"acs:ram::123456789:role/aliyunlogetlrole\\",\\n    \\"destRoleArn\\": \\"acs:ram::123456789:role/aliyunlogetlrole\\",\\n    \\"fromTimeExpr\\": \\"@m-1m\\",\\n    \\"toTimeExpr\\": \\"@m\\",\\n    \\"maxRunTimeInSeconds\\": 600,\\n    \\"resourcePool\\": \\"enhanced\\",\\n    \\"maxRetries\\": 20,\\n    \\"fromTime\\": 1712592000,\\n    \\"toTime\\": 0,\\n    \\"dataFormat\\": \\"log2log\\",\\n    \\"parameters\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"createTime\\": 1714123644,\\n  \\"lastModifiedTime\\": 1714123644,\\n  \\"scheduleId\\": \\"e73f43732852064ad5d091914e39342f\\",\\n  \\"status\\": \\"ENABLED\\"\\n}","type":"json"}]',
      'title' => '获取定时SQL任务',
    ),
    'CreateAnnotationLabel' => 
    array (
      'summary' => '创建标签表。',
      'path' => '/ml/annotationlabel',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求标签表结构体。',
            'required' => false,
            '$ref' => '#/components/schemas/MLLabelParam',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建标签',
    ),
    'PutAnnotationData' => 
    array (
      'summary' => '向数据集中存入数据。',
      'path' => '/ml/annotationdataset/{datasetId}/annotationdata',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'datasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
          ),
        ),
        1 => 
        array (
          'name' => 'annotationdataId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据的唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => '2156d560fc7c01420542df92cd6365ds',
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
              'rawLog' => 
              array (
                'description' => '原始日志数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志数据为 key: value的 map形式',
                  'type' => 'object',
                  'required' => false,
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                    'example' => '[
        {
            "time": "1694761550",
            "cnt": "45416",
            "cnt2": "12454"
        }
]',
                    'description' => '原始日志数据key value都为String',
                  ),
                ),
                'required' => false,
              ),
              'mlDataParam' => 
              array (
                'description' => '数据的结构体',
                'required' => false,
                '$ref' => '#/components/schemas/MLDataParam',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '存储数据',
    ),
    'CreateAnnotationDataSet' => 
    array (
      'summary' => '创建数据集。',
      'path' => '/ml/annotationdataset',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求数据集结构体参数',
            'required' => false,
            '$ref' => '#/components/schemas/MLDataSetParam',
          ),
        ),
        1 => 
        array (
          'name' => 'datasetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建数据集',
    ),
    'DeleteAnnotationLabel' => 
    array (
      'summary' => '删除标签表。',
      'path' => '/ml/annotationlabel/{labelId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'labelId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '标签ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sls_builtin_4e0aba6d9664073513e9954fb57bd799',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除标签',
      'description' => '这里删除标签只能删除非内置标签',
    ),
    'DeleteAnnotationData' => 
    array (
      'summary' => '删除数据集中的数据。',
      'path' => '/ml/annotationdataset/{datasetId}/annotationdata/{annotationdataId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'datasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
          ),
        ),
        1 => 
        array (
          'name' => 'annotationdataId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据的唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => '2156d560fc7c01420542df92cd6365ds',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除数据',
    ),
    'DeleteAnnotationDataSet' => 
    array (
      'summary' => '删除数据集。',
      'path' => '/ml/annotationdataset/{datasetId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'datasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除数据集',
      'description' => '删除数据集的前提是数据集下不存在数据结构',
    ),
    'UpdateAnnotationLabel' => 
    array (
      'summary' => '更新标签表。',
      'path' => '/ml/annotationlabel',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求标签表结构体。',
            'required' => false,
            '$ref' => '#/components/schemas/MLLabelParam',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新标签',
      'description' => '更新标签集，只能更新标签集中标签的命名，其他无法更新',
    ),
    'UpdateAnnotationDataSet' => 
    array (
      'summary' => '更新数据集。',
      'path' => '/ml/annotationdataset/{datasetId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'datasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求数据集结构体。',
            'required' => false,
            '$ref' => '#/components/schemas/MLDataSetParam',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新数据集',
    ),
    'GetAnnotationLabel' => 
    array (
      'summary' => '通过labelId拿到某个标签表。',
      'path' => '/ml/annotationlabel/{labelId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'labelId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '标签ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sls_builtin_4e0aba6d9664073513e9954fb57bd799',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '标签表结构体。',
            '$ref' => '#/components/schemas/MLLabelParam',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"labelId\\": \\"abbd488f6dd42d294495fb780858e83d\\",\\n  \\"name\\": \\"标签表\\",\\n  \\"description\\": \\"默认表\\",\\n  \\"type\\": \\"xxx\\",\\n  \\"settings\\": [\\n    {\\n      \\"mode\\": \\"builtin\\",\\n      \\"type\\": \\"Trace.RCA\\",\\n      \\"config\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"version\\": \\"0.01\\"\\n    }\\n  ],\\n  \\"createTime\\": 1695090077,\\n  \\"lastModifyTime\\": 1695090077\\n}","type":"json"}]',
      'title' => '获取标签',
    ),
    'ListAnnotationLabels' => 
    array (
      'summary' => '取得标签表的列表。',
      'path' => '/ml/annotationlabel',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置的每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '响应返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'data' => 
              array (
                'description' => '返回的标签表结构体列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的标签表结构体。',
                  '$ref' => '#/components/schemas/MLLabelParam',
                ),
              ),
              'total' => 
              array (
                'description' => '符合查询条件的数据总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": [\\n    {\\n      \\"labelId\\": \\"abbd488f6dd42d294495fb780858e83d\\",\\n      \\"name\\": \\"标签表\\",\\n      \\"description\\": \\"默认表\\",\\n      \\"type\\": \\"xxx\\",\\n      \\"settings\\": [\\n        {\\n          \\"mode\\": \\"builtin\\",\\n          \\"type\\": \\"Trace.RCA\\",\\n          \\"config\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"version\\": \\"0.01\\"\\n        }\\n      ],\\n      \\"createTime\\": 1695090077,\\n      \\"lastModifyTime\\": 1695090077\\n    }\\n  ],\\n  \\"total\\": 20\\n}","type":"json"}]',
      'title' => '获取标签列表',
    ),
    'GetAnnotationData' => 
    array (
      'summary' => '通过数据唯一标识得到数据集中的数据结构体。',
      'path' => '/ml/annotationdataset/{datasetId}/annotationdata/{annotationdataId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'datasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
          ),
        ),
        1 => 
        array (
          'name' => 'annotationdataId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据的唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => '2156d560fc7c01420542df92cd6365ds',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '数据的结构体',
            '$ref' => '#/components/schemas/MLDataParam',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"annotationdataId\\": \\"dc74b0f569126bb310e1ba6454c351ac\\",\\n  \\"dataHash\\": \\"59db060bd89468245d76416a68a510ac\\",\\n  \\"datasetId\\": \\"a9bd488f6dd42d294495fb780858e83d\\",\\n  \\"value\\": \\"xxx/xxx/xxx/\\",\\n  \\"valueType\\": \\"oss\\",\\n  \\"config\\": {\\n    \\"key\\": \\"simulator-nginx-demo\\"\\n  },\\n  \\"annotations\\": {\\n    \\"key\\": {\\n      \\"annotatedBy\\": \\"xxxx\\",\\n      \\"updateTime\\": 1694761550,\\n      \\"results\\": [\\n        {\\n          \\"key\\": \\"SPIKE_UP_TYPE\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"predictions\\": {\\n    \\"key\\": {\\n      \\"annotatedBy\\": \\"xxx\\",\\n      \\"updateTime\\": 1694761550,\\n      \\"results\\": [\\n        {\\n          \\"key\\": \\"SPIKE_UP_TYPE\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"createTime\\": 1695094335,\\n  \\"lastModifyTime\\": 1695094335\\n}","type":"json"}]',
      'title' => '获取数据',
    ),
    'ListAnnotationData' => 
    array (
      'summary' => '列出数据集中的所有数据。',
      'path' => '/ml/annotationdataset/{datasetId}/annotationdata',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始行',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置的每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        2 => 
        array (
          'name' => 'datasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
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
              'data' => 
              array (
                'description' => '返回的数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据结构体。',
                  '$ref' => '#/components/schemas/MLDataParam',
                ),
              ),
              'total' => 
              array (
                'description' => ' 总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": [\\n    {\\n      \\"annotationdataId\\": \\"dc74b0f569126bb310e1ba6454c351ac\\",\\n      \\"dataHash\\": \\"59db060bd89468245d76416a68a510ac\\",\\n      \\"datasetId\\": \\"a9bd488f6dd42d294495fb780858e83d\\",\\n      \\"value\\": \\"xxx/xxx/xxx/\\",\\n      \\"valueType\\": \\"oss\\",\\n      \\"config\\": {\\n        \\"key\\": \\"simulator-nginx-demo\\"\\n      },\\n      \\"annotations\\": {\\n        \\"key\\": {\\n          \\"annotatedBy\\": \\"xxxx\\",\\n          \\"updateTime\\": 1694761550,\\n          \\"results\\": [\\n            {\\n              \\"key\\": \\"SPIKE_UP_TYPE\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"predictions\\": {\\n        \\"key\\": {\\n          \\"annotatedBy\\": \\"xxx\\",\\n          \\"updateTime\\": 1694761550,\\n          \\"results\\": [\\n            {\\n              \\"key\\": \\"SPIKE_UP_TYPE\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"createTime\\": 1695094335,\\n      \\"lastModifyTime\\": 1695094335\\n    }\\n  ],\\n  \\"total\\": 20\\n}","type":"json"}]',
      'title' => '获取数据列表',
    ),
    'GetAnnotationDataSet' => 
    array (
      'summary' => '取得数据集信息。',
      'path' => '/ml/annotationdataset/{datasetId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'datasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'cb8cc4eb51a85e823471cdb368fae9be',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '数据集结构体',
            '$ref' => '#/components/schemas/MLDataSetParam',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"datasetId\\": \\"d9bd488f6dd42d294495fb780858e83d\\",\\n  \\"name\\": \\"sls_builtin_dataset_metric.shapeclassification.anomalydetection\\",\\n  \\"description\\": \\"数据集A\\",\\n  \\"dataType\\": \\"Metric\\",\\n  \\"labelId\\": \\"a191ae4ca615b0ccb93c211fc8a998af\\",\\n  \\"createTime\\": 1695090077,\\n  \\"lastModifyTime\\": 1695090077,\\n  \\"createBy\\": \\"sls-console\\",\\n  \\"settingType\\": \\"Metric.ShapeClassification.AnomalyDetection\\"\\n}","type":"json"}]',
      'title' => '获取数据集',
    ),
    'ListAnnotationDataSets' => 
    array (
      'summary' => '取得数据集结构体列表。',
      'path' => '/ml/annotationdataset',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始行。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置的每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'data' => 
              array (
                'description' => '返回的数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据集结构体',
                  '$ref' => '#/components/schemas/MLDataSetParam',
                ),
              ),
              'total' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": [\\n    {\\n      \\"datasetId\\": \\"d9bd488f6dd42d294495fb780858e83d\\",\\n      \\"name\\": \\"sls_builtin_dataset_metric.shapeclassification.anomalydetection\\",\\n      \\"description\\": \\"数据集A\\",\\n      \\"dataType\\": \\"Metric\\",\\n      \\"labelId\\": \\"a191ae4ca615b0ccb93c211fc8a998af\\",\\n      \\"createTime\\": 1695090077,\\n      \\"lastModifyTime\\": 1695090077,\\n      \\"createBy\\": \\"sls-console\\",\\n      \\"settingType\\": \\"Metric.ShapeClassification.AnomalyDetection\\"\\n    }\\n  ],\\n  \\"total\\": 20\\n}","type":"json"}]',
      'title' => '获取数据集列表',
    ),
    'GetMLServiceResults' => 
    array (
      'summary' => '在阿里云日志服务平台上，提供了基础数据（Log、Metric、Trace）的智能分析能力。用户调用相关模型，可以直接得到模型的分析结果。目前主要涉及：日志数据的NER任务、时间序列数据的异常检测、高延时链路数据的Span根因定位。',
      'path' => '/ml/service/{serviceName}/analysis',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'abilityTreeCode' => '200786',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls4A0DBM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'serviceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '服务名。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'sls_builtin_service_trace_rca' => '高延时trace请求链路分析的服务名',
              'sls_builtin_service_log_struct' => 'LogNER的服务名',
              'sls_builtin_service_metric_anomaly' => '单维度时间序列异常检测的服务名',
            ),
            'example' => 'sls_builtin_service_log_struct',
          ),
        ),
        1 => 
        array (
          'name' => 'allowBuiltin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '+ true 表示请求允许使用系统内置的服务
+ false 表示请求不允许使用系统内置的服务',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '允许使用系统内置的服务',
              'false' => '不允许使用系统内置的服务名',
            ),
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'version',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求结构体。',
            'required' => false,
            'enumValueTitles' => 
            array (
              'others' => '根据不同的serviceName有不一样的说明',
            ),
            '$ref' => '#/components/schemas/MLServiceAnalysisParam',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '返回的结构体',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'description' => '任务的状态',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => '200',
                  'description' => '默认为空，表示返回所有状态的任务，支持success、fail和running状态。',
                  'enumValueTitles' => 
                  array (
                    '无' => '无',
                  ),
                ),
                'enumValueTitles' => 
                array (
                  '无' => '无',
                ),
              ),
              'data' => 
              array (
                'description' => '返回的数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据集结构体',
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                    'example' => '{\'marker\': \'\'}',
                    'description' => '返回结果。',
                  ),
                ),
              ),
            ),
            'enumValueTitles' => 
            array (
              '无' => '无',
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": {\\n    \\"key\\": \\"200\\"\\n  },\\n  \\"data\\": [\\n    {\\n      \\"key\\": \\"{\'marker\': \'\'}\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取指定场景任务的算法分析结果',
      'description' => '需要具备的基本权限如下

```
{
    "Version": "1",
    "Statement": [
        {
            "Action": [
                "log:Get*"
            ],
            "Resource": [
                "acs:log:*:*:/ml/service/sls_builtin_service_log_struct/",
                "acs:log:*:*:/ml/service/sls_builtin_service_metric_anomaly/",
                "acs:log:*:*:/ml/service/sls_builtin_service_trace_rca/"
            ],
            "Effect": "Allow"
        }
    ]
}
```',
      'requestParamsDescription' => '在不同的情况，对于请求中的参数会不一样，具体如下：
## 日志内容实体识别（sls_builtin_service_log_struct）
body.parameter相关的内容
```
{
  "is_struct": "true",
  "use_gpu": "true/false",
  "max_fields": "1"
}
```
+ is_struct 为 true 时，表示日志格式为JSON结构。目前只支持设置为 true
+ use_gpu 表示是否使用 gpu 资源
+ max_fields 表示当日志格式为JSON结构时，最多分析其中的几个字段，默认只分析一个字段

body.input相关的内容
```
[
  {
    "{column_name}": "{column_value}"
  }
]
```
输入的内容是一个是JSON结构数组，其中
+ column_name 表示JSON结构的日志的某个字段名称
+ column_value 表示JSON结构的日志的某个字段的值

## 时间序列异常检测（sls_builtin_service_metric_anomaly）
body.parameter的相关内容
```
{
  "isOrdered": "true/false",
  "keys": "[]",
  "timeColumnName": "",
  "analysisColumnNames": "[]",
  "interval": "-1"
}
```
+ isOrdered 表示输入的数据是否是有序的，如果输入的序列是按照时间维度从小到大，升序排列的，设置为true，否则设置为false
+ interval 表示时间序列的间隔大小，按照秒来描述。比如：序列是每分钟一个点，则设置为60；如果不确定序列的间隔，则设置为 -1
+ timeColumnName 表示输入的序列中，时间维度的名称
+ analysisColumnNames 表示输入的序列中，带分析的数值特征维度的名称，使用数组来表示，且需要将这个数组序列化成字符串
+ keys 表示输入的数据的各列的名称，使用数组表示，且需要将这个数组序列化成字符串

body.input的相关内容
```
[
  {
    "{column_name}": "{column_value}"
  }
]
```
输入的内容是一个是数组，其中
+ column_name 表示序列中某个字段的名称
+ column_value 表示序列中某个字段的值的内容。当 {column_name} 等于 {timeColumnName} 时，对应的值表示的是时间大小，使用 unixtime 时间戳来表示，单位是秒

## 高延时链路数据检测（sls_builtin_service_trace_rca）
body.parameter的相关内容
```
{
  "project": "",
  "logstore": "",
  "endpoint": "",
  "role_arn": ""
}
```
+ project 表示待分析的Trace数据存储在SLS中的Project的名称
+ logstore 表示待分析的Trace数据存储在SLS中的Logstore的名称
+ endpoint 表示project所在地域的endpoint信息，这里必须使用公网域名，内网域名无法访问
+ role_arn 表示已经对该资源进行授权的角色信息，这里务必使用 ETLRole 或者 AuditRole 的arn信息

body.input的相关内容
```
[
  {
    "service": "",
    "name": "",
    "from_ts_sec": "",
    "to_ts_sec": "",
    "slo_ts_micro": "",
    "batch_id": "",
    "trace_ids": "[]"
  }
]
```
输入的内容是一个是数组，切输入的数组的长度是1，其中对应的参数的含义解释如下：
+ service 表示某个或者某一批待诊断的TraceID的服务名称，可以从logstore中获得
+ name 表示某个或者某一批待诊断的TraceID的服务名称，可以从logstore中获得
+ from_ts_sec 表示待分析的开始时间戳，单位是秒
+ to_ts_sec 表示待分析的结束时间戳，单位是秒
+ batch_id 表示当前待分析的一批TraceID的名称
+ trace_ids 表示当前请求中对应的trace_id的列表，使用JSON序列化成字符串',
      'responseParamsDescription' => '在不同的情况，对于请求的返回值会不一样，具体如下：
## 日志内容实体识别（sls_builtin_service_log_struct）
data相关的内容
```
[
  {
    "{column_name}": "{column_value}"
  }
]
```
输出内容中每一个JSON结构与输入的JSON结构日志相对应，其中
+ column_name 表示JSON结构的日志的被分析了的某个字段名称，最多有 max_fields 个字段被分析
+ column_value 表示JSON结构的日志的被分析了的某个字段的值，字段值中的 NER 结果被标签 <ml_ner_${ner_type}></ml_ner_${ner_type}> 包裹，其中 ${ner_type} 是具体的 NER 类型

## 时间序列异常检测（sls_builtin_service_metric_anomaly）
data的相关内容
```
[
  {
    "start": "",
    "end": "",
    "label": ""
  }
]
```
+ start 表示检测出来的异常区间的开始时间
+ end 表示检测出来的异常区间的结束时间
+ label 表示检测出来的当前区间的异常类型
    + SPIKE_UP_TYPE
    + SPIKE_DOWN_TYPE
    + TREND_UP_TYPE
    + TREND_DOWN_TYPE
    + MEANSHIFT_UPWARD_TYPE
    + MEANSHIFT_DOWNWARD_TYPE

## 高延时链路数据检测（sls_builtin_service_trace_rca）
data的相关内容
```
[
  {
    "traceID": "",
    "service": "",
    "name": "",
    "rootCauses": "[{}]"
  }
]
```
+ traceID 表示待检测的traceID信息
+ service 表示当前这个Trace的根节点的service名称
+ name 表示当前这个Trace的根节点的name名称
+ rootCauses 表示当前这个高延时请求的Trace中，导致高延时的span的列表信息，使用序列化后的字符串来表示。该字段的值反序列化后的结构如下：
```
[
  {
    "spanID": "",
    "service": "",
    "name": "",
    "host": "xxxx",
    "predicateDuration": 10
  }
]
```',
    ),
    'QueryMLServiceResults' => 
    array (
      'summary' => 'queryMLServiceResults',
      'path' => '/ml/v2/service/{serviceName}/analysis',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '193770',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls4A0DBM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'serviceName',
          'in' => 'path',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'allowBuiltin',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            '$ref' => '#/components/schemas/MLServiceAnalysisParam',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                ),
              ),
              'data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Sls::2020-12-30::GetMLServiceResults',
        ),
        'returnType' => 'synchronous',
      ),
    ),
    'TagResources' => 
    array (
      'summary' => '为Project绑定标签，每次调用API只能为一个Project绑定标签，可一次绑定多个标签。',
      'path' => '/tag',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
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
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'resourceType' => 
              array (
                'title' => '资源的类型。目前取值范围：project。',
                'description' => '资源的类型。
- project：项目。
- logstore：日志库。
- dashboard：仪表盘。
- machinegroup：机器组。
- logtailconfig：logtail配置。',
                'type' => 'string',
                'required' => true,
                'example' => 'project',
              ),
              'resourceId' => 
              array (
                'title' => '资源的 id 列表，可以一次为多个同类型资源打上相同的标签。',
                'description' => '资源的id列表，只允许填入1个资源，只允许为单个资源绑定标签。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '资源的 id。',
                  'description' => '资源ID。以日志库为例，projectName代表项目名称，#为拼接字符，logstore为日志库名称。
- project：projectName
- logstore：projectName#logstore
- dashboard：projectName#dashboard
- machinegroup：projectName#machinegroup
- logtailconfig：projectName#logtailconfig',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ali-test-project',
                ),
                'required' => true,
              ),
              'tags' => 
              array (
                'title' => '标签列表。',
                'description' => '标签列表。一次最多支持20个标签键值对。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'title' => '标签的 key。',
                      'description' => '标签的键。格式要求如下：

- 长度在` [1,128] `之间
- 不允许包含` "http://"`或者` "https://" `字样
- 不允许以 `"acs:" `或者` "aliyun" `开头',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'key1',
                    ),
                    'value' => 
                    array (
                      'title' => '标签的 value。',
                      'description' => '标签的值。格式要求如下：

- 长度在` [1,128] `之间
- 不允许包含` "http://" `或者` "https://" `字样',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'value1',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '绑定标签',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。
- 鉴权规则，请参见[鉴权概览](~~29049~~)。目前支持的资源包括project、logstore、dashboard、machineGroup和logtailConfig。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:TagResources`  | <br> 不同类型资源对应不同格式。<br> -`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName} `<br> -`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}`|',
    ),
    'UntagResources' => 
    array (
      'summary' => '为指定的资源解绑标签，现仅支持日志项目的标签，可以一次性为单个日志项目解绑多个或者全部标签。',
      'path' => '/untag',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'resourceType' => 
              array (
                'description' => '资源的类型。
- project：项目。
- logstore：日志库。
- dashboard：仪表盘。
- machinegroup：机器组。
- logtailconfig：logtail配置。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'project' => 'project',
                ),
                'example' => 'project',
              ),
              'resourceId' => 
              array (
                'description' => '资源的ID列表，一次只允许解绑单个资源的标签，只允许填入单个资源ID。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源ID。以日志库为例，projectName代表项目名称，#为拼接字符，logstore为日志库名称。
- project：projectName
- logstore：projectName#logstore
- dashboard：projectName#dashboard
- machinegroup：projectName#machinegroup
- logtailconfig：projectName#logtailconfig',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ali-test-project',
                ),
                'required' => true,
                'example' => 'ali-test-project',
              ),
              'all' => 
              array (
                'description' => '是否解绑所有标签，默认为false。

- false：仅解绑tags列表中的标签项。
- true：解绑资源上绑定的所有标签。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'tags' => 
              array (
                'description' => '标签键的列表。当all为false时，仅解绑列表中的标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签的键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '解绑标签',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。- 鉴权规则，请参见[鉴权概览](~~29049~~)。目前支持的资源包括project、logstore、dashboard、machineGroup和logtailConfig。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:UntagResources`  | <br> 不同类型资源对应不同格式。<br> -`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName} `<br> -`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}` |',
    ),
    'ListTagResources' => 
    array (
      'summary' => '列出所查询资源的标签列表，可以一次查询多个同类型的资源，也可以按标签键值过滤查询。',
      'path' => '/tags',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'resourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型。目前取值范围：project。',
            'description' => '资源的类型。
- project：项目。
- logstore：日志库。
- dashboard：仪表盘。
- machinegroup：机器组。
- logtailconfig：logtail配置。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'project' => 'project',
            ),
            'example' => 'project',
          ),
        ),
        1 => 
        array (
          'name' => 'resourceId',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '查询的资源的 id 列表。resource id 与 tags 应至少存在一个。',
            'description' => '查询的资源ID列表。resourceId与tags应至少存在一个。',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'resource id。',
              'description' => '资源ID。以日志库为例，projectName代表项目名称，#为拼接字符，logstore为日志库名称。
- project：projectName
- logstore：projectName#logstore
- dashboard：projectName#dashboard
- machinegroup：projectName#machinegroup
- logtailconfig：projectName#logtailconfig',
              'type' => 'string',
              'required' => false,
              'example' => 'ali-test-project',
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '精确查找时过滤的标签键值对。resource id 与 tags 应至少存在一个。',
            'description' => '精确查询时，用于过滤的标签键值对。resourceId与tags应至少配置一个。

最多设置20个tag。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用于过滤查询的标签键值对。',
              'type' => 'object',
              'properties' => 
              array (
                'key' => 
                array (
                  'title' => '精确过滤的标签的键。',
                  'description' => '查询时用于过滤标签的键，例如key为` "test-key" `时，只会返回绑定了标签键为` "test-key" `的资源。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'key1',
                ),
                'value' => 
                array (
                  'title' => '精确过滤的标签的值。',
                  'description' => '查询时用于过滤标签的值，当值为null时表示只根据key过滤。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'nextToken' => 
              array (
                'title' => '下一个查询开始Token。',
                'description' => '下一个查询开始Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'tagResources' => 
              array (
                'title' => '返回的标签列表。',
                'description' => '返回的标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '标签。',
                  'description' => '绑定了标签的资源。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'resourceId' => 
                    array (
                      'title' => '资源 id。',
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'ali-test-project',
                    ),
                    'resourceType' => 
                    array (
                      'title' => '资源类型。',
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'project',
                    ),
                    'tagKey' => 
                    array (
                      'title' => '标签的键。',
                      'description' => '标签的键。',
                      'type' => 'string',
                      'example' => 'key1',
                    ),
                    'tagValue' => 
                    array (
                      'title' => '标签的值。',
                      'description' => '标签的值。',
                      'type' => 'string',
                      'example' => 'value1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"nextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"tagResources\\": [\\n    {\\n      \\"resourceId\\": \\"ali-test-project\\",\\n      \\"resourceType\\": \\"project\\",\\n      \\"tagKey\\": \\"key1\\",\\n      \\"tagValue\\": \\"value1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '列出资源标签',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。
- 鉴权规则，请参见[鉴权概览](~~29049~~)。目前支持的资源包括project、logstore、dashboard、machineGroup和logtailConfig。
### 鉴权资源
下表列出了API对应的授权信息。您可以在RAM权限策略语句的Action元素中添加该信息，用于为RAM用户或RAM角色授予调用此API的权限。
|动作（Action）  | 授权策略中的资源描述方式（Resource）  |
| :------------ | :------------ |
| `log:ListTagResources`  | <br> 不同类型资源对应不同格式。<br> -`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName} `<br> -`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}` <br> -`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}` |',
    ),
    'PutProjectPolicy' => 
    array (
      'summary' => '为项目Project创建一个授权策略（Policy）。',
      'path' => '/policy',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
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
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '请求参数，即授权策略。',
            'type' => 'string',
            'required' => false,
            'example' => '{ 	"Version": "1", 	"Statement": [{ 		"Action": ["log:PostLogStoreLogs"], 		"Resource": "acs:log:*:*:project/exampleproject/*", 		"Effect": "Deny", 		"Condition": { 			"StringNotLike": { 				"acs:SourceVpc": ["vpc-*"] 			} 		} 	}] }',
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'host',
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建Project授权策略',
      'description' => '### 接口说明
- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- Project Policy是阿里云SLS推出的Project授权策略，您可以通过Project Policy授权其他用户访问您指定的SLS资源。

    - 通过策略语法的方式配置Project Policy前，您需要先了解SLS Action、Resource以及Condition分类信息。更多信息，请参见[访问控制RAM](~~128139~~)。

    - 配置Project Policy时，如果授权用户选择了匿名账号（\\*），且不包含Condition的情况下，Project Policy对Project Owner以外的所有用户生效。如果授权用户选择了匿名账号（*），且包含Condition的情况下，Project Policy对包含Project Owner在内的所有用户生效。

    - 您可以添加多条Project Policy，但所有Project Policy的大小不允许超过16 KB。',
    ),
    'DeleteProjectPolicy' => 
    array (
      'summary' => '删除Project的授权策略（Policy）。',
      'path' => '/policy',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除Project授权策略',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。',
    ),
    'GetProjectPolicy' => 
    array (
      'summary' => '查询Project的授权策略（Policy）。',
      'path' => '/policy',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'Project名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '授权策略。',
            'type' => 'string',
            'example' => '{ 	"Version": "1", 	"Statement": [{ 		"Action": ["log:PostLogStoreLogs"], 		"Resource": "acs:log:*:*:project/exampleproject/*", 		"Effect": "Deny", 		"Condition": { 			"StringNotLike": { 				"acs:SourceVpc": ["vpc-*"] 			} 		} 	}] }',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"\\"{ \\\\t\\\\\\"Version\\\\\\": \\\\\\"1\\\\\\", \\\\t\\\\\\"Statement\\\\\\": [{ \\\\t\\\\t\\\\\\"Action\\\\\\": [\\\\\\"log:PostLogStoreLogs\\\\\\"], \\\\t\\\\t\\\\\\"Resource\\\\\\": \\\\\\"acs:log:*:*:project/exampleproject/*\\\\\\", \\\\t\\\\t\\\\\\"Effect\\\\\\": \\\\\\"Deny\\\\\\", \\\\t\\\\t\\\\\\"Condition\\\\\\": { \\\\t\\\\t\\\\t\\\\\\"StringNotLike\\\\\\": { \\\\t\\\\t\\\\t\\\\t\\\\\\"acs:SourceVpc\\\\\\": [\\\\\\"vpc-*\\\\\\"] \\\\t\\\\t\\\\t} \\\\t\\\\t} \\\\t}] }\\"","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询Project授权策略',
      'description' => '### 接口说明

- 请求语法中Host由Project名称和日志服务Endpoint构成，您需要在Host中指定Project。
- 已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。
- 已明确您查询日志所属的Project名称、所属地域等。如何查询，请参见[管理Project](~~48984~~)。',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '修改Project归属的资源组。',
      'path' => '/resourcegroup',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '158383',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsKS6FGY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'title' => '资源所属的project',
            'description' => '资源所属的Project名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ali-test-project',
          ),
        ),
        1 => 
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
              'resourceType' => 
              array (
                'description' => '资源的类型。只支持PROJECT，固定填写为PROJECT。',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT',
                'default' => 'PROJECT',
              ),
              'resourceId' => 
              array (
                'description' => 'Project名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'ali-test-project',
              ),
              'resourceGroupId' => 
              array (
                'description' => '[资源组ID](~~151181~~)',
                'type' => 'string',
                'required' => true,
                'example' => 'rg-ae******ey',
              ),
            ),
            'required' => false,
            'example' => 'ali-test-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改资源组',
    ),
    'UpsertCollectionPolicy' => 
    array (
      'summary' => '创建云产品日志采集的采集规则，从而实现云产品日志的自动化采集。',
      'path' => '/collectionpolicy',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '192469',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls9NGCVR',
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
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'policyName' => 
              array (
                'description' => '规则名称，最短3个字符，最长63个字符，必须以字母开头。',
                'type' => 'string',
                'required' => true,
                'example' => 'your_log_policy',
                'maxLength' => 63,
                'minLength' => 3,
              ),
              'productCode' => 
              array (
                'description' => '产品编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'oss',
              ),
              'dataCode' => 
              array (
                'description' => '日志类型编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'access_log',
              ),
              'enabled' => 
              array (
                'description' => '是否开启。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
                'default' => 'false',
              ),
              'policyConfig' => 
              array (
                'description' => '采集规则配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'resourceMode' => 
                  array (
                    'description' => '资源采集模式。如果配置all表示会采集账号下的全部实例到默认日志库，如果配置attributeMode表示会按照实例地域属性和资源标签进行过滤，如果配置instanceMode表示会按照实例ID进行过滤。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'all',
                    'default' => 'all',
                    'enum' => 
                    array (
                      0 => 'all',
                      1 => 'instanceMode',
                      2 => 'attributeMode',
                    ),
                  ),
                  'resourceTags' => 
                  array (
                    'description' => '资源标签，当且仅当resourceMode为attributeMode时有效。
如果资源标签过滤项为空，表示无需按照资源标签过滤，实例全部满足资源标签这一过滤条件，否则只采集资源标签属性全部满足该资源标签配置的实例。
资源标签和实例所属的地域集合，共同作用，只有全部满足时才会采集该实例对象。',
                    'type' => 'object',
                    'required' => false,
                    'example' => '{"tag1":"value1",“tag2":"value2"}',
                  ),
                  'regions' => 
                  array (
                    'description' => '实例所属的地域集合，当且仅当resourceMode为attributeMode时有效，支持通配符。如果地域集合过滤项为空数组，表示无需按照地域过滤，实例全部满足地域集合这一过滤条件，否则只采集地域属性在该地域集合中的实例。实例所属的地域集合和资源标签，共同作用，只有全部满足时才会采集该实例对象。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'cn-hangzhou',
                    ),
                    'required' => false,
                  ),
                  'instanceIds' => 
                  array (
                    'description' => '实例ID集合，当且仅当resourceMode为instanceMode时有效。只采集实例ID在该实例ID集合中的实例。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'your-test-bucket1',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => true,
              ),
              'centralizeEnabled' => 
              array (
                'description' => '是否开启中心化转投，默认false。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
              'centralizeConfig' => 
              array (
                'description' => '中心化转投配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'destRegion' => 
                  array (
                    'description' => '中心化转投目的地域。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cn-beijing',
                  ),
                  'destProject' => 
                  array (
                    'description' => '中心化转投目的项目，其地域属性应和destRegion保持一致。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'your-sls-project-in-beijing',
                  ),
                  'destLogstore' => 
                  array (
                    'description' => '中心化转投目的日志库，其地域属性应和destRegion保持一致，并且归属destProject下。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'your-sls-logstore-in-beijing',
                  ),
                  'destTTL' => 
                  array (
                    'description' => '中心化转投目的天数，当且仅当中心化转投目的日志库不存在首次创建时有效。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => 'your-sls-logstore-ttl',
                  ),
                ),
                'required' => false,
              ),
              'dataConfig' => 
              array (
                'description' => '当且仅当日志类型为全局日志类型时支持配置，例如productCode为sls时的场景，表示首次配置时全局日志将被采集到对应地域等。',
                'type' => 'object',
                'properties' => 
                array (
                  'dataRegion' => 
                  array (
                    'description' => '当且仅当日志类型为全局日志类型时支持配置，例如productCode为sls时的场景，表示首次配置时全局日志将被采集到对应地域。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cn-beijing',
                  ),
                ),
                'required' => false,
              ),
              'resourceDirectory' => 
              array (
                'description' => '资源目录配置，账号必须已经开通资源目录，且为管理员或者委派管理员身份',
                'type' => 'object',
                'properties' => 
                array (
                  'accountGroupType' => 
                  array (
                    'description' => '支持该资源目录下，全选模式all和自定义模式custom',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'all,custom',
                  ),
                  'members' => 
                  array (
                    'description' => '当资源目录配置为custom模式时，对应的成员账号列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '成员账号阿里云Uid',
                      'type' => 'string',
                      'required' => false,
                      'example' => '165***********50',
                    ),
                    'required' => false,
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
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建云产品日志采集的采集规则',
    ),
    'DeleteCollectionPolicy' => 
    array (
      'summary' => '删除云产品日志采集的采集规则。',
      'path' => '/collectionpolicy/{policyName}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '194655',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls9NGCVR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'policyName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'your_log_policy',
            'maxLength' => 63,
            'minLength' => 3,
          ),
        ),
        1 => 
        array (
          'name' => 'productCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss',
          ),
        ),
        2 => 
        array (
          'name' => 'dataCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志类型编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'access_log',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除云产品日志采集的采集规则',
    ),
    'ListCollectionPolicies' => 
    array (
      'summary' => '列出云产品日志采集的采集规则。',
      'path' => '/collectionpolicy',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '192483',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls9NGCVR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'productCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss',
          ),
        ),
        1 => 
        array (
          'name' => 'dataCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志类型编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'access_log',
          ),
        ),
        2 => 
        array (
          'name' => 'policyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'your_log_policy
',
          ),
        ),
        3 => 
        array (
          'name' => 'size',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '分页查询时，设置的每页行数。默认值为 50，最多返回 100 个 规则信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '50',
            'default' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'offset',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '查询开始行，默认值为 0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'instanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。如果配置实例ID，则可以根据实例ID反向查询实例命中的规则，必须和productCode、dataCode结合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'your-test-bucket1
',
          ),
        ),
        6 => 
        array (
          'name' => 'centralProject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中心化转投目的Project。如果配置中心化转投目的Project，则可以根据Project反向查询有多少规则配置了中心化转投到该centralProejct下。',
            'type' => 'string',
            'required' => false,
            'example' => 'your-central-project1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '总数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'currentCount' => 
              array (
                'description' => '当前页数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'data' => 
              array (
                'description' => '当前查询条件下按照分页配置返回的规则数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '规则详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'productCode' => 
                    array (
                      'description' => '产品编码。',
                      'type' => 'string',
                      'example' => 'oss',
                    ),
                    'dataCode' => 
                    array (
                      'description' => '日志类型编码。',
                      'type' => 'string',
                      'example' => 'access_log',
                    ),
                    'policyName' => 
                    array (
                      'description' => '规则名称。',
                      'type' => 'string',
                      'example' => 'your_log_policy',
                    ),
                    'enabled' => 
                    array (
                      'description' => '是否开启。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'policyConfig' => 
                    array (
                      'description' => '采集规则配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'resourceMode' => 
                        array (
                          'description' => '资源采集模式。',
                          'type' => 'string',
                          'example' => 'all',
                        ),
                        'regions' => 
                        array (
                          'description' => '实例所属的地域集合。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '地域ID。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou',
                          ),
                        ),
                        'instanceIds' => 
                        array (
                          'description' => '实例ID集合。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '实例ID。',
                            'type' => 'string',
                            'example' => 'your-test-bucket1
',
                          ),
                        ),
                        'resourceTags' => 
                        array (
                          'description' => '资源标签。',
                          'type' => 'object',
                          'example' => '{"tag1":"value1","tag2":"value2"}',
                        ),
                      ),
                    ),
                    'centralizeEnabled' => 
                    array (
                      'description' => '是否开启中心化转投。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'centralizeConfig' => 
                    array (
                      'description' => '中心化转投配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'destRegion' => 
                        array (
                          'description' => '中心化转投目的地域。',
                          'type' => 'string',
                          'example' => 'cn-beijing
',
                        ),
                        'destProject' => 
                        array (
                          'description' => '中心化转投目的项目。',
                          'type' => 'string',
                          'example' => 'your-sls-project-in-beijing
',
                        ),
                        'destLogstore' => 
                        array (
                          'description' => '中心化转投目的日志库。',
                          'type' => 'string',
                          'example' => 'your-sls-logstore-in-beijing
',
                        ),
                        'destTTL' => 
                        array (
                          'description' => '中心化转投目的存储天数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => 'your-sls-logstore-ttl
',
                        ),
                      ),
                    ),
                    'resourceDirectory' => 
                    array (
                      'description' => '资源目录配置, 如有配置，否则为空',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'accountGroupType' => 
                        array (
                          'description' => '在该资源目录下，全选模式all或自定义模式custom',
                          'type' => 'string',
                          'example' => 'all,custom',
                        ),
                        'members' => 
                        array (
                          'description' => '当资源目录配置为custom模式时，对应的成员账号列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '阿里云账号Uid',
                            'type' => 'string',
                            'example' => '165***********50',
                          ),
                        ),
                      ),
                    ),
                    'dataConfig' => 
                    array (
                      'description' => '当且仅当日志类型为全局日志类型时支持配置，例如productCode为sls时的场景。否则为空。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'dataRegion' => 
                        array (
                          'description' => '当且仅当日志类型为全局日志类型时支持的配置，例如productCode为sls时的场景，表示首次配置时全局日志将被采集到对应地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'dataProject' => 
                        array (
                          'description' => '当且仅当日志类型为全局日志类型时有效，例如productCode为sls时的场景，如果为空，表示日志被采集到该账号在特定dataRegion下的默认专属的Project中。',
                          'type' => 'string',
                          'example' => '""',
                        ),
                      ),
                    ),
                    'internalPolicy' => 
                    array (
                      'description' => '是否是内置规则策略，内置规则不允许修改、删除。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'policyUid' => 
                    array (
                      'description' => '规则所属的账号阿里云账号Uid，如果该规则由资源目录管理员或者资源目录委派管理员创建，则为其阿里云账号Uid。',
                      'type' => 'string',
                      'example' => '148***********50',
                    ),
                  ),
                ),
              ),
              'statistics' => 
              array (
                'description' => '当前查询条件下返回的统计数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '按照productCode的规则统计结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'productCode' => 
                    array (
                      'description' => '产品编码。',
                      'type' => 'string',
                      'example' => 'oss',
                    ),
                    'policySourceList' => 
                    array (
                      'description' => '规则来源列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '规则来源对象。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'policyUid' => 
                          array (
                            'description' => '规则所属的账号阿里云账号Uid，如果该规则由资源目录管理员或者资源目录委派管理员创建，则为其阿里云账号Uid。',
                            'type' => 'string',
                            'example' => '148***********50',
                          ),
                          'policyName' => 
                          array (
                            'description' => '规则名称',
                            'type' => 'string',
                            'example' => 'policy_name1_from148',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 1,\\n  \\"currentCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"productCode\\": \\"oss\\",\\n      \\"dataCode\\": \\"access_log\\",\\n      \\"policyName\\": \\"your_log_policy\\",\\n      \\"enabled\\": true,\\n      \\"policyConfig\\": {\\n        \\"resourceMode\\": \\"all\\",\\n        \\"regions\\": [\\n          \\"cn-hangzhou\\"\\n        ],\\n        \\"instanceIds\\": [\\n          \\"your-test-bucket1\\\\n\\"\\n        ],\\n        \\"resourceTags\\": {\\n          \\"tag1\\": \\"value1\\",\\n          \\"tag2\\": \\"value2\\"\\n        }\\n      },\\n      \\"centralizeEnabled\\": false,\\n      \\"centralizeConfig\\": {\\n        \\"destRegion\\": \\"cn-beijing\\\\n\\",\\n        \\"destProject\\": \\"your-sls-project-in-beijing\\\\n\\",\\n        \\"destLogstore\\": \\"your-sls-logstore-in-beijing\\\\n\\",\\n        \\"destTTL\\": 0\\n      },\\n      \\"resourceDirectory\\": {\\n        \\"accountGroupType\\": \\"all,custom\\",\\n        \\"members\\": [\\n          \\"165***********50\\"\\n        ]\\n      },\\n      \\"dataConfig\\": {\\n        \\"dataRegion\\": \\"cn-hangzhou\\",\\n        \\"dataProject\\": \\"\\\\\\"\\\\\\"\\"\\n      },\\n      \\"internalPolicy\\": false,\\n      \\"policyUid\\": \\"148***********50\\"\\n    }\\n  ],\\n  \\"statistics\\": [\\n    {\\n      \\"productCode\\": \\"oss\\",\\n      \\"policySourceList\\": [\\n        {\\n          \\"policyUid\\": \\"148***********50\\",\\n          \\"policyName\\": \\"policy_name1_from148\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出云产品日志采集的采集规则',
    ),
    'GetCollectionPolicy' => 
    array (
      'summary' => '获取云产品日志采集的采集规则。',
      'path' => '/collectionpolicy/{policyName}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'abilityTreeCode' => '195429',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsls9NGCVR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'policyName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'your_log_policy
',
            'maxLength' => 63,
            'minLength' => 3,
          ),
        ),
        1 => 
        array (
          'name' => 'productCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss',
          ),
        ),
        2 => 
        array (
          'name' => 'dataCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志类型编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'access_log',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'collectionPolicy' => 
              array (
                'description' => '返回规则。',
                'type' => 'object',
                'properties' => 
                array (
                  'policyName' => 
                  array (
                    'description' => '规则名称。',
                    'type' => 'string',
                    'example' => 'your_log_policy',
                  ),
                  'enabled' => 
                  array (
                    'description' => '是否开启。',
                    'type' => 'boolean',
                    'example' => 'true
',
                  ),
                  'productCode' => 
                  array (
                    'description' => '产品编码。',
                    'type' => 'string',
                    'example' => 'oss',
                  ),
                  'dataCode' => 
                  array (
                    'description' => '日志类型编码。',
                    'type' => 'string',
                    'example' => 'access_log',
                  ),
                  'policyConfig' => 
                  array (
                    'description' => '采集规则配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'resourceMode' => 
                      array (
                        'description' => '资源采集模式。',
                        'type' => 'string',
                        'example' => 'all',
                      ),
                      'regions' => 
                      array (
                        'description' => '实例所属的地域集合，支持通配符。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                      ),
                      'instanceIds' => 
                      array (
                        'description' => '实例ID集合。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'your-test-bucket1
',
                        ),
                      ),
                      'resourceTags' => 
                      array (
                        'description' => '资源标签。',
                        'type' => 'object',
                        'example' => '{"tag1":"value1","tag2":"value2"}',
                      ),
                    ),
                  ),
                  'centralizeEnabled' => 
                  array (
                    'description' => '是否开启中心化存储。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'centralizeConfig' => 
                  array (
                    'description' => '中心化转投配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'destRegion' => 
                      array (
                        'description' => '中心化转投目的地域。',
                        'type' => 'string',
                        'example' => 'cn-beijing
',
                      ),
                      'destProject' => 
                      array (
                        'description' => '中心化转投目的项目。',
                        'type' => 'string',
                        'example' => 'your-sls-project-in-beijing
',
                      ),
                      'destLogstore' => 
                      array (
                        'description' => '中心化转投目的日志库。',
                        'type' => 'string',
                        'example' => 'your-sls-logstore-in-beijing
',
                      ),
                      'destTTL' => 
                      array (
                        'description' => '中心化转投目的天数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => 'your-sls-logstore-ttl
',
                      ),
                    ),
                  ),
                  'resourceDirectory' => 
                  array (
                    'description' => '资源目录配置, 如有配置，否则为空',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'accountGroupType' => 
                      array (
                        'description' => '在该资源目录下，全选模式all或自定义模式custom',
                        'type' => 'string',
                        'example' => 'all,custom',
                      ),
                      'members' => 
                      array (
                        'description' => '当资源目录配置为custom模式时，对应的成员账号列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '阿里云账号Uid',
                          'type' => 'string',
                          'example' => '165***********50',
                        ),
                      ),
                    ),
                  ),
                  'dataConfig' => 
                  array (
                    'description' => '当且仅当日志类型为全局日志类型时支持的配置，例如productCode为sls时的场景。否则为空。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'dataRegion' => 
                      array (
                        'description' => '当且仅当日志类型为全局日志类型时支持的配置，例如productCode为sls时的场景，表示首次配置时全局日志将被采集到对应地域。',
                        'type' => 'string',
                        'example' => 'cn-beijing',
                      ),
                      'dataProject' => 
                      array (
                        'description' => '当且仅当日志类型为全局日志类型时有效，例如productCode为sls时的场景，如果为空，表示日志被采集到该账号在特定dataRegion下的默认专属的Project中。',
                        'type' => 'string',
                        'example' => '""',
                      ),
                    ),
                  ),
                  'internalPolicy' => 
                  array (
                    'description' => '是否是内置规则策略，内置规则不允许修改、删除。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'policyUid' => 
                  array (
                    'description' => '规则所属的账号阿里云账号Uid，如果该规则由资源目录管理员或者资源目录委派管理员创建，则为其阿里云账号Uid。',
                    'type' => 'string',
                    'example' => '148***********50
',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"collectionPolicy\\": {\\n    \\"policyName\\": \\"your_log_policy\\",\\n    \\"enabled\\": true,\\n    \\"productCode\\": \\"oss\\",\\n    \\"dataCode\\": \\"access_log\\",\\n    \\"policyConfig\\": {\\n      \\"resourceMode\\": \\"all\\",\\n      \\"regions\\": [\\n        \\"cn-hangzhou\\"\\n      ],\\n      \\"instanceIds\\": [\\n        \\"your-test-bucket1\\\\n\\"\\n      ],\\n      \\"resourceTags\\": {\\n        \\"tag1\\": \\"value1\\",\\n        \\"tag2\\": \\"value2\\"\\n      }\\n    },\\n    \\"centralizeEnabled\\": false,\\n    \\"centralizeConfig\\": {\\n      \\"destRegion\\": \\"cn-beijing\\\\n\\",\\n      \\"destProject\\": \\"your-sls-project-in-beijing\\\\n\\",\\n      \\"destLogstore\\": \\"your-sls-logstore-in-beijing\\\\n\\",\\n      \\"destTTL\\": 0\\n    },\\n    \\"resourceDirectory\\": {\\n      \\"accountGroupType\\": \\"all,custom\\",\\n      \\"members\\": [\\n        \\"165***********50\\"\\n      ]\\n    },\\n    \\"dataConfig\\": {\\n      \\"dataRegion\\": \\"cn-beijing\\",\\n      \\"dataProject\\": \\"\\\\\\"\\\\\\"\\"\\n    },\\n    \\"internalPolicy\\": false,\\n    \\"policyUid\\": \\"148***********50\\\\n\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取云产品日志采集的采集规则',
    ),
    'CreateSqlInstance' => 
    array (
      'summary' => '当您使用SQL分析时，如果数据量较大，SQL普通版无法在一次查询中完整扫描指定时间段内的所有日志，返回的结果可能不包括所有匹配的数据，增加Shard可以提升读写能力，但只对新写入的数据生效。您可以通过开启SQL独享版，增加计算资源，提升单次分析的数据量。',
      'path' => '/sqlinstance',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '需要开启SQL独享版的Project名称。',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
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
              'cu' => 
              array (
                'title' => '独享sql能使用的最大cu',
                'description' => 'CU（ComputeUnit）是SQL独享版运行过程中可以并行使用的计算核数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2',
              ),
              'useAsDefault' => 
              array (
                'title' => '是否默认开启',
                'description' => '是否为Project默认开启SQL独享版。 如果为true，当前Project下的所有查询和分析操作（包括告警、仪表盘等），都使用SQL独享版。',
                'type' => 'boolean',
                'required' => true,
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建SQL独享实例',
      'description' => '**请确保在使用该接口前，已充分了解独享SQL的收费方式和[价格](~~223777~~)。**',
    ),
    'UpdateSqlInstance' => 
    array (
      'summary' => '当您使用SQL分析时，如果数据量较大，SQL普通版无法在一次查询中完整扫描指定时间段内的所有日志，返回的结果可能不包括所有匹配的数据，增加Shard可以提升读写能力，但只对新写入的数据生效。您可以通过开启SQL独享版，增加计算资源，提升单次分析的数据量。',
      'path' => '/sqlinstance',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '212425',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsMYXSJS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => '需要开启 SQL 独享版的 Project 名称。',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
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
              'cu' => 
              array (
                'title' => '独享sql能使用的最大cu',
                'description' => 'CU（ComputeUnit）是 SQL 独享版运行过程中可以并行使用的计算核数。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2',
              ),
              'useAsDefault' => 
              array (
                'title' => '是否默认开启',
                'description' => '是否为 Project 默认开启 SQL 独享版。 如果为 true，当前 Project 下的所有查询和分析操作（包括告警、仪表盘等），都使用 SQL 独享版。',
                'type' => 'boolean',
                'required' => true,
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
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新SQL 独享实例',
      'description' => '**请确保在使用该接口前，已充分了解独享SQL的收费方式和[价格](~~223777~~)。**',
    ),
    'GetSqlInstance' => 
    array (
      'summary' => '查询Project的SQL独享版本的CU数、是否为 Project 默认开启SQL独享版等信息。使用该接口前，必须先调用CreateSqlInstance或UpdateSqlInstance接口创建SQL独享版。',
      'path' => '/sqlinstance',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215092',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsMYXSJS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'host',
          'schema' => 
          array (
            'description' => 'project名称',
            'type' => 'string',
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
                'example' => 'nginx',
              ),
            ),
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
                'example' => 'application/json',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
                'example' => 'close',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
                'example' => 'Sun, 27 May 2018 08:25:04 GMT',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
                'example' => '5B0A6B60BB6EE39764D458B5',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => 'Sql独享实例',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Sql独享实例',
              'type' => 'object',
              'properties' => 
              array (
                'name' => 
                array (
                  'title' => '名称',
                  'description' => '统一为group1，内部参数，用户无需关注。',
                  'type' => 'string',
                  'example' => 'group1',
                ),
                'cu' => 
                array (
                  'title' => '独享sql能使用的最大cu',
                  'description' => '独享sql能使用的最大CU。CU（ComputeUnit）是 SQL 独享版运行过程中可以并行使用的计算核数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '2',
                ),
                'createTime' => 
                array (
                  'title' => '创建时间',
                  'description' => '创建SQL独享版配置的时间。Unix时间戳。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1710230272。Unix时间戳。',
                ),
                'updateTime' => 
                array (
                  'title' => '更新时间',
                  'description' => '更新SQL独享版配置的时间。Unix时间戳。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1710230272',
                ),
                'useAsDefault' => 
                array (
                  'title' => '是否默认开启',
                  'description' => '是否为Project默认开启SQL独享版。 如果为true，当前Project下的所有查询和分析操作（包括告警、仪表盘等），都使用SQL独享版。',
                  'type' => 'boolean',
                  'example' => 'true',
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
      'responseDemo' => '[{"errorExample":"","example":"[\\n  {\\n    \\"name\\": \\"group1\\",\\n    \\"cu\\": 2,\\n    \\"createTime\\": 0,\\n    \\"updateTime\\": 1710230272,\\n    \\"useAsDefault\\": true\\n  }\\n]","type":"json"}]',
      'title' => '查询SQL 独享实例',
    ),
    'OpenSlsService' => 
    array (
      'summary' => '开通日志服务。服务地址只能是华东2（上海）或新加坡。',
      'path' => '/slsservice',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '194669',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsMYXSJS',
        ),
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
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
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '开通日志服务',
      'description' => '该接口需要您已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。',
      'requestParamsDescription' => '服务地址只能是华东2（上海）或新加坡。',
    ),
    'GetSlsService' => 
    array (
      'summary' => '调用GetSlsService接口获取日志服务的开通状态。服务地址只能是华东2（上海）或新加坡。',
      'path' => '/slsservice',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'abilityTreeCode' => '194671',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslsMYXSJS',
        ),
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '响应消息体。',
            '$ref' => '#/components/schemas/serviceStatus',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"status\\": \\"NotExist\\",\\n  \\"enabled\\": false\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询日志服务的开通状态',
      'description' => '该接口需要您已创建并获取AccessKey。更多信息，请参见[访问密钥](~~29009~~)。

 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维。RAM用户需具备操作日志服务资源的权限。具体操作，请参见[创建RAM用户及授权](~~47664~~)。',
    ),
    'CreateTicket' => 
    array (
      'summary' => '如果您需要将日志服务的查询分析页面、仪表盘页面，免密分享给其他人或者嵌入到第三方系统，可以调用CreateTicket生成ticket，然后拼接免密链接。',
      'path' => '/tickets',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'expirationTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '* 服务地址只能是华东2（上海）或新加坡，但获取的Ticket可以在各个地域使用。免登录票据过期时间（秒），默认86400秒（一天），最大2592000秒（30天）。
* 免密链接的有效值是expirationTime和accessTokenExpirationTime的最小值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '86400',
          ),
        ),
        1 => 
        array (
          'name' => 'accessTokenExpirationTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务地址只能是华东2（上海）或新加坡，但获取的Ticket可以在各个地域使用。访问令牌过期时间（秒），默认86400秒（一天），最大86400秒（一天）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '600',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'ticket' => 
              array (
                'description' => '免登录票据。',
                'type' => 'string',
                'example' => 'eyJ***************.eyJ******************.KUT****************',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ticket\\": \\"eyJ***************.eyJ******************.KUT****************\\"\\n}","type":"json"}]',
      'title' => '创建免登录票据',
    ),
    'RefreshToken' => 
    array (
      'summary' => '通过票据刷新访问令牌，用于访问控制台接口。',
      'path' => '/token/refresh',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ticket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '免登录票据。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJ***************.eyJ******************.KUT****************',
          ),
        ),
        1 => 
        array (
          'name' => 'accessTokenExpirationTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问令牌过期时间（秒），默认86400秒（一天），最大86400秒（一天）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '600',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'Content-Type' => 
            array (
              'schema' => 
              array (
                'title' => '返回的响应体的内容格式。',
                'type' => 'string',
              ),
            ),
            'Server' => 
            array (
              'schema' => 
              array (
                'title' => '服务器名称。',
                'type' => 'string',
              ),
            ),
            'Content-Length' => 
            array (
              'schema' => 
              array (
                'title' => '响应内容长度。',
                'type' => 'string',
              ),
            ),
            'Date' => 
            array (
              'schema' => 
              array (
                'title' => '返回响应的时间。',
                'type' => 'string',
              ),
            ),
            'Connection' => 
            array (
              'schema' => 
              array (
                'title' => '是否长链接。取值包括：  close：不是长链接，则每个HTTP请求都会重新建立TCP连接。 keep-alive：长链接，TCP连接建立后保持连接状态，节省连接所需时间和带宽。',
                'type' => 'string',
              ),
            ),
            'x-log-requestid' => 
            array (
              'schema' => 
              array (
                'title' => '服务端产生的标识，该请求的唯一ID。',
                'type' => 'string',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'accessToken' => 
              array (
                'title' => 'Id of the request',
                'description' => '访问令牌。',
                'type' => 'string',
                'example' => 'eyJ***************.eyJ******************.KUT****************',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"accessToken\\": \\"eyJ***************.eyJ******************.KUT****************\\"\\n}","type":"json"}]',
      'title' => '刷新令牌',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cn-qingdao.log.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cn-beijing.log.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cn-zhangjiakou.log.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cn-huhehaote.log.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'cn-wulanchabu.log.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cn-hangzhou.log.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cn-shanghai.log.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'cn-nanjing.log.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'cn-fuzhou.log.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cn-shenzhen.log.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'cn-heyuan.log.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'cn-guangzhou.log.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cn-chengdu.log.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cn-hongkong.log.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ap-northeast-1.log.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'ap-northeast-2.log.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ap-southeast-1.log.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ap-southeast-2.log.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'ap-southeast-3.log.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'ap-southeast-5.log.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'ap-southeast-6.log.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'us-east-1.log.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'us-west-1.log.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'eu-west-1.log.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'eu-central-1.log.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'ap-south-1.log.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'me-east-1.log.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'ap-southeast-7.log.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'me-central-1.log.aliyuncs.com',
    ),
  ),
);
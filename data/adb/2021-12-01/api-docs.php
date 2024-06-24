<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'adb',
    'version' => '2021-12-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 181281,
      'title' => '地域管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 181282,
      'title' => '集群管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBCluster',
        1 => 'ModifyDBCluster',
        2 => 'DescribeDBClusters',
        3 => 'DescribeDBClusterAttribute',
        4 => 'DeleteDBCluster',
        5 => 'ModifyDBClusterDescription',
        6 => 'DeleteProcessInstance',
        7 => 'DescribeClusterNetInfo',
        8 => 'AllocateClusterPublicConnection',
        9 => 'ReleaseClusterPublicConnection',
        10 => 'ModifyClusterConnectionString',
        11 => 'DescribeClusterAccessWhiteList',
        12 => 'ModifyClusterAccessWhiteList',
      ),
    ),
    2 => 
    array (
      'id' => 181284,
      'title' => '资源组管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBResourceGroup',
        1 => 'DescribeDBResourceGroup',
        2 => 'ModifyDBResourceGroup',
        3 => 'DeleteDBResourceGroup',
      ),
    ),
    3 => 
    array (
      'id' => 181285,
      'title' => '资源弹性计划',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateElasticPlan',
        1 => 'DescribeElasticPlans',
        2 => 'ModifyElasticPlan',
        3 => 'EnableElasticPlan',
        4 => 'DisableElasticPlan',
        5 => 'DeleteElasticPlan',
        6 => 'DescribeElasticPlanJobs',
        7 => 'DescribeElasticPlanAttribute',
        8 => 'DescribeElasticPlanSpecifications',
      ),
    ),
    4 => 
    array (
      'id' => 181295,
      'title' => 'SQL审计',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAuditLogRecords',
        1 => 'ModifyAuditLogConfig',
      ),
    ),
    5 => 
    array (
      'id' => 181296,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccount',
        1 => 'DescribeAccounts',
        2 => 'BindAccount',
        3 => 'UnbindAccount',
        4 => 'CheckBindRamUser',
        5 => 'ResetAccountPassword',
        6 => 'ModifyAccountDescription',
        7 => 'DeleteAccount',
        8 => 'ModifyAccountPrivileges',
        9 => 'DescribeAccountPrivileges',
        10 => 'DescribeEnabledPrivileges',
        11 => 'DescribeAccountAllPrivileges',
        12 => 'DescribeAccountPrivilegeObjects',
      ),
    ),
    6 => 
    array (
      'id' => 181298,
      'title' => '监控信息',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterHealthStatus',
        1 => 'DescribeDBClusterPerformance',
      ),
    ),
    7 => 
    array (
      'id' => 181300,
      'title' => 'Spark开发',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetSparkDefinitions',
        1 => 'PreloadSparkAppMetrics',
        2 => 'GetSparkAppMetrics',
        3 => 'ListSparkLogAnalyzeTasks',
        4 => 'SubmitSparkLogAnalyzeTask',
        5 => 'KillSparkLogAnalyzeTask',
        6 => 'GetSparkLogAnalyzeTask',
        7 => 'SetSparkAppLogRootPath',
        8 => 'GetSparkConfigLogPath',
        9 => 'StartSparkSQLEngine',
        10 => 'KillSparkSQLEngine',
        11 => 'GetSparkSQLEngineState',
        12 => 'DescribeSparkCodeOutput',
        13 => 'DescribeSparkCodeLog',
        14 => 'DescribeSparkCodeWebUi',
        15 => 'ListSparkTemplateFileIds',
        16 => 'GetSparkAppWebUiAddress',
        17 => 'ListSparkAppAttempts',
        18 => 'CreateSparkTemplate',
        19 => 'DeleteSparkTemplate',
        20 => 'GetSparkTemplateFolderTree',
        21 => 'GetSparkTemplateFullTree',
        22 => 'GetSparkTemplateFileContent',
        23 => 'UpdateSparkTemplateFile',
        24 => 'DeleteSparkTemplateFile',
        25 => 'GetSparkAppAttemptLog',
        26 => 'ListSparkApps',
        27 => 'GetSparkAppInfo',
        28 => 'GetSparkAppState',
        29 => 'GetSparkAppLog',
        30 => 'SubmitSparkApp',
        31 => 'KillSparkApp',
        32 => 'CreateOssSubDirectory',
      ),
    ),
    8 => 
    array (
      'id' => 181301,
      'title' => '数据管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAdbMySqlColumns',
        1 => 'DescribeAdbMySqlTables',
        2 => 'DescribeAdbMySqlSchemas',
        3 => 'DescribeTableAccessCount',
        4 => 'GetViewDDL',
        5 => 'GetViewObjects',
        6 => 'GetDatabaseObjects',
        7 => 'GetTable',
        8 => 'GetTableColumns',
        9 => 'GetTableDDL',
        10 => 'GetTableObjects',
      ),
    ),
    9 => 
    array (
      'id' => 181302,
      'title' => '诊断优化',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDiagnosisSQLInfo',
        1 => 'DescribeDiagnosisDimensions',
        2 => 'DownloadDiagnosisRecords',
        3 => 'DescribeDiagnosisRecords',
        4 => 'DescribeDownloadRecords',
        5 => 'DescribeSqlPattern',
        6 => 'DescribeSQLPatterns',
        7 => 'DescribePatternPerformance',
      ),
    ),
    10 => 
    array (
      'id' => 190405,
      'title' => '空间分析',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterSpaceSummary',
      ),
    ),
    11 => 
    array (
      'id' => 181303,
      'title' => '运维管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyDBClusterMaintainTime',
      ),
    ),
    12 => 
    array (
      'id' => 181304,
      'title' => '查询链接',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeApsActionLogs',
      ),
    ),
    13 => 
    array (
      'id' => 186177,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BindDBResourceGroupWithUser',
        1 => 'UnbindDBResourceGroupWithUser',
        2 => 'DescribeDBClusterStatus',
        3 => 'DetachUserENI',
        4 => 'AttachUserENI',
        5 => 'ExistRunningSQLEngine',
        6 => 'CheckSampleDataSet',
        7 => 'DescribeUserQuota',
        8 => 'DescribeAllDataSource',
        9 => 'DescribeTables',
        10 => 'DescribeSchemas',
        11 => 'DescribeColumns',
        12 => 'RenameSparkTemplateFile',
        13 => 'LoadSampleDataSet',
        14 => 'ModifyBackupPolicy',
        15 => 'DescribeBackupPolicy',
        16 => 'DescribeBackups',
        17 => 'DescribeStorageResourceUsage',
        18 => 'DescribeClusterResourceDetail',
        19 => 'DescribeJobResourceUsage',
        20 => 'DescribeClusterResourceUsage',
        21 => 'DescribeComputeResourceUsage',
        22 => 'DescribeApsResourceGroups',
      ),
    ),
    14 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeExcessivePrimaryKeys',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'Adb4MysqlSparkDiagnosisInfo' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'DiagnosisType' => 
          array (
            'title' => '诊断信息类型',
            'type' => 'string',
            'example' => 'APPLICATION',
          ),
          'DiagnosisCode' => 
          array (
            'title' => '诊断Code',
            'type' => 'string',
          ),
          'DiagnosisCodeLabel' => 
          array (
            'title' => '诊断原因',
            'type' => 'string',
          ),
          'DiagnosisMsg' => 
          array (
            'title' => '诊断建议',
            'type' => 'string',
          ),
        ),
      ),
      'ColDetailModel' => 
      array (
        'title' => '列元数据信息',
        'description' => '列元数据信息。',
        'type' => 'object',
        'properties' => 
        array (
          'ColumnName' => 
          array (
            'title' => '逻辑列名',
            'description' => '逻辑列名。',
            'type' => 'string',
            'example' => 'example',
          ),
          'Type' => 
          array (
            'title' => '数据类型',
            'description' => '数据类型。',
            'type' => 'string',
            'example' => 'string',
          ),
          'Description' => 
          array (
            'title' => '描述',
            'description' => '描述。',
            'type' => 'string',
            'example' => 'description',
          ),
          'SchemaName' => 
          array (
            'title' => '逻辑库名',
            'description' => '逻辑库名。',
            'type' => 'string',
            'example' => 'schemaName',
          ),
          'TableName' => 
          array (
            'title' => '逻辑表名',
            'description' => '逻辑表名。',
            'type' => 'string',
            'example' => 'tableName',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间(UTC)',
            'description' => '创建时间(UTC)。',
            'type' => 'string',
            'example' => '2023-01-05\'T\'13:17:55\'Z\'',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间(UTC)',
            'description' => '更新时间(UTC)。',
            'type' => 'string',
            'example' => '2023-01-05\'T\'13:17:55\'Z\'',
          ),
          'PartitionKey' => 
          array (
            'title' => '是否是分区键',
            'description' => '是否是分区键。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'Nullable' => 
          array (
            'title' => '是否可以为null',
            'description' => '是否可以为null。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'PrimaryKey' => 
          array (
            'title' => '是否是主键',
            'description' => '是否是主键。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'DistributeKey' => 
          array (
            'title' => '是否是分布键',
            'description' => '是否是分布键。',
            'type' => 'boolean',
            'example' => 'false',
          ),
        ),
      ),
      'CstoreIndexModel' => 
      array (
        'title' => 'A short description of struct',
        'description' => '索引元信息。',
        'type' => 'object',
        'properties' => 
        array (
          'DatabaseName' => 
          array (
            'title' => 'databaseName',
            'description' => '逻辑库名。',
            'type' => 'string',
            'example' => 'exampleDatabase',
          ),
          'PhysicalTableName' => 
          array (
            'title' => 'physicalTableName',
            'description' => '物理表名。',
            'type' => 'string',
            'example' => 'physicalDatabase',
          ),
          'IndexName' => 
          array (
            'title' => 'indexName',
            'description' => '索引名。',
            'type' => 'string',
            'example' => 'indexName',
          ),
          'IndexType' => 
          array (
            'title' => 'indexType',
            'description' => '索引类型。',
            'type' => 'string',
            'example' => 'NORMAL',
          ),
          'IndexColumns' => 
          array (
            'title' => 'indexColumns',
            'description' => '索引列。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '索引列信息。',
              '$ref' => '#/components/schemas/FieldSchemaModel',
            ),
          ),
          'ColumnOrds' => 
          array (
            'title' => 'columnOrds',
            'description' => '索引列顺序。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Clustered索引每个列的排序方式与索引列（IndexColumns）一致。',
              'type' => 'string',
              'example' => 'ASC/DESC',
            ),
          ),
          'Options' => 
          array (
            'title' => 'options',
            'description' => '属性。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => 'ANN/FULLTEXT的属性信息。',
              'type' => 'string',
              'example' => 'key:value',
            ),
          ),
          'CreateTime' => 
          array (
            'title' => 'createTime',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'UpdateTime' => 
          array (
            'title' => 'updateTime',
            'description' => '更新时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
        ),
      ),
      'DatabaseSummaryModel' => 
      array (
        'title' => '数据库概要元数据信息',
        'description' => '数据库概要信息。',
        'type' => 'object',
        'properties' => 
        array (
          'Owner' => 
          array (
            'title' => '所有者',
            'description' => '所有者。',
            'type' => 'string',
            'example' => 'abc',
          ),
          'SchemaName' => 
          array (
            'title' => '逻辑库名',
            'description' => '逻辑库名。',
            'type' => 'string',
            'example' => 'testSchema',
          ),
          'Description' => 
          array (
            'title' => '描述',
            'description' => '描述。',
            'type' => 'string',
            'example' => 'description',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'description' => '更新时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
        ),
      ),
      'Detail' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Spark应用的详细信息。',
        'type' => 'object',
        'properties' => 
        array (
          'Data' => 
          array (
            'title' => '用户配置内容',
            'description' => 'Spark应用的配置内容。',
            'type' => 'string',
            'example' => '{     "name": "SparkPi",     "file": "local:///tmp/spark-examples.jar",     "className": "org.apache.spark.examples.SparkPi",     "args": [         "1000000"     ],     "conf": {         "spark.driver.resourceSpec": "small",         "spark.executor.instances": 1,         "spark.executor.resourceSpec": "small"     } }',
          ),
          'EstimateExecutionCpuTimeInSeconds' => 
          array (
            'title' => '估算作业执行消耗CPU时间',
            'description' => '执行Spark应用消耗CPU的时长，单位毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'LogRootPath' => 
          array (
            'title' => '日志文件存储地址',
            'description' => '日志文件存储路径。',
            'type' => 'string',
            'example' => 'oss://<bucket-name>/logs/driver',
          ),
          'LastAttemptId' => 
          array (
            'title' => '如配置了重试, 此为最后一次重试的作业ID',
            'description' => 'Spark应用最近一次重试的ID。',
            'type' => 'string',
            'example' => 's202204291426hzpre60****-0003',
          ),
          'WebUiAddress' => 
          array (
            'title' => 'Spark WEB UI地址',
            'description' => 'Web UI地址。',
            'type' => 'string',
            'example' => 'https://adbsparkui-cn-hangzhou.aliyuncs.com/?token=****',
          ),
          'SubmittedTimeInMillis' => 
          array (
            'title' => '用户提交到平台的时间戳',
            'description' => 'Spark应用的提交时间，Unix时间戳，单位毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1651213645000',
          ),
          'StartedTimeInMillis' => 
          array (
            'title' => '开始创建应用的时间戳',
            'description' => 'Spark应用的创建时间，Unix时间戳，单位毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1651213645010',
          ),
          'LastUpdatedTimeInMillis' => 
          array (
            'title' => '最后一次更新状态的时间戳',
            'description' => '最近一次更新Spark应用的时间，Unix时间戳，单位毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1651213645200',
          ),
          'TerminatedTimeInMillis' => 
          array (
            'title' => '终止执行的时间戳',
            'description' => 'Spark应用终止执行的时间，Unix时间戳，单位毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1651213645300',
          ),
          'DBClusterId' => 
          array (
            'title' => '执行的集群ID',
            'description' => '执行Spark应用的集群ID。',
            'type' => 'string',
            'example' => 'amv-bp11q28kvl688****',
          ),
          'ResourceGroupName' => 
          array (
            'title' => '资源组名称',
            'description' => 'Job型资源组名称。',
            'type' => 'string',
            'example' => 'spark-rg',
          ),
          'DurationInMillis' => 
          array (
            'title' => '执行时间(毫秒)',
            'description' => 'Spark应用执行耗时，单位毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'AppType' => 
          array (
            'title' => 'Spark App类型',
            'description' => 'Spark App类型',
            'type' => 'string',
            'example' => 'BATCH',
          ),
        ),
      ),
      'FieldSchemaModel' => 
      array (
        'title' => '列信息',
        'description' => '列信息。',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => 'name',
            'description' => '列名。',
            'type' => 'string',
            'example' => 'name',
          ),
          'Type' => 
          array (
            'title' => 'type',
            'description' => '列类型。',
            'type' => 'string',
            'example' => 'long',
          ),
          'Comment' => 
          array (
            'title' => 'comment',
            'description' => '列描述。',
            'type' => 'string',
            'example' => 'comment',
          ),
          'DatabaseName' => 
          array (
            'title' => 'databaseName',
            'description' => '逻辑库名。',
            'type' => 'string',
            'example' => 'databaseName',
          ),
          'TableName' => 
          array (
            'title' => 'tableName',
            'description' => '逻辑表名。',
            'type' => 'string',
            'example' => 'tableName',
          ),
          'MappedName' => 
          array (
            'title' => 'mappedName',
            'description' => '映射名。',
            'type' => 'string',
            'example' => 'mappedName',
          ),
          'DataType' => 
          array (
            'title' => 'dataType',
            'description' => '列数据类型。',
            'type' => 'string',
            'example' => 'long',
          ),
          'CreateTime' => 
          array (
            'title' => 'createTime',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'UpdateTime' => 
          array (
            'title' => 'updateTime',
            'description' => '更新时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'PkPosition' => 
          array (
            'title' => 'pkPosition',
            'description' => '主键位置。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '-1',
          ),
          'IsPartitionKey' => 
          array (
            'title' => 'isPartitionKey',
            'description' => '是否是分区键。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'OrdinalPosition' => 
          array (
            'title' => 'ordinalPosition',
            'description' => '列位置。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '-1',
          ),
          'ColumnRawName' => 
          array (
            'title' => 'columnRawName',
            'description' => '列原始名。',
            'type' => 'string',
            'example' => 'ColumnRawName',
          ),
          'PhysicalColumnName' => 
          array (
            'title' => 'physicalColumnName',
            'description' => '物理列名。',
            'type' => 'string',
            'example' => 'PhysicalColumnName',
          ),
          'Nullable' => 
          array (
            'title' => 'nullable',
            'description' => '是否为可空。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'AutoIncrement' => 
          array (
            'title' => 'autoIncrement',
            'description' => '是否自增。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'Precision' => 
          array (
            'title' => 'precision',
            'description' => '精度。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Scale' => 
          array (
            'title' => 'scale',
            'description' => '规模。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Primarykey' => 
          array (
            'title' => 'primarykey',
            'description' => '是否是主键。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'DefaultValue' => 
          array (
            'title' => 'defaultValue',
            'description' => '默认值。',
            'type' => 'string',
            'example' => 'default',
          ),
          'Tokenizer' => 
          array (
            'title' => 'tokenizer',
            'description' => '令牌。',
            'type' => 'string',
            'example' => 'tokenizer',
          ),
          'Encode' => 
          array (
            'title' => 'encode',
            'description' => '加密方式。',
            'type' => 'string',
            'example' => 'encode',
          ),
          'Compression' => 
          array (
            'title' => 'compression',
            'description' => '压缩方式。',
            'type' => 'string',
            'example' => 'compression',
          ),
          'Delimiter' => 
          array (
            'title' => 'delimiter',
            'description' => '分隔符。',
            'type' => 'string',
            'example' => 'delimiter',
          ),
          'ValueType' => 
          array (
            'title' => 'valueType',
            'description' => '值类型。',
            'type' => 'string',
            'example' => 'valueType',
          ),
          'CompressFloatUseShort' => 
          array (
            'title' => 'compressFloatUseShort',
            'description' => '是否用short压缩float。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'OnUpdate' => 
          array (
            'title' => 'onUpdate',
            'description' => '触发更新条件。',
            'type' => 'string',
            'example' => 'onUpdate',
          ),
        ),
      ),
      'Filters' => 
      array (
        'title' => 'A short description of struct',
        'description' => '筛选信息的过滤器',
        'type' => 'object',
        'properties' => 
        array (
          'AppNameRegex' => 
          array (
            'title' => '用于过滤应用名称的正则表达式',
            'type' => 'string',
          ),
          'AppIdRegex' => 
          array (
            'title' => '应用ID的过滤规则',
            'type' => 'string',
          ),
          'AppType' => 
          array (
            'title' => '应用的类型',
            'type' => 'string',
          ),
          'AppState' => 
          array (
            'title' => '应用处于的状态',
            'type' => 'string',
          ),
          'SubmitTimeRange' => 
          array (
            'title' => '应用提交时间范围',
            'type' => 'object',
            'properties' => 
            array (
              'MinTimeInMills' => 
              array (
                'title' => '筛选下限',
                'type' => 'integer',
                'format' => 'int64',
                'minimum' => '0',
              ),
              'MaxTimeInMills' => 
              array (
                'title' => '筛选上限',
                'type' => 'integer',
                'format' => 'int64',
                'minimum' => '0',
              ),
            ),
          ),
          'TermiatedTimeRange' => 
          array (
            'title' => '应用终止时间范围',
            'type' => 'object',
            'properties' => 
            array (
              'MinTimeInMills' => 
              array (
                'title' => '筛选下限',
                'type' => 'integer',
                'format' => 'int64',
                'minimum' => '0',
              ),
              'MaxTimeInMills' => 
              array (
                'title' => '筛选上限',
                'type' => 'integer',
                'format' => 'int64',
                'minimum' => '0',
              ),
            ),
          ),
          'ExecutionTimeRange' => 
          array (
            'title' => '应用执行消耗时间范围',
            'type' => 'object',
            'properties' => 
            array (
              'MinTimeInSeconds' => 
              array (
                'title' => '筛选下限',
                'type' => 'integer',
                'format' => 'int64',
                'minimum' => '0',
              ),
              'MaxTimeInSeconds' => 
              array (
                'title' => '筛选上限',
                'type' => 'integer',
                'format' => 'int64',
                'minimum' => '1',
              ),
            ),
          ),
        ),
      ),
      'LogAnalyzeResult' => 
      array (
        'title' => 'Spark日志分析结果',
        'description' => 'Spark日志分析结果',
        'type' => 'object',
        'properties' => 
        array (
          'AppErrorCode' => 
          array (
            'title' => '错误码信息',
            'description' => 'Spark日志分析后如果有可分析错误, 此处显示错误类型.',
            'type' => 'string',
            'example' => 'EXCEEDED_QUOTA',
          ),
          'AppErrorLog' => 
          array (
            'title' => '错误日志',
            'description' => 'Spark日志分析任务中找到的报错日志',
            'type' => 'string',
            'example' => 'exception: cpu is exceeded limits 12/10',
          ),
          'AppErrorAdvice' => 
          array (
            'title' => '针对错误的建议',
            'description' => '针对自动分析出的错误日志, 给出的建议解决方案内容.',
            'type' => 'string',
            'example' => 'Please increase cpu quota for your resource group',
          ),
        ),
      ),
      'OperatorNode' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'spark 算子节点',
        'type' => 'object',
        'properties' => 
        array (
          'nodeName' => 
          array (
            'title' => '算子名称',
            'type' => 'string',
          ),
          'id' => 
          array (
            'title' => '算子id',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'nodeDepth' => 
          array (
            'title' => '算子所在树的层级',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'parentId' => 
          array (
            'title' => '父算子 id',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'levelWidth' => 
          array (
            'title' => '算子所在树层级共有多少节点',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'nodeWidth' => 
          array (
            'title' => '该节点在对应层级从左到右的 position',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'stats' => 
          array (
            'title' => '算子统计信息',
            'type' => 'object',
            'properties' => 
            array (
              'parameters' => 
              array (
                'title' => '算子参数',
                'type' => 'string',
                'required' => false,
              ),
              'bytes' => 
              array (
                'title' => '数据量',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'outputRows' => 
              array (
                'title' => '输出行数',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'timeCost' => 
              array (
                'title' => '运行时间',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'peakMemory' => 
              array (
                'title' => '消耗内存最大值',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
          'children' => 
          array (
            'title' => '子算子队列',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/OperatorNode',
            ),
          ),
        ),
      ),
      'SerDeInfoModel' => 
      array (
        'title' => 'A short description of struct',
        'description' => '序列化信息元信息。',
        'type' => 'object',
        'properties' => 
        array (
          'SerDeId' => 
          array (
            'title' => 'serDeId',
            'description' => 'ID。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '123',
          ),
          'Name' => 
          array (
            'title' => 'name',
            'description' => '序列化信息名字。',
            'type' => 'string',
            'example' => 'example',
          ),
          'Parameters' => 
          array (
            'title' => 'parameters',
            'description' => '序列化反序列化的配置参数。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '参数的值。',
              'type' => 'string',
              'example' => 'key:value',
            ),
          ),
          'SerializationLib' => 
          array (
            'title' => 'serializationLib',
            'description' => '序列化使用的库。',
            'type' => 'string',
            'example' => 'org.apache.hadoop.hive.ql.io.parquet.serde.ParquetHiveSerDe',
          ),
        ),
      ),
      'SparkAnalyzeLogTask' => 
      array (
        'title' => 'Spark日志分析任务',
        'description' => 'Spark日志分析任务',
        'type' => 'object',
        'properties' => 
        array (
          'TaskId' => 
          array (
            'title' => 'Spark日志分析任务ID',
            'description' => 'Spark日志分析任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'UserId' => 
          array (
            'title' => '提交任务的用户ID',
            'description' => '提交任务的用户ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '13719918xxx',
          ),
          'SubmittedTimeInMillis' => 
          array (
            'title' => '提交任务的毫秒时间戳',
            'description' => '提交任务的毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1672123543000',
          ),
          'TerminatedTimeInMillis' => 
          array (
            'title' => '任务终止的毫秒级时间戳',
            'description' => '任务终止的毫秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1672123543000',
          ),
          'TaskState' => 
          array (
            'title' => '任务所处状态',
            'description' => '任务所处状态',
            'type' => 'string',
            'example' => 'WAITING',
          ),
          'Result' => 
          array (
            'title' => '任务分析结果',
            'description' => '任务分析结果',
            '$ref' => '#/components/schemas/LogAnalyzeResult',
          ),
          'StartedTimeInMillis' => 
          array (
            'title' => '任务开始的毫秒时间戳',
            'description' => '任务开始的毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1672123543000',
          ),
          'RuleMatched' => 
          array (
            'title' => '是否命中了规则',
            'description' => '是否命中了规则',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'TaskErrMsg' => 
          array (
            'title' => 'Task失败的错误信息',
            'description' => 'Task失败的错误信息',
            'type' => 'string',
            'example' => 'Driver log not found',
          ),
          'DBClusterId' => 
          array (
            'title' => '数据库集群ID',
            'description' => '数据库集群ID',
            'type' => 'string',
            'example' => 'amv-adbxxxxx',
          ),
        ),
      ),
      'SparkAppInfo' => 
      array (
        'title' => 'Spark应用详情',
        'description' => 'Spark应用的执行状态信息。',
        'type' => 'object',
        'properties' => 
        array (
          'AppId' => 
          array (
            'title' => 'Spark应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'example' => 's202207151211hz0c****',
          ),
          'AppName' => 
          array (
            'title' => '应用的命名',
            'description' => '应用名称。',
            'type' => 'string',
            'example' => 'SparkTest',
          ),
          'Priority' => 
          array (
            'title' => '优先级',
            'description' => '优先级',
            'type' => 'string',
            'example' => 'NORMAL',
          ),
          'State' => 
          array (
            'title' => '状态',
            'description' => 'Spark应用的状态，取值说明：
- **SUBMITTED**：已提交。
- **STARTING**：开始启动。
- **RUNNING**：执行中。
- **FAILING**：任务失败，清理环境中。
- **FAILED**：失败。
- **KILLING**：中止任务，清理环境中。
- **KILLED**：中止任务。
- **SUCCEEDING**：任务执行结束，清理环境中。
- **COMPLETED**：任务执行结束。
- **FATAL**：意外失败。
- **UNKNOWN**：未知错误。',
            'type' => 'string',
            'example' => 'SUBMITTED',
          ),
          'Message' => 
          array (
            'title' => '附加信息',
            'description' => '告警信息，如任务执行失败或资源不足等，无告警时则返回为空。',
            'type' => 'string',
            'example' => 'WARN: Disk is full.',
          ),
          'Detail' => 
          array (
            'title' => '作业详细信息',
            'description' => 'Spark应用的详细信息。',
            '$ref' => '#/components/schemas/Detail',
          ),
          'DBClusterId' => 
          array (
            'title' => '数据库ID',
            'description' => '数据库ID',
            'type' => 'string',
            'example' => 'amv-23xxxx',
          ),
        ),
      ),
      'SparkAttemptInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Spark重试的详细信息。',
        'type' => 'object',
        'properties' => 
        array (
          'AttemptId' => 
          array (
            'title' => 'Spark应用重试ID',
            'description' => 'Spark应用的重试ID。',
            'type' => 'string',
            'example' => 's202207151211hz****-0001',
          ),
          'Priority' => 
          array (
            'title' => 'Spark应用重试优先级',
            'description' => 'Spark应用重试优先级',
            'type' => 'string',
            'example' => 'NORMAL',
          ),
          'State' => 
          array (
            'title' => 'Spark应用重试状态',
            'description' => 'Spark应用的状态。取值说明：
- **SUBMITTED**：已提交。
- **STARTING**：开始启动。
- **RUNNING**：执行中。
- **FAILING**：任务失败，清理环境中。
- **FAILED**：失败。
- **KILLING**：中止任务，清理环境中。
- **KILLED**：中止任务。
- **SUCCEEDING**：任务执行结束，清理环境中。
- **COMPLETED**：任务执行结束。
- **FATAL**：意外失败。
- **UNKNOWN**：未知错误。',
            'type' => 'string',
            'example' => 'SUBMITTED',
          ),
          'Message' => 
          array (
            'title' => '备注',
            'description' => '告警信息，如任务执行失败或资源不足等，无告警时则返回为空。',
            'type' => 'string',
            'example' => 'WARN: Disk is full',
          ),
          'Detail' => 
          array (
            'title' => '重试详细信息',
            'description' => 'Spark应用的详细信息。',
            '$ref' => '#/components/schemas/Detail',
          ),
        ),
      ),
      'SparkOperatorInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Spark 算子信息',
        'type' => 'object',
        'properties' => 
        array (
          'OperatorName' => 
          array (
            'title' => '算子名称',
            'type' => 'string',
            'format' => 'byte',
          ),
          'MetricValue' => 
          array (
            'title' => 'metrics 值',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'SparkSession' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'spark连接对象',
        'type' => 'object',
        'properties' => 
        array (
          'SessionId' => 
          array (
            'title' => 'session id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '15',
          ),
          'State' => 
          array (
            'title' => '状态',
            'type' => 'string',
            'example' => 'idle',
          ),
          'AliyunUid' => 
          array (
            'title' => '用户ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '11123123',
          ),
          'Active' => 
          array (
            'title' => '是否活跃',
            'type' => 'string',
            'example' => 'true',
          ),
        ),
      ),
      'Statement' => 
      array (
        'title' => 'Spark代码块',
        'description' => 'Spark可执行代码块',
        'type' => 'object',
        'properties' => 
        array (
          'SessionId' => 
          array (
            'title' => '会话id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'StatementId' => 
          array (
            'title' => '代码块id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'Code' => 
          array (
            'title' => '代码块内容',
            'type' => 'string',
            'example' => 'SELECT * FROM table',
          ),
          'CodeState' => 
          array (
            'title' => '代码执行状态',
            'type' => 'string',
            'example' => 'Waiting',
          ),
          'Output' => 
          array (
            'title' => '执行结果',
            'type' => 'string',
            'example' => 'Spark is running, the ouput is...',
          ),
          'StartTime' => 
          array (
            'title' => '开始执行的毫秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1658977911000',
          ),
          'EndTime' => 
          array (
            'title' => '结束执行的毫秒级时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1658987911000',
          ),
          'Error' => 
          array (
            'title' => '执行错误信息',
            'type' => 'string',
            'example' => 'Disk is full',
          ),
          'CodeType' => 
          array (
            'title' => '代码执行类型',
            'type' => 'string',
            'example' => 'SQL',
          ),
          'AliyunUid' => 
          array (
            'title' => '用户ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1111111',
          ),
          'ResourceGroup' => 
          array (
            'title' => '资源组名称',
            'type' => 'string',
            'example' => 'rg1',
          ),
          'HaveRows' => 
          array (
            'title' => '是否有OSS数据',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'TotalCount' => 
          array (
            'title' => '返回行数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1000',
          ),
        ),
      ),
      'StatementInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '代码块执行信息',
        'type' => 'object',
        'properties' => 
        array (
          'StatementId' => 
          array (
            'title' => '代码块标识ID',
            'type' => 'string',
          ),
          'Code' => 
          array (
            'title' => '代码块内容',
            'type' => 'string',
          ),
          'CompletedTimeInMills' => 
          array (
            'title' => '执行完成的时间戳',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Output' => 
          array (
            'title' => '执行结果详细信息',
            'type' => 'string',
          ),
          'Process' => 
          array (
            'title' => '执行进度百分比',
            'type' => 'number',
            'format' => 'float',
          ),
          'StartedTimeInMills' => 
          array (
            'title' => '开始执行的时间戳',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'State' => 
          array (
            'title' => '当前执行状态',
            'type' => 'string',
          ),
        ),
      ),
      'StorageDescriptorModel' => 
      array (
        'title' => 'A short description of struct',
        'description' => '存储描述元信息。',
        'type' => 'object',
        'properties' => 
        array (
          'SdId' => 
          array (
            'title' => 'sdId',
            'description' => '描述信息的存储ID。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Location' => 
          array (
            'title' => 'location',
            'description' => '存储位置。',
            'type' => 'string',
            'example' => 'oss://**************',
          ),
          'InputFormat' => 
          array (
            'title' => 'inputFormat',
            'description' => '输入格式。',
            'type' => 'string',
            'example' => 'org.apache.hadoop.hive.ql.io.parquet.MapredParquetInputFormat',
          ),
          'OutputFormat' => 
          array (
            'title' => 'outputFormat',
            'description' => '输出格式。',
            'type' => 'string',
            'example' => 'org.apache.hadoop.hive.ql.io.parquet.MapredParquetInputFormat',
          ),
          'Compressed' => 
          array (
            'title' => 'compressed',
            'description' => '是否压缩。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'NumBuckets' => 
          array (
            'title' => 'numBuckets',
            'description' => 'Bucket个数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'SerDeInfo' => 
          array (
            'description' => '序列化反序列化信息。',
            '$ref' => '#/components/schemas/SerDeInfoModel',
          ),
          'Parameters' => 
          array (
            'title' => 'parameters',
            'description' => '存储配置参数。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '参数的值。',
              'type' => 'string',
              'example' => 'key:value',
            ),
          ),
          'StoredAsSubDirectories' => 
          array (
            'title' => 'storedAsSubDirectories',
            'description' => '是否以子目录方式存储。',
            'type' => 'boolean',
            'example' => 'false',
          ),
        ),
      ),
      'TableDetailModel' => 
      array (
        'title' => 'table详细信息',
        'description' => '表详细信息。',
        'type' => 'object',
        'properties' => 
        array (
          'SchemaName' => 
          array (
            'title' => '逻辑库名',
            'description' => '逻辑库名。',
            'type' => 'string',
            'example' => 'schemaName',
          ),
          'TableName' => 
          array (
            'title' => '逻辑表名',
            'description' => '逻辑表名。',
            'type' => 'string',
            'example' => 'tableName',
          ),
          'TableType' => 
          array (
            'title' => 'table类型',
            'description' => '表类型。',
            'type' => 'string',
            'example' => 'PHYSICAL_SCHEMA_NAME',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'description' => '更新时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'Description' => 
          array (
            'title' => '备注',
            'description' => '描述。',
            'type' => 'string',
            'example' => 'Description',
          ),
          'Owner' => 
          array (
            'title' => '所有者',
            'description' => '所有者。',
            'type' => 'string',
            'example' => 'abc',
          ),
          'Columns' => 
          array (
            'title' => '列信息',
            'description' => '列信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '列的详细信息。',
              '$ref' => '#/components/schemas/ColDetailModel',
            ),
          ),
          'Catalog' => 
          array (
            'title' => '外部数据源',
            'description' => '外部数据源。',
            'type' => 'string',
            'example' => 'oss',
          ),
        ),
      ),
      'TableModel' => 
      array (
        'title' => 'A short description of struct',
        'description' => '表元信息。',
        'type' => 'object',
        'properties' => 
        array (
          'TblId' => 
          array (
            'title' => 'tblId',
            'description' => '表编号。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '123',
          ),
          'DbName' => 
          array (
            'title' => 'dbName',
            'description' => '逻辑库名。',
            'type' => 'string',
            'example' => 'example',
          ),
          'TableName' => 
          array (
            'title' => 'tblName',
            'description' => '逻辑表名。',
            'type' => 'string',
            'example' => 'tableName',
          ),
          'TableType' => 
          array (
            'title' => 'tblType',
            'description' => '表类型。',
            'type' => 'string',
            'example' => 'external_table',
          ),
          'PartitionKeys' => 
          array (
            'title' => 'partitionKeys',
            'description' => '分区键。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分区列信息。',
              '$ref' => '#/components/schemas/FieldSchemaModel',
            ),
          ),
          'Parameters' => 
          array (
            'title' => 'parameters',
            'description' => '参数。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '参数的值。',
              'type' => 'string',
              'example' => 'key:value',
            ),
          ),
          'Sd' => 
          array (
            'title' => 'sd',
            'description' => '存储描述信息。',
            '$ref' => '#/components/schemas/StorageDescriptorModel',
          ),
          'CreateTime' => 
          array (
            'title' => 'createTime',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'ViewOriginalText' => 
          array (
            'title' => 'viewOriginalText',
            'description' => '创建视图时输入的SQL。',
            'type' => 'string',
            'example' => 'ViewOriginalText',
          ),
          'ViewExpandedText' => 
          array (
            'title' => 'viewExpandedText',
            'description' => '对创建视图的SQL进行规范化处理后的结果。',
            'type' => 'string',
            'example' => 'ViewExpandedText',
          ),
          'Temporary' => 
          array (
            'title' => 'temporary',
            'description' => '是否是临时表。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'Comment' => 
          array (
            'title' => 'comment',
            'description' => '描述。',
            'type' => 'string',
            'example' => 'description',
          ),
          'Cols' => 
          array (
            'title' => 'cols',
            'description' => '列信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '列详细信息。',
              '$ref' => '#/components/schemas/FieldSchemaModel',
            ),
          ),
          'DistributeColumns' => 
          array (
            'title' => 'distributeColumns',
            'description' => '分布列。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分布列信息',
              '$ref' => '#/components/schemas/FieldSchemaModel',
            ),
          ),
          'PhysicalTableName' => 
          array (
            'title' => 'physicalTableName',
            'description' => '物理表名。',
            'type' => 'string',
            'example' => 'physicalTableName',
          ),
          'PhysicalDatabaseName' => 
          array (
            'title' => 'physicalDatabaseName',
            'description' => '物理库名。',
            'type' => 'string',
            'example' => 'physicalDatabaseName',
          ),
          'DistributeType' => 
          array (
            'title' => 'distributeType',
            'description' => '分布类型。',
            'type' => 'string',
            'example' => 'DistributeType',
          ),
          'PartitionType' => 
          array (
            'title' => 'partitionType',
            'description' => '分区类型。',
            'type' => 'string',
            'example' => 'PartitionType',
          ),
          'PartitionColumn' => 
          array (
            'title' => 'partitionColumn',
            'description' => '分区列信息。',
            'type' => 'string',
            'example' => 'colName',
          ),
          'PartitionCount' => 
          array (
            'title' => 'partitionCount',
            'description' => '分区数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '16',
          ),
          'PreviousVersion' => 
          array (
            'title' => 'previousVersion',
            'description' => '先前版本。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'CurrentVersion' => 
          array (
            'title' => 'currentVersion',
            'description' => '现在版本。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '2',
          ),
          'UpdateTime' => 
          array (
            'title' => 'updateTime',
            'description' => '更新时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'TableEngineName' => 
          array (
            'title' => 'tableEngineName',
            'description' => '表引擎名字。',
            'type' => 'string',
            'example' => 'hive',
          ),
          'IsAllIndex' => 
          array (
            'title' => 'isAllIndex',
            'description' => '是否是全索引。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'BlockSize' => 
          array (
            'title' => 'blockSize',
            'description' => '块大小。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '64',
          ),
          'Compression' => 
          array (
            'title' => 'compression',
            'description' => '压缩方式。',
            'type' => 'string',
            'example' => 'Compression',
          ),
          'RawTableName' => 
          array (
            'title' => 'rawTableName',
            'description' => '原始表名。',
            'type' => 'string',
            'example' => 'RawTableName',
          ),
          'SubpartitionType' => 
          array (
            'title' => 'subpartitionType',
            'description' => '子分区类型。',
            'type' => 'string',
            'example' => 'SubpartitionColumn',
          ),
          'SubpartitionColumn' => 
          array (
            'title' => 'subpartitionColumn',
            'description' => '子分区列信息。',
            'type' => 'string',
            'example' => 'SubpartitionColumn',
          ),
          'SubpartitionCount' => 
          array (
            'title' => 'subpartitionCount',
            'description' => '子分区数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '64',
          ),
          'ArchiveType' => 
          array (
            'title' => 'archiveType',
            'description' => '存档类型。',
            'type' => 'string',
            'example' => 'ArchiveType',
          ),
          'MaxColumnId' => 
          array (
            'title' => 'maxColumnId',
            'description' => '最大列编号。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => 'MaxColumnId',
          ),
          'EnableDfs' => 
          array (
            'title' => 'enableDfs',
            'description' => '是否允许DFS。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'StoragePolicy' => 
          array (
            'title' => 'storagePolicy',
            'description' => '存储策略。',
            'type' => 'string',
            'example' => 'StoragePolicy',
          ),
          'HotPartitionCount' => 
          array (
            'title' => 'hotPartitionCount',
            'description' => '热分区数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '32',
          ),
          'IsFulltextDict' => 
          array (
            'title' => 'isFulltextDict',
            'description' => '是否是全文索引字典。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'RtIndexAll' => 
          array (
            'title' => 'rtIndexAll',
            'description' => '是否路由所有索引。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'RouteColumns' => 
          array (
            'title' => 'routeColumns',
            'description' => '路由列。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '路由列信息。',
              '$ref' => '#/components/schemas/FieldSchemaModel',
            ),
          ),
          'RouteEffectiveColumn' => 
          array (
            'title' => 'routeEffectiveColumn',
            'description' => '路由有效列。',
            '$ref' => '#/components/schemas/FieldSchemaModel',
          ),
          'RtEngineType' => 
          array (
            'title' => 'rtEngineType',
            'description' => '路由引擎类型。',
            'type' => 'string',
            'example' => 'RtEngineType',
          ),
          'RtModeType' => 
          array (
            'title' => 'rtModeType',
            'description' => '路由模式类型。',
            'type' => 'string',
            'example' => 'RtModeType',
          ),
          'RouteType' => 
          array (
            'title' => 'routeType',
            'description' => '路由类型。',
            'type' => 'string',
            'example' => 'routeType',
          ),
          'DictEncode' => 
          array (
            'title' => 'dictEncode',
            'description' => '是否加密。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'BucketCount' => 
          array (
            'title' => 'bucketCount',
            'description' => 'Bucket个数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '16',
          ),
          'Bucket' => 
          array (
            'title' => 'bucket',
            'description' => 'Bucket编号。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '16',
          ),
          'ViewSecurityMode' => 
          array (
            'title' => 'viewSecurityMode',
            'description' => '视图安全模式。',
            'type' => 'string',
            'example' => 'ViewSecurityMode',
          ),
          'Indexes' => 
          array (
            'title' => 'indexes',
            'description' => '索引。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '索引列信息。',
              '$ref' => '#/components/schemas/CstoreIndexModel',
            ),
          ),
        ),
      ),
      'TableSummaryModel' => 
      array (
        'title' => 'table概要信息',
        'description' => '表或视图的概要数据。',
        'type' => 'object',
        'properties' => 
        array (
          'SchemaName' => 
          array (
            'title' => 'db逻辑名',
            'description' => '逻辑库名。',
            'type' => 'string',
            'example' => 'schemaName',
          ),
          'TableName' => 
          array (
            'title' => 'table逻辑名',
            'description' => '逻辑表名或逻辑视图名。',
            'type' => 'string',
            'example' => 'tableName',
          ),
          'TableType' => 
          array (
            'title' => 'table类型',
            'description' => '表或视图类型。',
            'type' => 'string',
            'example' => 'PHYSICAL_SCHEMA_NAME',
          ),
          'TableSize' => 
          array (
            'title' => 'table大小',
            'description' => '表大小，单位为Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1234',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'description' => '更新时间。',
            'type' => 'string',
            'example' => '2023-01-05 13:17:55',
          ),
          'SQL' => 
          array (
            'title' => 'view SQL',
            'description' => '创建表或视图的SQL。',
            'type' => 'string',
            'example' => 'create table(a varchar)',
          ),
          'Description' => 
          array (
            'title' => '描述',
            'description' => '描述。',
            'type' => 'string',
            'example' => 'descrtiption',
          ),
          'Owner' => 
          array (
            'title' => '所有者',
            'description' => '所有者。',
            'type' => 'string',
            'example' => 'abc',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'DescribeRegions' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域名称和可用区名称（即返回数据中LocalName）返回值所使用的语言，取值说明：
- **zh-CN**：简体中文（默认语言）。
- **en-US**：英文。
- **ja**：日文。',
            'type' => 'string',
            'required' => false,
            'example' => 'en-US',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '421794A3-72A5-5D27-9E8B-A75A4C503E17',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '地域信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionEndpoint' => 
                        array (
                          'description' => '地域对应的接入地址。',
                          'type' => 'string',
                          'example' => 'adb.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => 'China (Hangzhou)',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Zones' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Zone' => 
                            array (
                              'description' => '可用区列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '可用区列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ZoneId' => 
                                  array (
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-h',
                                  ),
                                  'VpcEnabled' => 
                                  array (
                                    'description' => '目标可用区是否支持VPC，取值说明：
- **true**：支持。
- **false**：不支持。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'LocalName' => 
                                  array (
                                    'description' => '可用区名称。',
                                    'type' => 'string',
                                    'example' => 'Hangzhou Zone H',
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
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"421794A3-72A5-5D27-9E8B-A75A4C503E17\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"adb.aliyuncs.com\\",\\n        \\"LocalName\\": \\"China (Hangzhou)\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n              \\"VpcEnabled\\": true,\\n              \\"LocalName\\": \\"Hangzhou Zone H\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>421794A3-72A5-5D27-9E8B-A75A4C503E17</RequestId>\\n    <Regions>\\n        <RegionEndpoint>adb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>China (Hangzhou)</LocalName>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Zones>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <VpcEnabled>true</VpcEnabled>\\n            <LocalName>Hangzhou Zone H</LocalName>\\n        </Zones>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询地域和可用区',
      'summary' => '查询AnalyticDB MySQL湖仓版支持的地域和可用区。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'CreateDBCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '130062',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsQEKELU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版集群的版本，取值：**5.0**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5.0',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterNetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群网络类型。仅支持**VPC**（专有网络）类型。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'VPC',
          ),
        ),
        4 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群描述。
- 不能以`http://`或者`https://`开头。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型。取值说明：

- **Postpaid**：按量付费。
- **Prepaid**：包年包月。',
            'type' => 'string',
            'required' => true,
            'example' => 'Prepaid',
          ),
        ),
        6 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定包年包月集群为包年或包月类型。取值说明：
- **Year**：包年类型。
- **Month**：包月类型。

>PayType为Prepaid（即包年包月）时，本参数为必填参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        7 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定包年包月集群的购买时长。取值说明：
- 当**Period**为Year时，UsedTime取值范围为：1~3（整数）。
- 当**Period**为Month时，UsedTime取值范围为：1~9（整数）。

>PayType为**Prepaid**（即包年包月）时，本参数为必填参数。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        8 => 
        array (
          'name' => 'VPCId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-bp1at5ze0t5u3xtqn****',
          ),
        ),
        9 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-bp1aadw9k19x6cis9****',
          ),
        ),
        10 => 
        array (
          'name' => 'StorageResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储预留资源。取值范围：0ACU～2064ACU，步长：24。1 ACU约等于1核4 GB。
> 参数填写时，需要带单位。',
            'type' => 'string',
            'required' => false,
            'example' => '24ACU',
          ),
        ),
        11 => 
        array (
          'name' => 'ComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算预留资源。取值范围：0ACU～4096ACU，步长：16。1 ACU约等于1核4 GB。
> 参数填写时，需要带单位。',
            'type' => 'string',
            'required' => false,
            'example' => '16ACU',
          ),
        ),
        12 => 
        array (
          'name' => 'EnableDefaultResourcePool',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算预留资源是否全部分配给默认资源组（user_default），取值说明：
- **true**（默认值）：是
- **false**：否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        13 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
          ),
        ),
        14 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键，可以根据标签过滤集群列表。最多20对标签，各个标签对的数字n必须不同，且必须是从1开始的连续整数。`Tag.N.Key`对应的值为`Tag.N.Value`。

> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey1',
                ),
                'Value' => 
                array (
                  'description' => '标签值，可以根据标签过滤集群列表。最多20对标签，各个标签对的数字n必须不同，且必须是从1开始的连续整数。`Tag.N.Key`对应的值为`Tag.N.Value`。

> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        15 => 
        array (
          'name' => 'SourceDbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版集群的源实例ID，指定该参数时为从数仓版集群恢复湖仓版集群。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-bp1r053byu48p****',
          ),
        ),
        16 => 
        array (
          'name' => 'BackupSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基于备份集恢复时，使用的备份集的ID。

> 您可以调用[DescribeBackups](~~612318~~)接口查看集群的备份列表。',
            'type' => 'string',
            'required' => false,
            'example' => '1880808684',
          ),
        ),
        17 => 
        array (
          'name' => 'RestoreToTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基于备份集恢复的时间点。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-09-20T03:13:56Z',
          ),
        ),
        18 => 
        array (
          'name' => 'RestoreType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复方式，取值：
* **backup**：基于备份集恢复，您还需要传入参数**BackupSetId**、**SourceDBClusterId**。
* **timepoint**：基于时间点恢复，您还需要传入参数**RestoreToTime**、**SourceDBClusterId**。',
            'type' => 'string',
            'required' => false,
            'example' => 'backup',
          ),
        ),
        19 => 
        array (
          'name' => 'ProductForm',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'example' => 'LegacyForm',
            'default' => 'LegacyForm',
            'enum' => 
            array (
              0 => 'IntegrationForm',
              1 => 'LegacyForm',
            ),
          ),
        ),
        20 => 
        array (
          'name' => 'ReservedNodeSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        21 => 
        array (
          'name' => 'ReservedNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        22 => 
        array (
          'name' => 'KmsId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        23 => 
        array (
          'name' => 'DiskEncryption',
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
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '默认资源组的ID。',
                'type' => 'string',
                'example' => 'rg-4690g37929****',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'amv-bp1r053byu48p****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '202353278****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"ResourceGroupId\\": \\"rg-4690g37929****\\",\\n  \\"DBClusterId\\": \\"amv-bp1r053byu48p****\\",\\n  \\"OrderId\\": \\"202353278****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBClusterResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <ResourceGroupId>rg-4690g37929****</ResourceGroupId>\\n    <DBClusterId>amv-bp1r053byu48p****</DBClusterId>\\n    <OrderId>202353278****</OrderId>\\n</CreateDBClusterResponse>","errorExample":""}]',
      'title' => '创建集群',
      'summary' => '创建AnalyticDB MySQL湖仓版（3.0）集群。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyDBCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '132381',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsQEKELU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'StorageResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储预留资源。取值范围：0ACU～2064ACU，步长：24。1 ACU约等于1核4 GB。
> 参数填写时，需要带单位。',
            'type' => 'string',
            'required' => false,
            'example' => '24ACU',
          ),
        ),
        3 => 
        array (
          'name' => 'ComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算预留资源。取值范围：0ACU～4096ACU，步长：16。1 ACU约等于1核4 GB。
> 参数填写时，需要带单位。',
            'type' => 'string',
            'required' => false,
            'example' => '16ACU',
          ),
        ),
        4 => 
        array (
          'name' => 'EnableDefaultResourcePool',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算预留资源是否全部分配给默认资源组（user_default），取值说明：
- true（默认值）：是
- false：否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'ReservedNodeSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'ReservedNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0D6BF3E2-41D8-57F6-9A62-A13A70377952',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'amv-bp1r053byu48p****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2035629****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.Cluster.InvalidWorkerState',
            'errorMessage' => 'The state of the worker does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ACS.Cluster.ElasticPlanJobsExists',
            'errorMessage' => 'Operation failed. Ongoing elastic plan jobs exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0D6BF3E2-41D8-57F6-9A62-A13A70377952\\",\\n  \\"DBClusterId\\": \\"amv-bp1r053byu48p****\\",\\n  \\"OrderId\\": \\"2035629****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterResponse>\\n    <RequestId>0D6BF3E2-41D8-57F6-9A62-A13A70377952</RequestId>\\n    <DBClusterId>amv-bp1r053byu48p****</DBClusterId>\\n    <OrderId>2035629****</OrderId>\\n</ModifyDBClusterResponse>","errorExample":""}]',
      'title' => '集群升降配',
      'summary' => '对AnalyticDB MySQL湖仓版（3.0）集群进行升降配。',
      'description' => '### 注意事项
- 扩缩容期间，会禁止`submit job`提交异步任务。如果业务依赖相关功能，请根据业务情况选择时段执行扩缩容。
- 扩缩容操作会对数据进行重分布迁移，迁移时长与数据量成正比，扩缩容期间服务不中断。集群从大规格缩容到小规格时，数据迁移时长通常需要数小时甚至数十小时，数据量大时请谨慎缩容。
- 如果集群已加载内置数据集，在缩容时请确保集群具有至少24 ACU的存储预留资源，否则内置数据集无法使用。
- 扩缩容即将结束时，可能会发生连接闪断，建议您在业务低峰期扩缩容，或确保您的应用有自动重连机制。
- 不支持将湖仓版（3.0）变配为数仓版（3.0）。支持将数仓版（3.0）变配为湖仓版（3.0），详情请参见数仓版变配湖仓版。
- 当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeDBClusters' => 
    array (
      'summary' => '查看目标地域下的AnalyticDB MySQL湖仓版（3.0）集群列表信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
        'abilityTreeCode' => '130697',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsQEKELU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。

此参数不填写时，默认返回该地域中所有集群的信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-bp1r053byu48p****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群描述。
- 不能以`http://`或者`https://`开头。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群状态，取值说明：
- **Preparing**：准备中
* **Creating**：创建中
* **Running**：运行中
* **Deleting**：删除中
- **Restoring**：备份恢复中
* **ClassChanging**：变配中
* **NetAddressCreating**：创建网络中
* **NetAddressDeleting**：删除网络中
* **NetAddressModifying**：修改网络中',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的正整数。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
此参数不填写时，默认返回集群中所有资源组信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '集群的标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '集群的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag1',
                ),
                'Value' => 
                array (
                  'description' => '集群的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        8 => 
        array (
          'name' => 'ProductVersion',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'EnterpriseVersion',
              1 => 'BasicVersion',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'DBClusterVersion',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => '5.0',
            'enum' => 
            array (
              0 => 'All',
              1 => '3.0',
              2 => '5.0',
            ),
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
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5EDBA27-AF3E-5966-9503-FD1557E19167',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBCluster' => 
                  array (
                    'description' => '列表详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '集群列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Expired' => 
                        array (
                          'description' => '包年包月集群是否过期。取值说明：
* **true**：已过期。
* **false**：未过期。

> - 如果集群已过期，在一定时间内集群会被锁定甚至释放。建议您进行续费操作，详情请参见[续费说明](~~135246~~)。
- 按量付费集群不返回此参数。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '集群创建时间。UTC时间，格式为<i>yyyy-mm-ddThh:mm:ssZ</i>。',
                          'type' => 'string',
                          'example' => '2022-04-01T09:50:18Z',
                        ),
                        'PayType' => 
                        array (
                          'description' => '集群付费类型，取值说明：
* **Postpaid**：按量付费。
* **Prepaid**：包年包月。',
                          'type' => 'string',
                          'example' => 'Prepaid',
                        ),
                        'Mode' => 
                        array (
                          'description' => '集群模式。默认返回**flexible**，表示弹性模式集群。',
                          'type' => 'string',
                          'example' => 'flexible',
                        ),
                        'Port' => 
                        array (
                          'description' => '集群端口号。',
                          'type' => 'string',
                          'example' => '3306',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '集群的锁定状态，取值说明： 
- **Unlock**：未锁定。 
- **ManualLock**：手动触发锁定。 
- **LockByExpiration**：集群过期自动锁定。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'StorageResource' => 
                        array (
                          'description' => '存储预留资源规格。1 ACU约等于1核4 GB。存储资源用于数据读写，增加该资源能提高集群读写能力。',
                          'type' => 'string',
                          'example' => '24ACU',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'amv-bp163885f8q21****',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '集群的公网连接地址。',
                          'type' => 'string',
                          'example' => 'amv-bp163885f8q21****.ads.aliyuncs.com',
                        ),
                        'DBClusterType' => 
                        array (
                          'description' => '集群类型。默认返回**Common**，表示常规集群。',
                          'type' => 'string',
                          'example' => 'Common',
                        ),
                        'CommodityCode' => 
                        array (
                          'description' => '商品付费类型，取值说明：
- **ads**：按量付费商品。
- **ads_pre**：包年包月商品。',
                          'type' => 'string',
                          'example' => 'ads_pre',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '集群到期时间，UTC时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>。

> * 若集群付费类型为包年包月，则返回实际到期时间。
* 若集群付费类型为按量付费，则返回为空。
',
                          'type' => 'string',
                          'example' => '2022-07-01T09:50:18Z',
                        ),
                        'LockReason' => 
                        array (
                          'description' => '集群锁定原因。
> 仅当集群被锁定时会返回该参数，固定为**instance_expire**。',
                          'type' => 'string',
                          'example' => 'instance_expired',
                        ),
                        'VPCId' => 
                        array (
                          'description' => '专有网络（VPC）ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp13h7uzhulpuxvnp****',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '集群所在的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ComputeResource' => 
                        array (
                          'description' => '计算预留资源规格。1 ACU约等于1核4 GB。计算资源用于数据计算，增加计算资源能加快查询速度，可以根据集群实际性能按需弹性扩缩。',
                          'type' => 'string',
                          'example' => '16ACU',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1syh8vvw8yech7n****',
                        ),
                        'DBVersion' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版数据库版本，当前仅支持**5.0**版本。',
                          'type' => 'string',
                          'example' => '5.0',
                        ),
                        'DBClusterStatus' => 
                        array (
                          'description' => '集群状态，取值说明：
- **Preparing**：准备中
* **Creating**：创建中
* **Running**：运行中
* **Deleting**：删除中
- **Restoring**：备份恢复中
* **ClassChanging**：变配中
* **NetAddressCreating**：创建网络中
* **NetAddressDeleting**：删除网络中
* **NetAddressModifying**：修改网络中',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmyiu4ekp****',
                        ),
                        'DBClusterNetworkType' => 
                        array (
                          'description' => '集群网络类型。仅支持**VPC**（专有网络）类型。',
                          'type' => 'string',
                          'example' => 'VPC',
                          'default' => 'VPC',
                        ),
                        'DBClusterDescription' => 
                        array (
                          'description' => '集群的描述信息。',
                          'type' => 'string',
                          'example' => 'adb_test',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '集群所在的可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'Engine' => 
                        array (
                          'description' => '集群引擎，固定为**AnalyticDB**。',
                          'type' => 'string',
                          'example' => 'AnalyticDB',
                        ),
                        'ReservedACU' => 
                        array (
                          'description' => '集群剩余可分配计算预留资源。1 ACU约等于1核4 GB。',
                          'type' => 'string',
                          'example' => '32ACU',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。
> 您可以调用[TagResources](~~179253~~)接口为目标集群创建标签。',
                                    'type' => 'string',
                                    'example' => 'tag1',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'test1',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Category' => 
                        array (
                          'type' => 'string',
                        ),
                        'InnerPort' => 
                        array (
                          'type' => 'string',
                        ),
                        'VPCCloudInstanceId' => 
                        array (
                          'type' => 'string',
                        ),
                        'InnerIp' => 
                        array (
                          'type' => 'string',
                        ),
                        'DtsJobId' => 
                        array (
                          'type' => 'string',
                        ),
                        'ElasticIOResource' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'RdsInstanceId' => 
                        array (
                          'type' => 'string',
                        ),
                        'ExecutorCount' => 
                        array (
                          'type' => 'string',
                        ),
                        'DBNodeClass' => 
                        array (
                          'type' => 'string',
                        ),
                        'DiskType' => 
                        array (
                          'type' => 'string',
                        ),
                        'DBNodeStorage' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'DBNodeCount' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'TaskInfo' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'type' => 'string',
                            ),
                            'Status' => 
                            array (
                              'type' => 'string',
                              'enum' => 
                              array (
                                0 => 'RUNNING',
                                1 => 'SUCCEED',
                                2 => 'NOT_RUN',
                              ),
                            ),
                            'Progress' => 
                            array (
                              'type' => 'string',
                            ),
                            'StepList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'StepList' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'StepName' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'StepDesc' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'StepStatus' => 
                                      array (
                                        'type' => 'string',
                                        'enum' => 
                                        array (
                                          0 => 'RUNNING',
                                          1 => 'SUCCEED',
                                          2 => 'NOT_RUN',
                                        ),
                                      ),
                                      'StepProgress' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'StartTime' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'EndTime' => 
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
                        'ProductForm' => 
                        array (
                          'type' => 'string',
                          'enum' => 
                          array (
                            0 => 'IntegrationForm',
                            1 => 'LegacyForm',
                          ),
                        ),
                        'ProductVersion' => 
                        array (
                          'type' => 'string',
                        ),
                        'ReservedNodeSize' => 
                        array (
                          'type' => 'string',
                        ),
                        'ReservedNodeCount' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
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
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"A5EDBA27-AF3E-5966-9503-FD1557E19167\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"Expired\\": \\"false\\",\\n        \\"CreateTime\\": \\"2022-04-01T09:50:18Z\\",\\n        \\"PayType\\": \\"Prepaid\\",\\n        \\"Mode\\": \\"flexible\\",\\n        \\"Port\\": \\"3306\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"StorageResource\\": \\"24ACU\\",\\n        \\"DBClusterId\\": \\"amv-bp163885f8q21****\\",\\n        \\"ConnectionString\\": \\"amv-bp163885f8q21****.ads.aliyuncs.com\\",\\n        \\"DBClusterType\\": \\"Common\\",\\n        \\"CommodityCode\\": \\"ads_pre\\",\\n        \\"ExpireTime\\": \\"2022-07-01T09:50:18Z\\",\\n        \\"LockReason\\": \\"instance_expired\\",\\n        \\"VPCId\\": \\"vpc-bp13h7uzhulpuxvnp****\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ComputeResource\\": \\"16ACU\\",\\n        \\"VSwitchId\\": \\"vsw-bp1syh8vvw8yech7n****\\",\\n        \\"DBVersion\\": \\"5.0\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"DBClusterNetworkType\\": \\"VPC\\",\\n        \\"DBClusterDescription\\": \\"adb_test\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"Engine\\": \\"AnalyticDB\\",\\n        \\"ReservedACU\\": \\"32ACU\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag1\\",\\n              \\"Value\\": \\"test1\\"\\n            }\\n          ]\\n        },\\n        \\"Category\\": \\"\\",\\n        \\"InnerPort\\": \\"\\",\\n        \\"VPCCloudInstanceId\\": \\"\\",\\n        \\"InnerIp\\": \\"\\",\\n        \\"DtsJobId\\": \\"\\",\\n        \\"ElasticIOResource\\": 0,\\n        \\"RdsInstanceId\\": \\"\\",\\n        \\"ExecutorCount\\": \\"\\",\\n        \\"DBNodeClass\\": \\"\\",\\n        \\"DiskType\\": \\"\\",\\n        \\"DBNodeStorage\\": 0,\\n        \\"DBNodeCount\\": 0,\\n        \\"TaskInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Status\\": \\"\\",\\n          \\"Progress\\": \\"\\",\\n          \\"StepList\\": {\\n            \\"StepList\\": [\\n              {\\n                \\"StepName\\": \\"\\",\\n                \\"StepDesc\\": \\"\\",\\n                \\"StepStatus\\": \\"\\",\\n                \\"StepProgress\\": \\"\\",\\n                \\"StartTime\\": \\"\\",\\n                \\"EndTime\\": \\"\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"ProductForm\\": \\"\\",\\n        \\"ProductVersion\\": \\"\\",\\n        \\"ReservedNodeSize\\": \\"\\",\\n        \\"ReservedNodeCount\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClustersResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>A5EDBA27-AF3E-5966-9503-FD1557E19167</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <Expired>false</Expired>\\n        <CreateTime>2022-04-01T09:50:18Z</CreateTime>\\n        <PayType>Prepaid</PayType>\\n        <Mode>flexible</Mode>\\n        <Port>3306</Port>\\n        <LockMode>Unlock</LockMode>\\n        <StorageResource>24ACU</StorageResource>\\n        <DBClusterId>amv-bp163885f8q21****</DBClusterId>\\n        <ConnectionString>amv-bp163885f8q21****.ads.aliyuncs.com</ConnectionString>\\n        <DBClusterType>Common</DBClusterType>\\n        <CommodityCode>ads_pre</CommodityCode>\\n        <ExpireTime>2022-07-01T09:50:18Z</ExpireTime>\\n        <LockReason>instance_expired</LockReason>\\n        <VPCId>vpc-bp13h7uzhulpuxvnp****</VPCId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ComputeResource>16ACU</ComputeResource>\\n        <VSwitchId>vsw-bp1syh8vvw8yech7n****</VSwitchId>\\n        <DBVersion>5.0</DBVersion>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n        <DBClusterNetworkType>VPC</DBClusterNetworkType>\\n        <DBClusterDescription>adb_test</DBClusterDescription>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Engine>AnalyticDB</Engine>\\n        <ReservedACU>32ACU</ReservedACU>\\n    </Items>\\n</DescribeDBClustersResponse>","errorExample":""}]',
      'title' => '查询集群列表',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeDBClusterAttribute' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '130313',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsQEKELU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口可以查询AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-wz9509beptiz****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBCluster' => 
                  array (
                    'description' => 'AnalyticDB MySQL湖仓版（3.0）集群信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '集群详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreationTime' => 
                        array (
                          'description' => '集群创建时间。UTC时间，格式为`yyyy-MM-ddThh:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2022-07-01T09:50:18Z',
                        ),
                        'Expired' => 
                        array (
                          'description' => '包年包月集群是否过期。取值说明：
- **true**：已过期。
- **false**：未过期。
> - 如果集群已过期，在一定时间内集群会被锁定甚至释放。建议您进行续费操作，详情请参见[续费说明](~~135248~~)。
- 按量付费集群不返回此参数。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'MaintainTime' => 
                        array (
                          'description' => '集群的可维护时间。UTC时间，格式为`HH:mmZ-HH:mmZ`。
> 更多关于可维护时间段的信息，请参见[设置可维护时间段](~~122569~~)。',
                          'type' => 'string',
                          'example' => '04:00Z-05:00Z',
                        ),
                        'PayType' => 
                        array (
                          'description' => '集群付费类型，取值说明：
* **Postpaid**：按量付费。
* **Prepaid**：包年包月。',
                          'type' => 'string',
                          'example' => 'Prepaid',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。
> 您可以调用[TagResources](~~179253~~)接口为目标集群创建标签。',
                                    'type' => 'string',
                                    'example' => 'tag1',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'test1',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Mode' => 
                        array (
                          'description' => '集群模式。默认返回**flexible**，表示弹性模式集群。',
                          'type' => 'string',
                          'example' => 'flexible',
                        ),
                        'Port' => 
                        array (
                          'description' => '集群端口号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3306',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '集群的锁定模式，取值说明：
- **Unlock**：未锁定。
- **ManualLock**：手动触发锁定。
- **LockByExpiration**：集群到期自动锁定。',
                          'type' => 'string',
                          'example' => 'ManualLock',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '集群引擎版本。',
                          'type' => 'string',
                          'example' => '3.1.16',
                          'default' => '3.1.7.0',
                        ),
                        'StorageResource' => 
                        array (
                          'description' => '存储预留资源规格。1 ACU约等于1核4 GB。存储资源用于数据读写，增加该资源能提高集群读写能力。',
                          'type' => 'string',
                          'example' => '24ACU',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
                          'type' => 'string',
                          'example' => 'amv-wz9509beptiz****',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '集群的公网连接地址。',
                          'type' => 'string',
                          'example' => 'amv-wz9509beptiz****.ads.aliyuncs.com',
                        ),
                        'DBClusterType' => 
                        array (
                          'description' => '集群类型。默认返回**Common**，表示常规集群。',
                          'type' => 'string',
                          'example' => 'Common',
                        ),
                        'CommodityCode' => 
                        array (
                          'description' => '商品付费类型，取值说明：
- **ads**：按量付费商品。
- **ads_pre**：包年包月商品。',
                          'type' => 'string',
                          'example' => 'ads_pre',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '集群到期时间。
- 若集群付费类型为包年包月，则返回实际到期时间。
- 若集群付费类型为按量付费，则返回为空。',
                          'type' => 'string',
                          'example' => '2022-10-01T09:50:18Z',
                        ),
                        'LockReason' => 
                        array (
                          'description' => '集群锁定原因。
> 仅当集群被锁定时会返回该参数，固定为**instance_expire**。',
                          'type' => 'string',
                          'example' => 'instance_expire',
                        ),
                        'VPCId' => 
                        array (
                          'description' => '专有网络（VPC）ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp13h7uzhulpu****',
                        ),
                        'ComputeResource' => 
                        array (
                          'description' => '计算预留资源规格。1 ACU约等于1核4 GB。计算资源用于数据计算，增加计算资源能加快查询速度，可以根据集群实际性能按需弹性扩缩。',
                          'type' => 'string',
                          'example' => '16ACU',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '集群所在的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-uf629gydd54ld****',
                        ),
                        'DBVersion' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版集群的版本，当前仅支持**5.0**版本。',
                          'type' => 'string',
                          'example' => '5.0',
                        ),
                        'DBClusterStatus' => 
                        array (
                          'description' => '集群状态。取值说明：
- **Preparing**：准备中
- **Creating**：创建中
- **Running**：运行中
- **Deleting**：删除中
- **Restoring**：备份恢复中
- **ClassChanging**：变配中
- **NetAddressCreating**：创建网络中
- **NetAddressDeleting**：删除网络中
- **NetAddressModifying**：修改网络中',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmyiu4ekp****',
                        ),
                        'DBClusterNetworkType' => 
                        array (
                          'description' => '集群网络类型。仅支持**VPC**（专有网络）类型。',
                          'type' => 'string',
                          'example' => 'VPC',
                          'default' => 'VPC',
                        ),
                        'DBClusterDescription' => 
                        array (
                          'description' => '集群的描述信息。',
                          'type' => 'string',
                          'example' => 'adb_test',
                        ),
                        'UserENIStatus' => 
                        array (
                          'description' => '是否已启用ENI（Elastic Network Interface，弹性网卡）网络，取值说明：
- **true**：已启用。
- **false**：未启用。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '集群所在的可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'Engine' => 
                        array (
                          'description' => '集群引擎，固定为**AnalyticDB**。',
                          'type' => 'string',
                          'example' => 'AnalyticDB',
                        ),
                        'ReservedACU' => 
                        array (
                          'description' => '集群剩余可分配计算预留资源。1 ACU约等于1核4 GB。',
                          'type' => 'string',
                          'example' => '24ACU',
                        ),
                        'ComputeResourceTotal' => 
                        array (
                          'description' => '集群计算总资源量。1 ACU约等于1核4 GB。',
                          'type' => 'string',
                          'example' => '48ACU',
                        ),
                        'StorageResourceTotal' => 
                        array (
                          'description' => '集群存储总资源量。1 ACU约等于1核4 GB。',
                          'type' => 'string',
                          'example' => '24ACU',
                        ),
                        'SupportedFeatures' => 
                        array (
                          'description' => '预留参数，不涉及',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'description' => '预留参数，不涉及',
                            'example' => '预留参数，不涉及',
                          ),
                        ),
                        'ProductForm' => 
                        array (
                          'type' => 'string',
                          'enum' => 
                          array (
                            0 => 'IntegrationForm',
                            1 => 'LegacyForm',
                          ),
                        ),
                        'ReservedNodeSize' => 
                        array (
                          'type' => 'string',
                        ),
                        'ReservedNodeCount' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'ClickhouseEngineEnabled' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'ClickhouseEngineCacheSize' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'ProductVersion' => 
                        array (
                          'type' => 'string',
                        ),
                        'KmsId' => 
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
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\",\\n  \\"Items\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"CreationTime\\": \\"2022-07-01T09:50:18Z\\",\\n        \\"Expired\\": \\"false\\",\\n        \\"MaintainTime\\": \\"04:00Z-05:00Z\\",\\n        \\"PayType\\": \\"Prepaid\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag1\\",\\n              \\"Value\\": \\"test1\\"\\n            }\\n          ]\\n        },\\n        \\"Mode\\": \\"flexible\\",\\n        \\"Port\\": 3306,\\n        \\"LockMode\\": \\"ManualLock\\",\\n        \\"EngineVersion\\": \\"3.1.16\\",\\n        \\"StorageResource\\": \\"24ACU\\",\\n        \\"DBClusterId\\": \\"amv-wz9509beptiz****\\",\\n        \\"ConnectionString\\": \\"amv-wz9509beptiz****.ads.aliyuncs.com\\",\\n        \\"DBClusterType\\": \\"Common\\",\\n        \\"CommodityCode\\": \\"ads_pre\\",\\n        \\"ExpireTime\\": \\"2022-10-01T09:50:18Z\\",\\n        \\"LockReason\\": \\"instance_expire\\",\\n        \\"VPCId\\": \\"vpc-bp13h7uzhulpu****\\",\\n        \\"ComputeResource\\": \\"16ACU\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"VSwitchId\\": \\"vsw-uf629gydd54ld****\\",\\n        \\"DBVersion\\": \\"5.0\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"DBClusterNetworkType\\": \\"VPC\\",\\n        \\"DBClusterDescription\\": \\"adb_test\\",\\n        \\"UserENIStatus\\": false,\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"Engine\\": \\"AnalyticDB\\",\\n        \\"ReservedACU\\": \\"24ACU\\",\\n        \\"ComputeResourceTotal\\": \\"48ACU\\",\\n        \\"StorageResourceTotal\\": \\"24ACU\\",\\n        \\"SupportedFeatures\\": {\\n          \\"key\\": \\"预留参数，不涉及\\"\\n        },\\n        \\"ProductForm\\": \\"\\",\\n        \\"ReservedNodeSize\\": \\"\\",\\n        \\"ReservedNodeCount\\": 0,\\n        \\"ClickhouseEngineEnabled\\": true,\\n        \\"ClickhouseEngineCacheSize\\": 0,\\n        \\"ProductVersion\\": \\"\\",\\n        \\"KmsId\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterAttributeResponse>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n    <Items>\\n        <CreationTime>2022-07-01T09:50:18Z</CreationTime>\\n        <Expired>false</Expired>\\n        <MaintainTime>04:00Z-05:00Z</MaintainTime>\\n        <PayType>Prepaid</PayType>\\n        <Mode>flexible</Mode>\\n        <Port>3306</Port>\\n        <LockMode>ManualLock</LockMode>\\n        <EngineVersion>3.1.16</EngineVersion>\\n        <StorageResource>24ACU</StorageResource>\\n        <DBClusterId>amv-wz9509beptiz****</DBClusterId>\\n        <ConnectionString>amv-wz9509beptiz****.ads.aliyuncs.com</ConnectionString>\\n        <DBClusterType>Common</DBClusterType>\\n        <CommodityCode>ads_pre</CommodityCode>\\n        <ExpireTime>2022-10-01T09:50:18Z</ExpireTime>\\n        <LockReason>instance_expire</LockReason>\\n        <VPCId>vpc-bp13h7uzhulpu****</VPCId>\\n        <ComputeResource>16ACU</ComputeResource>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <VSwitchId>vsw-uf629gydd54ld****</VSwitchId>\\n        <DBVersion>5.0</DBVersion>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n        <DBClusterNetworkType>VPC</DBClusterNetworkType>\\n        <DBClusterDescription>adb_test</DBClusterDescription>\\n        <UserENIStatus>false</UserENIStatus>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Engine>AnalyticDB</Engine>\\n        <ReservedACU>24ACU</ReservedACU>\\n        <ComputeResourceTotal>48ACU</ComputeResourceTotal>\\n        <StorageResourceTotal>24ACU</StorageResourceTotal>\\n    </Items>\\n</DescribeDBClusterAttributeResponse>","errorExample":""}]',
      'title' => '查询集群详细信息',
      'summary' => '查看指定AnalyticDB MySQL湖仓版（3.0）集群的详细信息。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DeleteDBCluster' => 
    array (
      'summary' => '删除AnalyticDB MySQL湖仓版（3.0）集群。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1r053byu48p****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'amv-bp1r053byu48p****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.Cluster.InvalidWorkerState',
            'errorMessage' => 'The state of the worker does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ACS.Cluster.ElasticPlanJobsExists',
            'errorMessage' => 'Operation failed. Ongoing elastic plan jobs exist.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"amv-bp1r053byu48p****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBClusterResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <DBClusterId>amv-bp1r053byu48p****</DBClusterId>\\n</DeleteDBClusterResponse>","errorExample":""}]',
      'title' => '释放集群',
      'description' => '### 注意事项
- 仅支持删除包年包月类型的集群。
- 当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyDBClusterDescription' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群描述。

- 不能以`http://`或者`https`开头；
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adb_test',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '17F57FEE-EA4F-4337-8D2E-9C23CAA63D74',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterDescription.Malformed',
            'errorMessage' => 'The specified parameter DBClusterDescription is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"17F57FEE-EA4F-4337-8D2E-9C23CAA63D74\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterDescriptionResponse>\\n    <RequestId>17F57FEE-EA4F-4337-8D2E-9C23CAA63D74</RequestId>\\n</ModifyDBClusterDescriptionResponse>","errorExample":""}]',
      'title' => '变更集群描述',
      'summary' => '修改指定AnalyticDB MySQL湖仓版（3.0）集群的描述信息，方便集群的维护管理。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DeleteProcessInstance' => 
    array (
      'summary' => '用于删除工作流实例。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '湖仓版（3.0）集群ID。
> 调用[DescribeDBClusters](~~612397~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-wz9rq819u71ig****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID，是项目的唯一标识。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '9839028042592',
          ),
        ),
        3 => 
        array (
          'name' => 'ProcessInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '进度实例ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4017',
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
              'Data' => 
              array (
                'description' => '返回执行结果，取值说明：
- **true**：添加成功。
- **false**：添加失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '调用结果的信息。取值说明：
- 请求正常，返回**Success**。 
- 请求异常，返回具体异常信息。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '115F9CCA-EF2E-5F91-AB60-4961D52FEAB4',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，取值说明：
- **true**：成功。
- **false**：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"115F9CCA-EF2E-5F91-AB60-4961D52FEAB4\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除指定的实例',
      'description' => '- 公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeClusterNetInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
        'abilityTreeCode' => '133667',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads4DZDZG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-wz9dqvn0o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'Engine',
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
              'ClusterNetworkType' => 
              array (
                'description' => '集群网络类型，当前仅支持专有网络，取值固定为**VPC**。',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69A29B65-CD0C-52B1-BE42-8B454569747F',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Address' => 
                  array (
                    'description' => '详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '集群列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。
> 当NetType取值为Public时，交换机ID返回为空。',
                          'type' => 'string',
                          'example' => 'vsw-bp1syh8vvw8yec****',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '集群的网络连接地址。
- 当网络类型为VPC时，ConnectionString为VPC地址。
- 当网络类型为Public时，ConnectionString为公网地址。',
                          'type' => 'string',
                          'example' => 'amv-wz9dqvn0o7****.ads.aliyuncs.com',
                        ),
                        'NetType' => 
                        array (
                          'description' => '网络类型。取值说明：
- **Public**：公网。
- **VPC**：VPC网络。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'Port' => 
                        array (
                          'description' => '端口号。固定为**3306**。',
                          'type' => 'string',
                          'example' => '3306',
                        ),
                        'VPCId' => 
                        array (
                          'description' => 'VPC ID。
> 当NetType取值为Public时，VPC ID返回为空。',
                          'type' => 'string',
                          'example' => 'vpc-8vbhucmd5b****',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => 'IP地址。
- 当网络类型为VPC时，IPAddress为私网IP地址。
- 当网络类型为Public时，IPAddress为连接数据库的客户端IP地址。',
                          'type' => 'string',
                          'example' => '192.168.xx.xx',
                        ),
                        'ConnectionStringPrefix' => 
                        array (
                          'description' => '网络地址的前缀。
- 当网络类型为VPC时，ConnectionStringPrefix为VPC地址的前辍。
- 当网络类型为Public时，ConnectionStringPrefix为数据库公网连接地址的前缀。',
                          'type' => 'string',
                          'example' => 'amv-wz9dqvn0o7****',
                        ),
                        'Ports' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ports' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Port' => 
                                  array (
                                    'type' => 'string',
                                  ),
                                  'Protocol' => 
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
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.InvalidParameter.%s',
            'errorMessage' => 'Parameter %s is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterNetworkType\\": \\"VPC\\",\\n  \\"RequestId\\": \\"69A29B65-CD0C-52B1-BE42-8B454569747F\\",\\n  \\"Items\\": {\\n    \\"Address\\": [\\n      {\\n        \\"VSwitchId\\": \\"vsw-bp1syh8vvw8yec****\\",\\n        \\"ConnectionString\\": \\"amv-wz9dqvn0o7****.ads.aliyuncs.com\\",\\n        \\"NetType\\": \\"VPC\\",\\n        \\"Port\\": \\"3306\\",\\n        \\"VPCId\\": \\"vpc-8vbhucmd5b****\\",\\n        \\"IPAddress\\": \\"192.168.xx.xx\\",\\n        \\"ConnectionStringPrefix\\": \\"amv-wz9dqvn0o7****\\",\\n        \\"Ports\\": {\\n          \\"ports\\": [\\n            {\\n              \\"Port\\": \\"\\",\\n              \\"Protocol\\": \\"\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterNetInfoResponse>\\n    <ClusterNetworkType>VPC</ClusterNetworkType>\\n    <RequestId>69A29B65-CD0C-52B1-BE42-8B454569747F</RequestId>\\n    <Items>\\n        <VSwitchId>vsw-bp1syh8vvw8yec****</VSwitchId>\\n        <ConnectionString>amv-wz9dqvn0o7****.ads.aliyuncs.com</ConnectionString>\\n        <NetType>VPC</NetType>\\n        <Port>3306</Port>\\n        <VPCId>vpc-8vbhucmd5b****</VPCId>\\n        <IPAddress>192.168.xx.xx</IPAddress>\\n        <ConnectionStringPrefix>amv-wz9dqvn0o7****</ConnectionStringPrefix>\\n    </Items>\\n</DescribeClusterNetInfoResponse>","errorExample":""}]',
      'title' => '查询网络信息',
      'summary' => '调用DescribeDBClusterNetInfo接口查询指定AnalyticDB MySQL湖仓版（3.0）集群的网络信息。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'AllocateClusterPublicConnection' => 
    array (
      'summary' => '为AnalyticDB MySQL湖仓版（3.0）集群申请公网连接地址。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '131191',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads4DZDZG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1z5d2q71is2****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定义公网连接地址的前缀。
- 以小写字母开头，可包含小写字母、数字和中划线（-）；
- 长度不超过30个字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'test12',
          ),
        ),
        2 => 
        array (
          'name' => 'Engine',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '868EF07F-D0B2-5043-B092-0C14CD00B65A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidConnectionStringPrefix.Malformed',
            'errorMessage' => 'The specified connection string is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'ACS.InvalidParameter.%s',
            'errorMessage' => 'Parameter %s is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"868EF07F-D0B2-5043-B092-0C14CD00B65A\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateClusterPublicConnectionResponse>\\n    <RequestId>868EF07F-D0B2-5043-B092-0C14CD00B65A</RequestId>\\n</AllocateClusterPublicConnectionResponse>","errorExample":""}]',
      'title' => '申请公网地址',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ReleaseClusterPublicConnection' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '131192',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads4DZDZG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'Engine',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A94B6C02-7BD4-5D67-9776-3AC8317E8DD5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A94B6C02-7BD4-5D67-9776-3AC8317E8DD5\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseClusterPublicConnectionResponse>\\n    <RequestId>A94B6C02-7BD4-5D67-9776-3AC8317E8DD5</RequestId>\\n</ReleaseClusterPublicConnectionResponse>","errorExample":""}]',
      'title' => '释放公网地址',
      'summary' => '释放指定AnalyticDB MySQL湖仓版（3.0）集群的公网连接地址。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyClusterConnectionString' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定义公网连接地址的前缀。
- 以小写字母开头，可包含小写字母、数字和中划线（-）；
- 长度不超过30个字符。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-123',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前AnalyticDB MySQL湖仓版（3.0）集群的公网连接地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp11q28kvl688****.ads.aliyuncs.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口号。固定为**3306**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '3306',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '370D09FD-442A-5225-AAD3-7362CAE39177',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"370D09FD-442A-5225-AAD3-7362CAE39177\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyClusterConnectionStringResponse>\\n    <RequestId>370D09FD-442A-5225-AAD3-7362CAE39177</RequestId>\\n</ModifyClusterConnectionStringResponse>","errorExample":""}]',
      'title' => '修改公网连接地址',
      'summary' => '修改指定AnalyticDB MySQL湖仓版（3.0）集群的公网连接地址。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeClusterAccessWhiteList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp11q28kvl688****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '370D09FD-442A-5225-AAD3-7362CAE39177',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'IPArray' => 
                  array (
                    'description' => 'AnalyticDB MySQL湖仓版（3.0）集群的IP白名单分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'AnalyticDB MySQL湖仓版（3.0）集群的IP白名单分组列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterIPArrayAttribute' => 
                        array (
                          'description' => '白名单分组属性。
>  控制台不显示带有**hidden**属性的分组，带有该标签的分组通常是用于访问DTS、PolarDB服务的。

',
                          'type' => 'string',
                          'example' => 'hidden',
                        ),
                        'SecurityIPList' => 
                        array (
                          'description' => 'IP白名单分组下的IP列表，最多500个，以英文逗号（,）隔开。',
                          'type' => 'string',
                          'example' => '127.0.xx.xx',
                        ),
                        'DBClusterIPArrayName' => 
                        array (
                          'description' => 'IP白名单分组名称。

单个集群最多支持50个白名单分组。',
                          'type' => 'string',
                          'example' => 'test',
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
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"370D09FD-442A-5225-AAD3-7362CAE39177\\",\\n  \\"Items\\": {\\n    \\"IPArray\\": [\\n      {\\n        \\"DBClusterIPArrayAttribute\\": \\"hidden\\",\\n        \\"SecurityIPList\\": \\"127.0.xx.xx\\",\\n        \\"DBClusterIPArrayName\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterAccessWhiteListResponse>\\n    <RequestId>370D09FD-442A-5225-AAD3-7362CAE39177</RequestId>\\n    <Items>\\n        <DBClusterIPArrayAttribute>hidden</DBClusterIPArrayAttribute>\\n        <SecurityIPList>127.0.xx.xx</SecurityIPList>\\n        <DBClusterIPArrayName>test</DBClusterIPArrayName>\\n    </Items>\\n</DescribeClusterAccessWhiteListResponse>","errorExample":""}]',
      'title' => '查询白名单',
      'summary' => '查看指定AnalyticDB MySQL湖仓版（3.0）集群的IP白名单。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyClusterAccessWhiteList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的IP白名单，多个IP地址之间以英文逗号（,）隔开，不可重复，最多500个。支持如下两种格式：
- IP地址形式，例如：10.23.xx.xx。
- CIDR形式，例如：10.23.xx.xx/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10.23.xx.xx',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterIPArrayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组名称，默认操作Default分组。

- IP白名单分组名称以小写字母开头、以数字或小写字母结尾，可包含小写字母、数字及下划线（_），长度为2~32个字符。
- 单个集群最多支持50个白名单分组。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
            'default' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterIPArrayAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组属性，默认为空。
>  控制台不显示带有“hidden”属性的分组，带有该标签的分组通常是用于访问DTS、PolarDB服务的。',
            'type' => 'string',
            'required' => false,
            'example' => 'hidden',
          ),
        ),
        4 => 
        array (
          'name' => 'ModifyMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改白名单的方式，取值：
- **Cover**（默认值）：覆盖原IP白名单。
- **Append**：追加IP。
- **Delete**：删除IP。',
            'type' => 'string',
            'required' => false,
            'example' => 'Cover',
            'default' => 'Cover',
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
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1564657730',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '370D09FD-442A-5225-AAD3-7362CAE39177',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'amv-bp11q28kvl688****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'SecurityIPList.Duplicate',
            'errorMessage' => 'The specified IP address is duplicate.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterIPArrayName.Malformed',
            'errorMessage' => 'The specified parameter DBClusterIPArrayName is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Malformed',
            'errorMessage' => 'The specified SecurityIPList is incorrectly formatted.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Duplicate',
            'errorMessage' => 'Specified security IP list is not valid: Duplicate IP address in the list',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 1564657730,\\n  \\"RequestId\\": \\"370D09FD-442A-5225-AAD3-7362CAE39177\\",\\n  \\"DBClusterId\\": \\"amv-bp11q28kvl688****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyClusterAccessWhiteListResponse>\\n    <TaskId>1564657730</TaskId>\\n    <RequestId>370D09FD-442A-5225-AAD3-7362CAE39177</RequestId>\\n    <DBClusterId>amv-bp11q28kvl688****</DBClusterId>\\n</ModifyClusterAccessWhiteListResponse>","errorExample":""}]',
      'title' => '修改白名单',
      'summary' => '修改指定AnalyticDB MySQL湖仓版（3.0）集群的IP白名单。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'CreateDBResourceGroup' => 
    array (
      'summary' => '为指定的AnalyticDB MySQL湖仓版（3.0）集群创建资源组。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
- 长度不超过255个字符。
- 必须以数字、大写字母或小写字母开头。
- 可包含数字、大写字母、小写字母、中划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_group',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组类型，取值：
- **Interactive**
- **Job**
> 关于湖仓版资源组的详细信息，请参见[资源组介绍（湖仓版）](~~428610~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Job',
            'enum' => 
            array (
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'MinComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '最小计算预留资源，单位为ACU。
- 当资源组类型为Interactive时，计算预留资源最小为16 ACU。
- 当资源组类型为Job时，计算预留资源最小为0 ACU。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大计算预留资源，单位为ACU。
- 当资源组类型为Interactive时，计算预留资源最大为集群当前未分配资源，步长为16 ACU。
- 当资源组类型为Job时，计算预留资源最大为集群当前未分配资源，步长为8 ACU。',
            'type' => 'string',
            'required' => false,
            'example' => '48',
          ),
        ),
        5 => 
        array (
          'name' => 'ClusterSizeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数（不涉及）',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        6 => 
        array (
          'name' => 'MinClusterCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数（不涉及）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '无
',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxClusterCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数（不涉及）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '无',
          ),
        ),
        8 => 
        array (
          'name' => 'ClusterMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数（不涉及）',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        9 => 
        array (
          'name' => 'EnableSpot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组是否开启竞价实例功能。开启竞价实例后资源单价降低，但是有概率被释放。仅Job型资源组可以开启。取值：
- **True**：开启竞价实例功能。
- **False**：关闭竞价实例功能。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'True',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~612393~~)接口查看AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        11 => 
        array (
          'name' => 'Rules',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '作业投递规则。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '规则信息列表。',
              'type' => 'object',
              'properties' => 
              array (
                'GroupName' => 
                array (
                  'description' => '资源组名称。
- 长度不超过255个字符。
- 必须以数字、大写字母或小写字母开头。
- 可包含数字、大写字母、小写字母、中划线（-）和下划线（_）。',
                  'type' => 'string',
                  'required' => false,
                ),
                'QueryTime' => 
                array (
                  'description' => '查询执行时间阈值，单位为毫秒（ms）。',
                  'type' => 'string',
                  'required' => false,
                ),
                'TargetGroupName' => 
                array (
                  'description' => '目标资源组名称。',
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
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
                'example' => 'A94B6C02-7BD4-5D67-9776-3AC8317E8DD5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPoolName.Malformed',
            'errorMessage' => 'The specified parameter PoolName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPoolUser.Malformed',
            'errorMessage' => 'The specified parameter PoolUser is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPoolType.Malformed',
            'errorMessage' => 'The specified parameter PoolType is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidMinComputeResource.Malformed',
            'errorMessage' => 'The specified parameter MinComputeResource is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidMaxComputeResource.Malformed',
            'errorMessage' => 'The specified parameter MaxComputeResource is not valid.',
          ),
          7 => 
          array (
            'errorCode' => 'ACS.ResourceGroup.InvalidResourceGroupState',
            'errorMessage' => 'The state of this resource group does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A94B6C02-7BD4-5D67-9776-3AC8317E8DD5\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBResourceGroupResponse>\\n    <RequestId>A94B6C02-7BD4-5D67-9776-3AC8317E8DD5</RequestId>\\n</CreateDBResourceGroupResponse>","errorExample":""}]',
      'title' => '创建资源组',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeDBResourceGroup' => 
    array (
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群的资源组信息。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '136430',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsYXZ2UA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
> 此参数不填写时，默认返回指定集群的所有资源组信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_group',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组类型，取值：
- **Interactive**
- **Job**
> 关于湖仓版资源组的详细信息，请参见[资源组介绍（湖仓版）](~~428610~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Job',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用 [DescribeRegions](~~612393~~) 接口查看集群的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
                'example' => 'A94B6C02-7BD4-5D67-9776-3AC8317E8DD3',
              ),
              'GroupsInfo' => 
              array (
                'description' => '资源组信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源组信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GroupType' => 
                    array (
                      'description' => '资源组类型，取值：
- **Interactive**
- **Job**
> 关于湖仓版资源组的详细信息，请参见[资源组介绍（湖仓版）](~~428610~~)。',
                      'type' => 'string',
                      'example' => 'Job',
                    ),
                    'GroupName' => 
                    array (
                      'description' => '资源组名称。',
                      'type' => 'string',
                      'example' => 'test1',
                    ),
                    'MinComputeResource' => 
                    array (
                      'description' => '最小计算预留资源，单位为ACU。
',
                      'type' => 'string',
                      'example' => '0ACU',
                    ),
                    'MaxComputeResource' => 
                    array (
                      'description' => '最大计算预留资源，单位为ACU。',
                      'type' => 'string',
                      'example' => '512ACU',
                    ),
                    'ClusterSizeResource' => 
                    array (
                      'description' => '预留参数，不涉及',
                      'type' => 'string',
                      'example' => '预留参数，不涉及',
                    ),
                    'MinClusterCount' => 
                    array (
                      'description' => '预留参数，不涉及',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '预留参数，不涉及',
                    ),
                    'MaxClusterCount' => 
                    array (
                      'description' => '预留参数，不涉及',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '预留参数，不涉及',
                    ),
                    'RunningClusterCount' => 
                    array (
                      'description' => '预留参数，不涉及',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '预留参数，不涉及',
                    ),
                    'ClusterMode' => 
                    array (
                      'description' => '预留参数，不涉及',
                      'type' => 'string',
                      'example' => '预留参数，不涉及',
                    ),
                    'ElasticMinComputeResource' => 
                    array (
                      'description' => '最小计算弹性资源，单位为ACU。',
                      'type' => 'string',
                      'example' => '16ACU',
                    ),
                    'EnableSpot' => 
                    array (
                      'description' => '资源组是否开启竞价实例功能。开启竞价实例后资源单价降低，但是有概率被释放。取值：
- **True**：开启竞价实例功能。
- **False**：关闭竞价实例功能。

仅Job型资源组可以为True。',
                      'type' => 'string',
                      'example' => 'True',
                    ),
                    'GroupUsers' => 
                    array (
                      'description' => '资源组绑定的RAM用户。',
                      'type' => 'string',
                      'example' => 'testb,testc',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '资源组创建时间，UTC时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>。',
                      'type' => 'string',
                      'example' => '2022-08-29T03:34:30Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间，UTC时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>。',
                      'type' => 'string',
                      'example' => '2022-08-31T03:34:30Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '资源组状态，取值说明：
- **creating**：创建中
- **ok**：创建成功
- **pendingdelete**：等待删除',
                      'type' => 'string',
                      'example' => 'ok',
                    ),
                    'Rules' => 
                    array (
                      'description' => '作业投递规则。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '规则信息列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'GroupName' => 
                          array (
                            'description' => '资源组名称。',
                            'type' => 'string',
                            'example' => 'user_default',
                          ),
                          'QueryTime' => 
                          array (
                            'description' => '查询执行时间阈值，单位为毫秒（ms）。',
                            'type' => 'string',
                            'example' => '180000',
                          ),
                          'TargetGroupName' => 
                          array (
                            'description' => '目标资源组名称。',
                            'type' => 'string',
                            'example' => 'job',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPoolName.Malformed',
            'errorMessage' => 'The specified parameter PoolName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPoolUser.Malformed',
            'errorMessage' => 'The specified parameter PoolUser is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPoolType.Malformed',
            'errorMessage' => 'The specified parameter PoolType is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidMinComputeResource.Malformed',
            'errorMessage' => 'The specified parameter MinComputeResource is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidMaxComputeResource.Malformed',
            'errorMessage' => 'The specified parameter MaxComputeResource is not valid.',
          ),
        ),
        408 => 
        array (
          0 => 
          array (
            'errorCode' => 'AcsServerTimeOut',
            'errorMessage' => 'The request has failed due to Adb Cloud Service time out.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A94B6C02-7BD4-5D67-9776-3AC8317E8DD3\\",\\n  \\"GroupsInfo\\": [\\n    {\\n      \\"GroupType\\": \\"Job\\",\\n      \\"GroupName\\": \\"test1\\",\\n      \\"MinComputeResource\\": \\"0ACU\\",\\n      \\"MaxComputeResource\\": \\"512ACU\\",\\n      \\"ClusterSizeResource\\": \\"预留参数，不涉及\\",\\n      \\"MinClusterCount\\": 0,\\n      \\"MaxClusterCount\\": 0,\\n      \\"RunningClusterCount\\": 0,\\n      \\"ClusterMode\\": \\"预留参数，不涉及\\",\\n      \\"ElasticMinComputeResource\\": \\"16ACU\\",\\n      \\"EnableSpot\\": \\"True\\",\\n      \\"GroupUsers\\": \\"testb,testc\\",\\n      \\"CreateTime\\": \\"2022-08-29T03:34:30Z\\",\\n      \\"UpdateTime\\": \\"2022-08-31T03:34:30Z\\",\\n      \\"Status\\": \\"ok\\",\\n      \\"Rules\\": [\\n        {\\n          \\"GroupName\\": \\"user_default\\",\\n          \\"QueryTime\\": \\"180000\\",\\n          \\"TargetGroupName\\": \\"job\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBResourceGroupResponse>\\n    <RequestId>A94B6C02-7BD4-5D67-9776-3AC8317E8DD3</RequestId>\\n    <GroupsInfo>\\n        <GroupType>Job</GroupType>\\n        <GroupName>test1</GroupName>\\n        <MinComputeResource>0ACU</MinComputeResource>\\n        <MaxComputeResource>512ACU</MaxComputeResource>\\n        <ClusterSizeResource>预留参数，不涉及</ClusterSizeResource>\\n        <ClusterMode>预留参数，不涉及</ClusterMode>\\n        <ElasticMinComputeResource>16ACU</ElasticMinComputeResource>\\n        <EnableSpot>True</EnableSpot>\\n        <GroupUsers>testb,testc</GroupUsers>\\n        <CreateTime>2022-08-29T03:34:30Z</CreateTime>\\n        <UpdateTime>2022-08-31T03:34:30Z</UpdateTime>\\n        <Status>ok</Status>\\n        <Rules/>\\n    </GroupsInfo>\\n</DescribeDBResourceGroupResponse>","errorExample":""}]',
      'title' => '查询资源组',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyDBResourceGroup' => 
    array (
      'summary' => '变更AnalyticDB MySQL湖仓版（3.0）集群的计算预留资源。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
> 您可以调用[DescribeDBResourceGroup](~~459446~~)接口查看指定集群的资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组类型，取值：
- **Interactive**
- **Job**
> 关于湖仓版资源组的详细信息，请参见[资源组介绍（湖仓版）](~~428610~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Interactive',
            'enum' => 
            array (
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'MinComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '最小计算预留资源。
- 当资源组类型为Interactive时，计算预留资源最小为16ACU。
- 当资源组类型为Job时，计算预留资源最小为0ACU。',
            'type' => 'string',
            'required' => false,
            'example' => '0ACU',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大计算预留资源。
- 当资源组类型为Interactive时，计算预留资源最大为集群当前未分配资源，步长为16ACU。
- 当资源组类型为Job时，计算预留资源最大为集群当前未分配资源，步长为8ACU。',
            'type' => 'string',
            'required' => false,
            'example' => '48ACU',
          ),
        ),
        5 => 
        array (
          'name' => 'ClusterSizeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数（不涉及）。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        6 => 
        array (
          'name' => 'MinClusterCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数（不涉及）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '无
',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxClusterCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数（不涉及）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '无',
          ),
        ),
        8 => 
        array (
          'name' => 'ClusterMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数（不涉及）。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        9 => 
        array (
          'name' => 'EnableSpot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组是否开启竞价实例功能。开启竞价实例后资源单价降低，但是有概率被释放。仅Job型资源组可以开启。取值：
- **True**：开启竞价实例功能。
- **False**：关闭竞价实例功能。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'True',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        11 => 
        array (
          'name' => 'Rules',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '作业投递规则。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '规则信息列表。',
              'type' => 'object',
              'properties' => 
              array (
                'GroupName' => 
                array (
                  'description' => '资源组名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'user_default',
                ),
                'QueryTime' => 
                array (
                  'description' => '查询执行时间阈值，单位为毫秒（ms）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '180000
',
                ),
                'TargetGroupName' => 
                array (
                  'description' => '目标资源组名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'job
',
                ),
              ),
              'required' => false,
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
                'example' => '805F14E1-0186-520E-A6D5-30188D94E8DA',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPoolName.Malformed',
            'errorMessage' => 'The specified parameter PoolName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPoolUser.Malformed',
            'errorMessage' => 'The specified parameter PoolUser is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPoolType.Malformed',
            'errorMessage' => 'The specified parameter PoolType is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidMinComputeResource.Malformed',
            'errorMessage' => 'The specified parameter MinComputeResource is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidMaxComputeResource.Malformed',
            'errorMessage' => 'The specified parameter MaxComputeResource is not valid.',
          ),
          7 => 
          array (
            'errorCode' => 'ACS.ResourceGroup.ElasticPlanExists',
            'errorMessage' => 'This resource group does not support this operation. Elastic plans that have been enabled already exist.',
          ),
          8 => 
          array (
            'errorCode' => 'ACS.ResourceGroup.InvalidResourceGroupState',
            'errorMessage' => 'The state of this resource group does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"805F14E1-0186-520E-A6D5-30188D94E8DA\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBResourceGroupResponse>\\n    <RequestId>805F14E1-0186-520E-A6D5-30188D94E8DA</RequestId>\\n</ModifyDBResourceGroupResponse>","errorExample":""}]',
      'title' => '修改资源组',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DeleteDBResourceGroup' => 
    array (
      'summary' => '调用CreateDBResourceGroup接口删除指定AnalyticDB MySQL湖仓版（3.0）集群的资源组。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
> 您可以调用[DescribeDBResourceGroup](~~612410~~)接口查看指定集群的资源组信息，包括资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_group',
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
                'example' => 'A94B6C02-7BD4-5D67-9776-3AC8317E8DD3',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPoolName.Malformed',
            'errorMessage' => 'The specified parameter PoolName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPoolUser.Malformed',
            'errorMessage' => 'The specified parameter PoolUser is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'ACS.ResourceGroup.ElasticPlanExists',
            'errorMessage' => 'This resource group does not support this operation. Elastic plans that have been enabled already exist.',
          ),
          5 => 
          array (
            'errorCode' => 'ACS.ResourceGroup.InvalidResourceGroupState',
            'errorMessage' => 'The state of this resource group does not support this operation.',
          ),
          6 => 
          array (
            'errorCode' => 'ACS.ResourceGroup.OngoingJobExists',
            'errorMessage' => 'Resource group has ongoing job(s).',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A94B6C02-7BD4-5D67-9776-3AC8317E8DD3\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBResourceGroupResponse>\\n    <RequestId>A94B6C02-7BD4-5D67-9776-3AC8317E8DD3</RequestId>\\n</DeleteDBResourceGroupResponse>","errorExample":""}]',
      'title' => '删除资源组',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'CreateElasticPlan' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> 弹性计划名称的长度为2～30个字符，以字母开头，且只能由字母、数字和下划线组成。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。

>- 如果需要创建弹性资源类型为Interactive资源组的弹性计划（即计算资源类型的弹性计划），必须指定资源组名称。如果需要创建弹性资源类型为查询存储加速服务（EIU）的弹性计划，无需指定资源组名称。
- 调用[DescribeDBResourceGroup](~~459446~~)接口可以查看指定集群的资源组名称。
',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。

> 格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-01T12:01:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。

> 格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2025-01-01T12:01:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建后是否立即启用弹性计划。
取值说明：
- true：立即启用。
- false：不启用。
',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'CronExpression',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cron表达式，表示弹性计划的变配周期和变配时间。',
            'type' => 'string',
            'required' => false,
            'example' => '0 20 14 * * ?',
          ),
        ),
        6 => 
        array (
          'name' => 'TargetSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标规格。
>- 只有弹性资源类型为**存储加速服务弹性计划**并且启用了**存储加速服务(EIU)按比例默认弹性**，可以不填写该参数。其它情况下，该参数为必填项。
- 调用[DescribeElasticPlanSpecifications](~~601278~~)接口可以查看弹性计划支持的弹性变配规格。',
            'type' => 'string',
            'required' => false,
            'example' => '32ACU',
          ),
        ),
        7 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划类型。
取值说明：
- EXECUTOR：Interactive资源组，即计算资源类型。
- WORKER：存储加速服务（EIU）。',
            'type' => 'string',
            'required' => true,
            'example' => 'EXECUTOR',
          ),
        ),
        8 => 
        array (
          'name' => 'AutoScale',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用**存储加速服务(EIU)按比例默认弹性**。
取值说明：
- true：启用。启用后，存储资源会跟随计算资源的弹性伸缩而伸缩，且不支持填写目标规格和Cron表达式。
- false：不启用。
>- Type为WORKER时，本参数必填。Type为EXECUTOR时，本参数不填。
- 整个集群只支持启用一个存储加速服务(EIU)按比例默认弹性的存储弹性计划，启用了此类型的弹性计划以后，无法再启用其他的存储弹性计划。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidEndTime',
            'errorMessage' => 'The end time should be later than current time.',
          ),
          1 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.NameAlreadyExists',
            'errorMessage' => 'The name already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.WorkerNotFound',
            'errorMessage' => 'Worker not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.AutoWorkerPlanExists',
            'errorMessage' => 'Failed to enable the elastic plan. The instance already has an active elastic plan.',
          ),
          4 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.WorkerPlanExists',
            'errorMessage' => 'Failed to enable the elastic plan. At least one active elastic plan already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidStartTimeInterval',
            'errorMessage' => 'The start time of this elastic plan is too closed to another one.',
          ),
          6 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidTodayPlan',
            'errorMessage' => 'Failed to enable this elastic plan. Today\'s schedule time is missed and you should prepare at least %s minutes for us to prepare resource.',
          ),
          7 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidTargetSize',
            'errorMessage' => 'Invalid target size.',
          ),
          8 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidStartTime',
            'errorMessage' => 'Invalid start time.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateElasticPlanResponse>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</CreateElasticPlanResponse>","errorExample":""}]',
      'title' => '创建弹性计划',
      'summary' => '创建AnalyticDB MySQL湖仓版（3.0）集群的弹性计划。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeElasticPlans' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> 不填写弹性计划名称将查询所有弹性计划。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
> - 不填写表示查询所有资源组的弹性计划，包括Interactive资源组类型和存储加速服务（EIU）。
>- 调用[DescribeDBResourceGroup](~~459446~~)接口可以查看集群的资源组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建后是否立即启用弹性计划。
取值说明：
- true：立即启用。
- false：不启用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '每页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~612397~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划类型。 取值说明：

EXECUTOR：Interactive资源组，即计算资源类型。
WORKER：存储加速服务（EIU）。',
            'type' => 'string',
            'required' => false,
            'example' => 'EXECUTOR',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PaginationResponse<List<DescribeElasticPlansResponse>>',
            'description' => 'PaginationResponse<List<DescribeElasticPlansResponse>>',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总计划数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'ElasticPlans' => 
              array (
                'description' => '弹性计划列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '弹性计划。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ElasticPlanName' => 
                    array (
                      'description' => '弹性计划名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Type' => 
                    array (
                      'description' => '弹性计划类型。
取值说明：
- EXECUTORE：Interactive资源组类型，即计算资源类型。
- WORKER：存储加速服务（EIU）。',
                      'type' => 'string',
                      'example' => 'EXECUTOR',
                    ),
                    'Enabled' => 
                    array (
                      'description' => '创建后是否立即启用弹性计划。
取值说明：
- true：立即启用。
- false：不启用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ResourceGroupName' => 
                    array (
                      'description' => '资源组名称。
> 调用[DescribeDBResourceGroup](~~459446~~)接口可以查看集群的资源组名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'TargetSize' => 
                    array (
                      'description' => '目标规格。',
                      'type' => 'string',
                      'example' => '32ACU',
                    ),
                    'NextScheduleTime' => 
                    array (
                      'description' => '下次调度时间。

> 格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-01-01T12:01:00Z',
                    ),
                    'AutoScale' => 
                    array (
                      'description' => '是否**开启存储加速服务(EIU)按比例默认弹性**。
取值说明：
- true：开启。
- false：不开启。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 15,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"ElasticPlans\\": [\\n    {\\n      \\"ElasticPlanName\\": \\"test\\",\\n      \\"Type\\": \\"EXECUTOR\\",\\n      \\"Enabled\\": true,\\n      \\"ResourceGroupName\\": \\"test\\",\\n      \\"TargetSize\\": \\"32ACU\\",\\n      \\"NextScheduleTime\\": \\"2022-01-01T12:01:00Z\\",\\n      \\"AutoScale\\": false\\n    }\\n  ],\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeElasticPlansResponse>\\n    <TotalCount>15</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <ElasticPlans>\\n        <ElasticPlanName>test</ElasticPlanName>\\n        <Type>EXECUTOR</Type>\\n        <Enabled>true</Enabled>\\n        <ResourceGroupName>test</ResourceGroupName>\\n        <TargetSize>32ACU</TargetSize>\\n        <NextScheduleTime>2022-01-01T12:01:00Z</NextScheduleTime>\\n        <AutoScale>false</AutoScale>\\n    </ElasticPlans>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</DescribeElasticPlansResponse>","errorExample":""}]',
      'title' => '查询弹性计划列表',
      'summary' => '根据查询条件查询AnalyticDB MySQL湖仓版（3.0）集群的弹性计划。',
    ),
    'ModifyElasticPlan' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> 调用[DescribeElasticPlans](~~601334~~)接口可以查看指定集群的弹性计划名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。

> 格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-01T12:01:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。

> 格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2025-01-01T12:01:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'CronExpression',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cron表达式，表示弹性计划的变配周期和变配时间。',
            'type' => 'string',
            'required' => false,
            'example' => '0 20 14 * * ?',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标规格。
> - 只有弹性资源类型为**存储加速服务弹性计划**并且启用了**存储加速服务(EIU)按比例默认弹性**，可以不填写该参数。其它情况下，该参数为必填项。
- 调用[DescribeElasticPlanSpecifications](~~601278~~)接口可以查看弹性计划支持的弹性变配规格。',
            'type' => 'string',
            'required' => false,
            'example' => '32ACU',
          ),
        ),
        5 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~129857~~)接口可以查看目标地域下AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyElasticPlanResponse>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</ModifyElasticPlanResponse>","errorExample":""}]',
      'title' => '修改弹性计划',
      'summary' => '修改AnalyticDB MySQL湖仓版（3.0）集群的弹性计划。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'EnableElasticPlan' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> 调用[DescribeElasticPlans](~~601334~~)接口可以查看集群的弹性计划名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.AutoWorkerPlanExists',
            'errorMessage' => 'Failed to enable the elastic plan. The instance already has an active elastic plan.',
          ),
          1 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.WorkerPlanExists',
            'errorMessage' => 'Failed to enable the elastic plan. At least one active elastic plan already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidStartTimeInterval',
            'errorMessage' => 'The start time of this elastic plan is too closed to another one.',
          ),
          3 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidEndTime',
            'errorMessage' => 'The end time should be later than current time.',
          ),
          4 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidTodayPlan',
            'errorMessage' => 'Failed to enable this elastic plan. Today\'s schedule time is missed and you should prepare at least %s minutes for us to prepare resource.',
          ),
          5 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidTargetSize',
            'errorMessage' => 'Invalid target size.',
          ),
          6 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.InvalidStartTime',
            'errorMessage' => 'Invalid start time.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableElasticPlanResponse>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</EnableElasticPlanResponse>","errorExample":""}]',
      'title' => '启用弹性计划',
      'summary' => '启用AnalyticDB MySQL湖仓版（3.0）集群的弹性计划。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DisableElasticPlan' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> 调用[DescribeElasticPlans](~~601334~~)接口可以查看集群的弹性计划名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableElasticPlanResponse>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</DisableElasticPlanResponse>","errorExample":""}]',
      'title' => '停用弹性计划',
      'summary' => '停用AnalyticDB MySQL湖仓版（3.0）集群的弹性计划。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DeleteElasticPlan' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> 调用[DescribeElasticPlans](~~601334~~)接口可以查看集群的弹性计划名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~129857~~)接口可以查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteElasticPlanResponse>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</DeleteElasticPlanResponse>","errorExample":""}]',
      'title' => '删除弹性计划',
      'summary' => '删除AnalyticDB MySQL湖仓版（3.0）集群的弹性计划。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeElasticPlanJobs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> - 不填写弹性计划名称将查询所有弹性计划。
- 调用[DescribeElasticPlans](~~601334~~)接口查看集群的弹性计划名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
> - 不填写表示查询所有资源组的弹性计划，包括Interactive资源组类型和存储加速服务（EIU）。
- 调用[DescribeDBResourceGroup](~~459446~~)接口可以查看集群的资源组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业状态。
取值说明：
- RUNNING：运行中。
- SUCCESSFUL：运行成功。
- FAILED：运行失败。
>  不填写将查询所有状态的弹性计划。',
            'type' => 'string',
            'required' => false,
            'example' => 'SUCCESSFUL',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。
格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-01T12:01:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~129857~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PaginationResponse<List<DescribeElasticPlanJobsResponse>>',
            'description' => 'PaginationResponse<List<DescribeElasticPlanJobsResponse>>',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总作业数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Jobs' => 
              array (
                'description' => '作业列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ElasticPlanName' => 
                    array (
                      'description' => '弹性计划名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Status' => 
                    array (
                      'description' => '作业状态。
取值说明：
- RUNNING：运行中。
- SUCCESSFUL：运行成功。
- FAILED：运行失败。',
                      'type' => 'string',
                      'example' => 'SUCCESSFUL',
                    ),
                    'Type' => 
                    array (
                      'description' => '弹性计划作业类型。
取值说明：
- EXECUTORE：Interactive资源组类型，即计算资源类型。
- WORKER：存储加速服务（EIU）。',
                      'type' => 'string',
                      'example' => 'EXECUTOR',
                    ),
                    'ResourceGroupName' => 
                    array (
                      'description' => '资源组名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '作业开始时间。
> 格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-01-01T11:01:00Z',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '作业结束时间。

> 格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-01-01T12:01:00Z',
                    ),
                    'TargetSize' => 
                    array (
                      'description' => '目标规格。',
                      'type' => 'string',
                      'example' => '32ACU',
                    ),
                    'TotalAcu' => 
                    array (
                      'description' => '总资源。
> 
- Type取值为EXECUTOR时，本参数表示所属资源组的总计算资源。
- Type取值为WORKER时，本参数表示整个集群的总存储资源。',
                      'type' => 'string',
                      'example' => '32ACU',
                    ),
                    'ReserveAcu' => 
                    array (
                      'description' => '预留资源。
> 
- Type取值为EXECUTOR时，本参数表示当前资源组的预留资源。
- Type取值为WORKER时，本参数表示当前集群的总预留存储资源。',
                      'type' => 'string',
                      'example' => '16ACU',
                    ),
                    'ElasticAcu' => 
                    array (
                      'description' => '弹性资源。
> 
- Type取值为EXECUTOR时，本参数表示当前资源组的弹性资源。
- Type取值为WORKER时，本参数表示当前集群的总存储弹性资源。',
                      'type' => 'string',
                      'example' => '16ACU',
                    ),
                    'InstanceSize' => 
                    array (
                      'description' => '实例数量。
> 
- Type取值为EXECUTOR时，本参数表示当前计算节点数量。
- Type取值为WORKER时，本参数表示当前集群的存储副本集数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。 ',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 15,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Jobs\\": [\\n    {\\n      \\"ElasticPlanName\\": \\"test\\",\\n      \\"Status\\": \\"SUCCESSFUL\\",\\n      \\"Type\\": \\"EXECUTOR\\",\\n      \\"ResourceGroupName\\": \\"test\\",\\n      \\"StartTime\\": \\"2022-01-01T11:01:00Z\\",\\n      \\"EndTime\\": \\"2022-01-01T12:01:00Z\\",\\n      \\"TargetSize\\": \\"32ACU\\",\\n      \\"TotalAcu\\": \\"32ACU\\",\\n      \\"ReserveAcu\\": \\"16ACU\\",\\n      \\"ElasticAcu\\": \\"16ACU\\",\\n      \\"InstanceSize\\": 1\\n    }\\n  ],\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeElasticPlanJobsResponse>\\n    <TotalCount>15</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <Jobs>\\n        <ElasticPlanName>test</ElasticPlanName>\\n        <Status>SUCCESSFUL</Status>\\n        <Type>EXECUTOR</Type>\\n        <ResourceGroupName>test</ResourceGroupName>\\n        <StartTime>2022-01-01T11:01:00Z</StartTime>\\n        <EndTime>2022-01-01T12:01:00Z</EndTime>\\n        <TargetSize>32ACU</TargetSize>\\n        <TotalAcu>32ACU</TotalAcu>\\n        <ReserveAcu>16ACU</ReserveAcu>\\n        <ElasticAcu>16ACU</ElasticAcu>\\n        <InstanceSize>1</InstanceSize>\\n    </Jobs>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</DescribeElasticPlanJobsResponse>","errorExample":""}]',
      'title' => '查询弹性计划作业列表',
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群的弹性计划作业。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeElasticPlanAttribute' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> 调用[DescribeElasticPlans](~~601334~~)接口查看集群的弹性计划名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'description' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'ElasticPlan' => 
              array (
                'description' => '弹性计划。',
                'type' => 'object',
                'properties' => 
                array (
                  'ElasticPlanName' => 
                  array (
                    'description' => '弹性计划名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Type' => 
                  array (
                    'description' => '弹性计划类型。',
                    'type' => 'string',
                    'example' => 'EXECUTOR',
                  ),
                  'Enabled' => 
                  array (
                    'description' => '是否启用。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ResourceGroupName' => 
                  array (
                    'description' => '所属资源组名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'TargetSize' => 
                  array (
                    'description' => '目标规格。',
                    'type' => 'string',
                    'example' => '32ACU',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '开始时间。

> 格式为yyyy-MM-ddTHH:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-01-01T12:01:00Z',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '结束时间。

> 格式为yyyy-MM-ddTHH:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2025-01-01T12:01:00Z',
                  ),
                  'CronExpression' => 
                  array (
                    'description' => 'Cron表达式，表示弹性计划的变配周期和变配时间。',
                    'type' => 'string',
                    'example' => '0 20 14 * * ?',
                  ),
                  'AutoScale' => 
                  array (
                    'description' => '是否启用**存储加速服务(EIU)按比例默认弹性**。
取值说明：
true：启用。启用后，存储资源会跟随计算资源的弹性伸缩而伸缩。
false：不启用。
>整个集群只支持启用一个存储加速服务(EIU)按比例默认弹性的存储弹性计划，启用了此类型的弹性计划以后，无法再启用其他的存储弹性计划。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。 ',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'ACS.ElasticPlan.NotFound',
            'errorMessage' => 'The elastic plan is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ElasticPlan\\": {\\n    \\"ElasticPlanName\\": \\"test\\",\\n    \\"Type\\": \\"EXECUTOR\\",\\n    \\"Enabled\\": true,\\n    \\"ResourceGroupName\\": \\"test\\",\\n    \\"TargetSize\\": \\"32ACU\\",\\n    \\"StartTime\\": \\"2022-01-01T12:01:00Z\\",\\n    \\"EndTime\\": \\"2025-01-01T12:01:00Z\\",\\n    \\"CronExpression\\": \\"0 20 14 * * ?\\",\\n    \\"AutoScale\\": false\\n  },\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeElasticPlanAttributeResponse>\\n    <ElasticPlan>\\n        <ElasticPlanName>test</ElasticPlanName>\\n        <Type>EXECUTOR</Type>\\n        <Enabled>true</Enabled>\\n        <ResourceGroupName>test</ResourceGroupName>\\n        <TargetSize>32ACU</TargetSize>\\n        <StartTime>2022-01-01T12:01:00Z</StartTime>\\n        <EndTime>2025-01-01T12:01:00Z</EndTime>\\n        <CronExpression>0 20 14 * * ?</CronExpression>\\n        <AutoScale>false</AutoScale>\\n    </ElasticPlan>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</DescribeElasticPlanAttributeResponse>","errorExample":""}]',
      'title' => '查询弹性计划详情',
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群的弹性计划详情。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeElasticPlanSpecifications' => 
    array (
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群的不同类型弹性计划支持的规格列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '弹性计划类型。 取值说明：

- EXECUTOR：Interactive资源组，即计算资源类型。
- WORKER：存储加速服务（EIU）。',
            'type' => 'string',
            'required' => true,
            'example' => 'EXECUTOR',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。

>-  查询Interactive资源组的弹性计划（即计算资源类型的弹性计划）支持的规格时，必须指定资源组名称。查询存储加速服务（EIU）的弹性计划支持的规格时，无需指定资源组名称。
-  调用[DescribeDBResourceGroup](~~459446~~)接口可以查看指定集群的资源组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz9509beptiz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PaginationResponse<List<String>>',
            'description' => 'PaginationResponse<List<String>>',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总规格数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'Specifications' => 
              array (
                'description' => '支持的规格列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '支持的规格。',
                  'type' => 'string',
                  'example' => '16ACU',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5C433C2-001F-58E3-99F5-3274C14DF8BD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 5,\\n  \\"Specifications\\": [\\n    \\"16ACU\\"\\n  ],\\n  \\"RequestId\\": \\"A5C433C2-001F-58E3-99F5-3274C14DF8BD\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeElasticPlanSpecificationsResponse>\\n    <TotalCount>10</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>5</PageSize>\\n    <Specifications>16ACU</Specifications>\\n    <RequestId>A5C433C2-001F-58E3-99F5-3274C14DF8BD</RequestId>\\n</DescribeElasticPlanSpecificationsResponse>","errorExample":""}]',
      'title' => '查询弹性计划支持的规格列表',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeAuditLogRecords' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-t4nj8619bz2w3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，UTC时间，格式为：yyyy-MM-ddTHH:mmZ。
> 仅当SQL审计状态为开启时，才能查询到SQL审计日志，且只支持查询30天内的SQL审计日志。如果中途关闭了SQL审计，再次打开时，仅能查询到再次打开后的SQL审计日志。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-08-12T04:17Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，UTC时间，格式为：yyyy-MM-ddTHH:mmZ。
> - 查询结束时间需晚于查询开始时间。
- 查询开始时间与查询结束时间的间隔不能超过24小时。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-08-12T17:08Z',
          ),
        ),
        4 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行目标SQL的数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryKeyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可设置一个字符串类型的值，使用该值作为关键词对返回结果进行搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb',
          ),
        ),
        6 => 
        array (
          'name' => 'SqlType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL类型，取值：
- **DELETE**
- **SELECT**
- **UPDATE**
- **INSERT INTO SELECT**
- **ALTER**
- **DROP**
- **CREATE**

> 每次仅允许传入一种类型查询，若该参数为空，默认查询**SELECT**类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT',
          ),
        ),
        7 => 
        array (
          'name' => 'Succeed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标SQL是否执行成功，取值说明：
* **true**：执行成功。
* **false**：执行失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'HostAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行目标SQL的客户端IP地址和端口号。',
            'type' => 'string',
            'required' => false,
            'example' => '100.104.XX.XX:43908',
          ),
        ),
        9 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按SQL执行时间进行正序或倒序排序，取值说明：
* **asc**：正序。
* **desc**：倒序。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        10 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行目标SQL的用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        11 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据指定字段进行排序，格式为JSON，是一个有序JSON数组，按输入数组的顺序进行复合排序，包含`Field`和`Type`两个字段，例如`[{"Field":"ExecutionStartTime","Type":"Desc"},{"Field":"ScanRows","Type":"Asc"}]`。其中：
* `Field`表示需要排序的字段名，支持如下取值：
    * **HostAddress**：连接数据库的客户端地址。
    * **UserName**：用户名。
    * **ExecutionStartTime**：目标SQL的执行开始时间。
    * **QueryTime**：目标SQL执行时长。
    * **PeakMemoryUsage**：执行目标SQL语句时的峰值内存。
    * **ScanRows**：带数据源的任务的扫描数据行数。
    * **ScanSize**：扫描的数据量。
    * **ScanTime**：扫描数据总耗时。
    * **PlanningTime**：执行计划生成耗时。
    * **WallTime**：查询中的所有算子在各个节点CPU Time的累加值。
    * **ProcessID**：进程ID。

* `Type`表示排序类型，支持如下取值：
    * **Desc**：降序。
    * **Asc**：升序。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Field":"ExecuteTime","Type":"Desc"},{"Field":"HostAddress","Type":"Asc"}]',
          ),
        ),
        12 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **10**（默认值）
- **30**
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '10',
            'default' => '10',
          ),
        ),
        13 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'ProxyUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '列表详情。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '6974',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'string',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8A564B7F-8C00-43C0-8EC5-919FBB70573',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'amv-t4nj8619bz2w3****',
              ),
              'Items' => 
              array (
                'description' => '列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'SQL记录列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostAddress' => 
                    array (
                      'description' => '执行目标SQL的客户端IP地址和端口号。',
                      'type' => 'string',
                      'example' => '100.104.XX.XX:43908',
                    ),
                    'Succeed' => 
                    array (
                      'description' => '目标SQL是否执行成功。取值说明：
- **true**：执行成功。
- **false**：执行失败。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'SQLText' => 
                    array (
                      'description' => 'SQL语句详情。',
                      'type' => 'string',
                      'example' => 'SELECT * FROM adb_hdfs_import_source',
                    ),
                    'TotalTime' => 
                    array (
                      'description' => '目标SQL的执行时长，单位：毫秒（ms）。',
                      'type' => 'string',
                      'example' => '216',
                    ),
                    'ConnId' => 
                    array (
                      'description' => '通信ID。',
                      'type' => 'string',
                      'example' => '14356****',
                    ),
                    'DBName' => 
                    array (
                      'description' => '执行目标SQL的数据库名称。',
                      'type' => 'string',
                      'example' => 'adb_demo',
                    ),
                    'SQLType' => 
                    array (
                      'description' => '目标SQL的类型。',
                      'type' => 'string',
                      'example' => 'SELECT',
                    ),
                    'ExecuteTime' => 
                    array (
                      'description' => '目标SQL的执行开始时间，本地时间，格式为：yyyy-MM-dd HH:mm:ss。',
                      'type' => 'string',
                      'example' => '2022-08-12 10:10:00',
                    ),
                    'ProcessID' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => '202106081752021720161662490345362390',
                    ),
                    'User' => 
                    array (
                      'description' => '执行目标SQL的用户名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"6974\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"RequestId\\": \\"8A564B7F-8C00-43C0-8EC5-919FBB70573\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"amv-t4nj8619bz2w3****\\",\\n  \\"Items\\": [\\n    {\\n      \\"HostAddress\\": \\"100.104.XX.XX:43908\\",\\n      \\"Succeed\\": \\"true\\",\\n      \\"SQLText\\": \\"SELECT * FROM adb_hdfs_import_source\\",\\n      \\"TotalTime\\": \\"216\\",\\n      \\"ConnId\\": \\"14356****\\",\\n      \\"DBName\\": \\"adb_demo\\",\\n      \\"SQLType\\": \\"SELECT\\",\\n      \\"ExecuteTime\\": \\"2022-08-12 10:10:00\\",\\n      \\"ProcessID\\": \\"202106081752021720161662490345362390\\",\\n      \\"User\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAuditLogRecordsResponse>\\n    <TotalCount>6974</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>8A564B7F-8C00-43C0-8EC5-919FBB70573</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>amv-t4nj8619bz2w3****</DBClusterId>\\n    <Items>\\n        <HostAddress>100.104.XX.XX:43908</HostAddress>\\n        <Succeed>true</Succeed>\\n        <SQLText>SELECT * FROM adb_hdfs_import_source</SQLText>\\n        <TotalTime>216</TotalTime>\\n        <ConnId>14356****</ConnId>\\n        <DBName>adb_demo</DBName>\\n        <SQLType>SELECT</SQLType>\\n        <ExecuteTime>2022-08-12 10:10:00</ExecuteTime>\\n        <ProcessID>202106081752021720161662490345362390</ProcessID>\\n        <User>test</User>\\n    </Items>\\n</DescribeAuditLogRecordsResponse>","errorExample":""}]',
      'title' => '查询SQL审计日志',
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群的SQL审计日志。',
      'description' => '- 仅当SQL审计状态为开启时，才能查询到SQL审计日志，且只支持查询30天内的SQL审计日志。如果中途关闭了SQL审计，再次打开时，仅能查询到再次打开后的SQL审计日志。SQL审计日志不记录**INSERT INTO VALUES**、**REPLACE INTO VALUES**和**UPSERT INTO VALUES**操作。
- 当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyAuditLogConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-t4nj8619bz2w3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'AuditLogStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改SQL审计日志的状态。取值说明：
- **on**：开启SQL审计。
- **off**：关闭SQL审计。

> SQL审计功能关闭后，SQL审计日志会被清空。请先查询和导出SQL审计日志，再关闭SQL审计功能。具体操作，请参见[DescribeAuditLogRecords](~~612426~~)。当再次打开审计日志，审计日志将从最近一次打开审计日志的时间开始展示。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'on',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '列表详情。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CDC59E56-BD07-56CA-A05F-B7907DE5C862',
              ),
              'UpdateSucceed' => 
              array (
                'description' => '是否已更新SQL审计的开启状态。取值说明：
- **true**：状态已更新。
- **false**：状态更新失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CDC59E56-BD07-56CA-A05F-B7907DE5C862\\",\\n  \\"UpdateSucceed\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyAuditLogConfigResponse>\\n    <RequestId>CDC59E56-BD07-56CA-A05F-B7907DE5C862</RequestId>\\n    <UpdateSucceed>true</UpdateSucceed>\\n</ModifyAuditLogConfigResponse>","errorExample":""}]',
      'title' => '修改SQL审计日志设置',
      'summary' => '修改AnalyticDB MySQL湖仓版（3.0）集群的SQL审计日志设置。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'CreateAccount' => 
    array (
      'summary' => '为AnalyticDB MySQL湖仓版（3.0）集群创建数据库账号。',
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
        'abilityTreeCode' => '130688',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名称，需符合如下要求：
- 以小写字母开头，以小写字母或数字结尾。
- 由小写字母、数字或下划线（_）组成。
- 长度为2~16个字符。
- 不能使用预留的用户名，如root、admin和opsadmin。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_accout',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号密码。
- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。
- 特殊符号包含：`!@#$%^&*()_+-=`
- 密码长度为8~32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'Test_accout1',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号描述。
- 不能以`http://`或者`https://`开头。
- 长度不超过256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '数据库连接测试账号',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号类型。取值说明：
- **Normal**：普通账号。
- **Super**：高权限账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'Normal',
            'enum' => 
            array (
              0 => 'Super',
              1 => 'Normal',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Engine',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Malformed',
            'errorMessage' => 'The specified parameter AccountPassword is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidAccountDescription.Malformed',
            'errorMessage' => 'The specified parameter AccountDescription is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidAccountType.Malformed',
            'errorMessage' => 'The specified parameter AccountType is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'ACS.Sql.CannotConnect',
            'errorMessage' => 'Cannot connect instance which type is %s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</CreateAccountResponse>","errorExample":""}]',
      'title' => '创建数据库账号',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeAccounts' => 
    array (
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群的数据库账号。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '131026',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。
> 此参数不填写时，默认返回所有数据库账号信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_accout',
          ),
        ),
        2 => 
        array (
          'name' => 'Engine',
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
            'description' => '数据库账号列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9CCFAAB4-97B7-5800-B9F2-685EB596E3EF',
              ),
              'AccountList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBAccount' => 
                  array (
                    'description' => '数据库账号列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '详细信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountName' => 
                        array (
                          'description' => '数据库账号。',
                          'type' => 'string',
                          'example' => 'test_accout',
                        ),
                        'AccountStatus' => 
                        array (
                          'description' => '账号状态。取值说明：
- **Creating**：创建中。
- **Available**：可用。
- **Deleting**：删除中。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'AccountDescription' => 
                        array (
                          'description' => '账号描述。',
                          'type' => 'string',
                          'example' => '测试数据库账号',
                        ),
                        'RamUsers' => 
                        array (
                          'description' => 'RAM用户的账号ID。',
                          'type' => 'string',
                          'example' => '1958134230****',
                        ),
                        'AccountType' => 
                        array (
                          'description' => '账号类型，取值说明：
- **Normal**：普通账号。
- **Super**：高权限账号。',
                          'type' => 'string',
                          'example' => 'Normal',
                        ),
                        'Engine' => 
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'ACS.Sql.CannotConnect',
            'errorMessage' => 'Cannot connect instance which type is %s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9CCFAAB4-97B7-5800-B9F2-685EB596E3EF\\",\\n  \\"AccountList\\": {\\n    \\"DBAccount\\": [\\n      {\\n        \\"AccountName\\": \\"test_accout\\",\\n        \\"AccountStatus\\": \\"Available\\",\\n        \\"AccountDescription\\": \\"测试数据库账号\\",\\n        \\"RamUsers\\": \\"1958134230****\\",\\n        \\"AccountType\\": \\"Normal\\",\\n        \\"Engine\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountsResponse>\\n    <RequestId>9CCFAAB4-97B7-5800-B9F2-685EB596E3EF</RequestId>\\n    <AccountList>\\n        <AccountName>test_accout</AccountName>\\n        <AccountStatus>Available</AccountStatus>\\n        <AccountDescription>测试数据库账号</AccountDescription>\\n        <RamUsers>1958134230****</RamUsers>\\n        <AccountType>Normal</AccountType>\\n    </AccountList>\\n</DescribeAccountsResponse>","errorExample":""}]',
      'title' => '查询数据库账号',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'BindAccount' => 
    array (
      'summary' => '绑定RAM用户与AnalyticDB MySQL湖仓版（3.0）集群的数据库普通账号。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz99d9nh532****',
          ),
        ),
        1 => 
        array (
          'name' => 'RamUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM用户的账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1444832459****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库普通账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_accout',
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
                'example' => 'DFF27323-3868-5F8A-917D-5D1D06B6BC0D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'ACS.Account.NotExist',
            'errorMessage' => 'The account is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'ACS.Account.UserHasBind',
            'errorMessage' => 'The user has been associated with another database account %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ACS.User.DatabaseAccountHasBind',
            'errorMessage' => 'The database account has been bound to %s.',
          ),
          6 => 
          array (
            'errorCode' => 'ACS.InvalidParameter.%s',
            'errorMessage' => 'Parameter %s is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DFF27323-3868-5F8A-917D-5D1D06B6BC0D\\"\\n}","errorExample":""},{"type":"xml","example":"<BindAccountResponse>\\n    <RequestId>DFF27323-3868-5F8A-917D-5D1D06B6BC0D</RequestId>\\n</BindAccountResponse>","errorExample":""}]',
      'title' => '绑定RAM用户与数据库账号',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'UnbindAccount' => 
    array (
      'summary' => '解绑RAM用户与AnalyticDB MySQL湖仓版（3.0）集群的数据库普通账号。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-wz99d9nh5****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。
> 您可以调用[DescribeAccounts](~~612430~~)接口查看指定集群的数据库账号信息，包括数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_accout',
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
                'example' => '93E85E5C-C805-5837-8713-05B69A504EE5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"93E85E5C-C805-5837-8713-05B69A504EE5\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindAccountResponse>\\n    <RequestId>93E85E5C-C805-5837-8713-05B69A504EE5</RequestId>\\n</UnbindAccountResponse>","errorExample":""}]',
      'title' => '解绑RAM用户与数据库账号',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'CheckBindRamUser' => 
    array (
      'summary' => '检查AnalyticDB MySQL湖仓版集群数据库账号绑定的RAM账号。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查询AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-wz9842849v6****',
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
            'description' => '响应模式。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2FB9DCA3-DA56-5B43-A9A0-68E3D0E6AA84',
              ),
              'Result' => 
              array (
                'description' => '任务返回结果。取值说明：
- **true**：数据库账号已绑定RAM用户。
- **false**：数据库账号未绑定RAM用户。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FB9DCA3-DA56-5B43-A9A0-68E3D0E6AA84\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckBindRamUserResponse>\\n    <RequestId>2FB9DCA3-DA56-5B43-A9A0-68E3D0E6AA84</RequestId>\\n    <Result>true</Result>\\n</CheckBindRamUserResponse>","errorExample":""}]',
      'title' => '查询数据库账号是否绑定RAM用户',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ResetAccountPassword' => 
    array (
      'summary' => '重置指定AnalyticDB MySQL湖仓版（3.0）集群的数据库账号密码。',
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
        'abilityTreeCode' => '130691',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。
> 您可以调用[DescribeAccounts](~~612430~~)接口查看指定集群的数据库账号信息，包括数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_accout',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号密码。
- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。
- 特殊符号包含：`!@#$%^&*()_+-=`
- 密码长度为8~32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'Test_accout1',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号描述。
- 不能以`http://`和`https://` 开头。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'AccDesc',
          ),
        ),
        4 => 
        array (
          'name' => 'Engine',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Malformed',
            'errorMessage' => 'The specified parameter AccountPassword is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'ACS.Sql.CannotConnect',
            'errorMessage' => 'Cannot connect instance which type is %s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetAccountPasswordResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ResetAccountPasswordResponse>","errorExample":""}]',
      'title' => '重置数据库账号的密码',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyAccountDescription' => 
    array (
      'summary' => '修改目标AnalyticDB MySQL湖仓版（3.0）集群的数据库账号的备注信息。',
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
        'abilityTreeCode' => '130693',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsQ3E0F2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。
> 您可以调用[DescribeAccounts](~~612430~~)接口查看指定集群的数据库账号信息，包括数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'testacc',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号描述。
- 不能以`http://`、`https:// `开头。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'AccDesc',
          ),
        ),
        3 => 
        array (
          'name' => 'Engine',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountDescription.Malformed',
            'errorMessage' => 'The specified parameter AccountDescription is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'ACS.InvalidParameter.%s',
            'errorMessage' => 'Parameter %s is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountDescriptionResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyAccountDescriptionResponse>","errorExample":""}]',
      'title' => '修改数据库账号的备注信息',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DeleteAccount' => 
    array (
      'summary' => '删除AnalyticDB MySQL湖仓版（3.0）集群的数据库账号。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '130690',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名称。
> 您可以调用[DescribeAccounts](~~612430~~)接口查看指定集群的数据库账号信息，包括账号名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_accout',
          ),
        ),
        2 => 
        array (
          'name' => 'Engine',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccountResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</DeleteAccountResponse>","errorExample":""}]',
      'title' => '删除数据库账号',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyAccountPrivileges' => 
    array (
      'summary' => '修改某一数据库账户的权限。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '159109',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ADB MySQL 3.0湖仓版集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1k5p066e1a****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'account1',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountPrivileges',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '授予的权限列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '权限详情。',
              'type' => 'object',
              'properties' => 
              array (
                'PrivilegeObject' => 
                array (
                  'description' => '权限对象，为库表列的三元组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Database' => 
                    array (
                      'description' => '授权的数据库，当为库、表和列权限级别时此参数必传。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'tsdb1',
                    ),
                    'Table' => 
                    array (
                      'description' => '授权的表，当为表和列权限级别时此参数必传。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'table1',
                    ),
                    'Column' => 
                    array (
                      'description' => '授权的列，当为列权限级别时此参数必传。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'column1',
                    ),
                  ),
                  'required' => false,
                ),
                'Privileges' => 
                array (
                  'description' => '授予的权限列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '权限，来自接口`DescribeEnabledPrivileges`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'select',
                  ),
                  'required' => false,
                ),
                'PrivilegeType' => 
                array (
                  'description' => '权限级别，来自接口`DescribeEnabledPrivileges`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Global',
                ),
              ),
              'required' => false,
            ),
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9DD88DE7-824F-1082-AA57-575AFC6517A8',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.Privilege.ModifyFailed',
            'errorMessage' => 'Failed to modify the account privilege. Make sure that bound account have sufficient database privileges.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'ACS.Parameter.Malformed',
            'errorMessage' => 'The following required parameters are not specified: %s',
          ),
          3 => 
          array (
            'errorCode' => 'ACS.InvalidParameter.%s',
            'errorMessage' => 'Parameter %s is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          5 => 
          array (
            'errorCode' => 'ACS.User.NotBindDatabaseAccount',
            'errorMessage' => 'The user has not been associated with a database account.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9DD88DE7-824F-1082-AA57-575AFC6517A8\\"\\n}","type":"json"}]',
      'title' => ' 修改数据库账户的权限',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeAccountPrivileges' => 
    array (
      'summary' => '获取给定数据库账号在某个级别拥有的权限。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '159083',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1k5p066e1a****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查看权限的数据库账号名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'account1',
          ),
        ),
        3 => 
        array (
          'name' => 'PrivilegeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查看的权限级别，来自接口`DescribeEnabledPrivileges`。',
            'type' => 'string',
            'required' => false,
            'example' => 'Global',
            'default' => 'Database',
          ),
        ),
        4 => 
        array (
          'name' => 'DatabasePrivilegeObject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据数据库名称进行筛选。只有当权限级别为库、表、列时才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'db1',
          ),
        ),
        5 => 
        array (
          'name' => 'TablePrivilegeObject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据表名称进行筛选。可以和库名称一起进行联合筛选，只有当权限级别是表和列时该参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'table1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页号，从1开始，默认值1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页含有的条目数量，默认每页20条。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'ColumnPrivilegeObject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据列名称进行筛选，只有当权限级别是列时该参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'col1',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DA32480A-E3E5-1BE7-BA98-724551DC04C8',
              ),
              'Data' => 
              array (
                'description' => '权限详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '权限详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PrivilegeType' => 
                    array (
                      'description' => '权限级别，可以是全局`Global`、库`Databae`、表`Table`和列`Column`，来自接口`DescribeEnabledPrivileges`。',
                      'type' => 'string',
                      'example' => 'Column',
                    ),
                    'PrivilegeObject' => 
                    array (
                      'description' => '权限对象，为库表列的三元组，以及额外的描述信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Database' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'db1',
                        ),
                        'Table' => 
                        array (
                          'description' => '表名称。',
                          'type' => 'string',
                          'example' => 'tabl1',
                        ),
                        'Column' => 
                        array (
                          'description' => '列名称。',
                          'type' => 'string',
                          'example' => 'column1',
                        ),
                        'Description' => 
                        array (
                          'description' => '描述信息。',
                          'type' => 'string',
                          'example' => 'a test column',
                        ),
                      ),
                    ),
                    'Privileges' => 
                    array (
                      'description' => '权限列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '权限名，来自接口`DescribeEnabledPrivileges`。',
                        'type' => 'string',
                        'example' => 'insert,select',
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '用户在该权限级别拥有的权限总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'PageNumber' => 
              array (
                'description' => '页号，和入参的页号一致。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页大小，和入参的页大小一致。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.Account.NotExist',
            'errorMessage' => 'The account is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'ACS.InvalidParameter.%s',
            'errorMessage' => 'Parameter %s is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          4 => 
          array (
            'errorCode' => 'ACS.User.NotBindDatabaseAccount',
            'errorMessage' => 'The user has not been associated with a database account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA32480A-E3E5-1BE7-BA98-724551DC04C8\\",\\n  \\"Data\\": [\\n    {\\n      \\"PrivilegeType\\": \\"Column\\",\\n      \\"PrivilegeObject\\": {\\n        \\"Database\\": \\"db1\\",\\n        \\"Table\\": \\"tabl1\\",\\n        \\"Column\\": \\"column1\\",\\n        \\"Description\\": \\"a test column\\"\\n      },\\n      \\"Privileges\\": [\\n        \\"insert,select\\"\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 100,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountPrivilegesResponse>\\n    <RequestId>DA32480A-E3E5-1BE7-BA98-724551DC04C8</RequestId>\\n    <Data>\\n        <PrivilegeType>Column</PrivilegeType>\\n        <PrivilegeObject>\\n            <Database>db1</Database>\\n            <Table>tabl1</Table>\\n            <Column>column1</Column>\\n            <Description>a test column</Description>\\n        </PrivilegeObject>\\n        <Privileges>insert,select</Privileges>\\n    </Data>\\n    <TotalCount>100</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n</DescribeAccountPrivilegesResponse>","errorExample":""}]',
      'title' => '查询数据库账号的权限',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~).',
    ),
    'DescribeEnabledPrivileges' => 
    array (
      'summary' => '获取支持的权限级别和权限列表。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '159129',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp14t95lun0w****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名称。
> 您可以调用[DescribeAccounts](~~612430~~)接口查看指定集群的数据库账号信息，包括账号名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_accout',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '246F42E0-A475-15FF-96D2-8DC47FC2F289',
              ),
              'Data' => 
              array (
                'description' => '支持的权限级别和权限列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '权限级别以及在该级别支持的权限。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Scope' => 
                    array (
                      'description' => '权限级别。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'Global',
                    ),
                    'Description' => 
                    array (
                      'description' => '对权限级别的描述。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '全局权限',
                    ),
                    'Privileges' => 
                    array (
                      'description' => '支持的权限列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '权限详情，包含权限名和描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '权限名。',
                            'type' => 'string',
                            'example' => 'select',
                          ),
                          'Description' => 
                          array (
                            'description' => '权限描述。',
                            'type' => 'string',
                            'example' => '查询数据',
                          ),
                        ),
                      ),
                      'required' => true,
                    ),
                  ),
                  'required' => true,
                ),
                'required' => false,
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"246F42E0-A475-15FF-96D2-8DC47FC2F289\\",\\n  \\"Data\\": [\\n    {\\n      \\"Scope\\": \\"Global\\",\\n      \\"Description\\": \\"全局权限\\",\\n      \\"Privileges\\": [\\n        {\\n          \\"Key\\": \\"select\\",\\n          \\"Description\\": \\"查询数据\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeEnabledPrivilegesResponse>\\n    <RequestId>246F42E0-A475-15FF-96D2-8DC47FC2F289</RequestId>\\n    <Data>\\n        <Scope>Global</Scope>\\n        <Description>全局</Description>\\n        <Privileges>\\n            <Key>select</Key>\\n            <Description>查询</Description>\\n        </Privileges>\\n    </Data>\\n</DescribeEnabledPrivilegesResponse>","errorExample":""}]',
      'title' => '查询支持的权限级别和权限列表',
      'description' => '- 中心的公网接入地址：`adb.aliyuncs.com`。
- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeAccountAllPrivileges' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
        'abilityTreeCode' => '162785',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp14t95lun0w****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的数据库账户名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'account1',
          ),
        ),
        3 => 
        array (
          'name' => 'Marker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，可以将返回结果中的`Marker`填入到该字段以获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'EXAMPLE',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3BB185E9-BB54-1727-B876-13243E4C0EB5',
              ),
              'Data' => 
              array (
                'description' => '权限详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => '权限列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '权限详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PrivilegeType' => 
                        array (
                          'description' => '权限级别，来自接口`DescribeEnabledPrivileges`。',
                          'type' => 'string',
                          'example' => 'Global',
                        ),
                        'PrivilegeObject' => 
                        array (
                          'description' => '权限对象，为库、表和列的三元组，为Global权限级别时全为空。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Database' => 
                            array (
                              'description' => '数据库名称。',
                              'type' => 'string',
                              'example' => 'tdb1',
                            ),
                            'Table' => 
                            array (
                              'description' => '表名称。',
                              'type' => 'string',
                              'example' => 'table1',
                            ),
                            'Column' => 
                            array (
                              'description' => '列名称。',
                              'type' => 'string',
                              'example' => 'id',
                            ),
                            'Description' => 
                            array (
                              'description' => '对权限对象的描述。',
                              'type' => 'string',
                              'example' => 'id of table',
                            ),
                          ),
                        ),
                        'Privileges' => 
                        array (
                          'description' => '权限列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '权限名称，与接口`DescribeEnabledPrivileges`返回的权限名一致。
',
                            'type' => 'string',
                            'example' => 'select',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Marker' => 
                  array (
                    'description' => '当返回的字段`Truncated`为`true`时，继续调用该接口时传入该字段的值以获取接下来的内容。',
                    'type' => 'string',
                    'example' => '0573e74fd1ccb01739993a691e876074db6e1b6ad79f54115f0e98528432ba6a523cfec5780ade5189299cc3396f6ff7',
                  ),
                  'Truncated' => 
                  array (
                    'description' => '当返回的内容被截断时，该字段的值为`true`。此时需要继续调用该接口获取接下来的内容，直到该字段的值为`false`。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.Account.NotExist',
            'errorMessage' => 'The account is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ACS.InvalidParameter.%s',
            'errorMessage' => 'Parameter %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'ACS.User.NotBindDatabaseAccount',
            'errorMessage' => 'The user has not been associated with a database account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3BB185E9-BB54-1727-B876-13243E4C0EB5\\",\\n  \\"Data\\": {\\n    \\"Result\\": [\\n      {\\n        \\"PrivilegeType\\": \\"Global\\",\\n        \\"PrivilegeObject\\": {\\n          \\"Database\\": \\"tdb1\\",\\n          \\"Table\\": \\"table1\\",\\n          \\"Column\\": \\"id\\",\\n          \\"Description\\": \\"id of table\\"\\n        },\\n        \\"Privileges\\": [\\n          \\"select\\"\\n        ]\\n      }\\n    ],\\n    \\"Marker\\": \\"0573e74fd1ccb01739993a691e876074db6e1b6ad79f54115f0e98528432ba6a523cfec5780ade5189299cc3396f6ff7\\",\\n    \\"Truncated\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountAllPrivilegesResponse>\\n    <RequestId>3BB185E9-BB54-1727-B876-13243E4C0EB5</RequestId>\\n    <Data>\\n        <Result>\\n            <PrivilegeType>Global</PrivilegeType>\\n            <PrivilegeObject/>\\n        </Result>\\n        <Marker>0573e74fd1ccb01739993a691e876074db6e1b6ad79f54115f0e98528432ba6a523cfec5780ade5189299cc3396f6ff7</Marker>\\n        <Truncated>true</Truncated>\\n    </Data>\\n</DescribeAccountAllPrivilegesResponse>","errorExample":""}]',
      'title' => '查询数据库账号的所有权限',
      'summary' => '获取给定账号拥有的所有权限，包括全局、库、表、列级别。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeAccountPrivilegeObjects' => 
    array (
      'summary' => '获取给定账号可见的库表列。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '160215',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsF4WPVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ch-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1k3wdmt139****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'PrivilegeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限级别，只能传入库（Database)）、表（Table）、列（Column）级别，不能传入全局（Global）级别。',
            'type' => 'string',
            'required' => false,
            'example' => 'Column',
            'default' => 'Database',
          ),
        ),
        4 => 
        array (
          'name' => 'DatabasePrivilegeObject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据给定的数据库名称进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'database1',
          ),
        ),
        5 => 
        array (
          'name' => 'TablePrivilegeObject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据给定的表名称进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'table1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页号，从1开始，默认值1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页含有条目的最大数量，默认为20。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'ColumnPrivilegeObject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据给定的列名进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'col1',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '34B2AD29-682F-1C14-B3AA-9EF1A96084B8',
              ),
              'Data' => 
              array (
                'description' => '权限列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '权限对象，为库、表、列的三元组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Database' => 
                    array (
                      'description' => '数据库名称，当权限级别是库、表、列时返回该字段。',
                      'type' => 'string',
                      'example' => 'tdb1',
                    ),
                    'Table' => 
                    array (
                      'description' => '表名称，当权限级别是表和列时返回该字段。',
                      'type' => 'string',
                      'example' => 'table1',
                    ),
                    'Column' => 
                    array (
                      'description' => '列名称，当权限界别是列时返回该字段。',
                      'type' => 'string',
                      'example' => 'column1',
                    ),
                    'Description' => 
                    array (
                      'description' => '创建表/列时指定的描述。只有当权限级别为库和表时才有值，分别代表库和表的描述。',
                      'type' => 'string',
                      'example' => 'a test db',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '查询得到的结果总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '23',
              ),
              'PageNumber' => 
              array (
                'description' => '页号，和传入的值一致。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页大小，和传入的值一致。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ACS.Account.NotExist',
            'errorMessage' => 'The account is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'ACS.InvalidParameter.%s',
            'errorMessage' => 'Parameter %s is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          4 => 
          array (
            'errorCode' => 'ACS.User.NotBindDatabaseAccount',
            'errorMessage' => 'The user has not been associated with a database account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"34B2AD29-682F-1C14-B3AA-9EF1A96084B8\\",\\n  \\"Data\\": [\\n    {\\n      \\"Database\\": \\"tdb1\\",\\n      \\"Table\\": \\"table1\\",\\n      \\"Column\\": \\"column1\\",\\n      \\"Description\\": \\"a test db\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 23,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountPrivilegeObjectsResponse>\\n    <RequestId>34B2AD29-682F-1C14-B3AA-9EF1A96084B8</RequestId>\\n    <Data>\\n        <Database>tdb1</Database>\\n        <Table>table1</Table>\\n        <Column>column1</Column>\\n        <Description>a test db</Description>\\n    </Data>\\n    <TotalCount>23</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n</DescribeAccountPrivilegeObjectsResponse>","errorExample":""}]',
      'title' => '查询数据库账号可见的库表列',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeDBClusterHealthStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
        'abilityTreeCode' => '151720',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsDAZVRM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '湖仓版（3.0）集群ID。

>您可以调用[DescribeDBClusters](~~612397~~)接口查看湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-uf6o6m8p6x7v****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
>您可以调用[DescribeRegions](~~143074~~)接口查看集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
              'CS' => 
              array (
                'description' => '实例接入节点状态的列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'ActiveCount' => 
                  array (
                    'description' => '健康节点个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'UnavailableCount' => 
                  array (
                    'description' => '不可用节点个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RiskCount' => 
                  array (
                    'description' => '风险节点个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ExpectedCount' => 
                  array (
                    'description' => '接入节点总个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'description' => '实例接入节点状态，取值说明：
- **RISK**：风险。
- **NORMAL**：健康。
- **UNAVAILABLE**：不可用。',
                    'type' => 'string',
                    'example' => 'UNAVAILABLE',
                  ),
                ),
              ),
              'Executor' => 
              array (
                'description' => '计算节点组健康状态列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'ActiveCount' => 
                  array (
                    'description' => '健康节点个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'UnavailableCount' => 
                  array (
                    'description' => '不可用节点个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RiskCount' => 
                  array (
                    'description' => '风险节点个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ExpectedCount' => 
                  array (
                    'description' => '计算节点总个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'description' => '计算节点组健康状态，取值说明：
- **RISK**：风险。
- **NORMAL**：健康。
- **UNAVAILABLE**：不可用。',
                    'type' => 'string',
                    'example' => 'UNAVAILABLE',
                  ),
                ),
              ),
              'Worker' => 
              array (
                'description' => '存储节点健康状态列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'ActiveCount' => 
                  array (
                    'description' => '健康存储节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'UnavailableCount' => 
                  array (
                    'description' => '不可用存储节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RiskCount' => 
                  array (
                    'description' => '风险存储节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'ExpectedCount' => 
                  array (
                    'description' => '存储节点组总个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'description' => '存储节点组健康状态，取值说明：
- **RISK**：风险。
- **NORMAL**：健康。
- **UNAVAILABLE**：不可用。',
                    'type' => 'string',
                    'example' => 'UNAVAILABLE',
                  ),
                ),
              ),
              'InstanceStatus' => 
              array (
                'description' => '集群的健康状态，取值说明：
- **RISK**：风险。
- **NORMAL**：健康。
- **UNAVAILABLE**：不可用。
>当集群的实例接入节点状态、计算节点组健康状态和存储节点组健康状态，三个健康状态均为**健康**且实例探活成功，则集群的健康状态为**健康**；三个健康状态中包含**风险**时，则集群的健康状态为**风险**；三个健康状态中包含**不可用**时，则集群的健康状态为**不可用**。',
                'type' => 'string',
                'example' => 'NORMAL',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CAV',
              ),
              'AccessDeniedDetail' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CS\\": {\\n    \\"ActiveCount\\": 0,\\n    \\"UnavailableCount\\": 1,\\n    \\"RiskCount\\": 0,\\n    \\"ExpectedCount\\": 1,\\n    \\"Status\\": \\"UNAVAILABLE\\"\\n  },\\n  \\"Executor\\": {\\n    \\"ActiveCount\\": 0,\\n    \\"UnavailableCount\\": 1,\\n    \\"RiskCount\\": 0,\\n    \\"ExpectedCount\\": 1,\\n    \\"Status\\": \\"UNAVAILABLE\\"\\n  },\\n  \\"Worker\\": {\\n    \\"ActiveCount\\": 0,\\n    \\"UnavailableCount\\": 1,\\n    \\"RiskCount\\": 1,\\n    \\"ExpectedCount\\": 1,\\n    \\"Status\\": \\"UNAVAILABLE\\"\\n  },\\n  \\"InstanceStatus\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CAV\\",\\n  \\"AccessDeniedDetail\\": \\"\\"\\n}","type":"json"}]',
      'title' => '查询集群健康检查状态',
      'summary' => '查看AnalyticDB MySQL湖仓版（3.0）集群的健康状态。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeDBClusterPerformance' => 
    array (
      'summary' => '查看目标集群的性能数据。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~~612397~~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1hx5n1o8f61****',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的性能指标名称，多个值之间用英文逗号（,）分隔。支持查询如下性能指标：
* CPU
    * **AnalyticDB_CPU_Usage_Percentage**：CPU平均使用率。
* 连接数
    * **AnalyticDB_Instance_Connection_Count**：数据库连接数。
* 写入
    * **AnalyticDB_TPS**：写入TPS。
    * **AnalyticDB_InsertRT**：写入响应时间。
    * **AnalyticDB_InsertBytes**：写入吞吐量。
* 查询
    * **AnalyticDB_QPS**：查询QPS。
    * **AnalyticDB_QueryRT**：查询响应时间。
    * **AnalyticDB_QueryWaitTime**：查询等待耗时。
* 磁盘
    * **AnalyticDB_Disk_IO_Avg_Usage_Percentage**：IO平均Util。
    * **AnalyticDB_Disk_IO_Avg_Waiting_Time**：IO平均Wait。
    * **AnalyticDB_IO_Throughput**：磁盘吞吐    
    * **AnalyticDB_IOPS**：磁盘IOPS。
    * **AnalyticDB_Disk_Usage**：磁盘使用量。
    * **AnalyticDB_Disk_Usage_Percentage**：磁盘使用率
    * **AnalyticDB_Hot_Data_Usage**：热数据磁盘用量。
    * **AnalyticDB_Cold_Data_Usage**：冷数据磁盘用量。

> 该参数不能为空。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'AnalyticDB_CPU_Usage_Percentage',
            'default' => 'AnalyticDB_CPU_Usage_Percentage',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。UTC时间，格式为<i>yyyy-MM-ddTHH:mmZ</i>。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-03-10T23:56Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。UTC时间，格式为<i>yyyy-MM-ddTHH:mmZ</i>。

> 查询结束时间需晚于开始时间，且开始时间和结束时间的时间间隔不能超过两天。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-03-11T15:01Z',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~612393~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourcePools',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'user_default',
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
              'EndTime' => 
              array (
                'description' => '查询结束时间。UTC时间，格式为<i>yyyy-MM-ddTHH:mmZ</i>。',
                'type' => 'string',
                'example' => '2022-03-11T15:01Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BD8C3096-8BC6-51DF-A4AB-BACD9DC10435',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。UTC时间，格式为<i>yyyy-MM-ddTHH:mmZ</i>。',
                'type' => 'string',
                'example' => '2022-03-10T23:56Z',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
                'type' => 'string',
                'example' => 'amv-bp1hx5n1o8f61****',
              ),
              'Performances' => 
              array (
                'description' => '集群性能指标列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '性能指标名称。',
                      'type' => 'string',
                      'example' => 'AnalyticDB_CPU_Usage_Percentage',
                    ),
                    'Unit' => 
                    array (
                      'description' => '监控指标的单位。',
                      'type' => 'string',
                      'example' => '%',
                    ),
                    'Series' => 
                    array (
                      'description' => '性能数据列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'description' => '不同时间点下的性能值详情。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '不同时间点下的性能值详情。',
                              'type' => 'string',
                              'example' => '[
  [ 
  "2023-06-27T13:21:00+08:00","0.1250" 
  ], 
  [ 
  "2022-03-11T10:00:42.739Z","0.3125" 
  ]...
]',
                            ),
                          ),
                          'Name' => 
                          array (
                            'description' => '*   CPU
    
    *   **AnalyticDB\\_CPU\\_Usage\\_Percentage**：CPU使用率。
        
        *   AnalyticDB\\_Storage\\_CPU\\_Avg\\_Usage\\_Percentage：存储节点平均CPU使用率。
            
        *   AnalyticDB\\_Storage\\_CPU\\_Max\\_Usage\\_Percentage：存储节点最大CPU使用率。
            
        *   AnalyticDB\\_Compute\\_CPU\\_Avg\\_Usage\\_Percentage：计算节点平均CPU使用率。
            
        *   AnalyticDB\\_Compute\\_CPU\\_Max\\_Usage\\_Percentage：计算节点最大CPU使用率。
            
        *   AnalyticDB\\_CS\\_CPU\\_Avg\\_Usage\\_Percentage：接入节点平均CPU使用率。
            
        *   AnalyticDB\\_CS\\_CPU\\_Max\\_Usage\\_Percentage：接入节点最大CPU使用率。
            
*   连接数
    
    *   **AnalyticDB\\_Instance\\_Connection\\_Count**：集群连接数。
        
        *   AnalyticDB\\_Instance\\_Connection\\_Count：集群连接数。
            
*   写入
    
    *   **AnalyticDB\\_TPS**：写入TPS。
        
        *   tps：insert_tps、update_tps、 delete_tps 和 load_tps 的累加值。
            
        *   insert\\_tps：INSERT INTO VALUES操作每秒成功数。
            
        *   update\\_tps：UPDATE操作每秒成功数。
            
        *   delete\\_tps：DELETE操作每秒成功数。
            
        *   load\\_tps：LOAD操作（INSERT OVERWRITE）每秒成功数。
            
    *   **AnalyticDB\\_InsertRT**：写入响应时间。
        
        *   AnalyticDB\\_Avg\\_InsertRT：写入操作平均耗时。
            
        *   AnalyticDB\\_Max\\_InsertRT：写入操作最大耗时。
            
    *   **AnalyticDB\\_InsertBytes**：写入吞吐量。
        
        *   AnalyticDB\\_InsertBytes：写入数据量。
            
*   更新
    
    *   **AnalyticDB\\_UpdateRT**：更新响应时间。
        
        *   updateinto\\_avg\\_rt：UPDATE操作平均耗时。
            
        *   updateinto\\_max\\_rt：UPDATE操作最大耗时。
            
*   删除
    
    *   **AnalyticDB\\_DeleteRT**：删除响应时间。
        
        *   delete\\_avg\\_rt：DELETE操作平均耗时。
            
        *   delete\\_max\\_rt：DELETE操作平均耗时。
            
*   查询
    
    *   **AnalyticDB\\_QPS**：QPS。
        
        *   AnalyticDB\\_QPS：SELECT操作每秒完成数。
            
        *   AnalyticDB\\_ETL\\_QPS：ETL操作（INSERT OVERWRITE）每秒完成数。
            
    *   **AnalyticDB\\_QueryRT**：查询响应时间。
        
        *   AnalyticDB\\_Avg\\_QueryRT：查询平均耗时。
            
        *   AnalyticDB\\_Max\\_QueryRT：查询最大耗时。
            
        *   etl\\_avg\\_rt：ETL操作平均耗时。
            
        *   etl\\_max\\_rt：ETL操作最大耗时。
            
    *   **AnalyticDB\\_QueryWaitTime**：查询等待耗时。
        
        *   AnalyticDB\\_Avg\\_QueryWaitTime：查询（包括SELECT和ETL）平均等待时间。
            
        *   AnalyticDB\\_Max\\_QueryWaitTime：查询（包括SELECT和ETL）最大等待时间。
            
    *   AnalyticDB\\_QueryFailedRatio：查询失败率。
        
        *   query\\_failed\\_ratio：查询（包括SELECT和ETL）失败率。
            
*   磁盘
    
    *   **AnalyticDB\\_IO\\_Throughput**：磁盘IO吞吐。
        
        *   AnalyticDB\\_Storage\\_Read\\_IO\\_Throughput：存储节点平均读操作吞吐。
            
        *   AnalyticDB\\_Storage\\_Write\\_IO\\_Throughput：存储节点平均写操作吞吐。
            
        *   AnalyticDB\\_Compute\\_Read\\_IO\\_Throughput：计算节点平均读操作吞吐。
            
        *   AnalyticDB\\_Compute\\_Write\\_IO\\_Throughput：计算节点平均写操作吞吐。
            
    *   **AnalyticDB\\_Disk\\_IO\\_Avg\\_Usage\\_Percentage**：IO使用率。
        
        *   AnalyticDB\\_Disk\\_IO\\_Avg\\_Usage\\_Percentage：存储节点IO使用率。
            
    *   **AnalyticDB\\_Disk\\_IO\\_Avg\\_Waiting\\_Time**：IO等待时间。
        
        *   AnalyticDB\\_Disk\\_IO\\_Avg\\_Waiting\\_Time：存储节点平均IO等待时间。
            
    *   **AnalyticDB\\_IOPS**：磁盘IOPS。
        
        *   AnalyticDB\\_Storage\\_Read\\_IOPS：存储节点平均读IOPS。
            
        *   AnalyticDB\\_Storage\\_Write\\_IOPS：存储节点平均写IOPS。
            
        *   AnalyticDB\\_Compute\\_Read\\_IOPS：计算节点读IOPS。
            
        *   AnalyticDB\\_Compute\\_Write\\_IOPS：计算节点写IOPS。
            
    *   **AnalyticDB\\_DiskUsage ->** AnalyticDB\\_DiskUsedSize：磁盘用量。
        
        *   disk\\_used\\_ratio：磁盘空间使用率。
            
        *   worker\\_max\\_node\\_disk\\_used\\_ratio：磁盘空间使用率最大节点的使用率。
            
    *   **AnalyticDB\\_Hot\\_Data\\_Usage**：热数据磁盘用量。
        
        *   AnalyticDB\\_Hot\\_Data\\_Usage：热数据磁盘使用量。
            
    *   **AnalyticDB\\_Cold\\_Data\\_Usage**：冷数据磁盘用量。
        
        *   AnalyticDB\\_Cold\\_Data\\_Usage：冷数据磁盘使用量。
            
    *   AnalyticDB\\_DiskUsedRatio：节点磁盘使用率。
        
        *   disk\\_used\\_ratio：平均节点磁盘使用率。
            
        *   worker\\_max\\_node\\_disk\\_used\\_ratio：最大节点磁盘使用率。
            
    *   AnalyticDB\\_DiskUsedSize：总数据量。
        
        *   user\\_used\\_disk\\_max：最大节点热数据量。
            
        *   user\\_used\\_disk\\_avg：最大节点热数据量。
            
        *   hot\\_disk\\_used：热数据量。
            
        *   cold\\_disk\\_used：冷数据量。
            
*   其他
    
    *   **AnalyticDB\\_BuildTaskCount** ：Build任务数。
        
        *   max\\_build\\_task\\_count：运行中的最大Build任务数。
            
        *   avg\\_build\\_task\\_count：运行中的平均Build任务数。
            
    *   **AnalyticDB\\_ComputeMemoryUsedRatio**: 计算内存使用率。
        
        *   max\\_worker\\_compute\\_memory\\_used\\_ratio：存储节点最大计算内存使用率。
            
        *   avg\\_worker\\_compute\\_memory\\_used\\_ratio：存储节点平均计算内存使用率。
            
        *   max\\_executor\\_compute\\_memory\\_used\\_ratio：计算节点最大计算内存使用率。
            
        *   avg\\_executor\\_compute\\_memory\\_used\\_ratio：计算节点平均计算内存使用率。
            
    *   AnalyticDB\\_UnavailableNodeCount：不可用节点数。
        
        *   worker\\_unavailable\\_node\\_count：存储节点不可用节点数。
            
        *   executor\\_unavailable\\_node\\_count：计算节点不可用节点数。
            
*   WLM相关
    
    *   AnalyticDB\\_WLM\\_ResubmitQueries\\_Count：WLM重新投递查询数。
        
        *   AnalyticDB\\_WLM\\_ResubmitQueries\\_Count：WLM重新投递查询数。
            
    *   AnalyticDB\\_WLM\\_SQA\\_AvgRt\\_MS：WLM小查询加速平均耗时。
        
        *   AnalyticDB\\_WLM\\_SQA\\_AvgRt\\_MS：WLM小查询加速平均耗时。
            
    *   AnalyticDB\\_WLM\\_SQA\\_Queries\\_Count：WLM小查询加速查询数。
        
        *   AnalyticDB\\_WLM\\_SQA\\_Queries\\_Count：WLM小查询加速查询数。
            
    *   AnalyticDB\\_WLM\\_TotalQueries\\_Count：WLM总查询数。
        
        *   AnalyticDB\\_WLM\\_TotalQueries\\_Count：WLM总查询数。
            
*   APS相关
    
    *   AnalyticDB\\_APS\\_BPS：湖仓版（3.0）APS BPS。
        
        *   APS\\_Read\\_BPS：APS读BPS。
            
    *   AnalyticDB\\_APS\\_CPU：湖仓版（3.0）APS CPU利用率。
        
        *   APS\\_CPU\\_Avg\\_Usage\\_Percentage：APS平均CPU使用率。
            
        *   APS\\_CPU\\_Max\\_Usage\\_Percentage：APS最大CPU使用率。
            
    *   AnalyticDB\\_APS\\_Memory：湖仓版（3.0）APS内存利用率。
        
        *   APS\\_Memory\\_Avg\\_Usage\\_Percentage：APS平均内存使用率。
            
        *   APS\\_Memory\\_Max\\_Usage\\_Percentage：APS最大内存使用率。
            
    *   AnalyticDB\\_APS\\_RPS：湖仓版（3.0）RPS RPS。
        
        *   APS\\_Read\\_RPS：APS读RPS。
            
    *   AnalyticDB\\_APS\\_RT：湖仓版（3.0）APS RT。
        
        *   APS\\_Read\\_Avg\\_RT：APS平均耗时。
            
        *   APS\\_Read\\_Max\\_RT：APS最大耗时。',
                            'type' => 'string',
                            'example' => 'AnalyticDB_Storage_CPU_Avg_Usage_Percentage',
                          ),
                          'Tags' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => '
{instance_name: "am-***"}',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2022-03-11T15:01Z\\",\\n  \\"RequestId\\": \\"BD8C3096-8BC6-51DF-A4AB-BACD9DC10435\\",\\n  \\"StartTime\\": \\"2022-03-10T23:56Z\\",\\n  \\"DBClusterId\\": \\"amv-bp1hx5n1o8f61****\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"AnalyticDB_CPU_Usage_Percentage\\",\\n      \\"Unit\\": \\"%\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            \\"[\\\\n  [ \\\\n  \\\\\\"2023-06-27T13:21:00+08:00\\\\\\",\\\\\\"0.1250\\\\\\" \\\\n  ], \\\\n  [ \\\\n  \\\\\\"2022-03-11T10:00:42.739Z\\\\\\",\\\\\\"0.3125\\\\\\" \\\\n  ]...\\\\n]\\"\\n          ],\\n          \\"Name\\": \\"AnalyticDB_Storage_CPU_Avg_Usage_Percentage\\",\\n          \\"Tags\\": \\"\\\\n{instance_name: \\\\\\"am-***\\\\\\"}\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterPerformanceResponse>\\n    <EndTime>2022-03-11T15:01:00Z</EndTime>\\n    <RequestId>BD8C3096-8BC6-51DF-A4AB-BACD9DC10435</RequestId>\\n    <StartTime>2022-03-10T23:56:00Z</StartTime>\\n    <DBClusterId>am-bp1hx5n1o8f61****</DBClusterId>\\n    <Performances>\\n        <Key>AnalyticDB_CPU</Key>\\n        <Unit>%</Unit>\\n        <Series>\\n            <Values>[               \\"2022-03-11T03:00:12.72Z\\",               \\"0.1250\\"             ],             [               \\"2022-03-11T10:00:42.739Z\\",               \\"0.3125\\"             ]</Values>\\n            <Name>worker_avg_cpu_used</Name>\\n        </Series>\\n    </Performances>\\n</DescribeDBClusterPerformanceResponse>","errorExample":""}]',
      'title' => '查看集群性能数据',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'GetSparkDefinitions' => 
    array (
      'summary' => '查询Spark的通用定义内容。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '133457',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库集群ID',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-bp1r77u35w0****',
            'default' => 'DB_CLUSTER_ID',
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
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'title' => 'ADB Spark的通用定义内容',
                'description' => 'AnalyticDB MySQL Spark应用的通用定义内容。',
                'type' => 'string',
                'example' => '{"SQLTemplateExample": "-- Here is just an example of SparkSQL. Modify the content and run your spark program.
conf spark.driver.resourceSpec=medium;
conf spark.executor.instances=2;
conf spark.executor.resourceSpec=medium;
conf spark.app.name=Spark SQL Test;
conf spark.adb.connectors=oss;

-- Here are your sql statements
show databases;",
                 "BatchTemplateExample": "{
    "comments": [
        "-- Here is just an example of SparkPi. Modify the content and run your spark program."
    ],
    "args": ["1000"],
  "file":"local:///tmp/spark-examples.jar",
    "name": "SparkPi",
    "className": "org.apache.spark.examples.SparkPi",
    "conf": {      "spark.driver.resourceSpec": "medium",
        "spark.executor.instances": 2,
        "spark.executor.resourceSpec": "medium"
    }
}"
',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.Resources.LoadFileFromClasspathFailed',
            'errorMessage' => 'Can\'t load the content from file: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": \\"{\\\\\\"SQLTemplateExample\\\\\\": \\\\\\"-- Here is just an example of SparkSQL. Modify the content and run your spark program.\\\\nconf spark.driver.resourceSpec=medium;\\\\nconf spark.executor.instances=2;\\\\nconf spark.executor.resourceSpec=medium;\\\\nconf spark.app.name=Spark SQL Test;\\\\nconf spark.adb.connectors=oss;\\\\n\\\\n-- Here are your sql statements\\\\nshow databases;\\\\\\",\\\\n                 \\\\\\"BatchTemplateExample\\\\\\": \\\\\\"{\\\\n    \\\\\\"comments\\\\\\": [\\\\n        \\\\\\"-- Here is just an example of SparkPi. Modify the content and run your spark program.\\\\\\"\\\\n    ],\\\\n    \\\\\\"args\\\\\\": [\\\\\\"1000\\\\\\"],\\\\n  \\\\\\"file\\\\\\":\\\\\\"local:///tmp/spark-examples.jar\\\\\\",\\\\n    \\\\\\"name\\\\\\": \\\\\\"SparkPi\\\\\\",\\\\n    \\\\\\"className\\\\\\": \\\\\\"org.apache.spark.examples.SparkPi\\\\\\",\\\\n    \\\\\\"conf\\\\\\": {      \\\\\\"spark.driver.resourceSpec\\\\\\": \\\\\\"medium\\\\\\",\\\\n        \\\\\\"spark.executor.instances\\\\\\": 2,\\\\n        \\\\\\"spark.executor.resourceSpec\\\\\\": \\\\\\"medium\\\\\\"\\\\n    }\\\\n}\\\\\\"\\\\n\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSparkDefinitionsResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>{\\"SQLTemplateExample\\": \\"-- Here is just an example of SparkSQL. Modify the content and run your spark program.\\nconf spark.driver.resourceSpec=medium;\\nconf spark.executor.instances=2;\\nconf spark.executor.resourceSpec=medium;\\nconf spark.app.name=Spark SQL Test;\\nconf spark.adb.connectors=oss;\\n\\n-- Here are your sql statements\\nshow databases;\\",\\n   \\"BatchTemplateExample\\": \\"{\\n    \\"comments\\": [\\n        \\"-- Here is just an example of SparkPi. Modify the content and run your spark program.\\"\\n    ],\\n    \\"args\\": [\\"1000\\"],\\n  \\"file\\":\\"local:///tmp/spark-examples.jar\\",\\n    \\"name\\": \\"SparkPi\\",\\n    \\"className\\": \\"org.apache.spark.examples.SparkPi\\",\\n    \\"conf\\": {      \\"spark.driver.resourceSpec\\": \\"medium\\",\\n        \\"spark.executor.instances\\": 2,\\n        \\"spark.executor.resourceSpec\\": \\"medium\\"\\n    }\\n}\\"\\n</Data>\\n</GetSparkDefinitionsResponse>","errorExample":""}]',
      'title' => '查询Spark的通用定义内容',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'PreloadSparkAppMetrics' => 
    array (
      'summary' => '预加载Spark App 指标数据。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'spark app的id',
            'description' => 'Spark应用的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202204221525hzca7d8140000003',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-bp1mfe9qmsw1dzyg',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '84489769-3065-5A28-A4CB-977CD426F1C3',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => 's202212181815shaccb8be0000253',
                  ),
                  'AttemptId' => 
                  array (
                    'description' => 'Spark应用的重试ID。',
                    'type' => 'string',
                    'example' => 's202301061000hz57d797b0000201-0001',
                  ),
                  'Finished' => 
                  array (
                    'description' => '解析是否结束：
- true：表示已结束。
- false：表示未结束。',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                  'EventLogPath' => 
                  array (
                    'description' => 'Event日志路径。',
                    'type' => 'string',
                    'example' => 'oss://path/to/eventLog',
                  ),
                  'ScanMetrics' => 
                  array (
                    'description' => '指标数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OutputRowsCount' => 
                      array (
                        'description' => '扫描行数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000',
                      ),
                      'TotalReadFileSizeInByte' => 
                      array (
                        'description' => '扫描字节大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10000',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.App.KillOperationFailed',
            'errorMessage' => 'Failed to kill the application %s, please retry in a few seconds.',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.TemplateFile.BadFileType',
            'errorMessage' => 'The requested template %s is not a file.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.KillNotAcceptable',
            'errorMessage' => 'Can\'t kill the application %s in %s state.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"84489769-3065-5A28-A4CB-977CD426F1C3\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202212181815shaccb8be0000253\\",\\n    \\"AttemptId\\": \\"s202301061000hz57d797b0000201-0001\\",\\n    \\"Finished\\": true,\\n    \\"EventLogPath\\": \\"oss://path/to/eventLog\\",\\n    \\"ScanMetrics\\": {\\n      \\"OutputRowsCount\\": 1000,\\n      \\"TotalReadFileSizeInByte\\": 10000\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PreloadSparkAppMetricsResponse>\\n    <RequestId>84489769-3065-5A28-A4CB-977CD426F1C3</RequestId>\\n    <Data>\\n        <AppId>s202212181815shaccb8be0000253</AppId>\\n        <AttemptId>s202301061000hz57d797b0000201-0001</AttemptId>\\n        <Finished>true</Finished>\\n        <EventLogPath>oss://path/to/eventLog</EventLogPath>\\n        <ScanMetrics>\\n            <OutputRowsCount>1000</OutputRowsCount>\\n            <TotalReadFileSizeInByte>10000</TotalReadFileSizeInByte>\\n        </ScanMetrics>\\n    </Data>\\n</PreloadSparkAppMetricsResponse>","errorExample":""}]',
      'title' => '预加载Spark App指标数据',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkAppMetrics' => 
    array (
      'summary' => '获取Spark App指标数据。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '169120',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'spark app的id',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202204221525hzca7d8140000003',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。

> 您可以调用[DescribeDBClusters](~~612397~~)接口查询目标地域中所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-bp1ggnu61d77****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => 's202302051515shfa865f8000****',
                  ),
                  'AttemptId' => 
                  array (
                    'description' => 'Spark应用的重试ID。',
                    'type' => 'string',
                    'example' => 's202301061000hz57d797b0000201-****',
                  ),
                  'Finished' => 
                  array (
                    'description' => '解析是否结束：
- **true**：已结束。
- **false**：未结束。',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                  'EventLogPath' => 
                  array (
                    'description' => 'Event日志路径。',
                    'type' => 'string',
                    'example' => 'oss://path/to/eventLog',
                  ),
                  'ScanMetrics' => 
                  array (
                    'description' => '指标数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OutputRowsCount' => 
                      array (
                        'description' => '扫描行数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1000',
                      ),
                      'TotalReadFileSizeInByte' => 
                      array (
                        'description' => '扫描字节大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10000',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.App.KillOperationFailed',
            'errorMessage' => 'Failed to kill the application %s, please retry in a few seconds.',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.CancelNotebookStatementFailed',
            'errorMessage' => 'Failed to cancel the execution of notebook statements.',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.CloseNotebookKernelFailed',
            'errorMessage' => 'Failed to disable the notebook kernel.',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.ExecuteNotebookStatementFailed',
            'errorMessage' => 'Failed to execute notebook statements.',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.GetNotebookKernelFailed',
            'errorMessage' => 'Failed to start the notebook kernel. Try again later.',
          ),
          14 => 
          array (
            'errorCode' => 'Spark.GetNotebookKernelStateFailed',
            'errorMessage' => 'Failed to obtain the status of the notebook kernel.',
          ),
          15 => 
          array (
            'errorCode' => 'Spark.GetNotebookStatementLogFailed',
            'errorMessage' => 'Failed to obtain notebook statement logs.',
          ),
          16 => 
          array (
            'errorCode' => 'Spark.GetNotebookStatementResultFailed',
            'errorMessage' => 'Failed to obtain notebook statement execution results.',
          ),
          17 => 
          array (
            'errorCode' => 'Spark.GetNotebookStatementUiFailed',
            'errorMessage' => 'Failed to obtain notebook statement UI.',
          ),
          18 => 
          array (
            'errorCode' => 'Spark.Log.IllegalPath',
            'errorMessage' => 'Invalid job log URI: %s.',
          ),
          19 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          20 => 
          array (
            'errorCode' => 'Spark.NotebookKernelBusy',
            'errorMessage' => 'Too many jobs in the notebook kernel. Try again later.',
          ),
          21 => 
          array (
            'errorCode' => 'Spark.NotebookKernelExpired',
            'errorMessage' => 'The notebook kernel has expired. Restart the kernel.',
          ),
          22 => 
          array (
            'errorCode' => 'Spark.NotebookKernelInvalidStatus',
            'errorMessage' => 'The status of the notebook kernel is invalid.',
          ),
          23 => 
          array (
            'errorCode' => 'Spark.NotebookKernelNotStartup',
            'errorMessage' => 'The notebook kernel has not been started',
          ),
          24 => 
          array (
            'errorCode' => 'Spark.NotebookKernelStarting',
            'errorMessage' => 'The notebook kernel is starting. Try again later.',
          ),
          25 => 
          array (
            'errorCode' => 'Spark.NotebookNamingDuplicate',
            'errorMessage' => 'The name of the notebook is duplicated, please change the name',
          ),
          26 => 
          array (
            'errorCode' => 'Spark.NotebookNotFound',
            'errorMessage' => 'The notebook is not found',
          ),
          27 => 
          array (
            'errorCode' => 'Spark.NotebookParagraphMissingProgramCode',
            'errorMessage' => 'The notebook paragraph program code is missing',
          ),
          28 => 
          array (
            'errorCode' => 'Spark.NotebookParagraphNotFound',
            'errorMessage' => 'The notebook paragraph is not found',
          ),
          29 => 
          array (
            'errorCode' => 'Spark.NotebookParagraphNotRunning',
            'errorMessage' => 'The notebook paragraph has not been running',
          ),
          30 => 
          array (
            'errorCode' => 'Spark.Oss.InternalError',
            'errorMessage' => 'An OSS internal error occurred: %s',
          ),
          31 => 
          array (
            'errorCode' => 'Spark.RoleArn.Invalid',
            'errorMessage' => '%s is not found, or the RAM role has not been authorized.',
          ),
          32 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          33 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
          34 => 
          array (
            'errorCode' => 'Spark.TemplateFile.BadFileType',
            'errorMessage' => 'The requested template %s is not a file.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.Log.PodLogNotFound',
            'errorMessage' => 'Can\'t find logs of the pod by podName[%s] in the namespace[%s].',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.KillNotAcceptable',
            'errorMessage' => 'Can\'t kill the application %s in %s state.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.Resources.LoadFileFromClasspathFailed',
            'errorMessage' => 'Can\'t load the content from file: %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202302051515shfa865f8000****\\",\\n    \\"AttemptId\\": \\"s202301061000hz57d797b0000201-****\\",\\n    \\"Finished\\": true,\\n    \\"EventLogPath\\": \\"oss://path/to/eventLog\\",\\n    \\"ScanMetrics\\": {\\n      \\"OutputRowsCount\\": 1000,\\n      \\"TotalReadFileSizeInByte\\": 10000\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询Spark App指标数据',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'ListSparkLogAnalyzeTasks' => 
    array (
      'summary' => '获取所有的Spark日志分析任务列表。',
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
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-9scxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页码号',
            'description' => '页码号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页数量',
            'description' => '每页返回分析任务数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '10',
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
                'example' => '1DF5AF5B-C803-1861-A0FF-63666A557709',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskList' => 
                  array (
                    'title' => '分析任务列表',
                    'description' => 'Spark日志分析任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'Spark日志分析任务详情列表。',
                      '$ref' => '#/components/schemas/SparkAnalyzeLogTask',
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'title' => '页码号',
                    'description' => '页码号。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页数量',
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => 'Task总数',
                    'description' => '集群中Spark日志分析任务总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1DF5AF5B-C803-1861-A0FF-63666A557709\\",\\n  \\"Data\\": {\\n    \\"TaskList\\": [\\n      {\\n        \\"TaskId\\": 10,\\n        \\"UserId\\": 0,\\n        \\"SubmittedTimeInMillis\\": 1672123543000,\\n        \\"TerminatedTimeInMillis\\": 1672123543000,\\n        \\"TaskState\\": \\"WAITING\\",\\n        \\"Result\\": {\\n          \\"AppErrorCode\\": \\"EXCEEDED_QUOTA\\",\\n          \\"AppErrorLog\\": \\"exception: xxxx\\",\\n          \\"AppErrorAdvice\\": \\"\\"\\n        },\\n        \\"StartedTimeInMillis\\": 1672123543000,\\n        \\"RuleMatched\\": true,\\n        \\"TaskErrMsg\\": \\"Driver log not found\\",\\n        \\"DBClusterId\\": \\"amv-adbxxxxx\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"TotalCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSparkLogAnalyzeTasksResponse>\\n    <RequestId>1DF5AF5B-C803-1861-A0FF-63666A557709</RequestId>\\n    <Data>\\n        <TaskList>\\n            <TaskId>10</TaskId>\\n            <SubmittedTimeInMillis>1672123543000</SubmittedTimeInMillis>\\n            <TerminatedTimeInMillis>1672123543000</TerminatedTimeInMillis>\\n            <TaskState>WAITING</TaskState>\\n            <Result>\\n                <AppErrorCode>EXCEEDED_QUOTA</AppErrorCode>\\n                <AppErrorLog>exception: xxxx</AppErrorLog>\\n            </Result>\\n            <StartedTimeInMillis>1672123543000</StartedTimeInMillis>\\n            <RuleMatched>true</RuleMatched>\\n            <TaskErrMsg>Driver log not found</TaskErrMsg>\\n            <DBClusterId>amv-adbxxxxx</DBClusterId>\\n        </TaskList>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>20</PageSize>\\n        <TotalCount>100</TotalCount>\\n    </Data>\\n</ListSparkLogAnalyzeTasksResponse>","errorExample":""}]',
      'title' => '查询Spark日志分析任务列表',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'SubmitSparkLogAnalyzeTask' => 
    array (
      'summary' => '提交一个Spark日志分析任务,，服务端会开启指定Spark作业日志的分析流程并返回分析结果。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Spark App ID
',
            'description' => 'Spark应用ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 's202301121553hzd9c6f7xxxx',
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
            'title' => 'Schema of Response',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1DF5AF5B-C803-1861-A0FF-63666A557709',
              ),
              'Data' => 
              array (
                'description' => 'Spark日志分析任务详情。',
                '$ref' => '#/components/schemas/SparkAnalyzeLogTask',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1DF5AF5B-C803-1861-A0FF-63666A557709\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 10,\\n    \\"UserId\\": 0,\\n    \\"SubmittedTimeInMillis\\": 1672123543000,\\n    \\"TerminatedTimeInMillis\\": 1672123543000,\\n    \\"TaskState\\": \\"WAITING\\",\\n    \\"Result\\": {\\n      \\"AppErrorCode\\": \\"EXCEEDED_QUOTA\\",\\n      \\"AppErrorLog\\": \\"exception: xxxx\\",\\n      \\"AppErrorAdvice\\": \\"\\"\\n    },\\n    \\"StartedTimeInMillis\\": 1672123543000,\\n    \\"RuleMatched\\": true,\\n    \\"TaskErrMsg\\": \\"Driver log not found\\",\\n    \\"DBClusterId\\": \\"amv-adbxxxxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SubmitSparkLogAnalyzeTaskResponse>\\n    <RequestId>xxx-xxx-xxxx</RequestId>\\n    <Data>\\n        <TaskId>10</TaskId>\\n        <SubmittedTimeInMillis>1672123543000</SubmittedTimeInMillis>\\n        <TerminatedTimeInMillis>1672123543000</TerminatedTimeInMillis>\\n        <TaskState>WAITING</TaskState>\\n        <Result>\\n            <AppErrorCode>EXCEEDED_QUOTA</AppErrorCode>\\n            <AppErrorLog>exception: xxxx</AppErrorLog>\\n        </Result>\\n        <StartedTimeInMillis>1672123543000</StartedTimeInMillis>\\n        <RuleMatched>true</RuleMatched>\\n        <TaskErrMsg>Driver log not found</TaskErrMsg>\\n    </Data>\\n</SubmitSparkLogAnalyzeTaskResponse>","errorExample":""}]',
      'title' => '提交Spark日志分析任务',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'KillSparkLogAnalyzeTask' => 
    array (
      'summary' => '终止一个Spark分析任务，返回尝试终止后的任务详情。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Spark日志分析任务ID
',
            'description' => 'Spark日志分析任务ID。可以通过调用ListSparkLogAnalyzeTasks查询当前集群中所有的分析任务的ID和状态。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '15',
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
                'example' => '1DF5AF5B-C803-1861-A0FF-63666A557709',
              ),
              'Data' => 
              array (
                'description' => 'Spark日志分析任务详情。',
                '$ref' => '#/components/schemas/SparkAnalyzeLogTask',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1DF5AF5B-C803-1861-A0FF-63666A557709\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 10,\\n    \\"UserId\\": 0,\\n    \\"SubmittedTimeInMillis\\": 1672123543000,\\n    \\"TerminatedTimeInMillis\\": 1672123543000,\\n    \\"TaskState\\": \\"WAITING\\",\\n    \\"Result\\": {\\n      \\"AppErrorCode\\": \\"EXCEEDED_QUOTA\\",\\n      \\"AppErrorLog\\": \\"exception: xxxx\\",\\n      \\"AppErrorAdvice\\": \\"\\"\\n    },\\n    \\"StartedTimeInMillis\\": 1672123543000,\\n    \\"RuleMatched\\": true,\\n    \\"TaskErrMsg\\": \\"Driver log not found\\",\\n    \\"DBClusterId\\": \\"amv-adbxxxxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<KillSparkLogAnalyzeTaskResponse>\\n    <RequestId>1DF5AF5B-C803-1861-A0FF-63666A557709</RequestId>\\n    <Data>\\n        <TaskId>10</TaskId>\\n        <SubmittedTimeInMillis>1672123543000</SubmittedTimeInMillis>\\n        <TerminatedTimeInMillis>1672123543000</TerminatedTimeInMillis>\\n        <TaskState>WAITING</TaskState>\\n        <Result>\\n            <AppErrorCode>EXCEEDED_QUOTA</AppErrorCode>\\n            <AppErrorLog>exception: xxxx</AppErrorLog>\\n        </Result>\\n        <StartedTimeInMillis>1672123543000</StartedTimeInMillis>\\n        <RuleMatched>true</RuleMatched>\\n        <TaskErrMsg>Driver log not found</TaskErrMsg>\\n        <DBClusterId>amv-adbxxxxx</DBClusterId>\\n    </Data>\\n</KillSparkLogAnalyzeTaskResponse>","errorExample":""}]',
      'title' => '终止Spark日志分析任务',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkLogAnalyzeTask' => 
    array (
      'summary' => '获取Spark日志分析任务结果。',
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
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Spark日志分析任务ID
',
            'description' => 'Spark日志分析任务ID。调用接口ListSparkLogAnalyzeTasks可以查询当前ADB集群中提交的所有Spark日志分析任务ID。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '12',
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
                'example' => '1DF5AF5B-C803-1861-A0FF-63666A557709',
              ),
              'Data' => 
              array (
                'description' => 'Spark日志分析任务详情。',
                '$ref' => '#/components/schemas/SparkAnalyzeLogTask',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1DF5AF5B-C803-1861-A0FF-63666A557709\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 10,\\n    \\"UserId\\": 0,\\n    \\"SubmittedTimeInMillis\\": 1672123543000,\\n    \\"TerminatedTimeInMillis\\": 1672123543000,\\n    \\"TaskState\\": \\"WAITING\\",\\n    \\"Result\\": {\\n      \\"AppErrorCode\\": \\"EXCEEDED_QUOTA\\",\\n      \\"AppErrorLog\\": \\"exception: xxxx\\",\\n      \\"AppErrorAdvice\\": \\"\\"\\n    },\\n    \\"StartedTimeInMillis\\": 1672123543000,\\n    \\"RuleMatched\\": true,\\n    \\"TaskErrMsg\\": \\"Driver log not found\\",\\n    \\"DBClusterId\\": \\"amv-adbxxxxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSparkLogAnalyzeTaskResponse>\\n    <RequestId>1DF5AF5B-C803-1861-A0FF-63666A557709</RequestId>\\n    <Data>\\n        <TaskId>10</TaskId>\\n        <SubmittedTimeInMillis>1672123543000</SubmittedTimeInMillis>\\n        <TerminatedTimeInMillis>1672123543000</TerminatedTimeInMillis>\\n        <TaskState>WAITING</TaskState>\\n        <Result>\\n            <AppErrorCode>EXCEEDED_QUOTA</AppErrorCode>\\n            <AppErrorLog>exception: xxxx</AppErrorLog>\\n        </Result>\\n        <StartedTimeInMillis>1672123543000</StartedTimeInMillis>\\n        <RuleMatched>true</RuleMatched>\\n        <TaskErrMsg>Driver log not found</TaskErrMsg>\\n        <DBClusterId>amv-adbxxxxx</DBClusterId>\\n    </Data>\\n</GetSparkLogAnalyzeTaskResponse>","errorExample":""}]',
      'title' => '查询Spark日志分析任务结果',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'SetSparkAppLogRootPath' => 
    array (
      'summary' => '更改用户Spark的日志配置。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库的id',
            'description' => '数据库的id',
            'type' => 'string',
            'required' => true,
            'example' => 'am-dbclusterid',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'OssLogPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'oss日志地址',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://path/to/log',
          ),
        ),
        2 => 
        array (
          'name' => 'UseDefaultOss',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否使用默认生成的oss地址',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'description' => '返回数据体',
                'type' => 'object',
                'properties' => 
                array (
                  'IsLogPathExists' => 
                  array (
                    'title' => '是否存在日志地址',
                    'description' => '是否存在日志地址',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RecordedLogPath' => 
                  array (
                    'title' => '记录的地址名称',
                    'description' => '记录的地址名称',
                    'type' => 'string',
                    'example' => 'oss://path/to/log',
                  ),
                  'ModifiedUid' => 
                  array (
                    'title' => '修改者ID',
                    'description' => '修改者ID',
                    'type' => 'string',
                    'example' => '1111111',
                  ),
                  'ModifiedTimestamp' => 
                  array (
                    'title' => '上一次修改时间',
                    'description' => '上一次修改时间',
                    'type' => 'string',
                    'example' => '1675236908',
                  ),
                  'DefaultLogPath' => 
                  array (
                    'title' => '推荐的默认地址',
                    'description' => '推荐的默认地址',
                    'type' => 'string',
                    'example' => 'oss://path/to/log',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": {\\n    \\"IsLogPathExists\\": true,\\n    \\"RecordedLogPath\\": \\"oss://path/to/log\\",\\n    \\"ModifiedUid\\": \\"1111111\\",\\n    \\"ModifiedTimestamp\\": \\"1675236908\\",\\n    \\"DefaultLogPath\\": \\"oss://path/to/log\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SetSparkAppLogRootPathResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>\\n        <IsLogPathExists>true</IsLogPathExists>\\n        <RecordedLogPath>oss://path/to/log</RecordedLogPath>\\n        <ModifiedUid>1111111</ModifiedUid>\\n        <ModifiedTimestamp>1675236908</ModifiedTimestamp>\\n        <DefaultLogPath>oss://path/to/log</DefaultLogPath>\\n    </Data>\\n</SetSparkAppLogRootPathResponse>","errorExample":""}]',
      'title' => '更改用户Spark的日志配置',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkConfigLogPath' => 
    array (
      'summary' => '查询AnalyticDB MySQL Spark中的日志配置结果，包括默认的Spark日志写入地址。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '156541',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库的id',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp19lm077co*****',
            'maxLength' => 64,
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1919-xxx-ssdfsdff',
              ),
              'Data' => 
              array (
                'description' => '返回内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsLogPathExists' => 
                  array (
                    'title' => '是否存在日志地址',
                    'description' => '是否存在日志地址。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RecordedLogPath' => 
                  array (
                    'title' => '记录的地址名称',
                    'description' => '记录的地址名称。',
                    'type' => 'string',
                    'example' => 'oss://test/spark-logs/',
                  ),
                  'ModifiedUid' => 
                  array (
                    'title' => '修改者ID',
                    'description' => '修改人的账号ID。',
                    'type' => 'string',
                    'example' => '10130223128xxx',
                  ),
                  'ModifiedTimestamp' => 
                  array (
                    'title' => '上一次修改时间',
                    'description' => '上一次修改时间。',
                    'type' => 'string',
                    'example' => '1675654361000',
                  ),
                  'DefaultLogPath' => 
                  array (
                    'title' => '推荐的默认地址',
                    'description' => '推荐的默认地址。',
                    'type' => 'string',
                    'example' => 'oss://aliyun-oa-adb-spark-****-oss-cn-hanghzou/spark-logs',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.Config.InvalidAppFilePath',
            'errorMessage' => 'The main driver file MUST be a valid OSS path. Current is %s.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.Config.InvalidDiskConfig',
            'errorMessage' => 'The requested disk mount parameter is invalid: %s',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.Config.InvalidHostAliasConfig',
            'errorMessage' => 'The requested host alias parameter %s is invalid. Example: 127.0.0.1 localhost local',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.Config.InvalidLogOssPath',
            'errorMessage' => 'The OSS address for log storage is illegal: %s',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.InvalidRoleArnFormat',
            'errorMessage' => 'Configure RoleARN %s invalid format. It should match acs:ram::uid_number:role/role_name',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.InvalidTimeZone',
            'errorMessage' => 'Unable to parse time zone configuration %s : %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Config.MainAppFileNotExists',
            'errorMessage' => 'The main driver file is missing, [file] or [sqls] must be configured.',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Config.OSSPathAccessError',
            'errorMessage' => 'The configured OSS address %s cannot be accessed.',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.Config.OSSPathNotExists',
            'errorMessage' => 'The OSS address %s requested does not exist or the permissions are insufficient.',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.Config.SecurityGroupNotFound',
            'errorMessage' => 'The security group in the configuration does not exist or cannot be accessed. %s.',
          ),
          14 => 
          array (
            'errorCode' => 'Spark.Config.VswitchNotFound',
            'errorMessage' => 'The vswitch in the configuration does not exist or cannot be accessed. %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1919-xxx-ssdfsdff\\",\\n  \\"Data\\": {\\n    \\"IsLogPathExists\\": true,\\n    \\"RecordedLogPath\\": \\"oss://test/spark-logs/\\",\\n    \\"ModifiedUid\\": \\"10130223128xxx\\",\\n    \\"ModifiedTimestamp\\": \\"1675654361000\\",\\n    \\"DefaultLogPath\\": \\"oss://aliyun-oa-adb-spark-****-oss-cn-hanghzou/spark-logs\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSparkConfigLogPathResponse>\\n    <RequestId>1919-xxx-ssdfsdff</RequestId>\\n    <Data>\\n        <IsLogPathExists>true</IsLogPathExists>\\n        <RecordedLogPath>oss://test/spark-logs/</RecordedLogPath>\\n        <ModifiedUid>10130223128xxx</ModifiedUid>\\n        <ModifiedTimestamp>1675654361000</ModifiedTimestamp>\\n        <DefaultLogPath>oss://aliyun-oa-adb-spark-1111-oss-cn-hanghzou/spark-logs</DefaultLogPath>\\n    </Data>\\n</GetSparkConfigLogPathResponse>","errorExample":""}]',
      'title' => '获取Spark日志配置路径',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'StartSparkSQLEngine' => 
    array (
      'summary' => '启动Spark SQL引擎。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '152577',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-abcd****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'spark-rg-name',
          ),
        ),
        2 => 
        array (
          'name' => 'MinExecutor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '执行SQL时拉起的最小Exectuor数量，配置为0意味着当不需要执行SQL时不会常驻Exectuor。取值范围为0到2000，当配置数量超过资源组承载总量时会导致服务启动失败。此处配置值必须小于MaxExecutor的配置值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxExecutor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '执行SQL时启动的最大的Exector数量。取值范围为1到2000，当配置数量超过资源组承载总量时会导致服务启动失败。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Jars',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '启动SQL引擎时需要引入的第三方JAR包列表，以逗号分隔的JAR包所在的OSS地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://testBuckname/test.jar,oss://testBuckname/test2.jar',
          ),
        ),
        5 => 
        array (
          'name' => 'SlotNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '最大槽位数，即最多可以维持多少个Spark Session来执行SQL。取值范围为1到500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
            'default' => '50',
          ),
        ),
        6 => 
        array (
          'name' => 'Config',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '启动Spark SQL Engine的具体配置，以一个JSON来描述KEY-VALUE型配置信息。详情请参见[Spark Conf配置](~~471203~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{ "spark.shuffle.timeout": ":0s" }',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'description' => 'Spark作业ID。',
                    'type' => 'string',
                    'example' => 's202301xxxx',
                  ),
                  'State' => 
                  array (
                    'description' => 'Spark SQL Engine状态：

- SUBMITTED：提交启动请求。
- STARTING：启动中。
- RUNNING：运行中，可以执行SQL。
- FAILED：引擎出错退出。',
                    'type' => 'string',
                    'example' => 'SUBMITTED',
                  ),
                  'AppName' => 
                  array (
                    'description' => 'Spark App名称。',
                    'type' => 'string',
                    'example' => 'SQLEngine1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.ExceedQuotaLimitation',
            'errorMessage' => 'The requested resource exceeds the maximum limit: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.App.InvalidAppTypeWhenSubmit',
            'errorMessage' => 'The specified AppType is INVALID or NULL. Please refer to the documentation to correct the parameters for %s.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.ResourceNegativeError',
            'errorMessage' => 'The requested resource MUST be positive: %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.Config.InvalidAppFilePath',
            'errorMessage' => 'The main driver file MUST be a valid OSS path. Current is %s.',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.InvalidDiskConfig',
            'errorMessage' => 'The requested disk mount parameter is invalid: %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Config.InvalidHostAliasConfig',
            'errorMessage' => 'The requested host alias parameter %s is invalid. Example: 127.0.0.1 localhost local',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Config.InvalidLogOssPath',
            'errorMessage' => 'The OSS address for log storage is illegal: %s',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.Config.InvalidRoleArnFormat',
            'errorMessage' => 'Configure RoleARN %s invalid format. It should match acs:ram::uid_number:role/role_name',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.Config.InvalidTimeZone',
            'errorMessage' => 'Unable to parse time zone configuration %s : %s',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.Config.MainAppFileNotExists',
            'errorMessage' => 'The main driver file is missing, [file] or [sqls] must be configured.',
          ),
          14 => 
          array (
            'errorCode' => 'Spark.Config.OSSPathAccessError',
            'errorMessage' => 'The configured OSS address %s cannot be accessed.',
          ),
          15 => 
          array (
            'errorCode' => 'Spark.Config.OSSPathNotExists',
            'errorMessage' => 'The OSS address %s requested does not exist or the permissions are insufficient.',
          ),
          16 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          17 => 
          array (
            'errorCode' => 'Spark.Config.SecurityGroupNotFound',
            'errorMessage' => 'The security group in the configuration does not exist or cannot be accessed. %s.',
          ),
          18 => 
          array (
            'errorCode' => 'Spark.Config.VswitchNotFound',
            'errorMessage' => 'The vswitch in the configuration does not exist or cannot be accessed. %s.',
          ),
          19 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          20 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.NotFound',
            'errorMessage' => 'The Spark application %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202301xxxx\\",\\n    \\"State\\": \\"SUBMITTED\\",\\n    \\"AppName\\": \\"SQLEngine1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StartSparkSQLEngineResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>\\n        <AppId>s202301xxxx</AppId>\\n        <State>SUBMITTED</State>\\n        <AppName>SQLEngine1</AppName>\\n    </Data>\\n</StartSparkSQLEngineResponse>","errorExample":""}]',
      'title' => '启动Spark SQL引擎',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'KillSparkSQLEngine' => 
    array (
      'summary' => '关闭Spark SQL引擎。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '152585',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-8vbn8pq537k8w****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'spark_test',
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
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.App.KillOperationFailed',
            'errorMessage' => 'Failed to kill the application %s, please retry in a few seconds.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.KillNotAcceptable',
            'errorMessage' => 'Can\'t kill the application %s in %s state.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": true\\n}","errorExample":""},{"type":"xml","example":"<KillSparkSQLEngineResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>false</Data>\\n</KillSparkSQLEngineResponse>","errorExample":""}]',
      'title' => '关闭Spark SQL引擎',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkSQLEngineState' => 
    array (
      'summary' => '查询Spark SQL引擎的状态。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'get',
        'abilityTreeCode' => '152586',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Job型资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_instance',
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
                'example' => 'xxxx-xxx-xx',
              ),
              'Data' => 
              array (
                'description' => 'Spark SQL 引擎状态详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => 's202207151211hz0c****',
                  ),
                  'MinExecutor' => 
                  array (
                    'description' => 'Spark Executor 最小启动量。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'MaxExecutor' => 
                  array (
                    'description' => 'Spark Executor 最大启动量。',
                    'type' => 'string',
                    'example' => '3',
                  ),
                  'Jars' => 
                  array (
                    'description' => '第三方JAR包。',
                    'type' => 'string',
                    'example' => 'oss://test-bucket/test.jar',
                  ),
                  'SlotNum' => 
                  array (
                    'description' => 'Spark 应用槽位值。',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'Config' => 
                  array (
                    'description' => 'Spark 应用配置。',
                    'type' => 'string',
                    'example' => '{"key1": "value1", "key2": "value2"}',
                  ),
                  'State' => 
                  array (
                    'description' => '应用执行状态，取值说明：
* SUBMITTED：已提交。
* STARTING：开始启动。
* RUNNING：执行中。
* FAILING：任务失败，清理环境中。
* FAILED：失败。
* KILLING：中止任务，清理环境中。
* KILLED：中止任务。
* SUCCEEDING：任务执行结束，清理环境中。
* COMPLETED：已完成。
* FATAL：意外失败。
* UNKNOWN：未知错误。',
                    'type' => 'string',
                    'example' => 'COMPLETED',
                  ),
                  'SubmittedTimeInMillis' => 
                  array (
                    'description' => 'Spark SQL 应用的提交时间，Unix时间戳，单位毫秒（ms）。',
                    'type' => 'string',
                    'example' => '1651213645000',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxxx-xxx-xx\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202207151211hz0c****\\",\\n    \\"MinExecutor\\": \\"1\\",\\n    \\"MaxExecutor\\": \\"3\\",\\n    \\"Jars\\": \\"oss://test-bucket/test.jar\\",\\n    \\"SlotNum\\": \\"2\\",\\n    \\"Config\\": \\"{\\\\\\"key1\\\\\\": \\\\\\"value1\\\\\\", \\\\\\"key2\\\\\\": \\\\\\"value2\\\\\\"}\\",\\n    \\"State\\": \\"COMPLETED\\",\\n    \\"SubmittedTimeInMillis\\": \\"1651213645000\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询Spark SQL引擎状态',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'DescribeSparkCodeOutput' => 
    array (
      'summary' => '获取spark代码的执行结果。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~612397~~)接口查询目标地域下AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-uf6210mmev07****',
          ),
        ),
        2 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Spark Job 任务ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '620',
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
              'Message' => 
              array (
                'description' => '调用结果的附加信息。取值说明：
- 请求正常，返回**Success**。 
- 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功。
- **true**：成功。
- **false**：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Output' => 
              array (
                'description' => '执行的输出，为JSON对象格式。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => '"{\\"schema\\":[\\"id\\",\\"name\\",\\"age\\"],\\"data\\":[\\"{\\\\\\"id\\\\\\":10,\\\\\\"name\\\\\\":\\\\\\"z\\\\\\",\\\\\\"age\\\\\\":123}\\",\\"{\\\\\\"id\\\\\\":2,\\\\\\"name\\\\\\":\\\\\\"b\\\\\\",\\\\\\"age\\\\\\":17}\\",\\"{\\\\\\"id\\\\\\":1,\\\\\\"name\\\\\\":\\\\\\"a\\\\\\",\\\\\\"age\\\\\\":15}\\",\\"{\\\\\\"id\\\\\\":3,\\\\\\"name\\\\\\":\\\\\\"c\\\\\\",\\\\\\"age\\\\\\":222}\\",\\"{\\\\\\"id\\\\\\":10,\\\\\\"name\\\\\\":\\\\\\"z\\\\\\",\\\\\\"age\\\\\\":123}\\"],\\"haveRows\\":true,\\"rowNumber\\":6}"',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Success\\": true,\\n  \\"Output\\": \\"\\\\\\"{\\\\\\\\\\\\\\"schema\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"age\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"data\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":10,\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"z\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"age\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":123}\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":2,\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"b\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"age\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":17}\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"a\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"age\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":15}\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":3,\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"c\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"age\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":222}\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":10,\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"z\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"age\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":123}\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"haveRows\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"rowNumber\\\\\\\\\\\\\\":6}\\\\\\"\\"\\n}","type":"json"}]',
      'title' => '查询产品的代码配置详情',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeSparkCodeLog' => 
    array (
      'summary' => '查询Spark code的执行日志。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '湖仓版（3.0）集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-uf6o6m8p6x7v****',
          ),
        ),
        2 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Spark Job 任务ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1248',
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
              'Message' => 
              array (
                'description' => '调用结果的附加信息。取值说明：
- 请求正常，返回**Success**。 
- 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CD65640-9963-5D60-929C-118F2C84070E',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，取值说明：
- **true**：成功。
- **false**：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Log' => 
              array (
                'description' => '日志内容。',
                'type' => 'string',
                'example' => '>>>>>>>> stdout:n++++++++++++++++++executing sql: MSCK REPAIR TABLE  `footprint_ethereum`.`dwd_eth_eth_txr_v2_di` n++n',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"1CD65640-9963-5D60-929C-118F2C84070E\\",\\n  \\"Success\\": true,\\n  \\"Log\\": \\">>>>>>>> stdout:n++++++++++++++++++executing sql: MSCK REPAIR TABLE  `footprint_ethereum`.`dwd_eth_eth_txr_v2_di` n++n\\"\\n}","type":"json"}]',
      'title' => '查询产品的代码日志',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeSparkCodeWebUi' => 
    array (
      'summary' => '查询Spark应用的Web UI地址。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下AnalyticDB MySQL湖仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1v6usq6m65****',
          ),
        ),
        2 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Spark Job 任务ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1248',
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
              'Message' => 
              array (
                'description' => '应用建议执行结果。取值说明：
- 请求正常，返回**SUCCESS**。 
- 请求异常，返回具体异常错误信息。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '774DDC37-1908-58F6-B9CA-99E3E45965A6',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，取值说明：
- **true**：成功。
- **false**：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Url' => 
              array (
                'description' => 'Spark UI地址',
                'type' => 'string',
                'example' => 'https://adb-subuser-cn-hangzhou-1358535755648527-100000648.oss-cn-hangzhou.aliyuncs.com/%3Facl?Expires=1681295967&OSSAccessKeyId=LTAI5tB7NAkm25oiGASu****&Signature=hKAZ1vgvhJ%2FD8hNHTuX%2FOOBWht****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"774DDC37-1908-58F6-B9CA-99E3E45965A6\\",\\n  \\"Success\\": true,\\n  \\"Url\\": \\"https://adb-subuser-cn-hangzhou-1358535755648527-100000648.oss-cn-hangzhou.aliyuncs.com/%3Facl?Expires=1681295967&OSSAccessKeyId=LTAI5tB7NAkm25oiGASu****&Signature=hKAZ1vgvhJ%2FD8hNHTuX%2FOOBWht****\\"\\n}","type":"json"}]',
      'title' => '查询Spark code的web ui',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'ListSparkTemplateFileIds' => 
    array (
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群所有保存的Spark模板文件ID。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-bp11q28kvl688****',
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'title' => '文件ID列表',
                'description' => '文件ID列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Spark模板文件ID',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '10',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": [\\n    10\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSparkTemplateFileIdsResponse>\\n    <Data>10</Data>\\n    <Data>20</Data>\\n    <Data>30</Data>\\n</ListSparkTemplateFileIdsResponse>","errorExample":""}]',
      'title' => '列出集群中的Spark模板文件ID',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkAppWebUiAddress' => 
    array (
      'summary' => '查询Spark应用的Web UI地址。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '119937',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'spark app的id',
            'description' => '应用ID。
> 您可以调用[ListSparkApps](~~455888~~)接口查询Spark的应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202205201533hz1209892000****',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-uf6g8w25jacm7****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'title' => '',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'title' => 'spark app的id',
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => 's202205201533hz1209892000****',
                  ),
                  'ExpirationTimeInMillis' => 
                  array (
                    'title' => 'spark app的WEB UI的可访问截止时间, 毫秒级时间戳.',
                    'description' => '到期时间，Unix时间戳，单位：毫秒（ms）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1655801973000',
                  ),
                  'WebUiAddress' => 
                  array (
                    'title' => 'Spark App的WEB UI的临时访问地址, 有过期时间, 过期后需要再次生成.',
                    'description' => 'Spark应用的Web UI地址。',
                    'type' => 'string',
                    'example' => 'https://adbsparkui-cn-hangzhou.aliyuncs.com/?token=****',
                  ),
                  'DBClusterId' => 
                  array (
                    'title' => '数据库ID
',
                    'description' => '数据库ID
',
                    'type' => 'string',
                    'example' => 'amv-clusterxxx',
                    'default' => 'DB_CLUSTER_ID',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202205201533hz1209892000****\\",\\n    \\"ExpirationTimeInMillis\\": 1655801973000,\\n    \\"WebUiAddress\\": \\"https://adbsparkui-cn-hangzhou.aliyuncs.com/?token=****\\",\\n    \\"DBClusterId\\": \\"amv-clusterxxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSparkAppWebUiAddressResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>\\n        <AppId>s202205201533hz1209892000****</AppId>\\n        <ExpirationTimeInMillis>1655801973000</ExpirationTimeInMillis>\\n        <WebUiAddress>https://adbsparkui-cn-hangzhou.aliyuncs.com/?token=****</WebUiAddress>\\n    </Data>\\n</GetSparkAppWebUiAddressResponse>","errorExample":""}]',
      'title' => '查询Spark Web UI地址',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'ListSparkAppAttempts' => 
    array (
      'summary' => '查询指定Spark应用的重试信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'spark app的id',
            'description' => '应用ID。

> 您可以调用[ListSparkApps](~~455888~~)接口查询所有的应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202204132018hzprec1ac****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码号',
            'description' => '页码，取值为正整数。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页显示数量',
            'description' => '每页记录数，取值：
- **10**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-uf6o6m8p6x***',
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AttemptInfoList' => 
                  array (
                    'description' => '重试信息列表。返回参数说明：
- **AttemptId**：重试ID。
- **State**：应用执行状态，取值说明：
    - **SUBMITTED**：已提交。
    - **STARTING**：开始启动。
    - **RUNNING**：执行中。
    - **FAILING**：任务失败，清理环境中。
    - **FAILED**：失败。
    - **KILLING**：中止任务，清理环境中。
    - **KILLED**：中止任务。
    - **SUCCEEDING**：任务执行结束，清理环境中。
    - **COMPLETED**：任务执行结束。
    - **FATAL**：意外失败。
    - **UNKNOWN**：未知错误。
- **Message**：返回告警信息，无告警时则返回为空。
- **Data**：Spark应用模板数据。
- **EstimateExecutionCpuTimeInSeconds**：执行Spark应用消耗CPU的时长，单位毫秒（ms）。
- **LogRootPath**：日志文件存储路径。
- **LastAttemptId**：上次重试的ID。
- **WebUiAddress**：Web UI地址。
- **SubmittedTimeInMillis**：提交Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **StartedTimeInMillis**：Spark应用的创建时间，Unix时间戳，单位毫秒（ms）。
- **LastUpdatedTimeInMillis**：最近一次更新Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **TerminatedTimeInMillis**：Spark应用终止执行的时间，Unix时间戳，单位毫秒（ms）。
- **DBClusterId**：执行Spark应用的集群ID。
- **ResourceGroupName**：Job型资源组名称。
- **DurationInMillis**：Spark应用执行耗时，单位毫秒（ms）。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '重试信息列表。返回参数说明：
- **AttemptId**：重试ID。
- **State**：应用执行状态，取值说明：
    - **SUBMITTED**：已提交。
    - **STARTING**：开始启动。
    - **RUNNING**：执行中。
    - **FAILING**：任务失败，清理环境中。
    - **FAILED**：失败。
    - **KILLING**：中止任务，清理环境中。
    - **KILLED**：中止任务。
    - **SUCCEEDING**：任务执行结束，清理环境中。
    - **COMPLETED**：任务执行结束。
    - **FATAL**：意外失败。
    - **UNKNOWN**：未知错误。
- **Message**：返回告警信息，无告警时则返回为空。
- **Data**：Spark应用模板数据。
- **EstimateExecutionCpuTimeInSeconds**：执行Spark应用消耗CPU的时长，单位毫秒（ms）。
- **LogRootPath**：日志文件存储路径。
- **LastAttemptId**：上次重试的ID。
- **WebUiAddress**：Web UI地址。
- **SubmittedTimeInMillis**：提交Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **StartedTimeInMillis**：Spark应用的创建时间，Unix时间戳，单位毫秒（ms）。
- **LastUpdatedTimeInMillis**：最后一次更新Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **TerminatedTimeInMillis**：Spark应用终止执行的时间，Unix时间戳，单位毫秒（ms）。
- **DBClusterId**：执行Spark应用的集群ID。
- **ResourceGroupName**：Job型资源组名称。
- **DurationInMillis**：Spark应用执行耗时，单位毫秒（ms）。',
                      '$ref' => '#/components/schemas/SparkAttemptInfo',
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": {\\n    \\"AttemptInfoList\\": [\\n      {\\n        \\"AttemptId\\": \\"s202207151211hz0cb4200*****-0001\\",\\n        \\"Priority\\": \\"NORMAL\\",\\n        \\"State\\": \\"RUNNING\\",\\n        \\"Message\\": \\"WARN: Disk is full\\",\\n        \\"Detail\\": {\\n          \\"Data\\": \\"{     \\\\\\"name\\\\\\": \\\\\\"SparkPi\\\\\\",     \\\\\\"file\\\\\\": \\\\\\"local:///tmp/spark-examples.jar\\\\\\",     \\\\\\"className\\\\\\": \\\\\\"org.apache.spark.examples.SparkPi\\\\\\",     \\\\\\"args\\\\\\": [         \\\\\\"1000000\\\\\\"     ],     \\\\\\"conf\\\\\\": {         \\\\\\"spark.driver.resourceSpec\\\\\\": \\\\\\"small\\\\\\",         \\\\\\"spark.executor.instances\\\\\\": 1,         \\\\\\"spark.executor.resourceSpec\\\\\\": \\\\\\"small\\\\\\"     } }\\",\\n          \\"EstimateExecutionCpuTimeInSeconds\\": 100,\\n          \\"LogRootPath\\": \\"oss://<bucket-name>/logs/driver\\",\\n          \\"LastAttemptId\\": \\"s202204291426hzpre60cfa*****-0003\\",\\n          \\"WebUiAddress\\": \\"https://sparkui.aliyuncs.com/token=xxx\\",\\n          \\"SubmittedTimeInMillis\\": 1651213645000,\\n          \\"StartedTimeInMillis\\": 1651213645010,\\n          \\"LastUpdatedTimeInMillis\\": 1651213645200,\\n          \\"TerminatedTimeInMillis\\": 1651213645300,\\n          \\"DBClusterId\\": \\"amv-bp11q28kv****\\",\\n          \\"ResourceGroupName\\": \\"spark-rg\\",\\n          \\"DurationInMillis\\": 100,\\n          \\"AppType\\": \\"BATCH\\"\\n        }\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 3\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSparkAppAttemptsResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Data>\\n        <AttemptInfoList>\\n            <AttemptId>s202207151211hz0cb4200*****-0001</AttemptId>\\n            <State>RUNNING</State>\\n            <Message>WARN: Disk is full</Message>\\n            <Detail>\\n                <Data>{     \\"name\\": \\"SparkPi\\",     \\"file\\": \\"local:///tmp/spark-examples.jar\\",     \\"className\\": \\"org.apache.spark.examples.SparkPi\\",     \\"args\\": [         \\"1000000\\"     ],     \\"conf\\": {         \\"spark.driver.resourceSpec\\": \\"small\\",         \\"spark.executor.instances\\": 1,         \\"spark.executor.resourceSpec\\": \\"small\\"     } }</Data>\\n                <EstimateExecutionCpuTimeInSeconds>100</EstimateExecutionCpuTimeInSeconds>\\n                <LogRootPath>oss://&lt;bucket-name&gt;/logs/driver</LogRootPath>\\n                <LastAttemptId>s202204291426hzpre60cfa*****-0003</LastAttemptId>\\n                <WebUiAddress>https://sparkui.aliyuncs.com/token=xxx</WebUiAddress>\\n                <SubmittedTimeInMillis>1651213645000</SubmittedTimeInMillis>\\n                <StartedTimeInMillis>1651213645010</StartedTimeInMillis>\\n                <LastUpdatedTimeInMillis>1651213645200</LastUpdatedTimeInMillis>\\n                <TerminatedTimeInMillis>1651213645300</TerminatedTimeInMillis>\\n                <DBClusterId>amv-bp11q28kv****</DBClusterId>\\n                <ResourceGroupName>spark-rg</ResourceGroupName>\\n                <DurationInMillis>100</DurationInMillis>\\n            </Detail>\\n        </AttemptInfoList>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>10</PageSize>\\n        <TotalCount>3</TotalCount>\\n    </Data>\\n</ListSparkAppAttemptsResponse>","errorExample":""}]',
      'title' => '查询Spark应用的重试信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'CreateSparkTemplate' => 
    array (
      'summary' => '创建Spark应用模板。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件所在数据库ID',
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'ParentId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '父文件夹ID',
            'description' => '应用模板所属的目录ID。
> 调用[GetSparkTemplateFolderTree](~~456218~~)接口查询目录ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件名称',
            'description' => '应用模板名称。长度不超过64个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'batchfile',
            'maxLength' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件类型, 可以为FOLDER或者FILE',
            'description' => '应用模板类型，取值说明：
- **folder**：目录
- **file**：应用',
            'type' => 'string',
            'required' => true,
            'example' => 'file',
            'enum' => 
            array (
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'AppType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件内容的类型, 可选值有 BATCH, STREAMING, SQL, 默认为UNDEFINED',
            'description' => '应用类型，取值说明：
- **SQL**：SQL应用
- **STREAMING**：流应用
- **BATCH**：离线应用

> 当应用模板类型为folder时，无需配置此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'SQL',
            'default' => 'UNDEFINED',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'description' => '应用模板创建结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeeded' => 
                  array (
                    'title' => '是否创建成功',
                    'description' => '是否创建成功，取值说明：
- **True**：成功
- **False**：失败',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.TemplateFile.BadFileType',
            'errorMessage' => 'The requested template %s is not a file.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": {\\n    \\"Succeeded\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateSparkTemplateResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Data>\\n        <Succeeded>true</Succeeded>\\n    </Data>\\n</CreateSparkTemplateResponse>","errorExample":""}]',
      'title' => '创建Spark应用模板',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'DeleteSparkTemplate' => 
    array (
      'summary' => '删除Spark模板文件。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '132062',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '待删除模板文件的ID',
            'description' => '待删除模板文件的目录ID或应用ID。
> - 您可以调用[GetSparkTemplateFullTree](~~456205~~)接口查询目录ID或应用ID。
- 输入目录ID时，会删除目录及目录下所有的应用模板文件。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '725204',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件所在数据库的ID',
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
            'maxLength' => 64,
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'description' => '删除结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeeded' => 
                  array (
                    'title' => '是否删除成功',
                    'description' => '是否删除成功，取值说明：
- **True**：删除成功。
- **False**：删除失败。',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.App.KillOperationFailed',
            'errorMessage' => 'Failed to kill the application %s, please retry in a few seconds.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Log.IllegalPath',
            'errorMessage' => 'Invalid job log URI: %s.',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.Oss.InternalError',
            'errorMessage' => 'An OSS internal error occurred: %s',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.RoleArn.Invalid',
            'errorMessage' => '%s is not found, or the RAM role has not been authorized.',
          ),
          14 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          15 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
          16 => 
          array (
            'errorCode' => 'Spark.TemplateFile.BadFileType',
            'errorMessage' => 'The requested template %s is not a file.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.Log.PodLogNotFound',
            'errorMessage' => 'Can\'t find logs of the pod by podName[%s] in the namespace[%s].',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.KillNotAcceptable',
            'errorMessage' => 'Can\'t kill the application %s in %s state.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Resources.LoadFileFromClasspathFailed',
            'errorMessage' => 'Can\'t load the content from file: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": {\\n    \\"Succeeded\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteSparkTemplateResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Data>\\n        <Succeeded>true</Succeeded>\\n    </Data>\\n</DeleteSparkTemplateResponse>","errorExample":""}]',
      'title' => '删除Spark模板',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkTemplateFolderTree' => 
    array (
      'summary' => '查询Spark应用的目录结构。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库的ID',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
            'maxLength' => 64,
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'title' => '模板文件的结构, 仅包含文件夹, 以树形结构展示.',
                'description' => 'Spark应用的目录结构，以树形结构展示。返回参数说明：
- **Uid**：阿里云账号的UID。
- **Type**：应用模板类型。取值说明：
       **FOLDER**：目录。
- **Parent**：父级。取值说明：
    - **0**：无子目录。
    - **-1**：有子目录。
- **Children**：子目录结构。
- **LastModified**：最近一次修改目录中应用的时间，格式为Unix时间戳，单位秒（s）。
- **Name**：目录名称。
- **Id**：目录ID。',
                'type' => 'string',
                'example' => '{           "Uid":195813423****,           "Type":"FOLDER",          "Parent":-1,           "Children":[              {                     "LastModified":1647853173,               "Uid":195813423****,                     "Type":"FOLDER",                     "Parent":0,                     "Id":157,                     "Name":"t"         }       ],            "Id":725204,            "Name":"root"      }',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": \\"{           \\\\\\"Uid\\\\\\":195813423****,           \\\\\\"Type\\\\\\":\\\\\\"FOLDER\\\\\\",          \\\\\\"Parent\\\\\\":-1,           \\\\\\"Children\\\\\\":[              {                     \\\\\\"LastModified\\\\\\":1647853173,               \\\\\\"Uid\\\\\\":195813423****,                     \\\\\\"Type\\\\\\":\\\\\\"FOLDER\\\\\\",                     \\\\\\"Parent\\\\\\":0,                     \\\\\\"Id\\\\\\":157,                     \\\\\\"Name\\\\\\":\\\\\\"t\\\\\\"         }       ],            \\\\\\"Id\\\\\\":725204,            \\\\\\"Name\\\\\\":\\\\\\"root\\\\\\"      }\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSparkTemplateFolderTreeResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Data>{           \\"Uid\\":195813423****,           \\"Type\\":\\"FOLDER\\",          \\"Parent\\":-1,           \\"Children\\":[              {                     \\"LastModified\\":1647853173,               \\"Uid\\":195813423****,                     \\"Type\\":\\"FOLDER\\",                     \\"Parent\\":0,                     \\"Id\\":157,                     \\"Name\\":\\"t\\"         }       ],            \\"Id\\":725204,            \\"Name\\":\\"root\\"      }</Data>\\n</GetSparkTemplateFolderTreeResponse>","errorExample":""}]',
      'title' => '查询Spark应用的目录结构',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkTemplateFullTree' => 
    array (
      'summary' => '查看Spark应用的目录结构。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库的ID',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
            'maxLength' => 64,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'title' => '模板文件的树形结构',
                'description' => '应用模板的目录结构。返回参数说明：
- **Uid**：阿里云账号的UID。
- **Type**：应用模板类型。取值说明：
    - **FOLDER**：目录。
    - **FILE**：应用。
- **Parent**：父级。取值：
    - **0**：无子目录。
    - **-1**：有子目录。
- **Children**：子目录结构。
- **LastModified**：最近一次修改应用的时间，格式为Unix时间戳，单位秒（s）。
- **AppType**：应用类型。取值说明：
    - **SQL**：SQL应用。
    - **STREAMING**：流应用。
    - **BATCH**：离线应用。
- **Name**：目录名称或应用名称。
- **Id**：目录ID或应用ID。',
                'type' => 'string',
                'example' => '{     "Uid": 10415777****,     "Type": "FOLDER",     "Parent": -1,     "Children": [       {         "LastModified": 1648544748,         "Uid": 104157779****,         "Type": "FILE",         "Parent": 0,         "Id": s202204132****,         "AppType": "SQL",         "Name": "f"       },       {         "LastModified": 1648544956,         "Uid": 1041577795****,         "Type": "FOLDER",         "Parent": 0,         "Id": 157,         "Name": "f3333"       }     ],     "Id": 725204,     "Name": "root"   }',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": \\"{     \\\\\\"Uid\\\\\\": 10415777****,     \\\\\\"Type\\\\\\": \\\\\\"FOLDER\\\\\\",     \\\\\\"Parent\\\\\\": -1,     \\\\\\"Children\\\\\\": [       {         \\\\\\"LastModified\\\\\\": 1648544748,         \\\\\\"Uid\\\\\\": 104157779****,         \\\\\\"Type\\\\\\": \\\\\\"FILE\\\\\\",         \\\\\\"Parent\\\\\\": 0,         \\\\\\"Id\\\\\\": s202204132****,         \\\\\\"AppType\\\\\\": \\\\\\"SQL\\\\\\",         \\\\\\"Name\\\\\\": \\\\\\"f\\\\\\"       },       {         \\\\\\"LastModified\\\\\\": 1648544956,         \\\\\\"Uid\\\\\\": 1041577795****,         \\\\\\"Type\\\\\\": \\\\\\"FOLDER\\\\\\",         \\\\\\"Parent\\\\\\": 0,         \\\\\\"Id\\\\\\": 157,         \\\\\\"Name\\\\\\": \\\\\\"f3333\\\\\\"       }     ],     \\\\\\"Id\\\\\\": 725204,     \\\\\\"Name\\\\\\": \\\\\\"root\\\\\\"   }\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSparkTemplateFullTreeResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Data>{     \\"Uid\\": 10415777****,     \\"Type\\": \\"FOLDER\\",     \\"Parent\\": -1,     \\"Children\\": [       {         \\"LastModified\\": 1648544748,         \\"Uid\\": 104157779****,         \\"Type\\": \\"FILE\\",         \\"Parent\\": 0,         \\"Id\\": s202204132****,         \\"AppType\\": \\"SQL\\",         \\"Name\\": \\"f\\"       },       {         \\"LastModified\\": 1648544956,         \\"Uid\\": 1041577795****,         \\"Type\\": \\"FOLDER\\",         \\"Parent\\": 0,         \\"Id\\": 157,         \\"Name\\": \\"f3333\\"       }     ],     \\"Id\\": 725204,     \\"Name\\": \\"root\\"   }</Data>\\n</GetSparkTemplateFullTreeResponse>","errorExample":""}]',
      'title' => '查询Spark应用的目录结构',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkTemplateFileContent' => 
    array (
      'summary' => '获取Spark应用模板的内容。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库的id',
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-8vbn8pq537k8w****',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件的ID',
            'description' => '应用模板ID。
> 调用[GetSparkTemplateFullTree](~~456205~~)接口查询应用模板ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '725204',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppType' => 
                  array (
                    'description' => '应用类型，取值说明：
- **SQL**：SQL应用。
- **STREAMING**：流应用。
- **BATCH**：离线应用。',
                    'type' => 'string',
                    'example' => 'SQL',
                  ),
                  'Content' => 
                  array (
                    'description' => '应用模板内容。',
                    'type' => 'string',
                    'example' => 'set spark.driver.resourceSpec=medium;set spark.executor.instances=2;set spark.executor.resourceSpec=medium;set spark.app.name=Spark SQL Test;',
                  ),
                  'Id' => 
                  array (
                    'description' => '应用模板ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '725204',
                  ),
                  'Type' => 
                  array (
                    'description' => '文件类型，取值说明：
- **folder**：目录（文件夹）。
- **file**：文件。',
                    'type' => 'string',
                    'example' => 'file',
                  ),
                  'ResourceGroupName' => 
                  array (
                    'description' => '资源组名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.TemplateFile.BadFileType',
            'errorMessage' => 'The requested template %s is not a file.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": {\\n    \\"AppType\\": \\"SQL\\",\\n    \\"Content\\": \\"set spark.driver.resourceSpec=medium;set spark.executor.instances=2;set spark.executor.resourceSpec=medium;set spark.app.name=Spark SQL Test;\\",\\n    \\"Id\\": 725204,\\n    \\"Type\\": \\"file\\",\\n    \\"ResourceGroupName\\": \\"test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSparkTemplateFileContentResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>\\n        <AppType>SQL</AppType>\\n        <Content>set spark.driver.resourceSpec=medium;set spark.executor.instances=2;set spark.executor.resourceSpec=medium;set spark.app.name=Spark SQL Test;</Content>\\n        <Id>725204</Id>\\n        <Type>file</Type>\\n        <ResourceGroupName>test</ResourceGroupName>\\n    </Data>\\n</GetSparkTemplateFileContentResponse>","errorExample":""}]',
      'title' => '查询Spark应用模板的内容',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'UpdateSparkTemplateFile' => 
    array (
      'summary' => '更新Spark应用模板。',
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
        'abilityTreeCode' => '123242',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库的ID',
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-pz5vp4585l466****',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件ID',
            'description' => '应用模板ID。
> 调用[GetSparkTemplateFullTree](~~456205~~)接口查询应用模板ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '718056',
          ),
        ),
        2 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件内容',
            'description' => '应用模板数据。
> 此参数不填写时，不更新应用模板。如何配置Spark应用模板，请参见[Spark应用配置指南](~~452402~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'set spark.driver.resourceSpec=medium;set spark.executor.instances=2;set spark.executor.resourceSpec=medium;set spark.app.name=Spark SQL Test;',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组的名称',
            'description' => 'Job型资源组名称。
',
            'type' => 'string',
            'required' => false,
            'example' => 'adb',
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
                'example' => 'C3A9594F-1D40-4472-A96C-8FB8AA20D38C',
              ),
              'Data' => 
              array (
                'description' => '更新结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeeded' => 
                  array (
                    'title' => '是否更新成功',
                    'description' => '应用模板更新是否成功，取值说明：
- **True**：更新成功。
- **False**：更新失败。',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.TemplateFile.BadFileType',
            'errorMessage' => 'The requested template %s is not a file.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.Log.IllegalPath',
            'errorMessage' => 'Invalid job log URI: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.Oss.InternalError',
            'errorMessage' => 'An OSS internal error occurred: %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.RoleArn.Invalid',
            'errorMessage' => '%s is not found, or the RAM role has not been authorized.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.Log.PodLogNotFound',
            'errorMessage' => 'Can\'t find logs of the pod by podName[%s] in the namespace[%s].',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3A9594F-1D40-4472-A96C-8FB8AA20D38C\\",\\n  \\"Data\\": {\\n    \\"Succeeded\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateSparkTemplateFileResponse>\\n    <RequestId>C3A9594F-1D40-4472-A96C-8FB8AA20D38C</RequestId>\\n    <Data>\\n        <Succeeded>true</Succeeded>\\n    </Data>\\n</UpdateSparkTemplateFileResponse>","errorExample":""}]',
      'title' => '更新Spark应用模板',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'DeleteSparkTemplateFile' => 
    array (
      'summary' => '删除Spark模板文件。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '123240',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件的ID',
            'description' => '需要删除模板的文件ID。
> 调用[GetSparkTemplateFullTree](~~456205~~)接口查询所有现存的模板文件的ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '284',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库的ID',
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1y769u11748****',
            'maxLength' => 64,
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C3A9594F-1D40-4472-A96C-8FB8AA20D38C',
              ),
              'Data' => 
              array (
                'description' => '删除结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeeded' => 
                  array (
                    'description' => '是否成功删除，取值说明：
- **true**：删除成功。
- **false**：删除失败。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.App.KillOperationFailed',
            'errorMessage' => 'Failed to kill the application %s, please retry in a few seconds.',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Log.IllegalPath',
            'errorMessage' => 'Invalid job log URI: %s.',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.Oss.InternalError',
            'errorMessage' => 'An OSS internal error occurred: %s',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.RoleArn.Invalid',
            'errorMessage' => '%s is not found, or the RAM role has not been authorized.',
          ),
          14 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          15 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
          16 => 
          array (
            'errorCode' => 'Spark.TemplateFile.BadFileType',
            'errorMessage' => 'The requested template %s is not a file.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.Log.PodLogNotFound',
            'errorMessage' => 'Can\'t find logs of the pod by podName[%s] in the namespace[%s].',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.KillNotAcceptable',
            'errorMessage' => 'Can\'t kill the application %s in %s state.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.Resources.LoadFileFromClasspathFailed',
            'errorMessage' => 'Can\'t load the content from file: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3A9594F-1D40-4472-A96C-8FB8AA20D38C\\",\\n  \\"Data\\": {\\n    \\"Succeeded\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteSparkTemplateFileResponse>\\n    <RequestId>C3A9594F-1D40-4472-A96C-8FB8AA20D38C</RequestId>\\n    <Data>\\n        <Succeeded>true</Succeeded>\\n    </Data>\\n</DeleteSparkTemplateFileResponse>","errorExample":""}]',
      'title' => '删除Spark模板',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkAppAttemptLog' => 
    array (
      'summary' => '查询Spark应用的重试日志。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AttemptId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'spark重试的id',
            'description' => '重试日志的ID。
> 调用[ListSparkAppAttempts](~~455887~~)接口查询应用的重试历史信息，包含重试日志ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202207151211hz****-0001',
            'maxLength' => 72,
          ),
        ),
        1 => 
        array (
          'name' => 'LogLength',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '返回尾部日志的行数',
            'description' => '重试日志的行数。取值范围：1~500，默认值为300。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '500',
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '20',
            'default' => '300',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '读取日志的其实偏移量。',
            'description' => '读取日志的其实偏移量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '一页的日志行数',
            'description' => '单页数据行数。',
            'type' => 'string',
            'required' => false,
            'example' => '500',
            'default' => '100000',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C3A9594F-1D40-4472-A96C-8FB8AA20D38C',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'LogContent' => 
                  array (
                    'description' => '日志内容。',
                    'type' => 'string',
                    'example' => '22/04/22 15:30:49 INFO Utils: Start the dump task because s202207151211hz****-0001 app end, the interval is 238141ms;22/04/22 15:30:49 INFO AbstractConnector: Stopped Spark@5e774d9d{HTTP/1.1, (http/1.1)}{0.0.0.0:4040}',
                  ),
                  'Message' => 
                  array (
                    'description' => '返回告警信息，如任务执行失败或资源不足等，无告警时则返回为空。',
                    'type' => 'string',
                    'example' => 'WARNING: log file maybe deleted, please check oss path: oss://TestBucketName/applog/',
                  ),
                  'DBClusterId' => 
                  array (
                    'description' => '湖仓版（3.0）集群ID。',
                    'type' => 'string',
                    'example' => 'amv-bp1bg858bo8c****',
                  ),
                  'AppId' => 
                  array (
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => 's202204132018hzprec1ac61a000****',
                  ),
                  'LogSize' => 
                  array (
                    'title' => '日志的行数，0代表没有有效日志。',
                    'description' => '日志的行数，0代表没有有效日志。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '775946240',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3A9594F-1D40-4472-A96C-8FB8AA20D38C\\",\\n  \\"Data\\": {\\n    \\"LogContent\\": \\"22/04/22 15:30:49 INFO Utils: Start the dump task because s202207151211hz****-0001 app end, the interval is 238141ms;22/04/22 15:30:49 INFO AbstractConnector: Stopped Spark@5e774d9d{HTTP/1.1, (http/1.1)}{0.0.0.0:4040}\\",\\n    \\"Message\\": \\"WARNING: log file maybe deleted, please check oss path: oss://TestBucketName/applog/\\",\\n    \\"DBClusterId\\": \\"amv-bp1bg858bo8c****\\",\\n    \\"AppId\\": \\"s202204132018hzprec1ac61a000****\\",\\n    \\"LogSize\\": 775946240\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSparkAppAttemptLogResponse>\\n    <RequestId>C3A9594F-1D40-4472-A96C-8FB8AA20D38C</RequestId>\\n    <Data>\\n        <LogContent>22/04/22 15:30:49 INFO Utils: Start the dump task because s202207151211hz****-0001 app end, the interval is 238141ms;22/04/22 15:30:49 INFO AbstractConnector: Stopped Spark@5e774d9d{HTTP/1.1, (http/1.1)}{0.0.0.0:4040}</LogContent>\\n        <Message>WARNING: log file maybe deleted, please check oss path: oss://TestBucketName/applog/</Message>\\n    </Data>\\n</GetSparkAppAttemptLogResponse>","errorExample":""}]',
      'title' => '查询Spark应用的重试日志',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'ListSparkApps' => 
    array (
      'summary' => '查看Spark应用列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '数据库的ID',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Job型资源组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_instance',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码号',
            'description' => '页码，取值为正整数。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **10**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '30',
            'default' => '10',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppInfoList' => 
                  array (
                    'description' => '应用信息列表。返回参数说明：
- **Data**：Spark应用模板数据。
- **EstimateExecutionCpuTimeInSeconds**：执行Spark应用消耗CPU的时长，单位毫秒（ms）。
- **LogRootPath**：日志文件存储路径。
- **LastAttemptId**：重试ID。
- **WebUiAddress**：Web UI地址。
- **SubmittedTimeInMillis**：提交Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **StartedTimeInMillis**：Spark应用的创建时间，Unix时间戳，单位毫秒（ms）。
- **LastUpdatedTimeInMillis**：最近一次更新Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **TerminatedTimeInMillis**：Spark应用终止执行的时间，Unix时间戳，单位毫秒（ms）。
- **DBClusterId**：执行Spark应用的集群ID。
- **ResourceGroupName**：Job型资源组名称。
- **DurationInMillis**：Spark应用执行耗时，单位毫秒（ms）。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '应用信息列表。返回参数说明：
- **Data**：Spark应用模板数据。
- **EstimateExecutionCpuTimeInSeconds**：执行Spark应用消耗CPU的时长，单位毫秒（ms）。
- **LogRootPath**：日志文件存储路径。
- **LastAttemptId**：重试ID。
- **WebUiAddress**：Web UI地址。
- **SubmittedTimeInMillis**：提交Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **StartedTimeInMillis**：Spark应用的创建时间，Unix时间戳，单位毫秒（ms）。
- **LastUpdatedTimeInMillis**：最近一次更新Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **TerminatedTimeInMillis**：Spark应用终止执行的时间，Unix时间戳，单位毫秒（ms）。
- **DBClusterId**：执行Spark应用的集群ID。
- **ResourceGroupName**：Job型资源组名称。
- **DurationInMillis**：Spark应用执行耗时，单位毫秒（ms）。',
                      'example' => '{
    "AppId": "test-app-id",
    "State": "Running",
    "Detail": {
      "LastAttemptId": "0001",
      "WebUiAddress": "http://spark-ui:4040",
      "SubmittedTimeInMillis": 1644805200260,
      "DBClusterId": "db",
      "EstimateExecutionCpuTimeInSeconds": 1644812400,
      "AppConf": "{}",
      "StartedTimeInMillis": 1644806400260,
      "LastUpdatedTimeInMillis": 1644808800260,
      "ResourceGroupName": "rg"
    },
    "AppName": "test app name"
  }',
                      '$ref' => '#/components/schemas/SparkAppInfo',
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": {\\n    \\"AppInfoList\\": [\\n      {\\n        \\"AppId\\": \\"s202207151211hz0cb4*****\\",\\n        \\"AppName\\": \\"Spark Test\\",\\n        \\"Priority\\": \\"NORMAL\\",\\n        \\"State\\": \\"FAILED\\",\\n        \\"Message\\": \\"WARN: Disk is full\\",\\n        \\"Detail\\": {\\n          \\"Data\\": \\"{     \\\\\\"name\\\\\\": \\\\\\"SparkPi\\\\\\",     \\\\\\"file\\\\\\": \\\\\\"local:///tmp/spark-examples.jar\\\\\\",     \\\\\\"className\\\\\\": \\\\\\"org.apache.spark.examples.SparkPi\\\\\\",     \\\\\\"args\\\\\\": [         \\\\\\"1000000\\\\\\"     ],     \\\\\\"conf\\\\\\": {         \\\\\\"spark.driver.resourceSpec\\\\\\": \\\\\\"small\\\\\\",         \\\\\\"spark.executor.instances\\\\\\": 1,         \\\\\\"spark.executor.resourceSpec\\\\\\": \\\\\\"small\\\\\\"     } }\\",\\n          \\"EstimateExecutionCpuTimeInSeconds\\": 100,\\n          \\"LogRootPath\\": \\"oss://<bucket-name>/logs/driver\\",\\n          \\"LastAttemptId\\": \\"s202204291426hzpre60cfa*****-0003\\",\\n          \\"WebUiAddress\\": \\"https://sparkui.aliyuncs.com/token=xxx\\",\\n          \\"SubmittedTimeInMillis\\": 1651213645000,\\n          \\"StartedTimeInMillis\\": 1651213645010,\\n          \\"LastUpdatedTimeInMillis\\": 1651213645200,\\n          \\"TerminatedTimeInMillis\\": 1651213645300,\\n          \\"DBClusterId\\": \\"amv-bp11q28kv****\\",\\n          \\"ResourceGroupName\\": \\"spark-rg\\",\\n          \\"DurationInMillis\\": 100,\\n          \\"AppType\\": \\"BATCH\\"\\n        },\\n        \\"DBClusterId\\": \\"amv-23xxxx\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSparkAppsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>\\n        <AppInfoList>\\n            <AppId>s202207151211hz0cb4*****</AppId>\\n            <AppName>Spark Test</AppName>\\n            <State>FAILED</State>\\n            <Message>WARN: Disk is full</Message>\\n            <Detail>\\n                <Data>{     \\"name\\": \\"SparkPi\\",     \\"file\\": \\"local:///tmp/spark-examples.jar\\",     \\"className\\": \\"org.apache.spark.examples.SparkPi\\",     \\"args\\": [         \\"1000000\\"     ],     \\"conf\\": {         \\"spark.driver.resourceSpec\\": \\"small\\",         \\"spark.executor.instances\\": 1,         \\"spark.executor.resourceSpec\\": \\"small\\"     } }</Data>\\n                <EstimateExecutionCpuTimeInSeconds>100</EstimateExecutionCpuTimeInSeconds>\\n                <LogRootPath>oss://&lt;bucket-name&gt;/logs/driver</LogRootPath>\\n                <LastAttemptId>s202204291426hzpre60cfa*****-0003</LastAttemptId>\\n                <WebUiAddress>https://sparkui.aliyuncs.com/token=xxx</WebUiAddress>\\n                <SubmittedTimeInMillis>1651213645000</SubmittedTimeInMillis>\\n                <StartedTimeInMillis>1651213645010</StartedTimeInMillis>\\n                <LastUpdatedTimeInMillis>1651213645200</LastUpdatedTimeInMillis>\\n                <TerminatedTimeInMillis>1651213645300</TerminatedTimeInMillis>\\n                <DBClusterId>amv-bp11q28kv****</DBClusterId>\\n                <ResourceGroupName>spark-rg</ResourceGroupName>\\n                <DurationInMillis>100</DurationInMillis>\\n            </Detail>\\n        </AppInfoList>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>10</PageSize>\\n        <TotalCount>1</TotalCount>\\n    </Data>\\n</ListSparkAppsResponse>","errorExample":""}]',
      'title' => '查询Spark应用列表',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkAppInfo' => 
    array (
      'summary' => '查看Spark应用的信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'spark app的id',
            'description' => '应用ID。
> 您可以调用[ListSparkApps](~~455888~~)接口查询Spark应用的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202205201533hz1209892000****',
            'maxLength' => 64,
            'minLength' => 0,
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。

> 您可以调用[DescribeDBClusters](~~612397~~)接口查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'am-bp11q28kvl688****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'description' => 'Spark应用的信息。返回参数说明：
- **Data**：Spark应用模板数据。
- **EstimateExecutionCpuTimeInSeconds**：执行Spark应用消耗CPU的时长，单位毫秒（ms）。
- **LogRootPath**：日志文件存储路径。
- **LastAttemptId**：重试ID。
- **WebUiAddress**：Web UI地址。
- **SubmittedTimeInMillis**：提交Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **StartedTimeInMillis**：Spark应用的创建时间，Unix时间戳，单位毫秒（ms）。
- **LastUpdatedTimeInMillis**：最近一次更新Spark应用的时间，Unix时间戳，单位毫秒（ms）。
- **TerminatedTimeInMillis**：Spark应用终止执行的时间，Unix时间戳，单位毫秒（ms）。
- **DBClusterId**：执行Spark应用的集群ID。
- **ResourceGroupName**：Job型资源组名称。
- **DurationInMillis**：Spark应用执行耗时，单位毫秒（ms）。',
                'example' => '{     \\"name\\": \\"SparkPi\\",     \\"file\\": \\"local:///tmp/spark-examples.jar\\",     \\"className\\": \\"org.apache.spark.examples.SparkPi\\",     \\"args\\": [         \\"1000000\\"     ],     \\"conf\\": {         \\"spark.driver.resourceSpec\\": \\"small\\",         \\"spark.executor.instances\\": 1,         \\"spark.executor.resourceSpec\\": \\"small\\"     } }",
      "EstimateExecutionCpuTimeInSeconds" : 100,
      "LogRootPath" : "oss://test/logs/driver",
      "LastAttemptId" : "s202204291426hzpre60cfabb0000004-0003",
      "WebUiAddress" : "https://sparkui.aliyuncs.com/token=xxx",
      "SubmittedTimeInMillis" : 1651213645000,
      "StartedTimeInMillis" : 1651213645010,
      "LastUpdatedTimeInMillis" : 1651213645200,
      "TerminatedTimeInMillis" : 1651213645300,
      "DBClusterId" : "am-dbclusterid",
      "ResourceGroupName" : "spark-rg",
      "DurationInMillis" : 100
    }',
                '$ref' => '#/components/schemas/SparkAppInfo',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.App.KillOperationFailed',
            'errorMessage' => 'Failed to kill the application %s, please retry in a few seconds.',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Log.IllegalPath',
            'errorMessage' => 'Invalid job log URI: %s.',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.Oss.InternalError',
            'errorMessage' => 'An OSS internal error occurred: %s',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.RoleArn.Invalid',
            'errorMessage' => '%s is not found, or the RAM role has not been authorized.',
          ),
          14 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          15 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
          16 => 
          array (
            'errorCode' => 'Spark.TemplateFile.BadFileType',
            'errorMessage' => 'The requested template %s is not a file.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.Log.PodLogNotFound',
            'errorMessage' => 'Can\'t find logs of the pod by podName[%s] in the namespace[%s].',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.KillNotAcceptable',
            'errorMessage' => 'Can\'t kill the application %s in %s state.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.Resources.LoadFileFromClasspathFailed',
            'errorMessage' => 'Can\'t load the content from file: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202207151211hz0cb4*****\\",\\n    \\"AppName\\": \\"Spark Test\\",\\n    \\"Priority\\": \\"NORMAL\\",\\n    \\"State\\": \\"FAILED\\",\\n    \\"Message\\": \\"WARN: Disk is full\\",\\n    \\"Detail\\": {\\n      \\"Data\\": \\"{     \\\\\\"name\\\\\\": \\\\\\"SparkPi\\\\\\",     \\\\\\"file\\\\\\": \\\\\\"local:///tmp/spark-examples.jar\\\\\\",     \\\\\\"className\\\\\\": \\\\\\"org.apache.spark.examples.SparkPi\\\\\\",     \\\\\\"args\\\\\\": [         \\\\\\"1000000\\\\\\"     ],     \\\\\\"conf\\\\\\": {         \\\\\\"spark.driver.resourceSpec\\\\\\": \\\\\\"small\\\\\\",         \\\\\\"spark.executor.instances\\\\\\": 1,         \\\\\\"spark.executor.resourceSpec\\\\\\": \\\\\\"small\\\\\\"     } }\\",\\n      \\"EstimateExecutionCpuTimeInSeconds\\": 100,\\n      \\"LogRootPath\\": \\"oss://<bucket-name>/logs/driver\\",\\n      \\"LastAttemptId\\": \\"s202204291426hzpre60cfa*****-0003\\",\\n      \\"WebUiAddress\\": \\"https://sparkui.aliyuncs.com/token=xxx\\",\\n      \\"SubmittedTimeInMillis\\": 1651213645000,\\n      \\"StartedTimeInMillis\\": 1651213645010,\\n      \\"LastUpdatedTimeInMillis\\": 1651213645200,\\n      \\"TerminatedTimeInMillis\\": 1651213645300,\\n      \\"DBClusterId\\": \\"amv-bp11q28kv****\\",\\n      \\"ResourceGroupName\\": \\"spark-rg\\",\\n      \\"DurationInMillis\\": 100,\\n      \\"AppType\\": \\"BATCH\\"\\n    },\\n    \\"DBClusterId\\": \\"amv-23xxxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSparkAppInfoResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>\\n        <AppId>s202207151211hz0cb4*****</AppId>\\n        <AppName>Spark Test</AppName>\\n        <State>FAILED</State>\\n        <Message>WARN: Disk is full</Message>\\n        <Detail>\\n            <Data>{     \\"name\\": \\"SparkPi\\",     \\"file\\": \\"local:///tmp/spark-examples.jar\\",     \\"className\\": \\"org.apache.spark.examples.SparkPi\\",     \\"args\\": [         \\"1000000\\"     ],     \\"conf\\": {         \\"spark.driver.resourceSpec\\": \\"small\\",         \\"spark.executor.instances\\": 1,         \\"spark.executor.resourceSpec\\": \\"small\\"     } }</Data>\\n            <EstimateExecutionCpuTimeInSeconds>100</EstimateExecutionCpuTimeInSeconds>\\n            <LogRootPath>oss://&lt;bucket-name&gt;/logs/driver</LogRootPath>\\n            <LastAttemptId>s202204291426hzpre60cfa*****-0003</LastAttemptId>\\n            <WebUiAddress>https://sparkui.aliyuncs.com/token=xxx</WebUiAddress>\\n            <SubmittedTimeInMillis>1651213645000</SubmittedTimeInMillis>\\n            <StartedTimeInMillis>1651213645010</StartedTimeInMillis>\\n            <LastUpdatedTimeInMillis>1651213645200</LastUpdatedTimeInMillis>\\n            <TerminatedTimeInMillis>1651213645300</TerminatedTimeInMillis>\\n            <DBClusterId>amv-bp11q28kv****</DBClusterId>\\n            <ResourceGroupName>spark-rg</ResourceGroupName>\\n            <DurationInMillis>100</DurationInMillis>\\n        </Detail>\\n    </Data>\\n</GetSparkAppInfoResponse>","errorExample":""}]',
      'title' => '查询Spark应用的信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkAppState' => 
    array (
      'summary' => '查询Spark应用的状态。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'spark app的id',
            'description' => '应用ID。
> 可调用[ListSparkApps](~~455888~~)接口查询Spark应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202204191546hzpread6a896000****',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~612397~~)接口查询目标地域中所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-bp1h405854m****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => 's202204191546hzpread6a896000****',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Message' => 
                  array (
                    'description' => '返回告警信息，如任务执行失败或资源不足等，无告警时则返回为空。',
                    'type' => 'string',
                    'example' => 'Insufficient resources.',
                  ),
                  'State' => 
                  array (
                    'title' => 'spark app的状态',
                    'description' => '应用执行状态，取值说明：
- **SUBMITTED**：已提交。
- **STARTING**：开始启动。
- **RUNNING**：执行中。
- **FAILING**：任务失败，清理环境中。
- **FAILED**：失败。
- **KILLING**：中止任务，清理环境中。
- **KILLED**：中止任务。
- **SUCCEEDING**：任务执行结束，清理环境中。
- **COMPLETED**：已完成。
- **FATAL**：意外失败。
- **UNKNOWN**：未知错误。',
                    'type' => 'string',
                    'example' => 'COMPLETED',
                  ),
                  'DBClusterId' => 
                  array (
                    'title' => '数据库ID',
                    'description' => '湖仓版（3.0）集群ID。',
                    'type' => 'string',
                    'example' => 'amv-bp1h405854m****',
                    'default' => 'DB_CLUSTER_ID',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202204191546hzpread6a896000****\\",\\n    \\"AppName\\": \\"test\\",\\n    \\"Message\\": \\"Insufficient resources.\\",\\n    \\"State\\": \\"COMPLETED\\",\\n    \\"DBClusterId\\": \\"amv-bp1h405854m****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSparkAppStateResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <Data>\\n        <AppId>s202204191546hzpread6a896000****</AppId>\\n        <AppName>test</AppName>\\n        <Message>Insufficient resources.</Message>\\n        <State>COMPLETED</State>\\n    </Data>\\n</GetSparkAppStateResponse>","errorExample":""}]',
      'title' => '查询Spark应用的状态',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。、
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'GetSparkAppLog' => 
    array (
      'summary' => '查询Spark应用的日志。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用Id',
            'description' => '应用ID。
> 调用[ListSparkApps](~~612475~~)接口查询Spark应用的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202206061441hz22a35ab000****',
          ),
        ),
        1 => 
        array (
          'name' => 'LogLength',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要返回的尾部日志行数.',
            'description' => '日志的行数。取值范围为1~500，默认值为300。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '500',
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '20',
            'default' => '300',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-2ze6fl8ud7t***',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '读取日志的偏移量。',
            'description' => '读取日志的页码号。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单页数据行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '500',
            'default' => '100000',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C3A9594F-1D40-4472-A96C-8FB8AA20D38C',
              ),
              'Data' => 
              array (
                'description' => '日志详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'LogContent' => 
                  array (
                    'title' => 'spark app的日志内容, 如配置了重试则为最后一次重试的尾部日志内容.',
                    'description' => '日志内容。',
                    'type' => 'string',
                    'example' => '22/04/22 15:30:49 INFO Utils: Start the dump task because s202206061441hz22a35ab000****-0001 app end, the interval is 238141ms;22/04/22 15:30:49 INFO AbstractConnector: Stopped Spark@5e774d9d{HTTP/1.1, (http/1.1)}{0.0.0.0:4040}',
                  ),
                  'Message' => 
                  array (
                    'title' => '额外备注信息',
                    'description' => '返回告警信息，如任务执行失败或资源不足等，无告警时则返回为空。',
                    'type' => 'string',
                    'example' => 'WARNING:  log file maybe deleted, please check oss path: oss://TestBucketName/applog/',
                  ),
                  'DBClusterId' => 
                  array (
                    'description' => '湖仓版（3.0）集群ID。',
                    'type' => 'string',
                    'example' => 'amv-clusterxxx',
                  ),
                  'LogSize' => 
                  array (
                    'description' => '日志的行数，0代表没有有效日志。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3517972480',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.RoleArn.Invalid',
            'errorMessage' => '%s is not found, or the RAM role has not been authorized.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.Oss.InternalError',
            'errorMessage' => 'An OSS internal error occurred: %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.Log.IllegalPath',
            'errorMessage' => 'Invalid job log URI: %s.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.AppStateNotAccepted',
            'errorMessage' => 'Only Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.FailedToKill',
            'errorMessage' => 'Failed to terminate the Spark log analysis task %s, because the task status has changed. Obtain the latest status and try again.',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.InvalidStateWhenAnalyzingApp',
            'errorMessage' => 'Only logs of Spark applications in the terminated state can be analyzed. The specified application %s does not meet the requirement.',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.Log.InvalidState',
            'errorMessage' => 'Failed to obtain the logs of the Spark job %s in the %s state.',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          14 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Failed to parse the SQL %s. Error message: %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Log.PodLogNotFound',
            'errorMessage' => 'Can\'t find logs of the pod by podName[%s] in the namespace[%s].',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.AnalyzeTask.NotFound',
            'errorMessage' => 'The requested analysis task %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3A9594F-1D40-4472-A96C-8FB8AA20D38C\\",\\n  \\"Data\\": {\\n    \\"LogContent\\": \\"22/04/22 15:30:49 INFO Utils: Start the dump task because s202206061441hz22a35ab000****-0001 app end, the interval is 238141ms;22/04/22 15:30:49 INFO AbstractConnector: Stopped Spark@5e774d9d{HTTP/1.1, (http/1.1)}{0.0.0.0:4040}\\",\\n    \\"Message\\": \\"WARNING:  log file maybe deleted, please check oss path: oss://TestBucketName/applog/\\",\\n    \\"DBClusterId\\": \\"amv-clusterxxx\\",\\n    \\"LogSize\\": 3517972480\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSparkAppLogResponse>\\n    <RequestId>C3A9594F-1D40-4472-A96C-8FB8AA20D38C</RequestId>\\n    <Data>\\n        <LogContent>22/04/22 15:30:49 INFO Utils: Start the dump task because s202206061441hz22a35ab000****-0001 app end, the interval is 238141ms;22/04/22 15:30:49 INFO AbstractConnector: Stopped Spark@5e774d9d{HTTP/1.1, (http/1.1)}{0.0.0.0:4040}</LogContent>\\n        <Message>WARNING:  log file maybe deleted, please check oss path: oss://TestBucketName/applog/</Message>\\n    </Data>\\n</GetSparkAppLogResponse>","errorExample":""}]',
      'title' => '查询Spark应用日志',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'SubmitSparkApp' => 
    array (
      'summary' => '提交Spark应用。',
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
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '118686',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsCQJTKP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Spark App的名称',
            'description' => '应用名称，可自定义字符串，长度不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestApp',
          ),
        ),
        1 => 
        array (
          'name' => 'AppType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Spark App的类型, 不填写默认为BATCH 批处理类型',
            'description' => '应用类型，取值说明：
- **SQL**：SQL应用。
- **STREAMING**：流应用。
- **BATCH**（默认值）：离线应用。',
            'type' => 'string',
            'required' => false,
            'example' => 'SQL',
            'default' => 'BATCH',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Data',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Spark App的配置信息, 定义SQL语句或者执行内容',
            'description' => '应用模板数据。
> 应用模板配置，请参见[《Spark应用配置指南》](~~452402~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'conf spark.driver.resourceSpec=small; conf spark.executor.instances=1; conf spark.executor.resourceSpec=small; conf spark.app.name=TestApp;',
          ),
        ),
        3 => 
        array (
          'name' => 'AgentSource',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户端类型',
            'description' => '客户端类型。可自定义字符串，长度不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'CONSOLE',
            'default' => 'SDK',
            'enum' => 
            array (
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'AgentVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户端版本',
            'description' => '应用程序使用的版本。可自定义字符串，长度不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '1.091',
          ),
        ),
        5 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据库的id',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口可以查询集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
            'maxLength' => 64,
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组的名称',
            'description' => 'Job型资源组名称。
> 您可以调用[DescribeDBResourceGroup](~~612410~~)接口查看湖仓版（3.0）集群的资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'adb',
            'maxLength' => 64,
          ),
        ),
        7 => 
        array (
          'name' => 'TemplateFileId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板文件id',
            'description' => '应用模板ID。
> 您可以调用[GetSparkTemplateFullTree](~~456205~~)接口可以查询应用模板ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '15',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '任务列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'description' => '数据列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'title' => 'Spark App的id',
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => 's202204132018hzprec1ac61a000****',
                  ),
                  'AppName' => 
                  array (
                    'title' => 'spark app的名称',
                    'description' => '应用名称。',
                    'type' => 'string',
                    'example' => 'TestApp',
                  ),
                  'Message' => 
                  array (
                    'title' => '备注信息',
                    'description' => '返回告警信息，如任务执行失败或资源不足等，无告警时则返回为空。',
                    'type' => 'string',
                    'example' => 'Insufficient resources.',
                  ),
                  'State' => 
                  array (
                    'title' => 'spark app的状态',
                    'description' => '应用执行状态，取值说明：
- **SUBMITTED**：已提交。
- **STARTING**：开始启动。
- **RUNNING**：执行中。
- **FAILING**：任务失败，清理环境中。
- **FAILED**：失败。
- **KILLING**：中止任务，清理环境中。
- **KILLED**：中止任务。
- **SUCCEEDING**：任务执行结束，清理环境中。
- **COMPLETED**：任务执行结束。
- **FATAL**：意外失败。
- **UNKNOWN**：未知错误。',
                    'type' => 'string',
                    'example' => 'SUBMITTED',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.ExceedQuotaLimitation',
            'errorMessage' => 'The requested resource exceeds the maximum limit: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.InvalidAppTypeWhenSubmit',
            'errorMessage' => 'The specified AppType is INVALID or NULL. Please refer to the documentation to correct the parameters for %s.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.App.InvalidResourceSpec',
            'errorMessage' => 'The requested resource type is not supported:\\n %s',
          ),
          3 => 
          array (
            'errorCode' => 'Spark.App.ParameterConflict',
            'errorMessage' => 'Conflicting parameters submitted:\\n %s',
          ),
          4 => 
          array (
            'errorCode' => 'Spark.App.ResourceNegativeError',
            'errorMessage' => 'The requested resource MUST be positive: %s',
          ),
          5 => 
          array (
            'errorCode' => 'Spark.Config.InvalidAppFilePath',
            'errorMessage' => 'The main driver file MUST be a valid OSS path. Current is %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Spark.Config.invalidConnectors',
            'errorMessage' => 'The spark.adb.connectors configuration is invalid: %s',
          ),
          7 => 
          array (
            'errorCode' => 'Spark.Config.InvalidDiskConfig',
            'errorMessage' => 'The requested disk mount parameter is invalid: %s',
          ),
          8 => 
          array (
            'errorCode' => 'Spark.Config.InvalidHostAliasConfig',
            'errorMessage' => 'The requested host alias parameter %s is invalid. Example: 127.0.0.1 localhost local',
          ),
          9 => 
          array (
            'errorCode' => 'Spark.Config.InvalidLogOssPath',
            'errorMessage' => 'The OSS address for log storage is illegal: %s',
          ),
          10 => 
          array (
            'errorCode' => 'Spark.Config.InvalidRoleArnFormat',
            'errorMessage' => 'Configure RoleARN %s invalid format. It should match acs:ram::uid_number:role/role_name',
          ),
          11 => 
          array (
            'errorCode' => 'Spark.Config.InvalidTimeZone',
            'errorMessage' => 'Unable to parse time zone configuration %s : %s',
          ),
          12 => 
          array (
            'errorCode' => 'Spark.Config.MainAppFileNotExists',
            'errorMessage' => 'The main driver file is missing, [file] or [sqls] must be configured.',
          ),
          13 => 
          array (
            'errorCode' => 'Spark.Config.OSSPathAccessError',
            'errorMessage' => 'The configured OSS address %s cannot be accessed.',
          ),
          14 => 
          array (
            'errorCode' => 'Spark.Config.OSSPathNotExists',
            'errorMessage' => 'The OSS address %s requested does not exist or the permissions are insufficient.',
          ),
          15 => 
          array (
            'errorCode' => 'Spark.Config.RoleArnVerifyFailed',
            'errorMessage' => 'RoleARN parameter verification failed. Error msg: %s when verify RoleArn %s',
          ),
          16 => 
          array (
            'errorCode' => 'Spark.Config.SecurityGroupNotFound',
            'errorMessage' => 'The security group in the configuration does not exist or cannot be accessed. %s.',
          ),
          17 => 
          array (
            'errorCode' => 'Spark.Config.VswitchNotFound',
            'errorMessage' => 'The vswitch in the configuration does not exist or cannot be accessed. %s.',
          ),
          18 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          19 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          20 => 
          array (
            'errorCode' => 'Spark.RoleArn.Invalid',
            'errorMessage' => '%s is not found, or the RAM role has not been authorized.',
          ),
          21 => 
          array (
            'errorCode' => 'Spark.SQL.BlankError',
            'errorMessage' => 'Input sql can not be blank string.',
          ),
          22 => 
          array (
            'errorCode' => 'Spark.SQL.MultipleSQLError',
            'errorMessage' => 'Element in field [sqls] can not contain more than one sql statement: %s.',
          ),
          23 => 
          array (
            'errorCode' => 'Spark.SQL.NotFoundExecutableSQLError',
            'errorMessage' => 'No executable statements are submitted. Please check the input SQL.',
          ),
          24 => 
          array (
            'errorCode' => 'Spark.SQL.ParserError',
            'errorMessage' => 'Submit spark app failed when parser SQL %s. Error message: %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.ContentNotFound',
            'errorMessage' => 'The requested content %s of the Spark application is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.App.NotFound',
            'errorMessage' => 'The Spark application %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202204132018hzprec1ac61a000****\\",\\n    \\"AppName\\": \\"TestApp\\",\\n    \\"Message\\": \\"Insufficient resources.\\",\\n    \\"State\\": \\"SUBMITTED\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SubmitSparkAppResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Data>\\n        <AppId>s202204132018hzprec1ac61a000****</AppId>\\n        <AppName>TestApp</AppName>\\n        <Message>Insufficient resources.</Message>\\n        <State>SUBMITTED</State>\\n    </Data>\\n</SubmitSparkAppResponse>","errorExample":""}]',
      'title' => '提交Spark应用',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'KillSparkApp' => 
    array (
      'summary' => '强行停止运行中的Spark作业。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Spark App的ID',
            'description' => '需要停止的AppID。',
            'type' => 'string',
            'required' => true,
            'example' => 's202204132018hzprec1ac****',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '湖仓版（3.0）集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口可以查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amv-bp1ub9grke1****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69D0810B-F9F5-5F4C-A57F-DF36133B63C9',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'title' => 'Spark App的ID',
                    'description' => '停止执行的AppID。',
                    'type' => 'string',
                    'example' => 's202204132018hzprec1ac****',
                  ),
                  'AppName' => 
                  array (
                    'title' => 'Spark App的名称',
                    'description' => '任务名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Message' => 
                  array (
                    'title' => '特殊注释信息',
                    'description' => '分析失败时错误信息。',
                    'type' => 'string',
                    'example' => '[Advisor] Advisor feature is not available for instance: amv-bp11q28kvl688****',
                  ),
                  'State' => 
                  array (
                    'title' => 'App的状态信息',
                    'description' => '应用执行状态，取值说明：
- **SUBMITTED**：已提交。
- **STARTING**：开始启动。
- **RUNNING**：执行中。
- **FAILING**：任务失败，清理环境中。
- **FAILED**：失败。
- **KILLING**：中止任务，清理环境中。
- **KILLED**：中止任务。
- **SUCCEEDING**：任务执行结束，清理环境中。
- **COMPLETED**：已完成。
- **FATAL**：意外失败。
- **UNKNOWN**：未知错误。',
                    'type' => 'string',
                    'example' => 'KILLED',
                  ),
                  'DBClusterId' => 
                  array (
                    'title' => '数据库ID',
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'amv-bp11q28kvl688****',
                    'default' => 'DB_CLUSTER_ID',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.App.KillOperationFailed',
            'errorMessage' => 'Failed to kill the application %s, please retry in a few seconds.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.App.KillNotAcceptable',
            'errorMessage' => 'Can\'t kill the application %s in %s state.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"69D0810B-F9F5-5F4C-A57F-DF36133B63C9\\",\\n  \\"Data\\": {\\n    \\"AppId\\": \\"s202204132018hzprec1ac****\\",\\n    \\"AppName\\": \\"test\\",\\n    \\"Message\\": \\"[Advisor] Advisor feature is not available for instance: amv-bp11q28kvl688****\\",\\n    \\"State\\": \\"KILLED\\",\\n    \\"DBClusterId\\": \\"amv-bp11q28kvl688****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<KillSparkAppResponse>\\n    <RequestId>69D0810B-F9F5-5F4C-A57F-DF36133B63C9</RequestId>\\n    <Data>\\n        <AppId>s202204132018hzprec1ac****</AppId>\\n        <AppName>test</AppName>\\n        <Message>[Advisor] Advisor feature is not available for instance: amv-bp11q28kvl688****</Message>\\n        <State>running</State>\\n        <DBClusterId>amv-bp11q28kvl688****</DBClusterId>\\n    </Data>\\n</KillSparkAppResponse>","errorExample":""}]',
      'title' => '强行停止运行中的Spark作业',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'CreateOssSubDirectory' => 
    array (
      'summary' => 'OSS创建子目录。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '125729',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsCORDM7',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Path',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建的子目录的完整OSS路径
',
            'description' => '创建目录的完整OSS路径。
',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://testBucketName/das_lakehouse',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~612397~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp149vz49b36t****',
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
            'description' => '响应模式。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3A0DE2E0-A37B-5EE4-9136-C4C473714802',
              ),
              'Message' => 
              array (
                'description' => '调用结果的附加信息。取值说明：
- 请求正常，返回**Success**。                                
- 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP请求返回的响应状态码，200表示请求发送成功。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'ClientCRC' => 
                  array (
                    'description' => 'Client.CRC校验值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'ETag' => 
                  array (
                    'description' => 'OSS路径的标签。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'RequestId' => 
                  array (
                    'description' => '请求ID。',
                    'type' => 'string',
                    'example' => '3A0DE2E0-A37B-5EE4-9136-C4C473714802',
                  ),
                  'ServerCRC' => 
                  array (
                    'description' => '阿里云OSS Bucket的CRC-64值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，取值说明：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3A0DE2E0-A37B-5EE4-9136-C4C473714802\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"ClientCRC\\": 1,\\n    \\"ETag\\": \\"1\\",\\n    \\"RequestId\\": \\"3A0DE2E0-A37B-5EE4-9136-C4C473714802\\",\\n    \\"ServerCRC\\": 1\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateOssSubDirectoryResponse>\\n    <RequestId>3A0DE2E0-A37B-5EE4-9136-C4C473714802</RequestId>\\n    <Message>Success</Message>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <ClientCRC>1</ClientCRC>\\n        <ETag>1</ETag>\\n        <RequestId>3A0DE2E0-A37B-5EE4-9136-C4C473714802</RequestId>\\n        <ServerCRC>1</ServerCRC>\\n    </Data>\\n    <Success>true</Success>\\n</CreateOssSubDirectoryResponse>","errorExample":""}]',
      'title' => '创建oss目录',
      'description' => '- 中心的公网接入地址：`adb.aliyuncs.com`。
- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeAdbMySqlColumns' => 
    array (
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群指定表的列信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1r053byu48p****',
          ),
        ),
        2 => 
        array (
          'name' => 'Schema',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
            'default' => 'INFORMATION_SCHEMA',
          ),
        ),
        3 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
            'default' => 'COLUMNS',
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
              'Message' => 
              array (
                'description' => '调用结果的附加信息。取值说明：
- 请求正常，返回**Success**。 
- 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A9F013CD-0222-595E-8157-445969B97F03',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功。
- **true**：成功。
- **false**：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Schema' => 
              array (
                'description' => '数据库名称。',
                'type' => 'string',
                'example' => 'adb_demo',
              ),
              'TableName' => 
              array (
                'description' => '
表名。',
                'type' => 'string',
                'example' => 'test',
              ),
              'ColumnCount' => 
              array (
                'description' => '总列数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Columns' => 
              array (
                'description' => '列信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '列的数据类型。',
                      'type' => 'string',
                      'example' => 'bigint',
                    ),
                    'Name' => 
                    array (
                      'description' => '列名。',
                      'type' => 'string',
                      'example' => 'id',
                    ),
                    'Comment' => 
                    array (
                      'description' => '列注释。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"A9F013CD-0222-595E-8157-445969B97F03\\",\\n  \\"Success\\": true,\\n  \\"Schema\\": \\"adb_demo\\",\\n  \\"TableName\\": \\"test\\",\\n  \\"ColumnCount\\": 1,\\n  \\"Columns\\": [\\n    {\\n      \\"Type\\": \\"bigint\\",\\n      \\"Name\\": \\"id\\",\\n      \\"Comment\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdbMySqlColumnsResponse>\\n    <Message>Success</Message>\\n    <RequestId>A9F013CD-0222-595E-8157-445969B97F03</RequestId>\\n    <Success>true</Success>\\n    <Schema>adb_demo</Schema>\\n    <TableName>test</TableName>\\n    <ColumnCount>1</ColumnCount>\\n    <Columns>\\n        <Type>bigint</Type>\\n        <Name>id</Name>\\n        <Comment>test</Comment>\\n    </Columns>\\n</DescribeAdbMySqlColumnsResponse>","errorExample":""}]',
      'title' => '查询表的列信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeAdbMySqlTables' => 
    array (
      'summary' => '枚举AnalyticDB MySQL湖仓版（3.0）集群指定数据库下所有表信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        2 => 
        array (
          'name' => 'Schema',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
            'default' => 'INFORMATION_SCHEMA',
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
              'Message' => 
              array (
                'description' => '调用结果的附加信息。取值说明：
- 请求正常，返回**Success**。 
- 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7A7D49E3-5585-5DF8-B62C-75C46B4991DC',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，取值说明：
- **true**：成功。
- **false**：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Schema' => 
              array (
                'description' => '数据库名称。',
                'type' => 'string',
                'example' => 'adb_demo',
              ),
              'Tables' => 
              array (
                'description' => '表信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '表名称。',
                  'type' => 'string',
                  'example' => 'test',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"7A7D49E3-5585-5DF8-B62C-75C46B4991DC\\",\\n  \\"Success\\": true,\\n  \\"Schema\\": \\"adb_demo\\",\\n  \\"Tables\\": [\\n    \\"test\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdbMySqlTablesResponse>\\n    <Message>Success</Message>\\n    <RequestId>7A7D49E3-5585-5DF8-B62C-75C46B4991DC</RequestId>\\n    <Success>true</Success>\\n    <Schema>adb_demo</Schema>\\n    <Tables>test</Tables>\\n</DescribeAdbMySqlTablesResponse>","errorExample":""}]',
      'title' => '查询数据库下所有表信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeAdbMySqlSchemas' => 
    array (
      'summary' => '枚举指定AnalyticDB MySQL湖仓版（3.0）集群下所有数据库列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1r053byu48p****',
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
              'Message' => 
              array (
                'description' => '调用结果的附加信息。取值说明：
- 请求正常，返回**Success**。 
- 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功，取值说明：
- **true**：成功。
- **false**：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Schemas' => 
              array (
                'description' => '数据库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据库名称。',
                  'type' => 'string',
                  'example' => 'adb_demo,adb_test,mysql',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Success\\": true,\\n  \\"Schemas\\": [\\n    \\"adb_demo,adb_test,mysql\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdbMySqlSchemasResponse>\\n    <Message>Success</Message>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Success>true</Success>\\n    <Schemas>adb_demo,adb_test,mysql</Schemas>\\n</DescribeAdbMySqlSchemasResponse>","errorExample":""}]',
      'title' => '查询所有数据库列表',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeTableAccessCount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-2ze627uzpkh8a8****',
          ),
        ),
        1 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标表名。
> 若该参数留空，则会返回当前日期内目标集群下所有表的使用频次数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'CUSTOMER',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。
> 仅支持查看30天内的数据。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-09-25T12:10:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将查询结果按指定字段进行排序。格式为JOSN字符串，例如`[{"Field":"TableSchema","Type":"Asc"}]`。其中：
- `Field`表示排序字段。支持如下取值：
    - `TableSchema`：表所属的数据库名。
    - `TableName`：表名。
    - `AccessCount`：表被访问的次数。
- `Type`表示排序方式。支持如下取值：
    - `Asc`：升序排序。
    - `Desc`： 降序排序。

> 若不设置参数，默认按照目标表所属的数据库升序排列。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Field":"TableSchema","Type":"Asc"}]',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **10**（默认值）
- **30**
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6B7D627B-DA23-572D-AD71-256F64698B7D',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '表使用详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReportDate' => 
                    array (
                      'description' => '表使用日期。',
                      'type' => 'string',
                      'example' => '2022-09-26',
                    ),
                    'TableSchema' => 
                    array (
                      'description' => '表所属的数据库。',
                      'type' => 'string',
                      'example' => 'tpch',
                    ),
                    'AccessCount' => 
                    array (
                      'description' => '表被访问的次数。',
                      'type' => 'string',
                      'example' => '6',
                    ),
                    'TableName' => 
                    array (
                      'description' => '表名称。',
                      'type' => 'string',
                      'example' => 'CUSTOMER',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '表所属集群的集群ID。',
                      'type' => 'string',
                      'example' => 'amv-2ze627uzpkh8a8****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6B7D627B-DA23-572D-AD71-256F64698B7D\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"ReportDate\\": \\"2022-09-26\\",\\n      \\"TableSchema\\": \\"tpch\\",\\n      \\"AccessCount\\": \\"6\\",\\n      \\"TableName\\": \\"CUSTOMER\\",\\n      \\"InstanceName\\": \\"amv-2ze627uzpkh8a8****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTableAccessCountResponse>\\n    <RequestId>6B7D627B-DA23-572D-AD71-256F64698B7D</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <ReportDate>2022-09-26</ReportDate>\\n        <TableSchema>tpch</TableSchema>\\n        <AccessCount>6</AccessCount>\\n        <TableName>CUSTOMER</TableName>\\n        <InstanceName>amv-2ze627uzpkh8a8****</InstanceName>\\n    </Items>\\n</DescribeTableAccessCountResponse>","errorExample":""}]',
      'title' => '查询表的访问次数',
      'summary' => '查看指定日期内AnalyticDB MySQL湖仓版集群下目标表或所有表被访问次数。',
      'description' => '当前服务的接入地址请参见https://help.aliyun.com/zh/analyticdb-for-mysql/developer-reference/api-adb-2021-12-01-endpoint?spm=a2c4g.11186623.0.0.50182463TpsIoI。',
    ),
    'GetViewDDL' => 
    array (
      'summary' => '查询视图的创建语句。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '157089',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads8FGISX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        1 => 
        array (
          'name' => 'ViewName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'v_modbus',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '421794A3-72A5-5D27-9E8B-A75A4C503E17',
              ),
              'SQL' => 
              array (
                'description' => 'SQL语句详情。',
                'type' => 'string',
                'example' => 'CREATE VIEW `test`.`test_view` AS SELECT
  `id`
, `name`
FROM
  `test_tbl_adb`',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"421794A3-72A5-5D27-9E8B-A75A4C503E17\\",\\n  \\"SQL\\": \\"CREATE VIEW `test`.`test_view` AS SELECT\\\\n  `id`\\\\n, `name`\\\\nFROM\\\\n  `test_tbl_adb`\\"\\n}","errorExample":""},{"type":"xml","example":"<GetViewDDLResponse>\\n    <RequestId>421794A3-72A5-5D27-9E8B-A75A4C503E17</RequestId>\\n    <SQL>CREATE VIEW `test`.`test_view` AS SELECT\\n  `id`\\n, `name`\\nFROM\\n  `test_tbl_adb`</SQL>\\n</GetViewDDLResponse>","errorExample":""}]',
      'title' => '查询视图的创建语句',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'GetViewObjects' => 
    array (
      'summary' => '查询视图信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '157080',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads8FGISX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。
 
',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        2 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。
类型取值：
- Asc；
- Desc；

域取值：
-ViewName；

-CreateTime;

-UpdateTime;

默认值：{"Type": "Desc","Field": "ViewName"}；',
            'type' => 'string',
            'required' => false,
            'example' => '{"Type": "Desc","Field": "ViewName"}',
          ),
        ),
        3 => 
        array (
          'name' => 'FilterViewName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_filter',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围如下：
* **30**（默认值）。
* **50**。
* **100**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
          ),
        ),
        6 => 
        array (
          'name' => 'FilterViewType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图类型。

取值：

-VIRTUAL_VIEW

-MATERIALIZED_VIEW


默认值：空',
            'type' => 'string',
            'required' => false,
            'example' => 'VIRTUAL_VIEW',
          ),
        ),
        7 => 
        array (
          'name' => 'FilterOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所有者。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'PageNumber' => 
              array (
                'description' => '页码，取值为大于0且不超过Integer数据类型最大值的正整数。默认值为**1**。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值范围如下：
* **30**（默认值）。
* **50**。
* **100**。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => '返回结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'description' => '页码，取值为大于0且不超过Integer数据类型最大值的正整数。默认值为**1**。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页记录数，取值范围如下：
* **30**（默认值）。
* **50**。
* **100**。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'TableSummaryModels' => 
                  array (
                    'description' => '结果数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '视图概要信息。',
                      '$ref' => '#/components/schemas/TableSummaryModel',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 30,\\n    \\"TotalCount\\": 1,\\n    \\"TableSummaryModels\\": [\\n      {\\n        \\"SchemaName\\": \\"\\",\\n        \\"TableName\\": \\"\\",\\n        \\"TableType\\": \\"\\",\\n        \\"TableSize\\": 0,\\n        \\"CreateTime\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"SQL\\": \\"\\",\\n        \\"Description\\": \\"\\",\\n        \\"Owner\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetViewObjectsResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Data>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>30</PageSize>\\n        <TotalCount>1</TotalCount>\\n        <TableSummaryModels/>\\n    </Data>\\n</GetViewObjectsResponse>","errorExample":""}]',
      'title' => '查询视图信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'GetDatabaseObjects' => 
    array (
      'summary' => '查询数据库信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。
类型取值：
- Asc；
- Desc；

域取值：
-DatabseName；
-CreateTime;
-UpdateTime;

默认值：{"Type": "Desc","Field": "DatabaseName"}；',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "Type": "Desc",
      "Field": "DatabaseName"
}',
          ),
        ),
        1 => 
        array (
          'name' => 'FilterSchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_db',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '每页记录数，取值：

- 30；
- 50；
- 100；

默认值：30。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'am-bp1565u55p32****',
          ),
        ),
        5 => 
        array (
          'name' => 'FilterOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所有者。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '863D51B7-5321-41D8-A0B6-A088B0******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码，取值为正整数。默认值为**1**。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DatabaseSummaryModels' => 
                  array (
                    'description' => '结果数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库概要信息。',
                      '$ref' => '#/components/schemas/DatabaseSummaryModel',
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页记录数，取值：

- 30；
- 50；
- 100；

默认值：30。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"863D51B7-5321-41D8-A0B6-A088B0******\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Data\\": {\\n    \\"DatabaseSummaryModels\\": [\\n      {\\n        \\"Owner\\": \\"\\",\\n        \\"SchemaName\\": \\"\\",\\n        \\"Description\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 30,\\n    \\"TotalCount\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDatabaseObjectsResponse>\\n    <RequestId>863D51B7-5321-41D8-A0B6-A088B0******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Data>\\n        <DatabaseSummaryModels/>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>30</PageSize>\\n        <TotalCount>1</TotalCount>\\n    </Data>\\n</GetDatabaseObjectsResponse>","errorExample":""}]',
      'title' => '查询数据库信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'GetTable' => 
    array (
      'summary' => '获取表信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '160312',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads8FGISX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbName',
            'default' => 'MYSQL',
          ),
        ),
        1 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询表名。',
            'type' => 'string',
            'required' => false,
            'example' => 'tableName',
            'default' => 'USER',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-*******',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Table' => 
              array (
                'description' => '表详细信息。',
                '$ref' => '#/components/schemas/TableModel',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"Table\\": {\\n    \\"TblId\\": 0,\\n    \\"DbName\\": \\"\\",\\n    \\"TableName\\": \\"\\",\\n    \\"TableType\\": \\"\\",\\n    \\"PartitionKeys\\": [\\n      {\\n        \\"Name\\": \\"\\",\\n        \\"Type\\": \\"\\",\\n        \\"Comment\\": \\"\\",\\n        \\"DatabaseName\\": \\"\\",\\n        \\"TableName\\": \\"\\",\\n        \\"MappedName\\": \\"\\",\\n        \\"DataType\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"PkPosition\\": 0,\\n        \\"IsPartitionKey\\": true,\\n        \\"OrdinalPosition\\": 0,\\n        \\"ColumnRawName\\": \\"\\",\\n        \\"PhysicalColumnName\\": \\"\\",\\n        \\"Nullable\\": true,\\n        \\"AutoIncrement\\": true,\\n        \\"Precision\\": 0,\\n        \\"Scale\\": 0,\\n        \\"Primarykey\\": true,\\n        \\"DefaultValue\\": \\"\\",\\n        \\"Tokenizer\\": \\"\\",\\n        \\"Encode\\": \\"\\",\\n        \\"Compression\\": \\"\\",\\n        \\"Delimiter\\": \\"\\",\\n        \\"ValueType\\": \\"\\",\\n        \\"CompressFloatUseShort\\": true,\\n        \\"OnUpdate\\": \\"\\"\\n      }\\n    ],\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Sd\\": {\\n      \\"SdId\\": 0,\\n      \\"Location\\": \\"\\",\\n      \\"InputFormat\\": \\"\\",\\n      \\"OutputFormat\\": \\"\\",\\n      \\"Compressed\\": true,\\n      \\"NumBuckets\\": 0,\\n      \\"SerDeInfo\\": {\\n        \\"SerDeId\\": 0,\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerializationLib\\": \\"\\"\\n      },\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"StoredAsSubDirectories\\": true\\n    },\\n    \\"CreateTime\\": \\"\\",\\n    \\"ViewOriginalText\\": \\"\\",\\n    \\"ViewExpandedText\\": \\"\\",\\n    \\"Temporary\\": true,\\n    \\"Comment\\": \\"\\",\\n    \\"Cols\\": [\\n      {\\n        \\"Name\\": \\"\\",\\n        \\"Type\\": \\"\\",\\n        \\"Comment\\": \\"\\",\\n        \\"DatabaseName\\": \\"\\",\\n        \\"TableName\\": \\"\\",\\n        \\"MappedName\\": \\"\\",\\n        \\"DataType\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"PkPosition\\": 0,\\n        \\"IsPartitionKey\\": true,\\n        \\"OrdinalPosition\\": 0,\\n        \\"ColumnRawName\\": \\"\\",\\n        \\"PhysicalColumnName\\": \\"\\",\\n        \\"Nullable\\": true,\\n        \\"AutoIncrement\\": true,\\n        \\"Precision\\": 0,\\n        \\"Scale\\": 0,\\n        \\"Primarykey\\": true,\\n        \\"DefaultValue\\": \\"\\",\\n        \\"Tokenizer\\": \\"\\",\\n        \\"Encode\\": \\"\\",\\n        \\"Compression\\": \\"\\",\\n        \\"Delimiter\\": \\"\\",\\n        \\"ValueType\\": \\"\\",\\n        \\"CompressFloatUseShort\\": true,\\n        \\"OnUpdate\\": \\"\\"\\n      }\\n    ],\\n    \\"DistributeColumns\\": [\\n      {\\n        \\"Name\\": \\"\\",\\n        \\"Type\\": \\"\\",\\n        \\"Comment\\": \\"\\",\\n        \\"DatabaseName\\": \\"\\",\\n        \\"TableName\\": \\"\\",\\n        \\"MappedName\\": \\"\\",\\n        \\"DataType\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"PkPosition\\": 0,\\n        \\"IsPartitionKey\\": true,\\n        \\"OrdinalPosition\\": 0,\\n        \\"ColumnRawName\\": \\"\\",\\n        \\"PhysicalColumnName\\": \\"\\",\\n        \\"Nullable\\": true,\\n        \\"AutoIncrement\\": true,\\n        \\"Precision\\": 0,\\n        \\"Scale\\": 0,\\n        \\"Primarykey\\": true,\\n        \\"DefaultValue\\": \\"\\",\\n        \\"Tokenizer\\": \\"\\",\\n        \\"Encode\\": \\"\\",\\n        \\"Compression\\": \\"\\",\\n        \\"Delimiter\\": \\"\\",\\n        \\"ValueType\\": \\"\\",\\n        \\"CompressFloatUseShort\\": true,\\n        \\"OnUpdate\\": \\"\\"\\n      }\\n    ],\\n    \\"PhysicalTableName\\": \\"\\",\\n    \\"PhysicalDatabaseName\\": \\"\\",\\n    \\"DistributeType\\": \\"\\",\\n    \\"PartitionType\\": \\"\\",\\n    \\"PartitionColumn\\": \\"\\",\\n    \\"PartitionCount\\": 0,\\n    \\"PreviousVersion\\": 0,\\n    \\"CurrentVersion\\": 0,\\n    \\"UpdateTime\\": \\"\\",\\n    \\"TableEngineName\\": \\"\\",\\n    \\"IsAllIndex\\": true,\\n    \\"BlockSize\\": 0,\\n    \\"Compression\\": \\"\\",\\n    \\"RawTableName\\": \\"\\",\\n    \\"SubpartitionType\\": \\"\\",\\n    \\"SubpartitionColumn\\": \\"\\",\\n    \\"SubpartitionCount\\": 0,\\n    \\"ArchiveType\\": \\"\\",\\n    \\"MaxColumnId\\": 0,\\n    \\"EnableDfs\\": true,\\n    \\"StoragePolicy\\": \\"\\",\\n    \\"HotPartitionCount\\": 0,\\n    \\"IsFulltextDict\\": true,\\n    \\"RtIndexAll\\": true,\\n    \\"RouteColumns\\": [],\\n    \\"RtEngineType\\": \\"\\",\\n    \\"RtModeType\\": \\"\\",\\n    \\"RouteType\\": \\"\\",\\n    \\"DictEncode\\": true,\\n    \\"BucketCount\\": 0,\\n    \\"Bucket\\": 0,\\n    \\"ViewSecurityMode\\": \\"\\",\\n    \\"Indexes\\": [\\n      {\\n        \\"DatabaseName\\": \\"\\",\\n        \\"PhysicalTableName\\": \\"\\",\\n        \\"IndexName\\": \\"\\",\\n        \\"IndexType\\": \\"\\",\\n        \\"IndexColumns\\": [],\\n        \\"ColumnOrds\\": [\\n          \\"\\"\\n        ],\\n        \\"Options\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"CreateTime\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTableResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Code>0</Code>\\n    <Message>\\"\\"</Message>\\n    <Success>true</Success>\\n    <Table>\\n        <PartitionKeys/>\\n        <Sd>\\n            <SerDeInfo/>\\n        </Sd>\\n        <Cols/>\\n        <DistributeColumns/>\\n        <RouteColumns/>\\n        <RouteEffectiveColumn/>\\n        <Indexes>\\n            <IndexColumns/>\\n        </Indexes>\\n    </Table>\\n</GetTableResponse>","errorExample":""}]',
      'title' => '查询表信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'GetTableColumns' => 
    array (
      'summary' => '查询列信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '157085',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads8FGISX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        1 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ColumnName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列名。',
            'type' => 'string',
            'required' => false,
            'example' => 'assist_user_phone',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '每页记录数，取值范围如下：
* **30**（默认值）。
* **50**。
* **100**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'PageNumber' => 
              array (
                'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值范围如下：
* **30**（默认值）。
* **50**。
* **100**。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页记录数，取值范围如下：
* **30**（默认值）。
* **50**。
* **100**。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '结果中数据的总条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '15',
                  ),
                  'Table' => 
                  array (
                    'description' => '表的详细信息。',
                    '$ref' => '#/components/schemas/TableDetailModel',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 15,\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 30,\\n    \\"TotalCount\\": 15,\\n    \\"Table\\": {\\n      \\"SchemaName\\": \\"\\",\\n      \\"TableName\\": \\"\\",\\n      \\"TableType\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"Description\\": \\"\\",\\n      \\"Owner\\": \\"\\",\\n      \\"Columns\\": [\\n        {\\n          \\"ColumnName\\": \\"\\",\\n          \\"Type\\": \\"\\",\\n          \\"Description\\": \\"\\",\\n          \\"SchemaName\\": \\"\\",\\n          \\"TableName\\": \\"\\",\\n          \\"CreateTime\\": \\"\\",\\n          \\"UpdateTime\\": \\"\\",\\n          \\"PartitionKey\\": true,\\n          \\"Nullable\\": true,\\n          \\"PrimaryKey\\": true,\\n          \\"DistributeKey\\": true\\n        }\\n      ],\\n      \\"Catalog\\": \\"\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTableColumnsResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>15</TotalCount>\\n    <Data>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>30</PageSize>\\n        <TotalCount>15</TotalCount>\\n        <Table>\\n            <Columns/>\\n        </Table>\\n    </Data>\\n</GetTableColumnsResponse>","errorExample":""}]',
      'title' => '查询列信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'GetTableDDL' => 
    array (
      'summary' => '查询建表语句。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '157088',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads8FGISX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。
 
',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        1 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '863D51B7-5321-41D8-A0B6-A088B0******',
              ),
              'SQL' => 
              array (
                'description' => 'SQL语句。',
                'type' => 'string',
                'example' => 'create table (
 id varchar(32)
);',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"863D51B7-5321-41D8-A0B6-A088B0******\\",\\n  \\"SQL\\": \\"create table (\\\\n id varchar(32)\\\\n);\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTableDDLResponse>\\n    <RequestId>863D51B7-5321-41D8-A0B6-A088B0******</RequestId>\\n    <SQL>create table (\\n id varchar(32)\\n);</SQL>\\n</GetTableDDLResponse>","errorExample":""}]',
      'title' => '查询建表语句',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'GetTableObjects' => 
    array (
      'summary' => '查询表信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '157079',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads8FGISX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。
 
',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        1 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。
类型取值：
- Asc；
- Desc；

域取值：
-TableName；
-TableSize；
-CreateTime;
-UpdateTime;

默认值：{"Type": "Desc","Field": "TableName"}；

',
            'type' => 'string',
            'required' => false,
            'example' => '{"Type": "Desc","Field": "TableName"}',
          ),
        ),
        2 => 
        array (
          'name' => 'FilterTblName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_tbl',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '每页记录数，取值：

- 30；
- 50；
- 100；

默认值：30。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1565u55p32****',
          ),
        ),
        6 => 
        array (
          'name' => 'FilterTblType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表类型。
取值：

-DIMENSION_TABLE

-FACT_TABLE

-EXTERNAL_TABLE

默认值：空',
            'type' => 'string',
            'required' => false,
            'example' => 'FACT_TABLE',
          ),
        ),
        7 => 
        array (
          'name' => 'FilterOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所有者。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        8 => 
        array (
          'name' => 'FilterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '863D51B7-5321-41D8-A0B6-A088B0******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码，取值为正整数。默认值为**1**。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'description' => '页码，取值为正整数。默认值为**1**。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'TableSummaryModels' => 
                  array (
                    'description' => '结果数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '表概要信息。',
                      '$ref' => '#/components/schemas/TableSummaryModel',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"863D51B7-5321-41D8-A0B6-A088B0******\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 30,\\n    \\"TotalCount\\": 1,\\n    \\"TableSummaryModels\\": [\\n      {\\n        \\"SchemaName\\": \\"\\",\\n        \\"TableName\\": \\"\\",\\n        \\"TableType\\": \\"\\",\\n        \\"TableSize\\": 0,\\n        \\"CreateTime\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"SQL\\": \\"\\",\\n        \\"Description\\": \\"\\",\\n        \\"Owner\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTableObjectsResponse>\\n    <RequestId>863D51B7-5321-41D8-A0B6-A088B0******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Data>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>30</PageSize>\\n        <TotalCount>1</TotalCount>\\n        <TableSummaryModels/>\\n    </Data>\\n</GetTableObjectsResponse>","errorExample":""}]',
      'title' => '查询表信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeDiagnosisSQLInfo' => 
    array (
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下AnalyticDB MySQL湖仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1r053byu48p',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL支持的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ProcessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询ID。
> 您可以调用[DescribeDiagnosisRecords](~~308207~~)接口查看指定的AnalyticDB MySQL集群中SQL摘要信息，包括查询ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2021070216432217201616806503453',
            'default' => '2023091317073501108614302703151362858',
          ),
        ),
        3 => 
        array (
          'name' => 'ProcessStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL语句的执行开始时间，格式为Unix时间戳，单位为毫秒（ms）。
> 您可以调用[DescribeDiagnosisRecords](~~308207~~)接口查看指定的AnalyticDB MySQL集群中SQL摘要信息，包括SQL语句的执行开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '1625215402000',
            'default' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'ProcessState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL语句的状态，取值如下：
- **running**：执行中。
- **finished**：已完成。
- **failed**：执行失败。
> 您可以调用[DescribeDiagnosisRecords](~~308207~~)接口查看指定的AnalyticDB MySQL集群中SQL摘要信息，包括SQL语句的状态信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'running',
            'default' => 'running',
          ),
        ),
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：
- **zh**：简体中文。
- **en**：英文。
- **ja**：日语。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'zh',
          ),
        ),
        6 => 
        array (
          'name' => 'ProcessRcHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行SQL语句的AnalyticDB MySQL前端节点IP和端口信息。
> 您可以调用[DescribeDiagnosisRecords](~~308207~~)接口查看指定的AnalyticDB MySQL集群中SQL摘要信息，包括前端节点IP和端口信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '192.45.***.***:3145',
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
              'DiagnosisSQLInfo' => 
              array (
                'description' => 'SQL的执行详情，包括详细的SQL语句、统计信息、执行计划和算子信息等。',
                'type' => 'string',
                'example' => '{     "DiagnosisSQLInfo": {         "hasSharedStage": false,         "resourceGroup": "user_default",         "cost": 274,         "queuedTime": 0,         "outputDataSize": 9,         "scheduled": true,         "query": "/*+display=tpch_q14*/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \'PROMO%\' THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &gt;= DATE \'1995-09-01\' AND l_shipdate &lt; DATE \'1995-09-01\' + INTERVAL \'1\' MONTH",         "outputRows": 1,         "userName": "test_user",         "parentId": 0,         "maxOutputRows": 200000,         "scanSize": 8247470,         "peakMemory": 13188295,         "startTime": 1626330527632,         "state": "FINISHED",         "endTime": 1626330527905,         "writeTableRows": 0,         "scanRows": 351966     } }',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'StageInfos' => 
              array (
                'description' => '查询的分阶段执行信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询的分阶段执行信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InputRows' => 
                    array (
                      'description' => 'Stage总的输入行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2341',
                    ),
                    'InputDataSize' => 
                    array (
                      'description' => 'Stage总的输入数据量，单位为Bytes。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2341',
                    ),
                    'OutputRows' => 
                    array (
                      'description' => 'Stage总的输出行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2341',
                    ),
                    'OutputDataSize' => 
                    array (
                      'description' => 'Stage总的输出数据量，单位为Bytes。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2341',
                    ),
                    'PeakMemory' => 
                    array (
                      'description' => 'Stage总的峰值内存，单位为Bytes。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2341',
                    ),
                    'OperatorCost' => 
                    array (
                      'description' => 'Stage的算子累积耗时，单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2341',
                    ),
                    'StageId' => 
                    array (
                      'description' => 'StageID。',
                      'type' => 'string',
                      'example' => 'Stage[26]',
                    ),
                    'State' => 
                    array (
                      'description' => 'Stage状态。',
                      'type' => 'string',
                      'example' => 'RUNNING',
                    ),
                    'Progress' => 
                    array (
                      'description' => 'Stage的执行进度。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.3',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DiagnosisSQLInfo\\": \\"{     \\\\\\"DiagnosisSQLInfo\\\\\\": {         \\\\\\"hasSharedStage\\\\\\": false,         \\\\\\"resourceGroup\\\\\\": \\\\\\"user_default\\\\\\",         \\\\\\"cost\\\\\\": 274,         \\\\\\"queuedTime\\\\\\": 0,         \\\\\\"outputDataSize\\\\\\": 9,         \\\\\\"scheduled\\\\\\": true,         \\\\\\"query\\\\\\": \\\\\\"/*+display=tpch_q14*/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \'PROMO%\' THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &gt;= DATE \'1995-09-01\' AND l_shipdate &lt; DATE \'1995-09-01\' + INTERVAL \'1\' MONTH\\\\\\",         \\\\\\"outputRows\\\\\\": 1,         \\\\\\"userName\\\\\\": \\\\\\"test_user\\\\\\",         \\\\\\"parentId\\\\\\": 0,         \\\\\\"maxOutputRows\\\\\\": 200000,         \\\\\\"scanSize\\\\\\": 8247470,         \\\\\\"peakMemory\\\\\\": 13188295,         \\\\\\"startTime\\\\\\": 1626330527632,         \\\\\\"state\\\\\\": \\\\\\"FINISHED\\\\\\",         \\\\\\"endTime\\\\\\": 1626330527905,         \\\\\\"writeTableRows\\\\\\": 0,         \\\\\\"scanRows\\\\\\": 351966     } }\\",\\n  \\"RequestId\\": \\"1\\",\\n  \\"StageInfos\\": [\\n    {\\n      \\"InputRows\\": 2341,\\n      \\"InputDataSize\\": 2341,\\n      \\"OutputRows\\": 2341,\\n      \\"OutputDataSize\\": 2341,\\n      \\"PeakMemory\\": 2341,\\n      \\"OperatorCost\\": 2341,\\n      \\"StageId\\": \\"Stage[26]\\",\\n      \\"State\\": \\"RUNNING\\",\\n      \\"Progress\\": 0.3\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisSQLInfoResponse>\\n    <DiagnosisSQLInfo>{     \\"DiagnosisSQLInfo\\": {         \\"hasSharedStage\\": false,         \\"resourceGroup\\": \\"user_default\\",         \\"cost\\": 274,         \\"queuedTime\\": 0,         \\"outputDataSize\\": 9,         \\"scheduled\\": true,         \\"query\\": \\"/*+display=tpch_q14*/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \'PROMO%\' THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &amp;gt;= DATE \'1995-09-01\' AND l_shipdate &amp;lt; DATE \'1995-09-01\' + INTERVAL \'1\' MONTH\\",         \\"outputRows\\": 1,         \\"userName\\": \\"test_user\\",         \\"parentId\\": 0,         \\"maxOutputRows\\": 200000,         \\"scanSize\\": 8247470,         \\"peakMemory\\": 13188295,         \\"startTime\\": 1626330527632,         \\"state\\": \\"FINISHED\\",         \\"endTime\\": 1626330527905,         \\"writeTableRows\\": 0,         \\"scanRows\\": 351966     } }</DiagnosisSQLInfo>\\n    <RequestId>1</RequestId>\\n    <StageInfos>\\n        <InputRows>123</InputRows>\\n        <InputDataSize>2341</InputDataSize>\\n        <OutputRows>231</OutputRows>\\n        <OutputDataSize>12344</OutputDataSize>\\n        <PeakMemory>3421</PeakMemory>\\n        <OperatorCost>2341</OperatorCost>\\n        <StageId>Stage[26]</StageId>\\n        <State>RUNNING</State>\\n        <Progress>0.3</Progress>\\n    </StageInfos>\\n</DescribeDiagnosisSQLInfoResponse>","errorExample":""}]',
      'title' => '查看SQL执行详情',
      'summary' => '查看某个SQL的执行详情，包括执行计划、运行信息、资源使用、自诊断结果等。',
      'description' => '当前服务的接入地址请参见https://help.aliyun.com/zh/analyticdb-for-mysql/developer-reference/api-adb-2021-12-01-endpoint?spm=a2c4g.11186623.0.0.50182463TpsIoI。',
    ),
    'DescribeDiagnosisDimensions' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bt6u59zcmd945****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为Unix时间戳，单位：毫秒。
> 仅支持查看最近14天的数据，查询超过14天前的数据返回结果为空。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1625220210000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为Unix时间戳，单位：毫秒。

> * 查询结束时间需晚于查询开始时间。
> * 开始时间与结束时间的间隔不能超过24小时。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1625220213000',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'QueryCondition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL查询的条件，格式为JOSN字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持3个取值：`maxCost`、`status`和`cost`）；`Value`、`Min`或`Max`表示该维度下的查询范围。取值说明：
- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。
- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。
- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒（ms）。',
            'type' => 'string',
            'required' => false,
            'example' => '{"Type":"maxCost","Value":"100"}',
          ),
        ),
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言配置，取值说明：
- **zh-CN**：简体中文（默认语言）。
- **en-US**：英文。
- **ja**：日文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
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
              'ClientIps' => 
              array (
                'description' => '访问源地址。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '访问源地址。',
                  'type' => 'string',
                  'example' => '106.11.xx.xx',
                ),
              ),
              'ResourceGroups' => 
              array (
                'description' => '资源组名称。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源组名称。',
                  'type' => 'string',
                  'example' => 'user_defaul',
                ),
              ),
              'UserNames' => 
              array (
                'description' => '用户名。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户名。',
                  'type' => 'string',
                  'example' => 'test_user',
                ),
              ),
              'Databases' => 
              array (
                'description' => '数据库名称。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据库名称。',
                  'type' => 'string',
                  'example' => 'adb_demo',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DEA97C6B-D7A4-5E69-9EFC-D7F88737CED5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClientIps\\": [\\n    \\"106.11.xx.xx\\"\\n  ],\\n  \\"ResourceGroups\\": [\\n    \\"user_defaul\\"\\n  ],\\n  \\"UserNames\\": [\\n    \\"test_user\\"\\n  ],\\n  \\"Databases\\": [\\n    \\"adb_demo\\"\\n  ],\\n  \\"RequestId\\": \\"DEA97C6B-D7A4-5E69-9EFC-D7F88737CED5\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisDimensionsResponse>\\n    <ClientIps>[\\"106.11.xx.xx\\",\\"106.11.xx.xx\\"]</ClientIps>\\n    <ResourceGroups>user_defaul</ResourceGroups>\\n    <UserNames>test_user</UserNames>\\n    <Databases>adb_demo</Databases>\\n    <RequestId>DEA97C6B-D7A4-5E69-9EFC-D7F88737CED5</RequestId>\\n</DescribeDiagnosisDimensionsResponse>","errorExample":""}]',
      'title' => '查询不同维度的SQL去重统计信息',
      'summary' => '查看AnalyticDB MySQL湖仓版（3.0）集群符合指定检索条件的SQL在资源组、数据库名、用户名以及访问源地址等维度下的去重统计信息。',
      'description' => '当前服务的接入地址请参见https://help.aliyun.com/zh/analyticdb-for-mysql/developer-reference/api-adb-2021-12-01-endpoint?spm=a2c4g.11186623.0.0.50182463TpsIoI。',
    ),
    'DownloadDiagnosisRecords' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1q8bu9a****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为Unix时间戳，单位：毫秒。
> 仅支持查看最近14天的数据。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1662364330000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为Unix时间戳，单位：毫秒。
> * 查询结束时间需晚于查询开始时间。
> * 开始时间与结束时间的间隔不能超过24小时。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1662450730000',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'QueryCondition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定SQL查询的条件，格式为JOSN字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持`maxCost`、`status`和`cost`3个取值）；`Value`、`Min`或`Max`表示该维度下的查询范围。具体支持的取值范围如下：
- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。
- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。
- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"Type":"status","Value":"finished"}',
          ),
        ),
        5 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'select',
          ),
        ),
        6 => 
        array (
          'name' => 'MinPeakMemory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标SQL的最小峰值内存，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '88000000',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxPeakMemory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标SQL的最大峰值内存，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '88000000',
          ),
        ),
        8 => 
        array (
          'name' => 'MinScanSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标SQL的最小扫描量，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1073741824',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxScanSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标SQL的最大扫描量，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '64424509440',
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标SQL所属的资源组。
> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'user_default',
          ),
        ),
        11 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行目标SQL的用户名。
> 您可以调用[DescribeDiagnosisDimensions](~~~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_user',
          ),
        ),
        12 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行目标SQL的数据库。
> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        13 => 
        array (
          'name' => 'ClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问源地址。
> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
            'type' => 'string',
            'required' => false,
            'example' => '106.11.XX.XX',
          ),
        ),
        14 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言配置，取值说明：
- **zh**：简体中文（默认语言）。
- **en**：英文。
- **ja**：日文。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
              'DownloadId' => 
              array (
                'description' => '下载ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '25494',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '845774AC-5D43-53A2-AAB8-C73828E68508',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DownloadId\\": 25494,\\n  \\"RequestId\\": \\"845774AC-5D43-53A2-AAB8-C73828E68508\\"\\n}","errorExample":""},{"type":"xml","example":"<DownloadDiagnosisRecordsResponse>\\n    <DownloadId>25494</DownloadId>\\n    <RequestId>845774AC-5D43-53A2-AAB8-C73828E68508</RequestId>\\n</DownloadDiagnosisRecordsResponse>","errorExample":""}]',
      'title' => '下载SQL摘要信息',
      'summary' => '下载目标AnalyticDB MySQL湖仓版（3.0）集群中符合指定条件的查询SQL的摘要信息。',
      'description' => '当前服务的接入地址请参见https://help.aliyun.com/zh/analyticdb-for-mysql/developer-reference/api-adb-2021-12-01-endpoint?spm=a2c4g.11186623.0.0.50182463TpsIoI。',
    ),
    'DescribeDiagnosisRecords' => 
    array (
      'summary' => '调用DownloadDiagnosisRecords接口查看目标AnalyticDB MySQL湖仓版（3.0）集群中符合指定条件的SQL摘要信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '湖仓版（3.0）集群ID。

> 您可以通过[DescribeDBClusters](~~612397~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1scs48yc125****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为Unix时间戳，单位：毫秒。
> 仅支持查看14天内的数据。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1632931200000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为Unix时间戳，单位：毫秒。
> * 查询结束时间需晚于查询开始时间。
> * 开始时间与结束时间的间隔不能超过24小时。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1633017540000',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'QueryCondition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL查询的条件，格式为JOSN字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持3个取值：`maxCost`、`status`和`cost`）；`Value`、`Min`或`Max`表示该维度下的查询范围。取值说明：
- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。
- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。
- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"Type":"status","Value":"finished"}',
          ),
        ),
        5 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按SQL语句中包含的关键字过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'select',
          ),
        ),
        6 => 
        array (
          'name' => 'MinPeakMemory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL语句的最小峰值内存，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxPeakMemory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL语句的最大峰值内存，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '89000000',
          ),
        ),
        8 => 
        array (
          'name' => 'MinScanSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL语句的最小扫描量，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxScanSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标SQL的最大扫描量，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1024000000',
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL语句所属的资源组。
> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'user_default',
          ),
        ),
        11 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行SQL语句的用户名。
您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_user',
          ),
        ),
        12 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行SQL语句的数据库。
> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        13 => 
        array (
          'name' => 'ClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问源地址。
> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
            'type' => 'string',
            'required' => false,
            'example' => '59.82.XX.XX',
          ),
        ),
        14 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据指定字段对SQL语句进行排序，格式为JSON，是一个有序JSON数组，按输入数组的顺序进行复合排序，包含`Field`和`Type`两个字段，例如`[{"Field":"StartTime", "Type": "desc" }]`。其中：

- `Field`表示需要排序的字段名，支持如下字段：
    - `StartTime`：执行开始时间。
    - `Status`：执行状态。
    - `UserName`：用户名称。
    - `Cost`：执行耗时。
    - `PeakMemory`：峰值内存。
    - `ScanSize`：扫描数据量。
    - `Database`：数据库名称。
    - `ClientIp`：访问源地址.
    - `ResourceGroup`：资源组。
    - `QueueTime`：排队耗时。
    - `OutputRows`：输出行数。
    - `OutputDataSize`：输出数据量。
    - `ResourceCostRank`：SQL内部算子的耗时排名（仅当`QueryCondition`取值为`{"Type":"status","Value":"running"}`时，支持使用该字段）。

- `Type`表示排序类型，支持如下取值（取值均不区分大小写）：
    - `Desc`：降序。
    - `Asc`：升序。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Field":"StartTime", "Type": "desc" }]',
          ),
        ),
        15 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        16 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        17 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：
- **zh**：简体中文（默认语言）。
- **en**：英文。
- **ja**：日文。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        18 => 
        array (
          'name' => 'PatternId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL Pattern的ID。',
            'type' => 'string',
            'required' => false,
            'example' => '5575924945138******',
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
              'PageNumber' => 
              array (
                'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Querys' => 
              array (
                'description' => 'SQL语句详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SQL' => 
                    array (
                      'description' => 'SQL语句详情。
> 出于性能考虑，当前SQL语句最长支持显示5120个字符，超出限制的SQL语句会被截断。您可以调用[DownloadDiagnosisRecords](~~308212~~)接口下载符合指定条件的SQL语句的摘要信息，包括完整的SQL语句。',
                      'type' => 'string',
                      'example' => 'SELECT count(*)\\nFROM nation',
                    ),
                    'SQLTruncatedThreshold' => 
                    array (
                      'description' => 'SQL语句的截断阈值，固定为5120个字符。超过该长度的SQL语句会被截断。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5120',
                    ),
                    'Status' => 
                    array (
                      'description' => 'SQL语句的状态，取值为：
- **running**：执行中。
- **finished**：已完成。
- **failed**：执行失败。',
                      'type' => 'string',
                      'example' => 'finished',
                    ),
                    'OutputDataSize' => 
                    array (
                      'description' => '返回数据量，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '9',
                    ),
                    'Cost' => 
                    array (
                      'description' => '查询的总耗时。单位：毫秒。
> 该耗时指标是`QueuedTime`、`TotalPlanningTime`和`ExecutionTime`三个耗时指标的累加值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'OutputRows' => 
                    array (
                      'description' => '返回行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'RcHost' => 
                    array (
                      'description' => '执行SQL语句的AnalyticDB MySQL前端节点IP和端口信息。',
                      'type' => 'string',
                      'example' => '10.0.XX.XX:3004',
                    ),
                    'ScanSize' => 
                    array (
                      'description' => '扫描数据量，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '9',
                    ),
                    'ProcessId' => 
                    array (
                      'description' => '查询ID。',
                      'type' => 'string',
                      'example' => '2021093000414401000000023503151******',
                    ),
                    'StartTime' => 
                    array (
                      'description' => 'SQL语句的执行开始时间，格式为Unix时间戳，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1632933704000',
                    ),
                    'SQLTruncated' => 
                    array (
                      'description' => '查询结果的长度是否超过阈值（即是否被截断），取值说明：
- **true**：查询结果的长度超过阈值。
- **false**：查询结果的长度未超过阈值。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Database' => 
                    array (
                      'description' => '执行SQL语句的数据库名称。',
                      'type' => 'string',
                      'example' => 'adb_demo',
                    ),
                    'ScanRows' => 
                    array (
                      'description' => '扫描行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'ResourceCostRank' => 
                    array (
                      'description' => 'SQL语句内部算子的耗时排名。
> 仅状态为执行中，即`Status`取值为`running`的SQL语句支持返回该字段。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ClientIp' => 
                    array (
                      'description' => '访问源地址。',
                      'type' => 'string',
                      'example' => '59.82.XX.XX',
                    ),
                    'PeakMemory' => 
                    array (
                      'description' => '峰值内存，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '16648',
                    ),
                    'QueueTime' => 
                    array (
                      'description' => '查询执行前的排队时间，单位：毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '6',
                    ),
                    'ResourceGroup' => 
                    array (
                      'description' => 'SQL语句所属的资源池。',
                      'type' => 'string',
                      'example' => 'user_default',
                    ),
                    'UserName' => 
                    array (
                      'description' => '执行SQL语句的用户名。',
                      'type' => 'string',
                      'example' => 'test_user',
                    ),
                    'ExecutionTime' => 
                    array (
                      'description' => '查询执行的耗时，单位：毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '6',
                    ),
                    'TotalPlanningTime' => 
                    array (
                      'description' => '生成执行计划的耗时，单位：毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'EtlWriteRows' => 
                    array (
                      'description' => 'ETL任务写表的行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'TotalStages' => 
                    array (
                      'description' => '查询生成的总Stage数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7F88BEFA-CF0B-5C95-8BB1-92EC9F09E40D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Querys\\": [\\n    {\\n      \\"SQL\\": \\"SELECT count(*)\\\\\\\\nFROM nation\\",\\n      \\"SQLTruncatedThreshold\\": 5120,\\n      \\"Status\\": \\"finished\\",\\n      \\"OutputDataSize\\": 9,\\n      \\"Cost\\": 10,\\n      \\"OutputRows\\": 1,\\n      \\"RcHost\\": \\"10.0.XX.XX:3004\\",\\n      \\"ScanSize\\": 9,\\n      \\"ProcessId\\": \\"2021093000414401000000023503151******\\",\\n      \\"StartTime\\": 1632933704000,\\n      \\"SQLTruncated\\": false,\\n      \\"Database\\": \\"adb_demo\\",\\n      \\"ScanRows\\": 1,\\n      \\"ResourceCostRank\\": 1,\\n      \\"ClientIp\\": \\"59.82.XX.XX\\",\\n      \\"PeakMemory\\": 16648,\\n      \\"QueueTime\\": 6,\\n      \\"ResourceGroup\\": \\"user_default\\",\\n      \\"UserName\\": \\"test_user\\",\\n      \\"ExecutionTime\\": 6,\\n      \\"TotalPlanningTime\\": 4,\\n      \\"EtlWriteRows\\": 0,\\n      \\"TotalStages\\": 2\\n    }\\n  ],\\n  \\"RequestId\\": \\"7F88BEFA-CF0B-5C95-8BB1-92EC9F09E40D\\"\\n}","type":"json"}]',
      'title' => '查看SQL摘要信息',
      'description' => '当前服务的接入地址请参见https://help.aliyun.com/zh/analyticdb-for-mysql/developer-reference/api-adb-2021-12-01-endpoint?spm=a2c4g.11186623.0.0.50182463TpsIoI。',
    ),
    'DescribeDownloadRecords' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
        'abilityTreeCode' => '132356',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsDAZVRM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-8vb6ha79k6e****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言配置，取值说明：
- **zh**：简体中文（默认语言）。
- **en**：英文。
- **ja**：日文。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
              'Records' => 
              array (
                'description' => '详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '下载列表详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务状态，取值为：
- **running**：正在下载。
- **finished**：已完成。
- **failed**：下载失败。',
                      'type' => 'string',
                      'example' => 'finished',
                    ),
                    'DownloadId' => 
                    array (
                      'description' => '下载任务ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '636890',
                    ),
                    'ExceptionMsg' => 
                    array (
                      'description' => '下载任务失败时返回的异常信息。',
                      'type' => 'string',
                      'example' => 'The query result is empty.',
                    ),
                    'Url' => 
                    array (
                      'description' => '文件下载地址。',
                      'type' => 'string',
                      'example' => 'https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/amv-*********/20210805104301-20210805164302.xlsx?Expires=1943514161&OSSAccessKeyId=*********&Signature=******"',
                    ),
                    'FileName' => 
                    array (
                      'description' => '下载文件名。',
                      'type' => 'string',
                      'example' => '20210806094635-20210806095135',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D761DA51-12F8-5457-AAA9-F52B9F436D2D',
              ),
              'AccessDeniedDetail' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Records\\": [\\n    {\\n      \\"Status\\": \\"finished\\",\\n      \\"DownloadId\\": 636890,\\n      \\"ExceptionMsg\\": \\"The query result is empty.\\",\\n      \\"Url\\": \\"https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/amv-*********/20210805104301-20210805164302.xlsx?Expires=1943514161&OSSAccessKeyId=*********&Signature=******\\\\\\"\\",\\n      \\"FileName\\": \\"20210806094635-20210806095135\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"D761DA51-12F8-5457-AAA9-F52B9F436D2D\\",\\n  \\"AccessDeniedDetail\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDownloadRecordsResponse>\\n    <Records>\\n        <Status>finished</Status>\\n        <DownloadId>636890</DownloadId>\\n        <ExceptionMsg>The query result is empty.</ExceptionMsg>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/amv-*********/20210805104301-20210805164302.xlsx?Expires=1943514161&amp;OSSAccessKeyId=*********&amp;Signature=******\\"</Url>\\n        <FileName>20210806094635-20210806095135</FileName>\\n    </Records>\\n    <RequestId>D761DA51-12F8-5457-AAA9-F52B9F436D2D</RequestId>\\n</DescribeDownloadRecordsResponse>","errorExample":""}]',
      'title' => '查看最近5次的SQL查询下载任务列表',
      'summary' => '查看目标AnalyticDB MySQL湖仓版（3.0）集群中最近5次的SQL查询下载任务列表。',
      'description' => '当前服务的接入地址请参见https://help.aliyun.com/zh/analyticdb-for-mysql/developer-reference/api-adb-2021-12-01-endpoint?spm=a2c4g.11186623.0.0.50182463TpsIoI。',
    ),
    'DescribeSqlPattern' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始日期，UTC时间，格式：yyyy-MM-dd。
> 仅支持查看30天内的数据。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-08-30',
          ),
        ),
        1 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"Pattern","Type":"Asc"}]`。其中：
- `Field`表示排序字段。取值说明：
    - `Pattern`：SQL Pattern。
    - `AccessIP`：客户端IP。
    - `User`：用户名。
    - `QueryCount`：查询总数。
    - `AvgPeakMemory`：平均峰值内存，单位：KB。
    - `MaxPeakMemory`：最大峰值内存，单位：KB。
    - `AvgCpuTime`：平均计算耗时，单位：毫秒（ms）。
    - `MaxCpuTime`：最大计算耗时，单位：毫秒（ms）。
    - `AvgStageCount`：平均Stage个数。
    - `MaxStageCount`：最大Stage个数。
    - `AvgTaskCount`：平均Task个数。
    - `MaxTaskCount`：最大Task个数。
    - `AvgScanSize`：平均扫描量，单位：KB。
    - `MaxScanSize`：最大扫描量，单位：KB。

- `Type`表示排序方式。取值说明：
    - `Asc`：升序排序。
    - `Desc`： 降序排序。

> - 若不设置参数，默认按照`Pattern`字段升序排列。
- 若需要按照`AccessIP`字段排序，则`Type`参数必须设置为`accessip`；若需要按照`User`字段排序，则`Type`参数必须留空或设置为`user`。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '[{"Field":"Pattern","Type":"Asc"}]',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值：大于0且不超过Integer的最大值。
默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'SqlPattern',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要包含的SQL Pattern的关键字。
> 若该参数不填，默认返回目标集群在`StartTime`参数所设日期内的所有SQL Pattern详情。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按指定维度来聚合SQL Pattern。取值说明：
 - `user`：按用户维度聚合。
 - `accessip`：按访问IP来源聚合。

> 若该参数不填，默认按照 `user`维度聚合。',
            'type' => 'string',
            'required' => false,
            'example' => 'user',
          ),
        ),
        5 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1ej1nq9n6****',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **10**（默认值）
- **30**
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'Items' => 
              array (
                'description' => '列表详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AvgStageCount' => 
                    array (
                      'description' => '平均扫描行数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'MaxCpuTime' => 
                    array (
                      'description' => 'SQL的最大运行时间，单位：毫秒（ms）。',
                      'type' => 'string',
                      'example' => '17',
                    ),
                    'AccessIP' => 
                    array (
                      'description' => '客户端IP。
> 仅当**Type**参数设置为**accessip**时，返回该参数。',
                      'type' => 'string',
                      'example' => '100.104.xx.xx',
                    ),
                    'AvgScanSize' => 
                    array (
                      'description' => '平均扫描量，单位：KB。',
                      'type' => 'string',
                      'example' => '244',
                    ),
                    'MaxScanSize' => 
                    array (
                      'description' => '最大扫描量，单位：KB。',
                      'type' => 'string',
                      'example' => '1024',
                    ),
                    'MaxPeakMemory' => 
                    array (
                      'description' => '最大峰值内存，单位：KB。',
                      'type' => 'string',
                      'example' => '480096',
                    ),
                    'AvgCpuTime' => 
                    array (
                      'description' => '平均执行时间，单位：毫秒（ms）。',
                      'type' => 'string',
                      'example' => '1.0625',
                    ),
                    'User' => 
                    array (
                      'description' => '用户名。
> 仅当**Type**参数留空或设置为**user**时，返回该参数。',
                      'type' => 'string',
                      'example' => 'test_acc',
                    ),
                    'AvgPeakMemory' => 
                    array (
                      'description' => '平均峰值内存，单位：KB。',
                      'type' => 'string',
                      'example' => '240048',
                    ),
                    'MaxStageCount' => 
                    array (
                      'description' => '最大Stage个数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'MaxTaskCount' => 
                    array (
                      'description' => '最大任务数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                      'type' => 'string',
                      'example' => 'amv-bp1ej1nq9n6****',
                    ),
                    'QueryCount' => 
                    array (
                      'description' => '查询总数。',
                      'type' => 'string',
                      'example' => '16',
                    ),
                    'ReportDate' => 
                    array (
                      'description' => '查询日期。',
                      'type' => 'string',
                      'example' => '2022-08-30',
                    ),
                    'Pattern' => 
                    array (
                      'description' => 'SQL Pattern。',
                      'type' => 'string',
                      'example' => 'SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1',
                    ),
                    'AvgTaskCount' => 
                    array (
                      'description' => '平均任务数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DB1F6C23-CBCA-5260-9366-BA7BB5EBF6F1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 2,\\n  \\"TotalCount\\": 50,\\n  \\"Items\\": [\\n    {\\n      \\"AvgStageCount\\": \\"2\\",\\n      \\"MaxCpuTime\\": \\"17\\",\\n      \\"AccessIP\\": \\"100.104.xx.xx\\",\\n      \\"AvgScanSize\\": \\"244\\",\\n      \\"MaxScanSize\\": \\"1024\\",\\n      \\"MaxPeakMemory\\": \\"480096\\",\\n      \\"AvgCpuTime\\": \\"1.0625\\",\\n      \\"User\\": \\"test_acc\\",\\n      \\"AvgPeakMemory\\": \\"240048\\",\\n      \\"MaxStageCount\\": \\"2\\",\\n      \\"MaxTaskCount\\": \\"2\\",\\n      \\"InstanceName\\": \\"amv-bp1ej1nq9n6****\\",\\n      \\"QueryCount\\": \\"16\\",\\n      \\"ReportDate\\": \\"2022-08-30\\",\\n      \\"Pattern\\": \\"SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1\\",\\n      \\"AvgTaskCount\\": \\"2\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"DB1F6C23-CBCA-5260-9366-BA7BB5EBF6F1\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSqlPatternResponse>\\n    <PageSize>30</PageSize>\\n    <PageNumber>2</PageNumber>\\n    <TotalCount>50</TotalCount>\\n    <Items>\\n        <AvgStageCount>2</AvgStageCount>\\n        <MaxCpuTime>17</MaxCpuTime>\\n        <AccessIP>100.104.xx.xx</AccessIP>\\n        <AvgScanSize>244</AvgScanSize>\\n        <MaxScanSize>1024</MaxScanSize>\\n        <MaxPeakMemory>480096</MaxPeakMemory>\\n        <AvgCpuTime>1.0625</AvgCpuTime>\\n        <User>test_acc</User>\\n        <AvgPeakMemory>240048</AvgPeakMemory>\\n        <MaxStageCount>2</MaxStageCount>\\n        <MaxTaskCount>2</MaxTaskCount>\\n        <InstanceName>amv-bp1ej1nq9n6****</InstanceName>\\n        <QueryCount>16</QueryCount>\\n        <ReportDate>2022-08-30</ReportDate>\\n        <Pattern>SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1</Pattern>\\n        <AvgTaskCount>2</AvgTaskCount>\\n    </Items>\\n    <RequestId>DB1F6C23-CBCA-5260-9366-BA7BB5EBF6F1</RequestId>\\n</DescribeSqlPatternResponse>","errorExample":""}]',
      'title' => '查询SQL Pattern详情',
      'summary' => '查看指定日期内AnalyticDB MySQL湖仓版（3.0）集群下的SQL Pattern详情。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeSQLPatterns' => 
    array (
      'summary' => '查看指定日期内AnalyticDB MySQL湖仓版集群的SQL Pattern列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
        'abilityTreeCode' => '132328',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsDAZVRM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-8vb8de93v9b****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。UTC时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>。
>  - 仅支持查看最近14天的数据。
- 查询开始时间和查询结束时间的间隔不能大于24小时。 ',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-09-06T03:06:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。UTC时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>。
> 查询结束时间需晚于查询开始时间。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-09-07T03:06:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT',
          ),
        ),
        5 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"AverageQueryTime","Type":"Asc"}]`。其中：
- `Field`表示排序字段。取值说明：
    - `PatternCreationTime`：查询时间范围内，Pattern的最早提交时间。
    - `AverageQueryTime`：查询时间范围内，Pattern的平均总耗时。
    - `MaxQueryTime`：查询时间范围内，Pattern的最大总耗时。
    - `AverageExecutionTime`: 查询时间范围内，Pattern的平均执行耗时。
    - `MaxExecutionTime`: 查询时间范围内，Pattern的最大执行耗时。
    - `AveragePeakMemory`: 查询时间范围内，Pattern的平均峰值内存。
    - `MaxPeakMemory`: 查询时间范围内，Pattern的最大峰值内存。
    - `AverageScanSize`: 查询时间范围内，Pattern的平均数据读取量。
    - `MaxScanSize`: 查询时间范围内，Pattern的最大数据读取量。
    - `QueryCount`: 查询时间范围内，Pattern的执行次数。
    - `FailedCount`: 查询时间范围内，Pattern的失败次数。

- `Type`表示排序方式。取值说明（取值不区分大小写）：
    - `Asc`：升序排序。
    - `Desc`： 降序排序。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Field":"AverageQueryTime","Type":"Asc"}]',
            'default' => '[{"Type":"desc","Field":"AveragePeakMemory"}]',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值：大于0且不超过Integer的最大值。
默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **10**（默认值）
- **30**
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言配置，取值说明：
- **zh**：简体中文（默认语言）。
- **en**：英文。
- **ja**：日文。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'SQL Pattern的详细信息。',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'PatternDetails' => 
              array (
                'description' => '列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'SQL Pattern的详细信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SQLPattern' => 
                    array (
                      'description' => 'SQL Pattern的语句。',
                      'type' => 'string',
                      'example' => 'SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)',
                    ),
                    'PatternId' => 
                    array (
                      'description' => 'SQL Pattern语句的ID。',
                      'type' => 'string',
                      'example' => '5575924945138******',
                    ),
                    'User' => 
                    array (
                      'description' => '提交Pattern相关的SQL数据库用户名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'AccessIp' => 
                    array (
                      'description' => '提交Pattern的相关SQL客户端IP地址。',
                      'type' => 'string',
                      'example' => '192.168.xx.xx',
                    ),
                    'Tables' => 
                    array (
                      'description' => 'SQL Pattern扫描的列表信息。',
                      'type' => 'string',
                      'example' => 'tpch.orders',
                    ),
                    'PatternCreationTime' => 
                    array (
                      'description' => '指定时间范围内，Pattern的最早提交时间。',
                      'type' => 'string',
                      'example' => '2022-09-06 05:06:00',
                    ),
                    'AverageQueryTime' => 
                    array (
                      'description' => '指定时间范围内，Pattern的平均总耗时。单位：毫秒。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '4',
                    ),
                    'MaxQueryTime' => 
                    array (
                      'description' => '指定时间范围内，Pattern的最大总耗时。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2341',
                    ),
                    'AverageExecutionTime' => 
                    array (
                      'description' => '指定时间范围内，Pattern的平均执行时间。单位：毫秒。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '234.78',
                    ),
                    'MaxExecutionTime' => 
                    array (
                      'description' => '指定时间范围内，Pattern的最大执行时间。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2142',
                    ),
                    'AveragePeakMemory' => 
                    array (
                      'description' => '指定时间范围内，Pattern的平均峰值内存。单位：Byte。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '234.22',
                    ),
                    'MaxPeakMemory' => 
                    array (
                      'description' => 'Pattern相关SQL的最大峰值内存，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '234149',
                    ),
                    'AverageScanSize' => 
                    array (
                      'description' => '指定时间范围内，Pattern的平均数据读取量。单位：Byte。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '234149.23',
                    ),
                    'MaxScanSize' => 
                    array (
                      'description' => 'Pattern相关SQL的最大数据读取量，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '32212254',
                    ),
                    'QueryCount' => 
                    array (
                      'description' => '指定时间范围内，Pattern的执行次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '345',
                    ),
                    'FailedCount' => 
                    array (
                      'description' => '指定时间范围内，Pattern的失败次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '18',
                    ),
                    'Blockable' => 
                    array (
                      'description' => '能否拦截当前SQL Pattern的运行，取值说明：
* **true**：支持拦截。
* **false**：不支持拦截。
> 目前AnalyticDB MySQL版仅支持Select和Insert相关语句的拦截。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F3174013-5B7A-5A47-9FE0-6B5D397BD86A',
              ),
              'AccessDeniedDetail' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 2,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 20,\\n  \\"PatternDetails\\": [\\n    {\\n      \\"SQLPattern\\": \\"SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)\\",\\n      \\"PatternId\\": \\"5575924945138******\\",\\n      \\"User\\": \\"test\\",\\n      \\"AccessIp\\": \\"192.168.xx.xx\\",\\n      \\"Tables\\": \\"tpch.orders\\",\\n      \\"PatternCreationTime\\": \\"2022-09-06 05:06:00\\",\\n      \\"AverageQueryTime\\": 4,\\n      \\"MaxQueryTime\\": 2341,\\n      \\"AverageExecutionTime\\": 234.78,\\n      \\"MaxExecutionTime\\": 2142,\\n      \\"AveragePeakMemory\\": 234.22,\\n      \\"MaxPeakMemory\\": 234149,\\n      \\"AverageScanSize\\": 234149.23,\\n      \\"MaxScanSize\\": 32212254,\\n      \\"QueryCount\\": 345,\\n      \\"FailedCount\\": 18,\\n      \\"Blockable\\": true\\n    }\\n  ],\\n  \\"RequestId\\": \\"F3174013-5B7A-5A47-9FE0-6B5D397BD86A\\",\\n  \\"AccessDeniedDetail\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSQLPatternsResponse>\\n    <PageNumber>2</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>20</TotalCount>\\n    <PatternDetails>\\n        <SQLPattern>SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)</SQLPattern>\\n        <PatternId>5575924945138******</PatternId>\\n        <User>test</User>\\n        <AccessIp>192.168.xx.xx</AccessIp>\\n        <Tables>tpch.orders</Tables>\\n        <PatternCreationTime>2022-09-06 05:06:00</PatternCreationTime>\\n        <AverageQueryTime>4</AverageQueryTime>\\n        <MaxQueryTime>2341</MaxQueryTime>\\n        <AverageExecutionTime>234.78</AverageExecutionTime>\\n        <MaxExecutionTime>2142</MaxExecutionTime>\\n        <AveragePeakMemory>234.22</AveragePeakMemory>\\n        <MaxPeakMemory>234149</MaxPeakMemory>\\n        <AverageScanSize>234149.23</AverageScanSize>\\n        <MaxScanSize>32212254</MaxScanSize>\\n        <QueryCount>345</QueryCount>\\n        <FailedCount>18</FailedCount>\\n        <Blockable>true</Blockable>\\n    </PatternDetails>\\n    <RequestId>F3174013-5B7A-5A47-9FE0-6B5D397BD86B</RequestId>\\n</DescribeSQLPatternsResponse>","errorExample":""}]',
      'title' => '查询SQL Pattern列表',
      'description' => '- 中心的公网接入地址：`adb.aliyuncs.com`。
- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribePatternPerformance' => 
    array (
      'summary' => '查看AnalyticDB MySQL湖仓版集群指定时间段内SQL Pattern的各指标（如查询时间、平均内存消耗）详情。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-uf6li1r3do8m****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，UTC时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>。
>  - 当前日期为北京时间2022年8月22日，最早可以查询到北京时间2022年8月9日（UTC时间：2022-08-08T16:00:00Z)的数据，若查询时间早于8月9日（UTC时间：2022-08-08T16:00:00Z)，返回值为空。
- 查询开始时间和查询结束时间的间隔不能大于24小时。 ',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-08-21T02:15:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，UTC时间，格式：<i>yyyy-MM-ddTHH:mmZ</i>。
> 查询结束时间需晚于查询开始时间。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-08-22T01:06:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'PatternId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL Pattern的ID。
> 您可以调用[DescribeSQLPatterns](~~321868~~)接口查看指定时间内目标AnalyticDB MySQL湖仓版（3.0）集群下所有的SQL Pattern列表信息，包括SQL Pattern的ID。',
            'type' => 'string',
            'required' => false,
            'example' => '3847585356974******',
            'default' => '-1',
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
              'EndTime' => 
              array (
                'description' => '查询结束时间，UTC时间，格式：<i>yyyy-MM-ddTHH:mmZ</i>。',
                'type' => 'string',
                'example' => '2022-08-22T01:06:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F21AF487-B8C9-57E0-8E3A-A92BC3611FB6',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间，UTC时间，格式：<i>yyyy-MM-ddTHH:mmZ</i>。',
                'type' => 'string',
                'example' => '2022-08-21T02:15:00Z',
              ),
              'Performances' => 
              array (
                'description' => '详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '查询的各项性能指标项。取值说明：
- **AnalyticDB_PatternQueryCount**：Pattern相关查询的总次数。
- **AnalyticDB_PatternQueryTime**：Pattern相关查询的总耗时。
- **AnalyticDB_PatternExecutionTime**：Pattern相关查询的执行耗时。
- **AnalyticDB_PatternPeakMemory**：Pattern相关查询的峰值内存。
- **AnalyticDB_PatternScanSize**：Pattern相关查询的数据读取量。',
                      'type' => 'string',
                      'example' => 'AnalyticDB_PatternExecutionTime',
                    ),
                    'Unit' => 
                    array (
                      'description' => '各项性能指标项对应的单位。取值说明：
- 当性能指标项为查询时间相关（即`Key`值为`AnalyticDB_PatternQueryTime`或`AnalyticDB_PatternExecutionTime`）时，该返回值为**ms**。
- 当性能指标项为峰值内存相关（即`Key`值为`AnalyticDB_PatternPeakMemory`）时，该返回值为**MB**。
- 当性能指标项为数据读取量（即`Key`值为`AnalyticDB_PatternScanSize`）时，该返回值为**MB**。
- 当性能指标项为查询次数（即`Key`值为`AnalyticDB_PatternQueryCount`）时，该返回值为空。',
                      'type' => 'string',
                      'example' => 'ms',
                    ),
                    'Series' => 
                    array (
                      'description' => '性能指标项下各个性能值的详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '列表项。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'description' => '性能值列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '不同时间点下的性能值详细信息。',
                              'type' => 'string',
                              'example' => '[               "2021-11-18 13:38:00",               "224"             ]',
                            ),
                          ),
                          'Name' => 
                          array (
                            'description' => '性能值的名称。取值说明：
- 当`Key`值为`AnalyticDB_PatternQueryCount`时，该参数返回 `pattern_query_count`，即当前Pattern相关SQL的执行次数。
- 当`Key`值为`AnalyticDB_PatternQueryTime`时，该参数返回：
    -  `average_query_time`，即当前Pattern相关SQL的平均总耗时。
    - `max_query_time`，即当前Pattern相关SQL的最大总耗时。
- 当`Key`值为`AnalyticDB_PatternExecutionTime`时，该参数返回：
    -  `average_execution_time`，即当前Pattern相关SQL的平均执行耗时。
    - `max_execution_time`，即当前Pattern相关SQL的最大执行耗时。
-  当`Key`值为`AnalyticDB_PatternPeakMemory`时，该参数返回：
    - `average_peak_memory`，即当前Pattern相关SQL的平均峰值内存。
    - `max_peak_memory`，即当前Pattern相关SQL的最大峰值内存。
-  当`Key`值为`AnalyticDB_PatternScanSize`时，该参数返回：
    -  `average_scan_size`，即当前Pattern相关SQL的平均读取数据量。
    - `max_scan_size`，即当前Pattern相关SQL的最大数据读取量。',
                            'type' => 'string',
                            'example' => 'max_query_time',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2022-08-22T01:06:00Z\\",\\n  \\"RequestId\\": \\"F21AF487-B8C9-57E0-8E3A-A92BC3611FB6\\",\\n  \\"StartTime\\": \\"2022-08-21T02:15:00Z\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"AnalyticDB_PatternExecutionTime\\",\\n      \\"Unit\\": \\"ms\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            \\"[               \\\\\\"2021-11-18 13:38:00\\\\\\",               \\\\\\"224\\\\\\"             ]\\"\\n          ],\\n          \\"Name\\": \\"max_query_time\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePatternPerformanceResponse>\\n    <EndTime>2022-08-22T01:06:00Z</EndTime>\\n    <RequestId>F21AF487-B8C9-57E0-8E3A-A92BC3611FB6</RequestId>\\n    <StartTime>2022-08-21T02:15:00Z</StartTime>\\n    <Performances>\\n        <Key>AnalyticDB_PatternExecutionTime</Key>\\n        <Unit>ms</Unit>\\n        <Series>\\n            <Values>[               \\"2021-11-18 13:38:00\\",               \\"224\\"             ]</Values>\\n            <Name>max_query_time</Name>\\n        </Series>\\n    </Performances>\\n</DescribePatternPerformanceResponse>","errorExample":""}]',
      'title' => '查询SQL Pattern的指标',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeDBClusterSpaceSummary' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-wz9v5sa7mm79z4l2',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalSize' => 
                  array (
                    'description' => '总数据量，单位：Byte。

> 计算公式为：总数据量 = 热数据总量 + 冷数据总量。',
                    'type' => 'string',
                    'example' => '8388608',
                  ),
                  'HotData' => 
                  array (
                    'description' => '热数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TotalSize' => 
                      array (
                        'description' => '热数据总量，单位：Byte。

> 计算公式为：热数据总量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '4194304',
                      ),
                      'DataSize' => 
                      array (
                        'description' => '表记录数据量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                      'IndexSize' => 
                      array (
                        'description' => '普通索引数据量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                      'PrimaryKeyIndexSize' => 
                      array (
                        'description' => '主键索引数据量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                      'OtherSize' => 
                      array (
                        'description' => '其他，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                    ),
                  ),
                  'ColdData' => 
                  array (
                    'description' => '冷数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TotalSize' => 
                      array (
                        'description' => '冷数据总量，单位：Byte。

> 计算公式为：冷数据总量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '4194304',
                      ),
                      'DataSize' => 
                      array (
                        'description' => '表记录数据量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                      'IndexSize' => 
                      array (
                        'description' => '普通索引数据量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                      'PrimaryKeyIndexSize' => 
                      array (
                        'description' => '主键索引数据量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                      'OtherSize' => 
                      array (
                        'description' => '其他，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                    ),
                  ),
                  'DataGrowth' => 
                  array (
                    'description' => '数据增长量。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DayGrowth' => 
                      array (
                        'description' => '近1天增长量，单位：Byte。

> 计算公式为：近1天增长量 = 当前总数据量 - 1天前总数据量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                      'WeekGrowth' => 
                      array (
                        'description' => '近7天日均增长量，单位：Byte。

> 计算公式为：近7天日均增长量 = (当前总数据量 - 7天前总数据量) / 7。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1048576',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Data\\": {\\n    \\"TotalSize\\": \\"8388608\\",\\n    \\"HotData\\": {\\n      \\"TotalSize\\": 4194304,\\n      \\"DataSize\\": 1048576,\\n      \\"IndexSize\\": 1048576,\\n      \\"PrimaryKeyIndexSize\\": 1048576,\\n      \\"OtherSize\\": 1048576\\n    },\\n    \\"ColdData\\": {\\n      \\"TotalSize\\": 4194304,\\n      \\"DataSize\\": 1048576,\\n      \\"IndexSize\\": 1048576,\\n      \\"PrimaryKeyIndexSize\\": 1048576,\\n      \\"OtherSize\\": 1048576\\n    },\\n    \\"DataGrowth\\": {\\n      \\"DayGrowth\\": 1048576,\\n      \\"WeekGrowth\\": 1048576\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看集群的空间概览',
      'summary' => '查看实例的空间概览信息，包括总数据量、热数据量、冷数据量、数据增长量等。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyDBClusterMaintainTime' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版3.0集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaintainTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的可维护时间段，格式为hh:mmZ-hh:mmZ。
> 时间间隔只能为1小时，且需要设置为整点。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '22:00Z-23:00Z',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '65BDA532-28AF-4122-AA39-B382721EEE64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidMaintainTime.Malformed',
            'errorMessage' => 'The specified parameter MaintainTime is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"65BDA532-28AF-4122-AA39-B382721EEE64\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterMaintainTimeResponse>\\n    <RequestId>65BDA532-28AF-4122-AA39-B382721EEE64</RequestId>\\n</ModifyDBClusterMaintainTimeResponse>","errorExample":""}]',
      'title' => '修改可维护时间段',
      'summary' => '修改指定AnalyticDB MySQL湖仓版（3.0）集群的可维护时间段。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeApsActionLogs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '154388',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsY28JLD',
          1 => 'FEATUREads1II0UT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。

> 您可以调用[DescribeDBClusters](~~454250~~)接口查看湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~454314~~)接口查看地域ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志的开始时间。格式：**yyyy-MM-ddTHH:mm:ssZ**（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2023-02-11T08:30:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志的结束时间。格式：**yyyy-MM-ddTHH:mmZ**（UTC时间）。

> 查询日志时，结束时间需大于开始时间，且与开始时间最大间隔不超过30天。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2023-02-11T09:30:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkloadId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据链路任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aps-hz109vpvt4fg8528d****',
          ),
        ),
        5 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的关键字。在日志查询时模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'table_test',
          ),
        ),
        6 => 
        array (
          'name' => 'Stage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务阶段。取值：

- **StructureMigrate**：结构迁移。
- **FullDataSync**：全量同步。
- **IncrementalSync**：增量同步。

> 未指定该参数时，默认查询所有的任务阶段。',
            'type' => 'string',
            'required' => false,
            'example' => 'FullDataSync',
          ),
        ),
        7 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志类型。多个日志类型用英文逗号（,）分隔。取值：

- **INFO**：信息。
- **WARN**：警告。
- **ERROR**：错误。

> 未指定该参数时，默认查询所有的日志类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'INFO,WARN,ERROR',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录数。取值：

- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '30',
            'default' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。取值为大于0且不超过Integer数据类型的正整数。默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5EDBA27-AF3E-5966-9503-FD1557E19167',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'amv-bp1r053byu48p****',
              ),
              'WorkloadId' => 
              array (
                'description' => '数据链路任务ID。',
                'type' => 'string',
                'example' => 'aps-hz109vpvt4fg8528d****',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '3',
              ),
              'PageSize' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'string',
                'example' => '30',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'ActionLogs' => 
              array (
                'description' => '日志列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Time' => 
                    array (
                      'description' => '日志时间。格式：**yyyy-MM-ddTHH:mm:ssZ**（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-02-01T05:46:30Z',
                    ),
                    'Stage' => 
                    array (
                      'description' => '任务阶段。取值：

- **StructureMigrate**：结构迁移。
- **FullDataSync**：全量同步。
- **IncrementalSync**：增量同步。',
                      'type' => 'string',
                      'example' => 'FullDataSync',
                    ),
                    'State' => 
                    array (
                      'description' => '日志类型。多个日志类型用英文逗号（,）分隔。取值：

- **INFO**：信息。
- **WARN**：警告。
- **ERROR**：错误。',
                      'type' => 'string',
                      'example' => 'INFO,WARN,ERROR',
                    ),
                    'Context' => 
                    array (
                      'description' => '日志的内容。',
                      'type' => 'string',
                      'example' => 'DDL migration job finished',
                    ),
                  ),
                ),
              ),
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => '{
  "AuthAction": "xxx",
  "AuthPrincipalDisplayName": "sampleName",
  "AuthPrincipalOwnerId": "111111111111111111",
  "AuthPrincipalType": "SubUser",
  "AuthResource": "xxx",
  "NoPermissionType": "xxx",
  "PolicyType": "xxx"
}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5EDBA27-AF3E-5966-9503-FD1557E19167\\",\\n  \\"DBClusterId\\": \\"amv-bp1r053byu48p****\\",\\n  \\"WorkloadId\\": \\"aps-hz109vpvt4fg8528d****\\",\\n  \\"TotalCount\\": \\"3\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"ActionLogs\\": [\\n    {\\n      \\"Time\\": \\"2023-02-01T05:46:30Z\\",\\n      \\"Stage\\": \\"FullDataSync\\",\\n      \\"State\\": \\"INFO,WARN,ERROR\\",\\n      \\"Context\\": \\"DDL migration job finished\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"{\\\\n  \\\\\\"AuthAction\\\\\\": \\\\\\"xxx\\\\\\",\\\\n  \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"sampleName\\\\\\",\\\\n  \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"111111111111111111\\\\\\",\\\\n  \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",\\\\n  \\\\\\"AuthResource\\\\\\": \\\\\\"xxx\\\\\\",\\\\n  \\\\\\"NoPermissionType\\\\\\": \\\\\\"xxx\\\\\\",\\\\n  \\\\\\"PolicyType\\\\\\": \\\\\\"xxx\\\\\\"\\\\n}\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeApsActionLogsResponse>\\n    <RequestId>A5EDBA27-AF3E-5966-9503-FD1557E19167</RequestId>\\n    <DBClusterId>amv-bp1r053byu48p****</DBClusterId>\\n    <WorkloadId>aps-hz109vpvt4fg8528d****</WorkloadId>\\n    <TotalCount>3</TotalCount>\\n    <PageSize>20</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <ActionLogs>\\n        <Time>2022-09-01T05:46:30Z</Time>\\n        <Stage>FullDataSync</Stage>\\n        <State>INFO,WARN,ERROR</State>\\n        <Context>DDL migration job finished</Context>\\n    </ActionLogs>\\n</DescribeApsActionLogsResponse>","errorExample":""}]',
      'title' => '查询实时数据接入任务的日志',
      'summary' => '查询AnalyticDB MySQL湖仓版（3.0）集群实时数据接入任务的日志详细信息。',
      'description' => '- 中心的公网接入地址：`adb.aliyuncs.com`。
- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'BindDBResourceGroupWithUser' => 
    array (
      'summary' => '绑定资源组。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test
',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要绑定的数据库账号。既可以绑定数据库普通账号，也可以绑定数据库高权限账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'accout
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPoolName.Malformed',
            'errorMessage' => 'The specified parameter PoolName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPoolUser.Malformed',
            'errorMessage' => 'The specified parameter PoolUser is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
      'title' => '将资源组与数据库用户进行绑定',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'UnbindDBResourceGroupWithUser' => 
    array (
      'summary' => '调用UnbindDBResourceGroupWithUser接口为AnalyticDB MySQL集群的资源组解绑数据库账号。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解绑的数据库账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'user1',
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPoolName.Malformed',
            'errorMessage' => 'The specified parameter PoolName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPoolUser.Malformed',
            'errorMessage' => 'The specified parameter PoolUser is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
      'title' => '解绑资源组和用户',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeDBClusterStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
              'Status' => 
              array (
                'description' => '集群状态列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群状态，取值说明：
- **Preparing**：准备中。

- **Creating**：创建中。

- **Restoring**：备份恢复中。

- **Running**：运行中。

- **Deleting**：删除中。

- **ClassChanging**：变配中。

- **NetAddressCreating**：创建网络中。

- **NetAddressDeleting**：释放网络中。

- **NetAddressModifying**：网络地址修改中。

- **EngineVersionUpgrading**：版本升级中。',
                  'type' => 'string',
                  'example' => 'Running',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEAU',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": [\\n    \\"Running\\"\\n  ],\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEAU\\"\\n}","type":"json"}]',
      'title' => '查看集群的运行状态',
      'summary' => '调用DescribeDBClusterStatus接口查询AnalyticDB MySQL湖仓版（3.0）集群的状态列表。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DetachUserENI' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp11q28kvl688****',
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
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
      'title' => '关闭用户ENI',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'AttachUserENI' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp11q28kvl688****',
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
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
      'title' => '打通用户ENI',
      'summary' => '调用AttachUserENI接口为AnalyticDB MySQL湖仓版（3.0）集群创建VPC弹性网卡。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ExistRunningSQLEngine' => 
    array (
      'summary' => '是否有存活的SQL ENGINE。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'get',
        'abilityTreeCode' => '150789',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsUF9CN9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~612397~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1cit7z8j****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组名称。
>您可以调用[DescribeDBResourceGroup](~~459446~~)接口查看指定集群的资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'spark_test',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FA675D68-14A4-5D9C-8820-92537D9F447E',
              ),
              'Data' => 
              array (
                'description' => '选定资源组是否存在运行中的Spark SQL Engine。

取值：
- **True**：存在。
- **False**：不存在。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'True' => 'True',
                  'False' => 'False',
                ),
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ServerError',
            'errorMessage' => 'The Spark control component system encountered an error, please create a ticket to solve the problem or concat the supported engineer on duty. Error message: %s',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FA675D68-14A4-5D9C-8820-92537D9F447E\\",\\n  \\"Data\\": true\\n}","type":"json"}]',
      'title' => '检测是否存在运行中的Spark SQLEngine',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'CheckSampleDataSet' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-wz9r8f67h4cqz41u',
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
              'Status' => 
              array (
                'description' => '内置数据集状态，取值说明：
- **SUCCEED**：加载成功。

- **INIT**：加载中。

- **FAILED**：加载失败。

- **UNINITIALIZED**：未加载。',
                'type' => 'string',
                'example' => 'UNINITIALIZED',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0CE655C3-C211-513D-A42F-D4AE2D1A867C',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"UNINITIALIZED\\",\\n  \\"RequestId\\": \\"0CE655C3-C211-513D-A42F-D4AE2D1A867C\\"\\n}","type":"json"}]',
      'title' => '检查内置数据集状态',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeUserQuota' => 
    array (
      'summary' => '查询配额',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1qjt3o18d8****',
            'enum' => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
                'example' => '0322C7FB-4584-5D2A-BF7F-F9036E940C35',
              ),
              'ElasticACU' => 
              array (
                'description' => '可用弹性ACU。',
                'type' => 'string',
                'example' => '512 ACU',
              ),
              'ResourceGroupCount' => 
              array (
                'description' => '可用资源组数目。',
                'type' => 'string',
                'example' => '10',
              ),
              'ReserverdCompteACU' => 
              array (
                'description' => '可用预留计算资源。',
                'type' => 'string',
                'example' => '48 ACU',
              ),
              'ReserverdStorageACU' => 
              array (
                'description' => '可用存储计算资源。',
                'type' => 'string',
                'example' => '24 ACU',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0322C7FB-4584-5D2A-BF7F-F9036E940C35\\",\\n  \\"ElasticACU\\": \\"512 ACU\\",\\n  \\"ResourceGroupCount\\": \\"10\\",\\n  \\"ReserverdCompteACU\\": \\"48 ACU\\",\\n  \\"ReserverdStorageACU\\": \\"24 ACU\\"\\n}","type":"json"}]',
      'title' => '查询用户可用配额',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeAllDataSource' => 
    array (
      'summary' => '枚举实例下所有数据库列表、表列表和列列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '190495',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads8FGISX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1pke2pcfavw****',
          ),
        ),
        2 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。
 
',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        3 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'Schema of Response',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C7EDB8E4-9769-4233-88C7-DCA4C9******',
              ),
              'Tables' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'description' => '表列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '表信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '逻辑表名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'amv-bp1pke2pcfavw****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名称。
 
',
                          'type' => 'string',
                          'example' => 'adb_demo',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Columns' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Column' => 
                  array (
                    'description' => '列列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '列的数据类型。',
                          'type' => 'string',
                          'example' => 'bigint',
                        ),
                        'ColumnName' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'example' => 'id',
                        ),
                        'TableName' => 
                        array (
                          'description' => '逻辑表名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'AutoIncrementColumn' => 
                        array (
                          'description' => '列是否自增，取值说明：
- **true**：自增。
- **false**：不自增。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'amv-bp1pke2pcfavw****',
                        ),
                        'PrimaryKey' => 
                        array (
                          'description' => '列是否为主键，取值说明：
- **true**：主键。
- **false**：非主键。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '逻辑库名。',
                          'type' => 'string',
                          'example' => 'adb_demo',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Schemas' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Schema' => 
                  array (
                    'description' => '数据库列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'amv-bp1pke2pcfavw****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '逻辑库名。',
                          'type' => 'string',
                          'example' => 'adb_demo',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C7EDB8E4-9769-4233-88C7-DCA4C9******\\",\\n  \\"Tables\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"test\\",\\n        \\"DBClusterId\\": \\"amv-bp1pke2pcfavw****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  },\\n  \\"Columns\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"bigint\\",\\n        \\"ColumnName\\": \\"id\\",\\n        \\"TableName\\": \\"test\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"amv-bp1pke2pcfavw****\\",\\n        \\"PrimaryKey\\": false,\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  },\\n  \\"Schemas\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"amv-bp1pke2pcfavw****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '枚举数据库列表',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeTables' => 
    array (
      'summary' => '查询指定数据库的表列表信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1xxxxxxxx47',
          ),
        ),
        2 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。
 
',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'description' => '表列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '表信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '表名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'amv-bp1xxxxxxxx47',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'adb_demo',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"test\\",\\n        \\"DBClusterId\\": \\"amv-bp1xxxxxxxx47\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '枚举数据库的表列表',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeSchemas' => 
    array (
      'summary' => '查询指定实例的数据库列表信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '190445',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads8FGISX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1xxxxxxxx47',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '25B56BC7-4978-40B3-9E48-4B7067******',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Schema' => 
                  array (
                    'description' => '数据库列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'amv-bp11q28kvl688****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'adb_demo',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25B56BC7-4978-40B3-9E48-4B7067******\\",\\n  \\"Items\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"amv-bp11q28kvl688****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '枚举实例的库列表',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeColumns' => 
    array (
      'summary' => '查询指定表的列列表信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1xxxxxxxx47',
          ),
        ),
        2 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。
 
',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
          ),
        ),
        3 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询表名。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'Schema of Response',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-XXX442913CEF',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Column' => 
                  array (
                    'description' => '列列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '列数据类型。',
                          'type' => 'string',
                          'example' => 'bigint',
                        ),
                        'ColumnName' => 
                        array (
                          'description' => '列名称。',
                          'type' => 'string',
                          'example' => 'id',
                        ),
                        'TableName' => 
                        array (
                          'description' => '表名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'AutoIncrementColumn' => 
                        array (
                          'description' => '列是否自增，取值说明：
- **true**：自增。
- **false**：不自增。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'amv-bp111m2cfrdl1****',
                        ),
                        'PrimaryKey' => 
                        array (
                          'description' => '列是否为主键，取值说明：
- **true**：主键。
- **false**：非主键。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'adb_demo',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.IllegalArgument',
            'errorMessage' => 'Invalid argument.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.InvalidPrivilege',
            'errorMessage' => 'No permissions.',
          ),
          2 => 
          array (
            'errorCode' => 'MDS.MetaSchemaAlreadyExist',
            'errorMessage' => 'The database already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'MDS.MetaSchemaNotExist',
            'errorMessage' => 'The database does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MDS.MetaTableAlreadyExist',
            'errorMessage' => 'The table already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'MDS.MetaTableNotExist',
            'errorMessage' => 'The table is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'MDS.InternalError',
            'errorMessage' => 'An internal MDS error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'MDS.MetaVisitError',
            'errorMessage' => 'Failed to access metadata.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-XXX442913CEF\\",\\n  \\"Items\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"bigint\\",\\n        \\"ColumnName\\": \\"id\\",\\n        \\"TableName\\": \\"test\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"amv-bp111m2cfrdl1****\\",\\n        \\"PrimaryKey\\": false,\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '枚举表的列列表',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'RenameSparkTemplateFile' => 
    array (
      'summary' => '重命名Spark模板文件。',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板文件ID。',
            'description' => '模板文件ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '重命名模板文件的名称。',
            'description' => '重命名模板文件的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'new_template_name',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '数据库ID。',
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-d*****',
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求的ID。',
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '16D332C4-ACEB-526A-9B53-2B708FED594A',
              ),
              'Data' => 
              array (
                'description' => '数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeeded' => 
                  array (
                    'title' => '是否重命名成功。',
                    'description' => '是否重命名成功。取值：

- True：成功。
- False：失败。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'True' => 'True',
                      'False' => 'False',
                    ),
                    'example' => 'True',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.InvalidParameter',
            'errorMessage' => 'Invalid parameter value: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.InvalidState',
            'errorMessage' => 'The object of the operation is in an invalid state: %s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.Forbidden',
            'errorMessage' => 'No permissions to access the resources: %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Spark.ObjectNotFound',
            'errorMessage' => 'The object is not found. More information: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Spark.TemplateFile.FileNotFound',
            'errorMessage' => 'The template file %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Spark.TemplateFile.TemplateNotFound',
            'errorMessage' => 'The template %s is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"16D332C4-ACEB-526A-9B53-2B708FED594A\\",\\n  \\"Data\\": {\\n    \\"Succeeded\\": true\\n  }\\n}","type":"json"}]',
      'title' => '重命名Spark模板文件',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。
> 如果华北1（青岛）、华南1（深圳）、华南3（广州）、中国香港发起请求时，遇到409错误，请联系技术支持。',
    ),
    'LoadSampleDataSet' => 
    array (
      'summary' => '调用LoadSampleDataSet接口加载内置数据集。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '湖仓版（3.0）集群ID。
> 调用[DescribeDBClusters](~~454250~~)接口查看AnalyticDB for MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amv-2ze0z517o1mgp66a',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FA31BE84-ABE8-554A-A769-5F860C34EE10',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'amv-2ze0z517o1mgp66a',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FA31BE84-ABE8-554A-A769-5F860C34EE10\\",\\n  \\"DBClusterId\\": \\"amv-2ze0z517o1mgp66a\\"\\n}","type":"json"}]',
      'title' => '加载内置数据集',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'ModifyBackupPolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行全量备份的开始时间，格式为HH:mmZ-HH:mmZ（UTC时间）。

> 时间范围限制为1小时。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '18:00Z-19:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份周期，多个取值用英文逗号（,）隔开。取值说明：
- **Monday**：周一。
- **Tuesday**：周二。
- **Wednesday**：周三。
- **Thursday**：周四。
- **Friday**：周五。
- **Saturday**：周六。
- **Sunday**：周日。

> 为保证数据安全，最少选择两个。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Monday,Wednesday,Friday,Sunday',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份保留天数，取值范围为：7~730。
> 本参数不填写，默认为7天。',
            'type' => 'string',
            'required' => false,
            'example' => '7',
            'default' => '7',
          ),
        ),
        4 => 
        array (
          'name' => 'EnableBackupLog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启日志（实时）备份。取值说明：
- **Enable**：开启。
- **Disable**：关闭。
> 本参数不填写，默认开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enable',
          ),
        ),
        5 => 
        array (
          'name' => 'LogBackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志（实时）数据备份保留天数，取值范围为：7~730。
> 本参数不填写，默认为7天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '730',
            'minimum' => '7',
            'example' => '7',
            'default' => '7',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPreferredBackupTime.Malformed',
            'errorMessage' => 'The specified parameter PreferredBackupTime is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPreferredBackupPeriod.Malformed',
            'errorMessage' => 'The specified parameter PreferredBackupPeriod is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidBackupRetentionPeriod.Malformed',
            'errorMessage' => 'The specified parameter BackupRetentionPeriod is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
      'title' => '修改集群备份策略',
      'summary' => '调用ModifyBackupPolicy接口修改湖仓版（3.0）集群的备份策略。',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeBackupPolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-uf6s7oa710rbu0x3b',
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
              'PreferredBackupPeriod' => 
              array (
                'description' => '数据备份周期，多个取值用英文逗号（,）隔开。取值：

- Monday：周一；
- Tuesday：周二；
- Wednesday：周三；
- Thursday：周四；
- Friday：周五；
- Saturday：周六；
- Sunday：周日。',
                'type' => 'string',
                'example' => 'Wednesday,Saturday',
              ),
              'LogBackupRetentionPeriod' => 
              array (
                'description' => '日志备份保留天数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'PreferredBackupTime' => 
              array (
                'description' => '数据备份时间，格式：HH:mmZ-HH:mmZ。',
                'type' => 'string',
                'example' => '15:00Z-16:00Z',
              ),
              'EnableBackupLog' => 
              array (
                'description' => '是否开启日志（实时）备份。取值说明：
- **Enable**：开启。
- **Disable**：关闭。',
                'type' => 'string',
                'example' => 'true',
              ),
              'BackupRetentionPeriod' => 
              array (
                'description' => '数据备份保留天数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PreferredBackupPeriod\\": \\"Wednesday,Saturday\\",\\n  \\"LogBackupRetentionPeriod\\": 7,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PreferredBackupTime\\": \\"15:00Z-16:00Z\\",\\n  \\"EnableBackupLog\\": \\"true\\",\\n  \\"BackupRetentionPeriod\\": 7\\n}","type":"json"}]',
      'title' => '查询集群自动备份策略',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeBackups' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~454250~~)接口查看目标地域下所有AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp18934i73vb5****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1679758862',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式：yyyy-MM-ddTHH:mmZ。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2011-06-01T16:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式：yyyy-MM-ddTHH:mmZ。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2023-02-20T02:30Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：

- 30；
- 50；
- 100

默认值：30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值：大于0且不超过Integer数据类型最大值的正整数。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
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
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '300',
              ),
              'PageSize' => 
              array (
                'description' => '本页备份集个数。',
                'type' => 'string',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CE17270B-F8F8-5A31-9DB4-DADDFDAD7940',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Backup' => 
                  array (
                    'description' => '备份集列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp11q28kvl688****',
                        ),
                        'BackupType' => 
                        array (
                          'description' => '备份类型。取值说明：
- **FullBackup**：全量备份。
- **IncrementalBackup**：增量备份。',
                          'type' => 'string',
                          'example' => 'FullBackup',
                        ),
                        'BackupStartTime' => 
                        array (
                          'description' => '备份开始时间。',
                          'type' => 'string',
                          'example' => '2022-06-01T16:00Z',
                        ),
                        'BackupSize' => 
                        array (
                          'description' => '备份文件大小，单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2167808',
                        ),
                        'BackupEndTime' => 
                        array (
                          'description' => '备份结束时间。',
                          'type' => 'string',
                          'example' => '2022-06-02T16:00Z',
                        ),
                        'BackupId' => 
                        array (
                          'description' => '备份集ID。',
                          'type' => 'string',
                          'example' => '32732****',
                        ),
                        'BackupMethod' => 
                        array (
                          'description' => '备份方法。只支持快照备份（Snapshot）。',
                          'type' => 'string',
                          'example' => 'Snapshot',
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
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": \\"300\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"CE17270B-F8F8-5A31-9DB4-DADDFDAD7940\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp11q28kvl688****\\",\\n        \\"BackupType\\": \\"FullBackup\\",\\n        \\"BackupStartTime\\": \\"2022-06-01T16:00Z\\",\\n        \\"BackupSize\\": 2167808,\\n        \\"BackupEndTime\\": \\"2022-06-02T16:00Z\\",\\n        \\"BackupId\\": \\"32732****\\",\\n        \\"BackupMethod\\": \\"Snapshot\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询备份集列表',
      'description' => '当前服务的接入地址请参见[服务接入点](~~612373~~)。',
    ),
    'DescribeStorageResourceUsage' => 
    array (
      'summary' => '调用DescribeStorageResourceUsage接口查询湖仓版（3.0）集群存储资源使用情况。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp10yt0gva71ei7d',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，UTC时间，格式：yyyy-MM-ddTHH:mmZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-08-22T01:06:00Z
',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mmZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-08-23T01:06:00Z
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
            'title' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'description' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEAW',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBClusterId' => 
                  array (
                    'description' => '湖仓版（3.0）集群ID。',
                    'type' => 'string',
                    'example' => 'amv-bp1bg858bo8c****',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '查询开始时间，UTC时间，格式：yyyy-MM-ddTHH:mmZ。',
                    'type' => 'string',
                    'example' => '2022-08-22T01:06:00Z
',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mmZ。',
                    'type' => 'string',
                    'example' => '2022-08-23T01:06:00Z
',
                  ),
                  'AcuInfo' => 
                  array (
                    'description' => '集群ACU资源使用情况。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '对应指标项取值的状态，取值说明：
- `TotalAcuNumber`：总ACU资源数。
- `ReservedAcuNumber`：预留资源ACU数。',
                          'type' => 'string',
                          'example' => 'TotalAcuNumber',
                        ),
                        'Values' => 
                        array (
                          'description' => '对应指标项在各时间点的具体取值。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '不同时间点下的性能值详情。',
                            'type' => 'string',
                            'example' => '16ACU',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEAW\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"DBClusterId\\": \\"amv-bp1bg858bo8c****\\",\\n    \\"StartTime\\": \\"2022-08-22T01:06:00Z\\\\n\\",\\n    \\"EndTime\\": \\"2022-08-23T01:06:00Z\\\\n\\",\\n    \\"AcuInfo\\": [\\n      {\\n        \\"Name\\": \\"TotalAcuNumber\\",\\n        \\"Values\\": [\\n          \\"16ACU\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询集群存储资源使用情况',
    ),
    'DescribeClusterResourceDetail' => 
    array (
      'summary' => '获取集群资源统计',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1jj9xqft1po****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'description' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '集群资源具体使用详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBClusterId' => 
                  array (
                    'description' => '湖仓版（3.0）集群ID。',
                    'type' => 'string',
                    'example' => 'amv-adbxxxxx',
                  ),
                  'ComputeResource' => 
                  array (
                    'description' => '计算预留资源。取值范围：0ACU～4096ACU，步长：16。1 ACU约等于1核4 GB。',
                    'type' => 'string',
                    'example' => '16ACU',
                  ),
                  'FreeComputeResource' => 
                  array (
                    'description' => '空闲计算预留资源。取值范围：0ACU～4096ACU，步长：16。1 ACU约等于1核4 GB。',
                    'type' => 'string',
                    'example' => '0ACU',
                  ),
                  'StorageResource' => 
                  array (
                    'description' => '存储预留资源。取值范围：0ACU～2064ACU，步长：24。1 ACU约等于1核4 GB。',
                    'type' => 'string',
                    'example' => '24ACU',
                  ),
                  'ResourceGroupList' => 
                  array (
                    'description' => '资源组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PoolId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '17',
                        ),
                        'PoolName' => 
                        array (
                          'description' => '资源组名称。',
                          'type' => 'string',
                          'example' => 'testadb',
                        ),
                        'PoolType' => 
                        array (
                          'description' => '资源组类型。',
                          'type' => 'string',
                          'example' => 'interactive',
                        ),
                        'MinComputeResource' => 
                        array (
                          'description' => '最小计算预留资源，单位为ACU。
',
                          'type' => 'string',
                          'example' => '16ACU',
                        ),
                        'MaxComputeResource' => 
                        array (
                          'description' => '最大计算预留资源，单位为ACU。',
                          'type' => 'string',
                          'example' => '128ACU',
                        ),
                        'PoolUsers' => 
                        array (
                          'description' => '资源组用户。',
                          'type' => 'string',
                          'example' => 'user1',
                        ),
                        'Status' => 
                        array (
                          'description' => '资源组状态，取值说明：
- **running**：运行中
- **deleting**：删除中
- **scaling**：变配中',
                          'type' => 'string',
                          'example' => 'running',
                        ),
                        'ClusterSizeResource' => 
                        array (
                          'description' => '预留参数(不涉及)',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'MinClusterCount' => 
                        array (
                          'description' => '预留参数（不涉及）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MaxClusterCount' => 
                        array (
                          'description' => '预留参数（不涉及）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'RunningClusterCount' => 
                        array (
                          'description' => '预留参数（不涉及）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ClusterMode' => 
                        array (
                          'description' => '预留参数（不涉及）',
                          'type' => 'string',
                          'required' => true,
                          'example' => '0',
                          'default' => 'Disable',
                        ),
                        'EnableSpot' => 
                        array (
                          'description' => '资源组是否开启竞价实例功能。开启竞价实例后资源单价降低，但是有概率被释放。取值：
- **True**：开启竞价实例功能。
- **False**：关闭竞价实例功能。

仅Job型资源组可以为True。',
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"DBClusterId\\": \\"amv-adbxxxxx\\",\\n    \\"ComputeResource\\": \\"16ACU\\",\\n    \\"FreeComputeResource\\": \\"0ACU\\",\\n    \\"StorageResource\\": \\"24ACU\\",\\n    \\"ResourceGroupList\\": [\\n      {\\n        \\"PoolId\\": 17,\\n        \\"PoolName\\": \\"testadb\\",\\n        \\"PoolType\\": \\"interactive\\",\\n        \\"MinComputeResource\\": \\"16ACU\\",\\n        \\"MaxComputeResource\\": \\"128ACU\\",\\n        \\"PoolUsers\\": \\"user1\\",\\n        \\"Status\\": \\"running\\",\\n        \\"ClusterSizeResource\\": \\"0\\",\\n        \\"MinClusterCount\\": 0,\\n        \\"MaxClusterCount\\": 0,\\n        \\"RunningClusterCount\\": 0,\\n        \\"ClusterMode\\": \\"0\\",\\n        \\"EnableSpot\\": true\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询集群资源具体使用详情',
    ),
    'DescribeJobResourceUsage' => 
    array (
      'summary' => '获取作业资源使用统计',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-uf6g8w25jacm7****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2023-02-04T03:45:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式：yyyy-MM-ddTHH:mmZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2023-03-17T16:00:00Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'description' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBClusterId' => 
                  array (
                    'description' => '湖仓版（3.0）集群ID。',
                    'type' => 'string',
                    'example' => 'amv-clusterxxx',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '开始时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                    'type' => 'string',
                    'example' => '2023-05-22T16:00:00Z',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '结束时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                    'type' => 'string',
                    'example' => '2023-05-23T16:00:00Z
',
                  ),
                  'JobAcuUsage' => 
                  array (
                    'description' => 'Job型资源组ACU使用情况。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'JobId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => '1592',
                        ),
                        'ResourceGroupName' => 
                        array (
                          'description' => 'Job型资源组名称。',
                          'type' => 'string',
                          'example' => 'job_default',
                        ),
                        'JobStartTime' => 
                        array (
                          'description' => '任务开始时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                          'type' => 'string',
                          'example' => '2023-05-22T16:00:00Z
',
                        ),
                        'JobEndTime' => 
                        array (
                          'description' => '任务结束时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                          'type' => 'string',
                          'example' => '2023-05-23T16:00:00Z',
                        ),
                        'AcuUsageDetail' => 
                        array (
                          'description' => 'ACU资源使用情况。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TotalAcuNumber' => 
                            array (
                              'description' => '总ACU资源数。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '32ACU',
                            ),
                            'ReservedAcuNumber' => 
                            array (
                              'description' => '预留资源ACU数。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '16ACU',
                            ),
                            'ElasticAcuNumber' => 
                            array (
                              'description' => '弹性资源ACU数。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '16ACU',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"DBClusterId\\": \\"amv-clusterxxx\\",\\n    \\"StartTime\\": \\"2023-05-22T16:00:00Z\\",\\n    \\"EndTime\\": \\"2023-05-23T16:00:00Z\\\\n\\",\\n    \\"JobAcuUsage\\": [\\n      {\\n        \\"JobId\\": \\"1592\\",\\n        \\"ResourceGroupName\\": \\"job_default\\",\\n        \\"JobStartTime\\": \\"2023-05-22T16:00:00Z\\\\n\\",\\n        \\"JobEndTime\\": \\"2023-05-23T16:00:00Z\\",\\n        \\"AcuUsageDetail\\": {\\n          \\"TotalAcuNumber\\": 0,\\n          \\"ReservedAcuNumber\\": 0,\\n          \\"ElasticAcuNumber\\": 0\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询任务型资源使用情况',
    ),
    'DescribeClusterResourceUsage' => 
    array (
      'summary' => '获取实例资源统计',
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
      'operationType' => 'write',
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。

> 您可以调用[DescribeDBClusters](~~612397~~)接口查看AnalyticDB MySQL湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，UTC时间，格式：<i>yyyy-MM-ddTHH:mmZ</i>。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-11-29T10:20Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，UTC时间，格式：yyyy-MM-ddTHH:mmZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-08-22T01:06:00Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'description' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEAW',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '集群资源使用详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBClusterId' => 
                  array (
                    'description' => '湖仓版（3.0）集群ID。',
                    'type' => 'string',
                    'example' => 'amv-uf6dj23rt5zo9s9d',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '查询开始时间，UTC时间，格式：<i>yyyy-MM-ddTHH:mmZ</i>。',
                    'type' => 'string',
                    'example' => '2023-03-14T03:42:15Z',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '查询结束时间，UTC时间，格式：<i>yyyy-MM-ddTHH:mmZ</i>。',
                    'type' => 'string',
                    'example' => '2023-03-23T02:31Z',
                  ),
                  'AcuInfo' => 
                  array (
                    'description' => '集群ACU资源使用情况。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '对应指标项取值的状态，取值说明：
- `TotalAcuNumber`：总ACU资源数。
- `ReservedAcuNumber`：预留资源ACU数。
- `ReservedAcuUsageNumber`：已使用的预留资源ACU数。',
                          'type' => 'string',
                          'example' => 'TotalAcuNumber',
                        ),
                        'Values' => 
                        array (
                          'description' => '对应指标项在各时间点的具体取值。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '不同时间点下的性能值详情。',
                            'type' => 'string',
                            'example' => '16.0',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEAW\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"DBClusterId\\": \\"amv-uf6dj23rt5zo9s9d\\",\\n    \\"StartTime\\": \\"2023-03-14T03:42:15Z\\",\\n    \\"EndTime\\": \\"2023-03-23T02:31Z\\",\\n    \\"AcuInfo\\": [\\n      {\\n        \\"Name\\": \\"TotalAcuNumber\\",\\n        \\"Values\\": [\\n          \\"16.0\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询集群资源使用情况',
    ),
    'DescribeComputeResourceUsage' => 
    array (
      'summary' => '获取实例计算资源使用统计',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2023-02-04T03:45:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2023-02-05T03:45:00Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'description' => 'PlainResponse<DescribeElasticPlanAttributeResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEAW',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'amv-clusterxxx',
                  ),
                  'ResourceGroupType' => 
                  array (
                    'description' => '资源组的类型。',
                    'type' => 'string',
                    'example' => 'interative',
                  ),
                  'ResourceGroupName' => 
                  array (
                    'description' => '资源组名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '查询开始时间，格式为：yyyy-MM-ddTHH:mmZ。',
                    'type' => 'string',
                    'example' => '2023-04-24T07:00:00Z',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '查询结束时间，格式：<i>yyyy-MM-ddTHH:mmZ</i>。',
                    'type' => 'string',
                    'example' => '2023-06-07T02:37:00Z',
                  ),
                  'AcuInfo' => 
                  array (
                    'description' => '集群ACU资源使用情况。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '对应指标项取值的状态，取值说明：
- `TotalAcuNumber`：总ACU资源数。
- `ReservedAcuNumber`：预留资源ACU数。
- `ReservedAcuUsageNumber`：已使用的预留资源ACU数。',
                          'type' => 'string',
                          'example' => 'TotalAcuNumber',
                        ),
                        'Values' => 
                        array (
                          'description' => '对应指标项在各时间点取值列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '对应指标项在各时间点的具体取值。',
                            'type' => 'string',
                            'example' => '16.0',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEAW\\",\\n  \\"Code\\": 200,\\n  \\"Data\\": {\\n    \\"DBClusterId\\": \\"amv-clusterxxx\\",\\n    \\"ResourceGroupType\\": \\"interative\\",\\n    \\"ResourceGroupName\\": \\"test\\",\\n    \\"StartTime\\": \\"2023-04-24T07:00:00Z\\",\\n    \\"EndTime\\": \\"2023-06-07T02:37:00Z\\",\\n    \\"AcuInfo\\": [\\n      {\\n        \\"Name\\": \\"TotalAcuNumber\\",\\n        \\"Values\\": [\\n          \\"16.0\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询资源组计算资源使用情况',
    ),
    'DescribeApsResourceGroups' => 
    array (
      'summary' => '调用DescribeApsResourceGroups接口获取数据同步时所用资源组的详细信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'none',
        'abilityTreeCode' => '146751',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREads1II0UT',
          1 => 'FEATUREadsY28JLD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL湖仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~612397~~)接口查看湖仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amv-bp1t6rym21****',
          ),
        ),
        2 => 
        array (
          'name' => 'WorkloadId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据同步任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'aps-hz1686v37sx****',
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
            'description' => '响应模式。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6FC370D7-1D4C-5A8E-805E-F73366382C66',
              ),
              'Message' => 
              array (
                'description' => '调用结果的附加信息。取值说明：
- 请求正常，返回Success。
- 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。
',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '资源组信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Step' => 
                  array (
                    'description' => '资源组的步长，单位ACU。
- 当GroupType为**Interactive**时，步长为16 ACU。
- 当GroupType为**Job**时，步长为8 ACU。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '8',
                  ),
                  'ResourceGroups' => 
                  array (
                    'description' => '资源组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源组列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CuOptions' => 
                        array (
                          'description' => '资源梯度值列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '资源梯度值。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '无',
                          ),
                        ),
                        'MaxComputeResource' => 
                        array (
                          'description' => '最大计算预留资源，单位ACU。
- 当GroupType为**Interactive**时，计算预留资源最大为集群当前未分配资源，步长为16 ACU。
- 当GroupType为**Job**时，计算预留资源最大为集群当前未分配资源，步长为8 ACU。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '512',
                        ),
                        'LeftComputeResource' => 
                        array (
                          'description' => '剩余计算资源，单位ACU。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '512',
                        ),
                        'MinComputeResource' => 
                        array (
                          'description' => '最小计算预留资源，单位ACU。
- 当GroupType为**Interactive**时，计算预留资源最小为16 ACU。
- 当GroupType为**Job**时，计算预留资源最小为0 ACU。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'GroupName' => 
                        array (
                          'description' => '资源组名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'GroupType' => 
                        array (
                          'description' => '资源组类型，取值：
- **Interactive**
- **Job**
> 关于湖仓版资源组的详细信息，请参见[资源组介绍（湖仓版）](~~428610~~)。',
                          'type' => 'string',
                          'example' => 'Job',
                        ),
                        'Available' => 
                        array (
                          'description' => '资源组是否可用。取值说明：
- **True**：可用。
- **False**：不可用。',
                          'type' => 'boolean',
                          'example' => 'True',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。取值说明：
- **True**：成功。
- **False**：失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6FC370D7-1D4C-5A8E-805E-F73366382C66\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"Step\\": 8,\\n    \\"ResourceGroups\\": [\\n      {\\n        \\"CuOptions\\": [\\n          0\\n        ],\\n        \\"MaxComputeResource\\": 512,\\n        \\"LeftComputeResource\\": 512,\\n        \\"MinComputeResource\\": 0,\\n        \\"GroupName\\": \\"test\\",\\n        \\"GroupType\\": \\"Job\\",\\n        \\"Available\\": true\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DescribeApsResourceGroupsResponse>\\n    <RequestId>6FC370D7-1D4C-5A8E-805E-F73366382C66</RequestId>\\n    <Message>Success</Message>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <Step>8</Step>\\n        <ResourceGroups>\\n            <MaxComputeResource>512</MaxComputeResource>\\n            <MinComputeResource>0</MinComputeResource>\\n            <GroupName>test</GroupName>\\n            <GroupType>Job</GroupType>\\n            <Available>true</Available>\\n        </ResourceGroups>\\n    </Data>\\n    <Success>true</Success>\\n</DescribeApsResourceGroupsResponse>","errorExample":""}]',
      'title' => '查询资源组信息',
      'description' => '- 地域的公网接入地址：`adb.<region-id>.aliyuncs.com`。示例：`adb.cn-hangzhou.aliyuncs.com`。
- 地域的VPC接入地址：`adb-vpc.<region-id>.aliyuncs.com`。示例：`adb-vpc.cn-hangzhou.aliyuncs.com`。',
    ),
    'DescribeExcessivePrimaryKeys' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '217360',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsDAZVRM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL湖仓版集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL湖仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2019-06-01T16:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2019-06-01T16:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围如下：
* **30**（默认值）。
* **50**。
* **100**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '30',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：
- **zh（默认值）**：简体中文。
- **en**：英文。
- **ja**：日文。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        7 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按指定字段排序，json格式：JSON数组，有序，按顺序输入排列字段和升降序类型：

如：

```
[

    {

        "Field":"Name",

        "Type":"Asc"

    }

]
```

其中Field表示需要排序的字段名，目前仅支持对"Name" 字段排序。
Type表示排序类型 Desc为降序，Asc为升序

均不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Field":"TableName", "Type": "Desc" }]',
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
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'string',
                'example' => '300',
              ),
              'PageNumber' => 
              array (
                'description' => '页号，和传入的值一致。',
                'type' => 'integer',
                'format' => 'int32',
                'maximum' => '2147483647',
                'minimum' => '1',
                'example' => '1',
                'default' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值范围如下：
* **30**（默认值）。
* **50**。
* **100**。',
                'type' => 'integer',
                'format' => 'int32',
                'maximum' => '100',
                'minimum' => '10',
                'example' => '30',
                'default' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '863D51B7-5321-41D8-A0B6-A088B0******',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-bp1ub9grke1****',
              ),
              'Tables' => 
              array (
                'description' => '主键过多表列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TableName' => 
                    array (
                      'description' => '表名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'SchemaName' => 
                    array (
                      'description' => '数据库名。',
                      'type' => 'string',
                      'example' => 'adb_demo',
                    ),
                    'ColumnCount' => 
                    array (
                      'description' => '总列数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '21',
                    ),
                    'PrimaryKeyCount' => 
                    array (
                      'description' => '主键个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'PrimaryKeyColumns' => 
                    array (
                      'description' => '主键字段个数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'SpaceRatio' => 
                    array (
                      'description' => '表空间占比，单位：%。

> 计算公式为：表空间占比 = (表总数据量 / 实例总数据量) * 100。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '23',
                    ),
                    'TotalSize' => 
                    array (
                      'description' => '冷数据总量，单位：Byte。

> 计算公式为：冷数据总量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'PrimaryKeyIndexSize' => 
                    array (
                      'description' => '主键索引数据量，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '222',
                    ),
                  ),
                ),
              ),
              'DetectionItems' => 
              array (
                'description' => '检测项及检测结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '检测项及检测结果列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '检测项名字。',
                      'type' => 'string',
                      'example' => '主键过多检测',
                    ),
                    'Message' => 
                    array (
                      'description' => '检测结果信息。',
                      'type' => 'string',
                      'example' => '检测到多个表存在主键过多的问题',
                    ),
                    'Status' => 
                    array (
                      'description' => '检测结果状态。',
                      'type' => 'string',
                      'example' => 'NORMAL
WARNNING
CRITICAL',
                    ),
                  ),
                ),
              ),
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => '{
    "PolicyType": "AccountLevelIdentityBasedPolicy",
    "AuthPrincipalOwnerId": "1906102576997697",
    "EncodedDiagnosticMessage": "AQIBIAAAAOPdwKY2QLOvgMEc7SkkoJfj1kvZwsaRqNYMh10Tv0wTe0fCzaCdrvgazfNb0EnJKETgXyhR+3BIQjx9WAqZryejBsp1Bl4qI5En/D9dEhcXAtKCxCmE2kZCiEzpy8BoEUt+bs0DmlaGWO5xkEpttypLIB4rUhDvZd+zwPg4EXk4KSSWSWsurxtqDkKEMshKlQFBTKvJcNqPqHV6lwR4INiAGjIvK1ngXxN1O+6ORRB6A8YvztEOGywOk81ZmuNk0YrNy+qk7+UVDTHeXKsy8h9e/ePY/LMidj0RCmDpo/YpCumd0UGe0qEPe2U+UJAm/+UHlnEFLVg6BP3yIB5D++MCy7mgWm8Kwyhk62IeYly4hQ+5IpXjkh1GQXuDgLVVPVpxEek9n30vnCUL4KsaMgfa7dgojb+3TM8xGsD2zVK5STJNrsXclscIJEqyNXd7CBYiRJVZi1HPO6drN9WW0chLpCSTgjO8n0bNanZaxXKumW9PSwV58UoSFASeMWfZK3TLngX+oq8nGmnTwcJosVjfF4RGzAnS1IXt0Q9N2WHDnpwyLBU/nOz7Hsy8IZ+h+OVjsBTXSM9688/vOF707a5mNzpETvQeGRcua3A5livcKAM2cML0yeUs/Zyj/+BGqtVa+wektspDHC/CECh6R5lxQjRmUdPawY8VDs2onmdLuEH8DdmYt+Yv/jBFBUMWOyAluzkPYcX5nuQKouCIUJUFTSbsJsuH5CTIh7Ls5rbmkj+T1qTVz8gnDR8LxwaqoMSna+elXgVyOOxXtMkenVntsmoC3p/4G7yTPL1hu8JyWGIIvZHZGGLXGEH7FeSuMV8buKxPGFWG3arG8e9LGvDdz5dgTien4y6G5AQ0o1iQdXDos5VWdH3u7k5PrsvdEOpvMi6uSd8a42na80FsYlgGlwM5upydcWUC5Un2HCkJpT1xgk2L6shdVTrK6bidRrqE784FhW9bBQePzGaxSupPENZya0VUctRt+7uq3QwIn4y5jzjgX0E0jgmqPrgiVDjBesMQZYfGPCGysWYWYzfoh+G6V7N2VVGtNnGUwNWzM0WJBPONAgxPv+AmixFRCQ==",
    "AuthPrincipalType": "SubUser",
    "AuthPrincipalDisplayName": "202515810214480629",
    "NoPermissionType": "ImplicitDeny",
    "AuthAction": "adb:DescribeExcessivePrimaryKeys"
  }',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": \\"300\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"863D51B7-5321-41D8-A0B6-A088B0******\\",\\n  \\"DBClusterId\\": \\"am-bp1ub9grke1****\\",\\n  \\"Tables\\": [\\n    {\\n      \\"TableName\\": \\"test\\",\\n      \\"SchemaName\\": \\"adb_demo\\",\\n      \\"ColumnCount\\": 21,\\n      \\"PrimaryKeyCount\\": 3,\\n      \\"PrimaryKeyColumns\\": \\"2\\",\\n      \\"SpaceRatio\\": 23,\\n      \\"TotalSize\\": 4,\\n      \\"PrimaryKeyIndexSize\\": 222\\n    }\\n  ],\\n  \\"DetectionItems\\": [\\n    {\\n      \\"Name\\": \\"主键过多检测\\",\\n      \\"Message\\": \\"检测到多个表存在主键过多的问题\\",\\n      \\"Status\\": \\"NORMAL\\\\nWARNNING\\\\nCRITICAL\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"{\\\\n    \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",\\\\n    \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"1906102576997697\\\\\\",\\\\n    \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"AQIBIAAAAOPdwKY2QLOvgMEc7SkkoJfj1kvZwsaRqNYMh10Tv0wTe0fCzaCdrvgazfNb0EnJKETgXyhR+3BIQjx9WAqZryejBsp1Bl4qI5En/D9dEhcXAtKCxCmE2kZCiEzpy8BoEUt+bs0DmlaGWO5xkEpttypLIB4rUhDvZd+zwPg4EXk4KSSWSWsurxtqDkKEMshKlQFBTKvJcNqPqHV6lwR4INiAGjIvK1ngXxN1O+6ORRB6A8YvztEOGywOk81ZmuNk0YrNy+qk7+UVDTHeXKsy8h9e/ePY/LMidj0RCmDpo/YpCumd0UGe0qEPe2U+UJAm/+UHlnEFLVg6BP3yIB5D++MCy7mgWm8Kwyhk62IeYly4hQ+5IpXjkh1GQXuDgLVVPVpxEek9n30vnCUL4KsaMgfa7dgojb+3TM8xGsD2zVK5STJNrsXclscIJEqyNXd7CBYiRJVZi1HPO6drN9WW0chLpCSTgjO8n0bNanZaxXKumW9PSwV58UoSFASeMWfZK3TLngX+oq8nGmnTwcJosVjfF4RGzAnS1IXt0Q9N2WHDnpwyLBU/nOz7Hsy8IZ+h+OVjsBTXSM9688/vOF707a5mNzpETvQeGRcua3A5livcKAM2cML0yeUs/Zyj/+BGqtVa+wektspDHC/CECh6R5lxQjRmUdPawY8VDs2onmdLuEH8DdmYt+Yv/jBFBUMWOyAluzkPYcX5nuQKouCIUJUFTSbsJsuH5CTIh7Ls5rbmkj+T1qTVz8gnDR8LxwaqoMSna+elXgVyOOxXtMkenVntsmoC3p/4G7yTPL1hu8JyWGIIvZHZGGLXGEH7FeSuMV8buKxPGFWG3arG8e9LGvDdz5dgTien4y6G5AQ0o1iQdXDos5VWdH3u7k5PrsvdEOpvMi6uSd8a42na80FsYlgGlwM5upydcWUC5Un2HCkJpT1xgk2L6shdVTrK6bidRrqE784FhW9bBQePzGaxSupPENZya0VUctRt+7uq3QwIn4y5jzjgX0E0jgmqPrgiVDjBesMQZYfGPCGysWYWYzfoh+G6V7N2VVGtNnGUwNWzM0WJBPONAgxPv+AmixFRCQ==\\\\\\",\\\\n    \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",\\\\n    \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"202515810214480629\\\\\\",\\\\n    \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",\\\\n    \\\\\\"AuthAction\\\\\\": \\\\\\"adb:DescribeExcessivePrimaryKeys\\\\\\"\\\\n  }\\"\\n}","type":"json"}]',
      'title' => '检测主键过多表',
      'summary' => '查看集群存在主键过多的表信息。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'adb.ap-southeast-7.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'adb.cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'adb.cn-chengdu.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'adb.ap-northeast-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'adb.ap-northeast-2.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'adb.ap-southeast-2.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'adb.ap-southeast-3.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'adb.ap-southeast-5.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'adb.eu-west-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'adb.eu-central-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'adb.ap-south-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'adb.ap-northeast-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'adb.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'adb.aliyuncs.com',
    ),
  ),
);